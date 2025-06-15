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
                <div class="row">
                    <div class="container-fluid">
                        <h1>
                            partner Images
                        </h1>
                        <button class="btn btn-success btn-add-new" data-toggle="modal" data-target="#partnerModal">
                            <i class="voyager-plus"></i> <span>Add New</span>
                        </button>
                    </div>
                </div>

                @if ($partners->isEmpty())
                    <div class="text-center">
                        <!-- Display the SVG image -->
                        <img src="{{ asset('images/no-blog-found.svg') }}" alt="No Blog Found" class="img-fluid">
                        <!-- Or display a text message -->
                        <p>No partner Image found.</p>
                    </div>
                @else
                    <table id="dataTable" class="table table-hover dataTable no-footer" role="grid"
                        aria-describedby="dataTable_info">
                        <thead>
                            <tr role="row">
                                <th>Title</th>
                                <th>Image</th>

                                <th class="text-right actions dt-not-orderable sorting_disabled" rowspan="1"
                                    colspan="1" aria-label="Actions" style="width: 291.4px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($partners as $partner)
                                <tr role="row" class="odd">

                                    <td>{{ $partner->title }}</td>


                                    <td>
                                        @if ($partner->image)
                                            <img src="{{ asset($partner->image) }}" class="card-img-top"
                                                alt="{{ $partner->title }}" width="90" height="60" mt-2>
                                        @else
                                            <p>No image available</p>
                                        @endif
                                    </td>


                                    <td class="no-sort no-click bread-actions">
                                        <a href="{{ route('partner.edit', $partner->id) }}" title="Edit"
                                            class="btn btn-sm btn-primary pull-right edit">
                                            <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
                                        </a>
                                        <a href="javascript:;" title="Delete"
                                            class="btn btn-sm btn-danger pull-right deletePartner"
                                            data-id="{{ $partner->id }}" id="delete-{{ $partner->id }}">
                                            <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                                        </a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {!! $partners->links('vendor.pagination.bootstrap-4') !!}

                @endif
            </div>

        </div>
    </div>

    {{-- Partner Modal Structure --}}
    <div class="modal fade" id="partnerModal" tabindex="-1" aria-labelledby="partnerModalLabel" aria-hidden="true">
        <form action="{{ route('partner.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="partnersModalLabel">New partners</h5>
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


        $(document).on('click', '.deletePartner', function() {
            var roadID = $(this).data('id');
            if (confirm('Are you sure you want to delete this partner?')) {
                $.ajax({
                    url: '/admin/partner/' + roadID,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#delete-' + roadID).closest('tr').remove();
                            alert("Partner deleted successfull");
                            // alert(response.success);
                            location.reload();
                        }
                    },
                    error: function(response) {
                        alert('Error deleting Partner');
                    }
                });
            }
        });
    </script>




@endsection
