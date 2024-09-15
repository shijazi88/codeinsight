@extends('layout.layout3')

@php
    $headtitle = 'CodeInsights';
    $bodyClass = 'index-four';
@endphp

@section('content')
    <!-- ..:: header-top area ::.. -->
    <div class="header-top-four">
        <div class="container-h-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-top-four-area-wrapper">
                        <div class="social-area">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-behance"></i></a>
                            <a href="#"><i class="fa-brands fa-discord"></i></a>
                        </div>
                        <p class="mid-disc">
                            <a href="#">Join us</a> as we make chatbots truly conversational
                        </p>
                        <div class="end-part">
                            <a href="#">Privacy Policy</a>
                            <a href="{{ route('contact') }}">Contact</a>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>EN(US)</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: header-top area end ::.. -->

    <!-- ..:: rts banner area start ::.. -->
    <div class="rts-sectio-gap banner-four-bg rts-section-gapBottom">
        <div class="header-main-wrapper four-header header--sticky">
            <div class="container-h-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-4-header-wrapper">
                            <a href="{{ route('index') }}" class="logo">
                                <img src="{{ asset('assets/images/logo/06.svg') }}" alt="logo" loading="lazy">
                            </a>
                            <!-- ..:: nav ::.. -->
                            <div class="nav-area-main d-xl-block d-lg-block d-md-none d-sm-none d-none">
                                <nav>
                                    <ul>
                                        <li class="has-dropdown">
                                            <a class="links-main" href="#">Home</a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('index') }}">Content Writing 01</a></li>
                                                <li><a href="{{ route('index2') }}">Content Writing 02</a></li>
                                                <li><a href="{{ route('index3') }}">Content Writing 03</a></li>
                                                <li><a href="{{ route('index4') }}">Ai Chat Bot</a></li>
                                                <li><a href="{{ route('index5') }}">Voice Generator</a></li>
                                                <li><a href="{{ route('index6') }}">Image Generator <span>New</span></a>
                                                </li>
                                                <li><a href="{{ route('index7') }}">Photo Stock <span>New</span></a></li>
                                            </ul>
                                        </li>
                                        <li><a class="links-main" href="{{ route('usecase') }}">Use Cases</a></li>
                                        <li class="has-dropdown mega-menu">
                                            <a class="links-main" href="#">Pages</a>
                                            <div class="rts-mega-menu">
                                                <div class="wrapper">
                                                    <div class="row g-0">
                                                        <div class="col-lg-3">
                                                            <ul class="mega-menu-item">
                                                                <li>
                                                                    <a href="{{ route('about') }}">
                                                                        <img src="{{ asset('assets/images/mega-menu/01.svg') }}"
                                                                            alt="icon">
                                                                        <div class="info">
                                                                            <p>About OpenUp</p>
                                                                            <span>Get know about openup </span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ route('usecase') }}">
                                                                        <img src="{{ asset('assets/images/mega-menu/02.svg') }}"
                                                                            alt="icon">
                                                                        <div class="info">
                                                                            <p>Use Cases</p>
                                                                            <span>provide detailed explan</span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ route('pricing') }}">
                                                                        <img src="{{ asset('assets/images/mega-menu/03.svg') }}"
                                                                            alt="icon">
                                                                        <div class="info">
                                                                            <p>Pricing</p>
                                                                            <span>Openup provide pro price</span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ route('login') }}">
                                                                        <img src="{{ asset('assets/images/mega-menu/04.svg') }}"
                                                                            alt="icon">
                                                                        <div class="info">
                                                                            <p>Login</p>
                                                                            <span>Create content by ou</span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul class="mega-menu-item">
                                                                <li>
                                                                    <a href="{{ route('blog') }}">
                                                                        <img src="{{ asset('assets/images/mega-menu/05.svg') }}"
                                                                            alt="icon">
                                                                        <div class="info">
                                                                            <p>Blog</p>
                                                                            <span>Read openup artical</span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ route('casedetails') }}">
                                                                        <img src="{{ asset('assets/images/mega-menu/06.svg') }}"
                                                                            alt="icon">
                                                                        <div class="info">
                                                                            <p>Use Cases Details</p>
                                                                            <span>provide detailed explan</span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ route('pricingtwo') }}">
                                                                        <img src="{{ asset('assets/images/mega-menu/07.svg') }}"
                                                                            alt="icon">
                                                                        <div class="info">
                                                                            <p>Pricing 2</p>
                                                                            <span>Openup provide pro price</span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ route('registration') }}">
                                                                        <img src="{{ asset('assets/images/mega-menu/08.svg') }}"
                                                                            alt="icon">
                                                                        <div class="info">
                                                                            <p>Register</p>
                                                                            <span>Make your account</span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul class="mega-menu-item">
                                                                <li>
                                                                    <a href="{{ route('blogdetails') }}">
                                                                        <img src="{{ asset('assets/images/mega-menu/09.svg') }}"
                                                                            alt="icon">
                                                                        <div class="info">
                                                                            <p>Blog Details</p>
                                                                            <span>Read openup artical</span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ route('usecase2') }}">
                                                                        <img src="{{ asset('assets/images/mega-menu/10.svg') }}"
                                                                            alt="icon">
                                                                        <div class="info">
                                                                            <p>Use Cases 2</p>
                                                                            <span>provide detailed explan</span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ route('pricingthree') }}">
                                                                        <img src="{{ asset('assets/images/mega-menu/11.svg') }}"
                                                                            alt="icon">
                                                                        <div class="info">
                                                                            <p>Pricing 3</p>
                                                                            <span>Openup provide pro price</span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ route('reset') }}">
                                                                        <img src="{{ asset('assets/images/mega-menu/12.svg') }}"
                                                                            alt="icon">
                                                                        <div class="info">
                                                                            <p>Reset</p>
                                                                            <span>Rest your possword</span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul class="mega-menu-item">
                                                                <li>
                                                                    <a href="{{ route('contact') }}">
                                                                        <img src="{{ asset('assets/images/mega-menu/13.svg') }}"
                                                                            alt="icon">
                                                                        <div class="info">
                                                                            <p>Contact</p>
                                                                            <span>Contact with openup</span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ route('casedetails2') }}">
                                                                        <img src="{{ asset('assets/images/mega-menu/14.svg') }}"
                                                                            alt="icon">
                                                                        <div class="info">
                                                                            <p>Use Cases Details 2</p>
                                                                            <span>provide detailed explan</span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ route('faq') }}">
                                                                        <img src="{{ asset('assets/images/mega-menu/15.svg') }}"
                                                                            alt="icon">
                                                                        <div class="info">
                                                                            <p>FAQ</p>
                                                                            <span>Do you know openup</span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ route('notfound') }}">
                                                                        <img src="{{ asset('assets/images/mega-menu/16.svg') }}"
                                                                            alt="icon">
                                                                        <div class="info">
                                                                            <p>Error</p>
                                                                            <span>Back to home</span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </li>
                                        <li><a class="links-main" href="{{ route('feature') }}">Feature</a></li>
                                        <li class="has-dropdown">
                                            <a class="links-main" href="#">Shop</a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('shopdetails') }}">Product Details</a></li>
                                                <li><a href="{{ route('cart') }}">Cart</a></li>
                                                <li><a href="{{ route('checkout') }}">Checkout</a></li>
                                                <li><a href="{{ route('login') }}">My Account</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="links-main" href="{{ route('contact') }}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- ..:: nav end ::.. -->
                            <div class="button-area">
                                <a href="{{ route('login') }}" class="rts-btn btn-lonly mr--30">Sign in</a>
                                <a href="{{ route('about') }}" class="rts-btn btn-blur">Get Started</a>
                            </div>
                            <div class="menu-btn d-xl-none d-lg-none d-md-block d-sm-block" id="menu-btn">
                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect y="14" width="20" height="2" fill="#1F1F25"></rect>
                                    <rect y="7" width="20" height="2" fill="#1F1F25"></rect>
                                    <rect width="20" height="2" fill="#1F1F25"></rect>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt--80 pt_md--60 pt_sm--50">
            <div class="row align-items-start">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-xl-1 order-lg-1 order-md-2 order-sm-2 order-2">
                    <div class="banner-four-content mt--100 mt_md--50 mt_sm--50">
                        <h1 class="title">
                            Make your <br>
                            automated replies <br>
                            conversational
                            <span class="right-tag">Ai Chatbot</span>
                        </h1>
                        <p class="disc">
                            An all-in-one platform to build and launch conversational <br>
                            chatbots without coding so your support team can focus <br>
                            on complex inquiries.
                        </p>
                        <div class="button-area-main">
                            <a href="{{ route('about') }}" class="rts-btn btn-primary">Get Started</a>
                            <a class="btn-only" href="#">Book a Demo <i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div
                    class="col-lg-6 col-md-12 col-sm-12 col-12 order-xl-2 order-lg-2 order-md-1 order-sm-1 order-1 mt--20">
                    <div class="thumbnail-banner-right">
                        <img src="{{ asset('assets/images/banner/05.png') }}" alt="banenr" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: rts banner area end ::.. -->

    <!-- ..:: rts about-area start ::.. -->
    <div class="rts-about-four rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-inner-main-four">
                        <h2 class="title">
                            Start conversations, win <br>
                            loyal customers
                        </h2>
                        <p class="disc">
                            Chat with customers. Solve their problems in real time. Offer <br> custom discounts based on
                            browsing history. And make product <br> recommendations based on their behavior.
                        </p>
                        <div class="check-main-wrapper">
                            <!-- ..:: soingle check ::.. -->
                            <div class="single-check">
                                <i class="fa-regular fa-check"></i>
                                <p>Automate up to 47%</p>
                            </div>
                            <!-- ..:: soingle check end ::.. -->
                            <!-- ..:: soingle check ::.. -->
                            <div class="single-check">
                                <i class="fa-regular fa-check"></i>
                                <p>Turn visitors into paying customers</p>
                            </div>
                            <!-- ..:: soingle check end ::.. -->
                            <!-- ..:: soingle check ::.. -->
                            <div class="single-check">
                                <i class="fa-regular fa-check"></i>
                                <p>Supercharge your customer service team</p>
                            </div>
                            <!-- ..:: soingle check end ::.. -->
                        </div>
                        <a href="{{ route('about') }}" class="rts-btn btn-primary">Try Now</a>
                    </div>
                </div>
                <div class="col-lg-6 mt_sm--50">
                    <div class="thumbnail-main">
                        <img src="{{ asset('assets/images/about/03.png') }}" alt="thumbnail" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: rts about-area end ::.. -->

    <!-- ..:: rts sservice area start ::.. -->
    <div class="rts-service-aarea-four rts-section-gap bg-service-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-main-center-4">
                        <h2 class="title">
                            Keep conversations going <br>
                            across channels
                        </h2>
                        <p class="disc">
                            Customers want to connect with you using their favorite channels <br>
                            Integrate Openup with multiple platforms to make sure.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20">
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <!-- ..:: ingle service area start ::.. -->
                    <div class="single-service-area-4">
                        <div class="icon">
                            <svg width="40" height="36" viewBox="0 0 40 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0 5.5C0 2.76562 2.1875 0.5 5 0.5H35C37.7344 0.5 40 2.76562 40 5.5V30.5C40 33.3125 37.7344 35.5 35 35.5H5C2.1875 35.5 0 33.3125 0 30.5V5.5ZM7.5 10.5C8.82812 10.5 10 9.40625 10 8C10 6.67188 8.82812 5.5 7.5 5.5C6.09375 5.5 5 6.67188 5 8C5 9.40625 6.09375 10.5 7.5 10.5ZM35 8C35 6.98438 34.1406 6.125 33.125 6.125H14.375C13.2812 6.125 12.5 6.98438 12.5 8C12.5 9.09375 13.2812 9.875 14.375 9.875H33.125C34.1406 9.875 35 9.09375 35 8Z"
                                    fill="#3F3EED" />
                            </svg>
                        </div>
                        <h5 class="title">Website</h5>
                        <p class="disc">
                            Reach out to visitors proactively <br>
                            to boost website engagement.
                        </p>
                        <a href="#">More Details <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <!-- ..:: ingle service area end ::.. -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <!-- ..:: ingle service area start ::.. -->
                    <div class="single-service-area-4">
                        <div class="icon">
                            <svg width="41" height="40" viewBox="0 0 41 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M35.9219 0C38.7344 0 40.9219 2.26562 40.9219 5V27.3438C40.9219 30 38.6562 32.2656 35.9219 32.2656H24.6719L14.9062 39.6094C14.2812 40 13.4219 39.6094 13.4219 38.8281V32.3438H5.92188C3.10938 32.3438 0.921875 30.1562 0.921875 27.4219V5C0.921875 2.26562 3.10938 0 5.92188 0H35.9219ZM10.9219 18.75C12.3281 18.75 13.4219 17.5781 13.4219 16.25C13.4219 15 12.25 13.8281 10.9219 13.8281C9.51562 13.8281 8.42188 15 8.42188 16.25C8.42188 17.5781 9.51562 18.75 10.9219 18.75ZM20.9219 18.75C22.3281 18.75 23.4219 17.5781 23.4219 16.25C23.4219 15 22.25 13.8281 20.9219 13.8281C19.5156 13.8281 18.4219 15 18.4219 16.25C18.4219 17.5781 19.5156 18.75 20.9219 18.75ZM30.9219 18.75C32.3281 18.75 33.4219 17.5781 33.4219 16.25C33.4219 15 32.25 13.8281 30.9219 13.8281C29.5156 13.8281 28.4219 15 28.4219 16.25C28.4219 17.5781 29.5156 18.75 30.9219 18.75Z"
                                    fill="#3F3EED" />
                            </svg>
                        </div>
                        <h5 class="title">LiveChat</h5>
                        <p class="disc">
                            Reach out to visitors proactively <br>
                            to boost website engagement.
                        </p>
                        <a href="#">More Details <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <!-- ..:: ingle service area end ::.. -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <!-- ..:: ingle service area start ::.. -->
                    <div class="single-service-area-4">
                        <div class="icon">
                            <svg width="40" height="41" viewBox="0 0 40 41" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20 0.625C30.9375 0.625 39.375 8.67188 39.375 19.4531C39.375 33.125 26.3281 40.7812 14.375 37.5C13.6719 37.3438 13.5938 37.5 9.53125 39.2969C8.51562 39.6875 7.34375 38.9844 7.34375 37.8906C7.1875 34.2969 7.34375 33.9844 6.71875 33.3594C2.89062 30 0.625 25.0781 0.625 19.4531C0.625 8.67188 9.0625 0.625 20 0.625ZM31.6406 15.1562C32.1875 14.2969 31.1719 13.2812 30.3125 13.9062L24.2188 18.5156C23.75 18.8281 23.2031 18.8281 22.8125 18.5156L18.2812 15.1562C16.875 14.1406 14.9219 14.4531 14.0625 15.9375L8.35938 24.9219C7.8125 25.7812 8.82812 26.7969 9.6875 26.1719L15.7812 21.5625C16.25 21.25 16.7969 21.25 17.1875 21.5625L21.7188 24.9219C23.125 25.9375 25.0781 25.625 25.9375 24.1406L31.6406 15.1562Z"
                                    fill="#3F3EED" />
                            </svg>
                        </div>
                        <h5 class="title">Messenger</h5>
                        <p class="disc">
                            Reach out to visitors proactively <br>
                            to boost website engagement.
                        </p>
                        <a href="#">More Details <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <!-- ..:: ingle service area end ::.. -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <!-- ..:: ingle service area start ::.. -->
                    <div class="single-service-area-4">
                        <div class="icon">
                            <svg width="35" height="36" viewBox="0 0 35 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.34375 22.6875C7.34375 24.6406 5.625 26.3594 3.67188 26.3594C1.64062 26.3594 0 24.6406 0 22.6875C0 20.6562 1.64062 19.0156 3.67188 19.0156H7.34375V22.6875ZM9.14062 22.6875C9.14062 20.6562 10.8594 19.0156 12.8125 19.0156C14.8438 19.0156 16.4844 20.6562 16.4844 22.6875V31.8281C16.4844 33.8594 14.8438 35.5 12.8125 35.5C10.8594 35.5 9.14062 33.8594 9.14062 31.8281V22.6875ZM12.8125 7.92188C10.8594 7.92188 9.14062 6.20312 9.14062 4.25C9.14062 2.21875 10.8594 0.5 12.8125 0.5C14.8438 0.5 16.4844 2.21875 16.4844 4.25V7.92188H12.8125ZM12.8125 9.71875C14.8438 9.71875 16.4844 11.3594 16.4844 13.3906C16.4844 15.4219 14.8438 17.0625 12.8125 17.0625H3.67188C1.64062 17.0625 0 15.4219 0 13.3906C0 11.3594 1.64062 9.71875 3.67188 9.71875H12.8125ZM27.5781 13.3906C27.5781 11.3594 29.2969 9.71875 31.25 9.71875C33.2812 9.71875 35 11.3594 35 13.3906C35 15.4219 33.2812 17.0625 31.25 17.0625H27.5781V13.3906ZM25.7812 13.3906C25.7812 15.4219 24.1406 17.0625 22.1094 17.0625C20.0781 17.0625 18.4375 15.4219 18.4375 13.3906V4.25C18.4375 2.21875 20.0781 0.5 22.1094 0.5C24.1406 0.5 25.7812 2.21875 25.7812 4.25V13.3906ZM22.1094 28.1562C24.1406 28.1562 25.7812 29.875 25.7812 31.8281C25.7812 33.8594 24.1406 35.5 22.1094 35.5C20.0781 35.5 18.4375 33.8594 18.4375 31.8281V28.1562H22.1094ZM22.1094 26.3594C20.0781 26.3594 18.4375 24.6406 18.4375 22.6875C18.4375 20.6562 20.0781 19.0156 22.1094 19.0156H31.25C33.2812 19.0156 35 20.6562 35 22.6875C35 24.6406 33.2812 26.3594 31.25 26.3594H22.1094Z"
                                    fill="#3F3EED" />
                            </svg>
                        </div>
                        <h5 class="title">Slack</h5>
                        <p class="disc">
                            Reach out to visitors proactively <br>
                            to boost website engagement.
                        </p>
                        <a href="#">More Details <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <!-- ..:: ingle service area end ::.. -->
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: rts sservice area end ::.. -->

    <!-- ..:: rts core feature area start ::.. -->
    <div class="rts-core-feature-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-main-center-4">
                        <h2 class="title">
                            What’s included: core features
                        </h2>
                        <p class="disc">
                            Adjust the chat window design to fit your brand and style.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt--50">
                <div class="col-xl-3 col-lg-6">
                    <div class="left-area-core-feature-image">
                        <img src="{{ asset('assets/images/case/09.png') }}" alt="case" loading="lazy">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="d-flex align-items-start">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <div class="thumbnail-core-feature">
                                    <img src="{{ asset('assets/images/case/10.png') }}" alt="case-thumbnail"
                                        loading="lazy">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <div class="thumbnail-core-feature">
                                    <img src="{{ asset('assets/images/case/11.svg') }}" alt="case-thumbnail"
                                        loading="lazy">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                                <div class="thumbnail-core-feature">
                                    <img src="{{ asset('assets/images/case/12.svg') }}" alt="case-thumbnail"
                                        loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-12 mt_md--30 mt_sm--30">
                    <div class="nav feature-nav-btn flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <div class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-home" role="tab" aria-controls="v-pills-home"
                            aria-selected="true">
                            <!-- ..:: single tabs button feature ::.. -->
                            <div class="single-core-feature">
                                <h6 class="title">Welcome screen</h6>
                                <p class="disc">Say "Hi" and get the Toking <br>
                                    started in a creative way.</p>
                            </div>
                            <!-- ..:: single tabs button feature end ::.. -->
                        </div>
                        <div class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                            aria-selected="false">
                            <!-- ..:: single tabs button feature ::.. -->
                            <div class="single-core-feature">
                                <h6 class="title">One-click management</h6>
                                <p class="disc">Say "Hi" and get the Toking <br>
                                    started in a creative way.</p>
                            </div>
                            <!-- ..:: single tabs button feature end ::.. -->
                        </div>
                        <div class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                            aria-selected="false">
                            <!-- ..:: single tabs button feature ::.. -->
                            <div class="single-core-feature">
                                <h6 class="title">Custom greetings</h6>
                                <p class="disc">Say "Hi" and get the Toking <br>
                                    started in a creative way.</p>
                            </div>
                            <!-- ..:: single tabs button feature end ::.. -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: rts core feature area end ::.. -->

    <!-- ..:: customers review area start ::.. -->
    <div class="rts-tstimonials-area rts-section-gap bg-service-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-main-center-4">
                        <h2 class="title">
                            See why 500,000+ professionals <br>
                            like you have chosen OpenUp
                        </h2>
                        <p class="disc">
                            Top-rated on Trustpilot, G2, and AppSumo
                        </p>
                    </div>
                </div>
            </div>
            <div class="rwo">
                <div class="col-lg-12">

                </div>
            </div>
        </div>
        <div class="container-full mt--50">
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper-testimonials-4">
                        <div class="swiper mySwiper-t4">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- ..:: single swiepr start ::.. -->
                                    <div class="single-team-area">
                                        <img src="{{ asset('assets/images/team/brand/quote.png') }}" alt=""
                                            class="quote" loading="lazy">
                                        <div class="star">
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                        </div>
                                        <p class="disc">
                                            I have used some AI writing tools liked Rytr, Peppertype, and Jasper but I found
                                            Writesonic to be the best for writing complete blog posts.
                                        </p>
                                        <div class="authore-area">
                                            <div class="author">
                                                <img src="{{ asset('assets/images/team/13.png') }}" alt="team"
                                                    loading="lazy">
                                                <div class="info">
                                                    <p>Samuel</p>
                                                    <span>Blogger</span>
                                                </div>
                                            </div>
                                            <img src="{{ asset('assets/images/team/brand/01.png') }}" alt=""
                                                loading="lazy">
                                        </div>
                                    </div>
                                    <!-- ..:: single swiepr end ::.. -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- ..:: single swiepr start ::.. -->
                                    <div class="single-team-area">
                                        <img src="{{ asset('assets/images/team/brand/quote.png') }}" alt=""
                                            class="quote" loading="lazy">
                                        <div class="star">
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                        </div>
                                        <p class="disc">
                                            I have used some AI writing tools liked Rytr, Peppertype, and Jasper but I found
                                            Writesonic to be the best for writing complete blog posts.
                                        </p>
                                        <div class="authore-area">
                                            <div class="author">
                                                <img src="{{ asset('assets/images/team/16.png') }}" alt="team"
                                                    loading="lazy">
                                                <div class="info">
                                                    <p>Samuel</p>
                                                    <span>Blogger</span>
                                                </div>
                                            </div>
                                            <img src="{{ asset('assets/images/team/brand/01.png') }}" alt="image"
                                                loading="lazy">
                                        </div>
                                    </div>
                                    <!-- ..:: single swiepr end ::.. -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- ..:: single swiepr start ::.. -->
                                    <div class="single-team-area">
                                        <img src="{{ asset('assets/images/team/brand/quote.png') }}" alt="images"
                                            class="quote" loading="lazy">
                                        <div class="star">
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                        </div>
                                        <p class="disc">
                                            I have used some AI writing tools liked Rytr, Peppertype, and Jasper but I found
                                            Writesonic to be the best for writing complete blog posts.
                                        </p>
                                        <div class="authore-area">
                                            <div class="author">
                                                <img src="{{ asset('assets/images/team/11.png') }}" alt="team"
                                                    loading="lazy">
                                                <div class="info">
                                                    <p>Samuel</p>
                                                    <span>Blogger</span>
                                                </div>
                                            </div>
                                            <img src="{{ asset('assets/images/team/brand/01.png') }}" alt="team"
                                                loading="lazy">
                                        </div>
                                    </div>
                                    <!-- ..:: single swiepr end ::.. -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- ..:: single swiepr start ::.. -->
                                    <div class="single-team-area">
                                        <img src="{{ asset('assets/images/team/brand/quote.png') }}" alt="image"
                                            class="quote" loading="lazy">
                                        <div class="star">
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                        </div>
                                        <p class="disc">
                                            I have used some AI writing tools liked Rytr, Peppertype, and Jasper but I found
                                            Writesonic to be the best for writing complete blog posts.
                                        </p>
                                        <div class="authore-area">
                                            <div class="author">
                                                <img src="{{ asset('assets/images/team/12.png') }}" alt="team"
                                                    loading="lazy">
                                                <div class="info">
                                                    <p>Samuel</p>
                                                    <span>Blogger</span>
                                                </div>
                                            </div>
                                            <img src="{{ asset('assets/images/team/brand/01.png') }}" alt="image"
                                                loading="lazy">
                                        </div>
                                    </div>
                                    <!-- ..:: single swiepr end ::.. -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- ..:: single swiepr start ::.. -->
                                    <div class="single-team-area">
                                        <img src="{{ asset('assets/images/team/brand/quote.png') }}" alt="image"
                                            class="quote">
                                        <div class="star">
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                        </div>
                                        <p class="disc">
                                            I have used some AI writing tools liked Rytr, Peppertype, and Jasper but I found
                                            Writesonic to be the best for writing complete blog posts.
                                        </p>
                                        <div class="authore-area">
                                            <div class="author">
                                                <img src="{{ asset('assets/images/team/01.png') }}" alt="team"
                                                    loading="lazy">
                                                <div class="info">
                                                    <p>Samuel</p>
                                                    <span>Blogger</span>
                                                </div>
                                            </div>
                                            <img src="{{ asset('assets/images/team/brand/01.png') }}" alt="tream"
                                                loading="lazy">
                                        </div>
                                    </div>
                                    <!-- ..:: single swiepr end ::.. -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- ..:: single swiepr start ::.. -->
                                    <div class="single-team-area">
                                        <img src="{{ asset('assets/images/team/brand/quote.png') }}" alt=""
                                            class="quote" loading="lazy">
                                        <div class="star">
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                        </div>
                                        <p class="disc">
                                            I have used some AI writing tools liked Rytr, Peppertype, and Jasper but I found
                                            Writesonic to be the best for writing complete blog posts.
                                        </p>
                                        <div class="authore-area">
                                            <div class="author">
                                                <img src="{{ asset('assets/images/team/09.png') }}" alt="team"
                                                    loading="lazy">
                                                <div class="info">
                                                    <p>Samuel</p>
                                                    <span>Blogger</span>
                                                </div>
                                            </div>
                                            <img src="{{ asset('assets/images/team/brand/01.png') }}" alt="img"
                                                loading="lazy">
                                        </div>
                                    </div>
                                    <!-- ..:: single swiepr end ::.. -->
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: customers review area end ::.. -->

    <!-- ..:: rts latest update area start ::.. -->
    <div class="rts-latest-update rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-main-center-4">
                        <h2 class="title">
                            Latest updates
                        </h2>
                        <p class="disc">
                            Since 2002, we have been transforming the way <br>
                            customers contact brands online.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--30">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single blog area start ::.. -->
                    <div class="single-blog-area-start">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('assets/images/blog/13.jpg') }}" alt="blog-area">
                        </a>
                        <div class="inner-content">
                            <div class="meta-area">
                                <div class="left">
                                    <span class="name">ChatBot</span>
                                    <span class="date">May 24, 2023</span>
                                </div>
                            </div>
                            <a href="{{ route('blogdetails') }}">
                                <h5 class="title">Chatbot vs. Live Chat – Which is <br>
                                    Better for Customer Service?</h5>
                            </a>
                        </div>
                    </div>
                    <!-- ..:: single blog area end ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single blog area start ::.. -->
                    <div class="single-blog-area-start">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('assets/images/blog/14.jpg') }}" alt="blog-area">
                        </a>
                        <div class="inner-content">
                            <div class="meta-area">
                                <div class="left">
                                    <span class="name">ChatBot</span>
                                    <span class="date">May 24, 2023</span>
                                </div>
                            </div>
                            <a href="{{ route('blogdetails') }}">
                                <h5 class="title">10 Best Sales Chatbots to Boost Your Revenue in 2023</h5>
                            </a>
                        </div>
                    </div>
                    <!-- ..:: single blog area end ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single blog area start ::.. -->
                    <div class="single-blog-area-start">
                        <a href="#" class="thumbnail">
                            <img src="{{ asset('assets/images/blog/15.jpg') }}" alt="blog-area">
                        </a>
                        <div class="inner-content">
                            <div class="meta-area">
                                <div class="left">
                                    <span class="name">ChatBot</span>
                                    <span class="date">May 24, 2023</span>
                                </div>
                            </div>
                            <a href="{{ route('blogdetails') }}">
                                <h5 class="title">12 Essential Performance Metrics for Customer Service</h5>
                            </a>
                        </div>
                    </div>
                    <!-- ..:: single blog area end ::.. -->
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: rts latest update area end ::.. -->

    <!-- ..:: blog area start ::.. -->
    <div class="rts-faq-area pb--100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-conter-area">
                        <h2 class="title">
                            OPENUP chatbots: <br>
                            Frequently asked questions
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row mt--60">
                <div class="col-lg-12">
                    <div class="accordion-area-one">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is openup content writing tool?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Once you know your audience, choose a topic that will resonate with them. Look for
                                        trending topics in your industry or address common questions or challenges your
                                        audience may be facing.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        what languages does it supports?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Once you know your audience, choose a topic that will resonate with them. Look for
                                        trending topics in your industry or address common questions or challenges your
                                        audience may be facing.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        What is sEO wirting ai and how do i use it?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Once you know your audience, choose a topic that will resonate with them. Look for
                                        trending topics in your industry or address common questions or challenges your
                                        audience may be facing.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        what languages does it supports?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Once you know your audience, choose a topic that will resonate with them. Look for
                                        trending topics in your industry or address common questions or challenges your
                                        audience may be facing.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        Does Openup to write long articles?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Once you know your audience, choose a topic that will resonate with them. Look for
                                        trending topics in your industry or address common questions or challenges your
                                        audience may be facing.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: blog area end ::.. -->

    <!-- ..:: rts brand area start ::.. -->
    <div class="rts-brand-area pb--100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-area-4">
                        <img src="{{ asset('assets/images/brand/01.png') }}" alt="brand-area">
                        <img src="{{ asset('assets/images/brand/02.png') }}" alt="brand-area">
                        <img src="{{ asset('assets/images/brand/03.png') }}" alt="brand-area">
                        <img src="{{ asset('assets/images/brand/04.png') }}" alt="brand-area">
                        <img src="{{ asset('assets/images/brand/05.png') }}" alt="brand-area">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: rts brand area end ::.. -->

    <div class="rts-footer-area footer-two four footer-mid bg-footer">
        <div class="container  ptb--100">
            <div class="row">
                <div class="col-lg-12">
                    <!-- ..:: footer main wrapper ::.. -->
                    <div class="footer-one-main-wrapper">
                        <!-- ..:: single sized  footer  ::.. -->
                        <div class="footer-singl-wized left-logo">
                            <div class="head">
                                <a href="#">
                                    <img src="{{ asset('assets/images/logo/02.svg') }}" alt="logo">
                                </a>
                            </div>
                            <div class="body">
                                <h6 class="title">Newsletter Signup</h6>
                                <div class="input-footer-4">
                                    <input type="email" placeholder="Enter Your Email">
                                    <button class="rts-btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                        <!-- ..:: single sized  footer end ::.. -->
                        <!-- ..:: single sized  footer  ::.. -->
                        <div class="footer-singl-wized">
                            <div class="head">
                                <h6 class="title">Company</h6>
                            </div>
                            <div class="body">
                                <ul class="menu">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Community</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Affiliate Program</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- ..:: single sized  footer end ::.. -->

                        <!-- ..:: single sized  footer  ::.. -->
                        <div class="footer-singl-wized">
                            <div class="head">
                                <h6 class="title">Use Cases</h6>
                            </div>
                            <div class="body">
                                <ul class="menu">
                                    <li><a href="#">For Teams</a></li>
                                    <li><a href="#">For Email Marketers</a></li>
                                    <li><a href="#">For Blog Writers</a></li>
                                    <li><a href="#">For social managers</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- ..:: single sized  footer end ::.. -->
                        <!-- ..:: single sized  footer  ::.. -->
                        <div class="footer-singl-wized input-area">
                            <div class="head">
                                <h6 class="title">Contact Info</h6>
                            </div>
                            <div class="body">
                                <p class="disc">
                                    Maxuel Street, Frankfurt <br> 2589 Germany.
                                </p>
                                <a href="#" class="f-link">
                                    <h6 class="link">information.mighty.com</h6>
                                </a>
                                <a href="#" class="number">+2858 62359 32159</a>
                            </div>
                        </div>
                        <!-- ..:: single sized  footer end ::.. -->
                    </div>
                    <!-- ..:: footer main wrapper end ::.. -->
                </div>
            </div>
        </div>
        <div class="max-con border-copy">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copy-right-two four">
                            <p><a href="#">Parv Infotech</a> 2023. All Rights Reserved.</p>
                            <div class="menu">
                                <ul>
                                    <li><a href="#">Tearms</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="anywhere-home" class="">
    </div>
@endsection
