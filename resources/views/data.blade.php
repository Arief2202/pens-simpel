@extends('layouts.main')

@section('content')
<div class="row mt-2 mb-2">
  <div class="col-md-12">
    @yield('button')
    <div class="card border-0 shadow rounded">
      <div class="card-header">
        <h2>{{ $title }}</h2>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="dtOrderExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th class="th-sm">NO</th>
                <th class="th-sm">JUDUL</th>
                <th class="th-sm">SKEMA</th>
                <th class="th-sm">DOSEN</th>
                <th class="th-sm">TAHUN</th>
                <th class="th-sm">DETAIL</th>
              </tr>
            </thead>
            <tbody>
              @if ($penelitians->count() != 0)
              <?php $nomer = 1;?>
              @foreach ($penelitians as $penelitian)

              <?php
                                      if ($penelitian->skema->nama === "Dasar") {
                                        $border = 'rgb(213, 90, 90)';
                                        $color = 'rgb(213, 90, 90)';
                                      }elseif ($penelitian->skema->nama === "Terapan") {
                                        $border = 'rgb(208, 122, 56)';
                                        $color = 'rgb(208, 122, 56)';
                                      }elseif ($penelitian->skema->nama === "Unggulan") {
                                        $border = 'rgb(154, 213, 90)';
                                        $color = 'rgb(154, 213, 90)';
                                      }else {
                                        $border = 'rgb(90, 197, 213)';
                                        $color = 'rgb(90, 197, 213)';
                                      }
                                    ?>


              <tr>
                <td> {{ $nomer++ }} </td>
                <td>{{ $penelitian->judul }}</td>
                <td>
                  <div class="btn btn-sm"
                    style="background-color:{{ $border }}; color: white; font-weight: bold; cursor: default;">{{
                    $penelitian->skema->nama }}</div>
                </td>
                <td>
                  <ul>
                    @foreach ($penelitian->dosen as $dosen)
                    <li>{{ $dosen->nama }}</li>
                    @endforeach
                  </ul>
                </td>
                <td>{{ $penelitian->tahun }}</td>
                <td class="text-center">
                  <a href="/data/{{ $penelitian->id }}" class="btn btn-sm btn-success"><i
                      class="fa fa-external-link"></i></a>
                </td>
              </tr>


              @endforeach
              @else
              <div class="alert alert-danger">
                Data Penelitian belum Tersedia.
              </div>
              @endif
            </tbody>
          </table>
          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection