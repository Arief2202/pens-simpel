@extends('layouts.main')

@section('content')
<div class="row mt-2 mb-2">
    <div class="col-md-12">
        <div class="table-responsive mt-2">
            <table class="table table-bordered">
                <thead>
                    <tr style="color: #D4F1F4; background-color: #05445E">
                        <th>Skema</th>
                        <th>Dosen</th>
                        <th>Group Riset</th>
                        <th>Tahun</th>
                        <th>Lama Penelitian</th>
                        <th>Tahun Pekerjaan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="background-color: rgba(255, 255, 255, 0.477);
                    backdrop-filter: blur(5px); color:#05445E">
                        <td>{{ $penelitian->skema->nama }}</td>
                        <td>
                            <ul>
                                @foreach ($penelitian->dosen as $dosen)
                                <li>{{ $dosen->nama }} <b> {{ ($dosen->id === $penelitian->dosen_id) ? '(Ketua)' : '' }}
                                    </b>
                                </li>
                                @endforeach
                            </ul>
                        </td>
                        {{-- <td>{{ $penelitian->dosen->nama }}</td> --}}
                        <td>{!! $penelitian->grp_riset !!} </td>
                        <td>{{ $penelitian->tahun }}</td>
                        <td>{{ $penelitian->lama_kgtn }}</td>
                        <td>{{ $penelitian->thn_pekerjaan }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <table class="table table-bordered" style="background-color: rgba(255, 255, 255, 0.477);
        backdrop-filter: blur(5px); color:#05445E">
            <tbody>
                <tr>
                    <td colspan="2" style="background-color: #05445E"></td>
                </tr>
                <tr>
                    <td><b>judul</b></td>
                    <td>{{ $penelitian->judul }}</td>
                </tr>
                <tr>
                    <td><b>Rumpun Ilmu</b></td>
                    <td> {!! $penelitian->rumpun_ilmu !!}</td>
                </tr>
                <tr>
                    <td><b>Abstrak</b></td>
                    <td> {!! $penelitian->abstrak !!} </td>
                </tr>
                <tr>
                    <td><b>Keyword</b></td>
                    <td>{!! $penelitian->keyword !!}</td>
                </tr>
                <tr>
                    <td><b>Latar Belakang</b></td>
                    <td>{!! $penelitian->latar_belakang !!} </td>
                </tr>
                <tr>
                    <td><b>Tujuan</b></td>
                    <td>{!! $penelitian->tujuan !!} </td>
                </tr>
                <tr>
                    <td><b>Tinjau Pustaka</b></td>
                    <td>{!! $penelitian->tinjau_pustaka !!} </td>
                </tr>
                <tr>
                    <td><b>Metode</b></td>
                    <td>{!! $penelitian->metode !!} </td>
                </tr>
                <tr>
                    <td colspan="2" style="background-color: #05445E"></td>
                </tr>
            </tbody>
        </table>
        {{-- <button class="btn-info"><a href="#"><i class="fa fa-download"></i> download abstract </a></button> --}}
        {{-- <a href="/data" class="btn btn-light me-2 mb-3 "><i class="fa fa-arrow-left"></i> kembali</a> --}}
    </div>
</div>

@endsection