@extends('layout.master')

@section('content')
@if (isset($message) && $message)
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5" aria-live="polite" aria-atomic="true">
    <div class="toast show align-items-center text-white bg-success border-0" role="alert" aria-live="assertive"
        aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                {{$message}}
            </div>
            <button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast"
                aria-label="Close"></button>
        </div>
    </div>
</div>
@endif

<form action="/categories/ajouter" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row g-0">
        <div class="col-lg-7 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Categorie</h5>
                </div>
                <div class="card-body bg-light">
                    <div class="row g-3">
                        <div class="col-lg-12">
                            <label class="form-label" for="name">Nom</label>
                            <div class="has-validation">
                                <input class="form-control @error('name') is-invalid @enderror" id="name"
                                    value="{{old('name')}}" name="name">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label" for="description">Description</label>
                            <div class="has-validation">
                                <textarea class="form-control @error('description') is-invalid @enderror"
                                    id="description" name="description" value="{{old('description')}}"
                                    rows="4"></textarea>
                                @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Parametres categorie</h5>
                </div>
                <div class="card-body bg-light">
                    <div class="row g-3">
                        <div class="col-lg-12">
                            <label class="form-label" for="order">Order</label>
                            <div class="has-validation">
                                <input class="form-control @error('order') is-invalid @enderror" id="order"
                                    type="number" name="order" value="{{old('order')}}">
                                @error('order')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <h6 class="fw-bold">Quel est son statut ?
                            </h6>
                            <div class="ps-2">
                                <div class="form-check mb-0 lh-1">
                                    <input class="form-check-input" type="radio" value="1" id="status" name="status">
                                    <label class="form-check-label mb-0" for="everyone">Active
                                    </label>
                                </div>
                                <div class="form-check mb-0 lh-1">
                                    <input class="form-check-input" type="radio" value="0" id="status" checked="checked"
                                        name="status">
                                    <label class="form-check-label mb-0" for="my-followers">Desactive
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end pb-2">
                            <button class="btn btn-primary" id="liveToastBtn" type="submit">Ajouter</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection

<script>
    var loadFile = function(event) {
        var image = document.getElementById('cover');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>