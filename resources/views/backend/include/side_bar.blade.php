<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{asset('backend/assets/images/faces-clipart/pic-1.png')}}" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">{{Auth::user()->name}}</span>
                    <span class="text-secondary text-small">Admin</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-user" aria-expanded="false" aria-controls="ui-user">
                <span class="menu-title">User</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-account"></i>
            </a>
            <div class="collapse" id="ui-user">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('user.create')}}">Create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('user.index')}}">Index</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-category" aria-expanded="false" aria-controls="ui-category">
                <span class="menu-title">Category</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-arrow-bottom-left"></i>
            </a>
            <div class="collapse" id="ui-category">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('category.create')}}">Create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('category.index')}}">Index</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-product" aria-expanded="false" aria-controls="ui-product">
                <span class="menu-title">Products</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-file"></i>
            </a>
            <div class="collapse" id="ui-product">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('product.create')}}">Create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('product.index')}}">Index</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-review" aria-expanded="false" aria-controls="ui-review">
                <span class="menu-title">Reviews</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-pencil"></i>
            </a>
            <div class="collapse" id="ui-review">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('review.index')}}">Index</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-offer" aria-expanded="false" aria-controls="ui-offer">
                <span class="menu-title">Offer</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-lightbulb-on"></i>
            </a>
            <div class="collapse" id="ui-offer">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('offer.create')}}">Create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('offer.index')}}">Index</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-hotdeal" aria-expanded="false" aria-controls="ui-hotdeal">
                <span class="menu-title">Hot Deals</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-fire"></i>
            </a>
            <div class="collapse" id="ui-hotdeal">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('hotdeal.create')}}">Create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('hotdeal.index')}}">Index</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-navoffer" aria-expanded="false" aria-controls="ui-navoffer">
                <span class="menu-title">Nav Offer</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-lightbulb-on-outline"></i>
            </a>
            <div class="collapse" id="ui-navoffer">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('navoffer.create')}}">Create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('navoffer.index')}}">Index</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-wishlist" aria-expanded="false" aria-controls="ui-wishlist">
                <span class="menu-title">Wish List</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-heart"></i>
            </a>
            <div class="collapse" id="ui-wishlist">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('wishlist.index')}}">Index</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-subscriber" aria-expanded="false" aria-controls="ui-subscriber">
                <span class="menu-title">Subscriber</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-thumb-up"></i>
            </a>
            <div class="collapse" id="ui-subscriber">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('subscriber.index')}}">Index</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
