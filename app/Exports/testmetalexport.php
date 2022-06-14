<?php

namespace App\Exports;

use App\Models\temperatursuhu;
use App\Models\temperatur_suhu;
use App\Models\test_metal;
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

class testmetalexport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithDrawings, WithStyles, withEvents, WithColumnWidths



{
    /** 

     * @return \Illuminate\Support\Collection 

     */

    public function columnWidths(): array

    {

        return [

            'D' => 10,

            'C' => 15

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

        $sheet->getStyle('A10:' . $maxColl . $maxRow)->applyFromArray([

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



            'A:D'  => ['font' => ['size' => 14]],

        ];

    }

    public function collection()

    {

        return test_metal::all();

    }

    public function headings(): array

    {

        return [

            ['', 'Monitoring Form'],

            ['', '',],

            ['', 'Test Metal Detector'],

            ['', ''],

            ['', ''],

            ['', 'TEST METAL DETECTOR'],

            ['', ''],

            [''],

            ['Date', ''],
            ['Waktu', 'Sebelum Dioperasikan', 'Result'],




        ];

    }

    public function map($test_metal_detector): array

    {

        return [
            $test_metal_detector->waktu,
            $test_metal_detector->sebelum_dioperasikakn,
            $test_metal_detector->result,



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