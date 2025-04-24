```blade
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
      data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="utf-8"/>
    <title>تسجيل الدخول</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <link rel="shortcut icon" href="{{ dashboardPath() }}/images/favicon.ico">

    <script src="{{ dashboardPath() }}/js/layout.js"></script>
    <link href="{{ dashboardPath() }}/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="{{ dashboardPath() }}/css/icons.min.css" rel="stylesheet"/>
    <link href="{{ dashboardPath() }}/css/app.min.css" rel="stylesheet"/>
    <link href="{{ dashboardPath() }}/css/custom.min.css" rel="stylesheet"/>

    <!-- Toastr CSS - keep only one version -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>
</head>

<body>

@php
    $errors = $errors ?? session()->get('errors') ?? new \Illuminate\Support\ViewErrorBag;
@endphp

<div class="auth-page-wrapper pt-5">
    <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
        <div class="bg-overlay"></div>
        <div class="shape">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120">
                <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
            </svg>
        </div>
    </div>

    <div class="auth-page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mt-sm-5 mb-4 text-white-50">
                    <div>
                        <a href="#" class="d-inline-block auth-logo">
                            <img src="{{ dashboardPath() }}/images/logo-light.png"
                                 style="border-radius:20%; width:300px; height:100px" alt="">
                        </a>
                    </div>
                    <p class="mt-3 fs-15 fw-medium">نومو ايكس</p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mt-4">
                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary">اهلا بعودتك !</h5>
                                <p class="text-muted">قم بتسجيل الدخول و استمتع بالتجربه</p>
                            </div>

                            <div class="p-2 mt-4">
                                <form action="{{ route('admin.login') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">البريد الالكترونى</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                               value="{{ old('email') }}"
                                               placeholder="ادخل البريد الالكترونى">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="password-input">الباسورد</label>
                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                            <input type="password" class="form-control pe-5 password-input"
                                                   name="password" placeholder="ادخل كلمه المرور" id="password-input">
                                            <button
                                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                type="button" id="password-addon"><i
                                                    class="ri-eye-fill align-middle"></i></button>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <button class="btn btn-success w-100" type="submit">تسجيل الدخول</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container text-center">
            <p class="mb-0 text-muted">&copy;
                <script>document.write(new Date().getFullYear())</script>
                Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
            </p>
        </div>
    </footer>
</div>

<!-- Scripts -->
<script src="{{ dashboardPath() }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ dashboardPath() }}/libs/simplebar/simplebar.min.js"></script>
<script src="{{ dashboardPath() }}/libs/node-waves/waves.min.js"></script>
<script src="{{ dashboardPath() }}/libs/feather-icons/feather.min.js"></script>
<script src="{{ dashboardPath() }}/js/pages/plugins/lord-icon-2.1.0.js"></script>
<script src="{{ dashboardPath() }}/js/plugins.js"></script>
<script src="{{ dashboardPath() }}/libs/particles.js/particles.js"></script>
<script src="{{ dashboardPath() }}/js/pages/particles.app.js"></script>
<script src="{{ dashboardPath() }}/js/pages/password-addon.init.js"></script>

<!-- Toastr JS - keep only one version -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    // Configure toastr options
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-left",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut",
        "preventDuplicates": false
    };

    // Success messages
    @if (session('success'))
    toastr.success("{{ session('success') }}", 'نجاح');
    @endif

    // Error messages from session
    @if (session('error'))
    toastr.error("{{ session('error') }}", 'خطأ');
    @endif

    // Error messages from validation
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    toastr.error("{{ $error }}", 'خطأ في الإدخال');
    @endforeach
    @endif
</script>

</body>
</html>
```
