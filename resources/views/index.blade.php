@extends('layouts.master')
@section('content')
    <style>
       #loader {
            z-index: 999;
            background-color: #fff;
            border: 5px solid #f3f3f3;
            border-top: 5px solid var(--headings-secondary-color);
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
            position: absolute;
            top: 50%;
            left: 44%;
            transform: translate(-50%, -50%);
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        #switch-space {
            position: relative;
        }

        .blur {
            filter: blur(5px);
        }
    
        #suggestion-list {
            position: fixed;
            /* Position the suggestion list */
            z-index: 1000;
            /* Ensure it appears above other elements */
            max-height: 200px;
            /* Limit the height of the suggestion list */
            overflow-y: auto;
            /* Add scrollbar when needed */
            background-color: white;
            /* Set white background */
            width: 100%;
            /* Ensure the suggestion list takes up full width */
        }

        .suggestion {
            padding: 8px 12px;
            cursor: pointer;
        }

        .social-style1 {
            text-align: end !important;
        }

        .highlighted {
            background-color: #10579f;
            color: #fff;
        }

        .filled {
            display: inline-block;
            width: 30px;
            height: 35px;
            mask: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white"><path d="M12 21.35c-0.16 0-0.32-0.04-0.46-0.12l-1.54-0.77C5.54 15.46 2 12.41 2 8.5c0-2.54 2.46-4.5 5-4.5 1.35 0 2.62 0.66 3.5 1.79C11.38 4.66 12.65 4 14 4c2.54 0 5 1.96 5 4.5 0 3.91-3.54 6.96-8 12.23l-1.54 0.77C12.32 21.31 12.16 21.35 12 21.35z"/></svg>') no-repeat;
            -webkit-mask: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white"><path d="M12 21.35c-0.16 0-0.32-0.04-0.46-0.12l-1.54-0.77C5.54 15.46 2 12.41 2 8.5c0-2.54 2.46-4.5 5-4.5 1.35 0 2.62 0.66 3.5 1.79C11.38 4.66 12.65 4 14 4c2.54 0 5 1.96 5 4.5 0 3.91-3.54 6.96-8 12.23l-1.54 0.77C12.32 21.31 12.16 21.35 12 21.35z"/></svg>') no-repeat;
            mask-size: contain;
            -webkit-mask-size: contain;
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .white-background {
            background-color: white;
            /* Set the background color to white */
        }




        .category {
            font-weight: bold;
            background: #10579f;
            color: #fff;
            padding: 4px 12px;
        }

        .suggestion:hover {
            background-color: #007bff;
            /* Primary blue hover effect */
            color: white;
        }

        .contact {
            padding: 0;
            margin-top: 2rem;
            background: #fff;
        }

        #submenu {
            padding-top: 75px;
        }

        .list-thumb {
            max-height: 250px;
            overflow: hidden;
        }

        .list-thumb img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .listing-style5 .list-thumb {
            height: 280px !important;
        }

        .listing-style5 .list-content {
            height: 193px;
        }
        div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: #10579f;
            color: #fff;
            font-size: 1em;
        }
