@extends('layouts.pages')
@section('content')

<style>
    .listing-style5 .list-thumb {
  height: auto !important;
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

.iconbox-style2 {
    cursor:pointer;
}

.white-background {
background-color: white;
/* Set the background color to white */
}
.blk-lyr {
    position: absolute;
    top: 0;
    background: #00000054;
    height: 100%;
    width: 100%;
}
div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm {
    border: 0;
    border-radius: .25em;
    background: initial;
    background-color: #10579f;
    color: #fff;
    font-size: 1em;
}
.mobile-fs{
    color: #10579f;
}
</style>
    <!-- Home Banner Style V1 -->
    <section class="home-banner-style3 p0 home-e">
        <img class='h-100 w-100 object-fit-cover' src="/images/final-home-ev.jpg" alt="">
        <div class="home-style3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="hero-title animate-up-1 text-shadow text-white">
                        Free Home Evaluation <br/> How Much Is Your Home Worth?

                        </h2>
                        <p class="text-white text-shadow fs-6">
                        Take advantage of our Free Home Evaluation service! Fill out our Home Evaluation Intake Form to obtain a competitive market analysis (“CMA”) for your home. After receiving your CMA, we would be pleased to work with you to maximize your home’s exposure, via our internal and external marketing networks, to ensure you get the best price for your home.

                        </p>
                        <div  onclick="scrollToSection('section18')">
                        <button class='ud-btn btn-thm me-0 me-sm-4'>Get Started</button>
                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular Property -->
    <!-- How We Help -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto wow fadeInUp" data-wow-delay="300ms">
                    <div class="main-title text-center">
                        <h2 class="title">Our Free Home Evaluation Service Will Tell You</h2>
                        <!-- <p class="paragraph">
                            This real estate website builder is equipped with every tool
                            you’d need to deliver a product that any realtor or real
                            estate agency would be delighted to have
                        </p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div
                    class="col-sm-12 col-lg-4 wow fadeInLeft"
                    data-wow-delay="00ms"
                >
                    <div class="iconbox-style2 height-card text-center">
                        <div class="icon">
                            <img src="images/icon/property-buy.svg" alt="" />
                        </div>
                        <div class="iconbox-content">
                            <h4 class="title">Property Worth</h4>
                            <p class="text">
                            What Your Property Is Currently Worth

                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="col-sm-12 col-lg-4 wow fadeInLeft"
                    data-wow-delay="00ms"
                >
                    <div class="iconbox-style2 height-card text-center">
                        <div class="icon">
                            <img src="images/icon/property-buy.svg" alt="" />
                        </div>
                        <div class="iconbox-content">
                            <h4 class="title">Compare Property</h4>
                            <p class="text">
                            Comparable Homes Currently Listed For Sale In and Around Your Community
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="col-sm-12 col-lg-4 wow fadeInUp"
                    data-wow-delay="300ms"
                >
                    <div class="iconbox-style2 height-card text-center">
                        <div class="icon">
                            <img src="images/icon/property-sell.svg" alt="" />
                        </div>
                        <div class="iconbox-content">
                            <h4 class="title">Active Listings</h4>
                            <p class="text">
                            Comparable Homes Recently Sold In and Around Your Community
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section
        class="cta-banner4 d-flex align-items-center"
        data-stellar-background-ratio="0.1"
    >
        <div class="container">
            <div class="row">
                <div
                    class="col-xl-6 col-xxl-8 wow fadeInUp"
                    data-wow-delay="300ms"
                >
                    <div class="cta-style4 position-relative">
                        <!-- <h6 class="sub-title fw400 text-white">BUY OR SELL</h6> -->
                        <h1 class="cta-title mb20 text-white list-title">
                            Would You Like To <br />Speak To a REALTOR<span>&#174;</span> at Real Estate Professionals Inc.?
                        </h1>

                        <div class="d-block d-sm-flex mt30"  onclick="scrollToSection('section18')">
                            <!-- <a
                                href="{{ route('home-evaluation') }}"
                                class="ud-btn btn-thm me-0 me-sm-4"
                            >Get Started
                            </a> -->
                            <button class='ud-btn btn-thm me-0 me-sm-4'>Get Started</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Explore Comminities -->
    <section class="pb50 pt-5 pb30-md">
        <div class="container">
            <div
                class="row wow fadeInUp align-items-center"
                data-wow-delay="00ms"
            >
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
                    <div
                        class="dark-light-navtab style2 text-start text-lg-end mt-0 mt-lg-4 mb-4"
                    >
                        <div class="text-start text-lg-end mb-3">
                            <a class="ud-btn btn-outline-rep bg-red" href="/search/featured"
                            >See All Featured Listings</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row home-v">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="300ms">
                    <div class="tab-content" id="pills-tabContent">
                        <div
                            class="tab-pane fade show active"
                            id="pills-home"
                            role="tabpanel"
                            aria-labelledby="pills-home-tab"
                        >
                            <div class="row">
                                @foreach($featuredListings as $singleListing)
                                    @php
                                        // $files = count(\Illuminate\Support\Facades\File::files('properties/images/'.$singleListing->property->listing_numeric_key.'/'));
                                        // if($files == 1){
                                        //     continue;
                                        // }
                                        $url = isset($singleListing['slug_url']) ? $singleListing['slug_url'] : $singleListing['ListingId'];
                                    @endphp

                                    <div class="col-sm-6 col-lg-4 col-xl-3">
                                        <div class="listing-style5">
                                            <div class="list-thumb">
                                                <div
                                                    class="slider-1-grid owl-carousel owl-theme wow fadeInUp"
                                                    data-wow-delay="300ms"
                                                >
                                                        <div class="item">
                                                             <a
                                                        href="{{ url('/property-detail/'.$url) }}"
                                                        data-bs-toggle="tooltip"
                                                        data-bs-placement="top"
                                                        title="Preview"
                                                        target="_blank"
                                                    >
                                                            <img class="w-100"
                                                            src="{{ $singleListing['image_url'] }}"
                                                            alt=""
                                                            style="height: 233px"
                                                            onerror="this.src='{{ asset('images/no_image.jpg') }}';"
                                                        />
                                                        </a>
                                                        
                                                        </div>                                                    
                                                </div>
                                                <div class="list-tag fz12">
                                                    <i class="fa-thin fa-star me-2"></i>Featured
                                                </div>
                                                <div class="list-meta2">
                                                    <a href="javascript:void(0)" 
                                                    data-bs-toggle="tooltip" 
                                                    data-bs-placement="top" 
                                                    title="Favourite" 
                                                    class="set-as-fav"
                                                    onclick="toggleFavorite('<?php echo $singleListing['ListingId']; ?>')">
                                                    <span class="flaticon-like" id="fav-icon-<?php echo $singleListing['ListingId']; ?>"></span>
                                                 </a>
                                                 

                                                        @php
                                                        $url = isset($singleListing['slug_url']) ? $singleListing['slug_url'] : $singleListing['ListingId'];
                                                    @endphp
                                                    
                                                </div>
                                            </div>
                                            <a
                                                        href="{{ url('/property-detail/'.$url) }}"
                                                        
                                                        target="_blank"
                                                    >
                                            <div class="list-content">
                                                 <div class="list-price mb-2">
                                                    @if ($singleListing['PropertyType'] === 'Commercial' &&
                                                         isset($singleListing['LeaseAmount']) &&
                                                         isset($singleListing['LeaseAmountFrequency']) &&
                                                         !empty($singleListing['LeaseAmount']) &&
                                                         !empty($singleListing['LeaseAmountFrequency']))
                                                        ${{ number_format($singleListing['LeaseAmount']) }} / {{ $singleListing['LeaseAmountFrequency'] }}
                                                        @if (!empty($singleListing['LeaseMeasure']))
                                                            / {{ $singleListing['LeaseMeasure'] }}
                                                        @endif
                                                    @else
                                                        ${{ number_format($singleListing['ListPrice']) }}
                                                    @endif
                                                </div>
                                                <h6 class="list-title">
                                                    @php
                                                    $UnparsedAddress = '';
                                                
                                                    if ($singleListing['StreetNumber']) {
                                                        $UnparsedAddress .= $singleListing['StreetNumber'];
                                                    }
                                                
                                                    if ($singleListing['StreetDirPrefix']) {
                                                        $UnparsedAddress .= ' ' . $singleListing['StreetDirPrefix'];
                                                    }
                                                
                                                    if ($singleListing['StreetName']) {
                                                        $UnparsedAddress .= ' ' . $singleListing['StreetName'];
                                                    }
                                                
                                                    if ($singleListing['StreetSuffix']) {
                                                        $UnparsedAddress .= ' ' . $singleListing['StreetSuffix'];
                                                    }
                                                
                                                    if ($singleListing['UnitNumber']) {
                                                        $UnparsedAddress .= ' ' . $singleListing['UnitNumber'];
                                                    }
                                                @endphp
                                                
                                                 
                                                    {{ $singleListing['UnparsedAddress'] ? $singleListing['UnparsedAddress'] . ', ' : $UnparsedAddress }}
                                                    {{ $singleListing['City'] ? $singleListing['City'] . ', ' : '' }}
                                                    {{ $singleListing['StateOrProvince'] }}
                                                
                                                
                                                </h6>
                                                <p class="list-text">{{ $singleListing['PropertyType'] }}</p>
                                                <div
                                                    class="list-meta d-flex align-items-center gap-3"
                                                >
                                                @if(isset($singleListing['BathroomsFull']) && $singleListing['BathroomsFull'] !== null && $singleListing['BathroomsFull'] !== '')
                                                <p>
                                                    <span class="flaticon-bed"></span>{{ $singleListing['BathroomsFull'] }} bed
                                                </p>
                                            @endif
                                            
                                            @if(isset($singleListing['BedroomsTotal']) && $singleListing['BedroomsTotal'] !== null && $singleListing['BedroomsTotal'] !== '')
                                                <p>
                                                    <span class="flaticon-shower"></span>{{ $singleListing['BedroomsTotal'] }} bath
                                                </p>
                                            @endif
                                            
                                                     @if($singleListing['BuildingAreaTotalSF'])
                                                        <p><span class="flaticon-expand"></span>{{ floor($singleListing['BuildingAreaTotalSF']) }} sqft</p>
                                                    @elseif($singleListing['LivingAreaSF'])
                                                        <p><span class="flaticon-expand"></span>{{ floor($singleListing['LivingAreaSF']) }} sqft</p>
                                                    @endif
                                                    
                                                </div>

                                                <span class="mlsNumber">MLS® Number: {{ $singleListing['ListingId'] }}</span>
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <span id="intake-form"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Explore Apartment -->
    <!-- Our CTA -->
    <section class="headerForm-style"  id="section18" >
        <div class="blk-lyr"></div>
        <div class="container"  id="Formsection">
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInLeft">
                    <h2 class="cta-title text-center text-white">
                        Get a Listing Appointment
                    </h2>
                    <!-- <p class="cta-text mb25 text-white fs18 text-center">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                        do <br class="d-none d-md-block" />
                        eiusmod tempor incididunt.
                    </p> -->
                    <div class="card p-3 mt-4">
                        <div class="card-body">
                            <form action="" class="form-style1" id="form-style1">
                                <div class="row row-gap-3">
                                    <div class="col-md-6">
                                        <label class="heading-color ff-heading fw600 mb10">First Name<span style="color: red">*</span></label>
                                        <input type="text" class="form-control" placeholder="First Name"
                                            id="firstname" required name="first_name" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="heading-color ff-heading fw600 mb10">Last Name<span style="color: red">*</span></label>
                                        <input type="text" class="form-control" placeholder="Last Name"
                                            id="lastname" required name="last_name" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="heading-color ff-heading fw600 mb10">Phone Number<span style="color: red">*</span></label>
                                        <input type="tel" class="form-control" placeholder="Phone"
                                            id="contactnumber" required name="phone" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="heading-color ff-heading fw600 mb10">Email Address<span style="color: red">*</span></label>
                                        <input type="email" class="form-control" placeholder="Email" required
                                            name="email" value="{{ $email ?? '' }}">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="heading-color ff-heading fw600 mb10">Property Address<span style="color: red">*</span></label>
                                        <!-- Check if $address is set -->
                                        @if(isset($address))
                                            <!-- If address is pre-filled, populate the input field -->
                                            <input type="text" class="form-control" placeholder="Property Address" required name="property_address" value="{{ $address }}">
                                        @else
                                            <!-- If address is not pre-filled, load Google Places Autocomplete -->
                                            <input type="text" id="property_address" class="form-control" placeholder="Property Address" required name="property_address">
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
                                        <label class="heading-color ff-heading fw600 mb10">Style Of Your Property<span style="color: red">*</span></label>

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
                                        <label class="heading-color ff-heading fw600 mb10">Number of Bedrooms<span style="color: red">*</span></label>

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
                                        <label class="heading-color ff-heading fw600 mb10">Number of Bathrooms<span style="color: red">*</span></label>

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
                                        <label class="heading-color ff-heading fw600 mb10">Basement Development<span style="color: red">*</span></label>

                                        <select class="form-select form-control" aria-label="Default select example"
                                            required name="basement_development">
                                            <option value="" selected>None</option>
                                            <option value="Undeveloped">Undeveloped</option>
                                            <option value="Partially Developed">Partially Developed</option>
                                            <option value="Full Developed">Full Developed</option>


                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="heading-color ff-heading fw600 mb10"
                                        >Parking 
                                        <span style="color: red;">*</span></label>
                                        <select
                                            class="form-select form-control"
                                            aria-label="Default select example"
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
                                        <label class="heading-color ff-heading fw600 mb10">Are You Looking To<span style="color: red">*</span></label>

                                        <select class="form-select form-control" aria-label="Default select example"
                                            required name="interest">
                                            <option value="" selected>None</option>
                                            <option value="Purchase">Purchase</option>
                                            <option value="Sell">Sell</option>
                                            <option value="Both">Both</option>


                                        </select>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="heading-color ff-heading fw600 mb10">Additional Information<span style="color: red">*</span></label>
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
    </section>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
<script
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initMaps"
        async defer></script>

<script>
        window.onload = function() {
        initMaps();
    };

    function initMaps() {
        const input = document.getElementById('property_address');
        const autocomplete = new google.maps.places.Autocomplete(input, {
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
        });

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
                } else {
                    console.log("Address is not from the Province of Alberta in Canada.");
                }
            } else {
                console.log("Address is not from Canada.");
            }
        });
    }
    </script>
 
    
    
    <script>

        
        function scrollToSection(sectionId) {
            const section = document.getElementById(sectionId);

            if (section) {
                const offset = 300; // Set your desired offset in pixels
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

        var header = '{{ env('BACKEND_URL') }}';
        // var header =  'http://127.0.0.1:8000';

        var apiUrl = header + '/api/agents/listing-appointment-form';

        document.addEventListener('DOMContentLoaded', function() {
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
        })
    form.reset();
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

        const phoneNumberInput = document.querySelector('input[name="phone"]');

        phoneNumberInput.addEventListener('input', function(event) {
            let phoneNumber = this.value.replace(/\D/g, '');

            if (phoneNumber.length > 12) {
                phoneNumber = phoneNumber.substring(0, 12);
            }

            if (phoneNumber.length > 3 && phoneNumber.length <= 6) {
                phoneNumber = '(' + phoneNumber.substring(0, 3) + ') ' + phoneNumber.substring(3);
            } else if (phoneNumber.length > 6 && phoneNumber.length <= 10) {
                phoneNumber = '(' + phoneNumber.substring(0, 3) + ') ' + phoneNumber.substring(3, 6) + '-' +
                    phoneNumber.substring(6);
            } else if (phoneNumber.length > 10) {
                phoneNumber = '(' + phoneNumber.substring(0, 3) + ') ' + phoneNumber.substring(3, 6) + '-' +
                    phoneNumber.substring(6, 10);
            }

            this.value = phoneNumber;
        });
        var userId = "{{ session('user_id') }}";
        if(userId){
        getmarkedlistings();
        }
        function addToFavorites(propertyId, favoriteStatus) {
            var session = "{{ session('username') }}";
            if (!session) {
                $('#exampleModalToggle').modal('show');
            }

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

        function toggleFavorite(listingId) {
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


        function getmarkedlistings() {
            var userId = "{{ session('user_id') }}";
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
    </script>
@endsection
