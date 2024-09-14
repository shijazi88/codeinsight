@extends('layout.layout1')

@php
    $headtitle='Reset Password';
    $bodyClass='inner-page';
    $title = 'Reset Password';
    $subtitle = 'Reset Password';
@endphp

@section('content')

    <!-- ..:: rtsa reset area start ::.. -->
    <div class="rts-reset-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-form-s-wrapper text-start ptb--120 ptb_sm--50">
                        <div class="head">
                            <h5 class="title">Reset Your Password</h5>
                            <p class="mb--20">Strong passwords include numbers, letters, and
                                punctuation marks.</p>
                        </div>
                        <div class="body">
                            <form action="#">
                                <div class="input-wrapper">
                                    <input type="email" placeholder="Enter your mail" required>
                                </div>
                                <div class="check-wrapper">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            I agree to privacy policy & terms
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="rts-btn btn-primary">Send Reset Link</button>
                                <p><a href="{{ route('login') }}"><i class="fa-solid fa-arrow-left"></i> Back to Login</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: rtsa reset area end ::.. -->

@endsection