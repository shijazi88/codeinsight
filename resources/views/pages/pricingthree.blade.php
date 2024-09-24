@extends('layout.layout1')

@php
    $headtitle = 'CodeInsights';
    $bodyClass = 'inner-page';
    $title = 'Pricing Plan 3';
    $subtitle = 'Pricing Plan 3';
@endphp

@section('content')
    <!-- ..:: pricing area start ::.. -->
    <div class="rts-pricing-area rts-section-gapTop">
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
                    <button class="" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                        role="tab" aria-controls="profile" aria-selected="false">Annual</button>
                </li>
                <li class="right-image-inner">
                    <img src="{{ asset('assets/images/cta/03.png') }}" alt="cta-wrapper">
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row g-5 mt--20">
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
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
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
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
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
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
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
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
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
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
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
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
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
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
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
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
                            Questions About our GenAI? <br>
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
