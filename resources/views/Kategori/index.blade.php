
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>Manage Arcade Dashboard</title>

  <link rel="stylesheet" href="{{asset('dist/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/modules/ionicons/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css')}}">

  <link rel="stylesheet" href="{{asset('dist/css/demo.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/style.css')}}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{asset('logo.png')}}">
</head>

<body>
  @if (session('sukses'))
    {{-- <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    </div> --}}

    <div id="toast-container" class="toast-top-right">
      <div class="toast toast-success" aria-live="polite" style="">
        <div class="toast-title">
          Perhatian
        </div>
        <div class="toast-message">
          {{session('sukses')}}
        </div>
      </div>
    </div>
  @endif
  
  
  
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
            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="profile.html" class="dropdown-item has-icon">
                <i class="ion ion-android-person"></i> Profile
              </a>
              <a href="#" class="dropdown-item has-icon">
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
              <div class="user-name">Ujang Maman</div>
              <div class="user-role">
                Administrator
              </div>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li>
              <a href="{{ route('dashboard.index') }}"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
            </li>
            <li>
              <a href="/ruangan"><i class="ion ion-clipboard"></i><span>Ruangan</span></a>
            </li>
            <li  class="active">
              <a href="{{ route('kategori.index') }}"><i class="ion ion-flag"></i><span>Kategori Ruangan</span></a>
            </li>
            <li>
              <a href="/review"><i class="ion ion-ios-star"></i><span>Review</span></a>
            </li>
            <li>
              <a href="/transaksi"><i class="ion ion-cash"></i> <span>Transaksi</span></a>
            </li>
            <li>
              <a href="#" class="has-dropdown"><i class="ion ion-ios-albums-outline"></i><span>User Manajemen</span></a>
              <ul class="menu-dropdown">
                <li><a href="/adminset"><i class="ion ion-ios-circle-outline"></i> Administrator</a></li>
                <li><a href="/ownerset"><i class="ion ion-ios-circle-outline"></i> Pemilik Gedung</a></li>
                <li><a href="/userset"><i class="ion ion-ios-circle-outline"></i> User</a></li>
              </ul>
            </li>
        </aside>
      </div>
      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Kategori Ruangan</div>
          </h1>
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <div class="float-right">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <i class="ion ion-plus"></i>
                      </button>
                    </div>
                    
                    <div class="float-left">
                      <form>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-btn">
                            <button class="btn btn-primary"><i class="ion ion-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped">
                       {{-- {{ dd($data_kategori)}} --}} 
                       <tr>
                          <th>Nama</th>
                          <th>Deskripsi</th>
                          <th>Aksi</th>
                        </tr>
                        
                        @foreach ($data_kategori as $kategori)
                        <tr>
                            <td>{{$kategori->nama_kategori}}</td>
                            <td>{{$kategori->desc_kategori}}</td>
                            <td>
                              <a href="{{ route('kategori.edit', $kategori->id_kategori) }}" class="btn btn-sm btn-warning">E</a>
                              <a href="#" class="btn btn-sm btn-danger">D</a>
                            </td>
                        </tr>
                        @endforeach
                      </table>
                    </div>
                  </div>
                  {{-- Paggination --}}
                  {{-- <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="ion ion-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="ion ion-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2020 <div class="bullet"></div> Powered <b>ARCADE</b></a>
        </div>
        <div class="footer-right"></div>
      </footer>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kategori</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('kategori.create') }}" method="POST">
            {{csrf_field()}}
            <div class="form-group">
              <label>Nama Kategori</label>
              <input type="text" class="form-control" id="nama_kategori" name="nama_kategori">
              <div class="invalid-feedback">
                Please fill in the name
              </div>
            </div>
            <div class="form-group">
              <label>Deskripsi Kategori</label>
              <textarea class="form-control" required="" rows="3" name="desc_kategori"></textarea>
              <div class="invalid-feedback">
                Please fill in the description
              </div>
            </div>
            <div class="modal-footer">
              <button type="reset" class="btn btn-primary">Reset</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->

  <script src="{{asset('dist/modules/jquery.min.js')}}"></script>
  <script src="{{asset('dist/modules/popper.js')}}"></script>
  <script src="{{asset('dist/modules/tooltip.js')}}"></script>
  <script src="{{asset('dist/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('dist/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js')}}"></script>
  <script src="{{asset('dist/js/sa-functions.js')}}"></script>
  
  <script src="{{asset('dist/js/scripts.js')}}"></script>
  <script src="{{asset('dist/js/custom.js')}}"></script>
  <script src="{{asset('dist/js/demo.js')}}"></script>
</body>
</html>