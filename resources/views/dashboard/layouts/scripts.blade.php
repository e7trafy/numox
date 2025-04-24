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


<script>
    // show pages disabled inputs
    $('.show-page input').attr('disabled', true)
    $('.show-page textarea').attr('disabled', true)
    $('.show-page select').attr('disabled', true)
</script>


<!-- Stack for page-specific scripts -->
@stack('scripts')
