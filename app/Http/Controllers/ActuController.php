<?php

namespace App\Http\Controllers;

use App\Models\Actu;
use App\Models\Semaine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActuController extends Controller
{
    //
    public function index(Actu $actu){

        $actus = Actu::all();

    return view("admin.actu-lister",compact("actus"));

    }

    /***********************
     * création d'une actu *
     ***********************/
    public function create(Request $request){

        /**************************************************************
         * je verifie l'existence de mon titre car il est obligatoire *
         **************************************************************/
        $validate = $request->validate(["titre"=>"required"]);

        /*************************
         * je créer mon instance *
         *************************/
             $news = new Actu;

          /******************************************
           * je mets à jour les valeurs,            *
           * je les prepares à les mettres en base  *
           *****************************************/   
             $news->titre = $request->titre;
             $news->description = $request->description;
             $news->semaine_id  = $request->semaine_id;
             

            /***************************************
             * Je controle l'existence d'une image *
            ***************************************/
        if($request->hasFile("imageActu")){

            /* dd($request); */
            //je recupere les informations de l'image a partir du formulaire
            //$image = $request->file("imageActu");

            /* dd($image); */

            //formatage du nom de mon image
            //$fileName = time().".".$image->getClientOriginalExtension();
            //chaine de caractere avec l'extension de l'image
            //dd($fileName);

            //copy de l'image sur le serveur
            //Image::make($image)->save(storage_path("/upload/".$fileName));

            /***************************************
             * il me montre où est placé mon image *
             ***************************************/
            $path = Storage::putFile('public', $request->file('imageActu'));

            /*********************
             * je le met en base *
             *********************/
            $news->image = $path;

          
        }

         $news->save();

        return back();

    }

        public function update(Request $request,Actu $actu ){

            /*********************************************************
             * regle de sécurites pour mon titre qui est obligatoire *
             *********************************************************/
            $validate = $request->validate(["titre"=>"required"]);
                
                /****************************
                 *  On met a jour les infos *
                 ****************************/

                 $actu->update(["titre"=>$request->titre,
                                "semaine_id"=>$request->semaine_id,
                                "description"=>$request->description]);

              return back();


        }


    public function editer(Actu $actu){

        $semaines = Semaine::all() ; 


        return view("admin.actu-editer",compact("actu","semaines"));
    } 


    public function delete(Actu $actu){

    
        $actu->delete();

        return back();

    }

   /*  public function ajouter(Request $request){

       

            $newActu = new Actu;

            $newActu->titre = $request->titre;

            $newActu->save();

        return view("admin.actu-editer",compact("newActu"));
    } */
    
}
