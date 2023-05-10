@extends('layouts.main')

@section('content')
<div class="row mt-2 mb-2">
  <div class="col-md-12">
    @yield('button')
    <div class="card border-2 shadow rounded" style="background-color: rgba(177, 233, 255, 0.155); backdrop-filter: blur(3px);">
      <div class="card-header p-3">
        <div class="row">
          <div class="col-lg-6 col-7">
            <h2>{{ $title }}</h2>
          </div>
          <div class="col-lg-6 col-5 my-auto text-end">
            <a href="/export-penelitian/{{ $filter['id'] }}/{{ $filter['tahun'] }}" class="btn btn-success" style="font-size: 13px">
              <i class="fa fa-download me-2"></i>Export ke Excel</a>
          </div>
        </div>
      </div>
      <div class="card-6"><div class="card-body p-0"></div></div>
        <div class="card-body" style="background-color: white">
          <div class="table-responsive">
            <table id="dtOrder" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th class="th-sm">NO</th>
                  <th class="th-sm">JUDUL</th>
                  <th class="th-sm">SKEMA</th>
                  <th class="th-sm">DOSEN</th>
                  <th class="th-sm">TAHUN</th>
                  <th class="th-sm">DETAIL  </th>
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
                    <center>
                      <div class="btn btn-sm"
                        style="border-color:{{ $border }}; border-width:2px; color: {{ $border }}; font-weight: bold; cursor: default; width: 150px;">
                        {{
                        $penelitian->skema->nama }}</div>
                    </center>
                  </td>
                  <td>
                    <ul>
                      @foreach ($penelitian->dosen as $dosen)
                      <li>{{ $dosen->nama }} <b>{{ ($dosen->id === $penelitian->dosen_id) ? '(Ketua)' : '' }}</b></li>
                      @endforeach
                    </ul>
                  </td>
                  <td>
                    <center>{{ $penelitian->tahun }}</center>
                  </td>
                  <td class="text-center">
                    <a href="/data/{{ $penelitian->id }}"><i class="fa fa-eye" style="color: rgb(5, 67, 94);"></i></a>
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
<style>
  .dataTables_length select{ 
      padding-right: 50px;
  }
</style>
<script>
  //   $(document).ready(function () {
//   $('#dtOrder').DataTable({
//     "aaSorting": [],
//     columnDefs: [{
//     orderable: false,
//     targets: [0, 5]
//     }]
//   });
//   $('.dataTables_length').addClass('bs-select');
// });
$(document).ready(function () {
  $('#dtOrder').DataTable({
    lengthMenu: [
            [5 , 10, 15, -1],
            [5 , 10, 15, 20, 25, 'All'],
        ],
    "order": [[ 0, "asc" ]],
    "aaSorting": [],
    columnDefs: [{
    orderable: false,
    targets: [5]
    }]
  });
    $('.dataTables_length').addClass('bs-select');
});
</script>
@endsection