@extends('layouts.master')

@section('content')
<section class="section">
  <h1 class="section-header">
    <div>ulasanRuangan</div>
  </h1>
  <div class="section-body">
    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Data ulasan</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('ulasan.update', $ulasan->id_ulasan) }}" method="POST">
                  {{csrf_field()}}
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{$ulasan->nama}}">
                    <div class="invalid-feedback">
                      Please fill in the name
                    </div>
                  </div>
                  <div class="form-group">
                      <label>Pekerjaan</label>
                      <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="{{$ulasan->pekerjaan}}">
                      <div class="invalid-feedback">
                        Please fill in the name
                      </div>
                  </div>
                  <div class="form-group">
                      <label>Deskripsi Ulasan</label>
                      <textarea class="form-control" name="desc_ulasan" required="" rows="5">{{$ulasan->desc_ulasan}}</textarea>
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
        
    