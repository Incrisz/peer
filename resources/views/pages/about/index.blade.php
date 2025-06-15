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
                <h1>Edit Header</h1>

                <form action="{{ route('about_header.update', $about_header->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control"
                            value="{{ $about_header->title }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="text" name="description" id="description" class="form-control" rows="20">
                            {{ $about_header->description }}
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control-file">
                        @if ($about_header->image)
                            <img src="{{ asset($about_header->image) }}" class="card-img-top"
                                alt="{{ $about_header->title }}" width="150" height="150" mt-2>
                        @endif
                    </div>



                    <button type="submit" class="btn btn-primary">Update</button>
                </form>



            </div>

            {{-- <div class="col-md-6">
                <h1>Edit Second Header</h1>

                <form action="{{ route('sec_about.update', $about_header->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control"
                            value="{{ $about_second->title }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="text" name="description" id="description" class="form-control" rows="10">
                            {{ $about_second->description }}
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="sub_text">Sub Text:</label>
                        <textarea name="sub_text" id="sub_text" class="form-control">
                            {{ $about_second->sub_text }}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="button_text">Button Text:</label>
                        <input type="text" name="button_text" id="button_text" class="form-control"
                            value="{{ $about_second->button_text }}">
                    </div>
                    <div>
                        <label for="link_url">Link URL:</label>
                        <input type="url" name="link_url" id="link_url" class="form-control"
                            value="{{ $about_second->link_url }}">
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control-file">
                        @if ($about_second->image)
                            <img src="{{ asset($about_second->image) }}" class="card-img-top"
                                alt="{{ $about_second->title }}" width="150" height="150" mt-2>
                        @endif
                    </div>



                    <button type="submit" class="btn btn-primary">Update</button>
                </form>



            </div> --}}

            <div class="col-md-4">
                <h1>Edit Team Header</h1>

                <form action="{{ route('team-header.update', $about_header->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control"
                            value="{{ $team_header->title }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="text" name="description" id="description" class="form-control" rows="20">
                            {{ $team_header->description }}
                        </textarea>
                    </div>


                    <button type="submit" class="btn btn-primary">Update</button>
                </form>



            </div>

             

            <!--teams -->
            <div class="col-md-8">
                <div class="row">
                    <div class="container-fluid">
                        <h1>
                            Teams
                        </h1>
                        <button class="btn btn-success btn-add-new" data-toggle="modal" data-target="#teamModal">
                            <i class="voyager-plus"></i> <span>Add New</span>
                        </button>
                    </div>
                </div>

                @if ($teams->isEmpty())
                    <div class="text-center">
                        <!-- Display the SVG image -->
                        <img src="{{ asset('images/no-team-found.svg') }}" alt="No team Found" class="img-fluid">
                        <!-- Or display a text message -->
                        <p>No teams found.</p>
                    </div>
                @else
                    <table id="dataTable" class="table table-hover dataTable no-footer" role="grid"
                        aria-describedby="dataTable_info">
                        <thead>
                            <tr role="row">
                                <th>Avatar</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                    colspan="1"
                                    aria-label="Name
                                                        : activate to sort column ascending"
                                    style="width: 76.25px;">
                                    Name
                                </th>

                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                    colspan="1"
                                    aria-label="Name
                                                        : activate to sort column ascending"
                                    style="width: 76.25px;">
                                    Job Description
                                </th>
                                <th>Link</th>
                                {{-- <th>Social Icon</th> --}}


                                <th class="text-right actions dt-not-orderable sorting_disabled" rowspan="1"
                                    colspan="1" aria-label="Actions" style="width: 291.4px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teams as $team)
                                <tr role="row" class="odd" id="team-{{ $team->id }}">


                                    <td>
                                        @if ($team->image)
                                            @if ($team->image)
                                                <img src="{{ asset($team->image) }}" class="card-img-top"
                                                    alt="{{ $team->title }}" width="80" height="80" mt-2
                                                    style="border-radius: 10%">
                                            @endif
                                        @else
                                            <p>No image available</p>
                                        @endif
                                    </td>

                                    <td>
                                        <div>{{ $team->name }}</div>
                                    </td>

                                    <td>
                                        <div>{!! \Illuminate\Support\Str::limit($team->job_desc, 80) !!}</div>
                                    </td>

                                    <td>
                                        <div>{{ $team->link }}</div>
                                    </td>

                                    {{-- <td>
                                        @if ($team->socials)
                                            @if ($team->socials)
                                                <img src="{{ asset( $team->socials) }}"
                                                    class="card-img-top" alt="{{ $team->socials }}" width="20"
                                                    height="20" mt-2>
                                            @endif
                                        @else
                                            <p>No image available</p>
                                        @endif
                                    </td> --}}

                                    <td class="no-sort no-click bread-actions">
                                        <a href="{{ route('team.edit', $team->id) }}" title="Edit"
                                            class="btn btn-sm btn-primary pull-right edit">
                                            <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
                                        </a>
                                        <a href="javascript:;" title="Delete"
                                            class="btn btn-sm btn-danger pull-right deleteTeam"
                                            data-id="{{ $team->id }}" id="delete-{{ $team->id }}">
                                            <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                                        </a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {!! $teams->links('vendor.pagination.bootstrap-4') !!}

                @endif
            </div>

            <!-- merchant -->
            <div class="col-md-6">
                <h1>Edit Merchant Section</h1>

                <form action="{{ route('merchant.update', $merchant->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control"
                            value="{{ $merchant->title }}">
                    </div>

                    <div class="form-group">
                        <label for="button_text">Button Text</label>
                        <input type="text" name="button_text" id="button_text" class="form-control"
                            value="{{ $merchant->button_text }}">
                    </div>

                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="url" name="link" id="link" class="form-control"
                            value="{{ $merchant->link }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="text" name="description" id="description" class="form-control" rows="20">
                            {{ $merchant->description }}
                        </textarea>
                    </div>


                    <button type="submit" class="btn btn-primary">Update</button>
                </form>



            </div>

            <!--advantage-->
            <div class="col-md-6">
                <div class="row">
                    <div class="container-fluid">
                        <h1>
                            Advantages
                        </h1>
                        <button class="btn btn-success btn-add-new" data-toggle="modal" data-target="#advantagesModal">
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

                            <th class="text-right actions dt-not-orderable sorting_disabled" rowspan="1"
                                colspan="1" aria-label="Actions" style="width: 291.4px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($section_v as $sec)
                            <tr role="row" class="odd">

                                <td>
                                    <div>{{ $sec->title }}</div>
                                </td>

                                <td>
                                    <div>{!! \Illuminate\Support\Str::limit($sec->description, 80) !!}</div>
                                </td>

                                <td class="no-sort no-click bread-actions">
                                    <a href="{{ route('advantage.edit', $sec->id) }}" title="Edit"
                                        class="btn btn-sm btn-primary pull-right edit">
                                        <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
                                    </a>
                                    <a href="javascript:;" title="Delete"
                                        class="btn btn-sm btn-danger pull-right deleteAdvantage"
                                        data-id="{{ $sec->id }}" id="delete-{{ $sec->id }}">
                                        <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                                    </a>

                                    {{-- <a href="javascript:;" title="Delete"
                                    class="btn btn-sm btn-danger pull-right deleteTeam"
                                    data-id="{{ $team?->id }}" id="delete-{{ $team?->id }}">
                                    <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                                </a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {!! $section_v->links('vendor.pagination.bootstrap-4') !!}


            </div>


        </div>
    </div>


    {{-- Team Modal Structure --}}
    <div class="modal fade" id="teamModal" tabindex="-1" aria-labelledby="teamModalLabel" aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="benefitsModalLabel">New Team</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <!-- Modal body content -->
                        <div class="form-group">
                            <label for="title">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="link">Link</label>
                            <input type="text" name="link" id="link" class="form-control" value="">
                        </div>

                        <div class="form-group">
                            <label for="image">Upload Picture</label>
                            <input type="file" name="image" id="image" class="form-control-file">
                        </div>

                        <div class="form-group">
                            <label for="socials">Upload Social Icon</label>
                            <input type="file" name="socials" id="socials" class="form-control-file">
                        </div>

                        <div class="form-group">
                            <label for="job_desc">Job Description</label>
                            <textarea type="text" name="job_desc" id="job_desc" class="form-control"></textarea>
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

    {{-- Advantages Modal Structure --}}
    <div class="modal fade" id="advantagesModal" tabindex="-1" aria-labelledby="featuresModalLabel"
        aria-hidden="true">
        <form action="{{ route('advantage.store') }}" method="POST">

            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="featuresModalLabel">New Advantages</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">


                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="">
                        </div>

                        <div class="form-group">
                            <label for="title">Link</label>
                            <input type="text" name="link" id="link" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea type="text" name="description" id="editor"  class="form-control" value=""></textarea>
                        </div>

                        {{-- <div class="form-group">
                            <label>List Items</label>
                            <div id="listItemsContainer">
                            </div>
                            <button type="button" class="btn btn-secondary mt-2" onclick="addListItem()">Add List Item</button>
                        </div> --}}


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </form>
    </div>


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


        $(document).on('click', '.deleteTeam', function() {
            var teamID = $(this).data('id');
            if (confirm('Are you sure you want to delete this Team Member?')) {
                $.ajax({
                    url: '/admin/team/' + teamID,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#delete-' + teamID).closest('tr').remove();
                            alert(response.success);
                            location.reload();
                        }
                    },
                    error: function(response) {
                        alert('Error deleting question');
                    }
                });
            }
        });

        $(document).on('click', '.deleteAdvantage', function() {
            var teamID = $(this).data('id');
            var SecId = $(this).data('id');
            if (confirm('Are you sure you want to delete this Delete Advantage?')) {
                $.ajax({
                    url: '/admin/advantage/' + SecId,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#delete-' + SecId).closest('tr').remove();
                            alert(response.success);
                            location.reload();
                        }
                    },
                    error: function(response) {
                        alert('Error deleting Advantage');
                    }
                });
            }
        });
    </script>




@endsection
