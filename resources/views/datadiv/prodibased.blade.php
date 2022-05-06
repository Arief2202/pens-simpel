@extends('layouts.main')

@section('content')
<button class="openbtn" onclick="openNav()">☰ Tampilkan Menu</button>
<style>
    .baseBlock {
        margin: 0px 0px 35px 0px;
        padding: 0 0 15px 0px;
        border-radius: 5px;
        overflow: hidden;
        background: #fff;
        -moz-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
        -o-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
        transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .baseBlock:hover {
        -webkit-transform: translate(0, -8px);
        -moz-transform: translate(0, -8px);
        -ms-transform: translate(0, -8px);
        -o-transform: translate(0, -8px);
        transform: translate(0, -8px);
        box-shadow: 0 40px 40px rgba(0, 0, 0, 0.2);
    }

</style>
<div class="row mt-4 mb-4">
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                @foreach ($penelitians as $penelitian)

                <?php
                        foreach ($prodis as $prodi ) {
                            if ($penelitian->prodi_id === $prodi->id) {
                                $namaProdi = $prodi->nama;
                                $jumlah = $penelitian->jumlah;
                            }
                        }
                    ?>
                <div class="col-md-4">
                    <div class="card baseBlock bg-light">
                        <div class="card-body">
                            <center>
                                <h4 class="card-title">{{ $namaProdi }}</h4>
                            </center>
                        </div>
                        <div class="card-footer">
                        <a href="/dataprodi/{{ $penelitian->prodi_id}}" class="btn btn-success me-3">lihat</a> total penelitian : {{ $jumlah }}
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
</div>

@endsection