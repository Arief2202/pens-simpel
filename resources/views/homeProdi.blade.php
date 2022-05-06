@extends('layouts.main')

@section('content')
<button class="openbtn" onclick="openNav()">☰ Tampilkan Menu</button>
<div class="row mt-2 mb-4">
    <div class="col-md-12">
        <div class="card border-0 shadow rounded">
            <div class="card-header">
                <div class="btn-group dropright">
                    <h2 style="align-self: center">Grafik Penelitian PENS</h2>
                    
                </div>
            </div>
            <div class="card-body">
                    <button class="btn-light dropdown-toggle dropdown-toggle-split pt-1 pb-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">filter
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="\">Berdasar Tahun Penelitian</a>
                        <a class="dropdown-item" href="\barProdi">Berdasar Prodi Penelitian</a>
                    </div>
                <a href="\barProdi" class="btn btn-light" role="button" style="border-color: grey; border-width: 2px;><i class="fa fa-bar-chart me-2"></i>Bar Chart</a>
                <a href="\pieProdi" class="btn btn-light" role="button" style="border-color: grey; border-width: 2px;><i class="fa fa-pie-chart me-2"></i>Pie Chart</a>
                <div class="shadow1">
                    <div class="content"> 
                        @yield('chartProdi')
                    </div>
                </div>
            </div>
            <p class="card-text">*total penelitian = {{ $jumlah }}</p>
        </div>
    </div>
@include('prodiChart.cardProdi')
</div>

@endsection