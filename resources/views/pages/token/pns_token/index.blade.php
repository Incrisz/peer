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
        <div class="row justify-content-center"
            style="
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    ">
            <div class="col-md-6">
                <h1>Edit pns</h1>

                <form action="{{ route('pns_token.update', $pns?->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control"
                            value="{{ $pns->title }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="text" name="description" id="description" class="form-control" rows="20">
                            {{ $pns->description }}
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control-file">
                        @if ($pns->image)
                            <img src="{{ asset($pns->image) }}" class="card-img-top" alt="{{ $pns->title }}"
                                width="150" height="150" mt-2>
                        @endif
                    </div>



                    <button type="submit" class="btn btn-primary">Update</button>
                </form>



            </div>

            <div class="col-md-6">
                <h1>Update PNS Token Banner Section</h1>

                {{-- <form> --}}
                <form action="{{ route('pns_token.headerupdate', 1) }}" method="POST" enctype="multipart/form-data">
                {{-- <form action="{{ route('pns_token.headerupdate', $pns_token?->id) }}" method="POST" enctype="multipart/form-data"> --}}
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">ICO Button Text</label>
                        <input type="text" name="ico_button_text" id="ico_button_text" class="form-control"
                            value="{{ $pns_token?->ico_button_text }}">
                    </div>

                    <div class="form-group">
                        <label for="title">ICO Button link</label>
                        <input type="text" name="ico_button_url" id="ico_button_url" class="form-control"
                            value="{{ $pns_token?->ico_button_url }}">
                    </div>
                    <div class="form-group">
                        <label for="title">White Paper Button Text</label>
                        <input type="text" name="white_paper_button_text" id="white_paper_button_text" class="form-control"
                            value="{{ $pns_token?->white_paper_button_text }}">
                    </div>

                   
                    <div class="form-group">
                        <label for="image">WhitePaper Pdf</label>
                        <input type="file" name="white_paper" id="white_paper" class="form-control-file">
                        @if ($pns_token?->white_paper)
                            <div class="mt-2">
                                <a href="{{ asset($pns_token?->white_paper) }}" target="_blank" class="btn btn-primary">
                                    <img src="https://www.freeiconspng.com/uploads/pdf-icon-png-pdf-zum-download-2.png" alt="PDF Icon" style="width: 24px; height: 24px; margin-right: 8px;">
                                    View WhitePaper
                                </a>
                            </div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>



            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="container-fluid">
                        <h1>
                            Pns Items
                        </h1>
                        <button class="btn btn-success btn-add-new" data-toggle="modal" data-target="#pnsItemModal">
                            <i class="voyager-plus"></i> <span>Add New</span>
                        </button>
                    </div>
                </div>


                <table id="dataTable" class="table table-hover dataTable no-footer" role="grid"
                    aria-describedby="dataTable_info">
                    <thead>
                        <tr role="row">

                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                aria-label="Name
                                                        : activate to sort column ascending"
                                style="width: 76.25px;">
                                Title
                            </th>

                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                aria-label="Name
                                                        : activate to sort column ascending"
                                style="width: 76.25px;">
                                Description
                            </th>

                            <th class="text-right actions dt-not-orderable sorting_disabled" rowspan="1" colspan="1"
                                aria-label="Actions" style="width: 291.4px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pnsItems as $pnsItem)
                            <tr role="row" class="odd">

                                <td>
                                    <div>{{ $pnsItem->title }}</div>
                                </td>

                                <td>
                                    <div>{!! \Illuminate\Support\Str::limit($pnsItem->description, 40) !!}</div>
                                </td>

                                <td class="no-sort no-click bread-actions">
                                    <a href="{{ route('pns_item.edit', $pnsItem->id) }}" title="Edit"
                                        class="btn btn-sm btn-primary pull-right edit">
                                        <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
                                    </a>

                                    <a href="javascript:;" title="Delete"
                                        class="btn btn-sm btn-danger pull-right deletePnsItem"
                                        data-id="{{ $pnsItem->id }}" id="delete-{{ $pnsItem->id }}">
                                        <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {!! $pnsItems->links('vendor.pagination.bootstrap-4') !!}


            </div>


            <div class="col-md-6">
                <h1>Edit Exclusive</h1>

                <form action="{{ route('exclusive.update', $exclusive->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control"
                            value="{{ $exclusive->title }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="text" name="description" id="description" class="form-control" rows="20">
                            {{ $exclusive->description }}
                        </textarea>
                    </div>



                    <button type="submit" class="btn btn-primary">Update</button>
                </form>



            </div>


            <div class="col-md-6">
                <h1>Edit Exchange</h1>

                <form action="{{ route('exchange.update', $exchange->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control"
                            value="{{ $exchange->title }}">
                    </div>

                    <div class="form-group">
                        <label for="button_text">Button Text</label>
                        <input type="text" name="button_text" id="button_text" class="form-control"
                            value="{{ $exchange->button_text }}">
                    </div>

                    <div class="form-group">
                        <label for="title">Link</label>
                        <input type="url" name="link" id="link" class="form-control"
                            value="{{ $exchange->link }}">
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control-file">
                        @if ($exchange->image)
                            <img src="{{ asset($exchange->image) }}" class="card-img-top" alt="{{ $exchange->title }}"
                                width="150" height="150" mt-2>
                        @endif
                    </div>





                    <button type="submit" class="btn btn-primary">Update</button>
                </form>



            </div>


            <div class="col-md-6">
                <div class="row">
                    <div class="container-fluid">
                        <h1>
                            Wallet
                        </h1>
                        <button class="btn btn-success btn-add-new" data-toggle="modal" data-target="#walletModal">
                            <i class="voyager-plus"></i> <span>Add New</span>
                        </button>
                    </div>
                </div>


                <table id="dataTable" class="table table-hover dataTable no-footer" role="grid"
                    aria-describedby="dataTable_info">
                    <thead>
                        <tr role="row">

                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                aria-label="Name
                                                        : activate to sort column ascending"
                                style="width: 76.25px;">
                                Title
                            </th>

                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                aria-label="Name
                                                        : activate to sort column ascending"
                                style="width: 76.25px;">
                                Button Text
                            </th>

                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                aria-label="Name
                                                        : activate to sort column ascending"
                                style="width: 76.25px;">
                                Image
                            </th>

                            <th class="text-right actions dt-not-orderable sorting_disabled" rowspan="1"
                                colspan="1" aria-label="Actions" style="width: 291.4px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($wallets as $wallet)
                            <tr role="row" class="odd">

                                <td>
                                    <div>{{ $wallet->title }}</div>
                                </td>

                                <td>
                                    <div>{{ $wallet->button_text }}</div>
                                </td>

                                <td>
                                    <div>
                                        <img class="d-block m-auto wow bounceInUp" src="{{ asset($wallet->image) }}"
                                            alt="{{ $wallet->title }}" height="50" width="50">
                                    </div>
                                </td>

                                <td class="no-sort no-click bread-actions">
                                    <a href="{{ route('wallet.edit', $wallet->id) }}" title="Edit"
                                        class="btn btn-sm btn-primary pull-right edit">
                                        <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
                                    </a>

                                    <a href="javascript:;" title="Delete"
                                        class="btn btn-sm btn-danger pull-right deleteWallet"
                                        data-id="{{ $wallet->id }}" id="delete-{{ $wallet->id }}">
                                        <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {!! $wallets->links('vendor.pagination.bootstrap-4') !!}


            </div>


            <div class="col-md-6">
                <div class="row">
                    <div class="container-fluid">
                        <h1>
                            Allocation
                        </h1>
                        <button class="btn btn-success btn-add-new" data-toggle="modal" data-target="#allocationModal">
                            <i class="voyager-plus"></i> <span>Add New</span>
                        </button>
                    </div>
                </div>


                <table id="dataTable" class="table table-hover dataTable no-footer" role="grid"
                    aria-describedby="dataTable_info">
                    <thead>
                        <tr role="row">

                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                aria-label="Name
                                                        : activate to sort column ascending"
                                style="width: 76.25px;">
                                Allocaion
                            </th>

                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                aria-label="Name
                                                        : activate to sort column ascending"
                                style="width: 76.25px;">
                                Percentage
                            </th>

                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                aria-label="Name
                                                        : activate to sort column ascending"
                                style="width: 76.25px;">
                                Token Amount
                            </th>

                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                aria-label="Name
                                                        : activate to sort column ascending"
                                style="width: 76.25px;">
                                Vesting Period
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                aria-label="Name
                                                        : activate to sort column ascending"
                                style="width: 76.25px;">
                                Color
                            </th>

                            <th class="text-right actions dt-not-orderable sorting_disabled" rowspan="1"
                                colspan="1" aria-label="Actions" style="width: 291.4px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allocations as $allocation)
                            <tr role="row" class="odd">

                                <td>
                                    <div>{{ $allocation->allocation }}</div>
                                </td>

                                <td>
                                    <div>{{ $allocation->perentage }}%</div>
                                </td>

                                <td>
                                    <div>{{ $allocation->token_amount }}</div>
                                </td>

                                <td>
                                    <div>{{ $allocation->vesting_period }}</div>
                                </td>
                                <td>
                                    <div style="background-color: {{$allocation?->color}}; color: white;" >{{ $allocation?->color }}</div>
                                </td>

                                <td class="no-sort no-click bread-actions">

                                    <div style="display: flex">
                                        <a href="{{ route('allocation.edit', $allocation?->id) }}" title="Edit"
                                            class="btn btn-sm btn-primary pull-right edit">
                                            <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
                                        </a>
                                        <a href="{{ route('allocation.delete', $allocation?->id) }}" title="Delete" class="btn btn-sm btn-danger pull-right delete"
                                            data-id="2" >
                                            <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                                        </a>
                                    </div>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {!! $allocations->links('vendor.pagination.bootstrap-4') !!}


            </div>


        </div>
    </div>

    {{-- Pns Item Modal Structure --}}
    <div class="modal fade" id="pnsItemModal" tabindex="-1" aria-labelledby="pnsItemModalLabel" aria-hidden="true">
        <form action="{{ route('pns_item.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="featuresModalLabel">New Pns Items</h5>
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
                            <label for="description">Description</label>
                            <textarea type="text" name="description" id="description" class="form-control" value=""></textarea>
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
    {{-- end of first Modal Structure --}}

    {{-- Wallet Modal Structure --}}
    <div class="modal fade" id="walletModal" tabindex="-1" aria-labelledby="walletModalLabel" aria-hidden="true">
        <form action="{{ route('wallet.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="featuresModalLabel">New Wallet</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Modal body content -->


                        <div class="form-group">
                            {{-- <label for="title">Title</label> --}}
                            <input type="hidden" name="title" id="title" class="form-control"
                                value="BROWSERS/WALLETS">
                        </div>

                        <div class="form-group">
                            <label for="button_text">Button Text</label>
                            <input type="text" name="button_text" id="button_text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="title">Link</label>
                            <input type="url" name="link" id="link" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="form-control-file">
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
    {{-- end of first Modal Structure --}}

    {{-- Wallet Modal Structure --}}
    <div class="modal fade" id="allocationModal" tabindex="-1" aria-labelledby="allocationModalLabel"
        aria-hidden="true">
        <form action="{{ route('allocation.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="featuresModalLabel">New Wallet</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Modal body content -->


                        <div class="form-group">
                            <label for="allocation">Allocation</label>
                            <input type="text" name="allocation" id="allocation" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="perentage">Percentage</label>
                            <input type="number" name="perentage" id="perentage" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="token_amount">Token Amount</label>
                            <input type="number" name="token_amount" id="token_amount" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="vesting_period">Vasting Period</label>
                            <input type="text" name="vesting_period" id="vesting_period" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="vesting_period">Color</label>
                            <select name="color" id="colorSelect">
                                <option selected>-- Select Color --</option>
                                <option value="#0652EA" style="background-color: #0652EA; color: white;">#0652EA</option>
                                <option value="#6426EA" style="background-color: #6426EA; color: white;">#6426EA</option>
                                <option value="#D91FE9" style="background-color: #D91FE9; color: white;">#D91FE9</option>
                                <option value="#2C3C8D" style="background-color: #2C3C8D; color: white;">#2C3C8D</option>
                                <option value="#03A9EB" style="background-color: #03A9EB; color: white;">#03A9EB</option>
                                <!-- Additional Colors -->
                                <option value="#FF5733" style="background-color: #FF5733; color: white;">#FF5733</option>
                                <option value="#33FF57" style="background-color: #33FF57; color: black;">#33FF57</option>
                                <option value="#FF33A6" style="background-color: #FF33A6; color: white;">#FF33A6</option>
                                <option value="#338AFF" style="background-color: #338AFF; color: white;">#338AFF</option>
                                <option value="#FFD700" style="background-color: #FFD700; color: black;">#FFD700</option>
                            </select>
                                
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
    {{-- end of first Modal Structure --}}





