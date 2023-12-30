<?php

namespace App\Http\Controllers;

use App\Models\vaccine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class admincontroller extends Controller
{
    function admindashboard(){
        return view('admin.index');
    }

    public function listofpatient(){
        $patientdata = DB::table('users')->where('role','patient')->get();
        return view('admin.list-of-patient')->with('patientdata',$patientdata);
      }

      public function listofhospital(){
        $hospitaldata = DB::table('users')->where('role','hospital')->get();
        return view('admin.list-of-hospital')->with('hospitaldata',$hospitaldata);
      }

      public function allvaccine(){
        $vaccine = vaccine::all();
        return view ('admin.all-vaccine',compact('vaccine'));
      }

      public function allreports(){
        return view ('admin.all-reports');
      }
}
