<!------------------------------ Name Fields ------------------------------------------>
<div class="col-md-6">
    <div class="mb-1">
        <label class="form-label">{{__('siteTrans.name_ar')}}</label>
        <input type="text" class="form-control" name="name[ar]"
               value="{{ $row->getTranslation('name', 'ar') ?? old('name.ar') }}"
            {{ Route::is('*.create') ? 'required' : '' }}>
        @include('dashboard.layouts.shared.validationStatus')
    </div>
</div>
<div class="col-md-6">
    <div class="mb-1">
        <label class="form-label">{{__('siteTrans.name_en')}}</label>
        <input type="text" class="form-control" name="name[en]"
               value="{{ $row->getTranslation('name', 'en') ?? old('name.en') }}"
            {{ Route::is('*.create') ? 'required' : '' }}>
        @include('dashboard.layouts.shared.validationStatus')
    </div>
</div>

<!------------------------------ Title Editors -------------------------->
<div class="col-md-6 mt-3">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title mb-0">{{ __('siteTrans.title_ar') }}</h4>
        </div>
        <div class="card-body">
            <div id="title_ar_editor" class="snow-editor"></div>
            <input type="hidden" name="title[ar]" value="{{ $row->getTranslation('title', 'ar') ?? old('title.ar') }}">
        </div>
    </div>
</div>
<div class="col-md-6 mt-3">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title mb-0">{{ __('siteTrans.title_en') }}</h4>
        </div>
        <div class="card-body">
            <div id="title_en_editor" class="snow-editor"></div>
            <input type="hidden" name="title[en]" value="{{ $row->getTranslation('title', 'en') ?? old('title.en') }}">
        </div>
    </div>
</div>

<!------------------------------ Description Editors -------------------------->
<div class="col-md-6 mt-3">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title mb-0">{{ __('siteTrans.description_ar') }}</h4>
        </div>
        <div class="card-body">
            <div id="description_ar_editor" class="snow-editor"></div>
            <input type="hidden" name="description[ar]"
                   value="{{ $row->getTranslation('description', 'ar') ?? old('description.ar') }}">
        </div>
    </div>
</div>
<div class="col-md-6 mt-3">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title mb-0">{{ __('siteTrans.description_en') }}</h4>
        </div>
        <div class="card-body">
            <div id="description_en_editor" class="snow-editor"></div>
            <input type="hidden" name="description[en]"
                   value="{{ $row->getTranslation('description', 'en') ?? old('description.en') }}">
        </div>
    </div>
</div>

<!------------------------------ Content Editors -------------------------->
<div class="col-12 mt-3">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title mb-0">{{ __('siteTrans.content_ar') }}</h4>
        </div>
        <div class="card-body">
            <div id="content_ar_editor" class="snow-editor"></div>
            <input type="hidden" name="content[ar]"
                   value="{{ $row->getTranslation('content', 'ar') ?? old('content.ar') }}">
        </div>
    </div>
</div>
<div class="col-12 mt-3">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title mb-0">{{ __('siteTrans.content_en') }}</h4>
        </div>
        <div class="card-body">
            <div id="content_en_editor" class="snow-editor"></div>
            <input type="hidden" name="content[en]"
                   value="{{ $row->getTranslation('content', 'en') ?? old('content.en') }}">
        </div>
    </div>
</div>
