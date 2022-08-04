@extends('dashboard.layout.master')

@section('content')
<div class="card mb-3" id="productsTable"
    data-list='{"valueNames":["name","image","price","rating", "discount", "stock", "state"],"page":20,"pagination":true}'>
    <div class="card-header">
        <div class="row flex-between-center">
            <div class="col-4 col-sm-auto d-flex align-items-center pe-0">
                <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Produits</h5>
            </div>
            <div class="col-8 col-sm-auto ms-auto text-end ps-0">
                <div class="d-none" id="products-bulk-actions">
                    <div class="d-flex">
                        <select class="form-select form-select-sm" aria-label="Bulk actions">
                            <option selected="">Bulk actions</option>
                            <option value="Refund">Remboursement</option>
                            <option value="Delete">Supprimer</option>
                            <option value="Archive">Archiver</option>
                        </select>
                        <button class="btn btn-falcon-default btn-sm ms-2" type="button">Appliquer</button>
                    </div>
                </div>
                <div id="products-actions">
                    <a class="btn btn-falcon-default btn-sm" href="{{route('produits.create')}}" role="button"><span
                            class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span><span
                            class="d-none d-sm-inline-block ms-1">Ajouter</span></a>
                    <button class="btn btn-falcon-default btn-sm mx-2" type="button"><span class="fas fa-filter"
                            data-fa-transform="shrink-3 down-2"></span><span
                            class="d-none d-sm-inline-block ms-1">Filter</span></button>
                    <button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-external-link-alt"
                            data-fa-transform="shrink-3 down-2"></span><span
                            class="d-none d-sm-inline-block ms-1">Export</span></button>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive scrollbar">
            <table class="table table-sm table-striped fs--1 mb-0 overflow-hidden">
                <thead class="bg-200 text-900">
                    <tr>
                        <th>
                            <div class="form-check fs-0 mb-0 d-flex align-items-center">
                                <input class="form-check-input" id="checkbox-bulk-customers-select" type="checkbox"
                                    data-bulk-select='{"body":"table-products-body","actions":"products-bulk-actions","replacedElement":"products-actions"}' />
                            </div>
                        </th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="name">Produit</th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="image">Image</th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="price">price</th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="brand">Brand</th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="stock">Stock</th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="state">State</th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="discount">Solde
                        </th>
                        <th class="sort pe-1 align-middle white-space-nowrap text-center" data-sort="status">Status</th>
                        <th class="no-sort"></th>
                    </tr>
                </thead>
                <tbody class="list" id="table-products-body">
                    @foreach ($products as $product)
                    <tr class="btn-reveal-trigger">
                        <td class="align-middle" style="width: 28px;">
                            <div class="form-check fs-0 mb-0 d-flex align-items-center">
                                <input class="form-check-input" type="checkbox" id="checkbox-0"
                                    data-bulk-select-row="data-bulk-select-row" />
                            </div>
                        </td>
                        <td class="name py-2 align-middle white-space-nowrap"><a href="#">
                                <strong>#{{$product->id}}</strong></a>
                            <strong>{{$product->name}}</strong>
                        </td>
                        <td class="image py-2 align-middle"><img src={{$product->images}} width="60px" /></td>
                        <td class="address py-2 align-middle white-space-nowrap">{{$product->price}} MAD</td>
                        <td class="brand py-2 align-middle white-space-nowrap">{{$product->brand}}</td>
                        <td class="stock py-2 align-middle white-space-nowrap">{{$product->stock}}</td>
                        <td class="state py-2 align-middle white-space-nowrap">
                            @if ($product->state === "Neuf")
                            <span class="badge rounded-pill badge-soft-primary">{{$product->state}}</span>
                            @else
                            <span class="badge rounded-pill badge-soft-danger">{{$product->state}}</span>
                            @endif
                        </td>
                        <td class="discount py-2 align-middle white-space-nowrap">-{{$product->discount}} %</td>
                        <td class="hidden align-middle white-space-nowrap">
                            @if ($product->hidden === 1)
                            <span class="badge badge rounded-pill badge-soft-success">
                                <span class="me-1 fas fa-check" data-fa-transform="shrink-2"></span>
                                Active
                            </span>
                            @else
                            <span class="badge badge rounded-pill badge-soft-secondary">
                                <span class="me-1 fas fa-ban" data-fa-transform="shrink-2"></span>
                                Blocked
                            </span>
                            @endif
                        </td>
                        <td class="py-2 align-middle white-space-nowrap text-end">
                            <div class="dropdown font-sans-serif position-static">
                                <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button"
                                    id="order-dropdown-0" data-bs-toggle="dropdown" data-boundary="viewport"
                                    aria-haspopup="true" aria-expanded="false"><span
                                        class="fas fa-ellipsis-h fs--1"></span></button>
                                <div class="dropdown-menu dropdown-menu-end border py-0"
                                    aria-labelledby="order-dropdown-0">
                                    <div class="bg-white py-2"><a class="dropdown-item" href="#!">Completed</a><a
                                            class="dropdown-item" href="#!">Processing</a><a class="dropdown-item"
                                            href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                            href="#!">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer">
        <div class="d-flex align-items-center justify-content-center">
            <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous"
                data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
            <ul class="pagination mb-0"></ul>
            <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next"
                data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
        </div>
    </div>
</div>
@endsection