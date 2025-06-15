@extends('voyager::master')

@section('page_title', __('pages'))

@section('content')
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="container">
    <div class="col-md-12">
        <h1>ICO Presale Timer </h1>

            <form action="{{ route('ioc.store.countdown', $timer?->id) }}" method="POST">
                @csrf

                <div class="form-group row">
                    <div class="col-6">

                        <label for="ico_button_text">Date </label>
                        <input type="date" name="date" id="ico_button_text" class="form-control" value="{{$timer?->date}}">
                    </div>

                </div>
                <div class="form-group row">
                    <div class="col-6">

                        <label for="ico_button_text">Time </label>
                        <input type="time" name="time" id="ico_button_text" class="form-control" value="{{$timer?->time}}">
                    </div>

                </div>


                <div class="form-group row">
                    <label for="ico_button_text">Post Countdown Price</label>
                    <input type="text" name="post_countdown_price" id="ico_button_text" class="form-control" value="{{$timer?->post_countdown_price}}">
                </div>


                <button type="submit" class="btn btn-primary">Save</button>
            </form>

    </div>
    <div class="col-md-12">
        <h1>ICO Presale ( Smart contract Info) </h1>

            <form action="{{ route('ioc.store.presale.address', $address?->id) }}" method="POST">
                @csrf

                 <div class="form-group row">
                    <div class="col-6">

                        <label for="ico_button_text">Presale Address </label>
                        <input type="text" name="presale_address" id="ico_button_text" class="form-control" value="{{$address?->presale_address}}">
                    </div>

                </div> 
               <div class="form-group row">
                    <div class="col-6">

                        <label for="ico_button_text">Token Address </label>
                        <input type="text" name="token_address" id="ico_button_text" class="form-control" value="{{$address?->token_address}}">
                    </div>

                </div> 


                <div class="form-group row">
                    <label for="ico_button_text">Ioc Token Price</label>
                    <input type="text" name="ioc_token_price" id="ico_button_text" class="form-control" value="{{$address?->ioc_token_price}}">
                </div>


                <button type="submit" class="btn btn-primary">Save</button>
            </form>

    </div>
    <div class="row justify-content-center" style="display: flex; flex-direction: row;flex-wrap: wrap;">
        <div class="col-md-12">


            <div class="row">

                <div class="container-fluid">
                    <h1>
                        ICO Transaction History
                    </h1>

                    <div class="d-flex justify-content-between align-items-center">

                        <div class="justify-content-between row">
                            <div class="col-lg-6">
                                {{-- <button class="btn nav-switch" data-target="container-transactions">
                                    <span>Native Transactions</span>
                                </button> --}}
                                <button class="btn nav-switch" data-target="container-transfers">
                                    <span>Transfers transactions (ERC-20 Token)</span>
                                </button>
                            </div>
                            

                            <div class="col-lg-3">
                                
                            </div>

                            <div style="padding-left: 190px" class="col-lg-3">
                                    <a href="{{ route('export.transactions.csv') }}" class="btn btn-success">
                                        <i class="voyager-download"></i> Export
                                    </a>
                            </div>

                            
                                
                            
                        </div>
                    </div>
                    


                </div>
            </div>

            <!-- Transactions Table -->
            <div id="container-transactions" class="data-container">
                <div style="overflow-x: auto; white-space: nowrap;"> <!-- Add scrollable wrapper -->
                    <table id="table-transactions" class="table container-lg table-hover dataTable no-footer" role="grid" aria-describedby="dataTable_info">
                        <thead>
                            <tr role="row">
                                <th>#</th>
                                <th>Trx Hash</th>
                                <th>Block</th>
                                <th><i class="voyager-wallet">Wallet From</i></th>
                                <th><i class="voyager-wallet">Wallet To</i></th>
                                <th>Spent Amount (Token)</th>
                                <th>Date</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($nativeTransactions as $key => $trx)
                            <tr role="row" class="{{ (int)$key % 2 === 0 ? 'even' : 'odd' }}">
                                <td>{{ $key + 1 }}</td>
                                <td class="py-2 px-4 border-b ">
                                    <a href="{{ config('services.polygonscan.network') . '/tx/' . ($trx['hash'] ?? 'N/A') }}" target="_blank" class="text-blue-500 hover:text-blue-700 no-underline">
                                        {{ $trx['hash'] ?? 'N/A' }}
                                    </a>
                                    
                                </td>
                                <td class="text-primary">{{ $trx['blockNumber'] ?? 'N/A' }}</td>
                                <td>{{ $trx['from'] ?? 'N/A' }}</td>
                                <td class="text-primary">{{ $trx['to'] ?? 'N/A' }}</td>
                                <td>{{ $trx['value'] ?? '0' }}</td>
                                <td>{{ isset($trx['timeStamp']) ? \Carbon\Carbon::parse($trx['timeStamp'])->diffForHumans() : 'N/A' }}</td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div>
                    {!! $nativeTransactions->appends(['page' => request('page')])->links('vendor.pagination.bootstrap-4') !!}
                </div>
            </div>
            

            <!-- Transfers Table -->
            <div id="container-transfers" class="data-container">
                <div style="overflow-x: auto; white-space: nowrap;"> <!-- Add scrollable wrapper -->
                <table id="table-transfer" class="table container-lg table-hover dataTable no-footer" role="grid"
                    aria-describedby="dataTable_info">
                    <thead>
                        <tr role="row">
                            <th>#</th>
                            <th>Trx Hash</th>
                            <th>Block</th>
                            <th>Token Symbol</th>
                            <th>Token Name</th>
                            <th>Bought Amount (Token)</th>
                            <th><i class="voyager-wallet">Wallet From</i></th>
                            <th><i class="voyager-wallet">Wallet To</i></th>
                           
                           
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tokenTransfers as $key => $trx)
                        <tr role="row" class="{{ (int)$key % 2 === 0 ? 'even' : 'odd' }}">
                            <td>{{ $key + 1 }}</td>
                            <td class="py-2 px-4 border-b ">
                                <a href="{{ config('services.polygonscan.network') . '/tx/' . ($trx['hash'] ?? 'N/A') }}" target="_blank" class="text-blue-500 hover:text-blue-700 no-underline">
                                    {{ $trx['hash'] ?? 'N/A' }}
                                </a>
                                
                            </td>
                            <td class="text-primary">{{ $trx['blockNumber'] ?? 'N/A' }}</td>
                            <td class="text-primary">{{ $trx['tokenSymbol'] ?? 'N/A' }} </td>
                            <td class="text-primary">{{ $trx['tokenName'] ?? 'N/A' }} </td>
                            <td>{{ number_format((float) $trx['value'], 0) }} PNS</td>
                            <td>{{ $trx['from'] ?? 'N/A' }}</td>
                            <td class="text-primary">{{ $trx['to'] ?? 'N/A' }}</td>
                          
                            <td>{{ isset($trx['timeStamp']) ? \Carbon\Carbon::parse($trx['timeStamp'])->diffForHumans() : 'N/A' }}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                <div>
                    {!! $tokenTransfers->appends(['page' =>
                    request('page')])->links('vendor.pagination.bootstrap-4') !!}
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center" style="display: flex; flex-direction: row;flex-wrap: wrap;">
        <div class="col-md-12">
            <div class="row">
                <div class="container-fluid">
                    <h1>
                        ICO Rounds
                    </h1>
                    <button class="btn btn-success btn-add-new" data-toggle="modal" data-target="#iocRoundModal">
                        <i class="voyager-plus"></i> <span>Add New</span>
                    </button>
                </div>
            </div>

            <table id="dataTable" class="table table-hover dataTable no-footer" role="grid"
                aria-describedby="dataTable_info">
                <thead>
                    <tr role="row">
                        <th>#</th>
                        <th>Title</th>
                        <th>Stake price</th>
                        <th>Raised price</th>
                        <th>Sold Allocation</th>
                        <th>Currency</th>

                        <th class="text-right actions dt-not-orderable sorting_disabled" rowspan="1" colspan="1"
                            aria-label="Actions" style="width: 291.4px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($iocs as $key => $ioc)
                    <tr role="row" class="{{ $key % 2 == 0 ? 'even' : 'odd' }}">
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $ioc?->title }}</td>
                        <td>{{ $ioc?->stake_price }}</td>
                        <td>{{ $ioc?->raised_price }}</td>
                        <td>{{ $ioc?->sold_allocation }}</td>
                        <td>{{ $ioc?->currency }}</td>

                        <td class="no-sort no-click bread-actions">

                            {{-- <button class="btn btn-success btn-add-new" data-toggle="modal"
                                data-target="#iocRoundModal">
                                <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
                            </button> --}}
                            <a data-toggle="modal" data-target="#iocEdit-{{ $ioc?->id }}" title="Edit"
                                class="btn btn-sm btn-primary pull-right edit">
                                <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
                            </a>

                            <form method="POST" action="{{ route('ioc.delete', ['id' => $ioc?->id]) }}"
                                id="delete-form-{{ $ioc?->id }}" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>

                            <a href="javascript:;" title="Delete" class="btn btn-sm btn-danger pull-right deleteIoc"
                                data-id="{{ $ioc?->id }}" id="delete-{{ $ioc?->id }}"
                                onclick="submitDeleteForm({{ $ioc?->id }})">
                                <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>


