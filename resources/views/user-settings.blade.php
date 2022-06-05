@extends('layouts.app-nonav')
@section('title') Settings @endsection
@section('body_class') bg-dark @endsection
@section('content')

<!-- Main Section-->
<section
        class="mt-0 d-flex justify-content-center align-items-center p-4 rounded">
        <!-- Page Content Goes Here -->

        <!-- Login Form-->
        <div class="col col-md-8 col-lg-6 col-xxl-5 rounded">
            <!-- Logo-->
            <a class="navbar-brand fw-bold fs-3 flex-shrink-0 order-0 align-self-center justify-content-center d-flex mx-0 px-0 text-white" href="{{ route('welcome') }}">
                <div class="d-flex align-items-center">
                    <svg class="f-w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 77.53 72.26"><path d="M10.43,54.2h0L0,36.13,10.43,18.06,20.86,0H41.72L10.43,54.2Zm67.1-7.83L73,54.2,68.49,62,45,48.47,31.29,72.26H20.86l-5.22-9L52.15,0H62.58l5.21,9L54.06,32.82,77.53,46.37Z" fill="currentColor" fill-rule="evenodd"/></svg>
                </div>
            </a>
            <!-- / Logo-->
            <div class="shadow-xl p-4 p-lg-5 bg-white">
            <h1 class="text-center mb-5 fs-2 fw-bold">Account Settings</h1>
            <div class="d-flex justify-content-center mb-5">
                <a href="{{ route('orders') }}" class="btn rounded bg-dark d-inline-flex m-2 justify-content-center text-white"> Orders</a>
                <a href="{{ route('settings') }}" class="btn rounded bg-dark d-inline-flex m-2 justify-content-center text-white"> Settings </a>
                <a href="{{ route('password') }}" class="btn rounded bg-dark d-inline-flex m-2 justify-content-center text-white"> Password </a>
                <a href="#" class="btn rounded bg-danger d-inline-flex m-2 justify-content-center text-white"> Log Out </a>
              </div>
              <form>
                  <div class="form-group">
                    <label class="form-label" for="update-name">Name</label>
                    <input type="text" class="form-control" id="update-name" placeholder="Normand">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="update-email">Email address</label>
                    <input type="email" class="form-control" id="update-email" placeholder="normandlubaton@icloud.com">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="update-address1">Address 1</label>
                    <input type="text" class="form-control" id="update-address1" placeholder="Jalan Tun Fuad Stephens,">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="update-address2">Address 2</label>
                    <input type="text" class="form-control" id="update-address2" placeholder="Api - Api Centre, Unit 543,">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="update-city">City</label>
                    <input type="text" class="form-control" id="update-city" placeholder="Kota Kinabalu">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="update-state">State</label>
                    <select class="form-select" id="update-state">
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
                  <div class="form-group">
                    <label class="form-label" for="update-poscode">Postal Code</label>
                    <input type="text" class="form-control" id="update-poscode" placeholder="88000">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="update-phone">Phone</label>
                    <input type="text" class="form-control" id="update-phone" placeholder="01131389418">
                  </div>
                  <button type="submit" class="btn btn-dark d-block w-100 my-4">Update Info</button>
                </form>
                      <!-- / Products-->
        </div>
        <!-- /Page Content -->
    </section>
    <!-- / Main Section-->


    @endsection