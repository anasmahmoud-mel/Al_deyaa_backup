@extends('layouts.app')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update Order</h4>
                <p class="card-description">
                
                </p>
                <form class="forms-sample" method="post" action="{{route('orders.update',$order->id)}}">
                    @csrf
                    {{ method_field('PUT') }}
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="exampleInputName1">الرقم التسلسلي</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror " name="serial"
                            id="exampleInputName1" placeholder=""  value="{{ $order->serial }}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">رقم البوليصه</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror " name="polise"
                            id="exampleInputName1" placeholder="" value="{{ $order->polise }}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword4">نوع الحساب </label>
                        <input type="text" name="Account_name" class="form-control @error('password') is-invalid @enderror"
                            id="exampleInputPassword4" placeholder="" value="{{ $order->Account_name }}">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">ارفق ملف </label>
                        <input type="file" name="file" class="form-control @error('password') is-invalid @enderror"
                            id="exampleInputPassword4" placeholder="" value="{{ $order->file }}">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">الاسم الكامل</label>
                        <input type="text" name="receiver_full_name"
                            class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword4"
                            placeholder="" value="{{ $order->receiver_full_name }}">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">رقم الاتصال</label>
                        <input type="text" name="receiver_phone_number"
                            class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword4"
                            placeholder="" value="{{ $order->receiver_phone_number }}"> 
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">رقم الاتصال الثانوي </label>
                        <input type="text" name="receiver_secondary_phone_number"
                            class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword4"
                            placeholder="" value="{{ $order->receiver_secondary_phone_number }}">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4"> المدينه </label>
                        <input type="text" name="city" class="form-control @error('password') is-invalid @enderror"
                            id="exampleInputPassword4" placeholder="" value="{{ $order->city }}">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4"> المنطقه </label>
                        <input type="text" name="area" class="form-control @error('password') is-invalid @enderror"
                            id="exampleInputPassword4" placeholder="" value="{{ $order->area }}">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">الشارع</label>
                        <input type="text" name="receiver_street_name"
                            class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword4"
                            placeholder="" value="{{ $order->receiver_street_name }}"> 
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">ملاحظات </label>
                        <input type="text" name="receiver_notes"
                            class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword4"
                            placeholder="" value="{{ $order->receiver_notes }}">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">السعر الشامل</label>
                        <input type="text" name="package_charge"
                            class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword4"
                            placeholder="" value="{{ $order->package_charge }}">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword4">رسوم الطرد </label>
                        <input type="text" name="shpping_charge"
                            class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword4"
                            placeholder="" value="{{ $order->shpping_charge }}">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword4">رسوم النقل </label>
                        <input type="text" name="postal_charge" class="form-control @error('password') is-invalid @enderror"
                            id="exampleInputPassword4" placeholder="" value="{{ $order->postal_charge }}">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword4">ملاحظات</label>
                        <input type="text" name="package_content"
                            class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword4"
                            placeholder="" value="{{ $order->package_content }}">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

<button type="submit" class="btn btn-primary mr-2">Update</button>
                    <a href="" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
