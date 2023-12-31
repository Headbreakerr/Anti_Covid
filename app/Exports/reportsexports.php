<?php

namespace App\Exports;

use App\Models\reports;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class reportsexports implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(reports::getalllreports());
    }
    public function headings():array{
        return[
            'id',
            'Blood_Group',
            'Fever',
            'Flu',
            'Cough',
            'Appetite',
            'Cholestrol',
            'BP',
            'status',
            'patient_name',
        ];
    }
}
