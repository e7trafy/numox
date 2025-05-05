<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{route('admin.dashboard.homePage')}}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{dashboardPath()}}/images/logo-sm.png" alt="Numo" height="22">
                    </span>
            <span class="logo-lg">
                        <img src="{{dashboardPath()}}/images/logo-dark.png" alt="Numo" height="70">
                    </span>
        </a>
        <!-- Light Logo-->
        <a href="{{route('admin.dashboard.homePage')}}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{dashboardPath()}}/images/logo-sm.png" alt="Numo" height="70">
                    </span>
            <span class="logo-lg">
                        <img src="{{dashboardPath()}}/images/logo-light.png"
                             style="border-radius:20%;" alt="Numo" height="70">
                    </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>

                <!---------------- // homePage // ---------------->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('admin.dashboard.homePage')}}">
                        <i class="ri-honour-line"></i> <span data-key="t-widgets"> {{__('siteTrans.home')}} </span>
                    </a>
                </li>

                <!---------------- // Pages // ---------------->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span
                            data-key="t-dashboards">{{__('siteTrans.pages')}}</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('admin.pages.general')}}" class="nav-link" data-key="t-general">
                                    {{__('siteTrans.general')}} </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.pages.home')}}" class="nav-link" data-key="t-home">
                                    {{__('siteTrans.home')}} </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.pages.products')}}" class="nav-link" data-key="t-products">
                                    {{__('siteTrans.products')}} </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.pages.partners')}}" class="nav-link" data-key="t-partners">
                                    {{__('siteTrans.partners')}} </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.pages.aboutUs')}}" class="nav-link" data-key="t-aboutUs">
                                    {{__('siteTrans.aboutUs')}} </a>
                            </li>
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->

                <!---------------- // products // ---------------->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('admin.products.index')}}">
                        <i class="ri-honour-line"></i> <span
                            data-key="t-widgets"> {{__('siteTrans.products')}} </span>
                    </a>
                </li>

                <!---------------- // partners // ---------------->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('admin.partners.index')}}">
                        <i class="ri-honour-line"></i> <span
                            data-key="t-widgets"> {{__('siteTrans.partners')}} </span>
                    </a>
                </li>

                <!---------------- // clients // ---------------->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('admin.clients.index')}}">
                        <i class="ri-honour-line"></i> <span
                            data-key="t-widgets"> {{__('siteTrans.clients')}} </span>
                    </a>
                </li>

                <!---------------- // reviews // ---------------->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('admin.reviews.index')}}">
                        <i class="ri-honour-line"></i> <span
                            data-key="t-widgets"> {{__('siteTrans.reviews')}} </span>
                    </a>
                </li>

                <!---------------- // pricing // ---------------->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('admin.pricing.index')}}">
                        <i class="ri-honour-line"></i> <span
                            data-key="t-widgets"> {{__('siteTrans.pricing')}} </span>
                    </a>
                </li>

                <!---------------- // sources // ---------------->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('admin.sources.index')}}">
                        <i class="ri-honour-line"></i> <span
                            data-key="t-widgets"> {{__('siteTrans.sources')}} </span>
                    </a>
                </li>

                <!---------------- // settings // ---------------->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('admin.settings.index')}}">
                        <i class="ri-honour-line"></i> <span
                            data-key="t-widgets"> {{__('siteTrans.settings')}} </span>
                    </a>
                </li>

                <!---------------- // contactUs // ---------------->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('admin.contactUs.index')}}">
                        <i class="ri-honour-line"></i> <span
                            data-key="t-widgets"> {{__('siteTrans.contactUs')}} </span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
