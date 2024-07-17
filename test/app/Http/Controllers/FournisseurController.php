<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\fournisseur;

class FournisseurController extends Controller

{ 
    public function getFournisseur(){
    $admin = fournisseur::all();
    //select* from admins
    return view('liste-fournisseur',['data'=>$admin]);
}
   public function deleteFournisseur($id){
    $admin = fournisseur::find($id);
    //select* from admins where id(base)=id(url)
    $admin->delete();
    return redirect('/liste-fournisseur');
}
public function ajoutFournisseur(Request $req){
    $admin = new fournisseur;
    $admin->Name=$req->Name;
    $admin->Login=$req->Login;
    $admin->Email=$req->Email;
    $admin->Adresse=$req->Adresse;
    $admin->Tel=$req->Tel;
    $admin->save();
    return redirect('/liste-fournisseur');
}
public function updateFournisseur(Request $req){
    //$admin = new fournisseur;
    $admin=fournisseur::find($req->id);
    $admin->Name=$req->Name;
    $admin->Login=$req->Login;
    $admin->Email=$req->Email;
    $admin->Adresse=$req->Adresse;
    $admin->Tel=$req->Tel;
    $admin->save();
    return redirect('/liste-fournisseur');
}

public function getFournisseurId($id){
    $admin = fournisseur::find($id);
    //select* from admins
    return view('modifier-fournisseur',['data'=>$admin]);
}
}