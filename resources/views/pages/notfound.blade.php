@extends('layout.layout1')

@php
    $headtitle='Page Not Found';
    $bodyClass='inner-page';
    $title = 'Page Not Found';
    $subtitle = 'Page Not Found';
@endphp

@section('content')

    <!-- ..:: rts not found area start ::.. -->
    <div class="rts-not-found-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="thumbanail-404 text-center">
                        <img src="{{ asset('assets/images/case/03.png') }}" alt="not-found">
                        <div class="wrapper-para mt--45">
                            <h3 class="title">Page Not Found</h3>
                            <p class="disc">
                                We're sorry, the page you requested could not be found <br> please go back to the homepage
                            </p>
                            <a href="#" class="rts-btn btn-primary">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: rts not found area end ::.. -->
     
@endsection