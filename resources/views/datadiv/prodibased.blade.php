@extends('layouts.main')

@section('content')
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

    .select-box {
        cursor: pointer;
        position: relative;
        max-width: 20em;
        width: 100%;
    }

    .select {
        width: 100%;
        position: absolute;
        top: 0;
        padding: 5px 0;
        height: 40px;
        opacity: 0;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
        background: none transparent;
        border: 0 none;
    }

    .select-box1 {
        background: white;
    }
</style>
<div class="row mt-2 mb-2">
    <div class="col-md-12">
        <div class="card border-1 shadow rounded">
            <div class="card-header">
                <form action="/dataprodi" method="get" class="pt-2 pb-2">
                    {{-- @csrf --}}
                    <div class="row align-items-center ">
                        <div class="col-lg-2 d-flex flex-column">
                            <div class="select-box">
                                <select id="select-box1" name="prodi" class="browser-default custom-select" data-size="3">
                                    <option data-list="all" value="" {{ ($data->prodi === '') ? 'selected' : '' }}>Semua
                                        Prodi</option>
                                    @foreach ($prodis as $prodi)
                                    <option data-list="{{ $prodi->nama }}" value="{{ $prodi->id }}" {{ ($data->prodi ==
                                        $prodi->id) ? 'selected' : '' }}> {{ $prodi->nama }}
                                    </option>

                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 d-flex flex-column">
                            <div class="select-box">
                                <select id="select-box2" name="tahun" class="browser-default custom-select" data-size="3">
                                    <option data-list="all" value="" {{ ($data->tahun === '') ? 'selected' : '' }}>Semua
                                        Tahun</option>
                                    @foreach ($tahun as $year)
                                    <option data-list="{{ $year->tahun }}" value="{{ $year->tahun }}" {{ ($data->tahun
                                        ==
                                        $year->tahun) ? 'selected' : '' }}>{{ $year->tahun }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 d-flex flex-column">
                            <button type="submit" class="btn btn-success" style="border-color: #05445E; width: 50%">Dapatkan Data</button>
                        </div>

                </form>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach ($penelitians as $p)


                @foreach ($p as $item)

                <?php 
                $namaProdi = $prodis[0]->nama;
                foreach ($prodis as $prodi) {
                    if ($item->prodi_id === $prodi->id) {
                        $namaProdi = $prodi->nama;
                    }
                }
                 ?>
                <div class="col-md-3 project {{ $namaProdi }}  {{ $item->tahun }}">
                    <div class="card baseBlock bg-light">
                        <div class="card-body">
                            <center>
                                <h5 class="card-title">
                                    <small><b><span>{{ $namaProdi }}</span></b></small>
                                    <hr>
                                    <span>{{ $item->tahun }}</span>
                                </h5>
                            </center>
                        </div>
                        
                        <div class="card-footer">
                            <a href="/{{ $item->prodi_id }}/{{ $item->tahun }}"
                                class="btn btn-light me-3" style="border-color: #05445E"><i class="fa fa-eye me-2"></i>buka</a>
                            <span>total penelitian : {{ $item->jumlah }}</span>
                        </div>
                    </div>
                </div>

                @endforeach

                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection