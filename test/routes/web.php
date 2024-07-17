<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\ColisController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/ liste-admin',[AdminController::class,'getAdmin']);
Route::get('/ suppAdmin/{id}',[AdminController::class,'deleteAdmin']);
Route::get('/ liste-fournisseur',[FournisseurController::class,'getFournisseur']);
Route::get('/ suppFournisseur/{id}',[FournisseurController::class,'deleteFournisseur']);
Route::get('/ liste-colis',[ColisController::class,'getColis']);
Route::get('/ suppColis/{id}',[ColisController::class,'deleteColis']);
Route::get('/ liste-categorie',[CategorieController::class,'getCategorie']);
Route::get('/ suppCategorie/{id}',[CategorieController::class,'deleteCategorie']);
Route::get('/ liste-contact',[ContactController::class,'getContact']);
Route::get('/ suppContact/{id}',[ContactController::class,'deleteContact']);



Route::get('/ajout-admin',function(){
return view('ajout-admin');
});

Route::get('/',function(){
    return view('welcome');
    });
Route::post('/addAdmin',[AdminController::class,'ajoutAdmin']);



Route::get('/ajout-fournisseur',function(){
    return view('ajout-fournisseur');
    });
    Route::post('/addFournisseur',[FournisseurController::class,'ajoutFournisseur']);


    Route::get('/ajout-categorie',function(){
        return view('ajout-categorie');
        });
Route::post('/addCategorie',[CategorieController::class,'ajoutCategorie']);



Route::get('/ajout-colis',function(){
            return view('ajout-colis');
            });
Route::post('/addColis',[ColisController::class,'ajoutColis']);


Route::get('/ajout-contact',function(){
    return view('ajout-contact');
    });
Route::post('/addContact',[ContactController::class,'ajoutContact']);



Route::get('/modifier-admin/{id}',[AdminController::class,'getAdminId']);
Route::get('/modifier-fournisseur/{id}',[FournisseurController::class,'getFournisseurId']);
Route::get('/ modifier-contact/{id}',[ContactController::class,'getContactId']);
Route::get('/ modifier-colis/{id}',[ColisController::class,'getColisId']);
Route::get('/ modifier-categorie/{id}',[CategorieController::class,'getCategorieId']);

Route::post('/ modifAdmin',[AdminController::class,'updateAdmin']);
Route::post('/ modifCategorie',[CategorieController::class,'updateCategorie']);
Route::post('/ modifFournisseur',[FournisseurController::class,'updateFournisseur']);
Route::post('/ modifColis',[ColisController::class,'updateColis']);
Route::post('/ modifContact',[ContactController::class,'updateContact']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
