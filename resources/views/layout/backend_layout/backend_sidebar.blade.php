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
    </ul>
  </nav>