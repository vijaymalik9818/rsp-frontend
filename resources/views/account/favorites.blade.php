@extends(' layouts.account')
@section('content')
    <div class="dashboard__content property-page bgc-f7">
        <div class="row pb40 d-block d-lg-none">
            <div class="col-lg-12">
                @include(' components.account._sidebar-mobile')
            </div>
        </div>
        <div class="col-lg-12">
            <div class="dashboard_title_area">
                <h2>My Favorites</h2>
                <p class="text">We are glad to see you again!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 p20-xs mb30 overflow-hidden position-relative">
                    <div class="row">
                        @foreach($favorites as $singleFavourites)
                            <div class="col-sm-6 col-xl-3">
                                <div class="listing-style1 style2">
                                    <div class="list-thumb">
                                        <a href="{{ route('favorite.delete',$singleFavourites->id) }}" onclick="return confirm('Are you sure to remove from favorites?')" class="tag-del" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Item"><span class="fas fa-trash-can"></span></a>
                                        <img class="w-100" src="{{ asset('properties/images/LargePhoto'.$singleFavourites->property->listing_key_numeric.'-0-'.$singleFavourites->property->listing_id.'.jpeg') }}" alt="">
                                        <div class="list-price">${{ number_format($singleFavourites->property->list_price/100) }} </div>
                                    </div>
                                    <div class="list-content">
                                        <h6 class="list-title">
                                            <a href="{{ route('listing.show',$singleFavourites->property->id) }}" target="_blank">
                                                {{ $singleFavourites->property->unparsed_address }}
                                            </a>
                                        </h6>
                                        <p class="list-text">{{ $singleFavourites->property->property_type }}, {{ $singleFavourites->property->property_sub_type }}</p>
                                        <div class="list-meta d-flex align-items-center">
                                            @if($singleFavourites->property->bedrooms_total !== null)
                                                <a href="javascript:void(0)"><span class="flaticon-bed"></span>{{ ($singleFavourites->property->bedrooms_total == null)?0:$singleFavourites->property->bedrooms_total }} bed</a>
                                            @endif
                                            @if($singleFavourites->property->bathrooms_full !== null)
                                                <a href="javascript:void(0)"><span class="flaticon-shower"></span>{{ ($singleFavourites->property->bathrooms_full == null)?0:$singleFavourites->property->bathrooms_full }} bath</a>
                                            @endif
                                            @if($singleFavourites->property->building_area_total_sf !== null)
                                            <a href="javascript:void(0)"><span class="flaticon-expand"></span>{{ ($singleFavourites->property->building_area_total_sf == null)?0:$singleFavourites->property->building_area_total_sf }} sqft</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="mbp_pagination text-center">
                            {!! $favorites->links('pagination') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
