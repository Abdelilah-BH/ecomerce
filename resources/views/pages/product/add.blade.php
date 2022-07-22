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

<form action="/produits/ajouter" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row g-0">
        <div class="col-lg-7 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Ajouter un produit</h5>
                </div>
                <div class="card-body bg-light">
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <label class="form-label" for="sku">SKU</label>
                            <div class="has-validation">
                                <input class="form-control @error('sku') is-invalid @enderror" id="sku"
                                    value="{{old('sku')}}" name="sku">
                                @error('sku')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="name">Titre</label>
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
                        <div class="col-lg-6">
                            <label class="form-label" for="category">Categorie</label>
                            <div class="has-validation">
                                <select class="form-select @error('category') is-invalid @enderror" id="category"
                                    name="category" value="{{old('category')}}" aria-label="Default select example">
                                    <option value="" selected="">Selectionner un element</option>
                                    @foreach ($categories as $category)
                                    <option value={{$category->id}}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="price">Prix</label>
                            <div class="has-validation">
                                <input class="form-control @error('price') is-invalid @enderror" type="number"
                                    id="price" name="price" value="{{old('price')}}">
                                @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="discount">Remise</label>
                            <input class="form-control @error('discount') is-invalid @enderror" id="discount"
                                value="{{old('discount')}}" type="number" name="discount">
                            @error('discount')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="stock">Stock</label>
                            <div class="has-validation">
                                <input class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock"
                                    type="number">
                                @error('stock')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="tags">Tags</label>
                            <input class="form-control" id="tags" name="tags">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="brand">Brand</label>
                            <input class="form-control" id="brand" name="brand">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="model">Modèle</label>
                            <input class="form-control" id="model" name="model">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="storage">Stockage</label>
                            <input class="form-control" id="storage" name="storage" type="number">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="type_disque_dur">Type disque dur</label>
                            <div class="has-validation">
                                <select class="form-select @error('type_disque_dur') is-invalid @enderror"
                                    id="type_disque_dur" name="type_disque_dur" value="{{old('type_disque_dur')}}"
                                    aria-label="Default select example">
                                    <option selected="" value="HDD">HDD</option>
                                    <option value="SSD">SSD</option>
                                </select>
                                @error('type_disque_dur')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="graphics">Graphics</label>
                            <input class="form-control" id="graphics" name="graphics">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="weight">Poids</label>
                            <input class="form-control" type="number" id="weight" name="weight">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="col-12 d-flex justify-content-end pb-2">
                        <button class="btn btn-primary w-100" id="liveToastBtn" type="submit">Enregistrer</button>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Galerry</h5>
                </div>
                <div class="card-body bg-light dropzone dropzone-multiple" id="my-awesome-dropzone"
                    data-dropzone="data-dropzone">
                    <div class="row g-3">
                        <div class="col-lg-12">
                            <label class="form-label">Quel est son statut ?</label>
                            <div class="ps-2">
                                <div class="form-check mb-0 lh-1">
                                    <input class="form-check-input" type="radio" value="Neuf" id="Neuf" name="status"
                                        required>
                                    <label class="form-check-label mb-0" for="Neuf">Neuf</label>
                                </div>
                                <div class="form-check mb-0 lh-1">
                                    <input class="form-check-input" type="radio" value="Occasion" id="Occasion"
                                        checked="checked" name="status" required>
                                    <label class="form-check-label mb-0" for="Occasion">Occasion</label>
                                    <div class="invalid-feedback">More example invalid feedback text</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label">Caché ?</label>
                            <div class="ps-2">
                                <div class="form-check mb-0 lh-1">
                                    <input class="form-check-input" type="radio" value="1" id="oui" name="hidden">
                                    <label class="form-check-label mb-0" for="oui">Oui
                                    </label>
                                </div>
                                <div class="form-check mb-0 lh-1">
                                    <input class="form-check-input" type="radio" value="0" id="non" checked="checked"
                                        name="hidden">
                                    <label class="form-check-label mb-0" for="non">Non
                                    </label>
                                </div>
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
                        <div class="col-lg-12">
                            <div class="fallback">
                                <input name="file" type="file" multiple="multiple" />
                            </div>
                            <div class="dz-message" data-dz-message="data-dz-message"> <img class="me-2"
                                    src="../../../assets/img/iconame/cloud-upload.svg" width="25" alt="" />Drop your
                                files
                                here</div>
                            <div class="dz-preview dz-preview-multiple m-0 d-flex flex-column">
                                <div class="d-flex media mb-3 pb-3 border-bottom btn-reveal-trigger"><img
                                        class="dz-image" src="../../../assets/img/generic/image-file-2.png" alt="..."
                                        data-dz-thumbnail="data-dz-thumbnail" />
                                    <div class="flex-1 d-flex flex-between-center">
                                        <div>
                                            <h6 data-dz-name="data-dz-name"></h6>
                                            <div class="d-flex align-items-center">
                                                <p class="mb-0 fs--1 text-400 lh-1" data-dz-size="data-dz-size"></p>
                                                <div class="dz-progress"><span class="dz-upload"
                                                        data-dz-uploadprogress=""></span></div>
                                            </div><span class="fs--2 text-danger"
                                                data-dz-errormessage="data-dz-errormessage"></span>
                                        </div>
                                        <div class="dropdown font-saname-serif">
                                            <button
                                                class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none"
                                                type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end border py-2"><a
                                                    class="dropdown-item" href="#!"
                                                    data-dz-remove="data-dz-remove">Remove File</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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