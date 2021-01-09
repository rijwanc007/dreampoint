@extends('frontend.master')
@section('title', 'Dream Point | Offer Zone')
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
                        <li ><a href="{{route('frontend.men.cloth')}}">MEN </a></li>
                        <li ><a href="{{route('frontend.women.cloth')}}">WOMEN </a></li>
                        <li ><a href="{{route('frontend.kids.cloth')}}">BABY & KIDS </a></li>
                        <li ><a href="{{route('frontend.groceries')}}">GROCERIES </a></li>
                        <li ><a href="{{route('frontend.accessories')}}">ACCESSORIES </a></li>
                        <li ><a href="{{route('frontend.offer_zone')}}">OFFERS ZONE </a></li>
                        <li class="cat-img-off"><img src="{{asset('assets/images/offers.png')}}" alt="off"></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <br/><br/><br/>
    @if(!empty($latest_offer))
    <div class="row">
        <div class="col-md-6"><img src="{{asset('assets/images/offers/'.$latest_offer->image)}}" style="width: 100%"></div>
        <div class="col-md-6 text-center">
                <div class="row text-center">
                    <div class="col-md-3"></div>
                    <div class="col-md-6" id="offer_div">
                        <div class="countdown_offer">
                            <div id="day">0</div>
                            <div id="hour">0</div>
                            <div id="minute">0</div>
                            <div id="second">0</div>
                        </div>
                    </div>
                </div>
            <div class="offer_slider">
                <div class="container-fluid">
                    <div class="viewed">
                        <div class="row">
                            <div class="col">
                                <div class="bbb_viewed_slider_container">
                                    <div class="owl-carousel owl-theme bbb_viewed_slider">
                                        @foreach($products as $product)
                                            @if(!empty($latest_offer) && $product->offer == $latest_offer->id)
                                                <div class="owl-item">
                                                    <div class="product-fade">
                                                        <div class="product-fade-wrap">
                                                            <div id="product-image">
                                                                <div class="item"><img src="{{asset('assets/images/products/'.$product->category . '/'.$product->image)}}" alt="" class="img-responsive" style="width: 100%; height: 200px;"></div>
                                                            </div>
                                                            @if($latest_offer->duration > date('Y-m-d'))
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
                                                            @endif
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
    @endif

    <div class="web_view_offer">
        @foreach($offers as $offer)
            @if($f % 2 == 0)
                <br/>
                <div class="row">
                    <div class="col-md-6"><img src="{{asset('assets/images/offers/'.$offer->image)}}" style="width: 100%"></div>
                    <div class="col-md-6 text-center">
                        <div class="row text-center">
                            <div class="col-md-3"></div>
                            <div class="col-md-6" id="offer_div_2">
                                <div class="countdown_offer_2">
                                    <div class="days" id="day_{{$offer->id}}">0</div>
                                    <div class="hours" id="hour_{{$offer->id}}">0</div>
                                    <div class="minutes" id="minute_{{$offer->id}}">0</div>
                                    <div class="seconds" id="second_{{$offer->id}}">0</div>
                                </div>
                            </div>
                        </div>
                        <div class="offer_slider">
                            <div class="container-fluid">
                                <div class="viewed">
                                    <div class="row">
                                        <div class="col">
                                            <div class="bbb_viewed_slider_container">
                                                <div class="owl-carousel owl-theme bbb_viewed_slider">
                                                    @foreach($products as $product)
                                                        @if($product->offer == $offer->id)
                                                            <div class="owl-item">
                                                                <div class="product-fade">
                                                                    <div class="product-fade-wrap">
                                                                        <div id="product-image">
                                                                            <div class="item"><img src="{{asset('assets/images/products/'.$product->category . '/'.$product->image)}}" alt="" class="img-responsive" style="width: 100%; height: 200px;"></div>
                                                                        </div>
                                                                        @if($offer->duration > date('Y-m-d'))
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
                                                                        @endif
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
            @else
                <br/>
                <div class="row">
                    <div class="col-md-6 text-center">
                        <div class="row text-center">
                            <div class="col-md-3"></div>
                            <div class="col-md-6" id="offer_div_2">
                                <div class="countdown_offer_2">
                                    <div class="days" id="day_{{$offer->id}}">0</div>
                                    <div class="hours" id="hour_{{$offer->id}}">0</div>
                                    <div class="minutes" id="minute_{{$offer->id}}">0</div>
                                    <div class="seconds" id="second_{{$offer->id}}">0</div>
                                </div>
                            </div>
                        </div>
                        <div class="offer_slider">
                            <div class="container-fluid">
                                <div class="viewed">
                                    <div class="row">
                                        <div class="col">
                                            <div class="bbb_viewed_slider_container">
                                                <div class="owl-carousel owl-theme bbb_viewed_slider">
                                                    @foreach($products as $product)
                                                        @if($product->offer == $offer->id)
                                                            <div class="owl-item">
                                                                {{--                                                        <div class="bbb_viewed_item discount is_new d-flex flex-column align-items-center justify-content-center text-center">--}}
                                                                {{--                                                            <div class="bbb_viewed_image">--}}
                                                                {{--                                                                <img src="{{asset('assets/images/products/'.$product->category . '/'.$product->image)}}" alt="" style="width: 115px;height: 115px">--}}
                                                                {{--                                                            </div>--}}
                                                                {{--                                                            <div class="bbb_viewed_content text-center">--}}
                                                                {{--                                                                <div class="bbb_viewed_price">${{$product->new_price}}<span>{{$product->prev_price ? '$'.$product->prev_price : ''}}</span></div>--}}
                                                                {{--                                                                <div class="bbb_viewed_name"><a href="#">{{$product->title}}</a></div>--}}
                                                                {{--                                                            </div>--}}
                                                                {{--                                                            <ul class="item_marks">--}}
                                                                {{--                                                                <li class="item_mark item_discount">-{{$product->discount ? $product->discount : 0}}%</li>--}}
                                                                {{--                                                            </ul>--}}
                                                                {{--                                                        </div>--}}
                                                                <div class="product-fade">
                                                                    <div class="product-fade-wrap">
                                                                        <div id="product-image">
                                                                            <div class="item"><img src="{{asset('assets/images/products/'.$product->category . '/'.$product->image)}}" alt="" class="img-responsive" style="width: 100%; height: 200px;"></div>
                                                                        </div>
                                                                        @if($offer->duration > date('Y-m-d'))
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
                                                                        @endif
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
                    <div class="col-md-6"><img src="{{asset('assets/images/offers/'.$offer->image)}}" style="width: 100%"></div>
                </div>
            @endif
            <br/><br/><br/>
            @php
                $f++;
            @endphp
        @endforeach
    </div>
    <div class="mobile_view_offer">
        @foreach($offers as $offer)
            <div class="row">
                    <div class="col-md-6"><img src="{{asset('assets/images/offers/'.$offer->image)}}" style="width: 100%;"></div>
                    <div class="col-md-6 text-center">
                        <div class="row text-center">
                            <div class="col-md-3"></div>
                            <div class="col-md-6" id="offer_div_3">
                                <div class="countdown_offer_3">
                                    <div class="days_m" id="day_m_{{$offer->id}}">0</div>
                                    <div class="hours_m" id="hour_m_{{$offer->id}}">0</div>
                                    <div class="minutes_m" id="minute_m_{{$offer->id}}">0</div>
                                    <div class="seconds_m" id="second_m_{{$offer->id}}">0</div>
                                </div>
                            </div>
                        </div>
                        <div class="offer_slider">
                            <div class="container-fluid">
                                <div class="viewed">
                                    <div class="row">
                                        <div class="col">
                                            <div class="bbb_viewed_slider_container">
                                                <div class="owl-carousel owl-theme bbb_viewed_slider">
                                                    @foreach($products as $product)
                                                        @if($product->offer == $offer->id)
                                                            <div class="owl-item">
                                                                <div class="product-fade">
                                                                    <div class="product-fade-wrap">
                                                                        <div id="product-image">
                                                                            <div class="item"><img src="{{asset('assets/images/products/'.$product->category . '/'.$product->image)}}" alt="" class="img-responsive" style="width: 100%; height: 200px;"></div>
                                                                        </div>
                                                                        @if($offer->duration > date('Y-m-d'))
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
                                                                        @endif
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
        @endforeach
    </div>
    <br/>
    <div class="mobile_view_hot_deals">
        <div class="col-md-6"><img src="{{asset('assets/images/hot_deals.jpg')}}" style="width: 100%;margin-top: -40px;"> </div>
        <div class="col-md-6">
            <div class="offer_slider" style="margin-top: -40px;">
                <div class="container-fluid">
                    <div class="viewed">
                        <div class="row">
                            <div class="col">
                                <div class="bbb_viewed_slider_container">
                                    <div class="owl-carousel owl-theme bbb_viewed_slider">
                                        @foreach($hotdeals as $hotdeal)
                                            <div class="owl-item">
                                                <div class="bbb_viewed_item discount is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="bbb_viewed_image">
                                                        <img src="{{asset('assets/images/hotdeals/'.$hotdeal->image)}}" alt="" data-toggle="modal" data-target="#delete_modal_{{$hotdeal->id}}" class="hotdeal_image" title="View Hot Deal">
                                                    </div>
                                                </div>
                                            </div>
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
    <div class="web_view_hot_deals">
        @if($f % 2 == 0)
            <div class="row">
                <div class="col-md-6"><img src="{{asset('assets/images/hot_deals.jpg')}}" style="width: 100%"> </div>
                <div class="col-md-6">
                    <div class="offer_slider">
                        <div class="container-fluid">
                            <div class="viewed">
                                <div class="row">
                                    <div class="col">
                                        <div class="bbb_viewed_slider_container">
                                            <div class="owl-carousel owl-theme bbb_viewed_slider">
                                                @foreach($hotdeals as $hotdeal)
                                                    <div class="owl-item">
                                                        <div class="bbb_viewed_item discount is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                            <div class="bbb_viewed_image">
                                                                <img src="{{asset('assets/images/hotdeals/'.$hotdeal->image)}}" alt="" data-toggle="modal" data-target="#delete_modal_{{$hotdeal->id}}" class="hotdeal_image" title="View Hot Deal">
                                                            </div>
                                                        </div>
                                                    </div>
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
        @else
            <div class="row">
                <div class="col-md-6">
                    <div class="offer_slider">
                        <div class="container-fluid">
                            <div class="viewed">
                                <div class="row">
                                    <div class="col">
                                        <div class="bbb_viewed_slider_container">
                                            <div class="owl-carousel owl-theme bbb_viewed_slider">
                                                @foreach($hotdeals as $hotdeal)
                                                    <div class="owl-item">
                                                        <div class="bbb_viewed_item discount is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                            <div class="bbb_viewed_image">
                                                                <img src="{{asset('assets/images/hotdeals/'.$hotdeal->image)}}" alt="" data-toggle="modal" data-target="#delete_modal_{{$hotdeal->id}}" class="hotdeal_image" title="View Hot Deal">
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6"><img src="{{asset('assets/images/hot_deals.jpg')}}" style="width: 100%"> </div>
            </div>
        @endif
    </div>
    <br/><br/><br/>
    @foreach($hotdeals as $hotdeal)
    <div class="modal fade" id="delete_modal_{{$hotdeal->id}}" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center text-danger">Check the Hot Deal !!! </h4>
                </div>
                <div class="modal-body">
                    <img src="{{asset('assets/images/hotdeals/'.$hotdeal->image)}}" width="100%">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <script>
        var countDate = new Date("{{date('m d, Y', strtotime( !empty($latest_offer->duration) ? $latest_offer->duration : '2020-12-12'))}}").getTime();
        function newYear() {
            var now = new Date().getTime();
            gap = countDate - now;
            if(gap >= 0){
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
        @foreach($offers as $offer)
        setInterval(function () {
            var countDate1 = new Date("{{date('m d, Y', strtotime(!empty($offer->duration) ? $offer->duration : '2020-12-12'))}}").getTime();
            function newYear1() {
                var now1 = new Date().getTime();
                gap1 = countDate1 - now1;
                if(gap1 >= 0){
                    var second = 1000;
                    var minute = second * 60;
                    var hour = minute * 60;
                    var day = hour * 24;

                    var d1 = Math.floor(gap1 / day);
                    var h1 = Math.floor((gap1 % day) / hour);
                    var m1 = Math.floor((gap1 % hour) / minute);
                    var s1 = Math.floor((gap1 % minute) / second);

                    document.getElementById("day_{{$offer->id}}").innerText = d1;
                    document.getElementById("hour_{{$offer->id}}").innerText = h1;
                    document.getElementById("minute_{{$offer->id}}").innerText = m1;
                    document.getElementById("second_{{$offer->id}}").innerText = s1;
                }
                else{
                    document.getElementById("day_{{$offer->id}}").innerText = '0';
                    document.getElementById("hour_{{$offer->id}}").innerText = '0';
                    document.getElementById("minute_{{$offer->id}}").innerText = '0';
                    document.getElementById("second_{{$offer->id}}").innerText = '0';
                }
            }
            newYear1();
        }, 1000);
        @endforeach
    </script>
    <script>
        @foreach($offers as $offer)
        setInterval(function () {
            var countDate2 = new Date("{{date('m d, Y', strtotime(!empty($offer->duration) ? $offer->duration : '2020-12-12'))}}").getTime();
            function newYear2() {
                var now2 = new Date().getTime();
                gap2 = countDate2 - now2;
                if(gap2 >= 0){
                    var second_m = 1000;
                    var minute_m = second_m * 60;
                    var hour_m = minute_m * 60;
                    var day_m = hour_m * 24;

                    var dm1 = Math.floor(gap2 / day_m);
                    var hm1 = Math.floor((gap2 % day_m) / hour_m);
                    var mm1 = Math.floor((gap2 % hour_m) / minute_m);
                    var sm1 = Math.floor((gap2 % minute_m) / second_m);

                    document.getElementById("day_m_{{$offer->id}}").innerText = dm1;
                    document.getElementById("hour_m_{{$offer->id}}").innerText = hm1;
                    document.getElementById("minute_m_{{$offer->id}}").innerText = mm1;
                    document.getElementById("second_m_{{$offer->id}}").innerText = sm1;
                }
                else{
                    document.getElementById("day_m_{{$offer->id}}").innerText = '0';
                    document.getElementById("hour_m_{{$offer->id}}").innerText = '0';
                    document.getElementById("minute_m_{{$offer->id}}").innerText = '0';
                    document.getElementById("second_m_{{$offer->id}}").innerText = '0';
                }
            }
            newYear2();
        }, 1000);
        @endforeach
    </script>
@endsection
