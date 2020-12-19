@extends('layout.main')

@section('title','Our Story -1')

@section('content')
    <!-- page-banner-section
			================================================== -->
    <section class="page-banner-section">
        <div class="container">
            <h1>Event</h1>
            <ul class="page-depth">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a>Event</a></li>
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
                        <img src="{{ asset('storage/event/'.$event->image) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="project-details">
                        <h1>{{$event->title}}</h1>
                        <p>{{$event->about}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End portfolio section -->

    {{--participants--}}
    @if(!$event->eventparticipants->isEmpty())
    <section class="teachers-section">
        <div class="container">

            <div class="teachers-box">
                <h1>Participants</h1>
                <div class="row d-flex justify-content-center">
                    @foreach($event->eventparticipants as $eventparticipant)
                    <div class="col-lg-3 col-md-6">
                        <div class="teacher-post">
                            <a>
                                <img src="{{ asset('storage/event/participants/'.$eventparticipant->image)}}" alt="">
                                <div class="hover-post">
                                    <h2>{{$eventparticipant->name}}</h2>
                                    <span>{{$eventparticipant->profession}}</span>
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

    {{--objective--}}
    @if(!$event->eventobjectives->isEmpty())
    <section class="portfolio-section">
        <div class="container">
            <div class="row">
                @foreach($event->eventobjectives as $eventobjective)
                <div class="col-lg-12">
                    <div class="project-details">
                        <h1>Objective</h1>
                        <p>
                            {{$eventobjective->description}}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
    {{--end of objective--}}

    {{--photos--}}
    @if(!$event->eventphotos->isEmpty())
    <section class="blog-section">
        <div class="container">
            <h1>Photos</h1>
            <div class="blog-box">
                <div class="row d-flex justify-content-center">
                    @foreach($event->eventphotos as $eventphoto)
                    <div class="col-lg-3 col-md-6">
                        <div class="blog-post">
                            <a><img src="{{ asset('storage/event/photos/'.$eventphoto->image) }}" alt=""></a>
                            <div class="post-content">
                                <h2><a>{{$eventphoto->name}}</a></h2>
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
    @if(!$event->eventkeypoints->isEmpty())
    <section class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="blog-box">
                        <div class="blog-post single-post">


                            <div class="post-content">
                                <h2>It’s only natural. Entanglement happens.</h2>

                                <ul class="text-list">
                                    @foreach($event->eventkeypoints as $eventkeypoint)
                                        <li>{{$eventkeypoint->points}}</li>
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
    @if(!$event->eventvideos->isEmpty())
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
                    @foreach($event->eventvideos as $eventvideo)
                    <div class="video-box text-center">
                        <div class="video-post">
                            {!! $eventvideo->video !!}
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
    @if(!$event->eventmentors->isEmpty())
    <section class="teachers-section">
        <div class="container">

            <div class="teachers-box">
                <h1>Mentors</h1>
                <div class="row d-flex justify-content-center">
                    @foreach($event->eventmentors as $eventmentor)
                    <div class="col-lg-3 col-md-6">
                        <div class="teacher-post">
                            <a href="single-teacher.html">
                                <img src="{{ asset('storage/event/mentors/'.$eventmentor->image) }}" alt="">
                                <div class="hover-post">
                                    <h2>{{$eventmentor->name}}</h2>
                                    <span>{{$eventmentor->profession}}</span>
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
