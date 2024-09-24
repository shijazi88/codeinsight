@extends('layout.layout3')

@php
    $headtitle = 'CodeInsights';
@endphp

@section('content')
    <!-- ..:: rts header area start ::.. -->
    <header class="header-one header-three header--sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-main-wrapper">
                        <a href="{{ route('index') }}" class="logo">
                            <img src="{{ asset('assets/images/logo/01.svg') }}" alt="logo">
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
                            <a href="{{ route('login') }}" class="rts-btn btn-lonly mr--30">Sign in</a>
                            <a href="#" class="rts-btn btn-primary">Dashboard</a>
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
    <div class="rts-banner-area-one banner-six bg_image--2 bg_image rts-section-gap">
        <div class="container mt--50">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-main-wrapper">
                        <h1 class="title">
                            The Fusion of Art and <br>
                            Artificial Intelligence
                        </h1>
                        <p class="disc">
                            Convert words to images with CodeInsights AI image generator. Watch your imagination transform
                            into
                            AI-generated images online.
                        </p>
                        <form action="#">
                            <div class="input-area-fill">
                                <input type="text" placeholder="Describe what you want directly click" required>
                                <button> Generate</button>
                            </div>
                        </form>
                        <ul class="popular-tag-area">
                            <li>Popular Tags:</li>
                            <li><a href="#">CreativeAI</a></li>
                            <li><a href="#">DigitalArt</a></li>
                            <li><a href="#">Animation</a></li>
                            <li><a href="#">Business</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-poster-area">
            <div class="container">
                <div class="banner-poster-inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="image-area">
                                <a href="#">
                                    <img src="{{ asset('assets/images/banner/10.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="image-area">
                                <a href="#">
                                    <img src="{{ asset('assets/images/banner/11.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="image-area">
                                <a href="#">
                                    <img src="{{ asset('assets/images/banner/12.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="image-area">
                                <a href="#">
                                    <img src="{{ asset('assets/images/banner/13.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: open up banner area end ::.. -->

    <!-- ..:: open up about area end ::.. -->
    <div class="rts-about-us-area home-six rts-section-gapBottom">
        <div class="container">
            <div class="about-us-area-inner">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="left-side-image">
                            <img src="{{ asset('assets/images/about/06.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="right-side-content">
                            <h2 class="title">Imagination with AI <br> Image Generation</h2>
                            <p class="desc">Discover the mesmerizing realm where human creativity intertwines <br> with
                                the ingenuity of artificial intelligence. Step into a world where <br> stunning visuals are
                                brought the power of AI image generation.</p>
                            <ul class="content-wrapper">
                                <li><img src="{{ asset('assets/images/about/07.png') }}" alt=""></li>
                                <li><img src="{{ asset('assets/images/about/08.png') }}" alt=""></li>
                                <li>
                                    <span class="video-thumb">
                                        <img src="{{ asset('assets/images/about/09.png') }}" alt="">
                                        <div class="vedio-icone">
                                            <a class="play-video popup-youtube video-play-button"
                                                href="https://www.youtube.com/watch?v=PfxLRA2bJ3A">
                                                <span><i class="fa-thin fa-circle-play"></i></span>
                                            </a>
                                            <div class="video-overlay">
                                                <a class="video-overlay-close">×</a>
                                            </div>
                                        </div>
                                    </span>
                                </li>
                            </ul>
                            <div class="bottom-wrapper">
                                <div class="button-area">
                                    <a href="#" class="rts-btn btn-primary">About Us</a>
                                </div>
                                <div class="user-area">
                                    <div class="image-wrapper">
                                        <img class="one" src="{{ asset('assets/images/about/10.png') }}"
                                            alt="user" loading="lazy">
                                        <img class="two" src="{{ asset('assets/images/about/11.png') }}"
                                            alt="user" loading="lazy">
                                        <img class="three" src="{{ asset('assets/images/about/12.png') }}"
                                            alt="user" loading="lazy">
                                    </div>
                                    <p><span>20+</span> Our Ai Engineer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: open up about area end ::.. -->

    <!-- ..:: rts service area start ::.. -->
    <div class="rts-service-area-four rts-section-gap home-six">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="title-main-center-4">
                        <h2 class="title">
                            Using an AI Image <br> Generator
                        </h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="title-main-center-4">
                        <p class="disc">
                            Deep Dream Generator uses AI to create unique and visually <br> appealing images based on user
                            inputs and preferences.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: ingle service area start ::.. -->
                    <div class="single-service-area-4">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="54" viewBox="0 0 60 54"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M36.7279 25.4673H9.74625C9.37329 25.4673 9.01561 25.3191 8.75188 25.0554C8.48816 24.7917 8.34 24.434 8.34 24.061C8.34 23.6881 8.48816 23.3304 8.75188 23.0666C9.01561 22.8029 9.37329 22.6548 9.74625 22.6548H36.7279C37.1008 22.6548 37.4585 22.8029 37.7222 23.0666C37.9859 23.3304 38.1341 23.6881 38.1341 24.061C38.1341 24.434 37.9859 24.7917 37.7222 25.0554C37.4585 25.3191 37.1008 25.4673 36.7279 25.4673ZM8.34059 17.4762C8.34087 17.1034 8.48911 16.7459 8.75278 16.4822C9.01644 16.2185 9.37396 16.0703 9.74684 16.07H36.7279C37.1008 16.07 37.4585 16.2182 37.7222 16.4819C37.9859 16.7456 38.1341 17.1033 38.1341 17.4762C38.1341 17.8492 37.9859 18.2069 37.7222 18.4706C37.4585 18.7343 37.1008 18.8825 36.7279 18.8825H9.74625C9.37329 18.8825 9.01561 18.7343 8.75188 18.4706C8.48816 18.2069 8.34 17.8492 8.34 17.4762H8.34059ZM8.34059 10.8925C8.34059 10.5196 8.48875 10.1619 8.75247 9.89817C9.01619 9.63445 9.37388 9.48629 9.74684 9.48629H23.8711C24.2441 9.48629 24.6017 9.63445 24.8655 9.89817C25.1292 10.1619 25.2773 10.5196 25.2773 10.8925C25.2773 11.2655 25.1292 11.6232 24.8655 11.8869C24.6017 12.1506 24.2441 12.2988 23.8711 12.2988H9.74625C9.37329 12.2988 9.01561 12.1506 8.75188 11.8869C8.48816 11.6232 8.34 11.2655 8.34 10.8925H8.34059ZM57.1875 49.0663V15.4149C57.1871 15.127 57.0725 14.8509 56.8689 14.6473C56.6653 14.4437 56.3892 14.3291 56.1013 14.3287H46.474V30.0737C46.4728 31.1073 46.0617 32.0983 45.3307 32.8293C44.5998 33.5602 43.6088 33.9713 42.5752 33.9725H16.3383V40.6093C16.3387 40.8972 16.4533 41.1733 16.6569 41.3769C16.8605 41.5805 17.1365 41.6951 17.4245 41.6955H45.0682C45.3332 41.6954 45.5928 41.7705 45.8167 41.9122L57.1875 49.0663ZM2.8125 4.87988V38.5311L14.1833 31.3759C14.4074 31.2346 14.6669 31.1597 14.9318 31.1597H42.5752C42.8632 31.1594 43.1393 31.0449 43.343 30.8413C43.5466 30.6376 43.6611 30.3615 43.6614 30.0734V4.87988C43.6611 4.59181 43.5467 4.3156 43.343 4.11185C43.1394 3.9081 42.8632 3.79346 42.5752 3.79309H3.89895C3.61087 3.79349 3.33471 3.90813 3.13104 4.11187C2.92736 4.31561 2.81281 4.5918 2.8125 4.87988ZM56.1011 11.5161H46.474V4.87988C46.4728 3.84615 46.0617 2.85507 45.3308 2.12406C44.5999 1.39304 43.6089 0.981771 42.5752 0.980469H3.89895C2.86519 0.98174 1.87415 1.39299 1.14322 2.12401C0.412283 2.85503 0.00114892 3.84613 1.4962e-06 4.87988V41.0775C-0.000365575 41.329 0.0668155 41.576 0.194528 41.7928C0.322241 42.0095 0.5058 42.1879 0.726035 42.3095C0.946269 42.431 1.1951 42.4912 1.44654 42.4837C1.69797 42.4763 1.9428 42.4014 2.15543 42.267L13.5257 35.1129V40.609C13.5268 41.6426 13.9379 42.6336 14.6688 43.3644C15.3998 44.0953 16.3908 44.5063 17.4245 44.5072H44.6625L57.8448 52.8034C58.0576 52.937 58.3024 53.0112 58.5536 53.0182C58.8048 53.0252 59.0533 52.9648 59.2732 52.8433C59.4932 52.7218 59.6766 52.5437 59.8044 52.3273C59.9322 52.1109 59.9998 51.8643 60 51.613V15.4149C59.9988 14.3813 59.5877 13.3903 58.8568 12.6594C58.1259 11.9285 57.1349 11.5173 56.1013 11.5161H56.1011Z" />
                            </svg>
                        </div>
                        <h5 class="title">Website</h5>
                        <p class="disc">
                            Start or join a chat room with your friends, then collaborate, jam, or simply hang.
                        </p>
                        <a href="#">More Details <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <!-- ..:: ingle service area end ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: ingle service area start ::.. -->
                    <div class="single-service-area-4">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="55" height="60" viewBox="0 0 55 60"
                                fill="none">
                                <path
                                    d="M53.6115 8.06578L51.0476 5.80809L53.6115 3.55087C54.0102 3.1993 54.1467 2.65136 53.9594 2.15423C53.7713 1.65664 53.3067 1.33529 52.7752 1.33529H42.1652V0.879362C42.1652 0.393676 41.7715 0 41.2858 0C40.8001 0 40.4064 0.393676 40.4064 0.879362V12.7391L33.1843 16.6607C33.1445 16.343 33.0493 16.0309 32.8987 15.737L31.8811 13.7503C31.1825 12.3861 29.5044 11.8455 28.1412 12.5436L27.3543 12.9464C26.6932 13.2852 26.2039 13.8601 25.9759 14.5669C25.748 15.2733 25.8088 16.0263 26.1476 16.6868L27.1652 18.674C27.4028 19.1377 27.7539 19.5048 28.1668 19.7621C27.6266 20.4895 27.3703 21.3839 27.1066 22.3132L26.9171 22.9843C26.7848 23.4516 27.0567 23.9378 27.5241 24.0696C27.6037 24.0925 27.6843 24.103 27.7635 24.103C28.1471 24.103 28.4996 23.8504 28.6094 23.4626L28.799 22.7929C29.1844 21.4338 29.4211 20.706 30.1745 20.2967L31.5254 19.563L31.692 19.4778C31.7474 19.4494 31.7991 19.4174 31.8518 19.3858L41.4794 14.1577C41.4186 15.3611 40.7708 16.4982 39.7042 17.146L33.4434 20.95C33.4361 20.9541 33.4288 20.9582 33.4219 20.9628L31.4732 22.1466C31.0585 22.3988 30.9262 22.9399 31.1784 23.3551C31.416 23.7464 31.9104 23.8856 32.3137 23.6892L30.8351 28.1588L29.7543 28.6019L26.8155 29.8063L27.6623 26.8125C27.7942 26.3452 27.5227 25.859 27.0553 25.7267C26.5875 25.594 26.1018 25.8663 25.9695 26.3337L24.6315 31.0656C24.6141 31.1265 24.6026 31.1933 24.5999 31.257L24.2497 37.6894C24.2392 37.9348 24.2914 38.3985 24.1778 38.6379L20.2887 46.82H17.4625C15.8067 46.82 14.46 48.1667 14.46 49.822V52.3603C14.081 52.1868 13.6603 52.0897 13.2167 52.0897H6.03945C4.38418 52.0897 3.03744 53.436 3.03744 55.0918V58.2412H0.926237C0.440551 58.2412 0.046875 58.6348 0.046875 59.1205C0.046875 59.6062 0.440551 59.9999 0.926237 59.9999H52.7743C53.26 59.9999 53.6536 59.6062 53.6536 59.1205C53.6536 58.6348 53.26 58.2412 52.7743 58.2412H50.4873V35.575C50.4873 33.9198 49.1406 32.573 47.4853 32.573H42.1652V17.232C43.1402 15.9105 43.5014 14.1783 43.0487 12.5322C42.9777 12.2735 42.7923 12.0611 42.5451 11.9563C42.4238 11.9046 42.2938 11.8817 42.1652 11.8867V10.2814H52.7747C53.3067 10.2814 53.7713 9.96 53.959 9.46287C54.1467 8.96574 54.0102 8.41734 53.6115 8.06578ZM27.65 15.1071C27.7337 14.8475 27.9132 14.636 28.1558 14.512L28.9427 14.1092C29.091 14.0332 29.2494 13.997 29.406 13.997C29.7767 13.997 30.1352 14.1998 30.3155 14.5518L31.3336 16.539C31.5712 17.0031 31.4174 17.5657 30.9948 17.85L30.7083 18.0052L30.1036 18.3151C29.6032 18.5714 28.9871 18.3728 28.7307 17.872L27.7127 15.8853C27.5886 15.6427 27.5662 15.3662 27.65 15.1071ZM25.883 47.0905C25.5841 46.9541 25.2591 46.8648 24.9176 46.8333L25.883 45.5511V47.0905ZM30.0583 40.0048C30.4812 39.4981 30.598 38.9062 30.6923 38.4292C30.7161 38.3157 31.15 35.9454 31.15 35.9454C31.15 35.9454 31.5606 36.2013 31.6037 36.2196C31.6334 36.2328 31.6545 36.2621 31.6577 36.2965L32.136 41.1593H29.189L30.0583 40.0048ZM35.2584 35.1511L34.516 41.1552H33.903L33.4082 36.1243C33.345 35.4798 32.9504 34.9172 32.3723 34.6375L31.4879 34.0768L32.077 30.8116C32.077 30.8116 34.559 33.76 34.6167 33.8351C35.1303 34.503 35.3061 34.7703 35.2584 35.1511ZM25.7599 39.407C25.9375 38.8723 26.0199 38.328 26.0061 37.7746L26.3257 31.9079L30.3929 30.2412L29.6536 34.3363C29.6513 34.3473 29.649 34.3588 29.6476 34.3697L29.0361 37.7558C28.9564 38.1065 28.8868 38.6384 28.668 38.9272L22.7258 46.82H22.236L25.7599 39.407ZM4.79616 55.0913C4.79616 54.406 5.35372 53.8485 6.03945 53.8485H13.2167C13.9024 53.8485 14.4605 54.406 14.4605 55.0913V58.2412H4.79616V55.0913ZM16.2187 55.0913V49.822C16.2187 49.1363 16.7767 48.5787 17.4625 48.5787H24.6397C25.3255 48.5787 25.883 49.1363 25.883 49.822V58.2412H16.2192V55.0913H16.2187ZM48.7286 35.575V58.2412H39.0647V52.9686C39.0647 52.483 38.6711 52.0893 38.1854 52.0893C37.6992 52.0893 37.3056 52.483 37.3056 52.9686V58.2412H27.6417V44.1608C27.6417 43.4756 28.1993 42.918 28.885 42.918H36.0623C36.748 42.918 37.3056 43.4756 37.3056 44.1608V48.5691C37.3056 49.0548 37.6992 49.4484 38.1849 49.4484C38.6711 49.4484 39.0643 49.0548 39.0643 48.5691V35.575C39.0643 34.8893 39.6223 34.3317 40.308 34.3317H41.2767C41.2794 34.3317 41.2826 34.3322 41.2858 34.3322C41.2886 34.3322 41.2918 34.3317 41.2945 34.3317H47.4848C48.1706 34.3317 48.7286 34.8898 48.7286 35.575ZM40.308 32.573C38.6528 32.573 37.306 33.9198 37.306 35.575V41.4298C36.9911 41.2861 36.6478 41.195 36.2866 41.1684L37.0039 35.3677C37.1449 34.237 36.5681 33.4876 36.0106 32.7625C35.9515 32.6856 32.5334 28.6271 32.5334 28.6271L34.6304 22.2871L40.4064 18.7779V32.573H40.308ZM42.1652 8.52217V3.09448H51.4683L49.4647 4.85869C49.1918 5.09902 49.0353 5.44509 49.0353 5.80855C49.0353 6.17202 49.1918 6.51808 49.4647 6.75841L51.4683 8.52263H42.1652V8.52217Z" />
                            </svg>
                        </div>
                        <h5 class="title">LiveChat</h5>
                        <p class="disc">
                            Put your prompting skills to the test. Thousands of people enter and vote.
                        </p>
                        <a href="#">More Details <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <!-- ..:: ingle service area end ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: ingle service area start ::.. -->
                    <div class="single-service-area-4">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"
                                fill="none">
                                <path
                                    d="M33.4375 49.3164C29.0436 49.3164 25.4688 45.7416 25.4688 41.3477V7.59766C25.4688 3.7852 28.5705 0.683594 32.3828 0.683594C36.1952 0.683594 39.2969 3.7852 39.2969 7.59766C39.2969 8.49109 39.1236 9.37586 38.7907 10.2003C42.6111 10.5102 45.625 13.7184 45.625 17.6172C45.625 19.6121 44.8493 21.4683 43.4652 22.8539C45.1199 23.4374 46.6026 24.4773 47.7175 25.8518C49.0887 27.5423 49.8438 29.6745 49.8438 31.8555C49.8438 36.7311 46.182 40.7912 41.4062 41.341V41.3477C41.4062 45.7416 37.8314 49.3164 33.4375 49.3164ZM26.6406 39.8242V41.3477C26.6406 45.0954 29.6897 48.1445 33.4375 48.1445C37.1853 48.1445 40.2344 45.0954 40.2344 41.3477C40.2344 41.157 40.2284 41.0016 40.2159 40.859C40.2153 40.8527 40.2148 40.8463 40.2143 40.8399C40.0163 38.2224 38.3109 35.9343 35.8647 34.9977C35.5626 34.882 35.4113 34.5432 35.527 34.2409C35.6427 33.9388 35.9814 33.7881 36.2837 33.9032C38.9714 34.9322 40.8964 37.3538 41.318 40.1713C45.484 39.6684 48.6719 36.117 48.6719 31.8555C48.6719 27.9716 45.9237 24.5373 42.1374 23.6894C41.9139 23.6393 41.7399 23.4636 41.6923 23.2395C41.6447 23.0154 41.732 22.7841 41.9159 22.6475C43.3691 21.5671 44.264 19.9709 44.4263 18.2031H42.4075C42.1313 19.7014 40.8152 20.8398 39.2382 20.8398C37.4613 20.8398 36.0155 19.3942 36.0155 17.6172C36.0155 15.8402 37.4613 14.3945 39.2382 14.3945C40.8152 14.3945 42.1313 15.533 42.4075 17.0312H44.4259C44.1296 13.8479 41.443 11.3477 38.183 11.3477C37.245 11.3477 36.3093 11.5619 35.4643 11.9677C35.042 12.1704 34.6431 12.4216 34.2774 12.7139C34.1829 12.7894 33.2945 13.6793 33.303 13.6836C34.355 14.2146 35.0781 15.3057 35.0781 16.5625C35.0781 18.3395 33.6324 19.7852 31.8555 19.7852C30.0786 19.7852 28.6328 18.3395 28.6328 16.5625C28.6328 14.7855 30.0786 13.3398 31.8555 13.3398C31.9345 13.3398 32.0126 13.3427 32.0902 13.3483C33.3441 11.5547 35.3283 10.4039 37.5009 10.2092C37.91 9.40152 38.125 8.50492 38.125 7.59754C38.125 4.43125 35.5491 1.85535 32.3828 1.85535C29.2165 1.85535 26.6406 4.43125 26.6406 7.59754V27.0507H32.9049C33.1811 25.5524 34.4972 24.4139 36.0742 24.4139C37.8511 24.4139 39.2969 25.8597 39.2969 27.6366C39.2969 29.4135 37.8511 30.8594 36.0742 30.8594C34.4972 30.8594 33.1811 29.7209 32.9049 28.2227H26.6406V38.6523H28.1588C28.4351 37.1541 29.7511 36.0156 31.3281 36.0156C33.105 36.0156 34.5508 37.4614 34.5508 39.2383C34.5508 41.0152 33.105 42.4609 31.3281 42.4609C29.7511 42.4609 28.435 41.3225 28.1588 39.8242H26.6406ZM31.3281 37.1875C30.1974 37.1875 29.2773 38.1075 29.2773 39.2383C29.2773 40.369 30.1974 41.2891 31.3281 41.2891C32.4589 41.2891 33.3789 40.369 33.3789 39.2383C33.3789 38.1075 32.459 37.1875 31.3281 37.1875ZM36.0742 25.5859C34.9435 25.5859 34.0234 26.506 34.0234 27.6367C34.0234 28.7675 34.9435 29.6875 36.0742 29.6875C37.205 29.6875 38.125 28.7675 38.125 27.6367C38.125 26.506 37.2051 25.5859 36.0742 25.5859ZM39.2383 15.5664C38.1075 15.5664 37.1875 16.4864 37.1875 17.6172C37.1875 18.7479 38.1075 19.668 39.2383 19.668C40.369 19.668 41.2891 18.7479 41.2891 17.6172C41.2891 16.4864 40.3691 15.5664 39.2383 15.5664ZM31.8555 14.5117C30.7247 14.5117 29.8047 15.4318 29.8047 16.5625C29.8047 17.6932 30.7247 18.6133 31.8555 18.6133C32.9862 18.6133 33.9062 17.6932 33.9062 16.5625C33.9062 15.4318 32.9863 14.5117 31.8555 14.5117ZM16.5625 49.3164C12.1686 49.3164 8.59375 45.7416 8.59375 41.3477C8.59375 41.3454 8.59375 41.3432 8.59375 41.341C3.81813 40.7912 0.15625 36.7311 0.15625 31.8555C0.15625 29.6745 0.911289 27.5423 2.2825 25.8518C3.3973 24.4773 4.88008 23.4374 6.53465 22.8539C5.15055 21.4686 4.375 19.6124 4.375 17.6172C4.375 13.7184 7.38906 10.5102 11.2095 10.2003C10.8766 9.37598 10.7031 8.49121 10.7031 7.59766C10.7031 3.7852 13.8047 0.683594 17.6172 0.683594C21.4296 0.683594 24.5312 3.7852 24.5312 7.59766V41.3477C24.5312 45.7416 20.9564 49.3164 16.5625 49.3164ZM9.78379 40.864C9.77172 41.0245 9.76562 41.1857 9.76562 41.3477C9.76562 45.0954 12.8147 48.1445 16.5625 48.1445C20.3103 48.1445 23.3594 45.0954 23.3594 41.3477V39.8242H21.8411C21.5649 41.3225 20.2489 42.4609 18.6719 42.4609C16.8948 42.4609 15.4492 41.0152 15.4492 39.2383C15.4492 37.4614 16.895 36.0156 18.6719 36.0156C20.2489 36.0156 21.5649 37.1541 21.8411 38.6523H23.3594V28.2227H17.095C16.8188 29.7209 15.5028 30.8594 13.9258 30.8594C12.1488 30.8594 10.7031 29.4136 10.7031 27.6367C10.7031 25.8598 12.1488 24.4141 13.9258 24.4141C15.5028 24.4141 16.8188 25.5525 17.095 27.0508H23.3594V7.59766C23.3594 4.43137 20.7835 1.85547 17.6172 1.85547C14.4509 1.85547 11.875 4.43137 11.875 7.59766C11.875 8.50527 12.0902 9.40187 12.4996 10.2093C14.6718 10.4039 16.6559 11.5547 17.9098 13.3484C17.9874 13.3428 18.0655 13.34 18.1445 13.34C19.9216 13.34 21.3672 14.7856 21.3672 16.5626C21.3672 18.3396 19.9216 19.7853 18.1445 19.7853C16.3675 19.7853 14.9219 18.3395 14.9219 16.5625C14.9219 15.3057 15.645 14.2146 16.6971 13.6836C16.7027 13.6807 15.8185 12.7899 15.7206 12.7118C15.3421 12.4094 14.9274 12.152 14.489 11.9458C11.5574 10.5663 7.82336 11.7025 6.31387 14.5975C5.93992 15.3146 5.64918 16.2232 5.57395 17.0314H7.59238C7.86859 15.5331 9.18461 14.3946 10.7616 14.3946C12.5386 14.3946 13.9843 15.8403 13.9843 17.6173C13.9843 19.3943 12.5386 20.84 10.7616 20.84C9.18461 20.84 7.86859 19.7015 7.59238 18.2032H5.57359C5.73602 19.9711 6.63074 21.5675 8.08398 22.6475C8.26785 22.7841 8.35527 23.0154 8.30758 23.2396C8.26 23.4637 8.08609 23.6395 7.8625 23.6895C4.07629 24.5373 1.32812 27.9716 1.32812 31.8555C1.32812 36.1166 4.51586 39.668 8.68152 40.1714C9.1 37.3582 11.0259 34.9334 13.7158 33.9034C14.0179 33.7877 14.3568 33.9389 14.4726 34.2411C14.5882 34.5433 14.4371 34.8821 14.135 34.9977C11.703 35.9289 9.97738 38.2827 9.78379 40.864ZM18.6719 37.1875C17.5411 37.1875 16.6211 38.1075 16.6211 39.2383C16.6211 40.369 17.5411 41.2891 18.6719 41.2891C19.8026 41.2891 20.7227 40.369 20.7227 39.2383C20.7227 38.1075 19.8027 37.1875 18.6719 37.1875ZM13.9258 25.5859C12.795 25.5859 11.875 26.506 11.875 27.6367C11.875 28.7675 12.795 29.6875 13.9258 29.6875C15.0565 29.6875 15.9766 28.7675 15.9766 27.6367C15.9766 26.506 15.0566 25.5859 13.9258 25.5859ZM10.7617 15.5664C9.63098 15.5664 8.71094 16.4864 8.71094 17.6172C8.71094 18.7479 9.63098 19.668 10.7617 19.668C11.8925 19.668 12.8125 18.7479 12.8125 17.6172C12.8125 16.4864 11.8926 15.5664 10.7617 15.5664ZM18.1445 14.5117C17.0138 14.5117 16.0938 15.4318 16.0938 16.5625C16.0938 17.6932 17.0138 18.6133 18.1445 18.6133C19.2753 18.6133 20.1953 17.6932 20.1953 16.5625C20.1953 15.4318 19.2754 14.5117 18.1445 14.5117ZM41.3477 36.6602C41.024 36.6602 40.7617 36.3979 40.7617 36.0742C40.7617 35.7505 41.024 35.4883 41.3477 35.4883C43.6416 35.4883 45.5078 33.6221 45.5078 31.3281C45.5078 31.0045 45.7701 30.7422 46.0938 30.7422C46.4174 30.7422 46.6797 31.0045 46.6797 31.3281C46.6797 34.2682 44.2878 36.6602 41.3477 36.6602ZM8.65234 36.6602C5.71223 36.6602 3.32031 34.2682 3.32031 31.3281C3.32031 31.0045 3.5827 30.7422 3.90625 30.7422C4.2298 30.7422 4.49219 31.0045 4.49219 31.3281C4.49219 33.6221 6.3584 35.4883 8.65234 35.4883C8.9759 35.4883 9.23828 35.7505 9.23828 36.0742C9.23828 36.3979 8.9759 36.6602 8.65234 36.6602ZM35.0195 8.71094C34.6959 8.71094 34.4336 8.44855 34.4336 8.125C34.4336 6.41266 33.0405 5.01953 31.3281 5.01953C31.0045 5.01953 30.7422 4.75715 30.7422 4.43359C30.7422 4.11004 31.0045 3.84766 31.3281 3.84766C33.6866 3.84766 35.6055 5.76648 35.6055 8.125C35.6055 8.44855 35.3432 8.71094 35.0195 8.71094ZM14.9805 8.71094C14.6569 8.71094 14.3945 8.44855 14.3945 8.125C14.3945 5.76648 16.3134 3.84766 18.6719 3.84766C18.9954 3.84766 19.2578 4.11004 19.2578 4.43359C19.2578 4.75715 18.9954 5.01953 18.6719 5.01953C16.9595 5.01953 15.5664 6.41266 15.5664 8.125C15.5664 8.44855 15.304 8.71094 14.9805 8.71094Z" />
                            </svg>
                        </div>
                        <h5 class="title">Messenger</h5>
                        <p class="disc">
                            Unlimited base Stable Diffusion generations plus daily free credits to use on more.
                        </p>
                        <a href="#">More Details <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <!-- ..:: ingle service area end ::.. -->
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: rts service area end ::.. -->

    <!-- ..:: rts feature area start ::.. -->
    <div class="rts-feature-area home-six rts-section-gapBottom">
        <div class="container">
            <div class="rts-feature-area-inner">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="left-side-content">
                            <h2 class="title">Text-to-Image AI Generator troduction</h2>
                            <p class="disc">CodeInsights AI image generator from text brings your concept art to life
                                online in
                                just seconds. Text to image tool, allows you to take text prompts and turn them into
                                matching images. Enter text prompts like " a Abstract image transform your creative ideas
                                into stunning images with just a few clicks. </p>
                            <a href="#" class="rts-btn btn-primary">Generate Image</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-side-image">
                            <img src="{{ asset('assets/images/about/13.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: rts feature area end ::.. -->

    <!-- ..:: rts feature area start ::.. -->
    <div class="rts-feature-area home-six rts-section-gapBottom">
        <div class="container">
            <div class="rts-feature-area-inner">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="right-side-image">
                            <img src="{{ asset('assets/images/about/14.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="left-side-content area-2">
                            <h2 class="title">Creating AI-generated images Easy Change</h2>
                            <p class="disc">The process of generating AI images has been simplified through the
                                development of user-friendly tools and platforms. These tools often have user-friendly
                                interfaces that allow users to input parameters and preferences, enabling them to create
                                custom images with ease.</p>
                            <a href="#" class="rts-btn btn-primary">Generate Image</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: rts feature area end ::.. -->

    <!-- ..:: rts filter area start ::.. -->
    <section class="rts-isotope-area rts-section-gapBottom">
        <div class="rts-isotope-area-inner">
            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="rts-heading">
                        <div class="title-inner">
                            <h2 class="title"> various stylish AI-generated images</h2>
                            <p class="disc">The first step in generating AI images is collecting a dataset of <br> real
                                images related to the desired output. For instance.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xxl-12 text-center">
                    <div class="portfolio-menu mb-35">
                        <button class="gf_btn active" data-filter="*">Creative</button>
                        <button class="gf_btn" data-filter=".cat1">Abstract</button>
                        <button class="gf_btn" data-filter=".cat2">Cartoon</button>
                        <button class="gf_btn" data-filter=".cat3">Technology</button>
                        <button class="gf_btn" data-filter=".cat4">3D</button>
                    </div>
                </div>
            </div>
            <div class="grid row align-items-center">
                <div class="col-lg-3 col-md-6 col-sm-6 grid-item cat3">
                    <div class="portfolio-wrapper2 mb-30">
                        <img class="img-fluid" src="{{ asset('assets/images/feature/img-1.png') }}" alt="Portfolio Img">
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="#">Ai Cartoon</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 grid-item cat1">
                    <div class="portfolio-wrapper2 mb-30">
                        <img class="img-fluid" src="{{ asset('assets/images/feature/img-2.png') }}" alt="Portfolio Img">
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="#">Abstract</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 grid-item cat2">
                    <div class="portfolio-wrapper2 mb-30">
                        <img class="img-fluid" src="{{ asset('assets/images/feature/img-3.png') }}" alt="Portfolio Img">
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="#">Ai Cartoon</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 grid-item cat1">
                    <div class="portfolio-wrapper2 mb-30">
                        <img class="img-fluid" src="{{ asset('assets/images/feature/img-4.png') }}" alt="Portfolio Img">
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="#">Abstract</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 grid-item cat4">
                    <div class="portfolio-wrapper2 mb-30">
                        <img class="img-fluid" src="{{ asset('assets/images/feature/img-5.png') }}" alt="Portfolio Img">
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="#">3D</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 grid-item cat3">
                    <div class="portfolio-wrapper2 mb-30">
                        <img class="img-fluid" src="{{ asset('assets/images/feature/img-6.png') }}" alt="Portfolio Img">
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="#">Technology</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 grid-item cat2">
                    <div class="portfolio-wrapper2 mb-30">
                        <img class="img-fluid" src="{{ asset('assets/images/feature/img-7.png') }}" alt="Portfolio Img">
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="#">Ai Cartoon</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 grid-item cat4">
                    <div class="portfolio-wrapper2 mb-30">
                        <img class="img-fluid" src="{{ asset('assets/images/feature/img-8.png') }}" alt="Portfolio Img">
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="#">3D</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ..:: rts filter area end ::.. -->

    <!-- ..:: pricing table area start ::.. -->
    <div class="pricing-plane-area rts-section-gapBottom home-six">
        <div class="container">
            <div class="row">
                <div class="col-lgl-12">
                    <div class="title-conter-area">
                        <h2 class="title">
                            including pricing information <br>
                            for specific AI services
                        </h2>
                        <p class="disc">Keep in mind that the actual pricing and features of AI services may vary
                            significantly depending on the provider and the specific.</p>
                    </div>
                </div>
            </div>

            <!-- ..:: tabs area start ::.. -->
            <div class="tab-area-pricing-two mt--30">
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

    <!-- ..:: rts latest update area start ::.. -->
    <div class="rts-latest-update rts-section-gap home-six">
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
                            <img src="{{ asset('assets/images/blog/16.jpg') }}" alt="blog-area">
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
                            <img src="{{ asset('assets/images/blog/17.jpg') }}" alt="blog-area">
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
                            <img src="{{ asset('assets/images/blog/18.jpg') }}" alt="blog-area">
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

    <!-- ..:: gallery area start ::.. -->
    <div class="rts-gallery-area">
        <div class="gallery-area-inner">
            <div class="gallery-image">
                <a id="open-popup" href="#">
                    <img src="{{ asset('assets/images/feature/img-9.png') }}" alt="gallery">
                    <span class="center-icon"><i class="fa-brands fa-instagram"></i></span>
                </a>
            </div>
            <div class="gallery-image">
                <a id="open-popupa" href="#">
                    <img src="{{ asset('assets/images/feature/img-10.png') }}" alt="gallery">
                    <span class="center-icon"><i class="fa-brands fa-instagram"></i></span>
                </a>
            </div>
            <div class="gallery-image">
                <a id="open-popupb" href="#">
                    <img src="{{ asset('assets/images/feature/img-11.png') }}" alt="gallery">
                    <span class="center-icon"><i class="fa-brands fa-instagram"></i></span>
                </a>
            </div>
            <div class="gallery-image">
                <a id="open-popupc" href="#">
                    <img src="{{ asset('assets/images/feature/img-12.png') }}" alt="gallery">
                    <span class="center-icon"><i class="fa-brands fa-instagram"></i></span>
                </a>
            </div>
            <div class="gallery-image">
                <a id="open-popupd" href="#">
                    <img src="{{ asset('assets/images/feature/img-13.png') }}" alt="gallery">
                    <span class="center-icon"><i class="fa-brands fa-instagram"></i></span>
                </a>
            </div>
            <div class="gallery-image">
                <a id="open-popupe" href="#">
                    <img src="{{ asset('assets/images/feature/img-14.png') }}" alt="gallery">
                    <span class="center-icon"><i class="fa-brands fa-instagram"></i></span>
                </a>
            </div>
            <div class="gallery-image">
                <a id="open-popupf" href="#">
                    <img src="{{ asset('assets/images/feature/img-15.png') }}" alt="gallery">
                    <span class="center-icon"><i class="fa-brands fa-instagram"></i></span>
                </a>
            </div>
            <div class="gallery-image">
                <a id="open-popupg" href="#">
                    <img src="{{ asset('assets/images/feature/img-16.png') }}" alt="gallery">
                    <span class="center-icon"><i class="fa-brands fa-instagram"></i></span>
                </a>
            </div>
        </div>
    </div>
    <!-- ..:: gallery area end ::.. -->

    <!-- ..:: rts footer area start ::.. -->
    <div class="rts-footer-area  bg-footer footer-one">
        <div class="container rts-section-gapTop pb--100 pb_sm--30">
            <div class="row">
                <div class="col-lg-12">
                    <!-- ..:: footer main wrapper ::.. -->
                    <div class="footer-one-main-wrapper">
                        <!-- ..:: single sized  footer  ::.. -->
                        <div class="footer-singl-wized left-logo">
                            <div class="head">
                                <a href="#">
                                    <img src="{{ asset('assets/images/logo/01.svg') }}" alt="logo">
                                </a>
                            </div>
                            <div class="body">
                                <p class="dsic">
                                    CodeInsights is an artificial intelligence trained to automate important tasks such
                                    writing
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
                                    <li><a href="{{ route('about') }}">About Us</a></li>
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
