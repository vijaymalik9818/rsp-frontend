<div class="dashboard__sidebar d-none d-lg-block">
    <div class="dashboard_sidebar_list">
        <div class="sidebar_list_item">
            <a href="{{ route('account') }}" class="items-center -is-active">
                <i class="flaticon-discovery mr15"></i>Dashboard </a>
        </div>
        <div class="sidebar_list_item ">
            <a href="javascript:void(0)" class="items-center">
                <i class="flaticon-chat-1 mr15"></i>Message </a>
        </div>
        <p class="fz15 fw400 ff-heading mt30">MANAGE LISTINGS</p>
{{--        <div class="sidebar_list_item ">--}}
{{--            <a href="javascript:void(0)" class="items-center">--}}
{{--                <i class="flaticon-home mr15"></i>My Properties </a>--}}
{{--        </div>--}}
        <div class="sidebar_list_item ">
            <a href="{{ route('favorite') }}" class="items-center">
                <i class="flaticon-like mr15"></i>My Favorites </a>
        </div>
        <div class="sidebar_list_item ">
            <a href="javascript:void(0)" class="items-center">
                <i class="flaticon-search-2 mr15"></i>Saved Search </a>
        </div>
        <div class="sidebar_list_item ">
            <a href="javascript:void(0)" class="items-center">
                <i class="flaticon-review mr15"></i>Reviews </a>
        </div>
        <p class="fz15 fw400 ff-heading mt30">MANAGE ACCOUNT</p>
{{--        <div class="sidebar_list_item ">--}}
{{--            <a href="javascript:void(0)" class="items-center">--}}
{{--                <i class="flaticon-protection mr15"></i>My Package </a>--}}
{{--        </div>--}}
        <div class="sidebar_list_item ">
            <a href="{{ route('profile') }}" class="items-center">
                <i class="flaticon-user mr15"></i>My Profile </a>
        </div>
        <div class="sidebar_list_item ">
            <a href="{{ route('logout') }}" class="items-center">
                <i class="flaticon-logout mr15"></i>Logout </a>
        </div>
    </div>
</div>
