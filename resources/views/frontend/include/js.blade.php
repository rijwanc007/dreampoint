<script src="{{asset('assets/js/library.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.raty.js')}}"></script>
<script src="{{asset('assets/js/ui.js')}}"></script>
<script src="{{asset('assets/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('assets/js/jquery.selectbox-0.2.js')}}"></script>
<script src="{{asset('assets/js/theme-script.js')}}"></script>
{{--<script src="{{asset('assets/js/customer_review.js')}}"></script>--}}
<script src="{{asset('assets/js/owl.carausel.min.js')}}"></script>
<script src="{{asset('assets/js/kit.fontawesome.js')}}"></script>
<script src="{{asset('assets/js/toastr.min.js')}}"></script>
<script src="{{asset('assets/js/wishlist.js')}}"></script>
<script>
    toastr.options = {"debug": false, "positionClass": "toast-top-right", "onclick": null, "fadeIn": 300, "fadeOut": 1000, "timeOut": 5000, "extendedTimeOut": 1000};
    @if(Session::has('success'))toastr.success("{{Session::get('success')}}");@endif
    @if(Session::has('error'))toastr.error("{{Session::get('error')}}");@endif
    $(document).ready(function (){
        if($('.bbb_viewed_slider').length) {
            var viewedSlider = $('.bbb_viewed_slider');

            $('.bbb_viewed_slider').owlCarousel(
                {
                    items:6,
                    itemsDesktop:[1000,6],
                    itemsDesktopSmall:[990,4],
                    itemsTablet:[768,4],
                    itemsMobile:[767,2],
                    pagination:true,
                    navigation:false,
                    navigationText:["",""],
                    slideSpeed:1000,
                    autoPlay:true
                });
        }
    });
</script>
