@extends('layouts.pages')
@section('content')

<style>
    .feature-img img {
        height: 100%;
        width: 100%;
        object-fit: cover;
    object-position: center top;

    }
    .fs-19{
        font-size:18px;
    }
    @media screen  (max-width: 1350px) {
    .team-description {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .more-text {
        display: inline;
    }
    .show-more {
        display: none;
    }
}
.social-widget {
    text-align: end !important;
}


</style>


<!-- Modal -->
<section class="breadcumb-section2 p-0">
    <img src="/images/final-about.jpg" alt="">

    <div class="blk-layer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-style1">
                        <h2 class="title">About Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our About Area -->
<section class="our-about ">
    <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms">

            <div class="col-lg-6">
                <h2>
                    {!! $pageContent->where('key','section_1_title')->first()?->content !!}
                </h2>
            </div>
            <div class="col-lg-6">
                <!-- {!! $pageContent->where('key','section_1_content')->first()?->content !!} -->
                <p>At Real Estate Professionals Inc., we invest heavily on the success and growth of our associates to
                    allow them to succeed in the ever changing landscape of the real estate industry. <br><br>
                    By providing a comprehensive and multifaceted support network for our associates, we provide our
                    associates with the tools necessary to allow them to offer high quality services to our clients, for
                    their real estate purchases and sales, to really let them shine.
                </p>
            </div>
        </div>
    </div>
</section>


<!-- CTA Banner -->
<section class="bgc-gray">
    <div class="cta-banner3 py-0 mx-auto maxw1600  pb-0   position-relative overflow-hidden mx20-lg">
        <div class="container">
            <div class="row">
                <div class=" col-12  col-md-12 col-lg-6 pl30-md pl15-xs wow fadeInRight">
                <div class="mb30"><h2 class="title text-capitalize">About Our Brokerage</h2></div>
                <p>Real Estate Professionals Inc. is an independent real estate brokerage, founded in 2002, 
                    offering our Pro level of service and professionalism to home buyers, sellers, and investors 
                    throughout Alberta. In the years since its inception, the company continuously has met its 
                    lofty goals, pushed for constant improvement, and set the standard for real estate 
                    excellence within the industry.
                 </p>
                <h5 class="mt-3">The growth of REP to a staggering team 370+ REALTORS <span>&#174;</span> </h5>
                <p>Real Estate Professionals Inc. has rapidly expanded its operations, establishing a strong 
                    presence from Calgary to Edmonton and beyond. With a team of over 370 REALTORS<span>&#174;</span>, the 
                    company brings a wealth of experience and expertise in navigating the complexities of the 
                    ever-evolving real estate market. Trusted by both REALTORS<span>&#174;</span> and clients, Real Estate 
                    Professionals Inc. consistently delivers outstanding results!
                </p>
                </div>

                <div class='col-12 about-our-brok col-lg-6'> 
                   <img src="/images/real-new.jpeg" alt="">    
                <div>
            </div>
        </div>
    </div>
</section>

<!-- Our Agents -->
<section>
    <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms">
            <div class="col-lg-9 mx-auto text-center">
                <div class="main-title2">
                    <h2 class="title mb-4 meet">{!! $pageContent->where('key','team_heading')->first()?->content !!}
                    </h2>
                    <p class="paragraph">
                        We’ve always kept our fingers on the pulse of the real estate industry in Alberta! Unlike other
                        real estate brokerages, at Real Estate Professionals Inc. we strategically built a diverse
                        management team skilled and knowledgeable in various aspects of our industry from legal to
                        conveyancing, to REALTOR<span>&#174;</span> management, professional development, and client support!
                    </p>
                </div>
            </div>
        </div>
        <div class="row wow fadeInUp ourTeam row-cols-2 row-cols-md-3" data-wow-delay="300ms">
            @php
            $positions = [1 => 'Owner / Associate',2 => 'Broker / General Manager',3 => 'Business Manager',4 =>
            'Conveyancing - Team Lead',5=>'Conveyancing',6 => 'Listings / South Office Co-ordinator'];
            @endphp
            @foreach($administrativeTeams as $k => $singleTeam)
            <div class="col-12 col-sm-4">
                <div class="feature-style2 mb30">
                    <div class="feature-img" type="button" data-bs-toggle="modal"
                        data-bs-target="#BrockerDetails_{{ $loop->index }}">
                        @if (!empty($singleTeam['profile_picture']))
                        <img src="{{ $singleTeam['profile_picture'] }}" alt=""
                            class="bdrs12">
                        @else
                        <img class="front-img" src="{{ env('BACKEND_URL') . '/images/no_image.jpg' }}" alt="Front Image"
                            class="bdrs12">
                        @endif
                    </div>
                    <div class="feature-content pt20">
                        <h6 class="title mb-1">{{ $singleTeam['name'] }}</h6>
                        <p class="text fz15">{{ $singleTeam['position'] }}</p>
                    </div>
                </div>
                <!-- Advance Feature Modal Start -->
                <div class="advance-feature-modal">
                    <!-- Modal -->
                    <div class="modal fade" id="BrockerDetails_{{ $loop->index }}" tabindex="-1"
                        aria-labelledby="BrockerDetailsLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-xl">
                            <div class="modal-content">
                                <div class="modal-header pl30 pr30 py20">
                                    <h5 class="modal-title" id="BrockerDetailsLabel">
                                        {{ $singleTeam['name'] }}
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body pb-0">
                                    <section class="agent-single p-0">
                                        <div
                                            class="cta-agent bgc-gray mx-auto maxw1600 pt30 pb30 bdrs12 position-relative mx20-lg">
                                            <div class="container">
                                                <div class="row align-items-center">
                                                    <div class="col-12">
                                                        <div class="agent-single d-sm-flex align-items-center">
                                                            <div class="single-img mb30-sm">
                                                                @if (!empty($singleTeam['profile_picture']))
                                                                <img src="{{ $singleTeam['profile_picture'] }}"
                                                                    alt="">
                                                                @else
                                                                <img class="front-img"
                                                                    src="{{ env('BACKEND_URL') . '/images/no_image.jpg' }}"
                                                                    alt="Front Image">
                                                                @endif
                                                            </div>
                                                            <div class="single-contant ml30 ml0-xs">
                                                                <h2 class="title mb-0">{{ $singleTeam['name'] }}</h2>
                                                                <p class="fz15">{{ $singleTeam['position'] }}</p>
                                                                <div class="agent-meta mb15 d-md-flex align-items-center">
                                                                    @if(!empty($singleTeam['phone']))
                                                                    @php
                                                                        $phoneNumber = preg_replace('/(\d{3})(\d{3})(\d{4})/', '$1.$2.$3', $singleTeam['phone']);
                                                                    @endphp
                                                                    <a class="text fz15 pe-2 bdrr1" href="javascript:void(0)"><i class="flaticon-call pe-1"></i>{{ $phoneNumber }}</a>
                                                                @endif
                                                                
                                                                    @if(!empty($singleTeam['email']))
                                                                    <a class="text fz15 d-flex ps-2" href="javascript:void(0)"><i class="flaticon-email iconss pe-1"></i>{{ $singleTeam['email'] }}</a>
                                                                    @endif
                                                                </div>
                                                                <div class="agent-social dark-icons">
                                                                    @if(!empty($singleTeam['facebook']))
                                                                    <a class="mr20" href="{{ $singleTeam['facebook'] }}"><i class="fab fa-facebook-f"></i></a>
                                                                    @endif
                                                                    @if(!empty($singleTeam['twitter']))
                                                                    <!--<a class="mr20" href="{{ $singleTeam['twitter'] }}"><i class="fab fa-twitter"></i></a>-->
                                                                    @endif
                                                                    @if(!empty($singleTeam['instagram']))
                                                                    <a class="mr20" href="{{ $singleTeam['instagram'] }}"><i class="fab fa-instagram"></i></a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                
                                                <div class="agent-single-details mt30 pb30 bdrb1">
                                                    <h6 class="fz17 mb30">About {{ $singleTeam['name'] }}</h6>
                                                    <!-- Your Blade file -->
                                                    <p class="text fw-normal team-description">
                                                        {{ substr($singleTeam['description'], 0, 395) }} 
                                                
                                                        @if (strlen($singleTeam['description']) > 395)
                                                        <span class="showdot">...</span>
                                                        <span class="more-text" style="display:none;">{{
                                                            substr($singleTeam['description'], 395) }}</span>
                                                            
                                                        <!-- Hidden extra text -->
                                                        <a href="#" class="show-more">Show more</a>
                                                        @endif
                                                    </p>
                                                    <div class="agent-single-accordion hidden-description">
                                                        <div class="accordion accordion-flush"
                                                            id="accordionFlushExample"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('.show-more').forEach(function(link) {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    var moreText = this.parentElement.querySelector('.more-text');
                    var showDot = this.parentElement.querySelector('.showdot');
                    console.log("showDot",showDot);
                    console.log("showDot",this.parentElement);

                    if (moreText.style.display === "none") {
                        moreText.style.display = "inline";
                        if(showDot && showDot.style){
                            showDot.style.display = "none";
                        }
                        this.innerText = "Show less";
                    } else {
                        moreText.style.display = "none";
                        if(showDot && showDot.style){
                            showDot.style.display = "inline";
                        }
                        this.innerText = "Show more";
                    }
                });
            });
        });
    
    </script>
