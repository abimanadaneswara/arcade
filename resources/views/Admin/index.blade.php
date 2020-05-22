@extends('layouts.master')
@section('content')
<section class="section">
  <h1 class="section-header">
    <div>Data Administrator</div>
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
              <form action="{{ route('administrator.index') }}" method="GET">
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
                  <th scope="col">Email</th>
                  <th scope="col">Password</th>
                  <th scope="col">Aksi</th>
                </tr>
                
                @foreach ($data_admin as $admin)
                <tr>
                    <td>{{$admin->name}}</td>
                    <td>{{$admin->email}}</td>
                    <td>{{$admin->password}}</td>
                    <td>
                      <a href="{{ route('administrator.edit', $admin->id) }}" class="btn btn-sm btn-warning"><i class="ion ion-android-create"></i></a>
                      <a href="{{ route('administrator.delete', $admin->id) }}" class="btn btn-sm btn-danger" onclick="return confirm ('Hapus data ini?')"><i class="ion ion-trash-a"></i></a>
                    </td>
                </tr>
                @endforeach
              </table>
            </div>
          </div>
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
        <form action="{{ route('administrator.create') }}" method="POST">
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
    