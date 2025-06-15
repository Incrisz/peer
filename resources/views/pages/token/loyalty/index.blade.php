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
                <h1>Edit Loyalty Program</h1>

                <form action="{{ route('loyalty-update', $loyaltyProgram->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control"
                            value="{{ $loyaltyProgram->title }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="text" name="description" id="description" class="form-control" rows="20">
                            {{ $loyaltyProgram->description }}
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control-file">
                        @if ($loyaltyProgram->image)
                            <img src="{{ asset($loyaltyProgram->image) }}" class="card-img-top"
                                alt="{{ $loyaltyProgram->title }}" width="150" height="150" mt-2>
                        @endif
                    </div>



                    <button type="submit" class="btn btn-primary">Update</button>
                </form>



            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="container-fluid">
                        <h1>
                            Loyalty Item
                        </h1>
                        <button class="btn btn-success btn-add-new" data-toggle="modal" data-target="#loyaltyItemModal">
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
                        @foreach ($loyaltyItems as $loyaltyItem)
                            <tr role="row" class="odd">

                                <td>
                                    <div>{{ $loyaltyItem->title }}</div>
                                </td>

                                <td>
                                    <div>{!! \Illuminate\Support\Str::limit($loyaltyItem->description, 40) !!}</div>
                                </td>

                                <td class="no-sort no-click bread-actions">
                                    <a href="{{ route('loyalty-item-edit', $loyaltyItem->id) }}" title="Edit"
                                        class="btn btn-sm btn-primary pull-right edit">
                                        <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
                                    </a>



                                    <a href="javascript:;" title="Delete"
                                        class="btn btn-sm btn-danger pull-right deleteLoyaltyItem"
                                        data-id="{{ $loyaltyItem->id }}" id="delete-{{ $loyaltyItem->id }}">
                                        <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {!! $loyaltyItems->links('vendor.pagination.bootstrap-4') !!}


            </div>

            <div class="col-md-6">
                <h1>Edit Loyalty Program</h1>

                <form action="{{ route('offer-update', $offer->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control"
                            value="{{ $offer->title }}">
                    </div>

                    <div class="form-group">
                        <label for="button_text">Button Text</label>
                        <input type="text" name="button_text" id="button_text" class="form-control"
                            value="{{ $offer->button_text }}">
                    </div>

                    <div class="form-group">
                        <label for="title">Link</label>
                        <input type="url" name="link" id="link" class="form-control"
                            value="{{ $offer->link }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="text" name="description" id="description" class="form-control" rows="20">
                            {{ $offer->description }}
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control-file">
                        @if ($offer->image)
                            <img src="{{ asset($offer->image) }}" class="card-img-top" alt="{{ $offer->title }}"
                                width="150" height="150" mt-2>
                        @endif
                    </div>



                    <button type="submit" class="btn btn-primary">Update</button>
                </form>



            </div>




        </div>
    </div>

    {{-- Loyalty Item Modal Structure --}}
    <div class="modal fade" id="loyaltyItemModal" tabindex="-1" aria-labelledby="loyaltyItemModalLabel"
        aria-hidden="true">
        <form action="{{ route('loyalty-item-store') }}" method="POST" enctype="multipart/form-data">
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

            let val = document.getElementById('images')




            document.getElementById('images').value = JSON.stringify(val);
        }


        $(document).on('click', '.deleteLoyaltyItem', function() {
            var merID = $(this).data('id');
            if (confirm('Are you sure you want to delete this Item?')) {
                $.ajax({
                    url: '/admin/loyalty-item/' + merID,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#delete-' + merID).closest('tr').remove();
                            alert(response.success);
                            location.reload();
                        }
                    },
                    error: function(response) {
                        alert('Error deleting Item');
                    }
                });
            }
        });
    </script>




@endsection
