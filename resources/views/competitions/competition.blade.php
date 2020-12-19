@extends('layout.main')

@section('title','Competition')

@section('content')
    <!-- page-banner-section
			================================================== -->
    <section class="page-banner-section">
        <div class="container">
            <h1>Competition </h1>
            <ul class="page-depth">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="#">Competition</a></li>
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
                        <div>
                            <img src="{{ asset('storage/competition/'.$competition->image) }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="project-details">
                        <h1>{{$competition->title}}</h1>
                        <p>{{$competition->about}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End portfolio section -->

    {{--participants--}}
    @if(!$competition->competitionparticipants->isEmpty())
    <section class="teachers-section">
        <div class="container">

            <div class="teachers-box">
                <h1>Participants</h1>
                <div class="row d-flex justify-content-center">
                    @foreach($competition->competitionparticipants as $competitionparticipant)
                    <div class="col-lg-3 col-md-6">
                        <div class="teacher-post">
                            <a>
                                <img src="{{ asset('storage/competition/participants/'.$competitionparticipant->image) }}" alt="">
                                <div class="hover-post">
                                    <h2>{{$competitionparticipant->name}}</h2>
                                    <span>{{$competitionparticipant->profession}}</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
    @endif
    {{--end of participants--}}

    @if(!$competition->competitionwinners->isEmpty())
    <section class="blog-section">
        <div class="container">
            <h1>winners</h1>
            <div class="blog-box">
                <div class="row d-flex justify-content-center">
                    @foreach($competition->competitionwinners as $competitionwinner)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-post">
                            <a><img src="{{ asset('storage/competition/winner/'.$competitionwinner->image) }}" alt=""></a>
                            <div class="post-content">
                                <a class="category" href="#">{{$competitionwinner->why}}</a>
                                <h2><a>{{$competitionwinner->name}}</a></h2>
                                <div class="post-meta date">
                                    {{$competitionwinner->position}}
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

    {{--objective--}}
    @if(!$competition->competitionobjectives->isEmpty())
    <section class="portfolio-section">
        <div class="container">
            <div class="row">
                @foreach($competition->competitionobjectives as $competitionobjective)
                <div class="col-lg-12">
                    <div class="project-details">
                        <h1>Objective</h1>
                        <p>{{$competitionobjective->description}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
    {{--end of objective--}}

    {{--photos--}}
    @if(!$competition->competitionphotos->isEmpty())
    <section class="blog-section">

        <div class="container">
            <h1>Photos</h1>
            <div class="blog-box">

                <div class="row d-flex justify-content-center">
                    @foreach($competition->competitionphotos as $competitionphoto)
                    <div class="col-lg-3 col-md-6">
                        <div class="blog-post">
                            <a><img src="{{ asset('storage/competition/photos/'.$competitionphoto->image) }}" alt=""></a>
                            <div class="post-content">
                                <h2><a>{{$competitionphoto->name}}</a></h2>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif
    {{--end of photos--}}

    {{--outcome--}}
    @if(!$competition->competitionkeypoints->isEmpty())
    <section class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="blog-box">
                        <div class="blog-post single-post">

                            <div class="post-content">
                                <h2>It’s only natural. Entanglement happens.</h2>
                                <ul class="text-list">
                                    @foreach($competition->competitionkeypoints as $row)
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
    {{--end of outcome--}}

    {{--videos--}}
    @if(!$competition->competitionvideos->isEmpty())
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
                    @foreach($competition->competitionvideos as $video)
                    <div class="video-box">
                        <div class="video-post text-center">
                            {!! $video->video !!}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
    @endif
    {{--end of videos--}}

    {{--mentors--}}
    @if(!$competition->competitionmentors->isEmpty())
    <section class="teachers-section">
        <div class="container">

            <div class="teachers-box">
                <h1>Judge</h1>
                <div class="row">
                    @foreach($competition->competitionmentors as $mentor)
                    <div class="col-lg-3 col-md-6">
                        <div class="teacher-post">
                            <a href="single-teacher.html">
                                <img src="{{ asset('storage/competition/mentors/'.$mentor->image) }}" alt="">
                                <div class="hover-post">
                                    <h2>{{$mentor->name}}</h2>
                                    <span>{{$mentor->profession}}</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif
    {{--end of mentors--}}
@endsection
