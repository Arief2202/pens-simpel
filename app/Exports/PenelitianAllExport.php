<?php

namespace App\Exports;

use App\Models\Penelitian;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithStyles;


class PenelitianAllExport implements FromView, WithStyles, WithTitle, ShouldAutoSize

{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        return view('exports.penelitian', [
            'penelitians' => Penelitian::with(['skema', 'dosen'])->where('status', 'disetujui')->get(),
            'judul' => 'Seluruh Data Penelitian PENS'
        ]);
    }

    public function styles(Worksheet $sheet)
    {
        $rowCount = Penelitian::where('status', 'disetujui')->count() + 2;
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

        return 'Penelitian PENS';
    }
}
