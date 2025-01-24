@extends('layouts.pages')

@section('content')
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link href="{{ asset('frontend/css/our-pro-details.css') }}" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>


    <body>
        <div class="container-fluid parent p-0">
            <div class="container-fluid px-0 profilee">
                <div class="container  profile-sec position-relative" id="agent-details">

                </div>
            </div>

            <div class="container ">
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-7 col-xl-9 left-sec  mt-4 ">
                        <div class="about-sec" id="about-sec">

                        </div>

                        <div class="container px-0 tab-1">
                            <ul class="row px-3 mx-0  px-sm-0 nav nav-pills mb-3 w-100" id="pills-tab" role="tablist">
                                <li class="col-6 review-btn nav-item" role="presentation">
                                    <button class="nav-link active btn-secondary ud-btn  " id="pills-home-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab"
                                        aria-controls="pills-home" aria-selected="true">Listings</button>
                                </li>
                                <li class=" col-6 review-btn px-sm-0" id="section1" role="presentation">
                                    <button class="nav-link btn-secondary ud-btn " id="pills-profile-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">Reviews</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab" tabindex="0">
                                    <div class="tab-2 mx-3 mt-5">
                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            {{-- <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-all" type="button" role="tab"
                                                    aria-controls="pills-all" aria-selected="true">All</button>
                                            </li> --}}
                                            {{-- <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-sale-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-sale" type="button" role="tab"
                                                    aria-controls="pills-sale" aria-selected="false">sale</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-rent-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-rent" type="button" role="tab"
                                                    aria-controls="pills-rent" aria-selected="false">rent</button>
                                            </li> --}}
                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-all" role="tabpanel"
                                                aria-labelledby="pills-all-tab" tabindex="0">
                                                <div class="container text-center p-0 ">

                                                    <div class="row" id="listings_data">




                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-center mt-lg-5">
                                                        <nav aria-label="Page navigation example">
                                                            <div class="mbp_pagination text-center">

                                                                <ul id="pagination" class="page_navigation"></ul>
                                                                <p class="mt10 pagination_page_count text-center">
                                                                </p>
                                                            </div>
                                                            <br>

                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-sale" role="tabpanel"
                                                aria-labelledby="pills-sale-tab" tabindex="0">...b</div>
                                            <div class="tab-pane fade" id="pills-rent" role="tabpanel"
                                                aria-labelledby="pills-rent-tab" tabindex="0">.c..</div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab" tabindex="0">
                                    <div>
                                        <div class="review mt-5 d-flex  justify-content-between">
                                            <div class="d-flex align-items-center gap-2 rev px-4 px-sm-0" id="reviews-rating">

                                            </div>
                                        <div class="sort d-flex align-items-center gap-2  px-4 px-sm-0">
                                                <h6>
                                                    Sort by:
                                                </h6>
                                                <div class="sort-by-div">
                                                    <select id="sort_by">
                                                        <option value="desc">New Reviews</option>
                                                        <option value="asc">Old Reviews</option>
                                                    </select>
                                                </div>


                                                <button class="leave-btn ud-btn  blue-btn"
                                                    onclick="scrollToSection('section14')" id='desk-btn'>Leave a Review</button>
                                            </div>
                                        </div>
                                        
                                        <div class='text-end mt-3 mob-sort'>   <button class="leave-btn ud-btn  blue-btn"
                                                    onclick="scrollToSection('section14')">Leave a Review</button></div>

                                        <div id="reviews"></div>
                                        <div>


                                        </div>
                                    </div>


                                    <div class="leave-rev" id="section14">
                                        <h6>Leave A Review</h6>
                                        <hr>
                                          <form id="reviewForm">
                                            <div class="row my-3">
                                                <div class="col-6">
                                                    <h5>First Name<span style="color: red;">*</span></h5>
                                                    <input type="text" placeholder="First name" name="firsttitle" id="firstnameInput">
                                                </div>
                                                <div class="col-6">
                                                    <h5>Last Name<span style="color: red;">*</span></h5>
                                                    <input type="text" placeholder="Last name" name="lasttitle" id="lastnameInput">
                                                </div>
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
                                                    <div class="error"></div>
                                                </div>
                                            </div>
                                            <div>
                                                <h5>Review<span style="color: red;">*</span></h5>
                                                <textarea placeholder="Write a review" name="review" cols="30" rows="10" maxlength="200"></textarea>
                                               
                                            </div>
                                            <button type="submit" class="ud-btn  blue-btn">Submit Review</button>
                                        </form>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-12 col-lg-5 col-xl-3 mt-lg-5 p-0">


                             <div class="find-agent">
                        <div>

                            <ul class="nav row nav-pills mb-3 mt-3 d-flex justify-content-between" id="pills-tab"
                                role="tablist">
                                <li class="nav-item col-6" style="padding-right:2px;" role="presentation">
                                    <button class="nav-link  active btn-secondary ud-btn " id="pills-person-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-person" type="button" role="tab"
                                        aria-controls="pills-person" aria-selected="true" style="font-size: 10px;">Contact
                                        REALTOR <span>&#174;</span></button>
                                </li>
                                <li class="nav-item tabs col-6" style="padding-left: 2px;" role="presentation">
                                    <button class="nav-link video-btn btn-secondary ud-btn " id="pills-profiles-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-profiles" type="button" role="tab"
                                        aria-controls="pills-profiles" aria-selected="false" style="font-size: small;">Contact
                                        Info</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show  active" id="pills-person" role="tabpanel"
                                    aria-labelledby="pills-person-tab" tabindex="0">
                                    <form class="form-style1" id="form-style1">
                                            <input type="hidden" id="realtor_name" name="realtorname">
                                            <input type="hidden" id="realtor_email" name="realtoremail">
                                            
                                            <div>
                                                <div class="input mt-3">
                                                    <input type="text" placeholder="First Name*" name="first_name" maxlength="40">
                                                    <div class="error-message"></div> <!-- Container for first name error -->
                                                </div>
                                                <div class="input mt-3">
                                                    <input type="text" placeholder="Last Name*" name="last_name" maxlength="40">
                                                    <div class="error-message"></div> <!-- Container for last name error -->
                                                </div>
                                                <div class="input mt-3">
                                                    <input type="text" placeholder="Phone*" id="contactnumber" name="phone">
                                                    <div class="error-message"></div> <!-- Container for phone error -->
                                                </div>
                                                <div class="input mt-3">
                                                    <input type="email" placeholder="Email*" name="email" maxlength="40">
                                                    <div class="error-message"></div> <!-- Container for email error -->
                                                </div>
                                                <h5></h5>
                                                <div class="input-2 cursor-pointer">
                                                    <select name="role" class="select-boxes-filter cursor-pointer">
                                                        <option value="">I'm a*</option>
                                                        <option value="First time buyer">First time buyer</option>
                                                        <option value="Repeat buyer">Repeat buyer</option>
                                                        <option value="Seller">Seller</option>
                                                        <option value="Residential investor">Residential investor</option>
                                                        <option value="Commercial investor">Commercial investor</option>
                                                        <option value="Commercial buyer/leaser">Commercial buyer/leaser</option>
                                                        <option value="Land of development">Land of development</option>
                                                    </select>
                                                    <div class="error-message" id="role-error"></div>
                                                </div>
                                                <textarea class="mt-3 txt-area" cols="42" rows="3" placeholder="Enter your Message*" id="Textarea" name="comment"></textarea>
                                                <div class="error-message"></div> <!-- Container for comment error -->
                                                <div class="chkbox">
                                                    <div class="mt-1 d-flex align-items-cente gap-2">
                                                        <input class="checkbox opacity-50" type="checkbox" name="terms_agreement" id="terms_agreement">
                                                        <p class="mb-0 fw-medium fs-6">By submitting this form I agree to</p>
                                                    </div>
                                                    <span><a href="{{ route('terms') }}">Terms of Use</a></span>
                                                    <div class="error-message" id="terms-agreement-error"></div> <!-- Container for terms agreement error -->
                                                </div>
                                                <div class="d-grid schedule mt-2">
                                                    <button class="btn btn-secondary ud-btn  blue-btn" type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                </div>

                                <div class="tab-pane fade  show" id="pills-profiles" role="tabpanel"
                                    aria-labelledby="pills-profiles-tab" tabindex="0">
                                    <div class="contact-sec" id="contact-sec"> </div>
                                </div>

                            </div>



                        </div>

                    </div>

                    </div>
                </div>
            </div>


        </div>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        function scrollToSection(sectionId) {
            const section = document.getElementById(sectionId);
            $('#pills-profile-tab').click()
            if (section) {
                const offset = -200; // Set your desired offset in pixels
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

        var totalReviews = "";
        var currentUrl = window.location.href;

        var parts = currentUrl.split('/');
        var id = parts[parts.length - 1];

        function fetchReviewDetails(apiReviews) {

fetch(apiReviews)
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {

        totalReviews = data.total_count;
        const agentData = data.reviews.data;

        const reviewContainer = document.getElementById('reviews');
        reviewContainer.innerHTML = '';

        agentData.forEach(agent => {
            const timeAgoString = timeAgo(agent.created_at);
            let starsHtml = '';
            for (let i = 0; i < agent.rating; i++) {
                starsHtml += `<i class="ri-star-fill"></i>`;
            }
            const reviewDetails = `
<div class="rev-sec mt-5">
    <div class="user">
        <i class="ri-user-fill"></i>
    </div>
    <div>
        <div class="greate">
            <h5>${agent.title} </h5>
            ${starsHtml}
        </div>
        <h6>${agent.review_feedback}</h6>

        <div class="d-flex align-items-center gap-2 attachment">
            <i class="ri-attachment-2"></i>
            <p>${timeAgoString}</p>
        </div>
    </div>
</div>


`;

            // Create a new div element
            const reviewDiv = document.createElement('div');
            reviewDiv.classList.add('review');

            // Set the HTML content of the new div
            reviewDiv.innerHTML = reviewDetails;

            // Append the new div to the review container
            reviewContainer.appendChild(reviewDiv);
        });


        function timeAgo(timestamp) {
            const now = new Date();
            const previous = new Date(timestamp);
            const seconds = Math.floor((now - previous) / 1000);

            let interval = Math.floor(seconds / 31536000);
            if (interval > 1) {
                return `${interval} years ago`;
            }
            interval = Math.floor(seconds / 2592000);
            if (interval > 1) {
                return `${interval} months ago`;
            }
            interval = Math.floor(seconds / 86400);
            if (interval > 1) {
                return `${interval} days ago`;
            }
            interval = Math.floor(seconds / 3600);
            if (interval > 1) {
                return `${interval} hours ago`;
            }
            interval = Math.floor(seconds / 60);
            if (interval > 1) {
                return `${interval} minutes ago`;
            }
            return 'just now';
        }




    })

    .catch(error => {
        console.error('There was a problem with the fetch operation:', error);
    });
}
        var header = '{{ env('BACKEND_URL') }}';

        var apiUrl = header + '/api/agents/detail/' + id;

        function fetchAgentDetails(apiUrl) {
            fetch(apiUrl)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {


                    const agentData = data.data;
                    document.getElementById('realtor_name').value = agentData.name;
            document.getElementById('realtor_email').value = agentData.email;
                    const avgRating = agentData.avg_rating !== null ? agentData.avg_rating : 0; // Corrected typo
                    let wholeStars = Math.floor(avgRating); // Get the number of whole stars
                    let halfStar = avgRating % 1 !== 0; // Check if there's a decimal (half star)
                    
                    let starsHtml = '';
                    for (let i = 0; i < wholeStars; i++) {
                      starsHtml += '<i class="fa-solid fa-star"></i>'; // Use a full star for whole numbers
                    }
                    
                    if (halfStar) {
                      starsHtml += '<i class="fa-solid fa-star-half"></i>'; // Add a half star if needed
                    }
                    
                    console.log(starsHtml);
                    const reviewsDetails = `<h6>${totalReviews} Reviews</h6>
                                           ${starsHtml}
                                           <p>(${avgRating.toFixed(1)} out of 5)</p>`;


                    const agentDetails = `<div class="row prof mx-auto">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 profile-img position-relative">
                         <div class='prof-imgs'>
                         <img src="${agentData.profile_picture ? `${agentData.profile_picture}` : '{{ asset('images/d_img.jpg') }}'}" alt="${agentData.name}">
                         </div>
                    </div>
                    <div class="col-12 col-sm-12 mt-sm-3 col-md-12 col-lg-12 col-xl-6 col-xxl-7 profile-delt mt-3 mt-sm-0">
                        <h5>${agentData.name}</h5>
                        <div class="d-flex align-items-center gap-2">
                            <p>${avgRating}</p>
                            ${starsHtml}

                            <a href="javascript:void(0)" onclick="scrollToSection('section1')" >See all reviews</a>
                        </div>
                        <p><span>${agentData.position}</span> at Real Estate Professional Inc. </p>
                        <hr>
                        <div class="agent-profile-content">
                            <ul class="list-unstyled"></i>
                 
                    ${agentData.language ?  `<li> <strong>Language:</strong> ${agentData.language.split(',').map(lang => lang.trim()).join(', ')}</li>` : ''}
                                ${agentData.specialisation ? `<li><strong>Specialties:</strong> ${agentData.specialisation}</li>` : ''}
                                ${agentData.designation ? `<li><strong>Designations:</strong> ${agentData.designation}</li>` : ''}

                            </ul>
                        </div>
                        <div class="social-widget text-center text-sm-center contact-icon">
                    <div class="social-style1 mb-1">                        
                        ${agentData.facebook ? `<a href="${agentData.facebook}" target="_blank"><i class="fab fa-facebook-f list-inline-item"></i></a>` : ''}
                        ${agentData.twitter ? `<a href="${agentData.twitter}" target="_blank"><i class="fab fa-twitter list-inline-item"></i></a>` : ''}
                        ${agentData.instagram ? `<a href="${agentData.instagram}" target="_blank"><i class="fab fa-instagram list-inline-item"></i></a>` : ''}
                        ${agentData.linkedin ? `<a href="${agentData.linkedin}" target="_blank"><i class="fab fa-linkedin-in list-inline-item"></i></a>` : ''}
                        ${agentData.youtube ? `<a href="${agentData.youtube}" target="_blank"><i class="fa-brands fa-youtube"></i></a>` : ''}
                        ${agentData.website ? `<a href="${agentData.website ? '//' + agentData.website.replace(/^https?:\/\//, '') : 'javascript:void(0)'}" target="_blank"><i class="fas fa-globe"></i></a>` : ''}
                        </div>
                </div>
                        <div class="agent-profile-buttons">
                            <a class="btn btn-secondary ud-btn  blue-btn" href="mailto:${agentData.email}">Send Email</a>

                            <a href="tel:${agentData.phone}" class="btn btn-call ud-btn btn-outline-rep">
                            Call
                                <!-- <span class="show-on-click">321 456 9874</span> -->
                            </a>
                        </div>
                    </div>
                </div>
                    `;


                    const aboutSec =

                        `
                   
                    
                    <h5 class='mt-3'>About ${agentData.name}</h5>
                    
                    ${agentData.description ? `<p id="description">${agentData.description.substring(0, 250)}</p>` : ''}
                    ${agentData.description && agentData.description.length > 250 ? '<div id="showMoreContainer"><h6 id="showMore">Show more</h6><h6 id="showLess" style="display: none;">Show less</h6></div>' : ''}
                
                `;




                    const contactSec = `
    <h6>Contact Info</h6>
    <h5>${agentData.name}</h5>
    <p><span>${agentData.position}</span> at Real Estate Professional Inc. </p>
    ${agentData.address ? `<p><i class="ri-map-pin-line"></i> ${agentData.address}</p>` : ''}
    <ul class="list-unstyled">
        <li>
            <strong>Mobile</strong>
            <a href="tel:${agentData.phone}">
                <span class="agent-phone">${formatPhoneNumber(agentData.phone)}</span>
            </a>
        </li>
      
        <hr class="my-2">
        <li class="email">
            <strong>Email</strong>
            <a href="mailto:${agentData.email}">${agentData.email}</a>
        </li>
        <hr class="my-2">
       
    </ul>
    ${agentData.facebook || agentData.twitter || agentData.instagram || agentData.linkedin || agentData.youtube ? `
                      
                      ` : ''}
`;


                    document.getElementById('agent-details').innerHTML = agentDetails;
                    document.getElementById('about-sec').innerHTML = aboutSec;
                    document.getElementById('contact-sec').innerHTML = contactSec;
                    document.getElementById('reviews-rating').innerHTML = reviewsDetails;

                    const showMoreButton = document.getElementById('showMore');
                    const showLessButton = document.getElementById('showLess');
                    const descriptionParagraph = document.getElementById('description');
                    const fullDescription = agentData.description; // Full description obtained from the server

                    if (showMoreButton && descriptionParagraph && fullDescription.length > 250) {
                        descriptionParagraph.textContent = fullDescription.substring(0, 250) +
                            '...'; // Display truncated description initially
                        showLessButton.style.display = 'none'; // Hide "Show less" button initially

                        showMoreButton.addEventListener('click', function() {
                            descriptionParagraph.textContent = fullDescription;
                            showMoreButton.style.display = 'none'; // Hide "Show more" button
                            showLessButton.style.display = 'block'; // Show "Show less" button
                        });

                        showLessButton.addEventListener('click', function() {
                            descriptionParagraph.textContent = fullDescription.substring(0, 250) + '...';
                            showMoreButton.style.display = 'block'; // Show "Show more" button
                            showLessButton.style.display = 'none'; // Hide "Show less" button
                        });
                    }




                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                });
        }


        //         function toggleDescription() {
        //     const description = document.getElementById('description');
        //     const showMore = document.getElementById('showMore');
        //     const showLess = document.getElementById('showLess');

        //     if (description.style.display === 'none' || !description.style.display) {
        //         description.style.display = 'block';
        //         showMore.style.display = 'none';
        //         showLess.style.display = 'block';
        //     } else {
        //         description.style.display = 'none';
        //         showMore.style.display = 'block';
        //         showLess.style.display = 'none';
        //     }
        // }


        fetchAgentDetails(apiUrl);
        var apiReviews = header + '/api/agents/get-reviews/' + id;

        const sortBySelect = document.getElementById('sort_by');
        sortBySelect.addEventListener('change', function() {
            const sortBy = sortBySelect.value;
            const apiReviews = `${header}/api/agents/get-reviews/${id}?sort_by=${sortBy}`;
            fetchReviewDetails(apiReviews);
        });



        fetchReviewDetails(apiReviews);


        ['contactnumber'].forEach(fieldId => {
            document.getElementById(fieldId).addEventListener("input", function(event) {
                let phoneInput = event.target.value.replace(/\D/g, '').slice(0, 10);
                event.target.value = phoneInput.replace(/(\d{3})(\d{3})(\d{4})/, '($1) $2-$3');
            });
        });






        var apiUrl = header + '/api/agents/contact-us-form';
        var isSubmitting = false;

            document.addEventListener('DOMContentLoaded', function() {
            $('#form-style1').validate({
        rules: {
            first_name: {
                required: true,
                maxlength: 40
            },
            last_name: {
                required: true,
                maxlength: 40
            },
            phone: {
                required: true
            },
            email: {
                required: true,
                email: true,
                maxlength: 40
            },
            role: {
                required: true
            },
            comment: {
                required: true
            },
            terms_agreement: {
                required: true
            }
        },
        messages: {
            first_name: {
                required: "Please enter your first name",
                maxlength: "Maximum 40 characters allowed"
            },
            last_name: {
                required: "Please enter your last name",
                maxlength: "Maximum 40 characters allowed"
            },
            phone: {
                required: "Please enter your phone number"
            },
            email: {
                required: "Please enter your email address",
                email: "Please enter a valid email address",
                maxlength: "Maximum 40 characters allowed"
            },
            role: {
                required: "Please select your role"
            },
            comment: {
                required: "Please enter your message"
            },
            terms_agreement: {
                required: "Please agree to the terms"
            }
        },
        errorPlacement: function(error, element) {
        if (element.attr("name") === "role") {
            error.appendTo("#role-error");
        } else if (element.attr("name") === "terms_agreement") {
            error.appendTo("#terms-agreement-error");
        } else {
            error.appendTo(element.closest(".input").find(".error-message"));
        }
    },
        submitHandler: function(form) {
            var formData = $(form).serialize();
            const dynamicMessage = "I would appreciate more information about your services.";
            formData += '&page_name=details_page';

            $.ajax({
                type: 'POST',
                url: apiUrl,
                data: formData,
                success: function(data) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Form submitted successfully',
                        confirmButtonText: 'Continue to Website',
                    });
                    form.reset();
                    $('#Textarea').val(dynamicMessage);
                },
                error: function(xhr, status, error) {
                    console.error('There was a problem with the AJAX request:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'An error occurred while submitting the form. Please try again later.'
                    });
                }
            });
        }
    });
});
  




        document.addEventListener("DOMContentLoaded", function() {
    var firstNameInput = document.querySelector('input[name="first_name"]');
    var lastNameInput = document.querySelector('input[name="last_name"]');
    var lettersOnlyWithSpace = /^[A-Za-z\s]+$/;

    // Event listener for the first name input
    firstNameInput.addEventListener("input", function() {
        var firstName = firstNameInput.value.trim();
        if (!firstName.match(lettersOnlyWithSpace) || firstName.length > 40) {
            firstNameInput.value = firstName.replace(/[^A-Za-z\s]/g, "").substring(0, 40);
        }
    });

    // Event listener for the last name input
    lastNameInput.addEventListener("input", function() {
        var lastName = lastNameInput.value.trim();
        if (!lastName.match(lettersOnlyWithSpace) || lastName.length > 40) {
            lastNameInput.value = lastName.replace(/[^A-Za-z\s]/g, "").substring(0, 40);
        }
    });
});

        document.addEventListener('DOMContentLoaded', function() {

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

            const dynamicMessage = "I would appreciate more information about your services.";

$('#Textarea').val(dynamicMessage);
            // var session = "{{ session('username') }}";
        
       $(document).ready(function() {
    $('#reviewForm').validate({
        rules: {
            firsttitle: {
                required: true
            },
            lasttitle: {
                required: true
            },
            review_from: {
                required: true,
                email: true
            },
            rating: {
                required: true
            },
            review: {
                required: true,
                maxlength: 200
            }
        },
        messages: {
            firsttitle: "Please enter your first name",
            lasttitle: "Please enter your last name",
            review_from: {
                required: "Please enter your email address",
                email: "Please enter a valid email address"
            },
            rating: "Please select a rating",
            review: {
                required: "Please enter your review",
                maxlength: "Maximum 200 characters allowed for review"
            }
        },
        errorPlacement: function(error, element) {
            if (element.attr("name") == "rating") {
                error.appendTo(element.parent().next('.error'));
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function(form) {
            var session = "{{ session('username') }}";
            if (!session) {
                $('#exampleModalToggle').modal('show');
                return;
            }
            
            var submitButton = $(form).find('button[type="submit"]');
            submitButton.prop('disabled', true).css('backgroundColor', 'grey');

            var formData = new FormData(form);

            var firstName = $('#firstnameInput').val().trim();
            var lastName = $('#lastnameInput').val().trim();
            var fullName = firstName + ' ' + lastName;
            formData.set('title', fullName);
            formData.set('firsttitle', firstName);
            formData.set('lasttitle', lastName);
            formData.delete('email');
            formData.set('review_feedback', formData.get('review'));
            formData.delete('review');
            formData.set('review_to', id);

            fetch(header + '/api/agents/store-review', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Form submitted successfully',
                    confirmButtonText: 'Continue to Website'
                });
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                console.log(data);
                showSuccessPopover(form);
            })
            .catch(error => {
                console.error('There was a problem submitting the review:', error);
                showErrorPopover(error.message);
            });
        }
    });
});

            


            function showSuccessPopover(form) {
                var submitButton = $(form).find('button[type="submit"]');
                // setTimeout(() => {
                    form.reset();
                    fetchReviewDetails(apiReviews);
                    submitButton.disabled = false;
                    // submitButton.style.backgroundColor = '';
                    fetchAgentDetails(header + '/api/agents/detail/' + id);
                // }, 3000);


            }

            function showErrorPopover(errorMessage) {
                Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Invalid Email'
                        });
            }

        });


        function timeAgo(timestamp) {
            const now = new Date();
            const previous = new Date(timestamp);
            const seconds = Math.floor((now - previous) / 1000);

            let interval = Math.floor(seconds / 31536000);
            if (interval > 1) {
                return `${interval} years ago`;
            }
            interval = Math.floor(seconds / 2592000);
            if (interval > 1) {
                return `${interval} months ago`;
            }
            interval = Math.floor(seconds / 86400);
            if (interval > 1) {
                return `${interval} days ago`;
            }
            interval = Math.floor(seconds / 3600);
            if (interval > 1) {
                return `${interval} hours ago`;
            }
            interval = Math.floor(seconds / 60);
            if (interval > 1) {
                return `${interval} minutes ago`;
            }
            return 'just now';
        }


        // listings api 
        // var localheader = 'http://127.0.0.1:8000';
        var apiListings = header + '/api/agents/listing-agent-properties/' + id;
        fetchListingDetails(apiListings)

        function fetchListingDetails(apiListings) {
            fetch(apiListings)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {

                    console.log(data);

                    // Generate property cards
                    generatePropertyCards(data);

                    // Generate pagination
                    generatePagination(data);
                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                });
        }

        function generatePropertyCards(data) {
            console.log(data);
            const container = document.getElementById('listings_data');
            container.innerHTML = '';

            const heading = document.createElement('h2');
            heading.textContent = data.listings_type;
            container.appendChild(heading);

            data.property.data.forEach(property => {
                const formatter = new Intl.NumberFormat('en-US', {
                    style: 'currency',
                    currency: 'USD',
                    minimumFractionDigits: 0,
                });
                const card = document.createElement('div');
                card.classList.add('col-sm-6','col-xl-4', 'mt-3', 'col-12');
                console.log(property);
                const tima = property.DOMDate ? timeAgo(property.DOMDate) : '3 months ago';

                var UnparsedAddress = '';

                if (property.StreetNumber) {
                    UnparsedAddress += property.StreetNumber;
                }

                if (property.StreetDirPrefix) {
                    UnparsedAddress += ' ' + property.StreetDirPrefix;
                }

                if (property.StreetName) {
                    UnparsedAddress += ' ' + property.StreetName;
                }

                if (property.StreetSuffix) {
                    UnparsedAddress += ' ' + property.StreetSuffix;
                }

                if (property.UnitNumber) {
                    UnparsedAddress += ' ' + property.UnitNumber;
                }

                card.innerHTML = `
        <div class="listing-style5">
                <div class="list-thumb">
                <a href="{{ url('') }}/property-detail/${property.slug_url || property.ListingId}" data-bs-toggle="tooltip" data-bs-placement="top" title="Preview" target="_blank">
                <img src="${property.image_url ? `${property.image_url}` : '{{ asset('images/no_image.jpg') }}'}" alt="${property.PropertyType}" onerror="this.src='{{ asset('images/no_image.jpg') }}';">
</a>

                ${property.diamond == 1 ?
              `<div class="list-tag fz12">
                                  <i class="fa-thin fa-gem me-2"></i>Diamond
                              </div>` :
              property.featured == 1?
              `<div class="list-tag fz12">
                                  <i class="fa-thin fa-star me-2"></i>Exclusive
                              </div>` :
              
              ''}   
                    <div class="list-meta2">
                        <a href="javascript:void(0)" 
   data-bs-toggle="tooltip" 
   data-bs-placement="top" 
   title="Favourite" 
   class="set-as-fav"
   onclick="toggleFavorite('${property.ListingId}')">
   <span class="flaticon-like" id="fav-icon-${property.ListingId}" ></span>
</a>
                        
                    </div>
                </div>
                 <a href="{{ url('') }}/property-detail/${property.slug_url || property.ListingId}" target="_blank">
                <div class="list-content text-start">
                   <div class="list-price mb-2">
                    ${
                        property.PropertyType === 'Commercial' && property.LeaseAmount && property.LeaseAmountFrequency
                        ? `${formatter.format(property.LeaseAmount)} / ${property.LeaseAmountFrequency}${property.LeaseMeasure ? ' / ' + property.LeaseMeasure : ''}`
                        : `${formatter.format(property.ListPrice)}`
                    }
                </div>
                      <h6 class="list-title">
                        ${property.UnparsedAddress ? property.UnparsedAddress + ', ' : UnparsedAddress}${property.City ? property.City + ', ' : ''}${property.StateOrProvince}</h6>
                        
                    <p class="list-text">${property.PropertyType}</p>
                    <div class="list-meta d-flex align-items-center gap-3">
                        ${property.BedroomsTotal ? `<p><span class="flaticon-bed"></span>${property.BedroomsTotal} bed</p>` : ''}


 ${(Number(property.BathroomsFull || 0) > 0 || Number(property.BathroomsHalf || 0) > 0) 
    ? `<p><span class="flaticon-shower"></span>
         ${Number(property.BathroomsFull || 0) + Number(property.BathroomsHalf || 0)} bath${(Number(property.BathroomsFull || 0) + Number(property.BathroomsHalf || 0)) > 1 ? '' : ''}
       </p>` 
    : ''}               
                          
                          
                          ${property.BuildingAreaTotalSF ? `<p><span class="flaticon-expand"></span>${Math.floor(property.BuildingAreaTotalSF)} sqft</p>` : (property.LivingAreaSF ? `<p><span class="flaticon-expand"></span>${Math.floor(property.LivingAreaSF)} sqft</p>` : '')}
                    </div>

                    <span class="mlsNumber">MLS® Number:  ${property.ListingId}</span>
                </div>
                <a>
            </div>
    `;
                container.appendChild(card);
            });
            var session = "{{ session('user_id') }}";
            if (session) {
                getmarkedlistings();
            }
        }

        function generatePagination(data) {
            const paginationContainer = document.getElementById('pagination');
            const container = document.getElementById('listings_data');
            const paginationCountContainer = document.querySelector('.pagination_page_count');

            if (data.property.data.length === 0) {
                // If no properties found, display message
                container.innerHTML = '<h1>No Properties found</h1>';
                paginationContainer.innerHTML = ''; // Clear pagination
                paginationCountContainer.textContent = ''; // Clear pagination count
                return; // Exit the function
            }

            const currentPage = data.property.current_page;
            const totalPages = Math.ceil(data.total_count / data.property.per_page);
            const startAgentIndex = (currentPage - 1) * data.property.per_page + 1;
            const endAgentIndex = Math.min(currentPage * data.property.per_page, data.total_count);

            const maxPagesToShow = 3; // Number of pages to show at a time
            let startPage = Math.max(1, currentPage - Math.floor(maxPagesToShow / 2));
            let endPage = Math.min(totalPages, startPage + maxPagesToShow - 1);

            // Adjust startPage and endPage if needed to always show maxPagesToShow pages
            if (endPage - startPage + 1 < maxPagesToShow) {
                startPage = Math.max(1, endPage - maxPagesToShow + 1);
            }

            // Generate the pagination HTML
            let paginationHtml = '';

            if (currentPage > 1) {
                paginationHtml +=
                    `<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="fetchListingDetails('${data.property.first_page_url}')"><i class="fa fa-angle-double-left"></i></a></li>`;
                paginationHtml +=
                    `<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="fetchListingDetails('${data.property.prev_page_url}')"><i class="fa fa-angle-left"></i></a></li>`;
            } else {
                paginationHtml +=
                    `<li class="page-item disabled"><span class="page-link"><i class="fa fa-angle-double-left"></i></span></li>`;
                paginationHtml +=
                    `<li class="page-item disabled"><span class="page-link"><i class="fa fa-angle-left"></i></span></li>`;
            }

            for (let i = startPage; i <= endPage; i++) {
                if (i === currentPage) {
                    paginationHtml += `<li class="page-item active"><span class="page-link">${i}</span></li>`;
                } else {
                    paginationHtml +=
                        `<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="fetchListingDetails('${data.property.path}?page=${i}')">${i}</a></li>`;
                }
            }

            if (currentPage < totalPages) {
                paginationHtml +=
                    `<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="fetchListingDetails('${data.property.next_page_url}')"><i class="fa fa-angle-right"></i></a></li>`;
                paginationHtml +=
                    `<li class="page-item"><a class="page-link" href="javascript:void(0)" onclick="fetchListingDetails('${data.property.last_page_url}')"><i class="fa fa-angle-double-right"></i></a></li>`;
            } else {
                paginationHtml +=
                    `<li class="page-item disabled"><span class="page-link"><i class="fa fa-angle-right"></i></span></li>`;
                paginationHtml +=
                    `<li class="page-item disabled"><span class="page-link"><i class="fa fa-angle-double-right"></i></span></li>`;
            }

            paginationContainer.innerHTML = paginationHtml;

            // Update the agent count information
            paginationCountContainer.textContent =
                `${startAgentIndex} - ${endAgentIndex} of ${data.total_count} properties available`;
        }



        function checkLength(textarea) {
            var maxLength = 200;
            var currentLength = textarea.value.length;
            var charactersLeft = maxLength - currentLength;

            if (charactersLeft < 0) {
                textarea.value = textarea.value.slice(0, maxLength);
                charactersLeft = 0;
            }

            document.getElementById("charCount").innerText = "Characters left: " + charactersLeft;
        }



        function formatPhoneNumber(phoneNumber) {
            // Check if phoneNumber is a string or a number
            if (typeof phoneNumber === 'number') {
                phoneNumber = phoneNumber.toString(); // Convert number to string
            } else if (typeof phoneNumber !== 'string') {
                return phoneNumber; // Return as is if not a string or number
            }

            // Remove non-digit characters
            const formattedPhoneNumber = phoneNumber.replace(/\D/g, '');

            if (formattedPhoneNumber.length > 3 && formattedPhoneNumber.length <= 6) {
                return `(${formattedPhoneNumber.substring(0, 3)}) ${formattedPhoneNumber.substring(3)}`;
            } else if (formattedPhoneNumber.length > 6 && formattedPhoneNumber.length <= 10) {
                return `(${formattedPhoneNumber.substring(0, 3)}) ${formattedPhoneNumber.substring(3, 6)}-${formattedPhoneNumber.substring(6)}`;
            } else if (formattedPhoneNumber.length > 10) {
                return `(${formattedPhoneNumber.substring(0, 3)}) ${formattedPhoneNumber.substring(3, 6)}-${formattedPhoneNumber.substring(6, 10)}`;
            }

            return formattedPhoneNumber;
        }



        function validateAlphabets(event) {
                const input = event.target;
                const regex = /^[a-zA-Z\s]*$/;
                const key = event.key;

                if (!regex.test(key) && key !== 'Backspace' || input.value.length >= 40) {
                    event.preventDefault();
                }
            }
            ['firstnameInput','lastnameInput'].forEach(function(id) {
                document.getElementById(id).addEventListener("keypress", validateAlphabets);
            });

        function addToFavorites(propertyId, favoriteStatus) {


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



        function toggleFavorite(listingId) {
            var session = "{{ session('username') }}";
            if (!session) {
                $('#exampleModalToggle').modal('show');
            } else {

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
                    console.log(response);
                    var favoriteProperties = response.favorite_properties;
                    console.log(favoriteProperties);
                    for (var i = 0; i < favoriteProperties.length; i++) {

                        var propertyId = favoriteProperties[i];
                        console.log(propertyId);
                        var favIcon = document.getElementById(`fav-icon-${propertyId}`);
                        console.log(favIcon);
                        if (favIcon) {
                            favIcon.classList.add('filled');
                            favIcon.classList.add('white-background');
                        }
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error getting marked listings');
                }
            });
        }
    </script>



    </html>
@endsection