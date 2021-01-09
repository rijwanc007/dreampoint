@extends('frontend.master')
@section('title', 'Dream Point | Home')
@section('home', 'active')
@section('content')
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
                        <li><a href="{{route('frontend.men.cloth')}}">MEN </a></li>
                        <li><a href="{{route('frontend.women.cloth')}}">WOMEN </a></li>
                        <li><a href="{{route('frontend.kids.cloth')}}">BABY & KIDS </a></li>
                        <li><a href="{{route('frontend.groceries')}}">GROCERIES </a></li>
                        <li><a href="{{route('frontend.accessories')}}">ACCESSORIES </a></li>
                        <li><a href="{{route('frontend.offer_zone')}}">OFFERS ZONE </a></li>
                        <li class="cat-img-off"><img src="{{asset('assets/images/offers.png')}}" alt="off"></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div id="main-slider">
        <div id="home-slider" class="owl-carousel owl-theme">
            <div class="item">
                <img src="{{asset('assets/images/slider-1.jpg')}}" alt="slide-1" class="img-responsive">
                <div class="slider-desc">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="slide-offers-left">
                                    <div class="slide-offers-title"><span>Men’s</span><br/>FASHION</div>
                                    <p>New & Fvhresh collection<br/>arraival in believe store</p>
                                    <a href="{{route('frontend.men.cloth')}}" class="btn btn-blue">Shop now</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="slide-offers-right">
                                    <div class="slide-offers-title"><span>Women’s</span><br/>FASHION</div>
                                    <p>New & Fvhresh collection<br/>arraival in believe store</p>
                                    <a href="{{route('frontend.women.cloth')}}" class="btn btn-magenta">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{asset('assets/images/slider-2.jpg')}}" alt="slide-2" class="img-responsive">
                <div class="slider-desc">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="slide-offers-left">
                                    <div class="slide-offers-title"><span>50% Price cut</span><br/>for online order</div>
                                    <p>New & Fvhresh collection<br/>arraival in believe store</p>
                                    <a href="{{route('frontend.cloth')}}" class="btn btn-blue">Shop now</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="home-content">
            <div class="cat-offers">
                <div class="row">
                    <div class="col-md-4">
                        <div class="cat-sec-2" style="border: 1px solid #2db3e4">
                            <img src="{{asset('assets/images/home/men_photo4.jpg')}}" class="img-responsive" alt="">
                            <div class="cat-desc">
                                <div class="cat-inner1">
                                    <div class="cat-title">cloths<span class="cat-span">Clothing</span></div>
                                    <a href="{{route('frontend.cloth')}}" class="btn btn-border">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cat-sec-2" style="border: 1px solid #2db3e4">
                            <img src="{{asset('assets/images/home/groceries-4.jpg')}}" class="img-responsive" alt="">
                            <div class="cat-desc">
                                <div class="cat-inner2">
                                    <div class="custom">
                                        <div class="cat-title">groceries<span class="cat-span">Food</span></div>
                                        <a href="{{route('frontend.groceries')}}" class="btn btn-border">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cat-sec-2" style="border: 1px solid #2db3e4">
                            <img src="{{asset('assets/images/home/accessories.jpg')}}" class="img-responsive" alt="">
                            <div class="cat-desc">
                                <div class="cat-inner">
                                    <div class="cat-title">accessories<span class="cat-span">collections - 2020</span></div>
                                    <a href="{{route('frontend.accessories')}}" class="btn btn-border">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="newest">
        <div class="container">
            <div class="newest-content">
                <div class="newest-tab">
                    <div class="row">
                        <ul id="myTab" class="nav nav-tabs newest" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#1" id="cat-1" role="tab" data-toggle="tab" aria-controls="1" aria-expanded="true">Featured</a>
                            </li>
                            <li role="presentation">
                                <a href="#2" role="tab" id="cat-2" data-toggle="tab" aria-controls="2">New Arrivals</a>
                            </li>
                            <li role="presentation">
                                <a href="#3" role="tab" id="cat-3" data-toggle="tab" aria-controls="3">Best Seller</a>
                            </li>
                        </ul>
                    </div>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="1" aria-labelledby="cat-1">
                            <div class="row">
                                @foreach($products as $product)
                                    @if($product->pf == 'featured')
                                        @php
                                            $f++;
                                        @endphp
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
                                        @if($f>=8)
                                            @break
                                        @endif
                                    @endif
                                @endforeach
                                @if($f>=8)
                                    <div class="row" id="button_div">
                                        <div class="col-md-9"></div>
                                        <div class="col-md-3">
                                            <div class="button_see_more">
                                                <button class="btn btn-info btn-block" onclick="Extend('see_more')">See more</button>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div id="see_more" style="display: none">
                                    <div class="clearfix"></div>
                                    @foreach($products_f as $product)
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
                                    @endforeach
                                    <div class="row" id="button_div">
                                        <div class="col-md-9"></div>
                                        <div class="col-md-3">
                                            <div class="button_see_more">
                                                <button class="btn btn-info btn-block" onclick="Shrink('see_more')">See Less</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="2" aria-labelledby="cat-2">
                            <div class="row">
                                @foreach($products as $product)
                                    @if($product->pf == 'new')
                                        @php
                                            $n++;
                                        @endphp
                                        <div class="col-md-3 prdct-grid">
                                            <div class="product-fade">
                                                <div class="product-fade-wrap">
                                                    <div id="product-image">
                                                        <div class="item2"><img src="{{asset('assets/images/products/'.$product->category .'/'.$product->image)}}" alt="" class="img-responsive" id="product_img"></div>
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
                                                {{$product->title}}
                                            </div>
                                            <div class="product-price">
                                                <span>{{$product->prev_price ? '$'.$product->prev_price : ''}}</span> ${{$product->new_price}}
                                            </div>
                                        </div>
                                        @if($n>=12)
                                            @break
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="3" aria-labelledby="cat-3">
                            <div class="row clearfix">
                                @foreach($products as $product)
                                    @if($product->pf == 'best')
                                        @php
                                            $b++;
                                        @endphp
                                        <div class="col-md-3 prdct-grid">
                                            <div class="product-fade">
                                                <div class="product-fade-wrap">
                                                    <div id="product-image">
                                                        <div class="item"><img src="{{asset('assets/images/products/'.$product->category . '/'.$product->image)}}" alt="" id="product_img" class="img-responsive"></div>
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
                                        @if($b>=12)
                                            @break
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-offers img-responsive">
        <div class="container">
            <div class="ct-offers">
                <div class="ct-offers-title">Dream Point<br>Women’s</div>
                <p>"What you wear is how you present yourself to the world, especially today, when human contacts are so quick. Fashion is instant language."  —Miuccia Prada</p>
                <a href="{{route('frontend.women.cloth')}}" class="btn btn-blue">Discover more Product</a>
            </div>
        </div>
    </div>
    <div class="new_offer">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    @if(!empty($offer))
                        <img src="{{asset('assets/images/offers/'. $offer->image)}}" class="img-responsive" onclick="wishlist()" style="width: 945px; height: 270px;">
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    @if(!empty($offer))
                        <h2 class="text-center">Valid For</h2>
                        <div class="countdown">
                            <div id="day">0</div>
                            <div id="hour">0</div>
                            <div id="minute">0</div>
                            <div id="second">0</div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="offer_slider">
                    <div class="container-fluid">
                        <div class="viewed">
                            <div class="row">
                                <div class="col">
                                    <div class="bbb_viewed_slider_container">
                                        <div class="owl-carousel owl-theme bbb_viewed_slider">
                                            @foreach($products as $product)
                                                @if(!empty($offer) && $product->offer == $offer->id)
                                                    <div class="owl-item">
                                                        <div class="product-fade">
                                                            <div class="product-fade-wrap">
                                                                <div id="product-image">
                                                                    <div class="item"><img src="{{asset('assets/images/products/'.$product->category . '/'.$product->image)}}" alt="" class="img-responsive" style="width: 100%;"></div>
                                                                </div>
                                                                <div class="product-fade-ct">
                                                                    <div class="product-fade-control">
                                                                        <div class="to-left">
                                                                            <img src="{{asset('assets/images/icon/like.png')}}" id="caraousel_wishlist" alt="pav" class="wishlist_cart" data-id="{{$product->id}}" title="Add To Wishlist">
                                                                        </div>
                                                                        <div class="clearfix"></div>
                                                                        <a href="" class="btn btn-to-cart">
                                                                            <img src="{{asset('assets/images/icon/favorite-cart.png')}}" class="offer_cart_2" alt="bag" title="Add To Cart">
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
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="why_us">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 wpld">
                    <span class="why_people"><span class="span"></span><span class="span"></span>Why People<span class="span"></span></span>
                    <span><img src="{{asset('assets/images/heart.png')}}" class="why_dreampoint_image"/></span>
                    <span class="dream_point"><span class="span"></span>Dreampoint ?<span class="span"></span><span class="span"></span></span>
                    <br/><br/><br/>
                </div>
                <div class="col-md-6"><img src="{{asset('assets/images/icon/dpb_logo-2.png')}}" class="img-responsive" id="dreampoint_logo" width="500px"></div>
                <div class="col-md-6 about_us_text">We just love the thrill of shopping for new clothes & updating our wardrobes. On the flip side, fashion goes round in circles. Sometimes, if you hold onto something long enough, in a few years it might come back in fashion again.There’s so much choice, mixing, matching, updating, ways to be stand out & personally express yourself.Window shopping, it’s free & you can get so much outfit inspo ideas.I love following trends at designer shows and at retail. I’m fascinated by how trends start on the catwalks or on the street, and how they filter down to retail. I’m curious to compare retail fashion with street fashion. I’m fascinated by the power that we as consumers have to keep a trend alive, despite them being off-trend. I also enjoy seeing trends repeat themselves as the decades go by. It’s like a sport to me and definitely as much a leisure activity as it is part of my job.Dreampoint provides everything we need.Shopping on Dreampoint, the joy of not having to go out & find somewhere to park & shopping in your PJ’s with your feet up & a cup of tea or your favorite tipple whilst you do it!</div>
            </div>
        </div>
    </div>
    <br/><br/>
    <div class="all_products">
        <div class="row">
            <div class="col-md-4">
                <div class="product_container">
                    <img src="{{asset('assets/images/landing_page/woman_gallery.jpg')}}" class="product_image img-responsive" alt="" />
                    <p class="title">Women Cloths</p>
                    <div class="overlay"></div>
                    <div class="button"><a href="{{route('frontend.women.cloth')}}"> Buy Now </a></div>
                </div>
                <div class="product_container">
                    <img src="{{asset('assets/images/landing_page/groceries_gallery.jpg')}}" class="product_image img-responsive" alt="" />
                    <p class="title">Grocereis</p>
                    <div class="overlay"></div>
                    <div class="button"><a href="{{route('frontend.groceries')}}"> Buy Now </a></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product_container_man">
                    <img src="{{asset('assets/images/landing_page/man_gallery.jpg')}}" class="product_image_man img-responsive" alt="" />
                    <p class="title1">Men Cloths</p>
                    <div class="overlay"></div>
                    <div class="men_button"><a href="{{route('frontend.men.cloth')}}"> Buy Now </a></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product_container">
                    <img src="{{asset('assets/images/landing_page/kids_gallery.jpg')}}" class="product_image img-responsive" alt="" />
                    <p class="title">Kids Cloths</p>
                    <div class="overlay"></div>
                    <div class="button"><a href="{{route('frontend.kids.cloth')}}"> Buy Now </a></div>
                </div>
                <div class="product_container">
                    <img src="{{asset('assets/images/landing_page/accessories_gallery.jpg')}}" class="product_image img-responsive" alt="" />
                    <p class="title">Accessories</p>
                    <div class="overlay"></div>
                    <div class="button"><a href="{{route('frontend.accessories')}}"> Buy Now </a></div>
                </div>
            </div>
        </div>
    </div>
    <br/><br/>
    <div class="customer_review">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h3 class="text-center text_color">
                        Please Give Your Valuable Review
                        <hr class="hr_3"/>
                    </h3>
                    <br/>
                    {!! Form::open(['route' => 'review.store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="row">
                        <div class="col-md-6"><input id="uploadFile" class="form-control" placeholder="Choose File" disabled="disabled" /></div>
                        <div class="col-md-6">
                            <div class="fileUpload btn btn-info btn-block" style="margin-top: -1px;margin-left: -2px;">
                                <span>Upload</span>
                                <input id="uploadBtn" name="image" type="file" class="upload" required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="text_color">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name"  placeholder="Enter Your Full Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="text_color">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Valid Email" required>
                    </div>
                    <div class="form-group">
                        <label for="message" class="text_color">Review</label>
                        <textarea class="form-control" id="message" name="message" rows="5" style="resize: none" placeholder="Please Type Your Review" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-info btn-block">Review</button>
                    {!! Form::close() !!}
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5 text-center">
                    <h3 class="text_color">
                        Review's
                        <hr class="hr_3"/>
                    </h3>
                    <br/>
                    <div class="row">
                        <br/><br/>
                        <section id="testim" class="testim">
                            <div class="wrap">
                                <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                                <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                                <ul id="testim-dots" class="dots">
                                    @for($i =0 ; $i<count($reviews) ; $i++)
                                        <li class="dot active"></li>
                                    @endfor
                                </ul>
                                <div id="testim-content" class="cont">
                                    @foreach($reviews as $review)
                                        <div class="">
                                            <div class="img"><img src="{{asset('assets/images/reviews/'.$review->image)}}" alt=""></div>
                                            <h2>{{$review->name}}</h2>
                                            <p>{{$review->message}}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/><br/>
    <div class="delivery_exchange">
        <div class="container">
            <div class="delivery">
                <div class="content-heading">
                    <div class="row">
                        <h3 class="title_content_heading"><span>Delivery & Exchange</span></h3>
                    </div>
                </div>
                <br/><br/>
                <div class="row text-center">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="col-md-4"><img src="{{asset('assets/images/icon/truck-icon.png')}}" id="truck_icon"></div>
                            <div class="col-md-8">
                                <h4 id="truck_icon">FREE SHIPPING</h4>
                                <p id="truck_icon">Buy BDT 3000+ &amp; Get Free Delivery</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="col-md-3"><img src="{{asset('assets/images/icon/support-icon.png')}}"></div>
                            <div class="col-md-9">
                                <h4>Support</h4>
                                <p>Whatsapp : +880-1909040003</p>
                                <p>Call : +880-1909040003</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="col-md-3"><img src="{{asset('assets/images/icon/exchange-icon.png')}}"></div>
                            <div class="col-md-9">
                                <h4>7 Days Exchange</h4>
                                <p>simply exchange it within 7 days for an exchange.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="col-md-3"><img src="{{asset('assets/images/icon/payment-secure-icon.png')}}"></div>
                            <div class="col-md-9">
                                <h4>100% Payment Secure</h4>
                                <p>Cash on delivery and secured online payment.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/><br/>
    <script>
        document.getElementById("uploadBtn").onchange = function () {
            document.getElementById("uploadFile").value = this.value;
        };
        function Extend(divName){
            $('#see_more').show();
            $('#button_div').hide();
        }
        function Shrink(divName){
            $('#button_div').show();
            $('#see_more').hide();
        }
        var countDate = new Date("{{date('m d, Y', strtotime(!empty($offer->duration) ? $offer->duration : '2020-12-12'))}}").getTime();
        function newYear() {
            var now = new Date().getTime();
            gap = countDate - now;
            if(gap > 0){
                var second = 1000;
                var minute = second * 60;
                var hour = minute * 60;
                var day = hour * 24;

                var d = Math.floor(gap / day);
                var h = Math.floor((gap % day) / hour);
                var m = Math.floor((gap % hour) / minute);
                var s = Math.floor((gap % minute) / second);

                document.getElementById("day").innerText = d;
                document.getElementById("hour").innerText = h;
                document.getElementById("minute").innerText = m;
                document.getElementById("second").innerText = s;
            }
            else{
                document.getElementById("day").innerText = '0';
                document.getElementById("hour").innerText = '0';
                document.getElementById("minute").innerText = '0';
                document.getElementById("second").innerText = '0';
            }
        }
        setInterval(function () {
            newYear();
        }, 1000);
    </script>
    <script>
        // vars
        'use strict'
        var	testim = document.getElementById("testim"),
            testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
            testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
            testimLeftArrow = document.getElementById("left-arrow"),
            testimRightArrow = document.getElementById("right-arrow"),
            testimSpeed = 4500,
            currentSlide = 0,
            currentActive = 0,
            testimTimer,
            touchStartPos,
            touchEndPos,
            touchPosDiff,
            ignoreTouch = 30;
        ;

        window.onload = function() {

            // Testim Script
            function playSlide(slide) {
                for (var k = 0; k < testimDots.length; k++) {
                    testimContent[k].classList.remove("active");
                    testimContent[k].classList.remove("inactive");
                    testimDots[k].classList.remove("active");
                }

                if (slide < 0) {
                    slide = currentSlide = testimContent.length-1;
                }

                if (slide > testimContent.length - 1) {
                    slide = currentSlide = 0;
                }

                if (currentActive != currentSlide) {
                    testimContent[currentActive].classList.add("inactive");
                }
                testimContent[slide].classList.add("active");
                testimDots[slide].classList.add("active");

                currentActive = currentSlide;

                clearTimeout(testimTimer);
                testimTimer = setTimeout(function() {
                    playSlide(currentSlide += 1);
                }, testimSpeed)
            }

            testimLeftArrow.addEventListener("click", function() {
                playSlide(currentSlide -= 1);
            })

            testimRightArrow.addEventListener("click", function() {
                playSlide(currentSlide += 1);
            })

            for (var l = 0; l < testimDots.length; l++) {
                testimDots[l].addEventListener("click", function() {
                    playSlide(currentSlide = testimDots.indexOf(this));
                })
            }
            playSlide(currentSlide);
            // keyboard shortcuts
            document.addEventListener("keyup", function(e) {
                switch (e.keyCode) {
                    case 37:
                        testimLeftArrow.click();
                        break;

                    case 39:
                        testimRightArrow.click();
                        break;

                    case 39:
                        testimRightArrow.click();
                        break;

                    default:
                        break;
                }
            })
            testim.addEventListener("touchstart", function(e) {
                touchStartPos = e.changedTouches[0].clientX;
            })
            testim.addEventListener("touchend", function(e) {
                touchEndPos = e.changedTouches[0].clientX;
                touchPosDiff = touchStartPos - touchEndPos;
                console.log(touchPosDiff);
                console.log(touchStartPos);
                console.log(touchEndPos);
                if (touchPosDiff > 0 + ignoreTouch) {
                    testimLeftArrow.click();
                } else if (touchPosDiff < 0 - ignoreTouch) {
                    testimRightArrow.click();
                } else {
                    return;
                }

            })
        }
    </script>
@endsection
