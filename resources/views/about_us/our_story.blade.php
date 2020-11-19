@extends('layout.main')

@section('title','Our Story')

@section('content')
    <section class="page-banner-section">
        <div class="container">
            <h1>Events</h1>
            <ul class="page-depth">
                <li><a href="{{ url('/') }}">Stem</a></li>
                <li><a href="#">About US.</a></li>
                <li><a href="{{ route('about_us.our_story') }}">Our Story</a></li>
            </ul>
        </div>
    </section>
    <!-- End page-banner-section -->

    <!-- events-section
        ================================================== -->
    <section class="events-section events-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="events-box">

                        <div class="events-post">
                            <div class="event-inner-content">
                                <div class="top-part">
                                    <div class="date-holder">
                                        <div class="date">
                                            <span class="date-day">22</span>
                                            <span class="date-month">Oct</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="event-meta">
												<span class="event-meta-piece start-time">
													<i class="material-icons">access_time</i> 6:00 am - 12:00 pm
												</span>
                                            <span class="event-meta-piece location">
													<i class="material-icons">location_on</i> New York , US of America
												</span>
                                        </div>
                                        <h2 class="title"><a href="single-event.html">Summer High School Journalism Camp Registration Form</a></h2>
                                    </div>
                                    <a href="single-event.html" class="events-image"><img src="{{ asset('stem/upload/events/events7.jpg') }}" alt=""></a>
                                </div>
                            </div>
                        </div>

                        <div class="events-post">
                            <div class="event-inner-content">
                                <div class="top-part">
                                    <div class="date-holder">
                                        <div class="date">
                                            <span class="date-day">14</span>
                                            <span class="date-month">Dec</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="event-meta">
												<span class="event-meta-piece start-time">
													<i class="material-icons">access_time</i> 2:00 am - 5:00 am
												</span>
                                            <span class="event-meta-piece location">
													<i class="material-icons">location_on</i> New York , US of America
												</span>
                                        </div>
                                        <h2 class="title"><a href="single-event.html">Board of Regents Campus Live and Community Forum</a></h2>
                                    </div>
                                    <a href="single-event.html" class="events-image"><img src="{{ asset('stem/upload/events/events7.jpg') }}" alt=""></a>

                                </div>
                            </div>
                        </div>

                        <div class="events-post">
                            <div class="event-inner-content">
                                <div class="top-part">
                                    <div class="date-holder">
                                        <div class="date">
                                            <span class="date-day">17</span>
                                            <span class="date-month">Dec</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="event-meta">
												<span class="event-meta-piece start-time">
													<i class="material-icons">access_time</i> 2:00 am - 8:00 am
												</span>
                                            <span class="event-meta-piece location">
													<i class="material-icons">location_on</i> New York , US of America
												</span>
                                        </div>
                                        <h2 class="title"><a href="single-event.html">May Professional Development Diversity and Inclusion Series</a></h2>
                                    </div>
                                    <a href="single-event.html" class="events-image"><img src="{{ asset('stem/upload/events/events7.jpg') }}" alt=""></a>

                                </div>
                            </div>
                        </div>

                        <div class="events-post">
                            <div class="event-inner-content">
                                <div class="top-part">
                                    <div class="date-holder">
                                        <div class="date">
                                            <span class="date-day">22</span>
                                            <span class="date-month">Oct</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="event-meta">
												<span class="event-meta-piece start-time">
													<i class="material-icons">access_time</i> 6:00 am - 12:00 pm
												</span>
                                            <span class="event-meta-piece location">
													<i class="material-icons">location_on</i> New York , US of America
												</span>
                                        </div>
                                        <h2 class="title"><a href="single-event.html">Summer High School Journalism Camp Registration Form</a></h2>
                                    </div>
                                    <a href="single-event.html" class="events-image"><img src="{{ asset('stem/upload/events/events7.jpg') }}" alt=""></a>

                                </div>
                            </div>
                        </div>

                        <div class="events-post">
                            <div class="event-inner-content">
                                <div class="top-part">
                                    <div class="date-holder">
                                        <div class="date">
                                            <span class="date-day">14</span>
                                            <span class="date-month">Dec</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="event-meta">
												<span class="event-meta-piece start-time">
													<i class="material-icons">access_time</i> 2:00 am - 5:00 am
												</span>
                                            <span class="event-meta-piece location">
													<i class="material-icons">location_on</i> New York , US of America
												</span>
                                        </div>
                                        <h2 class="title"><a href="single-event.html">Board of Regents Campus Live and Community Forum</a></h2>
                                    </div>
                                    <a href="single-event.html" class="events-image"><img src="{{ asset('stem/upload/events/events7.jpg') }}" alt=""></a>

                                </div>
                            </div>
                        </div>

                        <div class="events-post">
                            <div class="event-inner-content">
                                <div class="top-part">
                                    <div class="date-holder">
                                        <div class="date">
                                            <span class="date-day">17</span>
                                            <span class="date-month">Dec</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="event-meta">
												<span class="event-meta-piece start-time">
													<i class="material-icons">access_time</i> 2:00 am - 8:00 am
												</span>
                                            <span class="event-meta-piece location">
													<i class="material-icons">location_on</i> New York , US of America
												</span>
                                        </div>
                                        <h2 class="title"><a href="single-event.html">May Professional Development Diversity and Inclusion Series</a></h2>
                                    </div>
                                    <a href="single-event.html" class="events-image"><img src="{{ asset('stem/upload/events/events7.jpg') }}" alt=""></a>

                                </div>
                            </div>
                        </div>

                        <div class="events-post">
                            <div class="event-inner-content">
                                <div class="top-part">
                                    <div class="date-holder">
                                        <div class="date">
                                            <span class="date-day">22</span>
                                            <span class="date-month">Oct</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="event-meta">
												<span class="event-meta-piece start-time">
													<i class="material-icons">access_time</i> 6:00 am - 12:00 pm
												</span>
                                            <span class="event-meta-piece location">
													<i class="material-icons">location_on</i> New York , US of America
												</span>
                                        </div>
                                        <h2 class="title"><a href="single-event.html">Summer High School Journalism Camp Registration Form</a></h2>
                                    </div>
                                    <a href="single-event.html" class="events-image"><img src="{{ asset('stem/upload/events/events7.jpg') }}" alt=""></a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>



            </div>

        </div>
    </section>
@endsection
