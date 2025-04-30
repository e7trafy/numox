@extends('dashboard.layouts.master')

@push('head')

@endpush

@section('title')
    {{__('siteTrans.edit')}}
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">{{__('siteTrans.edit')}} {{__('siteTrans.pricing')}}</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">{{__('siteTrans.pricing')}}</a>
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
                    <h4 class="card-title mb-0 flex-grow-1">{{__('siteTrans.edit')}}</h4>
                </div><!-- end card header -->

                <div class="card-body">

                    <div class="live-preview">
                        <form class="row g-3 needs-validation store"
                              action="{{ route('admin.pricing.update', $row->id) }}"
                              method="POST" novalidate>
                            @csrf
                            @method('put')
                            @include('dashboard.pricing.form')


                            <button class="btn btn-success" type="submit">
                                {{ __('siteTrans.edit') }}
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
