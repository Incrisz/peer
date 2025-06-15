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
                <h1>Edit question</h1>

                <form action="{{ route('questionitem.update', $questionItem->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control"
                            value="{{ $questionItem->title}}">
                    </div>

                    <div class="form-group">
                        <label for="link_text">Link Text</label>
                        <input type="text" name="link_text" id="link_text" class="form-control"
                            value="{{$questionItem->link_text}}">
                    </div>

                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" name="link" id="link" class="form-control"
                            value="{{ $questionItem->link }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="text" name="description" id="description" class="form-control" rows="20">
                            {{ $questionItem->description }}
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="icon">Icon</label>
                        <input type="file" name="icon" id="icon" class="form-control-file">
                        @if ($questionItem->icon)
                            <img src="{{ asset( $questionItem->icon) }}" class="card-img-top"
                                alt="{{ $questionItem->title }}" width="150" height="150" mt-2>
                        @endif
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
