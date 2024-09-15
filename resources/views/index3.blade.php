@extends('layout.layout3')

@php
    $headtitle = 'CodeInsights';
    $bodyClass = 'index-three';
@endphp

@section('content')
    <!-- ..:: header three area start ::.. -->
    <header class="header-style-three header--sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-three-area">
                        <a href="{{ route('index') }}" class="logo-area">
                            <img src="{{ asset('assets/images/logo/07.svg') }}" alt="logo" loading="lazy">
                        </a>
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
                        <div class="button-area">
                            <a href="{{ route('login') }}">Login</a>
                            <a href="{{ route('about') }}" class="rts-btn btn-primary">Get Started</a>

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
    <!-- ..:: header three area end ::.. -->

    <div class="gradient-sec-three">

        <!-- ..:: rts banenr area start ::.. -->
        <div class="rts-banner-area-three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-three-inner">
                            <div class="inner">
                                <h1 class="title">
                                    Whatever you want to ask <br>
                                    our <span>Contain Writing</span> Ai
                                </h1>
                                <p class="disc">
                                    AI Copywriting is revolutionizing the way content is created. AI can create content for
                                    blogs, articles, websites, social media and more.
                                </p>
                                <div class="button-area-main">
                                    <a href="{{ route('about') }}" class="rts-btn btn-primary">Sign up free</a>
                                    <a href="{{ route('about') }}" class="rts-btn btn-secondary">Start writing free</a>
                                </div>
                                <span class="bottom">No credit card required</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-image">
                <div class="icon-wrapper">
                    <div class="single one">
                        <img src="{{ asset('assets/images/banner/icon/01.png') }}" alt="one-banner" class="one"
                            loading="lazy">
                        <span>Content Writing</span>
                    </div>
                    <div class="single two">
                        <img src="{{ asset('assets/images/banner/icon/02.png') }}" alt="one-banner" class="one"
                            loading="lazy">
                        <span>Blog Writing</span>
                    </div>
                    <div class="single three">
                        <img src="{{ asset('assets/images/banner/icon/01.png') }}" alt="one-banner" class="one"
                            loading="lazy">
                        <span>Copy Writing</span>
                    </div>
                    <div class="single four">
                        <img src="{{ asset('assets/images/banner/icon/01.png') }}" alt="one-banner" class="one"
                            loading="lazy">
                        <span>Ai content Writing</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- ..:: rts banenr area end ::.. -->

        <!-- ..:: image feature-area start ::.. -->
        <div class="image-feature-area-three rts-section-gapBottom">
            <div class="shape-bg">
                <img src="{{ asset('assets/images/banner/04.png') }}" alt="images" loading="lazy">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="large-imaeg-bottom-banner text-center">
                            <img src="{{ asset('assets/images/banner/02.svg') }}" alt="banenr" loading="lazy">
                        </div>
                    </div>
                </div>
                <div class="row g-5 mt--80">
                    <div class="col-lg-4">
                        <div class="single-feature-area-three">
                            <div class="icon">
                                <img src="{{ asset('assets/images/feature/01.svg') }}" alt="icon" loading="lazy">
                            </div>
                            <div class="info-wrapper">
                                <span>For blog Writers</span>
                                <h5 class="title">Write blogs 10x faster</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-feature-area-three">
                            <div class="icon">
                                <img src="{{ asset('assets/images/feature/02.svg') }}" alt="icon" loading="lazy">
                            </div>
                            <div class="info-wrapper">
                                <span>For blog Writers</span>
                                <h5 class="title">Write higher converting Posta</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-feature-area-three">
                            <div class="icon">
                                <img src="{{ asset('assets/images/feature/03.svg') }}" alt="icon" loading="lazy">
                            </div>
                            <div class="info-wrapper">
                                <span>For blog Writers</span>
                                <h5 class="title">Write more engaging emails</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ..:: image feature-area end ::.. -->

        <!-- ..:: our trasted clients area start ::.. -->
        <div class="our-trusted-clients rts-section-gapBottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-center-three">
                            <span class="pre">Our Clients</span>
                            <h2 class="title"> <span>10,000+</span> professionals & teams <br>
                                choose Openup</h2>
                            <p>professionals & teams choose Openup</p>
                        </div>
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
                <div class="row mt--60 g-5">
                    <div class="col-lg-4">
                        <div class="single-testimonial-three">
                            <div class="top-area">
                                <div class="author">
                                    <img src="{{ asset('assets/images/team/09.png') }}" alt="team-area">
                                    <div class="info-wrapper-area">
                                        <p>
                                            Samuel
                                        </p>
                                        <span>Blogger</span>
                                    </div>
                                </div>
                                <div class="start-area">
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="body">
                                <p>So glad i found openup!! It has made my blog tasks a billion times more enjoyable (which
                                    is an emotion way beyond.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-testimonial-three">
                            <div class="top-area">
                                <div class="author">
                                    <img src="{{ asset('assets/images/team/10.png') }}" alt="team-area" loading="lazy">
                                    <div class="info-wrapper-area">
                                        <p>
                                            James
                                        </p>
                                        <span>Author</span>
                                    </div>
                                </div>
                                <div class="start-area">
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="body">
                                <p>So glad i found openup!! It has made my blog tasks a billion times more enjoyable (which
                                    is an emotion way beyond.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-testimonial-three">
                            <div class="top-area">
                                <div class="author">
                                    <img src="{{ asset('assets/images/team/11.png') }}" alt="team-area" loading="lazy">
                                    <div class="info-wrapper-area">
                                        <p>
                                            Sophia
                                        </p>
                                        <span>SEO contain writer</span>
                                    </div>
                                </div>
                                <div class="start-area">
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="body">
                                <p>So glad i found openup!! It has made my blog tasks a billion times more enjoyable (which
                                    is an emotion way beyond.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ..:: our trasted clients area end ::.. -->

    </div>

    <div class="gradient-sec-three-two">
        <!-- ..:: rts-case area start ::.. -->
        <div class="case-area-three rts-section-gapBottom">
            <div class="shape-img">
                <img class="right" src="{{ asset('assets/images/case/07.png') }}" alt="images" loading="lazy">
                <img class="left" src="{{ asset('assets/images/case/08.png') }}" alt="images" loading="lazy">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-center-three">
                            <span class="pre">Use Cases</span>
                            <h2 class="title">Generate AI writing contain <br>
                                Across Your Favorite Tools</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5 mt--5">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- ..:: single case three area start ::.. -->
                        <div class="rts-single-case-three">
                            <div class="icon">
                                <svg width="30" height="32" viewBox="0 0 30 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.7148 6.43359C18.75 6.78516 23.9648 12 24.3164 17.9766C24.375 18.7383 23.7891 19.4414 23.0273 19.5C22.9688 19.5 22.9688 19.5 22.9102 19.5C22.207 19.5 21.5625 18.9141 21.5625 18.1523C21.2109 13.5234 17.168 9.48047 12.5391 9.1875C11.7773 9.1875 11.1914 8.48438 11.25 7.72266C11.25 6.96094 11.9531 6.375 12.7148 6.43359ZM13.125 0.75C22.3828 0.75 30 8.36719 30 17.625C30 18.6797 29.1211 19.5 28.125 19.5C27.0703 19.5 26.25 18.6797 26.25 17.625C26.25 10.418 20.332 4.5 13.125 4.5C12.0703 4.5 11.25 3.67969 11.25 2.625C11.25 1.62891 12.0703 0.75 13.125 0.75ZM10.0781 14.0508C14.4727 14.9297 17.6953 19.3242 16.6406 24.1289C15.9961 27.293 13.418 29.8711 10.2539 30.5156C4.80469 31.6875 0 27.5273 0 22.3125V7.78125C0 7.01953 0.585938 6.43359 1.34766 6.43359H4.16016C4.98047 6.43359 5.56641 7.01953 5.56641 7.78125V22.2539C5.56641 23.7188 6.85547 25.0078 8.4375 25.0078C9.96094 25.0078 11.25 23.7773 11.25 22.2539C11.25 21.082 10.4297 20.0273 9.375 19.6758C8.84766 19.5 8.4375 19.0312 8.4375 18.3867V15.457C8.4375 14.5781 9.19922 13.875 10.0781 14.0508Z"
                                        fill="#083A5E" />
                                </svg>
                            </div>
                            <div class="inner-content">
                                <h5 class="title">Blog Content</h5>
                                <p class="disc">
                                    Write a first draft. The first draft should be written in long-form, so don't worry
                                    about breaking up paragraphs.
                                </p>
                            </div>
                        </div>
                        <!-- ..:: single case three area end ::.. -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- ..:: single case three area start ::.. -->
                        <div class="rts-single-case-three">
                            <div class="icon">
                                <svg width="38" height="31" viewBox="0 0 38 31" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4 2.15625C4 1.39453 4.58594 0.75 5.40625 0.75H9.625C10.2695 0.75 10.8555 1.27734 10.9727 1.92188L11.0898 2.625H35.6992C36.9297 2.625 37.8672 3.85547 37.5156 5.02734L34.3516 16.2773C34.1172 17.0977 33.4141 17.625 32.5352 17.625H13.9609L14.4883 20.4375H32.5938C33.3555 20.4375 34 21.082 34 21.8438C34 22.6641 33.3555 23.25 32.5938 23.25H13.3164C12.6719 23.25 12.0859 22.7812 11.9688 22.1367L8.45312 3.5625H5.40625C4.58594 3.5625 4 2.97656 4 2.15625ZM17.125 27.9375C17.125 29.5195 15.8359 30.75 14.3125 30.75C12.7305 30.75 11.5 29.5195 11.5 27.9375C11.5 26.4141 12.7305 25.125 14.3125 25.125C15.8359 25.125 17.125 26.4141 17.125 27.9375ZM28.375 27.9375C28.375 26.4141 29.6055 25.125 31.1875 25.125C32.7109 25.125 34 26.4141 34 27.9375C34 29.5195 32.7109 30.75 31.1875 30.75C29.6055 30.75 28.375 29.5195 28.375 27.9375ZM6.34375 6.375C7.10547 6.375 7.75 7.01953 7.75 7.78125C7.75 8.60156 7.10547 9.1875 6.34375 9.1875H1.65625C0.835938 9.1875 0.25 8.60156 0.25 7.78125C0.25 7.01953 0.835938 6.375 1.65625 6.375H6.34375ZM7.28125 11.0625C8.04297 11.0625 8.6875 11.707 8.6875 12.4688C8.6875 13.2891 8.04297 13.875 7.28125 13.875H1.65625C0.835938 13.875 0.25 13.2891 0.25 12.4688C0.25 11.707 0.835938 11.0625 1.65625 11.0625H7.28125ZM8.21875 15.75C8.98047 15.75 9.625 16.3945 9.625 17.1562C9.625 17.9766 8.98047 18.5625 8.21875 18.5625H1.65625C0.835938 18.5625 0.25 17.9766 0.25 17.1562C0.25 16.3945 0.835938 15.75 1.65625 15.75H8.21875Z"
                                        fill="#083A5E" />
                                </svg>
                            </div>
                            <div class="inner-content">
                                <h5 class="title">eCommerce copy</h5>
                                <p class="disc">
                                    Write a first draft. The first draft should be written in long-form, so don't worry
                                    about breaking up paragraphs.
                                </p>
                            </div>
                        </div>
                        <!-- ..:: single case three area end ::.. -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- ..:: single case three area start ::.. -->
                        <div class="rts-single-case-three">
                            <div class="icon">

                                <svg width="26" height="27" viewBox="0 0 26 27" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.8125 0.625H11.543C12.5391 0.625 13.4766 1.03516 14.1797 1.73828L24.4922 12.0508C25.957 13.5156 25.957 15.918 24.4922 17.3828L16.6992 25.1758C15.2344 26.6406 12.832 26.6406 11.3672 25.1758L1.05469 14.8633C0.351562 14.1602 0 13.2227 0 12.2266V3.4375C0 1.91406 1.23047 0.625 2.8125 0.625ZM6.5625 9.0625C7.55859 9.0625 8.4375 8.24219 8.4375 7.1875C8.4375 6.19141 7.55859 5.3125 6.5625 5.3125C5.50781 5.3125 4.6875 6.19141 4.6875 7.1875C4.6875 8.24219 5.50781 9.0625 6.5625 9.0625Z"
                                        fill="#083A5E" />
                                </svg>

                            </div>
                            <div class="inner-content">
                                <h5 class="title">Sales Copy</h5>
                                <p class="disc">
                                    Write a first draft. The first draft should be written in long-form, so don't worry
                                    about breaking up paragraphs.
                                </p>
                            </div>
                        </div>
                        <!-- ..:: single case three area end ::.. -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- ..:: single case three area start ::.. -->
                        <div class="rts-single-case-three">
                            <div class="icon">

                                <svg width="38" height="31" viewBox="0 0 38 31" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.625 26.0625V23.25H30V27.9375C30 29.5195 28.7109 30.75 27.1875 30.75H2.8125C1.23047 30.75 0 29.5195 0 27.9375V11.0625C0 9.53906 1.23047 8.25 2.8125 8.25H9.375V26.0625C9.375 26.5898 9.78516 27 10.3125 27H19.6875C20.1562 27 20.625 26.5898 20.625 26.0625ZM6.09375 26.4727V24.7148C6.09375 24.4805 5.80078 24.1875 5.56641 24.1875H3.80859C3.51562 24.1875 3.28125 24.4805 3.28125 24.7148V26.4727C3.28125 26.7656 3.51562 27 3.80859 27H5.56641C5.80078 27 6.09375 26.7656 6.09375 26.4727ZM6.09375 20.3789V18.6211C6.09375 18.3867 5.80078 18.0938 5.56641 18.0938H3.80859C3.51562 18.0938 3.28125 18.3867 3.28125 18.6211V20.3789C3.28125 20.6719 3.51562 20.9062 3.80859 20.9062H5.56641C5.80078 20.9062 6.09375 20.6719 6.09375 20.3789ZM6.09375 14.2852V12.5273C6.09375 12.293 5.80078 12 5.56641 12H3.80859C3.51562 12 3.28125 12.2344 3.28125 12.5273V14.2852C3.28125 14.5781 3.51562 14.8125 3.80859 14.8125H5.56641C5.80078 14.8125 6.09375 14.5781 6.09375 14.2852ZM23.9062 24.7148V26.4727C23.9062 26.7656 24.1406 27 24.4336 27H26.1914C26.4258 27 26.7188 26.7656 26.7188 26.4727V24.7148C26.7188 24.4805 26.4258 24.1875 26.1914 24.1875H24.4336C24.1406 24.1875 23.9062 24.4805 23.9062 24.7148ZM34.6289 0.75C36.2109 0.75 37.5 2.03906 37.4414 3.5625V18.5625C37.4414 20.1445 36.1523 21.375 34.6289 21.375H14.0039C12.4219 21.375 11.1914 20.1445 11.1914 18.5625V3.5625C11.1914 2.03906 12.4805 0.75 14.0039 0.75H34.6289ZM17.7539 4.5C16.7578 4.5 15.8789 5.37891 15.8789 6.375C15.8789 7.42969 16.7578 8.25 17.7539 8.25C18.75 8.25 19.6289 7.42969 19.6289 6.375C19.6289 5.37891 18.75 4.5 17.7539 4.5ZM33.6328 17.1562C33.75 16.8633 33.75 16.4531 33.5742 16.2188L27.3047 6.84375C27.1289 6.55078 26.8359 6.375 26.543 6.375C26.1914 6.375 25.8984 6.55078 25.7227 6.84375L22.0312 12.3516L20.7422 10.5352C20.5664 10.3008 20.2734 10.125 19.9805 10.125C19.6875 10.125 19.4531 10.3008 19.2773 10.5352L15.1758 16.1602C14.9414 16.4531 14.9414 16.8047 15.0586 17.1562C15.2344 17.4492 15.5273 17.625 15.8789 17.625H32.8125C33.1055 17.625 33.457 17.4492 33.6328 17.1562Z"
                                        fill="#083A5E" />
                                </svg>

                            </div>
                            <div class="inner-content">
                                <h5 class="title">Digital Ad Copy</h5>
                                <p class="disc">
                                    Write a first draft. The first draft should be written in long-form, so don't worry
                                    about breaking up paragraphs.
                                </p>
                            </div>
                        </div>
                        <!-- ..:: single case three area end ::.. -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- ..:: single case three area start ::.. -->
                        <div class="rts-single-case-three">
                            <div class="icon">

                                <svg width="38" height="31" viewBox="0 0 38 31" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M24.375 15.75C24.375 17.8594 22.6758 19.5 20.625 19.5L11.3672 19.5586L6.50391 23.1914C6.15234 23.4258 5.625 23.1914 5.625 22.7227V19.5586L3.75 19.5C1.64062 19.5 0 17.8594 0 15.75V4.5C0 2.44922 1.64062 0.75 3.75 0.75H20.625C22.6758 0.75 24.375 2.44922 24.375 4.5V15.75ZM33.75 8.25C35.8008 8.25 37.5 9.94922 37.5 12V23.3086C37.5 25.3594 35.8008 27 33.75 27H31.875V30.2227C31.875 30.6914 31.2891 30.9258 30.8789 30.6328L26.0156 27H18.6914C16.6406 27 15 25.3594 15 23.25V21.375H20.625C23.6719 21.375 26.25 18.8555 26.25 15.75V8.25H33.75Z"
                                        fill="#083A5E" />
                                </svg>

                            </div>
                            <div class="inner-content">
                                <h5 class="title">Social Media Content</h5>
                                <p class="disc">
                                    Write a first draft. The first draft should be written in long-form, so don't worry
                                    about breaking up paragraphs.
                                </p>
                            </div>
                        </div>
                        <!-- ..:: single case three area end ::.. -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- ..:: single case three area start ::.. -->
                        <div class="rts-single-case-three">
                            <div class="icon">

                                <svg width="30" height="27" viewBox="0 0 30 27" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0 4.375C0 2.32422 1.64062 0.625 3.75 0.625H26.25C28.3008 0.625 30 2.32422 30 4.375V23.125C30 25.2344 28.3008 26.875 26.25 26.875H3.75C1.64062 26.875 0 25.2344 0 23.125V4.375ZM5.625 8.125C6.62109 8.125 7.5 7.30469 7.5 6.25C7.5 5.25391 6.62109 4.375 5.625 4.375C4.57031 4.375 3.75 5.25391 3.75 6.25C3.75 7.30469 4.57031 8.125 5.625 8.125ZM26.25 6.25C26.25 5.48828 25.6055 4.84375 24.8438 4.84375H10.7812C9.96094 4.84375 9.375 5.48828 9.375 6.25C9.375 7.07031 9.96094 7.65625 10.7812 7.65625H24.8438C25.6055 7.65625 26.25 7.07031 26.25 6.25Z"
                                        fill="#083A5E" />
                                </svg>

                            </div>
                            <div class="inner-content">
                                <h5 class="title">Website copy</h5>
                                <p class="disc">
                                    Write a first draft. The first draft should be written in long-form, so don't worry
                                    about breaking up paragraphs.
                                </p>
                            </div>
                        </div>
                        <!-- ..:: single case three area end ::.. -->
                    </div>
                    <div class="col-lg-12">
                        <a href="{{ route('usecase2') }}" class="rts-btn btn-primary mt--30 m-center">View All Use
                            Cases</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ..:: rts-case area end ::.. -->
    </div>

    <!-- ..:: how it works area start ::.. -->
    <div class="how-it-work-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-center-three">
                        <span class="pre">how It work</span>
                        <h2 class="title">Instruct to our AI <br>
                            writing generate copy</h2>
                    </div>
                </div>
            </div>
            <div class="row mt--40">
                <div class="col-lg-12">
                    <!-- ..:: working process min wrapper ::.. -->
                    <div class="working_p-swiper-main-wrapper">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="working-process-main-wrapper">
                                        <div class="row g-5 align-items-center">
                                            <div class="col-lg-6">
                                                <div class="thumbnail-main-wrapper">
                                                    <img src="{{ asset('assets/images/steps/05.svg') }}" alt="images"
                                                        loading="lazy">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 pl--100 pl_md--50 pl_sm--15">
                                                <div class="steps-main-content-three">
                                                    <span class="trans">01</span>
                                                    <h2 class="title">Select writing <br>
                                                        template</h2>
                                                    <p class="disc">
                                                        A writing template is a pre-designed format or structure that can be
                                                        used as a starting point for creating a specific type of written
                                                        content.
                                                    </p>
                                                    <a href="#" class="rts-btn btn-primary">Start writing free</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="working-process-main-wrapper">
                                        <div class="row g-5 align-items-center">
                                            <div class="col-lg-6">
                                                <div class="thumbnail-main-wrapper">
                                                    <img src="{{ asset('assets/images/steps/06.svg') }}" alt="images"
                                                        loading="lazy">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 pl--100 pl_md--50 pl_sm--15">
                                                <div class="steps-main-content-three">
                                                    <span class="trans">01</span>
                                                    <h2 class="title">Select writing <br>
                                                        template</h2>
                                                    <p class="disc">
                                                        A writing template is a pre-designed format or structure that can be
                                                        used as a starting point for creating a specific type of written
                                                        content.
                                                    </p>
                                                    <a href="#" class="rts-btn btn-primary">Start writing free</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="working-process-main-wrapper">
                                        <div class="row g-5 align-items-center">
                                            <div class="col-lg-6">
                                                <div class="thumbnail-main-wrapper">
                                                    <img src="{{ asset('assets/images/steps/07.svg') }}" alt="images"
                                                        loading="lazy">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 pl--100 pl_md--50 pl_sm--15">
                                                <div class="steps-main-content-three">
                                                    <span class="trans">01</span>
                                                    <h2 class="title">Select writing <br>
                                                        template</h2>
                                                    <p class="disc">
                                                        A writing template is a pre-designed format or structure that can be
                                                        used as a starting point for creating a specific type of written
                                                        content.
                                                    </p>
                                                    <a href="#" class="rts-btn btn-primary">Start writing free</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="thumbnail-img-left">
                            <img src="{{ asset('assets/images/testimonials/02.png') }}" alt="testimonials"
                                loading="lazy">
                        </div>
                    </div>
                    <!-- ..:: working process min wrapper end ::.. -->
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: how it works area end ::.. -->

    <div class="bottom-gradient">

        <!-- ..:: pricing table three area start ::.. -->
        <div class="pricing-table-three-area rts-section-gapBottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-center-three">
                            <span class="pre">Pricing</span>
                            <h2 class="title">Start your content <br>
                                writing with AI</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--10 g-5">
                    <div class="col-lg-12">
                        <!-- ..:: pricing tabs area ::.. -->
                        <ul class="nav nav-button-area-main nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">Monthly</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                    type="button" role="tab" aria-controls="profile"
                                    aria-selected="false">Annually</button>
                            </li>
                        </ul>
                        <!-- ..:: pricing tabs area end ::.. -->
                    </div>
                </div>
                <div class="row mt--30">
                    <div class="col-lg-12">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <div class="row g-5">
                                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                        <!-- ..:: single pricing title start-->
                                        <div class="signle-pricing-main-con-three left-area">
                                            <div class="thumbnail-img">
                                                <img src="{{ asset('assets/images/testimonials/01.png') }}"
                                                    alt="img" loading="lazy">
                                            </div>
                                            <div class="content-text">
                                                <!-- ..:: single ::.. -->
                                                <div class="single-con">
                                                    <div class="icon">
                                                        <svg width="23" height="17" viewBox="0 0 23 17"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M18 0.5C19.2305 0.5 20.25 1.51953 20.25 2.75V5.03516C19.6875 5.10547 19.1953 5.35156 18.7734 5.77344L12.4102 12.1367C12.1289 12.418 11.918 12.7695 11.8125 13.1914L11.6016 14H2.25C0.984375 14 0 13.0156 0 11.75V2.75C0 1.51953 0.984375 0.5 2.25 0.5H18ZM3.9375 8.375C3.62109 8.375 3.375 8.65625 3.375 8.9375C3.375 9.25391 3.62109 9.5 3.9375 9.5H11.8125C12.0938 9.5 12.375 9.25391 12.375 8.9375C12.375 8.65625 12.0938 8.375 11.8125 8.375H3.9375ZM3.9375 6.125H15.1875C15.4688 6.125 15.75 5.87891 15.75 5.5625C15.75 5.28125 15.4688 5 15.1875 5H3.9375C3.62109 5 3.375 5.28125 3.375 5.5625C3.375 5.87891 3.62109 6.125 3.9375 6.125ZM22.0781 7.07422C22.6055 7.60156 22.6055 8.48047 22.0781 9.04297L21.0234 10.0977L18.5273 7.60156L19.582 6.54688C20.1094 6.01953 21.0234 6.01953 21.5508 6.54688L22.0781 7.07422ZM13.1836 12.9102L17.7539 8.375L20.25 10.8711L15.6797 15.4062C15.5391 15.5469 15.3633 15.6523 15.1875 15.7227L13.043 16.25C12.8672 16.2852 12.6562 16.25 12.5156 16.1094C12.375 15.9688 12.3398 15.7578 12.375 15.5469L12.9023 13.4375C12.9375 13.2617 13.043 13.0859 13.1836 12.9102Z"
                                                                fill="#083A5E" />
                                                        </svg>
                                                    </div>
                                                    <p>10,000 <span> Monthly Word Limit</span> </p>
                                                </div>
                                                <!-- ..:: single end ::.. -->
                                                <!-- ..:: single ::.. -->
                                                <div class="single-con">
                                                    <div class="icon">
                                                        <svg width="18" height="19" viewBox="0 0 18 19"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.15625 0.460938C8.68359 0.214844 9.28125 0.214844 9.80859 0.460938L17.5078 4.01172C17.7891 4.15234 18 4.43359 18 4.75C18 5.10156 17.7891 5.38281 17.5078 5.52344L9.80859 9.07422C9.28125 9.32031 8.68359 9.32031 8.15625 9.07422L0.457031 5.52344C0.175781 5.38281 0 5.10156 0 4.75C0 4.43359 0.175781 4.15234 0.457031 4.01172L8.15625 0.460938ZM17.5078 8.51172C17.7891 8.65234 18 8.93359 18 9.25C18 9.60156 17.7891 9.88281 17.5078 10.0234L9.80859 13.5742C9.28125 13.8203 8.68359 13.8203 8.15625 13.5742L0.457031 10.0234C0.175781 9.88281 0 9.60156 0 9.25C0 8.93359 0.175781 8.65234 0.457031 8.51172L2.35547 7.63281L7.69922 10.0938C8.50781 10.4805 9.45703 10.4805 10.2656 10.0938L15.6094 7.63281L17.5078 8.51172ZM10.2656 14.5938L15.6094 12.1328L17.5078 13.0117C17.7891 13.1523 18 13.4336 18 13.75C18 14.1016 17.7891 14.3828 17.5078 14.5234L9.80859 18.0742C9.28125 18.3203 8.68359 18.3203 8.15625 18.0742L0.457031 14.5234C0.175781 14.3828 0 14.1016 0 13.75C0 13.4336 0.175781 13.1523 0.457031 13.0117L2.35547 12.1328L7.69922 14.5938C8.50781 14.9805 9.45703 14.9805 10.2656 14.5938Z"
                                                                fill="#083A5E" />
                                                        </svg>
                                                    </div>
                                                    <p>10+ Templates</p>
                                                </div>
                                                <!-- ..:: single end ::.. -->
                                                <!-- ..:: single ::.. -->
                                                <div class="single-con">
                                                    <div class="icon">
                                                        <svg width="20" height="19" viewBox="0 0 20 19"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.6367 8.16016C12.3555 8.16016 12.0742 8.19531 11.793 8.26562L8.875 5.34766C8.875 5.06641 8.875 4.78516 8.91016 4.50391C9.22656 2.53516 10.7383 0.882812 12.707 0.425781C13.5508 0.214844 14.3594 0.214844 15.0977 0.390625C15.4844 0.496094 15.625 0.988281 15.3438 1.26953L12.918 3.69531V6.29688H15.5547L17.9805 3.90625C18.2617 3.625 18.7539 3.73047 18.8594 4.11719C19.0352 4.85547 19.0352 5.69922 18.8242 6.54297C18.4727 8.05469 17.3828 9.28516 15.9766 9.91797L15.2734 9.25C14.5703 8.54688 13.6562 8.16016 12.6367 8.16016ZM14.5 10.0586L18.6133 14.1016C19.1055 14.6289 19.1055 15.4727 18.6133 15.9648L16.75 17.8281C16.2227 18.3203 15.4141 18.3203 14.8867 17.8281L10.7734 13.7148C9.96484 12.9062 9.82422 11.6758 10.2812 10.6914L6.55469 6.96484H4.375L1 2.5L3.25 0.25L7.71484 3.625V5.80469L11.4766 9.56641C12.4609 9.10938 13.6562 9.25 14.5 10.0586ZM8.98047 11.043C8.80469 11.8516 8.91016 12.6602 9.22656 13.3984L5.04297 17.582C4.58594 18.0391 3.95312 18.25 3.35547 18.25C2.75781 18.25 2.125 18.0391 1.66797 17.582C0.753906 16.6328 0.753906 15.1562 1.66797 14.207L6.90625 8.96875L8.98047 11.043ZM3.25 16.8438C3.70703 16.8438 4.09375 16.4922 4.09375 16C4.09375 15.543 3.70703 15.1562 3.25 15.1562C2.75781 15.1562 2.40625 15.543 2.40625 16C2.40625 16.4922 2.75781 16.8438 3.25 16.8438Z"
                                                                fill="#083A5E" />
                                                        </svg>
                                                    </div>
                                                    <p>Advance Editor Tool</p>
                                                </div>
                                                <!-- ..:: single end ::.. -->
                                                <!-- ..:: single ::.. -->
                                                <div class="single-con">
                                                    <div class="icon">
                                                        <svg width="23" height="14" viewBox="0 0 23 14"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M15.75 4.01562C16.1367 4.01562 16.4531 4.33203 16.4531 4.71875V4.85938H18.5625C18.9492 4.85938 19.2656 5.17578 19.2656 5.5625C19.2656 5.94922 18.9492 6.26562 18.5625 6.26562H18.4922L18.4219 6.44141C18.1055 7.28516 17.6133 8.09375 17.0156 8.72656C17.0508 8.76172 17.0859 8.76172 17.1211 8.79688L17.7891 9.18359C18.1055 9.39453 18.2109 9.81641 18.0352 10.168C17.8242 10.4844 17.4023 10.5898 17.0508 10.4141L16.3828 9.99219C16.2422 9.92188 16.0664 9.81641 15.9258 9.71094C15.5742 9.95703 15.1523 10.2031 14.7305 10.3789L14.625 10.4492C14.2734 10.5898 13.8516 10.4492 13.6758 10.0977C13.5352 9.71094 13.6758 9.32422 14.0273 9.14844L14.168 9.11328C14.3789 9.00781 14.625 8.86719 14.8359 8.76172L14.3789 8.33984C14.1328 8.05859 14.1328 7.60156 14.3789 7.32031C14.6602 7.03906 15.1172 7.03906 15.3984 7.32031L15.8906 7.84766H15.9258C16.3477 7.39062 16.6992 6.86328 16.9805 6.26562H13.2188C12.7969 6.26562 12.5156 5.94922 12.5156 5.5625C12.5156 5.17578 12.7969 4.85938 13.2188 4.85938H15.0469V4.71875C15.0469 4.33203 15.3281 4.01562 15.75 4.01562ZM5.625 6.47656L6.29297 7.95312H4.92188L5.625 6.47656ZM0 2.75C0 1.51953 0.984375 0.5 2.25 0.5H20.25C21.4805 0.5 22.5 1.51953 22.5 2.75V11.75C22.5 13.0156 21.4805 14 20.25 14H2.25C0.984375 14 0 13.0156 0 11.75V2.75ZM11.25 11.75H20.25V2.75H11.25V11.75ZM6.25781 4.4375C6.15234 4.19141 5.87109 4.01562 5.625 4.01562C5.34375 4.01562 5.0625 4.19141 4.95703 4.4375L2.70703 9.5C2.56641 9.85156 2.70703 10.2734 3.05859 10.4492C3.41016 10.5898 3.83203 10.4492 4.00781 10.0977L4.32422 9.35938H6.89062L7.20703 10.0977C7.38281 10.4492 7.80469 10.5898 8.15625 10.4492C8.50781 10.2734 8.64844 9.85156 8.50781 9.5L6.25781 4.4375Z"
                                                                fill="#083A5E" />
                                                        </svg>
                                                    </div>
                                                    <p>30+ Languages </p>
                                                </div>
                                                <!-- ..:: single end ::.. -->
                                                <!-- ..:: single ::.. -->
                                                <div class="single-con">
                                                    <div class="icon">
                                                        <svg width="19" height="19" viewBox="0 0 19 19"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M1.63281 12.625L5.46484 10.9727C5.92188 10.7969 6.44922 10.9023 6.73047 11.2891L8.27734 13.1875C10.7383 11.9922 12.707 10.0234 13.9023 7.5625L12.0039 6.01562C11.6172 5.73438 11.5117 5.20703 11.6875 4.75L13.3398 0.917969C13.5508 0.460938 14.0781 0.179688 14.5703 0.285156L18.1211 1.12891C18.6484 1.23438 18.9648 1.65625 18.9648 2.18359C18.9648 11.043 11.7578 18.2852 2.89844 18.2852C2.37109 18.2852 1.94922 17.9336 1.84375 17.4062L1 13.8906C0.894531 13.3633 1.17578 12.8359 1.63281 12.625Z"
                                                                fill="#083A5E" />
                                                        </svg>
                                                    </div>
                                                    <p>Regular Technical Support</p>
                                                </div>
                                                <!-- ..:: single end ::.. -->
                                            </div>
                                        </div>
                                        <!-- ..:: single pricing title end ::.. -->
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                        <div class="single-prcing-three-main-wrapper">
                                            <div class="head-area">
                                                <span class="pre">Simple Plan</span>
                                                <h2 class="title">Free<span>/month</span> </h2>
                                            </div>
                                            <div class="body">
                                                <p class="disc">A simple pricing plan includes a set of clearly defined
                                                    pricing tiers.</p>
                                                <div class="check-only">
                                                    <i class="fa-solid fa-check"></i>
                                                </div>
                                                <div class="check-only">
                                                    <i class="fa-solid fa-check"></i>
                                                </div>
                                                <div class="check-only">
                                                    <i class="fa-light fa-xmark"></i>
                                                </div>
                                                <div class="check-only">
                                                    <p>30+ Languages</p>
                                                </div>
                                                <div class="check-only">
                                                    <i class="fa-light fa-xmark"></i>
                                                </div>
                                                <a href="#" class="rts-btn btn-border">Sing Up For Free</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                        <div class="single-prcing-three-main-wrapper active">
                                            <div class="head-area">
                                                <span class="pre">Premium</span>
                                                <h2 class="title">$199<span>/month</span> </h2>
                                            </div>
                                            <div class="body">
                                                <p class="disc">A simple pricing plan includes a set of clearly defined
                                                    pricing tiers.</p>
                                                <div class="check-only">
                                                    <i class="fa-solid fa-check"></i>
                                                </div>
                                                <div class="check-only">
                                                    <p>90+ Templates</p>
                                                </div>
                                                <div class="check-only">
                                                    <i class="fa-solid fa-check"></i>
                                                </div>
                                                <div class="check-only">
                                                    <p>60+ Languages</p>
                                                </div>
                                                <div class="check-only">
                                                    <i class="fa-solid fa-check"></i>
                                                </div>
                                                <a href="#" class="rts-btn btn-border">Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                        <div class="single-prcing-three-main-wrapper">
                                            <div class="head-area">
                                                <span class="pre">Popular Plan</span>
                                                <h2 class="title">$99<span>/month</span> </h2>
                                            </div>
                                            <div class="body">
                                                <p class="disc">A simple pricing plan includes a set of clearly defined
                                                    pricing tiers.</p>
                                                <div class="check-only">
                                                    <i class="fa-solid fa-check"></i>
                                                </div>
                                                <div class="check-only">
                                                    <p>30+ Templates</p>
                                                </div>
                                                <div class="check-only">
                                                    <i class="fa-solid fa-check"></i>
                                                </div>
                                                <div class="check-only">
                                                    <p>40+ Languages</p>
                                                </div>
                                                <div class="check-only">
                                                    <i class="fa-solid fa-check"></i>
                                                </div>
                                                <a href="#" class="rts-btn btn-border">Request a Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row g-5">
                                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                        <!-- ..:: single pricing title start-->
                                        <div class="signle-pricing-main-con-three left-area">
                                            <div class="thumbnail-img">
                                                <img src="{{ asset('assets/images/testimonials/01.png') }}"
                                                    alt="img" loading="lazy">
                                            </div>
                                            <div class="content-text">
                                                <!-- ..:: single ::.. -->
                                                <div class="single-con">
                                                    <div class="icon">
                                                        <svg width="23" height="17" viewBox="0 0 23 17"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M18 0.5C19.2305 0.5 20.25 1.51953 20.25 2.75V5.03516C19.6875 5.10547 19.1953 5.35156 18.7734 5.77344L12.4102 12.1367C12.1289 12.418 11.918 12.7695 11.8125 13.1914L11.6016 14H2.25C0.984375 14 0 13.0156 0 11.75V2.75C0 1.51953 0.984375 0.5 2.25 0.5H18ZM3.9375 8.375C3.62109 8.375 3.375 8.65625 3.375 8.9375C3.375 9.25391 3.62109 9.5 3.9375 9.5H11.8125C12.0938 9.5 12.375 9.25391 12.375 8.9375C12.375 8.65625 12.0938 8.375 11.8125 8.375H3.9375ZM3.9375 6.125H15.1875C15.4688 6.125 15.75 5.87891 15.75 5.5625C15.75 5.28125 15.4688 5 15.1875 5H3.9375C3.62109 5 3.375 5.28125 3.375 5.5625C3.375 5.87891 3.62109 6.125 3.9375 6.125ZM22.0781 7.07422C22.6055 7.60156 22.6055 8.48047 22.0781 9.04297L21.0234 10.0977L18.5273 7.60156L19.582 6.54688C20.1094 6.01953 21.0234 6.01953 21.5508 6.54688L22.0781 7.07422ZM13.1836 12.9102L17.7539 8.375L20.25 10.8711L15.6797 15.4062C15.5391 15.5469 15.3633 15.6523 15.1875 15.7227L13.043 16.25C12.8672 16.2852 12.6562 16.25 12.5156 16.1094C12.375 15.9688 12.3398 15.7578 12.375 15.5469L12.9023 13.4375C12.9375 13.2617 13.043 13.0859 13.1836 12.9102Z"
                                                                fill="#083A5E" />
                                                        </svg>
                                                    </div>
                                                    <p>10,000 <span> Monthly Word Limit</span> </p>
                                                </div>
                                                <!-- ..:: single end ::.. -->
                                                <!-- ..:: single ::.. -->
                                                <div class="single-con">
                                                    <div class="icon">
                                                        <svg width="18" height="19" viewBox="0 0 18 19"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.15625 0.460938C8.68359 0.214844 9.28125 0.214844 9.80859 0.460938L17.5078 4.01172C17.7891 4.15234 18 4.43359 18 4.75C18 5.10156 17.7891 5.38281 17.5078 5.52344L9.80859 9.07422C9.28125 9.32031 8.68359 9.32031 8.15625 9.07422L0.457031 5.52344C0.175781 5.38281 0 5.10156 0 4.75C0 4.43359 0.175781 4.15234 0.457031 4.01172L8.15625 0.460938ZM17.5078 8.51172C17.7891 8.65234 18 8.93359 18 9.25C18 9.60156 17.7891 9.88281 17.5078 10.0234L9.80859 13.5742C9.28125 13.8203 8.68359 13.8203 8.15625 13.5742L0.457031 10.0234C0.175781 9.88281 0 9.60156 0 9.25C0 8.93359 0.175781 8.65234 0.457031 8.51172L2.35547 7.63281L7.69922 10.0938C8.50781 10.4805 9.45703 10.4805 10.2656 10.0938L15.6094 7.63281L17.5078 8.51172ZM10.2656 14.5938L15.6094 12.1328L17.5078 13.0117C17.7891 13.1523 18 13.4336 18 13.75C18 14.1016 17.7891 14.3828 17.5078 14.5234L9.80859 18.0742C9.28125 18.3203 8.68359 18.3203 8.15625 18.0742L0.457031 14.5234C0.175781 14.3828 0 14.1016 0 13.75C0 13.4336 0.175781 13.1523 0.457031 13.0117L2.35547 12.1328L7.69922 14.5938C8.50781 14.9805 9.45703 14.9805 10.2656 14.5938Z"
                                                                fill="#083A5E" />
                                                        </svg>
                                                    </div>
                                                    <p>10+ Templates</p>
                                                </div>
                                                <!-- ..:: single end ::.. -->
                                                <!-- ..:: single ::.. -->
                                                <div class="single-con">
                                                    <div class="icon">
                                                        <svg width="20" height="19" viewBox="0 0 20 19"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.6367 8.16016C12.3555 8.16016 12.0742 8.19531 11.793 8.26562L8.875 5.34766C8.875 5.06641 8.875 4.78516 8.91016 4.50391C9.22656 2.53516 10.7383 0.882812 12.707 0.425781C13.5508 0.214844 14.3594 0.214844 15.0977 0.390625C15.4844 0.496094 15.625 0.988281 15.3438 1.26953L12.918 3.69531V6.29688H15.5547L17.9805 3.90625C18.2617 3.625 18.7539 3.73047 18.8594 4.11719C19.0352 4.85547 19.0352 5.69922 18.8242 6.54297C18.4727 8.05469 17.3828 9.28516 15.9766 9.91797L15.2734 9.25C14.5703 8.54688 13.6562 8.16016 12.6367 8.16016ZM14.5 10.0586L18.6133 14.1016C19.1055 14.6289 19.1055 15.4727 18.6133 15.9648L16.75 17.8281C16.2227 18.3203 15.4141 18.3203 14.8867 17.8281L10.7734 13.7148C9.96484 12.9062 9.82422 11.6758 10.2812 10.6914L6.55469 6.96484H4.375L1 2.5L3.25 0.25L7.71484 3.625V5.80469L11.4766 9.56641C12.4609 9.10938 13.6562 9.25 14.5 10.0586ZM8.98047 11.043C8.80469 11.8516 8.91016 12.6602 9.22656 13.3984L5.04297 17.582C4.58594 18.0391 3.95312 18.25 3.35547 18.25C2.75781 18.25 2.125 18.0391 1.66797 17.582C0.753906 16.6328 0.753906 15.1562 1.66797 14.207L6.90625 8.96875L8.98047 11.043ZM3.25 16.8438C3.70703 16.8438 4.09375 16.4922 4.09375 16C4.09375 15.543 3.70703 15.1562 3.25 15.1562C2.75781 15.1562 2.40625 15.543 2.40625 16C2.40625 16.4922 2.75781 16.8438 3.25 16.8438Z"
                                                                fill="#083A5E" />
                                                        </svg>
                                                    </div>
                                                    <p>Advance Editor Tool</p>
                                                </div>
                                                <!-- ..:: single end ::.. -->
                                                <!-- ..:: single ::.. -->
                                                <div class="single-con">
                                                    <div class="icon">
                                                        <svg width="23" height="14" viewBox="0 0 23 14"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M15.75 4.01562C16.1367 4.01562 16.4531 4.33203 16.4531 4.71875V4.85938H18.5625C18.9492 4.85938 19.2656 5.17578 19.2656 5.5625C19.2656 5.94922 18.9492 6.26562 18.5625 6.26562H18.4922L18.4219 6.44141C18.1055 7.28516 17.6133 8.09375 17.0156 8.72656C17.0508 8.76172 17.0859 8.76172 17.1211 8.79688L17.7891 9.18359C18.1055 9.39453 18.2109 9.81641 18.0352 10.168C17.8242 10.4844 17.4023 10.5898 17.0508 10.4141L16.3828 9.99219C16.2422 9.92188 16.0664 9.81641 15.9258 9.71094C15.5742 9.95703 15.1523 10.2031 14.7305 10.3789L14.625 10.4492C14.2734 10.5898 13.8516 10.4492 13.6758 10.0977C13.5352 9.71094 13.6758 9.32422 14.0273 9.14844L14.168 9.11328C14.3789 9.00781 14.625 8.86719 14.8359 8.76172L14.3789 8.33984C14.1328 8.05859 14.1328 7.60156 14.3789 7.32031C14.6602 7.03906 15.1172 7.03906 15.3984 7.32031L15.8906 7.84766H15.9258C16.3477 7.39062 16.6992 6.86328 16.9805 6.26562H13.2188C12.7969 6.26562 12.5156 5.94922 12.5156 5.5625C12.5156 5.17578 12.7969 4.85938 13.2188 4.85938H15.0469V4.71875C15.0469 4.33203 15.3281 4.01562 15.75 4.01562ZM5.625 6.47656L6.29297 7.95312H4.92188L5.625 6.47656ZM0 2.75C0 1.51953 0.984375 0.5 2.25 0.5H20.25C21.4805 0.5 22.5 1.51953 22.5 2.75V11.75C22.5 13.0156 21.4805 14 20.25 14H2.25C0.984375 14 0 13.0156 0 11.75V2.75ZM11.25 11.75H20.25V2.75H11.25V11.75ZM6.25781 4.4375C6.15234 4.19141 5.87109 4.01562 5.625 4.01562C5.34375 4.01562 5.0625 4.19141 4.95703 4.4375L2.70703 9.5C2.56641 9.85156 2.70703 10.2734 3.05859 10.4492C3.41016 10.5898 3.83203 10.4492 4.00781 10.0977L4.32422 9.35938H6.89062L7.20703 10.0977C7.38281 10.4492 7.80469 10.5898 8.15625 10.4492C8.50781 10.2734 8.64844 9.85156 8.50781 9.5L6.25781 4.4375Z"
                                                                fill="#083A5E" />
                                                        </svg>
                                                    </div>
                                                    <p>30+ Languages </p>
                                                </div>
                                                <!-- ..:: single end ::.. -->
                                                <!-- ..:: single ::.. -->
                                                <div class="single-con">
                                                    <div class="icon">
                                                        <svg width="19" height="19" viewBox="0 0 19 19"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M1.63281 12.625L5.46484 10.9727C5.92188 10.7969 6.44922 10.9023 6.73047 11.2891L8.27734 13.1875C10.7383 11.9922 12.707 10.0234 13.9023 7.5625L12.0039 6.01562C11.6172 5.73438 11.5117 5.20703 11.6875 4.75L13.3398 0.917969C13.5508 0.460938 14.0781 0.179688 14.5703 0.285156L18.1211 1.12891C18.6484 1.23438 18.9648 1.65625 18.9648 2.18359C18.9648 11.043 11.7578 18.2852 2.89844 18.2852C2.37109 18.2852 1.94922 17.9336 1.84375 17.4062L1 13.8906C0.894531 13.3633 1.17578 12.8359 1.63281 12.625Z"
                                                                fill="#083A5E" />
                                                        </svg>
                                                    </div>
                                                    <p>Regular Technical Support</p>
                                                </div>
                                                <!-- ..:: single end ::.. -->
                                            </div>
                                        </div>
                                        <!-- ..:: single pricing title end ::.. -->
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                        <div class="single-prcing-three-main-wrapper">
                                            <div class="head-area">
                                                <span class="pre">Simple Plan</span>
                                                <h2 class="title">Free<span>/month</span> </h2>
                                            </div>
                                            <div class="body">
                                                <p class="disc">A simple pricing plan includes a set of clearly defined
                                                    pricing tiers.</p>
                                                <div class="check-only">
                                                    <i class="fa-solid fa-check"></i>
                                                </div>
                                                <div class="check-only">
                                                    <i class="fa-solid fa-check"></i>
                                                </div>
                                                <div class="check-only">
                                                    <i class="fa-light fa-xmark"></i>
                                                </div>
                                                <div class="check-only">
                                                    <p>30+ Languages</p>
                                                </div>
                                                <div class="check-only">
                                                    <i class="fa-light fa-xmark"></i>
                                                </div>
                                                <a href="#" class="rts-btn btn-border">Sing Up For Free</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                        <div class="single-prcing-three-main-wrapper active">
                                            <div class="head-area">
                                                <span class="pre">Premium</span>
                                                <h2 class="title">$199<span>/month</span> </h2>
                                            </div>
                                            <div class="body">
                                                <p class="disc">A simple pricing plan includes a set of clearly defined
                                                    pricing tiers.</p>
                                                <div class="check-only">
                                                    <i class="fa-solid fa-check"></i>
                                                </div>
                                                <div class="check-only">
                                                    <p>90+ Templates</p>
                                                </div>
                                                <div class="check-only">
                                                    <i class="fa-solid fa-check"></i>
                                                </div>
                                                <div class="check-only">
                                                    <p>60+ Languages</p>
                                                </div>
                                                <div class="check-only">
                                                    <i class="fa-solid fa-check"></i>
                                                </div>
                                                <a href="#" class="rts-btn btn-border">Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                        <div class="single-prcing-three-main-wrapper">
                                            <div class="head-area">
                                                <span class="pre">Popular Plan</span>
                                                <h2 class="title">$99<span>/month</span> </h2>
                                            </div>
                                            <div class="body">
                                                <p class="disc">A simple pricing plan includes a set of clearly defined
                                                    pricing tiers.</p>
                                                <div class="check-only">
                                                    <i class="fa-solid fa-check"></i>
                                                </div>
                                                <div class="check-only">
                                                    <p>30+ Templates</p>
                                                </div>
                                                <div class="check-only">
                                                    <i class="fa-solid fa-check"></i>
                                                </div>
                                                <div class="check-only">
                                                    <p>40+ Languages</p>
                                                </div>
                                                <div class="check-only">
                                                    <i class="fa-solid fa-check"></i>
                                                </div>
                                                <a href="#" class="rts-btn btn-border">Request a Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ..:: pricing table three area end ::.. -->

        <!-- ..:: rts faq area start ::.. -->
        <div class="rts-faq-area rts-section-gapBottom bg_faq">
            <div class="container">
                <div class="row">
                    <div class="title-center-three">
                        <span class="pre">Faq</span>
                        <h2 class="title">Questions About our OpenUp? <br>
                            We have Answers!</h2>
                    </div>
                </div>
                <div class="row mt--35">
                    <div class="col-lg-12">
                        <div class="accordion-area-one">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            What is openup content writing tool?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Once you know your audience, choose a topic that will resonate with them. Look
                                            for trending topics in your industry or address common questions or challenges
                                            your audience may be facing.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            what languages does it supports?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Once you know your audience, choose a topic that will resonate with them. Look
                                            for trending topics in your industry or address common questions or challenges
                                            your audience may be facing.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            What is sEO wirting ai and how do i use it?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Once you know your audience, choose a topic that will resonate with them. Look
                                            for trending topics in your industry or address common questions or challenges
                                            your audience may be facing.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            what languages does it supports?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Once you know your audience, choose a topic that will resonate with them. Look
                                            for trending topics in your industry or address common questions or challenges
                                            your audience may be facing.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">
                                            Does Openup to write long articles?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Once you know your audience, choose a topic that will resonate with them. Look
                                            for trending topics in your industry or address common questions or challenges
                                            your audience may be facing.
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
        <div class="cta-main-wrapper-three rts-section-gapBottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-wrapper-cta-three">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="content-main-wrapper-three">
                                        <h3 class="title">
                                            Ready to level-up?
                                        </h3>
                                        <p class="disc">
                                            Write 10x faster, engage your audience, & never struggle with <br> the blank
                                            page again.
                                        </p>
                                        <a href="#" class="rts-btn btn-primary">Start writing free</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 mt_sm--30">
                                    <div class="thumbnail-three">
                                        <img src="{{ asset('assets/images/cta/05.png') }}" alt="cta"
                                            loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ..:: cta area end ::.. -->
    </div>

    <!-- ..:: rts footer area start ::.. -->
    <div class="rts-footer-area bg-footer footer-two">
        <div class="container  rts-section-gapTop pb--100">
            <div class="row">
                <div class="col-lg-12">
                    <!-- ..:: footer main wrapper ::.. -->
                    <div class="footer-one-main-wrapper">
                        <!-- ..:: single sized  footer  ::.. -->
                        <div class="footer-singl-wized left-logo">
                            <div class="head">
                                <a href="#">
                                    <img src="{{ asset('assets/images/logo/05.svg') }}" alt="logo" loading="lazy">
                                </a>
                            </div>
                            <div class="body">
                                <p class="dsic">
                                    Openup is an artificial intelligence trained to automate important tasks such writing
                                    optimized product descriptions.
                                </p>
                                <div class="social-style-two">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-discord"></i></a></li>
                                    </ul>
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
                                <h6 class="title">News & Update</h6>
                            </div>
                            <div class="body">
                                <form action="#">
                                    <div class="input-area-fill">
                                        <input type="email" placeholder="Enter Your Email" required>
                                        <button> Subscribe</button>
                                    </div>
                                </form>
                                <p class="disc">
                                    Subscribe our newsletter for future updates. don’t worry we don’t spam your email
                                    address
                                </p>
                            </div>
                        </div>
                        <!-- ..:: single sized  footer end ::.. -->
                    </div>
                    <!-- ..:: footer main wrapper end ::.. -->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- ..:: footer-copyright-area start ::.. -->
                    <div class="copy-right-start-two">
                        <p><a href="https://themeforest.net/user/parvinfotech" target="_blank">Parv Infotech©</a> 2023.
                            All Rights Reserved.</p>
                        <ul>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- ..:: footer-copyright-area end ::.. -->
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: rts footer area end ::.. -->

    <div id="anywhere-home" class="">
    </div>
@endsection
