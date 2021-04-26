<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD

=======
use Session;
>>>>>>> 43b6dcd22a147ec3268950d8803c1fd0aefb8fab
class NewsController extends Controller
{
    public function index()
    {   
        Session::put('active','news');
        return view('web.news');
    }
}
