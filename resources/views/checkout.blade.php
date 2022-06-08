@extends('layouts.app-nonav')
@section('title') Information @endsection
@php
    $grandtotal = 0;
@endphp
@section('content')
<!-- Main Section-->
<section class="mt-0  vh-lg-100">
        <!-- Page Content Goes Here -->
        <div class="container">
            <div class="row g-0 vh-lg-100">
                <div class="col-lg-7 pt-5 pt-lg-10">
                    <div class="pe-lg-5">
                        <!-- Logo-->
                        <a class="navbar-brand fw-bold fs-3 flex-shrink-0 mx-0 px-0" href="{{ route('welcome') }}">
                                <div class="d-flex align-items-center">
                                    <svg class="f-w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 77.53 72.26"><path d="M10.43,54.2h0L0,36.13,10.43,18.06,20.86,0H41.72L10.43,54.2Zm67.1-7.83L73,54.2,68.49,62,45,48.47,31.29,72.26H20.86l-5.22-9L52.15,0H62.58l5.21,9L54.06,32.82,77.53,46.37Z" fill="currentColor" fill-rule="evenodd"/></svg>
                                </div>
                            </a>
                        <!-- / Logo-->
                    <nav class="d-none d-md-block">
                        <ul class="list-unstyled d-flex justify-content-start mt-4 align-items-center fw-bolder small">
                            <li class="me-4"><a class="nav-link-checkout"
                                href="{{ route('welcome') }}">Home</a></li>
                            <li class="me-4"><a class="nav-link-checkout"
                                    href="{{ route('cart.index') }}">Your Cart</a></li>
                            <li class="me-4"><a class="nav-link-checkout active"
                                    href="{{ route('checkout') }}">Information</a></li>
                            <li class="me-4"><a class="nav-link-checkout"
                                    href="{{ route('payment') }}">Payment</a></li>
                        </ul>
                    </nav>
                        <div class="mt-5">
                            <form method="post" action="{{ route('booking.submit') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <!-- Checkout Panel Information-->
                            <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-4">
                              <h3 class="fs-5 fw-bolder m-0 lh-1">Contact Information</h3>
                            </div>
                            <div class="row">
                              <!-- Name-->
                              <div class="col-12">
                                <div class="form-group">
                                  <label for="nameBilling" class="form-label">Name</label>
                                  <input type="text" class="form-control" id="nameBilling" placeholder="Name" name="name" value="{{ auth()->user()->name }}" disabled>
                                </div>
                              </div>
                              <!-- Email-->
                              <div class="col-12">
                                <div class="form-group">
                                  <label for="email" class="form-label">Email</label>
                                  <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email" value="{{ auth()->user()->email }}" disabled>
                                </div>
                              </div>
                              <!-- Phone-->
                              <div class="col-12">
                                <div class="form-group">
                                  <label for="numberBilling" class="form-label">Phone</label>
                                  <input type="text" class="form-control" id="numberBilling" placeholder="Phone" name="phone" value="{{ auth()->user()->phone }}" required>
                                </div>
                              </div>
                            </div>

                            <h3 class="fs-5 mt-2 fw-bolder mb-4 border-bottom pb-4">Shipping Address</h3>
                            <div class="row">

                              <!-- Address 1-->
                              <div class="col-12">
                                <div class="form-group">
                                  <label for="address1" class="form-label">Address 1</label>
                                  <input type="text" class="form-control" id="address1" placeholder="Address 1" name="address_1" value="{{ auth()->user()->address_1 }}" required>
                                </div>
                              </div>

                              <!-- Address 2-->
                              <div class="col-12">
                                <div class="form-group">
                                  <label for="address2" class="form-label">Address 2</label>
                                  <input type="text" class="form-control" id="address2" placeholder="Address 2" name="address_2" value="{{ auth()->user()->address_2 }}" required>
                                </div>
                              </div>

                              <!-- City -->
                              <div class="col-12">
                                <div class="form-group">
                                  <label for="city" class="form-label">City</label>
                                  <input type="text" class="form-control" id="city" placeholder="City" name="city" value="{{ auth()->user()->city }}" required>
                                </div>
                              </div>

                              <!-- State-->
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="state">State</label>
                                    <select class="form-select" id="update-state" name="state" required>
                                        <option @if(auth()->user()->state === null) selected @endif>Select State</option>
                                        <option value="Johor" @if(auth()->user()->state === 'Johor') selected @endif>Johor</option>
                                        <option value="Kedah" @if(auth()->user()->state === 'Kedah') selected @endif>Kedah</option>
                                        <option value="Kelantan" @if(auth()->user()->state === 'Kelantan') selected @endif>Kelantan</option>
                                        <option value="Malacca" @if(auth()->user()->state === 'Malacca') selected @endif>Malacca</option>
                                        <option value="Negeri Sembilan" @if(auth()->user()->state === 'Negeri Sembilan') selected @endif>Negeri Sembilan</option>
                                        <option value="Pahang" @if(auth()->user()->state === 'Pahang') selected @endif>Pahang</option>
                                        <option value="Penang" @if(auth()->user()->state === 'Penang') selected @endif>Penang</option>
                                        <option value="Perak" @if(auth()->user()->state === 'Perak') selected @endif>Perak</option>
                                        <option value="Perlis" @if(auth()->user()->state === 'Perlis') selected @endif>Perlis</option>
                                        <option value="Sabah" @if(auth()->user()->state === 'Sabah') selected @endif>Sabah</option>
                                        <option value="Sarawak" @if(auth()->user()->state === 'Sarawak') selected @endif>Sarawak</option>
                                        <option value="Selangor" @if(auth()->user()->state === 'Selangor') selected @endif>Selangor</option>
                                        <option value="Terengganu" @if(auth()->user()->state === 'Terengganu') selected @endif>Terengganu</option>
                                        <option value="Kuala Lumpur" @if(auth()->user()->state === 'Kuala Lumpur') selected @endif>Kuala Lumpur</option>
                                        <option value="Labuan" @if(auth()->user()->state === 'Labuan') selected @endif>Labuan</option>
                                        <option value="Putrajaya" @if(auth()->user()->state === 'Putrajaya') selected @endif>Putrajaya</option>
                                      </select>
                                </div>
                              </div>

                              <!-- Post Code-->
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="poscode" class="form-label">Postal Code</label>
                                  <input type="text" class="form-control" id="poscode" placeholder="Postal Code" name="postal" value="{{ auth()->user()->postal }}" required>
                                </div>
                              </div>
                            </div>
                            <div class="pt-5 mt-2 pb-5 border-top d-flex justify-content-md-end align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 bg-light pt-lg-10 aside-checkout pb-5 pb-lg-0 my-5 my-lg-0">
                    <div class="p-4 py-lg-0 pe-lg-0 ps-lg-5">
                        <div class="pb-3" hidden>
                            <!-- Cart Item-->
                            <div class="row mx-0 py-4 g-0 border-bottom">
                                <div class="col-2 position-relative">
                                    <picture class="d-block border">
                                        <img class="img-fluid" src="{{ asset('assets/images/products/product-cart-1.webp') }}" alt="HTML Bootstrap Template by Pixel Rocket">
                                    </picture>
                                </div>
                                <div class="col-9 offset-1">
                                    <div>
                                        <h6 class="justify-content-between d-flex align-items-start mb-2">
                                            Keychron K2
                                            <i class="ri-close-line ms-3"></i>
                                        </h6>
                                        <span class="d-block text-muted fw-bolder text-uppercase fs-9">VERSION: WHITE BACKLIGHT</span>
                                        <span class="d-block text-muted fw-bolder text-uppercase fs-9">SWITCHES: GATERON G BLUE</span>
                                    </div>
                                    <p class="fw-bolder text-end text-muted m-0">$85.00</p>
                                </div>
                            </div>    <!-- / Cart Item-->
                        </div>
                        <div class="pb-4 border-bottom">
                        <div class="d-flex flex-column flex-md-row justify-content-md-between mb-4 mb-md-2 visually-hidden">
                            <div>
                                <p class="m-0 fw-bold fs-5">Grand Total</p>
                                {{-- <span class="text-muted small">Inc $45.89 sales tax</span> --}}
                            </div>
                            <p class="m-0 fs-5 fw-bold">${{ number_format((float)$grandtotal, 2, '.', '');}}</p>
                        </div>
                    </div>{{--
                    <div class="py-4">
                        <div class="input-group mb-0">
                            <input type="text" class="form-control" placeholder="Enter coupon code">
                            <button class="btn btn-secondary btn-sm px-4">Apply</button>
                        </div>
                    </div> --}}

                    <button type="submit" class="btn btn-dark w-100 mt-2" role="button">Proceed to payment</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <!-- /Page Content -->
    </section>
<!-- / Main Section-->
@endsection