</section>


<!-- Our Partners -->
<!-- Explore Apartment -->
<section class="bgc-gray ">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto wow fadeInUp" data-wow-delay="300ms">
                <div class="main-title text-center">
                    <h2 class="title mb-4">Our 3 Core Principles</h2>
                    <p class="paragraph">
                        At Real Estate Professionals Inc., we are governed by 3 core principles, which guides our
                        approach in traversing the complex real estate industry.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6  col-xl wow fadeInLeft" data-wow-delay="00ms">
                <div class="iconbox-style2 text-center pb50" style="height: 459px;">
                    <div class="icon">
                        <img src="images/icon/teamwork-together-icon.svg" alt="" />

                    </div>
                    <div class="iconbox-content">
                        <h4 class="title">Always REALTOR<span>&#174;</span>-First</h4>
                        <p class="text">
                            It starts with the associates. Supporting our associates in a variety of different areas,
                            such as marketing, business development, legal, and education, is the cornerstone of our
                            brokerage’s success.
                        </p>
                        <!-- <a
                              href="page-property-single-v1.html"
                              class="ud-btn btn-thm-border"
                              >Find a home<i class="fal fa-arrow-right-long"></i
                            ></a> -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl wow fadeInUp" data-wow-delay="300ms">
                <div class="iconbox-style2 active text-center pb50" style="height: 459px;">
                    <div class="icon">
                        <img src="images/icon/home-broker-dealer-icon.svg" alt="" />
                    </div>
                    <div class="iconbox-content">
                        <h4 class="title">Work Together For the Best of Our Clients</h4>
                        <p class="text">
                            We work tirelessly to provide custom tailored-made solutions, by utilizing our internal
                            network of 370+ REALTORS<span>&#174;</span> and our ever-expanding third-party vendor network, to help our
                            clients easily navigate the real estate industry.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl wow fadeInRight" data-wow-delay="300ms">
                <div class="iconbox-style2 text-center pb50" style="height: 459px;">
                    <div class="icon">
                        <img src="images/icon/help-line-icon.svg" alt="" />

                    </div>
                    <div class="iconbox-content">
                        <h4 class="title">Be The Pro</h4>
                        <p class="text">
                            We strive for excellence in what we do - real estate. We enjoy the process and not just the
                            outcome. As such, we actively learn, adapt, and respond to the market and thereby imbue
                            confidence and comfort in our clients. When you’re with us you’re with a Pro!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Explore Apartment -->
