<div class="col-md-12">
    <label class="form-label">{{__('siteTrans.image')}}</label>
    <div class="mb-3 d-flex">
        @if (!Route::is('*.show'))
            <input class="form-control input-air-primary" id="ex1" type="file"
                   name="image">
        @endif
        @if (Route::is('*.edit'))
            <a href="{{$row->image}}" target="__blanck"
               class=" btn btn-success form-selectgroup-label ms-1" data-fancybox="group"> <i
                    class="fa fa-eye"></i>
            </a>
        @endif
        @if (Route::is('*.show'))
            <a href="{{$row->image}}" target="__blanck"
               style="display: block;width: 100%;"
               class=" btn btn-success form-selectgroup-label ms-1" data-fancybox="group"> <i
                    class="fa fa-eye"></i>
            </a>
        @endif
    </div>
</div>

<!------------------------------ Reviewer Fields ------------------------------------------>
<div class="col-md-6">
    <div class="mb-1">
        <label class="form-label">{{__('siteTrans.reviewer_name')}}</label>
        <input type="text" class="form-control" name="reviewer_name"
               value="{{ $row->reviewer_name ?? old('reviewer_name') }}"
            {{ Route::is('*.create') ? 'required' : '' }}>
        @include('dashboard.layouts.shared.validationStatus')
    </div>
</div>
<div class="col-md-6">
    <div class="mb-1">
        <label class="form-label">{{__('siteTrans.reviewer_description')}}</label>
        <input type="text" class="form-control" name="reviewer_description"
               value="{{ $row->reviewer_description ?? old('reviewer_description') }}"
            {{ Route::is('*.create') ? 'required' : '' }}>
        @include('dashboard.layouts.shared.validationStatus')
    </div>
</div>


<!------------------------------ Review Fields ------------------------------------------>
<div class="col-md-6">
    <div class="mb-1">
        <label class="form-label">{{__('siteTrans.review')}}</label>
        <textarea class="form-control ckeditor" name="review[ar]" id="review-ar" rows="5"
            {{ Route::is('*.create') ? 'required' : '' }}>{{ $row->getTranslation('review', 'ar') ?? old('review.ar') }}</textarea>
        @include('dashboard.layouts.shared.validationStatus')
    </div>
</div>
<div class="col-md-6">
    <div class="mb-1">
        <label class="form-label">{{__('siteTrans.review_en')}}</label>
        <textarea class="form-control ckeditor" name="review[en]" id="review-en" rows="5"
            {{ Route::is('*.create') ? 'required' : '' }}>{{ $row->getTranslation('review', 'en') ?? old('review.en') }}</textarea>
        @include('dashboard.layouts.shared.validationStatus')
    </div>
</div>

