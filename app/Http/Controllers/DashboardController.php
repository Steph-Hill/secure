<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    //

    public function index(){

        /**************************************************************************
         * Controle l'identité de l'utilisateur avant d'afficher la page dashboard*
         **************************************************************************/
        if (! Gate::allows('access-admin')) {
            abort(403);
        }
        return view("dashboard");

    }
}
