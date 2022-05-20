@extends('admin.master')

@section('title')
    Manage User
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center"> User Infos</h2>
                    </div>
                    <div class="card-body">
                        <h2 class="text-success font-size-24">{{ Session::get('message') }}</h2>
                        <table class="table" id="dataTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach($users as $user)
                                <tbody>
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td>
                                            <a href="{{ route('edit-user', ['id'=> $user->id]) }}" class="btn btn-info">edit</a>
                                            <a href="{{ route('delete-user', ['id'=> $user->id]) }}" class="btn btn-danger">del</a>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



