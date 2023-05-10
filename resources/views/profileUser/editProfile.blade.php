@extends('layouts.main')

@section('content')
<div class="row mt-2 mb-2">
    <div class="col-md-12">
    @if (session()->has('successEditProfile'))
    <div class="alert mx-auto d-block alert-primary alert-dismissible fade show" role="alert">
        <strong>{{ session('successEditProfile') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif


    <div class="card border-2 shadow rounded"
    style="background-color: rgba(177, 233, 255, 0.155); backdrop-filter: blur(3px);">
        <h2 class="card-header">Edit Profile</h2>
        <div class="card-6">
            <div class="card-body p-0"></div>
        </div>
        <div class="card-body" style="background-color: white">
            <form action="/profile/{{ $dosen->id }}" method="post">
                @method('put')
                @csrf
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="mt-4">
                            <label class="form-label">Masukkan Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                placeholder="Nama" name="nama" value="{{ old('nama', $dosen->nama) }}">

                        </div>
                        <div class="mt-4">
                            <label class="form-label">Masukkan Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror"
                                placeholder="Email" name="email" value="{{ old('email', $dosen->email) }}">
                        </div>
                        <div class="mt-4">
                            <label class="form-label">Masukkan Nomer Telepon</label>
                            <input type="text" class="form-control @error('no_telp') is-invalid @enderror"
                                placeholder="Nomer Telepon" name="no_telp"
                                value="{{ old('no_telp', $dosen->no_telp) }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mt-4">
                            <label class="form-label">Masukkan NIP</label>
                            <input type="text" class="form-control @error('NIP') is-invalid @enderror" placeholder="NIP"
                                name="NIP" value="{{ old('NIP', $dosen->NIP) }}">
                        </div>
                        <div class="mt-4">
                            <label class="form-label">Masukkan Alamat</label>
                            <input type="text" class="form-control @error('NIP') is-invalid @enderror" placeholder="NIP"
                                name="alamat" value="{{ old('alamat', $dosen->alamat) }}">
                        </div>
                        <div class="mt-4">
                            <label class="form-label">Masukkan Prodi</label>
                            <select class="form-control  @error('prodi_id') is-invalid @enderror"
                                aria-placeholder="halo" name="prodi_id" id="exampleFormControlSelect1">
                                {{-- <option value="">Pilih Prodi</option> --}}
                                @foreach ($prodis as $prodi)
                                <option value="{{ $prodi->id }}" {{ ($prodi->id === old('prodi_id', $dosen->prodi_id) ?
                                    'selected' : '' ) }}>{{ $prodi->nama }}</option>

                                @endforeach
                            </select>


                        </div>
                        <div class=" mt-4">
                            <label class="form-label">Masukkan Gender</label>
                            <select class="form-select @error('gender') is-invalid @enderror" name="gender"
                                aria-label="Default select example">
                                <option value="laki-laki" {{ ('laki-laki'===old('gender', $dosen->gender) ?
                                    'selected' : '' ) }}>Laki Laki
                                </option>
                                <option value="perempuan" {{ ('perempuan'===old('gender', $dosen->gender) ?
                                    'selected' : '' ) }}>Perempuan
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mt-4">
                        <a href="/kelolaUser" class="btn btn-secondary" style="width: 150px">batal</a>
                        <button class="btn btn-success" type=" submit" style="width: 150px">Ubah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
@endsection