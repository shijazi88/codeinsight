@extends('layout.layout3')

@php
    $headtitle = 'CodeInsights';
    $bodyClass = 'index-five';
@endphp

@section('content')
    <!-- ..:: rts header area five ::.. -->
    <header class="rts-header-area-five header--sticky">
        <div class="header-main-wrapper">
            <div class="container">
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
                                                                            <p>About CodeInsights</p>
                                                                            <span>Get know about CodeInsights </span>
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
                                                                            <span>CodeInsights provide pro price</span>
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
                                                                            <span>Read CodeInsights artical</span>
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
                                                                            <span>CodeInsights provide pro price</span>
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
                                                                            <span>Read CodeInsights artical</span>
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
                                                                            <span>CodeInsights provide pro price</span>
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
                                                                            <span>Contact with CodeInsights</span>
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
                                                                            <span>Do you know CodeInsights</span>
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
                                <a href="#" class="rts-btn btn-lonly mr--30">Sign in</a>
                                <a href="#" class="rts-btn btn-blur">Try For Free</a>
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
    </header>
    <!-- ..:: rts header area five end ::.. -->

    <!-- ..:: rts banner area start five ::.. -->
    <div class="rts-banner-area-five rts-section-gap">
        <div class="container mt--50 mb--50">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-four-content five">
                        <span class="pre-title">AI Voice Generator</span>
                        <div class="title-area">
                            <h1 class="title">
                                Your Complete <br>
                                Generative Voice <br>
                                AI Toolkit
                            </h1>
                            <img src="{{ asset('assets/images/banner/09.png') }}" alt="shape" loading="lazy">
                        </div>
                        <p class="disc">
                            Generate realistic Text to Speech (TTS) audio using our online <br>
                            AI Voice Generator and the best synthetic voices.
                        </p>
                        <div class="button-area-main">
                            <a href="{{ route('about') }}" class="rts-btn btn-primary">Start Now for Free</a>
                            <a href="{{ route('contact') }}" class="rts-btn btn-border-p">Request Demo</a>
                        </div>
                        <div class="voice-languages-wrapper">
                            <p>AI Voices Toolkit <a href="#">120+ Language</a></p>
                            <div class="img-wrapper">
                                <img class="one" src="{{ asset('assets/images/banner/user/07.png') }}"
                                    alt="banner-user" loading="lazy">
                                <img class="two" src="{{ asset('assets/images/banner/user/08.png') }}"
                                    alt="banner-user" loading="lazy">
                                <img class="three" src="{{ asset('assets/images/banner/user/09.png') }}"
                                    alt="banner-user" loading="lazy">
                                <img class="four" src="{{ asset('assets/images/banner/user/10.png') }}"
                                    alt="banner-user" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- ..:: banenr seven area start ::.. -->
                    <div class="banner-five-thumbnail">
                        <img src="{{ asset('assets/images/banner/07.png') }}" alt="banenr" loading="lazy">
                        <!-- ..:: single mp3 area start ::.. -->
                        <div class="single-mp3-start">
                            <img class="man" src="{{ asset('assets/images/banner/08.png') }}" alt="banner"
                                loading="lazy">
                            <div class="mid">
                                <p>Gwyneth Paltrow</p>
                                <span>English Female Voice</span>
                            </div>
                            <div id="ppbutton7" class="ppbutton fa fa-plays icon-play"
                                data-src="{{ asset('assets/images/mp3/02.mp3') }}">
                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 3C7.53125 3 8 3.46875 8 4V12C8 12.5625 7.46875 13 6.96875 13C6.4375 13 6 12.5625 6 12V4C6 3.46875 6.4375 3 7 3ZM1 7C1.53125 7 2 7.46875 2 8C2 8.5625 1.46875 9 0.96875 9C0.4375 9 0 8.5 0 8C0 7.46875 0.4375 7 1 7ZM10 0C10.5312 0 11 0.46875 11 1V15C11 15.5625 10.4688 16 9.96875 16C9.4375 16 9 15.5625 9 15V1C9 0.46875 9.4375 0 10 0ZM4 6C4.53125 6 5 6.46875 5 7V9C5 9.5625 4.46875 10 3.96875 10C3.4375 10 3 9.5625 3 9V7C3 6.46875 3.4375 6 4 6ZM19 7C19.5312 7 20 7.53125 20 8.03125C20 8.5625 19.5312 9 19 9C18.4375 9 18 8.5 18 8C18 7.46875 18.4375 7 19 7ZM13 4C13.5312 4 14 4.46875 14 5V11C14 11.5625 13.4688 12 12.9688 12C12.4375 12 12 11.5625 12 11V5C12 4.46875 12.4375 4 13 4ZM16 2C16.5312 2 17 2.46875 17 3V13C17 13.5625 16.5312 14 15.9688 14C15.4375 14 15 13.5625 15 13V3C15 2.46875 15.4375 2 16 2Z"
                                        fill="white" />
                                </svg>
                            </div>
                        </div>
                        <!-- ..:: single mp3 area end ::.. -->
                        <!-- ..:: single mp3 area start ::.. -->
                        <div class="single-mp3-start left">
                            <img class="man" src="{{ asset('assets/images/banner/08.png') }}" alt="banner"
                                loading="lazy">
                            <div class="mid">
                                <p>Gwyneth Paltrow</p>
                                <span>English Female Voice</span>
                            </div>
                            <div id="ppbutton6" class="ppbutton fa fa-plays icon-play"
                                data-src="{{ asset('assets/images/mp3/03.mp3') }}">
                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 3C7.53125 3 8 3.46875 8 4V12C8 12.5625 7.46875 13 6.96875 13C6.4375 13 6 12.5625 6 12V4C6 3.46875 6.4375 3 7 3ZM1 7C1.53125 7 2 7.46875 2 8C2 8.5625 1.46875 9 0.96875 9C0.4375 9 0 8.5 0 8C0 7.46875 0.4375 7 1 7ZM10 0C10.5312 0 11 0.46875 11 1V15C11 15.5625 10.4688 16 9.96875 16C9.4375 16 9 15.5625 9 15V1C9 0.46875 9.4375 0 10 0ZM4 6C4.53125 6 5 6.46875 5 7V9C5 9.5625 4.46875 10 3.96875 10C3.4375 10 3 9.5625 3 9V7C3 6.46875 3.4375 6 4 6ZM19 7C19.5312 7 20 7.53125 20 8.03125C20 8.5625 19.5312 9 19 9C18.4375 9 18 8.5 18 8C18 7.46875 18.4375 7 19 7ZM13 4C13.5312 4 14 4.46875 14 5V11C14 11.5625 13.4688 12 12.9688 12C12.4375 12 12 11.5625 12 11V5C12 4.46875 12.4375 4 13 4ZM16 2C16.5312 2 17 2.46875 17 3V13C17 13.5625 16.5312 14 15.9688 14C15.4375 14 15 13.5625 15 13V3C15 2.46875 15.4375 2 16 2Z"
                                        fill="white" />
                                </svg>
                            </div>
                        </div>
                        <!-- ..:: single mp3 area end ::.. -->
                        <div class="mp3-click-icon-banner">
                            <a id="ppbutton1" class="ppbutton fa fa-plays"
                                data-src="{{ asset('assets/images/mp3/01.mp3') }}">
                                <div class="play">
                                    <svg width="80" height="80" viewBox="0 0 80 80" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="40" cy="40" r="40" fill="white" />
                                        <path
                                            d="M34.375 30.375C35.3711 30.375 36.25 31.2539 36.25 32.25V47.25C36.25 48.3047 35.2539 49.125 34.3164 49.125C33.3203 49.125 32.5 48.3047 32.5 47.25V32.25C32.5 31.2539 33.3203 30.375 34.375 30.375ZM23.125 37.875C24.1211 37.875 25 38.7539 25 39.75C25 40.8047 24.0039 41.625 23.0664 41.625C22.0703 41.625 21.25 40.6875 21.25 39.75C21.25 38.7539 22.0703 37.875 23.125 37.875ZM40 24.75C40.9961 24.75 41.875 25.6289 41.875 26.625V52.875C41.875 53.9297 40.8789 54.75 39.9414 54.75C38.9453 54.75 38.125 53.9297 38.125 52.875V26.625C38.125 25.6289 38.9453 24.75 40 24.75ZM28.75 36C29.7461 36 30.625 36.8789 30.625 37.875V41.625C30.625 42.6797 29.6289 43.5 28.6914 43.5C27.6953 43.5 26.875 42.6797 26.875 41.625V37.875C26.875 36.8789 27.6953 36 28.75 36ZM56.875 37.875C57.8711 37.875 58.75 38.8711 58.75 39.8086C58.75 40.8047 57.8711 41.625 56.875 41.625C55.8203 41.625 55 40.6875 55 39.75C55 38.7539 55.8203 37.875 56.875 37.875ZM45.625 32.25C46.6211 32.25 47.5 33.1289 47.5 34.125V45.375C47.5 46.4297 46.5039 47.25 45.5664 47.25C44.5703 47.25 43.75 46.4297 43.75 45.375V34.125C43.75 33.1289 44.5703 32.25 45.625 32.25ZM51.25 28.5C52.2461 28.5 53.125 29.3789 53.125 30.375V49.125C53.125 50.1797 52.2461 51 51.1914 51C50.1953 51 49.375 50.1797 49.375 49.125V30.375C49.375 29.3789 50.1953 28.5 51.25 28.5Z"
                                            fill="#083A5E" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- ..:: banenr seven area end ::.. -->
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: rts banner area start end ::.. -->

    <!-- ..:: brand style five start ::.. -->
    <div class="rts-brand-area-start-five ptb--70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-para">
                        <p>Over 200,135 AI voices generate more than 2,000,000 <br>
                            minutes of audio per month on Resemble!</p>
                    </div>
                </div>
                <div class="col-lg-12 mt--50">
                    <div class="brand-area-4">
                        <img src="{{ asset('assets/images/brand/01.png') }}" alt="brand-area" loading="lazy">
                        <img src="{{ asset('assets/images/brand/02.png') }}" alt="brand-area" loading="lazy">
                        <img src="{{ asset('assets/images/brand/03.png') }}" alt="brand-area" loading="lazy">
                        <img src="{{ asset('assets/images/brand/04.png') }}" alt="brand-area" loading="lazy">
                        <img src="{{ asset('assets/images/brand/05.png') }}" alt="brand-area" loading="lazy">
                        <img src="{{ asset('assets/images/brand/06.png') }}" alt="brand-area" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: brand style five end ::.. -->

    <!-- ..:: about -area start  ::.. -->
    <div class="brand-area-start rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-inner-main-four">
                        <h2 class="title">
                            Find out how AI <br>
                            Voices can Scale
                        </h2>
                        <p class="disc">
                            Are you just looking for a nice voice, or a voice over that <br>
                            makes your story stand out? We offer a range of curated <br>
                            voice talents that all work remotely.
                        </p>
                        <div class="check-main-wrapper">
                            <!-- ..:: soingle check ::.. -->
                            <div class="single-check">
                                <i class="fa-regular fa-check"></i>
                                <p>Create natural-sounding speech</p>
                            </div>
                            <!-- ..:: soingle check end ::.. -->
                            <!-- ..:: soingle check ::.. -->
                            <div class="single-check">
                                <i class="fa-regular fa-check"></i>
                                <p>Get access to 120+ languages and accents</p>
                            </div>
                            <!-- ..:: soingle check end ::.. -->
                            <!-- ..:: soingle check ::.. -->
                            <div class="single-check">
                                <i class="fa-regular fa-check"></i>
                                <p>1000’s of integrations</p>
                            </div>
                            <!-- ..:: soingle check end ::.. -->
                        </div>
                        <a href="{{ route('about') }}" class="rts-btn btn-primary">Find Your Voice</a>
                    </div>
                </div>
                <div class="col-lg-6 mt_md--50 mt_sm--50">
                    <!-- ..:: abot image 5 ::.. -->
                    <div class="about-image-thu-5">
                        <img src="{{ asset('assets/images/about/04.png') }}" alt="about" loading="lazy">

                        <div class="small-image-area mt--30">
                            <!-- ..:: single image ::.. -->
                            <div class="small-image">
                                <img src="{{ asset('assets/images/about/c-img/01.png') }}" alt="countryimage"
                                    loading="lazy">
                                <p>Usa English</p>
                            </div>
                            <!-- ..:: single image end ::.. -->
                            <!-- ..:: single image ::.. -->
                            <div class="small-image">
                                <img src="{{ asset('assets/images/about/c-img/02.png') }}" alt="countryimage"
                                    loading="lazy">
                                <p>British English</p>
                            </div>
                            <!-- ..:: single image end ::.. -->
                            <!-- ..:: single image ::.. -->
                            <div class="small-image">
                                <img src="{{ asset('assets/images/about/c-img/03.png') }}" alt="countryimage"
                                    loading="lazy">
                                <p>Italian</p>
                            </div>
                            <!-- ..:: single image end ::.. -->
                            <!-- ..:: single image ::.. -->
                            <div class="small-image">
                                <img src="{{ asset('assets/images/about/c-img/04.png') }}" alt="countryimage"
                                    loading="lazy">
                                <p>Hindi</p>
                            </div>
                            <!-- ..:: single image end ::.. -->
                            <!-- ..:: single image ::.. -->
                            <div class="small-image">
                                <img src="{{ asset('assets/images/about/c-img/05.png') }}" alt="countryimage"
                                    loading="lazy">
                                <p>French</p>
                            </div>
                            <!-- ..:: single image end ::.. -->
                            <!-- ..:: single image ::.. -->
                            <div class="small-image">
                                <img src="{{ asset('assets/images/about/c-img/06.png') }}" alt="countryimage"
                                    loading="lazy">
                                <p>German</p>
                            </div>
                            <!-- ..:: single image end ::.. -->

                            <!-- ..:: single user area star ::.. -->
                            <div class="image-author-language">
                                <img src="{{ asset('assets/images/banner/user/14.png') }}" alt="">
                                <span>120+ Language</span>
                            </div>
                            <!-- ..:: single user area end ::.. -->
                        </div>
                    </div>
                    <!-- ..:: abot image 5 end ::.. -->
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: about -area end ::.. -->

    <!-- ..:: vedio tabs area start ::.. -->
    <div class="vedio-tab-area rts-section-gap ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-main-center-4">
                        <h2 class="title">
                            What will you create today?
                        </h2>
                        <p class="disc">
                            Discover all kinds of content CodeInsights can help you create instantly with tailored AI
                            Voices.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt--40">
                <div class="col-lg-12">
                    <div class="tab-vedio-five-main-wrapper">
                        <!-- ..:: tab button area start ::.. -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">

                                    <svg width="20" height="15" viewBox="0 0 20 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.4688 4.28125C19.7812 4.40625 20 4.6875 20 5C20 5.34375 19.7812 5.625 19.4688 5.75L10.6562 8.90625C10.2188 9.0625 9.75 9.0625 9.3125 8.90625L3.375 6.78125C3 7.1875 2.71875 7.6875 2.59375 8.25C2.8125 8.40625 3 8.6875 3 9C3 9.3125 2.84375 9.59375 2.625 9.78125L3.375 14.4375C3.4375 14.75 3.1875 15 2.90625 15H1.0625C0.78125 15 0.53125 14.75 0.59375 14.4375L1.34375 9.78125C1.125 9.59375 1 9.3125 1 9C1 8.59375 1.25 8.25 1.59375 8.09375C1.71875 7.46875 2 6.90625 2.375 6.40625L0.5 5.75C0.1875 5.625 0 5.34375 0 5C0 4.6875 0.1875 4.40625 0.5 4.28125L9.28125 1.125C9.71875 0.96875 10.1875 0.96875 10.625 1.125L19.4688 4.28125ZM10.9688 9.84375L15.5312 8.21875L16 12.6875C16 13.9688 13.2812 15 10 15C6.65625 15 4 13.9688 4 12.6875L4.4375 8.21875L9 9.84375C9.3125 9.96875 9.65625 10 10 10C10.3125 10 10.6562 9.96875 10.9688 9.84375Z"
                                            fill="#3F3EED" />
                                    </svg>

                                    E-learning
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tabs" data-bs-toggle="tab"
                                    data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                    aria-selected="false">

                                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M18 1V13C18 13.5625 17.5312 14 17 14C16.4375 14 16 13.5625 16 13V1C16 0.46875 16.4375 0 17 0C17.5312 0 18 0.46875 18 1ZM1.96875 4.96875L15 1V13L10.875 11.7812C10.5625 13.0625 9.375 14 8 14C6.3125 14 5 12.6562 5 11C5 10.6562 5.03125 10.3438 5.15625 10.0312L1.96875 9.0625C1.96875 9.59375 1.53125 10 1 10C0.4375 10 0 9.5625 0 9V5C0 4.46875 0.4375 4 1 4C1.53125 4 1.96875 4.4375 1.96875 4.96875ZM9.4375 11.3438L6.59375 10.4688C6.53125 10.625 6.5 10.8125 6.5 11C6.5 11.8438 7.15625 12.5 8 12.5C8.6875 12.5 9.3125 12 9.4375 11.3438Z"
                                            fill="#3F3EED" />
                                    </svg>
                                    Marketing
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                    type="button" role="tab" aria-controls="contact" aria-selected="false">

                                    <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.3125 5.03125C19.6562 4.9375 20 5.1875 20 5.5V12.5C20 13.3438 19.0938 14 18 14C16.875 14 16 13.3438 16 12.5C16 11.6875 16.875 11 18 11C18.1562 11 18.3125 11.0312 18.5 11.0625V8.46875L14 9.96875V14.5C14 15.3438 13.0938 16 12 16C10.875 16 10 15.3438 10 14.5C10 13.6875 10.875 13 12 13C12.1562 13 12.3125 13.0312 12.5 13.0625V7.6875C12.5 7.46875 12.625 7.28125 12.8125 7.21875L19.3125 5.03125ZM5.5 12.25H10.6875C9.84375 12.5938 9.21875 13.2188 9.03125 14H1.25C0.53125 14 0 13.4688 0 12.75V4.28125C0 3.5625 0.53125 3 1.25 3H5V11.75C5 12.0312 5.21875 12.25 5.5 12.25ZM3.25 12V11C3.25 10.875 3.125 10.75 3 10.75H2C1.84375 10.75 1.75 10.875 1.75 11V12C1.75 12.1562 1.84375 12.25 2 12.25H3C3.125 12.25 3.25 12.1562 3.25 12ZM3.25 9V8C3.25 7.875 3.125 7.75 3 7.75H2C1.84375 7.75 1.75 7.875 1.75 8V9C1.75 9.15625 1.84375 9.25 2 9.25H3C3.125 9.25 3.25 9.15625 3.25 9ZM3.25 6V5C3.25 4.875 3.125 4.75 3 4.75H2C1.84375 4.75 1.75 4.875 1.75 5V6C1.75 6.15625 1.84375 6.25 2 6.25H3C3.125 6.25 3.25 6.15625 3.25 6ZM7.34375 10C6.59375 10 6 9.375 6 8.625V1.40625C6 0.625 6.59375 0 7.34375 0H17.625C18.375 0 19 0.625 19 1.40625V4.09375L15.7812 5.15625L14.4688 3.1875C14.4062 3.09375 14.25 3 14.125 3C13.9688 3 13.8438 3.09375 13.7812 3.1875L12.1562 5.65625L11.5625 4.84375C11.4688 4.75 11.3438 4.6875 11.2188 4.6875C11.0938 4.6875 10.9688 4.75 10.875 4.84375L9.0625 7.34375C8.96875 7.46875 8.96875 7.65625 9.03125 7.78125C9.09375 7.9375 9.25 8 9.40625 8H11.5V10H7.34375ZM9 2C8.4375 2 8 2.46875 8 3C8 3.5625 8.4375 4 9 4C9.53125 4 10 3.5625 10 3C10 2.46875 9.53125 2 9 2Z"
                                            fill="#3F3EED" />
                                    </svg>
                                    Social Media
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tabs" data-bs-toggle="tab"
                                    data-bs-target="#contacts" type="button" role="tab" aria-controls="contacts"
                                    aria-selected="false">
                                    <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 11C4.3125 11 3 9.65625 3 8V3C3 1.34375 4.3125 0 6 0C7.65625 0 9 1.34375 9 3V8C9 9.6875 7.65625 11 6 11ZM10.75 6C11.1562 6 11.5 6.34375 11.5 6.75V8C11.5 10.7812 9.40625 13.0938 6.75 13.4688V14.5H8C8.5625 14.5 9 15 8.96875 15.5625C8.96875 15.8125 8.75 16 8.5 16H3.5C3.21875 16 3 15.8125 3 15.5625C2.96875 15 3.40625 14.5 4 14.5H5.25V13.4062C2.46875 13.0312 0.5 10.5312 0.5 7.75V6.75C0.5 6.34375 0.8125 6 1.25 6C1.65625 6 2 6.34375 2 6.75V7.84375C2 9.9375 3.65625 11.875 5.71875 12C8.0625 12.1562 10 10.3125 10 8V6.75C10 6.34375 10.3125 6 10.75 6Z"
                                            fill="#3F3EED" />
                                    </svg>

                                    Podcast
                                </button>
                            </li>
                        </ul>
                        <!-- ..:: tab button area end ::.. -->
                        <!-- ..:: tab content area start ::.. -->
                        <div class="tab-content mt--40" id="myTabContents">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <!-- ..:: single tab cvontent main wrapper ::.. -->
                                <div class="single-tab-main-content-area-five">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="thumbnail-image-large">
                                                <img src="{{ asset('assets/images/brand/08.jpg') }}" alt="brand"
                                                    loading="lazy">
                                                <div class="vedio-icone">
                                                    <a class="play-video popup-youtube video-play-button"
                                                        href="https://www.youtube.com/watch?v=tUP5S4YdEJo">
                                                        <span></span>
                                                    </a>
                                                    <div id="video-overlay" class="video-overlay">
                                                        <a class="video-overlay-close">×</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="right-content">
                                                <div class="inner">
                                                    <p class="disc">
                                                        Explainer videos are a effective
                                                        tool to communicate your video message whether...
                                                    </p>
                                                    <div class="bottom-area">
                                                        <div class="authore">
                                                            <img src="{{ asset('assets/images/brand/09.png') }}"
                                                                alt="brand" loading="lazy">
                                                            <span class="name">Brant Hwang</span>
                                                            <span class="deg">Querypie</span>
                                                        </div>
                                                        <a href="#" class="rts-btn btn-primary">Try for Free</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ..:: single tab cvontent main wrapper end ::.. -->
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tabs">
                                <!-- ..:: single tab cvontent main wrapper ::.. -->
                                <div class="single-tab-main-content-area-five">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="thumbnail-image-large">
                                                <img src="{{ asset('assets/images/brand/08.jpg') }}" alt="brand"
                                                    loading="lazy">
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="right-content">
                                                <div class="inner">
                                                    <p class="disc">
                                                        Explainer videos are a effective
                                                        tool to communicate your video message whether...
                                                    </p>
                                                    <div class="bottom-area">
                                                        <div class="authore">
                                                            <img src="{{ asset('assets/images/brand/09.png') }}"
                                                                alt="brand" loading="lazy">
                                                            <span class="name">Brant Hwang</span>
                                                            <span class="deg">Querypie</span>
                                                        </div>
                                                        <a href="#" class="rts-btn btn-primary">Try for Free</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ..:: single tab cvontent main wrapper end ::.. -->
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <!-- ..:: single tab cvontent main wrapper ::.. -->
                                <div class="single-tab-main-content-area-five">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="thumbnail-image-large">
                                                <img src="{{ asset('assets/images/brand/08.jpg') }}" alt="brand"
                                                    loading="lazy">
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="right-content">
                                                <div class="inner">
                                                    <p class="disc">
                                                        Explainer videos are a effective
                                                        tool to communicate your video message whether...
                                                    </p>
                                                    <div class="bottom-area">
                                                        <div class="authore">
                                                            <img src="{{ asset('assets/images/brand/09.png') }}"
                                                                alt="brand" loading="lazy">
                                                            <span class="name">Brant Hwang</span>
                                                            <span class="deg">Querypie</span>
                                                        </div>
                                                        <a href="#" class="rts-btn btn-primary">Try for Free</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ..:: single tab cvontent main wrapper end ::.. -->
                            </div>
                            <div class="tab-pane fade" id="contacts" role="tabpanel" aria-labelledby="contact-tabs">
                                <!-- ..:: single tab cvontent main wrapper ::.. -->
                                <div class="single-tab-main-content-area-five">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="thumbnail-image-large">
                                                <img src="{{ asset('assets/images/brand/08.jpg') }}" alt="brand"
                                                    loading="lazy">
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="right-content">
                                                <div class="inner">
                                                    <p class="disc">
                                                        Explainer videos are a effective
                                                        tool to communicate your video message whether...
                                                    </p>
                                                    <div class="bottom-area">
                                                        <div class="authore">
                                                            <img src="{{ asset('assets/images/brand/09.png') }}"
                                                                alt="brand" loading="lazy">
                                                            <span class="name">Brant Hwang</span>
                                                            <span class="deg">Querypie</span>
                                                        </div>
                                                        <a href="#" class="rts-btn btn-primary">Try for Free</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ..:: single tab cvontent main wrapper end ::.. -->
                            </div>
                        </div>
                        <!-- ..:: tab content area end ::.. -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: vedio tabs area end ::.. -->

    <!-- ..:: vedio generator use case area start ::.. -->
    <div class="vedio-generator-use-case rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-main-center-4">
                        <h2 class="title">
                            AI Voice Generator Use Cases
                        </h2>
                        <p class="disc">
                            Here are a few examples of natural-sounding voiceovers AI voices for a wide <br>
                            range of use cases spanning promotional videos, explainer videos.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt--30 g-5">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: ingle case voice generator ::.. -->
                    <div class="signle-voice-generator-case">
                        <div class="icon">
                            <svg width="30" height="22" viewBox="0 0 30 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M29.2031 5.42188C29.6719 5.60938 30 6.03125 30 6.5C30 7.01562 29.6719 7.4375 29.2031 7.625L15.9844 12.3594C15.3281 12.5938 14.625 12.5938 13.9688 12.3594L5.0625 9.17188C4.5 9.78125 4.07812 10.5312 3.89062 11.375C4.21875 11.6094 4.5 12.0312 4.5 12.5C4.5 12.9688 4.26562 13.3906 3.9375 13.6719L5.0625 20.6562C5.15625 21.125 4.78125 21.5 4.35938 21.5H1.59375C1.17188 21.5 0.796875 21.125 0.890625 20.6562L2.01562 13.6719C1.6875 13.3906 1.5 12.9688 1.5 12.5C1.5 11.8906 1.875 11.375 2.39062 11.1406C2.57812 10.2031 3 9.35938 3.5625 8.60938L0.75 7.625C0.28125 7.4375 0 7.01562 0 6.5C0 6.03125 0.28125 5.60938 0.75 5.42188L13.9219 0.6875C14.5781 0.453125 15.2812 0.453125 15.9375 0.6875L29.2031 5.42188ZM16.4531 13.7656L23.2969 11.3281L24 18.0312C24 19.9531 19.9219 21.5 15 21.5C9.98438 21.5 6 19.9531 6 18.0312L6.65625 11.3281L13.5 13.7656C13.9688 13.9531 14.4844 14 15 14C15.4688 14 15.9844 13.9531 16.4531 13.7656Z"
                                    fill="#7877FF" />
                            </svg>
                        </div>
                        <h5 class="title">E-learning</h5>
                        <p class="disc">
                            Narrative voices capable of pronouncing <br> terminologies & acronyms in training <br> and ai
                            learning materials.
                        </p>
                        <a href="case-details" class="read-more-btn-c">Learn More <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <!-- ..:: ingle case voice generator end ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: ingle case voice generator ::.. -->
                    <div class="signle-voice-generator-case">
                        <div class="icon">
                            <svg width="27" height="18" viewBox="0 0 27 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18 2.25V15.75C18 17.0156 16.9688 18 15.75 18H2.25C0.984375 18 0 17.0156 0 15.75V2.25C0 1.03125 0.984375 0 2.25 0H15.75C16.9688 0 18 1.03125 18 2.25ZM27 3V15.0469C27 16.2188 25.5938 16.9219 24.6094 16.2656L19.5 12.7031V5.34375L24.6094 1.78125C25.5938 1.125 27 1.82812 27 3Z"
                                    fill="#083A5E" />
                            </svg>
                        </div>
                        <h5 class="title">Video</h5>
                        <p class="disc">
                            Narrative voices capable of pronouncing <br> terminologies & acronyms in training <br> and ai
                            learning materials.
                        </p>
                        <a href="case-details" class="read-more-btn-c">Learn More <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <!-- ..:: ingle case voice generator end ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: ingle case voice generator ::.. -->
                    <div class="signle-voice-generator-case">
                        <div class="icon">
                            <svg width="18" height="24" viewBox="0 0 18 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9 16.5C6.46875 16.5 4.5 14.4844 4.5 12V4.5C4.5 2.01562 6.46875 0 9 0C11.4844 0 13.5 2.01562 13.5 4.5H9.75C9.32812 4.5 9 4.82812 9 5.25C9 5.625 9.32812 6 9.75 6H13.5V7.5H9.75C9.32812 7.5 9 7.875 9 8.25C9 8.67188 9.32812 9 9.75 9H13.5V10.5H9.75C9.32812 10.5 9 10.875 9 11.25C9 11.6719 9.32812 12 9.75 12H13.5C13.5 14.5312 11.4844 16.5 9 16.5ZM16.125 9C16.7344 9 17.25 9.51562 17.25 10.125V12C17.25 16.1719 14.1094 19.6406 10.125 20.2031V21.75H12C12.8438 21.75 13.5 22.5 13.4531 23.3438C13.4531 23.7188 13.125 24 12.75 24H5.25C4.82812 24 4.5 23.7188 4.5 23.3438C4.45312 22.5 5.10938 21.75 6 21.75H7.875V20.1094C3.70312 19.5469 0.75 15.7969 0.75 11.625V10.125C0.75 9.51562 1.21875 9 1.875 9C2.48438 9 3 9.51562 3 10.125V11.7656C3 14.9062 5.48438 17.8125 8.57812 18C12.0938 18.2344 15 15.4688 15 12V10.125C15 9.51562 15.4688 9 16.125 9Z"
                                    fill="#7877FF" />
                            </svg>
                        </div>
                        <h5 class="title">IVR Systems</h5>
                        <p class="disc">
                            Narrative voices capable of pronouncing <br> terminologies & acronyms in training <br> and ai
                            learning materials.
                        </p>
                        <a href="case-details" class="read-more-btn-c">Learn More <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <!-- ..:: ingle case voice generator end ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: ingle case voice generator ::.. -->
                    <div class="signle-voice-generator-case">
                        <div class="icon">
                            <svg width="27" height="18" viewBox="0 0 27 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M25.7344 2.85938C26.2969 4.82812 26.2969 9.04688 26.2969 9.04688C26.2969 9.04688 26.2969 13.2188 25.7344 15.2344C25.4531 16.3594 24.5625 17.2031 23.4844 17.4844C21.4688 18 13.5 18 13.5 18C13.5 18 5.48438 18 3.46875 17.4844C2.39062 17.2031 1.5 16.3594 1.21875 15.2344C0.65625 13.2188 0.65625 9.04688 0.65625 9.04688C0.65625 9.04688 0.65625 4.82812 1.21875 2.85938C1.5 1.73438 2.39062 0.84375 3.46875 0.5625C5.48438 0 13.5 0 13.5 0C13.5 0 21.4688 0 23.4844 0.5625C24.5625 0.84375 25.4531 1.73438 25.7344 2.85938ZM10.875 12.8438L17.5312 9.04688L10.875 5.25V12.8438Z"
                                    fill="#083A5E" />
                            </svg>
                        </div>
                        <h5 class="title">Youtube Video</h5>
                        <p class="disc">
                            Narrative voices capable of pronouncing <br> terminologies & acronyms in training <br> and ai
                            learning materials.
                        </p>
                        <a href="case-details" class="read-more-btn-c">Learn More <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <!-- ..:: ingle case voice generator end ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: ingle case voice generator ::.. -->
                    <div class="signle-voice-generator-case">
                        <div class="icon">
                            <svg width="27" height="22" viewBox="0 0 27 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.75 0.546875C10.125 0.59375 12.3281 2.09375 12.4219 2.14062C12.6094 2.28125 12.75 2.51562 12.75 2.79688V20.7969C12.75 20.9844 12.5625 21.5 12 21.5C11.8125 21.5 11.6719 21.4531 11.5312 21.3594C11.3438 21.2188 6.9375 17.9375 1.03125 20.7031C0.515625 20.9375 0 20.5625 0 20.0469V3.26562C0 2.65625 0.328125 2.14062 0.84375 1.90625C2.95312 0.96875 4.96875 0.5 6.75 0.546875ZM26.1094 1.90625C26.625 2.14062 26.9531 2.65625 27 3.26562V20.0469C27 20.5625 26.4375 20.9375 25.9219 20.7031C20.0156 17.9375 15.6094 21.2188 15.4219 21.3594C15.2812 21.4531 15.1406 21.5 15 21.5C14.3906 21.5 14.25 20.9844 14.25 20.75V2.79688C14.25 2.51562 14.3438 2.28125 14.5312 2.14062C14.6719 2.09375 16.8281 0.59375 20.2031 0.546875C21.9375 0.5 24 0.96875 26.1094 1.90625Z"
                                    fill="#7877FF" />
                            </svg>
                        </div>
                        <h5 class="title">Audio Book</h5>
                        <p class="disc">
                            Narrative voices capable of pronouncing <br> terminologies & acronyms in training <br> and ai
                            learning materials.
                        </p>
                        <a href="case-details" class="read-more-btn-c">Learn More <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <!-- ..:: ingle case voice generator end ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: ingle case voice generator ::.. -->
                    <div class="signle-voice-generator-case">
                        <div class="icon">
                            <svg width="27" height="22" viewBox="0 0 27 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.75 10.1562L10.7344 12.125H8.71875L9.75 10.1562ZM19.5 12.125C19.5 12.7812 18.9844 13.25 18.375 13.25C17.7188 13.25 17.25 12.7812 17.25 12.125C17.25 11.5156 17.7188 11 18.375 11C18.9844 11 19.5 11.5156 19.5 12.125ZM24 0.5C25.6406 0.5 27 1.85938 27 3.5V18.5C27 20.1875 25.6406 21.5 24 21.5H3C1.3125 21.5 0 20.1875 0 18.5V3.5C0 1.85938 1.3125 0.5 3 0.5H24ZM10.7344 7.15625C10.5469 6.78125 10.1719 6.5 9.75 6.5C9.28125 6.5 8.90625 6.78125 8.71875 7.15625L5.34375 13.9062C5.0625 14.4688 5.29688 15.125 5.85938 15.4062C6.42188 15.6875 7.07812 15.4531 7.35938 14.8906L7.59375 14.375H11.8594L12.0938 14.8906C12.375 15.4531 13.0312 15.6875 13.5938 15.4062C14.1562 15.125 14.3906 14.4688 14.1094 13.9062L10.7344 7.15625ZM19.5 8.98438C19.125 8.84375 18.75 8.75 18.375 8.75C16.5 8.75 15 10.2969 15 12.125C15 14 16.5 15.5 18.375 15.5C18.8906 15.5 19.3594 15.4062 19.8281 15.1719C20.0156 15.4062 20.2969 15.5 20.625 15.5C21.2344 15.5 21.75 15.0312 21.75 14.375V7.625C21.75 7.01562 21.2344 6.5 20.625 6.5C19.9688 6.5 19.5 7.01562 19.5 7.625V8.98438Z"
                                    fill="#083A5E" />
                            </svg>
                        </div>
                        <h5 class="title">Advertisement</h5>
                        <p class="disc">
                            Narrative voices capable of pronouncing <br> terminologies & acronyms in training <br> and ai
                            learning materials.
                        </p>
                        <a href="case-details" class="read-more-btn-c">Learn More <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <!-- ..:: ingle case voice generator end ::.. -->
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: vedio generator use case area end ::.. -->

    <!-- ..:: tab audio section area start ::.. -->
    <div class="rts-audio-bot-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- ..:: audio-bot left area start ::.. -->
                    <div class="audio-left-area">
                        <h2 class="title">
                            You won’t believe <br>
                            it’s not human
                        </h2>
                        <p class="disc">
                            Surprise your audience with the most realistic <br>
                            and human AI voices in the world
                        </p>
                    </div>
                    <!-- ..:: audio-bot left area end ::.. -->
                    <div class="nav-button-voice-bot mt--40">
                        <ul class="nav nav-tabs" id="myTabs" role="tablist">
                            <li role="presentation" id="ppbutton2" class="ppbutton fa fa-plays nav-item"
                                data-src="{{ asset('assets/images/mp3/02.mp3') }}">
                                <div class="nav-link active" id="homes-tab" data-bs-toggle="tab" data-bs-target="#homes"
                                    role="tab" aria-controls="homes" aria-selected="true">
                                    <div class="press-area">
                                        <img src="{{ asset('assets/images/team/19.png') }}" alt="tte4am"
                                            loading="lazy">
                                        <div class="info">
                                            <h6>Michael</h6>
                                            <span class="one">Emotions</span>
                                            <span class="two">Audiobooks</span>
                                        </div>
                                        <div class="icon-audio">
                                            <svg width="46" height="23" viewBox="0 0 46 23" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0.859814 7.4884C0.384981 7.4884 0 7.87338 0 8.34822V13.6791C0 14.1539 0.384981 14.5389 0.859814 14.5389C1.33465 14.5389 1.71963 14.1539 1.71963 13.6791V8.34822C1.71963 7.87338 1.33465 7.4884 0.859814 7.4884Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M4.26471 3.14746C3.78987 3.14746 3.40489 3.53244 3.40489 4.00727V18.0222C3.40489 18.4971 3.78987 18.882 4.26471 18.882C4.73954 18.882 5.12452 18.4971 5.12452 18.0222V4.00727C5.12452 3.53244 4.73954 3.14746 4.26471 3.14746Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M7.66946 4.65173C7.19463 4.65173 6.80965 5.03671 6.80965 5.51155V16.5172C6.80965 16.992 7.19463 17.377 7.66946 17.377C8.14429 17.377 8.52927 16.992 8.52927 16.5172V5.51155C8.52927 5.03671 8.14429 4.65173 7.66946 4.65173Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M11.0744 7.4884C10.5995 7.4884 10.2146 7.87338 10.2146 8.34822V13.6791C10.2146 14.1539 10.5995 14.5389 11.0744 14.5389C11.5492 14.5389 11.9342 14.1539 11.9342 13.6791V8.34822C11.9342 7.87338 11.5492 7.4884 11.0744 7.4884Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M14.488 0C14.0131 0 13.6282 0.384981 13.6282 0.859813V21.1686C13.6282 21.6434 14.0131 22.0284 14.488 22.0284C14.9628 22.0284 15.3478 21.6434 15.3478 21.1686V0.859813C15.3478 0.384981 14.9628 0 14.488 0Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M17.8927 4.19604C17.4179 4.19604 17.0329 4.58103 17.0329 5.05586V16.9729C17.0329 17.4477 17.4179 17.8327 17.8927 17.8327C18.3676 17.8327 18.7525 17.4477 18.7525 16.9729V5.05586C18.7525 4.58103 18.3676 4.19604 17.8927 4.19604Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M21.2803 5.63184C20.8055 5.63184 20.4205 6.01682 20.4205 6.49165V15.5369C20.4205 16.0117 20.8055 16.3967 21.2803 16.3967C21.7552 16.3967 22.1402 16.0117 22.1402 15.5369V6.49165C22.1402 6.01682 21.7552 5.63184 21.2803 5.63184Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M24.7197 7.4884C24.2448 7.4884 23.8599 7.87338 23.8599 8.34822V13.6791C23.8599 14.1539 24.2448 14.5389 24.7197 14.5389C25.1945 14.5389 25.5795 14.1539 25.5795 13.6791V8.34822C25.5795 7.87338 25.1945 7.4884 24.7197 7.4884Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M28.1073 5.63184C27.6324 5.63184 27.2475 6.01682 27.2475 6.49165V15.5369C27.2475 16.0117 27.6324 16.3967 28.1073 16.3967C28.5821 16.3967 28.9671 16.0117 28.9671 15.5369V6.49165C28.9671 6.01682 28.5821 5.63184 28.1073 5.63184Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M31.5122 4.19604C31.0373 4.19604 30.6524 4.58103 30.6524 5.05586V16.9729C30.6524 17.4477 31.0373 17.8327 31.5122 17.8327C31.987 17.8327 32.372 17.4477 32.372 16.9729V5.05586C32.372 4.58103 31.987 4.19604 31.5122 4.19604Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M34.9256 0C34.4508 0 34.0658 0.384981 34.0658 0.859813V21.1686C34.0658 21.6434 34.4508 22.0284 34.9256 22.0284C35.4005 22.0284 35.7855 21.6434 35.7855 21.1686V0.859813C35.7855 0.384981 35.4005 0 34.9256 0Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M38.3304 4.65173C37.8556 4.65173 37.4706 5.03671 37.4706 5.51155V16.5172C37.4706 16.992 37.8556 17.377 38.3304 17.377C38.8052 17.377 39.1902 16.992 39.1902 16.5172V5.51155C39.1902 5.03671 38.8052 4.65173 38.3304 4.65173Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M41.7353 7.4884C41.2605 7.4884 40.8755 7.87338 40.8755 8.34822V13.6791C40.8755 14.1539 41.2605 14.5389 41.7353 14.5389C42.2101 14.5389 42.5951 14.1539 42.5951 13.6791V8.34822C42.5951 7.87338 42.2101 7.4884 41.7353 7.4884Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M45.1402 7.4884C44.6654 7.4884 44.2804 7.87338 44.2804 8.34822V13.6791C44.2804 14.1539 44.6654 14.5389 45.1402 14.5389C45.615 14.5389 46 14.1539 46 13.6791V8.34822C46 7.87338 45.615 7.4884 45.1402 7.4884Z"
                                                    fill="#083A5E" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li role="presentation" id="ppbutton3" class="ppbutton fa fa-plays nav-item"
                                data-src="{{ asset('assets/images/mp3/03.mp3') }}">
                                <div class="nav-link" id="profiles-tab" data-bs-toggle="tab" data-bs-target="#profiles"
                                    role="tab" aria-controls="profiles" aria-selected="false">
                                    <div class="press-area">
                                        <img src="{{ asset('assets/images/team/20.png') }}" alt="tte4am"
                                            loading="lazy">
                                        <div class="info">
                                            <h6>Mr.Alamin</h6>
                                            <span class="one">Emotions</span>
                                            <span class="two">Audiobooks</span>
                                        </div>
                                        <div class="icon-audio">
                                            <svg width="46" height="23" viewBox="0 0 46 23" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0.859814 7.4884C0.384981 7.4884 0 7.87338 0 8.34822V13.6791C0 14.1539 0.384981 14.5389 0.859814 14.5389C1.33465 14.5389 1.71963 14.1539 1.71963 13.6791V8.34822C1.71963 7.87338 1.33465 7.4884 0.859814 7.4884Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M4.26471 3.14746C3.78987 3.14746 3.40489 3.53244 3.40489 4.00727V18.0222C3.40489 18.4971 3.78987 18.882 4.26471 18.882C4.73954 18.882 5.12452 18.4971 5.12452 18.0222V4.00727C5.12452 3.53244 4.73954 3.14746 4.26471 3.14746Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M7.66946 4.65173C7.19463 4.65173 6.80965 5.03671 6.80965 5.51155V16.5172C6.80965 16.992 7.19463 17.377 7.66946 17.377C8.14429 17.377 8.52927 16.992 8.52927 16.5172V5.51155C8.52927 5.03671 8.14429 4.65173 7.66946 4.65173Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M11.0744 7.4884C10.5995 7.4884 10.2146 7.87338 10.2146 8.34822V13.6791C10.2146 14.1539 10.5995 14.5389 11.0744 14.5389C11.5492 14.5389 11.9342 14.1539 11.9342 13.6791V8.34822C11.9342 7.87338 11.5492 7.4884 11.0744 7.4884Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M14.488 0C14.0131 0 13.6282 0.384981 13.6282 0.859813V21.1686C13.6282 21.6434 14.0131 22.0284 14.488 22.0284C14.9628 22.0284 15.3478 21.6434 15.3478 21.1686V0.859813C15.3478 0.384981 14.9628 0 14.488 0Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M17.8927 4.19604C17.4179 4.19604 17.0329 4.58103 17.0329 5.05586V16.9729C17.0329 17.4477 17.4179 17.8327 17.8927 17.8327C18.3676 17.8327 18.7525 17.4477 18.7525 16.9729V5.05586C18.7525 4.58103 18.3676 4.19604 17.8927 4.19604Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M21.2803 5.63184C20.8055 5.63184 20.4205 6.01682 20.4205 6.49165V15.5369C20.4205 16.0117 20.8055 16.3967 21.2803 16.3967C21.7552 16.3967 22.1402 16.0117 22.1402 15.5369V6.49165C22.1402 6.01682 21.7552 5.63184 21.2803 5.63184Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M24.7197 7.4884C24.2448 7.4884 23.8599 7.87338 23.8599 8.34822V13.6791C23.8599 14.1539 24.2448 14.5389 24.7197 14.5389C25.1945 14.5389 25.5795 14.1539 25.5795 13.6791V8.34822C25.5795 7.87338 25.1945 7.4884 24.7197 7.4884Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M28.1073 5.63184C27.6324 5.63184 27.2475 6.01682 27.2475 6.49165V15.5369C27.2475 16.0117 27.6324 16.3967 28.1073 16.3967C28.5821 16.3967 28.9671 16.0117 28.9671 15.5369V6.49165C28.9671 6.01682 28.5821 5.63184 28.1073 5.63184Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M31.5122 4.19604C31.0373 4.19604 30.6524 4.58103 30.6524 5.05586V16.9729C30.6524 17.4477 31.0373 17.8327 31.5122 17.8327C31.987 17.8327 32.372 17.4477 32.372 16.9729V5.05586C32.372 4.58103 31.987 4.19604 31.5122 4.19604Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M34.9256 0C34.4508 0 34.0658 0.384981 34.0658 0.859813V21.1686C34.0658 21.6434 34.4508 22.0284 34.9256 22.0284C35.4005 22.0284 35.7855 21.6434 35.7855 21.1686V0.859813C35.7855 0.384981 35.4005 0 34.9256 0Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M38.3304 4.65173C37.8556 4.65173 37.4706 5.03671 37.4706 5.51155V16.5172C37.4706 16.992 37.8556 17.377 38.3304 17.377C38.8052 17.377 39.1902 16.992 39.1902 16.5172V5.51155C39.1902 5.03671 38.8052 4.65173 38.3304 4.65173Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M41.7353 7.4884C41.2605 7.4884 40.8755 7.87338 40.8755 8.34822V13.6791C40.8755 14.1539 41.2605 14.5389 41.7353 14.5389C42.2101 14.5389 42.5951 14.1539 42.5951 13.6791V8.34822C42.5951 7.87338 42.2101 7.4884 41.7353 7.4884Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M45.1402 7.4884C44.6654 7.4884 44.2804 7.87338 44.2804 8.34822V13.6791C44.2804 14.1539 44.6654 14.5389 45.1402 14.5389C45.615 14.5389 46 14.1539 46 13.6791V8.34822C46 7.87338 45.615 7.4884 45.1402 7.4884Z"
                                                    fill="#083A5E" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li role="presentation" id="ppbutton4" class="ppbutton fa fa-plays nav-item"
                                data-src="{{ asset('assets/images/mp3/04.mp3') }}">
                                <div class="nav-link" id="contactf-tab" data-bs-toggle="tab" data-bs-target="#contactf"
                                    role="tab" aria-controls="contact" aria-selected="false">
                                    <div class="press-area">
                                        <img src="{{ asset('assets/images/team/21.png') }}" alt="tte4am"
                                            loading="lazy">
                                        <div class="info">
                                            <h6>Mr.Ashik</h6>
                                            <span class="one">Emotions</span>
                                            <span class="two">Audiobooks</span>
                                        </div>
                                        <div class="icon-audio">
                                            <svg width="46" height="23" viewBox="0 0 46 23" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0.859814 7.4884C0.384981 7.4884 0 7.87338 0 8.34822V13.6791C0 14.1539 0.384981 14.5389 0.859814 14.5389C1.33465 14.5389 1.71963 14.1539 1.71963 13.6791V8.34822C1.71963 7.87338 1.33465 7.4884 0.859814 7.4884Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M4.26471 3.14746C3.78987 3.14746 3.40489 3.53244 3.40489 4.00727V18.0222C3.40489 18.4971 3.78987 18.882 4.26471 18.882C4.73954 18.882 5.12452 18.4971 5.12452 18.0222V4.00727C5.12452 3.53244 4.73954 3.14746 4.26471 3.14746Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M7.66946 4.65173C7.19463 4.65173 6.80965 5.03671 6.80965 5.51155V16.5172C6.80965 16.992 7.19463 17.377 7.66946 17.377C8.14429 17.377 8.52927 16.992 8.52927 16.5172V5.51155C8.52927 5.03671 8.14429 4.65173 7.66946 4.65173Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M11.0744 7.4884C10.5995 7.4884 10.2146 7.87338 10.2146 8.34822V13.6791C10.2146 14.1539 10.5995 14.5389 11.0744 14.5389C11.5492 14.5389 11.9342 14.1539 11.9342 13.6791V8.34822C11.9342 7.87338 11.5492 7.4884 11.0744 7.4884Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M14.488 0C14.0131 0 13.6282 0.384981 13.6282 0.859813V21.1686C13.6282 21.6434 14.0131 22.0284 14.488 22.0284C14.9628 22.0284 15.3478 21.6434 15.3478 21.1686V0.859813C15.3478 0.384981 14.9628 0 14.488 0Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M17.8927 4.19604C17.4179 4.19604 17.0329 4.58103 17.0329 5.05586V16.9729C17.0329 17.4477 17.4179 17.8327 17.8927 17.8327C18.3676 17.8327 18.7525 17.4477 18.7525 16.9729V5.05586C18.7525 4.58103 18.3676 4.19604 17.8927 4.19604Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M21.2803 5.63184C20.8055 5.63184 20.4205 6.01682 20.4205 6.49165V15.5369C20.4205 16.0117 20.8055 16.3967 21.2803 16.3967C21.7552 16.3967 22.1402 16.0117 22.1402 15.5369V6.49165C22.1402 6.01682 21.7552 5.63184 21.2803 5.63184Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M24.7197 7.4884C24.2448 7.4884 23.8599 7.87338 23.8599 8.34822V13.6791C23.8599 14.1539 24.2448 14.5389 24.7197 14.5389C25.1945 14.5389 25.5795 14.1539 25.5795 13.6791V8.34822C25.5795 7.87338 25.1945 7.4884 24.7197 7.4884Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M28.1073 5.63184C27.6324 5.63184 27.2475 6.01682 27.2475 6.49165V15.5369C27.2475 16.0117 27.6324 16.3967 28.1073 16.3967C28.5821 16.3967 28.9671 16.0117 28.9671 15.5369V6.49165C28.9671 6.01682 28.5821 5.63184 28.1073 5.63184Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M31.5122 4.19604C31.0373 4.19604 30.6524 4.58103 30.6524 5.05586V16.9729C30.6524 17.4477 31.0373 17.8327 31.5122 17.8327C31.987 17.8327 32.372 17.4477 32.372 16.9729V5.05586C32.372 4.58103 31.987 4.19604 31.5122 4.19604Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M34.9256 0C34.4508 0 34.0658 0.384981 34.0658 0.859813V21.1686C34.0658 21.6434 34.4508 22.0284 34.9256 22.0284C35.4005 22.0284 35.7855 21.6434 35.7855 21.1686V0.859813C35.7855 0.384981 35.4005 0 34.9256 0Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M38.3304 4.65173C37.8556 4.65173 37.4706 5.03671 37.4706 5.51155V16.5172C37.4706 16.992 37.8556 17.377 38.3304 17.377C38.8052 17.377 39.1902 16.992 39.1902 16.5172V5.51155C39.1902 5.03671 38.8052 4.65173 38.3304 4.65173Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M41.7353 7.4884C41.2605 7.4884 40.8755 7.87338 40.8755 8.34822V13.6791C40.8755 14.1539 41.2605 14.5389 41.7353 14.5389C42.2101 14.5389 42.5951 14.1539 42.5951 13.6791V8.34822C42.5951 7.87338 42.2101 7.4884 41.7353 7.4884Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M45.1402 7.4884C44.6654 7.4884 44.2804 7.87338 44.2804 8.34822V13.6791C44.2804 14.1539 44.6654 14.5389 45.1402 14.5389C45.615 14.5389 46 14.1539 46 13.6791V8.34822C46 7.87338 45.615 7.4884 45.1402 7.4884Z"
                                                    fill="#083A5E" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li role="presentation" id="ppbutton5" class="ppbutton fa fa-plays nav-item"
                                data-src="{{ asset('assets/images/mp3/01.mp3') }}">
                                <div class="nav-link" id="about-tab" data-bs-toggle="tab" data-bs-target="#about"
                                    role="tab" aria-controls="about" aria-selected="false">
                                    <div class="press-area">
                                        <img src="{{ asset('assets/images/team/22.png') }}" alt="tte4am"
                                            loading="lazy">
                                        <div class="info">
                                            <h6>Mr.Banna</h6>
                                            <span class="one">Emotions</span>
                                            <span class="two">Audiobooks</span>
                                        </div>
                                        <div class="icon-audio">
                                            <svg width="46" height="23" viewBox="0 0 46 23" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0.859814 7.4884C0.384981 7.4884 0 7.87338 0 8.34822V13.6791C0 14.1539 0.384981 14.5389 0.859814 14.5389C1.33465 14.5389 1.71963 14.1539 1.71963 13.6791V8.34822C1.71963 7.87338 1.33465 7.4884 0.859814 7.4884Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M4.26471 3.14746C3.78987 3.14746 3.40489 3.53244 3.40489 4.00727V18.0222C3.40489 18.4971 3.78987 18.882 4.26471 18.882C4.73954 18.882 5.12452 18.4971 5.12452 18.0222V4.00727C5.12452 3.53244 4.73954 3.14746 4.26471 3.14746Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M7.66946 4.65173C7.19463 4.65173 6.80965 5.03671 6.80965 5.51155V16.5172C6.80965 16.992 7.19463 17.377 7.66946 17.377C8.14429 17.377 8.52927 16.992 8.52927 16.5172V5.51155C8.52927 5.03671 8.14429 4.65173 7.66946 4.65173Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M11.0744 7.4884C10.5995 7.4884 10.2146 7.87338 10.2146 8.34822V13.6791C10.2146 14.1539 10.5995 14.5389 11.0744 14.5389C11.5492 14.5389 11.9342 14.1539 11.9342 13.6791V8.34822C11.9342 7.87338 11.5492 7.4884 11.0744 7.4884Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M14.488 0C14.0131 0 13.6282 0.384981 13.6282 0.859813V21.1686C13.6282 21.6434 14.0131 22.0284 14.488 22.0284C14.9628 22.0284 15.3478 21.6434 15.3478 21.1686V0.859813C15.3478 0.384981 14.9628 0 14.488 0Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M17.8927 4.19604C17.4179 4.19604 17.0329 4.58103 17.0329 5.05586V16.9729C17.0329 17.4477 17.4179 17.8327 17.8927 17.8327C18.3676 17.8327 18.7525 17.4477 18.7525 16.9729V5.05586C18.7525 4.58103 18.3676 4.19604 17.8927 4.19604Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M21.2803 5.63184C20.8055 5.63184 20.4205 6.01682 20.4205 6.49165V15.5369C20.4205 16.0117 20.8055 16.3967 21.2803 16.3967C21.7552 16.3967 22.1402 16.0117 22.1402 15.5369V6.49165C22.1402 6.01682 21.7552 5.63184 21.2803 5.63184Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M24.7197 7.4884C24.2448 7.4884 23.8599 7.87338 23.8599 8.34822V13.6791C23.8599 14.1539 24.2448 14.5389 24.7197 14.5389C25.1945 14.5389 25.5795 14.1539 25.5795 13.6791V8.34822C25.5795 7.87338 25.1945 7.4884 24.7197 7.4884Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M28.1073 5.63184C27.6324 5.63184 27.2475 6.01682 27.2475 6.49165V15.5369C27.2475 16.0117 27.6324 16.3967 28.1073 16.3967C28.5821 16.3967 28.9671 16.0117 28.9671 15.5369V6.49165C28.9671 6.01682 28.5821 5.63184 28.1073 5.63184Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M31.5122 4.19604C31.0373 4.19604 30.6524 4.58103 30.6524 5.05586V16.9729C30.6524 17.4477 31.0373 17.8327 31.5122 17.8327C31.987 17.8327 32.372 17.4477 32.372 16.9729V5.05586C32.372 4.58103 31.987 4.19604 31.5122 4.19604Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M34.9256 0C34.4508 0 34.0658 0.384981 34.0658 0.859813V21.1686C34.0658 21.6434 34.4508 22.0284 34.9256 22.0284C35.4005 22.0284 35.7855 21.6434 35.7855 21.1686V0.859813C35.7855 0.384981 35.4005 0 34.9256 0Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M38.3304 4.65173C37.8556 4.65173 37.4706 5.03671 37.4706 5.51155V16.5172C37.4706 16.992 37.8556 17.377 38.3304 17.377C38.8052 17.377 39.1902 16.992 39.1902 16.5172V5.51155C39.1902 5.03671 38.8052 4.65173 38.3304 4.65173Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M41.7353 7.4884C41.2605 7.4884 40.8755 7.87338 40.8755 8.34822V13.6791C40.8755 14.1539 41.2605 14.5389 41.7353 14.5389C42.2101 14.5389 42.5951 14.1539 42.5951 13.6791V8.34822C42.5951 7.87338 42.2101 7.4884 41.7353 7.4884Z"
                                                    fill="#083A5E" />
                                                <path
                                                    d="M45.1402 7.4884C44.6654 7.4884 44.2804 7.87338 44.2804 8.34822V13.6791C44.2804 14.1539 44.6654 14.5389 45.1402 14.5389C45.615 14.5389 46 14.1539 46 13.6791V8.34822C46 7.87338 45.615 7.4884 45.1402 7.4884Z"
                                                    fill="#083A5E" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 mt_md--30 mt_sm--30">
                    <div class="tab-content" id="myTabsContents">
                        <div class="tab-pane fade show active" id="homes" role="tabpanel"
                            aria-labelledby="homes-tab">
                            <div class="thumbnail-voice-bot">
                                <img src="{{ asset('assets/images/about/05.png') }}" alt="lazy" loading="lazy">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profiles" role="tabpanel" aria-labelledby="profiles-tab">
                            <div class="thumbnail-voice-bot">
                                <img src="{{ asset('assets/images/about/05.png') }}" alt="lazy" loading="lazy">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contactf" role="tabpanel" aria-labelledby="contactf-tab">
                            <div class="thumbnail-voice-bot">
                                <img src="{{ asset('assets/images/about/05.png') }}" alt="lazy" loading="lazy">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                            <div class="thumbnail-voice-bot">
                                <img src="{{ asset('assets/images/about/05.png') }}" alt="lazy" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: tab audio section area end ::.. -->

    <!-- ..:: customers review area start ::.. -->
    <div class="rts-tstimonials-area rts-section-gap bg-service-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-main-center-4">
                        <h2 class="title">
                            See why 500,000+ professionals <br>
                            like you have chosen CodeInsights
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
                                                    <p>Rokib</p>
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
                                                <img src="{{ asset('assets/images/team/11.png') }}" alt="team"
                                                    loading="lazy">
                                                <div class="info">
                                                    <p>Mr.Alamin</p>
                                                    <span>Blogger</span>
                                                </div>
                                            </div>
                                            <img src="{{ asset('assets/images/team/brand/01.png') }}" alt="img"
                                                loading="lazy">
                                        </div>
                                    </div>
                                    <!-- ..:: single swiepr end ::.. -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- ..:: single swiepr start ::.. -->
                                    <div class="single-team-area">
                                        <img src="{{ asset('assets/images/team/brand/quote.png') }}" alt="img"
                                            loading="lazy" class="quote">
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
                                                    <p>Ashik</p>
                                                    <span>Blogger</span>
                                                </div>
                                            </div>
                                            <img src="{{ asset('assets/images/team/brand/01.png') }}" alt="img"
                                                loading="lazy">
                                        </div>
                                    </div>
                                    <!-- ..:: single swiepr end ::.. -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- ..:: single swiepr start ::.. -->
                                    <div class="single-team-area">
                                        <img src="{{ asset('assets/images/team/brand/quote.png') }}" alt="team"
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
                                                    <p>Mr.Sajib</p>
                                                    <span>Blogger</span>
                                                </div>
                                            </div>
                                            <img src="{{ asset('assets/images/team/brand/01.png') }}" alt="img"
                                                loading="lazy">
                                        </div>
                                    </div>
                                    <!-- ..:: single swiepr end ::.. -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- ..:: single swiepr start ::.. -->
                                    <div class="single-team-area">
                                        <img src="{{ asset('assets/images/team/brand/quote.png') }}" alt="img"
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
                                                <img src="{{ asset('assets/images/team/09.png') }}" alt="team"
                                                    loading="lazy">
                                                <div class="info">
                                                    <p>Mr. Banna</p>
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

    <!-- ..:: pricing table area start ::.. -->
    <div class="pricing-plane-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lgl-12">
                    <div class="title-conter-area">
                        <span class="pre-title-bg">Pricing Plane</span>
                        <h2 class="title">
                            Ready to Get Started? <br>
                            We'll Keep You Under Budget
                        </h2>
                    </div>
                </div>
            </div>

            <!-- ..:: tabs area start ::.. -->
            <div class="tab-area-pricing-two mt--30">
                <ul class="nav nav-tabs pricing-button-one two" id="myTabsContent" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="" id="nav-home-tabfs" data-bs-toggle="tab" data-bs-target="#nav-home"
                            type="button" role="tab" aria-controls="nav-home" aria-selected="true">Monthly
                            Pricing</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="active" id="nav-profile-tabfs" data-bs-toggle="tab" data-bs-target="#nav-profile"
                            type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Annual
                            Pricing</button>
                    </li>
                    <li class="save-badge">
                        <span>SAVE 25%</span>
                    </li>
                </ul>
                <div class="tab-content mt--20" id="myTabContent">
                    <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tabfs">
                        <div class="row g-5 mt--10">
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <!-- ..:: single pricing-area ::.. -->
                                <div class="single-pricing-single-two">
                                    <div class="head">
                                        <span class="top">Basic</span>
                                        <div class="date-use">
                                            <h4 class="title">$Free</h4>
                                            <span>/month</span>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <p class="para">A premium pricing plan is a pricing <br> structure that is
                                            designed.</p>

                                        <div class="check-wrapper">
                                            <!-- ..:: single check ::.. -->
                                            <div class="check-area">
                                                <i class="fa-solid fa-check"></i>
                                                <p>10,000 Monthly Word Limit</p>
                                            </div>
                                            <!-- ..:: single check end-->
                                            <!-- ..:: single check ::.. -->
                                            <div class="check-area">
                                                <i class="fa-solid fa-check"></i>
                                                <p>10+ Templates</p>
                                            </div>
                                            <!-- ..:: single check end-->
                                            <!-- ..:: single check ::.. -->
                                            <div class="check-area">
                                                <i class="fa-solid fa-check"></i>
                                                <p>All types of content</p>
                                            </div>
                                            <!-- ..:: single check end-->
                                            <!-- ..:: single check ::.. -->
                                            <div class="check-area">
                                                <i class="fa-solid fa-check"></i>
                                                <p>10+ Languages</p>
                                            </div>
                                            <!-- ..:: single check end-->
                                        </div>
                                        <a href="#" class="pricing-btn">Get Started</a>
                                    </div>
                                </div>
                                <!-- ..:: single pricing-area end ::.. -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <!-- ..:: single pricing-area ::.. -->
                                <div class="single-pricing-single-two active">
                                    <div class="head">
                                        <span class="top">Diamond</span>
                                        <div class="date-use">
                                            <h4 class="title">$399</h4>
                                            <span>/month</span>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <p class="para">A premium pricing plan is a pricing <br> structure that is
                                            designed.</p>

                                        <div class="check-wrapper">
                                            <!-- ..:: single check ::.. -->
                                            <div class="check-area">
                                                <i class="fa-solid fa-check"></i>
                                                <p>60,000 Monthly Word Limit</p>
                                            </div>
                                            <!-- ..:: single check end-->
                                            <!-- ..:: single check ::.. -->
                                            <div class="check-area">
                                                <i class="fa-solid fa-check"></i>
                                                <p>60+ Templates</p>
                                            </div>
                                            <!-- ..:: single check end-->
                                            <!-- ..:: single check ::.. -->
                                            <div class="check-area">
                                                <i class="fa-solid fa-check"></i>
                                                <p>All types of content</p>
                                            </div>
                                            <!-- ..:: single check end-->
                                            <!-- ..:: single check ::.. -->
                                            <div class="check-area">
                                                <i class="fa-solid fa-check"></i>
                                                <p>60+ Languages</p>
                                            </div>
                                            <!-- ..:: single check end-->
                                        </div>
                                        <a href="#" class="pricing-btn">Get Started</a>
                                    </div>
                                </div>
                                <!-- ..:: single pricing-area end ::.. -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <!-- ..:: single pricing-area ::.. -->
                                <div class="single-pricing-single-two">
                                    <div class="head">
                                        <span class="top">Silver</span>
                                        <div class="date-use">
                                            <h4 class="title">$199</h4>
                                            <span>/month</span>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <p class="para">A premium pricing plan is a pricing <br> structure that is
                                            designed.</p>

                                        <div class="check-wrapper">
                                            <!-- ..:: single check ::.. -->
                                            <div class="check-area">
                                                <i class="fa-solid fa-check"></i>
                                                <p>30,000 Monthly Word Limit</p>
                                            </div>
                                            <!-- ..:: single check end-->
                                            <!-- ..:: single check ::.. -->
                                            <div class="check-area">
                                                <i class="fa-solid fa-check"></i>
                                                <p>30+ Templates</p>
                                            </div>
                                            <!-- ..:: single check end-->
                                            <!-- ..:: single check ::.. -->
                                            <div class="check-area">
                                                <i class="fa-solid fa-check"></i>
                                                <p>All types of content</p>
                                            </div>
                                            <!-- ..:: single check end-->
                                            <!-- ..:: single check ::.. -->
                                            <div class="check-area">
                                                <i class="fa-solid fa-check"></i>
                                                <p>40+ Languages</p>
                                            </div>
                                            <!-- ..:: single check end-->
                                        </div>
                                        <a href="#" class="pricing-btn">Get Started</a>
                                    </div>
                                </div>
                                <!-- ..:: single pricing-area end ::.. -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade active show" id="nav-profile" role="tabpanel"
                        aria-labelledby="nav-profile-tabfs">
                        <div class="row g-5 mt--10">
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <!-- ..:: single pricing-area ::.. -->
                                <div class="single-pricing-single-two">
                                    <div class="head">
                                        <span class="top">Basic</span>
                                        <div class="date-use">
                                            <h4 class="title">$Free</h4>
                                            <span>/month</span>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <p class="para">A premium pricing plan is a pricing <br> structure that is
                                            designed.</p>

                                        <div class="check-wrapper">
                                            <!-- ..:: single check ::.. -->
                                            <div class="check-area">
                                                <i class="fa-solid fa-check"></i>
                                                <p>10,000 Monthly Word Limit</p>
                                            </div>
                                            <!-- ..:: single check end-->
                                            <!-- ..:: single check ::.. -->
                                            <div class="check-area">
                                                <i class="fa-solid fa-check"></i>
                                                <p>10+ Templates</p>
                                            </div>
                                            <!-- ..:: single check end-->
                                            <!-- ..:: single check ::.. -->
                                            <div class="check-area">
                                                <i class="fa-solid fa-check"></i>
                                                <p>All types of content</p>
                                            </div>
                                            <!-- ..:: single check end-->
                                            <!-- ..:: single check ::.. -->
                                            <div class="check-area">
                                                <i class="fa-solid fa-check"></i>
                                                <p>10+ Languages</p>
                                            </div>
                                            <!-- ..:: single check end-->
                                        </div>
                                        <a href="#" class="pricing-btn">Get Started</a>
                                    </div>
                                </div>
                                <!-- ..:: single pricing-area end ::.. -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <!-- ..:: single pricing-area ::.. -->
                                <div class="single-pricing-single-two active">
                                    <div class="head">
                                        <span class="top">Diamond</span>
                                        <div class="date-use">
                                            <h4 class="title">$399</h4>
                                            <span>/month</span>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <p class="para">A premium pricing plan is a pricing <br> structure that is
                                            designed.</p>

                                        <div class="check-wrapper">
                                            <!-- ..:: single check ::.. -->
                                            <div class="check-area">
                                                <i class="fa-solid fa-check"></i>
                                                <p>60,000 Monthly Word Limit</p>
                                            </div>
                                            <!-- ..:: single check end-->
                                            <!-- ..:: single check ::.. -->
                                            <div class="check-area">
                                                <i class="fa-solid fa-check"></i>
                                                <p>60+ Templates</p>
                                            </div>
                                            <!-- ..:: single check end-->
                                            <!-- ..:: single check ::.. -->
                                            <div class="check-area">
                                                <i class="fa-solid fa-check"></i>
                                                <p>All types of content</p>
                                            </div>
                                            <!-- ..:: single check end-->
                                            <!-- ..:: single check ::.. -->
                                            <div class="check-area">
                                                <i class="fa-solid fa-check"></i>
                                                <p>60+ Languages</p>
                                            </div>
                                            <!-- ..:: single check end-->
                                        </div>
                                        <a href="#" class="pricing-btn">Get Started</a>
                                    </div>
                                </div>
                                <!-- ..:: single pricing-area end ::.. -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <!-- ..:: single pricing-area ::.. -->
                                <div class="single-pricing-single-two">
                                    <div class="head">
                                        <span class="top">Silver</span>
                                        <div class="date-use">
                                            <h4 class="title">$199</h4>
                                            <span>/month</span>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <p class="para">A premium pricing plan is a pricing <br> structure that is
                                            designed.</p>

                                        <div class="check-wrapper">
                                            <!-- ..:: single check ::.. -->
                                            <div class="check-area">
                                                <i class="fa-solid fa-check"></i>
                                                <p>30,000 Monthly Word Limit</p>
                                            </div>
                                            <!-- ..:: single check end-->
                                            <!-- ..:: single check ::.. -->
                                            <div class="check-area">
                                                <i class="fa-solid fa-check"></i>
                                                <p>30+ Templates</p>
                                            </div>
                                            <!-- ..:: single check end-->
                                            <!-- ..:: single check ::.. -->
                                            <div class="check-area">
                                                <i class="fa-solid fa-check"></i>
                                                <p>All types of content</p>
                                            </div>
                                            <!-- ..:: single check end-->
                                            <!-- ..:: single check ::.. -->
                                            <div class="check-area">
                                                <i class="fa-solid fa-check"></i>
                                                <p>40+ Languages</p>
                                            </div>
                                            <!-- ..:: single check end-->
                                        </div>
                                        <a href="#" class="pricing-btn">Get Started</a>
                                    </div>
                                </div>
                                <!-- ..:: single pricing-area end ::.. -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ..:: tabs area end ::.. -->
        </div>
    </div>
    <!-- ..:: pricing table area end ::.. -->

    <!-- ..:: blog area start ::.. -->
    <div class="rts-faq-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-conter-area">
                        <h2 class="title">
                            CodeInsights chatbots: <br>
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
                                        data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        What is CodeInsights content writing tool?
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
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
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
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
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
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        what languages does it supports?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Once you know your audience, choose a topic that will resonate with them. Look for
                                        trending topics in your industry or address common questions or challenges your
                                        audience may be facing.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        Does CodeInsights to write long articles?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse"
                                    aria-labelledby="headingFive" data-bs-parent="#accordionExample">
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

    <!-- ..:: cta area start ::.. -->
    <div class="cta-area-start-5 bg_cta rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row main-cta-five">
                        <div class="col-lg-6">
                            <div class="ca-main-content-wrapper-left">
                                <h2 class="title">
                                    Start creating a custom voice <br>
                                    for your brand today
                                </h2>
                                <a href="#" class="rts-btn btn-primary">Create For Ai Voice Over</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- ..:: right image-thumbnail ::.. -->
                            <div class="right-image-thumbnail">
                                <img src="{{ asset('assets/images/cta/06.png') }}" alt="right-imaeg" loading="lazy">
                            </div>
                            <!-- ..:: right image-thumbnail end ::.. -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: cta area end ::.. -->

    <div class="rts-footer-area footer-two footer-mid bg-footer">
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
                                <p class="dsic mb--25">
                                    CodeInsights is an artificial intelligence trained to automate important tasks such
                                    writing
                                    optimized product descriptions.
                                </p>
                                <div class="social-area-one">
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
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copy-right-two">
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

    <div id="anywhere-home" class="">
    </div>
@endsection
