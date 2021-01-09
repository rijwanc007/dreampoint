@extends('backend.master')
@section('content')
    {!! Form::open(['class' =>'form-sample','route' => ['category.update', $category->id],'method' => 'PATCH']) !!}
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="page-header" id="bannerClose"><h3 class="page-title"><span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-pencil"></i></span> Edit Sub-Head</h3></div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="hid">Category</label>
                        <select class="form-control" id="category" name="name" required>
                            <option value="men" @if($category->name == 'men') selected @endif>Men Cloth</option>
                            <option value="women" @if($category->name == 'women') selected @endif>Women Cloth</option>
                            <option value="kids" @if($category->name == 'kids') selected @endif>Kids Cloth</option>
                            <option value="groceries" @if($category->name == 'groceries') selected @endif>Groceries</option>
                            <option value="accessories" @if($category->name == 'accessories') selected @endif>Accessories</option>
                        </select>
                    </div>
                    @if($category->name == 'men' || $category->name == 'women' || $category->name == 'kids' )
                    <div class="form-group" id="cloth_field" >
                        <label for="hid">Sub Head Category</label>
                        <select class="form-control" name="sub_head_category" >
                            <option selected disabled value="">choose an option</option>
                            <option value="All Clothing" @if($category->sub_head_category == 'All Clothing') selected @endif>All Clothing</option>
                            <option value="All Footwear" @if($category->sub_head_category == 'All Footwear') selected @endif>All Footwear</option>
                        </select>
                    </div>
                    @elseif($category->name == 'groceries')
                    <div class="form-group" id="groceries_field" >
                        <label for="hid">Sub Head Category</label>
                        <select class="form-control" name="sub_head_category" >
                            <option selected disabled value="">choose an option</option>
                            <option value="Groceries" @if($category->sub_head_category == 'Groceries') selected @endif>Groceries</option>
                            <option value="Dairy" @if($category->sub_head_category == 'Dairy') selected @endif>Dairy</option>
                            <option value="Fish & Meat" @if($category->sub_head_category == 'Fish & Meat') selected @endif>Fish & Meat</option>
                            <option value="Fresh Produce" @if($category->sub_head_category == 'Fresh Produce') selected @endif>Fresh Produce</option>
                            <option value="Beverage" @if($category->sub_head_category == 'Beverage') selected @endif>Beverage</option>
                        </select>
                    </div>
                    @elseif($category->name == 'accessories')
                    <div class="form-group" id="accessories_field">
                        <label for="hid">Sub Head Category</label>
                        <select class="form-control" name="sub_head_category">
                            <option selected disabled value="">choose an option</option>
                            <option value="Computer Accessories" @if($category->sub_head_category == 'Computer Accessories') selected @endif>Computer Accessories</option>
                            <option value="Mobile Accessories" @if($category->sub_head_category == 'Mobile Accessories') selected @endif>Mobile Accessories</option>
                            <option value="Fashion Accessories" @if($category->sub_head_category == 'Fashion Accessories') selected @endif>Fashion Accessories</option>
                            <option value="Cosmetic & Skin" @if($category->sub_head_category == 'Cosmetic & Skin') selected @endif>Cosmetic & Skin</option>
                        </select>
                    </div>
                    @endif
                    <div class="form-group" id="cloth_field" style="display:none;">
                        <label for="hid">Sub Head Category</label>
                        <select class="form-control" name="sub_head_category" >
                            <option selected disabled value="">choose an option</option>
                            <option value="All Clothing">All Clothing</option>
                            <option value="All Footwear">All Footwear</option>
                        </select>
                    </div>
                    <div class="form-group" id="groceries_field" style="display:none;">
                        <label for="hid">Sub Head Category</label>
                        <select class="form-control" name="sub_head_category" >
                            <option selected disabled value="">choose an option</option>
                            <option value="Groceries">Groceries</option>
                            <option value="Dairy">Dairy</option>
                            <option value="Fish & Meat">Fish & Meat</option>
                            <option value="Fresh Produce">Fresh Produce</option>
                            <option value="Beverage">Beverage</option>
                        </select>
                    </div>
                    <div class="form-group" id="accessories_field" style="display:none;">
                        <label for="hid">Sub Head Category</label>
                        <select class="form-control" name="sub_head_category">
                            <option selected disabled value="">choose an option</option>
                            <option value="Computer Accessories">Computer Accessories</option>
                            <option value="Mobile Accessories">Mobile Accessories</option>
                            <option value="Fashion Accessories">Fashion Accessories</option>
                            <option value="Cosmetic & Skin">Cosmetic & Skin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sub_category">Sub-Category</label>
                        <input type="text" class="form-control" id="sub_category" name="sub_category" placeholder="Enter Sub-Category" value="{{$category->sub_category}}" required>
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
        $(document).on('change', '#category', function (){
            let category = $(this).val();
            if(category == 'men' || category == 'women' || category == 'kids'){
                $('#cloth_field').show();
                $('#groceries_field').hide();
                $('#accessories_field').hide();
            }
            else if(category == 'groceries'){
                $('#cloth_field').hide();
                $('#groceries_field').show();
                $('#accessories_field').hide();
            }
            else{
                $('#cloth_field').hide();
                $('#groceries_field').hide();
                $('#accessories_field').show();
            }
        });
    </script>
@endsection
