@extends('layouts.main')

@section('content')
<button class="openbtn" onclick="openNav()">☰ Tampilkan Menu</button>

<div class="card border-1 shadow rounded mt-2 mb-2">
    <div class="card-header">
        {{-- <div class="btn-group dropright">
            <h2 style="align-self: center">Grafik Penelitian PENS</h2>
        </div> --}}
        <div class="row">
            <div class="col-lg-6 col-7">
              <h2>Grafik Penelitian PENS</h2>
            </div>
            <div class="col-lg-6 col-5 my-auto text-end">
              <div class="dropdown float-lg-end pe-4">
                (Grafik Berdasar Tahun)
                <a class="cursor-pointer pl-2" alt="filter grafik" role="button" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-ellipsis-v text-secondary"></i>
                </a>
                <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                  <li><a class="dropdown-item border-radius-md" href="\home">Berdasar Tahun Penelitian</a></li>
                  <li><a class="dropdown-item border-radius-md" href="\barProdi">Berdasar Prodi Penelitian</a></li>
                </ul>
              </div>
            </div>
          </div>
    </div>
    <div class="card-body">
        {{-- <button class="btn-light dropdown-toggle dropdown-toggle-split pt-1 pb-2" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">filter
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="\home">Berdasar Tahun Penelitian</a>
            <a class="dropdown-item" href="\barProdi">Berdasar Prodi Penelitian</a>
        </div> --}}
        <a href="\home" class="btn btn-light" role="button" style="border-color: grey; border-width: 2px;"><i
                class="fa fa-bar-chart me-2"></i>Bar Chart</a>
        <a href="\pieYear" class="btn btn-light" role="button" style="border-color: grey; border-width: 2px;"><i
                class="fa fa-pie-chart me-2"></i>Pie Chart</a>
        <div class="row ">
            <div class="col-md-12">
                <div class="shadow1">
                    <div class="content pt-2 pb-2">
                        @yield('chartTahun')
                    </div>
                </div>
            </div>
        </div>
        <h6>Total Penelitian = {{ $jumlah }}</h6>
    </div>
</div>
@include('yearChart.cardYear')
@endsection