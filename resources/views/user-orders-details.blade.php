@extends('layouts.app-nonav')
@section('title') Orders Details @endsection
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

              <div class="col-12">
                    <div class="card mb-4 h-100">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Order ID <span>#{{ $booking->id }}</span> details</h6>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3 visually-hidden">
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @forelse ($booking->Booking_item as $prod => $val)
                                        <tr>
                                            <td>
                                                <span class="fw-bolder">{{ ($prod+1) }}</span>
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
                                                        <p class="fw-bolder mb-1 d-flex align-items-center lh-1">{{ $val->Product->product_name_long }}</p>
                                                        <span class="d-block text-muted">{{ $val->Product->product_name_short }}</span>
                                                        <span class="d-block text-muted">{{ $val->Product->brand->product_brand_name }}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-muted">
                                                @forelse ( $val->Booking_item_option as $opt)
                                                    <span class="d-block text-muted">{{ $opt->Product_option_list->product_option_list_name }}</span>
                                                @empty
                                                    <span class="d-block text-muted">No variation found</span>
                                                @endforelse
                                                <p></p>
                                            </td>
                                            @php
                                            $subtotal = 0;
                                            $subtotal += $val->Product->product_base_price;
                                            foreach ($val->Booking_item_option as $opt){
                                                $subtotal += $opt->Product_option_list->product_option_list_additional_price;
                                            }
                                            @endphp
                                            <th class="text-muted">{{ number_format((float)$subtotal, 2, '.', ''); }}</th>
                                        </tr>
                                        @empty
                                        <p class="text-white">No product available</p>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <nav>
                                <ul class="pagination justify-content-end mt-3 mb-0" hidden>
                                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                            <div class="col-12 col-md-3 visually-hidden">
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
            </div>
        </div>
        <!-- /Page Content -->
    </section>
    <!-- / Main Section-->


    @endsection
