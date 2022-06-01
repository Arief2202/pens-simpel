@extends('layouts.main')

@section('content')
<div class="container px-4 px-lg-5 h-100 pt-3">
    <div class="row gx-lg-5 h-100 align-items-center justify-content-center">
        <div class="row mt-2 mb-4">
            <center>
                <div class="col-md-8 p-5 shadow" style="background-color: rgba(255, 255, 255, 0.477); backdrop-filter: blur(3px);">
                    @if (auth()->user()->gender === 'laki-laki')
                    <img src="/img/male.png" width="200" height="200" alt="foto laki">
                    @else
                    <img src="/img/female.png" width="200" height="200" alt="foto perempuan">
                    @endif
                    <div class="pt-3 pb-3">
                        <h2>Apakah anda yakin ingin keluar?</h2>
                    </div>
                        <form action="/logout" class="d-inline " method="post">
                            @csrf
                            <button class="btn btn-success" style="width: 100px">Ya</button>
                            {{-- <span></span> --}}
                        </form>
                    <a href="\home" class="btn btn-danger" role="button" style="width: 100px">Tidak</a>
                </div>
            </center>
        </div>
    </div>
</div>
@endsection