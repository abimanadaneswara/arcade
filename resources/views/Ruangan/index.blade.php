{{--  @extends('layouts.master')
@section('content') --}}
<!--<section class="section">
  <h1 class="section-header">
    <div>Data Ruangan</div>
  </h1>
  <div class="section-body">
    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <div class="card-header">
            {{-- @if (session('sukses')) --}}
            {{-- alert --}}
            <div class="alert alert-primary alert-has-icon alert-dismissible show fade">
              <div class="alert-icon"><i class="ion ion-ios-lightbulb-outline"></i></div>
              <div class="alert-body">
                <button class="close" data-dismiss="alert">
                  <span>×</span>
                </button>
                {{-- <div class="alert-title">{{session('sukses')}}</div> --}}
              </div>
            </div>
            {{-- alert --}}
            {{-- @endif --}}
            <div class="float-right">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                <i class="ion ion-plus"></i>
              </button>
            </div>
            
            <div class="float-left">
              {{-- <form action="{{ route('ruangan.index') }}" method="GET"> --}}
                <div class="input-group">
                  <input name="cari" type="text" class="form-control" placeholder="Search">
                  <div class="input-group-btn">
                    <button class="btn btn-primary"><i class="ion ion-search"></i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-bordered">
               {{-- {{ dd($data_kategori)}} --}} 
               <tr>
                  <th scope="col">Nama</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Pemilik</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Ukuran</th>
                  <th scope="col">Kapasitas</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Kecamatan</th>
                  <th scope="col">Kabupaten</th>
                  <th scope="col">Provinsi</th>
                  <th scope="col">Deskripsi</th>

                  <th scope="col">Aksi</th>
                </tr>
                
                {{-- @foreach ($data_ruangan as $ruangan)
                <tr>
                    <td>{{$ruangan->nama_ruangan}}</td>
                    <td>{{$ruangan->kategori_id_kategori}}</td>
                    <td>{{$ruangan->id_pemilik}}</td>
                    <td>{{$ruangan->harga}}</td>
                    <td>{{$ruangan->ukuran}}</td>
                    <td>{{$ruangan->kapasitas}}</td>
                    <td>{{$ruangan->alamat_ruangan}}</td>
                    <td>{{$ruangan->kecamatan}}</td>
                    <td>{{$ruangan->kabupaten}}</td>
                    <td>{{$ruangan->provinsi}}</td>
                    <td>{{$ruangan->deskripsi}}</td>
                    <td>
                      <a href="{{ route('ruangan.edit', $ruangan->id_ruangan) }}" class="btn btn-sm btn-warning"><i class="ion ion-android-create"></i></a>
                      <a href="{{ route('ruangan.delete', $ruangan->id_ruangan) }}" class="btn btn-sm btn-danger" onclick="return confirm ('Hapus data ini?')"><i class="ion ion-trash-a"></i></a>
                    </td>
                </tr>
                @endforeach --}}
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
</section> -->

<!-- Modal -->
<!--<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Ruangan</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        {{-- <div class="float-right">
          <a data-dismiss="#mycard-dimiss" class="btn btn-icon"><i class="ion ion-close"></i></a>
        </div> --}}
          {{-- <span aria-hidden="true">&times;</span> --}}
      </div>
      <div class="modal-body">
        {{-- <form action="{{ route('ruangan.create') }}" method="POST"> --}}
          {{-- {{csrf_field()}} --}}
          <div class="form-group">
            <label>Nama Ruangan</label>
            <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan">
            <div class="invalid-feedback">
              Please fill in the name
            </div>
          </div>
          <div class="row">
            <div class="form-group col-6">
              <label>Kategori Ruangan</label>
              <input type="text" class="form-control" id="kategori_id_kategori" name="kategori_id_kategori">
              <div class="invalid-feedback">
                Please fill in the name
              </div>
            </div>
            <div class="form-group col-6">
              <label>Pemilik</label>
              <input type="text" class="form-control" id="id_pemilik" name="id_pemilik">
              <div class="invalid-feedback">
                Please fill in the description
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Harga Ruangan</label>
            <input type="text" class="form-control" id="harga" name="harga">
            <div class="invalid-feedback">
              Please fill in the name
            </div>
          </div>
          <div class="row">
            <div class="form-group col-6">
              <label>Ukuran Ruangan</label>
              <input type="text" class="form-control" id="ukuran" name="ukuran">
              <div class="invalid-feedback">
                Please fill in the size
              </div>
            </div>
            <div class="form-group col-6">
              <label>Kapasitas Ruangan</label>
              <input type="text" class="form-control" id="kapasitas" name="kapasitas">
              <div class="invalid-feedback">
                Please fill in the capasity
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Alamat Ruangan</label>
            <textarea class="form-control" required="" rows="2" name="alamat_ruangan"></textarea>
            <div class="invalid-feedback">
              Please fill in the address
            </div>
          </div>
          <div class="row">
            <div class="form-group col-6">
              <label>Kecamatan</label>
              <input type="text" class="form-control" id="kecamatan" name="kecamatan">
              <div class="invalid-feedback">
                Please fill in the sub-distric
              </div>
            </div>
            <div class="form-group col-6">
              <label>Kabupaten</label>
              <input type="text" class="form-control" id="kabupaten" name="kabupaten">
              <div class="invalid-feedback">
                Please fill in the distric
              </div>
            </div>
          </div>
            <div class="form-group">
              <label>Provinsi</label>
              <input type="text" class="form-control" id="provinsi" name="provinsi">
              <div class="invalid-feedback">
                Please fill in the province
              </div>
            </div>
          <div class="form-group">
            <label>Deskripsi Ruangan</label>
            <textarea class="form-control" required="" rows="5" name="deskripsi"></textarea>
            <div class="invalid-feedback">
              Please fill in the name
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
{{-- @endsection  --}}
-->