@endsection

@section('javascript')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function prepareJsonData() {
            // const images = [
            //     "/images/binance.png",
            //     "/images/avalanche.png",
            //     "/images/ethereum.png",
            //     "/images/bitcoin.png",
            //     "/images/tron.png",
            //     "/images/cardano.png",
            //     "/images/shiba.png",
            //     "/images/polkadot.png",
            //     "/images/solana.png"
            // ];
            let val = document.getElementById('images')

            // alert($val)


            document.getElementById('images').value = JSON.stringify(val);
        }


        $(document).on('click', '.deletePnsItem', function() {
            var pnsID = $(this).data('id');
            if (confirm('Are you sure you want to delete this Item?')) {
                $.ajax({
                    url: '/admin/pns_item/' + pnsID,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#delete-' + pnsID).closest('tr').remove();
                            alert(response.success);
                            location.reload();
                        }
                    },
                    error: function(response) {
                        alert('Error deleting Pns');
                    }
                });
            }
        });

        $(document).on('click', '.deleteWallet', function() {
            var walletID = $(this).data('id');
            if (confirm('Are you sure you want to delete this Wallet?')) {
                $.ajax({
                    url: '/admin/wallet/' + walletID,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#delete-' + walletID).closest('tr').remove();
                            alert(response.success);
                            location.reload();
                        }
                    },
                    error: function(response) {
                        alert('Error deleting Walllet');
                    }
                });
            }
        });
    </script>




@endsection
