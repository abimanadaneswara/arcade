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
                <h4>Edit Data Kategori</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('kategori.update', $kategori->id_kategori) }}" method="POST">
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
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
        
    