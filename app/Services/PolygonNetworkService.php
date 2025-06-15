<?php

namespace App\Services;

use Web3\Web3;
use Web3\Contract;
use Web3\Providers\HttpProvider;
use Web3\RequestManagers\HttpRequestManager;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Web3\Utils;

/**
 * PolygonNetworkService handles interactions with the Polygon blockchain network.
 * 
 * This service provides functionality to:
 * 1. Update token sale prices on smart contracts
 * 2. Fetch and format native blockchain transactions
 * 3. Fetch and format token transfer transactions
 * 
 * The service uses Web3 for blockchain interactions and GuzzleHttp for API calls
 * to Polygonscan's API endpoints.
 */
class PolygonNetworkService
{
    /** @var string Polygonscan API key */
    protected $apiKey;
    
    /** @var string Polygonscan API endpoint */
    protected $apiEndpoint;
    
    /** @var Web3 Web3 instance for blockchain interaction */
    protected $web3;
    
    /** @var Contract Smart contract instance */
    protected $contract;
    
    /** @var string Wallet address for transactions */
    protected $account;
    
    /** @var string Private key for transaction signing */
    protected $privateKey;
    
    /** @var string Smart contract address */
    protected $contractAddress;
    
    /** @var Client GuzzleHttp client for API requests */
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = config('services.polygonscan.api_key');
        $this->apiEndpoint = config('services.polygonscan.api');
        $this->web3 = new Web3(new HttpProvider(new HttpRequestManager('https://rpc.ankr.com/polygon_amoy', 10)));
         
        // Load the ABI from the TokenICO.json file
        $abiPath = storage_path('app/TokenICO.json');
        $abiJson = file_get_contents($abiPath);
        $abiArray = json_decode($abiJson, true);
        $abi = $abiArray['abi'];

        $this->contract = new Contract($this->web3->provider, $abi);
        $this->contractAddress = config('services.smartcontract.address');
        $this->account = config('services.smartcontract.wallet_address');
        $this->privateKey = config('services.smartcontract.wallet_private_key');
     
    }


    /**
     * Updates the token sale price in the smart contract
     * 
     * @param string|int $newPrice The new token sale price to set
     * @throws \Exception If the transaction fails
     * @return mixed Transaction receipt
     */
   

    /**
     * Retrieves both native and token transactions for a contract address
     * 
     * @param string $contractAddress The contract address to query
     * @return array Array containing 'nativeTransactions' and 'tokenTransfers'
     */
    public function getContractTransactions($contractAddress)
    {
       
        $nativeTransactions = $this->getNativeTransactions($contractAddress);
        $tokenTransfers = $this->getTokenTransfers($contractAddress);

        return [
            'nativeTransactions' => $nativeTransactions,
            'tokenTransfers' => $tokenTransfers,
        ];
    }

    /**
     * Fetches native blockchain transactions for a contract address
     * 
     * @param string $contractAddress The contract address to query
     * @return array Formatted array of native transactions
     * @throws \Exception If API request fails
     */
    private function getNativeTransactions($contractAddress)
    {
        
        $response = $this->client->get($this->apiEndpoint,[
            'query' => [
                'module' => 'account',
                'action' => 'txlist',
                'address' => $contractAddress,
                'startblock' => 0,
                'endblock' => 99999999,
                'sort' => 'desc', // Sort in descending order
                'apikey' => $this->apiKey,
            ],
        ]);

        $data = json_decode($response->getBody(), true);

        // Log the response for debugging
        Log::info('Native Transactions API Response: ', $data);

        if (!isset($data['status']) || $data['status'] !== '1') {
            throw new \Exception('Error fetching native transactions: ' . ($data['message'] ?? 'Unknown error'));
        }

        // Extract transactions and include the amount
        return array_map(function ($tx) {
            return [
                'hash' => $tx['hash'],
                'from' => $tx['from'],
                'to' => $tx['to'],
                'value' => $this->formatPolValue($tx['value']), // Convert Wei to POL and format
                'blockNumber' => $tx['blockNumber'],
                'timeStamp' => Carbon::createFromTimestamp($tx['timeStamp'])->diffForHumans(), // Convert to human-readable format
                'gas' => $tx['gas'],
                'gasPrice' => $tx['gasPrice'],
                'isError' => $tx['isError'],
                'txreceipt_status' => $tx['txreceipt_status'],
            ];
        }, $data['result']);
    }

    /**
     * Fetches token transfer transactions for a contract address
     * 
     * @param string $contractAddress The contract address to query
     * @return array Formatted array of token transfers
     * @throws \Exception If API request fails
     */
    private function getTokenTransfers($contractAddress)
    {

        $response = $this->client->get($this->apiEndpoint, [
            'query' => [
                'module' => 'account',
                'action' => 'tokentx',
                'address' => $contractAddress,
                'startblock' => 0,
                'endblock' => 99999999,
                'sort' => 'desc', // Sort in descending order
                'apikey' => $this->apiKey,
            ],
        ]);

        $data = json_decode($response->getBody(), true);

        // Log the response for debugging
        Log::info('Token Transfers API Response: ', $data);

        if (!isset($data['status']) || $data['status'] !== '1') {
            throw new \Exception('Error fetching token transfers: ' . ($data['message'] ?? 'Unknown error'));
        }

        // Extract token transfers and include the amount
        return array_map(function ($tx) {
            return [
                'hash' => $tx['hash'],
                'from' => $tx['from'],
                'to' => $tx['to'],
                'value' => $this->formatTokenValue($tx['value'], $tx['tokenDecimal']), // Convert token value
                'tokenName' => $tx['tokenName'],
                'tokenSymbol' => $tx['tokenSymbol'],
                'blockNumber' => $tx['blockNumber'],
                'timeStamp' => Carbon::createFromTimestamp($tx['timeStamp'])->diffForHumans(), // Convert to human-readable format
            ];
        }, $data['result']);
    }

    /**
     * Converts Wei to POL (Polygon) with proper decimal places
     * 
     * @param string $wei Amount in Wei
     * @return string Amount in POL with 18 decimal places
     */
    private function weiToPol($wei)
    {
        return bcdiv($wei, bcpow('10', 18), 18); // Convert Wei to POL
    }

    /**
     * Formats POL value for display
     * 
     * @param string $wei Amount in Wei
     * @return string Formatted POL amount with 6 decimal places
     */
    private function formatPolValue($wei)
    {
        $pol = $this->weiToPol($wei);
        return number_format($pol, 6, '.', ''); // Format to 6 decimal places
    }

    /**
     * Formats token value based on token decimals
     * 
     * @param string $value Raw token value
     * @param int $decimals Number of decimals for the token
     * @return string Formatted token amount with 6 decimal places
     */
    private function formatTokenValue($value, $decimals)
    {
        $tokenValue = bcdiv($value, bcpow('10', $decimals), $decimals);
        return number_format($tokenValue, 6, '.', ''); // Format to 6 decimal places
    }
}