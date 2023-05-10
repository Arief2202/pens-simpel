@extends('layouts.main')

@section('content')
<div class="card border-2 shadow rounded" style="background-color: rgba(177, 233, 255, 0.155); backdrop-filter: blur(3px);">
  <div class="card-header">
    <h2>Tambah User</h2>
  </div>
  <div class="card-6">
    <div class="card-body p-0"></div>
  </div>
  <div class="card-body" style="background-color: white">
    <div class="col-md-12">
      <form method="post" action="/register">
        @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label><strong> Nama Lengkap</strong> <span class="text-danger"><strong>*</strong></span></label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
              value="{{ old('nama') }}" placeholder="Masukkan Nama Lengkap">
            @error('nama')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="keyword"><strong> NIP</strong> <span class="text-danger"><strong>*</strong></span></label>
            <input type="number" class="form-control @error('NIP') is-invalid @enderror" name="NIP"
              value="{{ old('NIP') }}" placeholder="Masukkan NIP">
            @error('NIP')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label><strong>Email</strong> <span class="text-danger"><strong>*</strong></span></label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
              value="{{ old('email') }}" placeholder="Masukkan Email">
            @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="keyword"><strong>Password</strong> <span class="text-danger"><strong>*</strong></span></label>
            <input type="password" class="form-control " name="password" value="" required
              placeholder="Masukkan Password">
          </div>
        </div>


        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="keyword"><strong>Nomer Telepon</strong> <span
                class="text-danger"><strong>*</strong></span></label>
            <input type="number" class="form-control  @error('no_telp') is-invalid @enderror" name="no_telp"
              value="{{ old('no_telp') }}" placeholder="Masukkan Nomer Telepon">
            @error('no_telp')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group col-md-6">
            <label><strong>Prodi</strong> <span class="text-danger"><strong>*</strong></span></label>
            <div class="mb-4">
              <select class="form-control  @error('prodi_id') is-invalid @enderror" name="prodi_id" id="gender">
                <option value="">Pilih Prodi</option>
                @foreach ($prodis as $prodi)
                <option value="{{ $prodi->id }}" {{ ($prodi->id === old('prodi_id') ?
                  'selected' : '' ) }}>{{ $prodi->nama }}</option>

                @endforeach
              </select>
              @error('prodi_id')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
        </div>




        <div class="form-row">
          <div class="form-group col-md-6">
            <label><strong>Jenis Kelamin</strong> <span class="text-danger"><strong>*</strong></span></label>
            <div class="mb-4">
              <select class="form-control  @error('gender') is-invalid @enderror" name="gender" id="gender">
                <option value="laki-laki" {{ ('laki-laki'===old('gender') ?
                  'selected' : '' ) }}>Laki Laki
              </option>
              <option value="perempuan" {{ ('perempuan'===old('gender') ?
                  'selected' : '' ) }}>Perempuan
              </option>
              </select>
              @error('gender')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="form-group col-md-6">
            <label><strong>Role</strong> <span class="text-danger"><strong>*</strong></span></label>
            <div class="mb-4">
              <select class="form-control  @error('role') is-invalid @enderror" name="role" id="gender">
                <option value="">Pilih Role</option>
                <option value="p3m">P3M</option>
                <option value="dosen">Dosen</option>
              </select>
              @error('role')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label><strong> Alamat Lengkap</strong> <span class="text-danger"><strong>*</strong></span></label>
            <input type="text" class="form-control  @error('alamat') is-invalid @enderror" name="alamat"
              value="{{ old('keyword') }}" placeholder="Masukkan Alamat Lengkap">
            @error('alamat')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
        </div>
        <div class="d-flex justify-content-end mb-3 mt-3">
          <div class="form-row">
            <button class="btn btn-success" type="submit" style="width: 150px">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


