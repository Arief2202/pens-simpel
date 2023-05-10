@extends('layouts.main')

@section('content')
<div class="row mt-2 mb-2">
    <div class="col-md-12">
        <div class="card border-2 shadow rounded" style="background-color: rgba(177, 233, 255, 0.155); backdrop-filter: blur(3px);">
            <div class="card-header">
                <strong> Tambahkan Anggota </strong>
            </div>
            <div class="card-6"><div class="card-body p-0"></div></div>
            <div class="card-body" style="background-color: white">
                
                @if (session()->has('successTambah'))
                <div class="alert alert-success alert-dismissible fade show col-md-6 mx-auto" role="alert">
                    <strong>{{ session('successTambah') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @endif
                {{-- @if ($penelitian->id) --}}
                <div class="col-md-12">
                <form action="{{ ($penelitian) ? '/tambahAnggota2' : '/tambahAnggota' }} " method="post">
                    {{-- @else
                    <form action="" method="post">
                        @endif --}}
                        @csrf
                        <div class="form-group ">
                            <label for="dosen"><Strong> Pilih Dosen </Strong></label><br>

                            @if ($penelitian)
                            <input type="text" name="penelitian_id" hidden value="{{ $penelitian->id }}">

                            @endif
                            <select class="js-example-basic-multiple-limit form-control" name="dosen_id[]"
                                multiple="multiple">
                                @foreach ($dosens as $dosen)
                                @if ($dosen->id != auth()->user()->id)
                                <option value="{{ $dosen->id }}">{{ $dosen->nama }}</option>

                                @endif

                                @endforeach
                            </select>
                            <ul>
                                {{-- {{ $penelitian }} --}}
                                @if ($penelitian)
                                @foreach ($penelitian->dosen as $item)
                                <li>{{ $item->nama }}</li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-success " type="submit">Submit</button>
                        </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script>
    $('.selectpicker').selectpicker();
    $(document).ready(function() {
    // $('.js-example-basic-multiple').select2();
    $(".js-example-basic-multiple-limit").select2({
        maximumSelectionLength: 2
    });
});
</script>

@endsection