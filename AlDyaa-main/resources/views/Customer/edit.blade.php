@extends('layouts.app')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update Customer</h4>
                <p class="card-description">

                </p>
                <form class="forms-sample" method="post" action="{{ route('customers.update', $customer->id) }}">
                    @csrf
                    {{ method_field('PUT') }}
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror " name="name"
                            id="exampleInputName1" placeholder="" value="{{ $customer->name }}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Contact Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror " name="contact_name"
                            id="exampleInputName1" placeholder="" value="{{ $customer-> contact_name}}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword4">Phone Number</label>
                        <input type="text" name="phone_number" class="form-control @error('password') is-invalid @enderror"
                            id="exampleInputPassword4" placeholder="" value="{{ $customer->phone_number }}">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Mobile</label>
                        <input type="text" name="mobile" class="form-control @error('password') is-invalid @enderror"
                            id="exampleInputPassword4" placeholder="" value="{{ $customer->mobile }}">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">City</label>
                        <input type="text" name="city"
                            class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword4"
                            placeholder="" value="{{ $customer->city }}">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Area</label>
                        <input type="text" name="area"
                            class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword4"
                            placeholder="" value="{{ $customer->area }}">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Adress </label>
                        <input type="text" name="adress"
                            class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword4"
                            placeholder="" value="{{ $customer->adress }}">
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
