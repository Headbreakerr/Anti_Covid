<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class vaccine extends Model
{
    use HasFactory;
 
  public static function getVaccineData()
    {
        $result = DB::table('vaccines')
        ->select('id','vaccinename','vaccinemanufacturing')
        ->get()
        ->toArray();
        return $result;
    }
}
