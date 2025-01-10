@extends('layouts.master')
@section('content')
    <title>
        404
    </title>

    <style>
        .find-realtor,
        .How-Realtor-can-help .right {
            border: 1px solid #ccc;
            height: 350px;
            border-radius: 5px;
            overflow: hidden;
        }

        .find-realtor .top {
            height: 60px;
            background-color: var(--primary-500);
            display: flex;
            align-items: center;
        }

        .find-realtor .top h6 {
            color: #fff;
            margin-bottom: 0;
            padding-left: 15px;
            font-size: 20px;
        }


        .find-realtor .bottom p {
            padding: 2rem;
            font-size: 16px;
        }

        .How-Realtor-can-help .right img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }



        .error-div {
            height: 300px;
            padding: 0 2rem;
            text-align: center;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .error-div h1 {
            font-size: 25px;
        }

        .error-div h6 {
            margin-top: 5rem;
            font-size: 32px;
            font-weight: 600
        }

        .bg-gray {
            background-color: #ccc;
        }


        #nf {
            font-size: 30px
        }

        @media (max-width:400px) {
            .error-div h1 {
                font-size: 20px;
            }

            .error-div h6 {
                font-size: 25px;
            }

            .How-Realtor-can-help h2 {
                font-size: 20px;
            }
        }

        @media (min-width:768px) {
            .social-widget {
                text-align: end !important;
            }

        }

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
            z-index: 1000;
            max-height: 200px;
            overflow-y: auto;
            background-color: white;
            width: 100%;
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
        }

        .category {
            font-weight: bold;
            background: #10579f;
            color: #fff;
            padding: 4px 12px;
        }

        .suggestion:hover {
            background-color: #007bff;
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

        .pac-container {
            z-index: 99999999999 !important;
        }

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

        .white {
            color: #fff !important;
        }
    </style>

<div class=''>
    <div class='error-div'>
        <h1 id="nf"><b>Oh No!</b></h1>
        <h1>The page you are looking for does not exist.</h1>
        <h6>Start a New Search</h6>

    </div>
         <div class=' pb-5'>
            <section class="home-banner-style3 p0">
                <img src="/images/homebanner.jpg" alt="">
                <div class="home-style3">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 advance-style3 inner-banner-style3">
                                <div class="d-flex flex-column justify-content-center p-3 ">
                                    <h2 class="hero-title animate-up-1 text-shadow text-white">
                                        REAL ESTATE PROFESSIONALS <br>you can count on - Go With The Pros™️!
                                    </h2>
                                    <p class="text-white text-shadow fs-6 home-p">
                                        Since 2002, we’ve made home buying and
                                        selling in Calgary and surrounding areas <span class="fw-bold"> <br>SIMPLE, STRESS
                                            FREE and STRAIGHT FORWARD </span> for our clients.
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
                                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                                data-bs-target="#profile" type="button" role="tab"
                                                aria-controls="profile" aria-selected="false">
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
                                                                    placeholder="Search by address, neighborhood, city or postal code">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5 col-lg-5">
                                                        <div
                                                            class="d-flex gap-3 align-items-center justify-content-end justify-content-md-end mt-3 mt-md-0">
                                                            <a href="/search" class="advance-search-btn">
                                                                Advanced
                                                            </a>
                                                            <a class="ud-btn btn-primary" href="/search" type="submit"
                                                                id="searchButton">Search
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel"
                                            aria-labelledby="profile-tab">
                                            <div class="at-home5">
                                                <form method="POST" action="/homeEvalutaion" accept-charset="UTF-8"
                                                    class="form-search
                                    position-relative">
                                                    <input name="_token" type="hidden"
                                                        value="spyD17PFpFIoQSyBkjVfCk6nTbCo6Ps8a55VbGbP">
                                                    <div class="row align-items-center">
                                                        <div class="col-6 col-sm bdrr1 bdrrn">
                                                            <input
                                                                class="form-control bgc-f7 bdrs12 border-0 address-inputs pac-target-input"
                                                                placeholder="Enter your address" id="address-input"
                                                                required="" name="address" type="text"
                                                                autocomplete="off">
                                                            <div id="suggestions"></div>
                                                        </div>

                                                        <div class="col-6 col-sm">
                                                            <input class="form-control bgc-f7 bdrs12 border-0"
                                                                placeholder="Enter your email" id="email-inputss"
                                                                required="" type="text">
                                                        </div>

                                                        <div class="submitBoxWidth">
                                                            <div
                                                                class="d-flex align-items-center justify-content-end mt-2 mt-md-0 me-2">
                                                                <button class="ud-btn btn-thm" type="button"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#staticBackdrop">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="suggestion-list"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>


        <section class="py90 bcg-primary py-5 mb-4">
            <div class="container">

                <div class="row rep-style-3">
                    <div class="col-md-6 col-lg-3">

                        <h2 class="title text-white bork-built">
                            A Brokerage Built For REALTOR<span class='r'>®️</span> Success
                        </h2>
                        <a class="ud-btn btn-outline-white mt-4" href="{{ route('join-rep') }}">
                            Join REP
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-3 px-4 bt-floating">

                        <img src="/frontend/images/home/lucrative.webp" class="whyrepIcons mb20" />
                        <h4 class="text-white">Instant Savings at REP!</h4>
                        <p class="text-white">
                            We take pride in offering one of the lowest brokerage fees and monthly administrative charges
                            for our
                            associates in Alberta, alongside our class-leading in-house commissions advance program, which
                            ensures more money stays in your pockets – where it belongs!
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-3 px-4 bt-floating">
                        <img src="images/home/comprehensiveSupport.webp" class="whyrepIcons mb20" />
                        <h4 class="text-white">We’ve Got Your Back!</h4>
                        <p class="text-white">
                            It all begins with our class-leading conveyancing service, which starts with our detailed
                            contract
                            reviews and ends with our ultra fast commission payouts. We also provide accessible management
                            support and an on-site real estate lawyer and mortgage associate to help you get the deal done!

                        </p>
                    </div>
                    <div class="col-md-6  col-lg-3 px-4 bt-floating">
                        <img src="images/home/established-Reputation.webp" class="whyrepIcons mb20" />
                        <h4 class="text-white">Work and Play Hard!</h4>
                        <p class="text-white">
                            We’re focused on investing in your growth. Our brokerage offers educational courses,
                            presentations
                            from industry experts and a class leading 1:1 mentorship program. Throughout the year, we also
                            host
                            various social events for our REALTORS®️ and their family, like our Winter Holiday Celebration!

                        </p>
                    </div>
                </div>
                <div class="row"></div>

            </div>
        </section>

        <div class='container How-Realtor-can-help mt-5'>
            <div class='text-center'>
                <h2>How a REALTOR® Can Help</h2>
            </div>
            <div class='row my-5'>
                <div class="col-md-5">
                    <div class="find-realtor">
                        <div class="top">
                            <h6>Find a REALTOR®</h6>
                        </div>
                        <div class="bottom">
                            <p>For finding a better home, Connect with a REALTOR to make your search better.</p>
                            <div class='text-center'><a href="/our-professionals"
                                    class='ud-btn blue-btns btn-primary'>Find a REALTOR®</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 mt-md-0 col-md-7">
                    <div class="right">
                        <img src="/images/pexels-a-darmel-7641899.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-center text-center">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Get a Listing Appointment</h1>
                    <button type="button" class="btn-close m-0  close-button" data-bs-dismiss="modal"
                        aria-label="Close"></button>
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
                                        <input type="email" class="form-control" placeholder="Email" required id="email-req"
                                            name="email" value="{{ $email ?? '' }}">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="heading-color ff-heading fw600 mb10">Property Address<span
                                                style="color: red">*</span></label>
                                        <!-- Check if $address is set -->
                                        @if (isset($address))
                                            <!-- If address is pre-filled, populate the input field -->
                                            <input type="text" class="form-control address-inputs"
                                                placeholder="Property Address" required name="property_address"
                                                value="{{ $address }}">
                                        @else
                                            <!-- If address is not pre-filled, load Google Places Autocomplete -->
                                            <input type="text" id="property_address"
                                                class="form-control address-inputs" placeholder="Property Address"
                                                required name="property_address">
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


    <script
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initMaps"
        async defer></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
@endsection()

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('.ud-btn.btn-thm');

        buttons.forEach(function(button) {
            button.addEventListener('click', function() {

                var address = document.getElementById('address-input').value;
                
                var email = document.getElementById('email-inputss').value;
                // alert(email);

                document.querySelector('input[name="property_address"]').value = address;
                // document.querySelector('input[name="email"]').value = email;
                // alert(email);
                document.getElementById('email-req').value = email

                // Assuming you have a function to show the modal
                var modal = document.getElementById('staticBackdrop');
                var modalInstance = new bootstrap.Modal(modal);
                modalInstance.show();
            });
        });
    });

    // Function to reset form fields
    function resetFormFields() {
        document.getElementById('form-style1').reset();
    }

    // Add event listener to form submission
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('form-style1');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            const validationRules = {
                first_name: {
                    required: true
                },
                last_name: {
                    required: true
                },
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
            };

            const isValid = Object.keys(validationRules).every(field => {
                const input = form[field];
                return validationRules[field].required ? input.value.trim() !== '' : true;
            });

            if (!isValid) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Please fill out all required fields.'
                });
                return;
            }

            const formData = new FormData(form);
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
                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'An error occurred while submitting the form. Please try again later.'
                    });
                });
        });

        // Button click event for modal
        // const buttons = document.querySelectorAll('.ud-btn.btn-thm');
        // buttons.forEach(function(button) {
        //     button.addEventListener('click', function() {
        //         const address = document.getElementById('address-input').value;
        //         const email = document.getElementById('email-input').value;

        //         document.querySelector('input[name="property_address"]').value = address;
        //         document.querySelector('input[name="email"]').value = email;

        //         const modal = document.getElementById('staticBackdrop');
        //         const modalInstance = new bootstrap.Modal(modal);
        //         modalInstance.show();
        //     });
        // });
    });

    var header = '{{ env('BACKEND_URL') }}';

    initMaps();

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
                        component.types.includes('administrative_area_level_1') && component
                        .short_name === 'AB'
                    );

                    if (province) {
                        const address = place.formatted_address;
                        console.log("Address from the Province of Alberta in Canada: ", address);
                    } else {
                        console.log("Address is not from the Province of Alberta in Canada.");
                    }
                } else {
                    console.log("Address is not from Canada.");
                }
            });
        });
    }

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
                            newHref = '/search/' + encodeURIComponent(city) + '/' + encodeURIComponent(
                                neighborhood);
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
                        suggestionList.innerHTML =
                            ''; // Clear suggestion list if query length is less than three
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
                                selectedIndex = suggestions.length -
                                    1; // Loop back to the last suggestion
                            }
                            highlightSuggestion(suggestions, selectedIndex);
                        } else if (event.key === 'Enter') {
                            event.preventDefault();
                            if (selectedIndex >= 0 && selectedIndex < suggestions.length) {
                                var suggestionElement = suggestions[selectedIndex];
                                var suggestionText = suggestionElement.textContent.split(',')[0]
                                    .trim(); // Get the city name only
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
                        results.push({
                            city: city,
                            subdivision: '',
                            state: state
                        });
                        localSuggestions[state][city].forEach(function(subdivision) {
                            results.push({
                                city: city,
                                subdivision: subdivision,
                                state: state
                            });
                        });
                    });
                } else {
                    Object.keys(localSuggestions[state]).forEach(function(city) {
                        if (city.toLowerCase().includes(query.toLowerCase())) {
                            results.push({
                                city: city,
                                subdivision: '',
                                state: state
                            });
                        }
                        localSuggestions[state][city].forEach(function(subdivision) {
                            if (subdivision.toLowerCase().includes(query
                                    .toLowerCase())) {
                                results.push({
                                    city: city,
                                    subdivision: subdivision,
                                    state: state
                                });
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
                        window.location.href = '/search/' + suggestion.city.toLowerCase()
                            .replace(/\s+/g, '-');
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
                    var boldSuggestion =
                        `${suggestion.subdivision}, ${suggestion.city}, ${suggestion.state}`;
                    boldSuggestion = boldSuggestion.replace(new RegExp(query, 'gi'), '<b>$&</b>');
                    suggestionElement.innerHTML = boldSuggestion;
                    suggestionElement.className = 'suggestion';
                    suggestionElement.addEventListener('click', function() {
                        window.location.href = '/search/' + suggestion.city.toLowerCase()
                            .replace(/\s+/g, '-') +
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
                        var boldSuggestion = suggestion.replace(new RegExp(query, 'gi'),
                            '<b>$&</b>');
                        suggestionElement.innerHTML = boldSuggestion;
                        suggestionElement.className = 'suggestion';

                        if (category === 'MLS® Number') {
                            suggestionElement.addEventListener('click', function() {
                                var mlsId = suggestion.split(' - ')[
                                    0]; // Take the part before "-"
                                window.location.href = '/property-detail/' + mlsId;
                            });
                        } else {
                            suggestionElement.addEventListener('click', function() {
                                var slugUrl = suggestedAgents.slug_urls[index];
                                var listingId = suggestedAgents.listingIds[index];
                                if (slugUrl) {
                                    window.location.href = '/property-detail/' +
                                        slugUrl;
                                } else if (listingId) {
                                    window.location.href = '/property-detail/' +
                                        listingId;
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
                var suggestionText = event.target.textContent.split(',')[0]
                    .trim(); // Get the city name only
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
</script>
