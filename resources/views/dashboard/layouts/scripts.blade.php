<!-- Core Scripts (place before closing </body>) -->
<script src="{{dashboardPath()}}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{dashboardPath()}}/libs/simplebar/simplebar.min.js"></script>
<script src="{{dashboardPath()}}/libs/node-waves/waves.min.js"></script>
<script src="{{dashboardPath()}}/libs/feather-icons/feather.min.js"></script>
<script src="{{dashboardPath()}}/js/pages/plugins/lord-icon-2.1.0.js"></script>
<script src="{{dashboardPath()}}/js/plugins.js"></script>

<!-- jQuery (core dependency) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>

<!-- App js -->
<script src="{{dashboardPath()}}/js/app.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js">
</script>

<!------ toaster ------>
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
      integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
      crossorigin="anonymous" referrerpolicy="no-referrer"/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    // show pages disabled inputs
    $('.show-page input').attr('disabled', true)
    $('.show-page textarea').attr('disabled', true)
    $('.show-page select').attr('disabled', true)


    @if (session('success'))
    toastr.success("{{session('success')}}");
    @endif

    @if (session('error'))
    toastr.error("{{session('error')}}");
    @endif

    @if(session('danger'))
    toastr.error(" {{ session('danger') }}")
    @endif

    @if(session('fail'))
    toastr.error(" {{ session('fail') }}")
    @endif

</script>
<!-- Stack for page-specific scripts -->
@stack('scripts')
