@extends('layouts.master')
@section('content')

    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Data Ruangan</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('ruangan.update', $ruangan->id_ruangan) }}" method="POST">
                  {{csrf_field()}}
                    <div class="form-group form-group-default">
                      <label>Nama Ruangan</label>
                      <input id="nama_ruangan" name="nama_ruangan" type="text" class="form-control" value="{{$ruangan->nama_ruangan}}">
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group form-group-default">
                          <label>Kategori Ruangan</label>
                          <input id="kategori_id_kategori" name="kategori_id_kategori" type="text" class="form-control" value="{{$ruangan->kategori_id_kategori}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group form-group-default">
                          <label>Pemilik</label>
                          <input id="id_pemilik" name="id_pemilik" type="text" class="form-control" value="{{$ruangan->id_pemilik}}">
                        </div>
                      </div>
                    </div>
                  <div class="form-group form-group-default">
                    <label>Harga Ruangan</label>
                    <input id="harga" name="harga" type="text" class="form-control" value="{{$ruangan->harga}}">
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group form-group-default">
                        <label>Ukuran Ruangan</label>
                        <input id="ukuran" name="ukuran" type="text" class="form-control" value="{{$ruangan->ukuran}}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group form-group-default">
                        <label>Kapasitas Ruangan</label>
                        <input id="kapasitas" name="kapasitas" type="text" class="form-control" value="{{$ruangan->kapasitas}}">
                      </div>
                    </div>
                  </div>
                    <div class="form-group form-group-default">
                      <label>Alamat Ruangan</label>
                      <textarea class="form-control" required="" rows="3" name="alamat_ruangan">{{$ruangan->alamat_ruangan}}</textarea>
                    </div>
                  <div class="row">
                    <div class="col-md-6 pr-0">
                      <div class="form-group form-group-default">
                        <label>Kecamatan</label>
                        <input id="kecamatan" name="kecamatan" type="text" class="form-control" value="{{$ruangan->kecamatan}}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group form-group-default">
                        <label>Kabupaten</label>
                        <input id="kabupaten" name="kabupaten" type="text" class="form-control" value="{{$ruangan->kabupaten}}">
                      </div>
                    </div>
                  </div>
                    <div class="form-group form-group-default">
                      <label>Provinsi</label>
                      <input id="provinsi" name="provinsi" type="text" class="form-control" value="{{$ruangan->provinsi}}">
                    </div>
                    <div class="form-group form-group-default">
                      <label>Deskripsi Ruangan</label>
                      <textarea class="form-control" required="" rows="6" name="deskripsi">{{$ruangan->deskripsi}}</textarea>
                    </div>
                    <div class="form-group form-group-default">
                      <label>Foto</label>
                      <input id="foto" name="foto" type="file" class="form-control-file" value="{{$ruangan->foto}}">
                    </div>
                  <div class="modal-footer no-bd">
                    <button type="submit" id="addRowButton" class="btn btn-primary">Simpan</button>
                  </div>
                </form>
            </div>
        </div>
      </div>
    </div>
  
@endsection
        
    