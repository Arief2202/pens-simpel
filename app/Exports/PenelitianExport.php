<?php

namespace App\Exports;

use App\Models\Penelitian;
use App\Models\Prodi;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Border;
use Maatwebsite\Excel\Concerns\FromCollection;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithTitle;


class PenelitianExport implements FromView, WithStyles, WithTitle, ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */
    private $users;
    /**
     * @return View
     */
    public function __construct($penelitian, $id, $tahun)
    {
        $this->penelitian = $penelitian;
        $this->id = $id;
        $this->tahun = $tahun;
    }

    public function view(): View
    {
        $prodis = Prodi::all();
        foreach ($prodis as $prodi) {
            if ($prodi->id == $this->id) {
                $namaProdi = $prodi->nama;
            }
        }
        $tahun = $this->tahun;
        $judul = 'Data Penelitian ' . $namaProdi . ' tahun ' . $tahun;
        return view('exports.penelitian', [
            'penelitians' => $this->penelitian,
            'judul' => $judul
        ]);
    }



    public function styles(Worksheet $sheet)
    {
        $rowCount = $this->penelitian->count() + 2;
        $sheet->getStyle('A1:F' . $rowCount)->applyFromArray([
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => '000000'],
                ],
            ],
        ]);
    }
    public function title(): string
    {
        $prodis = Prodi::all();
        foreach ($prodis as $prodi) {
            if ($prodi->id == $this->id) {
                $namaProdi = $prodi->nama;
            }
        }
        $tahun = $this->tahun;
        return $namaProdi . ' ' . $tahun;
    }
}
