
@extends('layout.main')

@section('content')


    <!-- page-banner-section
			================================================== -->
    <section class="page-banner-section">
        <div class="container">
            <h1>News</h1>
            <ul class="page-depth">
                <li><a href="index.html">Studiare</a></li>
                <li><a href="blog.html">News</a></li>
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
                                <li><a href="#">Mentors</a></li>
                                <li><a href="#">Governing Board</a></li>
                                <li><a href="#">Management</a></li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-lg-8 col-md-7">

                    <div class="blog-box">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="blog-post">
                                    <a href="single-post.html"><img src="{{ asset('stem/upload/blog/blog-image-1.jpg') }}" alt=""></a>
                                    <div class="post-content">
                                        <a class="category" href="#">Academics</a>
                                        <h2><a href="single-post.html">Couple Of Happy College Students Graduated</a></h2>
                                        <div class="post-meta date">
                                            <i class="material-icons">access_time</i> June 13, 2018
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="blog-post">
                                    <a href="single-post.html"><img src="{{ asset('stem/upload/blog/blog-image-1.jpg') }}" alt=""></a>

                                    <div class="post-content">
                                        <a class="category" href="#">Government</a>
                                        <h2><a href="single-post.html">Tips to Developing a Quality Discussion</a></h2>
                                        <div class="post-meta date">
                                            <i class="material-icons">access_time</i> June 13, 2018
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="blog-post">
                                    <a href="single-post.html"><img src="{{ asset('stem/upload/blog/blog-image-1.jpg') }}" alt=""></a>

                                    <div class="post-content">
                                        <a class="category" href="#">Design</a>
                                        <h2><a href="single-post.html">Reflections for the Season of Advent</a></h2>
                                        <div class="post-meta date">
                                            <i class="material-icons">access_time</i> June 13, 2018
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="blog-post">
                                    <a href="single-post.html"><img src="{{ asset('stem/upload/blog/blog-image-1.jpg') }}" alt=""></a>

                                    <div class="post-content">
                                        <a class="category" href="#">Business</a>
                                        <h2><a href="single-post.html">It’s Wonderful to see the Friendships that Develop</a></h2>
                                        <div class="post-meta date">
                                            <i class="material-icons">access_time</i> June 13, 2018
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="blog-post">
                                    <a href="single-post.html"><img src="{{ asset('stem/upload/blog/blog-image-1.jpg') }}" alt=""></a>

                                    <div class="post-content">
                                        <a class="category" href="#">Academics</a>
                                        <h2><a href="single-post.html">Couple Of Happy College Students Graduated</a></h2>
                                        <div class="post-meta date">
                                            <i class="material-icons">access_time</i> June 13, 2018
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="blog-post">
                                    <a href="single-post.html"><img src="{{ asset('stem/upload/blog/blog-image-1.jpg') }}" alt=""></a>

                                    <div class="post-content">
                                        <a class="category" href="#">Government</a>
                                        <h2><a href="single-post.html">Tips to Developing a Quality Discussion</a></h2>
                                        <div class="post-meta date">
                                            <i class="material-icons">access_time</i> June 13, 2018
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="blog-post">
                                    <a href="single-post.html"><img src="{{ asset('stem/upload/blog/blog-image-1.jpg') }}" alt=""></a>

                                    <div class="post-content">
                                        <a class="category" href="#">Design</a>
                                        <h2><a href="single-post.html">Reflections for the Season of Advent</a></h2>
                                        <div class="post-meta date">
                                            <i class="material-icons">access_time</i> June 13, 2018
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="blog-post">
                                    <a href="single-post.html"><img src="{{ asset('stem/upload/blog/blog-image-1.jpg') }}" alt=""></a>

                                    <div class="post-content">
                                        <a class="category" href="#">Business</a>
                                        <h2><a href="single-post.html">It’s Wonderful to see the Friendships that Develop</a></h2>
                                        <div class="post-meta date">
                                            <i class="material-icons">access_time</i> June 13, 2018
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <ul class="page-pagination">
                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>

                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End blog section -->

    @endsection
