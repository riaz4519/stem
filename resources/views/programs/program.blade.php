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
                                    <li>Modular – You can get to the point of building a page without writing a single line of CSS.</li>
                                    <li>Predictable – It doesn’t matter where you put the component, it’ll behave the same and look the same. It’s easy to write the code. You have systems in place for naming it. It’s more intuitive to write.</li>
                                    <li>Maintainable – It’s quick and easy to deal with. It won’t break other things on the site.</li>
                                    <li>Scalable – It’s hard to break and easy to build onto.</li>
                                    <li>Dry – It eliminates the need for copy and paste duplication in the CSS.</li>
                                    <li>Organized – There’s a place for everything.</li>
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
                        <p>We are excited to launch our new company and product Ooooh. After being featured in too many magazines to mention and having created an online stir, we know that Ooooh is going to be big. You may have seen us in the Dinosaurs’ Den where we were we told that we didn’t need them because we were already doing it so well ourselves.</p>
                        <table>
                            <tbody>
                            <tr>
                                <th>Client:</th>
                                <td>Omar Akil</td>
                            </tr>
                            <tr>
                                <th>Role:</th>
                                <td>Campus Images</td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="#">View Project</a>
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

                    <div class="col-lg-3 col-sm-6">
                        <div class="statistic-post">
                            <span class="timer" data-from="0" data-to="321"></span>
                            <p>cases <br> completed</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="statistic-post">
                            <span class="timer" data-from="0" data-to="200"></span>
                            <p>cases <br> completed</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="statistic-post">
                            <span class="timer" data-from="0" data-to="135"></span>
                            <p>cases <br> completed</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="statistic-post">
                            <span class="timer" data-from="0" data-to="28"></span>
                            <p>cases <br> completed</p>
                        </div>
                    </div>
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

                    <div class="col-lg-3 col-md-6">
                        <div class="course-post">
                            <div class="course-thumbnail-holder">
                                <a href="single-course.html">
                                    <img src="upload/courses/1.jpg" alt="">
                                </a>
                            </div>
                            <div class="course-content-holder">
                                <div class="course-content-main">
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
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="course-post">
                            <div class="course-thumbnail-holder">
                                <a href="single-course.html">
                                    <img src="upload/courses/2.jpg" alt="">
                                </a>
                            </div>
                            <div class="course-content-holder">
                                <div class="course-content-main">
                                    <h2 class="course-title">
                                        <a href="single-course.html">Special Education Needs Teaching</a>
                                    </h2>
                                    <div class="course-rating-teacher">
                                        <div class="star-rating has-ratings" title="Rated 5.00 out of 5">
												<span style="width:100%">
													<span class="rating">3.50</span>
													<span class="votes-number">2 Votes</span>
												</span>
                                        </div>
                                        <a href="#" class="course-loop-teacher">Leon Redding</a>
                                    </div>
                                </div>
                                <div class="course-content-bottom">
                                    <div class="course-students">
                                        <i class="material-icons">group</i>
                                        <span>134</span>
                                    </div>
                                    <div class="course-price">
                                        <span>£74.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="course-post">
                            <div class="course-thumbnail-holder">
                                <a href="single-course.html">
                                    <img src="upload/courses/3.jpg" alt="">
                                </a>
                            </div>
                            <div class="course-content-holder">
                                <div class="course-content-main">
                                    <h2 class="course-title">
                                        <a href="single-course.html">Environmental Science BTEC Course</a>
                                    </h2>
                                    <div class="course-rating-teacher">
                                        <div class="star-rating has-ratings" title="Rated 5.00 out of 5">
												<span style="width:100%">
													<span class="rating">No Votes</span>
												</span>
                                        </div>
                                        <a href="#" class="course-loop-teacher">Linda Castello</a>
                                    </div>
                                </div>
                                <div class="course-content-bottom">
                                    <div class="course-students">
                                        <i class="material-icons">group</i>
                                        <span>0</span>
                                    </div>
                                    <div class="course-price">
                                        <span>£18.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="course-post">
                            <div class="course-thumbnail-holder">
                                <a href="single-course.html">
                                    <img src="upload/courses/4.jpg" alt="">
                                </a>
                            </div>
                            <div class="course-content-holder">
                                <div class="course-content-main">
                                    <h2 class="course-title">
                                        <a href="single-course.html">Distance Learning MBA Management</a>
                                    </h2>
                                    <div class="course-rating-teacher">
                                        <div class="star-rating has-ratings" title="Rated 5.00 out of 5">
												<span style="width:100%">
													<span class="rating">4.50</span>
													<span class="votes-number">2 Votes</span>
												</span>
                                        </div>
                                        <a href="#" class="course-loop-teacher">Michael Arnett</a>
                                    </div>
                                </div>
                                <div class="course-content-bottom">
                                    <div class="course-students">
                                        <i class="material-icons">group</i>
                                        <span>263</span>
                                    </div>
                                    <div class="course-price">
                                        <span>£29.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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

                    <div class="video-box">
                        <div class="video-post">
                            <img src="{{ asset('stem/upload/video/video-poster-1.jpg') }}" alt="">
                            <div class="hover-post">
                                <h2>Marketing, Media and Advertising</h2>
                                <p>About Studioare</p>
                            </div>
                            <a class="video-link iframe" href="https://vimeo.com/97447862"><span><i class="fa fa-play"></i></span></a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>


@endsection
