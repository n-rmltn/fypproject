@extends('layouts.app-nonav')
@section('title') Orders @endsection
@section('body_class') bg-dark @endsection
@section('content')

<!-- Main Section-->
<section
        class="mt-0 overflow-hidden  vh-100 d-flex justify-content-center align-items-center p-4 rounded">
        <!-- Page Content Goes Here -->

        <!-- Login Form-->
        <div class="col col-md-8 col-lg-6 col-xxl-11 rounded">
            <!-- Logo-->
            <a class="navbar-brand fw-bold fs-3 flex-shrink-0 order-0 align-self-center justify-content-center d-flex mx-0 px-0 text-white" href="{{ route('welcome') }}">
                <div class="d-flex align-items-center">
                    <svg class="f-w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 77.53 72.26"><path d="M10.43,54.2h0L0,36.13,10.43,18.06,20.86,0H41.72L10.43,54.2Zm67.1-7.83L73,54.2,68.49,62,45,48.47,31.29,72.26H20.86l-5.22-9L52.15,0H62.58l5.21,9L54.06,32.82,77.53,46.37Z" fill="currentColor" fill-rule="evenodd"/></svg>
                </div>
            </a>
            <!-- / Logo-->
            <div class="shadow-xl p-4 p-lg-5 bg-white">
              <h1 class="text-center fw-bold mb-5 fs-2">Welcome, <span class="">{{ auth()->user()->name }} </span></h1>
              <div class="d-flex justify-content-center mb-5">
                <a href="{{ route('welcome') }}" class="btn rounded bg-dark d-inline-flex m-2 justify-content-center text-white"> Home </a>
                <a href="{{ route('orders') }}" class="btn rounded bg-dark d-inline-flex m-2 justify-content-center text-white"> Orders </a>
                <a href="{{ route('settings') }}" class="btn rounded bg-dark d-inline-flex m-2 justify-content-center text-white"> Settings </a>
                <a href="{{ route('password') }}" class="btn rounded bg-dark d-inline-flex m-2 justify-content-center text-white"> Password </a>
                @if (auth()->user()->is_admin === 1)
                    <a href="{{ route('admin') }}" class="btn rounded bg-success d-inline-flex m-2 justify-content-center text-white"> Admin </a>
                @endif
                <a href="{{ route('logout') }}" class="btn rounded bg-danger d-inline-flex m-2 justify-content-center text-white"> Log Out </a>
              </div>
                <!-- Products-->
                  <div class="row g-4 justify-content-center">
                    <div class="col-12 col-sm-6 col-lg-4">
                        <!-- Card Product-->
                        <div class="card border rounded border-transparent position-relative overflow-hidden h-100 transparent">
                          <div class="card-img position-relative">
                            <div class="card-badges">
                              <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-danger rounded-circle d-block me-1"></span>Shipping</span>
                            </div>
                            <picture class="position-relative overflow-hidden d-block bg-light">
                              <img class="w-100 img-fluid position-relative z-index-10" title="" src="./assets/images/products/product-1.webp" alt="">
                            </picture>
                            <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                              <button class="btn btn-quick-add"><i class="ri-delete-bin-2-fill me-2"></i> Cancel Order</button>
                            </div>
                          </div>
                          <div class="card-body px-0">
                            <a class="text-decoration-none link-cover" href="">Keychron K2</a>
                            <small class="text-muted d-block">White Backlight, Gateron G Pro Blue</small>
                            <p class="mt-2 mb-0 small">$329.99</p>
                          </div>
                        </div>
                        <!--/ Card Product-->
                      </div>
                      <div class="col-12 col-sm-6 col-lg-4">
                        <!-- Card Product-->
                        <div class="card border rounded border-transparent position-relative overflow-hidden h-100 transparent">
                          <div class="card-img position-relative">
                            <div class="card-badges">
                              <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-danger rounded-circle d-block me-1"></span>Shipping</span>
                            </div>
                            <picture class="position-relative overflow-hidden d-block bg-light">
                              <img class="w-100 img-fluid position-relative z-index-10" title="" src="./assets/images/products/product-1.webp" alt="">
                            </picture>
                            <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                              <button class="btn btn-quick-add"><i class="ri-delete-bin-2-fill me-2"></i> Cancel Order</button>
                            </div>
                          </div>
                          <div class="card-body px-0">
                            <a class="text-decoration-none link-cover" href="">Keychron K2</a>
                            <small class="text-muted d-block">White Backlight, Gateron G Pro Blue</small>
                            <p class="mt-2 mb-0 small">$329.99</p>
                          </div>
                        </div>
                        <!--/ Card Product-->
                      </div>
                      <div class="col-12 col-sm-6 col-lg-4">
                        <!-- Card Product-->
                        <div class="card border rounded border-transparent position-relative overflow-hidden h-100 transparent">
                          <div class="card-img position-relative">
                            <div class="card-badges">
                              <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-danger rounded-circle d-block me-1"></span>Shipping</span>
                            </div>
                            <picture class="position-relative overflow-hidden d-block bg-light">
                              <img class="w-100 img-fluid position-relative z-index-10" title="" src="./assets/images/products/product-1.webp" alt="">
                            </picture>
                            <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                              <button class="btn btn-quick-add"><i class="ri-delete-bin-2-fill me-2"></i> Cancel Order</button>
                            </div>
                          </div>
                          <div class="card-body px-0">
                            <a class="text-decoration-none link-cover" href="">Keychron K2</a>
                            <small class="text-muted d-block">White Backlight, Gateron G Pro Blue</small>
                            <p class="mt-2 mb-0 small">$329.99</p>
                          </div>
                        </div>
                        <!--/ Card Product-->
                      </div>
                    </div>

            </div>
                      <!-- / Products-->
        </div>
        <!-- /Page Content -->
    </section>
    <!-- / Main Section-->


    @endsection