<div class="modal fade" id="iocRoundModal" tabindex="-1" aria-labelledby="faqModalLabel" aria-hidden="true">
    <form action="{{ route('ioc.round') }}" method="POST">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="partnersModalLabel">Add Ioc Round</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Modal body content -->


                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="title">Stake Price</label>
                        <input type="number" name="stake_price" id="title" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="title">Raised Price</label>
                        <input type="number" name="raised_price" id="title" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="title">Sold Allocation</label>
                        <input type="number" name="sold_allocation" id="title" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="title">Currency</label>
                        <input type="text" name="currency" id="title" class="form-control" value="$">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </form>
</div>

@foreach ($iocs as $r)
<div class="modal fade" id="iocEdit-{{ $r?->id }}" tabindex="-1" aria-labelledby="faqModalLabel" aria-hidden="true">
    <form action="{{ route('ioc.round', $r?->id) }}" method="POST">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="partnersModalLabel">Edit Ioc Round</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Modal body content -->


                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" value="{{ $r?->title }}" name="title" id="title" class="form-control"
                            value="">
                    </div>
                    <div class="form-group">
                        <label for="title">Stake Price</label>
                        <input type="number" value="{{ $r?->stake_price }}" name="stake_price" id="title"
                            class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="title">Raised Price</label>
                        <input type="number" value="{{ $r?->raised_price }}" name="raised_price" id="title"
                            class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="title">Sold Allocation</label>
                        <input type="number" value="{{ $r?->sold_allocation }}" name="sold_allocation" id="title"
                            class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="title">Currency</label>
                        <input type="text" value="{{ $r?->currency }}" name="currency" id="title" class="form-control"
                            value="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endforeach

