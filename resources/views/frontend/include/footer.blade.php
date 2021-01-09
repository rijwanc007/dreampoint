<br/><br/><br/><br/>
@php
$j=0;
@endphp
<div id="footer">
    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="web_view">
                    <div class="quick-links">
                        <div class="col-md-1 col-sm-4 col-xs-4"></div>
                        <div class="col-md-2 col-sm-4 col-xs-4">
                            <ul >
                                <li><i class="fas fa-arrow-right" id="men_arrow"></i> <a href="{{route('frontend.men.cloth')}}">Men</a></li>
                                <li><i class="fas fa-arrow-right"></i> <a href="{{route('frontend.women.cloth')}}">Women</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4">
                            <ul class="middle_icon">
                                <li><i class="fas fa-arrow-right"></i> <a href="{{route('frontend.kids.cloth')}}">BABY & KIDS </a></li>
                                <li><i class="fas fa-arrow-right"></i> <a href="{{route('frontend.groceries')}}">Groceries</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4">
                            <ul>
                                <li><i class="fas fa-arrow-right"></i> <a href="{{route('frontend.accessories')}}">Accessories</a></li>
                                <li><i class="fas fa-arrow-right"></i> <a href="{{route('frontend.offer_zone')}}">Offer Zone</a></li>
                            </ul>
                        </div>
                        <div class="col-md-1 col-sm-4 col-xs-4"></div>
                    </div>
                </div>
                <div class="mobile_view">
                    <div class="quick-links">
{{--                        <div class="row">--}}
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <ul >
                                    <li><i class="fas fa-arrow-right"></i> <a href="{{route('frontend.men.cloth')}}">Men</a></li>
                                    <li><i class="fas fa-arrow-right"></i> <a href="{{route('frontend.women.cloth')}}">Women</a></li>
                                    <li><i class="fas fa-arrow-right"></i> <a href="{{route('frontend.kids.cloth')}}">Kids</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <ul >
                                    <li><i class="fas fa-arrow-right"></i> <a href="{{route('frontend.groceries')}}">Groceries</a></li>
                                    <li><i class="fas fa-arrow-right"></i> <a href="{{route('frontend.accessories')}}">Accessories</a></li>
                                    <li><i class="fas fa-arrow-right"></i> <a href="{{route('frontend.offer_zone')}}">Offer Zone</a></li>
                                </ul>
                            </div>
                    </div>
                </div>
                <div class="subscribe_box">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="subscribe text-right">
                            <div class="card">
                                <div class="card-body">
                                    <br/><div class="wid-title text-center">Subscribe for OFFERS & UPDATES</div><br/>
                                    <p class="text-center">
                                        Enter your email and we'll send you a coupon
                                        with 10% off your next order. Add any text here
                                    </p>
                                    {!! Form::open(['class' =>'form-sample','route' => 'subscriber.store','method' => 'POST']) !!}
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
                                        </div>
                                        <button type="submit" class="btn btn-default">Subscribe Now</button>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-md-4">
                    <div class="text-widget">
                        <div class="wid-title text-center">Welcome to</div>
                        <div class="text-center"><a href="{{url('/')}}"><img src="{{asset('assets/images/dpb_logo-2.png')}}" class="dp_logo" alt="ft-logo"></a></div>
                        <h5 id="footer_content" style="text-align: justify">Dream Point is an online store. It has everything you need to start buying today!Get your desired product at any time!Dream Point is an online store. It has everything you need to start buying today!Get your desired product at any time!Dream Point is an online store. It has everything you need to start buying today!Get your desired product at any time!Dream Point is an online store. It has everything you need to start buying today!Get your desired product at any time!</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-widget">
                        <div class="wid-title text-center">Hot Deals !!</div>
                        <div class="row text-center">
                            @forelse($hotdeals as $hotdeal)
                                <div class="col-md-4"><a href="{{route('frontend.offer_zone')}}"><img src="{{asset('assets/images/hotdeals/'.$hotdeal->image)}}" class="hotdeal" alt="hotdeal"></a></div>
                            @empty
                                <div class="col-md-3"></div>
                                <div class="col-md-6"><h6 class="text-center">No Hot Deals Available!!!</h6></div>
                            @endforelse
                        </div>
                        <br/><br/><br/>
                        <div class="text-center">
                            <a href="https://www.facebook.com/dreampointbd.xyz" target="_blank"><img src="{{asset('assets/images/icon/facebook.png')}}" class="social_icon"></a>
                            <a href="https://www.pinterest.com/dreampointbd/_created/" target="_blank"><img src="{{asset('assets/images/icon/pinterest.png')}}" class="social_icon"></a>
                            <a href="https://www.youtube.com/channel/UC-qxB2hi09-Af5luvd5v4vg" target="_blank"><img src="{{asset('assets/images/icon/youtube.png')}}" class="social_icon"></a>
                            <a href="https://www.linkedin.com/company/dreampointbd" target="_blank"><img src="{{asset('assets/images/icon/linkedin.png')}}" class="social_icon"></a>
                            <a href="https://www.instagram.com/dreampointbd/" target="_blank"><img src="{{asset('assets/images/icon/instagram.png')}}" class="social_icon"></a>
                            <a href="https://twitter.com/DreamPointBang1" target="_blank"><img src="{{asset('assets/images/icon/twiter.png')}}" class="social_icon"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wid-title text-center">Pay With</div>
                    <img src="{{asset('assets/images/payment_method/pay-with.png')}}" width="100%">
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p><b>© Developed by <a href="http://setcolbd.com/" target="_blank" style="text-decoration: none;font-family: cursive;">:: Skies Engineering & Technologies Company Ltd. </a> All rights reserved.</b></p>
                </div>
            </div>
        </div>
    </div>
</div>
