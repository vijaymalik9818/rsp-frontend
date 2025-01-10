@extends('layouts.pages')
@section('content')

<head>
    <link rel="stylesheet"
        href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1569006288/BBBootstrap/choices.min.css?version=7.0.0">
    <script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1569006273/BBBootstrap/choices.min.js?version=7.0.0">
    </script>
</head>
<style>
.mt-100 {
    margin-top: 50px;
}

body {
    background: grey;
    color: #514B64;
    min-height: 100vh
}

h2 {
    color: darkgreen;
}

.choices__inner {
    display: inline-block;
    vertical-align: top;
    width: 100%;
    background-color: #f9f9f9;
    padding: 10.5px 7.5px 3.75px;
    border: 1px solid #ddd;
    border-radius: 9.5px;
    font-size: 14px;
    min-height: 55px;
    overflow: hidden;
}

.headerForm-style-cta {
    background-size: cover;
    background-position: 0 -105px;
    background-image: url(/images/join-rep banner.jpeg);
}

#css-dropdown {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    width: 300px;
    height: 42px;
    margin: 100px auto 0 auto;
}

.choices__list--multiple .choices__item {
    display: inline-block;
    vertical-align: middle;
    border-radius: 20px;
    padding: 4px 10px;
    font-size: 12px;
    font-weight: 500;
    margin-right: 3.75px;
    margin-bottom: 3.75px;
    background-color: #007bff;
    border: 1px solid #007bff;
    color: #fff;
    word-break: break-all;
}

.realtor-r {
    font-size: 10px;
    position: relative;
    top: -10px;
    left: -2px;
}

div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm {
    border: 0;
    border-radius: .25em;
    background: initial;
    background-color: #10579f;
    color: #fff;
    font-size: 1em;
}

@media (max-width:1290px) {
    .headerForm-style-cta {
        background-position: 0 0px !important;
    }

}

@media (max-width:768px) {
    .support{
    margin-top: -15px;
}
}


</style>

<section class="home-banner-style3 p0 join-rep headerForm-style-cta">
    <div class="blur-layer"></div>
    <div class="home-style3 position-relative zi1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="d-flex flex-column justify-content-center">
                        <h2 class="hero-title animate-up-1 text-shadow text-white">
                            Become a Pro at Real Estate Professionals Inc.

                        </h2>
                        <p class="text-white text-shadow fs-6 join-sub">
                            Join a brokerage that prides itself in our class leading conveyancing service, our
                            comprehensive Realtor® support network, and our low fee brokerage plans all geared to help
                            you succeed in your business!

                        </p>

                        <div class="ctnBox" onclick="scrollToSection('section14')">
                            <a class="ud-btn btn-white w-100" href="{{ route('join-rep') }}#"> Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- UI Elements Sections -->
<section class="our-about pb-0">
    <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms">
            <div class="col-lg-12 text-center">
                <h2 class='realtor-past-txt'>
                    Realtor<span class='realtor--r'>®️</span> First - Past, Present and Future!
                </h2>
                <p class="text fz15 r-first-app">
                    We take a Realtor® First approach in everything we do. We support our associates <br> from start to
                    finish and everything in between to ensure they succeed in <br>their business goals.
                </p>
                <!-- <a href="{{ route('join-rep') }}#intake-form" class="ud-btn "
                        >Join Now<i class="fal fa-arrow-right-long"></i
                            ></a> -->

            </div>
        </div>
    </div>
</section>


