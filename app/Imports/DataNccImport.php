<?php

namespace App\Imports;

use App\DataNcc;
use Maatwebsite\Excel\Concerns\ToModel;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithProgressBar;
class DataNccImport implements ToModel

{


    public function model(array $row)
    {
        return new DataNcc([
            'tel'   => $row[0],
            'amount'   => $row[1],
            'date'   => Carbon::parse($row[2]),
        ]);
    }
}
