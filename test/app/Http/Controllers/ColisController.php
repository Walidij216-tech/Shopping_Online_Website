<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\colis;

class ColisController extends Controller

{
    
        public function getColis(){
        $admin = colis::all();
        //select* from admins
        return view('liste-colis',['data'=>$admin]);
    }
       public function deleteColis($id){
        $admin = colis::find($id);
        //select* from admins where id(base)=id(url)
        $admin->delete();
        return redirect('/liste-colis');
    }
    public function ajoutColis(Request $req){
        $admin = new colis;
        $admin->Description=$req->Description;
        $admin->Qte=$req->Qte;
        $admin->Prix=$req->Prix;
        $admin->Nom_Client=$req->Nom_Client;
        $admin->Email_Client=$req->Email_Client;
        $admin->Tel_Client=$req->Tel_Client;
        $admin->Adresse_Client=$req->Adresse_Client;
        $admin->Etat=$req->Etat;
        $admin->Password=$req->Password;
        $admin->save();
        return redirect('/liste-colis');
    }
    public function updateColis(Request $req){
        //$admin = new colis;
        $admin=colis::find($req->id);
        $admin->Description=$req->Description;
        $admin->Qte=$req->Qte;
        $admin->Prix=$req->Prix;
        $admin->Nom_Client=$req->Nom_Client;
        $admin->Email_Client=$req->Email_Client;
        $admin->Tel_Client=$req->Tel_Client;
        $admin->Adresse_Client=$req->Adresse_Client;
        $admin->Etat=$req->Etat;
        $admin->Password=$req->Password;
        $admin->save();
        return redirect('/liste-colis');
    }
    public function getColisId($id){
        $admin = colis::find($id);
        //select* from admins
        return view('modifier-colis',['data'=>$admin]);
    }
   
    
}
