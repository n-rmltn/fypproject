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
              
              <div class="card-body">
                            <div class="table-responsive">
                                <table class="table m-0 table-striped">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Billing Name</th>
                                            <th>Date</th>
                                            <th>Payment Method</th>
                                            <th>Items</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="fw-bolder">#1234-5679</span>
                                            </td>
                                            <td>Patria Nelson</td>
                                            <td class="text-muted">24th June, 2021</td>
                                            <td class="text-muted">
                                                <div class="d-flex align-items-center">
                                                    <i class="ri-visa-line ri-lg me-2"></i> **** 6789
                                                </div>
                                            </td>
                                            <td class="text-muted">5</td>
                                            <th class="text-muted">RM123.99</th>
                                            <td><span class="badge rounded-pill bg-success-faded text-success">completed</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                                        id="dropdownOrder-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-line"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown" aria-labelledby="dropdownOrder-0">
                                                        <li><a class="dropdown-item" href="#">View details</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bolder">#1235-7755</span>
                                            </td>
                                            <td>Dominic Patterson</td>
                                            <td class="text-muted">22nd June, 2021</td>
                                            <td class="text-muted">
                                                <div class="d-flex align-items-center">
                                                    <i class="ri-mastercard-fill ri-lg me-2"></i> **** 1233
                                                </div>
                                            </td>
                                            <td class="text-muted">5</td>
                                            <th class="text-muted">RM123.99</th>
                                            <td><span class="badge rounded-pill bg-info-faded text-info">processing</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                                        id="dropdownOrder-1" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-line"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown" aria-labelledby="dropdownOrder-1">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bolder">#1236-6579</span>
                                            </td>
                                            <td>Steven Smith</td>
                                            <td class="text-muted">21st June, 2021</td>
                                            <td class="text-muted">
                                                <div class="d-flex align-items-center">
                                                    <i class="ri-paypal-line ri-lg me-2"></i> **** 7766
                                                </div>
                                            </td>
                                            <td class="text-muted">5</td>
                                            <th class="text-muted">RM123.99</th>
                                            <td><span class="badge rounded-pill bg-danger-faded text-danger">cancelled</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                                        id="dropdownOrder-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-line"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown" aria-labelledby="dropdownOrder-2">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
            </div>
        </div>
        <!-- /Page Content -->
    </section>
    <!-- / Main Section-->


    @endsection
