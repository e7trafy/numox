<head>
    <meta charset="utf-8"/>
    <title>@yield('title', 'Default Title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="Themesbrand" name="author"/>

    <meta name="csrf-token" content="{{ csrf_token() }}"/>


    <!-- App favicon -->
    <link rel="shortcut icon" href="{{dashboardPath()}}/images/favicon.ico">

    <!-- Core CSS (loaded for all pages) -->
    <script src="{{ dashboardPath()}}/js/layout.js"></script>
    <link href="{{ dashboardPath()}}/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{ dashboardPath()}}/css/icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{ dashboardPath()}}/css/app-rtl.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{ dashboardPath()}}/css/custom-rtl.min.css" rel="stylesheet" type="text/css"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

    <style>
        .hover-text-container {
            position: relative;
            display: inline-block;
        }

        .hover-text {
            position: absolute;
            visibility: hidden;
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 3px 8px;
            border-radius: 4px;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            transform: translateX(-50%);
            font-size: 12px;
            white-space: nowrap;
        }

        .hover-text-container:hover .hover-text {
            visibility: visible;
        }
    </style>

    <!-- Stack for page-specific head elements -->
    @stack('head')
</head>
