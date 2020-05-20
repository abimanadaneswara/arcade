@extends('layouts.master')
@section('content')
<section class="section">
  <h1 class="section-header">
    <div>Ruangan</div>
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
              <form action="{{ route('ruangan.index') }}" method="GET">
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
                    <td>
                      <a href="{{ route('ruangan.edit', $ruangan->id_ruangan) }}" class="btn btn-sm btn-warning"><i class="ion ion-android-create"></i></a>
                      <a href="{{ route('ruangan.delete', $ruangan->id_ruangan) }}" class="btn btn-sm btn-danger" onclick="return confirm ('Hapus data ini?')"><i class="ion ion-trash-a"></i></a>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Ruangan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('ruangan.create') }}" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <label>Nama Ruangan</label>
            <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan">
            <div class="invalid-feedback">
              Please fill in the name
            </div>
          </div>
          <div class="form-group">
            <label>Kategori Ruangan</label>
            <input type="text" class="form-control" id="kategori_id_kategori" name="kategori_id_kategori">
            <div class="invalid-feedback">
              Please fill in the name
            </div>
          </div>
          <div class="form-group">
            <label>Pemilik</label>
            <input type="text" class="form-control" id="id_pemilik" name="id_pemilik">
            <div class="invalid-feedback">
              Please fill in the description
            </div>
          </div>
          <div class="form-group">
            <label>Harga Ruangan</label>
            <input type="text" class="form-control" id="harga" name="harga">
            <div class="invalid-feedback">
              Please fill in the name
            </div>
          </div>
          <div class="form-group">
            <label>Ukuran Ruangan</label>
            <input type="text" class="form-control" id="ukuran" name="ukuran">
            <div class="invalid-feedback">
              Please fill in the name
            </div>
          </div>
          <div class="form-group">
            <label>Kapasitas Ruangan</label>
            <input type="text" class="form-control" id="kapasitas" name="kapasitas">
            <div class="invalid-feedback">
              Please fill in the name
            </div>
          </div>
          <div class="form-group">
            <label>Alamat Ruangan</label>
            <textarea class="form-control" required="" rows="2" name="alamat_ruangan"></textarea>
            <div class="invalid-feedback">
              Please fill in the description
            </div>
          </div>
          <div class="form-group">
            <label>Kecamatan</label>
            <input type="text" class="form-control" id="kecamatan" name="kecamatan">
            <div class="invalid-feedback">
              Please fill in the name
            </div>
          </div>
          <div class="form-group">
            <label>Kabupaten</label>
            <input type="text" class="form-control" id="kabupaten" name="kabupaten">
            <div class="invalid-feedback">
              Please fill in the name
            </div>
          </div>
          <div class="form-group">
            <label>Provinsi</label>
            <input type="text" class="form-control" id="provinsi" name="provinsi">
            <div class="invalid-feedback">
              Please fill in the name
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
@endsection
    