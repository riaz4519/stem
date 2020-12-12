
@extends('layout.main')

@section('title','Our People')

@section('content')


    <!-- page-banner-section
			================================================== -->
    <section class="page-banner-section">
        <div class="container">
            <h1>Our People</h1>
            <ul class="page-depth">
                <li><a href="{{ url('/') }}">Stem</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="{{ route('about_us.our_people') }}">Our People</a></li>
            </ul>
        </div>
    </section>
    <!-- End page-banner-section -->

    <!-- blog-section
        ================================================== -->
    <section class="blog-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-5">
                    <div class="sidebar">


                        <div class="category-widget widget">
                            <h2>Categories</h2>
                            <ul class="category-list">
                                @foreach($categories as $category)
                                    <li><a href="{{route('category.people',$category->id)}}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-lg-8 col-md-7">

                    <div class="blog-box">
                        <div class="row">

                            @foreach($ourpeoples as $ourpeople)
                            <div class="col-lg-6">
                                <div class="blog-post">
                                    <a class="d-flex"><img src="{{asset('storage/ourpeople/'.$ourpeople->image)}}" style="object-fit: contain; height: 255px;" alt=""></a>
                                    <div class="post-content">
                                        <a class="category">{{$ourpeople->peoplecategory->name}}</a>
                                        <h2><a>{{$ourpeople->name}}</a></h2>
                                        <div class="post-meta date">
                                            {{--  --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End blog section -->

    @endsection
