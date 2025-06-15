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
        <div class="row justify-content-center" style="display: flex; flex-direction: row;flex-wrap: wrap;">

            <div class="col-md-6">
                <div class="row">
                    <div class="container-fluid">
                        <h1>
                            Faqs Questions
                        </h1>
                        <button class="btn btn-success btn-add-new" data-toggle="modal" data-target="#faqModal">
                            <i class="voyager-plus"></i> <span>Add New</span>
                        </button>
                    </div>
                </div>

                <table id="dataTable" class="table table-hover dataTable no-footer" role="grid"
                    aria-describedby="dataTable_info">
                    <thead>
                        <tr role="row">
                            <th>#</th>
                            <th>Title</th>
                            <th>Desc</th>

                            <th class="text-right actions dt-not-orderable sorting_disabled" rowspan="1" colspan="1"
                                aria-label="Actions" style="width: 291.4px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($faqs as $key => $faq)
                        <tr role="row" class="{{ $key % 2 == 0 ? 'even' : 'odd' }}">
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $faq->title }}</td>
                            <td>{{ $faq->description }}</td>
                            <td class="no-sort no-click bread-actions">
                                <a href="{{route('faq.edit', $faq->id) }}" title="Edit" class="btn btn-sm btn-primary pull-right edit">
                                    <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
                                </a>

                                <form method="POST" action="{{ route('faq.delete', ['id' => $faq->id]) }}" id="delete-form-{{ $faq->id }}" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                
                                <a href="javascript:;" title="Delete" class="btn btn-sm btn-danger pull-right deleteFaq"
                                   data-id="{{ $faq->id }}" id="delete-{{ $faq->id }}"
                                   onclick="submitDeleteForm({{ $faq->id }})">
                                   <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                                </a>

                             
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

            <div class="col-md-6">
                <h1>Update FAQ Header Image</h1>

                @foreach($faq_banner_images as $faq_banner_image)
                <form action="{{ route('update.faq.banner', ['id' => $faq_banner_image->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control-file">
                        <br>
                        <img src="{{ asset($faq_banner_image->image) }}" class="card-img-top" alt="" width="100%" height="100%" mt-2>
                    </div>
            
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            @endforeach



            </div>


        </div>
    </div>


     {{-- Faq add Modal Structure --}}
     <div class="modal fade" id="faqModal" tabindex="-1" aria-labelledby="faqModalLabel" aria-hidden="true">
        <form action="{{ route('faq.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="partnersModalLabel">New Faq Question</h5>
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
                            <label for="desc">Desc</label>
                        
                            <textarea type="text" name="description" id="description" class="form-control" rows="20">
                               
                            </textarea>

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
    {{-- end of Faq Add Modal Structure --}}

   
    <<script>
        function submitDeleteForm(faqId) {
            if (confirm('Are you sure you want to delete this FAQ?')) {
                var formId = 'delete-form-' + faqId;
                document.getElementById(formId).submit();
            }
        }
    </script>
    
    

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    

  

@endsection
