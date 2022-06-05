@extends('layouts.app-nonav')
@section('title') Cart @endsection
@php
    $grandtotal = 0;
@endphp
@section('content')
<!-- Main Section-->
<section class="mt-0 overflow-lg-hidden  vh-lg-100">
    <!-- Page Content Goes Here -->
    <div class="container">
        <div class="row g-0 vh-lg-100">
            <div class="col-12 col-lg-7 pt-5 pt-lg-10">
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
                            <li class="me-4"><a class="nav-link-checkout active"
                                    href="{{ route('cart.index') }}">Your Cart</a></li>
                            <li class="me-4"><a class="nav-link-checkout"
                                    href="{{ route('checkout') }}">Information</a></li>
                            <li class="me-4"><a class="nav-link-checkout"
                                    href="{{ route('payment') }}">Payment</a></li>
                        </ul>
                    </nav>                        <div class="mt-5">
                        <h3 class="fs-5 fw-bolder mb-0 border-bottom pb-4">Your Cart</h3>
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <tbody class="border-0">
                                    @forelse ($cart as $row => $data)
                                    <!-- Cart Product-->
                                    <div class="row mx-0 py-4 g-0 border-bottom">
                                        <div class="col-2 position-relative">
                                        <picture class="d-block">
                                            <img
                                            class="img-fluid"
                                            src="{{ asset('assets/images/products/'.$data['product_image']) }}"
                                            />
                                        </picture>
                                        </div>
                                        <div class="col-9 offset-1">
                                        <div>
                                            <h6
                                            class="justify-content-between d-flex align-items-start mb-2"
                                            >
                                            {{ $data['item_name'] }}
                                            <i class="ri-close-line ms-3" style="cursor: pointer;" onclick="destroy_cart({{ $row }},'{{ csrf_token() }}')"></i>
                                            </h6>
                                            @forelse ( $data['options'] as $option => $value)
                                            <span
                                            class="d-block text-muted fw-bolder text-uppercase fs-9"
                                            >{{ $option }}: {{ $value }}</span>
                                            @empty

                                            @endforelse
                                        </div>
                                        <p class="fw-bolder text-end text-muted m-0">RM {{ number_format((float)$data['item_price'], 2, '.', '');}}</p>
                                        </div>
                                    </div>
                                    <!-- Cart Product-->
                                    @php
                                        $grandtotal += $data['item_price'];
                                    @endphp
                                    @empty
                                        <span>Cart is empty</span>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 bg-light pt-lg-10 aside-checkout pb-5 pb-lg-0 my-5 my-lg-0">
                <div class="p-4 py-lg-0 pe-lg-0 ps-lg-5">
                    <div class="pb-4 border-bottom">
                        <div class="d-flex flex-column flex-md-row justify-content-md-between mb-4 mb-md-2">
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

                    <a href="{{ route('checkout') }}" class="btn btn-dark w-100 mt-2" role="button">Proceed to information</a>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
</section>
<!-- / Main Section-->
@endsection

@section('script')
<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript">
    // Create an instance of the Stripe object with your publishable API key
    var stripe = Stripe('{{ env('STRIPE_KEY') }}'); // Add your own
    var checkoutButton = document.getElementById('checkout-button');
    checkoutButton.addEventListener('click', function() {
        // Create a new Checkout Session using the server-side endpoint you
        // created in step 3.
        fetch('/payment', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'url': '/payment',
                'X-CSRF-TOKEN': "{{ csrf_token() }}",
            },
        })
        .then(function(response) {
            return response.json();
        })
        .then(function(session) {
            console.log("start redirect");
            return stripe.redirectToCheckout({ sessionId: session.id });
            console.log("done redirect");
        })
        .then(function(result) {
            // If `redirectToCheckout` fails due to a browser or network
            // error, you should display the localized error message to your
            // customer using `error.message`.
            if (result.error) {
                alert(result.error.message);
            }
        })
        .catch(function(error) {
            console.log('Error:', error);
        })
    });
</script>
@endsection
