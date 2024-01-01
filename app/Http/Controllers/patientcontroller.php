<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\vaccine;
use App\Models\appointment;
use App\Models\hospital;
use App\Models\reports;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class patientcontroller extends Controller
{
    public function index(){
        return view('main-website.index');
    }

    public function indexhome(){
        return view('main-website.index');
    }

    public function showhospitalvaccinedata(){
        $hospitaldata = DB::table('users')->where('role','hospital')->get();
        $vaccinedata = DB::table('vaccines')->get();
        return view('main-website.index',compact('hospitaldata','vaccinedata'));
    }

    public function showhospitalvaccine(){
        $hospitaldata = DB::table('users')->where('role','hospital')->get();
        $vaccinedata = DB::table('vaccines')->get();
        return view('main-website.about',compact('hospitaldata','vaccinedata'));
    }

    public function showhospitalvaccineappo(){
        $hospitaldata = DB::table('users')->where('role','hospital')->get();
        $vaccinedata = DB::table('vaccines')->get();
        return view('main-website.appointments',compact('hospitaldata','vaccinedata'));
    }

    public function showhospitaldata(){
        $hospitaldata = DB::table('users')->where('role','hospital')->get();
        return view('main-website.index')->with('hospitaldata',$hospitaldata);
    }

    public function showhospital(){
        $hospitaldata = DB::table('users')->where('role','hospital')->get();
        return view('main-website.hospital')->with('hospitaldata',$hospitaldata);
    }

    public function showhospitalapp(){
        $hospitaldata = DB::table('users')->where('role','hospital')->get();
        return view('main-website.appointments')->with('hospitaldata',$hospitaldata);
    }

    public function showvaccine(){
        $vaccinedata = vaccine::all();
        return view('main-website.index',compact('vaccinedata'));
    }

    public function deleteapp($id){
        $userid = appointment::find($id);
        $userid->delete();
        return redirect()->back();
    }

    



   

    public function appoint(Request $req){
        $appoin = new appointment();
        $appoin->first_name = $req->fname;
        $appoin->last_name = $req->lname;
        $appoin->hospitalname = $req->hname;
        $appoin->vaccinename = $req->vname;
        $appoin->phone = $req->phone;
        $appoin->time = $req->time;
        $appoin->date = $req->date;
        $appoin->status = 'in progress';
        $appoin->massage = $req->massage;
        if(Auth::id()){
            $appoin->user_id = Auth::user()->id;
        }
        $appoin->save();
        return redirect()->back();
    }

    public function myappoint(){
        if(Auth::id()){
          $userid=Auth::user()->id;
          $appoint=appointment::where('user_id',$userid)->get();
          return view('main-website.myappointments',compact('appoint'));
        }else{
          return redirect()->back();
        }
      }

      public function myreports(){
        if(Auth::id()){
          $userid=Auth::user()->id;
          $reports=reports::where('patient_name',$userid)->get();
          return view('main-website.reports',compact('reports'));
        }else{
          return redirect()->back();
        }
      }

     




    

    public function bookappoint(){
        return view('main-website.appointments');
    }

    public function appointment(){
        return view('main-website.appointments');
    }

    public function departpage(){
        return view('main-website.department');
    }

    public function yourreports(){
        return view('main-website.reports');
    }

    public function addhospital(Request $req){
        $hospital = new hospital();
        $hospital->name = $req->name;
        $hospital->email = $req->email;
        $hospital->password = hash::make($req->password);
        $hospital->phone = $req->phone;
        $hospital->address = $req->address;
        $hospital->role = $req->role;
        $image = $req->file('image');
        $ext = rand().".".$image->getClientOriginalName();
        $myfile = $image->move('images1',$ext);
        $hospital->image = $myfile;
        $hospital->save();
        return redirect()->back();
    }


    public function registerhospital(){
        return view('main-website.components.add-hospital');
    }





   

    
}