<!-- Explore Apartment -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 wow fadeInUp" data-wow-delay="300ms">
                <div class="row">
                    <div class="col-md-6">
                        <div class="iconbox-style6">
                            <img class="iconsCards icon" src="images/money-bag.svg" alt="" />

                            <h6 class="subtitle">More Money In Your Pocket
                            </h6>
                            <p class="iconbox-text">
                                We offer one of the lowest brokerage fee structures and monthly administrative charges
                                in Alberta!

                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="iconbox-style6 support">
                            <img class="iconsCards icon" src="images/social-support.svg" alt="" />

                            <h6 class="subtitle">Multidisciplinary Support Network
                            </h6>
                            <p class="iconbox-text">
                                We have a class leading conveyancing service, accessible and supportive management
                                staff, an in-office real estate lawyer and mortgage associate!

                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-md-5 mt-lg-0">
                        <div class="iconbox-style6">
                            <img class="iconsCards icon" src="images/graduation-cap.svg" alt="" />

                            <h6 class="subtitle">REP PREP
                            </h6>
                            <p class="iconbox-text">
                                We offer educational courses, free presentations from industry-leading professionals, a
                                one-to-one Mentorship Program, and more!

                            </p>
                        </div>
                    </div>
                    <div class="col-md-6  mt-md-5 mt-lg-0">
                        <div class="iconbox-style6">
                            <img class="iconsCards icon" src="images/network.svg" alt="" />

                            <h6 class="subtitle">Our Social Network
                            </h6>
                            <p class="iconbox-text">
                                We offer numerous social events for our associates and their families to attend
                                year-round to help cultivate relationships amongst our peers and the community!

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- bgc-thm -->
<!-- Our Testimonials -->
<!-- <section class="our-testimonial bgc-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto wow fadeInUp" data-wow-delay="300ms">
                    <div class="main-title text-center">
                        <h2>We Help You To Sell Your Home</h2>
                        <p class="paragraph">
                            After years of business, our responsibility and attention to
                            the customer have never been so effective. Find out what
                            people say about us.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 m-auto wow fadeInUp" data-wow-delay="500ms">
                    <div class="testimonial-style2">
                        <div class="tab-content" id="pills-tabContent">
                            <div
                                class="tab-pane fade"
                                id="pills-1st"
                                role="tabpanel"
                                aria-labelledby="pills-1st-tab"
                            >
                                <div class="testi-content text-center">
                                    <span class="icon fas fa-quote-left"></span>
                                    <h4 class="testi-text">
                                        What a great experience! I have visited one of the
                                        workshops and attended a masterclass, and both were
                                        super useful for young designers. Highly recommended.
                                    </h4>
                                    <h6 class="name">Ali Tufan</h6>
                                    <p class="design">Product Manager, Apple Inc</p>
                                </div>
                            </div>
                            <div
                                class="tab-pane fade show active"
                                id="pills-2nd"
                                role="tabpanel"
                                aria-labelledby="pills-2nd-tab"
                            >
                                <div class="testi-content text-center">
                                    <span class="icon fas fa-quote-left"></span>
                                    <h4 class="testi-text">
                                        What a great experience! I have visited one of the
                                        workshops and attended a masterclass, and both were
                                        super useful for young designers. Highly recommended.
                                    </h4>
                                    <h6 class="name">Ali Tufan</h6>
                                    <p class="design">Product Manager, Apple Inc</p>
                                </div>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="pills-3rd"
                                role="tabpanel"
                                aria-labelledby="pills-3rd-tab"
                            >
                                <div class="testi-content text-center">
                                    <span class="icon fas fa-quote-left"></span>
                                    <h4 class="testi-text">
                                        What a great experience! I have visited one of the
                                        workshops and attended a masterclass, and both were
                                        super useful for young designers. Highly recommended.
                                    </h4>
                                    <h6 class="name">Ali Tufan</h6>
                                    <p class="design">Product Manager, Apple Inc</p>
                                </div>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="pills-4th"
                                role="tabpanel"
                                aria-labelledby="pills-4th-tab"
                            >
                                <div class="testi-content text-center">
                                    <span class="icon fas fa-quote-left"></span>
                                    <h4 class="testi-text">
                                        What a great experience! I have visited one of the
                                        workshops and attended a masterclass, and both were
                                        super useful for young designers. Highly recommended.
                                    </h4>
                                    <h6 class="name">Ali Tufan</h6>
                                    <p class="design">Product Manager, Apple Inc</p>
                                </div>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="pills-5th"
                                role="tabpanel"
                                aria-labelledby="pills-5th-tab"
                            >
                                <div class="testi-content text-center">
                                    <span class="icon fas fa-quote-left"></span>
                                    <h4 class="testi-text">
                                        What a great experience! I have visited one of the
                                        workshops and attended a masterclass, and both were
                                        super useful for young designers. Highly recommended.
                                    </h4>
                                    <h6 class="name">Ali Tufan</h6>
                                    <p class="design">Product Manager, Apple Inc</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-list position-relative">
                            <ul
                                class="nav nav-pills justify-content-center"
                                id="pills-tab"
                                role="tablist"
                            >
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link ps-0"
                                        id="pills-1st-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#pills-1st"
                                        type="button"
                                        role="tab"
                                        aria-controls="pills-1st"
                                        aria-selected="true"
                                    >
                                        <img src="images/testimonials/testi-1.png" alt="" />
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link active"
                                        id="pills-2nd-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#pills-2nd"
                                        type="button"
                                        role="tab"
                                        aria-controls="pills-2nd"
                                        aria-selected="false"
                                    >
                                        <img src="images/testimonials/testi-2.png" alt="" />
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link"
                                        id="pills-3rd-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#pills-3rd"
                                        type="button"
                                        role="tab"
                                        aria-controls="pills-3rd"
                                        aria-selected="false"
                                    >
                                        <img src="images/testimonials/testi-3.png" alt="" />
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link"
                                        id="pills-4th-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#pills-4th"
                                        type="button"
                                        role="tab"
                                        aria-controls="pills-4th"
                                        aria-selected="false"
                                    >
                                        <img src="images/testimonials/testi-4.png" alt="" />
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link pe-0"
                                        id="pills-5th-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#pills-5th"
                                        type="button"
                                        role="tab"
                                        aria-controls="pills-5th"
                                        aria-selected="false"
                                    >
                                        <img src="images/testimonials/testi-5.png" alt="" />
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
<!-- CTA -->



