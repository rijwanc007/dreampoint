@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row table-responsive">
                        <div class="col-lg-12">
                            <h2 class="text-center text-info">Category<hr/></h2><br/>
                            {!! Form::open(['route' => 'category.search','method' => 'GET']) !!}
                            <div class="row text-center">
                                <div class="col-md-2"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="item" name="item" placeholder="Search in table....." style="border: 1px solid">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <button class="btn btn-info btn-lg btn-block form-control" id="search">Search</button>
                                    </div>
                                </div>
                            </div>
                            {!! Form::close() !!}
                            <br>
                            <table class="table table-striped">
                                <thead>
                                <tr class="text-center">
                                    <th> S/L</th>
                                    <th>Category Name</th>
                                    <th>Sub Head Category</th>
                                    <th> Sub-Category </th>
                                    <th> Option </th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($categories as $category)
                                    <tr class="text-center">
                                        <td>{{ ($categories->currentpage()-1) * $categories ->perpage() + $loop->index + 1 }}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->sub_head_category}}</td>
                                        <td>{{$category->sub_category}} </td>
                                        <td>
                                            <button type="button" class="btn btn-inverse-info btn-icon" onclick="window.location='{{route('category.edit',$category->id)}}'"><i class="mdi mdi-pencil"></i></button>
                                            <div class="modal fade" id="delete_modal_{{$category->id}}" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Delete Category</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are You Want To Delete This Category.Once You Delete This Category</p>
                                                            <p>You Will Delete The Information Permanently</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                            {!! Form::open(['route' => ['category.destroy',$category->id],'method' => 'DELETE']) !!}
                                                            <button type="submit" class="btn btn-success">submit</button>
                                                            {!! Form::close() !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-inverse-danger btn-icon" data-toggle="modal" data-target="#delete_modal_{{$category->id}}"><i class="mdi mdi-delete-forever"></i></button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center text-info">{{'No Category Created Yet'}}</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                            {!! $categories->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
