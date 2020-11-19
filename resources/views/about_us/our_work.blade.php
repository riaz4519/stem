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
            <div class="about-article">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset('stem/upload/about/about1.jpg') }}" alt="">
                    </div>
                    <div class="col-lg-6">
                        <div class="article-content">
                            <i class="fa fa-file-text-o"></i>
                            <h2>Our Mission</h2>
                            <p>Maecenas ac efficitur turpis, et dictum elit. Aliquam vel suscipit arcu. Nunc condimentum erat arcu, vel eleifend metus tincidunt vel. Maecenas lacinia turpis diam, quis feugiat libero interdum vel.</p>
                            <a class="text-link" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-article">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="article-content right-align">
                            <i class="fa fa-university"></i>
                            <h2>Our Vision</h2>
                            <p>Maecenas ac efficitur turpis, et dictum elit. Aliquam vel suscipit arcu. Nunc condimentum erat arcu, vel eleifend metus tincidunt vel. Maecenas lacinia turpis diam, quis feugiat libero interdum vel.</p>
                            <a class="text-link" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('stem/upload/about/about2.jpg') }}" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End about section -->

    <section class="about-section">
        <div class="container">
            <div class="about-article">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="article-content">
                            <div class="text-center">
                                <i class="fa fa-umbrella"></i>
                                <h2>Why We Exits</h2>
                            </div>
                            <p>The challenges that confront Bangladesh today are immense, complex, and disparate. Our country is threatened by climate change, ecological devastation, violent partisan politics, rising youth unemployment, as well as widening and deepening socio-political and economic inequalities. BYLC aims to provide innovative and long terms solutions to these problems by fostering the courage, compassion, and competence necessary for effective leadership among today’s youth.

                                At BYLC, we believe that leadership is distinct from authority. It is a process, not a position. If we look at leadership as the process of mobilizing a group to improve the human condition, we open up new and exciting opportunities for people to participate in leadership activities, regardless of whether they hold a formal position of authority. This is especially relevant for Bangladesh where the median age of the population is 24, according to 2010 estimates of the United Nations Department of Economic and Social Affairs. Most young people do not hold formal positions of authority. Does this mean that this generation cannot contribute to the country’s development today?

                                We believe that formal authority is not a requirement for exercising leadership. Leadership can be exercised by anyone, regardless of age, gender, or socio-economic status. What is required for young people to exercise leadership is heart and ability. BYLC provides a platform for young people to develop leadership skills and participate in the country’s development process. A cornerstone of BYLC’s approach involves uniting youth from diverse socio-economic and educational backgrounds because effective leadership requires the capacity to embrace diversity and pluralism. And through this process of empowering young people to act on behalf of issues they care about deeply, we aim to strengthen prosperity, justice, and inclusiveness in society.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
