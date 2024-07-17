<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorie;

class CategorieController extends Controller

{ 
    public function getCategorie(){
    $admin = categorie::all();
    //select* from admins
    return view('liste-categorie',['data'=>$admin]);
}
   public function deleteCategorie($id){
    $admin = categorie::find($id);
    //select* from admins where id(base)=id(url)
    $admin->delete();
    return redirect('/liste-categorie');
}
public function ajoutCategorie(Request $req){
    $admin = new categorie;
    $admin->Name=$req->Name;
    $admin->Description=$req->Description;
    $admin->save();
    return redirect('/liste-categorie');
}
public function updateCategorie(Request $req){
    //$admin = new categorie;
    $admin=categorie::find($req->id);
    $admin->Name=$req->Name;
    $admin->Description=$req->Description;
    $admin->save();
    return redirect('/liste-categorie');
}
public function getCategorieId($id){
    $admin = categorie::find($id);
    //select* from admins
    return view('modifier-categorie',['data'=>$admin]);
}
}