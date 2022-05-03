<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function accueil(){

        return view("public.news-lister");

    }

}
