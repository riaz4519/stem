@extends('layout.main')

@section('title','Our Story')

@section('content')
    <section class="page-banner-section">
        <div class="container">
            <h1>Our Story</h1>
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

                        @foreach($ourstories as $ourstory)
                        <div class="events-post">
                            <div class="event-inner-content">
                                <div class="top-part">
                                    <div class="date-holder">
                                        <div class="date">
                                            <span class="date-day">{{ Carbon\Carbon::parse($ourstory->date)->format('d')}}</span>
                                            <span class="date-month">{{Carbon\Carbon::parse($ourstory->date)->format('M')}}</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="event-meta">
												<span class="event-meta-piece start-time">
													<i class="material-icons">access_time</i> {{$ourstory->fromtime}} - {{$ourstory->totime}}
												</span>
                                            <span class="event-meta-piece location">
													<i class="material-icons">location_on</i> {{$ourstory->location}}
												</span>
                                        </div>
                                        <h2 class="title"><a href="#">Summer High School Journalism Camp Registration Form</a></h2>
                                    </div>
                                    <a href="#" class="events-image"><img src="{{ asset('stem/upload/events/events7.jpg') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                        {{$ourstories->links()}}
                        

                    </div>
                </div>



            </div>

        </div>
    </section>
@endsection
