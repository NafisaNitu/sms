@extends('admin.master')

@section('title')
    Create Role
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Create Role</h2>
                    </div>

                    <h2 class="text-success font-size-24">{{ Session::get('message') }}</h2>

                    <div class="card-body">
                        <form action="{{ route('new-role') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-4">Role Display Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="display_name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-form-label col-md-4">Role Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-form-label col-md-4"></label>
                                <div class="col-md-8">
                                    <div class="d-grid">
                                        <input type="submit" class="btn col-12 btn-success" value="Create role">
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
