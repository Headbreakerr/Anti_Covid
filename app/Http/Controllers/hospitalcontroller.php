<?php

namespace App\Http\Controllers;

use App\Models\vaccine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\appointment;
use App\Exports\reportsexports;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\reports;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class hospitalcontroller extends Controller
{

  public function hospitaldashboard(){
  $patient = appointment::all();
  $patientreports = reports::all();
  $patientdata = DB::table('users')->where('role','patient')->get();
    return view('hospital.index',compact('patientdata','patient','patientreports'));
}

public function showhospital(){
  $hospitaldata = DB::table('users')->where('role','hospital')->get();
  return view('main-website.index')->with('hospitaldata',$hospitaldata);
}

public function showappoint(){
      $patientdata = DB::table('users')->where('role','patient')->get();
     return view('hospital.list-of-patient',compact('patientdata'));    
}

public function showappointa(){
  $patientdata = appointment::all();
     return view('hospital.req-of-patient',compact('patientdata'));    
}


public function delete($id){
  $userid = reports::find($id);
  $userid = User::find($id);
  $userid->delete();
  return redirect()->back();
}

public function addvaccine(){
  return view('hospital.addvaccine');
}

public function vaccine(Request $req){
  $vaccine = new vaccine();
  $vaccine->vaccinename = $req->vname;
  $vaccine->vaccinemanufacturing = $req->vmanu;
  $vaccine->save();
  return redirect()->back();
}

public function addreports(Request $req){
  $reports = new reports();
  $reports->Blood_Group = $req->bloodgroup;
  $reports->Fever = $req->fever;
  $reports->Flu = $req->flu;
  $reports->Cough = $req->cough;
  $reports->Appetite = $req->appetite;
  $reports->Cholestrol = $req->cholestrol;
  $reports->BP = $req->bp;
  $reports->status = $req->status;
  $reports->patient_name = $req->username;
  $reports->save();
  return redirect()->back();
}

public function reports(){
  $users = DB::table('users')->where('role','patient')->get();
  return view('hospital.addreports',compact('users'));
}

public function allreports(){
  $patientreports = reports::all();
  return view ('hospital.all-reports',compact('patientreports'));
}

public function exporttoexcel(){
  return Excel::download(new reportsexports,'ReportsExcel.xlsx');
}
      
}
