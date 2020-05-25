@extends('layouts.master')

@section('content')
<section class="section">
  <h1 class="section-header">
    <div>Administrator</div>
  </h1>
  <div class="section-body">
    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Data Administrator</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('administrator.update', $admin->id) }}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" id="name" name="name" value="{{$admin->name}}">
                      <div class="invalid-feedback">
                        Please fill in the name
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input name="email" type="email" class="form-control" value="{{$admin->email}}">
                      <div class="invalid-feedback">
                        Please fill in the name
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input name="password" type="password" class="form-control" value="{{$admin->password}}">
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
        
    