<script>
    function submitDeleteForm(iocId) {
            if (confirm('Are you sure you want to delete this Ioc Round?')) {
                var formId = 'delete-form-' + iocId;
                document.getElementById(formId).submit();
            }
        }

</script>


<script>
   document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll('.nav-switch');
    const tableContainers = document.querySelectorAll('.data-container'); // Select the table containers

    let activeButtonId = localStorage.getItem('activeButtonId');

    if (!activeButtonId) {
        activeButtonId = buttons[0].getAttribute('data-target');
        localStorage.setItem('activeButtonId', activeButtonId); // Save the default state
    }

    tableContainers.forEach(container => {
        container.style.display = container.id === activeButtonId ? 'block' : 'none';
    });

    buttons.forEach(button => {
        button.classList.toggle('btn-primary', button.getAttribute('data-target') === activeButtonId);
    });

    buttons.forEach(button => {
        button.addEventListener('click', function () {
            const targetId = this.getAttribute('data-target');

            localStorage.setItem('activeButtonId', targetId);

            buttons.forEach(btn => btn.classList.remove('btn-primary'));
            this.classList.add('btn-primary');

            tableContainers.forEach(container => {
                container.style.display = container.id === targetId ? 'block' : 'none';
            });
        });
    });
});

</script>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection