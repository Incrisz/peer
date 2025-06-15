@extends('voyager::master')

@section('page_title', __('pages'))

@section('content')
    <div class="page-content container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <div id="dataTable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="dataTable" class="table table-hover dataTable no-footer" role="grid"
                                            aria-describedby="dataTable_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="dt-not-orderable sorting_disabled" rowspan="1"
                                                        colspan="1" aria-label="" style="width: 37.1875px;">
                                                        <input type="checkbox" class="select_all">
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Name
                                                                                    : activate to sort column ascending"
                                                        style="width: 76.25px;">
                                                        Name
                                                    </th>

                                                    <th class="text-right actions dt-not-orderable sorting_disabled"
                                                        rowspan="1" colspan="1" aria-label="Actions"
                                                        style="width: 291.4px;">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                @foreach ($pages as $page)
                                                    @if ($page->name == 'Home')
                                                        <tr role="row" class="odd">
                                                            <td>
                                                                <input type="checkbox" name="row_id" id="checkbox_2"
                                                                    value="2">
                                                            </td>
                                                            <td>
                                                                <div>{{ $page->name }}</div>
                                                            </td>

                                                            <td class="no-sort no-click bread-actions">
                                                                {{-- <a href="javascript:;" title="Delete"
                                                                class="btn btn-sm btn-danger pull-right delete"
                                                                data-id="2" id="delete-2">
                                                                <i class="voyager-trash"></i> <span
                                                                    class="hidden-xs hidden-sm">Delete</span>
                                                            </a> --}}
                                                                <a href="{{ route('page.home') }}" title="Edit"
                                                                    class="btn btn-sm btn-primary pull-right edit">
                                                                    <i class="voyager-edit"></i> <span
                                                                        class="hidden-xs hidden-sm">Edit</span>
                                                                </a>
                                                                <a href="/" title="View"
                                                                    class="btn btn-sm btn-warning pull-right view">
                                                                    <i class="voyager-eye"></i> <span
                                                                        class="hidden-xs hidden-sm">View</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @elseif ($page->name == 'About')
                                                        <tr role="row" class="odd">
                                                            <td>
                                                                <input type="checkbox" name="row_id" id="checkbox_2"
                                                                    value="2">
                                                            </td>
                                                            <td>
                                                                <div>{{ $page->name }}</div>
                                                            </td>

                                                            <td class="no-sort no-click bread-actions">
                                                                {{-- <a href="javascript:;" title="Delete"
                                                            class="btn btn-sm btn-danger pull-right delete"
                                                            data-id="2" id="delete-2">
                                                            <i class="voyager-trash"></i> <span
                                                                class="hidden-xs hidden-sm">Delete</span>
                                                        </a> --}}
                                                                <a href="{{ route('pages.about') }}" title="Edit"
                                                                    class="btn btn-sm btn-primary pull-right edit">
                                                                    <i class="voyager-edit"></i> <span
                                                                        class="hidden-xs hidden-sm">Edit</span>
                                                                </a>
                                                                <a href="/about" title="View"
                                                                    class="btn btn-sm btn-warning pull-right view">
                                                                    <i class="voyager-eye"></i> <span
                                                                        class="hidden-xs hidden-sm">View</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @elseif ($page->name == 'Road Maps')
                                                        <tr role="row" class="odd">
                                                            <td>
                                                                <input type="checkbox" name="row_id" id="checkbox_2"
                                                                    value="2">
                                                            </td>
                                                            <td>
                                                                <div>{{ $page->name }}</div>
                                                            </td>

                                                            <td class="no-sort no-click bread-actions">

                                                                <a href="{{ route('road_map') }}" title="Edit"
                                                                    class="btn btn-sm btn-primary pull-right edit">
                                                                    <i class="voyager-edit"></i> <span
                                                                        class="hidden-xs hidden-sm">Edit</span>
                                                                </a>
                                                                <a href="/roadmap" title="View"
                                                                    class="btn btn-sm btn-warning pull-right view">
                                                                    <i class="voyager-eye"></i> <span
                                                                        class="hidden-xs hidden-sm">View</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @elseif ($page->name == 'Partners')
                                                        <tr role="row" class="odd">
                                                            <td>
                                                                <input type="checkbox" name="row_id" id="checkbox_2"
                                                                    value="2">
                                                            </td>
                                                            <td>
                                                                <div>{{ $page->name }}</div>
                                                            </td>

                                                            <td class="no-sort no-click bread-actions">

                                                                <a href="{{ route('partner.index') }}" title="Edit"
                                                                    class="btn btn-sm btn-primary pull-right edit">
                                                                    <i class="voyager-edit"></i> <span
                                                                        class="hidden-xs hidden-sm">Edit</span>
                                                                </a>
                                                                <a href="/partners" title="View"
                                                                    class="btn btn-sm btn-warning pull-right view">
                                                                    <i class="voyager-eye"></i> <span
                                                                        class="hidden-xs hidden-sm">View</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @elseif ($page->name == 'Merchants')
                                                        <tr role="row" class="odd">
                                                            <td>
                                                                <input type="checkbox" name="row_id" id="checkbox_2"
                                                                    value="2">
                                                            </td>
                                                            <td>
                                                                <div>{{ $page->name }}</div>
                                                            </td>

                                                            <td class="no-sort no-click bread-actions">

                                                                <a href="{{ route('merchant-service.index') }}"
                                                                    title="Edit"
                                                                    class="btn btn-sm btn-primary pull-right edit">
                                                                    <i class="voyager-edit"></i> <span
                                                                        class="hidden-xs hidden-sm">Edit</span>
                                                                </a>
                                                                <a href="/merchant-marketing-service" title="View"
                                                                    class="btn btn-sm btn-warning pull-right view">
                                                                    <i class="voyager-eye"></i> <span
                                                                        class="hidden-xs hidden-sm">View</span>
                                                                </a>
                                                            </td>
                                                        </tr>

                                                        @elseif ($page->name == 'Payment Gateway')
                                                        <tr role="row" class="odd">
                                                            <td>
                                                                <input type="checkbox" name="row_id" id="checkbox_2"
                                                                    value="2">
                                                            </td>
                                                            <td>
                                                                <div>{{ $page->name }}</div>
                                                            </td>

                                                            <td class="no-sort no-click bread-actions">

                                                                <a href="{{ route('cryptocurrency.index') }}"
                                                                    title="Edit"
                                                                    class="btn btn-sm btn-primary pull-right edit">
                                                                    <i class="voyager-edit"></i> <span
                                                                        class="hidden-xs hidden-sm">Edit</span>
                                                                </a>
                                                                <a href="/cryptocurrency-payment-gateway" title="View"
                                                                    class="btn btn-sm btn-warning pull-right view">
                                                                    <i class="voyager-eye"></i> <span
                                                                        class="hidden-xs hidden-sm">View</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @elseif ($page->name == 'Pns Token')
                                                        <tr role="row" class="odd">
                                                            <td>
                                                                <input type="checkbox" name="row_id" id="checkbox_2"
                                                                    value="2">
                                                            </td>
                                                            <td>
                                                                <div>{{ $page->name }}</div>
                                                            </td>

                                                            <td class="no-sort no-click bread-actions">

                                                                <a href="{{ route('pns_token.index') }}" title="Edit"
                                                                    class="btn btn-sm btn-primary pull-right edit">
                                                                    <i class="voyager-edit"></i> <span
                                                                        class="hidden-xs hidden-sm">Edit</span>
                                                                </a>
                                                                <a href="/pns-token" title="View"
                                                                    class="btn btn-sm btn-warning pull-right view">
                                                                    <i class="voyager-eye"></i> <span
                                                                        class="hidden-xs hidden-sm">View</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @elseif ($page->name == 'Loyalty Program')
                                                        <tr role="row" class="odd">
                                                            <td>
                                                                <input type="checkbox" name="row_id" id="checkbox_2"
                                                                    value="2">
                                                            </td>
                                                            <td>
                                                                <div>{{ $page->name }}</div>
                                                            </td>

                                                            <td class="no-sort no-click bread-actions">

                                                                <a href="{{ route('loyalty.index') }}" title="Edit"
                                                                    class="btn btn-sm btn-primary pull-right edit">
                                                                    <i class="voyager-edit"></i> <span
                                                                        class="hidden-xs hidden-sm">Edit</span>
                                                                </a>
                                                                <a href="/loyalty-program" title="View"
                                                                    class="btn btn-sm btn-warning pull-right view">
                                                                    <i class="voyager-eye"></i> <span
                                                                        class="hidden-xs hidden-sm">View</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @elseif ($page->name == 'Merchant Program')
                                                        <tr role="row" class="odd">
                                                            <td>
                                                                <input type="checkbox" name="row_id" id="checkbox_2"
                                                                    value="2">
                                                            </td>
                                                            <td>
                                                                <div>{{ $page->name }}</div>
                                                            </td>

                                                            <td class="no-sort no-click bread-actions">

                                                                <a href="{{ route('merchant_program.index') }}"
                                                                    title="Edit"
                                                                    class="btn btn-sm btn-primary pull-right edit">
                                                                    <i class="voyager-edit"></i> <span
                                                                        class="hidden-xs hidden-sm">Edit</span>
                                                                </a>
                                                                <a href="/merchant-program" title="View"
                                                                    class="btn btn-sm btn-warning pull-right view">
                                                                    <i class="voyager-eye"></i> <span
                                                                        class="hidden-xs hidden-sm">View</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        @elseif ($page->name == 'Faqs')
                                                        <tr role="row" class="odd">
                                                            <td>
                                                                <input type="checkbox" name="row_id" id="checkbox_2"
                                                                    value="2">
                                                            </td>
                                                            <td>
                                                                <div>{{ $page->name }}</div>
                                                            </td>

                                                            <td class="no-sort no-click bread-actions">

                                                                <a href="{{ route('faq.page') }}"
                                                                    title="Edit"
                                                                    class="btn btn-sm btn-primary pull-right edit">
                                                                    <i class="voyager-edit"></i> <span
                                                                        class="hidden-xs hidden-sm">Edit</span>
                                                                </a>
                                                                <a href="/faq" title="View"
                                                                    class="btn btn-sm btn-warning pull-right view">
                                                                    <i class="voyager-eye"></i> <span
                                                                        class="hidden-xs hidden-sm">View</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        @elseif ($page->name == 'Ioc Pre-sale')
                                                        <tr role="row" class="odd">
                                                            <td>
                                                                <input type="checkbox" name="row_id" id="checkbox_2"
                                                                    value="2">
                                                            </td>
                                                            <td>
                                                                <div>{{ $page->name }}</div>
                                                            </td>

                                                            <td class="no-sort no-click bread-actions">

                                                                <a href="{{ route('ioc.page') }}"
                                                                    title="Edit"
                                                                    class="btn btn-sm btn-primary pull-right edit">
                                                                    <i class="voyager-edit"></i> <span
                                                                        class="hidden-xs hidden-sm">Edit</span>
                                                                </a>
                                                                <a href="{{route('ioc.view')}}" title="View"
                                                                    class="btn btn-sm btn-warning pull-right view">
                                                                    <i class="voyager-eye"></i> <span
                                                                        class="hidden-xs hidden-sm">View</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        @elseif ($page->name == 'Gaming Program')
                                                        <tr role="row" class="odd">
                                                            <td>
                                                                <input type="checkbox" name="row_id" id="checkbox_2"
                                                                    value="2">
                                                            </td>
                                                            <td>
                                                                <div>{{ $page->name }}</div>
                                                            </td>

                                                            <td class="no-sort no-click bread-actions">

                                                                <a href="{{ route('gaming.page') }}"
                                                                    title="Edit"
                                                                    class="btn btn-sm btn-primary pull-right edit">
                                                                    <i class="voyager-edit"></i> <span
                                                                        class="hidden-xs hidden-sm">Edit</span>
                                                                </a>
                                                                <a href="{{route('gaming-club')}}" title="View"
                                                                    class="btn btn-sm btn-warning pull-right view">
                                                                    <i class="voyager-eye"></i> <span
                                                                        class="hidden-xs hidden-sm">View</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @else
                                                        <tr role="row" class="odd">
                                                            <td>
                                                                <input type="checkbox" name="row_id" id="checkbox_2"
                                                                    value="2">
                                                            </td>
                                                            <td>
                                                                <div>{{ $page->name }}</div>
                                                            </td>

                                                            <td class="no-sort no-click bread-actions">
                                                                {{-- <a href="javascript:;" title="Delete"
                                                        class="btn btn-sm btn-danger pull-right delete"
                                                        data-id="2" id="delete-2">
                                                        <i class="voyager-trash"></i> <span
                                                            class="hidden-xs hidden-sm">Delete</span>
                                                    </a> --}}
                                                                <a href="/" title="Edit"
                                                                    class="btn btn-sm btn-primary pull-right edit">
                                                                    <i class="voyager-edit"></i> <span
                                                                        class="hidden-xs hidden-sm">Edit</span>
                                                                </a>
                                                                <a href="/" title="View"
                                                                    class="btn btn-sm btn-warning pull-right view">
                                                                    <i class="voyager-eye"></i> <span
                                                                        class="hidden-xs hidden-sm">View</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-sm-6">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .col-md-12 -->
    </div><!-- .page-content container-fluid -->
@stop

@section('javascript')
    <script>
        new Vue({
            el: '#filemanager'
        });
    </script>
@endsection
