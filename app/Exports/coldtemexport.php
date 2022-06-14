<?php

namespace App\Exports;

use App\Models\temperatur;

use Maatwebsite\Excel\Concerns\WithMapping;

use Maatwebsite\Excel\Concerns\WithHeadings;

use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Concerns\ShouldAutoSize;

use Maatwebsite\Excel\Concerns\WithStyles;

use Maatwebsite\Excel\Concerns\WithEvents;

use Maatwebsite\Excel\Events\AfterSheet;

use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

use Maatwebsite\Excel\Concerns\WithColumnWidths;

use Maatwebsite\Excel\Concerns\WithDrawings;

use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class coldtemexport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithDrawings, WithStyles, withEvents, WithColumnWidths



{
    /** 

     * @return \Illuminate\Support\Collection 

     */

    public function columnWidths(): array

    {

        return [

            'D' => 20,

            'C' => 20

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

        return temperatur::all();

    }

    public function headings(): array

    {

        return [

            ['', 'Monitoring Form'],

            ['', '',],

            ['', 'COLD STORAGE TEMPERATURE LOG'],

            ['', ''],

            ['', ''],

            ['', 'COLD STORAGE TEMPERATURE LOG'],

            ['', ''],

            ['Cold Storage No : ', '1'],

            ['Month', ''],
            ['Date', 'Time Temperature Reading', 'Correction Action','Inspector Initial'],




        ];

    }

    public function map($cold_storage_temperature): array

    {

        return [
            $cold_storage_temperature->no,
            $cold_storage_temperature->tanggal_jam,
            $cold_storage_temperature->temperatur,
            $cold_storage_temperature->action,
            $cold_storage_temperature->catatan,


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