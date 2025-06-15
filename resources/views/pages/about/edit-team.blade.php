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
            <div class="col-md-6">
                <h1>Edit Team -- {{ $team?->name }} </h1>

                <form action="{{ route('team.update', $team?->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Name</label>
                        <input type="text" name="name" id="name" class="form-control"
                            value="{{ $team?->name }}">
                    </div>
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" name="link" id="link" class="form-control"
                            value="{{ $team?->link }}">
                    </div>

                    <div class="form-group">
                        <label for="image">Upload Picture</label>
                        <input type="file" name="image" id="image" class="form-control">
                        @if ($team?->image)
                            <img src="{{ asset( $team?->image) }}" class="card-img-top"
                                alt="{{ $team?->link }}" width="150" height="150" mt-2>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="socials">Upload Social Icon</label>
                        <input type="file" name="socials" id="socials" class="form-control">
                        @if ($team?->socials)
                            <img src="{{ asset( $team?->socials) }}" class="card-img-top"
                                alt="{{ $team?->socials }}" width="150" height="150" mt-2>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="job_desc">Job Description</label>
                        <textarea type="text" name="job_desc" id="job_desc" class="form-control" value="">{{ $team->job_desc }}</textarea>
                    </div>





                    <button type="submit" class="btn btn-primary">Update</button>
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
