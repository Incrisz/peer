@extends('voyager::master')

@section('page_title', __('pages'))

@section('content')

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
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
                <h1>Edit Banner</h1>

                <form action="{{ route('banner.update') }}" method="POST" onsubmit="prepareJsonData()">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control"
                            value="{{ old('title', $banner->title ?? '') }}">
                    </div>

                    <div class="form-group">
                        <label for="middle_text">Middle Text</label>
                        <input type="text" name="middle_text" id="middle_text" class="form-control"
                            value="{{ old('middle_text', $banner->middle_text ?? '') }}">
                    </div>

                    <div class="form-group">
                        <label for="subtitle">Subtitle</label>
                        <input type="text" name="subtitle" id="subtitle" class="form-control"
                            value="{{ old('subtitle', $banner->subtitle ?? '') }}">
                    </div>

                    <div class="form-group">
                        <label for="loyalty_button_text">Loyalty Button Text</label>
                        <input type="text" name="loyalty_button_text" id="loyalty_button_text" class="form-control"
                            value="{{ old('loyalty_button_text', $banner->loyalty_button_text ?? '') }}">
                    </div>

                    <div class="form-group">
                        <label for="ico_button_text">ICO Button Text</label>
                        <input type="text" name="ico_button_text" id="ico_button_text" class="form-control"
                            value="{{ old('ico_button_text', $banner->ico_button_text ?? '') }}">
                    </div>

                    <div class="form-group">
                        <label for="ico_button_text">ICO Button Link</label>
                        <input type="text" name="ico_button_url" id="ico_button_url" class="form-control"
                            value="{{ old('ico_button_url', $banner->ico_button_url ?? '') }}">
                    </div>

                    <div class="form-group">
                        <label for="ico_button_text">Loyalty Button Link</label>
                        <input type="text" name="loyalty_button_url" id="loyalty_button_url" class="form-control"
                            value="{{ old('loyalty_button_url', $banner->loyalty_button_url ?? '') }}">
                    </div>


                    <div class="form-group">
                        <label for="images">Images (JSON format)</label>
                        <textarea name="images" id="images" class="form-control" rows="10">{{ old('images', $banner->images ?? '[]') }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>

            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="container-fluid">
                        <h1>
                            Benefits
                        </h1>
                        {{-- <button class="btn btn-success btn-add-new" data-toggle="modal" data-target="#benefitsModal">
                            <i class="voyager-plus"></i> <span>Add New</span>
                        </button> --}}
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
                        @foreach ($sec_home as $sec)
                            <tr role="row" class="odd" id="benefit-{{ $sec->id }}">
                                <td>
                                    <div>{{ $sec->title }}</div>
                                </td>

                                <td>
                                    <div>{{ $sec->description }}</div>
                                </td>

                                <td class="no-sort no-click bread-actions">
                                    <a href="{{ route('benefit.edit', $sec->id) }}" title="Edit"
                                        class="btn btn-sm btn-primary pull-right edit">
                                        <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
                                    </a>


                                    <a href="javascript:;" title="Delete"
                                        class="btn btn-sm btn-danger pull-right deleteBenefit"
                                        data-id="{{ $sec->id }}" id="delete-{{ $sec->id }}">
                                        <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {!! $sec_home->links('vendor.pagination.bootstrap-4') !!}


            </div>

            <div class="col-md-6">
                <h1>Gaming Section</h1>

                <form action="{{ route('update_gaming.section', $dat?->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    {{-- @method('PUT') --}}

                    <div class="form-group">
                        <label for="texti">Title (will not be displayed.)</label>
                        <input type="text" name="title" id="title" class="form-control"
                            value="{{ old('title', $dat->title ?? '') }}">
                    </div>

                    <div class="form-group">
                        <label for="textiii">Button Name (Will be displayed.)</label>
                        <input type="text" name="btn_name" id="btn_name" class="form-control"
                            value="{{ old('btn_name', $dat->btn_name ?? '') }}">
                    </div>
                    <div class="form-group">
                        <label for="textiii">Button Link (Eg. http://peernatic.io/WHATEVERLINK)</label>
                        <input type="text" name="btn_link" id="btn_link" class="form-control"
                            value="{{ old('btn_link', $dat->btn_link ?? '') }}">
                    </div>

                    <div class="form-group">
                        <label for="images">Decsription</label>
                        <textarea name="description" id="description" class="form-control" rows="10">{{ old('description', $dat->description ?? '[]') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Upload mobile view Image</label>
                        <input type="file" name="mobile_image" id="mobile_image" class="form-control">
                        <img src="{{ asset($dat->mobile_image) }}" class="w-100 ps-2" height="150" width="200"
                            alt="/Peernetics%20Dashnoard%20UI">
                    </div>
                    <div class="form-group">
                        <label for="image">Upload desktop view Image</label>
                        <input type="file" name="desktop_image" id="desktop_image" class="form-control">
                        <img src="{{ asset($dat->desktop_image) }}" class="w-100 ps-2" height="150" width="200"
                            alt="/Peernetics%20Dashnoard%20UI">
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>

            </div>
            
            {{-- this section was replaced with the above section --}}
            {{-- <div class="col-md-6">
                <h1>Accept Crypto Section</h1>

                <form action="{{ route('update_seciii.update', $dat->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="texti">Text 1</label>
                        <input type="text" name="texti" id="texti" class="form-control"
                            value="{{ old('txti', $dat->texti ?? '') }}">
                    </div>

                    <div class="form-group">
                        <label for="textii">Text 2</label>
                        <input type="text" name="textii" id="textii" class="form-control"
                            value="{{ old('txtii', $dat->textii ?? '') }}">
                    </div>

                    <div class="form-group">
                        <label for="btn_name">Text 3</label>
                        <input type="text" name="textiii" id="textiii" class="form-control"
                            value="{{ old('txtiii', $dat->textiii ?? '') }}">
                    </div>

                    <div class="form-group">
                        <label for="textiv">Text 4</label>
                        <input type="text" name="textiv" id="textiv" class="form-control"
                            value="{{ old('txtiv', $dat->textiv ?? '') }}">
                    </div>

                    <div class="form-group">
                        <label for="textv">Text 5</label>
                        <input type="text" name="textv" id="textv" class="form-control"
                            value="{{ old('txtv', $dat->textv ?? '') }}">
                    </div>

                    <div class="form-group">
                        <label for="textvi">Text 6</label>
                        <input type="text" name="textvi" id="textvi" class="form-control"
                            value="{{ old('txtvi', $dat->textvi ?? '') }}">
                    </div>

                    <div class="form-group">
                        <label for="image">Upload Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                        <img src="{{ asset($dat->image) }}" class="w-100 ps-2" height="150" width="200"
                            alt="/Peernetics%20Dashnoard%20UI">
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>

            </div> --}}
            {{-- this section was replaced with the above section --}}
            {{-- <div class="col-md-6">
                <div class="row">
                    <div class="container-fluid">
                        <h1>
                            Key Features
                        </h1>
                        <button class="btn btn-success btn-add-new" data-toggle="modal" data-target="#featuresModal">
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
                        @foreach ($section_iv as $sec)
                            <tr role="row" class="odd">

                                <td>
                                    <div>{{ $sec->title }}</div>
                                </td>

                                <td>
                                    <div>{{ $sec->description }}</div>
                                </td>

                                <td class="no-sort no-click bread-actions">
                                    <a href="{{ route('seciv.edit', $sec->id) }}" title="Edit"
                                        class="btn btn-sm btn-primary pull-right edit">
                                        <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
                                    </a>

                                    <a href="javascript:;" title="Delete"
                                        class="btn btn-sm btn-danger pull-right deleteFeature"
                                        data-id="{{ $sec->id }}" id="delete-{{ $sec->id }}">
                                        <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {!! $section_iv->links('vendor.pagination.bootstrap-4') !!}


            </div> --}}

            <!--advantage-->
            {{-- <div class="col-md-6">
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
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {!! $section_v->links('vendor.pagination.bootstrap-4') !!}


            </div> --}}

            <!-- blog -->
            <div class="col-md-6">
                <div class="row">
                    <div class="container-fluid">
                        <h1>
                            Blogs
                        </h1>
                        <a class="btn btn-success btn-add-new" href="{{ route('blogs.create') }}">
                            <i class="voyager-plus"></i> <span>Add New</span>
                        </a>
                    </div>
                </div>

                @if ($blogs->isEmpty())
                    <div class="text-center">
                        <!-- Display the SVG image -->
                        <img src="{{ asset('images/no-blog-found.svg') }}" alt="No Blog Found" class="img-fluid">
                        <!-- Or display a text message -->
                        <p>No blogs found.</p>
                    </div>
                @else
                    <table id="dataTable" class="table table-hover dataTable no-footer" role="grid"
                        aria-describedby="dataTable_info">
                        <thead>
                            <tr role="row">

                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                    colspan="1"
                                    aria-label="Name
                                                        : activate to sort column ascending"
                                    style="width: 76.25px;">
                                    Title
                                </th>

                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                    colspan="1"
                                    aria-label="Name
                                                        : activate to sort column ascending"
                                    style="width: 76.25px;">
                                    Description
                                </th>
                                <th>Image</th>
                                <th>Created By</th>

                                <th class="text-right actions dt-not-orderable sorting_disabled" rowspan="1"
                                    colspan="1" aria-label="Actions" style="width: 291.4px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                                <tr role="row" class="odd" id="blog-{{ $blog->slug }}">

                                    <td>
                                        <div>{{ $blog->title }}</div>
                                    </td>

                                    <td>
                                        <div>{!! \Illuminate\Support\Str::limit($blog->content, 80) !!}</div>
                                    </td>

                                    <td>
                                        @if ($blog->featured_image)
                                            @if ($blog->featured_image)
                                                <img src="{{ asset($blog->featured_image) }}" class="card-img-top"
                                                    alt="{{ $blog->title }}" width="80" height="80" mt-2>
                                            @endif
                                        @else
                                            <p>No image available</p>
                                        @endif
                                    </td>
                                    <td>{{ $blog->user->name }}</td>


                                    <td class="no-sort no-click bread-actions">
                                        <a href="{{ route('blogs.edit', $blog->slug) }}" title="Edit"
                                            class="btn btn-sm btn-primary pull-right edit">
                                            <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
                                        </a>
                                        <a href="javascript:;" title="Delete"
                                            class="btn btn-sm btn-danger pull-right delete"
                                            data-slug="{{ $blog->slug }}" id="delete-{{ $blog->slug }}">
                                            <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                                        </a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {!! $blogs->links('vendor.pagination.bootstrap-4') !!}

                @endif
            </div>

            <!--featured on -->
            <div class="col-md-6">
                <div class="row">
                    <div class="container-fluid">
                        <h1>
                            Featured Images
                        </h1>
                        <button class="btn btn-success btn-add-new" data-toggle="modal" data-target="#featuredModal">
                            <i class="voyager-plus"></i> <span>Add New</span>
                        </button>
                    </div>
                </div>

                @if ($featureds->isEmpty())
                    <div class="text-center">
                        <!-- Display the SVG image -->
                        <img src="{{ asset('images/no-blog-found.svg') }}" alt="No Blog Found" class="img-fluid">
                        <!-- Or display a text message -->
                        <p>No Featured Image found.</p>
                    </div>
                @else
                    <table id="dataTable" class="table table-hover dataTable no-footer" role="grid"
                        aria-describedby="dataTable_info">
                        <thead>
                            <tr role="row">
                                <th>Alt Text</th>
                                <th>Image</th>

                                <th class="text-right actions dt-not-orderable sorting_disabled" rowspan="1"
                                    colspan="1" aria-label="Actions" style="width: 291.4px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($featureds as $featured)
                                <tr role="row" class="odd">

                                    <td>{{ $featured->title }}</td>


                                    <td>
                                        @if ($featured->image)
                                            @if ($featured->image)
                                                <img src="{{ asset($featured->image) }}" class="card-img-top"
                                                    alt="{{ $featured->title }}" width="60" height="20" mt-2>
                                            @endif
                                        @else
                                            <p>No image available</p>
                                        @endif
                                    </td>


                                    <td class="no-sort no-click bread-actions">
                                        <a href="{{ route('feature.edit', $featured->id) }}" title="Edit"
                                            class="btn btn-sm btn-primary pull-right edit">
                                            <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
                                        </a>
                                        <a href="javascript:;" title="Delete"
                                            class="btn btn-sm btn-danger pull-right deleteFeatured"
                                            data-id="{{ $featured->id }}" id="delete-{{ $featured->id }}">
                                            <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                                        </a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {!! $featureds->links('vendor.pagination.bootstrap-4') !!}

                @endif
            </div>

            <!--question-->
            <div class="col-md-6">
                <div class="row">
                    <div class="container-fluid">
                        <h1>
                            Question
                        </h1>
                        <button class="btn btn-success btn-add-new" data-toggle="modal" data-target="#questionModal">
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
                        @foreach ($questions as $question)
                            <tr role="row" class="odd">

                                <td>
                                    <div>{!! $question->title !!}</div>
                                </td>

                                <td>
                                    <div>{!! \Illuminate\Support\Str::limit($question->description, 80) !!}</div>
                                </td>

                                <td class="no-sort no-click bread-actions">
                                    <a href="{{ route('question.edit', $question->id) }}" title="Edit"
                                        class="btn btn-sm btn-primary pull-right edit">
                                        <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
                                    </a>
                                    <a href="javascript:;" title="Delete" class="btn btn-sm btn-danger pull-right delete"
                                        data-id="2" id="delete-2">
                                        <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {!! $questions->links('vendor.pagination.bootstrap-4') !!}


            </div>

            <!--question item-->
            <div class="col-md-6">
                <div class="row">
                    <div class="container-fluid">
                        <h1>
                            Question Items
                        </h1>
                        <button class="btn btn-success btn-add-new" data-toggle="modal" data-target="#questionItemModal">
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
                        @foreach ($questionItems as $questionItem)
                            <tr role="row" class="odd">

                                <td>
                                    <div>{!! $questionItem->title !!}</div>
                                </td>

                                <td>
                                    <div>{!! \Illuminate\Support\Str::limit($questionItem->description, 80) !!}</div>
                                </td>

                                <td class="no-sort no-click bread-actions">
                                    <a href="{{ route('questionitem.edit', $questionItem->id) }}" title="Edit"
                                        class="btn btn-sm btn-primary pull-right edit">
                                        <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
                                    </a>
                                    <a href="javascript:;" title="Delete"
                                        class="btn btn-sm btn-danger pull-right deletequestionItem"
                                        data-id="{{ $questionItem->id }}" id="delete-{{ $questionItem->id }}">
                                        <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {!! $questionItems->links('vendor.pagination.bootstrap-4') !!}


            </div>
        </div>
    </div>

    {{-- Benefit Modal Structure --}}
    <div class="modal fade" id="benefitsModal" tabindex="-1" aria-labelledby="benefitsModalLabel" aria-hidden="true">
        <form action="{{ route('benefit.store') }}" method="POST">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="benefitsModalLabel">New Benefits</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Modal body content -->

                        @csrf
                        @method('PUT')

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

    {{-- Features Modal Structure --}}
    <div class="modal fade" id="featuresModal" tabindex="-1" aria-labelledby="featuresModalLabel" aria-hidden="true">
        <form action="{{ route('seciv.store') }}" method="POST">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="featuresModalLabel">New Features</h5>
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
    {{-- end of first Modal Structure --}}

    {{-- Featured Modal Structure --}}
    <div class="modal fade" id="featuredModal" tabindex="-1" aria-labelledby="featuredModalLabel" aria-hidden="true">
        <form action="{{ route('feature.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="featuresModalLabel">New Features</h5>
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

    {{-- Question Modal Structure --}}
    <div class="modal fade" id="questionModal" tabindex="-1" aria-labelledby="quesionModalLabel" aria-hidden="true">
        <form action="{{ route('question.store') }}" method="POST">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="featuresModalLabel">New Question</h5>
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

    {{-- Question Item Modal Structure --}}
    <div class="modal fade" id="questionItemModal" tabindex="-1" aria-labelledby="quesionItemModalLabel"
        aria-hidden="true">
        <form action="{{ route('questionitem.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="featuresModalLabel">New Question Items</h5>
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
                            <label for="link_text">Link Text</label>
                            <input type="text" name="link_text" id="link_text" class="form-control" value="">
                        </div>

                        <div class="form-group">
                            <label for="link">Link</label>
                            <input type="text" name="link" id="link" class="form-control" value="">
                        </div>

                        <div class="form-group">
                            <label for="icon">Image</label>
                            <input type="file" name="icon" id="icon" class="form-control-file">

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

@endsection

@section('javascript')


<script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>

{{-- <script src="https://cdn.tiny.cloud/1/sclhx95zmw1pilwosn8sbf3iz7mvnaj2pzt1fk3rww7foba9/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
          selector: '#mytextarea'
        });
      </script> --}}

<script>
    // Function to add a new list item input
    function addListItem() {
        const container = document.getElementById('listItemsContainer');
        const newInputGroup = document.createElement('div');
        newInputGroup.classList.add('input-group', 'mb-2');
        newInputGroup.innerHTML = `
            <input type="text" name="listItems[]" class="form-control" placeholder="Enter list item">
            <button type="button" class="btn btn-danger" onclick="removeListItem(this)">Remove</button>
        `;
        container.appendChild(newInputGroup);
    }

    // Function to remove a list item input
    function removeListItem(button) {
        button.parentElement.remove();
    }
</script>
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


        $(document).on('click', '.delete', function() {
            var blogSlug = $(this).data('slug');
            if (confirm('Are you sure you want to delete this blog?')) {
                $.ajax({
                    url: '/admin/blogs/' + blogSlug,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#delete-' + blogSlug).closest('tr').remove();
                            alert(response.success);
                            location.reload();
                        }
                    },
                    error: function(response) {
                        alert('Error deleting blog');
                    }
                });
            }
        });


        $(document).on('click', '.deleteBenefit', function() {
            var benefitID = $(this).data('id');
            if (confirm('Are you sure you want to delete this benefit?')) {
                $.ajax({
                    url: '/admin/benefit/' + benefitID,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#delete-' + benefitID).closest('tr').remove();
                            alert(response.success);
                            location.reload();

                        }
                    },
                    error: function(response) {
                        alert('Error deleting benefit');
                    }
                });

            }
        });


        $(document).on('click', '.deleteFeature', function() {
            var featureID = $(this).data('id');
            if (confirm('Are you sure you want to delete this benefit?')) {
                $.ajax({
                    url: '/admin/seciv/' + featureID,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#delete-' + featureID).closest('tr').remove();
                            alert(response.success);
                            location.reload();
                        }
                    },
                    error: function(response) {
                        alert('Error deleting benefit');
                    }
                });
            }
        });


        $(document).on('click', '.deleteAdvantage', function() {
            var advantageID = $(this).data('id');
            if (confirm('Are you sure you want to delete this advantage?')) {
                $.ajax({
                    url: '/admin/advantage/' + advantageID,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#delete-' + advantageID).closest('tr').remove();
                            alert(response.success);
                            location.reload();
                        }
                    },
                    error: function(response) {
                        alert('Error deleting advantage');
                    }
                });
            }
        });

        $(document).on('click', '.deleteFeatured', function() {
            var advantageID = $(this).data('id');
            if (confirm('Are you sure you want to delete this feature?')) {
                $.ajax({
                    url: '/admin/feature/' + advantageID,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#delete-' + advantageID).closest('tr').remove();
                            alert(response.success);
                            location.reload();

                        }
                    },
                    error: function(response) {
                        alert('Error deleting feature');
                    }
                });
            }
        });

        $(document).on('click', '.deletequestionItem', function() {
            var questionID = $(this).data('id');
            if (confirm('Are you sure you want to delete this question?')) {
                $.ajax({
                    url: '/admin/question_item/' + questionID,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#delete-' + questionID).closest('tr').remove();
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
    </script>




@endsection
