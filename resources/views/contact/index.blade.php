@extends('voyager::master')

@section('page_title', __('pages'))

@section('content')
    <div class="page-content container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <table id="dataTable" class="table table-hover dataTable no-footer" role="grid" aria-describedby="dataTable_info">
                        <thead>
                            <tr role="row">
                                <th>ID</th>
                            </tr>
                        </thead>
                       
                    </table>
                    </div>
                </div>
            </div>
        </div><!-- .col-md-12 -->
    </div><!-- .page-content container-fluid -->
@stop

@section('javascript')
    <script>
        $(document).ready(function() {
        $('#dataTable').DataTable({
            "order": [],
            "columnDefs": [{
                "targets": 'no-sort',
                "orderable": false
            }]
        });
    });
    </script>
    
@endsection
