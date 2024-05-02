@extends('base')

@section('title', "Page d'accueil")

@section('content')
<div class="login-container  d-flex flex-column text-center gap-3">
    <h1 class="title text-center">Inscription</h1>
    <div class="content">
        <div class="form-card">
            <div class="form-card-second">
                <div class="alert-info p-3">Les champs suivit de <sup>*</sup> sont obligatoires</div>
                    <form action="{{ route('register.save') }}" class="d-flex flex-column gap-2" id="signup-form" method="POST">
                        @csrf
                        <div class="input-control">
                            <label for="cnib">Numero CNIB : <sup>*</sup></label>
                            <input type="text" placeholder="Votre numero de CNIB ex: B17202020" id="cnib" name="cnib" value="{{ old('cnib')}}">
                            <div class="error">
                                @error('cnib')
                                    <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="input-control">
                            <label for="firstname">Nom : <sup>*</sup></label>
                            <input type="text" placeholder="votre nom" id="firstname" name="firstname" value="{{ old('firstname')}}">
                            <div class="error">
                                @error('firstname')
                                    <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="input-control">
                            <label for="lastname">Prenom : <sup>*</sup></label>
                            <input type="text" placeholder="votre prenom" id="lastname" name="lastname" value="{{ old('lastname')}}">
                            <div class="error">
                                @error('lastname')
                                    <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="input-control">
                            <label for="email">Email : <sup>*</sup></label>
                            <input type="email" placeholder="votre email ex: gov@gmail.com" id="email" name="email" value="{{ old('email')}}">
                            <div class="error">
                                @error('email')
                                    <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="input-control">
                            <label for="phone">Telephone : <sup>*</sup></label>
                            <input type="text" placeholder="votre numero de telephone ex: +226 76093485" id="phone" name="phone" value="{{ old('phone')}}">
                            <div class="error">
                                @error('phone')
                                    <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="input-control">
                            <label for="password">Mot de passe : <sup>*</sup></label>
                            <input type="password" placeholder="Definissez un mot de passe" id="password" name="password">
                            <div class="error">
                                @error('password')
                                    <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="input-control">
                            <label for="password_confirmation">Confirmer mot de passe: <sup>*</sup></label>
                            <input type="password" placeholder="Confirmer le mot de passe" id="password_confirmation" name="password_confirmation">
                            <div class="error">
                                @error('password_confirmation')
                                    <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="btn-control">
                            <div class="login">Deja inscrit? <a href="/login/">Se connecter</a></div>
                            <input type="submit" value="Valider"></input>
                        </div>
                    </form> <!-- Signup form -->
            </div>
        </div>
    </div>
</div>
@endsection 