@extends('admin.master')

@section('title')
    Edit Enroll
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center"> Edit Enroll</h2>
                    </div>

                    <h2 class="text-success font-size-24">{{ Session::get('message') }}</h2>

                    <div class="card-body">
                        <form action="{{ route('update-enroll', ['id' => $enroll->id]) }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-4">Payment Status</label>
                                <div class="col-md-8">
                                    <label for=""> <input type="radio" name="payment_status" {{ $enroll->payment_status == 1 ? 'checked' : '' }} value="1"> Completed</label>
                                    <label for=""> <input type="radio" name="payment_status" {{ $enroll->payment_status == 0 ? 'checked' : '' }} value="0"> Pending</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-4">Enroll Status</label>
                                <div class="col-md-8">
                                    <label for=""> <input type="radio" name="enroll_status" {{ $enroll->enroll_status == 1 ? 'checked' : '' }} value="1"> Selected</label>
                                    <label for=""> <input type="radio" name="enroll_status" {{ $enroll->enroll_status == 0 ? 'checked' : '' }} value="0"> Waiting</label>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-form-label col-md-4"></label>
                                <div class="col-md-8">
                                    <div class="d-grid">
                                        <input type="submit" class="btn col-12 btn-success" value="Update Enroll Info">
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

