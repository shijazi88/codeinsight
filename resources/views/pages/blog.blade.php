@extends('layout.layout1')

@php
    $headtitle='Blog Posts';
    $bodyClass='inner-page';
    $title = 'Blog Page';
    $subtitle = 'Blog Page';
@endphp

@section('content')

    <!-- ..:: rts blgo area start ::.. -->
    <div class="rts-blog-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single blog area start ::.. -->
                    <div class="single-blog-area-wrapper">
                        <a href="blog-details" class="thumbnail">
                            <img src="{{ asset('assets/images/blog/01.jpg') }}" alt="Blog_images">
                        </a>
                        <div class="inner-content">
                            <div class="head">
                                <span class="tag">Content Write</span>
                                <span class="time">7 min Read</span>
                            </div>
                            <div class="body">
                                <a href="blog-details">
                                    <h5 class="title">Five Things You Need to Know
                                        about Writing Articles</h5>
                                </a>
                                <div class="author-area">
                                    <div class="author">
                                        <img src="{{ asset('assets/images/blog/04.png') }}" alt="blog-area">
                                        <div class="info">
                                            <p>samuel</p>
                                            <span>Author</span>
                                        </div>
                                    </div>
                                    <a href="blog-details">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ..:: single blog area end ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single blog area start ::.. -->
                    <div class="single-blog-area-wrapper">
                        <a href="blog-details" class="thumbnail">
                            <img src="{{ asset('assets/images/blog/02.jpg') }}" alt="Blog_images">
                        </a>
                        <div class="inner-content">
                            <div class="head">
                                <span class="tag">blog Content</span>
                                <span class="time">4 min Read</span>
                            </div>
                            <div class="body">
                                <a href="blog-details">
                                    <h5 class="title">15 AI Prompts to Supercharge
                                        Sales &amp; Marketing Teams</h5>
                                </a>
                                <div class="author-area">
                                    <div class="author">
                                        <img src="{{ asset('assets/images/blog/05.png') }}" alt="blog-area">
                                        <div class="info">
                                            <p>samuel</p>
                                            <span>Author</span>
                                        </div>
                                    </div>
                                    <a href="blog-details">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ..:: single blog area end ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single blog area start ::.. -->
                    <div class="single-blog-area-wrapper">
                        <a href="blog-details" class="thumbnail">
                            <img src="{{ asset('assets/images/blog/03.jpg') }}" alt="Blog_images">
                        </a>
                        <div class="inner-content">
                            <div class="head">
                                <span class="tag">Content Write</span>
                                <span class="time">7 min Read</span>
                            </div>
                            <div class="body">
                                <a href="blog-details">
                                    <h5 class="title">Introducing Infobase by Copy
                                        ai: Your Team’s Brand Center</h5>
                                </a>
                                <div class="author-area">
                                    <div class="author">
                                        <img src="{{ asset('assets/images/blog/06.png') }}" alt="blog-area">
                                        <div class="info">
                                            <p>samuel</p>
                                            <span>Author</span>
                                        </div>
                                    </div>
                                    <a href="blog-details">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ..:: single blog area end ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single blog area start ::.. -->
                    <div class="single-blog-area-wrapper">
                        <a href="blog-details" class="thumbnail">
                            <img src="{{ asset('assets/images/blog/04.jpg') }}" alt="Blog_images">
                        </a>
                        <div class="inner-content">
                            <div class="head">
                                <span class="tag">Content Write</span>
                                <span class="time">7 min Read</span>
                            </div>
                            <div class="body">
                                <a href="blog-details">
                                    <h5 class="title">Five Things You Need to Know
                                        about Writing Articles</h5>
                                </a>
                                <div class="author-area">
                                    <div class="author">
                                        <img src="{{ asset('assets/images/blog/04.png') }}" alt="blog-area">
                                        <div class="info">
                                            <p>samuel</p>
                                            <span>Author</span>
                                        </div>
                                    </div>
                                    <a href="blog-details">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ..:: single blog area end ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single blog area start ::.. -->
                    <div class="single-blog-area-wrapper">
                        <a href="blog-details" class="thumbnail">
                            <img src="{{ asset('assets/images/blog/05.jpg') }}" alt="Blog_images">
                        </a>
                        <div class="inner-content">
                            <div class="head">
                                <span class="tag">blog Content</span>
                                <span class="time">4 min Read</span>
                            </div>
                            <div class="body">
                                <a href="blog-details">
                                    <h5 class="title">15 AI Prompts to Supercharge
                                        Sales &amp; Marketing Teams</h5>
                                </a>
                                <div class="author-area">
                                    <div class="author">
                                        <img src="{{ asset('assets/images/blog/05.png') }}" alt="blog-area">
                                        <div class="info">
                                            <p>samuel</p>
                                            <span>Author</span>
                                        </div>
                                    </div>
                                    <a href="blog-details">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ..:: single blog area end ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single blog area start ::.. -->
                    <div class="single-blog-area-wrapper">
                        <a href="blog-details" class="thumbnail">
                            <img src="{{ asset('assets/images/blog/06.jpg') }}" alt="Blog_images">
                        </a>
                        <div class="inner-content">
                            <div class="head">
                                <span class="tag">Content Write</span>
                                <span class="time">7 min Read</span>
                            </div>
                            <div class="body">
                                <a href="blog-details">
                                    <h5 class="title">Introducing Infobase by Copy
                                        ai: Your Team’s Brand Center</h5>
                                </a>
                                <div class="author-area">
                                    <div class="author">
                                        <img src="{{ asset('assets/images/blog/06.png') }}" alt="blog-area">
                                        <div class="info">
                                            <p>samuel</p>
                                            <span>Author</span>
                                        </div>
                                    </div>
                                    <a href="blog-details">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ..:: single blog area end ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single blog area start ::.. -->
                    <div class="single-blog-area-wrapper">
                        <a href="blog-details" class="thumbnail">
                            <img src="{{ asset('assets/images/blog/07.jpg') }}" alt="Blog_images">
                        </a>
                        <div class="inner-content">
                            <div class="head">
                                <span class="tag">Content Write</span>
                                <span class="time">7 min Read</span>
                            </div>
                            <div class="body">
                                <a href="blog-details">
                                    <h5 class="title">Five Things You Need to Know
                                        about Writing Articles</h5>
                                </a>
                                <div class="author-area">
                                    <div class="author">
                                        <img src="{{ asset('assets/images/blog/04.png') }}" alt="blog-area">
                                        <div class="info">
                                            <p>samuel</p>
                                            <span>Author</span>
                                        </div>
                                    </div>
                                    <a href="blog-details">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ..:: single blog area end ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single blog area start ::.. -->
                    <div class="single-blog-area-wrapper">
                        <a href="blog-details" class="thumbnail">
                            <img src="{{ asset('assets/images/blog/08.jpg') }}" alt="Blog_images">
                        </a>
                        <div class="inner-content">
                            <div class="head">
                                <span class="tag">blog Content</span>
                                <span class="time">4 min Read</span>
                            </div>
                            <div class="body">
                                <a href="blog-details">
                                    <h5 class="title">15 AI Prompts to Supercharge
                                        Sales &amp; Marketing Teams</h5>
                                </a>
                                <div class="author-area">
                                    <div class="author">
                                        <img src="{{ asset('assets/images/blog/05.png') }}" alt="blog-area">
                                        <div class="info">
                                            <p>samuel</p>
                                            <span>Author</span>
                                        </div>
                                    </div>
                                    <a href="blog-details">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ..:: single blog area end ::.. -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- ..:: single blog area start ::.. -->
                    <div class="single-blog-area-wrapper">
                        <a href="blog-details" class="thumbnail">
                            <img src="{{ asset('assets/images/blog/09.jpg') }}" alt="Blog_images">
                        </a>
                        <div class="inner-content">
                            <div class="head">
                                <span class="tag">Content Write</span>
                                <span class="time">7 min Read</span>
                            </div>
                            <div class="body">
                                <a href="blog-details">
                                    <h5 class="title">Introducing Infobase by Copy
                                        ai: Your Team’s Brand Center</h5>
                                </a>
                                <div class="author-area">
                                    <div class="author">
                                        <img src="{{ asset('assets/images/blog/06.png') }}" alt="blog-area">
                                        <div class="info">
                                            <p>samuel</p>
                                            <span>Author</span>
                                        </div>
                                    </div>
                                    <a href="blog-details">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ..:: single blog area end ::.. -->
                </div>
            </div>
        </div>
    </div>
    <!-- ..:: rts blgo area end ::.. -->

@endsection
