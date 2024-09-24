@extends('layout.layout1')

@php
    $headtitle = 'Use Case';
    $bodyClass = 'inner-page';
    $title = 'Use Case';
    $subtitle = 'Use Case';
@endphp

@section('content')
    <!-- ..:: rts case area start ::.. -->
    <div class="rts-case-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-conter-area">
                        <span class="pre-title-bg">CodeInsights Use cases</span>
                        <h2 class="title">
                            Generate AI Copy writing <br>
                            Favorite Tools
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt-10">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single use case ::.. -->
                    <div class="single-use-case">
                        <div class="icon">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="50" height="50" rx="4" fill="#3F3EED" fill-opacity="0.1" />
                                <path
                                    d="M23.1719 17.5469C28 17.8281 32.1719 22 32.4531 26.7812C32.5 27.3906 32.0312 27.9531 31.4219 28C31.375 28 31.375 28 31.3281 28C30.7656 28 30.25 27.5312 30.25 26.9219C29.9688 23.2188 26.7344 19.9844 23.0312 19.75C22.4219 19.75 21.9531 19.1875 22 18.5781C22 17.9688 22.5625 17.5 23.1719 17.5469ZM23.5 13C30.9062 13 37 19.0938 37 26.5C37 27.3438 36.2969 28 35.5 28C34.6562 28 34 27.3438 34 26.5C34 20.7344 29.2656 16 23.5 16C22.6562 16 22 15.3438 22 14.5C22 13.7031 22.6562 13 23.5 13ZM21.0625 23.6406C24.5781 24.3438 27.1562 27.8594 26.3125 31.7031C25.7969 34.2344 23.7344 36.2969 21.2031 36.8125C16.8438 37.75 13 34.4219 13 30.25V18.625C13 18.0156 13.4688 17.5469 14.0781 17.5469H16.3281C16.9844 17.5469 17.4531 18.0156 17.4531 18.625V30.2031C17.4531 31.375 18.4844 32.4062 19.75 32.4062C20.9688 32.4062 22 31.4219 22 30.2031C22 29.2656 21.3438 28.4219 20.5 28.1406C20.0781 28 19.75 27.625 19.75 27.1094V24.7656C19.75 24.0625 20.3594 23.5 21.0625 23.6406Z"
                                    fill="#3F3EED" />
                            </svg>
                        </div>
                        <h5 class="title">Blog Content</h5>
                        <p class="disc">
                            Write a first draft. The first draft should be written in long-form breaking.
                        </p>
                        <a href="case-details" class="more-case-btn">Try Blog Content<i
                                class="fa-regular fa-arrow-right"></i></a>
                    </div>
                    <!-- ..:: single use case end ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single use case ::.. -->
                    <div class="single-use-case">
                        <div class="icon">

                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="50" height="50" rx="4" fill="#33B89F" fill-opacity="0.1" />
                                <path
                                    d="M29.5 25C29.5 26.6875 28.1406 28 26.5 28L19.0938 28.0469L15.2031 30.9531C14.9219 31.1406 14.5 30.9531 14.5 30.5781V28.0469L13 28C11.3125 28 10 26.6875 10 25V16C10 14.3594 11.3125 13 13 13H26.5C28.1406 13 29.5 14.3594 29.5 16V25ZM37 19C38.6406 19 40 20.3594 40 22V31.0469C40 32.6875 38.6406 34 37 34H35.5V36.5781C35.5 36.9531 35.0312 37.1406 34.7031 36.9062L30.8125 34H24.9531C23.3125 34 22 32.6875 22 31V29.5H26.5C28.9375 29.5 31 27.4844 31 25V19H37Z"
                                    fill="#33B89F" />
                            </svg>

                        </div>
                        <h5 class="title">Social Media Content</h5>
                        <p class="disc">
                            Write a first draft. The first draft should be written in long-form breaking.
                        </p>
                        <a href="case-details" class="more-case-btn">Try Blog Content<i
                                class="fa-regular fa-arrow-right"></i></a>
                    </div>
                    <!-- ..:: single use case end ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single use case ::.. -->
                    <div class="single-use-case">
                        <div class="icon">

                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="50" height="50" rx="4" fill="#2A85C8" fill-opacity="0.1" />
                                <path
                                    d="M13 14.125C13 13.5156 13.4688 13 14.125 13H17.5C18.0156 13 18.4844 13.4219 18.5781 13.9375L18.6719 14.5H38.3594C39.3438 14.5 40.0938 15.4844 39.8125 16.4219L37.2812 25.4219C37.0938 26.0781 36.5312 26.5 35.8281 26.5H20.9688L21.3906 28.75H35.875C36.4844 28.75 37 29.2656 37 29.875C37 30.5312 36.4844 31 35.875 31H20.4531C19.9375 31 19.4688 30.625 19.375 30.1094L16.5625 15.25H14.125C13.4688 15.25 13 14.7812 13 14.125ZM23.5 34.75C23.5 36.0156 22.4688 37 21.25 37C19.9844 37 19 36.0156 19 34.75C19 33.5312 19.9844 32.5 21.25 32.5C22.4688 32.5 23.5 33.5312 23.5 34.75ZM32.5 34.75C32.5 33.5312 33.4844 32.5 34.75 32.5C35.9688 32.5 37 33.5312 37 34.75C37 36.0156 35.9688 37 34.75 37C33.4844 37 32.5 36.0156 32.5 34.75ZM14.875 17.5C15.4844 17.5 16 18.0156 16 18.625C16 19.2812 15.4844 19.75 14.875 19.75H11.125C10.4688 19.75 10 19.2812 10 18.625C10 18.0156 10.4688 17.5 11.125 17.5H14.875ZM15.625 21.25C16.2344 21.25 16.75 21.7656 16.75 22.375C16.75 23.0312 16.2344 23.5 15.625 23.5H11.125C10.4688 23.5 10 23.0312 10 22.375C10 21.7656 10.4688 21.25 11.125 21.25H15.625ZM16.375 25C16.9844 25 17.5 25.5156 17.5 26.125C17.5 26.7812 16.9844 27.25 16.375 27.25H11.125C10.4688 27.25 10 26.7812 10 26.125C10 25.5156 10.4688 25 11.125 25H16.375Z"
                                    fill="#2A85C8" />
                            </svg>

                        </div>
                        <h5 class="title">eCommerce copy</h5>
                        <p class="disc">
                            Write a first draft. The first draft should be written in long-form breaking.
                        </p>
                        <a href="case-details" class="more-case-btn">Try Blog Content<i
                                class="fa-regular fa-arrow-right"></i></a>
                    </div>
                    <!-- ..:: single use case end ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single use case ::.. -->
                    <div class="single-use-case">
                        <div class="icon">

                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="50" height="50" rx="4" fill="#EBA43B" fill-opacity="0.1" />
                                <path
                                    d="M17.25 14.5H24.2344C25.0312 14.5 25.7812 14.8281 26.3438 15.3906L34.5938 23.6406C35.7656 24.8125 35.7656 26.7344 34.5938 27.9062L28.3594 34.1406C27.1875 35.3125 25.2656 35.3125 24.0938 34.1406L15.8438 25.8906C15.2812 25.3281 15 24.5781 15 23.7812V16.75C15 15.5312 15.9844 14.5 17.25 14.5ZM20.25 21.25C21.0469 21.25 21.75 20.5938 21.75 19.75C21.75 18.9531 21.0469 18.25 20.25 18.25C19.4062 18.25 18.75 18.9531 18.75 19.75C18.75 20.5938 19.4062 21.25 20.25 21.25Z"
                                    fill="#EBA43B" />
                            </svg>

                        </div>
                        <h5 class="title">Sales Copy</h5>
                        <p class="disc">
                            Write a first draft. The first draft should be written in long-form breaking.
                        </p>
                        <a href="case-details" class="more-case-btn">Try Blog Content<i
                                class="fa-regular fa-arrow-right"></i></a>
                    </div>
                    <!-- ..:: single use case end ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single use case ::.. -->
                    <div class="single-use-case">
                        <div class="icon">

                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="50" height="50" rx="4" fill="#E331D2" fill-opacity="0.1" />
                                <path
                                    d="M13 17.5C13 15.8594 14.3125 14.5 16 14.5H34C35.6406 14.5 37 15.8594 37 17.5V32.5C37 34.1875 35.6406 35.5 34 35.5H16C14.3125 35.5 13 34.1875 13 32.5V17.5ZM17.5 20.5C18.2969 20.5 19 19.8438 19 19C19 18.2031 18.2969 17.5 17.5 17.5C16.6562 17.5 16 18.2031 16 19C16 19.8438 16.6562 20.5 17.5 20.5ZM34 19C34 18.3906 33.4844 17.875 32.875 17.875H21.625C20.9688 17.875 20.5 18.3906 20.5 19C20.5 19.6562 20.9688 20.125 21.625 20.125H32.875C33.4844 20.125 34 19.6562 34 19Z"
                                    fill="#E331D2" />
                            </svg>

                        </div>
                        <h5 class="title">website copy</h5>
                        <p class="disc">
                            Write a first draft. The first draft should be written in long-form breaking.
                        </p>
                        <a href="case-details" class="more-case-btn">Try Blog Content<i
                                class="fa-regular fa-arrow-right"></i></a>
                    </div>
                    <!-- ..:: single use case end ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single use case ::.. -->
                    <div class="single-use-case">
                        <div class="icon">

                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="50" height="50" rx="4" fill="#5584FF" fill-opacity="0.1" />
                                <path
                                    d="M21.75 24.1562L22.7344 26.125H20.7188L21.75 24.1562ZM31.5 26.125C31.5 26.7812 30.9844 27.25 30.375 27.25C29.7188 27.25 29.25 26.7812 29.25 26.125C29.25 25.5156 29.7188 25 30.375 25C30.9844 25 31.5 25.5156 31.5 26.125ZM36 14.5C37.6406 14.5 39 15.8594 39 17.5V32.5C39 34.1875 37.6406 35.5 36 35.5H15C13.3125 35.5 12 34.1875 12 32.5V17.5C12 15.8594 13.3125 14.5 15 14.5H36ZM22.7344 21.1562C22.5469 20.7812 22.1719 20.5 21.75 20.5C21.2812 20.5 20.9062 20.7812 20.7188 21.1562L17.3438 27.9062C17.0625 28.4688 17.2969 29.125 17.8594 29.4062C18.4219 29.6875 19.0781 29.4531 19.3594 28.8906L19.5938 28.375H23.8594L24.0938 28.8906C24.375 29.4531 25.0312 29.6875 25.5938 29.4062C26.1562 29.125 26.3906 28.4688 26.1094 27.9062L22.7344 21.1562ZM31.5 22.9844C31.125 22.8438 30.75 22.75 30.375 22.75C28.5 22.75 27 24.2969 27 26.125C27 28 28.5 29.5 30.375 29.5C30.8906 29.5 31.3594 29.4062 31.8281 29.1719C32.0156 29.4062 32.2969 29.5 32.625 29.5C33.2344 29.5 33.75 29.0312 33.75 28.375V21.625C33.75 21.0156 33.2344 20.5 32.625 20.5C31.9688 20.5 31.5 21.0156 31.5 21.625V22.9844Z"
                                    fill="#5585FF" />
                            </svg>

                        </div>
                        <h5 class="title">Digital Add Copy</h5>
                        <p class="disc">
                            Write a first draft. The first draft should be written in long-form breaking.
                        </p>
                        <a href="case-details" class="more-case-btn">Try Blog Content<i
                                class="fa-regular fa-arrow-right"></i></a>
                    </div>
                    <!-- ..:: single use case end ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single use case ::.. -->
                    <div class="single-use-case">
                        <div class="icon">

                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="50" height="50" rx="4" fill="#1ADD39" fill-opacity="0.1" />
                                <path
                                    d="M18.9531 34.0469C19.4219 34.0469 19.8906 33.9062 20.3125 33.625L26.5 28.9844V35.5C26.5 36.3438 25.7969 37 25 37H13C12.1562 37 11.5 36.3438 11.5 35.5V28.9844L17.6875 33.625C18.0625 33.9062 18.5312 34.0469 18.9531 34.0469ZM19 22V23.5H14.5V14.5C14.5 13.7031 15.1562 13 16 13H31C31.7969 13 32.5 13.7031 32.5 14.5V19H22C20.3125 19 19 20.3594 19 22ZM25 25C25.7969 25 26.5 25.7031 26.5 26.5V27.1094L19.4219 32.4062C19.1406 32.5938 18.8125 32.5938 18.5781 32.4062L11.5 27.1094V26.5C11.5 25.7031 12.1562 25 13 25H25ZM37 20.5C37.7969 20.5 38.5 21.2031 38.5 22V31C38.5 31.8438 37.7969 32.5 37 32.5H28L27.9531 26.2188C27.8125 24.7188 26.5469 23.5 25 23.5H20.5V22C20.5 21.2031 21.1562 20.5 22 20.5H37ZM35.5 26.5V23.5H32.5V26.5H35.5Z"
                                    fill="#45AF5C" />
                            </svg>

                        </div>
                        <h5 class="title">Email Marketing</h5>
                        <p class="disc">
                            Write a first draft. The first draft should be written in long-form breaking.
                        </p>
                        <a href="case-details" class="more-case-btn">Try Blog Content<i
                                class="fa-regular fa-arrow-right"></i></a>
                    </div>
                    <!-- ..:: single use case end ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single use case ::.. -->
                    <div class="single-use-case">
                        <div class="icon">

                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="50" height="50" rx="4" fill="#F20404" fill-opacity="0.1" />
                                <path
                                    d="M35.5 21.4375C36.3438 21.8594 37 22.9844 37 24.25C37 25.5625 36.3438 26.6875 35.5 27.1094V34C35.5 34.6094 35.125 35.1719 34.5625 35.4062C34 35.6406 33.3438 35.5 32.9219 35.0781L30.8594 33.0156C28.6094 30.7656 25.5625 29.5 22.375 29.5H22V35.5C22 36.3438 21.2969 37 20.5 37H17.5C16.6562 37 16 36.3438 16 35.5V29.5C14.3125 29.5 13 28.1875 13 26.5V22C13 20.3594 14.3125 19 16 19H22.375C25.5625 19 28.6094 17.7344 30.8594 15.5312L32.9219 13.4688C33.3438 13.0469 34 12.9062 34.5625 13.1406C35.125 13.375 35.5 13.9375 35.5 14.5V21.4375ZM22.375 22H22V26.5H22.375C26.125 26.5 29.7344 27.9062 32.5 30.4375V18.1094C29.7344 20.6406 26.125 22 22.375 22Z"
                                    fill="#E33131" />
                            </svg>

                        </div>
                        <h5 class="title">SEO Content</h5>
                        <p class="disc">
                            Write a first draft. The first draft should be written in long-form breaking.
                        </p>
                        <a href="case-details" class="more-case-btn">Try Blog Content<i
                                class="fa-regular fa-arrow-right"></i></a>
                    </div>
                    <!-- ..:: single use case end ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single use case ::.. -->
                    <div class="single-use-case">
                        <div class="icon">

                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="50" height="50" rx="4" fill="#5105F1" fill-opacity="0.1" />
                                <path
                                    d="M30 18.25V31.75C30 33.0156 28.9688 34 27.75 34H14.25C12.9844 34 12 33.0156 12 31.75V18.25C12 17.0312 12.9844 16 14.25 16H27.75C28.9688 16 30 17.0312 30 18.25ZM39 19V31.0469C39 32.2188 37.5938 32.9219 36.6094 32.2656L31.5 28.7031V21.3438L36.6094 17.7812C37.5938 17.125 39 17.8281 39 19Z"
                                    fill="#8B55FF" />
                            </svg>

                        </div>
                        <h5 class="title">Video Description</h5>
                        <p class="disc">
                            Write a first draft. The first draft should be written in long-form breaking.
                        </p>
                        <a href="case-details" class="more-case-btn">Try Blog Content<i
                                class="fa-regular fa-arrow-right"></i></a>
                    </div>
                    <!-- ..:: single use case end ::.. -->
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: rts case area end ::.. -->

    <!-- ..:: rts pricing plane area start ::.. -->
    <div class="pricing-plane-area rts-section-gapBottom">
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
                <ul class="nav nav-tabs pricing-button-one two" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class=" active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="home" aria-selected="true">Monthly
                            Pricing</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">Annual
                            Pricing</button>
                    </li>
                    <li class="save-badge">
                        <span>SAVE 25%</span>
                    </li>
                </ul>
                <div class="tab-content mt--20" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row g-5 mt--10">
                            <div class="col-lg-4 col-md-6 col-sm-12">
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
                                        <a href="case-details" class="pricing-btn">Get Started</a>
                                    </div>
                                </div>
                                <!-- ..:: single pricing-area end ::.. -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
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
                            <div class="col-lg-4 col-md-6 col-sm-12">
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
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row g-5 mt--10">
                            <div class="col-lg-4 col-md-6 col-sm-12">
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
                            <div class="col-lg-4 col-md-6 col-sm-12">
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
                            <div class="col-lg-4 col-md-6 col-sm-12">
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
    <!-- ..:: rts pricing plane area end ::.. -->

    <!-- ..:: use case start ::.. -->
    <div class="rts-faq-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-conter-area">
                        <span class="pre-title-bg">Faq's</span>
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
    <!-- ..:: use case end ::.. -->
@endsection
