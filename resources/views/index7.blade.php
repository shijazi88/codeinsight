@extends('layout.layout3')

@php
    $headtitle = 'CodeInsights';
@endphp

@section('content')
    <!-- ..:: rts header area start ::.. -->
    <header class="header-one header-three header-four header--sticky">
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
                            <div class="search-cart-button">
                                <a href="#" id="search"
                                    class="echo-header-top-search-btn search-icon action-item icon">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.11544 16.961C13.3484 16.961 16.7798 13.5296 16.7798 9.29665C16.7798 5.06373 13.3484 1.63226 9.11544 1.63226C4.88251 1.63226 1.45105 5.06373 1.45105 9.29665C1.45105 13.5296 4.88251 16.961 9.11544 16.961Z"
                                            stroke="#5E5E5E" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M14.4461 15.0254L17.451 18.0225" stroke="#5E5E5E" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <div class="search-input-area">
                                    <div class="container">
                                        <div class="search-input-inner">
                                            <div class="input-div">
                                                <input id="searchInput1" class="search-input" type="text"
                                                    placeholder="Search by keyword or #">
                                            </div>
                                            <div class="search-close-icon"><i
                                                    class="fa-regular fa-xmark-large rt-xmark"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart action-item">
                                    <div class="cart-nav">
                                        <div class="cart-icon icon">
                                            <a href="#0">
                                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_855_2)">
                                                        <path
                                                            d="M8.37692 16.8088H8.37811C8.3791 16.8088 8.38009 16.8086 8.38108 16.8086H22.1914C22.5314 16.8086 22.8303 16.583 22.9238 16.2561L25.9706 5.59208C26.0363 5.36218 25.9903 5.11502 25.8465 4.92419C25.7024 4.73337 25.4773 4.62109 25.2383 4.62109H6.62021L6.0757 2.1707C5.99814 1.82217 5.68908 1.57422 5.33203 1.57422H0.761718C0.340988 1.57422 0 1.91521 0 2.33594C0 2.75667 0.340988 3.09766 0.761718 3.09766H4.72107C4.81747 3.53187 7.32678 14.824 7.47119 15.4736C6.66166 15.8255 6.09375 16.6326 6.09375 17.5703C6.09375 18.8303 7.11889 19.8555 8.3789 19.8555H22.1914C22.6121 19.8555 22.9531 19.5145 22.9531 19.0937C22.9531 18.673 22.6121 18.332 22.1914 18.332H8.3789C7.95896 18.332 7.61718 17.9902 7.61718 17.5703C7.61718 17.151 7.95777 16.8098 8.37692 16.8088ZM24.2284 6.14453L21.6167 15.2851H8.98986L6.95861 6.14453H24.2284Z"
                                                            fill="#D9D9D9" />
                                                        <path
                                                            d="M7.61719 22.1406C7.61719 23.4006 8.64233 24.4258 9.90234 24.4258C11.1624 24.4258 12.1875 23.4006 12.1875 22.1406C12.1875 20.8806 11.1624 19.8555 9.90234 19.8555C8.64233 19.8555 7.61719 20.8806 7.61719 22.1406ZM9.90234 21.3789C10.3223 21.3789 10.6641 21.7207 10.6641 22.1406C10.6641 22.5606 10.3223 22.9023 9.90234 22.9023C9.48241 22.9023 9.14062 22.5606 9.14062 22.1406C9.14062 21.7207 9.48241 21.3789 9.90234 21.3789Z"
                                                            fill="#D9D9D9" />
                                                        <path
                                                            d="M18.3828 22.1406C18.3828 23.4006 19.408 24.4258 20.668 24.4258C21.928 24.4258 22.9531 23.4006 22.9531 22.1406C22.9531 20.8806 21.928 19.8555 20.668 19.8555C19.408 19.8555 18.3828 20.8806 18.3828 22.1406ZM20.668 21.3789C21.0879 21.3789 21.4297 21.7207 21.4297 22.1406C21.4297 22.5606 21.0879 22.9023 20.668 22.9023C20.248 22.9023 19.9062 22.5606 19.9062 22.1406C19.9062 21.7207 20.248 21.3789 20.668 21.3789Z"
                                                            fill="#D9D9D9" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_855_2">
                                                            <rect width="26" height="26" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </a>
                                            <span class="wishlist-dot icon-dot">0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
        <div class="cart-bar">
            <div class="cart-header">
                <h3 class="cart-heading">MY CART (3 ITEMS)</h3>
                <div class="close-cart"><i class="fal fa-times"></i></div>
            </div>
            <div class="product-area">
                <div class="product-item">
                    <div class="product-detail">
                        <div class="product-thumb"> <img src="{{ asset('assets/images/feature/img-21.png') }}"
                                alt="product-thumb"></div>
                        <div class="item-wrapper">
                            <span class="product-name">Vector Ai Art</span>
                            <div class="item-wrapper">
                                <span class="product-variation"><span class="color">Ai Image</span>
                            </div>
                            <div class="item-wrapper">
                                <span class="product-qnty">3 ×</span>
                                <span class="product-price">$198.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="cart-edit">
                        <div class="quantity-edit">
                            <button class="button"><i class="fal fa-minus minus"></i></button>
                            <input type="text" class="input" value="3">
                            <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                        </div>
                    </div>
                </div>
                <div class="product-item">
                    <div class="product-detail">
                        <div class="product-thumb"> <img src="{{ asset('assets/images/feature/img-22.png') }}"
                                alt="product-thumb"></div>
                        <div class="item-wrapper">
                            <span class="product-name">Creative Nature</span>
                            <div class="item-wrapper">
                                <span class="product-variation"><span class="color">Ai Image</span>
                            </div>
                            <div class="item-wrapper">
                                <span class="product-qnty">2 ×</span>
                                <span class="product-price">$88.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="cart-edit">
                        <div class="quantity-edit">
                            <button class="button"><i class="fal fa-minus minus"></i></button>
                            <input type="text" class="input" value="3">
                            <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                        </div>
                    </div>
                </div>
                <div class="product-item last-child">
                    <div class="product-detail">
                        <div class="product-thumb"> <img src="{{ asset('assets/images/feature/img-23.png') }}"
                                alt="product-thumb"></div>
                        <div class="item-wrapper">
                            <span class="product-name">Ai Cartoon</span>
                            <div class="item-wrapper">
                                <span class="product-variation"><span class="color">Ai Image</span>
                            </div>
                            <div class="item-wrapper">
                                <span class="product-qnty">1 ×</span>
                                <span class="product-price">$289.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="cart-edit">
                        <div class="quantity-edit">
                            <button class="button"><i class="fal fa-minus minus"></i></button>
                            <input type="text" class="input" value="3">
                            <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart-bottom-area">
                <span class="spend-shipping"><i class="fal fa-truck"></i> SPENT <span class="amount">$199.00</span> MORE
                    FOR FREE SHIPPING</span>
                <span class="total-price">TOTAL: <span class="price">$556</span></span>
                <a href="checkout" class="checkout-btn cart-btn">PROCEED TO CHECKOUT</a>
                <a href="cart" class="view-btn cart-btn">VIEW CART</a>
            </div>
        </div>
    </header>
    <!-- ..:: rts header area end ::.. -->

    <!-- ..:: open up banner area start ::.. -->
    <div class="rts-banner-area-one banner-six banner-seven bg_image--3 bg_image rts-section-gap">
        <div class="container mt--50">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-main-wrapper">
                        <h1 class="title">
                            Unleash Your Creativity with Stunning Visuals
                        </h1>
                        <p class="disc">
                            Welcome to CodeInsights Stock Image your ultimate source for high-quality, royalty-Premium
                            images.
                        </p>
                        <form action="#">
                            <div class="input-area-fill">
                                <input type="text" placeholder="Search for all image on CodeInsights" required>
                                <button> Search</button>
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
    </div>
    <!-- ..:: open up banner area end ::.. -->

    <!-- ..:: open up project area start ::.. -->
    <div class="rts-project-area rts-section-gap">
        <div class="rts-project-area-inner">
            <h2 class="title text-center">ind the right content for your projects, at the right price</h2>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="image-area">
                        <img src="{{ asset('assets/images/feature/img-17.png') }}" alt="">
                        <div class="content">
                            <span><a href="shop-details">Illustration</a></span>
                            <span><a href="shop-details"><i class="fa-sharp fa-regular fa-arrow-right"></i></a></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="image-area">
                        <img src="{{ asset('assets/images/feature/img-18.png') }}" alt="">
                        <div class="content">
                            <span><a href="shop-details">Nature</a></span>
                            <span><a href="shop-details"><i class="fa-sharp fa-regular fa-arrow-right"></i></a></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="image-area">
                        <img src="{{ asset('assets/images/feature/img-19.png') }}" alt="">
                        <div class="content">
                            <span><a href="shop-details">Creative</a></span>
                            <span><a href="shop-details"><i class="fa-sharp fa-regular fa-arrow-right"></i></a></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="image-area last-child">
                        <img src="{{ asset('assets/images/feature/img-20.png') }}" alt="">
                        <div class="content">
                            <span><a href="shop-details">Technology</a></span>
                            <span><a href="shop-details"><i class="fa-sharp fa-regular fa-arrow-right"></i></a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: open up project area end ::.. -->

    <!-- ..:: open up popular image area start ::.. -->
    <div class="rts-popular-image-area rts-section-gap">
        <div class="rts-popular-image-area-inner">
            <h2 class="title text-center"> Popular various stylish images</h2>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="image-area">
                        <div class="image">
                            <a href="shop-details">
                                <img src="{{ asset('assets/images/feature/img-21.png') }}" alt="">
                            </a>
                        </div>
                        <span class="crown-tag"> <img src="{{ asset('assets/images/feature/crown.svg') }}"
                                alt=""></span>
                        <ul class="action-button">
                            <li class="single-action"><a href="#"><i class="fa-light fa-heart"></i></a></li>
                            <li class="single-action"><a href="#"><i class="fa-light fa-eye"></i></a></li>
                            <li class="single-action"><a href="#"><i
                                        class="fa-light fa-arrow-down-to-bracket"></i></a></li>
                        </ul>
                        <div class="content">
                            <span><a href="shop-details">Vector Ai Men Art</a></span>
                            <div class="bottom-wrapper">
                                <div class="price">$10.00</div>
                                <a href="cart" class="add-to-cart">
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_855_2)">
                                            <path
                                                d="M8.37692 16.8088H8.37811C8.3791 16.8088 8.38009 16.8086 8.38108 16.8086H22.1914C22.5314 16.8086 22.8303 16.583 22.9238 16.2561L25.9706 5.59208C26.0363 5.36218 25.9903 5.11502 25.8465 4.92419C25.7024 4.73337 25.4773 4.62109 25.2383 4.62109H6.62021L6.0757 2.1707C5.99814 1.82217 5.68908 1.57422 5.33203 1.57422H0.761718C0.340988 1.57422 0 1.91521 0 2.33594C0 2.75667 0.340988 3.09766 0.761718 3.09766H4.72107C4.81747 3.53187 7.32678 14.824 7.47119 15.4736C6.66166 15.8255 6.09375 16.6326 6.09375 17.5703C6.09375 18.8303 7.11889 19.8555 8.3789 19.8555H22.1914C22.6121 19.8555 22.9531 19.5145 22.9531 19.0937C22.9531 18.673 22.6121 18.332 22.1914 18.332H8.3789C7.95896 18.332 7.61718 17.9902 7.61718 17.5703C7.61718 17.151 7.95777 16.8098 8.37692 16.8088ZM24.2284 6.14453L21.6167 15.2851H8.98986L6.95861 6.14453H24.2284Z"
                                                fill="#D9D9D9" />
                                            <path
                                                d="M7.61719 22.1406C7.61719 23.4006 8.64233 24.4258 9.90234 24.4258C11.1624 24.4258 12.1875 23.4006 12.1875 22.1406C12.1875 20.8806 11.1624 19.8555 9.90234 19.8555C8.64233 19.8555 7.61719 20.8806 7.61719 22.1406ZM9.90234 21.3789C10.3223 21.3789 10.6641 21.7207 10.6641 22.1406C10.6641 22.5606 10.3223 22.9023 9.90234 22.9023C9.48241 22.9023 9.14062 22.5606 9.14062 22.1406C9.14062 21.7207 9.48241 21.3789 9.90234 21.3789Z"
                                                fill="#D9D9D9" />
                                            <path
                                                d="M18.3828 22.1406C18.3828 23.4006 19.408 24.4258 20.668 24.4258C21.928 24.4258 22.9531 23.4006 22.9531 22.1406C22.9531 20.8806 21.928 19.8555 20.668 19.8555C19.408 19.8555 18.3828 20.8806 18.3828 22.1406ZM20.668 21.3789C21.0879 21.3789 21.4297 21.7207 21.4297 22.1406C21.4297 22.5606 21.0879 22.9023 20.668 22.9023C20.248 22.9023 19.9062 22.5606 19.9062 22.1406C19.9062 21.7207 20.248 21.3789 20.668 21.3789Z"
                                                fill="#D9D9D9" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_855_2">
                                                <rect width="26" height="26" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    Add To Cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="image-area">
                        <div class="image">
                            <a href="shop-details">
                                <img src="{{ asset('assets/images/feature/img-22.png') }}" alt="">
                            </a>
                        </div>
                        <span class="crown-tag"> <img src="{{ asset('assets/images/feature/crown.svg') }}"
                                alt=""></span>
                        <ul class="action-button">
                            <li class="single-action"><a href="#"><i class="fa-light fa-heart"></i></a></li>
                            <li class="single-action"><a href="#"><i class="fa-light fa-eye"></i></a></li>
                            <li class="single-action"><a href="#"><i
                                        class="fa-light fa-arrow-down-to-bracket"></i></a></li>
                        </ul>
                        <div class="content">
                            <span><a href="shop-details">Ai Creative Natural</a></span>
                            <div class="bottom-wrapper">
                                <div class="price">$10.00</div>
                                <a href="cart" class="add-to-cart">
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_855_2)">
                                            <path
                                                d="M8.37692 16.8088H8.37811C8.3791 16.8088 8.38009 16.8086 8.38108 16.8086H22.1914C22.5314 16.8086 22.8303 16.583 22.9238 16.2561L25.9706 5.59208C26.0363 5.36218 25.9903 5.11502 25.8465 4.92419C25.7024 4.73337 25.4773 4.62109 25.2383 4.62109H6.62021L6.0757 2.1707C5.99814 1.82217 5.68908 1.57422 5.33203 1.57422H0.761718C0.340988 1.57422 0 1.91521 0 2.33594C0 2.75667 0.340988 3.09766 0.761718 3.09766H4.72107C4.81747 3.53187 7.32678 14.824 7.47119 15.4736C6.66166 15.8255 6.09375 16.6326 6.09375 17.5703C6.09375 18.8303 7.11889 19.8555 8.3789 19.8555H22.1914C22.6121 19.8555 22.9531 19.5145 22.9531 19.0937C22.9531 18.673 22.6121 18.332 22.1914 18.332H8.3789C7.95896 18.332 7.61718 17.9902 7.61718 17.5703C7.61718 17.151 7.95777 16.8098 8.37692 16.8088ZM24.2284 6.14453L21.6167 15.2851H8.98986L6.95861 6.14453H24.2284Z"
                                                fill="#D9D9D9" />
                                            <path
                                                d="M7.61719 22.1406C7.61719 23.4006 8.64233 24.4258 9.90234 24.4258C11.1624 24.4258 12.1875 23.4006 12.1875 22.1406C12.1875 20.8806 11.1624 19.8555 9.90234 19.8555C8.64233 19.8555 7.61719 20.8806 7.61719 22.1406ZM9.90234 21.3789C10.3223 21.3789 10.6641 21.7207 10.6641 22.1406C10.6641 22.5606 10.3223 22.9023 9.90234 22.9023C9.48241 22.9023 9.14062 22.5606 9.14062 22.1406C9.14062 21.7207 9.48241 21.3789 9.90234 21.3789Z"
                                                fill="#D9D9D9" />
                                            <path
                                                d="M18.3828 22.1406C18.3828 23.4006 19.408 24.4258 20.668 24.4258C21.928 24.4258 22.9531 23.4006 22.9531 22.1406C22.9531 20.8806 21.928 19.8555 20.668 19.8555C19.408 19.8555 18.3828 20.8806 18.3828 22.1406ZM20.668 21.3789C21.0879 21.3789 21.4297 21.7207 21.4297 22.1406C21.4297 22.5606 21.0879 22.9023 20.668 22.9023C20.248 22.9023 19.9062 22.5606 19.9062 22.1406C19.9062 21.7207 20.248 21.3789 20.668 21.3789Z"
                                                fill="#D9D9D9" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_855_2">
                                                <rect width="26" height="26" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    Add To Cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="image-area">
                        <div class="image">
                            <a href="shop-details">
                                <img src="{{ asset('assets/images/feature/img-23.png') }}" alt="">
                            </a>
                        </div>
                        <span class="crown-tag"> <img src="{{ asset('assets/images/feature/crown.svg') }}"
                                alt=""></span>
                        <ul class="action-button">
                            <li class="single-action"><a href="#"><i class="fa-light fa-heart"></i></a></li>
                            <li class="single-action"><a href="#"><i class="fa-light fa-eye"></i></a></li>
                            <li class="single-action"><a href="#"><i
                                        class="fa-light fa-arrow-down-to-bracket"></i></a></li>
                        </ul>
                        <div class="content">
                            <span><a href="shop-details"> Ai Cartoon</a></span>
                            <div class="bottom-wrapper">
                                <div class="price">$10.00</div>
                                <a href="cart" class="add-to-cart">
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_855_2)">
                                            <path
                                                d="M8.37692 16.8088H8.37811C8.3791 16.8088 8.38009 16.8086 8.38108 16.8086H22.1914C22.5314 16.8086 22.8303 16.583 22.9238 16.2561L25.9706 5.59208C26.0363 5.36218 25.9903 5.11502 25.8465 4.92419C25.7024 4.73337 25.4773 4.62109 25.2383 4.62109H6.62021L6.0757 2.1707C5.99814 1.82217 5.68908 1.57422 5.33203 1.57422H0.761718C0.340988 1.57422 0 1.91521 0 2.33594C0 2.75667 0.340988 3.09766 0.761718 3.09766H4.72107C4.81747 3.53187 7.32678 14.824 7.47119 15.4736C6.66166 15.8255 6.09375 16.6326 6.09375 17.5703C6.09375 18.8303 7.11889 19.8555 8.3789 19.8555H22.1914C22.6121 19.8555 22.9531 19.5145 22.9531 19.0937C22.9531 18.673 22.6121 18.332 22.1914 18.332H8.3789C7.95896 18.332 7.61718 17.9902 7.61718 17.5703C7.61718 17.151 7.95777 16.8098 8.37692 16.8088ZM24.2284 6.14453L21.6167 15.2851H8.98986L6.95861 6.14453H24.2284Z"
                                                fill="#D9D9D9" />
                                            <path
                                                d="M7.61719 22.1406C7.61719 23.4006 8.64233 24.4258 9.90234 24.4258C11.1624 24.4258 12.1875 23.4006 12.1875 22.1406C12.1875 20.8806 11.1624 19.8555 9.90234 19.8555C8.64233 19.8555 7.61719 20.8806 7.61719 22.1406ZM9.90234 21.3789C10.3223 21.3789 10.6641 21.7207 10.6641 22.1406C10.6641 22.5606 10.3223 22.9023 9.90234 22.9023C9.48241 22.9023 9.14062 22.5606 9.14062 22.1406C9.14062 21.7207 9.48241 21.3789 9.90234 21.3789Z"
                                                fill="#D9D9D9" />
                                            <path
                                                d="M18.3828 22.1406C18.3828 23.4006 19.408 24.4258 20.668 24.4258C21.928 24.4258 22.9531 23.4006 22.9531 22.1406C22.9531 20.8806 21.928 19.8555 20.668 19.8555C19.408 19.8555 18.3828 20.8806 18.3828 22.1406ZM20.668 21.3789C21.0879 21.3789 21.4297 21.7207 21.4297 22.1406C21.4297 22.5606 21.0879 22.9023 20.668 22.9023C20.248 22.9023 19.9062 22.5606 19.9062 22.1406C19.9062 21.7207 20.248 21.3789 20.668 21.3789Z"
                                                fill="#D9D9D9" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_855_2">
                                                <rect width="26" height="26" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    Add To Cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="image-area">
                        <div class="image">
                            <a href="shop-details">
                                <img src="{{ asset('assets/images/feature/img-24.png') }}" alt="">
                            </a>
                        </div>
                        <span class="crown-tag"> <img src="{{ asset('assets/images/feature/crown.svg') }}"
                                alt=""></span>
                        <ul class="action-button">
                            <li class="single-action"><a href="#"><i class="fa-light fa-heart"></i></a></li>
                            <li class="single-action"><a href="#"><i class="fa-light fa-eye"></i></a></li>
                            <li class="single-action"><a href="#"><i
                                        class="fa-light fa-arrow-down-to-bracket"></i></a></li>
                        </ul>
                        <div class="content">
                            <span><a href="shop-details"> InnoMind Creations</a></span>
                            <div class="bottom-wrapper">
                                <div class="price">$10.00</div>
                                <a href="cart"class="add-to-cart">
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_855_2)">
                                            <path
                                                d="M8.37692 16.8088H8.37811C8.3791 16.8088 8.38009 16.8086 8.38108 16.8086H22.1914C22.5314 16.8086 22.8303 16.583 22.9238 16.2561L25.9706 5.59208C26.0363 5.36218 25.9903 5.11502 25.8465 4.92419C25.7024 4.73337 25.4773 4.62109 25.2383 4.62109H6.62021L6.0757 2.1707C5.99814 1.82217 5.68908 1.57422 5.33203 1.57422H0.761718C0.340988 1.57422 0 1.91521 0 2.33594C0 2.75667 0.340988 3.09766 0.761718 3.09766H4.72107C4.81747 3.53187 7.32678 14.824 7.47119 15.4736C6.66166 15.8255 6.09375 16.6326 6.09375 17.5703C6.09375 18.8303 7.11889 19.8555 8.3789 19.8555H22.1914C22.6121 19.8555 22.9531 19.5145 22.9531 19.0937C22.9531 18.673 22.6121 18.332 22.1914 18.332H8.3789C7.95896 18.332 7.61718 17.9902 7.61718 17.5703C7.61718 17.151 7.95777 16.8098 8.37692 16.8088ZM24.2284 6.14453L21.6167 15.2851H8.98986L6.95861 6.14453H24.2284Z"
                                                fill="#D9D9D9" />
                                            <path
                                                d="M7.61719 22.1406C7.61719 23.4006 8.64233 24.4258 9.90234 24.4258C11.1624 24.4258 12.1875 23.4006 12.1875 22.1406C12.1875 20.8806 11.1624 19.8555 9.90234 19.8555C8.64233 19.8555 7.61719 20.8806 7.61719 22.1406ZM9.90234 21.3789C10.3223 21.3789 10.6641 21.7207 10.6641 22.1406C10.6641 22.5606 10.3223 22.9023 9.90234 22.9023C9.48241 22.9023 9.14062 22.5606 9.14062 22.1406C9.14062 21.7207 9.48241 21.3789 9.90234 21.3789Z"
                                                fill="#D9D9D9" />
                                            <path
                                                d="M18.3828 22.1406C18.3828 23.4006 19.408 24.4258 20.668 24.4258C21.928 24.4258 22.9531 23.4006 22.9531 22.1406C22.9531 20.8806 21.928 19.8555 20.668 19.8555C19.408 19.8555 18.3828 20.8806 18.3828 22.1406ZM20.668 21.3789C21.0879 21.3789 21.4297 21.7207 21.4297 22.1406C21.4297 22.5606 21.0879 22.9023 20.668 22.9023C20.248 22.9023 19.9062 22.5606 19.9062 22.1406C19.9062 21.7207 20.248 21.3789 20.668 21.3789Z"
                                                fill="#D9D9D9" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_855_2">
                                                <rect width="26" height="26" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    Add To Cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="image-area">
                        <div class="image">
                            <a href="shop-details">
                                <img src="{{ asset('assets/images/feature/img-25.png') }}" alt="">
                            </a>
                        </div>
                        <span class="crown-tag"> <img src="{{ asset('assets/images/feature/crown.svg') }}"
                                alt=""></span>
                        <ul class="action-button">
                            <li class="single-action"><a href="#"><i class="fa-light fa-heart"></i></a></li>
                            <li class="single-action"><a href="#"><i class="fa-light fa-eye"></i></a></li>
                            <li class="single-action"><a href="#"><i
                                        class="fa-light fa-arrow-down-to-bracket"></i></a></li>
                        </ul>
                        <div class="content">
                            <span><a href="shop-details"> ArtiSoul Natural Design</a></span>
                            <div class="bottom-wrapper">
                                <div class="price">$10.00</div>
                                <a href="cart"class="add-to-cart">
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_855_2)">
                                            <path
                                                d="M8.37692 16.8088H8.37811C8.3791 16.8088 8.38009 16.8086 8.38108 16.8086H22.1914C22.5314 16.8086 22.8303 16.583 22.9238 16.2561L25.9706 5.59208C26.0363 5.36218 25.9903 5.11502 25.8465 4.92419C25.7024 4.73337 25.4773 4.62109 25.2383 4.62109H6.62021L6.0757 2.1707C5.99814 1.82217 5.68908 1.57422 5.33203 1.57422H0.761718C0.340988 1.57422 0 1.91521 0 2.33594C0 2.75667 0.340988 3.09766 0.761718 3.09766H4.72107C4.81747 3.53187 7.32678 14.824 7.47119 15.4736C6.66166 15.8255 6.09375 16.6326 6.09375 17.5703C6.09375 18.8303 7.11889 19.8555 8.3789 19.8555H22.1914C22.6121 19.8555 22.9531 19.5145 22.9531 19.0937C22.9531 18.673 22.6121 18.332 22.1914 18.332H8.3789C7.95896 18.332 7.61718 17.9902 7.61718 17.5703C7.61718 17.151 7.95777 16.8098 8.37692 16.8088ZM24.2284 6.14453L21.6167 15.2851H8.98986L6.95861 6.14453H24.2284Z"
                                                fill="#D9D9D9" />
                                            <path
                                                d="M7.61719 22.1406C7.61719 23.4006 8.64233 24.4258 9.90234 24.4258C11.1624 24.4258 12.1875 23.4006 12.1875 22.1406C12.1875 20.8806 11.1624 19.8555 9.90234 19.8555C8.64233 19.8555 7.61719 20.8806 7.61719 22.1406ZM9.90234 21.3789C10.3223 21.3789 10.6641 21.7207 10.6641 22.1406C10.6641 22.5606 10.3223 22.9023 9.90234 22.9023C9.48241 22.9023 9.14062 22.5606 9.14062 22.1406C9.14062 21.7207 9.48241 21.3789 9.90234 21.3789Z"
                                                fill="#D9D9D9" />
                                            <path
                                                d="M18.3828 22.1406C18.3828 23.4006 19.408 24.4258 20.668 24.4258C21.928 24.4258 22.9531 23.4006 22.9531 22.1406C22.9531 20.8806 21.928 19.8555 20.668 19.8555C19.408 19.8555 18.3828 20.8806 18.3828 22.1406ZM20.668 21.3789C21.0879 21.3789 21.4297 21.7207 21.4297 22.1406C21.4297 22.5606 21.0879 22.9023 20.668 22.9023C20.248 22.9023 19.9062 22.5606 19.9062 22.1406C19.9062 21.7207 20.248 21.3789 20.668 21.3789Z"
                                                fill="#D9D9D9" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_855_2">
                                                <rect width="26" height="26" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    Add To Cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="image-area">
                        <div class="image">
                            <a href="shop-details">
                                <img src="{{ asset('assets/images/feature/img-26.png') }}" alt="">
                            </a>
                        </div>
                        <span class="crown-tag"> <img src="{{ asset('assets/images/feature/crown.svg') }}"
                                alt=""></span>
                        <ul class="action-button">
                            <li class="single-action"><a href="#"><i class="fa-light fa-heart"></i></a></li>
                            <li class="single-action"><a href="#"><i class="fa-light fa-eye"></i></a></li>
                            <li class="single-action"><a href="#"><i
                                        class="fa-light fa-arrow-down-to-bracket"></i></a></li>
                        </ul>
                        <div class="content">
                            <span><a href="shop-details"> AIgenius Studios</a></span>
                            <div class="bottom-wrapper">
                                <div class="price">$10.00</div>
                                <a href="cart"class="add-to-cart">
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_855_2)">
                                            <path
                                                d="M8.37692 16.8088H8.37811C8.3791 16.8088 8.38009 16.8086 8.38108 16.8086H22.1914C22.5314 16.8086 22.8303 16.583 22.9238 16.2561L25.9706 5.59208C26.0363 5.36218 25.9903 5.11502 25.8465 4.92419C25.7024 4.73337 25.4773 4.62109 25.2383 4.62109H6.62021L6.0757 2.1707C5.99814 1.82217 5.68908 1.57422 5.33203 1.57422H0.761718C0.340988 1.57422 0 1.91521 0 2.33594C0 2.75667 0.340988 3.09766 0.761718 3.09766H4.72107C4.81747 3.53187 7.32678 14.824 7.47119 15.4736C6.66166 15.8255 6.09375 16.6326 6.09375 17.5703C6.09375 18.8303 7.11889 19.8555 8.3789 19.8555H22.1914C22.6121 19.8555 22.9531 19.5145 22.9531 19.0937C22.9531 18.673 22.6121 18.332 22.1914 18.332H8.3789C7.95896 18.332 7.61718 17.9902 7.61718 17.5703C7.61718 17.151 7.95777 16.8098 8.37692 16.8088ZM24.2284 6.14453L21.6167 15.2851H8.98986L6.95861 6.14453H24.2284Z"
                                                fill="#D9D9D9" />
                                            <path
                                                d="M7.61719 22.1406C7.61719 23.4006 8.64233 24.4258 9.90234 24.4258C11.1624 24.4258 12.1875 23.4006 12.1875 22.1406C12.1875 20.8806 11.1624 19.8555 9.90234 19.8555C8.64233 19.8555 7.61719 20.8806 7.61719 22.1406ZM9.90234 21.3789C10.3223 21.3789 10.6641 21.7207 10.6641 22.1406C10.6641 22.5606 10.3223 22.9023 9.90234 22.9023C9.48241 22.9023 9.14062 22.5606 9.14062 22.1406C9.14062 21.7207 9.48241 21.3789 9.90234 21.3789Z"
                                                fill="#D9D9D9" />
                                            <path
                                                d="M18.3828 22.1406C18.3828 23.4006 19.408 24.4258 20.668 24.4258C21.928 24.4258 22.9531 23.4006 22.9531 22.1406C22.9531 20.8806 21.928 19.8555 20.668 19.8555C19.408 19.8555 18.3828 20.8806 18.3828 22.1406ZM20.668 21.3789C21.0879 21.3789 21.4297 21.7207 21.4297 22.1406C21.4297 22.5606 21.0879 22.9023 20.668 22.9023C20.248 22.9023 19.9062 22.5606 19.9062 22.1406C19.9062 21.7207 20.248 21.3789 20.668 21.3789Z"
                                                fill="#D9D9D9" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_855_2">
                                                <rect width="26" height="26" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    Add To Cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="image-area">
                        <div class="image">
                            <a href="shop-details">
                                <img src="{{ asset('assets/images/feature/img-27.png') }}" alt="">
                            </a>
                        </div>
                        <span class="crown-tag"> <img src="{{ asset('assets/images/feature/crown.svg') }}"
                                alt=""></span>
                        <ul class="action-button">
                            <li class="single-action"><a href="#"><i class="fa-light fa-heart"></i></a></li>
                            <li class="single-action"><a href="#"><i class="fa-light fa-eye"></i></a></li>
                            <li class="single-action"><a href="#"><i
                                        class="fa-light fa-arrow-down-to-bracket"></i></a></li>
                        </ul>
                        <div class="content">
                            <span><a href="shop-details">CreativeBot Organics</a></span>
                            <div class="bottom-wrapper">
                                <div class="price">$10.00</div>
                                <a href="cart"class="add-to-cart">
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_855_2)">
                                            <path
                                                d="M8.37692 16.8088H8.37811C8.3791 16.8088 8.38009 16.8086 8.38108 16.8086H22.1914C22.5314 16.8086 22.8303 16.583 22.9238 16.2561L25.9706 5.59208C26.0363 5.36218 25.9903 5.11502 25.8465 4.92419C25.7024 4.73337 25.4773 4.62109 25.2383 4.62109H6.62021L6.0757 2.1707C5.99814 1.82217 5.68908 1.57422 5.33203 1.57422H0.761718C0.340988 1.57422 0 1.91521 0 2.33594C0 2.75667 0.340988 3.09766 0.761718 3.09766H4.72107C4.81747 3.53187 7.32678 14.824 7.47119 15.4736C6.66166 15.8255 6.09375 16.6326 6.09375 17.5703C6.09375 18.8303 7.11889 19.8555 8.3789 19.8555H22.1914C22.6121 19.8555 22.9531 19.5145 22.9531 19.0937C22.9531 18.673 22.6121 18.332 22.1914 18.332H8.3789C7.95896 18.332 7.61718 17.9902 7.61718 17.5703C7.61718 17.151 7.95777 16.8098 8.37692 16.8088ZM24.2284 6.14453L21.6167 15.2851H8.98986L6.95861 6.14453H24.2284Z"
                                                fill="#D9D9D9" />
                                            <path
                                                d="M7.61719 22.1406C7.61719 23.4006 8.64233 24.4258 9.90234 24.4258C11.1624 24.4258 12.1875 23.4006 12.1875 22.1406C12.1875 20.8806 11.1624 19.8555 9.90234 19.8555C8.64233 19.8555 7.61719 20.8806 7.61719 22.1406ZM9.90234 21.3789C10.3223 21.3789 10.6641 21.7207 10.6641 22.1406C10.6641 22.5606 10.3223 22.9023 9.90234 22.9023C9.48241 22.9023 9.14062 22.5606 9.14062 22.1406C9.14062 21.7207 9.48241 21.3789 9.90234 21.3789Z"
                                                fill="#D9D9D9" />
                                            <path
                                                d="M18.3828 22.1406C18.3828 23.4006 19.408 24.4258 20.668 24.4258C21.928 24.4258 22.9531 23.4006 22.9531 22.1406C22.9531 20.8806 21.928 19.8555 20.668 19.8555C19.408 19.8555 18.3828 20.8806 18.3828 22.1406ZM20.668 21.3789C21.0879 21.3789 21.4297 21.7207 21.4297 22.1406C21.4297 22.5606 21.0879 22.9023 20.668 22.9023C20.248 22.9023 19.9062 22.5606 19.9062 22.1406C19.9062 21.7207 20.248 21.3789 20.668 21.3789Z"
                                                fill="#D9D9D9" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_855_2">
                                                <rect width="26" height="26" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    Add To Cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="image-area">
                        <div class="image">
                            <a href="shop-details">
                                <img src="{{ asset('assets/images/feature/img-28.png') }}" alt="">
                            </a>
                        </div>
                        <span class="crown-tag"> <img src="{{ asset('assets/images/feature/crown.svg') }}"
                                alt=""></span>
                        <ul class="action-button">
                            <li class="single-action"><a href="#"><i class="fa-light fa-heart"></i></a></li>
                            <li class="single-action"><a href="#"><i class="fa-light fa-eye"></i></a></li>
                            <li class="single-action"><a href="#"><i
                                        class="fa-light fa-arrow-down-to-bracket"></i></a></li>
                        </ul>
                        <div class="content">
                            <span><a href="shop-details">MindfulTech Creations</a></span>
                            <div class="bottom-wrapper">
                                <div class="price">$10.00</div>
                                <a href="cart"class="add-to-cart">
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_855_2)">
                                            <path
                                                d="M8.37692 16.8088H8.37811C8.3791 16.8088 8.38009 16.8086 8.38108 16.8086H22.1914C22.5314 16.8086 22.8303 16.583 22.9238 16.2561L25.9706 5.59208C26.0363 5.36218 25.9903 5.11502 25.8465 4.92419C25.7024 4.73337 25.4773 4.62109 25.2383 4.62109H6.62021L6.0757 2.1707C5.99814 1.82217 5.68908 1.57422 5.33203 1.57422H0.761718C0.340988 1.57422 0 1.91521 0 2.33594C0 2.75667 0.340988 3.09766 0.761718 3.09766H4.72107C4.81747 3.53187 7.32678 14.824 7.47119 15.4736C6.66166 15.8255 6.09375 16.6326 6.09375 17.5703C6.09375 18.8303 7.11889 19.8555 8.3789 19.8555H22.1914C22.6121 19.8555 22.9531 19.5145 22.9531 19.0937C22.9531 18.673 22.6121 18.332 22.1914 18.332H8.3789C7.95896 18.332 7.61718 17.9902 7.61718 17.5703C7.61718 17.151 7.95777 16.8098 8.37692 16.8088ZM24.2284 6.14453L21.6167 15.2851H8.98986L6.95861 6.14453H24.2284Z"
                                                fill="#D9D9D9" />
                                            <path
                                                d="M7.61719 22.1406C7.61719 23.4006 8.64233 24.4258 9.90234 24.4258C11.1624 24.4258 12.1875 23.4006 12.1875 22.1406C12.1875 20.8806 11.1624 19.8555 9.90234 19.8555C8.64233 19.8555 7.61719 20.8806 7.61719 22.1406ZM9.90234 21.3789C10.3223 21.3789 10.6641 21.7207 10.6641 22.1406C10.6641 22.5606 10.3223 22.9023 9.90234 22.9023C9.48241 22.9023 9.14062 22.5606 9.14062 22.1406C9.14062 21.7207 9.48241 21.3789 9.90234 21.3789Z"
                                                fill="#D9D9D9" />
                                            <path
                                                d="M18.3828 22.1406C18.3828 23.4006 19.408 24.4258 20.668 24.4258C21.928 24.4258 22.9531 23.4006 22.9531 22.1406C22.9531 20.8806 21.928 19.8555 20.668 19.8555C19.408 19.8555 18.3828 20.8806 18.3828 22.1406ZM20.668 21.3789C21.0879 21.3789 21.4297 21.7207 21.4297 22.1406C21.4297 22.5606 21.0879 22.9023 20.668 22.9023C20.248 22.9023 19.9062 22.5606 19.9062 22.1406C19.9062 21.7207 20.248 21.3789 20.668 21.3789Z"
                                                fill="#D9D9D9" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_855_2">
                                                <rect width="26" height="26" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    Add To Cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="image-area">
                        <div class="image">
                            <a href="shop-details">
                                <img src="{{ asset('assets/images/feature/img-29.png') }}" alt="">
                            </a>
                        </div>
                        <span class="crown-tag"> <img src="{{ asset('assets/images/feature/crown.svg') }}"
                                alt=""></span>
                        <ul class="action-button">
                            <li class="single-action"><a href="#"><i class="fa-light fa-heart"></i></a></li>
                            <li class="single-action"><a href="#"><i class="fa-light fa-eye"></i></a></li>
                            <li class="single-action"><a href="#"><i
                                        class="fa-light fa-arrow-down-to-bracket"></i></a></li>
                        </ul>
                        <div class="content">
                            <span><a href="shop-details">CreaBot Mindful Arts</a></span>
                            <div class="bottom-wrapper">
                                <div class="price">$10.00</div>
                                <a href="cart"class="add-to-cart">
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_855_2)">
                                            <path
                                                d="M8.37692 16.8088H8.37811C8.3791 16.8088 8.38009 16.8086 8.38108 16.8086H22.1914C22.5314 16.8086 22.8303 16.583 22.9238 16.2561L25.9706 5.59208C26.0363 5.36218 25.9903 5.11502 25.8465 4.92419C25.7024 4.73337 25.4773 4.62109 25.2383 4.62109H6.62021L6.0757 2.1707C5.99814 1.82217 5.68908 1.57422 5.33203 1.57422H0.761718C0.340988 1.57422 0 1.91521 0 2.33594C0 2.75667 0.340988 3.09766 0.761718 3.09766H4.72107C4.81747 3.53187 7.32678 14.824 7.47119 15.4736C6.66166 15.8255 6.09375 16.6326 6.09375 17.5703C6.09375 18.8303 7.11889 19.8555 8.3789 19.8555H22.1914C22.6121 19.8555 22.9531 19.5145 22.9531 19.0937C22.9531 18.673 22.6121 18.332 22.1914 18.332H8.3789C7.95896 18.332 7.61718 17.9902 7.61718 17.5703C7.61718 17.151 7.95777 16.8098 8.37692 16.8088ZM24.2284 6.14453L21.6167 15.2851H8.98986L6.95861 6.14453H24.2284Z"
                                                fill="#D9D9D9" />
                                            <path
                                                d="M7.61719 22.1406C7.61719 23.4006 8.64233 24.4258 9.90234 24.4258C11.1624 24.4258 12.1875 23.4006 12.1875 22.1406C12.1875 20.8806 11.1624 19.8555 9.90234 19.8555C8.64233 19.8555 7.61719 20.8806 7.61719 22.1406ZM9.90234 21.3789C10.3223 21.3789 10.6641 21.7207 10.6641 22.1406C10.6641 22.5606 10.3223 22.9023 9.90234 22.9023C9.48241 22.9023 9.14062 22.5606 9.14062 22.1406C9.14062 21.7207 9.48241 21.3789 9.90234 21.3789Z"
                                                fill="#D9D9D9" />
                                            <path
                                                d="M18.3828 22.1406C18.3828 23.4006 19.408 24.4258 20.668 24.4258C21.928 24.4258 22.9531 23.4006 22.9531 22.1406C22.9531 20.8806 21.928 19.8555 20.668 19.8555C19.408 19.8555 18.3828 20.8806 18.3828 22.1406ZM20.668 21.3789C21.0879 21.3789 21.4297 21.7207 21.4297 22.1406C21.4297 22.5606 21.0879 22.9023 20.668 22.9023C20.248 22.9023 19.9062 22.5606 19.9062 22.1406C19.9062 21.7207 20.248 21.3789 20.668 21.3789Z"
                                                fill="#D9D9D9" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_855_2">
                                                <rect width="26" height="26" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    Add To Cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="image-area">
                        <div class="image">
                            <a href="shop-details">
                                <img src="{{ asset('assets/images/feature/img-30.png') }}" alt="">
                            </a>
                        </div>
                        <span class="crown-tag"> <img src="{{ asset('assets/images/feature/crown.svg') }}"
                                alt=""></span>
                        <ul class="action-button">
                            <li class="single-action"><a href="#"><i class="fa-light fa-heart"></i></a></li>
                            <li class="single-action"><a href="#"><i class="fa-light fa-eye"></i></a></li>
                            <li class="single-action"><a href="#"><i
                                        class="fa-light fa-arrow-down-to-bracket"></i></a></li>
                        </ul>
                        <div class="content">
                            <span><a href="shop-details">EcoMind Artistry</a></span>
                            <div class="bottom-wrapper">
                                <div class="price">$10.00</div>
                                <a href="cart"class="add-to-cart">
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_855_2)">
                                            <path
                                                d="M8.37692 16.8088H8.37811C8.3791 16.8088 8.38009 16.8086 8.38108 16.8086H22.1914C22.5314 16.8086 22.8303 16.583 22.9238 16.2561L25.9706 5.59208C26.0363 5.36218 25.9903 5.11502 25.8465 4.92419C25.7024 4.73337 25.4773 4.62109 25.2383 4.62109H6.62021L6.0757 2.1707C5.99814 1.82217 5.68908 1.57422 5.33203 1.57422H0.761718C0.340988 1.57422 0 1.91521 0 2.33594C0 2.75667 0.340988 3.09766 0.761718 3.09766H4.72107C4.81747 3.53187 7.32678 14.824 7.47119 15.4736C6.66166 15.8255 6.09375 16.6326 6.09375 17.5703C6.09375 18.8303 7.11889 19.8555 8.3789 19.8555H22.1914C22.6121 19.8555 22.9531 19.5145 22.9531 19.0937C22.9531 18.673 22.6121 18.332 22.1914 18.332H8.3789C7.95896 18.332 7.61718 17.9902 7.61718 17.5703C7.61718 17.151 7.95777 16.8098 8.37692 16.8088ZM24.2284 6.14453L21.6167 15.2851H8.98986L6.95861 6.14453H24.2284Z"
                                                fill="#D9D9D9" />
                                            <path
                                                d="M7.61719 22.1406C7.61719 23.4006 8.64233 24.4258 9.90234 24.4258C11.1624 24.4258 12.1875 23.4006 12.1875 22.1406C12.1875 20.8806 11.1624 19.8555 9.90234 19.8555C8.64233 19.8555 7.61719 20.8806 7.61719 22.1406ZM9.90234 21.3789C10.3223 21.3789 10.6641 21.7207 10.6641 22.1406C10.6641 22.5606 10.3223 22.9023 9.90234 22.9023C9.48241 22.9023 9.14062 22.5606 9.14062 22.1406C9.14062 21.7207 9.48241 21.3789 9.90234 21.3789Z"
                                                fill="#D9D9D9" />
                                            <path
                                                d="M18.3828 22.1406C18.3828 23.4006 19.408 24.4258 20.668 24.4258C21.928 24.4258 22.9531 23.4006 22.9531 22.1406C22.9531 20.8806 21.928 19.8555 20.668 19.8555C19.408 19.8555 18.3828 20.8806 18.3828 22.1406ZM20.668 21.3789C21.0879 21.3789 21.4297 21.7207 21.4297 22.1406C21.4297 22.5606 21.0879 22.9023 20.668 22.9023C20.248 22.9023 19.9062 22.5606 19.9062 22.1406C19.9062 21.7207 20.248 21.3789 20.668 21.3789Z"
                                                fill="#D9D9D9" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_855_2">
                                                <rect width="26" height="26" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    Add To Cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="image-area">
                        <div class="image">
                            <a href="shop-details">
                                <img src="{{ asset('assets/images/feature/img-31.png') }}" alt="">
                            </a>
                        </div>
                        <span class="crown-tag"> <img src="{{ asset('assets/images/feature/crown.svg') }}"
                                alt=""></span>
                        <ul class="action-button">
                            <li class="single-action"><a href="#"><i class="fa-light fa-heart"></i></a></li>
                            <li class="single-action"><a href="#"><i class="fa-light fa-eye"></i></a></li>
                            <li class="single-action"><a href="#"><i
                                        class="fa-light fa-arrow-down-to-bracket"></i></a></li>
                        </ul>
                        <div class="content">
                            <span><a href="shop-details">AIWise NatureCraft</a></span>
                            <div class="bottom-wrapper">
                                <div class="price">$10.00</div>
                                <a href="cart" class="add-to-cart">
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_855_2)">
                                            <path
                                                d="M8.37692 16.8088H8.37811C8.3791 16.8088 8.38009 16.8086 8.38108 16.8086H22.1914C22.5314 16.8086 22.8303 16.583 22.9238 16.2561L25.9706 5.59208C26.0363 5.36218 25.9903 5.11502 25.8465 4.92419C25.7024 4.73337 25.4773 4.62109 25.2383 4.62109H6.62021L6.0757 2.1707C5.99814 1.82217 5.68908 1.57422 5.33203 1.57422H0.761718C0.340988 1.57422 0 1.91521 0 2.33594C0 2.75667 0.340988 3.09766 0.761718 3.09766H4.72107C4.81747 3.53187 7.32678 14.824 7.47119 15.4736C6.66166 15.8255 6.09375 16.6326 6.09375 17.5703C6.09375 18.8303 7.11889 19.8555 8.3789 19.8555H22.1914C22.6121 19.8555 22.9531 19.5145 22.9531 19.0937C22.9531 18.673 22.6121 18.332 22.1914 18.332H8.3789C7.95896 18.332 7.61718 17.9902 7.61718 17.5703C7.61718 17.151 7.95777 16.8098 8.37692 16.8088ZM24.2284 6.14453L21.6167 15.2851H8.98986L6.95861 6.14453H24.2284Z"
                                                fill="#D9D9D9" />
                                            <path
                                                d="M7.61719 22.1406C7.61719 23.4006 8.64233 24.4258 9.90234 24.4258C11.1624 24.4258 12.1875 23.4006 12.1875 22.1406C12.1875 20.8806 11.1624 19.8555 9.90234 19.8555C8.64233 19.8555 7.61719 20.8806 7.61719 22.1406ZM9.90234 21.3789C10.3223 21.3789 10.6641 21.7207 10.6641 22.1406C10.6641 22.5606 10.3223 22.9023 9.90234 22.9023C9.48241 22.9023 9.14062 22.5606 9.14062 22.1406C9.14062 21.7207 9.48241 21.3789 9.90234 21.3789Z"
                                                fill="#D9D9D9" />
                                            <path
                                                d="M18.3828 22.1406C18.3828 23.4006 19.408 24.4258 20.668 24.4258C21.928 24.4258 22.9531 23.4006 22.9531 22.1406C22.9531 20.8806 21.928 19.8555 20.668 19.8555C19.408 19.8555 18.3828 20.8806 18.3828 22.1406ZM20.668 21.3789C21.0879 21.3789 21.4297 21.7207 21.4297 22.1406C21.4297 22.5606 21.0879 22.9023 20.668 22.9023C20.248 22.9023 19.9062 22.5606 19.9062 22.1406C19.9062 21.7207 20.248 21.3789 20.668 21.3789Z"
                                                fill="#D9D9D9" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_855_2">
                                                <rect width="26" height="26" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    Add To Cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="image-area">
                        <div class="image">
                            <a href="shop-details">
                                <img src="{{ asset('assets/images/feature/img-32.png') }}" alt="">
                            </a>
                        </div>
                        <span class="crown-tag"> <img src="{{ asset('assets/images/feature/crown.svg') }}"
                                alt=""></span>
                        <ul class="action-button">
                            <li class="single-action"><a href="#"><i class="fa-light fa-heart"></i></a></li>
                            <li class="single-action"><a href="#"><i class="fa-light fa-eye"></i></a></li>
                            <li class="single-action"><a href="#"><i
                                        class="fa-light fa-arrow-down-to-bracket"></i></a></li>
                        </ul>
                        <div class="content">
                            <span><a href="shop-details">NaturaMind Studios</a></span>
                            <div class="bottom-wrapper">
                                <div class="price">$10.00</div>
                                <a href="cart" class="add-to-cart">
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_855_2)">
                                            <path
                                                d="M8.37692 16.8088H8.37811C8.3791 16.8088 8.38009 16.8086 8.38108 16.8086H22.1914C22.5314 16.8086 22.8303 16.583 22.9238 16.2561L25.9706 5.59208C26.0363 5.36218 25.9903 5.11502 25.8465 4.92419C25.7024 4.73337 25.4773 4.62109 25.2383 4.62109H6.62021L6.0757 2.1707C5.99814 1.82217 5.68908 1.57422 5.33203 1.57422H0.761718C0.340988 1.57422 0 1.91521 0 2.33594C0 2.75667 0.340988 3.09766 0.761718 3.09766H4.72107C4.81747 3.53187 7.32678 14.824 7.47119 15.4736C6.66166 15.8255 6.09375 16.6326 6.09375 17.5703C6.09375 18.8303 7.11889 19.8555 8.3789 19.8555H22.1914C22.6121 19.8555 22.9531 19.5145 22.9531 19.0937C22.9531 18.673 22.6121 18.332 22.1914 18.332H8.3789C7.95896 18.332 7.61718 17.9902 7.61718 17.5703C7.61718 17.151 7.95777 16.8098 8.37692 16.8088ZM24.2284 6.14453L21.6167 15.2851H8.98986L6.95861 6.14453H24.2284Z"
                                                fill="#D9D9D9" />
                                            <path
                                                d="M7.61719 22.1406C7.61719 23.4006 8.64233 24.4258 9.90234 24.4258C11.1624 24.4258 12.1875 23.4006 12.1875 22.1406C12.1875 20.8806 11.1624 19.8555 9.90234 19.8555C8.64233 19.8555 7.61719 20.8806 7.61719 22.1406ZM9.90234 21.3789C10.3223 21.3789 10.6641 21.7207 10.6641 22.1406C10.6641 22.5606 10.3223 22.9023 9.90234 22.9023C9.48241 22.9023 9.14062 22.5606 9.14062 22.1406C9.14062 21.7207 9.48241 21.3789 9.90234 21.3789Z"
                                                fill="#D9D9D9" />
                                            <path
                                                d="M18.3828 22.1406C18.3828 23.4006 19.408 24.4258 20.668 24.4258C21.928 24.4258 22.9531 23.4006 22.9531 22.1406C22.9531 20.8806 21.928 19.8555 20.668 19.8555C19.408 19.8555 18.3828 20.8806 18.3828 22.1406ZM20.668 21.3789C21.0879 21.3789 21.4297 21.7207 21.4297 22.1406C21.4297 22.5606 21.0879 22.9023 20.668 22.9023C20.248 22.9023 19.9062 22.5606 19.9062 22.1406C19.9062 21.7207 20.248 21.3789 20.668 21.3789Z"
                                                fill="#D9D9D9" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_855_2">
                                                <rect width="26" height="26" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    Add To Cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button-area text-center">
                <a href="#" class="rts-btn btn-primary">View More</a>
            </div>
        </div>
    </div>
    <!-- ..:: open up popular image area end ::.. -->

    <!-- ..:: rts brand area start ::.. -->
    <div class="rts-brand-area rts-section-gap home-seven">
        <div class="container">
            <div class="row mt--50">
                <div class="col-lg-12">
                    <div class="brand-area-main-wrapper-one">
                        <div class="single-brand">
                            <svg width="130" height="39" viewBox="0 0 130 39" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.4963 0C8.72961 0 0 8.73226 0 19.5022C0 30.2721 8.72961 39.0044 19.4963 39.0044C30.263 39.0044 38.9926 30.2721 38.9926 19.5022C38.9882 8.73226 30.263 0 19.4963 0ZM28.4357 28.1251C28.086 28.698 27.3385 28.8816 26.7659 28.5274C22.189 25.7289 16.4276 25.0949 9.63886 26.6472C8.98315 26.7958 8.33182 26.3892 8.18319 25.7333C8.03457 25.0774 8.4411 24.4258 9.09681 24.2772C16.5238 22.5806 22.8928 23.3152 28.0336 26.4548C28.6062 26.8046 28.7854 27.5523 28.4357 28.1251ZM30.8225 22.8167C30.381 23.5338 29.4455 23.7568 28.733 23.3152C23.4961 20.0925 15.5052 19.1611 9.30663 21.0414C8.5023 21.2862 7.65426 20.8315 7.40946 20.0269C7.16904 19.2223 7.61929 18.374 8.42362 18.1292C15.5052 15.9822 24.3048 17.0229 30.3242 20.7222C31.0367 21.1682 31.2596 22.1039 30.8225 22.8167ZM31.0279 17.2852C24.7419 13.5553 14.3774 13.2099 8.37991 15.0333C7.41821 15.3263 6.39968 14.7797 6.1068 13.8177C5.81391 12.8557 6.36034 11.8369 7.32204 11.5439C14.2069 9.45375 25.6555 9.85604 32.8901 14.1544C33.7557 14.6704 34.0398 15.7898 33.5284 16.6556C33.0125 17.517 31.8891 17.8012 31.0279 17.2852ZM53.0378 18.0024C49.6718 17.1978 49.0729 16.6337 49.0729 15.4531C49.0729 14.3337 50.1264 13.5816 51.6914 13.5816C53.2082 13.5816 54.7164 14.1544 56.2901 15.3306C56.3381 15.3656 56.3993 15.3787 56.4562 15.37C56.513 15.3613 56.5655 15.3306 56.6004 15.2782L58.2441 12.9606C58.3096 12.8644 58.2921 12.7333 58.2003 12.6589C56.3207 11.1504 54.2093 10.4201 51.7351 10.4201C48.1025 10.4201 45.5627 12.6021 45.5627 15.7242C45.5627 19.0737 47.7528 20.2587 51.5384 21.1726C54.7601 21.9159 55.3021 22.5368 55.3021 23.6475C55.3021 24.8806 54.2049 25.6458 52.4345 25.6458C50.4718 25.6458 48.8675 24.9855 47.0752 23.4289C47.0315 23.3895 46.9703 23.372 46.9135 23.3764C46.8523 23.3808 46.7998 23.407 46.7605 23.4551L44.9158 25.6502C44.8371 25.742 44.8502 25.8776 44.9376 25.9563C47.0228 27.819 49.5888 28.8029 52.3558 28.8029C56.2726 28.8029 58.8036 26.6603 58.8036 23.3502C58.8123 20.5516 57.1381 19.0037 53.0378 18.0067V18.0024ZM67.6731 14.6835C65.977 14.6835 64.5825 15.3525 63.4372 16.7212V15.1776C63.4372 15.0552 63.3367 14.9546 63.2187 14.9546H60.2068C60.0844 14.9546 59.9882 15.0552 59.9882 15.1776V32.3185C59.9882 32.441 60.0888 32.5415 60.2068 32.5415H63.2187C63.3411 32.5415 63.4372 32.441 63.4372 32.3185V26.9095C64.5869 28.1995 65.977 28.8291 67.6731 28.8291C70.8292 28.8291 74.0203 26.4023 74.0203 21.7585C74.0247 17.1103 70.8292 14.6835 67.6731 14.6835ZM70.5145 21.7541C70.5145 24.1197 69.0588 25.7682 66.9737 25.7682C64.9148 25.7682 63.3586 24.0454 63.3586 21.7541C63.3586 19.4672 64.9148 17.74 66.9737 17.74C69.0238 17.74 70.5145 19.4279 70.5145 21.7541ZM82.2035 14.6835C78.1425 14.6835 74.9602 17.8143 74.9602 21.8066C74.9602 25.7595 78.1207 28.8554 82.1554 28.8554C86.2339 28.8554 89.425 25.7376 89.425 21.7585C89.4206 17.7881 86.2514 14.6835 82.2035 14.6835ZM82.2035 25.7945C80.0441 25.7945 78.4135 24.0585 78.4135 21.7541C78.4135 19.441 79.9872 17.7662 82.1511 17.7662C84.3236 17.7662 85.9673 19.5022 85.9673 21.8066C85.9673 24.1154 84.3848 25.7945 82.2035 25.7945ZM98.0978 14.959H94.7799V11.5658C94.7799 11.4433 94.6838 11.3471 94.5614 11.3471H91.5495C91.4271 11.3471 91.3265 11.4477 91.3265 11.5658V14.959H89.8753C89.7529 14.959 89.6567 15.0595 89.6567 15.182V17.775C89.6567 17.8974 89.7529 17.998 89.8753 17.998H91.3265V24.7013C91.3265 27.4124 92.6729 28.7854 95.3351 28.7854C96.4148 28.7854 97.3153 28.5624 98.159 28.0814C98.2289 28.042 98.2683 27.9677 98.2683 27.889V25.4228C98.2683 25.3485 98.2289 25.2741 98.1634 25.2348C98.0978 25.1954 98.0147 25.1911 97.9492 25.226C97.3678 25.519 96.8082 25.6546 96.1788 25.6546C95.2127 25.6546 94.7799 25.2173 94.7799 24.2291V17.9936H98.0978C98.2202 17.9936 98.3164 17.893 98.3164 17.7706V15.1776C98.3207 15.0595 98.2246 14.959 98.0978 14.959ZM109.651 14.9721V14.5567C109.651 13.3323 110.119 12.7857 111.173 12.7857C111.802 12.7857 112.305 12.9125 112.869 13.1006C112.939 13.1224 113.013 13.1137 113.065 13.07C113.122 13.0262 113.157 12.9606 113.157 12.8907V10.3502C113.157 10.254 113.096 10.1665 113 10.1403C112.401 9.96098 111.64 9.7817 110.495 9.7817C107.71 9.7817 106.242 11.3515 106.242 14.3162V14.9546H104.795C104.672 14.9546 104.572 15.0552 104.572 15.1732V17.7794C104.572 17.9018 104.672 18.0024 104.795 18.0024H106.242V28.3438C106.242 28.4662 106.338 28.5668 106.46 28.5668H109.472C109.594 28.5668 109.695 28.4662 109.695 28.3438V17.9892H112.51L116.82 28.3263C116.331 29.4107 115.85 29.6293 115.194 29.6293C114.665 29.6293 114.106 29.4719 113.533 29.1571C113.481 29.1265 113.415 29.1221 113.358 29.1396C113.301 29.1615 113.253 29.2008 113.227 29.2577L112.204 31.5008C112.156 31.6058 112.195 31.7326 112.3 31.7851C113.367 32.3623 114.329 32.6115 115.518 32.6115C117.743 32.6115 118.975 31.5752 120.06 28.7854L125.288 15.2694C125.314 15.1995 125.305 15.1251 125.266 15.0639C125.226 15.0027 125.157 14.9677 125.087 14.9677H121.948C121.852 14.9677 121.769 15.0289 121.738 15.1164L118.525 24.299L115.006 15.1076C114.976 15.0202 114.893 14.9677 114.801 14.9677L109.651 14.9721ZM102.954 14.959H99.9425C99.8201 14.959 99.7196 15.0595 99.7196 15.182V28.335C99.7196 28.4575 99.8201 28.558 99.9425 28.558H102.954C103.077 28.558 103.177 28.4575 103.177 28.335V15.1776C103.177 15.1208 103.155 15.0639 103.112 15.0202C103.068 14.9808 103.011 14.959 102.954 14.959ZM101.464 8.96838C100.27 8.96838 99.2999 9.93475 99.2999 11.1285C99.2999 12.3222 100.27 13.293 101.464 13.293C102.657 13.293 103.623 12.3266 103.623 11.1285C103.623 9.93475 102.657 8.96838 101.464 8.96838ZM127.867 19.1874C126.673 19.1874 125.747 18.2297 125.747 17.0666C125.747 15.9035 126.687 14.9327 127.88 14.9327C129.073 14.9327 130 15.8903 130 17.0535C130 18.2166 129.056 19.1874 127.867 19.1874ZM127.88 15.1426C126.791 15.1426 125.97 16.0084 125.97 17.0666C125.97 18.1248 126.787 18.9775 127.867 18.9775C128.951 18.9775 129.777 18.116 129.777 17.0535C129.777 15.9953 128.96 15.1426 127.88 15.1426ZM128.348 17.2721L128.947 18.1117H128.439L127.897 17.3421H127.434V18.1117H127.01V15.886H128.002C128.518 15.886 128.859 16.1527 128.859 16.5944C128.868 16.9617 128.654 17.1847 128.348 17.2721ZM127.989 16.2664H127.438V16.9704H127.989C128.265 16.9704 128.431 16.8348 128.431 16.6162C128.431 16.3888 128.265 16.2664 127.989 16.2664Z"
                                    fill="#1E2C4D"></path>
                            </svg>
                        </div>
                        <div class="single-brand">
                            <svg width="93" height="39" viewBox="0 0 93 39" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M92.9998 20.151C92.9998 13.4861 89.7965 8.22705 83.674 8.22705C77.5257 8.22705 73.8057 13.4861 73.8057 20.0989C73.8057 27.9353 78.1973 31.8926 84.5007 31.8926C87.5748 31.8926 89.8998 31.1897 91.6565 30.2003V24.9934C89.8998 25.8786 87.8848 26.4253 85.3273 26.4253C82.8215 26.4253 80.5998 25.5401 80.3157 22.468H92.9482C92.9482 22.1296 92.9998 20.7758 92.9998 20.151ZM80.2382 17.6777C80.2382 14.7357 82.0207 13.5121 83.6482 13.5121C85.224 13.5121 86.9032 14.7357 86.9032 17.6777H80.2382Z"
                                    fill="#1E2C4D"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M63.8345 8.22705C61.3028 8.22705 59.6753 9.42465 58.7711 10.2578L58.4353 8.64361H52.752V39.0001L59.2103 37.6202L59.2361 30.2524C60.1661 30.9293 61.5353 31.8926 63.8086 31.8926C68.4328 31.8926 72.6436 28.1436 72.6436 19.8906C72.6178 12.3405 68.3553 8.22705 63.8345 8.22705ZM62.2845 26.165C60.7603 26.165 59.8561 25.6182 59.2361 24.9413L59.2103 15.2825C59.882 14.5275 60.812 14.0068 62.2845 14.0068C64.6353 14.0068 66.2628 16.6623 66.2628 20.0728C66.2628 23.5615 64.6611 26.165 62.2845 26.165Z"
                                    fill="#1E2C4D"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M43.8652 6.69092L50.3494 5.28505V0L43.8652 1.37984V6.69092Z" fill="#1E2C4D"></path>
                                <path d="M50.3494 8.66943H43.8652V31.4498H50.3494V8.66943Z" fill="#1E2C4D"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M36.9162 10.5961L36.5029 8.6695H30.9229V31.4499H37.3812V16.0113C38.9054 14.0066 41.4887 14.3711 42.2895 14.6575V8.6695C41.4629 8.35708 38.4404 7.78432 36.9162 10.5961Z"
                                    fill="#1E2C4D"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M23.9991 3.02002L17.6958 4.37382L17.6699 25.2276C17.6699 29.0808 20.5374 31.9186 24.3608 31.9186C26.4791 31.9186 28.0291 31.528 28.8816 31.0594V25.7744C28.0549 26.1128 23.9733 27.3104 23.9733 23.4573V14.2149H28.8816V8.66955H23.9733L23.9991 3.02002Z"
                                    fill="#1E2C4D"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6.53583 15.2825C6.53583 14.2671 7.3625 13.8766 8.73167 13.8766C10.695 13.8766 13.175 14.4754 15.1383 15.5428V9.42465C12.9942 8.5655 10.8758 8.22705 8.73167 8.22705C3.4875 8.22705 0 10.9867 0 15.5949C0 22.7805 9.81667 21.6089 9.81667 24.707C9.81667 25.9046 8.78333 26.2951 7.33667 26.2951C5.1925 26.2951 2.45417 25.41 0.284167 24.2124V30.4086C2.68667 31.45 5.115 31.8926 7.33667 31.8926C12.71 31.8926 16.4042 29.211 16.4042 24.5508C16.3783 16.8185 6.53583 18.1983 6.53583 15.2825Z"
                                    fill="#1E2C4D"></path>
                            </svg>
                        </div>
                        <div class="single-brand">

                            <svg width="162" height="38" viewBox="0 0 162 38" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M142.302 12.7946C143.201 12.7946 143.944 12.334 144.048 11.7369L144.938 1.79125C144.938 0.810325 143.771 0 142.302 0C140.832 0 139.674 0.810325 139.674 1.79125L140.564 11.7369C140.66 12.3255 141.403 12.7946 142.302 12.7946ZM136.857 15.8994C137.306 15.1318 137.271 14.2617 136.796 13.8779L128.516 8.1459C127.651 7.65118 126.364 8.24826 125.629 9.50213C124.894 10.756 125.024 12.1549 125.88 12.6411L135.05 16.8548C135.629 17.068 136.407 16.6586 136.857 15.8994ZM147.747 15.8909C148.196 16.6586 148.974 17.068 149.553 16.8548L158.724 12.6411C159.588 12.1464 159.709 10.7475 158.983 9.50213C158.249 8.24826 156.952 7.65971 156.096 8.1459L147.816 13.8779C147.341 14.2617 147.306 15.1318 147.747 15.8909ZM142.302 25.2139C143.201 25.2139 143.944 25.6745 144.048 26.2716L144.938 36.2088C144.938 37.1982 143.771 38 142.302 38C140.832 38 139.674 37.1982 139.674 36.2088L140.564 26.2716C140.66 25.6745 141.403 25.2139 142.302 25.2139ZM147.747 22.1091C148.196 21.3414 148.974 20.9405 149.553 21.1452L158.724 25.3589C159.588 25.8536 159.709 27.2525 158.983 28.5064C158.249 29.7517 156.952 30.3488 156.096 29.8626L147.816 24.1392C147.341 23.7383 147.306 22.8768 147.747 22.1091ZM136.857 22.1006C137.306 22.8682 137.271 23.7383 136.796 24.1221L128.516 29.8456C127.651 30.3403 126.364 29.7432 125.629 28.4893C124.894 27.2355 125.024 25.8366 125.88 25.3419L135.05 21.1282C135.629 20.932 136.407 21.3329 136.857 22.1006Z"
                                    fill="#1E2C4C"></path>
                                <path
                                    d="M90.0711 24.1051C90.0711 24.4121 90.0451 24.7277 89.9587 25.0007C89.6043 26.1522 88.4029 27.1161 86.899 27.1161C85.6457 27.1161 84.6431 26.4081 84.6431 24.9239C84.6431 22.6465 87.1842 22.0153 90.0711 22.0323V24.1051ZM94.6001 20.1387C94.6001 16.3857 92.9752 13.0846 87.4867 13.0846C84.669 13.0846 82.4304 13.8694 81.2118 14.5603L82.102 17.5798C83.217 16.8804 84.9975 16.3089 86.6829 16.3089C89.466 16.3004 89.9241 17.8698 89.9241 18.8678V19.1066C83.8566 19.0981 80.0103 21.1708 80.0103 25.4016C80.0103 27.9861 81.9637 30.4 85.3605 30.4C87.4522 30.4 89.1981 29.5812 90.2439 28.2591H90.3476C90.3476 28.2591 91.0391 31.125 94.8594 30.0247C94.6606 28.8305 94.5915 27.5596 94.5915 26.0328L94.6001 20.1387ZM0 7.97533C0 7.97533 3.96724 24.0198 4.5982 26.6213C5.34151 29.6579 6.67257 30.7839 10.5102 30.0247L12.9908 20.079C13.6217 17.6054 14.0366 15.8483 14.4428 13.332H14.512C14.7972 15.8739 15.2034 17.6139 15.7134 20.0876C15.7134 20.0876 16.7246 24.5998 17.2346 26.9711C17.7532 29.3423 19.1966 30.835 22.9564 30.0247L28.8597 7.97533H24.0973L22.0834 17.5116C21.5389 20.2837 21.0463 22.4588 20.6746 24.9922H20.6055C20.2597 22.4759 19.8189 20.3946 19.2744 17.6907L17.1741 7.97533H12.2129L9.96564 17.4433C9.32604 20.3264 8.7383 22.6465 8.358 25.0945H8.28885C7.89991 22.783 7.38132 19.8658 6.82815 17.0766C6.82815 17.0766 5.49709 10.3039 5.03036 7.9668L0 7.97533ZM37.8746 24.1051C37.8746 24.4121 37.8487 24.7277 37.7623 25.0007C37.4079 26.1522 36.2065 27.1161 34.7026 27.1161C33.4493 27.1161 32.4467 26.4081 32.4467 24.9239C32.4467 22.6465 34.9878 22.0153 37.8746 22.0323V24.1051ZM42.4123 20.1387C42.4123 16.3857 40.7874 13.0846 35.2989 13.0846C32.4812 13.0846 30.2426 13.8694 29.024 14.5603L29.9142 17.5798C31.0292 16.8804 32.8097 16.3089 34.4951 16.3089C37.2869 16.3004 37.7363 17.8698 37.7363 18.8678V19.1066C31.6601 19.0981 27.8225 21.1708 27.8225 25.4016C27.8225 27.9861 29.7759 30.4 33.1727 30.4C35.2644 30.4 37.0103 29.5812 38.0561 28.2591H38.1598C38.1598 28.2591 38.8513 31.125 42.6803 30.0247C42.4815 28.8305 42.4123 27.5596 42.4123 26.0328V20.1387ZM49.9751 25.3419V7.97533H45.4374V30.0247H49.9751V25.3419ZM109.345 7.97533V24.2415C109.345 26.4849 109.778 28.0543 110.685 29.0182C111.489 29.8626 112.803 30.4 114.376 30.4C115.716 30.4 117.038 30.1441 117.66 29.9224L117.6 26.4252C117.133 26.536 116.606 26.6299 115.88 26.6299C114.333 26.6299 113.814 25.649 113.814 23.6359V17.4092H117.764V13.187H113.814V7.97533H109.345ZM97.6252 13.46V30.0247H102.31V21.5461C102.31 21.0855 102.336 20.6846 102.414 20.3264C102.759 18.5522 104.134 17.4178 106.113 17.4178C106.657 17.4178 107.046 17.4775 107.461 17.5372V13.2041C107.107 13.1358 106.865 13.1017 106.433 13.1017C104.687 13.1017 102.699 14.2106 101.86 16.5989H101.731V13.477H97.6252M53.1472 13.46V30.0247H57.7108V20.3093C57.7108 19.8573 57.7627 19.3711 57.9269 18.9531C58.3072 17.9722 59.2234 16.8292 60.7014 16.8292C62.5424 16.8292 63.4067 18.3646 63.4067 20.5823V30.0247H67.9617V20.1899C67.9617 19.7549 68.0222 19.2346 68.1518 18.8507C68.5235 17.7419 69.5175 16.8292 70.8917 16.8292C72.7587 16.8292 73.6489 18.339 73.6489 20.9491V30.0247H78.2126V20.2667C78.2126 15.1233 75.5677 13.0846 72.5772 13.0846C71.2548 13.0846 70.2089 13.4088 69.2668 13.9803C68.4716 14.4665 67.7629 15.1488 67.1406 16.0445H67.0714C66.354 14.2617 64.6513 13.0846 62.4473 13.0846C59.6123 13.0846 58.3331 14.5006 57.5552 15.7118H57.4775V13.46H53.1472Z"
                                    fill="#1E2C4C"></path>
                                <path
                                    d="M161.023 29.2227H161.092C161.187 29.2227 161.239 29.1886 161.239 29.1289C161.239 29.0692 161.187 29.035 161.101 29.035C161.075 29.035 161.04 29.0436 161.023 29.0436V29.2227ZM161.014 29.6662H160.772V28.89C160.824 28.8815 160.954 28.8644 161.118 28.8644C161.299 28.8644 161.377 28.89 161.438 28.9242C161.49 28.9583 161.524 29.018 161.524 29.0947C161.524 29.1715 161.446 29.2398 161.343 29.2739V29.2824C161.429 29.308 161.481 29.3677 161.507 29.4871C161.533 29.598 161.55 29.6492 161.559 29.6748H161.282C161.256 29.6492 161.248 29.5809 161.23 29.5042C161.213 29.4274 161.178 29.3848 161.092 29.3848H161.014V29.6662ZM161.109 28.6341C160.764 28.6341 160.496 28.9156 160.496 29.2739C160.496 29.6236 160.755 29.9051 161.118 29.9051C161.472 29.9136 161.74 29.6236 161.74 29.2653C161.74 28.9156 161.481 28.6341 161.109 28.6341ZM161.127 28.4209C161.611 28.4209 162 28.7962 162 29.2653C162 29.7345 161.611 30.1098 161.118 30.1098C160.625 30.1098 160.236 29.7345 160.236 29.2653C160.236 28.7962 160.625 28.4209 161.127 28.4209Z"
                                    fill="#1E2C4C"></path>
                            </svg>

                        </div>
                        <div class="single-brand">
                            <svg width="119" height="37" viewBox="0 0 119 37" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_343_719)">
                                    <mask id="mask0_343_719" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0"
                                        y="0" width="119" height="37">
                                        <path d="M119 0H0V37H119V0Z" fill="white"></path>
                                    </mask>
                                    <g mask="url(#mask0_343_719)">
                                        <path
                                            d="M62.7016 9.29744C62.7016 10.632 61.6226 11.7072 60.2834 11.7072C58.9442 11.7072 57.8652 10.632 57.8652 9.29744C57.8652 7.96291 58.9061 6.88769 60.2834 6.88769C61.6607 6.92564 62.7016 8.00085 62.7016 9.29744ZM52.7432 14.1485V14.7431C52.7432 14.7431 51.5943 13.2631 49.1381 13.2631C45.0887 13.2631 41.9279 16.3369 41.9279 20.5935C41.9279 24.8185 45.0506 27.9239 49.1381 27.9239C51.6261 27.9239 52.7432 26.406 52.7432 26.406V27.0385C52.7432 27.3357 52.9653 27.5571 53.2636 27.5571H56.2721V13.6299H53.2636C52.9653 13.6299 52.7432 13.8892 52.7432 14.1485ZM52.7432 23.0728C52.1846 23.8887 51.0739 24.5908 49.7347 24.5908C47.3545 24.5908 45.533 23.1108 45.533 20.5872C45.533 18.0699 47.3545 16.5899 49.7347 16.5899C51.0358 16.5899 52.2227 17.3299 52.7432 18.1079V23.0728ZM58.4999 13.6299H62.0669V27.5571H58.4999V13.6299ZM111.796 13.2568C109.346 13.2568 108.191 14.7368 108.191 14.7368V6.92564H104.624V27.5571H107.632C107.93 27.5571 108.153 27.2978 108.153 27.0385V26.4123C108.153 26.4123 109.308 27.9303 111.758 27.9303C115.807 27.9303 118.968 24.8185 118.968 20.5998C118.968 16.3685 115.813 13.2568 111.796 13.2568ZM111.205 24.5528C109.828 24.5528 108.755 23.8508 108.197 23.0349V18.0699C108.755 17.3299 109.942 16.552 111.205 16.552C113.586 16.552 115.407 18.032 115.407 20.5492C115.401 23.0728 113.586 24.5528 111.205 24.5528ZM102.764 19.2969V27.595H99.1969V19.7017C99.1969 17.4058 98.4543 16.4824 96.4486 16.4824C95.3696 16.4824 94.2589 17.039 93.548 17.8549V27.5571H89.981V13.6299H92.8054C93.1038 13.6299 93.3259 13.8892 93.3259 14.1485V14.7431C94.3668 13.6679 95.7441 13.2631 97.1151 13.2631C98.6764 13.2631 99.9776 13.7058 101.018 14.5976C102.282 15.6285 102.764 16.9631 102.764 19.2969ZM81.3237 13.2568C78.8738 13.2568 77.7186 14.7368 77.7186 14.7368V6.92564H74.1516V27.5571H77.1601C77.4584 27.5571 77.6805 27.2978 77.6805 27.0385V26.4123C77.6805 26.4123 78.8357 27.9303 81.2856 27.9303C85.335 27.9303 88.4958 24.8185 88.4958 20.5998C88.5339 16.3685 85.3731 13.2568 81.3237 13.2568ZM80.7271 24.5528C79.3498 24.5528 78.2772 23.8508 77.7186 23.0349V18.0699C78.2772 17.3299 79.4641 16.552 80.7271 16.552C83.1072 16.552 84.9288 18.032 84.9288 20.5492C84.9288 23.0728 83.1072 24.5528 80.7271 24.5528ZM71.0606 13.2568C72.1396 13.2568 72.6981 13.4402 72.6981 13.4402V16.7354C72.6981 16.7354 69.7277 15.7361 67.8681 17.8485V27.5887H64.301V13.6299H67.3095C67.6078 13.6299 67.83 13.8892 67.83 14.1485V14.7431C68.4964 13.9651 69.9499 13.2568 71.0606 13.2568ZM34.0068 26.2985C33.8227 25.8557 33.6323 25.375 33.4483 24.9639C33.1499 24.2998 32.8516 23.6673 32.5914 23.0728L32.5533 23.0349C29.9891 17.4817 27.2409 11.8526 24.3403 6.29316L24.2261 6.07179C23.9214 5.49624 23.6231 4.91436 23.3375 4.33248C22.963 3.66838 22.5949 2.96 21.9983 2.2959C20.8177 0.815897 19.104 0 17.2824 0C15.4228 0 13.7535 0.815897 12.5285 2.22C11.97 2.8841 11.5638 3.59248 11.1893 4.25658C10.8973 4.83846 10.6054 5.42034 10.3007 5.9959L10.1865 6.21726C7.32399 11.7704 4.53765 17.3995 1.97346 22.959L1.93538 23.0349C1.67515 23.6294 1.37684 24.2556 1.07853 24.926C0.894469 25.3308 0.710406 25.7798 0.519996 26.2605C0.0376235 27.633 -0.114705 28.9296 0.0757055 30.2641C0.481914 33.0407 2.34159 35.3745 4.90578 36.4118C5.87052 36.8166 6.87335 37.0063 7.91426 37.0063C8.21257 37.0063 8.58069 36.9684 8.879 36.9304C10.104 36.785 11.367 36.3738 12.5983 35.6718C14.1216 34.8179 15.5687 33.5973 17.2063 31.82C18.8438 33.5973 20.329 34.8179 21.8142 35.6718C23.0392 36.3738 24.3022 36.785 25.5335 36.9304C25.8319 36.9684 26.2063 37.0063 26.4983 37.0063C27.5392 37.0063 28.5801 36.8229 29.5068 36.4118C32.109 35.3745 33.9306 33.0027 34.3368 30.2641C34.6415 28.9612 34.4892 27.6646 34.0068 26.2985ZM17.2444 28.2212C15.2387 25.7039 13.9376 23.3321 13.4933 21.3335C13.3092 20.4797 13.2711 19.7397 13.379 19.0756C13.4552 18.481 13.6773 17.9624 13.9756 17.5197C14.6802 16.5203 15.8734 15.8879 17.2444 15.8879C18.6217 15.8879 19.8466 16.4824 20.5131 17.5197C20.8114 17.9624 21.0335 18.481 21.1097 19.0756C21.2239 19.7397 21.1858 20.5176 20.9954 21.3335C20.5575 23.2942 19.2564 25.666 17.2444 28.2212ZM32.0773 29.9605C31.8171 31.8832 30.5159 33.553 28.6944 34.293C27.7994 34.6598 26.8347 34.7737 25.8699 34.6598C24.9433 34.546 24.0103 34.255 23.0455 33.6985C21.7063 32.9585 20.3671 31.8073 18.8057 30.106C21.2557 27.108 22.7472 24.3631 23.3057 21.9217C23.566 20.7706 23.6041 19.7333 23.4898 18.772C23.3438 17.8485 23.0074 16.9947 22.487 16.2547C21.3318 14.585 19.4023 13.6236 17.2444 13.6236C15.0864 13.6236 13.1569 14.6229 12.0017 16.2547C11.4813 16.9947 11.1449 17.8485 10.9989 18.772C10.8529 19.7333 10.8847 20.8085 11.183 21.9217C11.7415 24.3631 13.2648 27.146 15.6766 30.1439C14.1534 31.8453 12.7761 32.9964 11.4368 33.7364C10.4721 34.293 9.53909 34.5903 8.61243 34.6978C7.6096 34.8116 6.64486 34.6598 5.78801 34.3309C3.96642 33.5909 2.66528 31.9212 2.40506 29.9985C2.29081 29.075 2.36697 28.1453 2.74145 27.108C2.84935 26.7349 3.03976 26.368 3.22382 25.9253C3.48405 25.3308 3.78236 24.7046 4.08067 24.0721L4.11875 23.9962C6.68294 18.4747 9.43119 12.8456 12.2937 7.36838L12.4079 7.14701C12.7062 6.59043 13.0046 6.00222 13.3029 5.44564C13.6012 4.85111 13.9376 4.29453 14.3438 3.81385C15.1245 2.92838 16.1654 2.44137 17.3142 2.44137C18.4693 2.44137 19.5039 2.92205 20.2846 3.81385C20.6908 4.29453 21.0272 4.85111 21.3255 5.44564C21.6238 6.00222 21.9221 6.59675 22.2204 7.14701L22.3347 7.36838C25.1527 12.8709 27.8692 18.4304 30.4715 24.0342V24.0721C30.7698 24.6667 31.0301 25.3308 31.3284 25.9253C31.5124 26.368 31.7028 26.7412 31.8107 27.108C32.1154 28.0757 32.2233 28.9991 32.0773 29.9605Z"
                                            fill="#1E2C4D"></path>
                                    </g>
                                </g>
                                <defs>
                                    <clipPath id="clip0_343_719">
                                        <rect width="119" height="37" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="single-brand">

                            <svg width="109" height="33" viewBox="0 0 109 33" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_343_705)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M67.621 25.8069C61.2868 30.4973 52.1058 32.9998 44.2012 32.9998C33.1176 32.9998 23.1395 28.8814 15.5906 22.0316C14.9975 21.493 15.5289 20.7589 16.2407 21.1784C24.3873 25.9403 34.4603 28.8051 44.8654 28.8051C51.8828 28.8051 59.6025 27.3465 66.7006 24.3196C67.7729 23.862 68.6696 25.0251 67.621 25.8069Z"
                                        fill="#1E2C4D"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M70.2545 22.78C69.4479 21.7409 64.9025 22.2891 62.8623 22.5322C62.2407 22.6084 62.1458 22.065 62.7057 21.6741C66.3259 19.1144 72.2663 19.8533 72.959 20.7113C73.6517 21.5741 72.7787 27.5563 69.3767 30.4115C68.8548 30.8501 68.3566 30.6165 68.5891 30.035C69.353 28.1188 71.0659 23.8239 70.2545 22.78Z"
                                        fill="#1E2C4D"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M63.0051 3.60376V1.11554C63.0051 0.738966 63.2898 0.486328 63.6314 0.486328H74.7197C75.0756 0.486328 75.3603 0.743733 75.3603 1.11554V3.24626C75.3555 3.60376 75.0566 4.0709 74.5252 4.80974L68.7794 13.0514C70.9145 12.999 73.1682 13.3183 75.1041 14.4147C75.5406 14.6626 75.6592 15.0248 75.6924 15.3823V18.0374C75.6924 18.3997 75.2938 18.8239 74.8763 18.6046C71.4649 16.8076 66.9337 16.6121 63.1616 18.6237C62.7773 18.8334 62.374 18.414 62.374 18.0517V15.5301C62.374 15.1249 62.3788 14.4338 62.7821 13.8189L69.4389 4.22821H63.6456C63.2898 4.22821 63.0051 3.97557 63.0051 3.60376Z"
                                        fill="#1E2C4D"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.5561 19.129H19.1827C18.86 19.1052 18.6038 18.8621 18.5801 18.5522V1.15847C18.5801 0.810503 18.8695 0.534037 19.2301 0.534037H22.3758C22.7032 0.548328 22.9642 0.800968 22.9879 1.11557V3.3893H23.0496C23.8704 1.19184 25.4124 0.166992 27.4906 0.166992C29.602 0.166992 30.921 1.19184 31.87 3.3893C32.6861 1.19184 34.5413 0.166992 36.5293 0.166992C37.9432 0.166992 39.49 0.753297 40.4342 2.06891C41.5017 3.53229 41.2835 5.65826 41.2835 7.52205L41.2787 18.4998C41.2787 18.8478 40.9893 19.129 40.6287 19.129H37.26C36.9231 19.1052 36.6526 18.8335 36.6526 18.4998V9.28097C36.6526 8.54689 36.7191 6.71647 36.5578 6.02052C36.3063 4.85268 35.5519 4.52378 34.5745 4.52378C33.7584 4.52378 32.9043 5.07195 32.558 5.94903C32.2116 6.82611 32.2448 8.29425 32.2448 9.28097V18.4998C32.2448 18.8478 31.9554 19.129 31.5948 19.129H28.2261C27.8844 19.1052 27.6187 18.8335 27.6187 18.4998L27.614 9.28097C27.614 7.34091 27.9319 4.48565 25.5358 4.48565C23.1113 4.48565 23.2062 7.26941 23.2062 9.28097V18.4998C23.2062 18.8478 22.9167 19.129 22.5561 19.129Z"
                                        fill="#1E2C4D"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M84.906 0.166992C89.9116 0.166992 92.6209 4.48564 92.6209 9.9769C92.6209 15.2823 89.6269 19.4913 84.906 19.4913C79.9905 19.4913 77.3145 15.1726 77.3145 9.791C77.3145 4.37601 80.0237 0.166992 84.906 0.166992ZM84.9344 3.7182C82.4482 3.7182 82.2916 7.12163 82.2916 9.24282C82.2916 11.3688 82.2584 15.9067 84.906 15.9067C87.5203 15.9067 87.6437 12.2459 87.6437 10.015C87.6437 8.54689 87.582 6.79274 87.1407 5.40086C86.7611 4.19011 86.0067 3.7182 84.9344 3.7182Z"
                                        fill="#1E2C4D"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M99.1119 19.129H95.7527C95.4158 19.1052 95.1454 18.8335 95.1454 18.4998L95.1406 1.10127C95.1691 0.781896 95.449 0.534037 95.7906 0.534037H98.9174C99.2116 0.548328 99.4536 0.748531 99.52 1.02023V3.68007H99.5817C100.526 1.30148 101.85 0.166992 104.179 0.166992C105.693 0.166992 107.168 0.715168 108.117 2.21668C109 3.60857 109 5.94903 109 7.63168V18.5808C108.962 18.8859 108.682 19.129 108.35 19.129H104.967C104.658 19.1052 104.402 18.8764 104.369 18.5808V9.1332C104.369 7.23127 104.587 4.44751 102.258 4.44751C101.437 4.44751 100.682 5.00045 100.308 5.83939C99.8331 6.90237 99.7715 7.96058 99.7715 9.1332V18.4998C99.7667 18.8478 99.4725 19.129 99.1119 19.129Z"
                                        fill="#1E2C4D"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M54.1657 10.8205C54.1657 12.1408 54.1989 13.242 53.5347 14.4146C52.9985 15.3679 52.1445 15.9542 51.2003 15.9542C49.905 15.9542 49.1458 14.9627 49.1458 13.4994C49.1458 10.6107 51.7222 10.0864 54.1657 10.0864V10.8205ZM57.5677 19.0812C57.3447 19.2814 57.022 19.2957 56.7706 19.1622C55.6508 18.2279 55.4468 17.7942 54.8347 16.9028C52.9843 18.7999 51.67 19.3672 49.2739 19.3672C46.4319 19.3672 44.2256 17.6083 44.2256 14.0857C44.2256 11.3353 45.7059 9.46194 47.8221 8.54673C49.6535 7.73639 52.2109 7.59339 54.1657 7.36935V6.93082C54.1657 6.12524 54.2274 5.1719 53.7529 4.47596C53.3449 3.85152 52.5573 3.59411 51.8598 3.59411C50.574 3.59411 49.4305 4.25668 49.1506 5.6295C49.0936 5.93457 48.8706 6.23487 48.5622 6.24917L45.2931 5.89643C45.018 5.83447 44.7095 5.61044 44.7902 5.1862C45.5399 1.20122 49.1269 0 52.3343 0C53.9759 0 56.1206 0.438539 57.4159 1.68742C59.0575 3.22707 58.9009 5.28153 58.9009 7.51712V12.7986C58.9009 14.386 59.5557 15.0819 60.1725 15.9399C60.386 16.245 60.4335 16.612 60.1583 16.8408C59.4703 17.4176 58.2462 18.4901 57.5724 19.0907L57.5677 19.0812Z"
                                        fill="#1E2C4D"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9.94015 10.8205C9.94015 12.1408 9.97336 13.242 9.3091 14.4146C8.77295 15.3679 7.92365 15.9542 6.97471 15.9542C5.6794 15.9542 4.925 14.9627 4.925 13.4994C4.925 10.6107 7.50137 10.0864 9.94015 10.0864V10.8205ZM13.3421 19.0812C13.1191 19.2814 12.7965 19.2957 12.545 19.1622C11.4252 18.2279 11.226 17.7942 10.6091 16.9028C8.75871 18.7999 7.44918 19.3672 5.04836 19.3672C2.21103 19.3672 0 17.6083 0 14.0857C0 11.3353 1.48509 9.46194 3.59648 8.54673C5.42794 7.73639 7.98533 7.59339 9.94015 7.36935V6.93082C9.94015 6.12524 10.0018 5.1719 9.5321 4.47596C9.11931 3.85152 8.33169 3.59411 7.63897 3.59411C6.35315 3.59411 5.20494 4.25668 4.925 5.6295C4.86806 5.93457 4.64506 6.23487 4.3414 6.24917L1.06756 5.89643C0.792364 5.83447 0.488703 5.61044 0.564618 5.1862C1.31903 1.20122 4.90127 0 8.10869 0C9.75036 0 11.895 0.438539 13.1903 1.68742C14.8319 3.22707 14.6754 5.28153 14.6754 7.51712V12.7986C14.6754 14.386 15.3301 15.0819 15.9469 15.9399C16.1652 16.245 16.2126 16.612 15.9374 16.8408C15.2495 17.4176 14.0253 18.4901 13.3516 19.0907L13.3421 19.0812Z"
                                        fill="#1E2C4D"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_343_705">
                                        <rect width="109" height="33" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>

                        </div>
                        <div class="single-brand">

                            <svg width="121" height="29" viewBox="0 0 121 29" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_343_726)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M28.4169 27.1982H21.7072L19.6547 22.22H8.47198L6.60347 27.1982H0L10.0857 2.03684H17.312L28.4169 27.1982ZM13.7873 8.04764L10.1211 17.8259H17.8216L13.7873 8.04764ZM52.7924 2.03684H58.221V27.1982H51.9856V11.4804L45.2405 19.3784H44.285L37.54 11.4804V27.1982H31.3046V2.03684H36.7332L44.7663 11.3735L52.7924 2.03684ZM74.0184 2.03684C83.1486 2.03684 87.8411 7.75565 87.8411 14.6567C87.8411 21.8853 83.2901 27.1982 73.3177 27.1982H62.9772V2.03684H74.0184ZM69.2126 22.5833H73.2823C79.5531 22.5833 81.4216 18.303 81.4216 14.6139C81.4216 10.2981 79.1143 6.64465 73.2044 6.64465H69.2055L69.2126 22.5833ZM113.031 7.91233H100.22L92.4345 0.035609L121 0V28.7863L113.031 20.7316V7.91233ZM100.213 20.9808L100.248 9.35093L92.1372 17.5125V29H103.872L111.841 20.9808H100.213Z"
                                        fill="#1E2C4D"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_343_726">
                                        <rect width="121" height="29" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: rts brand area end ::.. -->

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
