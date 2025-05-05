@extends('dashboard.layouts.master')

@push('head')
    <!-- Page-specific meta -->
    <meta name="page-specific-meta" content="datatables page">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
@endpush

@section('title')
    {{__('siteTrans.content')}}
@endsection

@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">{{__('siteTrans.clients')}}</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">{{__('siteTrans.clients')}}</a>
                        </li>
                        <li class="breadcrumb-item active"><a
                                href="{{route('admin.dashboard.homePage')}}">{{__('siteTrans.home')}}</a></li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                        <thead>
                        <tr>
                            <th scope="col" style="width: 10px;">
                                <div class="form-check">
                                    <input class="form-check-input fs-15" type="checkbox" id="checkAll"
                                           value="option">
                                </div>
                            </th>
                            <th>{{__('siteTrans.serial')}}</th>
                            <th>{{__('siteTrans.page')}} </th>
                            <th>{{__('siteTrans.name')}}</th>
                            <th>{{__('siteTrans.action')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($rows as $row)
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                               value="option1">
                                    </div>
                                </th>
                                <td>{{$row->id}}</td>
                                <td>{{ $row->page?->slug ?? 'عامه' }}</td>
                                <td>{{$row->name}}</td>
                                <td>
                                    <a href="{{ route('admin.clients.edit', $row->id) }}"
                                       class="text-warning hover-text-container"
                                       title="{{__('siteTrans.edit')}}">

                                        <i class="fas fa-edit"></i>
                                        <span class="hover-text">{{__('siteTrans.edit')}}</span>
                                    </a>
                                    <a href="{{ route('admin.clients.show', $row->id) }}"
                                       class="text-success hover-text-container"
                                       title="{{__('siteTrans.show')}}">
                                        <i class="fas fa-eye"></i>
                                        <span class="hover-text">{{__('siteTrans.show')}}</span>
                                    </a>
                                    <span class="delete-row text-danger"
                                          data-url="{{url('admin/clients/'.$row->id)}}"><i
                                            class="fa fa-trash"></i></span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->

@endsection

@push('scripts')
    <!-- DataTables and related scripts -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <!-- DataTables initialization -->
    <script src="{{dashboardPath()}}/js/pages/datatables.init.js"></script>

    @include('dashboard.layouts.shared.deleteOne')

@endpush
