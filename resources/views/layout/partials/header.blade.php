<header class="clearfix">

    <div class="top-line">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p><i class="material-icons">phone</i> <span>+01 2334 853</span></p>
                    <p><i class="material-icons">email</i> <span>info@stemforsupergirls.com</span></p>
                </div>
                <div class="col-lg-6">
                    <div class="right-top-line">
                        <ul class="top-menu">

                            <li><a href="{{ route('contact-us') }}">Contact</a></li>
                            <li><a href="{{route('all.news')}}">News</a></li>
                        </ul>
                        <button class="search-icon">
                            <i class="material-icons open-search">search</i>
                            <i class="material-icons close-search">close</i>
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">

            <a class="navbar-brand" href="index.html">
                <img src="images/logo.svg" alt="">
            </a>

            <a href="#" class="mobile-nav-toggle">
                <span></span>
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="drop-link">
                        <a class="active" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="drop-link">
                        <a href="#">About us <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown">

                            <li><a href="{{ route('about_us.our_work') }}">Our Work</a></li>
                            <li><a href="{{ route('about_us.our_story') }}">Our Story</a></li>
                            <li><a href="{{ route('about_us.our_people') }}">Our People</a></li>
                            <li><a href="{{ route('about_us.annual_report') }}">Annual Report</a></li>
                            <li><a href="{{route('career.show_career_page')}}">Career</a></li>

                        </ul>
                    </li>
                    <li class="drop-link">
                        <a>Programs <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown">
                            @foreach(\App\Models\Program::all() as $program)
                            <li><a href="{{ route('program.single',$program->id) }}">{{ $program->title }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="drop-link">
                        <a>Events <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown">
                            @foreach(\App\Models\Event::all() as $event)
                            <li><a href="{{ route('event.single',$event->id) }}">{{ $event->title }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="drop-link">
                        <a>Competition <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown">
                            @foreach(\App\Models\Competition::all() as $competition)
                                <li><a href="{{ route('competition.single',$competition->id) }}">{{$competition->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{route('course.show_course_page')}}">Course</a></li>
                </ul>
                <a href="{{route('career.show_career_page')}}" class="register-modal-opener login-button"><i class="material-icons">perm_identity</i> Get Started</a>
            </div>
        </div>
    </nav>

    <div class="mobile-menu">
        <div class="search-form-box">
            <form class="search-form">
                <input type="search" class="search-field" placeholder="Enter keyword...">
                <button type="submit" class="search-submit">
                    <i class="material-icons open-search">search</i>
                </button>
            </form>
        </div>
        <div class="shopping-cart-box">
            <a class="shop-icon" href="cart.html">
                <i class="material-icons">shopping_cart</i>
                Cart
                <span class="studiare-cart-number">0</span>
            </a>
        </div>
        <nav class="mobile-nav">
            <ul class="mobile-menu-list">
                <ul class="navbar-nav mr-auto">
                    <li class="drop-link">
                        <a class="active" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="drop-link">
                        <a href="#">About us <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown">

                            <li><a href="{{ route('about_us.our_work') }}">Our Work</a></li>
                            <li><a href="{{ route('about_us.our_story') }}">Our Story</a></li>
                            <li><a href="{{ route('about_us.our_people') }}">Our People</a></li>
                            <li><a href="{{ route('about_us.annual_report') }}">Annual Report</a></li>
                            <li><a href="{{route('career.show_career_page')}}">Career</a></li>

                        </ul>
                    </li>
                    <li class="drop-link">
                        <a>Programs <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown">
                            @foreach(\App\Models\Program::all() as $program)
                                <li><a href="{{ route('program.single',$program->id) }}">{{ $program->title }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="drop-link">
                        <a>Events <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown">
                            @foreach(\App\Models\Event::all() as $event)
                                <li><a href="{{ route('event.single',$event->id) }}">{{ $event->title }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="drop-link">
                        <a>Competition <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown">
                            @foreach(\App\Models\Competition::all() as $competition)
                                <li><a href="{{ route('competition.single',$competition->id) }}">{{$competition->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{route('course.show_course_page')}}">Course</a></li>
                </ul>
            </ul>
        </nav>
    </div>

</header>
