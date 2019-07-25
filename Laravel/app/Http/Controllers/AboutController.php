<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $title='About title';
        $description='Description';
        return view('about',['abouttitle'=>$title,'aboutdescription'=>$description]);
    }
}
