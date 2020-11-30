@extends('layout.main')

@section('title','Our Work')

@section('content')
    <!-- page-banner-section
			================================================== -->
    <section class="page-banner-section">
        <div class="container">
            <h1>Our Work</h1>
            <ul class="page-depth">
                <li><a href="{{ url('/') }}">Stem</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="{{ route('about_us.our_work') }}">Our Work</a></li>
            </ul>
        </div>
    </section>
    <!-- End page-banner-section -->

    <!-- about-section
        ================================================== -->
    <section class="about-section">
        <div class="container">
            @foreach($ourworks as $ourwork)
                @if($loop->iteration % 2 == 0)
                    <div class="about-article">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{ asset('storage/ourwork/'.$ourwork->image) }}" style="height: 300px; object-fit:cover;" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="article-content">
                                    <i class="fa fa-file-text-o"></i>
                                    <h2>{{$ourwork->title}}</h2>
                                    <p>{{$ourwork->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="about-article">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="article-content right-align">
                                    <i class="fa fa-university"></i>
                                    <h2>{{$ourwork->title}}</h2>
                                    <p>{{$ourwork->description}}</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img src="{{ asset('storage/ourwork/'.$ourwork->image) }}" style="height: 300px; object-fit:cover;" alt="">
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
            

        </div>
    </section>
    <!-- End about section -->

    <section class="about-section">
        <div class="container">
            <div class="about-article">
                @foreach($ourworkswithoutimages as $row)
                <div class="row">

                    <div class="col-lg-12">
                        <div class="article-content">
                            <div class="text-center">
                                <i class="fa fa-umbrella"></i>
                                <h2>{{$row->title}}</h2>
                            </div>
                            <p>{{$row->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
