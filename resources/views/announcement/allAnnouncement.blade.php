@extends('layouts.main')

@section('content')
<div class="row mt-2 mb-2">
    <div class="col-md-12">
        @yield('button')
        <div class="card border-0 shadow rounded">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-6 col-7">
                      <h2>{{ $title }}</h2>
                    </div>
                    <div class="col-lg-6 col-5 my-auto text-end">
                        <a href="tambahpengumuman" class="btn btn-success"  style="font-size: 13px"><i class="fa fa-plus me-2"></i>Buat Baru</a>
                    </div>
                  </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    
                    @if (session()->has('successEdit'))
                    <div class="alert alert-success col-md-6 mx-auto alert-dismissible fade show" role="alert">
                        <strong>{{ session('successEdit') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <table id="dtOrder" class="table table-striped table-bordered table-sm" cellspacing="0"
                        width="100%">
                        <thead>
                            <tr>
                                <th class="th-sm p-2">NO</th>
                                <th class="th-sm p-2">JUDUL PENGUMUMAN</th>
                                <th class="th-sm p-2">PEMBUAT</th>
                                <th class="th-sm p-2">ACTION</th>
                                <th class="th-sm p-2">DETAIL</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($pengumumans->count() != 0)
                            <?php $nomer = 1;?>
                            @foreach ($pengumumans as $pengumuman)




                            <tr style="color: black">
                                <td class="p-2"> {{ $nomer++ }} </td>
                                <td class="p-2">{{ $pengumuman->judul }}</td>
                                <td class="p-2">{{ $pengumuman->dosen->nama }}</td>

                                <td class="p-2">
                                    <center><div class="row">
                                        <div class="col">
                                            <a href="/editpengumuman/{{ $pengumuman->id }}" class="badge bg-warning border-0 p-2"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        </div>
                                        <div class="col">
                                            <form action="/pengumuman/{{ $pengumuman->id }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="badge bg-danger border-0 p-2"
                                                    onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Pengumuman Tersebut??')"><i
                                                        class="fa-solid fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </div></center>
                                </td>

                                <td class="text-center p-2">
                                    <a href="/detailpengumuman/{{ $pengumuman->id }}"><i class="fa fa-eye"
                                            style="color: rgb(5, 67, 94);"></i></a>
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
<script>
    $(document).ready(function () {
  $('#dtOrder').DataTable({
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