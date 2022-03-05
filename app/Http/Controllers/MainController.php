<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    //

    public function index(){
        $articles=DB::table('actu_models')->get();
        return view('pages.index',['articles'=>$articles]);
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
        $articles=DB::table('actu_models')->get();
        return view('pages.actu',['articles'=>$articles]);
    }
    public function detail(){
        $articles=DB::table('actu_models')->get();
        return view('pages.details',['articles'=>$articles]);
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
