<?php

namespace App\Exports;

use App\Models\vaccine;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class vaccineExport implements FromCollection
{
    public function collection()
    {
        return collect(vaccine::getVaccineData());
    }
    public function headings():array{
        return [
          
          'name',
          'manufacturing'
        ];

    }
}
