<div class="row col-md-12">


    {{--    <div class="col-md-12">--}}
    {{--        <label class="form-label">{{__('siteTrans.image')}}</label>--}}
    {{--        <div class="mb-3 d-flex">--}}
    {{--            @if (!Route::is('*.show'))--}}
    {{--                <input class="form-control input-air-primary" id="ex1" type="file"--}}
    {{--                       name="image">--}}
    {{--            @endif--}}
    {{--            @if (Route::is('*.edit'))--}}
    {{--                <a href="{{$feature->image}}" target="__blanck"--}}
    {{--                   class=" btn btn-success form-selectgroup-label ms-1" data-fancybox="group"> <i--}}
    {{--                        class="fa fa-eye"></i>--}}
    {{--                </a>--}}
    {{--            @endif--}}
    {{--            @if (Route::is('*.show'))--}}
    {{--                <a href="{{$feature->image}}" target="__blanck"--}}
    {{--                   style="display: block;width: 100%;"--}}
    {{--                   class=" btn btn-success form-selectgroup-label ms-1" data-fancybox="group"> <i--}}
    {{--                        class="fa fa-eye"></i>--}}
    {{--                </a>--}}
    {{--            @endif--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!------------------------------ Title Fields ------------------------------------------>
    <div class="col-md-6">
        <div class="mb-1">
            <label class="form-label">{{__('siteTrans.title_ar')}}</label>
            <input type="text" class="form-control" name="title[ar]"
                   value="{{ $feature->getTranslation('title', 'ar') ?? old('title_ar') }}"
                {{ Route::is('*.create') ? 'required' : '' }}>
            @include('dashboard.layouts.shared.validationStatus')
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-1">
            <label class="form-label">{{__('siteTrans.title_en')}}</label>
            <input type="text" class="form-control" name="title[en]"
                   value="{{ $feature->getTranslation('title', 'en') ?? old('title_en') }}"
                {{ Route::is('*.create') ? 'required' : '' }}>
            @include('dashboard.layouts.shared.validationStatus')
        </div>
    </div>

    <!------------------------------ Description Fields -------------------------------------->
    <div class="col-md-6">
        <div class="mb-1">
            <label class="form-label">{{__('siteTrans.description_ar')}}</label>
            <textarea class="form-control ckeditor" name="description[ar]"
                      id="description-ar">{{ $feature->getTranslation('description', 'ar') ?? old('description.ar') }}</textarea>
            @include('dashboard.layouts.shared.validationStatus')
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-1">
            <label class="form-label">{{__('siteTrans.description_en')}}</label>
            <textarea class="form-control ckeditor" name="description[en]"
                      id="description-en">{{ $feature->getTranslation('description', 'en') ?? old('description.en') }}</textarea>
            @include('dashboard.layouts.shared.validationStatus')
        </div>
    </div>

    <!------------------------------ Content Fields -------------------------------------->
    @if(!empty($feature->getTranslation('content', 'ar')))
        <div class="col-md-6">
            <div class="mb-1">
                <label class="form-label">{{__('siteTrans.content_ar')}}</label>
                <textarea class="form-control ckeditor" name="content[ar]"
                          id="content-ar">{{ $feature->getTranslation('content', 'ar') ?? old('content.ar') }}</textarea>
                @include('dashboard.layouts.shared.validationStatus')
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-1">
                <label class="form-label">{{__('siteTrans.content_en')}}</label>
                <textarea class="form-control ckeditor" name="content[en]"
                          id="content-en">{{ $feature->getTranslation('content', 'en') ?? old('content.en') }}</textarea>
                @include('dashboard.layouts.shared.validationStatus')
            </div>
        </div>

    @endif

</div>
