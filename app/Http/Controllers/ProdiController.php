<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    //
    public function index()
    {
        $prodi = Prodi::all();
        return view('prodi.index', [
            'title' => 'Data Prodi',
            'prodis' => $prodi,
        ]);
    }
    public function create()
    {
        return view('prodi.addProdi', [
            'title' => 'Tambah Prodi',
        ]);
    }
    public function edit(Prodi $prodi)
    {
        return view('prodi.editProdi', [
            'title' => 'Edit Prodi',
            'prodi' => $prodi
        ]);
    }
    public function update(Request $request, Prodi $prodi)
    {
        $validatedData = $request->validate([
            'nama' => 'required|unique:prodis',
        ]);
        Prodi::where('id', $prodi->id)
            ->update($validatedData);
        return redirect('kelolaProdi')->with('successEdit', 'Prodi berhasil diubah');
    }
    public function store(Request $request)
    {
        // $save = [
        //     'nama' => $request->nama,
        // ];
        $validatedData = $request->validate([
            'nama' => 'required|unique:prodis',
        ]);
        Prodi::create($validatedData);
        return redirect('/kelolaProdi')->with('successProdi', 'Prodi Berhasil dibuat');
    }
    public function destroy(Prodi $prodi)
    {
        Prodi::destroy($prodi->id);
        return back()->with('successHapus', 'Prodi Berhasil dihapus');
    }
}