<div class=' bgc-gray py-5'>
    <h6 class='text-center  hero-title animate-up-1 testi-heading fw-medium '>What Realtors®️ says about Real Estate
        Professionals Inc.</h6>
    <div id="carouselExampleAutoplaying" class="testimonials carousel slide ">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-caption  d-md-block">
                    <div class="testi-img">
                        <img src="/images/Winter-Kyle.jpg" alt="">
                    </div>
                    <h5>Kyle Winter, REALTOR<span class='realtor-r'>®️</span></h5>
                    <p>I have only worked at REP for a few years but I have found the Broker support has been
                        tremendous. Questions or concerns are attended to immediately, the brokerage staff are quick and
                        efficient at reviewing supporting documents, and the rates and fees are very reasonable.</p>
                </div>
            </div>

            <div class="carousel-item ">
                <div class="carousel-caption  d-md-block">
                    <div class="testi-img">
                        <img src="/images/Verma-Ramesh-RAMVER (1).jpg" alt="">
                    </div>
                    <h5>Ramesh Verma, REALTOR<span class='realtor-r'>®️</span></h5>
                    <p>I have been with Real Estate Professionals for 5 years and love working in this brokerage. Our
                        Broker Andrew and Broker-Delegate Paul are only a call away for any consultation and opinions
                        you need. Support staff is excellent and very quick to respond. I keep recommending to other
                        Realtors® to come and join this awesome office.</p>
                </div>
            </div>

            <div class="carousel-item ">
                <div class="carousel-caption  d-md-block">
                    <div class="testi-img">
                        <img src="/images/Turner-Kelly.jpg" alt="">
                    </div>
                    <h5>Kelly Turner, REALTOR<span class='realtor-r'>®️</span></h5>
                    <p>Real Estate Professionals Inc. doesn't just offer competitive rates for fee plans but is also
                        comprised of the most efficient and top-notch support team. From sage broker support advice,
                        flawless conveyancing, quick payouts on commissions, helpful mentorship programs, advanced
                        technology services, to the additional convenience of exceptional in-house legal and mortgage
                        services right at your fingertips! </p>
                </div>
            </div>

            <div class="carousel-item ">
                <div class="carousel-caption  d-md-block">
                    <div class="testi-img">
                        <img src="/images/Aurora-S.-Alipio.jpg" alt="">
                    </div>
                    <h5>Aurora Alipio, REALTOR<span class='realtor-r'>®️</span></h5>
                    <p>Last October 2023, I decided to pursue my career in Real Estate on a Full Time Basis under REAL
                        ESTATE PROFESSIONALS INC.  I had mixed emotions when I gave up my job as an Accountant; however,
                        the professionalism, full support/guidance, broadened knowledge and immediate response to all my
                        questions by my Broker are the major factors that helped me make the right decision. All the
                        staff are awesome, friendly, competent and fast in processing our commissions!! It will always
                        be my pride and honor to be a part of this Brokerage for more than 13 years now and up to
                        present.</p>
                </div>
            </div>


            <div class="carousel-item ">
                <div class="carousel-caption  d-md-block">
                    <div class="testi-img">
                          <img style="object-fit:fill;" src="/images/hardeep.jpg" alt="">

                    </div>
                    <h5>Hardeep Choudhary, REALTOR<span class='realtor-r'>®️</span></h5>
                    <p>I am with Real Estate Professionals Inc. since I became Realtor®️ in 2016. I always feel extremely lucky
                        to have joined the REP brokerage because the support and guidance that I have received during my
                        real estate career is beyond my expectations.
                        Front staff, backend office staff, Assistant Broker and the Broker, everyone is only a phone
                        call away whenever I needed any help from them. I highly recommend the REP brokerage to
                        Realtors® who are looking for a reliable, supportive and trustworthy brokerage!
                    </p>
                </div>
            </div>



            <div class="carousel-item ">
                <div class="carousel-caption  d-md-block">
                    <div class="testi-img">
                        <img src="/images/Calvin-Hanson.jpg" alt="">

                    </div>
                    <h5>Cal Hanson, REALTOR<span class='realtor-r'>®️</span></h5>
                    <p>After starting my real estate career over 30 years ago with Canada’s largest real estate company
                        I moved over to the world’s largest company for 15 years. Being very successful I realized after
                        researching other real estate firms there was a better option for me so I joined the Real Estate
                        Professionals Inc. family. Not only was it saving me a lot of money, I found they really cared
                        to make the real estate industry better. From keeping up with industry standards, continually
                        learning and sharing their knowledge with their Realtors® to now offering mentoring to all new
                        and seasoned Realtors®. Whether you’re a new Realtor® or been a long time Realtor® overpaying at
                        other companies, I recommend joining Real Estate Professionals Inc., which I have called home
                        for over 10 years now.
                    </p>
                </div>
            </div>




            <div class="carousel-item ">
                <div class="carousel-caption  d-md-block">
                    <div class="testi-img">
                        <img src="/images/Martin-Shahim.jpg" alt="">
                    </div>
                    <h5>Martin Shahim, REALTOR<span class='realtor-r'>®️</span></h5>
                    <p>I have been with Real Estate Professionals Inc. since 2013 and I have had the greatest
                        experience with the entire staff.  Broker and Broker-Delegate are available almost instantly.
                        Very friendly and professional conveyancing department. Commissions are paid on time and the
                        crew in the office always rapidly response to my requests. Real Estate Professionals Inc. is
                        definitely the main reason for my success in the industry. Their terms and conditions allow you
                        to easily integrate your business plan and move towards your achievements! 
                    </p>
                </div>
            </div>



            <!--<div class="carousel-item ">-->
            <!--    <div class="carousel-caption  d-md-block">-->
            <!--        <div class="testi-img">-->
            <!--        <img style="object-fit:fill;"  src="/images/final-logo.png" alt="">  -->
            <!--        </div>-->
            <!--        <h5>Michelle Hilsabeck, REALTOR<span class='realtor-r'>®️</span></h5>-->
            <!--        <p>Real Estate Professionals Inc. is an exceptional partner in the real estate industry. Their commitment-->
            <!--            to bridging the gap for new associates is unmatched, providing comprehensive support and-->
            <!--            guidance every step of the way. With their competitive fee plans and unlimited brokerage-->
            <!--            support, they ensure that their professionals have the resources they need to succeed.-->
            <!--        </p>-->
            <!--    </div>-->
            <!--</div>-->



            <div class="carousel-item ">
                <div class="carousel-caption  d-md-block">
                    <div class="testi-img">
                        <img src="/images/Lynn-Brunton.jpg" alt="">
                    </div>
                    <h5>Lynn Brunton, REALTOR<span class='realtor-r'>®️</span></h5>
                    <p>The best Brokerage I have had the pleasure of working with in my 32 years as a Realtor®.  Real
                        Estate Professionals Inc. is a progressive Brokerage offering competitive fee plans,
                        knowledgeable and available Broker support when you need it, efficient conveyancing with quick
                        payouts and great office staff.  They offer a much-needed Mentorship program for new Realtors®
                        or those seasoned Realtors® that would like extra support in an area that they are not as
                        familiar with.  This company is an excellent choice, one I made 15 years ago. 
                    </p>
                </div>
            </div>

            <div class="carousel-item ">
                <div class="carousel-caption  d-md-block">
                    <div class="testi-img">
                        <img src="/images/Faule-Nadine-NADFAU.jpg" alt="">
                        <!-- img -->
                    </div>
                    <h5>Nadine Faule, REALTOR<span class='realtor-r'>®️</span></h5>
                    <p>After being in real estate for close to 35 years in very large franchises, I decided to slow down
                        which led me to Real Estate Professionals Inc. At first, the reason for my move in 2019 was
                        mostly financial.  By being mostly virtual, Real Estate Professionals Inc. had fee structures
                        which were unbeatable but still had 2 offices in Calgary (North and South). Right from the
                        start, management and office staff absolutely blew my mind.  Their efficiency, attention to
                        details, and friendliness made me feel at home and I knew I had made the right decision. Since
                        2019, this brokerage has grown considerably by offering new programs to new Realtors®,
                        mentorship, new websites and has also increased their social multimedia presence, without
                        increasing their fee structures.
                        Management has clearly demonstrated its dedication to their Realtors® well-being and success
                        versus putting its needs first. 

                        I am very proud to be part of the Real Estate Professionals Inc.’s success story and would be
                        more than happy to share more of my very positive experience with this office.
                        Please feel free to call me at 403-669-6689 or email me any time at nadinefaule@gmail.com.

                    </p>
                </div>
            </div>


            <div class="carousel-item ">
                <div class="carousel-caption  d-md-block">
                    <div class="testi-img">
                        <img src="/images/rupi.jpeg" alt="">
                    </div>
                    <h5>Rupi Sandhu, REALTOR<span class='realtor-r'>®️</span></h5>
                    <p>Working with Real Estate Professionals Inc. has been a wonderful experience for me. Supportive
                        environment and the Mentorship Program has helped me grow professionally. The management and
                        office staff are always ready to assist and encourage you when you face tricky situations. They
                        are helpful and knowledgeable.  After 8 years of joining this incredible team, I have never
                        looked back. It’s the best choice!

                    </p>
                </div>
            </div>


            <div class="carousel-item ">
                <div class="carousel-caption  d-md-block">
                    <div class="testi-img">
                           <img src="/images/Kristina.jpeg" alt="">
                    </div>
                    <h5>Kristina Lozic, REALTOR<span class='realtor-r'>®️</span></h5>
                    <p>The brokerage model at Real Estate Professionals offers many wonderful components such as
                        incredible value, flexibility with branding, multiple locations for deposit drop offs and
                        brokerage meetings that offer learning opportunities. However, my favorite aspect of this
                        brokerage is the communication and short response time and that is offered from all members of
                        the team. I’ve worked on unique deals in a rushed multiple offer situation, and in seven years
                        at the brokerage I am always able to get a hold of the Broker and Broker-Delegate for any
                        questions or guidance, this support allows me to expand my business in the way I want to.

                    </p>
                </div>
            </div>



            <div class="carousel-item ">
                <div class="carousel-caption  d-md-block">
                    <div class="testi-img">
                        <img src="/images/David-H.-Chapman.jpg" alt="">
                    </div>
                    <h5>David Chapman, REALTOR<span class='realtor-r'>®️</span></h5>
                    <p>I have been associated with Real Estate Professionals for 8 years, moving from a small Boutique
                        Brokerage. To my delight from the very start, the personal engagement, support and services by
                        the warm, dedicated and efficient team members of the brokerage exceeded my every expectation
                        and what I had experienced since becoming a Realtor®.  With more than competitive fees,
                        additional services implemented include a Mentorship Program for new licensees, access to
                        state-of-the-art technology, record keeping and relevant industry information seminars. Not to
                        mention the always available Broker support and expertise. The no worry confidence of quick and
                        efficient commissions handling allows me to focus on my business without worry or distraction.
                       

                    </p>
                </div>
            </div>



            <div class="carousel-item ">
                <div class="carousel-caption  d-md-block">
                    <div class="testi-img">
                        <img src="/images/Spiers-Robin-ROBSPI.jpg" alt="">
                    </div>
                    <h5>Robin Spiers, REALTOR<span class='realtor-r'>®️</span></h5>
                    <p>I joined Real Estate Professionals in 2003, and there’s many reasons why it’s the only Brokerage
                        I’ve ever been associated with. The competitive rates are attractive, especially for Realtors®
                        starting out – you can start with no monthly fees. There’s also a Mentorship Program, providing
                        guidance for those who want to learn from Calgary’s top producing Realtors®. Best of all, the
                        support we receive from our Broker team is second-to-none. I’ve always felt supported, and felt
                        they have our backs. These are just some of the many reasons why I’ve been associated with Real
                        Estate Professionals since 2003.

                    </p>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<section class="our-cta  pt90 pb90 pt60-md pb60-md ">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-xl-6 wow fadeInLeft">
                <div class="cta-style3">
                    <h2 class="cta-title first-task">Take Your First Step In Becoming a Pro at Real Estate Professionals
                        Inc.
                    </h2>
                    <p class="cta-text mb25">
                        Fill in our Realtor® Intake Form to request a confidential meeting with a member of our management
                        staff where we will take you into a deep dive of Real Estate Professionals Inc.’s various
                        Realtor® First driven services and how we position you for success.
                    </p>
                    <a href="{{ route('join-rep') }}#intake-form" id="intake-form" class="ud-btn btn-thm">Register Now
                        <i class="fal fa-arrow-right-long"></i></a>
                </div>
            </div>
            <div class="col-lg-5 col-xl-4 offset-xl-2 d-none d-lg-block wow fadeIn" data-wow-delay="300ms">
                <div class="cta-img">
                    <img src="/images/become-removebg-preview.png" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Chose Us -->

