@extends('admin.master')

@section('title')
    Manage Profile
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Teacher Profile Info</h2>
                    </div>
                    <div class="card-body">
                        <h2 class="text-success font-size-24">{{ Session::get('message') }}</h2>
                        <table class="table" id="dataTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Image</th>
                                    <th>About</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach($teachers as $teacher)
                                <tbody>
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $teacher->name }}</td>
                                        <td>{{ $teacher->email }}</td>
                                        <td>{{ $teacher->phone }}</td>
                                        <td>{{ $teacher->address }}</td>
                                        <td>
                                            <img src="{{ asset($teacher->image) }}" alt="" style="height: 100px; width: 100px">
                                        </td>
                                        <td>{{ $teacher->description }}</td>
                                        <td>{{ $teacher->status == 1 ? 'Published' : 'Unpublished' }}</td>

                                        <td>
                                            <a href="{{ route('edit-profile', ['id'=> $teacher->id]) }}" class="btn btn-info">edit</a>
                                            <a href="{{ route('delete-profile', ['id'=> $teacher->id]) }}" class="btn btn-danger">del</a>
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


