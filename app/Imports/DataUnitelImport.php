<?php

namespace App\Imports;

use App\DataUnitel;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithProgressBar;
class DataUnitelImport implements ToModel
{
    public function model(array $row)
    {
        return new DataUnitel([
            'tel'   => $row[0],
            'amount'   => $row[1],
            'date'   => Carbon::parse($row[2]),
        ]);
    }
}
