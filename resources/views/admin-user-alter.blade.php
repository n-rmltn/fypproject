
@extends('layouts.app-admin')
@section('title') Admin - User Alter @endsection
@section('content')

    <main id="main">

        <!-- Breadcrumbs-->
        <div class="bg-white border-bottom py-3 mb-5">
          <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin-user') }}">User Listing</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{ $user->name }}</li>
              </ol>
          </nav>
          </div>
        </div>
        <!-- / Breadcrumbs-->

        <!-- Content-->
        <section class="container-fluid">

        <!-- Page Title -->
        <h2 class="fs-4 mb-3">Edit User</h2>

        @if(isset ($errors) && count($errors) > 0)
        <div class="alert alert-warning" role="alert">
            <ul class="list-unstyled mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="post" action="{{ route('admin-user-alter.update', $user->id) }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="row g-4">
                <div class="col-12 col-md-6">
                    <!-- User Details-->
                    <div class="card mb-4">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">User Details</h6>
                        </div>
                        <div class="card-body">
                                <div class="mb-3">
                                    <label for="update-name" class="form-label">Name</label>
                                    <input class="form-control" id="update-name" type="text" placeholder="Name" name="name" value="{{ $user->name }}" required>
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
                                    <input class="form-control" id="update-address1" type="text" placeholder="Address 1" name="address_1" value="{{ $user->address_1 }}">
                                </div>
                                <div class="mb-3">
                                    <label for="update-address2" class="form-label">Address 2</label>
                                    <input class="form-control mb-2" id="update-address2" type="text" placeholder="Address 2" name="address_2" value="{{ $user->address_2 }}">
                                </div>
                                <div class="mb-3">
                                    <label for="update-city" class="form-label">City</label>
                                    <input class="form-control mb-2" id="update-city" type="text" placeholder="City" name="city" value="{{ $user->city }}">
                                </div>
                                <div class="mb-3">
                                    <label for="update-state" class="form-label">State</label>
                                    <select class="form-select" id="update-state" name="state" required>
                                        <option @if($user->state === null) selected @endif>Select State</option>
                                        <option value="Johor" @if($user->state === 'Johor') selected @endif>Johor</option>
                                        <option value="Kedah" @if($user->state === 'Kedah') selected @endif>Kedah</option>
                                        <option value="Kelantan" @if($user->state === 'Kelantan') selected @endif>Kelantan</option>
                                        <option value="Malacca" @if($user->state === 'Malacca') selected @endif>Malacca</option>
                                        <option value="Negeri Sembilan" @if($user->state === 'Negeri Sembilan') selected @endif>Negeri Sembilan</option>
                                        <option value="Pahang" @if($user->state === 'Pahang') selected @endif>Pahang</option>
                                        <option value="Penang" @if($user->state === 'Penang') selected @endif>Penang</option>
                                        <option value="Perak" @if($user->state === 'Perak') selected @endif>Perak</option>
                                        <option value="Perlis" @if($user->state === 'Perlis') selected @endif>Perlis</option>
                                        <option value="Sabah" @if($user->state === 'Sabah') selected @endif>Sabah</option>
                                        <option value="Sarawak" @if($user->state === 'Sarawak') selected @endif>Sarawak</option>
                                        <option value="Selangor" @if($user->state === 'Selangor') selected @endif>Selangor</option>
                                        <option value="Terengganu" @if($user->state === 'Terengganu') selected @endif>Terengganu</option>
                                        <option value="Kuala Lumpur" @if($user->state === 'Kuala Lumpur') selected @endif>Kuala Lumpur</option>
                                        <option value="Labuan" @if($user->state === 'Labuan') selected @endif>Labuan</option>
                                        <option value="Putrajaya" @if($user->state === 'Putrajaya') selected @endif>Putrajaya</option>
                                      </select>
                                </div>
                                <div class="mb-3">
                                    <label for="update-poscode" class="form-label">Postal Code</label>
                                    <input class="form-control mb-2" id="update-poscode" type="text" name="postal" value="{{ $user->postal }}">
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
                                        aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{ $user->email }}" required>
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="update-contact" class="form-label">Phone number</label>
                                    <input class="form-control" id="update-contact" type="text" placeholder="Phone number" name="phone" value="{{ $user->phone }}">
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
