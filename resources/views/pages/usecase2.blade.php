@extends('layout.layout1')

@php
    $headtitle='Use Case';
    $bodyClass='inner-page case-2';
    $title = 'Use Case';
    $subtitle = 'Use Case';
@endphp

@section('content')

    <!-- ..:: rts case area start ::.. -->
    <div class="case-area-three inner-pages rts-section-gap">
        <div class="shape-img">
            <img class="right" src="{{ asset('assets/images/case/07.png') }}" alt="">
            <img class="left" src="{{ asset('assets/images/case/08.png') }}" alt="">
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
            <div class="row g-5 mt--30">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single case three area start ::.. -->
                    <div class="rts-single-case-three">
                        <div class="icon">
                            <svg width="30" height="32" viewBox="0 0 30 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.7148 6.43359C18.75 6.78516 23.9648 12 24.3164 17.9766C24.375 18.7383 23.7891 19.4414 23.0273 19.5C22.9688 19.5 22.9688 19.5 22.9102 19.5C22.207 19.5 21.5625 18.9141 21.5625 18.1523C21.2109 13.5234 17.168 9.48047 12.5391 9.1875C11.7773 9.1875 11.1914 8.48438 11.25 7.72266C11.25 6.96094 11.9531 6.375 12.7148 6.43359ZM13.125 0.75C22.3828 0.75 30 8.36719 30 17.625C30 18.6797 29.1211 19.5 28.125 19.5C27.0703 19.5 26.25 18.6797 26.25 17.625C26.25 10.418 20.332 4.5 13.125 4.5C12.0703 4.5 11.25 3.67969 11.25 2.625C11.25 1.62891 12.0703 0.75 13.125 0.75ZM10.0781 14.0508C14.4727 14.9297 17.6953 19.3242 16.6406 24.1289C15.9961 27.293 13.418 29.8711 10.2539 30.5156C4.80469 31.6875 0 27.5273 0 22.3125V7.78125C0 7.01953 0.585938 6.43359 1.34766 6.43359H4.16016C4.98047 6.43359 5.56641 7.01953 5.56641 7.78125V22.2539C5.56641 23.7188 6.85547 25.0078 8.4375 25.0078C9.96094 25.0078 11.25 23.7773 11.25 22.2539C11.25 21.082 10.4297 20.0273 9.375 19.6758C8.84766 19.5 8.4375 19.0312 8.4375 18.3867V15.457C8.4375 14.5781 9.19922 13.875 10.0781 14.0508Z" fill="#083A5E"></path>
                            </svg>
                        </div>
                        <div class="inner-content">
                            <h5 class="title">Blog Content</h5>
                            <p class="disc">
                                Write a first draft. The first draft should be written in long-form, so don't worry about breaking up paragraphs.
                            </p>
                        </div>
                    </div>
                    <!-- ..:: single case three area end ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single case three area start ::.. -->
                    <div class="rts-single-case-three">
                        <div class="icon">
                            <svg width="38" height="31" viewBox="0 0 38 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 2.15625C4 1.39453 4.58594 0.75 5.40625 0.75H9.625C10.2695 0.75 10.8555 1.27734 10.9727 1.92188L11.0898 2.625H35.6992C36.9297 2.625 37.8672 3.85547 37.5156 5.02734L34.3516 16.2773C34.1172 17.0977 33.4141 17.625 32.5352 17.625H13.9609L14.4883 20.4375H32.5938C33.3555 20.4375 34 21.082 34 21.8438C34 22.6641 33.3555 23.25 32.5938 23.25H13.3164C12.6719 23.25 12.0859 22.7812 11.9688 22.1367L8.45312 3.5625H5.40625C4.58594 3.5625 4 2.97656 4 2.15625ZM17.125 27.9375C17.125 29.5195 15.8359 30.75 14.3125 30.75C12.7305 30.75 11.5 29.5195 11.5 27.9375C11.5 26.4141 12.7305 25.125 14.3125 25.125C15.8359 25.125 17.125 26.4141 17.125 27.9375ZM28.375 27.9375C28.375 26.4141 29.6055 25.125 31.1875 25.125C32.7109 25.125 34 26.4141 34 27.9375C34 29.5195 32.7109 30.75 31.1875 30.75C29.6055 30.75 28.375 29.5195 28.375 27.9375ZM6.34375 6.375C7.10547 6.375 7.75 7.01953 7.75 7.78125C7.75 8.60156 7.10547 9.1875 6.34375 9.1875H1.65625C0.835938 9.1875 0.25 8.60156 0.25 7.78125C0.25 7.01953 0.835938 6.375 1.65625 6.375H6.34375ZM7.28125 11.0625C8.04297 11.0625 8.6875 11.707 8.6875 12.4688C8.6875 13.2891 8.04297 13.875 7.28125 13.875H1.65625C0.835938 13.875 0.25 13.2891 0.25 12.4688C0.25 11.707 0.835938 11.0625 1.65625 11.0625H7.28125ZM8.21875 15.75C8.98047 15.75 9.625 16.3945 9.625 17.1562C9.625 17.9766 8.98047 18.5625 8.21875 18.5625H1.65625C0.835938 18.5625 0.25 17.9766 0.25 17.1562C0.25 16.3945 0.835938 15.75 1.65625 15.75H8.21875Z" fill="#083A5E"></path>
                            </svg>
                        </div>
                        <div class="inner-content">
                            <h5 class="title">eCommerce copy</h5>
                            <p class="disc">
                                Write a first draft. The first draft should be written in long-form, so don't worry about breaking up paragraphs.
                            </p>
                        </div>
                    </div>
                    <!-- ..:: single case three area end ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single case three area start ::.. -->
                    <div class="rts-single-case-three">
                        <div class="icon">

                            <svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.8125 0.625H11.543C12.5391 0.625 13.4766 1.03516 14.1797 1.73828L24.4922 12.0508C25.957 13.5156 25.957 15.918 24.4922 17.3828L16.6992 25.1758C15.2344 26.6406 12.832 26.6406 11.3672 25.1758L1.05469 14.8633C0.351562 14.1602 0 13.2227 0 12.2266V3.4375C0 1.91406 1.23047 0.625 2.8125 0.625ZM6.5625 9.0625C7.55859 9.0625 8.4375 8.24219 8.4375 7.1875C8.4375 6.19141 7.55859 5.3125 6.5625 5.3125C5.50781 5.3125 4.6875 6.19141 4.6875 7.1875C4.6875 8.24219 5.50781 9.0625 6.5625 9.0625Z" fill="#083A5E"></path>
                            </svg>

                        </div>
                        <div class="inner-content">
                            <h5 class="title">Sales Copy</h5>
                            <p class="disc">
                                Write a first draft. The first draft should be written in long-form, so don't worry about breaking up paragraphs.
                            </p>
                        </div>
                    </div>
                    <!-- ..:: single case three area end ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single case three area start ::.. -->
                    <div class="rts-single-case-three">
                        <div class="icon">

                            <svg width="38" height="31" viewBox="0 0 38 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.625 26.0625V23.25H30V27.9375C30 29.5195 28.7109 30.75 27.1875 30.75H2.8125C1.23047 30.75 0 29.5195 0 27.9375V11.0625C0 9.53906 1.23047 8.25 2.8125 8.25H9.375V26.0625C9.375 26.5898 9.78516 27 10.3125 27H19.6875C20.1562 27 20.625 26.5898 20.625 26.0625ZM6.09375 26.4727V24.7148C6.09375 24.4805 5.80078 24.1875 5.56641 24.1875H3.80859C3.51562 24.1875 3.28125 24.4805 3.28125 24.7148V26.4727C3.28125 26.7656 3.51562 27 3.80859 27H5.56641C5.80078 27 6.09375 26.7656 6.09375 26.4727ZM6.09375 20.3789V18.6211C6.09375 18.3867 5.80078 18.0938 5.56641 18.0938H3.80859C3.51562 18.0938 3.28125 18.3867 3.28125 18.6211V20.3789C3.28125 20.6719 3.51562 20.9062 3.80859 20.9062H5.56641C5.80078 20.9062 6.09375 20.6719 6.09375 20.3789ZM6.09375 14.2852V12.5273C6.09375 12.293 5.80078 12 5.56641 12H3.80859C3.51562 12 3.28125 12.2344 3.28125 12.5273V14.2852C3.28125 14.5781 3.51562 14.8125 3.80859 14.8125H5.56641C5.80078 14.8125 6.09375 14.5781 6.09375 14.2852ZM23.9062 24.7148V26.4727C23.9062 26.7656 24.1406 27 24.4336 27H26.1914C26.4258 27 26.7188 26.7656 26.7188 26.4727V24.7148C26.7188 24.4805 26.4258 24.1875 26.1914 24.1875H24.4336C24.1406 24.1875 23.9062 24.4805 23.9062 24.7148ZM34.6289 0.75C36.2109 0.75 37.5 2.03906 37.4414 3.5625V18.5625C37.4414 20.1445 36.1523 21.375 34.6289 21.375H14.0039C12.4219 21.375 11.1914 20.1445 11.1914 18.5625V3.5625C11.1914 2.03906 12.4805 0.75 14.0039 0.75H34.6289ZM17.7539 4.5C16.7578 4.5 15.8789 5.37891 15.8789 6.375C15.8789 7.42969 16.7578 8.25 17.7539 8.25C18.75 8.25 19.6289 7.42969 19.6289 6.375C19.6289 5.37891 18.75 4.5 17.7539 4.5ZM33.6328 17.1562C33.75 16.8633 33.75 16.4531 33.5742 16.2188L27.3047 6.84375C27.1289 6.55078 26.8359 6.375 26.543 6.375C26.1914 6.375 25.8984 6.55078 25.7227 6.84375L22.0312 12.3516L20.7422 10.5352C20.5664 10.3008 20.2734 10.125 19.9805 10.125C19.6875 10.125 19.4531 10.3008 19.2773 10.5352L15.1758 16.1602C14.9414 16.4531 14.9414 16.8047 15.0586 17.1562C15.2344 17.4492 15.5273 17.625 15.8789 17.625H32.8125C33.1055 17.625 33.457 17.4492 33.6328 17.1562Z" fill="#083A5E"></path>
                            </svg>

                        </div>
                        <div class="inner-content">
                            <h5 class="title">Digital Ad Copy</h5>
                            <p class="disc">
                                Write a first draft. The first draft should be written in long-form, so don't worry about breaking up paragraphs.
                            </p>
                        </div>
                    </div>
                    <!-- ..:: single case three area end ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single case three area start ::.. -->
                    <div class="rts-single-case-three">
                        <div class="icon">

                            <svg width="38" height="31" viewBox="0 0 38 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.375 15.75C24.375 17.8594 22.6758 19.5 20.625 19.5L11.3672 19.5586L6.50391 23.1914C6.15234 23.4258 5.625 23.1914 5.625 22.7227V19.5586L3.75 19.5C1.64062 19.5 0 17.8594 0 15.75V4.5C0 2.44922 1.64062 0.75 3.75 0.75H20.625C22.6758 0.75 24.375 2.44922 24.375 4.5V15.75ZM33.75 8.25C35.8008 8.25 37.5 9.94922 37.5 12V23.3086C37.5 25.3594 35.8008 27 33.75 27H31.875V30.2227C31.875 30.6914 31.2891 30.9258 30.8789 30.6328L26.0156 27H18.6914C16.6406 27 15 25.3594 15 23.25V21.375H20.625C23.6719 21.375 26.25 18.8555 26.25 15.75V8.25H33.75Z" fill="#083A5E"></path>
                            </svg>

                        </div>
                        <div class="inner-content">
                            <h5 class="title">Social Media Content</h5>
                            <p class="disc">
                                Write a first draft. The first draft should be written in long-form, so don't worry about breaking up paragraphs.
                            </p>
                        </div>
                    </div>
                    <!-- ..:: single case three area end ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single case three area start ::.. -->
                    <div class="rts-single-case-three">
                        <div class="icon">

                            <svg width="30" height="27" viewBox="0 0 30 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 4.375C0 2.32422 1.64062 0.625 3.75 0.625H26.25C28.3008 0.625 30 2.32422 30 4.375V23.125C30 25.2344 28.3008 26.875 26.25 26.875H3.75C1.64062 26.875 0 25.2344 0 23.125V4.375ZM5.625 8.125C6.62109 8.125 7.5 7.30469 7.5 6.25C7.5 5.25391 6.62109 4.375 5.625 4.375C4.57031 4.375 3.75 5.25391 3.75 6.25C3.75 7.30469 4.57031 8.125 5.625 8.125ZM26.25 6.25C26.25 5.48828 25.6055 4.84375 24.8438 4.84375H10.7812C9.96094 4.84375 9.375 5.48828 9.375 6.25C9.375 7.07031 9.96094 7.65625 10.7812 7.65625H24.8438C25.6055 7.65625 26.25 7.07031 26.25 6.25Z" fill="#083A5E"></path>
                            </svg>

                        </div>
                        <div class="inner-content">
                            <h5 class="title">Website copy</h5>
                            <p class="disc">
                                Write a first draft. The first draft should be written in long-form, so don't worry about breaking up paragraphs.
                            </p>
                        </div>
                    </div>
                    <!-- ..:: single case three area end ::.. -->
                </div>
                <div class="col-lg-12">
                    <a href="#" class="rts-btn btn-primary mt--30 m-center">View All Use Cases</a>
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
                        <button class=" active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Monthly Pricing</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Annual Pricing</button>
                    </li>
                    <li class="save-badge">
                        <span>SAVE 25%</span>
                    </li>
                </ul>
                <div class="tab-content mt--20" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row g-5 mt--10">
                            <div class="col-lg-4">
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
                                        <p class="para">A premium pricing plan is a pricing <br> structure that is designed.</p>

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
                            <div class="col-lg-4">
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
                                        <p class="para">A premium pricing plan is a pricing <br> structure that is designed.</p>

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
                            <div class="col-lg-4">
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
                                        <p class="para">A premium pricing plan is a pricing <br> structure that is designed.</p>

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
                            <div class="col-lg-4">
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
                                        <p class="para">A premium pricing plan is a pricing <br> structure that is designed.</p>

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
                            <div class="col-lg-4">
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
                                        <p class="para">A premium pricing plan is a pricing <br> structure that is designed.</p>

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
                            <div class="col-lg-4">
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
                                        <p class="para">A premium pricing plan is a pricing <br> structure that is designed.</p>

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
                            please feel free to reach out to us. We are always happy to assist you and provide any additional.
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
    <!-- ..:: use case end ::.. -->

@endsection