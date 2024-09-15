@extends('layout.layout3')

@php
    $headtitle = 'CodeInsights';

@endphp

@section('content')
    <!-- ..:: rts header area start ::.. -->
    <header class="header-one header--sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-main-wrapper">
                        <a href="{{ route('index') }}" class="logo">
                            <img src="{{ asset('assets/images/logo/01.png') }}" alt="logo">
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
                                            <li><a href="{{ route('index6') }}">Image Generator <span>New</span></a></li>
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
                            <a href="#" class="rts-btn btn-blur">Dashboard</a>
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
    </header>
    <!-- ..:: rts header area end ::.. -->

    <!-- ..:: open up banner area start ::.. -->
    <div class="rts-banner-area-one bg_image--1 bg_image rts-section-gap">
        <div class="container mt--50">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-main-wrapper">
                        <h1 class="title">
                            Code Insights
                            Make <br> You
                            <span class="txt-rotate" data-period="1000"
                                data-rotate='[ "Dream.", "Content.", "Blog Content.", "Sales Copy.", "Media Content."]'>
                            </span>
                        </h1>
                        <p class="disc">
                            Using advanced artificial intelligence and deep learning, Article Forge writes entire 1,500+
                            word articles automatically. From product descriptions.
                        </p>
                        <div class="button-area">
                            <a href="{{ route('login') }}" class="rts-btn btn-primary">Try Code Insights Free</a>
                            <a href="{{ route('contact') }}" class="rts-btn btn-blur">Request demo</a>
                        </div>
                        <div class="user-area">
                            <p>10,000+ People make by OpenUp</p>
                            <div class="image-wrapper">
                                <img class="one" src="{{ asset('assets/images/banner/user/01.png') }}" alt="user"
                                    loading="lazy">
                                <img class="two" src="{{ asset('assets/images/banner/user/02.png') }}" alt="user"
                                    loading="lazy">
                                <img class="three" src="{{ asset('assets/images/banner/user/04.png') }}" alt="user"
                                    loading="lazy">
                                <img class="four" src="{{ asset('assets/images/banner/user/03.png') }}" alt="user"
                                    loading="lazy">
                                <img class="five" src="{{ asset('assets/images/banner/user/05.png') }}" alt="user"
                                    loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-mid-img">
            <img src="{{ asset('assets/images/banner/01.png') }}" alt="banenr mimage" loading="lazy">
        </div>
        <div class="usefull-for-ani">
            <div class="single">
                <img src="{{ asset('assets/images/banner/user/06.png') }}" alt="img" loading="lazy">
                <span>Content Writer</span>
            </div>
            <div class="single blog">
                <img src="{{ asset('assets/images/banner/user/05.png') }}" alt="img" loading="lazy">
                <span>Blog Writer</span>
            </div>
            <div class="single copy">
                <img src="{{ asset('assets/images/banner/user/03.png') }}" alt="img" loading="lazy">
                <span>Copy Writer</span>
            </div>
            <div class="single freelancer">
                <img src="{{ asset('assets/images/banner/user/04.png') }}" alt="img" loading="lazy">
                <span>Freelancer </span>
            </div>
        </div>
    </div>
    <!-- ..:: open up banner area end ::.. -->

    <!-- ..:: rts brand area start ::.. -->
    <div class="rts-brand-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="brand-title text-center">professionals & teams choose Openup</p>
                </div>
            </div>
            <div class="row mt--50">
                <div class="col-lg-12">
                    <div class="brand-area-main-wrapper-one">
                        <img src="{{ asset('assets/images/brand/01.png') }}" alt="brand" loading="lazy">
                        <img src="{{ asset('assets/images/brand/02.png') }}" alt="brand" loading="lazy">
                        <img src="{{ asset('assets/images/brand/03.png') }}" alt="brand" loading="lazy">
                        <img src="{{ asset('assets/images/brand/04.png') }}" alt="brand" loading="lazy">
                        <img src="{{ asset('assets/images/brand/05.png') }}" alt="brand" loading="lazy">
                        <img src="{{ asset('assets/images/brand/06.png') }}" alt="brand" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: rts brand area end ::.. -->

    <!-- ..:: rts feature area start ::.. -->
    <div class="rts-feature-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-conter-area">
                        <h2 class="title">
                            Instruct to our AI <br>
                            writing generate copy
                        </h2>
                        <p class="disc">
                            Let our AI assist with most time consuming to write blog articles, product descriptions and
                            more.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt--50">
                <div class="col-lg-12">
                    <!-- ..:: single openup feature area start ::.. -->
                    <div class="single-feature-area-start index-feature">
                        <div class="image-area">
                            <img src="{{ asset('assets/images/feature/07.svg') }}" alt="feature_image" loading="lazy">
                        </div>
                        <div class="featue-content-area">
                            <span class="pre">01</span>
                            <h2 class="title">Generate copy in <br>
                                seconds</h2>
                            <p class="disc">
                                Generate many types of content in under 30 seconds by simply inserting a few input fields.
                                Generate blog topic ideas, intros, ad copy, copywriting.
                            </p>
                            <a href="{{ route('contact') }}" class="rts-btn btn-primary">Get Started Free</a>
                        </div>
                    </div>
                    <!-- ..:: single openup feature area end ::.. -->
                    <!-- ..:: single openup feature area start ::.. -->
                    <div class="single-feature-area-start index-feature bg-red-l">

                        <div class="featue-content-area">
                            <span class="pre">02</span>
                            <h2 class="title">45+ highly-tuned AI <br>
                                tools fingertips</h2>
                            <p class="disc">
                                We have a wide variety of tools available for you to use.
                                From blog shots (full blog posts) and tweets to sales email generators and marketing copy.
                            </p>
                            <a href="{{ route('contact') }}" class="rts-btn btn-primary">Get Started Free</a>
                        </div>
                        <div class="image-area">
                            <img src="{{ asset('assets/images/feature/08.svg') }}" alt="feature_image" loading="lazy">
                        </div>
                    </div>
                    <!-- ..:: single openup feature area end ::.. -->
                    <!-- ..:: single openup feature area start ::.. -->
                    <div class="single-feature-area-start index-feature bg-blue-l">
                        <div class="image-area">
                            <img src="{{ asset('assets/images/feature/09.svg') }}" alt="feature_image" loading="lazy">
                        </div>
                        <div class="featue-content-area">
                            <span class="pre">03</span>
                            <h2 class="title">Enter your <br>
                                copywriting project</h2>
                            <p class="disc">
                                Choose from emails, social posts, long-form blog posts, and more! Then, just copy and paste
                                the work into your CMS for publishing.
                            </p>
                            <a href="{{ route('contact') }}" class="rts-btn btn-primary">Get Started Free</a>
                        </div>
                    </div>
                    <!-- ..:: single openup feature area end ::.. -->
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: rts feature area end ::.. -->

    <!-- ..:: rts tools area start ::.. -->
    <div class="rts-tools-area rts-section-gap bg-tools">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-conter-area">
                        <h2 class="title">
                            Generate AI Copy writing <br>
                            Favorite Tools
                        </h2>
                        <p class="disc">
                            Get better results in a fraction of the time.Finally, a writing tool you’ll actually use.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt--25 g-5">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single tools feature ::.. -->
                    <div class="single-tools-feature">
                        <div class="icon">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="50" height="50" rx="4" fill="#3F3EED" fill-opacity="0.1" />
                                <path
                                    d="M23.1719 17.5469C28 17.8281 32.1719 22 32.4531 26.7812C32.5 27.3906 32.0312 27.9531 31.4219 28C31.375 28 31.375 28 31.3281 28C30.7656 28 30.25 27.5312 30.25 26.9219C29.9688 23.2188 26.7344 19.9844 23.0312 19.75C22.4219 19.75 21.9531 19.1875 22 18.5781C22 17.9688 22.5625 17.5 23.1719 17.5469ZM23.5 13C30.9062 13 37 19.0938 37 26.5C37 27.3438 36.2969 28 35.5 28C34.6562 28 34 27.3438 34 26.5C34 20.7344 29.2656 16 23.5 16C22.6562 16 22 15.3438 22 14.5C22 13.7031 22.6562 13 23.5 13ZM21.0625 23.6406C24.5781 24.3438 27.1562 27.8594 26.3125 31.7031C25.7969 34.2344 23.7344 36.2969 21.2031 36.8125C16.8438 37.75 13 34.4219 13 30.25V18.625C13 18.0156 13.4688 17.5469 14.0781 17.5469H16.3281C16.9844 17.5469 17.4531 18.0156 17.4531 18.625V30.2031C17.4531 31.375 18.4844 32.4062 19.75 32.4062C20.9688 32.4062 22 31.4219 22 30.2031C22 29.2656 21.3438 28.4219 20.5 28.1406C20.0781 28 19.75 27.625 19.75 27.1094V24.7656C19.75 24.0625 20.3594 23.5 21.0625 23.6406Z"
                                    fill="#3F3EED" />
                            </svg>
                        </div>
                        <h5 class="title">
                            Blog Content
                        </h5>
                        <p class="disc">
                            Write a first draft. The first draft should be written in long-form breaking.
                        </p>
                        <a href="{{ route('usecase') }}" class="rts-btn btn-lonly">Try Blog Content <i
                                class="fa-regular fa-arrow-right"></i></a>
                    </div>
                    <!-- ..:: sngle tools featuer ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single tools feature ::.. -->
                    <div class="single-tools-feature">
                        <div class="icon">

                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="50" height="50" rx="4" fill="#33B89F" fill-opacity="0.1" />
                                <path
                                    d="M29.5 25C29.5 26.6875 28.1406 28 26.5 28L19.0938 28.0469L15.2031 30.9531C14.9219 31.1406 14.5 30.9531 14.5 30.5781V28.0469L13 28C11.3125 28 10 26.6875 10 25V16C10 14.3594 11.3125 13 13 13H26.5C28.1406 13 29.5 14.3594 29.5 16V25ZM37 19C38.6406 19 40 20.3594 40 22V31.0469C40 32.6875 38.6406 34 37 34H35.5V36.5781C35.5 36.9531 35.0312 37.1406 34.7031 36.9062L30.8125 34H24.9531C23.3125 34 22 32.6875 22 31V29.5H26.5C28.9375 29.5 31 27.4844 31 25V19H37Z"
                                    fill="#33B89F" />
                            </svg>

                        </div>
                        <h5 class="title">
                            Social Media Content
                        </h5>
                        <p class="disc">
                            Social media content should also visually appealing, using images and videos.
                        </p>
                        <a href="{{ route('usecase') }}" class="rts-btn btn-lonly">Try Social Content <i
                                class="fa-regular fa-arrow-right"></i></a>
                    </div>
                    <!-- ..:: sngle tools featuer ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single tools feature ::.. -->
                    <div class="single-tools-feature">
                        <div class="icon">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="50" height="50" rx="4" fill="#2A85C8" fill-opacity="0.1" />
                                <path
                                    d="M13 14.125C13 13.5156 13.4688 13 14.125 13H17.5C18.0156 13 18.4844 13.4219 18.5781 13.9375L18.6719 14.5H38.3594C39.3438 14.5 40.0938 15.4844 39.8125 16.4219L37.2812 25.4219C37.0938 26.0781 36.5312 26.5 35.8281 26.5H20.9688L21.3906 28.75H35.875C36.4844 28.75 37 29.2656 37 29.875C37 30.5312 36.4844 31 35.875 31H20.4531C19.9375 31 19.4688 30.625 19.375 30.1094L16.5625 15.25H14.125C13.4688 15.25 13 14.7812 13 14.125ZM23.5 34.75C23.5 36.0156 22.4688 37 21.25 37C19.9844 37 19 36.0156 19 34.75C19 33.5312 19.9844 32.5 21.25 32.5C22.4688 32.5 23.5 33.5312 23.5 34.75ZM32.5 34.75C32.5 33.5312 33.4844 32.5 34.75 32.5C35.9688 32.5 37 33.5312 37 34.75C37 36.0156 35.9688 37 34.75 37C33.4844 37 32.5 36.0156 32.5 34.75ZM14.875 17.5C15.4844 17.5 16 18.0156 16 18.625C16 19.2812 15.4844 19.75 14.875 19.75H11.125C10.4688 19.75 10 19.2812 10 18.625C10 18.0156 10.4688 17.5 11.125 17.5H14.875ZM15.625 21.25C16.2344 21.25 16.75 21.7656 16.75 22.375C16.75 23.0312 16.2344 23.5 15.625 23.5H11.125C10.4688 23.5 10 23.0312 10 22.375C10 21.7656 10.4688 21.25 11.125 21.25H15.625ZM16.375 25C16.9844 25 17.5 25.5156 17.5 26.125C17.5 26.7812 16.9844 27.25 16.375 27.25H11.125C10.4688 27.25 10 26.7812 10 26.125C10 25.5156 10.4688 25 11.125 25H16.375Z"
                                    fill="#2A85C8" />
                            </svg>
                        </div>
                        <h5 class="title">
                            eCommerce copy
                        </h5>
                        <p class="disc">
                            Introducing new line wireless earbuds designed with the active person.
                        </p>
                        <a href="{{ route('usecase') }}" class="rts-btn btn-lonly">Try eCommerce Copy<i
                                class="fa-regular fa-arrow-right"></i></a>
                    </div>
                    <!-- ..:: sngle tools featuer ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single tools feature ::.. -->
                    <div class="single-tools-feature">
                        <div class="icon">

                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="50" height="50" rx="4" fill="#EBA43B" fill-opacity="0.1" />
                                <path
                                    d="M17.25 14.5H24.2344C25.0312 14.5 25.7812 14.8281 26.3438 15.3906L34.5938 23.6406C35.7656 24.8125 35.7656 26.7344 34.5938 27.9062L28.3594 34.1406C27.1875 35.3125 25.2656 35.3125 24.0938 34.1406L15.8438 25.8906C15.2812 25.3281 15 24.5781 15 23.7812V16.75C15 15.5312 15.9844 14.5 17.25 14.5ZM20.25 21.25C21.0469 21.25 21.75 20.5938 21.75 19.75C21.75 18.9531 21.0469 18.25 20.25 18.25C19.4062 18.25 18.75 18.9531 18.75 19.75C18.75 20.5938 19.4062 21.25 20.25 21.25Z"
                                    fill="#EBA43B" />
                            </svg>

                        </div>
                        <h5 class="title">
                            Sales Copy
                        </h5>
                        <p class="disc">
                            You tired of overspending on products that don't live up to their promises?
                        </p>
                        <a href="{{ route('usecase') }}" class="rts-btn btn-lonly">Try Sales Copy<i
                                class="fa-regular fa-arrow-right"></i></a>
                    </div>
                    <!-- ..:: sngle tools featuer ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single tools feature ::.. -->
                    <div class="single-tools-feature">
                        <div class="icon">

                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="50" height="50" rx="4" fill="#E331D2" fill-opacity="0.1" />
                                <path
                                    d="M13 17.5C13 15.8594 14.3125 14.5 16 14.5H34C35.6406 14.5 37 15.8594 37 17.5V32.5C37 34.1875 35.6406 35.5 34 35.5H16C14.3125 35.5 13 34.1875 13 32.5V17.5ZM17.5 20.5C18.2969 20.5 19 19.8438 19 19C19 18.2031 18.2969 17.5 17.5 17.5C16.6562 17.5 16 18.2031 16 19C16 19.8438 16.6562 20.5 17.5 20.5ZM34 19C34 18.3906 33.4844 17.875 32.875 17.875H21.625C20.9688 17.875 20.5 18.3906 20.5 19C20.5 19.6562 20.9688 20.125 21.625 20.125H32.875C33.4844 20.125 34 19.6562 34 19Z"
                                    fill="#E331D2" />
                            </svg>

                        </div>
                        <h5 class="title">
                            Website copy
                        </h5>
                        <p class="disc">
                            Our toys are made the highest quality materials and designed to provide.
                        </p>
                        <a href="{{ route('usecase') }}" class="rts-btn btn-lonly">Try Website Copy<i
                                class="fa-regular fa-arrow-right"></i></a>
                    </div>
                    <!-- ..:: sngle tools featuer ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single tools feature ::.. -->
                    <div class="single-tools-feature">
                        <div class="icon">

                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="50" height="50" rx="4" fill="#5584FF" fill-opacity="0.1" />
                                <path
                                    d="M21.75 24.1562L22.7344 26.125H20.7188L21.75 24.1562ZM31.5 26.125C31.5 26.7812 30.9844 27.25 30.375 27.25C29.7188 27.25 29.25 26.7812 29.25 26.125C29.25 25.5156 29.7188 25 30.375 25C30.9844 25 31.5 25.5156 31.5 26.125ZM36 14.5C37.6406 14.5 39 15.8594 39 17.5V32.5C39 34.1875 37.6406 35.5 36 35.5H15C13.3125 35.5 12 34.1875 12 32.5V17.5C12 15.8594 13.3125 14.5 15 14.5H36ZM22.7344 21.1562C22.5469 20.7812 22.1719 20.5 21.75 20.5C21.2812 20.5 20.9062 20.7812 20.7188 21.1562L17.3438 27.9062C17.0625 28.4688 17.2969 29.125 17.8594 29.4062C18.4219 29.6875 19.0781 29.4531 19.3594 28.8906L19.5938 28.375H23.8594L24.0938 28.8906C24.375 29.4531 25.0312 29.6875 25.5938 29.4062C26.1562 29.125 26.3906 28.4688 26.1094 27.9062L22.7344 21.1562ZM31.5 22.9844C31.125 22.8438 30.75 22.75 30.375 22.75C28.5 22.75 27 24.2969 27 26.125C27 28 28.5 29.5 30.375 29.5C30.8906 29.5 31.3594 29.4062 31.8281 29.1719C32.0156 29.4062 32.2969 29.5 32.625 29.5C33.2344 29.5 33.75 29.0312 33.75 28.375V21.625C33.75 21.0156 33.2344 20.5 32.625 20.5C31.9688 20.5 31.5 21.0156 31.5 21.625V22.9844Z"
                                    fill="#5585FF" />
                            </svg>

                        </div>
                        <h5 class="title">
                            Digital Add Copy
                        </h5>
                        <p class="disc">
                            Our toys are made the highest quality materials and designed to provide.
                        </p>
                        <a href="{{ route('usecase') }}" class="rts-btn btn-lonly">Try Website Copy<i
                                class="fa-regular fa-arrow-right"></i></a>
                    </div>
                    <!-- ..:: sngle tools featuer ::.. -->
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: rts tools area end ::.. -->

    <!-- ..:: pricing area start ::.. -->
    <div class="rts-pricing-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-conter-area">
                        <h2 class="title">
                            Try For Free, No Credit <br>
                            Card Required
                        </h2>
                    </div>
                </div>
            </div>
            <!-- ..:: nav area start ::.. -->
            <ul class="nav mt--20 nav-tabs pricing-button-one" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class=" active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                        role="tab" aria-controls="home" aria-selected="true">Monthly</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                        type="button" role="tab" aria-controls="profile" aria-selected="false">Annual</button>
                </li>
                <li class="right-image-inner">
                    <img src="{{ asset('assets/images/cta/03.png') }}" alt="cta-wrapper" loading="lazy">
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row g-5 mt--20">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <!-- ..:: iingle pricing table ::.. -->
                            <div class="pricing-style-one">
                                <div class="head">
                                    <span class="top">St Rater</span>
                                    <div class="date-use">
                                        <h4 class="title">Free</h4>
                                        <span>/month</span>
                                    </div>
                                </div>
                                <div class="body">
                                    <a href="#" class="rts-btn btn-border-p">Start Free Trial</a>
                                    <div class="chek-area">
                                        <!-- ..:: ingle check ::.. -->
                                        <div class="single-check">
                                            <i class="fa-solid fa-check"></i>
                                            <p>10,000 Monthly Word Limit</p>
                                        </div>
                                        <!-- ..:: ingle check end ::.. -->
                                        <!-- ..:: ingle check ::.. -->
                                        <div class="single-check">
                                            <i class="fa-solid fa-check"></i>
                                            <p>10+ Templates</p>
                                        </div>
                                        <!-- ..:: ingle check end ::.. -->
                                        <!-- ..:: ingle check ::.. -->
                                        <div class="single-check">
                                            <i class="fa-solid fa-check"></i>
                                            <p>All types of content</p>
                                        </div>
                                        <!-- ..:: ingle check end ::.. -->
                                        <!-- ..:: ingle check ::.. -->
                                        <div class="single-check">
                                            <i class="fa-solid fa-check"></i>
                                            <p>10+ Languages</p>
                                        </div>
                                        <!-- ..:: ingle check end ::.. -->
                                    </div>
                                </div>
                            </div>
                            <!-- ..:: iingle pricing table end ::.. -->
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <!-- ..:: iingle pricing table ::.. -->
                            <div class="pricing-style-one active">
                                <div class="head">
                                    <span class="top">Pro</span>
                                    <div class="date-use">
                                        <h4 class="title">$29</h4>
                                        <span>/month</span>
                                    </div>
                                </div>
                                <div class="body">
                                    <a href="#" class="rts-btn btn-border-p">Start Free Trial</a>
                                    <div class="chek-area">
                                        <!-- ..:: ingle check ::.. -->
                                        <div class="single-check">
                                            <i class="fa-solid fa-check"></i>
                                            <p>10,000 Monthly Word Limit</p>
                                        </div>
                                        <!-- ..:: ingle check end ::.. -->
                                        <!-- ..:: ingle check ::.. -->
                                        <div class="single-check">
                                            <i class="fa-solid fa-check"></i>
                                            <p>10+ Templates</p>
                                        </div>
                                        <!-- ..:: ingle check end ::.. -->
                                        <!-- ..:: ingle check ::.. -->
                                        <div class="single-check">
                                            <i class="fa-solid fa-check"></i>
                                            <p>All types of content</p>
                                        </div>
                                        <!-- ..:: ingle check end ::.. -->
                                        <!-- ..:: ingle check ::.. -->
                                        <div class="single-check">
                                            <i class="fa-solid fa-check"></i>
                                            <p>10+ Languages</p>
                                        </div>
                                        <!-- ..:: ingle check end ::.. -->
                                    </div>
                                </div>
                            </div>
                            <!-- ..:: iingle pricing table end ::.. -->
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <!-- ..:: iingle pricing table ::.. -->
                            <div class="pricing-style-one">
                                <div class="head">
                                    <span class="top">Business</span>
                                    <div class="date-use">
                                        <h4 class="title">$99</h4>
                                        <span>/month</span>
                                    </div>
                                </div>
                                <div class="body">
                                    <a href="#" class="rts-btn btn-border-p">Start Free Trial</a>
                                    <div class="chek-area">
                                        <!-- ..:: ingle check ::.. -->
                                        <div class="single-check">
                                            <i class="fa-solid fa-check"></i>
                                            <p>10,000 Monthly Word Limit</p>
                                        </div>
                                        <!-- ..:: ingle check end ::.. -->
                                        <!-- ..:: ingle check ::.. -->
                                        <div class="single-check">
                                            <i class="fa-solid fa-check"></i>
                                            <p>10+ Templates</p>
                                        </div>
                                        <!-- ..:: ingle check end ::.. -->
                                        <!-- ..:: ingle check ::.. -->
                                        <div class="single-check">
                                            <i class="fa-solid fa-check"></i>
                                            <p>All types of content</p>
                                        </div>
                                        <!-- ..:: ingle check end ::.. -->
                                        <!-- ..:: ingle check ::.. -->
                                        <div class="single-check">
                                            <i class="fa-solid fa-check"></i>
                                            <p>10+ Languages</p>
                                        </div>
                                        <!-- ..:: ingle check end ::.. -->
                                    </div>
                                </div>
                            </div>
                            <!-- ..:: iingle pricing table end ::.. -->
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <!-- ..:: iingle pricing table ::.. -->
                            <div class="pricing-style-one">
                                <div class="head">
                                    <span class="top">Unlimited</span>
                                    <div class="date-use">
                                        <h4 class="title">$13</h4>
                                        <span>/month</span>
                                    </div>
                                </div>
                                <div class="body">
                                    <a href="#" class="rts-btn btn-border-p">Start Free Trial</a>
                                    <div class="chek-area">
                                        <!-- ..:: ingle check ::.. -->
                                        <div class="single-check">
                                            <i class="fa-solid fa-check"></i>
                                            <p>10,000 Monthly Word Limit</p>
                                        </div>
                                        <!-- ..:: ingle check end ::.. -->
                                        <!-- ..:: ingle check ::.. -->
                                        <div class="single-check">
                                            <i class="fa-solid fa-check"></i>
                                            <p>10+ Templates</p>
                                        </div>
                                        <!-- ..:: ingle check end ::.. -->
                                        <!-- ..:: ingle check ::.. -->
                                        <div class="single-check">
                                            <i class="fa-solid fa-check"></i>
                                            <p>All types of content</p>
                                        </div>
                                        <!-- ..:: ingle check end ::.. -->
                                        <!-- ..:: ingle check ::.. -->
                                        <div class="single-check">
                                            <i class="fa-solid fa-check"></i>
                                            <p>10+ Languages</p>
                                        </div>
                                        <!-- ..:: ingle check end ::.. -->
                                    </div>
                                </div>
                            </div>
                            <!-- ..:: iingle pricing table end ::.. -->
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row g-5 mt--20">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <!-- ..:: iingle pricing table ::.. -->
                            <div class="pricing-style-one">
                                <div class="head">
                                    <span class="top">St Rater</span>
                                    <div class="date-use">
                                        <h4 class="title">Free</h4>
                                        <span>/month</span>
                                    </div>
                                </div>
                                <div class="body">
                                    <a href="#" class="rts-btn btn-border-p">Start Free Trial</a>
                                    <div class="chek-area">
                                        <!-- ..:: ingle check ::.. -->
                                        <div class="single-check">
                                            <i class="fa-solid fa-check"></i>
                                            <p>10,000 Monthly Word Limit</p>
                                        </div>
                                        <!-- ..:: ingle check end ::.. -->
                                        <!-- ..:: ingle check ::.. -->
                                        <div class="single-check">
                                            <i class="fa-solid fa-check"></i>
                                            <p>10+ Templates</p>
                                        </div>
                                        <!-- ..:: ingle check end ::.. -->
                                        <!-- ..:: ingle check ::.. -->
                                        <div class="single-check">
                                            <i class="fa-solid fa-check"></i>
                                            <p>All types of content</p>
                                        </div>
                                        <!-- ..:: ingle check end ::.. -->
                                        <!-- ..:: ingle check ::.. -->
                                        <div class="single-check">
                                            <i class="fa-solid fa-check"></i>
                                            <p>10+ Languages</p>
                                        </div>
                                        <!-- ..:: ingle check end ::.. -->
                                    </div>
                                </div>
                            </div>
                            <!-- ..:: iingle pricing table end ::.. -->
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <!-- ..:: iingle pricing table ::.. -->
                            <div class="pricing-style-one active">
                                <div class="head">
                                    <span class="top">Pro</span>
                                    <div class="date-use">
                                        <h4 class="title">$29</h4>
                                        <span>/month</span>
                                    </div>
                                </div>
                                <div class="body">
                                    <a href="#" class="rts-btn btn-border-p">Start Free Trial</a>
                                    <div class="chek-area">
                                        <!-- ..:: ingle check ::.. -->
                                        <div class="single-check">
                                            <i class="fa-solid fa-check"></i>
                                            <p>10,000 Monthly Word Limit</p>
                                        </div>
                                        <!-- ..:: ingle check end ::.. -->
                                        <!-- ..:: ingle check ::.. -->
                                        <div class="single-check">
                                            <i class="fa-solid fa-check"></i>
                                            <p>10+ Templates</p>
                                        </div>
                                        <!-- ..:: ingle check end ::.. -->
                                        <!-- ..:: ingle check ::.. -->
                                        <div class="single-check">
                                            <i class="fa-solid fa-check"></i>
                                            <p>All types of content</p>
                                        </div>
                                        <!-- ..:: ingle check end ::.. -->
                                        <!-- ..:: ingle check ::.. -->
                                        <div class="single-check">
                                            <i class="fa-solid fa-check"></i>
                                            <p>10+ Languages</p>
                                        </div>
                                        <!-- ..:: ingle check end ::.. -->
                                    </div>
                                </div>
                            </div>
                            <!-- ..:: iingle pricing table end ::.. -->
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <!-- ..:: iingle pricing table ::.. -->
                            <div class="pricing-style-one">
                                <div class="head">
                                    <span class="top">Business</span>
                                    <div class="date-use">
                                        <h4 class="title">$99</h4>
                                        <span>/month</span>
                                    </div>
                                </div>
                                <div class="body">
                                    <a href="#" class="rts-btn btn-border-p">Start Free Trial</a>
                                    <div class="chek-area">
                                        <!-- ..:: ingle check ::.. -->
                                        <div class="single-check">
                                            <i class="fa-solid fa-check"></i>
                                            <p>10,000 Monthly Word Limit</p>
                                        </div>
                                        <!-- ..:: ingle check end ::.. -->
                                        <!-- ..:: ingle check ::.. -->
                                        <div class="single-check">
                                            <i class="fa-solid fa-check"></i>
                                            <p>10+ Templates</p>
                                        </div>
                                        <!-- ..:: ingle check end ::.. -->
                                        <!-- ..:: ingle check ::.. -->
                                        <div class="single-check">
                                            <i class="fa-solid fa-check"></i>
                                            <p>All types of content</p>
                                        </div>
                                        <!-- ..:: ingle check end ::.. -->
                                        <!-- ..:: ingle check ::.. -->
                                        <div class="single-check">
                                            <i class="fa-solid fa-check"></i>
                                            <p>10+ Languages</p>
                                        </div>
                                        <!-- ..:: ingle check end ::.. -->
                                    </div>
                                </div>
                            </div>
                            <!-- ..:: iingle pricing table end ::.. -->
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <!-- ..:: iingle pricing table ::.. -->
                            <div class="pricing-style-one">
                                <div class="head">
                                    <span class="top">Unlimited</span>
                                    <div class="date-use">
                                        <h4 class="title">$13</h4>
                                        <span>/month</span>
                                    </div>
                                </div>
                                <div class="body">
                                    <a href="#" class="rts-btn btn-border-p">Start Free Trial</a>
                                    <div class="chek-area">
                                        <!-- ..:: ingle check ::.. -->
                                        <div class="single-check">
                                            <i class="fa-solid fa-check"></i>
                                            <p>10,000 Monthly Word Limit</p>
                                        </div>
                                        <!-- ..:: ingle check end ::.. -->
                                        <!-- ..:: ingle check ::.. -->
                                        <div class="single-check">
                                            <i class="fa-solid fa-check"></i>
                                            <p>10+ Templates</p>
                                        </div>
                                        <!-- ..:: ingle check end ::.. -->
                                        <!-- ..:: ingle check ::.. -->
                                        <div class="single-check">
                                            <i class="fa-solid fa-check"></i>
                                            <p>All types of content</p>
                                        </div>
                                        <!-- ..:: ingle check end ::.. -->
                                        <!-- ..:: ingle check ::.. -->
                                        <div class="single-check">
                                            <i class="fa-solid fa-check"></i>
                                            <p>10+ Languages</p>
                                        </div>
                                        <!-- ..:: ingle check end ::.. -->
                                    </div>
                                </div>
                            </div>
                            <!-- ..:: iingle pricing table end ::.. -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- ..:: nav area end ::.. -->
        </div>
    </div>
    <!-- ..:: pricing area end ::.. -->

    <!-- ..:: rts faq area stat ::.. -->
    <div class="rts-faq-area rts-section-gap bg_faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-conter-area">
                        <h2 class="title">
                            Questions About our OpenUp? <br>
                            We have Answers!
                        </h2>
                        <p class="disc">
                            please feel free to reach out to us. We are always happy to assist you and provide any
                            additional.
                        </p>
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
    <!-- ..:: rts faq area end ::.. -->

    <!-- ..:: cta area start ::.. -->
    <x-ctaarea />
    <!-- ..:: cta area end ::.. -->

    <!-- ..:: rts footer area start ::.. -->
    <x-footer />
    <!-- ..:: rts footer area end ::.. -->

    <div id="anywhere-home" class="">
    </div>
@endsection
