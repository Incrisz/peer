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
    <div class="row justify-content-center" style="
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    ">
        <div class="col-md-6">
            <h1>Edit Merchant Program </h1>

            <form action="{{ route('merchant_program_header.update', $merchantProgram->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control"
                        value="{{ $merchantProgram->title }}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" name="description" id="description" class="form-control" rows="20">
                            {{ $merchantProgram->description }}
                        </textarea>
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control-file">
                    @if ($merchantProgram->image)
                    <img src="{{ asset($merchantProgram->image) }}" class="card-img-top"
                        alt="{{ $merchantProgram->title }}" width="150" height="150" mt-2>
                    @endif
                </div>



                <button type="submit" class="btn btn-primary">Update</button>
            </form>



        </div>

        <div class="col-md-6">
            <h1>Edit Brand </h1>

            <form action="{{ route('brand.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $brand->title }}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" name="description" id="description" class="form-control" rows="20">
                            {{ $brand->description }}
                        </textarea>
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control-file">
                    @if ($brand->image)
                    <img src="{{ asset($brand->image) }}" class="card-img-top" alt="{{ $brand->title }}" width="150"
                        height="150" mt-2>
                    @endif
                </div>



                <button type="submit" class="btn btn-primary">Update</button>
            </form>



        </div>

        <div class="col-md-6">
            <h1>Edit Collab </h1>

            <form action="{{ route('collab.update', $collab->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $collab->title }}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" name="description" id="description" class="form-control" rows="20">
                            {{ $collab->description }}
                        </textarea>
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control-file">
                    @if ($collab->image)
                    <img src="{{ asset($collab->image) }}" class="card-img-top" alt="{{ $collab->title }}" width="150"
                        height="150" mt-2>
                    @endif
                </div>



                <button type="submit" class="btn btn-primary">Update</button>
            </form>



        </div>

        <div class="col-md-6">
            <h1>Edit Extensive Marketing </h1>

            <form action="{{ route('extensive.update', $collab->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $extensive->title }}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" name="description" id="description" class="form-control" rows="20">
                            {{ $extensive->description }}
                        </textarea>
                </div>





                <button type="submit" class="btn btn-primary">Update</button>
            </form>



        </div>


        <div class="col-md-6">
            <div class="row">
                <div class="container-fluid">
                    <h1>
                        merchantItem Images
                    </h1>
                    <button class="btn btn-success btn-add-new" data-toggle="modal" data-target="#merchantItemModal">
                        <i class="voyager-plus"></i> <span>Add New</span>
                    </button>
                </div>
            </div>

            @if ($merchantItems->isEmpty())
            <div class="text-center">
                <!-- Display the SVG image -->
                <img src="{{ asset('images/no-blog-found.svg') }}" alt="No Blog Found" class="img-fluid">
                <!-- Or display a text message -->
                <p>No merchantItem Image found.</p>
            </div>
            @else
            <table id="dataTable" class="table table-hover dataTable no-footer" role="grid"
                aria-describedby="dataTable_info">
                <thead>
                    <tr role="row">
                        <th>Title</th>
                        <th>Image</th>

                        <th class="text-right actions dt-not-orderable sorting_disabled" rowspan="1" colspan="1"
                            aria-label="Actions" style="width: 291.4px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($merchantItems as $merchantItem)
                    <tr role="row" class="odd">

                        <td>{{ $merchantItem->title }}</td>


                        <td>
                            @if ($merchantItem->image)
                            <img src="{{ asset($merchantItem->image) }}" alt="{{ $merchantItem->title }}" width="90"
                                height="60" mt-2>
                            @else
                            <p>No image available</p>
                            @endif
                        </td>


                        <td class="no-sort no-click bread-actions">
                            <a href="{{ route('merchant_item.edit', $merchantItem->id) }}" title="Edit"
                                class="btn btn-sm btn-primary pull-right edit">
                                <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
                            </a>


                            <a href="javascript:;" title="Delete"
                                class="btn btn-sm btn-danger pull-right deleteMerchantItem"
                                data-id="{{ $merchantItem->id }}" id="delete-{{ $merchantItem->id }}">
                                <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                            </a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {!! $merchantItems->links('vendor.pagination.bootstrap-4') !!}

            @endif
        </div>


        <div class="col-md-6">
            <h1>Edit Partner Content </h1>

            <form action="{{ route('together.update', $together->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <input type="hidden" name="title" id="title" class="form-control" value="{{ $together->title }}">
                </div>

                <div class="form-group">
                    <label for="button_text">Button Text</label>
                    <input type="text" name="button_text" id="button_text" class="form-control"
                        value="{{ $together->button_text }}">
                </div>

                <div class="form-group">
                    <label for="link">Link</label>
                    <input type="text" name="link" id="link" class="form-control" value="{{ $together->link }}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" name="description" id="description" class="form-control" rows="20">
                            {{ $together->description }}
                        </textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>


        {{-- The incoming from the removed merchant page. --}}


        <div class="col-md-6">
            <h1>Edit Merchant</h1>

            <form action="{{ route('merchant-service.update', $merchant->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $merchant->title }}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" name="description" id="description" class="form-control" rows="20">
                                {{ $merchant->description }}
                            </textarea>
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control-file">
                    @if ($merchant->image)
                    <img src="{{ asset($merchant->image) }}" class="card-img-top" alt="{{ $merchant->title }}"
                        width="150" height="150" mt-2>
                    @endif
                </div>



                <button type="submit" class="btn btn-primary">Update</button>
            </form>



        </div>

        <div class="col-md-6">
            <h1>Edit Target Market</h1>

            <form action="{{ route('target_marketing.update', $target_market->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $target_market->title }}">
                </div>

                <div class="form-group">
                    <label for="title">Button Text</label>
                    <input type="text" name="button_text" id="title" class="form-control"
                        value="{{ $target_market->button_text }}">
                </div>

                <div class="form-group">
                    <label for="title">Button Text</label>
                    <input type="url" name="link" id="link" class="form-control" value="{{ $target_market->link }}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" name="description" id="description" class="form-control" rows="20">
                                {{ $target_market->description }}
                            </textarea>
                </div>




                <button type="submit" class="btn btn-primary">Update</button>
            </form>



        </div>
        
        <div class="col-md-6">
            <div class="row">
                <div class="container-fluid">
                    <h1>
                        Merchant Merit
                    </h1>
                    <button class="btn btn-success btn-add-new" data-toggle="modal" data-target="#merchantModal">
                        <i class="voyager-plus"></i> <span>Add New</span>
                    </button>
                </div>
            </div>


            <table id="dataTable" class="table table-hover dataTable no-footer" role="grid"
                aria-describedby="dataTable_info">
                <thead>
                    <tr role="row">

                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Name
                                                            : activate to sort column ascending"
                            style="width: 76.25px;">
                            Title
                        </th>

                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Name
                                                            : activate to sort column ascending"
                            style="width: 76.25px;">
                            Description
                        </th>

                        <th class="text-right actions dt-not-orderable sorting_disabled" rowspan="1" colspan="1"
                            aria-label="Actions" style="width: 291.4px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($merchant_market as $merchant)
                    <tr role="row" class="odd">

                        <td>
                            <div>{{ $merchant->title }}</div>
                        </td>

                        <td>
                            <div>{!! \Illuminate\Support\Str::limit($merchant->description, 80) !!}</div>
                        </td>

                        <td class="no-sort no-click bread-actions">
                            <a href="{{ route('merchant-market.edit', $merchant->id) }}" title="Edit"
                                class="btn btn-sm btn-primary pull-right edit">
                                <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
                            </a>

                            <a href="javascript:;" title="Delete"
                                class="btn btn-sm btn-danger pull-right deleteMerchantMerit"
                                data-id="{{ $merchant->id }}" id="delete-{{ $merchant->id }}">
                                <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {!! $merchant_market->links('vendor.pagination.bootstrap-4') !!}


        </div>

        <div class="col-md-6">
            <h1>Edit promotion</h1>

            <form action="{{ route('promotion.update', $promotion->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $promotion->title }}">
                </div>

                <div class="form-group">
                    <label for="title">Button Text</label>
                    <input type="text" name="button_text" id="title" class="form-control"
                        value="{{ $promotion->button_text }}">
                </div>

                <div class="form-group">
                    <label for="title">Button Text</label>
                    <input type="url" name="link" id="link" class="form-control" value="{{ $promotion->link }}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" name="description" id="description" class="form-control" rows="20">
                                {{ $promotion->description }}
                            </textarea>
                </div>




                <button type="submit" class="btn btn-primary">Update</button>
            </form>



        </div>


        {{-- The incoming from the removed merchant page. --}}


        <div class="col-md-6">
            <h1>Edit Mass Content </h1>

            <form action="{{ route('mass.update', $mass->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">#
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $mass->title }}">
                </div>

                <div class="form-group">
                    <label for="button_text">Button Text</label>
                    <input type="text" name="button_text" id="button_text" class="form-control"
                        value="{{ $mass->button_text }}">
                </div>

                <div class="form-group">
                    <label for="link">Link</label>
                    <input type="text" name="link" id="link" class="form-control" value="{{ $mass->link }}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" name="description" id="description" class="form-control" rows="20">
                            {{ $mass->description }}
                        </textarea>
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control-file">
                    @if ($mass->image)
                    <img src="{{ asset($mass->image) }}" class="card-img-top" alt="{{ $mass->title }}" width="150"
                        height="150" mt-2>
                    @endif
                </div>





                <button type="submit" class="btn btn-primary">Update</button>
            </form>



        </div>

    </div>
</div>


{{-- Partner Modal Structure --}}
<div class="modal fade" id="merchantItemModal" tabindex="-1" aria-labelledby="merchantItemModalLabel"
    aria-hidden="true">
    <form action="{{ route('merchant_item.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="partnersModalLabel">New Merchant Item</h5>
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



{{-- Advantages Modal Structure --}}
<div class="modal fade" id="merchantModal" tabindex="-1" aria-labelledby="mearchantModalLabel" aria-hidden="true">
    <form action="{{ route('merchant-market.store') }}" method="POST">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="featuresModalLabel">New Target Marget</h5>
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
                        <textarea type="text" name="description" id="description" class="form-control"
                            value=""></textarea>
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


        $(document).on('click', '.deleteMerchantItem', function() {
            var merID = $(this).data('id');
            if (confirm('Are you sure you want to delete this Item?')) {
                $.ajax({
                    url: '/admin/merchant_item/' + merID,
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

<script>
    $(document).on('click', '.deleteMerchantMerit', function() {
            var merID = $(this).data('id');
            if (confirm('Are you sure you want to delete this Merit?')) {
                $.ajax({
                    url: '/admin/merchant-market/' + merID,
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
                        alert('Error deleting Merit');
                    }
                });
            }
        });
</script>




@endsection