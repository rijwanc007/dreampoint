@extends('backend.master')
@section('content')
    {!! Form::open(['class' =>'form-sample','route' => ['offer.update', $offer->id],'method' => 'PATCH', 'enctype' => 'multipart/form-data']) !!}
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="page-header" id="bannerClose"><h3 class="page-title"><span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-pencil"></i></span> Update Offer</h3></div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Offer Name" value="{{$offer->name}}" required>
                    </div>
                    <div class="form-group">
                        <label for="Image" >Upload Photo</label>
                        <input type='file' class="form-control" id="imageUpload" name="image" accept=".png, .jpg, .jpeg"/>
                    </div>
                    <div class="form-group">
                        <label for="duration">Duration</label>
                        <input type="date" class="form-control" id="duration" name="duration" value="{{$offer->duration}}" required>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/><br/>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-gradient-primary btn-lg btn-block"><i class="mdi mdi-pencil"></i> Update Offer </button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
