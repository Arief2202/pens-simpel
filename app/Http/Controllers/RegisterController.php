<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Contracts\Support\ValidatedData;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('auth.register', [
            'nama' => 'andrian'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'NIP' => 'required|digits:18',
            'email' => 'required|email:dns',
            'password' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'prodi_id' => 'required',
        ]);
        // dd($request);
        $validatedData['password'] = bcrypt($validatedData['password']);
        Dosen::create($validatedData);
        // $request->session()->flash('success','Registrsi Berhasil silahkan Login');
        return redirect('/login')->with('success', 'Registrsi Berhasil silahkan Login');
    }
}
