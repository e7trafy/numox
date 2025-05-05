<div class="row col-md-12">
    <input type="hidden" name="features[{{ $feature->id }}][id]" value="{{ $feature->id }}">

    <div class="col-md-12">
        <label class="form-label">{{__('siteTrans.image')}}</label>
        <div class="mb-3 d-flex">
            @if (!Route::is('*.show'))
                <input class="form-control input-air-primary" id="ex1" type="file"
                       name="features[{{ $feature->id }}][image]">
            @endif
            @if (Route::is('*.edit') || Route::is('*.show'))
                <a href="{{$feature->image}}" target="__blanck"
                   class="btn btn-success form-selectgroup-label ms-1" data-fancybox="group">
                    <i class="fa fa-eye"></i>
                </a>
            @endif
        </div>
    </div>

    <!------------------------------ Title Fields ------------------------------------------>
    <div class="col-md-6">
        <div class="mb-1">
            <label class="form-label">{{__('siteTrans.title_ar')}}</label>
            <input type="text" class="form-control" name="features[{{ $feature->id }}][title][ar]"
                   value="{{ $feature->getTranslation('title', 'ar') ?? old("features.{$feature->id}.title.ar") }}"
                {{ Route::is('*.create') ? 'required' : '' }}>
            @include('dashboard.layouts.shared.validationStatus')
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-1">
            <label class="form-label">{{__('siteTrans.title_en')}}</label>
            <input type="text" class="form-control" name="features[{{ $feature->id }}][title][en]"
                   value="{{ $feature->getTranslation('title', 'en') ?? old("features.{$feature->id}.title.en") }}"
                {{ Route::is('*.create') ? 'required' : '' }}>
            @include('dashboard.layouts.shared.validationStatus')
        </div>
    </div>

    <!------------------------------ Description Fields -------------------------------------->
    <div class="col-md-6">
        <div class="mb-1">
            <label class="form-label">{{__('siteTrans.description_ar')}}</label>
            <textarea class="form-control ckeditor" name="features[{{ $feature->id }}][description][ar]"
                      id="description-ar-{{ $feature->id }}">{{ $feature->getTranslation('description', 'ar') ?? old("features.{$feature->id}.description.ar") }}</textarea>
            @include('dashboard.layouts.shared.validationStatus')
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-1">
            <label class="form-label">{{__('siteTrans.description_en')}}</label>
            <textarea class="form-control ckeditor" name="features[{{ $feature->id }}][description][en]"
                      id="description-en-{{ $feature->id }}">{{ $feature->getTranslation('description', 'en') ?? old("features.{$feature->id}.description.en") }}</textarea>
            @include('dashboard.layouts.shared.validationStatus')
        </div>
    </div>

    <!------------------------------ Content Fields -------------------------------------->
    @if(!empty($feature->getTranslation('content', 'ar')))
        <div class="col-md-6">
            <div class="mb-1">
                <label class="form-label">{{__('siteTrans.content_ar')}}</label>
                <textarea class="form-control ckeditor" name="features[{{ $feature->id }}][content][ar]"
                          id="content-ar-{{ $feature->id }}">{{ $feature->getTranslation('content', 'ar') ?? old("features.{$feature->id}.content.ar") }}</textarea>
                @include('dashboard.layouts.shared.validationStatus')
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-1">
                <label class="form-label">{{__('siteTrans.content_en')}}</label>
                <textarea class="form-control ckeditor" name="features[{{ $feature->id }}][content][en]"
                          id="content-en-{{ $feature->id }}">{{ $feature->getTranslation('content', 'en') ?? old("features.{$feature->id}.content.en") }}</textarea>
                @include('dashboard.layouts.shared.validationStatus')
            </div>
        </div>
    @endif
</div>
