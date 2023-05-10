@extends('layouts.main')

@section('content')
<div class="row mt-2 mb-2">
  <div class="col-md-12">
    {{-- <div class="card border-2 shadow rounded" style="background-color: rgba(255, 255, 255, 0.477); backdrop-filter: blur(3px);"> --}}
      <div class="card border-2 shadow rounded" style="background-color: rgba(177, 233, 255, 0.155); backdrop-filter: blur(3px);">  
        <div class="card-header">
            <div class="row">
                <div class="col-lg-6 col-7">
                  <h2>Grafik Penelitian PENS</h2>
                </div>
                <div class="col-lg-6 col-5 my-auto text-end">
                  <div class="dropdown float-lg-end">
                    <a class="btn btn-success" alt="filter grafik" role="button" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 13px">
                      Grafik @yield('tema') <i class="fa fa-chevron-down me-2"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                      <li><a class="dropdown-item border-radius-md" href="\home">Grafik Berdasar Tahun Penelitian</a></li>
                      <li><a class="dropdown-item border-radius-md" href="\barProdi">Grafik Berdasar Prodi Penelitian</a></li>
                    </ul>
                  </div>
                </div>
              </div>
        </div>
        <div class="card-6"><div class="card-body p-0"></div></div>
        <div class="card-body" style="background-color: white">
          
            @yield('buttonchart')
            <div class="row ">
                <div class="col-md-12">
                    <div class="shadow1">
                        <div class="content pt-2 pb-2">
                            @yield('chart')
                        </div>
                    </div>
                </div>
            </div>
            <h6>Total Penelitian = {{ $jumlah }}</h6>
        </div>
    </div>
  </div>
</div>
@yield('card')
@endsection