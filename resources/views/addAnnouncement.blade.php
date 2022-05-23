@extends('layouts.main')

@section('content')
<div class="row mt-2 mb-4">
    {{-- <div class="col-md-12">
        <div class="card border-0 shadow rounded">
            <div class="card-header">
                <h2>Update Pengumuman</h2>
            </div>
            <div class="card-body">
              <div class="row mt-4 mb-4">
                <div class="col-md-12">
                    <table class="table">
                        <tbody>
                            <tr>
                              <td class="col-3" style="background-color: orange">14 Februari 2022</td>
                              <td class="col-9">No. Surat: 0054/E5/AK.</td>
                            </tr>
                            <tr>
                              <td colspan="2">
                                <h5>Program penelitian Lanjutan (On Going)</h5>
                                <p>P3M telah menyatakan bahwa... <a href="#">buka selengkapnya</a></p>
                                <a href="#" class="btn btn-success mb-3" role="button"><i class="fa fa-file-pdf-o me-2"></i>Download</a>
                              </td>
                            </tr>
                            <tr>
                              <td class="col-2" style="background-color: orange">14 Februari 2022</td>
                              <td class="col-10">No. Surat: 0054/E5/AK.</td>
                            </tr>
                            <tr>
                              <td colspan="2">
                                <h5>Program penelitian Lanjutan (On Going)</h5>
                                <p>P3M telah menyatakan bahwa... <a href="#">buka selengkapnya</a></p>
                                <a href="#" class="btn btn-success mb-3" role="button"><i class="fa fa-file-pdf-o me-2"></i>Download</a>
                              </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div> --}}

      <div class="col-md-8 mt-2">
        <div class="card border-0 shadow rounded">
          <div class="card-header">
            <h2>Pengumuman</h2>
          </div>
          <div class="card-body pt-4 p-3 hero-img ">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center mb-3">
              <div class="col-lg-4 d-flex flex-column justify-content-center">
                <img src="../img/pens.jpg" class="img-thumbnail" alt="">
              </div>
              <div class="col-lg-8">
                <a href="announcement_detail.blade.php"><h6>Peneliti PENS Berhasil Sabet Juara 1 di Penelitian Terapan Tingkat Nasional 2021</h6></a>
                <span><i style="color: grey"><i class="fa fa-calendar"></i> 15 Mei 2022</i></span>       
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-2">
        <div class="card border-0 shadow rounded h-100 mb-4">
          <div class="card-header pt-2 pb-2 px-3">
            <div class="row">
              <div class="col-md-6">
                <h6 class="mb-0">Timeline Terkini</h6>
              </div>
              <div class="col-md-6 d-flex justify-content-start justify-content-md-end align-items-center">
                <small>rentang tanggal 23 - 30 Mei 2022</small>
              </div>
            </div>
          </div>
          <div class="card-body pt-4 p-3">
            <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">terbaru</h6>
          </div>
        </div>
      </div>
</div>

@endsection