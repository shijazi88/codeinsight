@extends('layout.layout1')

@php
    $headtitle='Faq';
    $bodyClass='inner-page';
    $title = 'Got Questions?';
    $subtitle = 'Faq';
@endphp

@section('content')

    <!-- ..:: rts faq area start ::.. -->
    <div class="rts-faq-area-inner rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4">
                    <!-- ..:: left contact form ::.. -->
                    <form class="contact-page-form" action="#">
                        <h3 class="title">Get In Touch</h3>
                        <!-- ..:: ingle input start ::.. -->
                        <div class="single-input">
                            <label for="name">Your Name</label>
                            <input id="name" type="text" placeholder="Enter you full name">
                            <i class="fa-regular fa-user"></i>
                        </div>
                        <!-- ..:: single input end ::.. -->
                        <!-- ..:: ingle input start ::.. -->
                        <div class="single-input">
                            <label for="email">Your Email Address</label>
                            <input id="email" type="text" placeholder="openup@info.com">
                            <i class="fa-light fa-envelope"></i>
                        </div>
                        <!-- ..:: single input end ::.. -->
                        <!-- ..:: ingle input start ::.. -->
                        <div class="single-input">
                            <label for="textarea">Enter Your Message</label>
                            <textarea id="textarea" placeholder="Write here your details message"></textarea>
                            <i class="fa-light fa-marker"></i>
                        </div>
                        <!-- ..:: single input end ::.. -->
                        <button class="rts-btn btn-primary">Send Message</button>
                    </form>
                    <!-- ..:: left contact form end ::.. -->
                </div>
                <div class="col-lg-8 pl--140 pl_md--15 pl_sm--15">
                    <div class="accordion-area-one">
                        <h4 class="title mb--25">Some frequently asked questions</h4>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is openup content writing tool?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Once you know your audience, choose a topic that will resonate with them. Look for trending topics in your industry or address common questions or challenges your audience may be facing.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        what languages does it supports?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Once you know your audience, choose a topic that will resonate with them. Look for trending topics in your industry or address common questions or challenges your audience may be facing.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        What is sEO wirting ai and how do i use it?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Once you know your audience, choose a topic that will resonate with them. Look for trending topics in your industry or address common questions or challenges your audience may be facing.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        what languages does it supports?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Once you know your audience, choose a topic that will resonate with them. Look for trending topics in your industry or address common questions or challenges your audience may be facing.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Does Openup to write long articles?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Once you know your audience, choose a topic that will resonate with them. Look for trending topics in your industry or address common questions or challenges your audience may be facing.
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