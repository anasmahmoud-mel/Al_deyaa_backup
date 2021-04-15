@extends('layouts.app')
@section('content')

  

     <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create New Order</h4>
                <p class="card-description">
                    Create New Order 
                </p>
                <form class="forms-sample" method="POST" action="/order/create">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">الرقم التسلسلي</label>
                        <input type="text"
                               class="form-control @error('name') is-invalid @enderror "
                               name="serial"
                               id="exampleInputName1"
                               placeholder=""
                               value="{{ old('name') }}"
                        >
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">رقم البوليصه</label>
                        <input type="text"
                               class="form-control @error('name') is-invalid @enderror "
                               name="polise"
                               id="exampleInputName1"
                               placeholder=""
                               value="{{ old('name') }}"
                        >
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                  
                    <div class="form-group">
                        <label for="exampleInputPassword4">نوع الحساب </label>
                        <input type="text" name="Account_name"
                               class="form-control @error('password') is-invalid @enderror"
                               id="exampleInputPassword4" placeholder=""

                        >
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">ارفق ملف </label>
                        <input type="file" name="file"
                               class="form-control @error('password') is-invalid @enderror"
                               id="exampleInputPassword4" placeholder=""

                        >
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">اسم المرسل </label>
                        <input type="text" name="Account_name"
                               class="form-control @error('password') is-invalid @enderror"
                               id="exampleInputPassword4" placeholder=""

                        >
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">نوع الحساب </label>
                        <input type="text" name="Account_name"
                               class="form-control @error('password') is-invalid @enderror"
                               id="exampleInputPassword4" placeholder=""

                        >
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">الاسم الكامل</label>
                        <input type="text" name="receiver_full_name"
                               class="form-control @error('password') is-invalid @enderror"
                               id="exampleInputPassword4" placeholder=""

                        >
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">رقم الاتصال</label>
                        <input type="text" name="receiver_phone_number"
                               class="form-control @error('password') is-invalid @enderror"
                               id="exampleInputPassword4" placeholder=""

                        >
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">رقم الاتصال الثانوي  </label>
                        <input type="text" name="receiver_secondary_phone_number"
                               class="form-control @error('password') is-invalid @enderror"
                               id="exampleInputPassword4" placeholder=""

                        >
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4"> المدينه  </label>
                        <input type="text" name="city"
                               class="form-control @error('password') is-invalid @enderror"
                               id="exampleInputPassword4" placeholder=""

                        >
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4"> المنطقه </label>
                        <input type="text" name="area"
                               class="form-control @error('password') is-invalid @enderror"
                               id="exampleInputPassword4" placeholder=""

                        >
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">الشارع</label>
                        <input type="text" name="receiver_street_name"
                               class="form-control @error('password') is-invalid @enderror"
                               id="exampleInputPassword4" placeholder=""

                        >
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">ملاحظات  </label>
                        <input type="text" name="receiver_notes"
                               class="form-control @error('password') is-invalid @enderror"
                               id="exampleInputPassword4" placeholder=""

                        >
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">السعر الشامل</label>
                        <input type="text" name="package_charge"
                               class="form-control @error('password') is-invalid @enderror"
                               id="exampleInputPassword4" placeholder=""

                        >
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword4">رسوم الطرد </label>
                        <input type="text" name="shpping_charge"
                               class="form-control @error('password') is-invalid @enderror"
                               id="exampleInputPassword4" placeholder=""

                        >
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword4">رسوم النقل </label>
                        <input type="text" name="postal_charge"
                               class="form-control @error('password') is-invalid @enderror"
                               id="exampleInputPassword4" placeholder=""

                        >
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword4">ملاحظات</label>
                        <input type="text" name="package_content"
                               class="form-control @error('password') is-invalid @enderror"
                               id="exampleInputPassword4" placeholder=""

                        >
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                
                    <div class="form-group">
                        <label for="exampleInputPassword4">السعر الشامل </label>
                        <input type="text" name="serial"
                               class="form-control @error('password') is-invalid @enderror"
                               id="exampleInputPassword4" placeholder=""

                        >
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <label>File upload</label>--}}
{{--                        <input type="file" name="img[]" class="file-upload-default">--}}
{{--                        <div class="input-group col-xs-12">--}}
{{--                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">--}}
{{--                            <span class="input-group-append">--}}
{{--                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>--}}
{{--                        </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('admins.users.all') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
    @endsection

    @section('js')
        <script src="{{asset('melody/js/data-table.js')}}"></script>
    
    @endsection