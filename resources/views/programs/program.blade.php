@extends('layout.main')

@section('title','Program-1')
@section('content')

    <!-- page-banner-section
			================================================== -->
    <section class="page-banner-section">
        <div class="container">
            <h1>Title of the program </h1>
            <ul class="page-depth">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="#">Programs</a></li>
                <li><a href="{{ route('program.single',$program->id) }}">{{ $program->title }}</a></li>
            </ul>
        </div>
    </section>
    <!-- End page-banner-section -->

    <!-- portfolio-section
        ================================================== -->
    <section class="portfolio-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="project-image">

                        <img src="{{asset('storage/program/'.$program->image)}}" alt="">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="project-details">
                        <h1>{{ ucfirst($program->title) }}</h1>
                        <p>{{ $program->about }}</p>

                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- End portfolio section -->

    <section class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="blog-box">
                        <div class="blog-post single-post">


                            <div class="post-content">
                                <h2>It’s only natural. Entanglement happens.</h2>

                                <ul class="text-list">
                                    @foreach($program_key_points as $row)
                                    <li>{{$row->points}}</li>
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- portfolio-section
    ================================================== -->
    <section class="portfolio-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="project-details">
                        <h1>Objective</h1>
                        @foreach($programobjectives as $row)
                            <p>{{$row->description}}</p>
                        @endforeach
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- End portfolio section -->
    <section class="statistic-section">
        <div class="container">
            <div class="statistic-box">
                <div class="row">

                    @if(isset($programcountlists))
                        @foreach($programcountlists as $row)
                            
                            @if($row->no_of_participants)
                                <div class="col-lg-3 col-sm-6">
                                    <div class="statistic-post">
                                        <span class="timer" data-from="0" data-to="{{$row->no_of_participants}}"></span>
                                        <p>No. of <br> Participants</p>
                                    </div>
                                </div>
                            @endif

                            @if($row->no_of_applicants)
                                <div class="col-lg-3 col-sm-6">
                                    <div class="statistic-post">
                                        <span class="timer" data-from="0" data-to="{{$row->no_of_applicants}}"></span>
                                        <p>No. of <br> Applicants</p>
                                    </div>
                                </div>
                            @endif

                            @if($row->no_of_mentors)
                                <div class="col-lg-3 col-sm-6">
                                    <div class="statistic-post">
                                        <span class="timer" data-from="0" data-to="{{$row->no_of_mentors}}"></span>
                                        <p>No. of <br> Mentors</p>
                                    </div>
                                </div>
                            @endif

                            @if($row->no_of_casestudies)
                                <div class="col-lg-3 col-sm-6">
                                    <div class="statistic-post">
                                        <span class="timer" data-from="0" data-to="{{$row->no_of_casestudies}}"></span>
                                        <p>No. of <br> Case Studies</p>
                                    </div>
                                </div>
                            @endif

                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="popular-courses-section">
        <div class="container">
            <div class="title-section">
                <div class="left-part">
                    <span>Education</span>
                    <h1>Popular Courses</h1>
                </div>
                <div class="right-part">
                    <a class="button-one" href="#">View All Courses</a>
                </div>
            </div>
            <div class="popular-courses-box">
                <div class="row">
                    @foreach($popularcourses as $popularcourse)
                    <div class="col-lg-3 col-md-6">
                        <div class="course-post">
                            <div class="course-thumbnail-holder">
                                <a href="single-course.html">
                                    <img src="{{asset('storage/program/popularcourse/'.$popularcourse->image)}}" alt="">
                                </a>
                            </div>
                            <div class="course-content-holder">
                                {{-- <div class="course-content-main">
                                    <h2 class="course-title">
                                        <a href="single-course.html">Introduction Web Design with HTML</a>
                                    </h2>
                                    <div class="course-rating-teacher">
                                        <div class="star-rating has-ratings" title="Rated 5.00 out of 5">
												<span style="width:100%">
													<span class="rating">5.00</span>
													<span class="votes-number">1 Votes</span>
												</span>
                                        </div>
                                        <a href="#" class="course-loop-teacher">Duha Samra</a>
                                    </div>
                                </div>
                                <div class="course-content-bottom">
                                    <div class="course-students">
                                        <i class="material-icons">group</i>
                                        <span>64</span>
                                    </div>
                                    <div class="course-price">
                                        <span>£244</span>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <section class="events-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="title-section">
                        <div class="left-part">
                            <span>Watch Video</span>
                            <h1>Learn Anywhere</h1>
                        </div>
                    </div>
                    @foreach($videos as $row)
                    <div class="video-box text-center">
                        <div class="video-post">
                            <div class="embed-responsive embed-responsive-16by9">
                                <video controls="true" width="500" height="300" class="embed-responsive-item">
                                <source src="{{ asset('storage/program/video/'.$row->video) }}" type="video/mp4" />
                                </video>
                            </div>
                            <a class="video-link iframe"><span><i class="fa fa-play"></i></span></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>


@endsection
