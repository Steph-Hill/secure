<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoncompteController extends Controller
{
    /******************************
     * POINT D'ENTRER DE MA CLASS *
     ******************************/
    public function __construct(){

        /***********************************************
         * securise toutes les pages de mon comtroleur *
         ***********************************************/

        /* $this->middleware("auth"); */

        /******************************************************************
         * securise toutes les pages de mon comtroleur avec une exception *
         ******************************************************************/

        /* $this->middleware("auth")->except(["panier",]); */

    }

    public function index(){

        return view("moncompte");
    }

    public function panier(){

        return view("panier");
    }
}
