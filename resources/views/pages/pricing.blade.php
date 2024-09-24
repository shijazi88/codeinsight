@extends('layout.layout1')

@php
    $headtitle = 'Pricing Table';
    $bodyClass = 'index-three';
    $title = 'Pricing Plan';
    $subtitle = 'Pricing Plan';
@endphp

@section('content')
    <!-- ..:: pricing table three area start ::.. -->
    <div class="pricing-table-three-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-center-three">
                        <span class="pre">Pricing</span>
                        <h2 class="title">Start your content <br>
                            writing with AI</h2>
                    </div>
                </div>
            </div>
            <div class="row mt--10 g-5">
                <div class="col-lg-12">
                    <!-- ..:: pricing tabs area ::.. -->
                    <ul class="nav nav-button-area-main nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Monthly</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile"
                                aria-selected="false">Annually</button>
                        </li>
                    </ul>
                    <!-- ..:: pricing tabs area end ::.. -->
                </div>
            </div>
            <div class="row mt--30">
                <div class="col-lg-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row g-5">
                                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                    <!-- ..:: single pricing title start-->
                                    <div class="signle-pricing-main-con-three left-area">
                                        <div class="thumbnail-img">
                                            <img src="{{ asset('assets/images/testimonials/01.png') }}" alt="">
                                        </div>
                                        <div class="content-text">
                                            <!-- ..:: single ::.. -->
                                            <div class="single-con">
                                                <div class="icon">
                                                    <svg width="23" height="17" viewBox="0 0 23 17" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M18 0.5C19.2305 0.5 20.25 1.51953 20.25 2.75V5.03516C19.6875 5.10547 19.1953 5.35156 18.7734 5.77344L12.4102 12.1367C12.1289 12.418 11.918 12.7695 11.8125 13.1914L11.6016 14H2.25C0.984375 14 0 13.0156 0 11.75V2.75C0 1.51953 0.984375 0.5 2.25 0.5H18ZM3.9375 8.375C3.62109 8.375 3.375 8.65625 3.375 8.9375C3.375 9.25391 3.62109 9.5 3.9375 9.5H11.8125C12.0938 9.5 12.375 9.25391 12.375 8.9375C12.375 8.65625 12.0938 8.375 11.8125 8.375H3.9375ZM3.9375 6.125H15.1875C15.4688 6.125 15.75 5.87891 15.75 5.5625C15.75 5.28125 15.4688 5 15.1875 5H3.9375C3.62109 5 3.375 5.28125 3.375 5.5625C3.375 5.87891 3.62109 6.125 3.9375 6.125ZM22.0781 7.07422C22.6055 7.60156 22.6055 8.48047 22.0781 9.04297L21.0234 10.0977L18.5273 7.60156L19.582 6.54688C20.1094 6.01953 21.0234 6.01953 21.5508 6.54688L22.0781 7.07422ZM13.1836 12.9102L17.7539 8.375L20.25 10.8711L15.6797 15.4062C15.5391 15.5469 15.3633 15.6523 15.1875 15.7227L13.043 16.25C12.8672 16.2852 12.6562 16.25 12.5156 16.1094C12.375 15.9688 12.3398 15.7578 12.375 15.5469L12.9023 13.4375C12.9375 13.2617 13.043 13.0859 13.1836 12.9102Z"
                                                            fill="#083A5E" />
                                                    </svg>
                                                </div>
                                                <p>10,000 <span> Monthly Word Limit</span> </p>
                                            </div>
                                            <!-- ..:: single end ::.. -->
                                            <!-- ..:: single ::.. -->
                                            <div class="single-con">
                                                <div class="icon">
                                                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.15625 0.460938C8.68359 0.214844 9.28125 0.214844 9.80859 0.460938L17.5078 4.01172C17.7891 4.15234 18 4.43359 18 4.75C18 5.10156 17.7891 5.38281 17.5078 5.52344L9.80859 9.07422C9.28125 9.32031 8.68359 9.32031 8.15625 9.07422L0.457031 5.52344C0.175781 5.38281 0 5.10156 0 4.75C0 4.43359 0.175781 4.15234 0.457031 4.01172L8.15625 0.460938ZM17.5078 8.51172C17.7891 8.65234 18 8.93359 18 9.25C18 9.60156 17.7891 9.88281 17.5078 10.0234L9.80859 13.5742C9.28125 13.8203 8.68359 13.8203 8.15625 13.5742L0.457031 10.0234C0.175781 9.88281 0 9.60156 0 9.25C0 8.93359 0.175781 8.65234 0.457031 8.51172L2.35547 7.63281L7.69922 10.0938C8.50781 10.4805 9.45703 10.4805 10.2656 10.0938L15.6094 7.63281L17.5078 8.51172ZM10.2656 14.5938L15.6094 12.1328L17.5078 13.0117C17.7891 13.1523 18 13.4336 18 13.75C18 14.1016 17.7891 14.3828 17.5078 14.5234L9.80859 18.0742C9.28125 18.3203 8.68359 18.3203 8.15625 18.0742L0.457031 14.5234C0.175781 14.3828 0 14.1016 0 13.75C0 13.4336 0.175781 13.1523 0.457031 13.0117L2.35547 12.1328L7.69922 14.5938C8.50781 14.9805 9.45703 14.9805 10.2656 14.5938Z"
                                                            fill="#083A5E" />
                                                    </svg>
                                                </div>
                                                <p>10+ Templates</p>
                                            </div>
                                            <!-- ..:: single end ::.. -->
                                            <!-- ..:: single ::.. -->
                                            <div class="single-con">
                                                <div class="icon">
                                                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.6367 8.16016C12.3555 8.16016 12.0742 8.19531 11.793 8.26562L8.875 5.34766C8.875 5.06641 8.875 4.78516 8.91016 4.50391C9.22656 2.53516 10.7383 0.882812 12.707 0.425781C13.5508 0.214844 14.3594 0.214844 15.0977 0.390625C15.4844 0.496094 15.625 0.988281 15.3438 1.26953L12.918 3.69531V6.29688H15.5547L17.9805 3.90625C18.2617 3.625 18.7539 3.73047 18.8594 4.11719C19.0352 4.85547 19.0352 5.69922 18.8242 6.54297C18.4727 8.05469 17.3828 9.28516 15.9766 9.91797L15.2734 9.25C14.5703 8.54688 13.6562 8.16016 12.6367 8.16016ZM14.5 10.0586L18.6133 14.1016C19.1055 14.6289 19.1055 15.4727 18.6133 15.9648L16.75 17.8281C16.2227 18.3203 15.4141 18.3203 14.8867 17.8281L10.7734 13.7148C9.96484 12.9062 9.82422 11.6758 10.2812 10.6914L6.55469 6.96484H4.375L1 2.5L3.25 0.25L7.71484 3.625V5.80469L11.4766 9.56641C12.4609 9.10938 13.6562 9.25 14.5 10.0586ZM8.98047 11.043C8.80469 11.8516 8.91016 12.6602 9.22656 13.3984L5.04297 17.582C4.58594 18.0391 3.95312 18.25 3.35547 18.25C2.75781 18.25 2.125 18.0391 1.66797 17.582C0.753906 16.6328 0.753906 15.1562 1.66797 14.207L6.90625 8.96875L8.98047 11.043ZM3.25 16.8438C3.70703 16.8438 4.09375 16.4922 4.09375 16C4.09375 15.543 3.70703 15.1562 3.25 15.1562C2.75781 15.1562 2.40625 15.543 2.40625 16C2.40625 16.4922 2.75781 16.8438 3.25 16.8438Z"
                                                            fill="#083A5E" />
                                                    </svg>
                                                </div>
                                                <p>Advance Editor Tool</p>
                                            </div>
                                            <!-- ..:: single end ::.. -->
                                            <!-- ..:: single ::.. -->
                                            <div class="single-con">
                                                <div class="icon">
                                                    <svg width="23" height="14" viewBox="0 0 23 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.75 4.01562C16.1367 4.01562 16.4531 4.33203 16.4531 4.71875V4.85938H18.5625C18.9492 4.85938 19.2656 5.17578 19.2656 5.5625C19.2656 5.94922 18.9492 6.26562 18.5625 6.26562H18.4922L18.4219 6.44141C18.1055 7.28516 17.6133 8.09375 17.0156 8.72656C17.0508 8.76172 17.0859 8.76172 17.1211 8.79688L17.7891 9.18359C18.1055 9.39453 18.2109 9.81641 18.0352 10.168C17.8242 10.4844 17.4023 10.5898 17.0508 10.4141L16.3828 9.99219C16.2422 9.92188 16.0664 9.81641 15.9258 9.71094C15.5742 9.95703 15.1523 10.2031 14.7305 10.3789L14.625 10.4492C14.2734 10.5898 13.8516 10.4492 13.6758 10.0977C13.5352 9.71094 13.6758 9.32422 14.0273 9.14844L14.168 9.11328C14.3789 9.00781 14.625 8.86719 14.8359 8.76172L14.3789 8.33984C14.1328 8.05859 14.1328 7.60156 14.3789 7.32031C14.6602 7.03906 15.1172 7.03906 15.3984 7.32031L15.8906 7.84766H15.9258C16.3477 7.39062 16.6992 6.86328 16.9805 6.26562H13.2188C12.7969 6.26562 12.5156 5.94922 12.5156 5.5625C12.5156 5.17578 12.7969 4.85938 13.2188 4.85938H15.0469V4.71875C15.0469 4.33203 15.3281 4.01562 15.75 4.01562ZM5.625 6.47656L6.29297 7.95312H4.92188L5.625 6.47656ZM0 2.75C0 1.51953 0.984375 0.5 2.25 0.5H20.25C21.4805 0.5 22.5 1.51953 22.5 2.75V11.75C22.5 13.0156 21.4805 14 20.25 14H2.25C0.984375 14 0 13.0156 0 11.75V2.75ZM11.25 11.75H20.25V2.75H11.25V11.75ZM6.25781 4.4375C6.15234 4.19141 5.87109 4.01562 5.625 4.01562C5.34375 4.01562 5.0625 4.19141 4.95703 4.4375L2.70703 9.5C2.56641 9.85156 2.70703 10.2734 3.05859 10.4492C3.41016 10.5898 3.83203 10.4492 4.00781 10.0977L4.32422 9.35938H6.89062L7.20703 10.0977C7.38281 10.4492 7.80469 10.5898 8.15625 10.4492C8.50781 10.2734 8.64844 9.85156 8.50781 9.5L6.25781 4.4375Z"
                                                            fill="#083A5E" />
                                                    </svg>
                                                </div>
                                                <p>30+ Languages </p>
                                            </div>
                                            <!-- ..:: single end ::.. -->
                                            <!-- ..:: single ::.. -->
                                            <div class="single-con">
                                                <div class="icon">
                                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M1.63281 12.625L5.46484 10.9727C5.92188 10.7969 6.44922 10.9023 6.73047 11.2891L8.27734 13.1875C10.7383 11.9922 12.707 10.0234 13.9023 7.5625L12.0039 6.01562C11.6172 5.73438 11.5117 5.20703 11.6875 4.75L13.3398 0.917969C13.5508 0.460938 14.0781 0.179688 14.5703 0.285156L18.1211 1.12891C18.6484 1.23438 18.9648 1.65625 18.9648 2.18359C18.9648 11.043 11.7578 18.2852 2.89844 18.2852C2.37109 18.2852 1.94922 17.9336 1.84375 17.4062L1 13.8906C0.894531 13.3633 1.17578 12.8359 1.63281 12.625Z"
                                                            fill="#083A5E" />
                                                    </svg>
                                                </div>
                                                <p>Regular Technical Support</p>
                                            </div>
                                            <!-- ..:: single end ::.. -->
                                        </div>
                                    </div>
                                    <!-- ..:: single pricing title end ::.. -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                    <div class="single-prcing-three-main-wrapper">
                                        <div class="head-area">
                                            <span class="pre">Simple Plan</span>
                                            <h2 class="title">Free<span>/month</span> </h2>
                                        </div>
                                        <div class="body">
                                            <p class="disc">A simple pricing plan includes a set of clearly defined
                                                pricing tiers.</p>
                                            <div class="check-only">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="check-only">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="check-only">
                                                <i class="fa-light fa-xmark"></i>
                                            </div>
                                            <div class="check-only">
                                                <p>30+ Languages</p>
                                            </div>
                                            <div class="check-only">
                                                <i class="fa-light fa-xmark"></i>
                                            </div>
                                            <a href="#" class="rts-btn btn-border">Sing Up For Free</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                    <div class="single-prcing-three-main-wrapper active">
                                        <div class="head-area">
                                            <span class="pre">Premium</span>
                                            <h2 class="title">$199<span>/month</span> </h2>
                                        </div>
                                        <div class="body">
                                            <p class="disc">A simple pricing plan includes a set of clearly defined
                                                pricing tiers.</p>
                                            <div class="check-only">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="check-only">
                                                <p>90+ Templates</p>
                                            </div>
                                            <div class="check-only">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="check-only">
                                                <p>60+ Languages</p>
                                            </div>
                                            <div class="check-only">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <a href="#" class="rts-btn btn-border">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                    <div class="single-prcing-three-main-wrapper">
                                        <div class="head-area">
                                            <span class="pre">Popular Plan</span>
                                            <h2 class="title">$99<span>/month</span> </h2>
                                        </div>
                                        <div class="body">
                                            <p class="disc">A simple pricing plan includes a set of clearly defined
                                                pricing tiers.</p>
                                            <div class="check-only">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="check-only">
                                                <p>30+ Templates</p>
                                            </div>
                                            <div class="check-only">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="check-only">
                                                <p>40+ Languages</p>
                                            </div>
                                            <div class="check-only">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <a href="#" class="rts-btn btn-border">Request a Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row g-5">
                                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                    <!-- ..:: single pricing title start-->
                                    <div class="signle-pricing-main-con-three left-area">
                                        <div class="thumbnail-img">
                                            <img src="{{ asset('assets/images/testimonials/01.png') }}" alt="">
                                        </div>
                                        <div class="content-text">
                                            <!-- ..:: single ::.. -->
                                            <div class="single-con">
                                                <div class="icon">
                                                    <svg width="23" height="17" viewBox="0 0 23 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M18 0.5C19.2305 0.5 20.25 1.51953 20.25 2.75V5.03516C19.6875 5.10547 19.1953 5.35156 18.7734 5.77344L12.4102 12.1367C12.1289 12.418 11.918 12.7695 11.8125 13.1914L11.6016 14H2.25C0.984375 14 0 13.0156 0 11.75V2.75C0 1.51953 0.984375 0.5 2.25 0.5H18ZM3.9375 8.375C3.62109 8.375 3.375 8.65625 3.375 8.9375C3.375 9.25391 3.62109 9.5 3.9375 9.5H11.8125C12.0938 9.5 12.375 9.25391 12.375 8.9375C12.375 8.65625 12.0938 8.375 11.8125 8.375H3.9375ZM3.9375 6.125H15.1875C15.4688 6.125 15.75 5.87891 15.75 5.5625C15.75 5.28125 15.4688 5 15.1875 5H3.9375C3.62109 5 3.375 5.28125 3.375 5.5625C3.375 5.87891 3.62109 6.125 3.9375 6.125ZM22.0781 7.07422C22.6055 7.60156 22.6055 8.48047 22.0781 9.04297L21.0234 10.0977L18.5273 7.60156L19.582 6.54688C20.1094 6.01953 21.0234 6.01953 21.5508 6.54688L22.0781 7.07422ZM13.1836 12.9102L17.7539 8.375L20.25 10.8711L15.6797 15.4062C15.5391 15.5469 15.3633 15.6523 15.1875 15.7227L13.043 16.25C12.8672 16.2852 12.6562 16.25 12.5156 16.1094C12.375 15.9688 12.3398 15.7578 12.375 15.5469L12.9023 13.4375C12.9375 13.2617 13.043 13.0859 13.1836 12.9102Z"
                                                            fill="#083A5E" />
                                                    </svg>
                                                </div>
                                                <p>10,000 <span> Monthly Word Limit</span> </p>
                                            </div>
                                            <!-- ..:: single end ::.. -->
                                            <!-- ..:: single ::.. -->
                                            <div class="single-con">
                                                <div class="icon">
                                                    <svg width="18" height="19" viewBox="0 0 18 19"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.15625 0.460938C8.68359 0.214844 9.28125 0.214844 9.80859 0.460938L17.5078 4.01172C17.7891 4.15234 18 4.43359 18 4.75C18 5.10156 17.7891 5.38281 17.5078 5.52344L9.80859 9.07422C9.28125 9.32031 8.68359 9.32031 8.15625 9.07422L0.457031 5.52344C0.175781 5.38281 0 5.10156 0 4.75C0 4.43359 0.175781 4.15234 0.457031 4.01172L8.15625 0.460938ZM17.5078 8.51172C17.7891 8.65234 18 8.93359 18 9.25C18 9.60156 17.7891 9.88281 17.5078 10.0234L9.80859 13.5742C9.28125 13.8203 8.68359 13.8203 8.15625 13.5742L0.457031 10.0234C0.175781 9.88281 0 9.60156 0 9.25C0 8.93359 0.175781 8.65234 0.457031 8.51172L2.35547 7.63281L7.69922 10.0938C8.50781 10.4805 9.45703 10.4805 10.2656 10.0938L15.6094 7.63281L17.5078 8.51172ZM10.2656 14.5938L15.6094 12.1328L17.5078 13.0117C17.7891 13.1523 18 13.4336 18 13.75C18 14.1016 17.7891 14.3828 17.5078 14.5234L9.80859 18.0742C9.28125 18.3203 8.68359 18.3203 8.15625 18.0742L0.457031 14.5234C0.175781 14.3828 0 14.1016 0 13.75C0 13.4336 0.175781 13.1523 0.457031 13.0117L2.35547 12.1328L7.69922 14.5938C8.50781 14.9805 9.45703 14.9805 10.2656 14.5938Z"
                                                            fill="#083A5E" />
                                                    </svg>
                                                </div>
                                                <p>10+ Templates</p>
                                            </div>
                                            <!-- ..:: single end ::.. -->
                                            <!-- ..:: single ::.. -->
                                            <div class="single-con">
                                                <div class="icon">
                                                    <svg width="20" height="19" viewBox="0 0 20 19"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.6367 8.16016C12.3555 8.16016 12.0742 8.19531 11.793 8.26562L8.875 5.34766C8.875 5.06641 8.875 4.78516 8.91016 4.50391C9.22656 2.53516 10.7383 0.882812 12.707 0.425781C13.5508 0.214844 14.3594 0.214844 15.0977 0.390625C15.4844 0.496094 15.625 0.988281 15.3438 1.26953L12.918 3.69531V6.29688H15.5547L17.9805 3.90625C18.2617 3.625 18.7539 3.73047 18.8594 4.11719C19.0352 4.85547 19.0352 5.69922 18.8242 6.54297C18.4727 8.05469 17.3828 9.28516 15.9766 9.91797L15.2734 9.25C14.5703 8.54688 13.6562 8.16016 12.6367 8.16016ZM14.5 10.0586L18.6133 14.1016C19.1055 14.6289 19.1055 15.4727 18.6133 15.9648L16.75 17.8281C16.2227 18.3203 15.4141 18.3203 14.8867 17.8281L10.7734 13.7148C9.96484 12.9062 9.82422 11.6758 10.2812 10.6914L6.55469 6.96484H4.375L1 2.5L3.25 0.25L7.71484 3.625V5.80469L11.4766 9.56641C12.4609 9.10938 13.6562 9.25 14.5 10.0586ZM8.98047 11.043C8.80469 11.8516 8.91016 12.6602 9.22656 13.3984L5.04297 17.582C4.58594 18.0391 3.95312 18.25 3.35547 18.25C2.75781 18.25 2.125 18.0391 1.66797 17.582C0.753906 16.6328 0.753906 15.1562 1.66797 14.207L6.90625 8.96875L8.98047 11.043ZM3.25 16.8438C3.70703 16.8438 4.09375 16.4922 4.09375 16C4.09375 15.543 3.70703 15.1562 3.25 15.1562C2.75781 15.1562 2.40625 15.543 2.40625 16C2.40625 16.4922 2.75781 16.8438 3.25 16.8438Z"
                                                            fill="#083A5E" />
                                                    </svg>
                                                </div>
                                                <p>Advance Editor Tool</p>
                                            </div>
                                            <!-- ..:: single end ::.. -->
                                            <!-- ..:: single ::.. -->
                                            <div class="single-con">
                                                <div class="icon">
                                                    <svg width="23" height="14" viewBox="0 0 23 14"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.75 4.01562C16.1367 4.01562 16.4531 4.33203 16.4531 4.71875V4.85938H18.5625C18.9492 4.85938 19.2656 5.17578 19.2656 5.5625C19.2656 5.94922 18.9492 6.26562 18.5625 6.26562H18.4922L18.4219 6.44141C18.1055 7.28516 17.6133 8.09375 17.0156 8.72656C17.0508 8.76172 17.0859 8.76172 17.1211 8.79688L17.7891 9.18359C18.1055 9.39453 18.2109 9.81641 18.0352 10.168C17.8242 10.4844 17.4023 10.5898 17.0508 10.4141L16.3828 9.99219C16.2422 9.92188 16.0664 9.81641 15.9258 9.71094C15.5742 9.95703 15.1523 10.2031 14.7305 10.3789L14.625 10.4492C14.2734 10.5898 13.8516 10.4492 13.6758 10.0977C13.5352 9.71094 13.6758 9.32422 14.0273 9.14844L14.168 9.11328C14.3789 9.00781 14.625 8.86719 14.8359 8.76172L14.3789 8.33984C14.1328 8.05859 14.1328 7.60156 14.3789 7.32031C14.6602 7.03906 15.1172 7.03906 15.3984 7.32031L15.8906 7.84766H15.9258C16.3477 7.39062 16.6992 6.86328 16.9805 6.26562H13.2188C12.7969 6.26562 12.5156 5.94922 12.5156 5.5625C12.5156 5.17578 12.7969 4.85938 13.2188 4.85938H15.0469V4.71875C15.0469 4.33203 15.3281 4.01562 15.75 4.01562ZM5.625 6.47656L6.29297 7.95312H4.92188L5.625 6.47656ZM0 2.75C0 1.51953 0.984375 0.5 2.25 0.5H20.25C21.4805 0.5 22.5 1.51953 22.5 2.75V11.75C22.5 13.0156 21.4805 14 20.25 14H2.25C0.984375 14 0 13.0156 0 11.75V2.75ZM11.25 11.75H20.25V2.75H11.25V11.75ZM6.25781 4.4375C6.15234 4.19141 5.87109 4.01562 5.625 4.01562C5.34375 4.01562 5.0625 4.19141 4.95703 4.4375L2.70703 9.5C2.56641 9.85156 2.70703 10.2734 3.05859 10.4492C3.41016 10.5898 3.83203 10.4492 4.00781 10.0977L4.32422 9.35938H6.89062L7.20703 10.0977C7.38281 10.4492 7.80469 10.5898 8.15625 10.4492C8.50781 10.2734 8.64844 9.85156 8.50781 9.5L6.25781 4.4375Z"
                                                            fill="#083A5E" />
                                                    </svg>
                                                </div>
                                                <p>30+ Languages </p>
                                            </div>
                                            <!-- ..:: single end ::.. -->
                                            <!-- ..:: single ::.. -->
                                            <div class="single-con">
                                                <div class="icon">
                                                    <svg width="19" height="19" viewBox="0 0 19 19"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M1.63281 12.625L5.46484 10.9727C5.92188 10.7969 6.44922 10.9023 6.73047 11.2891L8.27734 13.1875C10.7383 11.9922 12.707 10.0234 13.9023 7.5625L12.0039 6.01562C11.6172 5.73438 11.5117 5.20703 11.6875 4.75L13.3398 0.917969C13.5508 0.460938 14.0781 0.179688 14.5703 0.285156L18.1211 1.12891C18.6484 1.23438 18.9648 1.65625 18.9648 2.18359C18.9648 11.043 11.7578 18.2852 2.89844 18.2852C2.37109 18.2852 1.94922 17.9336 1.84375 17.4062L1 13.8906C0.894531 13.3633 1.17578 12.8359 1.63281 12.625Z"
                                                            fill="#083A5E" />
                                                    </svg>
                                                </div>
                                                <p>Regular Technical Support</p>
                                            </div>
                                            <!-- ..:: single end ::.. -->
                                        </div>
                                    </div>
                                    <!-- ..:: single pricing title end ::.. -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                    <div class="single-prcing-three-main-wrapper">
                                        <div class="head-area">
                                            <span class="pre">Simple Plan</span>
                                            <h2 class="title">Free<span>/month</span> </h2>
                                        </div>
                                        <div class="body">
                                            <p class="disc">A simple pricing plan includes a set of clearly defined
                                                pricing tiers.</p>
                                            <div class="check-only">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="check-only">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="check-only">
                                                <i class="fa-light fa-xmark"></i>
                                            </div>
                                            <div class="check-only">
                                                <p>30+ Languages</p>
                                            </div>
                                            <div class="check-only">
                                                <i class="fa-light fa-xmark"></i>
                                            </div>
                                            <a href="#" class="rts-btn btn-border">Sing Up For Free</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                    <div class="single-prcing-three-main-wrapper active">
                                        <div class="head-area">
                                            <span class="pre">Premium</span>
                                            <h2 class="title">$199<span>/month</span> </h2>
                                        </div>
                                        <div class="body">
                                            <p class="disc">A simple pricing plan includes a set of clearly defined
                                                pricing tiers.</p>
                                            <div class="check-only">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="check-only">
                                                <p>90+ Templates</p>
                                            </div>
                                            <div class="check-only">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="check-only">
                                                <p>60+ Languages</p>
                                            </div>
                                            <div class="check-only">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <a href="#" class="rts-btn btn-border">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                    <div class="single-prcing-three-main-wrapper">
                                        <div class="head-area">
                                            <span class="pre">Popular Plan</span>
                                            <h2 class="title">$99<span>/month</span> </h2>
                                        </div>
                                        <div class="body">
                                            <p class="disc">A simple pricing plan includes a set of clearly defined
                                                pricing tiers.</p>
                                            <div class="check-only">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="check-only">
                                                <p>30+ Templates</p>
                                            </div>
                                            <div class="check-only">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="check-only">
                                                <p>40+ Languages</p>
                                            </div>
                                            <div class="check-only">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <a href="#" class="rts-btn btn-border">Request a Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: pricing table three area end ::.. -->

    <!-- ..:: accordion area start ::.. -->
    <div class="rts-faq-area rts-section-gapBottom bg_faq">
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
    <!-- ..:: accordion area end ::.. -->
@endsection
