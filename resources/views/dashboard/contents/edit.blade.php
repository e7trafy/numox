@extends('dashboard.layouts.master')

@push('head')
    <!-- Include CKEditor CDN in the head section -->
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <!-- Optional: Include CKEditor styles -->
    <style>
        .ck-editor__editable_inline {
            min-height: 200px;
        }
    </style>
@endpush

@section('title')
    {{__('siteTrans.edit')}}
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">{{__('siteTrans.edit')}} {{__('siteTrans.contents')}}</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">{{__('siteTrans.contents')}}</a>
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
                              action="{{ route('admin.sectionsContent.update', $row->id) }}"
                              method="POST" enctype="multipart/form-data" novalidate>
                            @csrf
                            @method('put')
                            @include('dashboard.contents.form')


                            <br><br><br>

                            @if($row->features->count() > 0)

                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">{{__('siteTrans.features')}}</h4>
                                </div>

                                @foreach($row->features as $feature)

                                    <div class="accordion custom-accordionwithicon-plus"
                                         id="accordionWithplusicon">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="accordionwithplusExample2">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#{{$feature->id}}"
                                                        aria-expanded="false"
                                                        aria-controls="{{$feature->id}}">
                                                    {{$feature->title}}
                                                </button>
                                            </h2>
                                            <div id="{{$feature->id}}"
                                                 class="accordion-collapse collapse"
                                                 aria-labelledby="accordionwithplusExample2"
                                                 data-bs-parent="#accordionWithplusicon">
                                                <div class="accordion-body">

                                                    @include('dashboard.contents.features' , ['feature' => $feature])

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                            @endif

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

    <!-- CKEditor initialization script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize CKEditor for all textarea elements with the 'ckeditor' class
            const editorElements = document.querySelectorAll('textarea.ckeditor');

            editorElements.forEach(function (element) {
                ClassicEditor
                    .create(element, {
                        // CKEditor configuration options
                        toolbar: {
                            items: [
                                'heading', '|',
                                'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|',
                                'outdent', 'indent', '|',
                                'fontColor', 'fontBackgroundColor', '|',
                                'blockQuote', 'insertTable', 'mediaEmbed', 'undo', 'redo'
                            ]
                        },
                        language: document.documentElement.lang, // Auto-detect language based on HTML lang attribute
                        // Color options
                        fontColor: {
                            colors: [
                                {color: '#000000', label: 'Black'},
                                {color: '#4D4D4D', label: 'Dim grey'},
                                {color: '#999999', label: 'Grey'},
                                {color: '#E6E6E6', label: 'Light grey'},
                                {color: '#FFFFFF', label: 'White'},
                                {color: '#E64C4C', label: 'Red'},
                                {color: '#E6994C', label: 'Orange'},
                                {color: '#E6E64C', label: 'Yellow'},
                                {color: '#4CE64C', label: 'Green'},
                                {color: '#4C4CE6', label: 'Blue'},
                                {color: '#994CE6', label: 'Purple'},
                                {color: '#E64C99', label: 'Pink'}
                            ],
                            columns: 6
                        },
                        fontBackgroundColor: {
                            colors: [
                                {color: '#000000', label: 'Black'},
                                {color: '#4D4D4D', label: 'Dim grey'},
                                {color: '#999999', label: 'Grey'},
                                {color: '#E6E6E6', label: 'Light grey'},
                                {color: '#FFFFFF', label: 'White'},
                                {color: '#E64C4C', label: 'Red'},
                                {color: '#E6994C', label: 'Orange'},
                                {color: '#E6E64C', label: 'Yellow'},
                                {color: '#4CE64C', label: 'Green'},
                                {color: '#4C4CE6', label: 'Blue'},
                                {color: '#994CE6', label: 'Purple'},
                                {color: '#E64C99', label: 'Pink'}
                            ],
                            columns: 6
                        },

                        image: {
                            toolbar: [
                                'imageStyle:inline',
                                'imageStyle:block',
                                'imageStyle:side',
                                '|',
                                'toggleImageCaption',
                                'imageTextAlternative'
                            ]
                        },
                        table: {
                            contentToolbar: [
                                'tableColumn',
                                'tableRow',
                                'mergeTableCells'
                            ]
                        }
                    })
                    .then(editor => {
                        console.log('CKEditor initialized successfully:', editor);
                    })
                    .catch(error => {
                        console.error('CKEditor initialization failed:', error);
                    });
            });
        });
    </script>
@endpush
