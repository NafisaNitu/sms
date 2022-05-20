@extends('admin.master')

@section('title')
    Create User
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Create User</h2>
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

                        <form action="{{ route('new-user') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-4">User Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-form-label col-md-4">User Email</label>
                                <div class="col-md-8">
                                    <input type="text" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-form-label col-md-4">User Password</label>
                                <div class="col-md-8">
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-form-label col-md-4">User Role</label>
                                <div class="col-md-8">
                                    @foreach($roles as $role)
                                         <label for=""><input type="radio" class="" name="role" value="{{ $role->name }}">{{ $role->display_name }}</label>
                                    @endforeach
{{--                                    <label for=""><input type="radio" class="" name="role" value="user">User</label>--}}
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-form-label col-md-4"></label>
                                <div class="col-md-8">
                                    <div class="d-grid">
                                        <input type="submit" class="btn col-12 btn-success" value="Create User">
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
