<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Contracts\Support\ValidatedData;

class RegisterController extends Controller
{
    //
    public function index()
    {
        $prodi = Prodi::all();
        // dd($prodi);
        return view('auth.register', [
            'nama' => 'andrian',
            'prodis' => $prodi,
            'title' => 'Tambah User',
        ]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'nama' => 'required',
            'NIP' => 'required|numeric',
            'email' => 'required|email:dns|unique:dosens',
            'password' => 'required',
            'gender' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'prodi_id' => 'required',
            'role' => 'required',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        Dosen::create($validatedData);
        // $request->session()->flash('success','Registrsi Berhasil silahkan Login');
        return redirect('/kelolaUser')->with('success', 'User Baru berhasil ditambahkan');
    }
}
