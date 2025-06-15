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
                <h1>Edit Crypto Header </h1>

                <form action="{{ route('crypto.update', $crypo->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control"
                            value="{{ $crypo->title }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="text" name="description" id="description" class="form-control" rows="20">
                            {{ $crypo->description }}
                        </textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>



            </div>

            <div class="col-md-6">
                <h1>Edit Crypto Image </h1>
                <form action="{{ route('cryptoimage.update', $crypoImage->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <input type="hidden" name="title" id="title" value="{{ $crypoImage->title }}"
                            class="form-control-file">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control-file">
                        @if ($crypoImage->image)
                            <img src="{{ asset($crypoImage->image) }}" class="card-img-top mt-2"
                                alt="{{ $crypoImage->title }}" width="150" height="150">
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>


            <div class="col-md-6">
                <div class="row">
                    <div class="container-fluid">
                        <h1>
                            Crypto Benefit
                        </h1>
                        <button class="btn btn-success btn-add-new" data-toggle="modal" data-target="#cryptoModal">
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
                                Text
                            </th>

                            {{-- <th>Social Icon</th> --}}


                            <th class="text-right actions dt-not-orderable sorting_disabled" rowspan="1" colspan="1"
                                aria-label="Actions" style="width: 291.4px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cryptoBenefits as $cryptoBenefit)
                            <tr role="row" class="odd" id="team-{{ $cryptoBenefit->id }}">

                                <td>{{ $cryptoBenefit->description }}</td>
                                <td class="no-sort no-click bread-actions">
                                    <a href="{{ route('crypto_benefit.edit', $cryptoBenefit->id) }}" title="Edit"
                                        class="btn btn-sm btn-primary pull-right edit">
                                        <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
                                    </a>

                                    <a href="javascript:;" title="Delete"
                                        class="btn btn-sm btn-danger pull-right deleteCryptoBenefit"
                                        data-id="{{ $cryptoBenefit->id }}" id="delete-{{ $cryptoBenefit->id }}">
                                        <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {!! $cryptoBenefits->links('vendor.pagination.bootstrap-4') !!}


            </div>


            <div class="col-md-6">
                <h1>Edit Exceptional Text </h1>

                <form action="{{ route('exceptional.update', $exceptional->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        {{-- <label for="title">Title</label> --}}
                        <input type="hidden" name="title" id="title" class="form-control"
                            value="{{ $exceptional->title }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="text" name="description" id="description" class="form-control" rows="20">
                            {{ $exceptional->description }}
                        </textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>



            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="container-fluid">
                        <h1>
                            Crypto Item
                        </h1>
                        <button class="btn btn-success btn-add-new" data-toggle="modal" data-target="#cryptoItemModal">
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

                            {{-- <th>Social Icon</th> --}}


                            <th class="text-right actions dt-not-orderable sorting_disabled" rowspan="1"
                                colspan="1" aria-label="Actions" style="width: 291.4px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cryptoItems as $cryptoItem)
                            <tr role="row" class="odd" id="team-{{ $cryptoItem->id }}">

                                <td>{{ $cryptoItem->title }}</td>
                                <td>{!! \Illuminate\Support\Str::limit($cryptoItem->description, 50) !!}</td>
                                <td class="no-sort no-click bread-actions">
                                    <a href="{{ route('cryptoItem.edit', $cryptoItem->id) }}" title="Edit"
                                        class="btn btn-sm btn-primary pull-right edit">
                                        <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
                                    </a>
                                    <a href="javascript:;" title="Delete"
                                        class="btn btn-sm btn-danger pull-right deleteCryptoItem"
                                        data-id="{{ $cryptoItem->id }}" id="delete-{{ $cryptoItem->id }}">
                                        <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {!! $cryptoBenefits->links('vendor.pagination.bootstrap-4') !!}


            </div>


            <div class="col-md-6">
                <h1>Edit Promotion</h1>

                <form action="{{ route('promoteBusiness.update', $promoteBusiness->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control"
                            value="{{ $promoteBusiness->title }}">
                    </div>

                    <div class="form-group">
                        <label for="title">Button Text</label>
                        <input type="text" name="button_text" id="title" class="form-control"
                            value="{{ $promoteBusiness->button_text }}">
                    </div>

                    <div class="form-group">
                        <label for="title">Button Text</label>
                        <input type="url" name="link" id="link" class="form-control"
                            value="{{ $promoteBusiness->link }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="text" name="description" id="description" class="form-control" rows="20">
                        {{ $promoteBusiness->description }}
                    </textarea>
                    </div>




                    <button type="submit" class="btn btn-primary">Update</button>
                </form>



            </div>




        </div>
    </div>



    {{-- Team Modal Structure --}}
    <div class="modal fade" id="cryptoModal" tabindex="-1" aria-labelledby="cryptoModalLabel" aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="benefitsModalLabel">New Crypto Item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('crypto_benefit.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <!-- Modal body content -->
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="name" class="form-control" value="">
                        </div>


                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea type="text" name="description" id="description" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    {{-- end of first Modal Structure --}}

    {{-- cryptoItemModal --}}
    <div class="modal fade" id="cryptoItemModal" tabindex="-1" aria-labelledby="cryptoItemModalLabel"
        aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="benefitsModalLabel">New Team</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('cryptoItem.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <!-- Modal body content -->
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="name" class="form-control" value="">
                        </div>


                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea type="text" name="description" id="description" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>

    </div>






@endsection

@section('javascript')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).on('click', '.deleteCryptoBenefit', function() {
            var benID = $(this).data('id');
            if (confirm('Are you sure you want to delete this Benefit?')) {
                $.ajax({
                    url: '/admin/crypto_benefit/' + benID,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#delete-' + benID).closest('tr').remove();
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


        $(document).on('click', '.deleteCryptoItem', function() {
            var itemID = $(this).data('id');
            if (confirm('Are you sure you want to delete this Item?')) {
                $.ajax({
                    url: '/admin/cryptoItem/' + itemID,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#delete-' + itemID).closest('tr').remove();
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
