@extends('layout.master')

@section('content')
<form action="/utilisateurs/ajouter" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row g-0">
        <div class="col-lg-8 pe-lg-2">
            <div class="card mb-3 btn-reveal-trigger">
                <div class="card-header position-relative min-vh-25 mb-8">
                    <div class="cover-image">
                        <div class="bg-holder rounded-3 rounded-bottom-0"
                            style="background-image:url(../../assets/img/generic/4.jpg);">
                        </div>
                    </div>
                    <div class="avatar avatar-5xl avatar-profile shadow-sm img-thumbnail rounded-circle">
                        <div class="h-100 w-100 rounded-circle overflow-hidden position-relative">
                            <img src="#" alt="" data-dz-thumbnail="data-dz-thumbnail" width="200">
                            <input class="d-none" id="image" name="image" type="file">
                            <label class="mb-0 overlay-icon d-flex flex-center" for="image"><span
                                    class="bg-holder overlay overlay-0"></span><span
                                    class="z-index-1 text-white dark__text-white text-center fs--1"><svg
                                        class="svg-inline--fa fa-camera fa-w-16" aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="camera" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M512 144v288c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48h88l12.3-32.9c7-18.7 24.9-31.1 44.9-31.1h125.5c20 0 37.9 12.4 44.9 31.1L376 96h88c26.5 0 48 21.5 48 48zM376 288c0-66.2-53.8-120-120-120s-120 53.8-120 120 53.8 120 120 120 120-53.8 120-120zm-32 0c0 48.5-39.5 88-88 88s-88-39.5-88-88 39.5-88 88-88 88 39.5 88 88z">
                                        </path>
                                    </svg>
                                    <span class="d-block">Ajouter image</span></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 pe-lg-2">
            <div class="card mb-3 overflow-hidden">
                <div class="card-header">
                    <h5 class="mb-0">Paramètres du compte</h5>
                </div>
                <div class="card-body bg-light pb-4">
                    <h6 class="fw-bold">Quel est son rôle ?</h6>
                    <div class="ps-2">
                        <div class="form-check mb-0 lh-1">
                            <input class="form-check-input" type="radio" value="1" id="admin" name="admin">
                            <label class="form-check-label mb-0" for="admin">Admin</label>
                        </div>
                        <div class="form-check mb-0 lh-1">
                            <input class="form-check-input" type="radio" value="0" id="admin" name="admin"
                                checked="checked">
                            <label class="form-check-label mb-0" for="admin">Utilisateur</label>
                        </div>
                    </div>
                    <h6 class="mt-2 fw-bold">Quel est son statut ?</h6>
                    <div class="ps-2">
                        <div class="form-check mb-0 lh-1">
                            <input class="form-check-input" type="radio" value="1" id="active" name="active"
                                checked="checked">
                            <label class="form-check-label mb-0" for="active">Active</label>
                        </div>
                        <div class="form-check mb-0 lh-1">
                            <input class="form-check-input" type="radio" value="0" id="active" name="active">
                            <label class="form-check-label mb-0" for="active">Desactive</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Profile Settings</h5>
                </div>
                <div class="card-body bg-light">
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <label class="form-label" for="first-name">Nom</label>
                            <div class="has-validation">
                                <input class="form-control @error('firstName') is-invalid @enderror" id="first-name"
                                    value="{{old('firstName')}}" name="firstName">
                                @error('firstName')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="last-name">Prenom</label>
                            <div class="has-validation">
                                <input class="form-control @error('lastName') is-invalid @enderror" id="last-name"
                                    name="lastName" value="{{old('lastName')}}">
                                @error('lastName')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="email">E-mail</label>
                            <div class="has-validation">
                                <input class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                                    value="{{old('email')}}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="phone">Telephone</label>
                            <input class="form-control" id="phone" name="phone">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="password">Mot de passe</label>
                            <div class="has-validation">
                                <input class="form-control @error('password') is-invalid @enderror" id="password"
                                    name="password" type="password" value="{{old('password')}}">
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="confirm-password">Confirmez le mot de passe</label>
                            <input class="form-control" id="confirm-password" type="password">
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Ajouter</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection