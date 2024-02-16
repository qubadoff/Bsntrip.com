<header class="header-area style-1">
    <div class="header-main-logo d-lg-block d-none">
        <a href="{{ route("index", ['locale' => app()->getLocale()]) }}"><img alt="image" src="https://burncode.az/assets/img/logo/logo2.png"></a>
    </div>
    <div class="menu-topbar-area">
        <div class="top-bar">
            <p>
                {{ date('M,d,Y') }}
            </p>
            <div class="top-bar-right">
                <div class="language-select">
                    <img src="{{ asset('/') }}assets/images/icon/flag-eng.svg" alt="image"><span>{{__("AZ")}}</span>
                    <ul class="topbar-sublist">
                        <li><img src="{{ asset('/') }}assets/images/icon/flag-germeny.svg" alt="image"><span>EN</span></li>
                        <li><img src="{{ asset('/') }}assets/images/icon/flag-french.svg" alt="image"><span>RU</span></li>
                        <li><img src="{{ asset('/') }}assets/images/icon/flag-bangla.svg" alt="image"><span>TR</span></li>
                    </ul>
                </div>
                <div class="social-area">
                    <ul>
                        <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                        <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                        <li><a href="https://www.linkedin.com/"><i class="bx bxl-linkedin"></i></a></li>
                        <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="menu-area">
            <div class="header-logo">
                <a href="{{ route("index", ['locale' => app()->getLocale()]) }}"><img alt="image" class="img-fluid" src="https://burncode.az/assets/img/logo/logo2.png"></a>
            </div>
            <div class="main-menu">
                <div class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center">
                    <div class="mobile-logo-wrap">
                        <a href="{{ route("index", ['locale' => app()->getLocale()]) }}"><img alt="image" src="https://burncode.az/assets/img/logo/logo2.png"></a>
                    </div>
                    <div class="menu-close-btn">
                        <i class="bi bi-x-lg"></i>
                    </div>
                </div>
                <ul class="menu-list">
                    <li><a href="{{ route("index", ['locale' => app()->getLocale()]) }}">{{__("Home")}}</a></li>

                    <li class="menu-item-has-children">
                        <a href="#" class="drop-down">Find Jobs</a><i class="bi bi-plus dropdown-icon"></i>
                        <ul class="sub-menu">
                            <li><a href="category.html">Job Category</a></li>
                            <li><a href="job-listing1.html">Job Listing 01</a></li>
                            <li><a href="job-listing2.html">Job Listing 02</a></li>
                            <li><a href="job-details.html">Job Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#" class="drop-down">Pages</a><i class="bi bi-plus dropdown-icon"></i>
                        <ul class="sub-menu">
                            <li><a href="dashboard.html">Candidate Dashboard</a></li>
                            <li><a href="job-post.html">Post A Jobs</a></li>
                            <li><a href="pricing-plan.html">Pricing Plan</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="error.html">Error</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Company</a><i class="bi bi-plus dropdown-icon"></i>
                        <ul class="sub-menu">
                            <li><a href="company-listing1.html">Company Listing 01</a></li>
                            <li><a href="company-listing2.html">Company Listing 02</a></li>
                            <li><a href="company-details.html">Company Details</a></li>
                            <li><a href="company-dashboard.html">Company Dashboard</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ route("contact", ['locale' => app()->getLocale()]) }}">{{__("Our Blog")}}</a></li>

                    <li><a href="{{ route("contact", ['locale' => app()->getLocale()]) }}">{{__("Contact")}}</a></li>
                </ul>
                <div class="for-mobile-menu d-lg-none d-block">
                    @if(!auth()->check())
                        <div class="sign-in-btn mb-25">
                            <a class="primry-btn-1 lg-btn" href="{{ route("auth.login", ['locale' => app()->getLocale()]) }}">
                                {{__("Sign in")}}</a>
                        </div>
                        <div class="post-job-btn mb-30">
                            <a class="primry-btn-2 lg-btn" href="{{ route("auth.register", ['locale' => app()->getLocale()]) }}">
                                {{__("Sign up")}}
                            </a>
                        </div>
                    @else
                        <div class="sign-in-btn mb-25">
                            <a class="primry-btn-1 lg-btn" href="{{ route("dashboard.main", ['locale' => app()->getLocale()]) }}">
                                {{__("Dashboard")}}</a>
                        </div>
                        <div class="post-job-btn mb-30">
                            <a class="primry-btn-2 lg-btn" href="{{ route("business.index", ['locale' => app()->getLocale()]) }}">
                                {{__("Add Business")}}
                            </a>
                        </div>
                    @endif
                    <div class="social-area">
                        <ul>
                            <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                            <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/"><i class="bx bxl-linkedin"></i></a></li>
                            <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="nav-right d-flex jsutify-content-end align-items-center">
                <ul>
                    @if(!auth()->check())
                        <li class="d-md-flex d-none">
                            <div class="sign-in-btn">
                                <a class="primry-btn-1 lg-btn" href="{{ route("auth.login", ['locale' => app()->getLocale()]) }}">
                                    {{__("Sign in")}}
                                </a>
                            </div>
                        </li>
                        <li class="d-md-flex d-none">
                            <div class="post-job-btn">
                                <a class="primry-btn-2 lg-btn" href="{{ route("auth.register", ['locale' => app()->getLocale()]) }}">
                                    {{__("Sign up")}}
                                </a>
                            </div>
                        </li>
                    @else
                        <li>
                            <div class="btn-group dropdown">
                                <div class="notifications-area dropdown-toggle" role="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="notifacation-icon">
                                        <svg width="16" height="18" viewBox="0 0 16 18" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.37408 0.0465755C8.67279 0.120485 8.89683 0.247189 9.12442 0.472435C9.4907 0.834944 9.60093 1.15874 9.60093 1.89079V2.33777L9.87831 2.43983C11.5497 3.05223 12.8263 4.40723 13.3028 6.08603C13.47 6.66323 13.4806 6.81809 13.5126 8.47929C13.5446 10.2109 13.5624 10.4326 13.7651 11.2597C13.9856 12.1501 14.3874 13.0546 14.9102 13.836C15.1378 14.1773 15.344 14.4378 15.8739 15.0431C16.0872 15.2895 16.009 15.6872 15.7174 15.835C15.5823 15.9019 15.5147 15.9054 13.093 15.9054H10.6038L10.5824 16.0251C10.49 16.5143 10.0561 17.1478 9.56537 17.5068C9.34845 17.6652 8.95728 17.8517 8.67635 17.9327C8.38831 18.0136 7.68776 18.0242 7.39616 17.9502C6.50002 17.7285 5.7568 17.0528 5.48654 16.2187L5.38696 15.9054H2.90481C0.490226 15.9054 0.419104 15.9019 0.283973 15.835C0.191514 15.7893 0.116836 15.7154 0.0706072 15.6239C-0.0645256 15.3634 -0.0111828 15.1769 0.280416 14.8672C1.18722 13.9063 1.90911 12.5795 2.23627 11.2597C2.43896 10.4432 2.4603 10.2144 2.48875 8.47929C2.52075 6.81457 2.53142 6.66675 2.69856 6.08251C3.17152 4.41075 4.50861 2.99943 6.15864 2.42224L6.40045 2.33777V1.89079C6.40045 1.16226 6.51069 0.834944 6.88052 0.468916C7.27881 0.0712128 7.83711 -0.0871639 8.37408 0.0465755ZM7.75177 1.12354C7.5384 1.23265 7.46728 1.39806 7.46728 1.79929V2.1266H8.00069H8.53411V1.79225C8.53055 1.39806 8.47721 1.26432 8.26384 1.13762C8.09315 1.03555 7.93668 1.03204 7.75177 1.12354ZM7.3606 3.21764C6.84852 3.29507 6.53203 3.39362 6.06262 3.61887C4.80732 4.22774 3.95742 5.30822 3.64448 6.68435C3.59469 6.89903 3.57691 7.25098 3.55558 8.54968C3.53068 9.88708 3.51646 10.225 3.45601 10.6086C3.22842 12.0375 2.74834 13.2799 1.98023 14.4167C1.84154 14.6243 1.71708 14.8073 1.71352 14.8214C1.70641 14.839 4.53706 14.8496 8.00069 14.8496C11.4643 14.8496 14.295 14.839 14.2879 14.8214C14.2808 14.8073 14.1598 14.6243 14.0212 14.4167C13.2566 13.2834 12.7694 12.0234 12.5454 10.6121C12.4849 10.2285 12.4707 9.88357 12.4458 8.54968C12.4245 7.25098 12.4067 6.89903 12.3569 6.68435C12.1578 5.80447 11.7595 5.08297 11.1336 4.46354C10.7389 4.0764 10.3762 3.82299 9.8712 3.58367C9.09241 3.21764 8.20695 3.08742 7.3606 3.21764ZM6.50713 15.9265C6.50713 16.0145 6.76673 16.3982 6.91609 16.5319C7.5384 17.095 8.44876 17.1021 9.07108 16.5495C9.23821 16.3982 9.43024 16.1307 9.47647 15.9829L9.49781 15.9054H8.00425C7.17924 15.9054 6.50713 15.916 6.50713 15.9265Z" />
                                            <path d="M13.5626 1.8943C13.6764 1.97173 14.1102 2.4363 14.3485 2.7425C15.2411 3.88986 15.8314 5.3786 15.963 6.82511C16.0199 7.43751 16.0127 7.64868 15.931 7.81057C15.8492 7.96895 15.6465 8.09213 15.4687 8.09213C15.1557 8.09213 14.9352 7.83169 14.9352 7.46214C14.9352 7.14891 14.8712 6.56819 14.7894 6.17401C14.5654 5.07593 13.9787 3.90393 13.2425 3.08389C12.7874 2.5806 12.766 2.54541 12.766 2.34128C12.766 2.14067 12.8407 1.99989 13.0007 1.8943C13.1394 1.8028 13.4239 1.80631 13.5626 1.8943Z" />
                                            <path d="M3.00065 1.8943C3.16067 1.99989 3.23535 2.14067 3.23535 2.3448C3.23535 2.54541 3.22824 2.55597 2.74461 3.10149C2.01206 3.92505 1.43241 5.08648 1.21194 6.17401C1.13014 6.56819 1.06614 7.14891 1.06614 7.46214C1.06614 7.83169 0.845657 8.09213 0.532721 8.09213C0.354917 8.09213 0.152219 7.96895 0.0704293 7.81057C-0.0113609 7.6522 -0.0184731 7.43399 0.0348682 6.84271C0.173556 5.36452 0.781648 3.84058 1.6849 2.70731C1.96583 2.35536 2.3001 1.99285 2.42456 1.90486C2.57392 1.8028 2.85129 1.79928 3.00065 1.8943Z" />
                                        </svg>
                                    </div>
                                    <span>5</span>
                                </div>
                                <div class="notifacion-card dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <h6 class="title">5 Notifications</h6>
                                    <ul>
                                        <li>
                                            <div class="icon">
                                                <img src="assets/images/bg/company-logo/notifacion-1.png" alt>
                                            </div>
                                            <div class="content">
                                                <h6><a href="#">Your application has accepted in 5 vacancies.</a></h6>
                                                <span><img src="assets/images/icon/clock-1.svg" alt> 10 min ago</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="assets/images/bg/company-logo/notifacion-2.png" alt>
                                            </div>
                                            <div class="content">
                                                <h6><a href="#">Your application has accepted in 5 vacancies.</a></h6>
                                                <span><img src="assets/images/icon/clock-1.svg" alt> 10 min ago</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="assets/images/bg/company-logo/notifacion-3.png" alt>
                                            </div>
                                            <div class="content">
                                                <h6><a href="#">Your application has accepted in 5 vacancies.</a></h6>
                                                <span><img src="assets/images/icon/clock-1.svg" alt> 10 min ago</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="view-all">
                                        <a href="#">See All Notifications</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="d-md-flex d-none">
                            <div class="post-job-btn">
                                <a class="primry-btn-2 lg-btn" href="{{ route("business.index", ['locale' => app()->getLocale()]) }}">
                                    {{__("Add Business")}}
                                </a>
                            </div>
                        </li>
                        <li class="d-md-flex d-none">
                            <div class="sign-in-btn">
                                <a class="primry-btn-1 lg-btn" href="{{ route("dashboard.main", ['locale' => app()->getLocale()]) }}">
                                    {{__("Dashboard")}}
                                </a>
                            </div>
                        </li>
                    @endif
                </ul>
                <div class="sidebar-button mobile-menu-btn ">
                    <i class="bi bi-list"></i>
                </div>
            </div>
        </div>
    </div>
</header>