<!-- Our Partners -->
<!-- Explore Apartment -->
<section class="charityPartners" id="section14">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-9 m-auto wow fadeInUp" data-wow-delay="300ms">
                <div class="main-title text-center">
                    <h2 class="title text-capitalize text-white">
                        Realtor®️ Intake form
                    </h2>
                    <!-- <p class="text text-white">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Voluptates corporis maiores labore.
                        </p> -->
                </div>


                <!-- join-rep form  -->
                <div class="card">
                    <div class="card-body p-3 p-md-5">
                        <form class="form-style1" id="form-select">
                            <div class="row row-gap-3">
                                <div class="col-md-6">
                                    <label class="heading-color ff-heading fw600 mb10">First Name<span
                                            style="color: red;">*</span></label>
                                    <input type="text" class="form-control" placeholder="First Name" name="first_name"
                                        id="first_name" />
                                    <span id="first_nameError"></span>
                                </div>
                                <div class="col-md-6">
                                    <label class="heading-color ff-heading fw600 mb10">Last Name<span
                                            style="color: red;">*</span></label>

                                    <input type="text" class="form-control" placeholder="Last Name" name="last_name"
                                        id="last_name" />
                                    <span id="last_nameError"></span>

                                </div>

                                <div class="col-md-12 col-lg-6">
                                    <label class="heading-color ff-heading fw600 mb10">Phone Number
                                        <span style="color: red;">*</span>
                                    </label>

                                    <input type="tel" class="form-control" placeholder="Phone Number" name="phone"
                                        id="phone" />
                                    <span id="phoneError"></span>
                                </div>

                                <div class="col-md-12 col-lg-6">
                                    <label class="heading-color ff-heading fw600 mb10">Email
                                        <span style="color: red;">*</span>
                                    </label>
                                    <input type="email" class="form-control" placeholder="Email" name="email"
                                        id="email" />
                                    <span id="emailError"></span>
                                </div>

                                <div class="col-md-6">
                                    <label class="heading-color ff-heading fw600 mb10">
                                        Are You New To The Industry?
                                        <span style="color: red;">*</span></label>
                                    <div class="form-check d-flex gap-4 align-items-center">
                                        <div class="form-check d-flex align-items-center mb15">
                                            <input class="form-check-input" type="radio" name="joinee" id="yes"
                                                value="1" autocomplete="off">
                                            <label class="form-check-label" for="yes">Yes</label>
                                        </div>
                                        <div class="form-check d-flex  align-items-center mb15">
                                            <input class="form-check-input" type="radio" name="joinee" id="no" value="0"
                                                autocomplete="off">
                                            <label class="form-check-label" for="no">No</label>
                                        </div>

                                    </div>
                                    <div class="error"></div>
                                </div>

                                <div class="col-md-6">
                                    <label class="heading-color ff-heading fw600 mb10">
                                        What Is The Best Way To Contact You?<span style="color: red;">*</span>
                                    </label>

                                    <div class="form-check d-flex gap-4 align-items-center">
                                        <div class="form-check d-flex align-items-center mb15">
                                            <input class="form-check-input" type="radio" name="is_contact" id="yes"
                                                value="email" autocomplete="off" />
                                            <label class="form-check-label" for="yes">Email</label>
                                        </div>
                                        <div class="form-check d-flex align-items-center mb15">
                                            <input class="form-check-input" type="radio" name="is_contact" id="no"
                                                value="phone" autocomplete="off" />
                                            <label class="form-check-label" for="no">Phone</label>
                                        </div>
                                    </div>
                                    <div class="error"></div>
                                </div>

                                <div class="col-md-6">
                                    <label class="heading-color ff-heading fw600 mb10">Years & Months of
                                        Experience</label>
                                    <div class="d-flex gap-2">
                                        <input type="number" class="form-control" placeholder="Years" id="yearsInput"
                                            min="0" max="99" />
                                        <input type="number" class="form-control" placeholder="Months" id="monthsInput"
                                            min="0" max="12" />

                                        <input type="hidden" id="experienceInput" name="experience">

                                    </div>
                                </div>
                                <div class="col-md-6 col-xxl-6">
                                    <label class="heading-color ff-heading fw600 mb10">What Areas Are You Licensed
                                        In?</label>
                                    <select id="choices-multiple-remove-button" placeholder="Select up to 5 tags"
                                        multiple onchange="updateHiddenInput()">

                                        <option value="Residential">Residential</option>
                                        <option value="Commercial">Commercial</option>
                                        <option value="Rural">Rural</option>
                                        <option value="Property Management">Property Management</option>
                                        <option value="Associate Broker">Associate Broker</option>
                                        <option value="Broker">Broker</option>
                                    </select>
                                    <input type="hidden" id="licensed_areas" name="licensed_areas">
                                </div>



                                <div class="col-lg-6">
                                    <label class="heading-color ff-heading fw600 mb10">
                                        What Areas Do You Want To Practice? <span style="color: red;">*</span>
                                    </label>

                                    <!-- Change select to checkboxes -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="practice_areas[]"
                                            id="residential" value="Residential">
                                        <label class="form-check-label" for="residential">Residential</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="practice_areas[]"
                                            id="commercial" value="Commercial">
                                        <label class="form-check-label" for="commercial">Commercial</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="practice_areas[]"
                                            id="rural" value="Rural">
                                        <label class="form-check-label" for="rural">Rural</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="practice_areas[]"
                                            id="property_management" value="Property Management">
                                        <label class="form-check-label" for="property_management">Property
                                            Management</label>
                                    </div>
                                    <div class="error"></div>
                                </div>

                                <div class="col-lg-6">
                                    <label class="heading-color ff-heading fw600 mb10">How Did You Find Real Estate
                                        Professionals Inc.? </label>

                                    <input type="text" class="form-control" name="perceive"
                                        placeholder="How Did You Find Real Estate Professionals Inc.? " />
                                </div>
                                <div class="col-lg-12">
                                    <label class="heading-color ff-heading fw600 mb10">Who Referred You To Real Estate
                                        Professionals Inc.?

                                    </label>
                                    <input type="text" class="form-control" name="reference"
                                        placeholder="Who Referred You To Real Estate Professionals Inc.?" />
                                </div>

                                <div class="col-lg-12">
                                    <label class="heading-color ff-heading fw600 mb10">What About Real Estate
                                        Professionals Inc. Interests You The Most?
                                    </label>
                                    <input type="text" class="form-control" name="about" placeholder=" " />
                                </div>


                                <div class="col-md-6 m-auto mt20">
                                    <button type="submit" class="ud-btn btn-primary w-100"> Submit </button>
                                </div>
                            </div>
                        </form>
                        <!-- join rep End form      -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"></script>
