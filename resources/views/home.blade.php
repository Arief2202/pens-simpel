@extends('layouts.main')

@section('content')
<button class="openbtn" onclick="openNav()">☰ Tampilkan Menu</button>

<div class="card border-0 shadow rounded mt-2">
    <div class="card-header">
        <div class="btn-group dropright">
            <h2 style="align-self: center">Grafik Penelitian PENS</h2>

        </div>
    </div>
    <div class="card-body">
        <button class="btn-light dropdown-toggle dropdown-toggle-split pt-1 pb-2" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">filter
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="\home">Berdasar Tahun Penelitian</a>
            <a class="dropdown-item" href="\barProdi">Berdasar Prodi Penelitian</a>
        </div>
        <a href="\home" class="btn btn-light" role="button" style="border-color: grey; border-width: 2px;"><i
                class="fa fa-bar-chart me-2"></i>Bar Chart</a>
        <a href="\pieYear" class="btn btn-light" role="button" style="border-color: grey; border-width: 2px;"><i
                class="fa fa-pie-chart me-2"></i>Pie Chart</a>
        <div class="row ">
            <div class="col-md-6">
                <div class="shadow1" style="padding: 5%">
                    <div class="content">
                        @yield('chartTahun')
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-header" style="margin-top: 20px">
                    <center>
                        <h5>Total Seluruh Penelitian: {{ $jumlah }}</h5>
                    </center>
                </div>
                {{-- <div style="background-color:#e9e9e97c">@include('yearChart.cardYear')</div> --}}
                @include('yearChart.cardYear')
            </div>
        </div>
    </div>
</div>
@endsection