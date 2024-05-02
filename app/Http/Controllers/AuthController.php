<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Symfony\Component\HttpKernel\Debug\VirtualRequestStack;

class AuthController extends Controller
{
    // methode d'affichage de la page login
    public function login() {

        return view('auth.login');
    }

    // methode pour authentifier l'utilisateur
    public function loginAction(Request $request) {

        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

    }

    // methode d'affichage de la page register
    public function register() {

        return view('auth.register');
    }

    // methode de validation des donnees d'inscription
    public function registerSave(Request $request) {

        // Validation des donnees de l'utilisateur
        $request->validate([
            'cnib' => ['required'],
            'firstname' => ['required'],
            'lastname' => ['required'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'password' => ['required', 'confirmed', 'min:8', 'max:20'],
            'password_confirmation' => ['required']
            
        ], [
            // Personnalisation des messages d'erreurs
            'required' => 'Ce champ est obligatoire',
            'email' => 'Ce champ doit contenir un email valide',
            'confirmed' => 'Les champs ne se correspondent pas',
            'min' => 'Le champ doit avoir au minimum :min caracteres',
            'max' => 'Le champ doit contenir au maximum :max caracteres'
        ]);

        // renvoit de la vue file avec les donnees
        return view('files', ['request' =>$request->all()]);
    }

    // Method for show files page
    // public function files(Request $request) {

        // // Validation of request data
        // $request->validate([
        //     'cnib' => ['required'],
        //     'firstname' => ['required'],
        //     'lastname' => ['required'],
        //     'email' => ['required', 'email'],
        //     'phone' => ['required'],
        //     'password' => ['required', 'confirmed', 'min:8', 'max:20'],
        //     'password_confirmation' => ['required']
            
        // ], [
        //     // Specify custom error messages
        //     'required' => 'Ce champ est obligatoire',
        //     'email' => 'Ce champ doit contenir un email valide',
        //     'confirmed' => 'Les champs ne se correspondent pas',
        //     'min' => 'Le champ doit avoir au minimum :min caracteres',
        //     'max' => 'Le champ doit contenir au maximum :max caracteres'
        // ]);

        // Receive users informations after validation
    //     $datas = $request->all();
    //     return view('files', ['datas' => $datas]);
    // }
}
