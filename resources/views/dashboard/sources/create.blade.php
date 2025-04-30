@extends('dashboard.layouts.master')

@push('head')

@endpush

@section('title')
    {{__('siteTrans.show')}}
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">{{__('siteTrans.show')}} {{__('siteTrans.sources')}}</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">{{__('siteTrans.sources')}}</a>
                        </li>
                        <li class="breadcrumb-item active">{{__('siteTrans.home')}}</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">{{__('siteTrans.show')}}</h4>
                </div><!-- end card header -->

                <div class="card-body">

                    <div class="live-preview">
                        <form class="row g-3 needs-validation store" action="{{ route('admin.sources.store') }}"
                              method="POST" novalidate>
                            @csrf
                            @include('dashboard.sources.form')


                            <button class="btn btn-warning" type="button"
                                    onclick="window.location.replace(document.referrer)">
                                {{ __('siteTrans.back') }}
                            </button>


                        </form>
                    </div>


                </div>
            </div>
        </div> <!-- end col -->

    </div>

@endsection

@push('scripts')
    <!-- Page-specific scripts -->
    <script src="{{dashboardPath()}}/libs/prismjs/prism.js"></script>
    <script src="{{dashboardPath()}}/js/pages/form-validation.init.js"></script>

    @include('dashboard.layouts.shared.submitAddForm')

@endpush
