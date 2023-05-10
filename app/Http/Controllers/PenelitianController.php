<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\DosenPenelitian;
use App\Models\Penelitian;
use App\Models\Skema;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Array_;

class PenelitianController extends Controller
{
    //
    public function create()
    {
        $skema = Skema::all();
        return view('tambahPenelitian', [
            'title' => 'Tambah Penelitian',
            'skemas' => $skema,
        ]);
    }
    public function create2()
    {
        $dosens = Dosen::all();
        return view('tambahAnggota', [
            'title' => 'Tambah Anggota',
            'penelitian' => '',
            'dosens' => $dosens,
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'keyword' => 'required',
            'skema_id' => 'required',
            'grp_riset' => 'required',
            'rumpun_ilmu' => 'required',
            'abstrak' => 'required',
            'latar_belakang' => 'required',
            'tujuan' => 'required',
            'tinjau_pustaka' => 'required',
            'metode' => 'required',
            // 'daftar_pustaka' => 'required',
            'thn_pekerjaan' => 'required',
            'lama_kgtn' => 'required',
            'grp_riset' => 'required',
            'tahun' => 'required',
        ]);
        $validatedData['prodi_id'] = auth()->user()->prodi_id;
        $validatedData['dosen_id'] = auth()->user()->id;
        Penelitian::create($validatedData);

        return redirect('/tambahAnggota')->with('successTambah', 'penelitian Berhasil Dibuat, jika ada anggota pilih anggota');
    }
    public function store2(Request $request)
    {
        $penelitianLast = collect(Penelitian::select('id')->where('dosen_id', auth()->user()->id)->orderBy('id', 'desc')->limit(1)->get())[0];
        $array = $request->dosen_id;
        array_push($array, auth()->user()->id);

        foreach ($array as $id) {
            $save = [
                'dosen_id' => $id,
                'penelitian_id' => $penelitianLast->id,
            ];
            DosenPenelitian::create($save);
        }

        return redirect('/penelitianku/' . auth()->user()->id);
    }
    public function tambah(Request $request)
    {

        $save = [
            'dosen_id' => $request->dosen_id,
            'penelitian_id' => $request->penelitian_id,
        ];
        DosenPenelitian::create($save);
        return redirect('/penelitianku/' . auth()->user()->id);
    }
    public function tambahAnggota(Penelitian $penelitian)
    {
        $dosens = Dosen::all();
        // return $penelitian->dosen;
        $array = [];
        foreach ($dosens as $dosen) {
            foreach ($penelitian->dosen as $item) {
                if ($item->id !== $dosen->id) {
                    array_push($array, $dosen->id);
                }
            }
        }
        return $array;
        return view('tambahAnggota', [
            'title' => 'Tambah Anggota',
            'penelitian' => $penelitian,
            'dosens' => $dosens,
        ]);
    }
}
