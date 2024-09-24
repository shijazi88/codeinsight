@extends('layout.layout1')

@php
    $headtitle = 'Case Details 2';
    $bodyClass = 'inner-page case-details-2';
    $title = 'Use Case Details 2';
    $subtitle = 'Use Case Details 2';
@endphp

@section('content')
    <div class="caase-details-area-start rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-conter-area top-tt">
                        <span class="pre-title-bg">CodeInsights Use cases</span>
                        <h2 class="title">
                            Generate Blog, Article or <br>
                            Essay Ideas in One Click
                        </h2>
                        <p class="disc">
                            The easiest way to come up with catchy blog, essay, and article topics and content structures
                            using AI writing assistant.
                        </p>
                        <a href="#" class="rts-btn btn-primary">Start Writing</a>
                    </div>
                </div>
            </div>
            <div class="row case-lg-img-w">
                <div class="share-mid">
                    <img src="{{ asset('assets/images/case/06.png') }}" alt="">
                </div>
                <div class="col-lg-6 mt--150 mt_sm--50">
                    <div class="use-case-left-thumb">
                        <h3 class="title">Select Your Option</h3>
                        <img src="{{ asset('assets/images/case/05.jpg') }}" alt="case-images">
                    </div>
                </div>
                <div class="col-lg-6 mt--20">
                    <div class="use-case-right-thumb">
                        <div class="inner">

                            <h3 class="title">Write Your content</h3>
                            <img src="{{ asset('assets/images/case/04.jpg') }}" alt="case-images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ..:: rts feature area start ::.. -->
    <div class="rts-feature-area">
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
                    <!-- ..:: single CodeInsights feature area start ::.. -->
                    <div class="single-feature-area-start">
                        <div class="image-area">
                            <img src="{{ asset('assets/images/feature/01.png') }}" alt="feature_image">
                        </div>
                        <div class="featue-content-area">
                            <span class="pre">01</span>
                            <h2 class="title">Generate copy in <br>
                                seconds</h2>
                            <p class="disc">
                                Generate many types of content in under 30 seconds by simply inserting a few input fields.
                                Generate blog topic ideas, intros, ad copy, copywriting.
                            </p>
                            <a href="#" class="rts-btn btn-primary">Get Started Free</a>
                        </div>
                    </div>
                    <!-- ..:: single CodeInsights feature area end ::.. -->

                    <!-- ..:: single CodeInsights feature area start ::.. -->
                    <div class="single-feature-area-start bg-red-l">

                        <div class="featue-content-area">
                            <span class="pre">02</span>
                            <h2 class="title">45+ highly-tuned AI <br>
                                tools fingertips</h2>
                            <p class="disc">
                                We have a wide variety of tools available for you to use.
                                From blog shots (full blog posts) and tweets to sales email generators and marketing copy.
                            </p>
                            <a href="#" class="rts-btn btn-primary">Get Started Free</a>
                        </div>
                        <div class="image-area">
                            <img src="{{ asset('assets/images/feature/02.png') }}" alt="feature_image">
                        </div>
                    </div>
                    <!-- ..:: single CodeInsights feature area end ::.. -->

                    <!-- ..:: single CodeInsights feature area start ::.. -->
                    <div class="single-feature-area-start bg-blue-l">
                        <div class="image-area">
                            <img src="{{ asset('assets/images/feature/03.png') }}" alt="feature_image">
                        </div>
                        <div class="featue-content-area">
                            <span class="pre">03</span>
                            <h2 class="title">Enter your <br>
                                copywriting project</h2>
                            <p class="disc">
                                Choose from emails, social posts, long-form blog posts, and more! Then, just copy and paste
                                the work into your CMS for publishing.
                            </p>
                            <a href="#" class="rts-btn btn-primary">Get Started Free</a>
                        </div>
                    </div>
                    <!-- ..:: single CodeInsights feature area end ::.. -->
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: rts feature area end ::.. -->

    <!-- ..:: rts clients deview area start ::.. -->
    <div class="rts-clients-review-area rts-section-gapTop">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-conter-area">
                        <h2 class="title">
                            CodeInsights Received 4.8/5 Stars in Over <br>
                            10,000+ Reviews.
                        </h2>
                        <p class="disc">
                            Used by them World Best Markting Team
                        </p>
                        <div class="brand-area">
                            <img src="{{ asset('assets/images/brand/01.png') }}" alt="">
                            <img src="{{ asset('assets/images/brand/02.png') }}" alt="">
                            <img src="{{ asset('assets/images/brand/03.png') }}" alt="">
                            <img src="{{ asset('assets/images/brand/04.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-tt mt--60">
            <!-- ..:: marque area start ::.. -->
            <div class="marquee">
                <div class="marquee__item">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="main--wrapper-tt">
                                <!-- ..:: ingle testimonials area ::.. -->
                                <div class="single-testimonials-marquree">
                                    <div class="top">
                                        <div class="author">
                                            <img src="{{ asset('assets/images/team/09.png') }}" alt="team">
                                            <div class="info-content">
                                                <h6 class="title">Samuel</h6>
                                                <span class="deg">Blogger</span>
                                            </div>
                                        </div>
                                        <div class="stars-area">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <p>So glad i found CodeInsights!! It has made my blog <br> tasks a billion times
                                            more enjoyable (which is <br> an emotion way beyond.</p>
                                    </div>
                                </div>
                                <!-- ..:: ingle testimonials area end ::.. -->
                                <!-- ..:: ingle testimonials area ::.. -->
                                <div class="single-testimonials-marquree">
                                    <div class="top">
                                        <div class="author">
                                            <img src="{{ asset('assets/images/team/09.png') }}" alt="team">
                                            <div class="info-content">
                                                <h6 class="title">Samuel</h6>
                                                <span class="deg">Blogger</span>
                                            </div>
                                        </div>
                                        <div class="stars-area">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <p>So glad i found CodeInsights!! It has made my blog <br> tasks a billion times
                                            more enjoyable (which is <br> an emotion way beyond.</p>
                                    </div>
                                </div>
                                <!-- ..:: ingle testimonials area end ::.. -->
                                <!-- ..:: ingle testimonials area ::.. -->
                                <div class="single-testimonials-marquree">
                                    <div class="top">
                                        <div class="author">
                                            <img src="{{ asset('assets/images/team/09.png') }}" alt="team">
                                            <div class="info-content">
                                                <h6 class="title">Samuel</h6>
                                                <span class="deg">Blogger</span>
                                            </div>
                                        </div>
                                        <div class="stars-area">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <p>So glad i found CodeInsights!! It has made my blog <br> tasks a billion times
                                            more enjoyable (which is <br> an emotion way beyond.</p>
                                    </div>
                                </div>
                                <!-- ..:: ingle testimonials area end ::.. -->
                                <!-- ..:: ingle testimonials area ::.. -->
                                <div class="single-testimonials-marquree">
                                    <div class="top">
                                        <div class="author">
                                            <img src="{{ asset('assets/images/team/09.png') }}" alt="team">
                                            <div class="info-content">
                                                <h6 class="title">Samuel</h6>
                                                <span class="deg">Blogger</span>
                                            </div>
                                        </div>
                                        <div class="stars-area">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <p>So glad i found CodeInsights!! It has made my blog <br> tasks a billion times
                                            more enjoyable (which is <br> an emotion way beyond.</p>
                                    </div>
                                </div>
                                <!-- ..:: ingle testimonials area end ::.. -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="marquee__item">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="main--wrapper-tt">
                                <!-- ..:: ingle testimonials area ::.. -->
                                <div class="single-testimonials-marquree">
                                    <div class="top">
                                        <div class="author">
                                            <img src="{{ asset('assets/images/team/09.png') }}" alt="team">
                                            <div class="info-content">
                                                <h6 class="title">Samuel</h6>
                                                <span class="deg">Blogger</span>
                                            </div>
                                        </div>
                                        <div class="stars-area">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <p>So glad i found CodeInsights!! It has made my blog <br> tasks a billion times
                                            more enjoyable (which is <br> an emotion way beyond.</p>
                                    </div>
                                </div>
                                <!-- ..:: ingle testimonials area end ::.. -->
                                <!-- ..:: ingle testimonials area ::.. -->
                                <div class="single-testimonials-marquree">
                                    <div class="top">
                                        <div class="author">
                                            <img src="{{ asset('assets/images/team/09.png') }}" alt="team">
                                            <div class="info-content">
                                                <h6 class="title">Samuel</h6>
                                                <span class="deg">Blogger</span>
                                            </div>
                                        </div>
                                        <div class="stars-area">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <p>So glad i found CodeInsights!! It has made my blog <br> tasks a billion times
                                            more enjoyable (which is <br> an emotion way beyond.</p>
                                    </div>
                                </div>
                                <!-- ..:: ingle testimonials area end ::.. -->
                                <!-- ..:: ingle testimonials area ::.. -->
                                <div class="single-testimonials-marquree">
                                    <div class="top">
                                        <div class="author">
                                            <img src="{{ asset('assets/images/team/09.png') }}" alt="team">
                                            <div class="info-content">
                                                <h6 class="title">Samuel</h6>
                                                <span class="deg">Blogger</span>
                                            </div>
                                        </div>
                                        <div class="stars-area">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <p>So glad i found CodeInsights!! It has made my blog <br> tasks a billion times
                                            more enjoyable (which is <br> an emotion way beyond.</p>
                                    </div>
                                </div>
                                <!-- ..:: ingle testimonials area end ::.. -->
                                <!-- ..:: ingle testimonials area ::.. -->
                                <div class="single-testimonials-marquree">
                                    <div class="top">
                                        <div class="author">
                                            <img src="{{ asset('assets/images/team/09.png') }}" alt="team">
                                            <div class="info-content">
                                                <h6 class="title">Samuel</h6>
                                                <span class="deg">Blogger</span>
                                            </div>
                                        </div>
                                        <div class="stars-area">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <p>So glad i found CodeInsights!! It has made my blog <br> tasks a billion times
                                            more enjoyable (which is <br> an emotion way beyond.</p>
                                    </div>
                                </div>
                                <!-- ..:: ingle testimonials area end ::.. -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ..:: marque area end ::.. -->
            <!-- ..:: marque area start ::.. -->
            <div class="marquee mt--30">
                <div class="marquee__item-2">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main--wrapper-tt">
                                <!-- ..:: ingle testimonials area ::.. -->
                                <div class="single-testimonials-marquree">
                                    <div class="top">
                                        <div class="author">
                                            <img src="{{ asset('assets/images/team/09.png') }}" alt="team">
                                            <div class="info-content">
                                                <h6 class="title">Samuel</h6>
                                                <span class="deg">Blogger</span>
                                            </div>
                                        </div>
                                        <div class="stars-area">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <p>So glad i found CodeInsights!! It has made my blog <br> tasks a billion times
                                            more enjoyable (which is <br> an emotion way beyond.</p>
                                    </div>
                                </div>
                                <!-- ..:: ingle testimonials area end ::.. -->

                                <!-- ..:: ingle testimonials area ::.. -->
                                <div class="single-testimonials-marquree">
                                    <div class="top">
                                        <div class="author">
                                            <img src="{{ asset('assets/images/team/09.png') }}" alt="team">
                                            <div class="info-content">
                                                <h6 class="title">Samuel</h6>
                                                <span class="deg">Blogger</span>
                                            </div>
                                        </div>
                                        <div class="stars-area">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <p>So glad i found CodeInsights!! It has made my blog <br> tasks a billion times
                                            more enjoyable (which is <br> an emotion way beyond.</p>
                                    </div>
                                </div>
                                <!-- ..:: ingle testimonials area end ::.. -->

                                <!-- ..:: ingle testimonials area ::.. -->
                                <div class="single-testimonials-marquree">
                                    <div class="top">
                                        <div class="author">
                                            <img src="{{ asset('assets/images/team/09.png') }}" alt="team">
                                            <div class="info-content">
                                                <h6 class="title">Samuel</h6>
                                                <span class="deg">Blogger</span>
                                            </div>
                                        </div>
                                        <div class="stars-area">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <p>So glad i found CodeInsights!! It has made my blog <br> tasks a billion times
                                            more enjoyable (which is <br> an emotion way beyond.</p>
                                    </div>
                                </div>
                                <!-- ..:: ingle testimonials area end ::.. -->
                                <!-- ..:: ingle testimonials area ::.. -->
                                <div class="single-testimonials-marquree">
                                    <div class="top">
                                        <div class="author">
                                            <img src="{{ asset('assets/images/team/09.png') }}" alt="team">
                                            <div class="info-content">
                                                <h6 class="title">Samuel</h6>
                                                <span class="deg">Blogger</span>
                                            </div>
                                        </div>
                                        <div class="stars-area">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <p>So glad i found CodeInsights!! It has made my blog <br> tasks a billion times
                                            more enjoyable (which is <br> an emotion way beyond.</p>
                                    </div>
                                </div>
                                <!-- ..:: ingle testimonials area end ::.. -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="marquee__item-2">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="main--wrapper-tt">
                                <!-- ..:: ingle testimonials area ::.. -->
                                <div class="single-testimonials-marquree">
                                    <div class="top">
                                        <div class="author">
                                            <img src="{{ asset('assets/images/team/09.png') }}" alt="team">
                                            <div class="info-content">
                                                <h6 class="title">Samuel</h6>
                                                <span class="deg">Blogger</span>
                                            </div>
                                        </div>
                                        <div class="stars-area">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <p>So glad i found CodeInsights!! It has made my blog <br> tasks a billion times
                                            more enjoyable (which is <br> an emotion way beyond.</p>
                                    </div>
                                </div>
                                <!-- ..:: ingle testimonials area end ::.. -->

                                <!-- ..:: ingle testimonials area ::.. -->
                                <div class="single-testimonials-marquree">
                                    <div class="top">
                                        <div class="author">
                                            <img src="{{ asset('assets/images/team/09.png') }}" alt="team">
                                            <div class="info-content">
                                                <h6 class="title">Samuel</h6>
                                                <span class="deg">Blogger</span>
                                            </div>
                                        </div>
                                        <div class="stars-area">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <p>So glad i found CodeInsights!! It has made my blog <br> tasks a billion times
                                            more enjoyable (which is <br> an emotion way beyond.</p>
                                    </div>
                                </div>
                                <!-- ..:: ingle testimonials area end ::.. -->
                                <!-- ..:: ingle testimonials area ::.. -->
                                <div class="single-testimonials-marquree">
                                    <div class="top">
                                        <div class="author">
                                            <img src="{{ asset('assets/images/team/09.png') }}" alt="team">
                                            <div class="info-content">
                                                <h6 class="title">Samuel</h6>
                                                <span class="deg">Blogger</span>
                                            </div>
                                        </div>
                                        <div class="stars-area">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <p>So glad i found CodeInsights!! It has made my blog <br> tasks a billion times
                                            more enjoyable (which is <br> an emotion way beyond.</p>
                                    </div>
                                </div>
                                <!-- ..:: ingle testimonials area end ::.. -->
                                <!-- ..:: ingle testimonials area ::.. -->
                                <div class="single-testimonials-marquree">
                                    <div class="top">
                                        <div class="author">
                                            <img src="{{ asset('assets/images/team/09.png') }}" alt="team">
                                            <div class="info-content">
                                                <h6 class="title">Samuel</h6>
                                                <span class="deg">Blogger</span>
                                            </div>
                                        </div>
                                        <div class="stars-area">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <p>So glad i found CodeInsights!! It has made my blog <br> tasks a billion times
                                            more enjoyable (which is <br> an emotion way beyond.</p>
                                    </div>
                                </div>
                                <!-- ..:: ingle testimonials area end ::.. -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="marquee__item-2">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="main--wrapper-tt">
                                <!-- ..:: ingle testimonials area ::.. -->
                                <div class="single-testimonials-marquree">
                                    <div class="top">
                                        <div class="author">
                                            <img src="{{ asset('assets/images/team/09.png') }}" alt="team">
                                            <div class="info-content">
                                                <h6 class="title">Samuel</h6>
                                                <span class="deg">Blogger</span>
                                            </div>
                                        </div>
                                        <div class="stars-area">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <p>So glad i found CodeInsights!! It has made my blog <br> tasks a billion times
                                            more enjoyable (which is <br> an emotion way beyond.</p>
                                    </div>
                                </div>
                                <!-- ..:: ingle testimonials area end ::.. -->
                                <!-- ..:: ingle testimonials area ::.. -->
                                <div class="single-testimonials-marquree">
                                    <div class="top">
                                        <div class="author">
                                            <img src="{{ asset('assets/images/team/09.png') }}" alt="team">
                                            <div class="info-content">
                                                <h6 class="title">Samuel</h6>
                                                <span class="deg">Blogger</span>
                                            </div>
                                        </div>
                                        <div class="stars-area">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <p>So glad i found CodeInsights!! It has made my blog <br> tasks a billion times
                                            more enjoyable (which is <br> an emotion way beyond.</p>
                                    </div>
                                </div>
                                <!-- ..:: ingle testimonials area end ::.. -->

                                <!-- ..:: ingle testimonials area ::.. -->
                                <div class="single-testimonials-marquree">
                                    <div class="top">
                                        <div class="author">
                                            <img src="{{ asset('assets/images/team/09.png') }}" alt="team">
                                            <div class="info-content">
                                                <h6 class="title">Samuel</h6>
                                                <span class="deg">Blogger</span>
                                            </div>
                                        </div>
                                        <div class="stars-area">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <p>So glad i found CodeInsights!! It has made my blog <br> tasks a billion times
                                            more enjoyable (which is <br> an emotion way beyond.</p>
                                    </div>
                                </div>
                                <!-- ..:: ingle testimonials area end ::.. -->

                                <!-- ..:: ingle testimonials area ::.. -->
                                <div class="single-testimonials-marquree">
                                    <div class="top">
                                        <div class="author">
                                            <img src="{{ asset('assets/images/team/09.png') }}" alt="team">
                                            <div class="info-content">
                                                <h6 class="title">Samuel</h6>
                                                <span class="deg">Blogger</span>
                                            </div>
                                        </div>
                                        <div class="stars-area">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <p>So glad i found CodeInsights!! It has made my blog <br> tasks a billion times
                                            more enjoyable (which is <br> an emotion way beyond.</p>
                                    </div>
                                </div>
                                <!-- ..:: ingle testimonials area end ::.. -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ..:: marque area end ::.. -->
        </div>
    </div>
    <!-- ..:: rts clients deview area end ::.. -->

    <!-- ..:: rts faq area stat ::.. -->
    <div class="rts-faq-area rts-section-gap bg_faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-conter-area">
                        <h2 class="title">
                            Questions About our GenAI? <br>We have Answers!
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
                                        Does CodeInsights to write long articles?
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
@endsection
