<!-- Our Footer -->
<section class="footer-style1 pt60 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row justify-content-between">
                <div class="col-auto">
                        <div class="link-style1 mb-3">
                            <h6 class="text-white mb25">Cities</h6>
                            <ul class="ps-0">
                                <li><a href="/search/calgary">Calgary</a></li>
                                <li><a href="/search/airdrie"> Airdrie</a></li>
                                <li>
                                    <a href="/search/brooks">Brooks</a>
                                </li>
                                <li><a href="/search/carstairs">Carstairs</a></li>
                                <li><a href="/search/chestermere">Chestermere</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="link-style1 mb-3">
                        <h6 class="text-white mb25"> &nbsp;</h6>

                            <ul class="ps-0">
                                <li><a href="/search/cochrane">Cochrane</a></li>
                                <li><a href="/search/high-river"> High River</a></li>
                                <li>
                                    <a href="/search/okotoks"
                                    >Okotoks
                                    </a>
                                </li>
                                <li><a href="/search/strathmore">Strathmore</a></li>
                                <li><a href="/search/olds">Olds</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="link-style1 mb-3">
                            <h6 class="text-white mb25">Quick Links</h6>
                            <ul class="ps-0">
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('why-rep') }}"> Why REP</a></li>
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
            <div class="col-md-6 col-lg-4 offset-lg-2" > 
                <div class="footer-widget mb-4 mb-lg-5">
                    <div class="app-widget">
                        <div class="row mb-4 mb-lg-5 flex-column align-items-end">
                            <div class="col-lg-6">
                                @if( !session()->has('username'))
                                <a class="ud-btn footer-client" data-bs-toggle="modal" href="#exampleModalToggle" role="button" onclick="openmodal()">Client Portal</a>
                                @endif

                            </div>
                            <!--<div class="col-lg-6">-->
                            <!--    <a href="{{route('backtologin')}}" class="ud-btn btn-outline-white w-100"-->
                            <!--    >Realtor® Login</a-->
                            <!--    >-->
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="social-widget text-sm-end">
                        <div class="social-style1">
                            <a class="text-white me-2 fw600 fz15" href="javascript:void(0)"
                            >Follow us</a
                            >
                            <a href="https://www.facebook.com/people/Real-Estate-Professionals-Inc/61557383117347/"
                            ><i class="fab fa-facebook-f list-inline-item"></i
                                ></a>
                          
                            <a href="https://www.instagram.com/repinc.ca/?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw%3D%3D"
                            ><i class="fab fa-instagram list-inline-item"></i
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
                        © Real Estate Professionals Inc. - All rights reserved
                    </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="text-center text-lg-end">
                    <p class="footer-menu ff-heading text-gray">
                        <a class="text-gray" href="{{ route('privacy') }}">Privacy</a> ·
                        <a class="text-gray" href="{{ route('terms') }}">Terms</a> ·
                        <a class="text-gray" href="/sitemap.xml">Sitemap</a>
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
