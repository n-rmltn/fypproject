@extends('layouts.app-admin')
@section('title') Admin - Product Alter @endsection
@section('content')

<main id="main">

        <!-- Breadcrumbs-->
        <div class="bg-white border-bottom py-3 mb-5">
          <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Product</li>
              </ol>
          </nav>
          </div>
        </div>        
        <!-- / Breadcrumbs-->

        <!-- Content-->
        <section class="container-fluid">
            
        <!-- Page Title -->
        <h2 class="fs-4 mb-3">Add Product</h2>
        <form>
            <div class="row g-4">
                <div class="col-12 col-md-6">
                    <div class="card mb-4">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Product Details</h6>
                        </div>
                        <div class="card-body">
                                <div class="mb-3">
                                    <label for="add-lname" class="form-label">Long Product Name</label>
                                    <input class="form-control" id="add-lname" type="text" placeholder="Long product name">
                                </div>
                                <div class="mb-3">
                                    <label for="add-sname" class="form-label">Short Product Name</label>
                                    <input class="form-control mb-2" id="add-sname" type="text" placeholder="Short product name">
                                </div>
                                <div class="mb-3">
                                    <label for="add-brand" class="form-label">Brand</label>
                                    <select class="form-control" id="add-brand">
                                        <option>Keychron</option>
                                        <option>Ducky</option>
                                        <option>Redragon</option>
                                        <option>Royal Kludge</option>
                                        <option>GMMK</option>
                                        <option>Leopold</option>
                                        <option>Corsair</option>
                                        <option>Coolermaster</option>
                                        <option>Razer</option>
                                        <option>Logitech</option>
                                        <option>HyperX</option>
                                        <option>SteelSeries</option>
                                        <option>ROG</option>
                                        <option>MSi</option>
                                        <option>Predator</option>
                                    </select>
                                </div>
                        </div>
                    </div>
    
                    <div class="card mb-4">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Prices</h6>
                        </div>
                        <div class="card-body">
                                <div class="mb-3">
                                    <label for="add-baseprice" class="form-label">Base Price</label>
                                    <input class="form-control" id="add-baseprice" type="text" placeholder="Base Price">
                                </div>
                                <div class="mb-3">
                                    <label for="add-var" class="form-label">Variation Amount</label>
                                    <input class="form-control mb-2" id="add-var" type="number" placeholder="Amount">
                                </div>
                                <div class="mb-3">
                                    <label for="add-varcategory" class="form-label">Variations</label>
                                    <input class="form-control mb-1" id="add-varcategory" type="text" placeholder="Variation category name">
                                    <div class="input-group mb-1">
                                        <input type="text" class="form-control" placeholder="Variation name" aria-label="Var">
                                        <span class="input-group-text">RM</span>
                                        <input type="text" class="form-control" placeholder="Price" aria-label="VarPrice">
                                    </div>
                                    <div class="input-group mb-1">
                                        <input type="text" class="form-control" placeholder="Variation name" aria-label="Var">
                                        <span class="input-group-text">RM</span>
                                        <input type="text" class="form-control" placeholder="Price" aria-label="VarPrice">
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Options</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="add-opt" class="form-label">Option Amount</label>
                                <input class="form-control mb-2" id="add-opt" type="number" placeholder="Amount">
                            </div>
                            <div class="mb-3">
                                <label for="add-city" class="form-label">Options</label>
                                <input class="form-control mb-1" id="add-varcategory" type="text" placeholder="Option category name">
                                <div class="input-group mb-1">
                                    <input type="text" class="form-control" placeholder="Option name" aria-label="Var">
                                    <span class="input-group-text">RM</span>
                                    <input type="text" class="form-control" placeholder="Price" aria-label="VarPrice">
                                </div>
                                <div class="input-group mb-1">
                                    <input type="text" class="form-control" placeholder="Option name" aria-label="Var">
                                    <span class="input-group-text">RM</span>
                                    <input type="text" class="form-control" placeholder="Price" aria-label="VarPrice">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-12 col-md-6">
                    <div class="card mb-4">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Product Description</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="add-desc" class="form-label">Description</label>
                                <textarea class="form-control" id="add-desc" rows="5"></textarea>
                            </div>
                                <div class="mb-3">
                                    <label for="add-category" class="form-label">Category</label>
                                    <select class="form-control" id="add-category">
                                        <option>Keyboard</option>
                                        <option>Mouse</option>
                                        <option>Monitor</option>
                                        <option>Switches</option>
                                        <option>Accesories</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="add-stripekey" class="form-label">Stripe Key</label>
                                    <input class="form-control" id="add-stripekey" type="text" placeholder="Stripe Key">
                                </div>
                        </div>
                    </div>
    
                    <div class="card mb-4">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Product Thumbnail</h6>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('assets/images/products/product-cart-1.webp') }}"
                                class="card-img-top" alt="HTML Bootstrap Admin Template by Pixel Rocket">
                            <button type="button" class="btn btn-danger mb-1">Delete Image</button>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="add-thumbnail" class="form-label">Product image</label>
                                <input class="form-control" type="file" id="add-thumbnail">
                            </div>
                        </div>
                    </div>
    
                    <div class="card mb-4">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Product Images</h6>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('assets/images/products/product-keychronk2-1.webp') }}"
                                class="card-img-top" alt="HTML Bootstrap Admin Template by Pixel Rocket">
                            <button type="button" class="btn btn-danger mb-1">Delete Image</button>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="add-image" class="form-label">Product image(s)</label>
                                <input class="form-control" type="file" id="add-image" multiple>
                            </div>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </div>
            </div>
        </form>

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