@extends('layouts.master')
@section('content')
  <div class="page-header">
    <h4 class="page-title">Ruangan</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="{{ route('dashboard.index') }}">
          <i class="flaticon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="{{ route('ruangan.index') }}">Ruangan</a>
      </li>
      {{-- <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Datatables</a>
      </li> --}}
    </ul>
  </div>
  <!-- Data Table -->
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        @if (session('sukses'))
            <!-- Alert -->
            {{-- <div class="alert alert-primary alert-has-icon alert-dismissible show fade">
              <div class="alert-icon"><i class="ion ion-ios-lightbulb-outline"></i></div>
              <div class="alert-body">
                <button class="close" data-dismiss="alert">
                  <span>×</span>
                </button>
                <div class="alert-title">{{session('sukses')}}</div>
              </div>
            </div> --}}
            <div class="alert alert-success" role="alert">
              {{session('sukses')}}
            </div>
            <!-- Alert -->
            @endif
        <div class="d-flex align-items-center">
          <h4 class="card-title">Form Data Ruangan</h4>
          <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
            <i class="fa fa-plus"></i>
            Tambah Data
          </button>
        </div>
      </div>
      <div class="card-body">
        <!-- Modal -->
        <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header no-bd">
                <h5 class="modal-title">
                  <span class="fw-mediumbold">
                  Form</span> 
                  <span class="fw-light">
                    tambah data ruangan
                  </span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                {{-- <p class="small">Create a new row using this form, make sure you fill them all</p> --}}
                <form action="{{ route('ruangan.create') }}" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
                 <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group form-group-default {{$errors->has('nama_ruangan') ? ' has-error' : ''}}">
                        <label>Nama Ruangan</label>
                        <input id="nama_ruangan" name="nama_ruangan" type="text" class="form-control" value="{{old('nama_ruangan')}}">
                         @if ($errors->has('nama_ruangan'))
                        <span class="help-block">{{$errors->first('nama_ruangan')}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-6 pr-0">
                      <div class="form-group form-group-default">
                        <label>Kategori Ruangan</label>
                        <input id="kategori_id_kategori" name="kategori_id_kategori" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group form-group-default">
                        <label>Pemilik</label>
                        <input id="id_pemilik" name="id_pemilik" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group form-group-default {{$errors->has('harga') ? ' has-error' : ''}}">
                        <label>Harga Ruangan</label>
                        <input id="harga" name="harga" type="text" class="form-control" value="{{old('harga')}}">
                         @if ($errors->has('harga'))
                        <span class="help-block">{{$errors->first('harga')}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-6 pr-0">
                      <div class="form-group form-group-default {{$errors->has('ukuran') ? ' has-error' : ''}}">
                        <label>Ukuran Ruangan</label>
                        <input id="ukuran" name="ukuran" type="text" class="form-control" value="{{old('ukuran')}}">
                         @if ($errors->has('ukuran'))
                        <span class="help-block">{{$errors->first('ukuran')}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group form-group-default {{$errors->has('kapasitas') ? ' has-error' : ''}}">
                        <label>Kapasitas Ruangan</label>
                        <input id="kapasitas" name="kapasitas" type="text" class="form-control" value="{{old('kapasitas')}}">
                         @if ($errors->has('kapasitas'))
                        <span class="help-block">{{$errors->first('kapasitas')}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group form-group-default {{$errors->has('alamat_ruangan') ? ' has-error' : ''}}">
                        <label>Alamat Ruangan</label>
                        <textarea class="form-control" required="" rows="3" name="alamat_ruangan">{{old('alamat_ruangan')}}</textarea>
                         @if ($errors->has('alamat_ruangan'))
                        <span class="help-block">{{$errors->first('alamat_ruangan')}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-6 pr-0">
                      <div class="form-group form-group-default">
                        <label>Kecamatan</label>
                        <input id="kecamatan" name="kecamatan" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group form-group-default">
                        <label>Kabupaten</label>
                        <input id="kabupaten" name="kabupaten" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group form-group-default">
                        <label>Provinsi</label>
                        <input id="provinsi" name="provinsi" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group form-group-default {{$errors->has('deskripsi') ? ' has-error' : ''}}">
                        <label>Deskripsi Ruangan</label>
                        <textarea class="form-control" required="" rows="6" name="deskripsi">{{old('deskripsi')}}</textarea>
                         @if ($errors->has('deskripsi'))
                        <span class="help-block">{{$errors->first('deskripsi')}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group form-group-default{{$errors->has('foto') ? ' has-error' : ''}}">
                        <label>Foto</label>
                        <input id="foto" name="foto" type="file" class="form-control-file">
                        @if ($errors->has('foto'))
                        <span class="help-block">{{$errors->first('foto')}}</span>
                        @endif
                      </div>
                    </div>
                  </div>
              </div>
              <div class="modal-footer no-bd">
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" id="addRowButton" class="btn btn-primary">Tambah</button>
              </div>
            </form>
            </div>
          </div>
        </div>
        <!-- Modal -->
        <form action="{{ route('ruangan.index') }}" method="GET">
          {{csrf_field()}}
        <div class="table-responsive">
          <table id="multi-filter-select" class="display table table-striped table-hover" >
            <thead>
              <tr>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Pemilik</th>
                <th>Harga</th>
                <th>Ukuran</th>
                <th>Kapasitas</th>
                <th>Alamat</th>
                <th>Kecamatan</th>
                <th>Kabupaten</th>
                <th>Provinsi</th>
                <th>Deskripsi</th>
                <th>Foto</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data_ruangan as $ruangan)
              <tr>
                  <td>{{$ruangan->nama_ruangan}}</td>
                  <td>{{$ruangan->kategori_id_kategori}}</td>
                  <td>{{$ruangan->id_pemilik}}</td>
                  <td>{{$ruangan->harga}}</td>
                  <td>{{$ruangan->ukuran}}</td>
                  <td>{{$ruangan->kapasitas}}</td>
                  <td>{{$ruangan->alamat_ruangan}}</td>
                  <td>{{$ruangan->kecamatan}}</td>
                  <td>{{$ruangan->kabupaten}}</td>
                  <td>{{$ruangan->provinsi}}</td>
                  <td>{{$ruangan->deskripsi}}</td>
              <td><img src="{{asset('ruangan/'.$ruangan->foto)}}" alt="" height="50"></td>
                  {{-- <td>
                    <a href="{{ route('ruangan.edit', $ruangan->id_ruangan) }}" class="btn btn-sm btn-warning"><i class="ion ion-android-create"></i></a>
                    <a href="{{ route('ruangan.delete', $ruangan->id_ruangan) }}" class="btn btn-sm btn-danger" onclick="return confirm ('Hapus data ini?')"><i class="ion ion-trash-a"></i></a>
                  </td> --}}
                  <td>
                    <div class="form-button-action">
                      <a href="{{ route('ruangan.edit', $ruangan->id_ruangan) }}">
                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
                          <i class="fa fa-edit"></i>
                        </button>
                      </a>
                      
                        {{-- <button type="button" class="btn btn-success" id="alert_demo_7"> --}}
                      <a href="{{ route('ruangan.delete', $ruangan->id_ruangan) }}">
                          <button type="button" data-toggle="tooltip" class="btn btn-link btn-danger" id="alert_demo_7" data-original-title="Delete">
                          <i class="fa fa-times"></i>
                        </button>
                      </a>
                    </div>
                  </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </form>
      </div>
    </div>
  </div>
  <!-- Data Table -->
@endsection