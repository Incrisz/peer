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
                <h1>Edit Pns Item</h1>

                <form action="{{ route('wallet.update', $wallet->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        {{-- <label for="title">Title</label> --}}
                        <input type="hidden" name="title" id="title" class="form-control" value="BROWSERS/WALLETS">
                    </div>

                    <div class="form-group">
                        <label for="button_text">Button Text</label>
                        <input type="text" name="button_text" id="button_text" class="form-control"
                            value="{{ $wallet->button_text }}">
                    </div>

                    <div class="form-group">
                        <label for="title">Link</label>
                        <input type="url" name="link" id="link" class="form-control"
                            value="{{ $wallet->link }}">
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control-file">
                        @if ($wallet->image)
                            <img src="{{ asset( $wallet->image) }}" class="card-img-top"
                                alt="{{ $wallet->link }}" width="150" height="150" mt-2>
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
