@extends('layouts.main')

@section('content')
<div class="row mt-2 mb-2">
  <div class="col-md-12">
    <div class="card border-1 shadow rounded">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-6 col-7">
                  <h2>Grafik Penelitian PENS</h2>
                </div>
                <div class="col-lg-6 col-5 my-auto text-end">
                  <div class="dropdown float-lg-end pe-4">
                    <b>( Grafik Berdasar @yield('tema'))</b>
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