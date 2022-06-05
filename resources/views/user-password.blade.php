@extends('layouts.app-nonav')
@section('title') Password @endsection
@section('body_class') bg-dark @endsection
@section('content')

<!-- Main Section-->
<section
        class="mt-0 d-flex overflow-hidden vh-100 justify-content-center align-items-center p-4 rounded">
        <!-- Page Content Goes Here -->

        <!-- Login Form-->
        <div class="col col-md-8 col-lg-6 col-xxl-8 rounded">
            <!-- Logo-->
            <a class="navbar-brand fw-bold fs-3 flex-shrink-0 order-0 align-self-center justify-content-center d-flex mx-0 px-0 text-white" href="{{ route('welcome') }}">
                <div class="d-flex align-items-center">
                    <svg class="f-w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 77.53 72.26"><path d="M10.43,54.2h0L0,36.13,10.43,18.06,20.86,0H41.72L10.43,54.2Zm67.1-7.83L73,54.2,68.49,62,45,48.47,31.29,72.26H20.86l-5.22-9L52.15,0H62.58l5.21,9L54.06,32.82,77.53,46.37Z" fill="currentColor" fill-rule="evenodd"/></svg>
                </div>
            </a>
            <!-- / Logo-->
            <div class="shadow-xl p-4 p-lg-5 bg-white">
            <h1 class="text-center mb-5 fs-2 fw-bold">Change Password</h1>
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
              @if(app('request')->input('msg') && app('request')->input('msg') === 'success')
                <div class="alert alert-success" role="alert">
                    <ul class="list-unstyled mb-0">
                        <li>Your Password Has Been Updated</li>
                    </ul>
                </div>
                @endif
                @if(isset ($errors) && count($errors) > 0)
                    <div class="alert alert-warning" role="alert">
                        <ul class="list-unstyled mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{ route('password.update') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                  <div class="form-group">
                    <label class="form-label d-flex justify-content-between align-items-center" for="current-pass">Current Password <a href="{{ route('forgot') }}" class="text-muted small" hidden>Forgot your password?</a></label>
                    <input type="password" class="form-control" id="change-pass" name="current_password" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="update-pass">New Password</label>
                    <input type="password" class="form-control" name="new_password" id="update-pass" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="update-pass">Confirm New Password</label>
                    <input type="password" class="form-control" name="new_confirm_password" id="update-pass" required>
                  </div>
                  <button type="submit" class="btn btn-dark d-block w-100 my-4">Change Password</button>
                </form>
                      <!-- / Products-->
        </div>
        <!-- /Page Content -->
    </section>
    <!-- / Main Section-->


    @endsection
