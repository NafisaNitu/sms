@extends('admin.master')

@section('title')
    Edit Subject
@endsection


@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Edit Subject</h2>
                    </div>

                    <h2 class="text-success font-size-24">{{ Session::get('message') }}</h2>

                    <div class="card-body">
                        <form action="{{ route('update-subject',['id' => $subject->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-4">Subject Title</label>
                                <div class="col-md-8">
                                    <input type="text" name="title" class="form-control" value="{{ $subject->title }}">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-form-label col-md-4">Fee</label>
                                <div class="col-md-8">
                                    <input type="number" name="fee" class="form-control" value="{{ $subject->fee }}">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-form-label col-md-4">Featured Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" class="form-control-file">
                                    <img src="{{ asset($subject->image) }}" style="height: 100px; width: 100px;" alt="">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-form-label col-md-4">Short Description</label>
                                <div class="col-md-8">
                                    <textarea name="short_description" class="form-control" cols="30" rows="2">{{ $subject->short_description }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-form-label col-md-4">Long Description</label>
                                <div class="col-md-8">
                                    <textarea name="long_description" id="editor" class="form-control" cols="30" rows="2">{{ $subject->long_description }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-form-label col-md-4"></label>
                                <div class="col-md-8">
                                    <div class="d-grid">
                                        <input type="submit" class="btn col-12 btn-success" value="Update Subject">
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


