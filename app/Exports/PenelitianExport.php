<?php

namespace App\Exports;

use App\Models\Penelitian;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Border;
use Maatwebsite\Excel\Concerns\FromCollection;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PenelitianExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    private $users;
    /**
     * @return View
     */
    public function __construct($penelitian)
    {
        $this->penelitian = $penelitian;
    }
    public function view(): View
    {
        return view('exports.penelitian', [
            'penelitians' => $this->penelitian,
        ]);
    }

    public function styles(Worksheet $sheet)
    {
        $rowCount = $this->penelitian->count() +1;
        $sheet->getStyle('A1:F3')->applyFromArray([
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => '000000'],
                ],
            ],
        ]);
        // $sheet->getStyle('A3:Y3')->applyFromArray([
        //     'borders' => [
        //         'bottom' => [
        //             'borderStyle' => Border::BORDER_THICK,
        //         ]
        //     ],
        // ]);
    }
}
