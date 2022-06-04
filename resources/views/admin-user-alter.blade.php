
@extends('layouts.app-admin')
@section('title') Admin - User Alter @endsection
@section('content')

    <main id="main">

        <!-- Breadcrumbs-->
        <div class="bg-white border-bottom py-3 mb-5">
          <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit User</li>
              </ol>
          </nav>
          </div>
        </div>        
        <!-- / Breadcrumbs-->

        <!-- Content-->
        <section class="container-fluid">
            
        <!-- Page Title -->
        <h2 class="fs-4 mb-3">Edit User</h2>
        <form>
            <div class="row g-4">
                <div class="col-12 col-md-6">
                    <!-- User Details-->
                    <div class="card mb-4">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">User Details</h6>
                        </div>
                        <div class="card-body">
                                <div class="mb-3">
                                    <label for="update-fname" class="form-label">First Name</label>
                                    <input class="form-control" id="update-fname" type="text" placeholder="First Name">
                                </div>
                                <div class="mb-3">
                                    <label for="update-lname" class="form-label">Last Name</label>
                                    <input class="form-control mb-2" id="update-lname" type="text" placeholder="Last Name">
                                </div>
                        </div>
                    </div>
                    <!-- / User Details-->
    
                    <!-- Address-->
                    <div class="card mb-4">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">User Address</h6>
                        </div>
                        <div class="card-body">
                                <div class="mb-3">
                                    <label for="update-address1" class="form-label">Address 1</label>
                                    <input class="form-control" id="update-address1" type="text" placeholder="Address 1">
                                </div>
                                <div class="mb-3">
                                    <label for="update-address2" class="form-label">Address 2</label>
                                    <input class="form-control mb-2" id="update-address2" type="text" placeholder="Address 2">
                                </div>
                                <div class="mb-3">
                                    <label for="update-city" class="form-label">City</label>
                                    <input class="form-control mb-2" id="update-city" type="text" placeholder="City">
                                </div>
                                <div class="mb-3">
                                    <label for="update-state" class="form-label">State</label>
                                    <select class="form-control" id="update-state">
                                        <option>Johor</option>
                                        <option>Kedah</option>
                                        <option>Kelantan</option>
                                        <option>Malacca</option>
                                        <option>Negeri Sembilan</option>
                                        <option>Pahang</option>
                                        <option>Penang</option>
                                        <option>Perak</option>
                                        <option>Perlis</option>
                                        <option>Sabah</option>
                                        <option>Sarawak</option>
                                        <option>Selangor</option>
                                        <option>Terengganu</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="update-poscode" class="form-label">Postal Code</label>
                                    <input class="form-control mb-2" id="update-poscode" type="text">
                                </div>
                        </div>
                    </div>
                    <!-- / Address-->
                </div>
    
                <div class="col-12 col-md-6">
                    <!-- Contact Details-->
                    <div class="card mb-4">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Contact Details</h6>
                        </div>
                        <div class="card-body">
                                <div class="mb-3">
                                    <label for="update-email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="update-email"
                                        aria-describedby="emailHelp" placeholder="Enter email">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="update-contact" class="form-label">Phone number</label>
                                    <input class="form-control" id="update-contact" type="text" placeholder="Phone number">
                                </div>
                        </div>
                    </div>
                    <!-- / Contact Details-->
    
                    <!-- Password-->
                    <div class="card mb-4 visually-hidden">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Password</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="update-pass" class="form-label">Password</label>
                                <input type="password" class="form-control" id="update-pass">
                            </div>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Update Information</button>
                    <!-- / Password-->
                </div>
            </div>
        </form>

            <!-- Footer -->
            <footer class="  footer">
                <p class="small text-muted m-0">All rights reserved | © 2021</p>
                <p class="small text-muted m-0">Template created by <a href="https://www.pixelrocket.store/">PixelRocket</a></p>
            </footer>
            
            
            <!-- Sidebar Menu Overlay-->
            <div class="menu-overlay-bg"></div>
            <!-- / Sidebar Menu Overlay-->
            <!-- / Footer-->

        </section>
        <!-- / Content-->

    </main>

    @endsection