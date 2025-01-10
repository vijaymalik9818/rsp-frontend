<!DOCTYPE html>
<html dir="ltr" lang="en">
@include('components._head')
<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-58SPTMWT"
        height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <div class="loading">Loading&#8230;</div>
    <div class="wrapper ovh">
        <!-- <div class="preloader"></div> -->

        <!-- Main Header Nav -->
        @include('components._header')

        @include('components._additional')

        <div class="body_content">
            @yield('content')
            @include('components._footer')
        </div>
    </div>
    @include('components._scripts')
</body>
</html>