{{-- <div class="card mt-3\=">
  <h5 class="card-header">Tambah Data User</h5>
  <div class="card-body p-5 d-flex justify-content-center">
    <div class="card col-md-6">
      <div class="card-body">
        <form action="/addProdi" method="post">
          <div class="form-group">
            <label for="Prodi"><strong> Nama Lengkap</strong></label>
            <input type="text" name="nama" class="form-control" id="Prodi" placeholder="Masukkan Nama Lengkap" required>
          </div>
          <div class="form-group">
            <label for="Prodi"><strong>NIP Pegawai</strong></label>
            <input type="text" name="nama" class="form-control" id="Prodi" placeholder="Masukkan NIP Pegawai" required>
          </div>
          <div class="form-group">
            <label for="Prodi"><strong>Email</strong></label>
            <input type="text" name="nama" class="form-control" id="Prodi" placeholder="Masukkan Email" required>
          </div>
          <div class="form-group">
            <label for="Prodi"><strong>Alamat Lengkap</strong></label>
            <input type="text" name="nama" class="form-control" id="Prodi" placeholder="Masukkan Alamat Lengkap"
              required>
          </div>
          <div class="form-group">
            <label for="Prodi"><strong>No Telepon</strong></label>
            <input type="text" name="nama" class="form-control" id="Prodi" placeholder="Masukkan No Telepon" required>
          </div>
          <div class="form-group">
            <label for="Prodi"><strong>Kata Sandi</strong></label>
            <input type="text" name="nama" class="form-control " id="Prodi" placeholder="Masukkan Kata Sandi" required>
          </div>
          <div class="mb-4">
            <select class="form-control" name="gender" id="gender">
              <option value="">Pilih Jenis Kelamin</option>
              <option value="1">Laki-laki</option>
              <option value="2">Perempuan</option>
            </select>
          </div>
          <div class="mb-3">
            <select class="form-control" name="gender" id="gender">
              <option value="">Pilih Role</option>
              <option value="1">P3M</option>
              <option value="2">Dosen</option>
            </select>
          </div>
          <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div> --}}


{{-- <section class="h-100 h-custom" "> --}}
  {{-- <div class=" container py-5 h-200"> --}}
  {{-- <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-lg-8 col-xl-6">
      <div class="card rounded-3">
        <div class="card-body p-4 p-md-5">
          <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Tambah Data User</h3>
          <form class="px-md-2">
            <div class="form-outline mb-2">
              <input type="text" id="Nama Lengkap" class="form-control" placeholder="Nama Lengkap" />
              <label class="form-label" for="Name"></label>
            </div>

            <form class="px-md-2">
              <div class="form-outline mb-2 col-md-50">
                <input type="text" id="Nama Lengkap" class="form-control" placeholder="NIP Pegawai" />
                <label class="form-label" for="Name"></label>
              </div>

              <form class="px-md-2">
                <div class="form-outline mb-2">
                  <input type="text" id="Nama Lengkap" class="form-control" placeholder="Email" />
                  <label class="form-label" for="Name"></label>
                </div>

                <form class="px-md-2">
                  <div class="form-outline mb-2">
                    <input type="text" id="Nama Lengkap" class="form-control" placeholder="Alamat Lengkap" />
                    <label class="form-label" for="Name"></label>
                  </div>

                  <form class="px-md-2">
                    <div class="form-outline mb-2">
                      <input type="text" id="Nama Lengkap" class="form-control" placeholder="No Telepon" />
                      <label class="form-label" for="Name"></label>
                    </div>

                    <form class="px-md-2">
                      <div class="form-outline mb-2">
                        <input type="text" id="Nama Lengkap" class="form-control" placeholder="Kata Sandi" />
                        <label class="form-label" for="Name"></label>
                      </div>

                      <div class="mb-4">
                        <select class="form-control" name="gender" id="gender">
                          <option value="">Pilih Jenis Kelamin</option>
                          <option value="1">Laki-laki</option>
                          <option value="2">Perempuan</option>
                        </select>
                      </div>

                      <div class="mb-3">
                        <select class="form-control" name="gender" id="gender">
                          <option value="">Pilih Role</option>
                          <option value="1">P3M</option>
                          <option value="2">Dosen</option>
                        </select>
                      </div>

                      <div class="mb-4"></div>
                      <button type="submit" class="btn btn-success btn-lg">Submit</button>
                    </form </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}


@endsection