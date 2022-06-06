@extends('layouts.app-admin')
@section('title') Admin - Orders Details @endsection
@section('content')

<main id="main">

        <!-- Breadcrumbs-->
        <div class="bg-white border-bottom py-3 mb-5">
          <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">Orders</li>
                <li class="breadcrumb-item active" aria-current="page">Details</li>
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
                            <h6 class="card-title m-0">Order ID <span>#6969-6969</span> details</h6>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                    <form class="bg-light rounded px-3 py-1 flex-shrink-0 d-flex align-items-center">
                                        <input class="form-control border-0 bg-transparent px-0 py-2 me-5 fw-bolder" type="search"
                                        placeholder="Search" aria-label="Search">
                                        <button class="btn btn-link p-0 text-muted" type="submit"><i class="ri-search-2-line"></i></button>
                                    </form>
                                </div>
                            <div class="table-responsive">
                                <table class="table m-0 table-striped">
                                    <thead>
                                        <tr>
                                            <th>Item No.</th>
                                            <th>Product Name</th>
                                            <th>Variation</th>
                                            <th>Price</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="fw-bolder">1</span>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-start">
                                                    <div class="avatar avatar-xs me-3 flex-shrink-0">
                                                        <picture>
                                                            <img class="f-w-10 rounded-circle" src="{{ asset('/assets/images/products/product-cart-1.webp') }}"
                                                            alt="">
                                                        </picture>
                                                    </div>
                                                    <div>
                                                        <p class="fw-bolder mb-1 d-flex align-items-center lh-1">Keychron K2 Mechanical Keyboard</p>
                                                        <span class="d-block text-muted">Keychron K2</span>
                                                        <span class="d-block text-muted">Keychron</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-muted">
                                                <span class="d-block text-muted">White Backlight</span>
                                                <span class="d-block text-muted">Gateron G Pro Red</span>
                                                <p></p>
                                            </td>
                                            <th class="text-muted">RM123.99</th>
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
                            <div class="col-12 col-md-3">
                                <div class="card mt-4 mb-4">
                                    <div class="card-header justify-content-between align-items-center d-flex">
                                        <h6 class="card-title m-0">Order Details</h6>
                                    </div>
                                    <div class="card-body">
                                    <table class="table m-0 table-striped">
                                        <tr>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Normand Lubaton
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                Item subtotal
                                            </th>
                                            <th>
                                                RM69.69
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                Shipping
                                            </th>
                                            <th>
                                                FREE
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                Date
                                            </th>
                                            <th>
                                                24th June, 2021
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                Payment method
                                            </th>
                                            <th>
                                                Stripe
                                            </th>
                                        </tr>
                                    </table>
                                    </div>
                                </div>
                            </div>
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
