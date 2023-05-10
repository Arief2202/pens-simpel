@extends('layouts.main')

@section('content')
<div class="row mt-2 mb-2">
    <div class="col-md-12">
        <div class="card border-2 shadow rounded" style="background-color: rgba(177, 233, 255, 0.155); backdrop-filter: blur(3px);"> 
            <div class="card-header">
                <h2>Buat Pengumuman Baru</h2>
            </div>
            <div class="card-6"><div class="card-body p-0"></div></div>
            <div class="card-body" style="background-color: white">
                <form method="post" action="/tambahpengumuman" enctype="multipart/form-data">
                    @csrf

                    <div class="form-row">
                        <div class="name"><h6 style="font-weight: bolder; color: #05445E">Judul</h6></div>
                        <div class="value">
                            <input style="color: #05445E" class="input--style-6" type="text" name="judul" required>
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
                        <div class="name"><h6 style="font-weight: bolder; color: #05445E">Isi Pengumuman</h6></div>
                        <div class="value">
                            <div style="color: #05445E" class="input" type="hidden" name="message">
                                {{-- <trix-editor input="message"></trix-editor> --}}
                                <input style="color: #05445E" id="x" type="hidden" name="isi">
                                <trix-editor style="color: #05445E" class="textarea--style-6" input="x"></trix-editor>
                                {{-- <input type="hidden" name="isi">
                                <trix-editor class="textarea--style-6" input="isi"></trix-editor> --}}
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row-reverse" style="margin-right: 40px; margin-bottom: 40px">
                        <button class="btn btn-success"  style="width: 20%;" type="submit">Buat</button>
                      </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection