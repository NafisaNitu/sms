@extends('admin.master')

@section('title')
    Manage Role
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Manage Role</h2>
                    </div>
                    <div class="card-body">
                        <h2 class="text-success font-size-24">{{ Session::get('message') }}</h2>
                       <table class="table">
                           <tr>
                               <thead>
                                    <th>#</th>
                                    <th>Role Display Name</th>
                                    <th>Role Name</th>
                                    <th>Action</th>
                               </thead>
                           </tr>
                           @foreach($roles as $role)
                           <tr>
                               <tbody>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $role->display_name }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        <a href="{{ route('edit-role', ['id'=> $role->id]) }}" class="btn btn-success">edit</a>
                                        <a href="{{ route('delete-role', ['id'=> $role->id]) }}" class="btn btn-danger">del</a>
                                    </td>
                               </tbody>
                           </tr>
                           @endforeach
                       </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

