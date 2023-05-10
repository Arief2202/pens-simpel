@extends('layouts.main')

@section('content')
<div class="row mt-2 mb-2">
  <div class="col-md-12">
    <div class="card border-2 shadow rounded" style="background-color: rgba(177, 233, 255, 0.155); backdrop-filter: blur(3px);">
        <div class="card-header">
            <h2>Tambah Prodi</h2>
          </div>
        <div class="card-6"><div class="card-body p-0"></div></div>
        <div class="card-body" style="background-color: white">
            <form action="/addProdi" method="post">
                @csrf
                <div class="form-group">
                    <label for="Prodi"><strong> Nama Prodi</strong></label>
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                        id="Prodi" placeholder="Masukkan Prodi" required>
                    @error('nama')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success" style="width: 150px">Buat</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
@yield('card')
@endsection