<section class="bgc-gray d-none">
    <div class="container maxw1600">
        <div class="row">
            <div class="col-lg-6 mx-auto wow fadeInUp" data-wow-delay="00ms">
                <div class="main-title text-center">
                    <h2 class="title">What Our REALTORS Say About REP</h2>
                    <p class="paragraph">
                        Aliquam lacinia diam quis lacus euismod
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="navi_pagi_bottom_center slider-dib-sm slider-3-grid owl-carousel owl-theme wow fadeInUp"
                    data-wow-delay="300ms">
                    <div class="item">
                        <div class="testimonial-style3 mt-1 mx-1 position-relative mb60">
                            <div class="testimonial-content">
                                <span class="icon">“</span>
                                <div class="thumb d-flex align-items-center mb40">
                                    <div class="flex-shrink-0">
                                        <img class="wa" src="images/testimonials/testimonial-4.png" alt="" />
                                    </div>
                                    <div class="flex-grow-1 ml20">
                                        <h6 class="mb-0 fz14">Theresa Webb</h6>
                                        <p class="mb-0 fz13 body-light-color">
                                            Marketing Coordinator
                                        </p>
                                    </div>
                                </div>
                                <p class="text mb-0">
                                    The template is really nice and offers quite a large
                                    set of options. It’s beautiful and the coding is done
                                    quickly and seamlessly. Thank you!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-style3 mt-1 mx-1 position-relative mb60">
                            <div class="testimonial-content">
                                <span class="icon">“</span>
                                <div class="thumb d-flex align-items-center mb40">
                                    <div class="flex-shrink-0">
                                        <img class="wa" src="images/testimonials/testimonial-5.png" alt="" />
                                    </div>
                                    <div class="flex-grow-1 ml20">
                                        <h6 class="mb-0 fz14">Cameron Williamson</h6>
                                        <p class="mb-0 fz13 body-light-color">
                                            Web Designer
                                        </p>
                                    </div>
                                </div>
                                <p class="text mb-0">
                                    The template is really nice and offers quite a large
                                    set of options. It’s beautiful and the coding is done
                                    quickly and seamlessly. Thank you!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-style3 mt-1 mx-1 position-relative mb60">
                            <div class="testimonial-content">
                                <span class="icon">“</span>
                                <div class="thumb d-flex align-items-center mb40">
                                    <div class="flex-shrink-0">
                                        <img class="wa" src="images/testimonials/testimonial-6.png" alt="" />
                                    </div>
                                    <div class="flex-grow-1 ml20">
                                        <h6 class="mb-0 fz14">Marvin McKinney</h6>
                                        <p class="mb-0 fz13 body-light-color">
                                            Nursing Assistant
                                        </p>
                                    </div>
                                </div>
                                <p class="text mb-0">
                                    The template is really nice and offers quite a large
                                    set of options. It’s beautiful and the coding is done
                                    quickly and seamlessly. Thank you!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-style3 mt-1 mx-1 position-relative mb60">
                            <div class="testimonial-content">
                                <span class="icon">“</span>
                                <div class="thumb d-flex align-items-center mb40">
                                    <div class="flex-shrink-0">
                                        <img class="wa" src="images/testimonials/testimonial-1.png" alt="" />
                                    </div>
                                    <div class="flex-grow-1 ml20">
                                        <h6 class="mb-0 fz14">Theresa Webb</h6>
                                        <p class="mb-0 fz13 body-light-color">
                                            Marketing Coordinator
                                        </p>
                                    </div>
                                </div>
                                <p class="text mb-0">
                                    The template is really nice and offers quite a large
                                    set of options. It’s beautiful and the coding is done
                                    quickly and seamlessly. Thank you!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-style3 mt-1 mx-1 position-relative mb60">
                            <div class="testimonial-content">
                                <span class="icon">“</span>
                                <div class="thumb d-flex align-items-center mb40">
                                    <div class="flex-shrink-0">
                                        <img class="wa" src="images/testimonials/testimonial-2.png" alt="" />
                                    </div>
                                    <div class="flex-grow-1 ml20">
                                        <h6 class="mb-0 fz14">Cameron Williamson</h6>
                                        <p class="mb-0 fz13 body-light-color">
                                            Web Designer
                                        </p>
                                    </div>
                                </div>
                                <p class="text mb-0">
                                    The template is really nice and offers quite a large
                                    set of options. It’s beautiful and the coding is done
                                    quickly and seamlessly. Thank you!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="py90 bcg-primary py-5 mb-4">
    <div class="container">

        <div class="row rep-style-3">
            <div class="col-md-6 col-lg-3">

                <h2 class="title text-white bork-built">
                    A Brokerage Built For REALTOR<span>&#174;</span> Success
                </h2>
                <a class="ud-btn btn-outline-white mt-4" href="{{ route('join-rep') }}">
                    Join REP
                </a>
            </div>
            <div class="col-md-6 col-lg-3 bt-floating px-4">

                <img src="/frontend/images/home/lucrative.webp" class="whyrepIcons mb20" />
                <!-- <h3 class="text-BlueA400">01.</h3> -->
                <h4 class="text-white">Instant Savings at REP!</h4>
                <p class="text-white">
                    We take pride in offering one of the lowest brokerage fees and monthly administrative charges for our
                    associates in Alberta, alongside our class-leading in-house commissions advance program, which
                    ensures more money stays in your pockets – where it belongs!
                </p>
            </div>
            <div class="col-md-6 col-lg-3 bt-floating px-4">
                <img src="images/home/comprehensiveSupport.webp" class="whyrepIcons mb20" />
                <!-- <h3 class="text-BlueA400">02.</h3> -->
                <h4 class="text-white">We’ve Got Your Back!</h4>
                <p class="text-white">
                    It all begins with our class-leading conveyancing service, which starts with our detailed contract
                    reviews and ends with our ultra fast commission payouts. We also provide accessible management
                    support and an on-site real estate lawyer and mortgage associate to help you get the deal done!

                </p>
            </div>
            <div class="col-md-6  col-lg-3 bt-floating px-4">
                <img src="images/home/established-Reputation.webp" class="whyrepIcons mb20" />
                <!-- <h3 class="text-BlueA400">03.</h3> -->
                <h4 class="text-white">Work and Play Hard!</h4>
                <p class="text-white">
                    We’re focused on investing in your growth. Our brokerage offers educational courses, presentations
                    from industry experts and a class leading 1:1 mentorship program. Throughout the year, we also host
                    various social events for our REALTORS<span>&#174;</span>️ and their family, like our Winter Holiday Celebration!

                </p>
            </div>
        </div>
        <div class="row"></div>

    </div>
