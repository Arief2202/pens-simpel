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
        $dosens = Dosen::all();
        return view('data', [
            "title" => "Data Penelitian PENS",
            "name" => "Tsania Ursila Razani",
            "tandaHalaman" => '',
            'dosens' => $dosens,
            "penelitians" => Penelitian::with(['skema', 'dosen'])->where('status', 'disetujui')->get(),
            "email" => "tsaniashella@it.student.pens.ac.id"
        ]);
    }
    public function approve()
    {
        $dosens = Dosen::all();
        return view('approve', [
            "title" => "Data Penelitian PENS",
            "name" => "Tsania Ursila Razani",
            "tandaHalaman" => '',
            'dosens' => $dosens,
            "penelitians" => Penelitian::with(['skema', 'dosen'])->where('status', 'menunggu')->get(),
            "email" => "tsaniashella@it.student.pens.ac.id"
        ]);
    }
    public function destroy(Penelitian $penelitian)
    {
        Penelitian::destroy($penelitian->id);
        return back()->with('successHapus', 'Penelitian Berhasil dihapus');
    }
    public function approveEdit(Request $request, Penelitian $penelitian)
    {

        $save['status'] = $request->status;
        // return $save['status'];
        Penelitian::where('id', $penelitian->id)
            ->update($save);
        if ($save['status'] == 'disetujui') {
            return back()->with('successApprove', 'Penelitian Berhasil Di Setujui');
        } else {
            return back()->with('successApprove', 'Penelitian Berhasil Di ditolak');
        }
    }
    public function prodibasedData(Penelitian $penelitian)
    {
        $dosens = Dosen::all();
        $penelitians = Penelitian::with(['skema', 'dosen'])->where('prodi_id', $penelitian->prodi_id)->latest()->get();
        $prodi = Prodi::where('id', $penelitian->prodi_id)->get()[0];



        return view('data', [
            "title" => "Data Penelitian  " . $prodi->nama,
            "name" => "Tsania Ursila Razani",
            "penelitians" => $penelitians,
            "tandaHalaman" => '',
            'dosens' => $dosens,

            "email" => "tsaniashella@it.student.pens.ac.id"
        ]);
    }

    public function prodibased(Request $request)
    {

        // return $request;
        $prodi = Prodi::all();
        $tahun = Penelitian::select(DB::raw('count(*) as jumlah_penelitian, tahun'))->where('status', 'disetujui')->groupBy('tahun')->get();
        $thn = array();
        foreach ($tahun as $key) {
            array_push($thn, $key->tahun);
        }
        $studies = array();



        if (is_null($request->prodi)  && is_null($request->tahun)) {
            for ($i = 0; $i < $prodi->count(); $i++) {
                $a = Penelitian::select(DB::raw('count(*) as jumlah, prodi_id, tahun'))->where('prodi_id', '=', $prodi[$i]->id)->where('status', 'disetujui')->groupBy('prodi_id')->groupBy('tahun')->get();
                array_push($studies, $a);
            }
        } else {
            $a = Penelitian::select(DB::raw('count(*) as jumlah, prodi_id, tahun'))->where('prodi_id', 'like', '%' . $request->prodi . '%')->where('status', 'disetujui')->where('tahun', 'like', '%' . $request->tahun . '%')->groupBy('prodi_id')->groupBy('tahun')->get();
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
        $study = Penelitian::where('prodi_id', $id)->where('tahun', $tahun)->where('status', 'disetujui')->get();
        $filter = ['id' => $id, 'tahun' => $tahun];
        return view('allData', [
            "title" => "Data Penelitian  ",
            "name" => "Tsania Ursila Razani",
            "penelitians" => $study,
            'filter' => $filter,
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
        // $tandaHalaman = 'ada';
        $dosens = Dosen::all();

        return view('dataku', [
            "title" => "Data Penelitian Saya",
            "name" => "Tsania Ursila Razani",
            "penelitians" => $dosen->penelitian,
            // "tandaHalaman" => $tandaHalaman,
            'dosens' => $dosens,
            "email" => "tsaniashella@it.student.pens.ac.id"
        ]);
    }

    public function filterPenelitian()
    {
        $data = Penelitian::select(DB::raw('count(*) as jumlah_penelitian, tahun'))->groupBy('tahun')->get();
        dd($data);
    }
}
