<header class="clearfix">

    <div class="top-line">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p><i class="material-icons">phone</i> <span>+01 2334 853</span></p>
                    <p><i class="material-icons">email</i> <span>email@mycourse.com</span></p>
                </div>
                <div class="col-lg-6">
                    <div class="right-top-line">
                        <ul class="top-menu">
                            <li><a href="#">Purchase Now</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="blog.html">News</a></li>
                        </ul>
                        <button class="search-icon">
                            <i class="material-icons open-search">search</i>
                            <i class="material-icons close-search">close</i>
                        </button>
                        <button class="shop-icon">
                            <i class="material-icons">shopping_cart</i>
                            <span class="studiare-cart-number">0</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form class="search_bar">
        <div class="container">
            <input type="search" class="search-input" placeholder="What are you looking for...">
            <button type="submit" class="submit">
                <i class="material-icons">search</i>
            </button>
        </div>
    </form>

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
                            <li><a href="single-project.html">Career</a></li>

                        </ul>
                    </li>
                    <li class="drop-link">
                        <a href="blog.html">Blog <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown">
                            <li class="drop-link">
                                <a href="blog-list.html">Blog List</a>
                                <ul class="dropdown level2">
                                    <li><a href="blog-list-leftsidebar.html">Blog List - Sidebar Left</a></li>
                                    <li><a href="blog-list-rightsidebar.html">Blog List - Sidebar Right</a></li>
                                    <li><a href="blog-list.html">No Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="drop-link">
                                <a href="blog-grid-3.html">Blog Grid</a>
                                <ul class="dropdown level2">
                                    <li><a href="blog-grid-3.html">3 Column</a></li>
                                    <li><a href="blog-grid-4.html">4 Column</a></li>
                                    <li><a href="blog-grid-leftsidebar.html">Sidebar Left</a></li>
                                    <li><a href="blog-grid-rightsidebar.html">Sidebar Right</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog Classic</a></li>
                            <li><a href="single-post.html">Post Single</a></li>
                        </ul>
                    </li>
                    <li class="drop-link">
                        <a href="courses.html">Courses</a>
                    </li>
                    <li><a href="events.html">Events</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
                <a href="#" class="register-modal-opener login-button"><i class="material-icons">perm_identity</i> Get Started</a>
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
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li class="drop-link">
                    <a href="#">Pages</a>
                    <ul class="drop-level">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="pricing.html">Pricing Packages</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="single-project.html">Portfolio Single</a></li>
                        <li><a href="teachers.html">Teachers</a></li>
                        <li><a href="single-teacher.html">Teacher Single</a></li>
                        <li><a href="cart.html">Shopping Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="single-teacher.html">Teacher Single</a></li>
                        <li class="drop-link">
                            <a href="#">Submenu Level 1</a>
                            <ul class="drop-level">
                                <li><a href="#">Submenu Level 2</a></li>
                                <li class="drop-link">
                                    <a href="#">Submenu Level 2</a>
                                    <ul class="drop-level">
                                        <li><a href="#">Submenu Level 3</a></li>
                                        <li><a href="#">Submenu Level 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Submenu Level 2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="drop-link">
                    <a href="blog.html">Blog</a>
                    <ul class="drop-level">
                        <li class="drop-link">
                            <a href="blog-list.html">Blog List</a>
                            <ul class="drop-level">
                                <li><a href="blog-list-leftsidebar.html">Blog List - Sidebar Left</a></li>
                                <li><a href="blog-list-rightsidebar.html">Blog List - Sidebar Right</a></li>
                                <li><a href="blog-list.html">No Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="drop-link">
                            <a href="blog-grid-3.html">Blog Grid</a>
                            <ul class="drop-level">
                                <li><a href="blog-grid-3.html">3 Column</a></li>
                                <li><a href="blog-grid-4.html">4 Column</a></li>
                                <li><a href="blog-grid-leftsidebar.html">Sidebar Left</a></li>
                                <li><a href="blog-grid-rightsidebar.html">Sidebar Right</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog Classic</a></li>
                        <li><a href="single-post.html">Post Single</a></li>
                    </ul>
                </li>
                <li>
                    <a href="courses.html">Courses</a>
                </li>
                <li>
                    <a href="events.html">Events</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </nav>
    </div>

</header>
