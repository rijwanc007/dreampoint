@extends('backend.master')
@section('content')
    {!! Form::open(['class' =>'form-sample','route' => 'navoffer.store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="page-header" id="bannerClose"><h3 class="page-title"><span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-account"></i></span> Add New Nav Offer Products</h3></div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="hid">Category</label>
                        <select class="form-control" id="category" name="category" required>
                            <option selected disabled value="">choose an option</option>
                            <option value="men">Men</option>
                            <option value="women">Women</option>
                            <option value="kids">Kids</option>
                            <option value="accessories">Accessories</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Image" >Upload Photo</label>
                        <input type='file' class="form-control" id="imageUpload" name="image" accept=".png, .jpg, .jpeg" required/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/><br/>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-gradient-primary btn-lg btn-block"><i class="mdi mdi-account"></i> Create </button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
