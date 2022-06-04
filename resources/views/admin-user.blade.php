@extends('layouts.app-admin')
@section('title') Admin - Users @endsection
@section('content')

<main id="main">

        <!-- Breadcrumbs-->
        <div class="bg-white border-bottom py-3 mb-5">
          <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">User Listing</li>
              </ol>
          </nav>
          </div>
        </div>        
        <!-- / Breadcrumbs-->

        <!-- Content-->
        <section class="container-fluid">

            <div class="card mb-4">
                <div class="card-header justify-content-between align-items-center d-flex">
                    <h6 class="card-title m-0">User Listing</h6>
                </div>
                <div class="card-body">
    
                    <!-- User listing Actions-->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <form class="bg-light rounded px-3 py-1 flex-shrink-0 d-flex align-items-center">
                            <input class="form-control border-0 bg-transparent px-0 py-2 me-5 fw-bolder" type="search"
                              placeholder="Search" aria-label="Search">
                            <button class="btn btn-link p-0 text-muted" type="submit"><i class="ri-search-2-line"></i></button>
                        </form>
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-sm btn-primary" href="#"><i class="ri-add-circle-line align-bottom"></i> New User</a>
                        </div>
                    </div>
                    <!-- /user listing Actions-->
    
                    <!-- User Listing Table-->
                    <div class="table-responsive">
                        <table class="table m-0 table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>State</th>
                                    <th>Joined</th>
                                    <th>Active Orders</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-start">
                                            <button class="btn-icon bg-primary-faded text-primary fw-bolder me-3">N</button>
                                            <div>
                                                <p class="fw-bolder mb-1 d-flex align-items-center lh-1"><span>Normand</span>&nbsp;<span>Lubaton</span></p>
                                                <span class="d-block text-muted">normandlubaton@icloud.com</span>
                                                <span class="d-block text-muted">01131389418</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Administrator</td>
                                    <td class="text-muted"><i class="ri-map-pin-line align-bottom"></i> Sabah</td>
                                    <td class="text-muted">24th Jan, 2021</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="small text-muted">0</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                                id="dropdownOrder-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-2-line"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown" aria-labelledby="dropdownOrder-0">
                                                <li><a class="dropdown-item" href="./user-edit.html">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-start">
                                            <button class="btn-icon bg-primary-faded text-primary fw-bolder me-3">I</button>
                                            <div>
                                                <p class="fw-bolder mb-1 d-flex align-items-center lh-1"><span>Ian</span>&nbsp;<span>Idiel</span></p>
                                                <span class="d-block text-muted">ianidiel@gmail.com</span>
                                                <span class="d-block text-muted">0165823579</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>User</td>
                                    <td class="text-muted"><i class="ri-map-pin-line align-bottom"></i> Kedah</td>
                                    <td class="text-muted">24th Jan, 2021</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="small text-muted">2</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                                id="dropdownOrder-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-2-line"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown" aria-labelledby="dropdownOrder-0">
                                                <li><a class="dropdown-item" href="./user-edit.html">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>    
                    <!-- /User Listing Table-->
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