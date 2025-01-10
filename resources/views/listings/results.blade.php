@extends(' layouts.pages')
@section('content')
    <div class="body_content">
        <section class="advance-search-menu bg-white position-relative default-box-shadow2 py30">
            <div class="container-fluid container-xxl">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Find Your Dream Home</h1>
                    </div>
                    <div class="col-md-8 mx-auto my-4">
                        <div class="advance-content-style3">
                            {!! Form::open(['route' => 'listing.results','class'=>'form-search position-relative','method'=>'get']) !!}
                                <div class="row">
                                    <div class="col-md-8">
                                        <div
                                            class="advance-search-field position-relative text-start"
                                        >
                                            <div class="box-search">
                                                <span class="icon flaticon-home-1"></span>
                                                <input
                                                    class="form-control bgc-f7 bdrs12 autocomplete"
                                                    type="text"
                                                    name="query"
                                                    value="{{ request()->get('query') }}"
                                                    placeholder="Search by address, neighborhood, city or postal code."
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div
                                            class="d-flex gap-3 align-items-center justify-content-start mt-3 mt-md-0"
                                        >
                                            <button
                                                class="advance-search-btn"
                                                type="button"
                                                data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"
                                            >
                                                <span class="flaticon-settings"></span>
                                                Advanced
                                            </button>
                                            <button class="ud-btn btn-primary" type="submit">
                                                Search
                                                <!-- <span class="flaticon-search"></span> -->
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div
                            class="advance-search-list no-box-shadow d-flex justify-content-center"
                        >
                            <div class="dropdown-lists">
                                <ul class="p-0 mb-0 d-flex flex-wrap row-gap-3">
                                    <li class="list-inline-item position-relative">
                                        <button
                                            type="button"
                                            class="form-control dropdown-toggle"
                                            data-bs-toggle="dropdown"
                                        >
                                            All Cities <i class="fa fa-angle-down ms-2"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <div class="widget-wrapper bdrb1 pb25 mb0 pl20">
                                                <h6 class="list-title">Property Type</h6>
                                                <div class="checkbox-style1">
                                                    <label class="custom_checkbox"
                                                    >Houses
                                                        <input type="checkbox" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="custom_checkbox"
                                                    >Apartments
                                                        <input type="checkbox" checked="checked" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="custom_checkbox"
                                                    >Office
                                                        <input type="checkbox" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="custom_checkbox"
                                                    >Villa
                                                        <input type="checkbox" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="custom_checkbox"
                                                    >Townhome
                                                        <input type="checkbox" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="text-end mt10 pr10">
                                                <button
                                                    type="button"
                                                    class="done-btn ud-btn btn-thm drop_btn2"
                                                >
                                                    Done
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-inline-item position-relative">
                                        <button
                                            type="button"
                                            class="form-control dropdown-toggle"
                                            data-bs-toggle="dropdown"
                                        >
                                            Type <i class="fa fa-angle-down ms-2"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <div class="widget-wrapper bdrb1 pb25 mb0 pl20">
                                                <h6 class="list-title">Status</h6>
                                                <div class="checkbox-style1">
                                                    <label class="custom_checkbox"
                                                    >Houses
                                                        <input type="checkbox" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="custom_checkbox"
                                                    >Apartments
                                                        <input type="checkbox" checked="checked" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="custom_checkbox"
                                                    >Office
                                                        <input type="checkbox" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="custom_checkbox"
                                                    >Villa
                                                        <input type="checkbox" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="custom_checkbox"
                                                    >Townhome
                                                        <input type="checkbox" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="text-end mt10 pr10">
                                                <button
                                                    type="button"
                                                    class="done-btn ud-btn btn-thm drop_btn2"
                                                >
                                                    Done
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-inline-item position-relative">
                                        <button
                                            type="button"
                                            class="form-control dropdown-toggle"
                                            data-bs-toggle="dropdown"
                                        >
                                            Beds / Baths <i class="fa fa-angle-down ms-2"></i>
                                        </button>
                                        <div class="dropdown-menu dd4 pb20">
                                            <div class="widget-wrapper pl20 pr20">
                                                <h6 class="list-title">Bedrooms</h6>
                                                <div class="d-flex">
                                                    <div class="selection">
                                                        <input
                                                            id="any2"
                                                            name="beds"
                                                            type="radio"
                                                            checked
                                                        />
                                                        <label for="any2">any</label>
                                                    </div>
                                                    <div class="selection">
                                                        <input id="oneplus2" name="beds" type="radio" />
                                                        <label for="oneplus2">1+</label>
                                                    </div>
                                                    <div class="selection">
                                                        <input id="twoplus2" name="beds" type="radio" />
                                                        <label for="twoplus2">2+</label>
                                                    </div>
                                                    <div class="selection">
                                                        <input
                                                            id="threeplus2"
                                                            name="beds"
                                                            type="radio"
                                                        />
                                                        <label for="threeplus2">3+</label>
                                                    </div>
                                                    <div class="selection">
                                                        <input
                                                            id="fourplus2"
                                                            name="beds"
                                                            type="radio"
                                                        />
                                                        <label for="fourplus2">4+</label>
                                                    </div>
                                                    <div class="selection">
                                                        <input
                                                            id="fiveplus2"
                                                            name="beds"
                                                            type="radio"
                                                        />
                                                        <label for="fiveplus2">5+</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-wrapper bdrb1 pb25 mb0 pl20 pr20">
                                                <h6 class="list-title">Bathrooms</h6>
                                                <div class="d-flex">
                                                    <div class="selection">
                                                        <input
                                                            id="bathany2"
                                                            name="bath"
                                                            type="radio"
                                                            checked
                                                        />
                                                        <label for="bathany2">any</label>
                                                    </div>
                                                    <div class="selection">
                                                        <input
                                                            id="bathoneplus2"
                                                            name="bath"
                                                            type="radio"
                                                        />
                                                        <label for="bathoneplus2">1+</label>
                                                    </div>
                                                    <div class="selection">
                                                        <input
                                                            id="bathtwoplus2"
                                                            name="bath"
                                                            type="radio"
                                                        />
                                                        <label for="bathtwoplus2">2+</label>
                                                    </div>
                                                    <div class="selection">
                                                        <input
                                                            id="baththreeplus2"
                                                            name="bath"
                                                            type="radio"
                                                        />
                                                        <label for="baththreeplus2">3+</label>
                                                    </div>
                                                    <div class="selection">
                                                        <input
                                                            id="bathfourplus2"
                                                            name="bath"
                                                            type="radio"
                                                        />
                                                        <label for="bathfourplus2">4+</label>
                                                    </div>
                                                    <div class="selection">
                                                        <input
                                                            id="bathfiveplus2"
                                                            name="bath"
                                                            type="radio"
                                                        />
                                                        <label for="bathfiveplus2">5+</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-end mt10 pr10">
                                                <button
                                                    type="button"
                                                    class="done-btn ud-btn btn-thm drop_btn4"
                                                >
                                                    Done
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-inline-item position-relative">
                                        <button
                                            type="button"
                                            class="form-control dropdown-toggle"
                                            data-bs-toggle="dropdown"
                                        >
                                            Min Max Area <i class="fa fa-angle-down ms-2"></i>
                                        </button>
                                        <div class="dropdown-menu dd3">
                                            <div class="widget-wrapper bdrb1 pb25 mb0 pl20 pr20">
                                                <h6 class="list-title">Min Max Area</h6>
                                                <!-- Range Slider Desktop Version -->
                                                <div class="range-slider-style1">
                                                    <div class="range-wrapper">
                                                        <div
                                                            class="slider-range mt30 mb20 ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                                        >
                                                            <div
                                                                class="ui-slider-range ui-corner-all ui-widget-header"
                                                                style="left: 0.02%; width: 70.967%"
                                                            ></div>
                                                            <span
                                                                tabindex="0"
                                                                class="ui-slider-handle ui-corner-all ui-state-default"
                                                                style="left: 0.02%"
                                                            ></span
                                                            ><span
                                                                tabindex="0"
                                                                class="ui-slider-handle ui-corner-all ui-state-default"
                                                                style="left: 70.987%"
                                                            ></span>
                                                        </div>
                                                        <div class="text-center">
                                                            <input
                                                                type="text"
                                                                class="amount"
                                                                placeholder="$20"
                                                            /><span
                                                                class="fa-sharp fa-solid fa-minus mx-1 dark-color"
                                                            ></span>
                                                            <input
                                                                type="text"
                                                                class="amount2"
                                                                placeholder="$70987"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-end mt10 pr10">
                                                <button
                                                    type="button"
                                                    class="done-btn ud-btn btn-thm drop_btn3"
                                                >
                                                    Done
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-inline-item position-relative">
                                        <button
                                            type="button"
                                            class="form-control dropdown-toggle"
                                            data-bs-toggle="dropdown"
                                        >
                                            Price <i class="fa fa-angle-down ms-2"></i>
                                        </button>
                                        <div class="dropdown-menu dd3">
                                            <div class="widget-wrapper bdrb1 pb25 mb0 pl20 pr20">
                                                <h6 class="list-title">Price</h6>
                                                <!-- Range Slider Desktop Version -->
                                                <div class="range-slider-style1">
                                                    <div class="range-wrapper">
                                                        <div
                                                            class="slider-range mt30 mb20 ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                                        >
                                                            <div
                                                                class="ui-slider-range ui-corner-all ui-widget-header"
                                                                style="left: 0.02%; width: 70.967%"
                                                            ></div>
                                                            <span
                                                                tabindex="0"
                                                                class="ui-slider-handle ui-corner-all ui-state-default"
                                                                style="left: 0.02%"
                                                            ></span
                                                            ><span
                                                                tabindex="0"
                                                                class="ui-slider-handle ui-corner-all ui-state-default"
                                                                style="left: 70.987%"
                                                            ></span>
                                                        </div>
                                                        <div class="text-center">
                                                            <input
                                                                type="text"
                                                                class="amount"
                                                                placeholder="$20"
                                                            /><span
                                                                class="fa-sharp fa-solid fa-minus mx-1 dark-color"
                                                            ></span>
                                                            <input
                                                                type="text"
                                                                class="amount2"
                                                                placeholder="$70987"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-end mt10 pr10">
                                                <button
                                                    type="button"
                                                    class="done-btn ud-btn btn-thm drop_btn3"
                                                >
                                                    Done
                                                </button>
                                            </div>
                                        </div>
                                    </li>

                                    <!-- <li class="list-inline-item">

                                      <button
                                        type="button"
                                        class="open-btn mb15"
                                        data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"
                                      >
                                        <i class="flaticon-settings me-2"></i> More Filter
                                      </button>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Property Half Map V4 -->
        <section class="">
            <div class="container-fluid container-xl">
                <div class="row align-items-center mb10">
                    <div class="col-md-6">
                        <h4 class="mb-1">Calgary Homes For Sale</h4>
                    </div>
                    <div class=" col-md-6">
                        <div
                            class="page_control_shorting d-flex align-items-center justify-content-center justify-content-xl-end"
                        >
                            <div class="pcs_dropdown pr10">
                                <span>Sort by</span>
                                <select class="selectpicker show-tick">
                                    <option>Newest</option>
                                    <option>Price Low</option>
                                    <option>Price High</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @foreach($properties as $singleListing)
                        {{-- @php
                            $files = count(\Illuminate\Support\Facades\File::files('properties/images/'.$singleListing->listing_numeric_key.'/'));
                        @endphp --}}
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="listing-style5">
                                <div class="list-thumb">
                                    <div
                                        class="slider-1-grid owl-carousel owl-theme wow fadeInUp"
                                        data-wow-delay="300ms"
                                    >
                                        {{-- @for($i = 0; $i < $files; $i++)
                                            <div class="item">
                                                @if(\Illuminate\Support\Facades\File::exists('properties/images/'.$singleListing->listing_numeric_key.'/'.$i.'-'.$singleListing->listing_numeric_key.'.jpeg'))
                                                    <img
                                                        class="w-100"
                                                        src="{{ asset('properties/images/'.$singleListing->listing_numeric_key.'/'.$i.'-'.$singleListing->listing_numeric_key.'.jpeg') }}"
                                                        alt=""
                                                        style="height: 233px"
                                                    />
                                                @else
                                                    <img
                                                        class="w-100"
                                                        src="https://placehold.co/600x400?text=No%20Image"
                                                        alt=""
                                                        style="height: 233px"
                                                    />
                                                @endif
                                            </div>
                                        @endfor --}}
                                    </div>
{{--                                    <div class="list-tag fz12">--}}
{{--                                        <i class="fa-thin fa-gem me-2"></i>Diamond--}}
{{--                                    </div>--}}
                                    <div class="list-meta2">
                                        <a
                                            href="javascript:void(0)"
                                            data-listingId="{{ $singleListing->id }}"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            title="Favourite"
                                            class="set-as-fav"
                                        ><span class="flaticon-like"></span
                                            ></a>

                                        <a
                                            href="{{ route('listing.show',$singleListing->id) }}"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            title="Preview"
                                            target="_blank"
                                        ><span class="flaticon-fullscreen"></span
                                            ></a>
                                    </div>
                                </div>
                                <div class="list-content">
                                    <div class="list-price mb-2">${{ number_format($singleListing->list_price) }}</div>
                                    <h6 class="list-title">
                                        <a href="{{ route('listing.show',$singleListing->id) }}">
                                            {{ $singleListing->unparsed_address }}
                                        </a>
                                    </h6>
                                    <p class="list-text">{{ $singleListing->property_type }}, {{ $singleListing->property_sub_type }}, {{ $singleListing->district }}</p>
                                    <div
                                        class="list-meta d-flex align-items-center gap-3"
                                    >
                                        <a href="javascript:void(0)"
                                        ><span class="flaticon-bed"></span>{{ ($singleListing->bedrooms_total == null)?0:$singleListing->bedrooms_total }} bed</a>
                                        <a href="javascript:void(0)"
                                        ><span class="flaticon-shower"></span>{{ ($singleListing->bathrooms_full == null)?0:$singleListing->bathrooms_full }} bath</a
                                        >
                                        <a href="javascript:void(0)"
                                        ><span class="flaticon-expand"></span>{{ ($singleListing->building_area_total_sf == null)?0:$singleListing->building_area_total_sf }} sqft</a
                                        >
                                    </div>

                                    <span class="mlsNumber">MLS® # {{ $singleListing->listing_id }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="mbp_pagination text-center">
                        {!! $properties->appends(request()->query())->links('pagination') !!}
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Footer -->
        <section class="footer-style1 pt60 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <div class="link-style1 mb-3">
                                    <h6 class="text-white mb25">Communities</h6>
                                    <div class="link-list">
                                        <a href="javascript:void(0)">East Calgary</a>
                                        <a href="javascript:void(0)">North East Calgary</a>
                                        <a href="javascript:void(0)">North West Calgary</a>
                                        <a href="javascript:void(0)">City Center</a>
                                        <a href="javascript:void(0)">North East Calgary</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="link-style1 mb-3">
                                    <h6 class="text-white mb25">&nbsp;</h6>
                                    <ul class="ps-0">
                                        <li><a href="javascript:void(0)">South East Calgary</a></li>
                                        <li><a href="javascript:void(0)"> South Calgary</a></li>
                                        <li><a href="javascript:void(0)">North West Calgary </a></li>
                                        <li><a href="javascript:void(0)">West Calgary</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="link-style1 mb-3">
                                    <h6 class="text-white mb25">Quick Links</h6>
                                    <ul class="ps-0">
                                        <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="javascript:void(0)"> Why REP</a></li>
                                <li>
                                    <a href="{{ route('our-professionals') }}"
                                    >Our Professionals
                                    </a>
                                </li>
                                <li><a href="javascript:void(0)">Property Search </a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 offset-lg-2">
                        <div class="footer-widget mb-4 mb-lg-5">
                            <div class="app-widget">
                                <div class="row mb-4 mb-lg-5 flex-column align-items-end">
                                    <div class="col-lg-6">
                                        <a class="ud-btn btn-white w-100" href="javascript:void(0)">
                                            Client Portal</a
                                        >
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="javascript:void(0)" class="ud-btn btn-outline-white w-100"
                                        >Realtor® Login</a
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="social-widget text-sm-end">
                                <div class="social-style1">
                                    <a class="text-white me-2 fw600 fz15" href="javascript:void(0)"
                                    >Follow us</a
                                    >
                                    <a href="javascript:void(0)"
                                    ><i class="fab fa-facebook-f list-inline-item"></i
                                        ></a>
                                    <a href="javascript:void(0)"
                                    ><i class="fab fa-twitter list-inline-item"></i
                                        ></a>
                                    <a href="javascript:void(0)"
                                    ><i class="fab fa-instagram list-inline-item"></i
                                        ></a>
                                    <a href="javascript:void(0)"
                                    ><i class="fab fa-linkedin-in list-inline-item"></i
                                        ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container white-bdrt1 py-4">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="text-center text-lg-start">
                            <p class="copyright-text text-gray ff-heading">
                                © REP - All rights reserved
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-center text-lg-end">
                            <p class="footer-menu ff-heading text-gray">
                                <a class="text-gray" href="javascript:void(0)">Privacy</a> ·
                                <a class="text-gray" href="javascript:void(0)">Terms</a> ·
                                <a class="text-gray" href="javascript:void(0)">Sitemap</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <p class="text-white">
                            The trademarks REALTOR®, REALTORS®, and the REALTOR® logo are
                            controlled by The Canadian Real Estate Association (CREA) and
                            identify real estate professionals who are members of CREA.
                            The trademarks MLS®, Multiple Listing Service® and the
                            associated logos are owned by The Canadian Real Estate
                            Association (CREA) and identify the quality of services
                            provided by real estate professionals who are members of CREA.
                        </p>
                        <p class="text-white">
                            The data included on this website is deemed to be reliable,
                            but is not guaranteed to be accurate by the Real Estate Board.
                        </p>
                    </div>
                    <div class="col-md-3">
                        <div class="d-flex align-items-center justify-content-end">
                            <img src="images/MLS_BW.png" class="img-fluid" alt="" />
                            <img src="images/REALTOR_BW.png" class="img-fluid" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <a class="scrollToHome" href="javascript:void(0)"><i class="fas fa-angle-up"></i></a>
    </div>
@endsection
