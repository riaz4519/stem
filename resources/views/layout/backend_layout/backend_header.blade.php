<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
      <a class="navbar-brand brand-logo" href="{{url('/admin_dashboard')}}">
        <img src="{{asset('/backend//assets/images/logo.svg')}}" alt="logo" /> </a>
      <a class="navbar-brand brand-logo-mini" href="{{url('/admin_dashboard')}}">
        <img src="{{asset('/backend/assets/images/logo-mini.svg')}}" alt="logo" /> </a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
      </button>
      <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
        <li class="nav-item">
          <a href="#" class="nav-link">Schedule
            <span class="badge badge-primary ml-1">New</span>
          </a>
        </li>
        <li class="nav-item active">
          <a href="#" class="nav-link">
            <i class="mdi mdi-elevation-rise"></i>Reports</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="mdi mdi-bookmark-plus-outline"></i>Score</a>
        </li>
      </ul>
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item dropdown">
          <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
            <i class="mdi mdi-file-outline"></i>
            <span class="count">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
            <a class="dropdown-item py-3">
              <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
              <span class="badge badge-pill badge-primary float-right">View all</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img src="{{asset('/backend/assets/images/faces/face10.jpg')}}" alt="image" class="img-sm profile-pic"> </div>
              <div class="preview-item-content flex-grow py-2">
                <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                <p class="font-weight-light small-text"> The meeting is cancelled </p>
              </div>
            </a>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img src="{{asset('/backend/assets/images/faces/face12.jpg')}}" alt="image" class="img-sm profile-pic"> </div>
              <div class="preview-item-content flex-grow py-2">
                <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                <p class="font-weight-light small-text"> The meeting is cancelled </p>
              </div>
            </a>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img src="{{asset('/backend/assets/images/faces/face1.jpg')}}" alt="image" class="img-sm profile-pic"> </div>
              <div class="preview-item-content flex-grow py-2">
                <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                <p class="font-weight-light small-text"> The meeting is cancelled </p>
              </div>
            </a>
          </div>
        </li>
        <li class="nav-item dropdown ml-4">
          <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
            <i class="mdi mdi-bell-outline"></i>
            <span class="count bg-success">4</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
            <a class="dropdown-item py-3 border-bottom">
              <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
              <span class="badge badge-pill badge-primary float-right">View all</span>
            </a>
            <a class="dropdown-item preview-item py-3">
              <div class="preview-thumbnail">
                <i class="mdi mdi-alert m-auto text-primary"></i>
              </div>
              <div class="preview-item-content">
                <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                <p class="font-weight-light small-text mb-0"> Just now </p>
              </div>
            </a>
            <a class="dropdown-item preview-item py-3">
              <div class="preview-thumbnail">
                <i class="mdi mdi-settings m-auto text-primary"></i>
              </div>
              <div class="preview-item-content">
                <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                <p class="font-weight-light small-text mb-0"> Private message </p>
              </div>
            </a>
            <a class="dropdown-item preview-item py-3">
              <div class="preview-thumbnail">
                <i class="mdi mdi-airballoon m-auto text-primary"></i>
              </div>
              <div class="preview-item-content">
                <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                <p class="font-weight-light small-text mb-0"> 2 days ago </p>
              </div>
            </a>
          </div>
        </li>
        <li class="nav-item d-none d-lg-block color-setting">
          <a class="nav-link" href="#">
            <i class="mdi mdi-tune"></i>
          </a>
        </li>
        <li class="nav-item dropdown d-none d-xl-inline-block">
          <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
            <span class="profile-text">Richard V.Welsh !</span>
            <img class="img-xs rounded-circle" src="{{asset('/backend/assets/images/faces/face8.jpg')}}" alt="Profile image"> </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
            <a class="dropdown-item p-0">
              <div class="d-flex border-bottom">
                <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                  <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                </div>
                <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                  <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                </div>
                <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                  <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                </div>
              </div>
            </a>
            <a class="dropdown-item mt-2"> Manage Accounts </a>
            <a class="dropdown-item"> Change Password </a>
            <a class="dropdown-item"> Check Inbox </a>
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"> Sign Out </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="icon-menu"></span>
      </button>
    </div>
  </nav>
  <div class="theme-setting-wrapper">
    <div id="theme-settings" class="settings-panel">
      <i class="settings-close mdi mdi-close"></i>
      <div class="d-flex align-items-center justify-content-between border-bottom">
        <p class="settings-heading font-weight-bold border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Template Skins</p>
      </div>
      <div class="sidebar-bg-options selected" id="sidebar-light-theme">
        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
      <div class="sidebar-bg-options" id="sidebar-dark-theme">
        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
      <p class="settings-heading font-weight-bold mt-2">Header Skins</p>
      <div class="color-tiles mx-0 px-4">
        <div class="tiles primary"></div>
        <div class="tiles success"></div>
        <div class="tiles warning"></div>
        <div class="tiles danger"></div>
        <div class="tiles pink"></div>
        <div class="tiles info"></div>
        <div class="tiles dark"></div>
        <div class="tiles default"></div>
      </div>
    </div>
  </div>
  <div id="right-sidebar" class="settings-panel">
    <i class="settings-close mdi mdi-close"></i>
    <div class="d-flex align-items-center justify-content-between border-bottom">
      <p class="settings-heading font-weight-bold border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
    </div>
    <ul class="chat-list">
      <li class="list active">
        <div class="profile">
          <img src="{{asset('/backend/assets/images/faces/face1.jpg')}}" alt="image">
          <span class="online"></span>
        </div>
        <div class="info">
          <p>Thomas Douglas</p>
          <p>Available</p>
        </div>
        <small class="text-muted my-auto">19 min</small>
      </li>
      <li class="list">
        <div class="profile">
          <img src="{{asset('/backend/assets/images/faces/face2.jpg')}}" alt="image">
          <span class="offline"></span>
        </div>
        <div class="info">
          <div class="wrapper d-flex">
            <p>Catherine</p>
          </div>
          <p>Away</p>
        </div>
        <div class="badge badge-success badge-pill my-auto mx-2">4</div>
        <small class="text-muted my-auto">23 min</small>
      </li>
      <li class="list">
        <div class="profile">
          <img src="{{asset('/backend/assets/images/faces/face3.jpg')}}" alt="image">
          <span class="online"></span>
        </div>
        <div class="info">
          <p>Daniel Russell</p>
          <p>Available</p>
        </div>
        <small class="text-muted my-auto">14 min</small>
      </li>
      <li class="list">
        <div class="profile">
          <img src="{{asset('/backend/assets/images/faces/face4.jpg')}}" alt="image">
          <span class="offline"></span>
        </div>
        <div class="info">
          <p>James Richardson</p>
          <p>Away</p>
        </div>
        <small class="text-muted my-auto">2 min</small>
      </li>
      <li class="list">
        <div class="profile">
          <img src="{{asset('/backend/assets/images/faces/face5.jpg')}}" alt="image">
          <span class="online"></span>
        </div>
        <div class="info">
          <p>Madeline Kennedy</p>
          <p>Available</p>
        </div>
        <small class="text-muted my-auto">5 min</small>
      </li>
      <li class="list">
        <div class="profile">
          <img src="{{asset('/backend/assets/images/faces/face6.jpg')}}" alt="image">
          <span class="online"></span>
        </div>
        <div class="info">
          <p>Sarah Graves</p>
          <p>Available</p>
        </div>
        <small class="text-muted my-auto">47 min</small>
      </li>
    </ul>
  </div>