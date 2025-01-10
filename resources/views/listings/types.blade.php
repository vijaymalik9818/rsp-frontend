@extends(' layouts.pages')
@section('content')
<style>
    .suggestion-list {
    max-height: 30px; /* Maximum height of 30px */
    overflow-y: auto; /* Enable vertical scrollbar */
}


.sort-by-div {
  justify-content: center;
  align-items: center;
  display: flex;
  border: 1px solid #838383;
  height: 29px;
  width: 100px;
  border-radius: 8px;
}

.list-thumb
{
    max-height: 250px;
    overflow: hidden;
}
.list-thumb img{
    height: 100%;
    width: 100%;
    object-fit: contain;
}
.listing-style5 .list-thumb 
{
    height: 200px!important;
}
.listing-style5 .list-content  {
    height: 195px!important;
}
</style>
<div class="body_content">
    <section class="advance-search-menu bg-white position-relative default-box-shadow2 py30">
        <div class="container-fluid container-xxl">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>{{ ucfirst($type) }} Listings</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Property Half Map V4 -->
    <section class="">
        <div class="container-fluid container-xl">
            <div class="row align-items-center mb10">
                <div class=" col-md-6">
                    <h4 class="mb-1 text-nowrap">{{ ucfirst($type) }} Listings</h4>
                </div>
                <div class=" col-md-6">
                    <div
                        class="page_control_shorting d-flex align-items-center justify-content-end justify-content-xl-end">
                        <div class="pcs_dropdown pr10 sort d-flex align-items-center gap-3">

                                                <h6> Sort by:</h6>
                                                     <div class="sort-by-div">
                                                        <select class="show-tick" id="sort_by" name="sort_by" onchange="fetchPropertiesWithSorting()">
                                                            <option value="desc">Newest</option>
                                                            <option value="price_low">Price Low</option>
                                                            <option value="price_high">Price High</option>
                                                        </select>
                                                     </div>
                          
                        
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="listings_type"> </div>
            
        </div>
        
</div>
<div class="row">
    <div class="mbp_pagination text-center">
        <ul id="pagination_type" class="page_navigation"></ul>
        <p class="mt10 pagination_page_count text-center">
          </p>
               
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
                                    <a href="{{ route('our-professionals') }}">Our Professionals
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
                                    Client Portal</a>
                            </div>
                            <div class="col-lg-6">
                                <a href="javascript:void(0)" class="ud-btn  btn-outline-white w-100">Realtor® Login</a>
                            </div>
                        </div>
                    </div>
                    <div class="social-widget text-sm-end">
                        <div class="social-style1">
                            <a class="text-white me-2 fw600 fz15" href="javascript:void(0)">Follow us</a>
                            <a href="javascript:void(0)"><i class="fab fa-facebook-f list-inline-item"></i></a>
                            <a href="javascript:void(0)"><i class="fab fa-twitter list-inline-item"></i></a>
                            <a href="javascript:void(0)"><i class="fab fa-instagram list-inline-item"></i></a>
                            <a href="javascript:void(0)"><i class="fab fa-linkedin-in list-inline-item"></i></a>
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

<script>
const url = window.location.href;
const type = url.split('/').pop();

var header =  '{{env("BACKEND_URL")}}';

var apiHeader = header + `/api/agents/get-properties-type?type=${type}`;
fetchProperties(apiHeader);

function fetchPropertiesWithSorting() {
    const selectedSortOption = document.getElementById('sort_by').value;
    const apiHeaderWithSorting = `${apiHeader}&sort_by=${selectedSortOption}`;
    fetchProperties(apiHeaderWithSorting);
}

