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
            <div class="col-md-12">
                <div class="row">
                    <div class="container-fluid">
                        <h1>
                            ICO Round
                        </h1>
                        {{-- <button class="btn btn-success btn-add-new" data-toggle="modal" data-target="#iocRoundModal">
                            <i class="voyager-plus"></i> <span>Add New</span>
                        </button> --}}
                    </div>
                </div>

                <table id="dataTable" class="table table-hover dataTable no-footer" role="grid"
                    aria-describedby="dataTable_info">
                    <thead>
                        <tr role="row">
                            <th>#</th>
                            <th>Title</th>
                            <th>Stake price</th>
                            <th>Raised price</th>
                            <th>Sold Allocation</th>
                            <th>Currency</th>

                            <th class="text-right actions dt-not-orderable sorting_disabled" rowspan="1" colspan="1"
                                aria-label="Actions" style="width: 291.4px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($iocs as $key => $ioc)
                        <tr role="row" class="{{ $key % 2 == 0 ? 'even' : 'odd' }}">
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $ioc?->title }}</td>
                            <td>{{ $ioc?->stake_price }}</td>
                            <td>{{ $ioc?->raised_price }}</td>
                            <td>{{ $ioc?->sold_allocation }}</td>
                            <td>{{ $ioc?->currency }}</td>
                            <td class="no-sort no-click bread-actions">

                                {{-- <button class="btn btn-success btn-add-new" data-toggle="modal" data-target="#iocRoundModal">
                                    <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
                                </button> --}}
                                <a data-toggle="modal" data-target="#iocEdit-{{$ioc?->id}}" title="Edit" class="btn btn-sm btn-primary pull-right edit">
                                    <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
                                </a>

                                <form method="POST" action="{{ route('ioc.delete', ['id' => $ioc?->id]) }}" id="delete-form-{{ $ioc?->id }}" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                
                                <a href="javascript:;" title="Delete" class="btn btn-sm btn-danger pull-right deleteIoc"
                                   data-id="{{ $ioc?->id }}" id="delete-{{ $ioc?->id }}"
                                   onclick="submitDeleteForm({{ $ioc?->id }})">
                                   <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                                </a>

                             
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        
    </div>


    @foreach ($iocs as $r)
    <div class="modal fade" id="iocEdit-{{$r?->id}}" tabindex="-1" aria-labelledby="faqModalLabel" aria-hidden="true">
        <form action="{{ route('ioc.round', $r?->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="partnersModalLabel">Edit Ioc Round</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Modal body content -->


                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" value="{{$r?->title}}" name="title"  id="title" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="title">Stake Price</label>
                            <input type="number" value="{{$r?->stake_price}}" name="stake_price" id="title" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="title">Raised Price</label>
                            <input type="number" value="{{$r?->raised_price}}" name="raised_price" id="title" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="title">Sold Allocation</label>
                            <input type="number" value="{{$r?->sold_allocation}}" name="sold_allocation" id="title" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="title">Currency</label>
                            <input type="text" value="{{$r?->currency}}" name="currency" id="title" class="form-control" value="">
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
    @endforeach

   
    <script>
        function submitDeleteForm(iocId) {
            if (confirm('Are you sure you want to delete this Ioc?')) {
                var formId = 'delete-form-' + iocId;
                document.getElementById(formId).submit();
            }
        }
    </script>
    
    

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    

  

@endsection
