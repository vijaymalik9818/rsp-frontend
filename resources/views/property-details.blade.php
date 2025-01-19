@extends('layouts.pages')
@section('content')
    <link href="{{ asset('frontend/css/pro-details.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css' rel='stylesheet' />

    <head>

    </head>

    <body>
        <div class="container-fluid parent-div p-0 propertyDetails">
            <div class="fixed-tabs" id='navbar'>
                <div class="top-tabs">
                    <h4 onclick="scrollToSection('section1')">Description</h4>
                    <h4 onclick="scrollToSection('section2')">Address</h4>
                    <h4 onclick="scrollToSection('section3')">Details</h4>
                    <h4 onclick="scrollToSection('section4')" class="feat">Features</h4>
                    <h4 onclick="scrollToSection('section5')"class="floors">Floor Plans</h4>
                    <h4 onclick="scrollToSection('section13')">Mortgage Calculator</h4>
                    {{-- <h4 onclick="scrollToSection('section6')" class="vidtab">Video</h4> --}}
                    <h4 onclick="scrollToSection('section7')" class="tourtab">360* Virtual Tour</h4>
                    <h4 onclick="scrollToSection('section8')">Walk Score</h4>
                    <h4 onclick="scrollToSection('section9')" class="nearsby">What's Nearby?</h4>
                    {{-- <h4 onclick="scrollToSection('section10')">Contact</h4> --}}
                    {{-- <h4 onclick="scrollToSection('section11')">Reviews</h4> --}}
                    <h4 onclick="scrollToSection('section12')" class="similerlisting">Similar Listings</h4>
                </div>
            </div>
            <div class="container Awesome-Interior pt-3">
                <div class="left">
                    <h1 class="heading"></h1>
                    <div class="buttons">
                        <button class="features"></button>
                        <button class='propertytype'></button>
                        <div class='d-flex gap-2 mt-3 addres'>
                            <i class="ri-map-pin-line"></i>
                            <p class="addresses"></p>
                        </div>
                    </div>
                </div>
                <div class="right text-end">
                    <div class="d-flex align-items-center justify-content-start justify-content-md-end  gap-2  right-icons"
                        style="background-color:  #f7f7ff; ">
                        <div class="icon mt-0" id="fav-icon" onclick='toggleFavorite()'>
                            <i class="ri-heart-line "></i>
                        </div>
                        <div class="dropdown">
                            <button class="ri-share-line icon" id="shareIcon">
                            </button>
                            <div class="dropdown-content" id="shareDropdown">
                                <a href="javascript:void(0)" id="facebookShare"><i class="ri-facebook-fill"></i> Share on
                                    Facebook</a>
                                <a href="javascript:void(0)" id="whatsappShare"><i class="ri-whatsapp-fill"></i> Share on
                                    WhatsApp</a>
                                <a href="javascript:void(0)" id="emailShare"><i class="ri-mail-fill"></i> Share via
                                    Email</a>
                                <a href="javascript:void(0)" id="linkedinShare"><i class="ri-linkedin-fill"></i> Share on
                                    LinkedIn</a>
                                <a href="javascript:void(0)" id="twitterShare"><i class="ri-twitter-fill"></i> Share on
                                    Twitter</a>
                            </div>

                        </div>

                        <div class="icon" id="printIcon">
                            <i class="ri-printer-line"></i>
                        </div>
                        <div class="icon">
                            <a href="javascript:void(0)" id="copyUrl"><i class="ri-file-copy-fill"></i></a>
                        </div>


                    </div>
                    <h4 class="price" id="lstprice"></h4>
                    <p id="pricepersqft"></p>
                </div>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-xl-8 pro-left">

                        <div class="carousel-container1">
                            <div class="slider-arrow left" id="prev"><i class="ri-arrow-left-s-line"></i></div>
                            <img class="big-image1" id="bigImage" data-bs-toggle="modal" data-bs-target="#imageModal">
                            <div class="slider-arrow right" id="next"><i class="ri-arrow-right-s-line"></i></div>
                            <div class="carousel1">
                            </div>
                        </div>

                        <div class="overview mt-3">
                            <div class='d-flex alifn-items-center mb-4  justify-content-between'>
                                <h4>Overview</h4>
                                <div> <strong>MLS® Number: </strong> <span class="listingid"></span>
                                </div>

                            </div>
                            <hr>
                            <div class="row mt-4">
                                <div class="col-6 col-sm-4 col-md">
                                    <div>
                                        <div class='d-flex align-items-center gap-2'>
                                            <i class="fa-light fa-house-blank"></i>
                                            <h6 class="propertytype">
                                            </h6>
                                        </div>
                                        <p>Property Type</p>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md">
                                    <div>
                                        <div class='d-flex  align-items-center gap-2'>
                                            <i class="fa-light fa-bed-front"></i>
                                            <h6 class="bedroom"></h6>
                                        </div>
                                        <p>Bedrooms</p>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md">
                                    <div>
                                        <div class='d-flex  align-items-center gap-2'>
                                            <i class="fa-light fa-shower"></i>
                                            <h6 class="bathroom"></h6>
                                        </div>
                                        <p>Bathroom</p>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md">
                                    <div>
                                        <div class='d-flex  align-items-center gap-2'>
                                            <i class="fa-light fa-car"></i>
                                            <h6 class="garage"></h6>
                                        </div>
                                        <p>Garage</p>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md">
                                    <div>
                                        <div class='d-flex  align-items-center gap-2'>
                                            <span class="material-symbols-outlined opacity-75">
                                                square_foot
                                            </span>
                                            <h6 class="area"></h6>
                                        </div>
                                        <p>Sq Ft</p>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md">
                                    <div>
                                        <div class='d-flex  align-items-center gap-2'>
                                            <i class="fa-light fa-calendar-days"></i>
                                            <h6 class="years"></h6>
                                        </div>
                                        <p>Year Built</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="about mt-5" id="section1">
                            <h4 class='my-3'>Description</h4>
                            <hr class='mb-3'>
                            <p class="description"></p>
                            <button class="view-more-btn ud-btn btn-primary border-0">View More</button>
                        </div>


                        <div class="address mt-5 pt-3" id="section2">
                            <div class="d-flex align-items-center justify-content-between my-3">
                                <h4>Address</h4>
                                <button class='ud-btn btn-primary border-0' id="map-btn">Open on Google Maps</button>
                            </div>
                            <hr>
                            <div class="row mt-4">
                                <div class="col-12 col-md address-col">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6>Address</h6>
                                        <p class="mb-2 address-address"></p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6>City</h6>
                                        <p class="mb-2 address-city"></p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6>State/county</h6>
                                        <p class="mb-2 address-state"></p>
                                    </div>
                                </div>
                                <div class="col-12 col-md address-col">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6>Zip/Postal Code</h6>
                                        <p class="mb-2 address-zip"></p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6>Neighborhood</h6>
                                        <p class="mb-2 address-area"></p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6>Country</h6>
                                        <p class="mb-2 address-country"></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="property-dtls mt-5" id="section3">
                            <div class="d-sm-flex align-items-center justify-content-between mt-3">
                                <h4>Details</h4>
                                <div class='d-flex align-items-center gap-2 mt-2 mt-sm-0'>
                                    <i class="fa-light fa-calendar-days"></i>
                                    <p class="updatedate mb-0"></p>
                                </div>
                            </div>
                            <hr>

                            <div class="box mt-4">
                                <div class="row mt-4">
                                    <div class="col-12 col-sm">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6>MLS&#174; Number:</h6>
                                            <p class="mb-2 listingid"></p>
                                        </div>
                                        <hr>

                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6>Price :</h6>
                                            <p class="mb-2 listprice"></p>
                                        </div>
                                        <hr>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6>Property Size :</h6>
                                            <p class="mb-2 propertysize"></p>

                                        </div>
                                        <hr>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6>Bedrooms :</h6>
                                            <p class="mb-2 bedroom"></p>
                                        </div>
                                        <hr>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6>Bathroom :</h6>
                                            <p class="mb-2 bathroom"></p>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="col-12 col-sm">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6>Garage :</h6>
                                            <p class="mb-2 garage"></p>
                                        </div>
                                        <hr>
                                        {{-- <div class="d-flex align-items-center justify-content-between">
                                            <h6>Garage Size :</h6>
                                            <p class="mb-2 garazesize"></p>
                                        </div>
                                        <hr> --}}
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6>Year Built :</h6>
                                            <p class="mb-2 years"></p>
                                        </div>
                                        <hr>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6>Property Type :</h6>
                                            <p class="mb-2 propertytype"></p>
                                        </div>
                                        <hr>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6>Property SubType :</h6>
                                            <p class="mb-2 propertysubtype"></p>
                                        </div>
                                        <hr>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6>Property Status :</h6>
                                            <p class="mb-2 buildingtype"></p>
                                        </div>
                                        <hr>
                                    </div>
                                </div>

                            </div>
                            <div class="address mt-5 p-0" id="additionalDetails">
                                <div class="d-flex align-items-center justify-content-between my-3">
                                    <h4>Additional Details</h4>

                                </div>
                                <hr>
                                <div class="row mt-4">
                                    <div class="col-12 col-sm">
                                        <div class="align-items-center justify-content-between">
                                            <h6 class="depo"></h6>
                                            <p class="text-start mb-2 deposit"></p>
                                        </div>
                                        <hr>

                                        <div class="align-items-center justify-content-between">
                                            <h6 class="pool"></h6>
                                            <p class="text-start mb-2 poolsize"></p>
                                        </div>
                                        <hr>
                                        <div class="align-items-center justify-content-between">
                                            <h6 class="remodel"></h6>
                                            <p class="text-start mb-2 parking"></p>
                                        </div>
                                        <hr>
                                        @if ($propertyDetails['PropertyType'] == 'Residential')
                                            <div class="align-items-center justify-content-between">
                                                <h6 class="aircon"></h6>
                                                <p class="text-start mb-2 aircond"></p>
                                            </div>
                                            <hr>
                                        @endif
                                    </div>

                                    <div class="col-12 col-sm">
                                        @if ($propertyDetails['PropertyType'] == 'Residential')
                                            <div class="align-items-center justify-content-between">
                                                <h6 class="storey"></h6>
                                                <p class="text-start mb-2 stories"></p>
                                            </div>
                                            <hr>
                                        @endif
                                        <div class="align-items-center justify-content-between">
                                            <h6 class="additional"></h6>
                                            <p class="text-start mb-2 additionalroom"></p>
                                        </div>
                                        <hr>
                                        <div class="align-items-center justify-content-between">
                                            <h6 class="equip"></h6>
                                            <p class="text-start mb-2 equipment"></p>
                                        </div>
                                        <hr>
                                        <div class="align-items-center justify-content-between">
                                            <h6 class="amenitites"></h6>
                                            <p class="text-start mb-2 clubhouse"></p>
                                        </div>
                                        <hr>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="feature mt-5" id="section4">
                            <h4>Features</h4>
                            <hr class='my-4'>
                            <div class="row" id="featuresContainer">
                            </div>
                        </div>


                        <div class="floor mt-5" id="section5">
                            <h4>Floor Plans</h4>
                            <hr class="my-4">
                        </div>


                        <div class="mortgage-calc my-5" id="section13">
                            <h4>Mortgage Calculator</h4>
                            <hr class='mt-4 mb-3'>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="mortgage-circle">
                                        <div class="mortgage-price"></div>
                                        <canvas id="mortgage-chart"></canvas>
                                    </div>

                                </div>
                                <div class="col-12 col-sm-6 mt-5 mt-sm-0">
                                    <div class='d-flex align-items-center val  justify-content-between w-100'>
                                        <div class='d-flex align-items-center gap-2'>
                                            <div class="badge"></div>
                                            <h6>Down Payment</h6>
                                        </div>
                                        <p id="downPayment">$0.00</p>
                                    </div>
                                    <hr>
                                    <div class='d-flex align-items-center val  justify-content-between w-100'>

                                        <div class='d-flex align-items-center gap-2'>
                                            <div class="badge"></div>
                                            <h6>Loan Amount</h6>
                                        </div>
                                        <p id="loanAmount">$0.00</p>
                                    </div>
                                    <hr>
                                    <div class='d-flex align-items-center val  justify-content-between w-100'>


                                        <div class='d-flex align-items-center gap-2'>
                                            <div class="badge red"></div>
                                            <h6>Monthly Mortgage Payment</h6>
                                        </div>

                                        <p id="monthlyPayment">$0.00</p>
                                    </div>
                                    <hr>
                                    <div class='d-flex align-items-center val  justify-content-between w-100'>
                                        <div class='d-flex align-items-center gap-2'>
                                            <div class="badge blue"></div>
                                            <h6>Property Tax</h6>
                                        </div>
                                        <p id="propertyTax">$0.00</p>
                                    </div>
                                    <hr>
                                    <div class='d-flex align-items-center val  justify-content-between w-100'>
                                        <div class='d-flex align-items-center gap-2'>
                                            <div class="badge yellow"></div>
                                            <h6>Home Insurance</h6>
                                        </div>
                                        <p id="homeInsurance">$0.00</p>
                                    </div>
                                    <hr>
                                    <div class='d-flex align-items-center val  justify-content-between w-100'>
                                        <div class='d-flex align-items-center gap-2'>
                                            <div class="badge d-green"></div>
                                            <h6>PMI</h6>

                                        </div>
                                        <p id="pmi">$0.00</p>
                                    </div>
                                    <hr>
                                    <div class='d-flex align-items-center val  justify-content-between w-100'>
                                        <div class='d-flex align-items-center gap-2'>
                                            <div class="badge green"></div>
                                            <h6>Monthly HOA Fees</h6>


                                        </div>
                                        <p id="monthlyHoaFees">$0.00</p>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <div class="row mt-5 mt-sm-3 inputs">
                                <div class="col-6 col-sm-4">
                                    <h6>Total Amount</h6>
                                    <div class="inp">
                                        <div class="icons">$</div>
                                        <input type="text" id="totalAmount"
                                            value="{{ $propertyDetails['ListPrice'] }}">

                                    </div>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <h6>Down Payment</h6>
                                    <div class="inp">
                                        <div class="icons">%</div>
                                        <input type="text" id="downPaymentPercentage"
                                            value="{{ env('DOWN_PAYMENT_PERCENTAGE', '20') }}" class="percentage">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 mt-4 mt-sm-0">
                                    <h6>Interest Rate</h6>
                                    <div class="inp">
                                        <div class="icons">%</div>
                                        <input type="text" id="interestRate" value="{{ env('INTEREST_RATE', '5') }}"
                                            class="percentage">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 mt-4">
                                    <h6>Loan Terms (Years)</h6>
                                    <div class="inp">
                                        <div class="icons"><i class="fa-light fa-calendar-days"></i></div>
                                        <input type="text" id="loanTermYears" name="loanTermYears" min="1"
                                            max="99" maxlength="2" required
                                            value="{{ env('LOAN_TERM_YEARS', '20') }}">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 mt-4">
                                    <h6>Property Tax</h6>
                                    <div class="inp">
                                        <div class="icons">%</div>
                                        <input type="text" id="propertyTaxPercentage" value="0"
                                            class="percentage">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 mt-4">
                                    <h6>Home Insurance</h6>
                                    <div class="inp">
                                        <div class="icons">$</div>
                                        <input type="text" id="homeInsuranceAmount" value="0">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 mt-4">
                                    <h6>Monthly HOA Fees</h6>
                                    <div class="inp">
                                        <div class="icons">$</div>
                                        <input type="text" id="monthlyHoaFeesAmount" value="0">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 mt-4">
                                    <h6>PMI</h6>
                                    <div class="inp">
                                        <div class="icons">%</div>
                                        <input type="text" id="pmiPercentage" value="0" class="percentage">
                                    </div>
                                </div>
                            </div>

                        </div>


                        {{-- <div class="video my-5" id="section6">
                            <h4>Video</h4>
                            <hr class='mt-4 mb-3'>
                            <div class="vdo">
                                <img id="videoThumbnail" src="" alt="">
                                <button id="playButton"><i class="ri-play-fill text-white"></i></button>
                            </div>
                        </div> --}}

                        <div class="Virtual" id="section7">
                            <h4>360° Virtual Tour</h4>
                            <hr class="mt-4 mb-3">
                            <div id="virtualTourContainer">
                                <!-- Embedded iframe will be placed here -->
                            </div>
                        </div>


                        <div class='Walk-Score my-5' id="section8">
                            <h4>Walk Score</h4>
                            <hr class='mt-4 mb-3'>
                            <div id='ws-walkscore-tile'></div>
                        </div>

                        <div class='What-Nearby my-5' id="section9">
                            <div class='d-flex align-items-center justify-content-between '>
                                <h4>What's Nearby?</h4>
                                <p>Powered by <span>Yelp</span></p>
                            </div>
                            <hr class='mt-4 mb-3'>
                            <ul class="nav neary nav-pills" id="pills-tab" role="tablist">
                                <?php
                                $categories = [];
                                foreach ($business as $place) {
                                    foreach ($place['categories'] as $category) {
                                        $alias = $category['alias'];
                                        $title = $category['title'];
                                
                                        if (!in_array($alias, $categories) && count($place['categories']) === 1 && strpos(strtolower($title), 'bar') === false && strpos(strtolower($title), 'pub') === false) {
                                            $categories[$alias] = ['title' => $title, 'count' => 0];
                                        }
                                    }
                                }
                                
                                foreach ($business as $place) {
                                    foreach ($place['categories'] as $category) {
                                        $alias = $category['alias'];
                                        if (isset($categories[$alias])) {
                                            $categories[$alias]['count']++;
                                        }
                                    }
                                }
                                
                                foreach ($categories as $alias => $category) {
                                    echo '<li class="nav-item" role="presentation">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <button class="nav-link' .
                                        ($alias === key($categories) ? ' active' : '') .
                                        '" id="pills-' .
                                        $alias .
                                        '-tab" data-bs-toggle="pill" data-bs-target="#pills-' .
                                        $alias .
                                        '" type="button" role="tab" aria-controls="pills-' .
                                        $alias .
                                        '" aria-selected="' .
                                        ($alias === key($categories) ? 'true' : 'false') .
                                        '">' .
                                        $category['title'] .
                                        ' (' .
                                        $category['count'] .
                                        ')</button>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </li>';
                                }
                                ?>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <?php
                                foreach ($categories as $alias => $category) {
                                    echo '<div class="tab-pane fade' .
                                        ($alias === key($categories) ? ' show active' : '') .
                                        '" id="pills-' .
                                        $alias .
                                        '" role="tabpanel" aria-labelledby="pills-' .
                                        $alias .
                                        '-tab" tabindex="0">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <div class="map mt-0" id="map-' .
                                        $alias .
                                        '"></div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>';
                                }
                                ?>
                            </div>
                        </div>
                        <h4 class='data-text'>Data provided by: Pillar 9™</h4>

                        {{-- <div class='lev-rev' id="section14">
                            <div class="leave-rev m-0">
                                <h6>Leave A Review</h6>
                                <hr class='mt-4 mb-3'>
                                <form id="reviewForm">
                                    <div class="row my-3">
                                        <div class="col-6">
                                            <h5>First Name<span style="color: red;">*</span></h5>
                                            <input type="text" id="reviewfirstname" placeholder="First name"
                                                name="title-first">
                                        </div>

                                        <div class="col-6">
                                            <h5>Last Name<span style="color: red;">*</span></h5>
                                            <input type="text" id="reviewlastname" placeholder="Last name"
                                                name="title-last">
                                        </div>
                                    </div>
                                    <input type="hidden" id="reviewname" name="title">
                                    <div>
                                     
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-6">
                                            <h5>Email<span style="color: red;">*</span></h5>
                                            <input type="email" placeholder="Enter your email" name="review_from">
                                        </div>

                                        <div class="col-6">
                                            <h5>Rating <span style="color: red;">*</span></h5>
                                            <div class="input-2 ">
                                                <select name="rating" class="select-boxes-filter">
                                                    <option value="">Select</option>
                                                    <option value="1">1 Star - Poor</option>
                                                    <option value="2">2 Star - Fair</option>
                                                    <option value="3">3 Star - Average</option>
                                                    <option value="4">4 Star - Good </option>
                                                    <option value="5">5 Star - Excellent</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h5>Review<span style="color: red;">*</span></h5>
                                        <textarea placeholder="Write a review" name="review" cols="30" rows="10" maxlength="200"></textarea>
                                    </div>
                                    <button type="submit" id="reviewsubmit"
                                        class="ud-btn mt-3 btn-primary border-0  blue-btn">Submit
                                        Review</button>
                                </form>
                            </div>
                        </div> --}}
                        @php
                            $frontendUrl = env('FRONTEND_URL', 'https://repincbeta.site');
                        @endphp
                        <div class='Similar-Listings my-5' id="section12">
                            <h4>Similar Listings</h4>
                            <hr class='mt-4 mb-3'>
                            <div class="row">
                                <?php if (!empty($similarListings)): ?>
                                @foreach ($similarListings as $listing)
                                    <!-- 14/10 -->
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="listing-style5">
                                            <div class="list-thumb">
                                                <a
                                                    href="{{ env('BASE_URL') }}/property-detail/{{ $listing['slug_url'] ?? $listing['ListingId'] }}">
                                                    <img src="{{ $listing['image_url'] }}"
                                                        alt="{{ $listing['ListingId'] }}"
                                                        onerror="this.src='{{ $frontendUrl }}/images/no_image.jpg';"></a>
                                                @if ($listing['diamond'] == 1)
                                                    <div class="list-tag fz12">
                                                        <i class="fa-thin fa-gem me-2"></i>Diamond
                                                    </div>
                                                @elseif ($listing['featured'] == 1)
                                                    <div class="list-tag fz12">
                                                        <i class="fa-thin fa-star me-2"></i>Exclusive
                                                    </div>
                                                @endif

                                                <div class="list-meta2">
                                                    <a href="javascript:void(0)" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Favourite" class="set-as-fav"
                                                        onclick="toggleFavorites('<?php echo $listing['ListingId']; ?>')">
                                                        <span class="flaticon-like"
                                                            id="fav-icon-<?php echo $listing['ListingId']; ?>"></span>
                                                    </a>

                                                </div>
                                            </div>
                                            <a
                                                href="{{ env('BASE_URL') }}/property-detail/{{ $listing['slug_url'] ?? $listing['ListingId'] }}">
                                                <div class="list-content">
                                                    @php
                                                        $isCommercial = $listing['PropertyType'] === 'Commercial';
                                                    @endphp

                                                    <div class="list-price mb-2">
                                                        @if ($isCommercial && !empty($listing['LeaseAmount']) && !empty($listing['LeaseAmountFrequency']))
                                                            ${{ number_format($listing['LeaseAmount']) }} /
                                                            {{ $listing['LeaseAmountFrequency'] }}
                                                            @if (!empty($listing['LeaseMeasure']))
                                                                / {{ $listing['LeaseMeasure'] }}
                                                            @endif
                                                        @else
                                                            {{-- Fallback to List Price --}}
                                                            ${{ number_format($listing['ListPrice']) }}
                                                        @endif
                                                    </div>


                                                    @if (empty($listing['StreetNumber']) && empty($listing['StreetName']))
                                                        <h6 class="list-title">
                                                            {{ $listing['City'] }}, {{ $listing['StateOrProvince'] }}
                                                        </h6>
                                                    @else
                                                        <h6 class="list-title">

                                                            {{ $listing['UnitNumber'] ? $listing['UnitNumber'] . ', ' : '' }}{{ $listing['StreetNumber'] }}
                                                            {{ $listing['StreetName'] }} {{ $listing['StreetSuffix'] }}
                                                            {{ $listing['StreetDirSuffix'] }}, {{ $listing['City'] }},
                                                            {{ $listing['StateOrProvince'] }}

                                                        </h6>
                                                    @endif
                                                    <p class="list-text">
                                                        {{ in_array($listing['PropertySubType'], ['Apartment', 'Row/Townhouse']) ? 'Condo' : $listing['PropertyType'] }}
                                                    </p>
                                                    <div class="list-meta d-flex align-items-center gap-3">
                                                        @if ($listing['BedroomsTotal'])
                                                            <p><span
                                                                    class="flaticon-bed"></span>{{ $listing['BedroomsTotal'] }}
                                                                bed</p>
                                                        @endif

                                                        @if ($listing['BathroomsFull'] || $listing['BathroomsHalf'])
                                                            <p>
                                                                <span class="flaticon-shower"></span>
                                                                {{ $listing['BathroomsFull'] ?: 0 }}
                                                                @if ($listing['BathroomsHalf'] > 0)
                                                                    .{{ $listing['BathroomsHalf'] }}
                                                                @endif
                                                                bath{{ $listing['BathroomsFull'] + $listing['BathroomsHalf'] > 1 ? 's' : '' }}
                                                            </p>
                                                        @endif


                                                        @if ($listing['BuildingAreaTotalSF'])
                                                            <p><span
                                                                    class="flaticon-expand"></span>{{ floor($listing['BuildingAreaTotalSF']) }}
                                                                sqft</p>
                                                        @elseif($listing['LivingAreaSF'])
                                                            <p><span
                                                                    class="flaticon-expand"></span>{{ floor($listing['LivingAreaSF']) }}
                                                                sqft</p>
                                                        @endif
                                                    </div>

                                                    <span class="mlsNumber">MLS® Number:
                                                        {{ $listing['ListingId'] }}</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                                <?php else: ?>
                                <script>
                                    document.getElementById('section12').style.display = 'none';
                                    $('.similerlisting').hide();
                                </script>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-md-8 col-lg-6 col-xl-4  sticky-wrapper">
                        <div class=" profile-sec sticky-tour">

                            <div class="sticky-div fixedElement">

                                <div class="contact-tour">
                                    <ul class="nav row nav-pills mb-1 mt-3 d-flex justify-content-between" id="pills-tab"
                                        role="tablist">
                                        <li class="nav-item col-6 " style="padding-right: 2px;" role="presentation">
                                            <button class="nav-link ud-btn btn-primary" id="pills-tour-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-tour" type="button"
                                                role="tab" aria-controls="pills-tour" aria-selected="true">Schedule a
                                                Tour</button>
                                        </li>
                                        <li class="nav-item tabs col-6" style="padding-left: 2px;" role="presentation">
                                            <button class="  nav-link active ud-btn  " id="pills-contact-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-contact" type="button"
                                                role="tab" aria-controls="pills-contact"
                                                aria-selected="false">Contact Info
                                            </button>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade" id="pills-tour" role="tabpanel"
                                            aria-labelledby="pills-tour-tab" tabindex="0">

                                            <!-- <h4>Schedule A Tour</h4> -->

                                            <div id="dateSlotsContainer"></div>

                                            <div class="slider-container">
                                                <button class="slider-button left-arr" onclick="prevDates()"><i
                                                        class="ri-arrow-left-s-line"></i></button>
                                                <button class="slider-button right-arr" onclick="nextDates()"><i
                                                        class="ri-arrow-right-s-line"></i></button>
                                            </div>

                                            <!-- <h6 class="fw-bold mt-4">Tour Type</h6>
                                                    <ul class="nav row nav-pills mb-3 mt-3 d-flex justify-content-between" id="pills-tab" role="tablist">
                                                        <li class="nav-item col-6 " style="padding-right: 2px;" role="presentation">
                                                            <button class="nav-link active ud-btn btn-primary" id="pills-home-tab"
                                                                onclick="setTourType('In Person')" type="button" role="tab" aria-controls="pills-home"
                                                                aria-selected="true">In Person</button>
                                                        </li>
                                                        <li class="nav-item tabs col-6" style="padding-left: 2px;" role="presentation">
                                                            <button class="nav-link ud-btn btn-primary" id="pills-profile-tab"
                                                                onclick="setTourType('Video Chat')" type="button" role="tab" aria-controls="pills-profile"
                                                                aria-selected="false">Video Chat</button>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content" id="pills-tabContent">
                                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                                                            tabindex="0">
                                                      
                                                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                                                aria-labelledby="pills-profile-tab" tabindex="0">...s</div>

                                                        </div>

                                                    </div> -->
                                            <div>
                                                <form id="tourForm">
                                                    @csrf
                                                    {{-- <input type="hidden" name="tour_type" id="tourTypeInput" value=""> --}}

                                                    <input type="hidden" name="agent_name"
                                                        value="{{ isset($propertyDetails['ListAgentFullName']) ? $propertyDetails['ListAgentFullName'] : 'Myproagent' }}">
                                                    <input type="hidden" name="agent_email"
                                                        value="{{ isset($propertyDetails['ListAgentEmail']) ? $propertyDetails['ListAgentEmail'] : 'Myproagent' }}">

                                                    <input type="hidden" name="property_address"
                                                        value="{{ $propertyDetails['PropertyType'] ?? '' }} {{ $propertyDetails['TransactionType'] ?? '' }} in {{ $propertyDetails['City'] ?? '' }}, {{ $propertyDetails['StateOrProvince'] ?? '' }}">

                                                    <div class="input">
                                                        <input type="text" id="timeInput" placeholder="Time*"
                                                            name="time">
                                                        <i class="ri-expand-up-down-line opacity-50"></i>
                                                    </div>
                                                    <div id="timeInput-error" class="error"></div>
                                                    <div class="input mt-2">
                                                        <input type="text" id="tourname" placeholder="First Name*"
                                                            name="first_name">
                                                    </div>

                                                    <div class="input mt-2">
                                                        <input type="text" id="lasttourname" placeholder="Last Name*"
                                                            name="last_name">
                                                    </div>
                                                    <input type="hidden" id="tournames" name="name">
                                                    <div class="input mt-2">
                                                        <input type="text" id="tourphone" placeholder="Phone*"
                                                            name="phone">
                                                    </div>

                                                    <div class="input mt-2">
                                                        <input type="email" placeholder="Email*" name="email">
                                                    </div>

                                                    <div class="input mt-2">
                                                        <select name="role" class="select-boxes-filter cursor-pointer">
                                                            <option value="" aria-placeholder="">I'm a*</option>
                                                            <option value="First time buyer">First time buyer</option>
                                                            <option value="Repeat buyer">Repeat buyer</option>
                                                            <option value="Seller">Seller</option>
                                                            <option value="Residential investor">Residential investor
                                                            </option>
                                                            <option value="Commercial investor">Commercial investor
                                                            </option>
                                                            <option value="Commercial buyer/leaser">Commercial buyer/leaser
                                                            </option>
                                                            <option value="Land of development">Land of development
                                                            </option>
                                                        </select>

                                                    </div>

                                                    <textarea class="mt-2 txt-area " cols="42" rows="3" placeholder="Enter your Message"
                                                        id="messageTextarea" name="message"></textarea>
                                                    <input type="hidden" id="selectedDateInput" name="selectedDate"
                                                        value="">
                                                    <div class="chkbox">
                                                        <div class="mt-1 d-flex align-items-cente gap-2">
                                                            <input class="checkbox opacity-50" type="checkbox"
                                                                name="terms" id="termsCheckbox">
                                                            <!-- Ensure the name attribute is set -->
                                                            <p class="mb-0 fw-bold">I agree to <a
                                                                    href="/terms-and-conditions"
                                                                    class='text-decoration-none'><span
                                                                        class='px-1 fs-6'>Terms of Use</span></a></p>
                                                        </div>

                                                        <!-- Error message placeholder for the terms checkbox -->
                                                        <div id="termsCheckbox-error" class="error"></div>
                                                        <!-- This div will hold the error message -->

                                                        <div class="d-grid mt-2">
                                                            <button id="SubmitBtn" class="ud-btn btn-primary border-0"
                                                                type="submit">Submit a
                                                                Tour
                                                                Request</button>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>

                                        <div class="tab-pane fade show active" id="pills-contact" role="tabpanel"
                                            aria-labelledby="pills-contact-tab" tabindex="1">
                                            <div class="contact-info" id="section10">


                                                <div class=' sm-align-items-start gap-3   d-sm-flex '>
                                                    <div class="profile">
                                                        <img src="" alt="" class="agent-img">
                                                    </div>
                                                    <div>
                                                        <div class='pro-info mt-3 mt-sm-0'>
                                                            <div class='d-flex align-items-center gap-2'><i
                                                                    class="ri-user-line fw-bold"></i>
                                                                <p class="agentname"></p>
                                                            </div>
                                                        </div>
                                                        <div class=' '>
                                                            <div><i class="ri-phone-line"></i>
                                                                <span><a class="phoneno" href="tel:"></a></span>
                                                            </div>
                                                            <div><i class="ri-smartphone-line"></i>
                                                                <span><a class="contactno" href="tel:"></a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class='d-flex align-items-center justify-content-between  w-100'>
                                                    <h4 class='mt-3'>Enquire About This Property</h4>

                                                    <a id="viewListingsLink" class='' href="">View
                                                        Listings</a>
                                                </div>
                                                <hr class='mt-2 mb-0'>
                                                <div class="leave-rev mb-0 mt-0">
                                                    <form id="contactForm">
                                                        @csrf
                                                        <div class="row mb-2">
                                                            <input type="hidden" name="prorealtorname"
                                                                value="{{ isset($propertyDetails['ListAgentFullName']) ? $propertyDetails['ListAgentFullName'] : 'Myproagent' }}">
                                                            <input type="hidden" name="prorealtoremail"
                                                                value="{{ isset($propertyDetails['ListAgentEmail']) ? $propertyDetails['ListAgentEmail'] : 'Myproagent' }}">
                                                            <input type="hidden" name="property_type" value="">

                                                            <div class="col-12 ">
                                                                <!-- <h5>First Name<span style="color: red;">*</span></h5> -->
                                                                <input type="text" id="contactfirstname"
                                                                    placeholder="First Name*" name="first_names">
                                                            </div>
                                                            <div class="col-12 ">
                                                                <!-- <h5>Last Name<span style="color: red;">*</span></h5> -->
                                                                <input type="text" id="contactlastname"
                                                                    placeholder="Last Name*" name="last_names">
                                                            </div><br><br>
                                                            <input type="hidden" id="contactname" name="name">
                                                            <div class="col-12">
                                                                <!-- <h5>Phone<span style="color: red;">*</span></h5> -->
                                                                <input type="text" id="contactphone"
                                                                    placeholder="Phone*" name="phone">
                                                            </div>
                                                            <div class="col-12">
                                                                <!-- <h5>Email<span style="color: red;">*</span></h5> -->
                                                                <input type="text" placeholder="Email*"
                                                                    name="email">
                                                            </div>

                                                            <div class="col-12">
                                                                <!-- <h5>I'm a <span style="color: red;">*</span></h5> -->
                                                                <div class="input-2 ">
                                                                    <select name="role"
                                                                        class="select-boxes-filter cursor-pointer">
                                                                        <option value="">I'm a*</option>
                                                                        <option value="First time buyer">First time buyer
                                                                        </option>
                                                                        <option value="Repeat buyer">Repeat buyer</option>
                                                                        <option value="Seller">Seller</option>
                                                                        <option value="Residential investor">Residential
                                                                            investor
                                                                        </option>
                                                                        <option value="Commercial investor">Commercial
                                                                            investor</option>
                                                                        <option value="Commercial buyer/leaser">Commercial
                                                                            buyer/leaser
                                                                        </option>
                                                                        <option value="Land of development">Land of
                                                                            development</option>
                                                                    </select>
                                                                </div>
                                                                <div id="roleerror"></div>
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <!-- <h5>Message<span style="color: red;">*</span></h5> -->
                                                            <textarea placeholder="Enter your message*" class='mt-0' id="contactmessageTextarea" name="message"
                                                                cols="30" rows="3" maxlength="200"></textarea>
                                                        </div>
                                                        <div class="chkbox">
                                                            <div class="mt-1 d-flex align-items-cente gap-2"> <input
                                                                    class="checkbox opacity-50" type="checkbox"
                                                                    name="term" id="termCheckbox">
                                                                <p class="mb-0 fw-bold">I agree to <a
                                                                        href="/terms-and-conditions"
                                                                        class='text-decoration-none'><span
                                                                            class='px-1 fs-6'>Terms of
                                                                            Use</span></a></p>
                                                            </div>
                                                        </div>
                                                        <div id="checkbx"></div>
                                                        <button type="submit" id="contactsubmit"
                                                            class="ud-btn w-100 btn-primary mt-2 border-0">Request
                                                            Information</button>
                                                    </form>
                                                </div>
                                            </div>


                                        </div>

                                    </div>

                                </div>



                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Enquire About This Property</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body ">
                            <div class="card">
                                <div class="card-body">
                                    <form id="contactpopup">
                                        <div class="row row-gap-3">
                                            <input type="hidden" name="prorealtorname"
                                                value="{{ isset($propertyDetails['ListAgentFullName']) ? $propertyDetails['ListAgentFullName'] : 'Myproagent' }}">
                                            <input type="hidden" name="prorealtoremail"
                                                value="{{ isset($propertyDetails['ListAgentEmail']) ? $propertyDetails['ListAgentEmail'] : 'Myproagent' }}">
                                            <input type="hidden" name="property_type" value="">
                                            <div class="col-md-6">
                                                <h5>First Name<span style="color: red;">*</span></h5>
                                                <input class="input-2" type="text" id="contactfirstnames"
                                                    placeholder="First Name" name="first_names">
                                            </div>
                                            <div class="col-md-6">
                                                <h5>Last Name<span style="color: red;">*</span></h5>
                                                <input class="input-2" type="text" id="contactlastnames"
                                                    placeholder="Last Name" name="last_names">
                                            </div>
                                            <input type="hidden" id="contactpopupname" name="name">
                                            <div class="col-md-6">
                                                <h5>Phone<span style="color: red;">*</span></h5>
                                                <input class="input-2" type="text" id="contactphones"
                                                    placeholder="Enter your Phone" name="phone">
                                            </div>
                                            <div class="col-md-6">
                                                <h5>I'm a <span style="color: red;">*</span></h5>
                                                <div class="input-2 ">
                                                    <select name="role" class="select-boxes-filter cursor-pointer">
                                                        <option value="">Select</option>
                                                        <option value="First time buyer">First time buyer</option>
                                                        <option value="Repeat buyer">Repeat buyer</option>
                                                        <option value="Seller">Seller</option>
                                                        <option value="Residential investor">Residential investor
                                                        </option>
                                                        <option value="Commercial investor">Commercial investor</option>
                                                        <option value="Commercial buyer/leaser">Commercial buyer/leaser
                                                        </option>
                                                        <option value="Land of development">Land of development</option>
                                                    </select>
                                                </div>
                                                <div id="poproleerror"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <h5>Email<span style="color: red;">*</span></h5>

                                                <input class="input-2" type="text" placeholder="Enter your Email"
                                                    name="email">

                                            </div>

                                            <div class="col-md-12">
                                                <h5>Message<span style="color: red;">*</span></h5>
                                                <textarea placeholder="Enter your message" id="contactpopupmessageTextarea" name="message" cols="30"
                                                    rows="3" maxlength="200"></textarea>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="mt-1 d-flex align-items-cente gap-2"> <input
                                                        class="checkbox opacity-50" type="checkbox" name="term"
                                                        id="">
                                                    <p class="mb-0 fw-bold">I agree to <a href="/terms-and-conditions"
                                                            class='text-decoration-none'><span class='px-1 fs-6'>Terms of
                                                                Use</span></a></p>
                                                </div>
                                                <div id="popcheckbx"></div>
                                            </div><br>
                                            <div class="col-md-12 text-center">
                                                <button type="submit" id="contactpopupbutton"
                                                    class="ud-btn btn-primary mt-3 border-0">
                                                    Request Information
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
            <div class="modal" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class='d-flex align-items-center justify-content-between w-100 mb-1 px-2 px-sm-3'>
                                <img class='logo' src="{{ asset('images/logo.svg') }}" alt="">
                                <div class='d-flex gap-2 align-items-center justify-content-between'>
                                    <div class="submitBoxWidth dektop">
                                        <div class="d-flex align-items-center justify-content-end mt-2 mt-md-0 me-2">
                                            <button class="ud-btn btn-thm"
                                                style="
                                              width: 301px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 34px;
    cursor: pointer;
    background-color: #10579f;
    color: #fff;
    border: none;
    border-radius: 8px;
    font-size: 10px;"
                                                type="button" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop">Contact
                                                REALTOR<span>&#174;</span></button>
                                        </div>
                                    </div>
                                    <p class='hover-elem mb-0'>
                                        <i class="flaticon-like cursor-pointer hover-elem" id="fav-icon"
                                            onclick='toggleFavorite()'></i>
                                        Favorite
                                    </p>

                                    <div class="dropdown mt-1">
                                        <p class="ri-share-line icons hover-elem" id="shareimage"
                                            onclick="toggleDropdown('shareimageDropdown')">

                                            Share
                                        </p>
                                        <div class="dropdown-menu" id="shareimageDropdown" style="display: none;">
                                            <a onclick="share('facebook')"><i class="ri-facebook-fill"></i> Share on
                                                Facebook</a>
                                            <a onclick="share('whatsapp')"><i class="ri-whatsapp-fill"></i> Share on
                                                WhatsApp</a>
                                            <a onclick="share('email')"><i class="ri-mail-fill"></i> Share via Email</a>
                                            <a onclick="share('linkedin')"><i class="ri-linkedin-fill"></i> Share on
                                                LinkedIn</a>
                                            <a onclick="share('twitter')"><i class="ri-twitter-fill"></i> Share on
                                                Twitter</a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <button type="button" class="btn-close m-0" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class='mbl_btn'>
                            <div class='d-flex justify-content-end px-3 mt-2'>
                                <button class="ud-btn btn-thm"
                                    style="
                                            width: 137px;
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;
                                            height: 34px;
                                            cursor: pointer;
                                            background-color: #10579f;
                                            color: #fff;
                                            border: none;
                                            border-radius: 4px;
                                            font-size: 10px;"
                                    type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Contact
                                    REALTOR<span>&#174;</span></button>
                            </div>
                        </div>
                        <div class="modal-body overflow-hidden">
                            <div id="carouselExample" class="carousel h-100 slide">
                                <div class="carousel-inner h-100">
                                    @php
                                        $baseUrl = env('BACKEND_URL');
                                        $images = $propertyDetails['images'] ?? [];
                                    @endphp

                                    @if (count($images) > 0)
                                        @foreach ($images as $index => $image)
                                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                                <img src="{{ $image }}" alt="Image {{ $index }}">
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="carousel-item active">
                                            <img src="{{ asset('images/no_image.jpg') }}" alt="Default Image">
                                        </div>
                                    @endif
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <script>
                var listingId = "{{ $propertyDetails['ListingId'] }}";
                var favIcon = document.getElementById(`fav-icon`);
                var session = "{{ session('username') }}";
                if (session) {

                    var isfav = "{{ $propertyDetails['is_favorite'] }}";
                    // console.log(isfav);
                    if (isfav == true) {
                        favIcon.querySelector("i").classList.remove("ri-heart-line");
                        favIcon.querySelector("i").classList.add("fa-solid", "fa-heart", "red-background");
                    }
                }

                // function setTourType(type) {
                //     document.getElementById('tourTypeInput').value = type;
                // }

                function toggleDropdown(dropdownId) {
                    var dropdown = document.getElementById(dropdownId);
                    if (dropdown.style.display === 'none' || dropdown.style.display === '') {
                        dropdown.style.display = 'block';
                    } else {
                        dropdown.style.display = 'none';
                    }
                }
                window.addEventListener('click', function(event) {
                    if (!event.target.matches('.icons')) {
                        var dropdown = document.getElementById('shareimageDropdown');
                        dropdown.style.display = 'none';
                    }
                });

                function share(platform) {
                    const propertyUrl = window.location.href;
                    const imageUrl = document.querySelector('.carousel-item.active img').getAttribute('src');
                    var shareUrl = '';
                    var message = '';
                    const emailBody = 'I thought you might be interested in this link: ' + propertyUrl;
                    switch (platform) {
                        case 'facebook':
                            shareUrl = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(propertyUrl);
                            break;
                        case 'whatsapp':
                            message = 'Check out this image: ' + imageUrl + '\n\nProperty URL: ' + propertyUrl;
                            shareUrl = 'whatsapp://send?text=' + encodeURIComponent(message);
                            break;
                        case 'email':
                            var subject = 'Check out this image';
                            var body = 'Hi,\n\nI thought you might like this image: ' + imageUrl + '\n\nProperty URL: ' +
                                propertyUrl;
                            shareUrl = 'mailto:?subject=' + encodeURIComponent(subject) + '&body=' + encodeURIComponent(body);
                            break;
                        case 'linkedin':
                            shareUrl = 'https://www.linkedin.com/shareArticle?mini=true&url=' + encodeURIComponent(propertyUrl) +
                                '&summary=' + encodeURIComponent(emailBody);
                            break;
                        case 'twitter':
                            shareUrl = 'https://twitter.com/share?url=' + encodeURIComponent(propertyUrl) + '&text=' +
                                encodeURIComponent(emailBody);
                            break;
                        default:
                            return;
                    }

                    window.open(shareUrl, '_blank');
                }

                document.addEventListener("DOMContentLoaded", function() {
                    const img = document.querySelector('.image-container img');
                    const arrowButtons = document.querySelectorAll('.left-arr');

                    if (!img || !img.complete || img.naturalWidth === 0) {
                        arrowButtons.forEach(button => button.classList.add('no-image'));
                    }

                    if (currentIndex <= 0) {
                        arrowButtons.forEach(button => button.style.opacity = '0.5');
                    }
                });


                function scrollToSection(sectionId) {
                    const section = document.getElementById(sectionId);

                    if (section) {
                        const offset = -250;
                        $('#pills-contact-tab').click()

                        const scrollOptions = {
                            behavior: 'smooth',
                            block: 'start',
                            inline: 'nearest'
                        };

                        window.scrollTo({
                            top: section.offsetTop - offset,
                            ...scrollOptions
                        });
                    }
                }

                const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September",
                    "October", "November", "December"
                ];
                const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
                const dateSlots = [];
                let currentIndex = 0;

                function daysInThisMonth(now) {
                    return new Date(now.getFullYear(), now.getMonth() + 1, 0).getDate();
                }

                function setDates() {
                    const currentDate = new Date();
                    const totalDays = 365;

                    for (let index = 0; index <= totalDays; index++) {
                        const today = addDayToCurrentDate(index);
                        const year = today.getFullYear();
                        const dayNames = today.getDay();
                        const month = today.getMonth();
                        const day = String(today.getDate()).padStart(2, '0');
                        const dayName = days[dayNames];
                        const months = monthNames[month];
                        let obj = {
                            "day": day,
                            "dayName": dayName,
                            "month": months,
                            "year": year,
                            "monthNum": String(month + 1).padStart(2, '0'),
                        };
                        dateSlots.push(obj);
                    }
                }

                function addDayToCurrentDate(days) {
                    let currentDate = new Date();
                    return new Date(currentDate.setDate(currentDate.getDate() + days));
                }

                function date_active(element) {
                    $('.date_block').removeClass('active');

                    $(element).addClass('active');
                    var day = $(element).find('.digit p').text().trim();
                    var monthText = $(element).find('.months').text().trim();
                    var month = ('0' + (new Date(Date.parse(monthText + ' 1, 2000')).getMonth() + 1)).slice(-2);

                    var year = new Date().getFullYear().toString().substr(-2);
                    selectedDate = day + '-' + month + '-' + year;
                    $('#selectedDateInput').val(selectedDate);
                }

                function renderDates(startIndex) {
                    const dateSlotsContainer = document.getElementById('dateSlotsContainer');
                    dateSlotsContainer.innerHTML = '';



                    for (let i = startIndex; i < startIndex + 3; i++) {
                        if (dateSlots[i]) {
                            const item = dateSlots[i];
                            const dateBlock = document.createElement('div');
                            dateBlock.className = 'date_block';
                            dateBlock.setAttribute('onclick', "date_active(this)")
                            dateBlock.innerHTML = `
                        <span class="days">${item.dayName}</span>
                        <div class="digit ${isSlotsSelected === i ? "slotsActive" : ""}">
                            <p>${item.day}</p>
                        </div>
                        <span class="months">${item.month}</span>
                    `;

                            dateSlotsContainer.appendChild(dateBlock);
                        }
                    }
                }

                function prevDates() {
                    const arrowButtons = document.querySelectorAll('.left-arr');
                    if (currentIndex > 0) {
                        currentIndex -= 3;
                        renderDates(currentIndex);
                    }
                    if (currentIndex <= 0) {
                        arrowButtons.forEach(button => button.style.opacity = '0.5');
                    }
                }

                function nextDates() {
                    const arrowButtons = document.querySelectorAll('.left-arr');
                    if (currentIndex + 3 < dateSlots.length) {
                        currentIndex += 3;
                        renderDates(currentIndex);
                    }
                    arrowButtons.forEach(button => button.style.opacity = '1');
                }

                let isSlotsSelected = 0;

                function selectedSlot(item, index) {

                    console.log("Selected Slot:", item);
                    isSlotsSelected = index;
                    renderDates(currentIndex);
                }

                setDates();
                renderDates(currentIndex);
            </script>





    </body>


    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{-- <script src="/public/frontend/js/script.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script type='text/javascript'>
        var ws_wsid = "{{ env('API_KEY') }}";

        if ("{{ $propertyDetails['StreetNumber'] }}" == '' && "{{ $propertyDetails['StreetName'] }}" == '') {
            var ws_address = ("{{ $propertyDetails['City'] }}, {{ $propertyDetails['StateOrProvince'] }}");
        } else {

            var ws_address =
                "{{ $propertyDetails['StreetNumber'] }} {{ $propertyDetails['StreetName'] }} {{ $propertyDetails['StreetSuffix'] }}, {{ $propertyDetails['City'] }}, {{ $propertyDetails['StateOrProvince'] }}, {{ isset($propertyDetails['PostalCode']) ? $propertyDetails['PostalCode'] : '' }}"

        };
        var ws_format = 'square';
        var ws_width = '620';
        var ws_height = '620';
    </script>
    <script type='text/javascript' src='https://www.walkscore.com/tile/show-walkscore-tile.php'></script>

    <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function() {
            getNearbyLocation();

            function getNearbyLocation() {
                var latitude = "{{ $propertyDetails['Latitude'] }}";
                var longitude = "{{ $propertyDetails['Longitude'] }}";

                if (longitude !== '' && latitude !== '') {

                    $.ajax({
                        url: "{{ route('get-location') }}",
                        type: 'GET',
                        data: {
                            latitude: latitude,
                            longitude: longitude
                        },
                        success: function(response) {

                            if (response && response.data && response.data.businesses && Array.isArray(
                                    response.data.businesses)) {

                                updateNearbyLocations(response.data.businesses);

                            } else {
                                $('#section9').hide();
                                $('.nearsby').hide();
                                console.error('Empty or invalid response received');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error getting nearby locations:', error);
                        }
                    });
                } else {

                    $('#section9').hide();
                    $('.nearsby').hide();
                }
            }

            function updateNearbyLocations(nearbyData) {

                var categories = {};

                nearbyData.forEach(function(place) {
                    place.categories.forEach(function(category) {
                        var alias = category.alias;
                        if (!(alias in categories) && place.categories.length === 1 && category
                            .title.toLowerCase().indexOf('bar') === -1 && category.title
                            .toLowerCase().indexOf('pub') === -1) {
                            categories[alias] = {
                                title: category.title,
                                count: 0
                            };
                        }
                    });
                });

                nearbyData.forEach(function(place) {
                    place.categories.forEach(function(category) {
                        var alias = category.alias;
                        if (categories[alias]) {
                            categories[alias].count++;
                        }
                    });
                });

                // Append new tabs and map containers
                var $nav = $('#pills-tab');
                var $tabContent = $('#pills-tabContent');

                Object.keys(categories).forEach(function(alias) {
                    var category = categories[alias];
                    var navLink = '<li class="nav-item" role="presentation">' +
                        '<button class="nav-link' +
                        (alias === Object.keys(categories)[0] ? ' active' : '') +
                        '" id="pills-' + alias + '-tab" data-bs-toggle="pill" data-bs-target="#pills-' +
                        alias +
                        '" type="button" role="tab" aria-controls="pills-' + alias +
                        '" aria-selected="' + (alias === Object.keys(categories)[0] ? 'true' : 'false') +
                        '">' + category.title + ' (' + category.count + ')' +
                        '</button>' +
                        '</li>';

                    var tabPane = '<div class="tab-pane fade' +
                        (alias === Object.keys(categories)[0] ? ' show active' : '') +
                        '" id="pills-' + alias + '" role="tabpanel" aria-labelledby="pills-' + alias +
                        '-tab" tabindex="0">' +
                        '<div class="map mt-0" id="map-' + alias + '"></div>' +
                        '</div>';

                    $nav.append(navLink);
                    $tabContent.append(tabPane);
                });

                // Initialize maps for each tab
                Object.keys(categories).forEach(function(alias) {
                    initializeMapWithDelay(alias, nearbyData.filter(function(place) {
                        return place.categories.find(function(category) {
                            return category.alias === alias;
                        });
                    }));
                });

                // Reattach event listener for tab change
                $('.nav-link').on('shown.bs.tab', function(e) {
                    var alias = $(this).attr('id').split('-')[1];
                    var places = nearbyData.filter(place => place.categories.find(category => category
                        .alias === alias));
                    setMapCanvasSize(alias, 671.989, 300);
                    initializeMapWithDelay(alias, places);
                });
            }

            function initializeMapWithDelay(alias, places) {
                setTimeout(function() {
                    initMap('map-' + alias, places);
                }, 300);
            }

            function setMapCanvasSize(alias, width, height) {
                var mapElement = document.getElementById('map-' + alias);
                if (mapElement) {
                    var canvas = mapElement.querySelector('.mapboxgl-canvas');
                    if (canvas) {
                        canvas.style.width = width + 'px';
                        canvas.style.height = height + 'px';
                        canvas.setAttribute('width', width);
                        canvas.setAttribute('height', height);
                    } else {
                        console.error('Canvas element not found inside map element with ID: map-' + alias);
                    }
                } else {
                    console.error('Map element not found with ID: map-' + alias);
                }
            }

            function initMap(containerId, places) {
                mapboxgl.accessToken =
                    'pk.eyJ1IjoiZGVlcGFra3VtYXIxMjMiLCJhIjoiY2x1NDNtajl4MGljODJybjR5NDB6d21xeiJ9._XKpljSkyJuCyjZG4735Wg';

                var map = new mapboxgl.Map({
                    container: containerId,
                    style: 'mapbox://styles/mapbox/streets-v11',
                    center: [places[0].coordinates.longitude, places[0].coordinates.latitude],
                    zoom: 10
                });

                var mainLocationLngLat = [{{ $propertyDetails['Longitude'] }},
                    {{ $propertyDetails['Latitude'] }}
                ];
                var mainaddress = "{{ $propertyDetails['UnparsedAddress'] }}";

                var mainLocationPopup = new mapboxgl.Popup({
                    offset: 25
                }).setText(mainaddress);

                new mapboxgl.Marker({
                        color: "#ff0000",
                        draggable: false
                    })
                    .setLngLat(mainLocationLngLat)
                    .setPopup(mainLocationPopup)
                    .addTo(map);

                places.forEach(function(place) {
                    if (place && place.coordinates && place.coordinates.longitude && place.coordinates
                        .latitude) {
                        var popup = new mapboxgl.Popup({
                            offset: 25
                        }).setText(place.name);

                        var el = document.createElement('div');
                        el.className = 'marker';
                        el.style.width = '19px';
                        el.style.height = '19px';
                        el.style.background = '#007bff';
                        el.style.borderRadius = '50%';
                        el.style.border = '2px solid #fff';
                        el.style.boxShadow = '0 0 5px rgba(0, 123, 255, 0.5)';

                        new mapboxgl.Marker(el)
                            .setLngLat([place.coordinates.longitude, place.coordinates.latitude])
                            .setPopup(popup)
                            .addTo(map);
                    }
                });
            }
        });
    </script>



    <script>
        flatpickr("#timeInput", {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            static: true

        });

        var baseUrl = "{{ env('BACKEND_URL') }}";
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.querySelector('.carousel1');
            const prevButton = document.getElementById('prev');
            const nextButton = document.getElementById('next');
            const bigImage = document.getElementById('bigImage');
            const defaultImageUrl = "{{ asset('images/no_image.jpg') }}";
            //let images = {!! json_encode($propertyDetails['images']) !!}.map(url => baseUrl + '/' + url);
            let images = {!! json_encode($propertyDetails['images']) !!}.map(url => url);
            if (images.length === 0) {
                // If images array is empty, assign default image
                images = [defaultImageUrl];
            }

            let currentIndex = 0;

            function showImage(index) {
                carousel.style.transform = `translateX(-${index * 110}px)`;
                bigImage.src = images[index];
            }

            images.forEach((imageUrl, index) => {
                const thumbnail = document.createElement('img');
                thumbnail.classList.add('thumbnail1');
                thumbnail.src = imageUrl;
                thumbnail.alt = `Thumbnail ${index + 1}`;
                thumbnail.setAttribute('data-index', index);
                thumbnail.addEventListener('click', () => {
                    currentIndex = index;
                    showImage(currentIndex);
                });
                carousel.appendChild(thumbnail);
            });

            showImage(currentIndex);

            prevButton.addEventListener('click', () => {
                currentIndex = (currentIndex - 1 + images.length) % images.length;
                showImage(currentIndex);
            });

            nextButton.addEventListener('click', () => {
                currentIndex = (currentIndex + 1) % images.length;
                showImage(currentIndex);
            });

            function toggleArrows() {
                if (currentIndex === 0) {
                    prevButton.disabled = true;
                } else {
                    prevButton.disabled = false;
                }

                if (currentIndex === images.length - 1) {
                    nextButton.disabled = true;
                } else {
                    nextButton.disabled = false;
                }
            }

            toggleArrows();
        });
    </script>

    <script>
        $(document).ready(function() {

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
            }

            document.getElementById("map-btn").addEventListener("click", function() {
                var latitude = "{{ $propertyDetails['Latitude'] }}";
                var longitude = "{{ $propertyDetails['Longitude'] }}";
                if (latitude !== "" || longitude !== "") {
                    var url = "https://www.google.com/maps?q=" + latitude + "," + longitude;
                    window.open(url, "_blank");
                } else {
                    document.getElementById("map-btn").disabled = true;
                }
            });
            $('#tourForm').validate({

                rules: {
                    first_name: "required",
                    last_name: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    phone: {
                        required: true,
                        minlength: 10
                    },
                    role: "required",
                    time: "required",
                    message: "required",
                    terms: "required"
                },
                messages: {
                    first_name: "Please enter your first name",
                    time: "Please choose a time",
                    last_name: "Please enter your last name",
                    email: "Please enter a valid email address",
                    phone: {
                        required: "Please enter your phone number",
                        minlength: "Phone number must be at least 10 digits long"
                    },
                    role: "Please select your role",
                    message: "Please enter your message",
                    terms: "Please agree to the Terms of Use"
                },
                errorPlacement: function(error, element) {
                    if (element.attr("name") == "time")
                        error.appendTo("#timeInput-error");
                    else if (element.attr("name") == "terms")
                        error.appendTo("#termsCheckbox-error");
                    else
                        error.insertAfter(element);
                },
                submitHandler: function(form) {
                    const date = document.querySelector('#tourForm input[name="selectedDate"]').value
                        .trim();
                    if (date === '') {
                        Swal.fire({
                            icon: 'error',
                            title: 'Validation Error',
                            text: 'Please select the date!',
                            confirmButtonText: 'Continue to Website'
                        });
                        return;
                    }
                    var firstName = $(form).find('input[name="first_name"]').val();
                    var lastName = $(form).find('input[name="last_name"]').val();
                    var fullName = firstName + ' ' + lastName;
                    $(form).find('input[name="name"]').val(fullName);
                    $.ajax({
                        url: '/tour/submit',
                        type: 'POST',
                        data: $(form).serialize(),
                        dataType: 'json',
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Tour form submitted successfully',
                                confirmButtonText: 'Continue to Website'
                            });
                            form.reset();
                            $('#messageTextarea').val(
                                "I would appreciate more information about " + $(
                                    '.heading').text() + ".");
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'An error occurred while submitting the form. Please try again later.'
                            });
                        }
                    });
                    return false; // Prevent form submission
                }
            });

            $('#contactForm').validate({
                rules: {
                    first_names: "required",
                    last_names: "required",
                    phone: {
                        required: true,
                        minlength: 10
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    role: "required",
                    message: "required",
                    term: "required"
                },
                messages: {
                    first_names: "Please enter your first name",
                    last_names: "Please enter your last name",
                    phone: {
                        required: "Please enter your phone number",
                        minlength: "Phone number must be at least 10 digits long"
                    },
                    email: "Please enter a valid email address",
                    role: "Please select your role",
                    message: "Please enter your message",
                    term: "Please agree to the Terms of Use"
                },
                errorPlacement: function(error, element) {
                    if (element.attr("name") == "term")
                        error.appendTo("#checkbx");
                    else if (element.attr("name") == "role")
                        error.appendTo("#roleerror");
                    else
                        error.insertAfter(element);
                },
                submitHandler: function(form) {
                    // If form is valid, submit using AJAX
                    var firstName = $(form).find('input[name="first_names"]').val();
                    var lastName = $(form).find('input[name="last_names"]').val();
                    var fullName = firstName + ' ' + lastName;
                    $(form).find('input[name="name"]').val(fullName);
                    var formData = $(form).serialize();
                    const headingText = $('.heading').text();
                    const dynamicMessage = "I would appreciate more information about " + headingText +
                        ".";

                    $.ajax({
                        url: '/contact/submit',
                        type: 'POST',
                        data: formData,
                        dataType: 'json',
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Contact form submitted successfully',
                                confirmButtonText: 'Continue to Website'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    form.reset();
                                    $('#contactmessageTextarea').val(
                                        "I would like to get more information about this property " +
                                        $('.heading').text() + ".");
                                }
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'An error occurred while submitting the form. Please try again later.'
                            });
                        }
                    });
                }
            });

            $('#contactpopup').validate({
                rules: {
                    first_names: "required",
                    last_names: "required",
                    phone: {
                        required: true,
                        minlength: 10
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    role: "required",
                    message: "required",
                    term: "required"
                },
                messages: {
                    first_names: "Please enter your first name",
                    last_names: "Please enter your last name",
                    phone: {
                        required: "Please enter your phone number",
                        minlength: "Phone number must be at least 10 digits long"
                    },
                    email: "Please enter a valid email address",
                    role: "Please select your role",
                    message: "Please enter your message",
                    term: "Please agree to the Terms of Use"
                },
                errorPlacement: function(error, element) {
                    if (element.attr("name") == "term")
                        error.appendTo("#popcheckbx");
                    else if (element.attr("name") == "role")
                        error.appendTo("#poproleerror");
                    else
                        error.insertAfter(element);
                },
                submitHandler: function(form) {
                    // If form is valid, submit using AJAX
                    const submitButton = document.getElementById('contactsubmit');
                    submitButton.disabled = true;
                    var formData = $(form).serialize();
                    const headingText = $('.heading').text();
                    const dynamicMessage = "I would appreciate more information about " + headingText +
                        ".";

                    $.ajax({
                        url: '/contact/submit',
                        type: 'POST',
                        data: formData,
                        dataType: 'json',
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Contact form submitted successfully',
                                // showCancelButton: true,
                                confirmButtonText: 'Continue to Website',

                            }).then((result) => {
                                if (result.isConfirmed) {
                                    form.reset();
                                    $('#contactpopupmessageTextarea').val(
                                        "I would like to get more information about this property " +
                                        $('.heading').text() + ".");

                                    document.getElementById('staticBackdrop')
                                        .classList
                                        .remove('show');
                                    document.body.classList.remove('modal-open');
                                    document.querySelector('.modal-backdrop')
                                        .remove();
                                    window.location.reload();
                                }
                            });
                            // $('#contactpopup')[0].reset();
                            // submitButton.disabled = false;
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'An error occurred while submitting the form. Please try again later.'
                            });

                        }
                    });

                }
            });



            function validateAlphabets(event) {
                const input = event.target;
                const regex = /^[a-zA-Z\s]*$/;
                const key = event.key;

                if (!regex.test(key) && key !== 'Backspace' || input.value.length >= 40) {
                    event.preventDefault();
                }
            }
            ['contactfirstname', 'contactfirstnames', 'contactlastnames', 'contactlastname', 'lasttourname',
                'tourname'
            ].forEach(function(id) {
                document.getElementById(id).addEventListener("keypress", validateAlphabets);
            });


            ['contactphone', 'contactphones', 'tourphone'].forEach(fieldId => {
                document.getElementById(fieldId).addEventListener("input", function(event) {
                    let phoneInput = event.target.value.replace(/\D/g, '').slice(0, 10);
                    event.target.value = phoneInput.replace(/(\d{3})(\d{3})(\d{4})/, '($1) $2-$3');
                });
            });
            if ("{{ $propertyDetails['PropertyType'] ?? '' }}" === 'Land') {
                var lotSize = "{{ $propertyDetails['LotSizeSquareFeet'] ?? '0' }}";
                var lotSizeText = lotSize % 1 !== 0 ? parseFloat(lotSize).toFixed(2) : parseInt(lotSize);
                $('.area').text(lotSizeText || '0');
                $('.propertysize').text(lotSizeText + " Sq ft" || 'N/A');
                var totalPriceStr = parseFloat("{{ $propertyDetails['ListPrice'] ?? '0' }}").toLocaleString();
                var totalPrice = parseFloat(totalPriceStr.replace(/,/g, ''));
                $('.price').text('$' + (parseFloat("{{ $propertyDetails['ListPrice'] ?? '0' }}") || 0)
                    .toLocaleString());

                var totalArea = lotSizeText;
                var pricePerSqft = totalPrice / totalArea;
                $('#pricepersqft').hide();
                $('.depo').html('<strong>Fencing :</strong>');
                $('.pool').html('<strong>Sewer :</strong>');
                $('.remodel').html('<strong>Water Front :</strong>');
                $('.amenitites').html('<strong>Lot Features :</strong>');
                $('.additional').html('<strong>Zoning :</strong>');
                $('.equip').html('<strong>Frontage :</strong>');

                var formattedfloor = ("{{ $propertyDetails['WaterfrontFeatures'] ?? '' }}").replace(/,/g, ', ');
                $('.deposit').text("{{ $otherColumnsData['Fencing'] ?? 'N/A' }}");
                $('.poolsize').text("{{ $propertyDetails['Sewer'] ?? 'N/A' }}");
                $('.parking').text(formattedfloor || 'N/A');
                $('.clubhouse').text("{{ $propertyDetails['LotFeatures'] ?? 'N/A' }}");
                $('.additionalroom').text("{{ $propertyDetails['Zoning'] ?? 'N/A' }}");
                $('.equipment').text("{{ $otherColumnsData['FrontageLength'] ?? 'N/A' }}");
            }


            if ("{{ $propertyDetails['PropertyType'] }}" == 'Residential') {
                var livingAreaSF = "{{ $propertyDetails['LivingAreaSF'] }}";
                var livingAreaSFText = livingAreaSF % 1 !== 0 ? parseFloat(livingAreaSF).toFixed(2) : parseInt(
                    livingAreaSF);
                $('.area').text(livingAreaSFText || '0');
                $('.propertysize').text(livingAreaSFText + (livingAreaSF % 1 !== 0 ? " Sq ft" : " Sq ft") || 'N/A');
                var totalPriceStr = parseFloat("{{ $propertyDetails['ListPrice'] }}" || 0).toLocaleString();
                var totalPrice = parseFloat(totalPriceStr.replace(/,/g, ''));
                $('.price').text('$' + (parseFloat("{{ $propertyDetails['ListPrice'] }}") || 0).toLocaleString());

                var totalArea = livingAreaSFText;
                var pricePerSqft = totalPrice / totalArea;
                $('#pricepersqft').hide();
                $('.depo').html('<strong>Flooring :</strong>');
                $('.pool').html('<strong>Construction :</strong>');
                $('.remodel').html('<strong>Parking :</strong>');
                $('.amenitites').html('<strong>Amenities :</strong>');
                $('.additional').html('<strong>Zoning :</strong>');
                $('.equip').html('<strong>Fireplace :</strong>');
                $('.aircon').html('<strong>Appliances :</strong>');
                $('.storey').html('<strong>Stories :</strong>');
                var formattedfloor = "{!! isset($otherColumnsData['Flooring'])
                    ? (is_array($otherColumnsData['Flooring'])
                        ? implode(', ', $otherColumnsData['Flooring'])
                        : str_replace(',', ', ', $otherColumnsData['Flooring']))
                    : '' !!}";
                var formattedMaterials = "{!! isset($propertyDetails['ConstructionMaterials'])
                    ? str_replace(',', ', ', $propertyDetails['ConstructionMaterials'])
                    : '' !!}";
                var formattedparking = "{!! isset($propertyDetails['ParkingFeatures'])
                    ? str_replace(',', ', ', $propertyDetails['ParkingFeatures'])
                    : '' !!}";
                var formattedammenties = "{!! isset($propertyDetails['CommunityFeatures'])
                    ? str_replace(',', ', ', $propertyDetails['CommunityFeatures'])
                    : '' !!}";
                var formattedfireplace = "{!! isset($propertyDetails['FireplaceFeatures'])
                    ? str_replace(',', ', ', $propertyDetails['FireplaceFeatures'])
                    : '' !!}";
                var formattedaircon = "{!! isset($propertyDetails['Appliances']) ? str_replace(',', ', ', $propertyDetails['Appliances']) : '' !!}";
                var formattedstorey = "{!! isset($otherColumnsData['StoriesTotal']) ? str_replace(',', ', ', $otherColumnsData['StoriesTotal']) : '' !!}";

                $('.deposit').text(formattedfloor || 'N/A');
                $('.poolsize').text(formattedMaterials || 'N/A');
                $('.parking').text(formattedparking || 'N/A');
                $('.aircond').text(formattedaircon || 'N/A');
                $('.stories').text(formattedstorey || 'N/A');
                $('.clubhouse').text(formattedammenties || 'N/A');
                $('.additionalroom').text("{{ $propertyDetails['Zoning'] }}" || 'N/A');
                $('.equipment').text(formattedfireplace || 'N/A');
            }
            if ("{{ $propertyDetails['PropertyType'] }}" == 'Multi-Family' ||
                "{{ $propertyDetails['PropertyType'] }}" == 'Mobile' ||
                "{{ $propertyDetails['PropertyType'] }}" == 'Agri-Business') {
                var livingAreaSF = "{{ $propertyDetails['LivingAreaSF'] }}";
                var livingAreaSFText = livingAreaSF % 1 !== 0 ? parseFloat(livingAreaSF).toFixed(2) : parseInt(
                    livingAreaSF);
                $('.area').text(livingAreaSFText || '0');
                $('.propertysize').text(livingAreaSFText + (livingAreaSF % 1 !== 0 ? " Sq ft" : " Sq ft") || 'N/A');
                var totalPriceStr = parseFloat("{{ $propertyDetails['ListPrice'] }}" || 0).toLocaleString();
                var totalPrice = parseFloat(totalPriceStr.replace(/,/g, ''));
                $('.price').text('$' + (parseFloat("{{ $propertyDetails['ListPrice'] }}") || 0).toLocaleString());

                var totalArea = livingAreaSFText;
                var pricePerSqft = totalPrice / totalArea;
                $('#pricepersqft').hide();
                $('.depo').html('<strong>Flooring :</strong>');
                $('.pool').html('<strong>Construction :</strong>');
                $('.remodel').html('<strong>Parking :</strong>');
                $('.amenitites').html('<strong>Amenities :</strong>');
                $('.additional').html('<strong>Zoning :</strong>');
                $('.equip').html('<strong>Lot :</strong>');
                $('.aircon').html('<strong>Appliances :</strong>');
                $('.storey').html('<strong>Stories :</strong>');
                var formattedfloor = "{!! isset($otherColumnsData['Flooring'])
                    ? (is_array($otherColumnsData['Flooring'])
                        ? implode(', ', $otherColumnsData['Flooring'])
                        : str_replace(',', ', ', $otherColumnsData['Flooring']))
                    : '' !!}";
                var formattedMaterials = "{!! isset($propertyDetails['ConstructionMaterials'])
                    ? str_replace(',', ', ', $propertyDetails['ConstructionMaterials'])
                    : '' !!}";
                var formattedparking = "{!! isset($propertyDetails['ParkingFeatures'])
                    ? str_replace(',', ', ', $propertyDetails['ParkingFeatures'])
                    : '' !!}";
                var formattedammenties = "{!! isset($propertyDetails['CommunityFeatures'])
                    ? str_replace(',', ', ', $propertyDetails['CommunityFeatures'])
                    : '' !!}";
                var formattedfireplace = "{!! isset($propertyDetails['LotFeatures']) ? str_replace(',', ', ', $propertyDetails['LotFeatures']) : '' !!}";
                var formattedaircon = "{!! isset($propertyDetails['Appliances']) ? str_replace(',', ', ', $propertyDetails['Appliances']) : '' !!}";
                var formattedstorey = "{!! isset($otherColumnsData['StoriesTotal']) ? str_replace(',', ', ', $otherColumnsData['StoriesTotal']) : '' !!}";
                $('.deposit').text(formattedfloor || 'N/A');
                $('.poolsize').text(formattedMaterials || 'N/A');
                $('.parking').text(formattedparking || 'N/A');
                $('.aircond').text(formattedaircon || 'N/A');
                $('.stories').text(formattedstorey || 'N/A');
                $('.clubhouse').text(formattedammenties || 'N/A');
                $('.additionalroom').text("{{ $propertyDetails['Zoning'] }}" || 'N/A');
                $('.equipment').text(formattedfireplace || 'N/A');
            }


            if ("{{ $propertyDetails['PropertyType'] }}" == 'Commercial') {
                var buildingAreaTotal = "{{ $propertyDetails['BuildingAreaTotal'] }}";
                var buildingAreaTotalText = buildingAreaTotal % 1 !== 0 ? parseFloat(buildingAreaTotal).toFixed(2) :
                    parseInt(buildingAreaTotal);
                $('.area').text(buildingAreaTotalText || '0');
                $('.propertysize').text(buildingAreaTotalText + (buildingAreaTotal % 1 !== 0 ? " Sq ft" :
                    " Sq ft") || 'N/A');
                var totalPriceStr = parseFloat("{{ $propertyDetails['ListPrice'] }}" || 0).toLocaleString();
                var totalPrice = parseFloat(totalPriceStr.replace(/,/g, ''));

                var totalArea = buildingAreaTotalText;
                var pricePerSqft = totalPrice / buildingAreaTotal;

                var pricePerYearPerSqft = pricePerSqft / 12;


                var leaseAmount = parseFloat("{{ $propertyDetails['LeaseAmount'] ?? 0 }}");
                var leaseAmountFrequency = "{{ $propertyDetails['LeaseAmountFrequency'] ?? '' }}";
                var listPrice = parseFloat("{{ $propertyDetails['ListPrice'] ?? 0 }}");
                var leaseMeasure = "{{ $propertyDetails['LeaseMeasure'] ?? '' }}";

                var formattedLeaseAmount = leaseAmount.toLocaleString();
                var formattedListPrice = listPrice.toLocaleString();

                if (leaseAmount && leaseAmountFrequency) {
                    var leaseInfo = `$${formattedLeaseAmount} / ${leaseAmountFrequency}`;
                    if (leaseMeasure) {
                        leaseInfo += ` / ${leaseMeasure}`;
                    }
                    document.getElementById('lstprice').textContent = leaseInfo;
                } else {
                    document.querySelector('.price').textContent = `$${formattedListPrice}`;
                }




                $('.depo').html('<strong>Property Freature:</strong>');
                $('.pool').html('<strong>Construction:</strong>');
                $('.remodel').html('<strong>Parking Spaces:</strong>');
                $('.amenitites').html('<strong>Lot Features:</strong>');
                $('.additional').html('<strong>Zoning:</strong>');
                $('.equip').html('<strong>Frontage:</strong>');
                var formattedfloor = ("{{ $otherColumnsData['AccesstoProperty'] ?? 'N/A' }}").replace(/,/g, ', ');
                var formattedMaterials = ("{{ $propertyDetails['ConstructionMaterials'] ?? 'N/A' }}").replace(
                    /,/g, ', ');
                var formattedparking = ("{{ $propertyDetails['LotFeatures'] ?? 'N/A' }}").replace(/,/g, ', ');
                $('.deposit').text(formattedfloor || 'N/A');
                $('.poolsize').text(formattedMaterials || 'N/A');
                $('.parking').text("{{ $otherColumnsData['ParkingCommonSpaces'] ?? 'N/A' }}" || 'N/A');
                $('.clubhouse').text(formattedparking || 'N/A');
                $('.additionalroom').text("{{ $propertyDetails['Zoning'] }}" || 'N/A');
                $('.equipment').text("{{ $otherColumnsData['FrontageLength'] ?? 'N/A' }}" || 'N/A');
            }
            var agentSlug = @json($agent_slug);

            if (agentSlug.slug_url) {
                document.getElementById("viewListingsLink").href =
                    "{{ url('') }}/our-professionals/details/" + agentSlug.slug_url;
            } else {
                document.getElementById("viewListingsLink").href =
                    "{{ url('') }}/search";

            }


            var headingText = '';

            if ("{{ $propertyDetails['StreetNumber'] }}" !== '' || "{{ $propertyDetails['StreetName'] }}" !==
                '' || "{{ $propertyDetails['StreetDirSuffix'] }}") {
                if ("{{ $propertyDetails['StreetSuffix'] }}" !== '' &&
                    "{{ $propertyDetails['UnitNumber'] }}" !== '') {
                    headingText +=
                        "{{ $propertyDetails['UnitNumber'] }}, {{ $propertyDetails['StreetNumber'] }} {{ $propertyDetails['StreetName'] }} {{ $propertyDetails['StreetSuffix'] }} {{ $propertyDetails['StreetDirSuffix'] }}";
                } else if ("{{ $propertyDetails['StreetSuffix'] }}" !== '') {
                    headingText +=
                        "{{ $propertyDetails['StreetNumber'] }} {{ $propertyDetails['StreetName'] }} {{ $propertyDetails['StreetSuffix'] }} {{ $propertyDetails['StreetDirSuffix'] }}";

                } else {
                    headingText +=
                        "{{ $propertyDetails['StreetNumber'] }} {{ $propertyDetails['StreetName'] }}";
                }
            }

            if ("{{ $propertyDetails['City'] }}" !== '' && "{{ $propertyDetails['StateOrProvince'] }}" !== '') {
                if (headingText !== '') {
                    headingText += ', ';
                }
                headingText += "{{ $propertyDetails['City'] }}, {{ $propertyDetails['StateOrProvince'] }}";
            }

            if ("{{ isset($propertyDetails['PostalCode']) ? $propertyDetails['PostalCode'] : '' }}" !== '') {
                if (headingText !== '') {
                    headingText += ', ';
                }
                headingText +=
                    "{{ isset($propertyDetails['PostalCode']) ? $propertyDetails['PostalCode'] : '' }}";
            }

            function decodeHtmlEntities(text) {
                var textArea = document.createElement('textarea');
                textArea.innerHTML = text;
                return textArea.value;
            }

            // Decode HTML entities in headingText
            headingText = decodeHtmlEntities(headingText);

            $('.heading').text(headingText);

            const dynamicMessage = "I would appreciate more information about " + headingText + ".";

            $('#messageTextarea').val(dynamicMessage);

            // $('.heading').text(headingText);

            const dynamiccontactMessage = "I would like to get more information about this property " +
                headingText + ".";

            $('#contactmessageTextarea').val(dynamiccontactMessage);
            $('#contactpopupmessageTextarea').val(dynamiccontactMessage);

            var streetNumber = "{{ $propertyDetails['StreetNumber'] }}";
            var streetName = "{{ $propertyDetails['StreetName'] }}";
            var city = "{{ $propertyDetails['City'] }}";
            var stateOrProvince = "{{ $propertyDetails['StateOrProvince'] }}";
            var streetSuffix = "{{ $propertyDetails['StreetSuffix'] }}";
            var postalCode =
                "{{ isset($otherColumnsData['PostalCode']) ? $otherColumnsData['PostalCode'] : '' }}";
            var listingId = "{{ $propertyDetails['ListingId'] }}";

            var addressText = '';

            if (streetNumber === '' && streetName === '') {
                addressText = city + ", " + stateOrProvince;
            } else {
                addressText = streetNumber + " " + streetName + " " + streetSuffix + ", " + city + ", " +
                    stateOrProvince + ", " + postalCode + " - " + listingId;
            }

            var decodedAddressText = $("<div/>").html(addressText).text();
            $('.titles').text(decodedAddressText);


            var propertyType = "{{ $propertyDetails['PropertyType'] }}";
            var propertySubtype = "{{ $propertyDetails['PropertySubType'] }}";

            if (propertySubtype === 'Apartment' || propertySubtype === 'Row/Townhouse') {
                propertyType = 'Condo';
            }

            $('.addresses').html(
                propertyType +
                " {{ $propertyDetails['TransactionType'] }} in {{ $propertyDetails['City'] }}, {{ $propertyDetails['StateOrProvince'] }}"
            );

            // $('.addresses').html(
            //     "{{ $propertyDetails['PropertyType'] }} {{ $propertyDetails['TransactionType'] }} in {{ $propertyDetails['City'] }}, {{ $propertyDetails['StateOrProvince'] }}"
            // );

            $('.bedroom').text("{{ $propertyDetails['BedroomsTotal'] }}" || '0');

            $('.bathroom').text(function() {
                var fullBathrooms = {{ $propertyDetails['BathroomsFull'] ?? 0 }};
                var halfBathrooms = {{ $propertyDetails['BathroomsHalf'] ?? 0 }};

                var bathroomText = fullBathrooms;

                if (halfBathrooms > 0) {
                    bathroomText += '.' + halfBathrooms;
                }

                return bathroomText + (fullBathrooms + halfBathrooms > 1 ? ' baths' : ' bath');
            });

            $('.years').text("{{ $propertyDetails['YearBuilt'] }}" || 'N/A');

            $('.year').text("{{ $propertyDetails['YearBuilt'] }}" || 'N/A');

            // $('.propertytype').text("{{ $propertyDetails['PropertyType'] }}" || 'N/A');

            $('.propertytype').text(("{{ $propertyDetails['PropertySubType'] }}" === 'Apartment' ||
                    "{{ $propertyDetails['PropertySubType'] }}" === 'Row/Townhouse') ? 'Condo' :
                "{{ $propertyDetails['PropertyType'] }}" || 'N/A');

            $('.propertysubtype').text("{{ $propertyDetails['PropertySubType'] }}" || 'N/A');

            $('.buildingtype').text("{{ $propertyDetails['MlsStatus'] }}");

            $('.squarefootage').text(
                "{{ $propertyDetails['BuildingAreaTotal'] }} {{ $propertyDetails['BelowGradeFinishedAreaUnits'] }}" ||
                '0 N/A');

            $('.communityname').text("{{ $propertyDetails['CommunityFeatures'] }}");

            $('.subdivisionname').text("{{ $propertyDetails['SubdivisionName'] }}");

            var rawAddress = "{{ $propertyDetails['UnparsedAddress'] }}" || 'N/A';
            var decodedAddress = $("<div/>").html(rawAddress).text();
            $('.address-address').text(decodedAddress);

            $('.address-city').text("{{ $propertyDetails['City'] }}" || 'N/A');

            $('.address-state').text("{{ $propertyDetails['StateOrProvince'] }}" || 'N/A');

            $('.address-zip').text(
                "{{ isset($propertyDetails['PostalCode']) ? $propertyDetails['PostalCode'] : '' }}" || 'N/A');
            $('.address-area').text(
                "{{ isset($propertyDetails['SubdivisionName']) ? $propertyDetails['SubdivisionName'] : '' }}" ||
                'N/A');
            $('.address-country').text('Canada');
            $('.listingid').text("{{ $propertyDetails['ListingId'] }}" || 'N/A');

            $('.garage').text("{{ $propertyDetails['GarageSpaces'] }}" || '0');

            $('.listprice').text('$' + (parseFloat("{{ $propertyDetails['ListPrice'] }}") || 0)
                .toLocaleString() || 'N/A');

            $('.garagesize').text("{{ $otherColumnsData['GarageYN'] ?? 'N/A' }}" || 'N/A');

            if ("{{ $propertyDetails['diamond'] }}" == 1) {
                $('.features').text('Diamond').css('background-color', '#10579f');
            } else if ("{{ $propertyDetails['featured'] }}" == 1) {
                $('.features').text('Exclusive').css('background-color', '#10579f');
            } else {
                $('.features').hide();
                $('.features').css('background', 'transparent'); // Set background color to transparent
            }
            if ($('.features').text().trim() === 'Featured') {
                $('input[name="property_type"]').val('features');
            } else if ($('.features').text().trim() === 'Diamond') {
                $('input[name="property_type"]').val('diamond');
            }


            // var videoUrl = "{{ $otherColumnsData['VirtualTourURLBranded'] }}";
            var virtualTourImageUrl = "{{ trim($otherColumnsData['VirtualTourURLUnbranded'] ?? 'N/A') }}";

            // if (videoUrl) {

            //     $('.video').show();
            //     $('#videoThumbnail').attr('src', videoUrl);
            // } else {
            //     $('.video').hide();
            //     $('.vidtab').hide();
            // }
            // console.log(virtualTourImageUrl);
            if (virtualTourImageUrl != '') {
                $('.Virtual').show();
                $('#virtualTourContainer').html('<iframe src="' + virtualTourImageUrl +
                    '" width="100%"  frameborder="0" allowfullscreen></iframe>');
            } else {
                $('.Virtual').hide();
                $('.tourtab').hide();
            }

            function formatPhoneNumber(phoneNumber) {
                return String(phoneNumber).replace(/(\d{3})(\d{3})(\d{4})/, '$1-$2-$3');
            }


            var agentPhono = agentSlug.phone;
            var contacto = agentSlug.office_no;

            var formattedAgentPhono = formatPhoneNumber(agentPhono);
            var formattedContacto = formatPhoneNumber(contacto);
            if (agentSlug.slug_url) {
                $('.agentname').text("{{ $propertyDetails['ListAgentFullName'] }}" || 'Myproagent');

                var baseUrl = "{{ env('BACKEND_URL') }}";
                var Url = "{{ env('Image_URL') }}";
                const agentimage = "{{ $propertyDetails['agent_profile_picture'] }}"
                const imgElements = document.querySelector('.agent-img');
                var agentPhono = formattedAgentPhono;
                var contacto = formattedContacto;
                if (agentimage) {
                    imgElements.src = agentimage;
                } else {
                    imgElements.src = Url + '/images/no_image.jpg';
                }
                imgElements.alt = "Description of the image";
                var agentPhoneNumber = agentPhono;
                var phoneNumber = agentPhono || '403-547-4102';
                var contacts = contacto || '403-253-5305';

                $('.whatsapp-text').click(function() {
                    var whatsappURL = 'https://api.whatsapp.com/send?phone=' + encodeURIComponent(
                        agentPhoneNumber);

                    window.open(whatsappURL, '_blank');
                });
                var phoneLink = document.querySelector('.phoneno');
                var contact = document.querySelector('.contactno');
                phoneLink.href = 'tel:' + phoneNumber;
                contact.href = 'tel:' + contacts;
                phoneLink.textContent = phoneNumber;
                contact.textContent = contacts;
            } else {
                var Url = "{{ env('Image_URL') }}";
                $('.agentname').text('Real Estate Professionals Inc.');

                const agentimage = Url + "/images/logo.svg"
                const imgElements = document.querySelector('.agent-img');
                if (agentimage) {
                    imgElements.src = agentimage;
                } else {
                    imgElements.src = Url + '/images/no_image.jpg';
                }
                imgElements.alt = "Description of the image";
                imgElements.style.objectFit = 'contain';
                var agentPhoneNumber = "";
                var phoneNumber = '403-547-4102';
                var contacts = '403-253-5305';

                $('.whatsapp-text').click(function() {
                    var whatsappURL = 'https://api.whatsapp.com/send?phone=' + encodeURIComponent(
                        agentPhoneNumber);

                    window.open(whatsappURL, '_blank');
                });
                var phoneLink = document.querySelector('.phoneno');
                var contact = document.querySelector('.contactno');
                phoneLink.href = 'tel:' + phoneNumber;
                contact.href = 'tel:' + contacts;
                phoneLink.textContent = phoneNumber;
                contact.textContent = contacts;
            }
            var baseUrl = "{{ env('BACKEND_URL') }}";

            var rawDate = "{{ $propertyDetails['DOMDate'] }}";
            if (rawDate) {
                var date = new Date(rawDate);
                var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September",
                    "October", "November", "December"
                ];
                var month = months[date.getMonth()];
                var day = date.getDate();
                var year = date.getFullYear();
                var hour = date.getHours();
                var minute = date.getMinutes();
                var ampm = hour >= 12 ? 'pm' : 'am';
                hour = hour % 12;
                hour = hour ? hour : 12;
                var formattedDate = month + ' ' + day + ', ' + year + ' at ' + hour + ':' + (minute < 10 ? '0' :
                    '') + minute + ' ' + ampm;




                // Get the current date
                let currentDate = new Date();

                // Convert to Central Time (CDT/CST based on Daylight Saving Time)
                let options = {
                    timeZone: 'America/Chicago', // Central Time Zone
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric',
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit',
                    timeZoneName: 'short' // Includes "CDT" or "CST"
                };

                // Format the date
                let formatter = new Intl.DateTimeFormat('en-US', options);
                let formattedDates = formatter.format(currentDate);

                // Update the text
                $('.updatedate').text('Listing Information Last Updated ' + formattedDates);




            }

            var description = {!! json_encode($propertyDetails['PublicRemarks'] ?? 'No description available') !!};
            $('.about .description').text(description);

            // Show only the first 4 lines initially
            $('.about .description').addClass('four-lines');

            // Toggle view more/less on button click
            $('.about .view-more-btn').click(function() {
                $('.about .description').toggleClass('four-lines');
                if ($('.about .description').hasClass('four-lines')) {
                    $('.about .description').addClass('four-lines');
                    $(this).text("View More");
                } else {
                    $('.about .description').removeClass('four-lines');
                    $(this).text("View Less");
                }
            });

            // const smallImageUrls = {!! json_encode($propertyDetails['images']) !!}.map(url => baseUrl + '/' + url);

            // const smallImagesContainer = document.querySelector('.small-img');

            // smallImageUrls.forEach(url => {
            //     const div = document.createElement('div');
            //     div.classList.add('small-img');
            //     const img = document.createElement('img');
            //     img.src = url;
            //     img.alt = 'Property Image';
            //     div.appendChild(img);
            //     smallImagesContainer.appendChild(div);
            // });


        });
    </script>
    <script>
        const shareIcon = document.getElementById('shareIcon');
        const shareDropdown = document.getElementById('shareDropdown');

        shareIcon.addEventListener('click', function() {
            shareDropdown.classList.toggle('show');
        });

        window.addEventListener('click', function(event) {
            if (!event.target.matches('.icon')) {
                shareDropdown.classList.remove('show');
            }
        });

        window.addEventListener('click', function(event) {
            if (!event.target.matches('.icon')) {
                shareDropdown.classList.remove('show');
            }
        });


        document.getElementById('facebookShare').addEventListener('click', function(event) {
            event.preventDefault();
            shareOnFacebook();
        });

        document.getElementById('whatsappShare').addEventListener('click', function(event) {
            event.preventDefault();
            shareOnWhatsApp();
        });

        document.getElementById('emailShare').addEventListener('click', function(event) {
            event.preventDefault();
            shareViaEmail();
        });
        document.getElementById('linkedinShare').addEventListener('click', function() {
            event.preventDefault();
            shareOnLinkedin();
        });

        document.getElementById('twitterShare').addEventListener('click', function() {
            event.preventDefault();
            shareOntwitter();
        });

        document.getElementById('copyUrl').addEventListener('click', function(event) {
            event.preventDefault();
            copyUrlToClipboard();
        });

        function shareOnFacebook() {
            const currentUrl = window.location.href;
            const facebookShareUrl = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(currentUrl);
            window.open(facebookShareUrl, '_blank');
        }

        function shareOnWhatsApp() {
            const currentUrl = window.location.href;
            const whatsappShareUrl = 'https://api.whatsapp.com/send?text=' + encodeURIComponent(currentUrl);
            window.open(whatsappShareUrl, '_blank');
        }

        function shareViaEmail() {
            const currentUrl = window.location.href;
            const emailSubject = 'Check out this link!';
            const emailBody = 'I thought you might be interested in this link: ' + currentUrl;
            const emailShareUrl = 'mailto:?subject=' + encodeURIComponent(emailSubject) + '&body=' + encodeURIComponent(
                emailBody);
            window.location.href = emailShareUrl;
        }

        function shareOnLinkedin() {
            const currentUrl = window.location.href;
            const emailBody = 'I thought you might be interested in this link: ' + currentUrl;
            const linkedinShareUrl = 'https://www.linkedin.com/shareArticle?mini=true&url=' + encodeURIComponent(
                currentUrl) + '&summary=' + encodeURIComponent(emailBody);
            window.open(linkedinShareUrl, '_blank');
        }

        function shareOntwitter() {
            const currentUrl = window.location.href;
            const emailBody = 'I thought you might be interested in this link: ' + currentUrl;
            const twitterShareUrl = 'https://twitter.com/share?url=' + encodeURIComponent(currentUrl) + '&text=' +
                encodeURIComponent(emailBody);
            window.open(twitterShareUrl, '_blank');
        }


        function copyUrlToClipboard() {
            const currentUrl = window.location.href;
            navigator.clipboard.writeText(currentUrl)
                .then(() => {
                    toastr.success('URL copied to clipboard!');
                })
                .catch(() => {
                    alert('Failed to copy URL to clipboard.');
                });
        }


        const printIcon = document.getElementById('printIcon');

        printIcon.addEventListener('click', function() {
            window.print();
        });




        var features = []
        features = [
            // "PetsAllowed",
            "{{ $propertyDetails['ExteriorFeatures'] }}",
            "{{ $propertyDetails['InteriorFeatures'] }}",
            "{{ $propertyDetails['AccessibilityFeatures'] }}",
            "{{ $propertyDetails['WaterfrontFeatures'] }}",
            "{{ $propertyDetails['CommunityFeatures'] }}",
            "{{ $propertyDetails['FireplaceFeatures'] }}",
            "{{ $propertyDetails['LotFeatures'] }}",
            "{{ $propertyDetails['PatioAndPorchFeatures'] }}",
            "{{ $propertyDetails['AssociationAmenities'] }}"
        ].filter(feature => feature);

        const featuresContainer = document.getElementById('featuresContainer');

        let combinedFeatures = [];

        for (const key in features) {
            if (Object.hasOwnProperty.call(features, key)) {
                const featureList = features[key].split(',');
                combinedFeatures = combinedFeatures.concat(featureList);
            }
        }

        if (combinedFeatures.length != 0) {
            combinedFeatures.forEach(feature => {
                const colDiv = document.createElement('div');
                colDiv.classList.add('col-6', 'col-sm-4', 'mb-3');

                const innerDiv = document.createElement('div');
                innerDiv.classList.add('d-flex', 'align-items-center', 'gap-2');

                const tickSpan = document.createElement('span');
                tickSpan.classList.add('material-symbols-outlined', 'tick');
                tickSpan.textContent = 'check_circle';

                const pElement = document.createElement('p');
                pElement.textContent = feature;

                innerDiv.appendChild(tickSpan);
                innerDiv.appendChild(pElement);
                colDiv.appendChild(innerDiv);
                featuresContainer.appendChild(colDiv);
            });
        } else {
            document.getElementById("section4").style.display = "none";
            $('.feat').hide();
        }


        // function fetchReviews(sortBy) {
        //     var baseUrl = "{{ env('BACKEND_URL') }}";
        //     var listing_id = "{{ $propertyDetails['ListingId'] }}";
        //     const apiUrl = `${baseUrl}/api/agents/getproperty-reviews?sortBy=${sortBy}&listing_id=${listing_id}`;

        //     return fetch(apiUrl)
        //         .then(response => {
        //             if (!response.ok) {
        //                 throw new Error('Network response was not ok');
        //             }
        //             return response.json();
        //         })
        //         .then(data => {
        //             console.log('data.reviews.data: ', data.reviews.data);
        //             return data.reviews.data;
        //         });
        // }

        // function renderReviews(propertyReviews) {
        //     // console.log('propertyReviews: ', propertyReviews);

        //     const reviewContainer = document.getElementById('reviews');
        //     reviewContainer.innerHTML = '';

        //     if (Object.keys(propertyReviews).length === 0) {
        //         reviewContainer.innerHTML = '<p>No reviews available</p>';
        //     } else {
        //         Object.values(propertyReviews).forEach(review => {
        //             const timeAgoString = timeAgo(review.created_at);
        //             let starsHtml = '';
        //             for (let i = 0; i < review.rating; i++) {
        //                 starsHtml += `<i class="ri-star-fill"></i>`;
        //             }
        //             const reviewDetails = `
    //         <div class="rev-sec mt-5">
    //             <div class="user">
    //                 <i class="ri-user-fill"></i>
    //             </div>
    //             <div>
    //                 <div class="greate">
    //                     <h6>${review.review_from}</h6>
    //                     ${starsHtml}
    //                 </div>
    //                 <div class="d-flex align-items-center gap-2 attachment">
    //                     <i class="ri-attachment-2"></i>
    //                     <p>${timeAgoString}</p>
    //                 </div>
    //                 <h5>${review.review}</h5>
    //             </div>
    //         </div>
    //     `;

        //             const reviewDiv = document.createElement('div');
        //             reviewDiv.classList.add('review');
        //             reviewDiv.innerHTML = reviewDetails;
        //             reviewContainer.appendChild(reviewDiv);
        //         });
        //     }
        // }

        // function timeAgo(timestamp) {
        //     const now = new Date();
        //     const previous = new Date(timestamp);
        //     const seconds = Math.floor((now - previous) / 1000);

        //     let interval = Math.floor(seconds / 31536000);
        //     if (interval > 1) {
        //         return `${interval} years ago`;
        //     }
        //     interval = Math.floor(seconds / 2592000);
        //     if (interval > 1) {
        //         return `${interval} months ago`;
        //     }
        //     interval = Math.floor(seconds / 86400);
        //     if (interval > 1) {
        //         return `${interval} days ago`;
        //     }
        //     interval = Math.floor(seconds / 3600);
        //     if (interval > 1) {
        //         return `${interval} hours ago`;
        //     }
        //     interval = Math.floor(seconds / 60);
        //     if (interval > 1) {
        //         return `${interval} minutes ago`;
        //     }
        //     return 'just now';
        // }

        const config = {
            type: 'pie',
            data: {

                datasets: [{
                    label: 'Mortgage Data',
                    data: [],
                    backgroundColor: [],
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    },

                }
            }
        };
        const canvas = document.getElementById('mortgage-chart');

        const ctx = canvas.getContext('2d');
        const chart = new Chart(ctx, config);

        function calculateMortgage() {
            const defaultValues = {
                totalAmount: parseFloat(document.getElementById('totalAmount').value) || 0,
                downPaymentPercentage: parseFloat(document.getElementById('downPaymentPercentage').value) || 0,
                annualInterestRate: parseFloat(document.getElementById('interestRate').value) || 0,
                loanTermYears: parseInt(document.getElementById('loanTermYears').value, 10) || 0,
                propertyTaxPercentage: parseFloat(document.getElementById('propertyTaxPercentage').value) || 0,
                homeInsuranceAmount: parseFloat(document.getElementById('homeInsuranceAmount').value) || 0,
                monthlyHoaFeesAmount: parseFloat(document.getElementById('monthlyHoaFeesAmount').value) || 0,
                pmiPercentage: parseFloat(document.getElementById('pmiPercentage').value) || 0
            };

            const formatCurrency = (amount) => {
                return new Intl.NumberFormat('en-US', {
                    style: 'currency',
                    currency: 'USD'
                }).format(amount);
            };

            document.getElementById('totalAmount').value = defaultValues.totalAmount.toFixed(0);
            document.getElementById('downPaymentPercentage').value = defaultValues.downPaymentPercentage.toFixed(0);
            document.getElementById('interestRate').value = defaultValues.annualInterestRate.toFixed(0);
            document.getElementById('loanTermYears').value = defaultValues.loanTermYears.toFixed(0);
            document.getElementById('propertyTaxPercentage').value = defaultValues.propertyTaxPercentage.toFixed(0);
            document.getElementById('homeInsuranceAmount').value = defaultValues.homeInsuranceAmount.toFixed(0);
            document.getElementById('monthlyHoaFeesAmount').value = defaultValues.monthlyHoaFeesAmount.toFixed(0);
            document.getElementById('pmiPercentage').value = defaultValues.pmiPercentage.toFixed(0);

            const totalAmount = defaultValues.totalAmount;
            const downPaymentPercentage = defaultValues.downPaymentPercentage;
            const annualInterestRate = defaultValues.annualInterestRate;
            const loanTermYears = defaultValues.loanTermYears;
            const propertyTaxPercentage = parseFloat(defaultValues.propertyTaxPercentage) / 100;
            const homeInsurance = parseFloat(defaultValues.homeInsuranceAmount);
            const monthlyHoaFees = parseFloat(defaultValues.monthlyHoaFeesAmount);
            const pmiPercentage = parseFloat(defaultValues.pmiPercentage) / 100;

            const downPaymentAmount = totalAmount * (downPaymentPercentage / 100);
            const loanAmount = totalAmount - downPaymentAmount;
            const monthlyInterestRate = annualInterestRate / (12 * 100);
            const loanTermMonths = loanTermYears * 12;

            const monthlyPropertyTax = totalAmount * propertyTaxPercentage / 12;
            const monthlyPmi = loanAmount * pmiPercentage / 12;

            const monthlyPayment = loanAmount * (monthlyInterestRate * Math.pow(1 + monthlyInterestRate, loanTermMonths)) /
                (Math.pow(1 + monthlyInterestRate, loanTermMonths) - 1);
            const totalMonthlyPayment = monthlyPayment + monthlyPropertyTax + homeInsurance + monthlyHoaFees + monthlyPmi;

            document.getElementById('downPayment').textContent = formatCurrency(downPaymentAmount);
            document.getElementById('loanAmount').textContent = formatCurrency(loanAmount);
            document.getElementById('monthlyPayment').textContent = formatCurrency(monthlyPayment);
            const mortgagePriceElement = document.querySelector('.mortgage-circle .mortgage-price');
            mortgagePriceElement.textContent = formatCurrency(totalMonthlyPayment);
            document.getElementById('propertyTax').textContent = formatCurrency(monthlyPropertyTax);
            document.getElementById('homeInsurance').textContent = formatCurrency(homeInsurance);
            document.getElementById('pmi').textContent = formatCurrency(monthlyPmi);
            document.getElementById('monthlyHoaFees').textContent = formatCurrency(monthlyHoaFees);


            const values = [
                annualInterestRate,
                loanTermYears,
                propertyTaxPercentage * 100,
                homeInsurance,
                monthlyHoaFees,
                pmiPercentage * 100
            ];

            const colors = [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(153, 102, 255)',
                'rgb(255, 159, 64)'
            ];

            config.data.datasets[0].data = values.slice(0, colors.length);
            config.data.datasets[0].backgroundColor = colors;

            chart.update();
        }

        document.querySelectorAll('.inputs input').forEach(input => {
            input.addEventListener('input', calculateMortgage);
        });

        calculateMortgage();

        document.addEventListener('DOMContentLoaded', function() {
            const inputs = document.querySelectorAll('.mortgage-calc input.percentage[type="text"]');

            inputs.forEach(input => {
                input.addEventListener('input', function() {
                    this.value = this.value.replace(/[^0-9.]/g, '');

                    if (this.value.charAt(0) === '.') {
                        this.value = '0' + this.value;
                    }

                    if ((this.value.match(/\./g) || []).length > 1) {
                        const dotIndex = this.value.indexOf('.');
                        this.value = this.value.slice(0, dotIndex) + this.value.slice(dotIndex + 1)
                            .replace(/\./g, '');
                    }
                    if (this.value.endsWith('.')) {
                        this.value = this.value.slice(0, -1);
                    }

                    const floatValue = parseFloat(this.value);
                    if (floatValue > 100) {
                        this.value = '100';
                    }

                    calculateMortgage();
                });
            });
        });
        const roomDataString = {!! json_encode($propertyRooms) !!};
        const roomData = JSON.parse(roomDataString);
        const floorPlansContainer = document.getElementById('section5');

        if (Array.isArray(roomData) && roomData.length > 0) {
            const groupedRooms = roomData.reduce((acc, room) => {
                acc[room.RoomLevel] = acc[room.RoomLevel] || [];
                acc[room.RoomLevel].push(room);
                return acc;
            }, {});

            Object.keys(groupedRooms).forEach(level => {
                const levelRooms = groupedRooms[level];

                const levelTable = document.createElement('table');
                levelTable.classList.add('level');

                const levelCaption = document.createElement('caption');
                levelCaption.textContent = `${level} Level`;
                levelTable.appendChild(levelCaption);

                const tableBody = document.createElement('tbody');

                levelRooms.forEach(room => {
                    const row = tableBody.insertRow();
                    const cellRoomType = row.insertCell();
                    const cellDimensions = row.insertCell();

                    cellRoomType.textContent = room.RoomType;
                    const dimensionsParts = room.RoomDimensions.split(' x ').map(part => {
                        return part.split('`').map(subpart => {
                        return parseFloat(subpart.replace(/[^\d.]/g, ''));
                    }).join('.');
                }).map(part => part + ' Ft');

                cellDimensions.textContent = dimensionsParts.join(' x ');
            });

            levelTable.appendChild(tableBody);
            floorPlansContainer.appendChild(levelTable);
        });

        floorPlansContainer.style.display = 'block';
        $('.floors').show();
    } else {
        floorPlansContainer.style.display = 'none';
        $('.floors').hide();
    }


    function addToFavorites(propertyId, favoriteStatus) {
        if ("{{ session('username') }}") {
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
                    var favIcon = document.getElementById(`fav-icon`);
                    if (favoriteStatus === 1) {
                        $.toast({
                            text: 'Property added to favorites',
                            showHideTransition: 'slide',
                            icon: 'success',
                            loaderBg: '#f2a654',
                            position: 'top-right'
                        });
                        favIcon.querySelector("i").classList.add("fa-solid", "fa-heart", "red-background");
                        favIcon.querySelector("i").classList.remove("ri-heart-line");
                        favIcons.classList.add('filled');
                    } else {
                        $.toast({
                            text: 'Property removed from favorites',
                            showHideTransition: 'slide',
                            icon: 'success',
                            loaderBg: '#f2a654',
                            position: 'top-right'
                        });
                        favIcon.querySelector("i").classList.remove("fa-solid", "fa-heart",
                            "red-background");
                        favIcon.querySelector("i").classList.add("ri-heart-line");
                        favIcons.classList.add('filled');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Toggle failed');
                }
            });
        } else {
            $('#exampleModalToggle').modal('show');
        }
    }

    var listingId = "{{ $propertyDetails['ListingId'] }}";
    var favIcons = document.getElementById(`fav-icon-${listingId}`);

    function toggleFavorite() {
        // alert('here');
        var session = "{{ session('username') }}";
        if (!session) {
            document.getElementById('imageModal').style.display = 'none';
            $('#exampleModalToggle').modal('show');

        } else {

            var listingId = "{{ $propertyDetails['ListingId'] }}";
            var favIcon = document.getElementById(`fav-icon`);
            if (favIcon) {
                var heartIcon = favIcon.querySelector("i");
                heartIcon.classList.toggle("fa-solid");
                heartIcon.classList.toggle("fa-heart");
                heartIcon.classList.toggle("red-background");

                var isFavorite = heartIcon.classList.contains("fa-solid");

                addToFavorites(listingId, isFavorite ? 1 : 0);
            } else {
                console.error('Favorite icon not found');
            }
        }
    }


    function toggleFavorites(listingId) {
        var session = "{{ session('username') }}";
        if (!session) {
            $('#exampleModalToggle').modal('show');
        } else {

            var favIcons = document.getElementById(`fav-icon-${listingId}`);
            if (favIcons) {
                favIcons.classList.toggle('filled');
                favIcons.classList.toggle('white-background');
                var isFavorite = favIcons.classList.contains('filled');
                addToFavorite(listingId, isFavorite ? 1 : 0);
            } else {
                console.error('Favorite icon not found');
            }
        }
    }

    function addToFavorite(propertyId, favoriteStatus) {
        if ("{{ session('username') }}") {
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
                    var favIcon = document.getElementById(`fav-icon`);
                    if (favoriteStatus === 1) {
                        $.toast({
                            text: 'Property added to favorites',
                            showHideTransition: 'slide',
                            icon: 'success',
                            loaderBg: '#f2a654',
                            position: 'top-right'
                        });

                        favIcons.classList.add('filled');
                    } else {
                        $.toast({
                            text: 'Property removed from favorites',
                            showHideTransition: 'slide',
                            icon: 'success',
                            loaderBg: '#f2a654',
                            position: 'top-right'
                        });

                        favIcons.classList.remove('filled');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Toggle failed');
                }
            });
        } else {
            $('#exampleModalToggle').modal('show');
        }
    }

    var userId = "{{ session('user_id') }}";

    function getmarkedlistings() {

        $.ajax({
            url: "{{ route('get-listings') }}",
            type: 'get',
            data: {
                user_id: userId
            },
            success: function(response) {
                var favoriteProperties = response.favorite_properties;
                favoriteProperties.forEach(function(propertyId) {
                    var favIcons = document.getElementById(`fav-icon-${propertyId}`);
                        if (favIcons) {
                            favIcons.classList.add('filled');
                            favIcons.classList.add('white-background');
                        }
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error getting marked listings');
                }
            });
        }

        if (userId) {
            getmarkedlistings();
        }
    </script>
@endsection
