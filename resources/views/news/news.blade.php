@extends('layout.main')

@section('title','News')


@section('content')
    <!-- page-banner-section
			================================================== -->
    <section class="page-banner-section">
        <div class="container">
            <h1>News</h1>
            <ul class="page-depth">
                <li><a href="{{ url('/') }}">Stem</a></li>
                <li><a href="{{ route('all.news') }}">News</a></li>
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

                        @foreach($allnews as $news)
                        <div class="project-post university">
                            <div class="inner-project">
                                <div class="image-holder">
                                    <img src="{{asset('storage/news/'.$news->image)}}" alt="">
                                </div>
                                <div class="content-holder">
                                    <h2>{{$news->news_title}}</h2>
                                    <span>{{$news->date}}</span>
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
