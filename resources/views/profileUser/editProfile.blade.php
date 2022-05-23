@extends('layouts.main')

<div class="container">

    @if (session()->has('successEditProfile'))
    <div class="alert col-8 mx-auto d-block alert-primary alert-dismissible fade show" role="alert">
        <strong>{{ session('successEditProfile') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif


    <form action="/profile/{{ $dosen->id }}" method="post">
        @method('put')
        @csrf
        <div class="row justify-content-center">
            {{-- <p>{{ $dosen->nama }}</p> --}}
            <div class="col-4">
                <div class="mt-4">
                    <label class="form-label">Masukkan Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama"
                        name="nama" value="{{ old('nama', $dosen->nama) }}">

                </div>
                <div class="mt-4">
                    <label class="form-label">Masukkan Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                        name="email" value="{{ old('email', $dosen->email) }}">
                </div>
                <div class="mt-4">
                    <label class="form-label">Masukkan Nomer Telepon</label>
                    <input type="text" class="form-control @error('no_telp') is-invalid @enderror"
                        placeholder="Nomer Telepon" name="no_telp" value="{{ old('no_telp', $dosen->no_telp) }}">
                </div>
            </div>
            <div class="col-4">
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
                    <select class="form-control  @error('prodi_id') is-invalid @enderror" aria-placeholder="halo"
                        name="prodi_id" id="exampleFormControlSelect1">
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
                <a href="/home">back</a>
                <button type=" submit">Ubah</button>
            </div>

    </form>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>