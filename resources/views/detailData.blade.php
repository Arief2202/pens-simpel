@extends('layouts.main')

@section('content')
<div class="row mt-2 mb-2">
    <div class="col-md-12">
        <a href="/data" class="btn btn-success me-2 mb-3 "><i class="fa fa-arrow-left"></i> kembali</a>
        <div class="table-responsive" >
        <table class="table table-bordered">
            <thead>
                <tr style="color: #D4F1F4; background-color: #05445E">
                    <th>Skema</th>
                    <th>Dosen / Group Dosen</th>
                    <th>Group Riset</th>
                    <th>Tahun</th>
                    <th>Lama Penelitian</th>
                    <th>Tahun Pekerjaan</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background-color: #D4F1F4;">
                    <td class="table-active">{{ $penelitian->skema->nama }}</td>
                    <td class="table-active">
                        <ul>
                            @foreach ($penelitian->dosen as $dosen)
                                <li>{{ $dosen->nama }}</li>
                            @endforeach
                        </ul>
                    </td class="table-active">
                    {{-- <td>{{ $penelitian->dosen->nama }}</td> --}}
                    <td class="table-active">{{ $penelitian->grp_riset }}</td>
                    <td class="table-active">{{ $penelitian->tahun }}</td>
                    <td class="table-active">{{ $penelitian->lama_kgtn }}</td>
                    <td class="table-active">{{ $penelitian->thn_pekerjaan }}</td>
                </tr>               
            </tbody>
        </table>
        </div>
        <table class="table table-bordered" style="background-color: #D4F1F4; color:#05445E">
            <tbody>
                <tr><td colspan="2" style="background-color: #05445E"></td></tr>
                <tr>
                    <td class="table-active"><b>judul</b></td>
                    <td>{{ $penelitian->judul }}</td>
                </tr>
                <tr>
                    <td class="table-active"><b>Rumpun Ilmu</b></td>
                    <td>{{ $penelitian->rumpun_ilmu }}</td>
                </tr>
                <tr>
                    <td class="table-active"><b>Abstrak</b></td>
                    <td>{{ $penelitian->abstrak }}</td>
                </tr>
                <tr>
                    <td class="table-active"><b>Keyword</b></td>
                    <td>{{ $penelitian->keyword }}</td>
                </tr>
                <tr>
                    <td class="table-active"><b>Latar Belakang</b></td>
                    <td>{{ $penelitian->latar_belakang }}</td>
                </tr>
                <tr>
                    <td class="table-active"><b>Tujuan</b></td>
                    <td>{{ $penelitian->tujuan }}</td>
                </tr>
                <tr>
                    <td class="table-active"><b>Tinjau Pustaka</b></td>
                    <td>{{ $penelitian->tinjau_pustaka }}</td>
                </tr>        
                <tr>
                    <td class="table-active"><b>Metode</b></td>
                    <td>{{ $penelitian->metode }}</td>
                </tr> 
                <tr><td colspan="2" style="background-color: #05445E"></td></tr>
            </tbody>
        </table>
        
        {{-- <button class="btn-info"><a href="#"><i class="fa fa-download"></i> download abstract </a></button> --}}
    </div>
</div>

@endsection