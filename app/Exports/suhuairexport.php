<?php

namespace App\Exports;

use App\Models\suhu_air;

use App\Models\suhu_udang;

use Maatwebsite\Excel\Events\AfterSheet;

use Maatwebsite\Excel\Concerns\WithEvents;

use Maatwebsite\Excel\Concerns\WithStyles;

use Maatwebsite\Excel\Concerns\WithMapping;

use Maatwebsite\Excel\Concerns\WithDrawings;

use Maatwebsite\Excel\Concerns\WithHeadings;

use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Concerns\ShouldAutoSize;

use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

use Maatwebsite\Excel\Concerns\WithColumnWidths;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class suhuairexport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithDrawings, WithStyles, withEvents, WithColumnWidths



{
    /** 

     * @return \Illuminate\Support\Collection 

     */

    public function columnWidths(): array

    {

        return [

            'D' => 20,
            'E' =>15,
            'C' => 15,
            'F' => 15,
            'G' => 15,
            'H' => 15,
            'I' => 15,
            'J' => 15,
            'K' => 15,
            'L' => 15,
            'M' => 15,

        ];

    }

    public function registerEvents(): array

    {

        return [

            AfterSheet::class => function (AfterSheet $event) {

                $style = [

                    'font' => [

                        'bold' => true

                    ],

                ];

                $event->sheet->getDelegate()->setCellValue('C1', "Form");

                $event->sheet->getDelegate()->setCellValue('C2', "Edition");

                $event->sheet->getDelegate()->setCellValue('C3', "Number");

                $event->sheet->getDelegate()->setCellValue('C4', "Page");



                $event->sheet->getDelegate()->setCellValue('D1', "11");

                $event->sheet->getDelegate()->setCellValue('D2', "1");

                $event->sheet->getDelegate()->setCellValue('D3', "1");

                $event->sheet->getDelegate()->setCellValue('D4', "1 of 1");

                $event->sheet->getDelegate()->getStyle('B1:B6')

                    ->getAlignment()

                    ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

                $event->sheet->getDelegate()->getStyle('D1:D4')

                    ->getAlignment()

                    ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
                $event->sheet->getDelegate()->getStyle('A10:M10')
                
                    ->getAlignment()
                    ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            

            }



        ];

    }

    public function styles(Worksheet $sheet)

    {



        $maxColl = $sheet->getHighestDataColumn();

        $maxRow = $sheet->getHighestDataRow();

        $sheet->getStyle('B1')->applyFromArray([

            'borders' => [

                'outline' => [

                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM

                ]

            ],

            'font' => [

                'bold' => true,

            ],

        ]);

        $sheet->getStyle('A1:' . 'A4')->applyFromArray([

            'borders' => [

                'outline' => [

                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM

                ]

            ],

            'font' => [

                'bold' => true,

            ],

        ]);

        $sheet->getStyle('B2:' . 'B4')->applyFromArray([

            'borders' => [

                'outline' => [

                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM

                ]

            ],

            'font' => [

                'bold' => true,

            ],

        ]);

        $sheet->getStyle('C1:' . 'D1')->applyFromArray([

            'borders' => [

                'outline' => [

                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM

                ]

            ],

            'font' => [

                'bold' => true,

            ],

        ]);

        $sheet->getStyle('C2:' . 'D2')->applyFromArray([

            'borders' => [

                'outline' => [

                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM

                ]

            ],

            'font' => [

                'bold' => true,

            ],

        ]);

        $sheet->getStyle('C3:' . 'D3')->applyFromArray([

            'borders' => [

                'outline' => [

                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM

                ]

            ],

            'font' => [

                'bold' => true,

            ],

        ]);

        $sheet->getStyle('C4:' . 'D4')->applyFromArray([

            'borders' => [

                'outline' => [

                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM

                ]

            ],

            'font' => [

                'bold' => true,

            ],

        ]);
        $sheet->getStyle('A10:' . 'M10')->applyFromArray([

            'borders' => [

                'allBorders' => [

                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM

                ]

            ],

            'font' => [

                'bold' => true,

            ],

        ]);

        $sheet->getStyle('A11:' . $maxColl . $maxRow)->applyFromArray([

            'borders' => [

                'allBorders' => [

                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN

                ]

            ],

            'font' => [

                'bold' => false,

            ],

        ]);

        return [

            'B6' => ['font' => ['bold' => true]],



            'A:M'  => ['font' => ['size' => 14]],

        ];

    }

    public function collection()

    {

        return suhu_air::all();

    }

    public function headings(): array

    {

        return [

            ['', 'Monitoring Form'],

            ['', '',],

            ['', 'PENCATATAN SUHU AIR'],

            ['', ''],

            ['', ''],

            ['', ' PENCATATAN SUHU AIR'],

            ['', ''],

            ['Hari', ''],
            ['Tanggal', ''],
            ['Tanggal','Hari', '08.00','Suhu','10.00','Suhu','12.00','Suhu','14.00','Suhu','Acon','Nama','Paraf'],




        ];

    }

    public function map($pencatatan_suhu_air): array

    {

        return [
            $pencatatan_suhu_air->tanggal,
            $pencatatan_suhu_air->hari,
            $pencatatan_suhu_air->delapan,
            $pencatatan_suhu_air->suhu1,
            $pencatatan_suhu_air->sepuluh,
            $pencatatan_suhu_air->suhu2,
            $pencatatan_suhu_air->duabelas,
            $pencatatan_suhu_air->suhu3,
            $pencatatan_suhu_air->empatbelas,
            $pencatatan_suhu_air->suhu4,
            $pencatatan_suhu_air->acon,
            $pencatatan_suhu_air->nama_pegawai,
            $pencatatan_suhu_air->paraf,


        ];

    }

    public function drawings()

    {

        $drawing = new Drawing();

        $drawing->setName('Logo');

        $drawing->setDescription('Logo');

        $drawing->setPath(public_path('/kapal.png'));

        $drawing->setHeight(120);

        $drawing->setCoordinates('A1');



        return $drawing;

    }

}