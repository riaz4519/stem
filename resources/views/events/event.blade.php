@extends('layout.main')

@section('title','Our Story -1')

@section('content')
    <!-- page-banner-section
			================================================== -->
    <section class="page-banner-section">
        <div class="container">
            <h1>Our Story </h1>
            <ul class="page-depth">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="#">Our Story</a></li>
                <li><a href="#">Our Story Title</a></li>
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
                        <img src="{{ asset('stem/upload/portfolio/portfolio-image-1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="project-details">
                        <h1>Our Story Title Here</h1>
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

    {{--participants--}}
    <section class="teachers-section">
        <div class="container">

            <div class="teachers-box">
                <h1>Participants</h1>
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="teacher-post">
                            <a href="single-teacher.html">
                                <img src="{{ asset('stem/upload/teachers/teacher6.jpg') }}" alt="">
                                <div class="hover-post">
                                    <h2>Michael Arnet</h2>
                                    <span>Photographer</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="teacher-post">
                            <a href="single-teacher.html">
                                <img src="{{ asset('stem/upload/teachers/teacher6.jpg') }}" alt="">
                                <div class="hover-post">
                                    <h2>Michael Arnet</h2>
                                    <span>Photographer</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="teacher-post">
                            <a href="single-teacher.html">
                                <img src="{{ asset('stem/upload/teachers/teacher6.jpg') }}" alt="">
                                <div class="hover-post">
                                    <h2>Michael Arnet</h2>
                                    <span>Photographer</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="teacher-post">
                            <a href="single-teacher.html">
                                <img src="{{ asset('stem/upload/teachers/teacher6.jpg') }}" alt="">
                                <div class="hover-post">
                                    <h2>Michael Arnet</h2>
                                    <span>Photographer</span>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="teacher-post">
                            <a href="single-teacher.html">
                                <img src="{{ asset('stem/upload/teachers/teacher6.jpg') }}" alt="">
                                <div class="hover-post">
                                    <h2>Michael Arnet</h2>
                                    <span>Photographer</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="teacher-post">
                            <a href="single-teacher.html">
                                <img src="{{ asset('stem/upload/teachers/teacher6.jpg') }}" alt="">
                                <div class="hover-post">
                                    <h2>Michael Arnet</h2>
                                    <span>Photographer</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="teacher-post">
                            <a href="single-teacher.html">
                                <img src="{{ asset('stem/upload/teachers/teacher6.jpg') }}" alt="">
                                <div class="hover-post">
                                    <h2>Michael Arnet</h2>
                                    <span>Photographer</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="teacher-post">
                            <a href="single-teacher.html">
                                <img src="{{ asset('stem/upload/teachers/teacher6.jpg') }}" alt="">
                                <div class="hover-post">
                                    <h2>Michael Arnet</h2>
                                    <span>Photographer</span>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    {{--end of participants--}}

    {{--objective--}}
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

    {{--end of objective--}}

    {{--photos--}}

    <section class="blog-section">

        <div class="container">
            <h1>Photos</h1>
            <div class="blog-box">

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="blog-post">
                            <a href="single-post.html"><img src="{{ asset('stem/upload/blog/blog-image-1.jpg') }}" alt=""></a>
                            <div class="post-content">

                                <h2><a href="single-post.html">Couple Of Happy College Students Graduated</a></h2>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="blog-post">
                            <a href="single-post.html"><img src="{{ asset('stem/upload/blog/blog-image-1.jpg') }}" alt=""></a>
                            <div class="post-content">

                                <h2><a href="single-post.html">Couple Of Happy College Students Graduated</a></h2>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="blog-post">
                            <a href="single-post.html"><img src="{{ asset('stem/upload/blog/blog-image-1.jpg') }}" alt=""></a>
                            <div class="post-content">

                                <h2><a href="single-post.html">Couple Of Happy College Students Graduated</a></h2>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="blog-post">
                            <a href="single-post.html"><img src="{{ asset('stem/upload/blog/blog-image-1.jpg') }}" alt=""></a>
                            <div class="post-content">

                                <h2><a href="single-post.html">Couple Of Happy College Students Graduated</a></h2>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="blog-post">
                            <a href="single-post.html"><img src="{{ asset('stem/upload/blog/blog-image-1.jpg') }}" alt=""></a>
                            <div class="post-content">

                                <h2><a href="single-post.html">Couple Of Happy College Students Graduated</a></h2>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="blog-post">
                            <a href="single-post.html"><img src="{{ asset('stem/upload/blog/blog-image-1.jpg') }}" alt=""></a>
                            <div class="post-content">

                                <h2><a href="single-post.html">Couple Of Happy College Students Graduated</a></h2>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="blog-post">
                            <a href="single-post.html"><img src="{{ asset('stem/upload/blog/blog-image-1.jpg') }}" alt=""></a>
                            <div class="post-content">

                                <h2><a href="single-post.html">Couple Of Happy College Students Graduated</a></h2>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="blog-post">
                            <a href="single-post.html"><img src="{{ asset('stem/upload/blog/blog-image-1.jpg') }}" alt=""></a>
                            <div class="post-content">

                                <h2><a href="single-post.html">Couple Of Happy College Students Graduated</a></h2>

                            </div>
                        </div>
                    </div>





                </div>


            </div>

        </div>
    </section>

    {{--end of photos--}}

    {{--outcome--}}
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
    {{--end of outcome--}}

    {{--videos--}}

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
    {{--end of videos--}}

    {{--mentors--}}
    <section class="teachers-section">
        <div class="container">

            <div class="teachers-box">
                <h1>Participants</h1>
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="teacher-post">
                            <a href="single-teacher.html">
                                <img src="{{ asset('stem/upload/teachers/teacher6.jpg') }}" alt="">
                                <div class="hover-post">
                                    <h2>Michael Arnet</h2>
                                    <span>Photographer</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="teacher-post">
                            <a href="single-teacher.html">
                                <img src="{{ asset('stem/upload/teachers/teacher6.jpg') }}" alt="">
                                <div class="hover-post">
                                    <h2>Michael Arnet</h2>
                                    <span>Photographer</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="teacher-post">
                            <a href="single-teacher.html">
                                <img src="{{ asset('stem/upload/teachers/teacher6.jpg') }}" alt="">
                                <div class="hover-post">
                                    <h2>Michael Arnet</h2>
                                    <span>Photographer</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="teacher-post">
                            <a href="single-teacher.html">
                                <img src="{{ asset('stem/upload/teachers/teacher6.jpg') }}" alt="">
                                <div class="hover-post">
                                    <h2>Michael Arnet</h2>
                                    <span>Photographer</span>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>
    {{--end of mentors--}}
@endsection
