<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //index page
    public function index(){
        $title='Welcome To Laravel!';
        // return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }
    public function about(){
        $title='Welcome To Laravel!';
        // return view('pages.index',compact('title'));
        return view('pages.about')->with('title',$title);
    }
    public function service(){
        $title='Welcome To Laravel!';
        // return view('pages.index',compact('title'));
        return view('pages.service')->with('title',$title);
    }
}
