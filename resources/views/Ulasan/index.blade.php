@extends('layouts.master')
@section('content')
<section class="section">
  <h1 class="section-header">
    <div>Data Ulasan</div>
  </h1>
  <div class="section-body">
    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <div class="card-header">
            @if (session('sukses'))
            {{-- alert --}}
            <div class="alert alert-primary alert-has-icon alert-dismissible show fade">
              <div class="alert-icon"><i class="ion ion-ios-lightbulb-outline"></i></div>
              <div class="alert-body">
                <button class="close" data-dismiss="alert">
                  <span>×</span>
                </button>
                <div class="alert-title">{{session('sukses')}}</div>
              </div>
            </div>
            {{-- alert --}}
            @endif
            <div class="float-right">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                <i class="ion ion-plus"></i>
              </button>
            </div>
            
            <div class="float-left">
              <form action="{{ route('ulasan.index') }}" method="GET">
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
                  <th scope="col">Pekerjaan</th>
                  <th scope="col">Deskripsi Ulasan</th>
                  <th scope="col">Aksi</th>
                </tr>
                
                @foreach ($data_ulasan as $ulasan)
                <tr>
                    <td>{{$ulasan->nama}}</td>
                    <td>{{$ulasan->pekerjaan}}</td>
                    <td>{{$ulasan->desc_ulasan}}</td>
                    <td>
                      <a href="{{ route('ulasan.edit', $ulasan->id_ulasan) }}" class="btn btn-sm btn-warning"><i class="ion ion-android-create"></i></a>
                      <a href="{{ route('ulasan.delete', $ulasan->id_ulasan) }}" class="btn btn-sm btn-danger" onclick="return confirm ('Hapus data ini?')"><i class="ion ion-trash-a"></i></a>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Ulasan</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        {{-- <div class="float-right">
          <a data-dismiss="#mycard-dimiss" class="btn btn-icon"><i class="ion ion-close"></i></a>
        </div> --}}
          {{-- <span aria-hidden="true">&times;</span> --}}
      </div>
      <div class="modal-body">
        <form action="{{ route('ulasan.create') }}" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
            <div class="invalid-feedback">
              Please fill in the name
            </div>
          </div>
          <div class="form-group">
              <label>Pekerjaan</label>
              <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
              <div class="invalid-feedback">
                Please fill in the name
              </div>
          </div>
          <div class="form-group">
              <label>Deskripsi Ulasan</label>
              <textarea class="form-control" name="desc_ulasan" required="" rows="5"></textarea>
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
@endsection
    