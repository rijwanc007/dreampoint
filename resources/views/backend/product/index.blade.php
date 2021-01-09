@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row table-responsive">
                        <div class="col-lg-12">
                            <h2 class="text-center text-info">Products<hr/></h2><br/>
                            {!! Form::open(['route' => 'product.search','method' => 'GET']) !!}
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
                                    <th>Category</th>
                                    <th> Sub-Category </th>
                                    <th> Image </th>
                                    <th> Title </th>
                                    <th> Product Code </th>
                                    <th> Product's Feature </th>
                                    <th> Previous Price </th>
                                    <th> New Price </th>
                                    <th> Discount </th>
                                    <th> Option </th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($products as $product)
                                    <tr class="text-center">
                                        <td>{{ ($products->currentpage()-1) * $products ->perpage() + $loop->index + 1 }}</td>
                                        <td>{{$product->category}}</td>
                                        <td>{{$product->sub_category}} </td>
                                        <td><img src="{{asset('assets/images/products/'.$product->category .'/'. $product->image)}}" alt=""></td>
                                        <td>{{$product->title}} </td>
                                        <td>{{$product->product_code ? $product->product_code : '-'}} </td>
                                        <td>{{$product->pf}} </td>
                                        <td>{{$product->prev_price ? $product->prev_price : 0 }} /-</td>
                                        <td>{{$product->new_price}} /-</td>
                                        <td>{{$product->discount ? $product->discount : 0 }} %</td>
                                        <td>
                                            <button type="button" class="btn btn-inverse-info btn-icon" onclick="window.location='{{route('product.edit',$product->id)}}'"><i class="mdi mdi-pencil"></i></button>
                                            <div class="modal fade" id="delete_modal_{{$product->id}}" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Delete Product</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are You Want To Delete This Product.Once You Delete This Product</p>
                                                            <p>You Will Delete The Information Permanently</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                            {!! Form::open(['route' => ['product.destroy',$product->id],'method' => 'DELETE']) !!}
                                                            <button type="submit" class="btn btn-success">submit</button>
                                                            {!! Form::close() !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-inverse-danger btn-icon" data-toggle="modal" data-target="#delete_modal_{{$product->id}}"><i class="mdi mdi-delete-forever"></i></button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10" class="text-center text-info">{{'No Product Created Yet'}}</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                            {!! $products->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
