<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Penelitian;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardChartController extends Controller
{
    public function graphic()
    {
        $data = Penelitian::select(DB::raw('count(*) as jumlah_penelitian, tahun'))
            ->groupBy('tahun')->get();
        $jumlah = Penelitian::count();

        $tahun = Penelitian::select('tahun')->get();

        $dasar = Penelitian::with(['skema'])->select(DB::raw('count(*) as total,tahun'))->groupBy('tahun')->where('skema_id', 1)->get();
        $terapan = Penelitian::with(['skema'])->select(DB::raw('count(*) as total,tahun'))->groupBy('tahun')->where('skema_id', 2)->get();
        $unggulan = Penelitian::with(['skema'])->select(DB::raw('count(*) as total,tahun'))->groupBy('tahun')->where('skema_id', 3)->get();
        $plp = Penelitian::with(['skema'])->select(DB::raw('count(*) as total,tahun'))->groupBy('tahun')->where('skema_id', 4)->get();
        $internasional = Penelitian::with(['skema'])->select(DB::raw('count(*) as total,tahun'))->groupBy('tahun')->where('skema_id', 5)->get();



        return view('yearChart.barYear', [
            "title" => "Beranda",
            "datas" => $data,
            "tahun_min" => $tahun->min(),
            "jumlah" => $jumlah,
            "dasar" => $dasar,
            "terapan" => $terapan,
            "unggulan" => $unggulan,
            "plp" => $plp,
            'internasional' => $internasional,
            "name" => "Tsania Ursila Razani",
        ]);
    }

    public function pieGraphic()
    {
        $data = Penelitian::select(DB::raw('count(*) as jumlah_penelitian, tahun'))->groupBy('tahun')->get();
        $jumlah = Penelitian::count();

        $tahun = Penelitian::select('tahun')->get();

        $dasar = Penelitian::with(['skema'])->select(DB::raw('count(*) as total,tahun'))->groupBy('tahun')->where('skema_id', 1)->get();
        $terapan = Penelitian::with(['skema'])->select(DB::raw('count(*) as total,tahun'))->groupBy('tahun')->where('skema_id', 2)->get();
        $unggulan = Penelitian::with(['skema'])->select(DB::raw('count(*) as total,tahun'))->groupBy('tahun')->where('skema_id', 3)->get();
        $plp = Penelitian::with(['skema'])->select(DB::raw('count(*) as total,tahun'))->groupBy('tahun')->where('skema_id', 4)->get();
        $internasional = Penelitian::with(['skema'])->select(DB::raw('count(*) as total,tahun'))->groupBy('tahun')->where('skema_id', 5)->get();

        return view('yearChart.pieYear', [
            "title" => "Beranda",
            "datas" => $data,
            "tahun_min" => $tahun->min(),
            "jumlah" => $jumlah,
            "dasar" => $dasar,
            "terapan" => $terapan,
            "unggulan" => $unggulan,
            "internasional" => $internasional,
            "plp" => $plp,
            "name" => "Tsania Ursila Razani",
        ]);
    }

    public function barChartProdi()
    {

        $jumlah = Penelitian::count();
        $dataProdi = Penelitian::select(DB::raw('count(*) as jumlah, prodi_id'))->groupBy('prodi_id')->get();
        $prodi = Prodi::all();
        $tahun = Penelitian::select('tahun')->get();

        $dasar = Penelitian::with(['skema'])->select(DB::raw('count(*) as total,prodi_id'))->groupBy('prodi_id')->where('skema_id', 1)->get();
        $terapan = Penelitian::with(['skema'])->select(DB::raw('count(*) as total,prodi_id'))->groupBy('prodi_id')->where('skema_id', 2)->get();
        $unggulan = Penelitian::with(['skema'])->select(DB::raw('count(*) as total,prodi_id'))->groupBy('prodi_id')->where('skema_id', 3)->get();
        $plp = Penelitian::with(['skema'])->select(DB::raw('count(*) as total,prodi_id'))->groupBy('prodi_id')->where('skema_id', 4)->get();
        $internasional = Penelitian::with(['skema'])->select(DB::raw('count(*) as total,prodi_id'))->groupBy('prodi_id')->where('skema_id', 5)->get();



        return view('prodiChart.barProdi', [
            "title" => "Beranda",
            "dataProdi" => $dataProdi,
            "prodis" => $prodi,
            "tahun_min" => $tahun->min(),
            "jumlah" => $jumlah,
            "dasar" => $dasar,
            "terapan" => $terapan,
            "unggulan" => $unggulan,
            "internasional" => $internasional,
            "plp" => $plp,
        ]);
    }
    public function pieChartProdi()
    {

        $jumlah = Penelitian::count();
        $dataProdi = Penelitian::select(DB::raw('count(*) as jumlah, prodi_id'))->groupBy('prodi_id')->get();
        $prodi = Prodi::all();
        $tahun = Penelitian::select('tahun')->get();

        $dasar = Penelitian::with(['skema'])->select(DB::raw('count(*) as total,prodi_id'))->groupBy('prodi_id')->where('skema_id', 1)->get();
        $terapan = Penelitian::with(['skema'])->select(DB::raw('count(*) as total,prodi_id'))->groupBy('prodi_id')->where('skema_id', 2)->get();
        $unggulan = Penelitian::with(['skema'])->select(DB::raw('count(*) as total,prodi_id'))->groupBy('prodi_id')->where('skema_id', 3)->get();
        $plp = Penelitian::with(['skema'])->select(DB::raw('count(*) as total,prodi_id'))->groupBy('prodi_id')->where('skema_id', 4)->get();
        $internasional = Penelitian::with(['skema'])->select(DB::raw('count(*) as total,prodi_id'))->groupBy('prodi_id')->where('skema_id', 5)->get();
        // dd($dasar);

        return view('prodiChart.pieProdi', [
            "title" => "Beranda",
            "dataProdi" => $dataProdi,
            "prodis" => $prodi,
            "tahun_min" => $tahun->min(),
            "jumlah" => $jumlah,
            "dasar" => $dasar,
            "terapan" => $terapan,
            "unggulan" => $unggulan,
            "internasional" => $internasional,
            "plp" => $plp,
        ]);
    }
}