<!-- Include this script in your HTML file -->
<script>
$(document).ready(function() {

    var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
        removeItemButton: true,
        maxItemCount: 5,
        searchResultLimit: 5,
        renderChoiceLimit: 7
    });


});

function scrollToSection(sectionId) {
    const section = document.getElementById(sectionId);
    $('#pills-profile-tab').click()
    if (section) {
        const offset = 300; // Set your desired offset in pixels
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

$(document).ready(function() {
    var header = '{{ env('BACKEND_URL') }}';
var apiUrl = header + '/api/agents/join-rep-form';
    $('#form-select').validate({
        rules: {
            joinee: {
                required: true
            },
            is_contact: {
                required: true
            },
            'practice_areas[]': {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true
            },
            last_name: {
                required: true
            },
            first_name: {
                required: true
            },
            yearsInput: {
                required: true,
                digits: true
            },
            monthsInput: {
                required: true,
                digits: true
            },
            'licensed_areas[]': {
                required: true
            },
            is_contact: {
                required: true
            }
        },
        messages: {
            joinee: "Please select if you are new to the industry.",
            is_contact: "Please select the best way to contact you.",
            'practice_areas[]': "Please select at least one practice area.",
            email: {
                required: "Please enter your email address.",
                email: "Please enter a valid email address."
            },
            phone: "Please enter your phone number.",
            last_name: "Please enter your last name.",
            first_name: "Please enter your first name.",

            'licensed_areas[]': "Please select at least one licensed area.",
            is_contact: "Please select the best way to contact you."
        },
        errorPlacement: function(error, element) {
            if (element.is(":radio")) {
                // For radio inputs, show error within the error div
                error.appendTo(element.closest('.col-md-6').find('.error'));
            } else if (element.is(":checkbox")) {
                // For checkbox inputs, show error within the error div
                error.appendTo(element.closest('.col-lg-6').find('.error'));
            } else {
                // For other inputs, show error after the input element
                error.insertAfter(element);
            }
        },
        submitHandler: function(form) {
            var formData = new FormData(form);
            var practiceAreas = formData.getAll('practice_areas[]').join(', ');
            formData.set('practice_areas', practiceAreas);


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
                        title: 'Success!',
                        text: 'Form submitted successfully!',
                        confirmButtonText: 'Continue to Website'
                    }).then(() => {
                        form.reset();
                    });
                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Failed to submit the form. Please try again later.'
                    });
                });
        }
    });
});


