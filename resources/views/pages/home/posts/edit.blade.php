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
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Edit {{ $blog->title }}</h1>

                <form action="{{ route('blogs.update', $blog->slug) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control"
                            value="{{ $blog->title }}">
                    </div>

                    <div class="form-group">
                        <label for="featured_image">Featured Image</label>
                        <input type="file" name="featured_image" id="featured_image" class="form-control-file">
                        @if ($blog->featured_image)
                            <img src="{{ asset( $blog->featured_image) }}" class="card-img-top"
                                alt="{{ $blog->title }}" width="150" height="150" mt-2>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="content">Description</label>
                        <textarea type="text" name="content" id="content" class="form-control" rows="20">
                            {!! $blog->content !!}
                        </textarea>
                    </div>



                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>


@endsection

@section('javascript')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
