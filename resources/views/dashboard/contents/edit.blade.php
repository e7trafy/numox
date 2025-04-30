@extends('dashboard.layouts.master')

@push('head')
    <!-- quill css -->
    <link href="{{ dashboardPath() }}/libs/quill/quill.core.css" rel="stylesheet" type="text/css"/>
    <link href="{{ dashboardPath() }}/libs/quill/quill.bubble.css" rel="stylesheet" type="text/css"/>
    <link href="{{ dashboardPath() }}/libs/quill/quill.snow.css" rel="stylesheet" type="text/css"/>

    <style>
        .ql-editor {
            min-height: 150px;
        }

        /* RTL direction for Arabic editors */
        #title_ar_editor .ql-editor,
        #description_ar_editor .ql-editor,
        #content_ar_editor .ql-editor {
            direction: rtl;
            text-align: right;
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
                <h4 class="mb-sm-0">{{__('siteTrans.edit')}} {{__('siteTrans.content')}}</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">{{__('siteTrans.content')}}</a></li>
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
                    <h4 class="card-title mb-0 flex-grow-1">{{ __('siteTrans.edit_content') }}</h4>
                </div>
                <div class="card-body">
                    <div class="live-preview">
                        <form id="contentForm" class="row g-3 needs-validation"
                              action="{{ route('admin.sectionsContent.update', $row->id) }}" method="POST" novalidate
                              enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            @include('dashboard.contents.form')
                            <div class="col-12">
                                <button type="button" class="btn btn-success" id="submitBtn">
                                    {{ __('siteTrans.update') }}
                                </button>
                                <a href="{{ route('admin.sectionsContent.index') }}" class="btn btn-secondary ms-2">
                                    {{ __('siteTrans.cancel') }}
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- Quill JS -->
    <script src="{{ dashboardPath() }}/libs/quill/quill.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Initialize all Quill editors
            const initEditor = (editorId, inputName) => {
                const quill = new Quill(`#${editorId}`, {
                    theme: 'snow',
                    modules: {
                        toolbar: [
                            ['bold', 'italic', 'underline', 'strike'],
                            ['blockquote', 'code-block'],
                            [{'header': 1}, {'header': 2}],
                            [{'list': 'ordered'}, {'list': 'bullet'}],
                            [{'script': 'sub'}, {'script': 'super'}],
                            [{'indent': '-1'}, {'indent': '+1'}],
                            [{'direction': 'rtl'}],
                            [{'color': []}, {'background': []}],
                            ['link', 'image', 'video'],
                            ['clean']
                        ]
                    }
                });

                // Set initial content from hidden input
                const hiddenInput = document.querySelector(`input[name="${inputName}"]`);
                if (hiddenInput && hiddenInput.value) {
                    quill.clipboard.dangerouslyPasteHTML(hiddenInput.value);
                }

                return quill;
            };

            // Initialize all editors
            const editors = {
                'title[ar]': initEditor('title_ar_editor', 'title[ar]'),
                'title[en]': initEditor('title_en_editor', 'title[en]'),
                'description[ar]': initEditor('description_ar_editor', 'description[ar]'),
                'description[en]': initEditor('description_en_editor', 'description[en]'),
                'content[ar]': initEditor('content_ar_editor', 'content[ar]'),
                'content[en]': initEditor('content_en_editor', 'content[en]')
            };

            // Handle form submission
            document.getElementById('submitBtn').addEventListener('click', function () {
                // Update all hidden inputs before submission
                Object.entries(editors).forEach(([inputName, editor]) => {
                    const hiddenInput = document.querySelector(`input[name="${inputName}"]`);
                    if (hiddenInput) {
                        hiddenInput.value = editor.root.innerHTML;
                    }
                });

                // Submit the form
                document.getElementById('contentForm').submit();
            });
        });
    </script>
@endpush