function updateHiddenInput() {
    var selectedValues = [];
    var select = document.getElementById("choices-multiple-remove-button");
    for (var i = 0; i < select.options.length; i++) {
        if (select.options[i].selected) {
            selectedValues.push(select.options[i].value);
        }
    }
    // console.log(selectedValues)
    document.getElementById("licensed_areas").value = selectedValues.join(",");
}


const phoneNumberInput = document.querySelector('input[name="phone"]');

phoneNumberInput.addEventListener('input', function(event) {
    let phoneNumber = this.value.replace(/\D/g, '');

    if (phoneNumber.length > 12) {
        phoneNumber = phoneNumber.substring(0, 12);
    }

    if (phoneNumber.length > 3 && phoneNumber.length <= 6) {
        phoneNumber = '(' + phoneNumber.substring(0, 3) + ') ' + phoneNumber.substring(3);
    } else if (phoneNumber.length > 6 && phoneNumber.length <= 10) {
        phoneNumber = '(' + phoneNumber.substring(0, 3) + ') ' + phoneNumber.substring(3, 6) + '-' +
            phoneNumber.substring(6);
    } else if (phoneNumber.length > 10) {
        phoneNumber = '(' + phoneNumber.substring(0, 3) + ') ' + phoneNumber.substring(3, 6) + '-' +
            phoneNumber.substring(6, 10);
    }

    this.value = phoneNumber;
});






