@extends('frontend.master')
@section('title', 'Dream Point | Accessories')
@section('content')
    <div class="container">
        <div id="cat-nav">
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#cat-nav-mega">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="cat-nav-mega">
                        <ul class="nav navbar-nav">
                            <li class="dropdown menu-large">There is nothing to show</li>
                            <li><a href="{{route('frontend.men.cloth')}}"> MEN </a></li>
                            <li><a href="{{route('frontend.women.cloth')}}">WOMEN </a></li>
                            <li><a href="{{route('frontend.kids.cloth')}}">BABY & KIDS </a></li>
                            <li><a href="{{route('frontend.groceries')}}">Groceries</a></li>
                            <li class="dropdown menu-large active">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Accessories<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu megamenu" role="menu">
                                    <li>
                                        <div class="">
                                            <div class="mega-sub">
                                                <div class="mega-sub-title">Computer Accessories</div>
                                                <ul>
                                                    @foreach($categories as $category)
                                                        @if($category->sub_head_category == 'Computer Accessories')
                                                            <li><a href="#{{$category->sub_category}}">{{$category->sub_category}}</a></li>
                                                            <br/>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="mega-sub">
                                                <div class="mega-sub-title">Mobile Accessories</div>
                                                <ul>
                                                    @foreach($categories as $category)
                                                        @if($category->sub_head_category == 'Mobile Accessories')
                                                            <li><a href="#{{$category->sub_category}}">{{$category->sub_category}}</a></li>
                                                            <br/>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="mega-sub">
                                                <div class="mega-sub-title">Fashion Accessories</div>
                                                <ul>
                                                    @foreach($categories as $category)
                                                        @if($category->sub_head_category == 'Fashion Accessories')
                                                            <li><a href="#{{$category->sub_category}}">{{$category->sub_category}}</a></li>
                                                            <br/>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="mega-sub">
                                                <div class="mega-sub-title">Cosmetic & Skin</div>
                                                <ul>
                                                    @foreach($categories as $category)
                                                        @if($category->sub_head_category == 'Cosmetic & Skin')
                                                            <li><a href="#{{$category->sub_category}}">{{$category->sub_category}}</a></li>
                                                            <br/>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="mega-offers">
                                                @if(!empty($navoffer))
                                                    <a href=""><img src="{{asset('assets/images/navoffer/'.$navoffer->image)}}" class="img-responsive" alt="" style="width: 100%; height: 245px;"></a>
                                                @endif
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{route('frontend.offer_zone')}}">OFFERS ZONE </a></li>
                            <li class="cat-img-off"><img src="{{asset('assets/images/offers.png')}}" alt="off"></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <br/>
        <div class="row">
            {!! Form::open(['route' => 'accessories.search','method' => 'GET']) !!}
            <div class="col-md-4">
                <input type="text" class="form-control search-wid" placeholder="Product" name="item" aria-describedby="basic-addon2">
            </div>
            <div class="col-md-2">
                <button class="btn btn-info btn-block" id="search_btn"><i class="fa fa-search"></i></button>
            </div>
            {!! Form::close() !!}
            {!! Form::open(['route' => 'accessories.price.search','method' => 'GET']) !!}
            <div class="col-md-2">
                <input type="number" class="form-control search-wid" placeholder="Price From" name="from" aria-describedby="basic-addon2">
            </div>
            <div class="col-md-2">
                <input type="number" class="form-control search-wid" placeholder="Price To" name="to" aria-describedby="basic-addon2">
            </div>
            <div class="col-md-2">
                <button class="btn btn-info btn-block" id="search_btn"><i class="fa fa-search"></i></button>
            </div>
            {!! Form::close() !!}
        </div>
        <br/><br/>
        @forelse($categories as $category)
            <div id="{{$category->sub_category}}">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <h3 class="text-center">{{$category->sub_category}}</h3>
                        <hr/>
                    </div>
                </div>
                <div class="row clearfix">
                    @forelse($products as $product)
                        @if($product->sub_category == $category->sub_category)
                            <div class="col-md-3 prdct-grid">
                                <div class="product-fade">
                                    <div class="product-fade-wrap">
                                        <div id="product-image">
                                            <div class="item2"><img src="{{asset('assets/images/products/'.$product->category . '/'.$product->image)}}" alt="" id="product_img" class="img-responsive"></div>
                                        </div>
                                        <div class="product-fade-ct">
                                            <div class="product-fade-control">
                                                <div class="to-left">
                                                    <img src="{{asset('assets/images/icon/like.png')}}" id="wishlist_cart" alt="pav" class="product_cart wishlist_cart" data-id="{{$product->id}}" title="Add To Wishlist">
                                                </div>
                                                <div class="clearfix"></div>
                                                <a href="" class="btn btn-to-cart">
                                                    <img src="{{asset('assets/images/icon/favorite-cart.png')}}" id="cart_design" alt="bag" class="product_cart" title="Add To Cart">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-name">
                                    <a href="">{{$product->title}}</a>
                                </div>
                                <div class="product-price">
                                    <span>{{$product->prev_price ? '$'.$product->prev_price : ''}}</span> ${{$product->new_price}}
                                </div>
                            </div>
                        @endif
                    @empty
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <h4 class="text-center">No Data Found !</h4>
                        </div>
                    @endforelse
                </div>
            </div>
        @empty
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h4 class="text-center">No Data Found !</h4>
            </div>
        @endforelse
    </div>
    <br/><br/>
@endsection
