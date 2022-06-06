@extends('layouts.app-nonav')
@section('title') Login @endsection
@section('body_class') bg-dark @endsection
@section('content')

    <section
        class="mt-0 overflow-hidden vh-100 d-flex justify-content-center align-items-center p-4">
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
                <h1 class="text-center fw-bold mb-5 fs-2">Login</h1>
                @if(isset ($errors) && count($errors) > 0)
                    <div class="alert alert-warning" role="alert">
                        <ul class="list-unstyled mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(Session::get('success', false))
                    <?php $data = Session::get('success'); ?>
                    @if (is_array($data))
                        @foreach ($data as $msg)
                            <div class="alert alert-warning" role="alert">
                                <i class="fa fa-check"></i>
                                {{ $msg }}
                            </div>
                        @endforeach
                    @else
                        <div class="alert alert-warning" role="alert">
                            <i class="fa fa-check"></i>
                            {{ $data }}
                        </div>
                    @endif
                @endif
                <form method="post" action="{{ route('login.perform') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="form-group">
                      <label class="form-label" for="login-email">Email address</label>
                      <input type="email" class="form-control" name="email" placeholder="name@email.com">
                    </div>
                    <div class="form-group">
                      <label for="login-password" class="form-label d-flex justify-content-between align-items-center">
                        Password
                        <a href="{{ route('forgot') }}" class="text-muted small">Forgot your password?</a>
                      </label>
                      <input type="password" class="form-control" name="password" placeholder="Enter your password">
                    </div>
                    <input type="checkbox" class="form-check-label" name="remember"> Remember me
                    <button type="submit" class="btn btn-dark d-block w-100 my-4">Login</button>
                </form>
                <p class="d-block text-center text-muted">New customer? <a class="text-muted" href="{{ route('register') }}">Sign up for an account</a></p>
            </div>
        </div>
        <!-- / Login Form-->

        <!-- /Page Content -->
    </section>
    <!-- / Main Section-->
    @endsection
