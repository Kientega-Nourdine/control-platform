@extends('base')

@section('title', 'Ajouter des fichiers')

@section("content")
<div class="login-container  d-flex flex-column text-center gap-3">
        <h1 class="title text-center">Depot de documents numerisees</h1>
        <div class="content">
            <div class="form-card">
                <div class="form-card-second">
                    <div class="alert-info text-danger">Verifier bien vos informations avant de continuer</div>
                    <div class="alert-info p-3" >Les champs suivit de <sup>*</sup> sont obligatoires</div>
                        <!-- Modification du formulaire, ajout de champ file -->
                        <form action="{{ route('files.save') }}" class="d-flex flex-column gap-2" id="signup-form" method="POST">
                            @csrf
                            <div class="files-infos d-flex flex-wrap justify-content-between ">
                                <h5>Ces informations ne peuvent pas etre modifiees revenez en arriere si vous souhaitez en modifer certaines</h5>
                                <div class="input-control">
                                    <label for="cnib">Numero CNIB : </label>
                                    <input name="cnib" type="text" placeholder="Votre numero de CNIB ex: B17202020" id="payment-cnib" value="{{ $request['cnib'] }}" readonly>
                                    <!-- <input style="display: none;" type="text" placeholder="Votre numero de CNIB ex: B17202020" id="payment-cnib" name="cnib" value="B 17909090"> -->
                                    <div class="error">
                                        @error('cnib')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="input-control">
                                    <label for="firstname">Nom : </label>
                                    <input type="text" placeholder="votre nom" id="firstname" name="firstname" value="{{ $request['firstname'] }}">
                                    <div class="error">
                                        @error('firstname')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="input-control">
                                    <label for="lastname">Prenom : </label>
                                    <input type="text" placeholder="votre prenom" id="lastname" name="lastname" value="{{ $request['lastname'] }}" readonly>
                                    <div class="error">
                                        @error('lastname')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="input-control">
                                    <label for="email">Email : </label>
                                    <input type="email" placeholder="votre email ex: gov@gmail.com" id="email" name="email" value="{{ $request['email'] }}" readonly>
                                    <div class="error">
                                        @error('email')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="input-control">
                                    <label for="phone">Telephone : </label>
                                    <input type="text" placeholder="votre numero de telephone ex: +226 76093485" id="phone" name="phone" value="{{ $request['phone'] }}" readonly>
                                    <div class="error">
                                        @error('phone')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="files-container">
                            <div class="input-control">
                                    <label for="phone">Ajouter des fichiers: <sup>*</sup></label>
                                    <input type="file" name="files">
                                    <div class="error">
                                        @error('phone')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="btn-control">
                                <div class="files"><a href="/">Retour</a></div>
                                <input type="submit" value="Valider"></input>
                            </div>
                        </form> <!-- Signup form -->
                </div>
            </div>
        </div>
    </div>
@endsection

