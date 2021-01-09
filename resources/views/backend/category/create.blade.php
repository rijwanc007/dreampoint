@extends('backend.master')
@section('content')
    {!! Form::open(['class' =>'form-sample','route' => 'category.store','method' => 'POST']) !!}
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="page-header" id="bannerClose"><h3 class="page-title"><span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-plus"></i></span> Add Category</h3></div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="hid">Category</label>
                        <select class="form-control" id="category" name="name" required>
                            <option selected disabled value="">choose an option</option>
                                <option value="men">Men Cloth</option>
                                <option value="women">Women Cloth</option>
                                <option value="kids">Kids Cloth</option>
                                <option value="groceries">Groceries</option>
                                <option value="accessories">Accessories</option>
                        </select>
                    </div>
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
                        <input type="text" class="form-control" id="sub_category" name="sub_category" placeholder="Enter Sub-Category" required>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/><br/>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-gradient-primary btn-lg btn-block"><i class="mdi mdi-plus"></i> Add Category </button>
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
