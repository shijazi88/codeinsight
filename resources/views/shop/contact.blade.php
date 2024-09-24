@extends('layout.layout1')

@php
    $headtitle = 'Contact Us';
    $bodyClass = 'inner-page';
    $title = 'Contact Us';
    $subtitle = 'Contact Us';
@endphp

@section('content')
    <!-- ..:: rts contact form are start ::.. -->
    <div class="rts-contact-form-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-12">
                    <div id="form-messages"></div>
                    <!-- ..:: left contact form ::.. -->
                    <form id="contact-form" class="contact-page-form" action="mailer method="post">
                        <h3 class="title">Get In Touch</h3>
                        <!-- ..:: ingle input start ::.. -->
                        <div class="single-input">
                            <label for="name">Your Name</label>
                            <input id="name" name="name" type="text" placeholder="Enter you full name" required>
                            <i class="fa-regular fa-user"></i>
                        </div>
                        <!-- ..:: single input end ::.. -->
                        <!-- ..:: ingle input start ::.. -->
                        <div class="single-input">
                            <label for="email">Your Email Address</label>
                            <input id="email" name="email" type="email" placeholder="CodeInsights@info.com">
                            <i class="fa-light fa-envelope"></i>
                        </div>
                        <!-- ..:: single input end ::.. -->
                        <!-- ..:: ingle input start ::.. -->
                        <div class="single-input">
                            <label for="textarea">Enter Your Message</label>
                            <textarea name="message" id="textarea" placeholder="Write here your details message"></textarea>
                            <i class="fa-light fa-marker"></i>
                        </div>
                        <!-- ..:: single input end ::.. -->
                        <button class="rts-btn btn-primary">Send Message</button>
                    </form>
                    <!-- ..:: left contact form end ::.. -->
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="map-area-start">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7302.196316307801!2d90.41794101531372!3d23.779518703573338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1684403774021!5m2!1sen!2sbd"
                            height="520" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: rts contact form are end ::.. -->

    <!-- ..:: contact single card area start ::.. -->
    <div class="card-contact-page-area rts-section-gapBottom">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single contact card area start ::.. -->
                    <div class="single-card-area-wrapper">
                        <h5 class="title">Sales</h5>
                        <p class="dsic">Need help? Our support team is available to answer of 24x7</p>
                        <a href="#" class="rts-btn btn-primary">Talk To Us <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <!-- ..:: single contact card area end ::.. -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single contact card area start ::.. -->
                    <div class="single-card-area-wrapper">
                        <h5 class="title">24X7 Support</h5>
                        <p class="dsic">Need help? Our support team is available to answer of 24x7</p>
                        <a href="#" class="rts-btn btn-primary">Talk To Us <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <!-- ..:: single contact card area end ::.. -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single contact card area start ::.. -->
                    <div class="single-card-area-wrapper">
                        <h5 class="title">Partnership</h5>
                        <p class="dsic">Partner with us? Reach out and we'll explore all opportunities.</p>
                        <a href="#" class="rts-btn btn-primary">Talk To Us <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <!-- ..:: single contact card area end ::.. -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single contact card area start ::.. -->
                    <div class="single-card-area-wrapper">
                        <h5 class="title">Request Demo</h5>
                        <p class="dsic">Have an out of the box idea for a new AI Demo to add.</p>
                        <a href="#" class="rts-btn btn-primary">Talk To Us <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <!-- ..:: single contact card area end ::.. -->
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: contact single card area end ::.. -->
@endsection