function fetchProperties(apiHeader) {
    fetch(apiHeader)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            displayProperties(data[`${type}_properties`].data, type);
            window.scrollTo({
top: 0,
behavior: 'smooth' 
});
            if (data[`${type}_properties`]) {
                const paginationContainer = document.getElementById('pagination_type');
                const currentPage = data[`${type}_properties`].current_page;
                const totalPages = data[`${type}_properties`].last_page;
                const itemsPerPage = data[`${type}_properties`].per_page;

                const startAgentIndex = (currentPage - 1) * itemsPerPage + 1;
                const endAgentIndex = Math.min(currentPage * itemsPerPage, data[`${type}_properties`].total);

                const visiblePages = 3; // Number of pages to display at a time

                const startPage = Math.max(1, currentPage - Math.floor(visiblePages / 2));
                const endPage = Math.min(totalPages, startPage + visiblePages - 1);

                let paginationHtml = '';

                if (currentPage > 1) {
                    paginationHtml += `<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="fetchProperties('${data[`${type}_properties`].first_page_url}')"><i class="fa fa-angle-double-left"></i></a></li>`;
                    paginationHtml += `<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="fetchProperties('${data[`${type}_properties`].prev_page_url}')"><i class="fa fa-angle-left"></i></a></li>`;
                } else {
                    paginationHtml += `<li class="page-item disabled"><span class="page-link"><i class="fa fa-angle-double-left"></i></span></li>`;
                    paginationHtml += `<li class="page-item disabled"><span class="page-link"><i class="fa fa-angle-left"></i></span></li>`;
                }

                for (let i = startPage; i <= endPage; i++) {
                    if (i === currentPage) {
                        paginationHtml += `<li class="page-item active"><span class="page-link">${i}</span></li>`;
                    } else {
                        paginationHtml += `<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="fetchProperties('${header}/api/agents/get-properties-type?type=${type}&page=${i}')">${i}</a></li>`;
                    }
                }

                if (currentPage < totalPages) {
                    paginationHtml += `<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="fetchProperties('${data[`${type}_properties`].next_page_url}')"><i class="fa fa-angle-right"></i></a></li>`;
                    paginationHtml += `<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="fetchProperties('${data[`${type}_properties`].last_page_url}')"><i class="fa fa-angle-double-right"></i></a></li>`;
                } else {
                    paginationHtml += `<li class="page-item disabled"><span class="page-link"><i class="fa fa-angle-right"></i></span></li>`;
                    paginationHtml += `<li class="page-item disabled"><span class="page-link"><i class="fa fa-angle-double-right"></i></span></li>`;
                }

                paginationContainer.innerHTML = paginationHtml;
                const paginationCountContainer = document.querySelector('.pagination_page_count');
                paginationCountContainer.textContent = `${startAgentIndex} - ${endAgentIndex} of ${data[`${type}_properties`].total} properties available`;
            }
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
}



function displayProperties(properties) {
    const formatter = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD',
        minimumFractionDigits: 0,
    });
    var ListingsDiv = document.getElementById('listings_type');
    ListingsDiv.innerHTML = '';
    if (properties.length === 0) {
        ListingsDiv.innerHTML = '<p>OOPS! NO LISTINGS FOUND</p>';
        return;
    }
    properties.forEach(property => {
        var UnparsedAddress = property.UnparsedAddress ? property.UnparsedAddress :
            `${property.StreetNumber ? property.StreetNumber : ''}` +
            `${property.StreetDirPrefix ? ' ' + property.StreetDirPrefix : ''}` +
            `${property.StreetName ? ' ' + property.StreetName : ''}` +
            `${property.StreetSuffix ? ' ' + property.StreetSuffix : ''}` +
            `${property.UnitNumber ? ' ' + property.UnitNumber : ''}`;

        var listingDiv = document.createElement('div');
        listingDiv.className = 'col-sm-6 col-lg-4 col-xl-3';
        listingDiv.innerHTML = `
            <div class="listing-style5">
                <div class="list-thumb">
                    <img src="${property.image_url ? `${header}/${property.image_url}` : '{{ asset('images/no_image.jpg') }}'}" alt="${property.ListingId}" onerror="this.src='{{ asset('images/no_image.jpg') }}';">

                    <div class="list-tag fz12">
                ${type === "diamond" ? '<i class="fa-thin fa-gem me-2"></i>' : (type === "featured" ? '<i class="fa-thin fa-star me-2"></i>' : '')}
                ${type.charAt(0).toUpperCase() + type.slice(1)}
            </div>
                    <div class="list-meta2">
                        <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Favourite" class="set-as-fav">
                            <span class="flaticon-like"></span>
                        </a>
                        <a href="{{ url('') }}/property-detail/${property.slug_url || property.ListingId}" data-bs-toggle="tooltip" data-bs-placement="top" title="Preview" target="_blank">
                            <span class="flaticon-fullscreen"></span>
                        </a>
                    </div>
                </div>
                <div class="list-content">
                    <div class="list-price mb-2">${formatter.format(property.ListPrice)}</div>
                    <h6 class="list-title">
                        <a href="{{ url('') }}/property-detail/${property.slug_url || property.ListingId}">${UnparsedAddress ? UnparsedAddress + ', ' : ''}${property.City ? property.City + ', ' : ''}${property.StateOrProvince}</a></h6>

   
                    <p class="list-text">${property.PropertyType}</p>
                    <div class="list-meta d-flex align-items-center gap-3">
                        ${property.BedroomsTotal ? `<a href="javascript:void(0)"><span class="flaticon-bed"></span>${property.BedroomsTotal} bed</a>` : ''}
                        ${property.BathroomsFull ? `<a href="javascript:void(0)"><span class="flaticon-shower"></span>${property.BathroomsFull} bath</a>` : ''}
                        ${property.BuildingAreaTotalSF ? `<a href="javascript:void(0)"><span class="flaticon-expand"></span>${Math.floor(property.BuildingAreaTotalSF)} sqft</a>` : (property.LivingAreaSF ? `<a href="javascript:void(0)"><span class="flaticon-expand"></span>${Math.floor(property.LivingAreaSF)} sqft</a>` : '')}
                    </div>
                    <span class="mlsNumber">MLS® # ${property.ListingId}</span>
                </div>
            </div>
        `;
        ListingsDiv.appendChild(listingDiv);
    });
}
</script>

@endsection