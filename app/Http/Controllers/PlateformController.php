<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlateformController extends Controller
{
    // mehtode d'affichage de la page d'ajout de fichiers
    // public function files() {

    //     return view('files');
    // }

    // methode de recuperation de fichiers et sauvegarde
    public function filesSave(Request $request) {

        dd($request->all());
    }
}
