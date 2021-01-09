@extends('backend.master')
@section('content')
    {!! Form::open(['class' =>'form-sample','route' => ['product.update', $product->id],'method' => 'PATCH', 'enctype' => 'multipart/form-data']) !!}
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="page-header" id="bannerClose"><h3 class="page-title"><span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-pencil"></i></span> Update Product</h3></div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" id="category" name="category" required>
                            <option selected disabled value="">choose an option</option>
                            @foreach($categories as $category)
                                <option value="{{$category->name}}" @if($product->category == $category->name) selected @endif>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group" id="sub_category_field">
                        <label for="sub_category">Sub-Category</label>
                        <select class="form-control" name="sub_category" id="sub_category" >
                            @foreach($sub_categories as $sub_category)
                                <option value="{{$sub_category->sub_category}}" @if(strtoupper($product->sub_category) == $sub_category->sub_category) selected @endif>{{$sub_category->sub_category}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="select_role" >Upload Photo</label>
                        <input type='file' class="form-control" id="imageUpload" name="photo" accept=".png, .jpg, .jpeg"/>
                    </div>
                    <div class="form-group">
                        <label for="pc">Product Code</label>
                        <input type="text" class="form-control" id="p_code" name="p_code" placeholder="Product Code" value="{{$product->product_code}}" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Product Title" value="{{$product->title}}" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea rows="8" cols="20" class="form-control" id="description" name="description" placeholder="Product Description">{{$product->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="pf">Product's Feature</label>
                        <select class="form-control" name="pf">
                            <option selected disabled value="">choose an option</option>
                            <option value="featured" @if($product->pf == 'featured') selected @endif>Featured</option>
                            <option value="new" @if($product->pf == 'new') selected @endif>New Product</option>
                            <option value="best" @if($product->pf == 'best') selected @endif>Best Seller</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="category">Offer</label>
                        <select class="form-control" id="offer" name="offer">
                            <option selected disabled value="">choose an option</option>
                            @foreach($offers as $offer)
                                <option value="{{$offer->id}}" @if($product->offer == $offer->id) selected @endif>{{$offer->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pp">Previous Price /(unit)</label>
                        <input type="number" class="form-control" id="pp" name="pp" placeholder="previous price (not required)" value="{{$product->prev_price}}">
                    </div>
                    <div class="form-group">
                        <label for="discount">Discount %</label>
                        <input type="number" class="form-control" id="discount" name="discount" placeholder="Discount" value="{{$product->discount}}">
                    </div>
                    <div class="form-group">
                        <label for="np">New Price/ (unit)</label>
                        <input type="number" class="form-control" id="np" name="np" placeholder="New Price" value="{{$product->new_price}}" required>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/><br/>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-gradient-primary btn-lg btn-block"><i class="mdi mdi-pencil"></i> Update </button>
        </div>
    </div>
    {!! Form::close() !!}

    <script type="text/javascript">
        function _(x){
            return document.getElementById(x);
        }
        $(document).on('change', '#category', function (){
            $('#sub_category').empty();
            let cname = $(this).val();
            $.ajax({
                url : '/category_name/' + cname,
                method : 'GET',
                success:function(data){
                    if(data.length != 0){
                        $('#sub_category_field').show();
                        $('#sub_category').append('<option selected disabled value="">Choose An Option</option>');
                        jQuery.each( data, function( item, value ) {
                            $('#sub_category').append("<option value='"+ value.sub_category + "'>" + value.sub_category + "</option>");
                        });
                    }
                }
            });
        });
        $(document).on('input','#discount',function(){
            let diffrence = ($(this).val() * _('pp').value) /100;
            let discount_amount = _('pp').value - diffrence;
            _('np').value = discount_amount;
        });
    </script>
@endsection
