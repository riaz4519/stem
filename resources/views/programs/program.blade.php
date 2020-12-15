@extends('layout.main')

@section('title','Program-1')
@section('content')

    <!-- page-banner-section
			================================================== -->
    <section class="page-banner-section">
        <div class="container">
            <h1>{{ $program->title }} </h1>
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

    @if(!$program->programkeypoints->isEmpty())
    <section class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="blog-box">
                        <div class="blog-post single-post">


                            <div class="post-content">
                                <h2>It’s only natural. Entanglement happens.</h2>

                                <ul class="text-list">
                                    @foreach($program->programkeypoints as $row)
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
    @endif
    <!-- portfolio-section
    ================================================== -->
    @if(!$program->programobjectives->isEmpty())
    <section class="portfolio-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="project-details">
                        <h1>Objective</h1>
                        @foreach($program->programobjectives as $row)
                            <p>{{$row->description}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- End portfolio section -->
    @if(!$program->programcases->isEmpty())
    <section class="statistic-section">
        <div class="container">
            <div class="statistic-box">
                <div class="row">
                        @foreach($program->programcases as $row)
                            
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
                </div>
            </div>
        </div>
    </section>
    @endif

    @if(!$program->popularcourses->isEmpty())
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
                <div class="row d-flex justify-content-center">
                    @foreach($program->popularcourses as $popularcourse)
                    <div class="col-lg-3 col-md-6">
                        <div class="course-post">
                            <div class="course-thumbnail-holder">
                                <div>
                                    <img src="{{asset('storage/program/popularcourse/'.$popularcourse->image)}}" alt="">
                                </div>
                            </div>
                            <div class="course-content-holder">
                                
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    @endif

    @if(!$program->programvideos->isEmpty())
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
                    @foreach($program->programvideos as $row)
                    <div class="video-box text-center">
                        <div class="video-post">
                            {!! $row->video !!}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
    @endif

    @if(!$program->events->isEmpty())
    <section class="popular-courses-section">
        <div class="container">
            <div class="title-section">
                <div class="left-part">
                    <span>Events</span>
                    <h1>Program Events</h1>
                </div>
            </div>

            <div class="popular-courses-box">
                <div class="row">
                    @foreach($program->events as $event)
                    <div class="col-lg-3 col-md-6">
                        <div class="course-post">
                            <div class="course-thumbnail-holder">
                                <a href="{{route('event.single',$event->id)}}">
                                    <img src="{{asset('storage/event/'.$event->image)}}" alt="">
                                </a>
                            </div>
                            <div class="course-content-holder">
                                <div class="course-content-bottom">
                                    <div class="course-students">
                                        <span>{{$event->title}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    @endif

    @if(!$program->competitions->isEmpty())
    <section class="popular-courses-section">
        <div class="container">
            <div class="title-section">
                <div class="left-part">
                    <span>Competition</span>
                    <h1>Program Competitions</h1>
                </div>
            </div>

            <div class="popular-courses-box">
                <div class="row">
                    @foreach($program->competitions as $competition)
                    <div class="col-lg-3 col-md-6">
                        <div class="course-post">
                            <div class="course-thumbnail-holder">
                                <a href="{{route('competition.single',$competition->id)}}">
                                    <img src="{{asset('storage/competition/'.$competition->image)}}" alt="">
                                </a>
                            </div>
                            <div class="course-content-holder">
                                <div class="course-content-bottom">
                                    <div class="course-students">
                                        <span>{{$competition->title}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    @endif

@endsection
