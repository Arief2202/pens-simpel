@extends('layouts.main')

@section('content')
<div class="row mt-2 mb-4">
  <?php 
      function bacaSelengkapnya($konten, $panjang = 150, $link = '')
     {
        $konten = strip_tags($konten);
        if (strlen($konten) > $panjang)
        {
            $potongkonten   = substr($konten, 0, $panjang);
            $akhirspasi     = strrpos($potongkonten, ' ');
            $readmore       = (!empty($link) ? '<a href="'.$link.'">Baca Selengkapnya</a>' : '');
            $konten         = $akhirspasi ? substr($potongkonten, 0, $akhirspasi) : substr($potongkonten, 0);
            $konten        .= ' ... '.$readmore;
        }

        return $konten;
      }
  ?>

  <div class="col-md-8 mt-2">
    <div class="card border-2 shadow rounded" style="background-color: rgba(177, 233, 255, 0.155); backdrop-filter: blur(3px);">
      <div class="card-header">
        <h2>Pengumuman Terkait Penelitian PENS</h2>
      </div>
      <div class="card-6"><div class="card-body p-0"></div></div>
      <div class="card-body pt-4 p-4 hero-img"  style="background-color: white">
        @foreach ($pengumumans as $pengumuman)
        <div class="row align-items-center justify-content-center mb-3">
          <div class="col-lg-4 d-flex flex-column justify-content-center">
            <img src="{{ $pengumuman->gambar }}" class="img-thumbnail" alt="">
          </div>
          <div class="col-lg-8 text-justify">
            <a href="/detailpengumuman/{{ $pengumuman->id }}">
              <h6 class="font-weight-bolder" style="color: #05445E; text-transform: capitalize;">{{ $pengumuman->judul }}</h6>
            </a>
            <span><i style="color: grey"><i class="fa fa-calendar"></i> {{ $pengumuman->tanggal }}</i></span>
            <p>{!! bacaSelengkapnya($pengumuman->isi,150) !!} <a href="/detailpengumuman/{{ $pengumuman->id }}">baca
                selengkapnya</a></p>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div>
  <div class="col-md-4 mt-2">
    <div class="card border-2 shadow rounded" style="background-color: rgba(177, 233, 255, 0.155); backdrop-filter: blur(3px);">
      <div class="card-header pt-2 pb-2 px-3">
        <div class="row">
          <center>
            <h2 class="mb-0">Terbaru</h2>
          </center>
        </div>
      </div>
      <div class="card-6"><div class="card-body p-0"></div></div>
      <div class="card-body pt-4 p-4 text-justify" style="background-color: white">
        {{-- <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3"> --}}
          <h6 class="text-xs font-weight-bolder mb-3" style="color: #05445E; text-transform: capitalize;">
            {{ $pertama->judul }}
          </h6>
          <img src="{{ $pertama->gambar }}" width="100%" class="mx-auto d-block mb-2" alt="">
          <span><i style="color: grey"><i class="fa fa-calendar"></i> {{ $pengumuman->tanggal }}</i></span>
          <p class="mt-2">{!! bacaSelengkapnya($pertama->isi) !!} <a href="/detailpengumuman/{{ $pertama->id }}"> baca
              selengkapnya</a></p>
          {{--
        </h6> --}}
      </div>
    </div>
  </div>
</div>

@endsection