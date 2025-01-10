@extends(' layouts.pages')

@section('content')
    <!-- Property All Lists -->
    <section class="pt60 pb90 bgc-f7">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-delay="100ms">
                <div class="col-lg-8">
                    <div class="single-property-content mb30-md">
                        <h2 class="sp-lg-title">{{ $listing->unparsed_address }}</h2>
                        <div class="pd-meta mb15 d-md-flex align-items-center">
                            <p class="text fz15 mb-0 bdrr1 pr10 bdrrn-sm">
                                {{ $listing->property_type }}, {{ $listing->property_sub_type }}
                            </p>
                            <span class="ms-3">MLS® # {{ $listing->listing_id }}</span>
                        </div>
                        <div class="property-meta d-flex align-items-center">
                            <a class="text fz15" href="javascript:void(0)"
                            ><i class="flaticon-bed pe-2 align-text-top"></i>{{ ($listing->bedrooms_total == null)?0:$listing->bedrooms_total }} bed</a
                            >
                            <a class="text ml20 fz15" href="javascript:void(0)"
                            ><i class="flaticon-shower pe-2 align-text-top"></i>{{ ($listing->bathrooms_full == null)?0:$listing->bathrooms_full }}
                                bath</a
                            >
                            <a class="text ml20 fz15" href="javascript:void(0)"
                            ><i class="flaticon-expand pe-2 align-text-top"></i>{{ ($listing->living_area_sf == null)?0:$listing->living_area_sf }}
                                sqft</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-property-content">
                        <div class="property-action text-lg-end">
                            <div
                                class="d-flex mb20 mb10-md align-items-center justify-content-lg-end"
                            >
                                <a class="icon mr10" href="javascript:void(0)"
                                ><span class="flaticon-like"></span
                                    ></a>
                                <a class="icon mr10" href="javascript:void(0)"
                                ><span class="flaticon-new-tab"></span
                                    ></a>
                                <a class="icon mr10" href="javascript:void(0)"
                                ><span class="flaticon-share-1"></span
                                    ></a>
                                <a class="icon" href="javascript:void(0)"
                                ><span class="flaticon-printer"></span
                                    ></a>
                            </div>
                            <h3 class="price mb-0">${{ number_format($listing->list_price) }}</h3>
                            <p class="text space fz15">${{ number_format($listing->list_price_square_foot) }}/sq ft</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb30 mt30 wow fadeInUp" data-wow-delay="300ms">
                <div class="col-sm-6">
                    <div class="sp-img-content mb15-md">
                        <a
                            class="popup-img preview-img-1 sp-img"
                            href=""
                        >
                            <img
                                class="w-100"
                                src=""
                                alt="1.jpg"
                            />
                        </a>
                    </div>
                </div>
                
                </div>
            </div>
            <div class="row wrap wow fadeInUp" data-wow-delay="500ms">
                <div class="col-lg-8">
                    <div
                        class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative"
                    >
                        <h6 class="title fz17 mb30">Overview</h6>
                        <div class="row">
                            <div class="col-sm-6 col-lg-4">
                                <div
                                    class="overview-element mb25 d-flex align-items-center"
                                >
                                    <span class="icon flaticon-bed"></span>
                                    <div class="ml15">
                                        <h6 class="mb-0">Bedroom</h6>
                                        <p class="text mb-0 fz15">{{ ($listing->bedrooms_total == null)?0:$listing->bedrooms_total }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div
                                    class="overview-element mb25 d-flex align-items-center"
                                >
                                    <span class="icon flaticon-shower"></span>
                                    <div class="ml15">
                                        <h6 class="mb-0">Bath</h6>
                                        <p class="text mb-0 fz15">{{ ($listing->bathrooms_full == null)?0:$listing->bathrooms_full }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div
                                    class="overview-element mb25 d-flex align-items-center"
                                >
                                    <span class="icon flaticon-event"></span>
                                    <div class="ml15">
                                        <h6 class="mb-0">Year Built</h6>
                                        <p class="text mb-0 fz15">{{ $listing->year_built }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div
                                    class="overview-element mb25-xs d-flex align-items-center"
                                >
                                    <span class="icon flaticon-garage"></span>
                                    <div class="ml15">
                                        <h6 class="mb-0">Garage</h6>
                                        <p class="text mb-0 fz15">{{ ($listing->garage_yn != 0)?"Yes":"No" }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div
                                    class="overview-element mb25-xs d-flex align-items-center"
                                >
                                    <span class="icon flaticon-expand"></span>
                                    <div class="ml15">
                                        <h6 class="mb-0">Sqft</h6>
                                        <p class="text mb-0 fz15">{{ $listing->living_area_sf }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-element d-flex align-items-center">
                                    <span class="icon flaticon-home-1"></span>
                                    <div class="ml15">
                                        <h6 class="mb-0">Property Type</h6>
                                        <p class="text mb-0 fz15">{{ $listing->property_type }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative"
                    >
                        <h6 class="title fz17 mb30">Property Description</h6>
                        <p class="text mb10">
                           {{ $listing->public_remarks }}
                        </p>

                        <h6 class="title fz17 mb30 mt50">Property Details</h6>
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="d-flex justify-content-between">
                                    <div class="pd-list">
                                        <p class="fw600 mb10 ff-heading dark-color">
                                            Property ID
                                        </p>
                                        <p class="fw600 mb10 ff-heading dark-color">Price</p>
                                        <p class="fw600 mb10 ff-heading dark-color">
                                            Property Size
                                        </p>
                                        <p class="fw600 mb10 ff-heading dark-color">
                                            Bathrooms
                                        </p>
                                        <p class="fw600 mb-0 ff-heading dark-color">
                                            Bedrooms
                                        </p>
                                    </div>
                                    <div class="pd-list">
                                        <p class="text mb10">{{ $listing->listing_id }}</p>
                                        <p class="text mb10">${{ number_format($listing->list_price / 100) }}</p>
                                        <p class="text mb10">{{ ($listing->living_area_sf == null)?0:$listing->living_area_sf }} Sq Ft</p>
                                        <p class="text mb10">{{ ($listing->bathrooms_full == null)?0:$listing->bathrooms_full }}</p>
                                        <p class="text mb-0">{{ ($listing->bedrooms_total == null)?0:$listing->bedrooms_total }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 offset-xl-2">
                                <div class="d-flex justify-content-between">
                                    <div class="pd-list">
                                        <p class="fw600 mb10 ff-heading dark-color">Garage</p>
                                        <p class="fw600 mb10 ff-heading dark-color">
                                            Subdivision Name
                                        </p>
                                        <p class="fw600 mb10 ff-heading dark-color">
                                            Year Built
                                        </p>
                                        <p class="fw600 mb10 ff-heading dark-color">
                                            Property Type
                                        </p>
                                        <p class="fw600 mb-0 ff-heading dark-color">
                                            Property Status
                                        </p>
                                    </div>
                                    <div class="pd-list">
                                        <p class="text mb10">{{ ($listing->garage_spaces == null)?0:$listing->garage_spaces }}</p>
                                        <p class="text mb10">{{ ($listing->subdivision_name == null)?0:$listing->subdivision_name }}</p>
                                        <p class="text mb10">{{ ($listing->year_built == null)?'N/A':$listing->year_built }}</p>
                                        <p class="text mb10">{{ $listing->property_type }}</p>
                                        <p class="text mb-0">{{ $listing->transaction_type }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative"
                    >
                        <h6 class="title fz17 mb30 mt30">Address</h6>
                        <div class="row">
                            <div class="col-md-6 col-xl-8">
                                <div class="d-flex justify-content-between">
                                    <div class="pd-list">
                                        <p class="text mb10">{{ $listing->unparsed_address }},{{ $listing->postal_code }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <iframe
                                    class="position-relative bdrs12 mt30 h250"
                                    loading="lazy"
                                    src="https://maps.google.com/maps?q={{ $listing->unparsed_address }}&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near"
                                    title="{{ $listing->unparsed_address }}"
                                    aria-label="{{ $listing->unparsed_address }}"
                                ></iframe>
                            </div>
                        </div>
                    </div>

                    <div
                        class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative"
                    >


                        <h6 class="title fz17 mb30 ">Building</h6>
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="title fz16 mb20">Bedrooms</h6>
                                <hr>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="d-flex justify-content-between">
                                    <div class="pd-list">
                                        <p class="fw600 mb10 ff-heading dark-color">
                                            Above Grade
                                        </p>
                                    </div>
                                    <div class="pd-list">
                                        <p class="text mb10">{{ $listing->bedrms_above_grade }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 offset-xl-2">
                                <div class="d-flex justify-content-between">
                                    <div class="pd-list">
                                        <p class="fw600 mb10 ff-heading dark-color">Below Grade</p>

                                    </div>
                                    <div class="pd-list">
                                        <p class="text mb10">{{ ($listing->bedrooms_below_grade == null)?0:$listing->bedrooms_below_grade }}</p>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt20">
                            <div class="col-md-12">
                                <h6 class="title fz16 mb20">Bathrooms</h6>
                                <hr>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="d-flex justify-content-between">
                                    <div class="pd-list">
                                        <p class="fw600 mb10 ff-heading dark-color">
                                            Total
                                        </p>
                                    </div>
                                    <div class="pd-list">
                                        <p class="text mb10">{{ $listing->bathrooms_total_integer }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 offset-xl-2">
                                <div class="d-flex justify-content-between">
                                    <div class="pd-list">
                                        <p class="fw600 mb10 ff-heading dark-color">Partial</p>

                                    </div>
                                    <div class="pd-list">
                                        <p class="text mb10">{{ ($listing->bathrooms_half == null)?0:$listing->bathrooms_half }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt20">
                            <div class="col-md-12">
                                <h6 class="title fz16 mb20">Interior Features</h6>
                                <hr>
                            </div>
                            <div class="col-md-12 ">
                                <div class="d-flex justify-content-between gap-3">
                                    <p class="fw600 mb10 ff-heading dark-color">
                                        Appliances Included
                                    </p>

                                    <p class="text mb10">{{ $listing->appliances }}</p>
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="d-flex justify-content-between gap-3">
                                    <p class="fw600 mb10 ff-heading dark-color">
                                        Basement Type
                                    </p>

                                    <p class="text mb10">{{ $listing->basement }}</p></div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="d-flex justify-content-between gap-3">
                                    <p class="fw600 mb10 ff-heading dark-color">
                                        Flooring
                                    </p>

                                    <p class="text mb10">{{ ($listing->flooring == null)?0:$listing->flooring }}</p></div>
                            </div>
                        </div>

                        <div class="row mt20">
                            <div class="col-md-12">
                                <h6 class="title fz16 mb20">Building Features</h6>
                                <hr>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="d-flex justify-content-between">
                                    <div class="pd-list">
                                        <p class="fw600 mb10 ff-heading dark-color">
                                            Features
                                        </p>

                                        <p class="fw600 mb10 ff-heading dark-color">
                                            Foundation Type
                                        </p>
                                        <p class="fw600 mb10 ff-heading dark-color">
                                            Style
                                        </p>
                                    </div>
                                    <div class="pd-list">
                                        <p class="text mb10">{{ $listing->lot_features }}</p>
                                        <p class="text mb10">{{ $listing->foundation_details }}</p>
                                        <p class="text mb10">{{ $listing->property_sub_type }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 offset-xl-2">
                                <div class="d-flex justify-content-between">
                                    <div class="pd-list">
                                        <p class="fw600 mb10 ff-heading dark-color">Square Footage</p>
                                        <p class="fw600 mb10 ff-heading dark-color">Total Finished Area</p>
                                        <p class="fw600 mb10 ff-heading dark-color">Structures</p>

                                    </div>
                                    <div class="pd-list">
                                        <p class="text mb10">{{ ($listing->living_area_sf == null)?0:$listing->living_area_sf }}</p>
                                        <p class="text mb10">{{ ($listing->living_area_sf == null)?0:$listing->living_area_sf }}</p>
                                        <p class="text mb10">{{ ($listing->patio_and_porch_features == null)?0:$listing->patio_and_porch_features }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt20">
                            <div class="col-md-12">
                                <h6 class="title fz16 mb20">Heating & Cooling</h6>
                                <hr>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="d-flex justify-content-between">
                                    <div class="pd-list">
                                        <p class="fw600 mb10 ff-heading dark-color">
                                            Cooling
                                        </p>

                                        <p class="fw600 mb10 ff-heading dark-color">
                                            Fireplace
                                        </p>

                                    </div>
                                    <div class="pd-list">
                                        <p class="text mb10">{{ $listing->cooling }}</p>
                                        <p class="text mb10">{{ $listing->fireplaces_total }}</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 offset-xl-2">
                                <div class="d-flex justify-content-between">
                                    <div class="pd-list">
                                        <p class="fw600 mb10 ff-heading dark-color">Heating Type
                                        </p>


                                    </div>
                                    <div class="pd-list">
                                        <p class="text mb10">{{ ($listing->heating == null)?0:$listing->heating }}</p>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row mt20">
                            <div class="col-md-12">
                                <h6 class="title fz16 mb20">Exterior Features</h6>
                                <hr>
                            </div>
                            <div class="col-md-12 col-xl-12">
                                <div class="d-flex justify-content-between">
                                    <div class="pd-list">
                                        <p class="fw600 mb10 ff-heading dark-color">
                                            Exterior Finish
                                        </p>

                                    </div>
                                    <div class="pd-list">
                                        <p class="text mb10">{{ $listing->construction_materials }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-12">
                                <div class="d-flex justify-content-between">
                                    <div class="pd-list">
                                        <p class="fw600 mb10 ff-heading dark-color">
                                            Roof
                                        </p>

                                    </div>
                                    <div class="pd-list">
                                        <p class="text mb10">{{ $listing->roof }}</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row mt20">
                            <div class="col-md-12">
                                <h6 class="title fz16 mb20">Parking</h6>
                                <hr>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="d-flex justify-content-between">
                                    <div class="pd-list">
                                        <p class="fw600 mb10 ff-heading dark-color">
                                            Parking Type
                                        </p>
                                    </div>
                                    <div class="pd-list">
                                        <p class="text mb10">{{ $listing->parking_features }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="d-flex justify-content-between">
                                    <div class="pd-list">
                                        <p class="fw600 mb10 ff-heading dark-color">
                                            Total Parking Spaces
                                        </p>



                                    </div>
                                    <div class="pd-list">
                                        <p class="text mb10">{{ $listing->parking_total }}</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="row mt20">
                            <div class="col-md-12">
                                <h6 class="title fz16 mb20">Rooms</h6>
                                <hr>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="d-flex justify-content-between">
                                    <div class="pd-list">
                                        <p class="fw600 mb10 ff-heading dark-color">
                                            Main Level Area
                                        </p>
                                    </div>
                                    <div class="pd-list">
                                        <p class="text mb10">{{ $listing->main_level_finished_area }}Sqft</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="d-flex justify-content-between">
                                    <div class="pd-list">
                                        <p class="fw600 mb10 ff-heading dark-color">
                                            Main Level Finished
                                        </p>
                                    </div>
                                    <div class="pd-list">
                                        <p class="text mb10">{{ $listing->main_level_finished_area_metres }}Sqft</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                        @if($listing->url_alternate_feature_sheet != null)
                            <div class="row mt20">
                                <div class="col-md-12">
                                    <h6 class="title fz16 mb20">Others</h6>
                                    <hr>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="d-flex justify-content-between">
                                        <div class="pd-list">
                                            <a href="{{ $listing->url_alternate_feature_sheet }}" target="_blank">More Information</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-4">
                                    <div class="d-flex justify-content-between">
                                        <div class="pd-list">

                                                <a href="{{ $listing->url_brochure }}" target="_blank">Brochure</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div
                        class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative"
                    >
                        <h6 class="title fz17 mb30">Features & Amenities</h6>
                        @if($listing->community_features != null)
                            @php
                                $amenities = explode(',',$listing->community_features);
                            @endphp
                            <div class="row">
                                @foreach($amenities as $k => $value)
                                    <div class="col-sm-6 col-md-4">
                                        <div class="pd-list mb10-sm">
                                            <p class="text mb10">
                                                <i class="fas fa-circle fz6 align-middle pe-2"></i>{{ $value }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    @if($roomDetails != null)
                        <div
                        class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative"
                    >
                        <h6 class="title fz17 mb30">Rooms</h6>
                        <div class="row">
                            <div class="col-md-12">
                                @foreach($roomDetails->description as $level => $rooms)
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3 class="text-dark"><b>{{ $level }}</b></h3>
                                        </div>
                                    </div>
                                    <table class="table table-bordered table-striped">
                                        <tbody>
                                            @foreach($rooms as $k => $room)
                                                <tr>
                                                    <td>{{ $room['RoomType'] }}</td>
                                                    <td>{{ $room['RoomDimensions'] }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif

                    <div
                        class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative"
                    >
                        <h6 class="title fz17 mb30">Video</h6>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="property_video bdrs12 w-100">
                                    <a
                                        class="video_popup_btn mx-auto popup-img popup-youtube"
                                        href="https://www.youtube.com/watch?v=oqNZOOWF8qM"
                                    ><span class="flaticon-play"></span
                                        ></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative"
                    >
                        <h6 class="title fz17 mb30">Schedule A Tour</h6>

                        <div class="row">
                            <div class="col-md-12">
                                {!! Form::open(['route' => 'request.save','class'=>'form-style1']) !!}
                                {!! Form::hidden('property_id',request()->id) !!}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb20">
                                                <input
                                                    name="datetime"
                                                    type="datetime-local"
                                                    class="form-control"
                                                    placeholder="Time"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb20">
                                                {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Name']) !!}
                                                @error('name')
                                                    <small class="help-bloc text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb20">
                                                {!! Form::text('phone',null,['class'=>'form-control','placeholder'=>'Phone']) !!}
                                                @error('phone')
                                                    <small class="help-bloc text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb20">
                                                {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Email']) !!}
                                                @error('email')
                                                    <small class="help-bloc text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb10">
                                                {!! Form::textarea('message',null,['class'=>'form-control','placeholder'=>'Enter Your Message','cols'=>30,'rows'=>4]) !!}
                                                @error('message')
                                                    <small class="help-bloc text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div
                                            class="checkbox-style1 d-block d-sm-flex align-items-center justify-content-between mb10"
                                        >
                                            <label class="custom_checkbox fz14 ff-heading"
                                            >By submitting this form I agree to Terms of Use
                                                <input type="checkbox" />
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="d-grid">
                                                {!! Form::submit('Submit a Tour Request',['class'=>'ud-btn btn-thm']) !!}
                                            </div>
                                        </div>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="column">
                        <div
                            class="agen-personal-info position-relative bgc-white default-box-shadow1 bdrs12 p30 mb30"
                        >
                            <div class="widget-wrapper mb-0">
                                <h6 class="title fz17 mb30">Get More Information</h6>
                                <div
                                    class="agent-single d-sm-flex align-items-center pb25 agentPropertypage"
                                >
                                    <div class="single-img mb30-sm">
                                        <img
                                            class="w90"
                                            src="{{ asset('images/12511754.png') }}"
                                            alt=""
                                        />
                                    </div>
                                    @if($listing->assigned_property != null)
                                        <div class="single-contant ml20 ml0-xs">
                                            <h6 class="title mb-1">{{ $listing->assigned_property->user->name }}</h6>
                                            <div
                                                class="agent-meta mb10 d-md-flex align-items-center"
                                            >
                                                <a class="text fz15" href="javascript:void(0)"
                                                ><i class="flaticon-call pe-1"></i>{{ $listing->assigned_property->user->phone }}</a
                                                >
                                            </div>
                                            <a href="javascript:void(0)" class="text-decoration-underline fw600"
                                            >View Listings</a
                                            >
                                        </div>
                                    @else

                                    @endif
                                </div>
                                <div class="d-grid">
                                    <button class="ud-btn btn-white2">
                                        Contact Agent<i class="fal fa-arrow-right-long"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div
                            class="default-box-shadow1 bdrs12 bdr1 p30 mb30-md bgc-white position-relative"
                        >
                            <h4 class="form-title mb5 normalFont">Schedule a tour</h4>
                            <p class="text">Choose your preferred day</p>
                            <div class="ps-navtab">
                                <div class="tab-content" id="pills-tabContent">
                                    <div
                                        class="tab-pane fade show active"
                                        id="pills-inperson"
                                        role="tabpanel"
                                        aria-labelledby="pills-inperson-tab"
                                    >
                                        {!! Form::open(['route' => 'request.save','class'=>'form-style1']) !!}
                                            {!! Form::hidden('property_id',request()->id) !!}
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb20">
                                                        <input
                                                            name="datetime"
                                                            type="datetime-local"
                                                            class="form-control"
                                                            placeholder="Time"
                                                        />
                                                        @error('datetime')
                                                            <small class="help-bloc text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb20">
                                                        {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Name']) !!}
                                                        @error('name')
                                                            <small class="help-bloc text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb20">
                                                        {!! Form::text('phone',null,['class'=>'form-control','placeholder'=>'Phone']) !!}
                                                        @error('phone')
                                                            <small class="help-bloc text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb20">
                                                        {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Email']) !!}
                                                        @error('email')
                                                            <small class="help-bloc text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb10">
                                                        {!! Form::textarea('message',null,['class'=>'form-control','placeholder'=>'Enter Your Message','cols'=>30,'rows'=>4]) !!}
                                                        @error('message')
                                                            <small class="help-bloc text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div
                                                    class="checkbox-style1 d-block d-sm-flex align-items-center justify-content-between mb10"
                                                >
                                                    <label class="custom_checkbox fz14 ff-heading"
                                                    >By submitting this form I agree to Terms of
                                                        Use
                                                        <input type="checkbox" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="d-grid">
                                                        {!! Form::submit('Submit a Tour Request',['class'=>'ud-btn btn-thm']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt30 wow fadeInUp" data-wow-delay="700ms">
                <div class="col-lg-9">
                    <div class="main-title2">
                        <h2 class="title">Nearby Similar Homes</h2>
                        <p class="paragraph">
                            Aliquam lacinia diam quis lacus euismod
                        </p>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="900ms">
                <div class="col-lg-12">
                    <div
                        class="property-city-slider navi_pagi_top_right slider-dib-sm slider-3-grid owl-theme owl-carousel"
                    >
                        <div class="item">
                            <div class="listing-style5">
                                <div class="list-thumb">
                                    <img
                                        class="w-100"
                                        src="https://feed-images.rewhosting.com/pwmls/_cloud_media/property/residential/a2087985-1-144f205a42ad3437914ba3f2b35c677d-o.jpg"
                                        alt=""
                                    />
                                    <div class="list-tag fz12">
                                        <i class="fa-thin fa-gem me-2"></i>Diamond
                                    </div>
                                    <div class="list-meta2">
                                        <a
                                            href="javascript:void(0)"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            title="Favourite"
                                        ><span class="flaticon-like"></span
                                            ></a>

                                        <a
                                            href="javascript:void(0)"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            title="Preview"
                                        ><span class="flaticon-fullscreen"></span
                                            ></a>
                                    </div>
                                </div>
                                <div class="list-content">
                                    <div class="list-price mb-2">$790,000</div>
                                    <h6 class="list-title">
                                        <a href="javascript:void(0)">
                                            196 Evansborough Way Northwest, Calgary , Alberta
                                        </a>
                                    </h6>
                                    <p class="list-text">Residential, Detached</p>
                                    <div class="list-meta d-flex align-items-center gap-3">
                                        <a href="javascript:void(0)"
                                        ><span class="flaticon-bed"></span>5 bed</a
                                        >
                                        <a href="javascript:void(0)"
                                        ><span class="flaticon-shower"></span>3½ bath</a
                                        >
                                        <a href="javascript:void(0)"
                                        ><span class="flaticon-expand"></span>2197 sqft</a
                                        >
                                    </div>

                                    <span class="mlsNumber">MLS® # A2081935</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="listing-style5">
                                <div class="list-thumb">
                                    <img
                                        class="w-100"
                                        src="https://feed-images.rewhosting.com/pwmls/_cloud_media/property/residential/a2087985-1-144f205a42ad3437914ba3f2b35c677d-o.jpg"
                                        alt=""
                                    />
                                    <div class="list-tag fz12">
                                        <i class="fa-thin fa-gem me-2"></i>Diamond
                                    </div>
                                    <div class="list-meta2">
                                        <a
                                            href="javascript:void(0)"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            title="Favourite"
                                        ><span class="flaticon-like"></span
                                            ></a>

                                        <a
                                            href="javascript:void(0)"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            title="Preview"
                                        ><span class="flaticon-fullscreen"></span
                                            ></a>
                                    </div>
                                </div>
                                <div class="list-content">
                                    <div class="list-price mb-2">$790,000</div>
                                    <h6 class="list-title">
                                        <a href="javascript:void(0)">
                                            196 Evansborough Way Northwest, Calgary , Alberta
                                        </a>
                                    </h6>
                                    <p class="list-text">Residential, Detached</p>
                                    <div class="list-meta d-flex align-items-center gap-3">
                                        <a href="javascript:void(0)"
                                        ><span class="flaticon-bed"></span>5 bed</a
                                        >
                                        <a href="javascript:void(0)"
                                        ><span class="flaticon-shower"></span>3½ bath</a
                                        >
                                        <a href="javascript:void(0)"
                                        ><span class="flaticon-expand"></span>2197 sqft</a
                                        >
                                    </div>

                                    <span class="mlsNumber">MLS® # A2081935</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="listing-style5">
                                <div class="list-thumb">
                                    <img
                                        class="w-100"
                                        src="https://feed-images.rewhosting.com/pwmls/_cloud_media/property/residential/a2087985-1-144f205a42ad3437914ba3f2b35c677d-o.jpg"
                                        alt=""
                                    />
                                    <div class="list-tag fz12">
                                        <i class="fa-thin fa-gem me-2"></i>Diamond
                                    </div>
                                    <div class="list-meta2">
                                        <a
                                            href="javascript:void(0)"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            title="Favourite"
                                        ><span class="flaticon-like"></span
                                            ></a>

                                        <a
                                            href="javascript:void(0)"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            title="Preview"
                                        ><span class="flaticon-fullscreen"></span
                                            ></a>
                                    </div>
                                </div>
                                <div class="list-content">
                                    <div class="list-price mb-2">$790,000</div>
                                    <h6 class="list-title">
                                        <a href="javascript:void(0)">
                                            196 Evansborough Way Northwest, Calgary , Alberta
                                        </a>
                                    </h6>
                                    <p class="list-text">Residential, Detached</p>
                                    <div class="list-meta d-flex align-items-center gap-3">
                                        <a href="javascript:void(0)"
                                        ><span class="flaticon-bed"></span>5 bed</a
                                        >
                                        <a href="javascript:void(0)"
                                        ><span class="flaticon-shower"></span>3½ bath</a
                                        >
                                        <a href="javascript:void(0)"
                                        ><span class="flaticon-expand"></span>2197 sqft</a
                                        >
                                    </div>

                                    <span class="mlsNumber">MLS® # A2081935</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="listing-style5">
                                <div class="list-thumb">
                                    <img
                                        class="w-100"
                                        src="https://feed-images.rewhosting.com/pwmls/_cloud_media/property/residential/a2087985-1-144f205a42ad3437914ba3f2b35c677d-o.jpg"
                                        alt=""
                                    />
                                    <div class="list-tag fz12">
                                        <i class="fa-thin fa-gem me-2"></i>Diamond
                                    </div>
                                    <div class="list-meta2">
                                        <a
                                            href="javascript:void(0)"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            title="Favourite"
                                        ><span class="flaticon-like"></span
                                            ></a>

                                        <a
                                            href="javascript:void(0)"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            title="Preview"
                                        ><span class="flaticon-fullscreen"></span
                                            ></a>
                                    </div>
                                </div>
                                <div class="list-content">
                                    <div class="list-price mb-2">$790,000</div>
                                    <h6 class="list-title">
                                        <a href="javascript:void(0)">
                                            196 Evansborough Way Northwest, Calgary , Alberta
                                        </a>
                                    </h6>
                                    <p class="list-text">Residential, Detached</p>
                                    <div class="list-meta d-flex align-items-center gap-3">
                                        <a href="javascript:void(0)"
                                        ><span class="flaticon-bed"></span>5 bed</a
                                        >
                                        <a href="javascript:void(0)"
                                        ><span class="flaticon-shower"></span>3½ bath</a
                                        >
                                        <a href="javascript:void(0)"
                                        ><span class="flaticon-expand"></span>2197 sqft</a
                                        >
                                    </div>

                                    <span class="mlsNumber">MLS® # A2081935</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="listing-style5">
                                <div class="list-thumb">
                                    <img
                                        class="w-100"
                                        src="https://feed-images.rewhosting.com/pwmls/_cloud_media/property/residential/a2087985-1-144f205a42ad3437914ba3f2b35c677d-o.jpg"
                                        alt=""
                                    />
                                    <div class="list-tag fz12">
                                        <i class="fa-thin fa-gem me-2"></i>Diamond
                                    </div>
                                    <div class="list-meta2">
                                        <a
                                            href="javascript:void(0)"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            title="Favourite"
                                        ><span class="flaticon-like"></span
                                            ></a>

                                        <a
                                            href="javascript:void(0)"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            title="Preview"
                                        ><span class="flaticon-fullscreen"></span
                                            ></a>
                                    </div>
                                </div>
                                <div class="list-content">
                                    <div class="list-price mb-2">$790,000</div>
                                    <h6 class="list-title">
                                        <a href="javascript:void(0)">
                                            196 Evansborough Way Northwest, Calgary , Alberta
                                        </a>
                                    </h6>
                                    <p class="list-text">Residential, Detached</p>
                                    <div class="list-meta d-flex align-items-center gap-3">
                                        <a href="javascript:void(0)"
                                        ><span class="flaticon-bed"></span>5 bed</a
                                        >
                                        <a href="javascript:void(0)"
                                        ><span class="flaticon-shower"></span>3½ bath</a
                                        >
                                        <a href="javascript:void(0)"
                                        ><span class="flaticon-expand"></span>2197 sqft</a
                                        >
                                    </div>

                                    <span class="mlsNumber">MLS® # A2081935</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="listing-style5">
                                <div class="list-thumb">
                                    <img
                                        class="w-100"
                                        src="https://feed-images.rewhosting.com/pwmls/_cloud_media/property/residential/a2087985-1-144f205a42ad3437914ba3f2b35c677d-o.jpg"
                                        alt=""
                                    />
                                    <div class="list-tag fz12">
                                        <i class="fa-thin fa-gem me-2"></i>Diamond
                                    </div>
                                    <div class="list-meta2">
                                        <a
                                            href="javascript:void(0)"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            title="Favourite"
                                        ><span class="flaticon-like"></span
                                            ></a>

                                        <a
                                            href="javascript:void(0)"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            title="Preview"
                                        ><span class="flaticon-fullscreen"></span
                                            ></a>
                                    </div>
                                </div>
                                <div class="list-content">
                                    <div class="list-price mb-2">$790,000</div>
                                    <h6 class="list-title">
                                        <a href="javascript:void(0)">
                                            196 Evansborough Way Northwest, Calgary , Alberta
                                        </a>
                                    </h6>
                                    <p class="list-text">Residential, Detached</p>
                                    <div class="list-meta d-flex align-items-center gap-3">
                                        <a href="javascript:void(0)"
                                        ><span class="flaticon-bed"></span>5 bed</a
                                        >
                                        <a href="javascript:void(0)"
                                        ><span class="flaticon-shower"></span>3½ bath</a
                                        >
                                        <a href="javascript:void(0)"
                                        ><span class="flaticon-expand"></span>2197 sqft</a
                                        >
                                    </div>

                                    <span class="mlsNumber">MLS® # A2081935</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="listing-style5">
                                <div class="list-thumb">
                                    <img
                                        class="w-100"
                                        src="https://feed-images.rewhosting.com/pwmls/_cloud_media/property/residential/a2087985-1-144f205a42ad3437914ba3f2b35c677d-o.jpg"
                                        alt=""
                                    />
                                    <div class="list-tag fz12">
                                        <i class="fa-thin fa-gem me-2"></i>Diamond
                                    </div>
                                    <div class="list-meta2">
                                        <a
                                            href="javascript:void(0)"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            title="Favourite"
                                        ><span class="flaticon-like"></span
                                            ></a>

                                        <a
                                            href="javascript:void(0)"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            title="Preview"
                                        ><span class="flaticon-fullscreen"></span
                                            ></a>
                                    </div>
                                </div>
                                <div class="list-content">
                                    <div class="list-price mb-2">$790,000</div>
                                    <h6 class="list-title">
                                        <a href="javascript:void(0)">
                                            196 Evansborough Way Northwest, Calgary , Alberta
                                        </a>
                                    </h6>
                                    <p class="list-text">Residential, Detached</p>
                                    <div class="list-meta d-flex align-items-center gap-3">
                                        <a href="javascript:void(0)"
                                        ><span class="flaticon-bed"></span>5 bed</a
                                        >
                                        <a href="javascript:void(0)"
                                        ><span class="flaticon-shower"></span>3½ bath</a
                                        >
                                        <a href="javascript:void(0)"
                                        ><span class="flaticon-expand"></span>2197 sqft</a
                                        >
                                    </div>

                                    <span class="mlsNumber">MLS® # A2081935</span>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                <li><a href="{{ route('advance-filter') }}">Property Search </a></li>
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
@endsection
