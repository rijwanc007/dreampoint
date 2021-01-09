<div id="header">
    <div id="believe-nav">
        <div class="container">
            <div class="min-marg">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('assets/images/dpb_logo-2.png')}}" class="dp_logo" alt="ft-logo"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#" data-toggle="modal" data-target="#wishlist"><img src="{{asset('assets/images/icon/like.png')}}" alt="pav" class="wishlist"> <span>{{$wishlists->count()}}</span></a></li>
                            <div class="modal fade" id="wishlist" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title text-center">
                                                Your Wish List
                                                <hr/>
                                            </h4>
                                        </div>
                                        <div class="modal-body table-responsive">
                                                @forelse($wishlists as $wishlist)
                                                    <div class="row">
                                                        <div class="col-md-3 col-sm-3 col-xs-3"><img src="{{asset('assets/images/products/'.$wishlist->product->category . '/'.$wishlist->product->image)}}" class="cart_img_header" style="width: 50%; border-radius: 50px;"></div>
                                                        <div class="col-md-3 col-sm-3 col-xs-3" id="cart_title" style="margin-top: 20px">{{$wishlist->product->title}}</div>
                                                        <div class="col-md-3 col-sm-3 col-xs-3"><img src="{{asset('assets/images/icon/delete2.png')}}" id="remove" alt="bag" class="wihslist_modal_image remove" data-id="{{$wishlist->id}}" style="width: 50%;float: right; margin-top:10px;"  title="Remove"></div>
                                                        <div class="col-md-3 col-sm-3 col-xs-3"><img src="{{asset('assets/images/icon/favorite-cart.png')}}" alt="bag" class="wihslist_modal_image" style="width: 50%" title="Add To Cart"></div>
                                                    </div>
                                                    <br/>
                                                @empty
                                                    <div class="row text-center">
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-6">No product available in wishlist</div>
                                                    </div>
                                                @endforelse

                                        </div>
                                        <div class="modal-footer">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <li><a href="#"><img src="{{asset('assets/images/icon/favorite-cart.png')}}" alt="bag" class="wishlist"> <span>2</span></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).on('click','.remove',function(){
        let wid = $(this).data('id');
        $.ajax({
            url : '/remove/' + wid,
            method: 'GET',
            success: function (data){
                $('#header').load(location.href+' #header');
                toastr.success('your wishlist removed successfully');
            }
        })
    });
</script>
