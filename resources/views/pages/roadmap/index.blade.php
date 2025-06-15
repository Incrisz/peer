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
            <div class="col-md-8">
                <div class="row">
                    <div class="container-fluid">
                        <h1>
                            Road Map
                        </h1>
                        <button class="btn btn-success btn-add-new" data-toggle="modal" data-target="#roadModal">
                            <i class="voyager-plus"></i> <span>Add New</span>
                        </button>
                    </div>
                </div>

                @if ($roadMaps->isEmpty())
                    <div class="text-center">
                        <!-- Display the SVG image -->
                        <img src="{{ asset('images/no-team-found.svg') }}" alt="No team Found" class="img-fluid">
                        <!-- Or display a text message -->
                        <p>No Road Map found.</p>
                    </div>
                @else
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


                                <th class="text-right actions dt-not-orderable sorting_disabled" rowspan="1"
                                    colspan="1" aria-label="Actions" style="width: 291.4px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roadMaps as $roadMap)
                                <tr role="row" class="odd" id="team-{{ $roadMap->id }}">



                                    <td>
                                        <div>{{ $roadMap->title }}</div>
                                    </td>

                                    <td>
                                        <div>{!! \Illuminate\Support\Str::limit($roadMap->description, 80) !!}</div>
                                    </td>



                                    <td class="no-sort no-click bread-actions">
                                        <a href="{{ route('road_map_edit', $roadMap->id) }}" title="Edit"
                                            class="btn btn-sm btn-primary pull-right edit">
                                            <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
                                        </a>
                                        <a href="javascript:;" title="Delete"
                                            class="btn btn-sm btn-danger pull-right deleteRoadMap"
                                            data-id="{{ $roadMap->id }}" id="delete-{{ $roadMap->id }}">
                                            <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                                        </a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {!! $roadMaps->links('vendor.pagination.bootstrap-4') !!}

                @endif
            </div>

        </div>
    </div>

    {{-- Team Modal Structure --}}
    <div class="modal fade" id="roadModal" tabindex="-1" aria-labelledby="teamModalLabel" aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="benefitsModalLabel">New Roadmaps</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('road_map_store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <!-- Modal body content -->
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="">
                        </div>


                        <div class="form-group">
                            <label for="job_desc">Description</label>
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


        $(document).on('click', '.deleteRoadMap', function() {
            var roadID = $(this).data('id');
            if (confirm('Are you sure you want to delete this roadmap?')) {
                $.ajax({
                    url: '/admin/road-maps/' + roadID,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#delete-' + roadID).closest('tr').remove();
                            alert(response.success);
                            location.reload();
                        }
                    },
                    error: function(response) {
                        alert('Error deleting Road map');
                    }
                });
            }
        });
    </script>




@endsection
