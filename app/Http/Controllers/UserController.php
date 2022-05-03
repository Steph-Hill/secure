<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){

        $users = User::all();

        return view("admin.user",compact("users"));
    }

    /*************************************
     * Gestion des droits administrateurs*
     *************************************/
    public function manageRight(User $user){
        /********************************
         * creation de la variable $user*
         ********************************/
        
        /*  $user = User::findorfail($id); */

         /**************************************
          * Changement de l'état admin de 1 à 0*
          *              Methode 1             *
          **************************************/
       /*    if($user->admin==0){

            $user->admin = 1;

         }else{

            $user->admin = 0;
         }

         $user->update(); */

          /**************************************
          * Changement de l'état admin de 1 à 0 *
          *              Methode 2              *
          ***************************************/
         $user->admin = !$user->admin;
         
         $user->update();




         return back();
           
        /******************************************
         * si j'ai un utilisateur j'affiche le nom*
         ******************************************/
       /*  if (isset($user)){

            echo $user->name;


        }else{

            abort(403);

        }
         */



        /* return back(); */

    }

}
