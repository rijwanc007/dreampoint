<script src="{{asset('backend/assets/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('backend/assets/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('backend/assets/js/off-canvas.js')}}"></script>
<script src="{{asset('backend/assets/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('backend/assets/js/misc.js')}}"></script>
<script src="{{asset('backend/assets/js/dashboard.js')}}"></script>
<script src="{{asset('backend/assets/js/todolist.js')}}"></script>
<script src="{{asset('backend/assets/js/toastr.min.js')}}"></script>
<script>
    toastr.options = {"debug": false, "positionClass": "toast-top-right", "onclick": null, "fadeIn": 300, "fadeOut": 1000, "timeOut": 5000, "extendedTimeOut": 1000};
    @if(Session::has('success'))toastr.success("{{Session::get('success')}}");@endif
    @if(Session::has('error'))toastr.error("{{Session::get('error')}}");@endif
</script>
