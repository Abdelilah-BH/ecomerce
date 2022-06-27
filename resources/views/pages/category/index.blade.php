@extends('layout.master')

@section('content')
<div class="card mb-3" id="categoriesTable"
    data-list='{"valueNames":["name","description","order","status"],"page":20,"pagination":true}'>
    <div class="card-header">
        <div class="row flex-between-center">
            <div class="col-4 col-sm-auto d-flex align-items-center pe-0">
                <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Categories</h5>
            </div>
            <div class="col-8 col-sm-auto ms-auto text-end ps-0">
                <div class="d-none" id="orders-bulk-actions">
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
                <div id="orders-actions">
                    <button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-plus"
                            data-fa-transform="shrink-3 down-2"></span><span
                            class="d-none d-sm-inline-block ms-1">Ajouter</span></button>
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
                                    data-bulk-select='{"body":"table-categories-body","actions":"orders-bulk-actions","replacedElement":"orders-actions"}' />
                            </div>
                        </th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="name">Name</th>
                        <th class="sort pe-1 align-middle white-space-nowrap pe-7" data-sort="description">Description
                        </th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="order"
                            style="min-width: 12.5rem;">Classement</th>
                        <th class="sort pe-1 align-middle white-space-nowrap text-center" data-sort="status">Status</th>
                        <th class="no-sort"></th>
                    </tr>
                </thead>
                <tbody class="list" id="table-categories-body">
                    <tr class="btn-reveal-trigger">
                        <td class="align-middle" style="width: 28px;">
                            <div class="form-check fs-0 mb-0 d-flex align-items-center">
                                <input class="form-check-input" type="checkbox" id="checkbox-0"
                                    data-bulk-select-row="data-bulk-select-row" />
                            </div>
                        </td>
                        <td class="order py-2 align-middle white-space-nowrap"><a
                                href="../../../app/e-commerce/orders/order-details.html"> <strong>#181</strong></a> by
                            <strong>Ricky Antony</strong><br /><a href="mailto:ricky@example.com">ricky@example.com</a>
                        </td>
                        <td class="date py-2 align-middle">20/04/2019</td>
                        <td class="address py-2 align-middle white-space-nowrap">Ricky Antony, 2392 Main Avenue,
                            Penasauka, New Jersey 02149
                            <p class="mb-0 text-500">Via Flat Rate</p>
                        </td>
                        <td class="status py-2 align-middle text-center fs-0 white-space-nowrap"><span
                                class="badge badge rounded-pill d-block badge-soft-success">Completed<span
                                    class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span>
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
                    <tr class="btn-reveal-trigger">
                        <td class="align-middle" style="width: 28px;">
                            <div class="form-check fs-0 mb-0 d-flex align-items-center">
                                <input class="form-check-input" type="checkbox" id="checkbox-10"
                                    data-bulk-select-row="data-bulk-select-row" />
                            </div>
                        </td>
                        <td class="order py-2 align-middle white-space-nowrap"><a
                                href="../../../app/e-commerce/orders/order-details.html"> <strong>#191</strong></a> by
                            <strong>David Peters</strong><br /><a href="mailto:peter@example.com">peter@example.com</a>
                        </td>
                        <td class="date py-2 align-middle">29/04/2019</td>
                        <td class="address py-2 align-middle white-space-nowrap">David Peters, Rhyd Y Groes, Rhosgoch,
                            LL66 0AT
                            <p class="mb-0 text-500">Via Link Road</p>
                        </td>
                        <td class="status py-2 align-middle text-center fs-0 white-space-nowrap"><span
                                class="badge badge rounded-pill d-block badge-soft-success">Completed<span
                                    class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span>
                        </td>
                        <td class="py-2 align-middle white-space-nowrap text-end">
                            <div class="dropdown font-sans-serif position-static">
                                <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button"
                                    id="order-dropdown-10" data-bs-toggle="dropdown" data-boundary="viewport"
                                    aria-haspopup="true" aria-expanded="false"><span
                                        class="fas fa-ellipsis-h fs--1"></span></button>
                                <div class="dropdown-menu dropdown-menu-end border py-0"
                                    aria-labelledby="order-dropdown-10">
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