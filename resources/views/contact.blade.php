@extends('layouts.pages')
@section('content')

<style>
.z-index {
    z-index: 98 !important;
}

.second-maps {
    transform: translate(-50%, -50%);
    position: absolute;
    top: 64%;
    left: 50%;
    max-width: 80% !important;
}

.gm-style-iw {
    background-color: #fff !important;
    color: #000;
}

.r-rel {
    position: relative;
    top: -7px;
}

.gm-style-iw-d {
    min-width: 175px !important;
    min-height: 70px !important;
    overflow: hidden !important;
}

.gm-ui-hover-effect>span {
    background-color: white !important;
}

.gm-ui-hover-effect {
    opacity: 10 !important;
    filter: invert(100%)
}

.gm-style-iw-d a {
    color: white;
}

.visit {
    margin-top: -120px;
    padding-top: 368px !important;
    background-image: url("/images/iStock-1340973184.jpg");
    background-position: 0 70px;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    position: relative;

}

.upr-layer {
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
.visit-title{
 color:  #10579f;
}



@media (max-width:757px) {

    .visit {
        margin-top: 0px;
        padding-top: 49px !important;
    }
}
</style>
<div class="main-title text-center">
    <h2 class="visit-title">Visit Our Office</h2>
</div>
<!-- Our Contact With Map -->
<section class="p-0">
    <div id="map"></div>
    <!-- <iframe
          class="home8-map contact-page"
          loading="lazy"
          src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near"
          title="London Eye, London, United Kingdom"
          aria-label="London Eye, London, United Kingdom"
        ></iframe> -->
</section>

<section class='pb0-xs'>
    <div class="container" id="contactUsArea">
        <div class="row">
            <div class="col-lg-5 position-relative">
                <div
                    class="home8-contact-form  default-box-shadow1 bdrs12 bdr1 p30 mb30-md bgc-white position-md-absolute top-450 z-index">
                    <h4 class="form-title mb25">Have questions? Get in touch!</h4>
                    <form class="form-style1" id="form-style1">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb20">
                                    <label class="heading-color ff-heading fw600 mb10"
                                    >First Name<span style="color: red;">*</span></label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Your First Name" name="first_name" required
                                    />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb20">
                                    <label class="heading-color ff-heading fw600 mb10"
                                    >Last Name<span style="color: red;">*</span></label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Your Last Name" name="last_name" required
                                    />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb20">
                                    <label class="heading-color ff-heading fw600 mb10"
                                    >Email<span style="color: red;">*</span></label
                                    >
                                    <input
                                        type="email"
                                        class="form-control"
                                        placeholder="Your Email" name="email" required maxlength="40"
                                    />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb10">
                                    <label class="heading-color ff-heading fw600 mb10">Message<span style="color: red;">*</span></label>
                                    <textarea
                                        cols="30"
                                        rows="4"
                                     required name="comment" maxlength="400"
                                    ></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb20">
                                    <div class="g-recaptcha" data-sitekey="{{ $recaptchaSiteKey }}"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="d-grid">
                                    <button
                                        type="submit"
                                        class="ud-btn btn-primary w-100">
                                        Submit<i class="fal fa-arrow-right-long"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- Explore Apartment -->
<section class="pt0 pb90 pb10-md visit">
    <div class='upr-layer'></div>

    <div class="container">
        <div class="row">
           
        </div>
        <!--<div class="row justify-content-center">-->
            <div class="col-12 col-md-8 col-lg-6 col-xl-5  wow fadeInUp" data-wow-delay="300ms">
                
            </div>
            <!--<div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay="300ms">-->
            <!--    <div class="home8-contact-form default-box-shadow1 bdrs12 bdr1 p30 mb30-md bgc-thm">-->
            <!--        <div class="inquiry-form">-->
            <!--            <h4 class="text-white">South Office</h4>-->
            <!--            <div class="d-flex flex-column gap-2 addressSection">-->
            <!--                <p class="mb-0 d-flex gap-2">-->
            <!--                    <i class="fa-light fa-envelope"></i>-->

            <!--                    <a href="mailto:southoffice@repinc.ca">southoffice@repinc.ca</a>-->
            <!--                </p>-->
            <!--                <p class="mb-0 d-flex gap-2">-->
            <!--                    <i class="fa-light fa-phone"></i>-->

            <!--                    <a href="tel:403.253.5305">403.253.5305</a>-->
            <!--                </p>-->
            <!--                <p class="mb-0 d-flex gap-2">-->
            <!--                    <i class="fa-sharp fa-light fa-location-dot"></i><a href="https://maps.app.goo.gl/fbUrpaC1qA27XdQ76"  target="_blank">#100,-->
            <!--                        5810 2nd Street SW Calgary, Alberta T2H 0H2</a>-->
            <!--                </p>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
        </div>



    </div>
</section>

<!-- <section class="our-cta pt-0 pb-0">
        <div
            class="cta-banner bgc-f7 mx-auto maxw1600 pt120 pb120 pt60-md pb60-md bdrs12 position-relative mx20-lg"
        >
           
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-xl-6 wow fadeInLeft">
                        <div class="cta-style1">
                            <h2 class="cta-title">Need help? Talk to our Relator<img  class="r-rel" width="10" height="10"  src="https://img.icons8.com/metro/26/000000/registered-trademark.png" alt="registered-trademark"/>.</h2>
                        </div>
                    </div>
                    <div
                        class="col-lg-5 col-xl-6 wow fadeInRight"
                        data-wow-delay="300ms"
                    >
                        <div
                            class="cta-btns-style1 d-block d-sm-flex align-items-center justify-content-lg-end"
                        >
                            <a
                                href="/why-rep"
                                class="ud-btn btn-transparent mr30 mr0-xs"
                            >Contact Us<i class="fal fa-arrow-right-long"></i
                                ></a>
                            <a href="tel:+1403.547.4102" class="ud-btn btn-dark"
                            ><span class="flaticon-call vam pe-2"></span
                                >403.547.4102</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
// var markerIconPath = "{{ asset('images/map.png') }}";
var header = '{{env("BACKEND_URL")}}';
var apiUrl = header + '/api/agents/contact-us-form';
// var apiUrl = 'http://127.0.0.1:8000/api/agents/contact-us-form';

document.addEventListener('DOMContentLoaded', function () {
    $('#form-style1').validate({
        rules: {
            first_name: "required",
            last_name: "required",
            email: {
                required: true,
                email: true
            },
            comment: "required",
        },
        messages: {
            first_name: "Please enter your first name",
            last_name: "Please enter your last name",
            email: "Please enter a valid email address",
            comment: "Please enter your message"
        },
        submitHandler: function(form) {
            var gresponse = grecaptcha.getResponse();

            if (gresponse.length == 0) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Please complete the reCAPTCHA.',
                });
                return false; 
            }
            else {
                var submitButton = $(form).find('button[type="submit"]');
                submitButton.prop('disabled', true);

                var formData = new FormData(form);
                formData.append('page_name', 'contact_page');
                formData.append('g-recaptcha-response', grecaptcha.getResponse());

                // Send form data via fetch
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
                        text: 'Contact form submitted successfully',
                    });

                    form.reset();
                    grecaptcha.reset();  
                    submitButton.prop('disabled', false);
                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'An error occurred while submitting the form. Please try again later.',
                    });

                    submitButton.prop('disabled', false);
                });
            }
        }
    });
});


document.addEventListener("DOMContentLoaded", function() {
    var firstNameInput = document.querySelector('input[name="first_name"]');
    var lastNameInput = document.querySelector('input[name="last_name"]');
    var lettersOnlyWithSpace = /^[A-Za-z\s]+$/;

    firstNameInput.addEventListener("input", function() {
        var firstName = firstNameInput.value.trim();
        if (!firstName.match(lettersOnlyWithSpace) || firstName.length > 40) {
            firstNameInput.value = firstName.replace(/[^A-Za-z\s]/g, "").substring(0, 40);
        }
    });

    lastNameInput.addEventListener("input", function() {
        var lastName = lastNameInput.value.trim();
        if (!lastName.match(lettersOnlyWithSpace) || lastName.length > 40) {
            lastNameInput.value = lastName.replace(/[^A-Za-z\s]/g, "").substring(0, 40);
        }
    });
});
</script>
@endsection