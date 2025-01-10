@extends(' layouts.pages')
@section('content')

<style>
    .feature-img img{
    height: 100%;
    width: 100%;
    object-fit: cover;
}
</style>


    <!-- Modal -->
    <section class="breadcumb-section2 p-0">
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
    <section class="our-about bgc-gray">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-delay="300ms">

                <div class="col-lg-6">
                    <h2>
                        {!! $pageContent->where('key','section_1_title')->first()?->content !!}
                    </h2>
                </div>
                <div class="col-lg-6">
                    <!-- {!! $pageContent->where('key','section_1_content')->first()?->content !!} -->
                    <p>At Real Estate Professionals Inc., we invest heavily on the success and growth of our associates to allow them to succeed in the ever changing landscape of the real estate industry. <br><br>
                    By providing a comprehensive and multifaceted support network for our associates, we provide our associates with the tools necessary to allow them to offer high quality services to our clients, for their real estate purchases and sales, and to really let them shine.
                </p>
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
                        <h2 class="title mb-4">{!! $pageContent->where('key','team_heading')->first()?->content !!}</h2>
                        <p class="paragraph">
                            <!-- {!! $pageContent->where('key','team_sub_heading')->first()?->content !!} -->
                            We’ve always kept our fingers on the pulse of the real estate industry in Alberta! Unlike other real estate brokerages, at Real Estate Professionals Inc. we strategically built a diverse management team skilled and knowledgeable in various aspects of our industry from legal to conveyancing, to Realtor® management, professional development, and client support!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp ourTeam " data-wow-delay="300ms">
                @php
                    $positions = [1 => 'Owner / Associate',2 => 'Broker / General Manager',3 => 'Business Manager',4 => 'Conveyancing - Team Lead',5=>'Conveyancing',6 => 'Listings / South Office Co-ordinator'];
                @endphp
                @foreach($administrativeTeams as $k => $singleTeam)
                    <div class="col-6 col-sm-3">
                        <div class="teams mb30">
                            <div
                                class="teams-img"
                                type="button"
                                data-bs-toggle="modal"
                                data-bs-target="#BrockerDetails_{{ $loop->index }}"
                            >
                                @if (!empty($singleTeam['profile_picture']))
                                    <img class="front-img" src="{{ env('BACKEND_URL') . '/' . $singleTeam['profile_picture'] }}" alt="Front Image">
                                    @else
                                    <img class="front-img" src="{{ env('BACKEND_URL') . '/images/no_image.jpg' }}" alt="Front Image">
                                   
                                @endif
                        
                                @if (!empty($singleTeam['other_profile_picture']))
                                    <img class="back-img" src="{{ env('BACKEND_URL') . '/' . $singleTeam['other_profile_picture'] }}" alt="Back Image">
                                    @else
                                    <img class="back-img" src="{{ env('URL') . '/images/no_image.jpg'  }}" alt="Back Image">
                                    
                                @endif
                        
                                <div class="overlay">
                                    <h6 class="title mb-1">{{ $singleTeam['name'] }}</h6>
                                    <?php $pos = $singleTeam['position'];?>
                                    <p class="text fz15">{{ $pos }}</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Advance Feature Modal Start -->
                        <div class="advance-feature-modal">
                            <!-- Modal -->
                            <div
                                class="modal fade"
                                id="BrockerDetails_{{ $loop->index }}"
                                tabindex="-1"
                                aria-labelledby="BrockerDetailsLabel"
                                aria-hidden="true"
                            >
                                <div class="modal-dialog modal-dialog-centered d-flex align-items-center justify-content-center modal-xl">
                                    <div class="modal-content" style='width:50%'>
                                        <div class="modal-header pl30 pr30 py20">
                                            <h5 class="modal-title" id="BrockerDetailsLabel">
                                                {{ $singleTeam['name'] }}
                                            </h5>
                                            <button
                                                type="button"
                                                class="btn-close"
                                                data-bs-dismiss="modal"
                                                aria-label="Close"
                                            ></button>
                                        </div>
                                        <div class="modal-body pb-0">
                                            <section class="agent-single p-0">
                                                <div
                                                    class="cta-agent bgc-gray mx-auto maxw1600 pt30 pb30 bdrs12 position-relative mx20-lg"
                                                >
                                                    <div class="container">
                                                        <div class="row align-items-center">
                                                            <div class="col-12">
                                                                <div
                                                                    class="agent-single "
                                                                >
                                                                <div class="single-img mb30-sm mb-3  d-flex align-items-center justify-content-center  flex-column">
                                                                    @if (!empty($singleTeam['profile_picture']))
                                                                        <img src="{{ env('BACKEND_URL') . '/' . $singleTeam['profile_picture'] }}" alt="">
                                                                    @else
                                                                    <img class="front-img" src="{{ env('BACKEND_URL') . '/images/no_image.jpg' }}" alt="Front Image">
                                                                    @endif
                                                                </div>
                                                                
                                                                    <div class="single-contant  ml0-xs">
                                                                        <h2 class="title mb-0">{{ $singleTeam['name'] }}</h2>
                                                                        <p class="fz15">
                                                                            {{ $singleTeam['position'] }}
									</p>
                                    <div class="agent-meta mb15 d-md-flex align-items-center">
                                        <?php if (!empty($singleTeam['phone'])): ?>
                                            <a class="text fz15 pe-2 ps-2 bdrr1" href="javascript:void(0)">
                                                <i class="flaticon-call pe-1"></i>{{ $singleTeam['phone'] }}
                                            </a>
                                        <?php endif; ?>
                                    
                                        <?php if (!empty($singleTeam['email'])): ?>
                                            <a class="text fz15 ps-2" href="javascript:void(0)">
                                                <i class="flaticon-email pe-1"></i>{{ $singleTeam['email'] }}
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                    
                                    <div class="agent-social dark-icons">
                                        <?php if (!empty($singleTeam['facebook'])): ?>
                                            <a class="mr20" href="{{ $singleTeam['facebook'] }}"><i class="fab fa-facebook-f"></i></a>
                                        <?php endif; ?>
                                    
                                        <?php if (!empty($singleTeam['twitter'])): ?>
                                            <a class="mr20" href="{{ $singleTeam['twitter'] }}"><i class="fab fa-twitter"></i></a>
                                        <?php endif; ?>
                                    
                                        <?php if (!empty($singleTeam['instagram'])): ?>
                                            <a class="mr20" href="{{ $singleTeam['instagram'] }}"><i class="fab fa-instagram"></i></a>
                                        <?php endif; ?>
                                    
                                        <?php if (!empty($singleTeam['linkedin'])): ?>
                                            <a href="{{ $singleTeam['linkedin'] }}"><i class="fab fa-linkedin-in"></i></a>
                                        <?php endif; ?>
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
                                                            <p class="text">
                                                                <!--!! singleTeam->about_content !!-->
                                                            </p>
                                                            <div class="agent-single-accordion">
                                                                <div
                                                                    class="accordion accordion-flush"
                                                                    id="accordionFlushExample"
                                                                >
                                                                    {{--                                                                <div class="accordion-item">--}}
                                                                    {{--                                                                    <div--}}
                                                                    {{--                                                                        id="flush-collapseOne"--}}
                                                                    {{--                                                                        class="accordion-collapse collapse"--}}
                                                                    {{--                                                                        aria-labelledby="flush-headingOne"--}}
                                                                    {{--                                                                        data-bs-parent="#accordionFlushExample"--}}
                                                                    {{--                                                                        style=""--}}
                                                                    {{--                                                                    >--}}
                                                                    {{--                                                                        <div class="accordion-body p-0">--}}
                                                                    {{--                                                                            <p class="text">--}}
                                                                    {{--                                                                                Additionally, Andrew serves as our brokerage--}}
                                                                    {{--                                                                                Fintrac Compliance Officer and is passionate--}}
                                                                    {{--                                                                                about supporting our agents and staff in the--}}
                                                                    {{--                                                                                continued development of the industry and--}}
                                                                    {{--                                                                                maintaining high industry standards. Andrew--}}
                                                                    {{--                                                                                considers himself a ‘foodie’ and can layer--}}
                                                                    {{--                                                                                spices and hot sauces without even breaking--}}
                                                                    {{--                                                                                a sweat!--}}
                                                                    {{--                                                                            </p>--}}
                                                                    {{--                                                                        </div>--}}
                                                                    {{--                                                                    </div>--}}
                                                                    {{--                                                                    <h2--}}
                                                                    {{--                                                                        class="accordion-header"--}}
                                                                    {{--                                                                        id="flush-headingOne"--}}
                                                                    {{--                                                                    >--}}
                                                                    {{--                                                                        <button--}}
                                                                    {{--                                                                            class="accordion-button p-0 collapsed"--}}
                                                                    {{--                                                                            type="button"--}}
                                                                    {{--                                                                            data-bs-toggle="collapse"--}}
                                                                    {{--                                                                            data-bs-target="#flush-collapseOne"--}}
                                                                    {{--                                                                            aria-expanded="false"--}}
                                                                    {{--                                                                            aria-controls="flush-collapseOne"--}}
                                                                    {{--                                                                        >--}}
                                                                    {{--                                                                            Show more--}}
                                                                    {{--                                                                        </button>--}}
                                                                    {{--                                                                    </h2>--}}
                                                                    {{--                                                                </div>--}}
                                                                </div>
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
    </section>

    <!-- CTA Banner -->
    <section class="bgc-gray">
        <div
            class="cta-banner3 py-0 mx-auto maxw1600  pb-0  bdrs24 position-relative overflow-hidden mx20-lg"
        >
            <div class="container">
                <div class="row">
                    <div
                        class="col-md-6 col-lg-6 pl30-md pl15-xs wow fadeInRight"
                        data-wow-delay="500ms"
                    >
                        {!! $pageContent->where('key','section_2_content')->first()?->content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Partners -->
    <!-- Explore Apartment -->
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto wow fadeInUp" data-wow-delay="300ms">
                    <div class="main-title text-center">
                        <h2 class="title mb-4">Our 3 Core Principles</h2>
                        <p class="paragraph">
                            At Real Estate Professionals Inc., we are governed by 3 core principles, which guides our approach in traversing the complex real estate industry.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div
                    class="col-sm-6 col-lg-4 wow fadeInLeft"
                    data-wow-delay="00ms"
                >
                    <div class="iconbox-style2 text-center pb50" style="height: 459px;">
                        <div class="icon">
                            <img src="images/icon/help-line-icon.svg" alt="" />
                        </div>
                        <div class="iconbox-content">
                            <h4 class="title">Always Realtor®-First</h4>
                            <p class="text">
                                It starts with the associates. Supporting our associates in a variety of different areas, such as marketing, business development, legal, and education, is the cornerstone of our brokerage’s success.
                            </p>
                            <!-- <a
                              href="page-property-single-v1.html"
                              class="ud-btn btn-thm-border"
                              >Find a home<i class="fal fa-arrow-right-long"></i
                            ></a> -->
                        </div>
                    </div>
                </div>
                <div
                    class="col-sm-6 col-lg-4 wow fadeInUp"
                    data-wow-delay="300ms"
                >
                    <div class="iconbox-style2 active text-center pb50" style="height: 459px;">
                        <div class="icon">
                            <img src="images/icon/home-broker-dealer-icon.svg" alt="" />
                        </div>
                        <div class="iconbox-content">
                            <h4 class="title">Work Together For the Best of Our Clients</h4>
                            <p class="text">
                                We work tirelessly to provide custom tailored-made solutions, by utilizing our internal network of 350+ associates and our ever-expanding third party vendor network, to help our clients easily navigate the real estate industry.
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="col-sm-6 col-lg-4 wow fadeInRight"
                    data-wow-delay="300ms"
                >
                    <div class="iconbox-style2 text-center pb50" style="height: 459px;">
                        <div class="icon">
                            <img src="images/icon/teamwork-together-icon.svg" alt="" />
                        </div>
                        <div class="iconbox-content">
                            <h4 class="title">Be The Pro</h4>
                            <p class="text">
                                We strive for excellence in what we do - real estate. We enjoy the process and not just the outcome. As such, we actively learn, adapt, and respond to the market and thereby imbue confidence and comfort in our clients. When you’re with us you’re with a Pro!
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
                        <h2 class="title">What Our Realtors Say About REP</h2>
                        <p class="paragraph">
                            Aliquam lacinia diam quis lacus euismod
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div
                        class="navi_pagi_bottom_center slider-dib-sm slider-3-grid owl-carousel owl-theme wow fadeInUp"
                        data-wow-delay="300ms"
                    >
                        <div class="item">
                            <div
                                class="testimonial-style3 mt-1 mx-1 position-relative mb60"
                            >
                                <div class="testimonial-content">
                                    <span class="icon">“</span>
                                    <div class="thumb d-flex align-items-center mb40">
                                        <div class="flex-shrink-0">
                                            <img
                                                class="wa"
                                                src="images/testimonials/testimonial-4.png"
                                                alt=""
                                            />
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
                            <div
                                class="testimonial-style3 mt-1 mx-1 position-relative mb60"
                            >
                                <div class="testimonial-content">
                                    <span class="icon">“</span>
                                    <div class="thumb d-flex align-items-center mb40">
                                        <div class="flex-shrink-0">
                                            <img
                                                class="wa"
                                                src="images/testimonials/testimonial-5.png"
                                                alt=""
                                            />
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
                            <div
                                class="testimonial-style3 mt-1 mx-1 position-relative mb60"
                            >
                                <div class="testimonial-content">
                                    <span class="icon">“</span>
                                    <div class="thumb d-flex align-items-center mb40">
                                        <div class="flex-shrink-0">
                                            <img
                                                class="wa"
                                                src="images/testimonials/testimonial-6.png"
                                                alt=""
                                            />
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
                            <div
                                class="testimonial-style3 mt-1 mx-1 position-relative mb60"
                            >
                                <div class="testimonial-content">
                                    <span class="icon">“</span>
                                    <div class="thumb d-flex align-items-center mb40">
                                        <div class="flex-shrink-0">
                                            <img
                                                class="wa"
                                                src="images/testimonials/testimonial-1.png"
                                                alt=""
                                            />
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
                            <div
                                class="testimonial-style3 mt-1 mx-1 position-relative mb60"
                            >
                                <div class="testimonial-content">
                                    <span class="icon">“</span>
                                    <div class="thumb d-flex align-items-center mb40">
                                        <div class="flex-shrink-0">
                                            <img
                                                class="wa"
                                                src="images/testimonials/testimonial-2.png"
                                                alt=""
                                            />
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

    <!-- CTA Banner -->
    <section class="bcg-primary py-0 perf-choice">
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
    </section>
@endsection
