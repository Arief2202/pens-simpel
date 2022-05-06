@extends('layouts.main')

@section('content')
<button class="openbtn" onclick="openNav()">☰ Tampilkan Menu</button>
<div class="row mt-2 mb-4">
    <div class="col-md-12">
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
    </div>
</div>

@endsection