// Function to format years and months
function formatExperienceString(years, months) {
    let experienceString = '';
    if (years > 0) {
        experienceString += years + (years === 1 ? ' year ' : ' years ');
    }
    if (months > 0) {
        experienceString += months + (months === 1 ? ' month' : ' months');
    }
    return experienceString.trim();
}

// Function to update hidden experience input with formatted string
function updateExperience() {
    const years = parseInt(document.getElementById('yearsInput').value) || 0;
    const months = parseInt(document.getElementById('monthsInput').value) || 0;

    // Format the experience string
    const formattedExperience = formatExperienceString(years, months);

    // Update hidden input value with formatted experience string
    document.getElementById('experienceInput').value = formattedExperience;
}

// Event listeners for years and months inputs
document.getElementById('yearsInput').addEventListener('keyup', updateExperience);
document.getElementById('monthsInput').addEventListener('keyup', updateExperience);


document.getElementById('yearsInput').addEventListener('input', function() {
    if (this.value < 0) {
        this.value = 0;
    }
});

document.getElementById('monthsInput').addEventListener('input', function() {
    if (this.value < 0) {
        this.value = 0;
    }
});


document.addEventListener("DOMContentLoaded", function() {
    var firstNameInput = document.querySelector('input[name="first_name"]');
    var lastNameInput = document.querySelector('input[name="last_name"]');
    var phoneInput = document.querySelector('input[name="phone"]');
    var emailInput = document.querySelector('input[name="email"]');

    var lettersOnlyWithSpace = /^[A-Za-z\s]+$/;
    var phonePattern = /^\d{0,10}$/; // Assuming phone number is up to 10 digits
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    function validateInput(input, pattern, maxLength) {
        input.addEventListener("input", function() {
            var value = input.value.trim();
            if (!value.match(pattern) || value.length > maxLength) {
                if (pattern === lettersOnlyWithSpace) {
                    input.value = value.replace(/[^A-Za-z\s]/g, "").substring(0, maxLength);
                } else if (pattern === phonePattern) {
                    input.value = value.replace(/^\d{0,10}/g, "").substring(0, maxLength);
                } else if (pattern === emailPattern) {
                    input.value = value.replace(/^[^\s@]+@[^\s@]+\.[^\s@]/g, "").substring(0,
                        maxLength);
                }
            }
        });
    }


    validateInput(firstNameInput, lettersOnlyWithSpace, 40);
    validateInput(lastNameInput, lettersOnlyWithSpace, 40);
    // validatePhoneInput(phoneInput, phonePattern, 10);
    validateInput(emailInput, emailPattern, 100);
});

var phonePattern = /^\d{0,10}$/;
$(document).on('input', '#phone', function(e) {
    var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
    e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
});
$(document).on('input', '#yearsInput', function(e) {
    var input = event.target;
    var value = input.value.trim();
    if (value.length > 2) {
        input.value = value.slice(0, 2);
    }
});
$(document).on('input', '#monthsInput', function(e) {
    var input = event.target;
    var value = input.value.trim();
    if (value.length > 2) {
        input.value = value.slice(0, 2);
    }
});
</script>
@endsection