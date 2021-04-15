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
                <h4 class="card-title">Data table</h4>
                <div class="row">

                    <div class="col-12">
                        <div class="rtl">
                            <a href="/order/create" class="w-auto btn btn-outline-success top-right mb-3">Create New
                                Order</a>
                        </div>
                        <div class="table-responsive">
                            <table id="order-listing" class="table">
                                <thead>
                                    <tr>
                                        <th>رقم البوليصه</th>
                                        <th>اسم العميل</th>
                                        <th>اسم المرسل اليه</th>
                                        <th>المنطقه</th>
                                        <th>المدينه</th>
                                        <th>السعر الشامل</th>

                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ordershow as $order)
                                        <tr>
                                            <input type="hidden" class="serdelete_val_id" value="{{ $order->id }}">
                                            <td>{{ $order->polise }}</td>
                                            <td>{{ $order->Account_name }}</td>
                                            <td>{{ $order->receiver_full_name }}</td>
                                            <td>{{ $order->area }}</td>
                                            <td>{{ $order->city }}</td>
                                            <td>{{ $order->postal_charge }}</td>

                                            <td>

                                                <a href="{{ route('orders.edit', $order->id) }}"
                                                    class="btn btn-outline-info">Edit</a>
                                                {{-- <a href="{{ route('order.edit',$order->id) }}" class="btn btn-outline-info">Edit</a> --}}
                                                {{-- <a href="/delete/{{ $order->id }}">
                                                    <button class="btn btn-outline-primary" 
                                                    onclick="deleteConfirmation(event)" >Delete</button>
                                                </a> --}}
                                                {{-- <a href="/orders/delete/{{$order->id}}"  onclick="return confirm('Are you sure?')">Delete</a> --}}

                                                {{-- <form action="{{ url('orders/' . $order->id) }}" method="post" onsubmit="delete()">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-danger" onclick="delete(id)">Delete</button>
                                                </form> --}}
                                                
                                                <button type="button" class="btn btn-danger servdeletebtn">Delete</button>
                                                {{-- <a href="/orders/delete/{{$order->id}}"> Delete</a> --}}
                                               
                                                

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
                                url: '/orders/delete/' + delete_id,
                                data: data,
                            data: { somefield: "Some field value", _token: '{{csrf_token()}}' },
                                success: function(response) {

                                    swal(response.state , {
                                        icon: "success",
                                        button:false,
                                        timer:800,
                                        })
                                        
                                        .then((willDelete) => {
                                            window.location.href='/order/show';
                                            location.reload();
                                        });
                                }
                            });

                        }
                    });


                });
        });




                //          swal("Poof! Your imaginary file has been deleted!", {
                //              icon: "success",
                //          });
                //      } else {
                //          swal("Your imaginary file is safe!");
                //      }
                //  });










                // alert(delete_id)
                // swal({
                //         title: "Are you sure?",
                //         text: "Once deleted, you will not be able to recover this imaginary file!",
                //         icon: "warning",
                //         buttons: true,
                //         dangerMode: true,
                //     })
                //     .then((willDelete) => {
                //         if (willDelete) {

                //           //   var data = {
                //       //   "_token" => $('input[name="csrf-token"]').val(),
                //               //  "id": delete_id,
                //             };

                //             $.ajax({
                //                 type: "DELETE",
                //                 url: "/orders/" + delete_id,
                //                 data: data,
                //                 dataType: "dataType",
                //                 success: function(response) {
                //                     swal(response.status, {
                //                             icon: "success",
                //                         })
                //                         .then((willDelete) => {
                //                             location.reload();
                //                         });
                //                 }
                //             });


                //         }
                //     });
      

        // function deleteConfirmation(id) {
        //     event.preventDefault();
        //     swal({
        //         title: "Delete?",
        //         text: "Please ensure and then confirm!",
        //         type: "warning",
        //         showCancelButton: !0,
        //         confirmButtonText: "Yes, delete it!",
        //         cancelButtonText: "No, cancel!",
        //         reverseButtons: !0
        //     }).then(function(e) {

        //         if (e.value === true) {
        //             var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        //             $.ajax({
        //                 type: 'POST',
        //                 url: "{{ url('orders') }}/" + id,
        //                 data: {
        //                     _token: CSRF_TOKEN
        //                 },
        //                 dataType: 'JSON',
        //                 success: function(results) {

        //                     if (results.success === true) {
        //                         swal("Done!", results.message, "success");
        //                     } else {
        //                         swal("Error!", results.message, "error");
        //                     }
        //                 }
        //             });

        //         }

        //     }, function(dismiss) {
        //         return false;
        //     })
        // }



        // $('#delete-user').on('click', function(e) {
        //     e.preventDefault();
        //     let id = $(this).data('id');
        //     Swal.fire({
        //         title: 'Are you sure ?',
        //         text: "You won't be able to revert this !",
        //         icon: 'warning',
        //         showCancelButton: true,
        //         confirmButtonColor: '#3085d6',
        //         cancelButtonColor: '#d33',
        //         confirmButtonText: 'Yes, delete it!'
        //     }).then((result) => {
        //         if (result.isConfirmed) {
        //             $('#delete-post-form').submit();
        //         }
        //     })
        // });



        //  function delete(id) {

        //      alert("Delete");
        // var csrf_token = $('meta[name="csrf_token"]').attr('content');
        // swal({
        //     title: "Are you sure?",
        //     text: "Once deleted, you will not be able to recover this imaginary file!",
        //     icon: "warning",
        //     buttons: true,
        //     dangerMode: true,
        // }),
        // .then((willDelete))=>{
        //     if(willDelete){
        //         $.ajax({
        //             url:"url('orders/'"+'/'+id,
        //             type:"post"
        //             data:{'_method' :'DELETE', '_token' :csrf_token},
        //             success: function(data){
        //                 table1.ajax.reload();
        //                 swal({
        //                     title:"deleted",
        //                     text:"you clicked the button",
        //                     icon:"success",
        //                     button:"Done"
        //                 });
        //             },
        //                 error: function(){
        //                     swal({
        //                     title:"opps",
        //                     text:data.message,
        //                     type:'error',
        //                     timer:'1500'
        //                 })
        //                 }
        //             });
        //     }else{
        //         swal("your file done");
        //     });



        //     }
        // }

    </script>
@endsection
