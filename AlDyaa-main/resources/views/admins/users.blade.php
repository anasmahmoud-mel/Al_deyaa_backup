@extends('layouts.app')
@section('content')

        <div class="row">
            <div class="col-md-6 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-0">Statistics</h4>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-inline-block pt-3">
                                <div class="d-md-flex">
                                    <h2 class="mb-0">$10,200</h2>
                                    <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                        <i class="far fa-clock text-muted"></i>
                                        <small class=" ml-1 mb-0">Updated: 9:10am</small>
                                    </div>
                                </div>
                                <small class="text-gray">Raised from 89 orders.</small>
                            </div>
                            <div class="d-inline-block">
                                <i class="fas fa-chart-pie text-info icon-lg"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="card">

            <div class="card-body ">
                <span>Users Table</span>
                <div class="rtl">
                    <a href="{{ route('admins.users.create') }}" class="w-auto btn btn-outline-success top-right mb-3">Create New User</a>
                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="order-listing" class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody >
                                @foreach($users as $user)
                                    <tr>
                                        <td> {{ $user->id }} </td>
                                        <td> {{ $user->name }} </td>
                                        <td> {{ $user->email }} </td>
                                        <td> {{ $user->role }} </td>
                                        <td style="justify-content: space-between">
                                            
                                                <view-user-modal
                                                        :user-id="{{ json_encode($user->id)  }}"
                                                        :user-name="{{ json_encode($user->name) }}"
                                                        :user-email="{{ json_encode($user->email) }}"
                                                        :user-role="{{ json_encode($user->role) }}"
                                                        :data-target="{{ json_encode('#exampleModal-'.$user->id) }}"
                                                        :modal-id="{{ json_encode('exampleModal-'.$user->id) }}"
                                                    >
                                                    
                                                </view-user-modal>

                                            
                                            
                                                <a href="{{ route('admins.users.edit', $user->id) }}" class="btn btn-outline-info">Edit</a>
                                      

                                                <button class="btn btn-outline-danger" onclick="event.preventDefault();
                                                         document.getElementById('delete-form-{{ $user->id }}').submit();">
                                                        delete
                                                    <form id="delete-form-{{$user->id}}" action="{{ route('admins.users.delete', $user->id) }}" method="POST" class="d-none">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="hidden" name="id" value="{{ $user->id }}">
                                                    </form>
                                                </button>
                                        
                                        
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

    



@endsection

@section('js')
    <script src="{{asset('melody/js/data-table.js')}}"></script>
@endsection
