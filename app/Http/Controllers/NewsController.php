<?php

namespace App\Http\Controllers;

use App\Models\Actu;
use App\Models\Semaine;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function accueil(){

        $actus = Actu::all();
        $semaines = Semaine::all() ;

        return view("public.news-lister",compact("actus" , "semaines"));

    }

    public function detail(Actu $actu){

        return view("public.news-detail",compact("actu"));
    }

}
