<div class="col-md-12">
    <label class="form-label">{{__('siteTrans.image')}}</label>
    <div class="mb-3 d-flex">
        @if (!Route::is('*.show'))
            <input class="form-control input-air-primary" id="ex1" type="file" name="content[image]">
        @endif
        @if (Route::is('*.edit') || Route::is('*.show'))
            <a href="{{$row->image}}" target="__blanck"
               class="btn btn-success form-selectgroup-label ms-1" data-fancybox="group">
                <i class="fa fa-eye"></i>
            </a>
        @endif
    </div>
</div>

<!------------------------------ Name Fields ------------------------------------------>
<div class="col-md-6">
    <div class="mb-1">
        <label class="form-label">{{__('siteTrans.name_ar')}}</label>
        <input type="text" class="form-control" name="content[name][ar]"
               value="{{ $row->getTranslation('name', 'ar') ?? old('content.name.ar') }}"
            {{ Route::is('*.create') ? 'required' : '' }}>
        @include('dashboard.layouts.shared.validationStatus')
    </div>
</div>
<div class="col-md-6">
    <div class="mb-1">
        <label class="form-label">{{__('siteTrans.name_en')}}</label>
        <input type="text" class="form-control" name="content[name][en]"
               value="{{ $row->getTranslation('name', 'en') ?? old('content.name.en') }}"
            {{ Route::is('*.create') ? 'required' : '' }}>
        @include('dashboard.layouts.shared.validationStatus')
    </div>
</div>

<!------------------------------ Title Fields ------------------------------------------>
<div class="col-md-6">
    <div class="mb-1">
        <label class="form-label">{{__('siteTrans.title_ar')}}</label>
        <input type="text" class="form-control" name="content[title][ar]"
               value="{{ $row->getTranslation('title', 'ar') ?? old('content.title.ar') }}"
            {{ Route::is('*.create') ? 'required' : '' }}>
        @include('dashboard.layouts.shared.validationStatus')
    </div>
</div>
<div class="col-md-6">
    <div class="mb-1">
        <label class="form-label">{{__('siteTrans.title_en')}}</label>
        <input type="text" class="form-control" name="content[title][en]"
               value="{{ $row->getTranslation('title', 'en') ?? old('content.title.en') }}"
            {{ Route::is('*.create') ? 'required' : '' }}>
        @include('dashboard.layouts.shared.validationStatus')
    </div>
</div>

<!------------------------------ Description Fields -------------------------------------->
<div class="col-md-6">
    <div class="mb-1">
        <label class="form-label">{{__('siteTrans.description_ar')}}</label>
        <textarea class="form-control ckeditor" name="content[description][ar]" rows="5"
                  id="description-ar">{{ $row->getTranslation('description', 'ar') ?? old('content.description.ar') }}</textarea>
        @include('dashboard.layouts.shared.validationStatus')
    </div>
</div>
<div class="col-md-6">
    <div class="mb-1">
        <label class="form-label">{{__('siteTrans.description_en')}}</label>
        <textarea class="form-control ckeditor" name="content[description][en]" rows="5"
                  id="description-en">{{ $row->getTranslation('description', 'en') ?? old('content.description.en') }}</textarea>
        @include('dashboard.layouts.shared.validationStatus')
    </div>
</div>

<!------------------------------ Content Fields -------------------------------------->
<div class="col-md-6">
    <div class="mb-1">
        <label class="form-label">{{__('siteTrans.content_ar')}}</label>
        <textarea class="form-control ckeditor" name="content[content][ar]" rows="5"
                  id="content-ar">{{ $row->getTranslation('content', 'ar') ?? old('content.content.ar') }}</textarea>
        @include('dashboard.layouts.shared.validationStatus')
    </div>
</div>
<div class="col-md-6">
    <div class="mb-1">
        <label class="form-label">{{__('siteTrans.content_en')}}</label>
        <textarea class="form-control ckeditor" name="content[content][en]" rows="5"
                  id="content-en">{{ $row->getTranslation('content', 'en') ?? old('content.content.en') }}</textarea>
        @include('dashboard.layouts.shared.validationStatus')
    </div>
</div>
