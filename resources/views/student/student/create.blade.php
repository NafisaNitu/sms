@extends('admin.master')

@section('title')
    Create Profile
@endsection


@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Create Profile</h2>
                    </div>

                    <h2 class="text-success font-size-24">{{ Session::get('message') }}</h2>

                    <div class="card-body">
                        <form action="{{ route('new-student-info', ['id' => isset($student) ? $student->id : '']) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-4">Student Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control" value="{{ isset($student) ? $student->name : Auth::user()->name }}">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-form-label col-md-4">Email</label>
                                <div class="col-md-8">
                                    <input type="email" name="email" class="form-control" value="{{ isset($student) ? $student->email : Auth::user()->email }}">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-form-label col-md-4">Phone</label>
                                <div class="col-md-8">
                                    <input type="number" name="phone" class="form-control" value="{{ isset($student) ? $student->phone : '' }}">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-form-label col-md-4">Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" class="form-control-file">
                                    @if(isset($student))
                                        <img src="{{ asset($student->image) }}" style="height: 100px; width: 100px;" alt="">
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-form-label col-md-4">Address</label>
                                <div class="col-md-8">
                                    <textarea name="address" class="form-control" cols="30" rows="2">{{ isset($student) ? $student->address : '' }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-form-label col-md-4"></label>
                                <div class="col-md-8">
                                    <div class="d-grid">
                                        <input type="submit" class="btn col-12 btn-success" value="Create Profile">
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
