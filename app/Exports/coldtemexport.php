<?php

namespace App\Exports;

use App\Models\temperatur;
use Illuminate\Support\Arr;
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

class coldtemexport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithDrawings,  WithStyles, withEvents, WithColumnWidths



{
    /** 

     * @return \Illuminate\Support\Collection 

     */
    
     //public function setSize($sheet)
     //{
       //  $sheet->setAutoSize(true);
 //}

    public function columnWidths(): array

    {

        return [

             'A' => 13,
             'E' => 10,
             'B' => 9,
             'C' => 9,
             'D' => 9,
             'E' => 9,
             'F' => 9,
             'G' => 9,
             'H' => 9,
             'I' => 9,
             'J' => 9,
             'K' => 9,
             'L' => 9,
             'M' => 9,

        ];

    }
     //public function setSize($sheet):array
     //{
         //return
         //[
          //  $sheet->setSize('B11', 50, 50)
        //];
      //}
    public function registerEvents(): array

    {

        return [

            AfterSheet::class => function (AfterSheet $event) {

                $style = [

                    'font' => [

                        'bold' => true

                    ],

                ];

                 $event->sheet->getDelegate()->setCellValue('G1', "Form");

                 $event->sheet->getDelegate()->setCellValue('G2', "Edition");

                 $event->sheet->getDelegate()->setCellValue('G3', "Number");

                 $event->sheet->getDelegate()->setCellValue('G4', "Page");



                 $event->sheet->getDelegate()->setCellValue('H1', "11");

                 $event->sheet->getDelegate()->setCellValue('H2', "1");

                 $event->sheet->getDelegate()->setCellValue('H3', "1");

                 $event->sheet->getDelegate()->setCellValue('H4', "1 of 1");

                $event->sheet->getDelegate()->getStyle('B1:B6')
                

                    ->getAlignment()

                    ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

                $event->sheet->getDelegate()->getStyle('H1:H4')

                    ->getAlignment()

                    ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
                $event->sheet->getDelegate()->getStyle('A10:D10')

                    ->getAlignment()

                    ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
                $event->sheet->getDelegate()->getStyle('A10:A11')

                    ->getAlignment()

                    ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
                $event->sheet->getDelegate()->getStyle('N10:O10')

                    ->getAlignment()

                    ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
                $event->sheet->getDelegate()->getStyle('A6:H6')

                    ->getAlignment()

                    ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
                $event->sheet->getDelegate()->getStyle('B11:M11')

                    ->getAlignment()

                    ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

            }



        ];

    }
    

    public function styles(Worksheet $sheet)

