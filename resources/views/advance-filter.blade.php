@extends('layouts.pages')
@section('content')
    <link href="{{ asset('frontend/css/adv-filter.css') }}" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <script>
        var header = '{{ env('BACKEND_URL') }}';

        var sessionData = {
            username: "{{ session('username') }}",
            userId: "{{ session('user_id') }}"
            // Add more session data properties as needed
        };

        // var header = 'http://127.0.0.1:8000';
    </script>
    <div class="body_content">
        <!--- Our About Area -->
        <section class="our-about py-0 bgc-gray">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-7 overflow-hidden position-relative px-0 ">
                        <div class="half_map_area">
                            <div class="map-canvas half_style" id="property-map" data-map-zoom="7" data-map-scroll="true">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="user_id" id="user_id" value="{{ session('user_id') }}">
                    <div class="col-lg-5 px-sm-0 right-section" id="gridSection">
                        <div class="half_map_area_content bg-white filertAndResults d-flex flex-column ">
                            <div class="filterSection position-relative">
                                <div class="top-sec d-flex align-items-center justify-content-between">
                                    <p id="results">

                                    </p>

                                    @if (auth()->check() || session()->has('username'))
                                        <button class="ud-btn btn-outline-rep bg-white" data-bs-toggle="modal"
                                            id="saveSearch" data-bs-target="#exampleModal2">Save Search</button>
                                    @else
                                        <a class="ud-btn btn-outline-rep bg-white" data-bs-toggle="modal"
                                            href="#exampleModalToggle" role="button" onclick="openModal()">Save Search</a>
                                    @endif

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal2" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header border-0">
                                                    <h1 class="modal-title text-center fs-5" id="exampleModalLabel">Saved
                                                        Search</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body py-0 savesearch">
                                                    <input type="text" placeholder='Give a name to your search'
                                                        class='save-input'>
                                                    <h5>Setup New Listing Alert</h5>
                                                    <p>Receive Alerts Frequency</p>
                                                    <div class='d-flex align-items-center gap-3 mt-2'>
                                                        <input type="radio" name="alertsFrequency" value="daily">
                                                        <label for="daily">Daily</label>
                                                        <input type="radio" name="alertsFrequency" value="weekly">
                                                        <label for="weekly">Weekly</label>
                                                        <input type="radio" name="alertsFrequency" value="monthly">
                                                        <label for="monthly">Monthly</label>
                                                        <input type="radio" name="alertsFrequency" value="never">
                                                        <label for="never">Never</label>
                                                    </div>
                                                </div>

                                                <div class="modal-footer pt-2 border-0">
                                                    <button type="button" id="save-button"
                                                        class="w-100 ud-btn btn-primary collapsed">Save
                                                        Filter</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mid-sec row px-3">
                                    <div id="loader" class="spinner-border text-primary" role="status"
                                        style="display:none;">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="col-12 px-1 col-sm-6" id="searchBar">
                                        <input class='search autocompletes' id="autocomplete" type="Search"
                                            placeholder='City, Neighborhood, Address, MLS&#174;'>
                                        <div id="suggestion-list"></div>
                                    </div>
                                    <div class="dropdown col-6 col-sm-3 col-md-3 px-1 drp-dwn">
                                        @php
                                            $prices = [
                                                25000,
                                                35000,
                                                45000,
                                                75000,
                                                100000,
                                                150000,
                                                200000,
                                                250000,
                                                300000,
                                                350000,
                                                400000,
                                                450000,
                                                500000,
                                                550000,
                                                600000,
                                                650000,
                                                700000,
                                                750000,
                                                800000,
                                                850000,
                                                900000,
                                                950000,
                                                1000000,
                                                1500000,
                                                2000000,
                                                2500000,
                                                3000000,
                                                3500000,
                                                4000000,
                                                4500000,
                                                5000000,
                                                5500000,
                                                6000000,
                                                6600000,
                                                7000000,
                                                7500000,
                                                8000000,
                                                8500000,
                                                9000000,
                                                9500000,
                                                10000000,
                                                12000000,
                                                13000000,
                                                15000000,
                                            ];
                                        @endphp
                                        <select id="min-price" class="form-select"
                                            onchange="updateMaxPriceOptions();">
                                            <option selected value="">Min Price</option>
                                            <option value="0">$0</option>
                                            @foreach ($prices as $price)
                                                @php
                                                    $displayPrice = '$' . number_format($price, 0);
                                                @endphp
                                                <option value="{{ $price }}">{{ $displayPrice }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="dropdown col-6 col-sm-3 col-md-3 px-1 drp-dwn">
                                        <select id="max-price" class="form-select"
                                            onchange="updateMinPriceOptions();">
                                            <option selected value="">Max Price</option>
                                            <option value="">Unlimited</option>
                                            @foreach ($prices as $price)
                                                @php
                                                    $displayPrice = '$' . number_format($price, 0);
                                                @endphp
                                                <option value="{{ $price }}">{{ $displayPrice }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div id="bedRoom" class="dropdown col-6 col-sm-3 col-md-3 px-1 drp-dwn mt-sm-2">
                                        <select class="form-select" id="bedroom">
                                            <option selected value="">Beds</option>
                                            <option value="1">1</option>
                                            <option value="1+">1+</option>
                                            <option value="2">2</option>
                                            <option value="2+">2+</option>
                                            <option value="3">3</option>
                                            <option value="3+">3+</option>
                                            <option value="4">4</option>
                                            <option value="4+">4+</option>
                                            <option value="5">5</option>
                                            <option value="5+">5+</option>
                                        </select>
                                    </div>
                                    
                                    <div class="dropdown col-6 col-sm-3 col-md-3 px-1 drp-dwn mt-sm-2" id="bathRoom">
                                        <select class="form-select" id="bathroom">
                                            <option selected value="">Baths</option>
                                            <option value="1">1</option>
                                            <option value="1+">1+</option>
                                            <option value="2">2</option>
                                            <option value="2+">2+</option>
                                            <option value="3">3</option>
                                            <option value="3+">3+</option>
                                            <option value="4">4</option>
                                            <option value="4+">4+</option>
                                            <option value="5">5</option>
                                            <option value="5+">5+</option>
                                        </select>
                                    </div>

                                    <!-- In your Blade view -->
                                    <div class="dropdown col-6 col-sm-3 col-md-3 px-1 mt-0 mt-sm-2 drp-dwn">
                                        <select class="form-select" id="community">
                                            <option selected value="">Community</option>
                                            @foreach ($data['SubdivisionName'] as $community)
                                                <option value="{{ $community }}"
                                                    {{ $selectedOption == $community ? 'selected' : '' }}>
                                                    {{ $community }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="dropdown col-6 col-sm-3 col-md-3 px-1 mt-0 mt-sm-2 drp-dwn property-type">
                                        <select class="form-select" id="propertytype">
                                            <option selected value="">Property Type</option>
                                            @foreach ($data['PropertyType'] as $type)
                                                <option value="{{ $type }}"
                                                    {{ $selectedOption == $type ? 'selected' : '' }}>
                                                    {{ $type }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6 col-sm-3 col-md-3 mt-2 mt-sm-2 px-1">
                                        <button id="applyFiltersButton" class="ud-btn btn-primary w-100 applyFiltersButton h-100">
                                            Search
                                        </button>
                                    </div>

                                    <div class="col-6 col-sm-3 col-md-3 mt-2 px-1" id="clearAll">
                                        <div class='d-flex reset-filter h-100 justify-content-start'>
                                            <button class='ud-btn btn-outline-rep bg-white w-100 h-100'
                                                id="clearFilters">Reset</button>
                                        </div>
                                    </div>

                                    <div class="accordion px-1 extra more-btn col-6 col-sm-3 col-md-6 mt-2 zi2"
                                        id="accordionExample">
                                        <div class="accordion-item px-0">
                                            <div class="accordion-header" id="headingOne">
                                                <button class="ud-btn btn-primary collapsed" type="button"
                                                    id="toggleBtn" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    More Filters
                                                </button>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="row row-2">
                                    <div class="col-6">
                                        <div class='d-flex align-items-center justify-content-start px-3'>
                                            <div class="icons align-items-center d-flex gap-3 col-2">
                                                <i class="ri-map-pin-line" id="gridView"></i>
                                                <i class="ri-layout-grid-2-fill" id="mapView"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class='sortby d-flex align-items-center justify-content-end px-2'>
                                            <select name="Sort By" onchange="applyFilter('sort_by', this.value);">
                                                <option value="">Sort By</option>
                                                <option value="asc_list">Price Low to High</option>
                                                <option value="desc_list">Price High to Low</option>
                                                <option value="asc_dom">Oldest Listings</option>
                                                <option value="desc_dom">Latest Listings</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>




                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse position-relative bg-white"
                                style="z-index: 2" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row mt-3">



                                         <div class="col-sm-4">
                                            <div class="widget-wrapper">
                                                <h6 class="list-title">Square Feet</h6>
                                                <div class="space-area">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="form-style1">
                                                            <select class="form-control" name="min_sqft" onchange="validateSquareFeet()">
                                                                <option value="">Min.</option>
                                                                <?php
                                                                // Generate options for min square feet using a loop
                                                                for ($i = 500; $i <= 10000; $i += 100) {
                                                                    $formatted_value = number_format($i);
                                                                    echo "<option value='$i'>$formatted_value</option>";
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <span class="dark-color">-</span>
                                                        <div class="form-style1">
                                                            <select class="form-control" name="max_sqft" onchange="validateSquareFeet()">
                                                                <option value="">Max</option>
                                                                <?php
                                                                // Generate options for max square feet using a loop
                                                                for ($i = 500; $i <= 10000; $i += 100) {
                                                                    $formatted_value = number_format($i);
                                                                    echo "<option value='$i'>$formatted_value</option>";
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            function validateSquareFeet() {
                                                const minInput = document.querySelector('select[name="min_sqft"]');
                                                const maxInput = document.querySelector('select[name="max_sqft"]');

                                                const minValue = parseInt(minInput.value);
                                                const maxValue = parseInt(maxInput.value);

                                                // Disable options in max square feet less than min square feet
                                                const maxOptions = maxInput.querySelectorAll('option');
                                                maxOptions.forEach(option => {
                                                    const optionValue = parseInt(option.value);
                                                    if (optionValue < minValue) {
                                                        option.style.display = 'none'; // Hide option
                                                    } else {
                                                        option.style.display = 'block'; // Show option
                                                    }
                                                });

                                                // Validate that min value is not greater than max value
                                                if (!isNaN(minValue) && !isNaN(maxValue) && minValue > maxValue) {
                                                    // Reset the values if min value is greater than max value
                                                    maxInput.value = minValue;
                                                }
                                            }
                                        </script>

                                        <div class="col-sm-4">
                                            <div class="widget-wrapper">
                                                <h6 class="list-title">Acres</h6>
                                                <div class="space-area">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="form-style1">
                                                            
                                                            <select class="form-control" name="min_acrs"
                                                                onchange="validateAcres()">
                                                                <option value="">Min.</option>
                                                             
                                                                <?php
                                                            $options = array(0.1, 0.2, 0.25, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8, 0.9, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 20, 50, 100, 500, 1000);
                                                            foreach ($options as $option) {
                                                                echo "<option value='$option'>$option</option>";
                                                            }
                                                            ?>
                                                            </select>
                                                        </div>
                                                        <span class="dark-color">-</span>
                                                        <div class="form-style1">
                                                            <select class="form-control" name="max_acrs"
                                                                onchange="validateAcres()">
                                                                <option value="">Max</option>
                                                               
                                                                <?php
                                                            foreach ($options as $option) {
                                                                echo "<option value='$option'>$option</option>";
                                                            }
                                                            ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            function validateAcres() {
                                                const minInput = document.querySelector('select[name="min_acrs"]');
                                                const maxInput = document.querySelector('select[name="max_acrs"]');

                                                const minValue = parseInt(minInput.value);
                                                const maxValue = parseInt(maxInput.value);

                                                // Disable options in max acres less than min acres
                                                const maxOptions = maxInput.querySelectorAll('option');
                                                maxOptions.forEach(option => {
                                                    const optionValue = parseInt(option.value);
                                                    if (optionValue < minValue) {
                                                        option.style.display = 'none'; // Hide option
                                                    } else {
                                                        option.style.display = 'block'; // Show option
                                                    }
                                                });

                                                // Validate that min value is not greater than max value
                                                if (!isNaN(minValue) && !isNaN(maxValue) && minValue > maxValue) {
                                                    // Reset the values if min value is greater than max value
                                                    maxInput.value = minValue;
                                                }
                                            }
                                        </script>

                                        <div class="col-sm-4">
                                            <div class="widget-wrapper">
                                                <h6 class="list-title">Year Built</h6>
                                                <div class="space-area">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="form-style1">
                                                            <select class="form-control" name="min_year_built"
                                                            onchange="validateYearsyear()">
                                                                <!-- Generate options for min year -->
                                                                <option value="">Min.</option>
                                                                    <?php
                                                                    // Generate options for min year using a loop
                                                                    $currentYear = date("Y");
                                                                    for ($i = $currentYear; $i >= 1800; $i--) {
                                                                        echo "<option value='$i'>$i</option>";
                                                                    }
                                                                    ?>
                                                            </select>
                                                        </div>
                                                        <span class="dark-color">-</span>
                                                        <div class="form-style1">
                                                            <select class="form-control" name="max_year_built" onchange="validateYearsyear()"
                                                            >
                                                                <!-- Options for max year will be generated dynamically using JavaScript -->
                                                                <option value="">Max</option>
                                                                <?php
                                                                // Generate options for max year using a loop
                                                                for ($i = $currentYear; $i >= 1800; $i--) {
                                                                    echo "<option value='$i'>$i</option>";
                                                                }
                                                                ?>
                                                                 </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <script>
                                               function validateYearsyear() {
        const minInput = document.querySelector('select[name="min_year_built"]');
        const maxInput = document.querySelector('select[name="max_year_built"]');

        const minValue = parseInt(minInput.value);
        const maxValue = parseInt(maxInput.value);

        // Validate that min value is not greater than max value
        if (!isNaN(minValue) && !isNaN(maxValue) && minValue > maxValue) {
            // Reset the values if min value is greater than max value
            maxInput.value = minValue;
        }

        // Update options for min year based on the selected max year
        const minOptions = minInput.querySelectorAll('option');
        minOptions.forEach(option => {
            const optionValue = parseInt(option.value);
            if (optionValue > maxValue || optionValue === 0) {
                option.style.display = 'none'; // Hide option
            } else {
                option.style.display = 'block'; // Show option
            }
        });

        // Update options for max year based on the selected min year
        const maxOptions = maxInput.querySelectorAll('option');
        maxOptions.forEach(option => {
            const optionValue = parseInt(option.value);
            if (optionValue < minValue || optionValue === 0) {
                option.style.display = 'none'; // Hide option
            } else {
                option.style.display = 'block'; // Show option
            }
        });
    }

                                        </script>
                                        <div class="col-lg-12">
                                            <div class="widget-wrapper mb0">
                                                <h6 class="list-title mb10" style="font-size:large;">
                                                    <b>Property Amenities</b>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 mt20">
                                            <h6 class="list-title mb10">
                                                General Options
                                            </h6>
                                            <div class="widget-wrapper mb20">
                                                <div class="checkbox-style1 gridAutoCols">
                                                    <label class="custom_checkbox">Just Listed
                                                        <input type="checkbox" value="just_listed" id="just_listed" name="amenities[]" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="custom_checkbox">Deck
                                                        <input type="checkbox" value="Deck" id="deck" name="amenities[]" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="custom_checkbox">Balcony(s)
                                                        <input type="checkbox"  name="amenities[]"
                                                            value="Balcony(s)" id="balcony"/>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="custom_checkbox">Front Porch
                                                        <input type="checkbox"  name="amenities[]"
                                                            value="Front Porch" id="frontporch" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="custom_checkbox">
                                                        Patio
                                                        <input type="checkbox"  name="amenities[]"
                                                            value="Patio"  id="patio"/>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="custom_checkbox">
                                                        Lake
                                                        <input type="checkbox" value="Lake" name="amenities[]"
                                                            id="lake" />
                                                        <span class="checkmark"></span>
                                                    </label>

                                                    <label class="custom_checkbox">
                                                        Playground
                                                        <input type="checkbox" value="Playground" name="amenities[]"
                                                            id="playground" />
                                                        <span class="checkmark"></span>
                                                    </label>

                                                    <label class="custom_checkbox">
                                                        Street Lights
                                                        <input type="checkbox" value="Street Lights"
                                                            name="amenities[]" id="streetlights" />
                                                        <span class="checkmark"></span>
                                                    </label>

                                                    <label class="custom_checkbox">
                                                        Pool
                                                        <input type="checkbox" value="Pool"  name="amenities[]"
                                                            id="pool" />
                                                        <span class="checkmark"></span>
                                                    </label>

                                                    <label class="custom_checkbox">
                                                        Parking
                                                        <input type="checkbox" value="Parking" name="amenities[]"
                                                            id="parking" />
                                                        <span class="checkmark"></span>
                                                    </label>

                                                    <label class="custom_checkbox">
                                                        Laundry
                                                        <input type="checkbox" value="Laundry"
                                                            name="amenities[]" id="laundry" />
                                                        <span class="checkmark"></span>
                                                    </label>

                                                    <label class="custom_checkbox">
                                                        Gazebo
                                                        <input type="checkbox" value="Gazebo" id="gazebo" name="amenities[]" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="custom_checkbox">
                                                        Clubhouse
                                                        <input type="checkbox" value="Clubhouse" name="amenities[]"
                                                            id="clubhouse" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!--<div class="col-sm-12 mt20">-->
                                        <!--    <h6 class="list-title mb10">-->
                                        <!--        Financial Options-->
                                        <!--    </h6>-->
                                        <!--    <div class="widget-wrapper mb20">-->
                                        <!--        <div class="checkbox-style1 gridAutoCols">-->
                                        <!--            <label class="custom_checkbox">-->
                                        <!--                Reduced-->
                                        <!--                <input type="checkbox" name="financial_options[]"-->
                                        <!--                    value="Reduced" />-->
                                        <!--                <span class="checkmark"></span>-->
                                        <!--            </label>-->

                                        <!--            <label class="custom_checkbox">-->
                                        <!--                Foreclosures-->
                                        <!--                <input type="checkbox" name="financial_options[]"-->
                                        <!--                    value="Foreclosures" />-->
                                        <!--                <span class="checkmark"></span>-->
                                        <!--            </label>-->

                                        <!--            <label class="custom_checkbox">-->
                                        <!--                Short Sales-->
                                        <!--                <input type="checkbox" name="financial_options[]"-->
                                        <!--                    value="Short Sales" />-->
                                        <!--                <span class="checkmark"></span>-->
                                        <!--            </label>-->

                                        <!--            <label class="custom_checkbox">-->
                                        <!--                Not Distressed-->
                                        <!--                <input type="checkbox" name="financial_options[]"-->
                                        <!--                    value="Not Distressed" />-->
                                        <!--                <span class="checkmark"></span>-->
                                        <!--            </label>-->

                                        <!--            <label class="custom_checkbox">-->
                                        <!--                Lease to Own-->
                                        <!--                <input type="checkbox" name="financial_options[]"-->
                                        <!--                    value="Lease to Own" />-->
                                        <!--                <span class="checkmark"></span>-->
                                        <!--            </label>-->

                                        <!--            <label class="custom_checkbox">-->
                                        <!--                No Strata Fees-->
                                        <!--                <input type="checkbox" name="financial_options[]"-->
                                        <!--                    value="No Strata Fees" />-->
                                        <!--                <span class="checkmark"></span>-->
                                        <!--            </label>-->

                                        <!--            <label class="custom_checkbox">-->
                                        <!--                Seller Financing-->
                                        <!--                <input type="checkbox" name="financial_options[]"-->
                                        <!--                    value="Seller Financing" />-->
                                        <!--                <span class="checkmark"></span>-->
                                        <!--            </label>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->

                                        <div class="col-sm-12 mt20">
                                            <h6 class="list-title mb10 ">
                                                Structural Options
                                            </h6>
                                            <div class="widget-wrapper mb20">
                                                <div class="checkbox-style1 gridAutoCols">
                                                    <label class="custom_checkbox">
                                                        Fireplace
                                                        <input type="checkbox" name="structural_options[fireplaces_total]"
                                                            id="fireplace" value="Fireplace" />
                                                        <span class="checkmark"></span>
                                                    </label>

                                                    <label class="custom_checkbox">
                                                        1+ Garage
                                                        <input type="checkbox" name="structural_options[garage_spaces]"
                                                            id="onegarage" value="1" />
                                                        <span class="checkmark"></span>
                                                    </label>

                                                    <label class="custom_checkbox">
                                                        2+ Garage
                                                        <input type="checkbox" name="structural_options[garage_spaces]"
                                                            id="twogarage" value="2" />
                                                        <span class="checkmark"></span>
                                                    </label>

                                                    <label class="custom_checkbox">
                                                        3+ Garage
                                                        <input type="checkbox" name="structural_options[garage_spaces]"
                                                            id="threegarage" value="3" />
                                                        <span class="checkmark"></span>
                                                    </label>

                                                    <label class="custom_checkbox">
                                                        1 Story
                                                        <input type="checkbox" name="structural_options[stories_total]"
                                                            id="onestory" value="1" />
                                                        <span class="checkmark"></span>
                                                    </label>

                                                    <label class="custom_checkbox">
                                                        2 Stories
                                                        <input type="checkbox" name="structural_options[stories_total]"
                                                            id="twostories" value="2" />
                                                        <span class="checkmark"></span>
                                                    </label>

                                                    <label class="custom_checkbox">
                                                        3 Stories
                                                        <input type="checkbox" name="structural_options[stories_total]"
                                                            id="threestories" value="3" />
                                                        <span class="checkmark"></span>
                                                    </label>

                                                    <label class="custom_checkbox">
                                                        Basement
                                                        <input type="checkbox" name="structural_options[basement]"
                                                            id="basement" value="Basement" />
                                                        <span class="checkmark"></span>
                                                    </label>

                                                    <label class="custom_checkbox">
                                                        Air Conditioning
                                                        <input type="checkbox" name="structural_options[appliances]"
                                                            id="airconditioning" value="air conditioner" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row mt20">
                                        <div class="col col-sm-12 d-flex justify-content-between">
                                            <button id="applyFiltersButton" class="ud-btn btn-primary applyFiltersButton">
                                                Apply Filters
                                            </button>
                                            <button class="ud-btn btn-primary collapsed" type="button" id="collapseBtn" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            Less Filters
                                        </button>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>


                            <section class="properties py20 px-2" id="propertiesContainer">
                                <div class="row" id="advance_listings">


                                </div>

                                <div class="row">
                                    <div class="mbp_pagination text-center">
                                        <ul id="pagination" class="page_navigation"></ul>
                                        <p class="mt10 pagination_page_count text-center listing_count">
                                        </p>

                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{ asset('template/assets/js/advancefilter/index.js') }}"></script>
    <script>
        var user_id = document.getElementById('user_id').value;
        console.log('user:', user_id);


        var marker_icon = "{{ asset('images/advanced-marker.png') }}";

        document.addEventListener('DOMContentLoaded', function() {
            const toggleBtn = document.getElementById('toggleBtn');
            const collapseBtn = document.getElementById('collapseBtn');
            const collapseOne = document.getElementById('collapseOne');
        
            toggleBtn.addEventListener('click', function() {
                const currentText = this.textContent.trim();
                this.textContent = currentText === 'More Filters' ? 'Less Filters' : 'More Filters';
                if (currentText === 'More Filters') {
                    collapseOne.classList.remove('collapse');
                    collapseOne.classList.add('show');
                } else {
                    collapseOne.classList.remove('show');
                    collapseOne.classList.add('collapse');
                }
            });
        
            collapseBtn.addEventListener('click', function() {
                collapseOne.classList.remove('show');
                collapseOne.classList.add('collapse');
                toggleBtn.textContent = 'More Filters';
            });
        });

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

            $('#exampleModal2 .ud-btn').click(function() {
                var searchName = $('#exampleModal2 .save-input').val().trim();
                var alertsFrequency = $('#exampleModal2 input[name="alertsFrequency"]:checked').val();
                var selectedCommunity = $('#community').val();
                // Check if title and duration are filled in
                if (searchName === '') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Please fill the title',
                    });
                    return;
                }
                if (alertsFrequency === undefined) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Please fill the duration',
                    });
                    return;
                }

                var sentAtDate = new Date();
                var formattedSentAt = sentAtDate.toISOString().split('T')[0] + ' ' + sentAtDate
                    .toTimeString().split(' ')[0];

                var data = {
                    user_id: user_id,
                    title: searchName,
                    duration: alertsFrequency,
                    sent_at: formattedSentAt,
                    city: $('#autocomplete').val(),
                    community : selectedCommunity,
                    min_price: $('#min-price').val(),
                    max_price: $('#max-price').val(),
                    beds: $('#bedroom').val(),
                    bath: $('#bathroom').val(),
                    property_type: $('#propertytype').val(),
                    min_sqft: $('select[name="min_sqft"]').val(),
                    max_sqft: $('select[name="max_sqft"]').val(),
                    min_acres: $('select[name="min_acrs"]').val(),
                    max_acres: $('select[name="max_acrs"]').val(),
                    min_yearbuilt: $('select[name="min_year_built"]').val(),
                    max_yearbuilt: $('select[name="max_year_built"]').val(),
                    furnishedCheckbox: $('#balcony').is(':checked') ? 1 : 0,
                    petsCheckbox: $('#parking').is(':checked') ? 1 : 0,
                    fireplace: $('#fireplace').is(':checked') ? 1 : 0,
                    onegarage: $('#onegarage').is(':checked') ? 1 : 0,
                    twogarage: $('#twogarage').is(':checked') ? 1 : 0,
                    threegarage: $('#threegarage').is(':checked') ? 1 : 0,
                    onestory: $('#onestory').is(':checked') ? 1 : 0,
                    twostories: $('#twostories').is(':checked') ? 1 : 0,
                    threestories: $('#threestories').is(':checked') ? 1 : 0,
                    deck: $('#deck').is(':checked') ? 1 : 0,
                    basement: $('#basement').is(':checked') ? 1 : 0,
                    airconditioning: $('#airconditioning').is(':checked') ? 1 : 0,
                    parking: $('#parking').is(':checked') ? 1 : 0,
                    just_listed: $('#just_listed').is(':checked') ? 1 : 0,
                    frontporch: $('#frontporch').is(':checked') ? 1 : 0,
                    patio: $('#patio').is(':checked') ? 1 : 0,
                    lake: $('#lake').is(':checked') ? 1 : 0,
                    playground: $('#playground').is(':checked') ? 1 : 0,
                    streetlights: $('#streetlights').is(':checked') ? 1 : 0,
                    pool: $('#pool').is(':checked') ? 1 : 0,
                    laundry: $('#laundry').is(':checked') ? 1 : 0,
                    gazebo: $('#gazebo').is(':checked') ? 1 : 0,
                    clubhouse: $('#clubhouse').is(':checked') ? 1 : 0
                };
                var baseUrl = "{{ env('BACKEND_URL') }}";
                const submitButton = document.getElementById('save-button');
                submitButton.disabled = true;
                if (searchName.trim() !== '' && alertsFrequency.trim() !== '') {
                    $.ajax({
                        url: baseUrl + '/api/agents/save-search',
                        type: 'GET',
                        data: data,
                        success: function(response) {
                            toastr.success('Saved successfully');
                            $('#exampleModal2 .save-input').val('');
                            $('#exampleModal2 input[name="alertsFrequency"]').prop('checked',
                                false);
                            $('#exampleModal2').modal('hide');

                            submitButton.disabled = false;
                        },
                        error: function(xhr, status, error) {
                            toastr.error('An error occurred while saving it');
                            console.error('API call failed:', error);
                        }
                    });
                } else {

                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Please fill in both title and duration!',
                    });
                    submitButton.disabled = false;
                }
            });
        });
        
        /*apply filter*/
        // document.getElementById('applyFilters').addEventListener('click', function() {
        //         applyFiltersTop();
        // });
        // function applyFiltersTop() {
        //     var selectedCommunity = document.getElementById('community').value;
        //     var selectedPropertyType = document.getElementById('propertytype').value;
        //     var selectedBuildingType = document.getElementById('buildingtype').value;
        //     var selectedMinPrice = document.getElementById('min-price').value;
        //     var selectedMaxPrice = document.getElementById('max-price').value;
        //     var selectedBedroom = document.getElementById('bedroom').value;
        //     var selectedBathroom = document.getElementById('bathroom').value;
        
        //     applyFilter({
        //         community: selectedCommunity,
        //         property_type: selectedPropertyType,
        //         building_type: selectedBuildingType,
        //         min_list_price: selectedMinPrice,
        //         max_list_price: selectedMaxPrice,
        //         min_bedrooms: selectedBedroom,
        //         min_bathrooms: selectedBathroom
        //     });
        // }
        /*end*/
    </script>
@endsection