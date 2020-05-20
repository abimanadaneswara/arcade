@extends('layouts.master')
@section('content')
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
              <form action="{{ route('kategori.index') }}" method="GET">
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
                  <th scope="col">Deskripsi</th>
                  <th scope="col">Aksi</th>
                </tr>
                
                @foreach ($data_kategori as $kategori)
                <tr>
                    <td>{{$kategori->nama_kategori}}</td>
                    <td>{{$kategori->desc_kategori}}</td>
                    <td>
                      <a href="{{ route('kategori.edit', $kategori->id_kategori) }}" class="btn btn-sm btn-warning"><i class="ion ion-android-create"> Edit</i></a>
                      <a href="{{ route('kategori.delete', $kategori->id_kategori) }}" class="btn btn-sm btn-danger" onclick="return confirm ('Hapus data ini?')"><i class="ion ion-trash-a"> Delete</i></a>
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
@endsection
    