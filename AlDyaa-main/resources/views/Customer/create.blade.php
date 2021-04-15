@extends('layouts.app')
@section('content')

    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Basic Tables
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Customer</h4>
                        <hr>
                        <div class="table-responsive">
                            <form class="forms-sample" method="POST" action="/customer/create">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror " name="name"
                                        id="exampleInputName1" placeholder="" value="{{ old('name') }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Contact Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror "
                                        name="contact_name" id="exampleInputName1" placeholder=""
                                        value="{{ old('name') }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword4">Phone Number</label>
                                    <input type="text" name="phone_number"
                                        class="form-control @error('password') is-invalid @enderror"
                                        id="exampleInputPassword4" placeholder="">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Mobile </label>
                                    <input type="text" name="mobile"
                                        class="form-control @error('password') is-invalid @enderror"
                                        id="exampleInputPassword4" placeholder="">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">City </label>
                                    <input type="text" name="city"
                                        class="form-control @error('password') is-invalid @enderror"
                                        id="exampleInputPassword4" placeholder="">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Area </label>
                                    <input type="text" name="area"
                                        class="form-control @error('password') is-invalid @enderror"
                                        id="exampleInputPassword4" placeholder="">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Adress</label>
                                    <input type="text" name="adress"
                                        class="form-control @error('password') is-invalid @enderror"
                                        id="exampleInputPassword4" placeholder="">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>



                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <a href="{{ route('admins.users.all') }}" class="btn btn-light">Cancel</a>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Hoverable Table</h4>
                        <p class="card-description">
                        <div class="rtl">
                           
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Add new price 
                                </button>
                            </div>
                          
                          <!-- Modal -->
                          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Add New</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                            <form class="forms-sample" method="POST" action="/customer/create/anas">
                                @csrf
                        
                            
                                        <div class="form-group">
                                          <label for="recipient-name" class="col-form-label">Area:</label>
                                          <input type="text" class="form-control" id="recipient-name" name="pop_area">
                                        </div>
                                        <div class="form-group">
                                          <label for="recipient-name" class="col-form-label">City:</label>
                                          <input type="text" class="form-control" id="recipient-name" name="pop_city">
                                        </div>
                                        <div class="form-group">
                                          <label for="recipient-name" class="col-form-label">Price:</label>
                                          <input type="text" class="form-control" id="recipient-name" name="pop_price">
                                        </div>
                                       
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        </div>
                                    </form>
                                </div>
                              </div>
                            </div>
                          </div>

                        Add class <code>.table-hover</code>
                        </p>
                        <div class="table-responsive">
                            <table id="order-listing" class="table">
                                <thead>
                                    <tr>
                                        <th>City</th>
                                        <th>Area</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ( $customershowaa as $customer)
                                    <tr>
                                      
                                        <td>{{ $customer->pop_area }}</td>
                                        <td>{{ $customer->pop_city }}</td>
                                        <td>{{ $customer->pop_price }}</td>
                                     

                                        <td> 

                                            <a href=""
                                                class="btn btn-outline-info">Edit</a>
                                      
                                            
                                            <button type="button" class="btn btn-danger servdeletebtn">Delete</button>
                                          
                                            

                                        </td>
                                    </tr>
                                @endforeach 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            @endsection

            @section('js')
                <script src="{{ asset('melody/js/data-table.js') }}"></script>

            @endsection
