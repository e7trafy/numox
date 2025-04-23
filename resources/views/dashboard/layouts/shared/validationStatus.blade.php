@if (Route::is('*.create'))
    <div class="valid-feedback">{{__('siteTrans.goodData')}}</div>
    <div class="invalid-feedback">{{__('siteTrans.wrongData')}}</div>
@else
    <div class="valid-feedback">{{__('siteTrans.oldDataConceder')}}</div>
@endif
