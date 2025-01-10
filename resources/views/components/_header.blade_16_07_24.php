<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
.menus{
    position: relative;
  z-index: 10;
}
@media (max-width:1065px) and (min-width:1023px) {
    .list-item{
        font-size:14px;
    }
}


.dropdown{
    height: 48px !important;
}
</style>
<header class="header-nav nav-homepage-style at-home3 main-menu not-fix">
  
    <!-- Ace Responsive Menu -->
    <nav class="posr">
        <div class="container-xxl container-fluid posr menu_bdrt1 ">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-9 flex-grow-1">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="logos mr40 mr10-lg">
                            <a class="header-logo logo2" href="{{ route('home') }}"><img
                                    src="{{ asset('images/logo.svg') }}" alt="Header Logo" /></a>
                            <a class="header-logo logo1" href="{{ route('home') }}"><img
                                    src="{{ asset('images/final-logo.png') }}" alt="Header Logo" /></a>
                        </div>
                        <!-- Responsive Menu Structure-->
                        <ul id="respMenu" class="ace-responsive-menu d-flex justify-content-center"
                            data-menu-style="horizontal">
                            <!-- <li class="megamenu_style">
                            <a class="list-item" href="page-about.html"
                              ><span class="title">Communities</span></a
                            >
                          </li> -->
                            <li class="visible_list">
                                <a class="list-item" href="{{ route('about') }}"><span class="title">About Us</span>
                                </a>
                                <ul class="sub-menu" style="display: none">
                                    <li><a href="{{ route('why-rep') }}">Why REP</a></li>
                                    <li><a href="{{ route('join-rep') }}">Join REP</a></li>
                                </ul>
                            </li>
                            <li class="visible_list">
                                <a class="list-item" href="{{ route('our-professionals') }}"><span class="title">Our
                                        Professionals</span></a>
                            </li>
                            <li class="visible_list">
                                <a class="list-item" href="{{ route('advance-filter') }}"><span class="title">Property
                                        Search</span></a>
                            </li>
                            <li class="visible_list">
                                <a class="list-item" href="{{ route('home-evaluation') }}"><span class="title">Home
                                        Evaluation</span></a>
                            </li>
                            <li class="visible_list">
                                <a href="{{ route('contact') }}" class="list-item">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="d-flex gap-3 align-items-center justify-content-end">
                        @if(auth()->check() || session()->has('username'))
                        <div class="dropdown">
                            <button class="btn btn-custom dropdown-toggle h-100" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #10579f; color: white; border-radius: 8px;">
                                @if(session()->has('user_image') && session('user_image') !== null)
                                    <img src="{{ session('user_image') }}" class="rounded-circle me-1" style="width: 24px; height: 24px;" alt="User Image">
                                @else
                                    <i class="fas fa-user-circle me-1" style="color: white;"></i> 
                                @endif
                                {{ auth()->check() ? auth()->user()->name : session('username') }}
                            </button>
                            
                            
                            <div class="dropdown-menu menus" aria-labelledby="dropdownMenuButton">
                               
                                <a class="dropdown-item "  href="/profiles">Profile</a>
                 
                              <a class="dropdown-item" href="/destroy">Logout</a>

                            
                            </div>
                        </div>
                        @else
                            <!-- <a class="ud-btn btn-primary" href="{{ route('account') }}">Client Portal</a> -->
                            <a class="ud-btn blue-btns btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button" onclick="openmodal()">Client Portal</a>
                        @endif
                            <a class='ud-btn blue-btns btn-primary' href="{{ route('join-rep')}}">
                                Join REP
                            </a>




                            <!--<a class="ud-btn btn-outline-rep cursor-pointer" href="{{route('backtologin')}}">-->
                                <!-- <i class="far fa-user-circle fz16 me-2"></i> -->
                            <!--    Realtor&#174; Login</a>-->
                        
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- JavaScript to toggle dropdown menu -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var dropdownButton = document.getElementById('dropdownMenuButton');
    var dropdownMenu = document.querySelector('.dropdown-menu');

    // Check if elements exist before adding event listeners
    if (dropdownButton && dropdownMenu) {
        dropdownButton.addEventListener('click', function() {
            dropdownMenu.classList.toggle('show');
        });

        document.addEventListener('click', function(event) {
            if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.remove('show');
            }
        });
    }
});


    
</script>
<script>
    var markerIconPath = "{{ asset('images/advanced-marker.png') }}";

    
</script>