    {
        //$sheet->mergeCells('A10:A11');
        $sheet->mergeCells('B10:M10');
        $sheet->mergeCells('A8:B8');
        $sheet->mergeCells('C9:E9');
        $sheet->mergeCells('B1:F1');
        $sheet->mergeCells('B2:F2');
        $sheet->mergeCells('B3:F3');
        $sheet->mergeCells('B4:F4');
        $sheet->mergeCells('A6:H6');
        $sheet->mergeCells('A9:B9');
        //$sheet->mergeCells('A3:A4');
        

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

         $sheet->getStyle('B1:' . 'F1')->applyFromArray([

             'borders' => [

                 'outline' => [

                     'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM

                 ]

             ],

             'font' => [

                 'bold' => true,

             ],

         ]);

         $sheet->getStyle('B2:' . 'F2')->applyFromArray([

             'borders' => [

                 'outline' => [

                     'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM

                 ]

             ],

             'font' => [

                 'bold' => true,

             ],

         ]);
         $sheet->getStyle('B3:' . 'F3')->applyFromArray([

             'borders' => [

                 'outline' => [

                     'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM

                 ]

             ],

             'font' => [

                 'bold' => true,

             ],

         ]);
         $sheet->getStyle('B4:' . 'F4')->applyFromArray([

             'borders' => [

                 'outline' => [

                     'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM

                 ]

             ],

             'font' => [

                 'bold' => true,

             ],

         ]);

         $sheet->getStyle('G1:' . 'H1')->applyFromArray([

             'borders' => [

                 'outline' => [

                     'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM

                 ]

             ],

             'font' => [

                 'bold' => true,

             ],

         ]);

         $sheet->getStyle('G2:' . 'H2')->applyFromArray([

             'borders' => [

                 'outline' => [

                     'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM

                 ]

             ],

             'font' => [

                 'bold' => true,

             ],

         ]);

         $sheet->getStyle('G3:' . 'H3')->applyFromArray([

             'borders' => [

                 'outline' => [

                     'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM

                 ]

             ],

             'font' => [

                 'bold' => true,

             ],

         ]);

         $sheet->getStyle('G4:' . 'H4')->applyFromArray([

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
           $sheet->getStyle('A10:' . 'A11')->applyFromArray([

               'borders' => [
   
                   'outline' => [
   
                      'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM
   
                   ]
   
               ],
   
               'font' => [
   
                   'bold' => true,
   
               ],
   
          ]);
           $sheet->getStyle('B10:' . 'M11')->applyFromArray([

               'borders' => [
   
                   'outline' => [
   
                      'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM
   
                   ]
   
               ],
   
               'font' => [
   
                   'bold' => true,
   
               ],
   
          ]);
           $sheet->getStyle('N10:N11')->applyFromArray([

               'borders' => [
   
                   'outline' => [
   
                      'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM
   
                   ]
   
               ],
   
               'font' => [
   
                   'bold' => true,
   
               ],
   
          ]);
           $sheet->getStyle('O10:O11')->applyFromArray([

               'borders' => [
   
                   'outline' => [
   
                      'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM
   
                   ]
   
               ],
   
               'font' => [
   
                   'bold' => true,
   
               ],
   
          ]);
           $sheet->getStyle('B11:M11')->applyFromArray([

               'borders' => [
   
                   'outline' => [
   
                      'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM
   
                   ]
   
               ],
   
               'font' => [
   
                   'bold' => true,
   
               ],
   
          ]);
           $sheet->getStyle('G1:G4')->applyFromArray([

   
               'font' => [
   
                   'bold' => true,
   
               ],
   
          ]);
        return [

            'B6' => ['font' => ['bold' => true]],
            'A10:D10' => ['font' => ['bold' => true]],
            'A6:H6' => ['font' => ['bold' => true]],
            'N10:O10' => ['font' => ['bold' => true]],
            //'G1:G4' => ['font' => ['bold' => true]],
            //'H1:H4' => ['font' => ['bold' => true]],



             'A:O'  => ['font' => ['size' => 14]],

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

            ['COLD STORAGE TEMPERATURE LOG'],

            ['', ''],

            ['Cold Storage No : ','', ''],

            ['Month :', ''],
            ['Date', 'Time Temperature Reading','','','','','','','','','','','','Correction Action','Inspector Initial'],
            ['', '00','02','04','06','08','10','12','14','16','18','20','22'],



        ];

    }

    public function map($cold_storage_temperature): array

    {

        return [
            $cold_storage_temperature->tanggal,
            $cold_storage_temperature->temperatur_reading,
            $cold_storage_temperature->temperatur_reading_dua,
            $cold_storage_temperature->temperatur_reading_empat,
            $cold_storage_temperature->temperatur_reading_enam,
            $cold_storage_temperature->temperatur_reading_delapan,
            $cold_storage_temperature->temperatur_reading_sepuluh,
            $cold_storage_temperature->temperatur_reading_duabelas,
            $cold_storage_temperature->temperatur_reading_empatbelas,
            $cold_storage_temperature->temperatur_reading_enambelas,
            $cold_storage_temperature->temperatur_reading_delapanbelas,
            $cold_storage_temperature->temperatur_reading_duapuluh,
            $cold_storage_temperature->temperatur_reading_duadua,  
            $cold_storage_temperature->corrective_action,
            $cold_storage_temperature->inspector_initial,


        ];

    }

    public function drawings()

    {

        $drawing = new Drawing();

        $drawing->setName('Logo');

        $drawing->setDescription('Logo');

        $drawing->setPath(public_path('/kapal.png'));

        $drawing->setHeight(95);

        $drawing->setCoordinates('A1');



        return $drawing;

    }

}