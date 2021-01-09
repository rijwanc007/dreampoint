<!DOCTYPE html>
<html lang="en">
    @include('frontend.include.head_link')
<body>
<div id="wrapper" class="homepage-1">
    @include('frontend.include.header')
    <div id="content">@yield('content')</div>
    @include('frontend.include.footer')
</div>
@include('frontend.include.js')
</body>
</html>
