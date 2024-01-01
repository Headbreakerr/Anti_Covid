<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use App\Models\vaccine;
use App\Models\reports;
use App\Models\User;
use App\Exports\reportsexports;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\vaccineExport;
use App\Models\hospital;

class admincontroller extends Controller
{
    function admindashboard(){
      $patientreports = reports::all();
      $patientdata = DB::table('users')->where('role','patient')->get();
      $hospitaldata = DB::table('users')->where('role','hospital')->get();
      $vaccine = vaccine::all();
      $bookdetails = appointment::all();
        return view('admin.index',compact('patientreports','patientdata','hospitaldata','vaccine','bookdetails'));
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
        $patientreports = reports::all();
        return view ('admin.all-reports',compact('patientreports'));
      }
      
      public function bookdetails(){
        $bookdetails = appointment::all();
        return view ('admin.book-appoint-details',compact('bookdetails'));
      }
      
      public function exporttoexcel(){
        return Excel::download(new reportsexports,'ReportsExcel.xlsx');
      }
      
      public function deleteadmin($id){
        $userid = vaccine::find($id);
        $userid = appointment::find($id);
        $userid = reports::find($id);
        $userid = User::find($id);
        $userid->delete();
        return redirect()->back();
      }

      public function addhospital(){
        $hospital = hospital::all();
        return view ('admin.add-hospital',compact('hospital'));
      }

      public function atc(Request $req){
        $name = $req->post('name');
        $phone = $req->post('phone');
        $address = $req->post('address');
        $email = $req->post('email');
        $password = $req->post('password');
        $role = $req->post('role');
        $image = $req->post('image');

        $add = new User();
        $add->name = $name;
        $add->phone = $phone;
        $add->address = $address;
        $add->email = $email;
        $add->password = $password;
        $add->role = $role;
        $add->image = $image;
        $add->save();
    }
       
}