.pac-container {z-index: 99999999999 !important;}
        @media (max-width: 600px) {
            .profileImg {
                max-width: 100%;
                height: 245px;
            }

            .real-font {
                font-size: 24px;
            }

            .advance-search-field .box-search .icon {
                bottom: 6px;

                left: -2px;

            }

            .listing-style5 .list-content {
                height: 178px;
            }

            .advance-search-field .box-search input {
                padding-left: 22px;
            }



            .listing-sec .navi_pagi_top_right.owl-theme .owl-nav {
        right: -113px !important;
    }

            .listing-sec .navi_pagi_top_right.owl-theme .owl-dots {
        left: 36% !important;
    }

            #ui-id-1 {
                width: 85% !important;
            }
        }


        .white{
            color: #fff  !important;
        }
    </style>
    <!-- Home Banner Style V1 -->
    <section class="home-banner-style3 p0">
        <img src="/images/homebanner.jpg" alt="">
        <div class="home-style3">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 advance-style3 inner-banner-style3">
                        <div class="d-flex flex-column justify-content-center p-3">
                            <h2 class="hero-title animate-up-1 text-shadow text-white">
                                REAL ESTATE PROFESSIONALS <br />you can count on - Go With The Pros<span class='white'>&#x2122;</span> !
                            </h2>
                             <p class="text-white text-shadow fs-6 home-p">
                                Since 2002, we’ve made home buying and selling throughout Alberta <span class='fw-bold'> <br>SIMPLE, STRESS FREE and STRAIGHT FORWARD 
                                </span> for our clients.
                            </p>
                        </div>
                        <div class="advance-style3 mx-auto animate-up-2">
                            <ul class="nav nav-tabs p-0 m-0" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">
                                        Buy
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                        type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        Sell
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="advance-content-style3">
                                        <div class="row">
                                            <div class="col-md-7 col-lg-7">
                                                <div class="advance-search-field position-relative text-start">
                                                    <div class="box-search">
                                                        <span class="icon flaticon-home-1"></span>
                                                        <input class="form-control bgc-f7 bdrs12 autocomplete"
                                                            type="text" id="autocomplete" name="query"
                                                            placeholder="Search by address, neighborhood, city or postal code" />

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-lg-5">
                                                <div
                                                    class="d-flex gap-3 align-items-center justify-content-end justify-content-md-end mt-3 mt-md-0">
                                                    <a href="{{ route('advance-filter') }}" class="advance-search-btn">

                                                        <!-- <span class="flaticon-settings"></span> -->
                                                        Advanced
                                                    </a>
                                                    <a class="ud-btn btn-primary" href="/search" type="submit"
                                                        id="searchButton">Search
                                                        <!-- <span class="flaticon-search"></span> -->
                                                </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="at-home5">
                                        {!! Form::open(['route' => 'save.homeEvaluation', 'class' => 'form-search position-relative']) !!}
                                        <div class="row align-items-center">
                                            <div class="col-6 col-sm bdrr1 bdrrn">
                                                {!! Form::text('address', null, [
                                                    'class' => 'form-control bgc-f7 bdrs12 border-0 address-inputs',
                                                    'placeholder' => 'Enter your address',
                                                    'id' => 'address-input',
                                                    'required',
                                                ]) !!}
                                                <div id="suggestions"></div>
                                            </div>

                                            <div class="col-6 col-sm">
                                                {!! Form::text('email', null, [
                                                    'class' => 'form-control bgc-f7 bdrs12 border-0',
                                                    'placeholder' => 'Enter your email',
                                                    'id' => 'email-input',
                                                    'required',
                                                ]) !!}
                                            </div>

                                            <div class="submitBoxWidth">
                                                <div
                                                    class="d-flex align-items-center justify-content-end mt-2 mt-md-0 me-2">
                                                    <button class="ud-btn btn-thm" type="button" data-bs-toggle="modal"
                                                        data-bs-target="#staticBackdrop">Submit</button>
                                                </div>
                                            </div>
                                        </div>



                                        <!-- Modal -->


                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>

                            <div id="suggestion-list"></div> <!-- Container for suggestion list -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-center text-center">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Get a Listing Appointment</h1>
                    <button type="button" class="btn-close m-0  close-button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <div class="card p-3 mt-2">
                        <div class="card-body">
                              <form action="" class="form-style1" id="form-style1">
                                <div class="row row-gap-3">
                                    <div class="col-md-6">
                                        <label class="heading-color ff-heading fw600 mb10">First Name<span
                                                style="color: red">*</span></label>
                                        <input type="text" class="form-control" placeholder="First Name"
                                            id="firstname" required name="first_name" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="heading-color ff-heading fw600 mb10">Last Name<span
                                                style="color: red">*</span></label>
                                        <input type="text" class="form-control" placeholder="Last Name"
                                            id="lastname" required name="last_name" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="heading-color ff-heading fw600 mb10">Phone Number<span
                                                style="color: red">*</span></label>
                                        <input type="tel" class="form-control" placeholder="Phone"
                                            id="contactnumber" required name="phone" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="heading-color ff-heading fw600 mb10">Email Address<span
                                                style="color: red">*</span></label>
                                        <input type="email" class="form-control" placeholder="Email" required
                                            name="email" value="{{ $email ?? '' }}">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="heading-color ff-heading fw600 mb10">Property Address<span
                                                style="color: red">*</span></label>
                                        <!-- Check if $address is set -->
                                        @if (isset($address))
                                            <!-- If address is pre-filled, populate the input field -->
                                            <input type="text" class="form-control address-inputs" placeholder="Property Address"
                                                required name="property_address" value="{{ $address }}">
                                        @else
                                            <!-- If address is not pre-filled, load Google Places Autocomplete -->
                                            <input type="text" id="property_address" class="form-control address-inputs"
                                                placeholder="Property Address" required name="property_address">
                                        @endif
                                    </div>


                                    <div class="col-md-6">
                                        <label class="heading-color ff-heading fw600 mb10">Community Your Property Is
                                            Located In<span style="color: red">*</span></label>
                                        <input type="text" class="form-control" placeholder="Community" required
                                            name="community" />
                                    </div>

                                    <div class="col-md-6">
                                        <label class="heading-color ff-heading fw600 mb10">Approximate Age Of The
                                            Property<span style="color: red">*</span></label>
                                        <input type="text" class="form-control" id="propertyage" placeholder="Age"
                                            required name="approx_age_of_property" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="heading-color ff-heading fw600 mb10">Approximate Size Of Your
                                            Property (sq. ft.)<span style="color: red">*</span></label>
                                        <input type="text" class="form-control" placeholder="Size" id="propertysize"
                                            required name="approx_size_of_property" />
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="heading-color ff-heading fw600 mb10">Style Of Your Property<span
                                                style="color: red">*</span></label>

                                        <select class="form-select form-control" aria-label="Default select example"
                                            required name="style_of_property">

                                            <option value="" selected>Style</option>
                                            <option value="Condominium">Condominium</option>
                                            <option value="Bungalow">Bungalow</option>
                                            <option value="Detached">Detached</option>
                                            <option value="Attached">Attached</option>

                                        </select>
                                    </div>

                                    <div class="col-lg-6">
                                        <label class="heading-color ff-heading fw600 mb10">Number of Bedrooms<span
                                                style="color: red">*</span></label>

                                        <select class="form-select form-control" aria-label="Default select example"
                                            required name="no_of_bedrooms">

                                            <option value="" selected>Beds</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>

                                        </select>
                                    </div>

                                    <div class="col-lg-6">
                                        <label class="heading-color ff-heading fw600 mb10">Number of Bathrooms<span
                                                style="color: red">*</span></label>

                                        <select class="form-select form-control" aria-label="Default select example"
                                            required name="no_of_bathrooms">
                                            <option value="" selected>Baths</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>

                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="heading-color ff-heading fw600 mb10">Basement Development<span
                                                style="color: red">*</span></label>

                                        <select class="form-select form-control" aria-label="Default select example"
                                            required name="basement_development">
                                            <option value="" selected>None</option>
                                            <option value="Undeveloped">Undeveloped</option>
                                            <option value="Partially Developed">Partially Developed</option>
                                            <option value="Full Developed">Full Developed</option>

                                        </select>
                                    </div>

                                    <div class="col-md-6 col-xxl-6">
                                        <label class="heading-color ff-heading fw600 mb10">Parking
                                            <span style="color: red;">*</span></label>
                                        <select class="form-select form-control" aria-label="Default select example"
                                            name="parking">
                                            <option value="" selected>None</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5+">5+</option>

                                        </select>
                                    </div>

                                    <div class="col-lg-6">
                                        <label class="heading-color ff-heading fw600 mb10">Are You Looking To<span
                                                style="color: red">*</span></label>

                                        <select class="form-select form-control" aria-label="Default select example"
                                            required name="interest">
                                            <option value="" selected>None</option>
                                            <option value="Purchase">Purchase</option>
                                            <option value="Sell">Sell</option>
                                            <option value="Both">Both</option>

                                        </select>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="heading-color ff-heading fw600 mb10">Additional Information<span
                                                style="color: red">*</span></label>
                                        <input type="text" class="form-control" placeholder="" required
                                            name="additional_information" />

                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="ud-btn btn-primary w-100">
                                            Get Appointment
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Diamond Property -->
    <!-- bgc-thm -->
    <section class="pb50 pb30-md bgc-gray ">
        <div class="container">
            <div class="row wow fadeInUp align-items-center" data-wow-delay="00ms">
                <div class="col-lg-9">
                    <div class="main-title2 mb-3">
                        <h2 class="title mobile-fs"><i class="fa-thin fa-gem"></i> Diamond Listings</h2>
                        <p class="paragraph">
                            Here’s an inside look into our amazing luxury home listings currently posted on the MLS<span
                                class='r'>®️</span> System.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="dark-light-navtab style2 text-start text-lg-end mt-0 mt-lg-4 mb-4 ">
                        <div class="text-start text-lg-end mb-3">
                            <a class="ud-btn btn-outline-rep bg-red" href="/search/diamond">See All Diamond Listings</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" id="diamond_listings"></div>

        </div>
    </section>
    <!-- Explore Apartment -->

    <!-- Why Chose Us -->
    <section>
        <div class="container">
            <div class="row justify-content-center wow fadeInRight" data-wow-delay="300ms">
                <h2 class="title text-center real-font pb-5 mt-0">
                    Real Estate Professionals Inc. - Your Best Choice
                </h2>
                <div class="col-12 text-center text-sm-center col-sm-12 col-md-12 col-lg-6">
                    <div class="position-relative mb30-md">
                        <img class="img profileImg" src="/images/final-your-best.jpg" alt="" />
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 wow fadeInLeft" data-wow-delay="500ms">

                    <div class="why-chose-list">
                        <div class="list-one d-flex align-items-start mb30">
                            <i class="flex-shrink-0 list-icon">
                                <svg class="icon icon-computer">
                                    <use xlink:href="images/about/whyChooseRep.svg#icon-user-experience"></use>
                                </svg>
                            </i>
                            <div class="list-content real-estate flex-grow-1 ml20">
                                <h6 class="mb-1 text-dark primary-font">
                                    We’re Your Pro!
                                </h6>
                                <p class="text mb-0 fz15">
                                    Relax and let our skilled REALTORS<span>&#174;</span> navigate you through
                                    the complex real estate market. With a service-based approach, we're by your side from
                                    start to finish, ensuring a smooth transaction and avoiding costly mistakes.

                                </p>
                            </div>
                        </div>
                        <div class="list-one d-flex align-items-start mb30">
                            <i class="flex-shrink-0 list-icon">
                                <svg class="icon icon-computer">
                                    <use xlink:href="images/about/whyChooseRep.svg#icon-realtor"></use>
                                </svg>
                            </i>
                            <div class="list-content real-estate  flex-grow-1 ml20">
                                <h6 class="mb-1 text-dark primary-font">
                                    We’re Well Connected!
                                </h6>
                                <p class="text mb-0 fz15">
                                    We're one of the largest INDEPENDENTLY OWNED real estate brokerages in Alberta, with over 370 REALTORS<span>&#174;</span>, and have an internal network with trusted third-party vendors like 
                                        property inspectors, lawyers, and mortgage brokers, all working together to help you 
                                        market, sell, or purchase your dream home.
                                        
                                </p>
                            </div>
                        </div>
                        <div class="list-one d-flex align-items-start mb30">
                            <i class="flex-shrink-0 list-icon">
                                <svg class="icon icon-computer">
                                    <use xlink:href="images/about/whyChooseRep.svg#icon-computer"></use>
                                </svg>
                            </i>
                            <div class="list-content real-estate  flex-grow-1 ml20">
                                <h6 class="mb-1 text-dark primary-font">
                                    A Brighter Spotlight!
                                </h6>
                                <p class="text mb-0 fz15">
                                    Leverage our extensive network of over 370 REALTORS<span>&#174;</span>,
                                    across Alberta. We employ a proactive, tech-savvy strategy to showcase your home on both our expanding brokerage platform and the MLS<span>&#174;</span> system, ensuring global visibility.
                                </p>
                            </div>
                        </div>
                        <div class="list-one d-flex align-items-start">
                            <i class="fa-regular fa-check flex-shrink-0 list-icon" style="opacity: 0"></i>
                            <a class="ud-btn btn-primary ml20" href="{{ route('why-rep') }}">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Property -->
    <section class="bgc-gray pt50">
        <div class="container">
            <div class="row wow fadeInUp align-items-center" data-wow-delay="00ms">
                <div class="col-lg-9">
                    <div class="main-title2 mb-3 mb-sm-0">
                        <div class='d-flex  align-items-center'>
                            <i class="fa-thin fa-star star-icon me-2"></i>
                            <h2 class="title mobile-fs">Featured Listings</h2>
                        </div>
                        <p class="paragraph">
                            Here’s an inside look at all our amazing active home listings currently posted on the MLS<span
                                class='r'>®️</span> System.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="dark-light-navtab style2 text-start text-lg-end mt-0 mt-lg-4 mb-4">
                        <div class="text-start text-lg-end mb-3">
                            <a class="ud-btn btn-outline-rep bg-red" target="_blank" href="/search/featured">See All Featured
                                Listings</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="300ms">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="row" id="featured_listings">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- bgred-thm  -->
    <section class="py90 bcg-primary py-5">
        <div class="container">

            <div class="row rep-style-3">
                <div class="col-md-6 col-lg-3">

                    <h2 class="title text-white bork-built">
                        A Brokerage Built For REALTOR<span>&#174;</span> Success
                    </h2>
                    <a class="ud-btn btn-outline-white mt-4" href="{{ route('join-rep') }}">
                        Join REP
                    </a>
                </div>
                <div class="col-md-6 col-lg-3 px-4 bt-floating">

                    <img src="/frontend/images/home/lucrative.webp" class="whyrepIcons mb20" />
                    <!-- <h3 class="text-BlueA400">01.</h3> -->
                    <h4 class="text-white">Instant Savings at REP!</h4>
                         <p class="text-white">
                    We take pride in offering one of the lowest brokerage fees and monthly administrative charges for our
                        associates in Alberta, alongside our class-leading in-house commissions advance program, which
                        ensures more money stays in your pockets – where it belongs!
                    </p>
                </div>
                <div class="col-md-6 col-lg-3 px-4 bt-floating">
                    <img src="images/home/comprehensiveSupport.webp" class="whyrepIcons mb20" />
                    <!-- <h3 class="text-BlueA400">02.</h3> -->
                    <h4 class="text-white">We’ve Got Your Back!</h4>
                    <p class="text-white">
                        It all begins with our class-leading conveyancing service, which starts with our detailed contract
                        reviews and ends with our ultra fast commission payouts. We also provide accessible management
                        support and an on-site real estate lawyer and mortgage associate to help you get the deal done!

                    </p>
                </div>
                <div class="col-md-6  col-lg-3 px-4 bt-floating">
                    <img src="images/home/established-Reputation.webp" class="whyrepIcons mb20" />
                    <!-- <h3 class="text-BlueA400">03.</h3> -->
                    <h4 class="text-white">Work and Play Hard!</h4>
                    <p class="text-white">
                        We’re focused on investing in your growth. Our brokerage offers educational courses, presentations
                        from industry experts and a class leading 1:1 mentorship program. Throughout the year, we also host
                        various social events for our REALTORS<span>&#174;</span>️ and their family, like our Winter Holiday Celebration!

                    </p>
                </div>
            </div>
            <div class="row"></div>

        </div>
    </section>

    <!-- Explore Comminities -->
    <!-- Explore Apartment -->
    <section class="pb30-md  bgc-gray listing-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="main-title wow fadeInUp mb-4" data-wow-delay="100ms">
                        <h2 class="title">Search by Popular Municipalities</h2>
                        <p class="paragraph">
                              Explore various properties throughout the gorgeous cities and towns spread across Alberta.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="comunities navi_pagi_top_right slider-5-grid owl-carousel owl-theme wow fadeInUp"
                        data-wow-delay="300ms">
                        @foreach ($featuredPropertyData as $property)
                            <div class="item">
                                <a href="/search/{{ str_replace(' ', '-', strtolower($property['city_name'])) }}">
                                    <div class="apartment-style1">
                                        <div class="apartment-img">
                                            <img class="w-100"
                                                src="{{ $property['image'] ? $property['image'] : 'https://calgaryhomes.ca/thumbs/282x195/uploads/calgary-city-centre.jpg' }}"
                                                alt="" />
                                        </div>
                                        <div class="apartment-content">
                                            <h6 class="title mb-0">{{ $property['city_name'] }}</h6>
                                            <p class="text mb-0">{{ $property['propertycount'] }} Properties</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                        @for ($i = count($featuredPropertyData); $i < 4; $i++)
                            <!-- Placeholder card if less than 4 items retrieved from API -->
                            <div class="item">
                                <div class="apartment-style1">

                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>

            @php
                $propertyCount = count($featuredPropertyData);
            @endphp

            @if ($propertyCount <= 4)
                <style>
                    .owl-carousel .owl-dots.disabled,
                    .owl-carousel .owl-nav.disabled {
                        display: none;
                    }
                </style>
            @endif


        </div>
    </section>

    <!-- Explore Apartment -->
    {{-- <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main-title2 mb-4">
                        <h2 class="title">
                            Calgary and Surrounding Area Housing Statistics
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <canvas id="buyers" width="600" height="245"></canvas>
                </div>
                <div class="col-lg-4 mb30-md wow fadeInUp" data-wow-delay="100ms">
                    <div class="card h-100">
                        <div class="row flex-column card-body">
                            <div class="col-12">
                                <div
                                    class="d-flex align-items-center justify-content-between gap-3"
                                >
                                    <h6 class="list-title mb-0">
                                        Today's Calgary Area Listings
                                    </h6>
                                    <div class="dropstart">
                                        <button
                                            class="filterBtn"
                                            type="button"
                                            id="dropdownMenuButton1"
                                            data-bs-toggle="dropdown"
                                            aria-expanded="false"
                                        >
                                            <i class="fa-light fa-filter"></i>
                                        </button>
                                        <ul
                                            class="dropdown-menu"
                                            aria-labelledby="dropdownMenuButton1"
                                        >
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0)">Detached</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0)"
                                                >Row & Townhouse</a
                                                >
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0)"
                                                >Semi-Detached</a
                                                >
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0)">Apartment</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <hr />
                            </div>
                            <ul>
                                <li>
                                    <div
                                        class="col-12 d-flex justify-content-between gap-3 py-2 border-bottom"
                                    >
                                        <p class="text mb-0">Diamond Listings</p>
                                        <div class="timer fs-5 fw500">1090</div>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="col-12 d-flex justify-content-between gap-3 py-2 border-bottom"
                                    >
                                        <p class="text mb-0">New Listings</p>
                                        <div class="timer fs-5 fw500">690</div>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="col-12 d-flex justify-content-between gap-3 py-2 border-bottom"
                                    >
                                        <p class="text mb-0">Active Listings</p>
                                        <div class="timer fs-5 fw500">3690</div>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="col-12 d-flex justify-content-between gap-3 py-2 border-bottom"
                                    >
                                        <p class="text mb-0">Total Sales</p>
                                        <div class="timer fs-5 fw500">690</div>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="col-12 d-flex justify-content-between gap-3 py-2 border-bottom"
                                    >
                                        <p class="text mb-0">% Changes</p>
                                        <div class="timer fs-5 fw500">40%</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Explore Apartment -->
    <!-- <section class="contactSection bgc-gray position-relative"> -->
    <section class="bgc-gray position-relative contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="main-title wow fadeInUp mb-4" data-wow-delay="100ms"
                        style="
                        visibility: visible;
                        animation-delay: 100ms;
                        animation-name: fadeInUp;
                      ">
                        <h2 class="title">Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
        <section class="p-0">
            <div id="switch-space" style="width:100%; height:500px;">
                <div id="loader" class="loader"></div> <!-- Loader inside switch-space -->
            </div>

            <div id="map" style="display:none;">
            </div>
        </section>
        <div class="container position-relative">
            <div class="row d-none">
                <div class="col-11 mx-auto position-relative">
                    <a href="https://www.google.com/maps/d/embed?mid=1eSieTU-u5qa5XnUXhKjEyegQ5vwQni4&hl=en&ehbc=2E312F&ll=51.062725450517064%2C-114.09487259375003&z=11"
                        target="_blank"><img class="mapCard img-fluid" src="images/mapcontact.webp" />
                    </a>
                    <!-- <iframe
                                              src="https://www.google.com/maps/d/embed?mid=1eSieTU-u5qa5XnUXhKjEyegQ5vwQni4&hl=en&ehbc=2E312F"
                                              width="640"
                                              height="480"
                                              class="mapCard"
                                            ></iframe> -->
                </div>
            </div>
            <div class="row justify-content-center align-items-start cnct  h-0">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5  position-relative position-md-absolute top-left-300 office-north">
                    <!--<div class="home8-contact-form default-box-shadow1 bdrs12 bdr1 p30 mb30-md bgc-thm ">-->
                    <!--    <div class="inquiry-form">-->
                    <!--        <h4 class="text-white">North Office</h4>-->
                    <!--        <div class="d-flex flex-column gap-2 addressSection">-->
                    <!--            <p class="mb-0 d-flex gap-2">-->
                    <!--                <i class="fa-light fa-envelope"></i>-->

                    <!--                <a href="mailto:northoffice@repinc.ca">northoffice@repinc.ca-->
                    <!--                </a>-->
                    <!--            </p>-->
                    <!--            <p class="mb-0 d-flex gap-2">-->
                    <!--                <i class="fa-light fa-phone"></i>-->
                    <!--                <a href="tel:403.547.4102">403.547.4102</a>-->
                    <!--            </p>-->
                    <!--            <p class="mb-0 d-flex gap-2">-->
                    <!--                <i class="fa-sharp fa-light fa-location-dot"></i><a href="https://maps.app.goo.gl/Ttonc5AFtrEnRauv8"  target="_blank">202,-->
                    <!--                5403 Crowchild Trail NW Calgary, Alberta T3B 4Z1</a>-->
                    <!--            </p>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </section>

    <style>
        .top-left-300,
        .top-right-300 {
            top: 0px;
        }

        @media only screen and (min-width: 767px) {

            .top-left-300,
            .top-right-300 {
                top: -300px;
            }
        }

        .top-left-300 {
            left: 0;
        }

        .top-right-300 {
            right: 0;
        }
    </style>
    <script
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initMaps"
        async defer></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
    <script>
        // var markerIconPath = "{{ asset('images/map.png') }}";
        // Assuming you have jQuery included in your project
        


        $(document).ready(function() {
            $('.ud-btn.btn-thm').click(function() {
                var address = $('#address-input').val();
                var email = $('#email-input').val();

                $('input[name="property_address"]').val(address);
                $('input[name="email"]').val(email);

                $('#staticBackdrop').modal('show');
            });
        });
        var header = '{{ env('BACKEND_URL') }}';
        // var header =  'http://127.0.0.1:8000';

        var apiUrl = header + '/api/agents/listing-appointment-form';
        document.addEventListener('DOMContentLoaded', function() {
            
            //Loader
            const switchSpace = document.getElementById('switch-space');
            const map = document.getElementById('map');
            const officeNorth = document.querySelector('.office-north');

            officeNorth.classList.add('blur');

            setTimeout(function() {
                switchSpace.style.display = 'none'; 
                map.style.display = 'block'; 

                officeNorth.classList.remove('blur');
            }, 3000); 
            
            
            // Function to reset form fields
            function resetFormFields() {
                document.getElementById('form-style1').reset();
            }

            // Add event listener to form submission
                      $('#form-style1').validate({
        rules: {
            first_name: {
                required: true
            },
            last_name: {
                required: true
            },
            // phone: {
            //     required: true,
            
            // },
            email: {
                required: true,
                email: true
            },
            property_address: {
                required: true
            },
            community: {
                required: true
            },
            approx_age_of_property: {
                required: true
            },
            approx_size_of_property: {
                required: true
            },
            style_of_property: {
                required: true
            },
            no_of_bedrooms: {
                required: true
            },
            no_of_bathrooms: {
                required: true
            },
            parking: {
                required: true
            },
            interest: {
                required: true
            },
            additional_information: {
                required: true
            }
        },
        submitHandler: function(form) {
            var formData = new FormData(form);

            fetch(apiUrl, {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
          .then(data => {
    console.log(data);
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: 'Form submitted successfully',
        confirmButtonText: 'Continue to Website'
    }).then(() => {
        window.location.href = '/home-evaluation';
    });
    // form.reset();
})
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'An error occurred while submitting the form. Please try again later.'
                });
            });
        }
    });

            // Reset form fields on page refresh
            window.addEventListener('beforeunload', function() {
                resetFormFields();
            });
        });

        function validateAlphabets(event) {
            const input = event.target;
            const regex = /^[a-zA-Z\s]*$/;
            const key = event.key;

            if (!regex.test(key) && key !== 'Backspace' || input.value.length >= 40) {
                event.preventDefault();
            }
        }
        ['firstname', 'lastname'].forEach(function(id) {
            document.getElementById(id).addEventListener("keypress", validateAlphabets);
        });

        ['contactnumber'].forEach(fieldId => {
            document.getElementById(fieldId).addEventListener("input", function(event) {
                let phoneInput = event.target.value.replace(/\D/g, '').slice(0, 10);
                event.target.value = phoneInput.replace(/(\d{3})(\d{3})(\d{4})/, '($1) $2-$3');
            });
        });
        ['propertyage', 'propertysize'].forEach(fieldId => {
            document.getElementById(fieldId).addEventListener("input", function(event) {
                let numericInput = event.target.value.replace(/[^\d.]/g,
                    ''); // Remove non-numeric characters except '.'
                // Ensure only one decimal point is present
                const decimalIndex = numericInput.indexOf('.');
                if (decimalIndex !== -1) {
                    const integerPart = numericInput.slice(0, decimalIndex);
                    const decimalPart = numericInput.slice(decimalIndex + 1);
                    numericInput = integerPart + '.' + decimalPart.replace(/\./g, '');
                }
                event.target.value = numericInput; // Update input value
            });
        });

    function initMaps() {
    const inputs = document.querySelectorAll('.address-inputs');
    const options = {
        types: ['geocode'],
        componentRestrictions: {
        country: 'ca'
        },
        strictBounds: true,
        bounds: {
        north: 60.0000, // Adjust these coordinates as needed to cover Alberta
        south: 48.9993,
        east: -110.0000,
        west: -120.0000
        }
    };

    inputs.forEach(input => {
        const autocomplete = new google.maps.places.Autocomplete(input, options);

        autocomplete.addListener('place_changed', function() {
        const place = autocomplete.getPlace();
        if (!place.geometry) {
            console.log("Place details not found for the input: ", input.value);
            return;
        }

        if (place.address_components.some(component =>
            component.types.includes('country') && component.short_name === 'CA'
        )) {
            const province = place.address_components.find(component =>
            component.types.includes('administrative_area_level_1') && component.short_name === 'AB'
            );

            if (province) {
            const address = place.formatted_address;
            console.log("Address from the Province of Alberta in Canada: ", address);
            // Proceed with the address from Alberta
            } else {
            console.log("Address is not from the Province of Alberta in Canada.");
            // Handle addresses not from Alberta
            }
        } else {
            console.log("Address is not from Canada.");
            // Handle addresses not from Canada
        }
        });
    });
    }

        document.addEventListener('DOMContentLoaded', function() {
            var searchButton = document.getElementById('searchButton');
            var autocompleteInput = document.getElementById('autocomplete');
        
            searchButton.addEventListener('click', function() {
                var inputValue = autocompleteInput.value.trim();
                if (inputValue === '') {
                    window.location.href = '/search';
                } else {
                    var formattedInput = inputValue.toLowerCase().replace(/\s+/g, '-');
                    window.location.href = '/search/' + formattedInput;
                }
            });
        });



        document.addEventListener('DOMContentLoaded', function() {
            var searchButton = document.getElementById('searchButton');
            var autocompleteInput = document.getElementById('autocomplete');

            searchButton.addEventListener('click', function() {
                var inputValue = autocompleteInput.value.trim();
                var formattedInput = inputValue.toLowerCase().replace(/\s+/g, '-');
                window.location.href = '/search/' + formattedInput;
            });
        });


        document.addEventListener('DOMContentLoaded', function() {
    var autocompleteInput = document.getElementById('autocomplete');
    var suggestionList = document.getElementById('suggestion-list');
    var selectedIndex = -1;
    var localSuggestions = {};

    function handleSearch() {
        var searchQuery = autocompleteInput.value.trim().toLowerCase();
        var found = false;
        var newHref = '/search?search=' + encodeURIComponent(searchQuery) + '&address=1';

        for (var state in localSuggestions) {
            for (var city in localSuggestions[state]) {
                if (city.toLowerCase() === searchQuery) {
                    newHref = '/search/' + encodeURIComponent(city);
                    found = true;
                    break;
                }

                for (var neighborhood of localSuggestions[state][city]) {
                    if (neighborhood.toLowerCase() === searchQuery) {
                        newHref = '/search/' + encodeURIComponent(city) + '/' + encodeURIComponent(neighborhood);
                        found = true;
                        break;
                    }
                }

                if (found) break;
            }

            if (found) break;
        }

        document.getElementById('searchButton').setAttribute('href', newHref);
    }

    // Load local JSON file
    fetch('/cities_with_subdivisions.json')
        .then(response => response.json())
        .then(data => {
            localSuggestions = data;

            autocompleteInput.addEventListener('input', function() {
                var query = this.value;
                if (query.length >= 3) {
                    var localResults = searchLocalSuggestions(query);

                    if (localResults.length > 0) {
                        displayLocalSuggestions(localResults, query);
                    } else {
                        fetchSuggestionsFromAPI(query);
                    }
                } else {
                    suggestionList.innerHTML = ''; // Clear suggestion list if query length is less than three
                }
            });

            autocompleteInput.addEventListener('keydown', function(event) {
                var suggestions = suggestionList.getElementsByClassName('suggestion');
                if (suggestions.length > 0) {
                    if (event.key === 'ArrowDown') {
                        event.preventDefault();
                        if (selectedIndex < suggestions.length - 1) {
                            selectedIndex++;
                        } else {
                            selectedIndex = 0; // Loop back to the first suggestion
                        }
                        highlightSuggestion(suggestions, selectedIndex);
                    } else if (event.key === 'ArrowUp') {
                        event.preventDefault();
                        if (selectedIndex > 0) {
                            selectedIndex--;
                        } else {
                            selectedIndex = suggestions.length - 1; // Loop back to the last suggestion
                        }
                        highlightSuggestion(suggestions, selectedIndex);
                    } else if (event.key === 'Enter') {
                        event.preventDefault();
                        if (selectedIndex >= 0 && selectedIndex < suggestions.length) {
                            var suggestionElement = suggestions[selectedIndex];
                            var suggestionText = suggestionElement.textContent.split(',')[0].trim(); // Get the city name only
                            autocompleteInput.value = suggestionText;
                            suggestionList.innerHTML = '';
                            suggestionElement.click(); // Trigger click event on the suggestion
                        } else {
                            // alert('yes');
                            handleSearch();
                            document.getElementById('searchButton').click();
                        }
                    }
                } else if (event.key === 'Enter') {
                    // alert('yes');
                    event.preventDefault(); 
                    handleSearch();
                    document.getElementById('searchButton').click();
                }
            });

            document.getElementById('searchButton').addEventListener('click', function(event) {
                handleSearch();
            });
        })
        .catch(error => {
            console.error('Error loading local JSON:', error);
        });

    // Search local suggestions
    function searchLocalSuggestions(query) {
        var results = [];
        Object.keys(localSuggestions).forEach(function(state) {
            if (state.toLowerCase().includes(query.toLowerCase())) {
                Object.keys(localSuggestions[state]).forEach(function(city) {
                    results.push({ city: city, subdivision: '', state: state });
                    localSuggestions[state][city].forEach(function(subdivision) {
                        results.push({ city: city, subdivision: subdivision, state: state });
                    });
                });
            } else {
                Object.keys(localSuggestions[state]).forEach(function(city) {
                    if (city.toLowerCase().includes(query.toLowerCase())) {
                        results.push({ city: city, subdivision: '', state: state });
                    }
                    localSuggestions[state][city].forEach(function(subdivision) {
                        if (subdivision.toLowerCase().includes(query.toLowerCase())) {
                            results.push({ city: city, subdivision: subdivision, state: state });
                        }
                    });
                });
            }
        });
        return results;
    }

    // Fetch suggestions from API
    function fetchSuggestionsFromAPI(query) {
        fetch(header + '/api/agents/listing-autosuggestion-map', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                key: query
            })
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            var suggestedAgents = data.suggested_agents;
            displaySuggestions(suggestedAgents, query);
        })
        .catch(error => {
            console.error('Error:', error);
            suggestionList.innerHTML = '';
        });
    }

    // Display local suggestions
    function displayLocalSuggestions(suggestions, query) {
        suggestionList.innerHTML = '';
        selectedIndex = -1; // Reset the selectedIndex when new suggestions are loaded

        if (suggestions.length > 0) {
            var cityCategoryElement = document.createElement('div');
            cityCategoryElement.textContent = 'Cities';
            cityCategoryElement.className = 'category';
            suggestionList.appendChild(cityCategoryElement);

            var citySuggestions = suggestions.filter(suggestion => !suggestion.subdivision);
            citySuggestions.forEach(function(suggestion) {
                var suggestionElement = document.createElement('div');
                var boldSuggestion = `${suggestion.city}, ${suggestion.state}`;
                boldSuggestion = boldSuggestion.replace(new RegExp(query, 'gi'), '<b>$&</b>');
                suggestionElement.innerHTML = boldSuggestion;
                suggestionElement.className = 'suggestion';
                suggestionElement.addEventListener('click', function() {
                    window.location.href = '/search/' + suggestion.city.toLowerCase().replace(/\s+/g, '-');
                });
                suggestionList.appendChild(suggestionElement);
            });

            var neighborhoodCategoryElement = document.createElement('div');
            neighborhoodCategoryElement.textContent = 'Neighborhoods';
            neighborhoodCategoryElement.className = 'category';
            suggestionList.appendChild(neighborhoodCategoryElement);

            var subdivisionSuggestions = suggestions.filter(suggestion => suggestion.subdivision);
            subdivisionSuggestions.forEach(function(suggestion) {
                var suggestionElement = document.createElement('div');
                var boldSuggestion = `${suggestion.subdivision}, ${suggestion.city}, ${suggestion.state}`;
                boldSuggestion = boldSuggestion.replace(new RegExp(query, 'gi'), '<b>$&</b>');
                suggestionElement.innerHTML = boldSuggestion;
                suggestionElement.className = 'suggestion';
                suggestionElement.addEventListener('click', function() {
                    window.location.href = '/search/' + suggestion.city.toLowerCase().replace(/\s+/g, '-') + 
                                            '/' + suggestion.subdivision.toLowerCase().replace(/\s+/g, '-');
                });
                suggestionList.appendChild(suggestionElement);
            });
        }
    }

    // Display suggestions from API
    function displaySuggestions(suggestedAgents, query) {
        suggestionList.innerHTML = '';
        selectedIndex = -1; // Reset the selectedIndex when new suggestions are loaded

        // Object to categorize suggestions
        var categories = {
            'Address': suggestedAgents.fullAddress,
            'MLS® Number': suggestedAgents.mls_ids
        };

        Object.keys(categories).forEach(function(category) {
            if (categories[category].length > 0) {
                var categoryElement = document.createElement('div');
                categoryElement.textContent = category;
                categoryElement.className = 'category';
                suggestionList.appendChild(categoryElement);

                categories[category].forEach(function(suggestion, index) {
                    var suggestionElement = document.createElement('div');
                    var boldSuggestion = suggestion.replace(new RegExp(query, 'gi'), '<b>$&</b>');
                    suggestionElement.innerHTML = boldSuggestion;
                    suggestionElement.className = 'suggestion';

                    if (category === 'MLS® Number') {
                        suggestionElement.addEventListener('click', function() {
                            var mlsId = suggestion.split(' - ')[0]; // Take the part before "-"
                            window.location.href = '/property-detail/' + mlsId;
                        });
                    } else {
                        suggestionElement.addEventListener('click', function() {
                            var slugUrl = suggestedAgents.slug_urls[index];
                            var listingId = suggestedAgents.listingIds[index];
                            if (slugUrl) {
                                window.location.href = '/property-detail/' + slugUrl;
                            } else if (listingId) {
                                window.location.href = '/property-detail/' + listingId;
                            }
                        });
                    }

                    suggestionList.appendChild(suggestionElement);
                });
            }
        });
    }

    // Handle suggestion list clicks
    suggestionList.addEventListener('click', function(event) {
        if (event.target.classList.contains('suggestion')) {
            var suggestionText = event.target.textContent.split(',')[0].trim(); // Get the city name only
            autocompleteInput.value = suggestionText;
            suggestionList.innerHTML = '';
            applyFilter('search', suggestionText); // Apply filter with city only
            autocompleteInput.dispatchEvent(new Event('change'));
        }
    });

    function highlightSuggestion(suggestions, index) {
        for (var i = 0; i < suggestions.length; i++) {
            if (i === index) {
                suggestions[i].classList.add('highlighted');
                ensureSuggestionInView(suggestions[i]);
            } else {
                suggestions[i].classList.remove('highlighted');
            }
        }
    }

    function ensureSuggestionInView(suggestion) {
        var suggestionListRect = suggestionList.getBoundingClientRect();
        var suggestionRect = suggestion.getBoundingClientRect();

        if (suggestionRect.bottom > suggestionListRect.bottom) {
            suggestionList.scrollTop += suggestionRect.bottom - suggestionListRect.bottom;
        } else if (suggestionRect.top < suggestionListRect.top) {
            suggestionList.scrollTop -= suggestionListRect.top - suggestionRect.top;
        }
    }

    window.addEventListener('click', function(event) {
        if (!event.target.closest('#suggestion-list') && !event.target.closest('#autocomplete')) {
            suggestionList.innerHTML = '';
        }
    });
});




        // initMaps();


        var header = '{{ env('BACKEND_URL') }}';

        var apiHeader = header + '/api/agents/get-properties-index';
        fetchProperties(apiHeader);

        initMaps();

        function fetchProperties(apiHeader) {
            fetch(apiHeader)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    console.log(data);
                    displayDiamondProperties(data.diamond_properties);
                    displayFeaturedProperties(data.featured_properties);
                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                });
        }

        function displayDiamondProperties(properties) {
            const formatter = new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: 'USD',
                minimumFractionDigits: 0,
            });
            var diamondListingsDiv = document.getElementById('diamond_listings');
            diamondListingsDiv.innerHTML = ''; // Clear previous listings
            if (properties.length === 0) {
                diamondListingsDiv.innerHTML = '<p>OOPS! NO LISTINGS FOUND</p>';
                return;
            }
            properties.forEach(property => {
                var UnparsedAddress = '';

                if (property.StreetNumber) {
                    UnparsedAddress += property.StreetNumber;
                }

                if (property.StreetDirPrefix) {
                    UnparsedAddress += ' ' + property.StreetDirPrefix;
                }

                if (property.StreetName) {
                    UnparsedAddress += ' ' + property.StreetName;
                }

                if (property.StreetSuffix) {
                    UnparsedAddress += ' ' + property.StreetSuffix;
                }

                if (property.UnitNumber) {
                    UnparsedAddress += ' ' + property.UnitNumber;
                }



                var listingDiv = document.createElement('div');
                listingDiv.className = 'col-sm-6 col-lg-4 col-xl-3';
                listingDiv.innerHTML = `
            <div class="listing-style5">
                <div class="list-thumb">
                   <a href="{{ url('') }}/property-detail/${property.slug_url || property.ListingId}" data-bs-toggle="tooltip" data-bs-placement="top" title="Preview" target="_blank">
                    <img src="${property.image_url ? `${property.image_url}` : '{{ asset('images/no_image.jpg') }}'}" alt="${property.ListingId}" onerror="this.src='{{ asset('images/no_image.jpg') }}';">
                   </a>
                    <div class="list-tag fz12">
                        <i class="fa-thin fa-gem me-2"></i>Diamond
                    </div>
                    <div class="list-meta2">
                        <a href="javascript:void(0)" 
   data-bs-toggle="tooltip" 
   data-bs-placement="top" 
   title="Favourite" 
   class="set-as-fav"
   onclick="toggleFavorite('${property.ListingId}')">
   <span class="flaticon-like" id="fav-icon-${property.ListingId}" ></span>
</a>
                    </div>
                </div>
            <a href="{{ url('') }}/property-detail/${property.slug_url || property.ListingId}" target="_blank">
                <div class="list-content">
                    <div class="list-price mb-2">
                        ${
                            property.PropertyType === 'Commercial' && property.LeaseAmount && property.LeaseAmountFrequency
                            ? `${formatter.format(property.LeaseAmount)} / ${property.LeaseAmountFrequency}${property.LeaseMeasure ? ' / ' + property.LeaseMeasure : ''}`
                            : `${formatter.format(property.ListPrice)}`
                        }
                    </div>
                     <h6 class="list-title">
                        ${property.UnparsedAddress ? property.UnparsedAddress + ', ': UnparsedAddress}${property.City ? property.City + ', ' : ''}${property.StateOrProvince}</h6>
                        
                    <p class="list-text">${property.PropertyType}</p>
                    <div class="list-meta d-flex align-items-center gap-3">
                        ${property.BedroomsTotal ? `<p><span class="flaticon-bed"></span>${property.BedroomsTotal} bed</p>` : ''}
                        ${property.BathroomsFull ? `<p><span class="flaticon-shower"></span>${property.BathroomsFull} bath</p>` : ''}
                        ${property.BuildingAreaTotalSF ? `<p><span class="flaticon-expand"></span>${Math.floor(property.BuildingAreaTotalSF)} sqft</p>` : (property.LivingAreaSF ? `<p><span class="flaticon-expand"></span>${Math.floor(property.LivingAreaSF)} sqft</p>` : '')}
                    </div>
                    <span class="mlsNumber">MLS® Number: ${property.ListingId}</span>
                </div>
            </a>
            </div>
        `;
                diamondListingsDiv.appendChild(listingDiv);
            });
            getmarkedlistings();
        }

        function displayFeaturedProperties(properties) {
            const formatter = new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: 'USD',
                minimumFractionDigits: 0,
            });
            var featuredListingsDiv = document.getElementById('featured_listings');
            featuredListingsDiv.innerHTML = ''; // Clear previous listings
            if (properties.length === 0) {
                featuredListingsDiv.innerHTML = '<p>OOPS! NO LISTINGS FOUND</p>';
                return;
            }
            properties.forEach(property => {
                var UnparsedAddress = '';

                if (property.StreetNumber) {
                    UnparsedAddress += property.StreetNumber;
                }

                if (property.StreetDirPrefix) {
                    UnparsedAddress += ' ' + property.StreetDirPrefix;
                }

                if (property.StreetName) {
                    UnparsedAddress += ' ' + property.StreetName;
                }

                if (property.StreetSuffix) {
                    UnparsedAddress += ' ' + property.StreetSuffix;
                }

                if (property.UnitNumber) {
                    UnparsedAddress += ' ' + property.UnitNumber;
                }

                var listingDiv = document.createElement('div');
                listingDiv.className = 'col-sm-6 col-lg-4 col-xl-3';
                listingDiv.innerHTML = `
            <div class="listing-style5">
                <div class="list-thumb">
                    <a href="{{ url('') }}/property-detail/${property.slug_url || property.ListingId}" data-bs-toggle="tooltip" data-bs-placement="top" title="Preview" target="_blank">
                    <img src="${property.image_url ? `${property.image_url}` : '{{ asset('images/no_image.jpg') }}'}" alt="${property.ListingId}" onerror="this.src='{{ asset('images/no_image.jpg') }}';">
                   </a>
                    <div class="list-tag fz12">
                        <i class="fa-thin fa-star me-2"></i>Featured
                    </div>
                    <div class="list-meta2">
                        <a href="javascript:void(0)" 
   data-bs-toggle="tooltip" 
   data-bs-placement="top" 
   title="Favourite" 
   class="set-as-fav"
   onclick="toggleFavorite('${property.ListingId}')">
   <span class="flaticon-like" id="fav-icon-${property.ListingId}"></span>
</a>
                    </div>
                </div>
                <a href="{{ url('') }}/property-detail/${property.slug_url || property.ListingId}" data-bs-toggle="tooltip" data-bs-placement="top" title="Preview" target="_blank">
                <div class="list-content">
                     <div class="list-price mb-2">
                        ${
                            property.PropertyType === 'Commercial' && property.LeaseAmount && property.LeaseAmountFrequency
                            ? `${formatter.format(property.LeaseAmount)} / ${property.LeaseAmountFrequency}${property.LeaseMeasure ? ' / ' + property.LeaseMeasure : ''}`
                            : `${formatter.format(property.ListPrice)}`
                        }
                    </div>
                     <h6 class="list-title">
                        ${property.UnparsedAddress ? property.UnparsedAddress + ', ': UnparsedAddress}${property.City ? property.City + ', ' : ''}${property.StateOrProvince}</h6>
                    <p class="list-text">${property.PropertyType}</p>
                    <div class="list-meta d-flex align-items-center gap-3">
                        ${property.BedroomsTotal ? `<p><span class="flaticon-bed"></span>${property.BedroomsTotal} bed</p>` : ''}
                        ${property.BathroomsFull ? `<p><span class="flaticon-shower"></span>${property.BathroomsFull} bath</p>` : ''}
                        ${property.BuildingAreaTotalSF ? `<p><span class="flaticon-expand"></span>${Math.floor(property.BuildingAreaTotalSF)} sqft</p>` : (property.LivingAreaSF ? `<p><span class="flaticon-expand"></span>${Math.floor(property.LivingAreaSF)} sqft</p>` : '')}
                    </div>
                    <span class="mlsNumber">MLS® Number: ${property.ListingId}</span>
                </div>
                </a>
            </div>
        `;
                featuredListingsDiv.appendChild(listingDiv);
            });
        }



        function addToFavorites(propertyId, favoriteStatus) {

            var userId = "{{ session('user_id') }}";
            $.ajax({
                url: "{{ route('add_to_favorites') }}",
                type: 'POST',
                data: {
                    property_id: propertyId,
                    favorite: favoriteStatus,
                    user_id: userId
                },
                success: function(response) {
                    console.log('Toggle successful');
                    if (favoriteStatus === 1) {
                        $.toast({

                            text: 'Property added to favorites',
                            showHideTransition: 'slide',
                            icon: 'success',
                            loaderBg: '#f2a654',
                            position: 'top-right'
                        });
                    } else {
                        $.toast({

                            text: 'Property removed from favorites',
                            showHideTransition: 'slide',
                            icon: 'success',
                            loaderBg: '#f2a654',
                            position: 'top-right'
                        });
                    }
                    if (favoriteStatus) {
                        favIcon.classList.add('filled');
                    } else {
                        favIcon.classList.remove('filled');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Toggle failed');
                }
            });


        }



        function toggleFavorite(listingId) {
            var session = "{{ session('username') }}";
            if (!session) {
                $('#exampleModalToggle').modal('show');
            } else {

                var favIcon = document.getElementById(`fav-icon-${listingId}`);
                if (favIcon) {
                    favIcon.classList.toggle('filled');
                    favIcon.classList.toggle('white-background');
                    var isFavorite = favIcon.classList.contains('filled');
                    addToFavorites(listingId, isFavorite ? 1 : 0);
                } else {
                    console.error('Favorite icon not found');
                }
            }
        }


        function getmarkedlistings() {
            var userId = "{{ session('user_id') }}";
            if(userId){
                $.ajax({
                url: "{{ route('get-listings') }}",
                type: 'get',
                data: {
                    user_id: userId
                },
                success: function(response) {
                    var favoriteProperties = response.favorite_properties;
                    favoriteProperties.forEach(function(propertyId) {
                        var favIcon = document.getElementById(`fav-icon-${propertyId}`);
                        if (favIcon) {
                            favIcon.classList.add('filled');
                            favIcon.classList.add('white-background');
                        }
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error getting marked listings');
                }
            });
            }
        }

        // });
    </script>
@endsection()