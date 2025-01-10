<!-- Wrapper End -->
{{--<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>--}}
<!-- <script src="js/jquery-migrate-3.0.0.min.js"></script> -->
@if(request()->route() && request()->route()->getName() != 'advance-filter')
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"
    ></script>
@endif
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.6.4.min.js"></script>
<script src="js/map-script.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/ace-responsive-menu.js"></script>
{{-- <script src="js/jquery.mmenu.all.js"></script> --}}
<script src="js/jquery-scrolltofixed-min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.min.js"></script>

<!-- Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&amp;callback=initMap"></script>
<script src="js/infobox.min.js"></script>
<script src="js/markerclusterer.js"></script>
<script src="js/maps.js?ref={{ rand(1111,9999) }}"></script>
<script src="js/script.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>


<script>


    // line chart data
    var buyerData = {
        labels: ["January", "February", "March", "April", "May", "June"],
        datasets: [
            {
                fillColor: "#10579F",
                strokeColor: "#ACC26D",
                pointColor: "#fff",
                pointStrokeColor: "#9DB86D",
                data: [203, 156, 99, 251, 305, 247],
            },
        ],
    };
    try{
        var buyers = document.getElementById("buyers").getContext("2d");
        // draw line chart
        new Chart(buyers).Line(buyerData);
        // pie chart data
        var pieData = [
            {
                value: 20,
                color: "#878BB6",
            },
            {
                value: 40,
                color: "#4ACAB4",
            },
            {
                value: 10,
                color: "#FF8153",
            },
            {
                value: 30,
                color: "#FFEA88",
            },
        ];
        // pie chart options
        var pieOptions = {
            segmentShowStroke: false,
            animateScale: true,
        };
    }catch(e){

    }


</script>
<script>
    // append class for sticky

    window.addEventListener("scroll", function () {
        var homeMenu = document.querySelector(".nav-homepage-style");
        if (window.pageYOffset > 170) {
            homeMenu.classList.add("header-fixed-top");
        } else {
            homeMenu.classList.remove("header-fixed-top");
        }
    });
    var csrfToken = $('meta[name="csrf-token"]').attr('content');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': csrfToken
        }
    });
    $(document).ready(function () {
        $('.list-item').find('.arrow:nth-child(2)').remove();
        @if(session()->has('flash'))
            @php
                $message = explode('|',session()->get('flash'));
            @endphp
            @if($message[0] == 'Success')
                    $.toast({
                        heading: 'Success',
                        text: '{{ $message[1] }}',
                        showHideTransition: 'slide',
                        icon: 'success',
                        loaderBg: '#f2a654',
                        position: 'top-right'
                    });
            @else
                    $.toast({
                        heading: 'Error',
                        text: '{{ $message[1] }}',
                        showHideTransition: 'slide',
                        icon: 'error',
                        loaderBg: '#f2a654',
                        position: 'top-right'
                    });
            @endif
        @endif

        // Check if geolocation is supported by the browser
        // if ("geolocation" in navigator) {
        //     // Geolocation is supported
        //     navigator.geolocation.getCurrentPosition(
        //         function (position) {
        //             // Get latitude and longitude
        //             const latitude = position.coords.latitude;
        //             const longitude = position.coords.longitude;

        //             // Use the latitude and longitude as needed
        //             console.log("Latitude:", latitude);
        //             console.log("Longitude:", longitude);
        //         },
        //         function (error) {
        //             // Handle any errors that may occur
        //             switch (error.code) {
        //                 case error.PERMISSION_DENIED:
        //                     console.error("User denied the request for Geolocation.");
        //                     break;
        //                 case error.POSITION_UNAVAILABLE:
        //                     console.error("Location information is unavailable.");
        //                     break;
        //                 case error.TIMEOUT:
        //                     console.error("The request to get user location timed out.");
        //                     break;
        //                 case error.UNKNOWN_ERROR:
        //                     console.error("An unknown error occurred.");
        //                     break;
        //             }
        //         }
        //     );
        // } else {
        //     // Geolocation is not supported by the browser
        //     console.error("Geolocation is not supported by this browser.");
        // }

        // $('.autocomplete').autocomplete({
        //     source: function(request, response) {
        //         $.ajax({
        //             url: '{{ route('property.search.results') }}',
        //             dataType: 'json',
        //             data: {
        //                 query: request.term
        //             },
        //             success: function(data) {
        //                 response(data);
        //             }
        //         });
        //     },
        //     minLength: 2,
        //     select: function(event, ui) {
        //         let value = ui.item.unparsed_address + ' - ' + ui.item.postal_code + ' - ' + ui.item.city+' - '+ui.item.listing_id;
        //         $('.autocomplete').val(value);
        //         return false;
        //     }
        // }).data('ui-autocomplete')._renderItem = function(ul, item) {
        //     var re = new RegExp(this.term, 'gi');
        //     var parsedAddress = item.unparsed_address.replace(re, '<strong>$&</strong>');
        //     var postalCode = item.postal_code.replace(/\s+/g, '');
        //     postalCode = postalCode.replace(re, '<strong>$&</strong>');
        //     var city = item.city.replace(re, '<strong>$&</strong>');
        //     var listingId = item.listing_id.replace(re, '<strong>$&</strong>');

        //     var formattedItem = '<li class="custom-autocomplete-item">' + parsedAddress + ', ' + postalCode + ',' + city + ' - ' + listingId + '</li>';
        //     return $('<li>')
        //         .append(formattedItem)
        //         .appendTo(ul);
        // };

    });
</script>
