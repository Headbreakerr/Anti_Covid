<?php

namespace App\Http\Controllers;

use App\Models\vaccine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\appointment;
use App\Models\reports;
use Illuminate\Support\Facades\DB;


class hospitalcontroller extends Controller
{

  public function hospitaldashboard(){
    return view('hospital.index');
}

public function showhospital(){
  $hospitaldata = DB::table('users')->where('role','hospital')->get();
  return view('main-website.index')->with('hospitaldata',$hospitaldata);
}

public function showappoint(){
  $patientdata = appointment::all();
     return view('hospital.list-of-patient',compact('patientdata'));    
}

public function showappointa(){
  $patientdata = appointment::all();
     return view('hospital.req-of-patient',compact('patientdata'));    
}


function delete($id){
  $userid = appointment::find($id);
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
  if(Auth::id()){
    
  }
  $reports->Blood_Group = $req->bloodgroup;
  $reports->Fever = $req->fever;
  $reports->Flu = $req->flu;
  $reports->Cough = $req->cough;
  $reports->Appetite = $req->appetite;
  $reports->Cholestrol = $req->cholestrol;
  $reports->BP = $req->bp;
  $reports->save();
  return redirect()->back();
}

public function reports(){
  return view('hospital.addreports');
}


      
}
