<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class DoctorController extends Controller
{
    public function index()
    {   
        Session::put('active','category');
        return view('web.category');
    }
}