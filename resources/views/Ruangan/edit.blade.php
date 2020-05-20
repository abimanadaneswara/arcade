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
                <h4>Edit Data Ruangan</h4>
            </div>
            <div class="card-body">
                {{-- <form action="{{ route('kategori.update', $kategori->id_kategori) }}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="{{$kategori->nama_kategori}}">
                        <div class="invalid-feedback">
                        Please fill in the name
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Kategori</label>
                        <textarea class="form-control" required="" rows="3" name="desc_kategori">{{$kategori->desc_kategori}}</textarea>
                        <div class="invalid-feedback">
                        Please fill in the description
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form> --}}
                <form action="{{ route('ruangan.update', $ruangan->id_ruangan) }}" method="POST">
                  {{csrf_field()}}
                  <div class="form-group">
                    <label>Nama Ruangan</label>
                    <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan" value="{{$ruangan->nama_ruangan}}">
                    <div class="invalid-feedback">
                      Please fill in the name
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Kategori Ruangan</label>
                    <input type="text" class="form-control" id="kategori_id_kategori" name="kategori_id_kategori" value="{{$ruangan->kategori_id_kategori}}">
                    <div class="invalid-feedback">
                      Please fill in the name
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Pemilik</label>
                    <input type="text" class="form-control" id="id_pemilik" name="id_pemilik" value="{{$ruangan->id_pemilik}}">
                    <div class="invalid-feedback">
                      Please fill in the description
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Harga Ruangan</label>
                    <input type="text" class="form-control" id="harga" name="harga" value="{{$ruangan->harga}}">
                    <div class="invalid-feedback">
                      Please fill in the name
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Ukuran Ruangan</label>
                    <input type="text" class="form-control" id="ukuran" name="ukuran" value="{{$ruangan->ukuran}}">
                    <div class="invalid-feedback">
                      Please fill in the name
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Kapasitas Ruangan</label>
                    <input type="text" class="form-control" id="kapasitas" name="kapasitas" value="{{$ruangan->kapasitas}}">
                    <div class="invalid-feedback">
                      Please fill in the name
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Alamat Ruangan</label>
                    <textarea class="form-control" required="" rows="2" name="alamat_ruangan">{{$ruangan->alamat_ruangan}}</textarea>
                    <div class="invalid-feedback">
                      Please fill in the description
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Kecamatan</label>
                    <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="{{$ruangan->kecamatan}}">
                    <div class="invalid-feedback">
                      Please fill in the name
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Kabupaten</label>
                    <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="{{$ruangan->kabupaten}}">
                    <div class="invalid-feedback">
                      Please fill in the name
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Provinsi</label>
                    <input type="text" class="form-control" id="provinsi" name="provinsi" value="{{$ruangan->provinsi}}">
                    <div class="invalid-feedback">
                      Please fill in the name
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Deskripsi Ruangan</label>
                    <textarea class="form-control" required="" rows="5" name="deskripsi">{{$ruangan->deskripsi}}</textarea>
                    <div class="invalid-feedback">
                      Please fill in the name
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
        
    