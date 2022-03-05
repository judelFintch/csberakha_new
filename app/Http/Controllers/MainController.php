<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //

    public function index(){
        return view('pages.index');
    }


    public function about(){
        return view('pages.about');
    }

    
    public function admission(){
        return view('pages.admission');
    }

    
    public function innovations(){
        return view('pages.innovations');
    }

    
    public function options(){
        return view('pages.options');
    }
    public function actu(){
        return view('pages.actu');
    }

    
    public function contact(){
        return view('pages.contact');
    }

    public function galery(){
        return view('pages.galery');
    }


    public function underContstruct(){
        return view('pages.under');
    }

}
