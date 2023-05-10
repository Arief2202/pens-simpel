@extends('layouts.main')

@section('content')
<div class="card mt-3 mb-3 shadow" style="background-color: rgba(255, 255, 255, 0.477); backdrop-filter: blur(3px);">
    <div class="container">
        <div class="row mt-3 p-3">
            <div class="col-md-12">
                <article class="text-justify">
                    <header class="mb-4">
                        <h2 class="fw-bolder mb-1" style="text-transform: capitalize;">{{ $pengumuman->judul }}</h2>
                        <div class="text-muted fst-italic mb-2"><h6>Posted on {{ $pengumuman->tanggal }} by {{
                            $pengumuman->dosen->nama }}</h6> </div>
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!">Sistem Penelitian</a>
                    </header>
                        <figure class="mb-4"><img class="img-fluid rounded"
                            src="https://mediacdn.quipper.com/media/W1siZiIsIjIwMTgvMDEvMjkvMDYvNDAvMzIvMDFmNjg3N2QtYzAzZS00NTgyLTk0ZGItZjcyMjkzYjRkZWFmLyJdLFsicCIsInRodW1iIiwiMTIwMHhcdTAwM2UiLHt9XSxbInAiLCJjb252ZXJ0IiwiLWNvbG9yc3BhY2Ugc1JHQiAtc3RyaXAiLHsiZm9ybWF0IjoianBnIn1dXQ?sha=fb8897637c924dc5"
                            alt="..." width="50%" style="margin-right:20px;float: left;"/></figure>
                        <p class="mb-4">{!! $pengumuman->isi !!}</p>
                           
                </article>
            </div>
        </div>

    </div>
    @endsection