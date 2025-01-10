<!DOCTYPE html>
<html dir="ltr" lang="en">
<!-- Mirrored from creativelayers.net/themes/homez-html/page-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Aug 2023 07:08:43 GMT -->
@include(' components.account._head')
<body>
<div class="wrapper">
    <div class="preloader"></div>
    <!-- Main Header Nav -->
    @include(' components.account._header')
    <!-- Mobile Nav  -->

    <div class="dashboard_content_wrapper">
        <div class="dashboard dashboard_wrapper pr30 pr0-xl">
            @include(' components.account._sidebar')
            <div class="dashboard__main pl0-md">
                @yield('content')
                <footer class="dashboard_footer pt30 pb10">
                    <div class="container">
                        <div class="row items-center justify-content-center justify-content-md-between">
                            <div class="col-auto">
                                <div class="copyright-widget">
                                    <p class="text">© REP - All rights reserved</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="footer_bottom_right_widgets text-center text-lg-end">
                                    <p>
                                        <a href="javascript:void(0)">Privacy</a> · <a href="javascript:void(0)">Terms</a> .
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <a class="scrollToHome" href="javascript:void(0)">
        <i class="fas fa-angle-up"></i>
    </a>
</div>
<!-- Wrapper End -->
<script src="js/jquery-3.6.4.min.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/jquery.mmenu.all.js"></script>
<script src="js/ace-responsive-menu.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/chart-custome.js"></script>
<script src="js/jquery-scrolltofixed-min.js"></script>
<script src="js/dashboard-script.js"></script>
<!-- Custom script for all pages -->
<script src="js/script.js"></script>
</body>
<!-- Mirrored from creativelayers.net/themes/homez-html/page-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Aug 2023 07:08:44 GMT -->
</html>
