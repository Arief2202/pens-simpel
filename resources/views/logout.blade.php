@extends('layouts.main')

@section('content')
<div class="container px-4 px-lg-5 h-100 pt-3">
    <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center">
        <div class="row mt-2 mb-4">
            <center>
                @if (auth()->user()->gender === 'laki-laki')
                <img src="/img/male.png" width="200" height="200" alt="foto laki">
                @else
                <img src="/img/female.png" width="200" height="200" alt="foto perempuan">
                @endif
                <div class="pt-3 pb-3">
                    <h2>Apakah anda yakin ingin keluar?</h2>
                </div>

                {{-- <div class="row">
                    <div class="col align-self-end">
                        <form action="/logout" method="post">
                            @csrf
                            <button class="btn btn-success align-self-end" role="button"
                                style="width: 100px">Ya</button>
                        </form>
                    </div>
                    <div class="col align-self-start">
                        <a href="\home" class="btn btn-danger" role="button" style="width: 100px">Tidak</a>
                    </div>
                </div> --}}
                {{-- <div class="btn btn-success" role="button" style="width: 100px"> --}}
                    <form action="/logout" class="d-inline " method="post">
                        @csrf
                        <button class="btn btn-success col-md-1">Ya</button>
                        {{-- <span></span> --}}
                    </form>
                    {{--
                </div> --}}
                <a href="\home" class="btn btn-danger" role="button" style="width: 100px">Tidak</a>
            </center>
        </div>
    </div>
</div>
@endsection