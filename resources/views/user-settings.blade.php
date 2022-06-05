@extends('layouts.app-nonav')
@section('title') Settings @endsection
@section('body_class') bg-dark @endsection
@section('content')

<!-- Main Section-->
<section
        class="mt-0 d-flex justify-content-center align-items-center p-4 rounded">
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
            <h1 class="text-center mb-5 fs-2 fw-bold">Account Settings</h1>
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
                        <li>User Details Has Been Updated</li>
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
                <form method="post" action="{{ route('settings.update') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                  <div class="form-group">
                    <label class="form-label" for="update-name">Name</label>
                    <input type="text" class="form-control" id="update-name" name="name" placeholder="Name" value="{{ auth()->user()->name }}" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="update-email">Email address</label>
                    <input type="email" class="form-control" id="update-email" name="email" placeholder="Email address" value="{{ auth()->user()->email }}" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="update-address1">Address 1</label>
                    <input type="text" class="form-control" id="update-address1" name="address_1" placeholder="Address 1" value="{{ auth()->user()->address_1 }}" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="update-address2">Address 2</label>
                    <input type="text" class="form-control" id="update-address2" name="address_2" placeholder="Address 2" value="{{ auth()->user()->address_2 }}" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="update-city">City</label>
                    <input type="text" class="form-control" id="update-city" name="city" placeholder="City" value="{{ auth()->user()->city }}" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="update-state">State</label>
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
                  <div class="form-group">
                    <label class="form-label" for="update-poscode">Postal Code</label>
                    <input type="text" class="form-control" id="update-poscode" name="postal" placeholder="Postal Code" value="{{ auth()->user()->postal }}" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="update-phone">Phone</label>
                    <input type="text" class="form-control" id="update-phone" name="phone" placeholder="Phone" value="{{ auth()->user()->phone }}" required>
                  </div>
                  <button type="submit" class="btn btn-dark d-block w-100 my-4">Update Info</button>
                </form>
                      <!-- / Products-->
        </div>
        <!-- /Page Content -->
    </section>
    <!-- / Main Section-->


    @endsection
