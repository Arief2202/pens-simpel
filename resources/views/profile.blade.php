@extends('layouts.main')

@section('content')
<div class="mt-2 mb-2">
  <div class="card border-0 shadow rounded">
    <div class="card-header">
      <h2>{{ $title }}</h2>
    </div>
    <div class="card-body">
      <div class="row mt-2 mb-4">
        <div class="col-md-2">
          <center>
          @if (auth()->user()->gender === 'laki-laki')
          <img src="/img/male.png" width="200" height="200" alt="foto laki">
          @else
          <img src="/img/female.png" width="200" height="200" alt="foto perempuan">
          @endif
          </center>
        </div>
        <div class="col-md-10">
          <ul>
              <li>
                  <p><b>Nama : </b>{{ auth()->user()->nama }}</p>
              </li>
              <li>
                  <p><b>NIP : </b>{{ auth()->user()->NIP }}</p>
              </li>
              <li>
                  <p><b>Alamat : </b>{{ auth()->user()->alamat }}</p>
              </li>
              <li>
                  <p><b>Gender : </b>{{ auth()->user()->gender }}</p>
              </li>
              <li>
                  <p><b>Nomer Telepon : </b>{{ auth()->user()->no_telp }}</p>
              </li>
          </ul>
        </div>
      </div>
      {{-- <div class="row mt-2">
        <div class="col-md-2">
          <a href="/profile/{{ auth()->user()->id }}" class="btn btn-success me-2 mb-3 " style="width: 100%;">edit profile <i class="fa fa-edit"></i></a>
        </div>
      </div> --}}
    </div>
  </div>
</div>
@endsection