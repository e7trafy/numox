<!------------------------------ // client_name &&  client_email  && city //------------------------------------------>
<div class="col-md-4">
    <div class="mb-1">
        <label for="client_name" class="form-label">{{__('siteTrans.client_name')}}</label>
        <input type="text" class="form-control" id="client_name"
               placeholder="{{__('siteTrans.enter')}}{{__('siteTrans.client_name')}}"
               value="{{isset($row) ? $row->client_name : old('client_name')}}"
               required>
        @include('dashboard.layouts.shared.validationStatus')
    </div>
</div>
<div class="col-md-4">
    <div class="mb-1">
        <label for="client_email" class="form-label">{{__('siteTrans.client_email')}}</label>
        <input type="text" class="form-control" id="client_email"
               value="{{isset($row) ? $row->client_email : old('client_email')}}"
               required>
        @include('dashboard.layouts.shared.validationStatus')
    </div>
</div>
<div class="col-md-4">
    <div class="mb-1">
        <label for="city" class="form-label">{{__('siteTrans.city')}}</label>
        <input type="text" class="form-control" id="city"
               value="{{isset($row) ? $row->city : old('city')}}"
               required>
        @include('dashboard.layouts.shared.validationStatus')
    </div>
</div>

<!------------------------------ // phone &&  company  && status &&  type //------------------------------------------>
<div class="col-md-3">
    <div class="mb-1">
        <label for="phone" class="form-label">{{__('siteTrans.phone')}}</label>
        <input type="text" class="form-control" id="phone"
               placeholder="{{__('siteTrans.enter')}}{{__('siteTrans.phone')}}"
               value="{{isset($row) ? $row->client_phone : old('client_phone')}}"
               required>
        @include('dashboard.layouts.shared.validationStatus')
    </div>
</div>
<div class="col-md-3">
    <div class="mb-1">
        <label for="client_phone_dial_code" class="form-label">{{__('siteTrans.client_phone_dial_code')}}</label>
        <input type="text" class="form-control" id="client_phone_dial_code"
               placeholder="{{__('siteTrans.enter')}}{{__('siteTrans.client_phone_dial_code')}}"
               value="{{isset($row) ? $row->client_phone_dial_code : old('client_phone_dial_code')}}"
               required>
        @include('dashboard.layouts.shared.validationStatus')
    </div>
</div>
<div class="col-md-3">
    <div class="mb-1">
        <label for="company" class="form-label">{{__('siteTrans.company')}}</label>
        <input type="text" class="form-control" id="company"
               placeholder="{{__('siteTrans.enter')}}{{__('siteTrans.company')}}"
               value="{{isset($row) ? $row->company : old('company')}}"
               required>
        @include('dashboard.layouts.shared.validationStatus')
    </div>
</div>
<div class="col-md-3">
    <div class="mb-1">
        <label for="entity" class="form-label">{{__('siteTrans.entity')}}</label>
        <input type="text" class="form-control" id="entity"
               placeholder="{{__('siteTrans.enter')}}{{__('siteTrans.entity')}}"
               value="{{isset($row) ? $row->entity : old('entity')}}"
               required>
        @include('dashboard.layouts.shared.validationStatus')
    </div>
</div>
<div class="col-md-3">
    <div class="mb-1">
        <label for="status_" class="form-label">{{__('siteTrans.status')}}</label>
        <input type="text" class="form-control" id="status_"
               placeholder="{{__('siteTrans.enter')}}{{__('siteTrans.status')}}"
               value="{{isset($row) ? $row->status : old('status')}}"
               required>
        @include('dashboard.layouts.shared.validationStatus')
    </div>
</div>
<div class="col-md-3">
    <div class="mb-1">
        <label for="type" class="form-label">{{__('siteTrans.type')}}</label>
        <input type="text" class="form-control" id="type"
               placeholder="{{__('siteTrans.enter')}}{{__('siteTrans.company')}}"
               value="{{isset($row) ? $row->type : old('type')}}"
               required>
        @include('dashboard.layouts.shared.validationStatus')
    </div>
</div>

<!------------------------------ // content //------------------------------------------>
<div class="col-md-12">
    <div class="mb-1">
        <label for="validationTextarea" class="form-label">{{__('siteTrans.content')}}</label>
        <textarea class="form-control" id="validationTextarea" placeholder="Required example textarea"
                  required>
            {{isset($row) ? $row->content : old('content')}}
        </textarea>
        @include('dashboard.layouts.shared.validationStatus')
    </div>
</div>

