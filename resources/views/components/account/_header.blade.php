<header class="header-nav nav-innerpage-style menu-home4 dashboard_header main-menu">
    <!-- Ace Responsive Menu -->
    <nav class="posr">
        <div class="container-fluid pr30 pr15-xs pl30 posr menu_bdrt1">
            <div class="row align-items-center justify-content-between">
                <div class="col-6 col-lg-auto">
                    <div class="text-center text-lg-start d-flex align-items-center">
                        <div class="dashboard_header_logo position-relative me-2 me-xl-5">
                            <a href="javascript:void(0)" class="logo">
                                <img src="images/header-logo2.svg" alt="">
                            </a>
                        </div>
                        <div class="fz20 ms-2 ms-xl-5">
                            <a href="javascript:void(0)" class="dashboard_sidebar_toggle_icon text-thm1 vam">
                                <img src="images/dark-nav-icon.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-auto">
                    <div class="text-center text-lg-end header_right_widgets">
                        <ul class="mb0 d-flex justify-content-center justify-content-sm-end p-0">
                            <li class=" user_setting">
                                <div class="dropdown">
                                    <a class="btn" href="javascript:void(0)" data-bs-toggle="dropdown">
                                        <img src="images/resource/user.png" alt="user.png">
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="user_setting_content">
                                            <a class="dropdown-item" href="{{ route('profile') }}">
                                                <i class="flaticon-user mr10"></i>My Profile </a>
                                            <a class="dropdown-item" href="{{ route('logout') }}">
                                                <i class="flaticon-exit mr10"></i>Logout </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
