@extends('layout.layout1')

@php
    $headtitle = 'Use Case Details';
    $bodyClass = 'inner-page';
    $title = 'Use Case Details';
    $subtitle = 'Use Case';
@endphp

@section('content')
    <!-- ..:: rts use case detaila area start ::.. -->
    <div class="use-case-details-area rts-section-gapTop">
        <div class="container section-seperatorBottom rts-section-gapBottom">
            <div class="row">
                <div class="col-lg-6">
                    <div class="title-left-area">
                        <span class="pre-title-bg">CodeInsights Use cases</span>
                        <h2 class="title">
                            Generate Blog, Article or <br>
                            Essay Ideas and Outlines <br>
                            in One Click
                        </h2>
                        <p class="disc">
                            The easiest way to come up with catchy blog, essay, and article topics <br>
                            and content structures using AI writing assistant.
                        </p>
                        <a href="#" class="rts-btn btn-primary">Start Writing <i
                                class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 mt_md--50 mt_sm--50">
                    <div class="thumbnail-case-top">
                        <img src="{{ asset('assets/images/case/01.png') }}" alt="case">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: rts use case detaila area end ::.. -->

    <!-- ..:: rts case details bottom area start ::.. -->
    <div class="rts-case-details-bottom-area rts-section-gap plr_sm--15">
        <div class="container-use-case-d">
            <div class="row">
                <div class="col-lg-12">
                    <div class="case-details-title-area-d">
                        <h2 class="title">
                            The process of generating blog posts <br>
                            using AI content writing tools
                        </h2>
                        <p class="disc">
                            Utilize an AI content writing tool to generate initial paragraphs or sections based on the
                            selected topic and subheadings. Provide any specific instructions or guidelines to the AI tool
                            to align the content with your desired tone and style. Write an engaging introduction that
                            introduces the topic, captures the reader's interest, and provides context for the rest of the
                            blog post.
                        </p>
                    </div>
                    <!-- ..:: ingle stepa wrapper start ::.. -->
                    <div class="single-steps-wrapper">
                        <span class="water">01</span>
                        <h3 class="title"><span>Step 01:</span> Topic Selection</h3>
                        <p class="disc">
                            Start by identifying the topic or subject for your blog post. You can choose a <br>
                            specific keyword or provide a brief description of the desired content to the AI tool.
                        </p>
                        <div class="thumbnail-image">
                            <img src="{{ asset('assets/images/case/02.jpg') }}" alt="case">
                        </div>
                    </div>
                    <!-- ..:: ingle stepa wrapper end ::.. -->
                    <!-- ..:: ingle stepa wrapper start ::.. -->
                    <div class="single-steps-wrapper">
                        <span class="water odd">02</span>
                        <h3 class="title"><span>Step 02:</span> Input Instructions</h3>
                        <p class="disc">
                            Start by identifying the topic or subject for your blog post. You can choose a <br>
                            specific keyword or provide a brief description of the desired content to the AI tool.
                        </p>
                        <div class="thumbnail-image">
                            <img src="{{ asset('assets/images/case/02.jpg') }}" alt="case">
                        </div>
                    </div>
                    <!-- ..:: ingle stepa wrapper end ::.. -->
                    <!-- ..:: ingle stepa wrapper start ::.. -->
                    <div class="single-steps-wrapper mb--0">
                        <span class="water">03</span>
                        <h3 class="title"><span>Step 03:</span> Content Generation</h3>
                        <p class="disc">
                            Start by identifying the topic or subject for your blog post. You can choose a <br>
                            specific keyword or provide a brief description of the desired content to the AI tool.
                        </p>
                        <div class="thumbnail-image">
                            <img src="{{ asset('assets/images/case/02.jpg') }}" alt="case">
                        </div>
                    </div>
                    <!-- ..:: ingle stepa wrapper end ::.. -->
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: rts case details bottom area end ::.. -->

    <div class="rts-faq-area rts-section-gapBottom bg_faq mt_sm--30">
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
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
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
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        What is sEO wirting ai and how do i use it?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
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
@endsection
