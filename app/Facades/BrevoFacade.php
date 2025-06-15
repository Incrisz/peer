<?php

namespace App\Facades;

use Brevo\Client\Api\ContactsApi;
use Brevo\Client\Configuration;
use Brevo\Client\Model\CreateContact;

class BrevoFacade
{
    /**
     * Get location as WKT from Geometry for given field.
     *
     * @param string $column
     *
     * @return string
     */
    public static function createContact($email)
    {
        $config =  Configuration::getDefaultConfiguration()->setApiKey('api-key', env('BREVO_API_KEY') );
        
        $apiInstance = new ContactsApi(
            new \GuzzleHttp\Client(),
            $config
        );

        $createContact = new CreateContact(); // Values to create a contact
        $createContact['email'] = $email;
        $createContact['listIds'] = [ (int)env('BREVO_CONTACT_LIST_IDS') ];

        try {
            $result = $apiInstance->createContact($createContact);
            return $result;
        } catch (\Exception $e) {
            return $e;
            echo 'Exception when calling ContactsApi->createContact: ', $e->getMessage(), PHP_EOL;
        }

    }

}