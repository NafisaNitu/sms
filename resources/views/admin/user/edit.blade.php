@extends('admin.master')

@section('title')
    Edit User
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Edit User</h2>
                    </div>

                    <h2 class="text-success font-size-24">{{ Session::get('message') }}</h2>

                    <div class="card-body">
                        @if($errors->any())
                            <ul>
                                @foreach($errors->all() as $key => $error)
                                    <li class="text-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form action="{{ route('update-user',['id' => $user->id]) }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-4">User Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-form-label col-md-4">User Email</label>
                                <div class="col-md-8">
                                    <input type="text" name="email" value="{{ $user->email }}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-form-label col-md-4">User Role</label>
                                <div class="col-md-8">
                                    <label for=""><input type="radio" class="" {{ $user->role == 'teacher' ? 'checked' : '' }} name="role" value="teacher">Teacher</label>
                                    <label for=""><input type="radio" class="" {{ $user->role == 'user' ? 'checked' : '' }} name="role" value="user">User</label>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-form-label col-md-4"></label>
                                <div class="col-md-8">
                                    <div class="d-grid">
                                        <input type="submit" class="btn col-12 btn-success" value="Update User">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

