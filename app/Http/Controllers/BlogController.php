<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index ($id)
    {
        return view('undangans.undangan',['blog'=>$id]);
    }
}
