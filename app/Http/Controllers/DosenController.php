<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Prodi;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index()
    {
        //
        return view('profile', [
            'title' => 'Profile Saya'
        ]);
    }
    public function edit(Dosen $dosen)
    {
        //
        // dd($dosen);
        $prodi = Prodi::all();
        return view('profileUser.editProfile', [
            'title' => 'Edit Profile',
            'dosen' => $dosen,
            'prodis' => $prodi
        ]);
    }
    public function update(Request $request, Dosen $dosen)
    {
        // dd($request);
        $rules = [
            'nama' => 'required',
            'gender' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'prodi_id' => 'required',
        ];
        if ($request->NIP != $dosen->NIP) {
            $rules['NIP'] = 'required|digits:18|numeric|unique:dosens';
            $rules['email'] = 'required|email:dns';
        }
        $validatedData = $request->validate($rules);

        Dosen::where('id', $dosen->id)
            ->update($validatedData);
        return back()->with('successEditProfile', 'Profil Berhasil Diubah');
    }
}
