<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Dosen;
use App\Models\Prodi;
use App\Models\Penelitian;
use App\Models\Skema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardPenelitianController extends Controller
{
    //
    public function index()
    {
        return view('data', [
            "title" => "Data Penelitian PENS",
            "name" => "Tsania Ursila Razani",
            "penelitians" => Penelitian::with(['skema', 'dosen'])->latest()->get(),
            "email" => "tsaniashella@it.student.pens.ac.id"
        ]);
    }
    public function prodibasedData(Penelitian $penelitian)
    {
        $penelitians = Penelitian::with(['skema', 'dosen'])->where('prodi_id', $penelitian->prodi_id)->latest()->get();
        $prodi = Prodi::where('id', $penelitian->prodi_id)->get()[0];



        return view('data', [
            "title" => "Data Penelitian  " . $prodi->nama,
            "name" => "Tsania Ursila Razani",
            "penelitians" => $penelitians,
            "email" => "tsaniashella@it.student.pens.ac.id"
        ]);
    }

    public function prodibased(Request $request)
    {

        // return $request;
        $prodi = Prodi::all();
        $tahun = Penelitian::select(DB::raw('count(*) as jumlah_penelitian, tahun'))->groupBy('tahun')->get();
        $thn = array();
        foreach ($tahun as $key) {
            array_push($thn, $key->tahun);
        }
        $studies = array();



        if (is_null($request->prodi)  && is_null($request->tahun)) {
            for ($i = 0; $i < $prodi->count(); $i++) {
                $a = Penelitian::select(DB::raw('count(*) as jumlah, prodi_id, tahun'))->where('prodi_id', '=', $prodi[$i]->id)->groupBy('prodi_id')->groupBy('tahun')->get();
                array_push($studies, $a);
            }
        } else {
            $a = Penelitian::select(DB::raw('count(*) as jumlah, prodi_id, tahun'))->where('prodi_id', 'like', '%' . $request->prodi . '%')->where('tahun', 'like', '%' . $request->tahun . '%')->groupBy('prodi_id')->groupBy('tahun')->get();
            array_push($studies, $a);
        }


        return view('datadiv.prodibased', [
            "title" => "Data Penelitian",
            "penelitians" => $studies,
            "prodis" => $prodi,
            "tahun" => $tahun,
            'data' => $request,
        ]);
    }





    public function detail($id, $tahun)
    {
        // return $id;
        $study = Penelitian::where('prodi_id', $id)->where('tahun', $tahun)->get();

        return view('data', [
            "title" => "Data Penelitian  ",
            "name" => "Tsania Ursila Razani",
            "penelitians" => $study,
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

    public function showPenelitianku(Dosen $dosen)
    {

        return view('data', [
            "title" => "Data Penelitian Saya",
            "name" => "Tsania Ursila Razani",
            "penelitians" => $dosen->penelitian,
            "email" => "tsaniashella@it.student.pens.ac.id"
        ]);
    }

    public function filterPenelitian()
    {
        $data = Penelitian::select(DB::raw('count(*) as jumlah_penelitian, tahun'))->groupBy('tahun')->get();
        dd($data);
    }
}
