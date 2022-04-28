<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActuController extends Controller
{
    //
    public function index(){

        return view("admin.actu-lister");
    }

    public function editer(){

        return view("admin.actu-editer");
    }
}
