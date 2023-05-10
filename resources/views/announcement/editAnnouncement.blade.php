@extends('layouts.main')

@section('content')
<div class="row mt-2 mb-2">
    <div class="col-md-12">
        <div class="card border-2 shadow rounded" style="background-color: rgba(177, 233, 255, 0.155); backdrop-filter: blur(3px);">  
        <div class="card-header">
            <h2>Edit Pengumuman</h2>
        </div>
        <div class="card-6"><div class="card-body p-0"></div></div>
            <div class="card-body" style="background-color: white">
                <form method="post" action="/editpengumuman/{{ $pengumuman->id }}">
                    @csrf
                    @method('put')

                    <div class="form-row">
                        <div class="name"><h6 style="font-weight: bolder; color: #05445E">Judul</h6></div>
                        <div class="value" >
                            <input class="input--style-6" type="text" name="judul"
                                value="{{ old('judul',$pengumuman->judul) }}" style="color: #05445E" required>
                        </div>
                    </div>
                    <input class="input--style-6" type="text" name="gambar" value="../img/pens.jpg" hidden>
                    <input class="input--style-6" type="text" name="dosen_id" value="{{ auth()->user()->id }}" hidden>

                    <div class="form-row">
                        <div class="name"><h6 style="font-weight: bolder; color: #05445E">Isi Pengumuman</h6></div>
                        <div class="value">
                            <div class="input" type="hidden" name="message">
                                <input id="x" type="hidden" name="isi" value="{{ old('judul',$pengumuman->isi) }}">
                                <trix-editor class="textarea--style-6" input="x" style="color: #05445E"></trix-editor>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row-reverse" style="margin-right: 40px; margin-bottom: 40px">
                        <button class="btn btn-success"  style="width: 20%;" type="submit">Edit</button>
                      </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection