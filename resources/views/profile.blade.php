@extends('layouts.main')

@section('content')
<div class="mt-2 mb-2">
  <div class="card border-2 shadow rounded" style="background-color: rgba(177, 233, 255, 0.155); backdrop-filter: blur(3px);">
      <div class="card-header" >
        <h2>{{ $title }}</h2>
      </div>
      <div class="card-6"><div class="card-body p-0"></div></div>
      <div class="card-body" style="background-color: white">
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
        <div class="col-md-8">
          <ul>
              <li class="row">
                  <p class="col-md-3"><b>Nama </b></p><p class="col-md-auto">: {{ auth()->user()->nama }}</p>
              </li>
              <li class="row">
                <p class="col-md-3"><b>NIP </b></p><p class="col-md-auto">: {{ auth()->user()->NIP }}</p>
              </li>
              <li class="row">
                <p class="col-md-3"><b>Alamat </b></p><p class="col-md-auto">: {{ auth()->user()->alamat }}</p>
              </li>
              <li class="row">
                <p class="col-md-3"><b>Gender </b></p><p class="col-md-auto">: {{ auth()->user()->gender }}</p>
              </li>
              <li class="row">
                <p class="col-md-3"><b>Nomor Telepon </b></p><p class="col-md-auto">: {{ auth()->user()->no_telp }}</p>
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