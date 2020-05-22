<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>Manage Arcade Dashboard</title>

  <link rel="stylesheet" href="{{asset('dist/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/modules/ionicons/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css')}}">

  <link rel="stylesheet" href="{{asset('dist/modules/summernote/summernote-lite.css')}}">
  <link rel="stylesheet" href="{{asset('dist/modules/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/demo.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/style.css')}}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{asset('logo.png')}}">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="ion ion-search"></i></a></li>
          </ul>
          {{-- <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <button class="btn" type="submit"><i class="ion ion-search"></i></button>
          </div> --}}
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
            <i class="ion ion-android-person d-lg-none"></i>
            <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }} </div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="profile.html" class="dropdown-item has-icon">
                <i class="ion ion-android-person"></i> Profile
              </a>
              <a href="{{ route('admin.logout') }}" class="dropdown-item has-icon">
                <i class="ion ion-log-out"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
              <a>Arcade Lite</a>
          </div>
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img alt="image" src="{{asset('dist/user2.png')}}">
            </div>
            <div class="sidebar-user-details">
              <div class="user-name">{{ Auth::user()->name }}</div>
              <div class="user-role">
                Administrator
              </div>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="active">
              <a href="{{ route('dashboard.index') }}"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
            </li>
            <li>
              <a href="{{ route('ruangan.index') }}"><i class="ion ion-clipboard"></i><span>Ruangan</span></a>
            </li>
            <li>
              <a href="{{ route('kategori.index') }}"><i class="ion ion-flag"></i><span>Kategori Ruangan</span></a>
            </li>
            <li>
              <a href=""><i class="ion ion-ios-star"></i><span>Review</span></a>
            </li>
            <li>
              <a href=""><i class="ion ion-cash"></i> <span>Transaksi</span></a>
            </li>
            <li>
              <a href="#" class="has-dropdown"><i class="ion ion-ios-albums-outline"></i><span>User Manajemen</span></a>
              <ul class="menu-dropdown">
                <li><a href="{{ route('administrator.index') }}"><i class="ion ion-ios-circle-outline"></i> Administrator</a></li>
                <li><a href="/ownerset"><i class="ion ion-ios-circle-outline"></i> Pemilik Gedung</a></li>
                <li><a href="{{ route('user.index') }}"><i class="ion ion-ios-circle-outline"></i> User</a></li>
              </ul>
            </li>
          </ul>
        </aside>
      </div>
    <div class="main-content">
        @yield('content')
    </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2020 <div class="bullet"></div> Powered <b>ARCADE</b></a>
        </div>
        <div class="footer-right"></div>
      </footer>
    </div>
  </div>

  <script src="{{asset('dist/modules/jquery.min.js')}}"></script>
  <script src="{{asset('dist/modules/popper.js')}}"></script>
  <script src="{{asset('dist/modules/tooltip.js')}}"></script>
  <script src="{{asset('dist/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('dist/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js')}}"></script>
  <script src="{{asset('dist/js/sa-functions.js')}}"></script>
  
  <script src="{{asset('dist/modules/chart.min.js')}}"></script>
  <script src="{{asset('dist/modules/summernote/summernote-lite.js')}}"></script>

 
  <script src="{{asset('dist/js/scripts.js')}}"></script>
  <script src="{{asset('dist/js/custom.js')}}"></script>
  <script src="{{asset('dist/js/demo.js')}}"></script>
</body>
</html>