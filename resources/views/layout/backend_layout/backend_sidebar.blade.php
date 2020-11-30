<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <div class="nav-link">
          <div class="user-wrapper">
            <div class="profile-image">
              <img src="{{asset('backend/assets/images/faces/face8.jpg')}}" alt="profile image"> </div>
            <div class="text-wrapper">
              <p class="profile-name">Richard V.Welsh</p>
              <div>
                <small class="designation text-muted">Manager</small>
                <span class="status-indicator online"></span>
              </div>
            </div>
          </div>
        </div>
      </li>

        {{--home page--}}
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#dashboard-dropdown1" aria-expanded="false" aria-controls="dashboard-dropdown">
          <i class="menu-icon mdi mdi-television"></i>
          <span class="menu-title">Home Page</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="dashboard-dropdown1">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="{{route('banner.create')}}">Create Banner</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('banner.index')}}">All Banners</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('aboutmessage.create')}}">Create About Message</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('aboutmessage.index')}}">All About Message</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('whatwedo.create')}}">Create What We Do</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('whatwedo.index')}}">All of 'What We Do'</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('ourpartner.create')}}">Create Partners</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('ourpartner.index')}}">All Partners</a>
            </li>


          </ul>
        </div>
      </li>
        {{--end of home page--}}
        {{--about--}}
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#about-drop" aria-expanded="false" aria-controls="dashboard-dropdown">
          <i class="menu-icon mdi mdi-television"></i>
          <span class="menu-title">About</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="about-drop">
          <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                  <a class="nav-link" href="{{route('ourstory.create')}}">Create ourstory</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('ourstory.index')}}">All of ourstory</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('annualreport.create')}}">Create annual report</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('annualreport.index')}}">All of annual report</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('peoplecategory.create')}}">Create category</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('peoplecategory.index')}}">All Categories</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('ourpeople.create')}}">Create people</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('ourpeople.index')}}">All peoples</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('news.create')}}">Create news</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('news.index')}}">All news</a>
              </li>


          </ul>
        </div>
      </li>
        {{--end of about page--}}

        {{--star of event--}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#program-drop" aria-expanded="false" aria-controls="dashboard-dropdown">
                <i class="menu-icon mdi mdi-television"></i>
                <span class="menu-title">Program</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="program-drop">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('program.new')}}">Create Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('program.index')}}">All Programs</a>
                    </li>

                </ul>
            </div>
        </li>
        {{--end of program--}}
        {{--start of our work--}}
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ourwork-drop" aria-expanded="false" aria-controls="dashboard-dropdown">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Our work</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ourwork-drop">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('ourwork.create')}}">Create Our work</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('ourwork.index')}}">All of 'Our work'</a>
                  </li>
              </ul>
          </div>
      </li>
      {{--end of our work--}}

      <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#contact-drop" aria-expanded="false" aria-controls="dashboard-dropdown">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Contact Messages</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="contact-drop">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('contact.index')}}">All Messages</a>
                  </li>
              </ul>
          </div>
      </li>
      {{-- start of career section--}}
      <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#career-drop" aria-expanded="false" aria-controls="dashboard-dropdown">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Careerpage Messages</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="career-drop">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('career.index')}}">Career Page Messages</a>
                  </li>
              </ul>
          </div>
      </li>
      {{-- start of career section--}}

    </ul>
  </nav>
