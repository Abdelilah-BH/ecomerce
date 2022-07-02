@extends('layout.master')

@section('content')
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
                        <input class="d-none" id="profile-image" type="file">
                        <label class="mb-0 overlay-icon d-flex flex-center" for="profile-image"><span
                                class="bg-holder overlay overlay-0"></span><span
                                class="z-index-1 text-white dark__text-white text-center fs--1"><svg
                                    class="svg-inline--fa fa-camera fa-w-16" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="camera" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
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
                        <input class="form-check-input" type="radio" value="" id="my-followers" checked="checked"
                            name="view-settings">
                        <label class="form-check-label mb-0" for="my-followers">Admin</label>
                    </div>
                    <div class="form-check mb-0 lh-1">
                        <input class="form-check-input" type="radio" value="" id="only-me" name="view-settings">
                        <label class="form-check-label mb-0" for="only-me">Utilisateur</label>
                    </div>
                </div>
                <h6 class="mt-2 fw-bold">Quel est son statut ?</h6>
                <div class="ps-2">
                    <div class="form-check mb-0 lh-1">
                        <input class="form-check-input" type="radio" value="" id="tag-everyone" name="tag-settings">
                        <label class="form-check-label mb-0" for="tag-everyone">Active</label>
                    </div>
                    <div class="form-check mb-0 lh-1">
                        <input class="form-check-input" type="radio" value="" id="group-members" checked="checked"
                            name="tag-settings">
                        <label class="form-check-label mb-0" for="group-members">Desactive</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row g-0">
    <div class="col-lg-8 pe-lg-2">
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="mb-0">Profile Settings</h5>
            </div>
            <div class="card-body bg-light">
                <form class="row g-3">
                    <div class="col-lg-6">
                        <label class="form-label" for="first-name">Nom</label>
                        <input class="form-control" id="first-name" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="last-name">Prenom</label>
                        <input class="form-control" id="last-name" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="email">E-mail</label>
                        <input class="form-control" id="email" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="phone">Telephone</label>
                        <input class="form-control" id="phone" type="text">
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-4 ps-lg-2">
        <div class="sticky-sidebar">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Changer le mot de passe</h5>
                </div>
                <div class="card-body bg-light">
                    <form>
                        <div class="mb-3">
                            <label class="form-label" for="old-password">Ancien mot de passe</label>
                            <input class="form-control" id="old-password" type="password">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="new-password">Nouveau mot de passe</label>
                            <input class="form-control" id="new-password" type="password">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="confirm-password">Confirmez le mot de passe</label>
                            <input class="form-control" id="confirm-password" type="password">
                        </div>
                        <button class="btn btn-primary d-block w-100" type="submit">Confirmer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection