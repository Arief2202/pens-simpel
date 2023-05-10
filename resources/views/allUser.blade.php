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
                        <a href="/tambah-user" class="btn btn-success" style="font-size: 13px"><i
                                class="fa fa-plus me-2"></i>Tambah User</a>
                    </div>
                </div>
            </div>
            <div class="card-6">
                <div class="card-body p-0"></div>
            </div>
            <div class="card-body" style="background-color: white">
                <div class="table-responsive">

                    @yield('button')
                    @if (session()->has('successEditProfile'))
                    <div class="alert col-8 mx-auto d-block alert-primary alert-dismissible fade show" role="alert">
                        <strong>{{ session('successEditProfile') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @if (session()->has('success'))
                    <div class="alert alert-success col-md-6 mx-auto alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
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
                                <th class="th-sm">NAMA USER</th>
                                <th class="th-sm">NIP</th>
                                <th class="th-sm">Email</th>
                                <th class="th-sm">ROLE</th>
                                <th class="th-sm">DETAIL</th>
                                <th class="th-sm">AKSI</th>
                                {{-- <th class="th-sm p-2">DETAIL</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @if ($users->count() != 0)
                            <?php $nomer = 1;?>
                            @foreach ($users as $user)
                            <?php
                            if ($user->role === "dosen") {
                              $border = 'rgb(154, 213, 90)';
                              $color = 'rgb(154, 213, 90)';
                            }elseif($user->role === "p3m") {
                              $border = 'rgb(90, 197, 213)';
                              $color = 'rgb(90, 197, 213)';
                            }
                          ?>

                            <tr style="color: black">
                                <td> {{ $nomer++ }} </td>
                                <td>{{ $user->nama }} <strong> {{ ($user->nama === auth()->user()->nama) ?
                                        ' ( Saya )' : '' }}</strong></td>
                                <td> {{ $user->NIP }} </td>
                                <td> {{ $user->email }} </td>
                                <td>
                                    <center>
                                        <div class="btn btn-sm"
                                            style="font-size: 14px; border-color:{{ $border }}; border-width:2px; color: {{ $border }}; font-weight: bold; cursor: default; width: 120px;">
                                            {{
                                            $user->role }}</div>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <a href="/detailProfile/{{ $user->id }}"><i class="fa fa-eye"
                                                style="color: rgb(5, 67, 94);"></i></a>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <div class="row">
                                            <div class="col">
                                                <div class="d-flex justify-content-between">
                                                    <form action="/user/{{ $user->id }}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="badge bg-danger border-0 p-2"
                                                            onclick="return confirm('Apakah Anda Yakin Ingin Menghapus User Tersebut??')"><i
                                                                class="fa-solid fa-trash"></i></button>
                                                    </form>
                                                    <a href="/profile/{{ $user->id }}"
                                                        class="badge bg-warning border-0 p-2"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                </div>
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
    targets: [5,6]
    }]
  });
    $('.dataTables_length').addClass('bs-select');
});
</script>
@endsection