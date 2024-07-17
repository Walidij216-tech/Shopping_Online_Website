<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class ContactController extends Controller

{ 
    public function getContact(){
    $admin = contact::all();
    //select* from admins
    return view('liste-contact',['data'=>$admin]);
}
   public function deleteContact($id){
    $admin = contact::find($id);
    //select* from admins where id(base)=id(url)
    $admin->delete();
    return redirect('/liste-contact');
}
public function ajoutContact(Request $req){
    $admin = new contact;
    $admin->Name=$req->Name;
    $admin->Email=$req->Email;
    $admin->Sujet=$req->Sujet;
    $admin->Message=$req->Message;
    $admin->save();
    return redirect('/liste-contact');
}
public function updateContact(Request $req){
    //$admin = new contact;
    $admin=contact::find($req->id);
    $admin->Name=$req->Name;
    $admin->Email=$req->Email;
    $admin->Sujet=$req->Sujet;
    $admin->Message=$req->Message;
    $admin->save();
    return redirect('/liste-contact');
}
public function getContactId($id){
    $admin = contact::find($id);
    $admin->show1=1;
    $admin->save();
    //select* from admins
    return view('modifier-contact',['data'=>$admin]);
}
}
