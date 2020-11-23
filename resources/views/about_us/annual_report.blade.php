@extends('layout.main')

@section('title','Annual Report')


@section('content')
    <!-- page-banner-section
			================================================== -->
    <section class="page-banner-section">
        <div class="container">
            <h1>Annual Report</h1>
            <ul class="page-depth">
                <li><a href="{{ url('/') }}">Stem</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="{{ route('about_us.annual_report') }}">Annual Report</a></li>
            </ul>
        </div>
    </section>
    <!-- End page-banner-section -->

    <!-- portfolio-section
        ================================================== -->
    <section class="portfolio-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="portfolio-box iso-call">

                        <div class="project-post university">
                            <div class="inner-project">
                                <div class="image-holder">
                                    <img src="{{ asset('stem/upload/portfolio/portfolio-image-1.jpg') }}" alt="">
                                    <a href="single-project.html">
                                        <i class="material-icons">arrow_forward</i>
                                    </a>
                                </div>
                                <div class="content-holder">
                                    <h2><a href="single-project.html">Spring Events and Courses</a></h2>
                                    <span>Nature of University</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-post students">
                            <div class="inner-project">
                                <div class="image-holder">
                                    <img src="{{ asset('stem/upload/portfolio/portfolio-image-1.jpg') }}" alt="">
                                    <a href="single-project.html">
                                        <i class="material-icons">arrow_forward</i>
                                    </a>
                                </div>
                                <div class="content-holder">
                                    <h2><a href="single-project.html">Southeastern Art</a></h2>
                                    <span>Students Learning</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-post travelling">
                            <div class="inner-project">
                                <div class="image-holder">
                                    <img src="{{ asset('stem/upload/portfolio/portfolio-image-1.jpg') }}" alt="">
                                    <a href="single-project.html">
                                        <i class="material-icons">arrow_forward</i>
                                    </a>
                                </div>
                                <div class="content-holder">
                                    <h2><a href="single-project.html">Beauty of Bucknell</a></h2>
                                    <span>Travelling with Teachers</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-post students">
                            <div class="inner-project">
                                <div class="image-holder">
                                    <img src="{{ asset('stem/upload/portfolio/portfolio-image-1.jpg') }}" alt="">
                                    <a href="single-project.html">
                                        <i class="material-icons">arrow_forward</i>
                                    </a>
                                </div>
                                <div class="content-holder">
                                    <h2><a href="single-project.html">Close-up Hand and Exam</a></h2>
                                    <span>Students Learning</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-post campus">
                            <div class="inner-project">
                                <div class="image-holder">
                                    <img src="{{ asset('stem/upload/portfolio/portfolio-image-1.jpg') }}" alt="">
                                    <a href="single-project.html">
                                        <i class="material-icons">arrow_forward</i>
                                    </a>
                                </div>
                                <div class="content-holder">
                                    <h2><a href="single-project.html">2018 Faculty Biennial</a></h2>
                                    <span>Campus Images</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-post travelling">
                            <div class="inner-project">
                                <div class="image-holder">
                                    <img src="{{ asset('stem/upload/portfolio/portfolio-image-1.jpg') }}" alt="">
                                    <a href="single-project.html">
                                        <i class="material-icons">arrow_forward</i>
                                    </a>
                                </div>
                                <div class="content-holder">
                                    <h2><a href="single-project.html">Juried Student Exhibition</a></h2>
                                    <span>Travelling with Teachers</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-post university">
                            <div class="inner-project">
                                <div class="image-holder">
                                    <img src="{{ asset('stem/upload/portfolio/portfolio-image-1.jpg') }}" alt="">
                                    <a href="single-project.html">
                                        <i class="material-icons">arrow_forward</i>
                                    </a>
                                </div>
                                <div class="content-holder">
                                    <h2><a href="single-project.html">Students Looking Resource</a></h2>
                                    <span>Nature of University</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-post students">
                            <div class="inner-project">
                                <div class="image-holder">
                                    <img src="{{ asset('stem/upload/portfolio/portfolio-image-1.jpg') }}" alt="">
                                    <a href="single-project.html">
                                        <i class="material-icons">arrow_forward</i>
                                    </a>
                                </div>
                                <div class="content-holder">
                                    <h2><a href="single-project.html">Spring Events and Courses</a></h2>
                                    <span>Students Learning</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-post campus">
                            <div class="inner-project">
                                <div class="image-holder">
                                    <img src="{{ asset('stem/upload/portfolio/portfolio-image-1.jpg') }}" alt="">
                                    <a href="single-project.html">
                                        <i class="material-icons">arrow_forward</i>
                                    </a>
                                </div>
                                <div class="content-holder">
                                    <h2><a href="single-project.html">Access to Photography</a></h2>
                                    <span>Campus Images</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End portfolio section -->
@endsection
