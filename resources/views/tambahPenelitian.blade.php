@extends('layouts.main')

@section('content')
<div class="row mt-2 mb-2">
    <div class="col-md-12">
        <div class="card border-2 shadow rounded" style="background-color: rgba(177, 233, 255, 0.155); backdrop-filter: blur(3px);">
            <div class="card-header">
                <h2>Pengajuan Penelitian</h2>
            </div>
            <div class="card-6"><div class="card-body p-0"></div></div>
            <div class="card-body" style="background-color: white">
                <div class="col-md-12">
                    <form method="post" action="/tambahPenelitian">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="judul"><strong> Judul </strong> <span
                                        class="text-danger"><strong>*</strong></span></label>
                                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                                    id="judul" value="{{ old('judul') }}">
                                @error('judul')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="keyword"><strong> Keyword </strong> <span
                                        class="text-danger"><strong>*</strong></span></label>
                                <input type="text" class="form-control @error('keyword') is-invalid @enderror" name="keyword"
                                    id="keyword" value="{{ old('keyword') }}">
                                @error('keyword')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="Skema"><strong> Skema </strong> <span
                                        class="text-danger"><strong>*</strong></span></label>
                                <select id="Skema" class="form-control @error('skema') is-invalid @enderror" name="skema_id">
                                    <option value="" selected>Pilih Skema...</option>
                                    @foreach ($skemas as $skema)
                                        @if (old('skema_id') == $skema->id)
                                            <option value="{{ $skema->id }}" selected>{{ $skema->nama }}</option>
                                        @else

                                            <option value="{{ $skema->id }}">{{ $skema->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('skema_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tahun"><strong> Tahun </strong> <span
                                        class="text-danger"><strong>*</strong></span></label>
                                <input type="number" class="form-control @error('tahun') is-invalid @enderror"
                                    value="{{ old('tahun') }}" id="tahun" name="tahun">
                                @error('tahun')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="grp_riset"><strong> Group Riset </strong> <span
                                        class="text-danger"><strong>*</strong></span></label>
                                <input type="text" class="form-control @error('grp_riset') is-invalid @enderror"
                                    name="grp_riset" id="grp_riset" value="{{ old('grp_riset') }}">
                                @error('grp_riset')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="rumpun_ilmu"><strong> Rumpun Ilmu </strong> <span
                                        class="text-danger"><strong>*</strong></span></label>
                                <input type="text" class="form-control @error('rumpun_ilmu') is-invalid @enderror"
                                    name="rumpun_ilmu" id="rumpun_ilmu" value="{{ old('keyword') }}">
                                @error('rumpun_ilmu')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="thn_pekerjaan"><strong> Tahun Pekerjaan </strong> <span
                                        class="text-danger"><strong>*</strong></span></label>
                                <input type="text" class="form-control @error('thn_pekerjaan') is-invalid @enderror"
                                    name="thn_pekerjaan" id="thn_pekerjaan" value="{{ old('thn_pekerjaan') }}">
                                @error('thn_pekerjaan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lama_kgtn"><strong> Lama Penelitian </strong> <span
                                        class="text-danger"><strong>*</strong></span></label>
                                <input type="text" class="form-control @error('lama_kgtn') is-invalid @enderror"
                                    name="lama_kgtn" id="lama_kgtn" value="{{ old('lama_kgtn') }}">
                                @error('lama_kgtn')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row" rows="5">
                            <div class="form-group col-md-12">
                                <label for="abstrak"><strong> Abstrak </strong> <span
                                        class="text-danger"><strong>*</strong></span></label>
                                @error('abstrak')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                                <input id="abstrak" type="hidden" name="abstrak" value="{{ old('abstrak') }}">
                                <trix-editor input="abstrak" class="@error('abstrak') is-invalid @enderror"></trix-editor>
                            </div>
                        </div>
                        <div class="form-row" rows="5">
                            <div class="form-group col-md-12">
                                <label for="latar_belakang"><strong> Latar Belakang </strong> <span
                                        class="text-danger"><strong>*</strong></span></label>
                                @error('latar_belakang')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                                <input id="latar_belakang" type="hidden" name="latar_belakang">
                                <trix-editor input="latar_belakang" class="@error('lama_kgtn') is-invalid @enderror">
                                </trix-editor>
                            </div>
                        </div>
                        <div class="form-row" rows="5">
                            <div class="form-group col-md-12">
                                <label for="tinjau_pustaka"><strong> tinjau pustaka </strong> <span
                                        class="text-danger"><strong>*</strong></span></label>
                                @error('tinjau_pustaka')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                                <input id="tinjau_pustaka" type="hidden" name="tinjau_pustaka"
                                    value="{{ old('tinjau_pustaka') }}">
                                <trix-editor input="tinjau_pustaka" class="@error('tinjau_pustaka') is-invalid @enderror">
                                </trix-editor>
                            </div>
                        </div>
                        <div class="form-row" rows="5">
                            <div class="form-group col-md-12">
                                <label for="tujuan"><strong> Tujuan </strong> <span
                                        class="text-danger"><strong>*</strong></span></label>
                                @error('tujuan')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                                <input id="tujuan" type="hidden" name="tujuan" value="{{ old('tujuan') }}">
                                <trix-editor input="tujuan" class="@error('tujuan') is-invalid @enderror"></trix-editor>
                            </div>
                        </div>
                        {{-- <input type="text" value="kd" name="daftar_pustaka"> --}}
                        <div class="form-row" rows="5">
                            <div class="form-group col-md-12">
                                <label for="metode"><strong> Metode </strong> <span
                                        class="text-danger"><strong>*</strong></span></label>
                                @error('metode ')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                                <input id="metode" type="hidden" name="metode" value="{{ old('metode') }}">
                                <trix-editor input="metode" class="@error('metode') is-invalid @enderror"></trix-editor>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-3">
                            <div class="form-row" rows="5">
                                <button class="btn btn-success" type="submit">Selanjutnya</button>
                            </div>
                        </div>
                        {{-- <button type="submit" class="btn btn-primary">Selanjutnya</button> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection