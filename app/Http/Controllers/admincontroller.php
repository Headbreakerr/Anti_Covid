<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admincontroller extends Controller
{
    function admindashboard(){
        return view('admin.index');
    }
}
