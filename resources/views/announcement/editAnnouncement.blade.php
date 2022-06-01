@extends('layouts.main')

@section('content')
<div class="page-wrapper bg-blue p-t-100 p-b-50">
    <div class="wrapper wrapper--w900">
        <div class="card card-6">
            <div class="card-body">
                <div class="card-heading">
                    <h2 class="title">Edit Pengumuman</h2>
                </div>

                <form method="post" action="/editpengumuman/{{ $pengumuman->id }}">
                    @csrf
                    @method('put')

                    <div class="form-row">
                        <div class="name">Judul</div>
                        <div class="value">
                            <input class="input--style-6" type="text" name="judul"
                                value="{{ old('judul',$pengumuman->judul) }}" required>
                        </div>
                    </div>
                    <input class="input--style-6" type="text" name="gambar" value="../img/pens.jpg" hidden>
                    <input class="input--style-6" type="text" name="dosen_id" value="{{ auth()->user()->id }}" hidden>

                    <div class="form-row">
                        <div class="name">Isi Pengumuman</div>
                        <div class="value">
                            <div class="input" type="hidden" name="message">
                                <input id="x" type="hidden" name="isi" value="{{ old('judul',$pengumuman->isi) }}">
                                <trix-editor class="textarea--style-6" input="x"></trix-editor>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn--radius-2 btn--blue-2" type="submit">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection