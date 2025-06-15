@extends('voyager::master')

@section('page_title', __('pages'))

@section('content')
<div class="page-content">
    @include('voyager::alerts')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div id="accordion">
                    @foreach($sections as $section)
                    <div class="card">
                        <div class="card-header ui-sortable-handle" id="heading1" style="
                            display: flex;
                            justify-content: space-between;
                            align-content: center;
                            align-items: center;
                            width: 100%;
                        ">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    {{$section->name}}
                                </button>
                            </h2>
                            <div class="ml-auto">
                                <a href="" class="btn btn-primary btn-sm">Edit</a>
                                <a href="" class="btn btn-success btn-sm">view</a>
                            </div>
                        </div>
                    
                        <div id="collapse{{ $section->id }}" class="collapse" aria-labelledby="heading{{ $section->id }}" data-parent="#accordion">
                            <div class="card-body">
                                {{-- Content of the section --}}
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        $("#accordion").sortable({
            items: ".card",
            handle: ".card-header",
            update: function(event, ui) {
                var positions = [];
                $(".card").each(function(index) {
                    var id = $(this).find(".card-header").attr("id").replace("heading", "");
                    var position = index + 1;
                    positions.push({ id: id, position: position });
                });
    
                console.log(positions); // Debug output to inspect the positions array
    
                // Send AJAX request to update positions
                $.ajax({
                    url: "{{ route('update-section-positions') }}",
                    method: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        positions: positions
                    },
                    success: function(response) {
                        console.log(response);
                        Swal.fire({
                        title: "Success!",
                        text: "Position changed successfully!",
                        icon: "success"
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }
        });
    });
    </script>
    
    
    
    
@endsection
