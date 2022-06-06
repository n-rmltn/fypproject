@extends('layouts.app-admin')
@section('title') Admin @endsection
@section('content')

<main id="main">

        <!-- Breadcrumbs-->
        <div class="bg-white border-bottom py-3 mb-5">
          <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
              </ol>
          </nav>
          </div>
        </div>
        <!-- / Breadcrumbs-->

        <!-- Content-->
        <section class="container-fluid">

            <!-- Page Title-->
            <h2 class="fs-3 fw-bold mb-2">Welcome back, {{ auth()->user()->name }} 👋</h2>
            <p class="text-muted mb-5">Product sales overview.</p>
            <!-- / Page Title-->
            <!-- Top Row Widgets-->
            <div class="row g-4">
                <!-- Number Orders Widget-->
                <div class="col-12 col-sm-6 col-xxl-3">
                    <div class="card h-100">
                        <div class="card-header justify-content-between align-items-center d-flex border-0 pb-0">
                            <h6 class="card-title m-0 text-muted fs-xs text-uppercase fw-bolder tracking-wide">Total Sales</h6>
                        </div>
                        <div class="card-body">
                            <div class="row gx-4 mb-3 mb-md-1">
                                <div class="col-12 col-md-6">
                                    <p class="fs-3 fw-bold d-flex align-items-center"><span class="fs-9 me-1">RM</span> 567.99</p>
                                </div>
                            </div>
                        </div>
                    </div>                </div>
                <!-- / Number Orders Widget-->


            </div>
            <!-- / Top Row Widgets-->

            <!-- Middle Row Widgets-->
            <div class="row g-4 mb-4 mt-0">

            </div>
            <!-- / Middle Row Widgets-->



            <!-- Footer -->
            <footer class="footer">
              <p class="small text-muted m-0">All rights reserved | © Norm 2022</p>
            </footer>

            <!-- Sidebar Menu Overlay-->
            <div class="menu-overlay-bg"></div>
            <!-- / Sidebar Menu Overlay-->

            <!-- Modal Imports-->
            <!-- Place your modal imports here-->


        </section>
        <!-- / Content-->

    </main>

    @endsection
