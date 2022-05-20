@extends('front.master')

@section('title')
    Register Page
@endsection


@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">

                <div class="card m-t-100">
                    <div class="card-header">
                        <h2 class="text-center">User Register</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user-register') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-4">Username</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-form-label col-md-4">Email</label>
                                <div class="col-md-8">
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-form-label col-md-4">Phone</label>
                                <div class="col-md-8">
                                    <input type="number" name="phone" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-form-label col-md-4">Password</label>
                                <div class="col-md-8">
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-form-label col-md-4">Confirm Password</label>
                                <div class="col-md-8">
                                    <input type="password" name="password_confirmation" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-form-label col-md-4"></label>
                                <div class="col-md-8">
                                    <div class="d-grid">
                                        <input type="submit" class="btn col-12 btn-success" value="Register">
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

