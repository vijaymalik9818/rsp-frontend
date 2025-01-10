<head>

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>
<style>
    .signup-form h1 {
        color: #c43029;
        text-align: center;
        margin: 0;
        font-size: 20px;
        margin-bottom: 20px;
    }

    .error {
        color: red;
    }

    #role{
        color: #000;
        border-color: black;
    }


    .signup-form .login {
        background-repeat: no-repeat;
        background-size: cover;
        filter: blur(5px);
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
    }

    .signup-form .login img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .signup-form form {
        background-color: rgba(255, 255, 255, 1);
        padding: 20px;
        border-radius: 12px;
        z-index: 9999;

    }
 
    .select-box{
        padding: 0 10px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    height: 45px;
    border-radius: 5px;
    color: #fff;
    border: 1px solid #dadada;
    margin-bottom: 15px;
    background:#ffffffcf;
    color: #000;

    }
.select-box select{
    width: 100%;
    background:transparent;
    border: none;
    color: #000;
    outline:none
}

    .signup-form form input,select {
        width: 100%;
        padding: 12px;
        border: 1px solid black;
        border-radius: 8px;
        margin-bottom: 15px;
        font-size: 16px;
    }
    select {
    background-color: #ffffffcf;
    word-wrap: normal;
}
    .signup-form form input:focus,select:focus {
        outline: none;
        border-color: #c43029;
        transition: 0.3s;
    }

    .signup-form form label {
        position: relative;
        height: 100%;
        display: block;
    }

    .signup-form form input[type="submit"] {
        border: none;
        background-color: #c43029;
        color: #fff;
    }

    .toast-success {
        background-color: #28a745 !important;
        color: white !important;
    }

    .toast-error {
        background-color: #ff6347 !important;
        color: white !important;
    }

    .signup-form form label span {
        font-size: 10px;
        position: absolute;
        top: -7px;
        left: 20px;
        transition: 0.3s;
        background-color: #fff;
        padding: 2px;
    }

    .signup-form label>input:focus+span {
        color: #c43029;
        font-size: 12px;
        transition: 0.3s;
        top: -10px;
    }

    .signup-form .termofuse {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        margin-bottom: 15px;
    }

    .signup-form .termofuse input[type="checkbox"] {
        width: 15px;
        height: 15px;
        margin: 0;
    }

    .signup-form .termofuse a {
        color: #c43029;
        text-decoration: none;
    }

    .signup-form .submit {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        color: #fff;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: 0.5s;
        letter-spacing: 4px;
        background-color: #c43029;
        width: 100%;
        text-align: center;
        box-shadow: 0px 0px 0px 5px #c43029;
    }

    .signup-form .submit span {
        position: absolute;
        display: block;
    }

    .signup-form .submit span:nth-child(1) {
        top: 0;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, #fff);
        animation: btn-anim1 1s linear infinite;
    }

    @keyframes btn-anim1 {
        0% {
            left: -100%;
        }

        50%,
        100% {
            left: 100%;
        }
    }

    .signup-form .submit span:nth-child(2) {
        top: -100%;
        right: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(180deg, transparent, #fff);
        animation: btn-anim2 1s linear infinite;
        animation-delay: 0.25s;
    }

    @keyframes btn-anim2 {
        0% {
            top: -100%;
        }

        50%,
        100% {
            top: 100%;
        }
    }

    .signup-form .submit span:nth-child(3) {
        bottom: 0;
        right: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(270deg, transparent, #fff);
        animation: btn-anim3 1s linear infinite;
        animation-delay: 0.5s;
    }

    @keyframes btn-anim3 {
        0% {
            right: -100%;
        }

        50%,
        100% {
            right: 100%;
        }
    }

    .signup-form .submit span:nth-child(4) {
        bottom: -100%;
        left: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(360deg, transparent, #fff);
        animation: btn-anim4 1s linear infinite;
        animation-delay: 0.75s;
    }

    @keyframes btn-anim4 {
        0% {
            bottom: -100%;
        }

        50%,
        100% {
            bottom: 100%;
        }
    }

    .sign-inn-box {
        text-align: start;
        border-radius: 5px;
        border: crimson;
        padding: 18px;
        border: 1px solid #787878;
        width: 79%;
        margin: 20px;

    }

    .sign-inn-box h6 {
        font-size: 16px !important;
    }

    label {
        display: inline-block;
        margin-bottom: .5rem;
    }

    .sign-inn-box input {
        padding: 0 10px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        height: 45px;
        border-radius: 5px;
        border: 1px solid #dadada;
        margin-bottom: 15px;
        background:#ffffffcf;
        color: #000;

    }

    .check {
        width: 20px !important;
        height: 20px !important;
        margin: 0px !important;
        padding: 0px !important;
    }

    .checkbox {
        display: flex;
        gap:10px;
    }

    .modal-backdrop {
        display: block !important;
    }

    .select-box{
        padding: 0 10px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    height: 45px;
    border-radius: 5px;
    color: #fff;
    border: 1px solid #dadada;
    margin-bottom: 15px;
    background:#ffffffcf;
    color: #000;

    }

.select-box select{
    width: 100%;
    background:transparent;
    border: none;
    color: #000;
    outline:none
}


.menu-icon {
  display: flex;
  flex-direction: column;
  font-size:22px;
  cursor: pointer;
}

.bar {
  width: 25px;
  height: 2px;
  background-color: black;
  margin: 3px 0;
}

.submenu {
  display: none;
}

.submenu.active {
  display: block;
}

    .menus.show{
        display: block;
    }


    .menus {
  display: none;
     left: -2px !important;
     min-width: 7.4rem !important;
}
    .menus.show{
        display: block;
    }


    .menus {
  display: none;
     left: -2px !important;
     min-width: 7.4rem !important;
}

</style>
<!-- Include Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<!--  -->
<!-- Modal -->


<div class="signup-modal sign-up-popup" id="signinContent">
    <div class="modal" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" id="main-popup">
                <div class="modal-header">
                    <h5 class="modal-title border-0" id="exampleModalToggleLabel">
                        Sign In
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <h2>Welcome to the Real Estate Professionals Inc. Client Portal</h2>
                    <h6>We are one of Alberta's largest INDEPENDENTLY OWNED real estate brokerages</h6>
                    <p>Choose an option to sign in or create your REP account.</p>

                    <a class="btn btn-primary sign-in-btn" onclick="openGoogleLoginPopup()">
                        <img src="/images/google-plus-icon.svg" alt="">
                        Sign in with Google
                    </a>

                    <a class="btn btn-primary sign-in-btn" onclick="openfacebookLoginPopup()">
                        <img src="https://1000logos.net/wp-content/uploads/2017/02/Facebook-Logosu.png" alt="">
                        Sign in with Facebook
                    </a>
                    <div class='text-white'>or</div>
                    <button class='sign-in-btn-email' onclick="showEmailSignIn()">
                        <i class="fa-solid fa-envelope"></i>
                        Sign in with your email
                    </button>
                    <!-- <p>Are you a REALTOR&#174;? <a href="/backtologin"> Sign In</a></p> -->
                    <p>By creating an account you agree to the Real Estate Professionals Inc. <a
                            href="{{ route('terms') }}" target="_blank"> Terms of Use</a> and <a
                            href="{{ route('privacy') }}" target="_blank">Privacy
                            Policy</a></p>
                </div>
            </div>
            <div class="modal-content" id="sign-in" style="display: none">
                <div class="modal-header">
                    <h5 class="modal-title border-0" id="exampleModalToggleLabel">
                        Sign In
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2>Welcome to the Real Estate Professionals Inc. Client Portal</h2>
                    <h6>We are one of Alberta's largest INDEPENDENTLY OWNED real estate brokerages.</h6>
                    <p>Choose an option to sign in or create your REP account.</p>

                    <div class='sign-inn-box'>
                        <form id="login-form" novalidate="novalidate">
                            <h6>Email</h6>
                            <input type="email" id="emails" name="email">

                            <h6>Password</h6>
                            <input type="password" id="passwords" name="password">
                            <p><a onclick="showforgotpass()" style="cursor: pointer;">Forgot your password?</a></p>
                            <button class='ud-btn btn-primary' name="submit" id="submit">Sign In</button>
                        </form>
                    </div>
                    <p><a onclick="showemailsignup()" style="cursor: pointer;">Create an
                            account</a></p>
                    <p><a onclick="showmainpopup()" style="cursor: pointer;">Back</a></p>
                </div>
            </div>
            <div class="modal-content" id="forgot-pass" style="display: none">
                <div class="modal-header">
                    <h5 class="modal-title border-0" id="exampleModalToggleLabel">
                        Forgot Password
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2>Welcome to the Real Estate Professionals Inc. Client Portal</h2>
                    <h6>We are one of Alberta's largest INDEPENDENTLY OWNED real estate brokerages.</h6>
                    <p>Choose an option to sign in or create your REP account.</p>

                    <div class='sign-inn-box'>
                        <h2>Forgot Your Password?</h2>
                        <p>Enter your email address and we will send you instructions to reset your password.</p>
                        <form id="forgot-password" novalidate="novalidate">

                            <h6>Email</h6>
                            <input type="email" id="email-add" name="email" class="form-control" required>
                            <div class="forgotbtn">
                                <button id="submitBtn" name="submitbtn" class='ud-btn btn-primary'>Continue</button>
                            </div>
                        </form>
                    </div>
                    <p><a onclick="showemailsignIn()" style="cursor: pointer;">Back to Sign in</a></p>
                </div>
            </div>
            <div class="modal-content" id="sign-up" style="display: none">
                <div class="modal-header">
                    <h5 class="modal-title border-0" id="exampleModalToggleLabel">
                        Sign Up
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2>Welcome to the Real Estate Professionals Inc. Client Portal</h2>
                    <h6>We are one of Alberta's largest INDEPENDENTLY OWNED real estate brokerages.</h6>
                    <p>Choose an option to sign in or create your REP account.</p>

                    <div class='sign-inn-box'>
                        <form id="signup-form" novalidate="novalidate">
                            <h6>Full Name</h6>
                            <input type="text" id="fullname" name="fullname">
                            <h6>Email</h6>
                            <input type="email" id="email" name="email">
                            <h6>I'm a</h6>
                            <div class='select-box cursor-pointer'>
                              <select name="role" id="role" class="select-boxes-filter cursor-pointer">
                                <option value="" selected>Select</option>
                                <option value="First time buyer">First time buyer</option>
                                <option value="Repeat buyer">Repeat buyer</option>
                                <option value="Seller">Seller</option>
                                <option value="Residential investor">Residential investor</option>
                                <option value="Commercial investor">Commercial investor</option>
                                <option value="Commercial buyer/leaser">Commercial buyer/leaser</option>
                                <option value="Land of development">Land of development</option>
                            </select>
                              </div>
                            <h6>Phone</h6>
                            <input type="text" id="phone" name="phone">
                            <h6>Password</h6>
                            <input type="password" id="password" name="password">
                            <h6>Confirm Password</h6>
                            <input type="password" id="confirmPassword" name="confirmPassword">
                            <div class="checkbox">
                                <input type="checkbox" class="check" name="acceptTerms" id="acceptTerms">
                                <p>I accept
                                    <a href="{{ route('terms') }}" target="_blank"> Terms
                                        of Use</a> and <a href="{{ route('privacy') }}" target="_blank">Privacy
                                        Policy</a>
                                </p>

                            </div>
                            <div class="signupbtn">
                                <button class='ud-btn btn-primary' id="submit-btn">Register</button>
                            </div>
                        </form>
                    </div>
                    <p><a onclick="showemailsignIn()" style="cursor: pointer;">Back to Sign in</a></p>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- Menu In Hiddn SideBar -->
<div class="rightside-hidden-bar">
    <div class="hsidebar-header">
        <div class="sidebar-close-icon">
            <span class="far fa-times"></span>
        </div>
        <h4 class="title">Welcome to Realton</h4>
    </div>
    <div class="hsidebar-content">
        <div class="hiddenbar_navbar_content">
            <div class="hiddenbar_navbar_menu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" role="button">Apartments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" role="button">Bungalow</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" role="button">Houses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" role="button">Loft</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" role="button">Office</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" role="button">Townhome</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" role="button">Villa</a>
                    </li>
                </ul>
            </div>
            <div class="hiddenbar_footer position-relative bdrt1">
                <div class="row pt45 pb30 pl30">
                    <div class="col-auto">
                        <div class="contact-info">
                            <p class="info-title dark-color">
                                Total Free Customer Care
                            </p>
                            <h6 class="info-phone dark-color">
                                <a href="javascript:void(0)">+(0) 123 050 945 02</a>
                            </h6>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="contact-info">
                            <p class="info-title dark-color">Nee Live Support?</p>
                            <h6 class="info-mail dark-color">
                                <a href="mailto:hi@homez.com">hi@homez.com</a>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="row pt30 pb30 bdrt1">
                    <div class="col-auto">
                        <div class="social-style-sidebar d-flex align-items-center pl30">
                            <h6 class="me-4 mb-0">Follow us</h6>
                            <a class="me-3" href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                            <a class="me-3" href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                            <a class="me-3" href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                            <a class="me-3" href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Menu In Hiddn SideBar -->
<!-- Advance Feature Modal Start -->
<div class="advance-feature-modal">
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header pl30 pr30">
                    <h5 class="modal-title" id="exampleModalLabel">More Filter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="widget-wrapper">
                                <h6 class="list-title">Price Range</h6>
                                <!-- Range Slider Mobile Version -->
                                <div class="range-slider-style modal-version">
                                    <div class="range-wrapper">
                                        <div class="mb30 mt35" id="slider"></div>
                                        <div class="d-flex align-items-center">
                                            <span id="slider-range-value1"></span><i
                                                class="fa-sharp fa-solid fa-minus mx-2 dark-color icon"></i>
                                            <span id="slider-range-value2"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="widget-wrapper">
                                <h6 class="list-title">Type</h6>
                                <div class="form-style2 input-group">
                                    <select class="selectpicker" data-live-search="true" data-width="100%">
                                        <option>Property</option>
                                        <option data-tokens="Apartments">Apartments</option>
                                        <option data-tokens="Bungalow">Bungalow</option>
                                        <option data-tokens="Houses">Houses</option>
                                        <option data-tokens="Loft">Loft</option>
                                        <option data-tokens="Office">Office</option>
                                        <option data-tokens="Townhome">Townhome</option>
                                        <option data-tokens="Villa">Villa</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="widget-wrapper">
                                <h6 class="list-title">Property ID</h6>
                                <div class="form-style2">
                                    <input type="text" class="form-control" placeholder="RT04949213" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="widget-wrapper">
                                <h6 class="list-title">Bedrooms</h6>
                                <div class="d-flex">
                                    <div class="selection">
                                        <input id="xany" name="xbeds" type="radio" checked />
                                        <label for="xany">any</label>
                                    </div>
                                    <div class="selection">
                                        <input id="xoneplus" name="xbeds" type="radio" />
                                        <label for="xoneplus">1+</label>
                                    </div>
                                    <div class="selection">
                                        <input id="xtwoplus" name="xbeds" type="radio" />
                                        <label for="xtwoplus">2+</label>
                                    </div>
                                    <div class="selection">
                                        <input id="xthreeplus" name="xbeds" type="radio" />
                                        <label for="xthreeplus">3+</label>
                                    </div>
                                    <div class="selection">
                                        <input id="xfourplus" name="xbeds" type="radio" />
                                        <label for="xfourplus">4+</label>
                                    </div>
                                    <div class="selection">
                                        <input id="xfiveplus" name="xbeds" type="radio" />
                                        <label for="xfiveplus">5+</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="widget-wrapper">
                                <h6 class="list-title">Bathrooms</h6>
                                <div class="d-flex">
                                    <div class="selection">
                                        <input id="yany" name="ybath" type="radio" checked />
                                        <label for="yany">any</label>
                                    </div>
                                    <div class="selection">
                                        <input id="yoneplus" name="ybath" type="radio" />
                                        <label for="yoneplus">1+</label>
                                    </div>
                                    <div class="selection">
                                        <input id="ytwoplus" name="ybath" type="radio" />
                                        <label for="ytwoplus">2+</label>
                                    </div>
                                    <div class="selection">
                                        <input id="ythreeplus" name="ybath" type="radio" />
                                        <label for="ythreeplus">3+</label>
                                    </div>
                                    <div class="selection">
                                        <input id="yfourplus" name="ybath" type="radio" />
                                        <label for="yfourplus">4+</label>
                                    </div>
                                    <div class="selection">
                                        <input id="yfiveplus" name="ybath" type="radio" />
                                        <label for="yfiveplus">5+</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="widget-wrapper">
                                <h6 class="list-title">Location</h6>
                                <div class="form-style2 input-group">
                                    <select class="selectpicker" data-live-search="true" data-width="100%">
                                        <option>All Cities</option>
                                        <option data-tokens="California">California</option>
                                        <option data-tokens="Chicago">Chicago</option>
                                        <option data-tokens="LosAngeles">Los Angeles</option>
                                        <option data-tokens="Manhattan">Manhattan</option>
                                        <option data-tokens="NewJersey">New Jersey</option>
                                        <option data-tokens="NewYork">New York</option>
                                        <option data-tokens="SanDiego">San Diego</option>
                                        <option data-tokens="SanFrancisco">
                                            San Francisco
                                        </option>
                                        <option data-tokens="Texas">Texas</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="widget-wrapper">
                                <h6 class="list-title">Square Feet</h6>
                                <div class="space-area">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="form-style1">
                                            <input type="text" class="form-control" placeholder="Min." />
                                        </div>
                                        <span class="dark-color">-</span>
                                        <div class="form-style1">
                                            <input type="text" class="form-control" placeholder="Max" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="widget-wrapper mb0">
                                <h6 class="list-title mb10">Amenities</h6>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="widget-wrapper mb20">
                                <div class="checkbox-style1">
                                    <label class="custom_checkbox">Attic
                                        <input type="checkbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="custom_checkbox">Basketball court
                                        <input type="checkbox" checked="checked" />
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="custom_checkbox">Air Conditioning
                                        <input type="checkbox" checked="checked" />
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="custom_checkbox">Lawn
                                        <input type="checkbox" checked="checked" />
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="widget-wrapper mb20">
                                <div class="checkbox-style1">
                                    <label class="custom_checkbox">TV Cable
                                        <input type="checkbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="custom_checkbox">Dryer
                                        <input type="checkbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="custom_checkbox">Outdoor Shower
                                        <input type="checkbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="custom_checkbox">Washer
                                        <input type="checkbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="widget-wrapper mb20">
                                <div class="checkbox-style1">
                                    <label class="custom_checkbox">Lake view
                                        <input type="checkbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="custom_checkbox">Wine cellar
                                        <input type="checkbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="custom_checkbox">Front yard
                                        <input type="checkbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="custom_checkbox">Refrigerator
                                        <input type="checkbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <a class="reset-button" href="javascript:void(0)"><span
                            class="flaticon-turn-back"></span><u>Reset all filters</u></a>
                    <div class="btn-area">
                        <button class="ud-btn btn-thm">
                            <span class="flaticon-search align-text-top pr10"></span>Search
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Advance Feature Modal End -->

<div class="hiddenbar-body-ovelay"></div>

<!-- Mobile Nav  -->
<div id="page" class="mobilie_header_nav stylehome1">
    <div class="mobile-menu">
        <div class="header innerpage-style">
            <div class="menu_and_widgets">
                <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
             
                    <a class="mobile_logo" href="/"><img src="/images/final-logo.png" style="width: 150px"
                            alt="" /></a>
                    <a href="javascript:void(0)"><span class="icon fz18 far fa-user-circle"></span></a>
                </div>
            </div>
        </div>
    </div>



    <!-- /.mobile-menu -->
    <nav  >
        <ul  class="submenu" id="submenu">

            <div class="dropdown2">
                <li><a href="{{ route('about') }}">About Us</a></li>
                <div class="dropdown-content">
                    <li><a href="{{ route('why-rep') }}"> Why REP</a></li>
                    <li><a href="{{ route('join-rep') }}"> Join REP</a></li>
                </div>
            </div>



            <li>
                <a href="{{ route('our-professionals') }}">Our Professionals
                </a>
            </li>
            <li><a href="{{ route('advance-filter') }}">Property Search </a></li>
            <li><a href="{{ route('home-evaluation') }}">Home Evalution </a></li>

            <li><a href="{{ route('contact') }}">Contact Us</a></li>
            <li>
                
      

            
            <div class="col-lg-5 px-0 ">
                    <div class="d-flex gap-3 align-items-center justify-content-start">
                        @if(auth()->check() || session()->has('username'))
                        <div class="dropdown2">
                            <button class="btn btn-custom dropdown-toggle h-100" type="button" id="dropdownMenuButton3"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                style="background-color: #10579f; color: white;  border-radius: 8px;">
                                @if(session()->has('user_image') && session('user_image') !== null)
                                <img src="{{ session('user_image') }}" class="rounded-circle me-1"
                                    style="width: 24px; height: 24px;" alt="User Image">
                                @else
                                <i class="fas fa-user-circle me-1" style="color: white;"></i>
                                @endif
                                {{ auth()->check() ? auth()->user()->name : session('username') }}
                            </button>


                            <div  class="dropdown-menu1 menus"  aria-labelledby="dropdownMenuButton3">

                                <a class="dropdown-item " href="/profiles">Profile</a>

                                <a class="dropdown-item" href="/destroy">Logout</a>


                            </div>
                        </div>
                        @else
                        <!-- <a class="ud-btn btn-primary" href="{{ route('account') }}">Client Portal</a> -->
                        <a class="ud-btn blue-btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button"
                            onclick="openmodal()">Client Portal</a>
                        @endif
                            
                            <a class='ud-btn blue-btn btn-primary' href="{{ route('join-rep')}}" id='red-btn'>
                                Join REP
                            </a>

                        <!-- 
                            <a class="ud-btn btn-outline-rep cursor-pointer" href="{{route('backtologin')}}">
                      
                                Realtor&#174; Login</a> -->
                        
                    </div>
                </div>


<!--<a class="ud-btn btn-white realtor  w-100 cursor-pointer" href="{{route('backtologin')}}">Realtor&#17; Login</a>-->
                
                </li>


            {{-- <li class="px-3 mobile-menu-btn">
                <a
                    href="page-dashboard-add-property__html"
                    class="ud-btn btn-thm text-white"
                >Submit Property<i class="fal fa-arrow-right-long"></i
                    ></a>
            </li> --}}
            <!-- Only for Mobile View -->
        </ul>
    </nav>
</div>

<!-- Mobile Nav  -->
<div id="page" class="mobilie_header_nav stylehome1">
    <div class="mobile-menu fixed-menu">
        <div class="header innerpage-style">
            <div class="menu_and_widgets">
                <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
                <div class="menu-icon" onclick="toggleMenu(event)">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
                    <a class="mobile_logo" href="/"><img src="/images/final-logo.png" style="width: 150px"
                            alt="" /></a>

                    <a href="javascript:void(0)">@auth <span class="icon fz18 far fa-user-circle"></span> @endauth
                    </a>

                </div>
            </div>
        </div>
    </div>
    <!-- /.mobile-menu -->
    <nav id="menu" class="">
        <ul>
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="javascript:void(0)"> Why REP</a></li>
            <li><a href="javascript:void(0)"> Join REP</a></li>

            <li>
                <a href="{{ route('our-professionals') }}">Our Professionals
                </a>
            </li>
            <li><a href="{{ route('advance-filter') }}">Property Search </a></li>
            <li><a href="{{ route('home-evaluation') }}">Home Evalution </a></li>

            <li><a href="{{ route('contact') }}">Contact Us</a></li>
            <li>
            <a class="ud-btn btn-primary w-100" data-bs-toggle="modal" href="#exampleModalToggle" role="button" onclick="openmodal()">Client Portal</a>


<!--<a class="ud-btn btn-white realtor  w-100 cursor-pointer" href="{{route('backtologin')}}"> Realtor&#17; Login</a>-->
                
             </li>


            {{-- <li class="px-3 mobile-menu-btn">
                <a
                    href="page-dashboard-add-property__html"
                    class="ud-btn btn-thm text-white"
                >Submit Property<i class="fal fa-arrow-right-long"></i
                    ></a>
            </li> --}}
            <!-- Only for Mobile View -->
        </ul>
    </nav>
</div>
<script src="https://apis.google.com/js/platform.js" async defer></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Include jQuery library -->
<!-- Include jQuery Validation plugin -->
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script>
<script>

document.addEventListener('DOMContentLoaded', function() {
    var dropdownButton = document.getElementById('dropdownMenuButton3');
    var dropdownMenu = document.querySelector('.dropdown-menu1');

    dropdownButton.addEventListener('click', function() {
        dropdownMenu.classList.toggle('show');
    });

    // Close dropdown menu when clicking outside of it
    document.addEventListener('click', function(event) {
        if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.remove('show');
        }
    });
});
    
    function toggleMenu(event) {
  event.stopPropagation();
  var menuIcon = document.querySelector('.menu-icon');
  var submenu = document.querySelector('.submenu');
  
  submenu.classList.toggle('active');
  
  if (submenu.classList.contains('active')) {
    menuIcon.innerHTML = "&#x2715;";
    document.addEventListener('click', closeSubmenuOnClickOutside);
  } else {
    menuIcon.innerHTML = "<div class='bar'></div><div class='bar'></div><div class='bar'></div>";
    document.removeEventListener('click', closeSubmenuOnClickOutside);
  }
}

function closeSubmenuOnClickOutside(event) {
  var menuIcon = document.querySelector('.menu-icon');
  var submenu = document.querySelector('.submenu');
  
  if (!menuIcon.contains(event.target) && !submenu.contains(event.target)) {
    submenu.classList.remove('active');
    menuIcon.innerHTML = "<div class='bar'></div><div class='bar'></div><div class='bar'></div>";
    document.removeEventListener('click', closeSubmenuOnClickOutside);
  }
}



    function openGoogleLoginPopup() {
        var width = 600;
        var height = 600;
        var left = (screen.width - width) / 2;
        var top = (screen.height - height) / 2;
        var options = 'width=' + width + ',height=' + height + ',top=' + top + ',left=' + left +
            ',toolbar=0,status=0,location=0,menubar=0,resizable=0,scrollbars=1';
        var popupWindow = window.open('{{ url('auth/google') }}', 'Google Login', options);
        if (window.focus) {
            popupWindow.focus();
        }
        return false;
    }

    function openfacebookLoginPopup() {
        var width = 600;
        var height = 600;
        var left = (screen.width - width) / 2;
        var top = (screen.height - height) / 2;
        var options = 'width=' + width + ',height=' + height + ',top=' + top + ',left=' + left +
            ',toolbar=0,status=0,location=0,menubar=0,resizable=0,scrollbars=1';
        var popupWindow = window.open('{{ url('auth/facebook') }}', 'Facebook Login', options);
        if (window.focus) {
            popupWindow.focus();
        }
        return false;
    }


    function showEmailSignIn() {
        $('#sign-in').css('display', 'block');
        $('#main-popup').css('display', 'none');
        $('#sign-in input').val('');
    }

    function showemailsignIn() {
        $('#sign-in').css('display', 'block');
        $('#forgot-pass').css('display', 'none');
        $('#sign-up').css('display', 'none');
        $('#sign-in input').val('');
    }

    function showemailsignup() {
        $('#sign-up').css('display', 'block');
        $('#sign-in').css('display', 'none');
        $('#sign-up input').val('');


    }

    function showmainpopup() {

        $('#main-popup').css('display', 'block');
        $('#sign-in').css('display', 'none');

    }


    function showforgotpass() {
        $('#email-add').val('');
        $('#forgot-pass').css('display', 'block');
        $('#sign-in').css('display', 'none');

    }

    function openmodal() {
    if (event.ctrlKey) {
        event.preventDefault();
    }
        $('#main-popup').css('display', 'block');
        $('#sign-up').css('display', 'none');
        $('#sign-in').css('display', 'none');
        $('#forgot-pass').css('display', 'none');
        $('#sign-up input').val('');
        $('#sign-in input').val('');
    }
    document.addEventListener("DOMContentLoaded", function() {

        var closeButton = document.querySelector('[data-bs-dismiss="modal"]');

        closeButton.addEventListener("click", function() {
            var forms = document.querySelectorAll('.modal-content form');

            forms.forEach(function(form) {
                var inputFields = form.querySelectorAll('input');

                inputFields.forEach(function(input) {
                    input.value = '';
                });
            });
        });
    });
    toastr.options = {
            'closeButton': true,
            'debug': false,
            'newestOnTop': false,
            'progressBar': false,
            'positionClass': 'toast-top-right',
            'preventDuplicates': false,
            'showDuration': '1000',
            'hideDuration': '1000',
            'timeOut': '5000',
            'extendedTimeOut': '1000',
            'showEasing': 'swing',
            'hideEasing': 'linear',
            'showMethod': 'fadeIn',
            'hideMethod': 'fadeOut',
        },
        $('.menubar').on('click', function() {
            $('#menu').toggle();
        })
    $(document).ready(function($) {
        $("#forgot-password").validate({
            rules: {
                email: {
                    required: true,
                    email: true,
                    remote: {
                        url: baseUrl + '/api/lead/check-email',
                        type: "post",
                        data: {
                            email: function() {
                                return $("#email-add").val();
                            }
                        },
                        dataFilter: function(response) {
                            var jsonResponse = JSON.parse(response);
                            return jsonResponse.exists;
                        }
                    }
                }
            },
            messages: {
                email: {
                    required: "Please enter your email address",
                    email: "Please enter a valid email address",
                    remote: "Email address does not exists"
                }

            },
            errorPlacement: function(error, element) {
                if (element.is(":radio")) {
                    error.appendTo(element.parents('.form-group'));
                } else {
                    error.insertAfter(element);
                }
            },
            submitHandler: function(form) {
                forgotpass();
            }

        });




        $("#login-form").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 6
                }
            },
            messages: {
                email: {
                    required: "Please enter your email address",
                    email: "Please enter a valid email address"

                },
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 6 characters long"
                }

            },
            errorPlacement: function(error, element) {
                if (element.is(":radio")) {
                    error.appendTo(element.parents('.form-group'));
                } else { // This is the default behavior 
                    error.insertAfter(element);
                }
            },
            submitHandler: function(form) {
                loginform();
            }

        });
    });
    var baseUrl = "{{ env('BACKEND_URL', 'http://admin.repincbeta.site') }}";
    $('#signup-form').validate({
    rules: {
        fullname: {
            required: true
        },
        email: {
            required: true,
            email: true,
            remote: {
                url: baseUrl + '/api/lead/check-email',
                type: "post",
                data: {
                    email: function() {
                        return $("#email").val();
                    }
                },
                dataFilter: function(response) {
                    var jsonResponse = JSON.parse(response);
                    return !jsonResponse.exists;
                }
            }
        },
        phone: {
            required: true
        },
        password: {
            required: true,
            minlength: 8,
            strongPassword: true
        },
        confirmPassword: {
            required: true,
            equalTo: '#password'
        },
        acceptTerms: {
            required: true
        },
        role: { 
            required: true
        }
    },
    messages: {
        fullname: {
            required: "Please enter your full name"
        },
        email: {
            required: "Please enter your email",
            email: "Please enter a valid email address",
            remote: "Email already exists"
        },
        phone: {
            required: "Please enter your phone number"
        },
        password: {
            required: "Please enter a password",
            minlength: "Your password must be at least 8 characters long",
            strongPassword: "Password should contain at least one lowercase letter, one uppercase letter, one number, and be at least 8 characters long"
        },
        confirmPassword: {
            required: "Please confirm your password",
            equalTo: "Passwords do not match"
        },
        role: { 
            required: "Please select your role"
        },
        acceptTerms: {
            required: "Please accept the Terms of Use and Privacy Policy"
        }
    },
    errorPlacement: function(error, element) {
        if (element.attr("name") == "acceptTerms") {
            error.insertAfter("#submit-btn").css("margin-left", "60px");
        } else {
            error.insertAfter(element);
        }
    },
    submitHandler: function(form) {
        submitForm();
    }
});

    $.validator.addMethod("strongPassword", function(value, element) {
            return this.optional(element) || /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[a-zA-Z\d@$!%*?&]{8,}$/.test(value);
        },
        "Password should contain at least one lowercase letter, one uppercase letter, one number, and be at least 8 characters long."
        );


    function loginform() {
        var email = document.getElementById('emails').value;
        var password = document.getElementById('passwords').value;

        const data = {
            email: email,
            password: password
        };

        const submitButton = document.getElementById('submit');
        submitButton.disabled = true;

        $.ajax({
            url: "{{ route('leads.login') }}",
            type: "POST",
            data: data,
            success: function(response) {
                toastr.success('Login Successful');
                sessionStorage.setItem('username', response.name);
                window.location.reload();
            },
            error: function(xhr, status, error) {
                toastr.error('The provided credentials are incorrect');
                console.error('Error:', error);
            },
            complete: function() {
                submitButton.disabled = false;
            }
        });
    }

    function forgotpass() {
        var email = $('#email-add').val();

        var formData = {
            email: email
        };

        var baseurl = "{{ env('BACKEND_URL') }}";
        const submitButton = document.getElementById('submitBtn');
        submitButton.disabled = true;
        $.ajax({
            type: 'POST',
            url: baseurl + '/api/agents/forgot-password',
            data: formData,
            dataType: 'json',
            success: function(response) {
                toastr.success('Email Send Successfully');
                $('#email-add').val('');
                submitButton.disabled = false;

            },
            error: function(xhr, status, error) {
                toastr.error('An error occurred while sending an email');
                submitButton.disabled = false;

                console.error(xhr.responseText);
            }
        });
    }


    function submitForm() {
    var fullnameElement = document.getElementById('fullname');
    var emailElement = document.getElementById('email');
    var phoneElement = document.getElementById('phone');
    var passwordElement = document.getElementById('password');
    var confirmPasswordElement = document.getElementById('confirmPassword');
    var acceptTermsElement = document.getElementById('acceptTerms');
    var roleElement = document.getElementById('role'); 

    var data = {
        fullname: fullnameElement.value,
        email: emailElement.value,
        phone: phoneElement.value,
        password: passwordElement.value,
        role: roleElement.value 
    };
console.log(data);
    const submitButton = document.getElementById('submit-btn');
    submitButton.disabled = true;

    $.ajax({
        url: "{{ route('leads.signup') }}",
        method: 'POST',
        data: data,
        success: function(response) {
            if (response.message === "Email already exists.") {
                toastr.error('Email already exists. Please use a different email.');
            } else {
                toastr.success('Account Created Successfully');
                var loginData = {
                    email: data.email,
                    password: data.password
                };

                $.ajax({
                    url: "{{ route('leads.login') }}",
                    type: "POST",
                    data: loginData,
                    success: function(response) {

                        sessionStorage.setItem('username', response.name);
                        window.location.reload();
                    },
                    error: function(xhr, status, error) {
                        toastr.error('Failed to log in after account creation');
                        console.error('Login Error:', error);
                    },
                    complete: function() {
                        submitButton.disabled = false;
                    }
                });
            }
        },
        error: function(xhr, status, error) {
            toastr.error('Failed to create an account');
            console.error('Error:', error);
            submitButton.disabled = false;
        }
    });
}

    function validateAlphabets(event) {
        const input = event.target;
        const regex = /^[a-zA-Z\s]*$/;
        const key = event.key;

        if (!regex.test(key) && key !== 'Backspace' || input.value.length >= 40) {
            event.preventDefault();
        }
    }

    ['fullname'].forEach(function(id) {
        document.getElementById(id).addEventListener("keypress", validateAlphabets);
    });

    ['phone'].forEach(fieldId => {
        document.getElementById(fieldId).addEventListener("input", function(event) {
            let phoneInput = event.target.value.replace(/\D/g, '').slice(0, 10);
            event.target.value = phoneInput.replace(/(\d{3})(\d{3})(\d{4})/, '($1) $2-$3');
        });
    });
</script>