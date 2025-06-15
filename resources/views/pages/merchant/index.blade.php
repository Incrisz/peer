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
                                                        : activate to sort column ascending" style="width: 76.25px;">
                            Title
                        </th>

                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Name
                                                        : activate to sort column ascending" style="width: 76.25px;">
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



    </div>
</div>

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