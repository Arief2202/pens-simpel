<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Prodi;
use App\Models\Penelitian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardPenelitianController extends Controller
{
    //
    public function index()
    {
        return view('datadiv.alldata', [
            "title" => "Data Penelitian PENS",
            "name" => "Tsania Ursila Razani",
            "penelitians" => Penelitian::with(['skema', 'dosen'])->latest()->get(),
            "email" => "tsaniashella@it.student.pens.ac.id"
        ]);
    }
    public function prodibasedData(Penelitian $penelitian)
    {
        $penelitians = Penelitian::with(['skema', 'dosen'])->where('prodi_id',$penelitian->prodi_id)->latest()->get();
        $prodi = Prodi::where('id',$penelitian->prodi_id)->get()[0];



        return view('datadiv.dataProdi', [
            "title" => "Data Penelitian  ".$prodi->nama,
            "name" => "Tsania Ursila Razani",
            "penelitians" => $penelitians,
            "email" => "tsaniashella@it.student.pens.ac.id"
        ]);
    }

    public function prodibased()
    {
        $penelitians = Penelitian::select(DB::raw('count(*) as jumlah, prodi_id'))->groupBy('prodi_id')->get();
        $prodi = Prodi::all();


        return view('datadiv.prodibased', [
            "title" => "Data Penelitian",
            "name" => "Tsania Ursila Razani",
            "penelitians" => $penelitians,
            "prodis" => $prodi,
            "email" => "tsaniashella@it.student.pens.ac.id"
        ]);
    }

    public function show(Penelitian $penelitian)
    {
        return view('detailData', [
            "title" => $penelitian->judul,
            "name" => "Tsania Ursila Razani",
            "penelitian" => $penelitian->load(['skema', 'dosen']),
            "email" => "tsaniashella@it.student.pens.ac.id"
        ]);
    }


}
