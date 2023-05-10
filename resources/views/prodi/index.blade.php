@extends('layouts.main')

@section('content')
<div class="row mt-2 mb-2">
    <div class="col-md-12">
        <div class="card border-2 shadow rounded" style="background-color: rgba(177, 233, 255, 0.155); backdrop-filter: blur(3px);">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <h2>{{ $title }}</h2>
                    </div>
                    <div class="col-lg-6 col-5 my-auto text-end">
                        <a href="/addProdi" class="btn btn-success" style="font-size: 13px"><i
                                class="fa fa-plus me-2"></i>Tambah Prodi</a>
                    </div>
                </div>
            </div>
            <div class="card-6">
                <div class="card-body p-0"></div>
            </div>
            <div class="card-body" style="background-color: white">
                <div class="table-responsive">

                    @yield('button')
                    @if (session()->has('successProdi'))
                    <div class="alert col-8 mx-auto d-block alert-primary alert-dismissible fade show" role="alert">
                        <strong>{{ session('successProdi') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @if (session()->has('successEdit'))
                    <div class="alert col-8 mx-auto d-block alert-primary alert-dismissible fade show" role="alert">
                        <strong>{{ session('successEdit') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif


                    @if (session()->has('successDestroy'))
                    <div class="alert alert-danger col-md-6 mx-auto alert-dismissible fade show" role="alert">
                        <strong>{{ session('successDestroy') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    <table id="dtOrder" class="table table-striped table-bordered table-sm" cellspacing="0"
                        width="100%">
                        <thead>
                            <tr>
                                <th class="th-sm">NO</th>
                                <th class="th-sm">NAMA PRODI</th>
                                <th class="th-sm">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($prodis->count() != 0)
                            <?php $nomer = 1;?>
                            @foreach ($prodis as $prodi)


                            <tr style="color: black">
                                <td> {{ $nomer++ }} </td>
                                <td>{{ $prodi->nama }} </td>


                                <td>
                                    <center>
                                        <div class="row ">
                                            <div class="col d-flex justify-content-around">
                                                <form action="/addProdi/{{ $prodi->id }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="badge bg-danger border-0 p-2"
                                                        onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Prodi Tersebut??')"><i
                                                            class="fa-solid fa-trash"></i></button>
                                                </form>
                                                <a href="/editProdi/{{ $prodi->id }}" class="badge badge-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                            </div>
                                        </div>
                                    </center>
                                </td>


                            </tr>


                            @endforeach
                            @else
                            <div class="alert alert-danger">
                                User Kosong
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
    .dataTables_length select {
        padding-right: 50px;
    }
</style>
<script>
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
    targets: [2]
    }]
  });
    $('.dataTables_length').addClass('bs-select');
});
</script>
@endsection