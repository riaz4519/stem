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

                        @foreach($annualreports as $row)
                        <div class="project-post university">
                            <div class="inner-project">
                                <div class="image-holder">
                                    <img src="{{asset('storage/annualreport/'.$row->image)}}" alt="">
                                </div>
                                <div class="content-holder">
                                    <h2>{{$row->report_title}}</h2>
                                    <span>{{$row->date}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End portfolio section -->
@endsection
