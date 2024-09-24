<header class="header-one header--sticky">
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