</section>

<section class="our-cta  pt90 pb90 pt60-md pb60-md ">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-6 wow fadeInLeft">
                    <div class="cta-style3">
                        <h2 class="cta-title">Become A REALTOR<span>&#174;</span> at Real Estate Professionals Inc.</h2>
                        <p class="cta-text mb25">
                        Everyday more REALTORS<span>&#174;</span> choose to work at Real Estate Professionals Inc. because of our REALTOR<span>&#174;</span>-first approach to business support and development, our low fee structures, and our commitment to industry excellence. Interested in becoming a Pro?

                        </p>
                        <a href="{{ route('join-rep') }}" class="ud-btn btn-thm"
                        > Join our family <i class="fal fa-arrow-right-long"></i
                            ></a>
                    </div>
                </div>
                <div
                    class="col-lg-5 col-xl-4 offset-xl-2 d-none d-lg-block wow fadeIn"
                    data-wow-delay="300ms"
                >
                    <div class="cta-img paul">
                        <img src="/images/paul-removebg-preview.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- CTA Banner -->
<!-- <section class="bcg-primary py-0 perf-choice">
        <div
            class="cta-banner5 ms-auto maxw1850 pt100 pt60-lg pb90 pb30-lg position-relative overflow-hidden mx20-lg"
        >
            <div class="container">
                <div class="row">
                    <div class="col-md-11 wow fadeInUp" data-wow-delay="200ms">
                        <div class="main-title">
                            <h2 class="title text-capitalize text-white">
                                Why Real Estate Professionals Inc. <br />Is The Perfect Choice
                                For Realtors®?
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInDown repAbout" data-wow-delay="500ms">
                    <div class="col-sm-6 col-lg-4">
                        <div style="height: 478px;"
                            class="iconbox-style9 default-box-shadow1 bgc-white p40 bdrs12 position-relative mb30"
                        >
                            <img
                                src="images/home/established-Reputation.webp"
                                class="whyrepIcons mb20"
                            />
                            <h4 class="iconbox-title mt20">
                                More Money In Your Pocket!
                            </h4>
                            <p class="text mb-0">
                                Unlike other brokerages, Real Estate Professionals Inc. prides itself in offering one of the lowest brokerage fee structures and monthly administrative charges to our associates in Alberta. This means, more money in your pocket – where it belongs!
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div
                            class="iconbox-style9 default-box-shadow1 bgc-white p40 bdrs12 position-relative mb30"
                        >
                            <img
                                src="images/home/comprehensiveSupport.webp"
                                class="whyrepIcons mb20"
                            />
                            <h4 class="iconbox-title mt20">We’ve Got Your Back!</h4>
                            <p class="text mb-0">
                                It all begins with our class leading conveyancing service, which starts with our detailed contract reviews from the moment we receive your paperwork to our fast turnaround-time on commission payouts. On top of that, our brokerage offers accessible and supportive management and an in-office real estate lawyer and mortgage associate to help guide you throughout your real estate transactions – even after-hours – to ensure your deals get done!
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div
                            class="iconbox-style9 default-box-shadow1 bgc-white p40 bdrs12 position-relative mb30"
                        >
                            <img
                                src="images/home/lucrative.webp"
                                class="whyrepIcons mb20"
                            />
                            <h4 class="iconbox-title mt20">Work and Play Hard!</h4>
                            <p class="text mb-0">
                                Continuing professional development is a fundamental tenet to being a great Realtor®! Our brokerage offers educational courses, free presentations from special industry-leading professionals, and a one-to-one Mentorship Program with our vetted group of experienced Realtors®. Throughout the year, we also offer numerous social events for our agents and families to attend such as our annual Winter Holiday Celebration!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row mt30">
                    <div class="col-6 col-sm-3 ">
                        <a href="{{ route('join-rep') }}" class="ud-btn btn-outline-white w-100"
                        >Join REP</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </section> -->
@endsection
