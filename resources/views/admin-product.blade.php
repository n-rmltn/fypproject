@extends('layouts.app-admin')
@section('title') Admin - Product @endsection
@section('content')

<main id="main">

        <!-- Breadcrumbs-->
        <div class="bg-white border-bottom py-3 mb-5">
          <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Product Listing</li>
              </ol>
          </nav>
          </div>
        </div>
        <!-- / Breadcrumbs-->

        <!-- Content-->
        <section class="container-fluid">

            <div class="card mb-4">
                <div class="card-header justify-content-between align-items-center d-flex">
                    <h6 class="card-title m-0">Product Listing</h6>
                </div>
                <div class="card-body">

                    <!-- User listing Actions-->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <form class="bg-light rounded px-3 py-1 flex-shrink-0 d-flex align-items-center visually-hidden">
                            <input class="form-control border-0 bg-transparent px-0 py-2 me-5 fw-bolder" type="search"
                              placeholder="Search" aria-label="Search">
                            <button class="btn btn-link p-0 text-muted" type="submit"><i class="ri-search-2-line"></i></button>
                        </form>
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-sm btn-primary" href="{{ route('admin-add-product') }}"><i class="ri-add-circle-line align-bottom"></i> Add Product</a>
                        </div>
                    </div>
                    <!-- /user listing Actions-->

                    <!-- User Listing Table-->
                    <div class="table-responsive">
                        <table class="table m-0 table-striped">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Availability</th>
                                    <th>Featured</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($products as $prod => $val)
                                <tr>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-start">
                                            <div class="avatar avatar-xs me-3 flex-shrink-0">
                                                <picture>
                                                    <img class="f-w-10 rounded-circle" src="{{ asset('/assets/images/products/'.$val->product_cart_images_name) }}"
                                                    alt="">
                                                </picture>
                                            </div>
                                            <div>
                                                <p class="fw-bolder mb-1 d-flex align-items-center lh-1">{{ $val->product_name_long }}</p>
                                                <span class="d-block text-muted">{{ $val->product_name_short }}</span>
                                                <span class="d-block text-muted">{{ $val->brand->product_brand_name }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $val->product_categories }}</td>
                                    <td class="text-muted"> RM {{ $val->product_base_price }}</td>
                                    <td class="text-muted">
                                        @if ($val->product_status === 1)
                                            Available
                                        @else
                                            Not Available
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="small text-muted">
                                                @if ($val->product_featured === true)
                                                    Featured
                                                @else
                                                    Not Featured
                                                @endif
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                                id="dropdownOrder-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-2-line"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown" aria-labelledby="dropdownOrder-0">
                                                <li><a class="dropdown-item" href="{{ route('admin-product-alter', $val->product_id) }}">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                    <p class="text-white">No product available</p>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- /User Listing Table-->
                    <nav>
                        <ul class="pagination justify-content-end mt-3 mb-0">
                            {!! $products->links() !!}
                        </ul>
                      </nav>
                </div>
            </div>

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
