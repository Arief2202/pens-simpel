@extends('layouts.main')

@section('content')
<div class="page-wrapper bg-blue p-t-100 p-b-50">
    <div class="wrapper wrapper--w900">
        <div class="card card-6">
            <div class="card-body">
                <div class="card-heading">
                    <h2 class="title">Buat Pengumuman</h2>
                </div>

                <form method="post" action="/tambahpengumuman">
                    @csrf

                    <div class="form-row">
                        <div class="name">Judul</div>
                        <div class="value">
                            <input class="input--style-6" type="text" name="judul" required>
                        </div>
                    </div>
                    <input class="input--style-6" type="text" name="gambar" value="../img/pens.jpg" hidden>
                    <input class="input--style-6" type="text" name="dosen_id" value="{{ auth()->user()->id }}" hidden>
                    {{-- <input class="input--style-6" type="text" name="gambar" value="../img/pens.jpg" hidden> --}}
                    {{-- <div class="form-row">
                        <div class="name">Batas Pengumuman</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-6" type="date" name="email" placeholder="example@email.com">
                            </div>
                        </div>
                    </div> --}}
                    <div class="form-row">
                        <div class="name">Isi Pengumuman</div>
                        <div class="value">
                            <div class="input" type="hidden" name="message">
                                {{-- <trix-editor input="message"></trix-editor> --}}
                                <input id="x" type="hidden" name="isi">
                                <trix-editor class="textarea--style-6" input="x"></trix-editor>
                                {{-- <input type="hidden" name="isi">
                                <trix-editor class="textarea--style-6" input="isi"></trix-editor> --}}
                            </div>
                        </div>
                    </div>
                    {{-- <div class="form-row">
                        <div class="name">Upload Dokumen</div>
                        <div class="value">
                            <div class="input-group js-input-file">
                                <input class="input-file" type="file" name="file_document" id="file">
                                <label class="label--file" for="file">Pilih Dokumen</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="name">Upload Foto</div>
                        <div class="value">
                            <div class="input-group js-input-file">
                                <input class="input-file" type="file" name="file_photo" id="file">
                                <label class="label--file" for="file">Pilih Foto</label>
                            </div>
                        </div>
                    </div> --}}
                    <div class="card-footer">
                        <button class="btn btn--radius-2 btn--blue-2" type="submit">Buat</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection