
@extends('layouts.app')

@section('content')

    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Order Table
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data table</li>
                </ol>
            </nav>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Customer table</h4>
                <div class="row">

                    <div class="col-12">
                        <div class="rtl">
                            <a href="/customer/create" class="w-auto btn btn-outline-success top-right mb-3">Create New
                                Order</a>
                        </div>
                        <div class="table-responsive">
                            <table id="order-listing" class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Contact Name</th>
                                        {{-- <th>Phone Number</th> --}}
                                        <th>Mobile</th>
                                        <th>City</th>
                                        <th>Area</th>
                                        <th>Adress</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customershow as $customer)
                                        <tr>
                                            <input type="hidden" class="serdelete_val_id" value="{{ $customer->id }}">
                                            <td>{{ $customer->name }}</td>
                                            <td>{{ $customer->contact_name }}</td>
                                            {{-- <td>{{ $customer->phone_number }}</td> --}}
                                            <td>{{ $customer->mobile }}</td>
                                            <td>{{ $customer->city }}</td>
                                            <td>{{ $customer->area }}</td>
                                            <td>{{ $customer->adress }}</td>

                                            <td>

                                                <a href="{{ route('customers.edit', $customer->id) }}"
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
            </div>
        </div>
    </div>


@endsection

@section('js')
    <script src="{{ asset('melody/js/data-table.js') }}"></script>

  
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">




        $(document).ready(function() {
            $('.servdeletebtn').click(function(e) {
                e.preventDefault();

                var delete_id = $(this).closest("tr").find('.serdelete_val_id').val();

                swal({
                        title: "Are you sure?" + delete_id,
                        text: "Once deleted, you will not be able to recover this imaginary file!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                        
                    })
                    .then((willDelete) => {
                        if (willDelete) {

                            var data = {
                                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                          
                            };
                          
                            $.ajax({
                                type: "DELETE",
                                url: '/customer/delete/' + delete_id,
                                data: data,
                            data: { somefield: "Some field value", _token: '{{csrf_token()}}' },
                                success: function(response) {

                                    swal(response.state , {
                                        icon: "success",
                                        button:false,
                                        timer:800,
                                        })
                                        
                                        .then((willDelete) => {
                                            window.location.href='/customer/show';
                                            location.reload();
                                        });
                                }
                            });

                        }
                    });


                });
        });




    </script>
@endsection





@section('js')
    <script src="{{ asset('melody/js/data-table.js') }}"></script>
@endsection
