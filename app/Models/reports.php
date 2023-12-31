<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class reports extends Model
{
    use HasFactory;

    public static function getalllreports(){
        $result = DB::table('reports')
        ->select( 
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
        )->get()->toArray();
        return $result;
    } 
}
