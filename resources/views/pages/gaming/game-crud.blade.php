@extends('voyager::master')

@section('page_title', __('pages'))

@section('content')

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<div class="container">
    <div class="row justify-content-center" style="
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    ">

        <div class="col-md-12">
            <h1>Gaming Section</h1>

            <form action="{{ route('gaming.page.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- @method('PUT') --}}

                <div class="form-group row">


                    <div class="col-md-6">
                        <label for="texti">Texti</label>
                        <input type="text" name="texti" id="texti" class="form-control"
                            value="{{ old('texti', $dat->texti ?? '') }}">
                    </div>
                    <div class="col-md-6">
                        <img src="/sites/default/files/css/gaming-folder/texti.png" class="w-100 ps-2"  
                            alt="/Peernetics%20Dashnoard%20UI">
                    </div>

                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="textii">Textii</label>
                        <input type="text" name="textii" id="textii" class="form-control"
                            value="{{ old('textii', $dat->textii ?? '') }}">
                    </div>
                    <div class="col-md-6">
                        <img src="/sites/default/files/css/gaming-folder/textii.png" class="w-100 ps-2"  
                            alt="/Peernetics%20Dashnoard%20UI">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="hero_text">Hero Text</label>
                        <input type="text" name="hero_text" id="hero_text" class="form-control"
                            value="{{ old('hero_text', $dat->hero_text ?? '') }}">
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="link">Google Link (Eg. http://peernatic.io/WHATEVERLINK)</label>
                    <input type="text" name="google_store_link" id="google_store_link" class="form-control"
                        value="{{ old('google_store_link', $dat->google_store_link ?? '') }}">
                </div>
                <div class="form-group">
                    <label for="link">Apple Link (Eg. http://peernatic.io/WHATEVERLINK)</label>
                    <input type="text" name="apple_store_link" id="apple_store_link" class="form-control"
                        value="{{ old('apple_store_link', $dat->apple_store_link ?? '') }}">
                </div>

                <div class="form-group">
                    <label for="image">Upload Display Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                    <img src="{{ asset($dat->image) }}" class="w-100 ps-2" height="150" width="200"
                        alt="/Peernetics%20Dashnoard%20UI">
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>

        </div>

    </div>
</div>

{{-- Benefit Modal Structure --}}
<div class="modal fade" id="benefitsModal" tabindex="-1" aria-labelledby="benefitsModalLabel" aria-hidden="true">
    {{-- <form action="{{ route('benefit.store') }}" method="POST"> --}}
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


<script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .catch( error => {
                    console.error( error );
                } );
</script>

{{-- <script src="https://cdn.tiny.cloud/1/sclhx95zmw1pilwosn8sbf3iz7mvnaj2pzt1fk3rww7foba9/tinymce/7/tinymce.min.js"
    referrerpolicy="origin"></script>

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