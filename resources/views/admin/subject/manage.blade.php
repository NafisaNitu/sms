@extends('admin.master')

@section('title')
    Manage Subject
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center"> Manage Subject</h2>
                    </div>
                    <div class="card-body">
                        <h2 class="text-success font-size-24">{{ Session::get('message') }}</h2>
                        <table class="table" id="dataTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Teacher Name</th>
                                <th>Title</th>
                                <th>Code</th>
                                <th>Fee</th>
                                <th>Image</th>
                                <th>Short Description</th>
                                <th>Long Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            @foreach($subjects as $subject)
                                <tbody>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ \App\Models\User::find($subject->teacher_id)->name }}</td>
                                    <td>{{ $subject->title }}</td>
                                    <td>{{ $subject->code }}</td>
                                    <td>{{ $subject->fee }}</td>
                                    <td>
                                        <img src="{{ asset($subject->image) }}" alt="" style="height: 100px; width: 100px">
                                    </td>
                                    <td>{{ $subject->short_description }}</td>
                                    <td>{{ substr_replace($subject->long_description, '...', 160) }}</td>
                                    <td>{{ $subject->status == 1 ? 'Published' : 'Unpublished' }}</td>

                                    <td>
                                        <a href="{{ route('edit-subject', ['id'=> $subject->id]) }}" class="btn btn-secondary">edit</a>
                                        @if(Auth::user()->role == 'admin')
                                            <a href="{{ route('change-subject-status', ['id'=> $subject->id]) }}" class="btn btn-info">status</a>
                                            <a href="{{ route('delete-subject', ['id'=> $subject->id]) }}" onclick="return confirm('Are you sure to delete this?');" class="btn btn-danger">del</a>
                                        @endif
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



