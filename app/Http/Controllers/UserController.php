<?php

namespace App\Http\Controllers;

use App\Models\Penelitian;
use Illuminate\Http\Request;
use App\Exports\PenelitianExport;
use App\Exports\PenelitianAllExport;
use App\Models\Dosen;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function index()
    {
        return view('profileUser.profile');
    }

    public function showAll()
    {
        $users = Dosen::all();
        return view('allUser', [
            'title' => "Kelola User",
            'users' => $users,
        ]);
    }

    public function destroy(Dosen $dosen)
    {
        Dosen::destroy($dosen->id);
        return redirect('/kelolaUser')->with('successDestroy', 'User berhasil dihapus');
    }

    public function export($id, $tahun)
    {
        $penelitian = Penelitian::where('prodi_id', $id)->where('tahun', $tahun)->get();
        return Excel::download(new PenelitianExport($penelitian), 'Penelitian.xlsx');
    }
    public function exportAll()
    {
        return Excel::download(new PenelitianAllExport, 'Penelitian.xlsx');
    }
}
