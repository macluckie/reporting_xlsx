<?php

namespace App\Service;

use \PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use \PhpOffice\PhpSpreadsheet\Writer\Csv;

class HandleXlsx
{
    public function xlsxConvert($nameFile)
    {
        $reader = new Xlsx();
        $spreadsheet = $reader->load($nameFile);
        $loadedSheetNames = $spreadsheet->getSheetNames();
        $writer = new Csv($spreadsheet);
        foreach ($loadedSheetNames as $sheetIndex => $loadedSheetName) {
            $writer->setSheetIndex($sheetIndex);
            $writer->save($loadedSheetName . '.csv');
        }
        $csvFile = file($loadedSheetNames[0] . '.csv');

        $csv = array_map('str_getcsv', file($loadedSheetNames[0] . '.csv'));
        array_walk($csv, function (&$a) use ($csv) {
            $a = array_combine($csv[0], $a);
        });
         array_shift($csv);

         rename('orders-test.xlsx','orders-test_old.xlsx');
         return $csv;
    }
}
