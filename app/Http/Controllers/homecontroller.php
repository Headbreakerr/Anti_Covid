<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\appointment;



class homecontroller extends Controller
{
    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->usertype == '0'){
                return view('main-website.index'); 
            }elseif(Auth::user()->usertype == '1'){
                return view ('admin.dashboard');
            }elseif(Auth::user()->usertype == '2'){
                return view ('hospital.index');
            }else{
                
            }
        }
    }

  
    public function home(){
        return view('main-website.index');
    }
   

    public function showhospitala(){
        $hospitaldata = DB::table('users')->where('role','hospital')->get();
        return view('main-website.index')->with('hospitaldata',$hospitaldata);
    }

   
    public function myappoint(){
      if(Auth::id()){
        $userid=Auth::user()->id;
        $appoint=appointment::where('user_id',$userid)->get();
        return view('main-website.myappoint',compact('appoint'));
      }else{
        return redirect()->back();
      }
    }


    function delete($id){
        $userid = appointment::find($id);
        $userid->delete();

        return redirect()->back();
    }

    function reject($id){
        $userid = appointment::find($id);
        $userid->status= 'reject';
        $userid->save();

        return redirect()->back();
    }

    function approved($id){
        $userid = appointment::find($id);
        $userid->status= 'approved';
        $userid->save();

        return redirect()->back();
    }

  
}
