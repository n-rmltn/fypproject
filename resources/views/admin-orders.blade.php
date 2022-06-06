@extends('layouts.app-admin')
@section('title') Admin - Orders @endsection
@section('content')

<main id="main">

        <!-- Breadcrumbs-->
        <div class="bg-white border-bottom py-3 mb-5">
          <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Orders</li>
              </ol>
          </nav>
          </div>
        </div>
        <!-- / Breadcrumbs-->

        <!-- Content-->
        <section class="container-fluid">

            <!-- Page Title-->
            <!-- / Page Title-->

            <!-- Middle Row Widgets-->
            <div class="row g-4 mb-4 mt-0">

                <!-- Latest Orders-->
                <div class="col-12">
                    
                    <div class="card mb-4 h-100">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Orders</h6>
                        </div>
                    
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <form class="bg-light rounded px-3 py-1 flex-shrink-0 d-flex align-items-center">
                                    <input class="form-control border-0 bg-transparent px-0 py-2 me-5 fw-bolder" type="search"
                                    placeholder="Search" aria-label="Search">
                                    <button class="btn btn-link p-0 text-muted" type="submit"><i class="ri-search-2-line"></i></button>
                                </form>
                                <div class="d-flex justify-content-end">
                                    <a class="btn btn-sm btn-primary" href="#"><i class="ri-add-circle-line align-bottom"></i> Add Product</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table m-0 table-striped">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Billing Name</th>
                                            <th>Date</th>
                                            <th>Payment Method</th>
                                            <th>Items</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="fw-bolder">#1234-5679</span>
                                            </td>
                                            <td>Patria Nelson</td>
                                            <td class="text-muted">24th June, 2021</td>
                                            <td class="text-muted">
                                                <div class="d-flex align-items-center">
                                                    <i class="ri-visa-line ri-lg me-2"></i> **** 6789
                                                </div>
                                            </td>
                                            <td class="text-muted">5</td>
                                            <th class="text-muted">RM123.99</th>
                                            <td><span class="badge rounded-pill bg-primary-faded text-primary">preparing</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                                        id="dropdownOrder-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-line"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown" aria-labelledby="dropdownOrder-0">
                                                        <li><a class="dropdown-item" href="{{ route('admin-orders-details') }}">View details</a></li>
                                                        <li><a class="dropdown-item" href="#">Update to shipped</a></li>
                                                        <li><a class="dropdown-item" href="#">Update to completed</a></li>
                                                        <li><a class="dropdown-item" href="#">Cancel order</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <nav>
                                <ul class="pagination justify-content-end mt-3 mb-0">
                                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Latest Orders-->

            </div>
            <!-- / Middle Row Widgets-->



            <!-- Footer -->
            <footer class="  footer">
                <p class="small text-muted m-0">All rights reserved | © Norm 2021</p>
            </footer>


            <!-- Sidebar Menu Overlay-->
            <div class="menu-overlay-bg"></div>
            <!-- / Sidebar Menu Overlay-->
            <!-- / Footer-->

        </section>
        <!-- / Content-->

    </main>

@endsection
