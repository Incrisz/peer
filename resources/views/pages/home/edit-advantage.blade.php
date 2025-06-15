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
            <h1>Edit feature</h1>

            <form action="{{ route('advantage.update', $feature->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $feature->title }}">
                </div>
                <div class="form-group">
                    <label for="title">Link</label>
                    <input type="text" name="link" id="link" class="form-control" value="{{$feature->link}}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" name="description" id="editor" class="form-control" rows="20">
                            {{ $feature->description }}
                        </textarea>
                    {{-- <textarea type="text" name="description" id="mytextarea" class="form-control" rows="20">
                            {{ $feature->description }}
                        </textarea> --}}
                </div>


                {{-- @if ($feature->list == null)
                
                <div class="form-group">
                    <label>List Items</label>
                    <div id="listItemsContainer">
                    </div>
                    <button type="button" class="btn btn-secondary mt-2" onclick="addListItem()">Add List Item</button>
                </div>

                @else
                

                <div class="form-group">
                    <label>List Items</label>
                    <div id="listItemsContainer">

                        @foreach(json_decode($feature->list) as $index => $item)
                        
                        <div class="input-group mb-2">
                            <input type="text" name="listItems[]" class="form-control" value="{{ $item }}">
                            <button type="button" class="btn btn-danger" onclick="removeListItem(this)">Remove</button>
                        </div>
                        @endforeach
                    </div>
                    <button type="button" class="btn btn-secondary mt-2" onclick="addListItem()">Add List Item</button>
                </div>
                @endif --}}

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

<script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>

@endsection