<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlateformController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {

    return to_route('register');
    // return view('welcome');
});

// Routes pour l'authentification
Route::controller(AuthController::class)->group(function () {

    // Route d'affichage de la page de connexion
    Route::get('login', 'login')->name('login');

    // Route de recuperation des donnees de login et authentification
    Route::post('login', 'loginAction')->name('login.action');

    // Route d'affichage de la page d'inscription
    Route::get('register', 'register')->name('register');

    // Route de recuperation des donnees de register en post
    Route::post('register', 'registerSave')->name('register.save');
});

// Affichage des autres pages apres connexion de l'utilisateur
Route::controller(PlateformController::class)->group(function () {

    // Route pour afficher la page dossier apres connexion
    Route::get('files', 'files')->name('files');

    // Route pour recuperer les fichiers et enregistrer
    Route::post('/files', 'filesSave')->name('files.save');
});
