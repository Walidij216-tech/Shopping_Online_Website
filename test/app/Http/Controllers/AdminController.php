<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admis;

class AdminController extends Controller

{ 
    public function getAdmin(){
    $admin = admis::all();
    //select* from admins
    return view('liste-admin',['data'=>$admin]);
}
   public function deleteAdmin($id){
    $admin = admis::find($id);
    //select* from admins where id(base)=id(url)
    $admin->delete();
    return redirect('/liste-admin');
}
public function ajoutAdmin(Request $req){
    $admin = new admis;
    $admin->Name=$req->Name;
    $admin->Login=$req->Login;
    $admin->Email=$req->Email;
    $admin->password=$req->password;
    $admin->save();
    return redirect('/liste-admin');
}
public function updateAdmin(Request $req){
    //$admin = new admis;
    $admin=admis::find($req->id);
    //select*from admins where id(base)=id(url)
    $admin->Name=$req->Name;
    $admin->Login=$req->Login;
    $admin->Email=$req->Email;
    $admin->password=$req->password;
    $admin->save();
    return redirect('/liste-admin');
}
public function getAdminId($id){
    $admin = admis::find($id);
    //select* from admins
    return view('modifier-admin',['data'=>$admin]);
}
}