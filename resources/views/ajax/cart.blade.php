<!-- Cart Items-->
<div>
<!-- Cart Product-->
<div class="row mx-0 py-4 g-0 border-bottom">
    <div class="col-2 position-relative">
    <picture class="d-block">
        <img
        class="img-fluid"
        src="{{ asset('assets/images/products/product-cart-1.webp') }}"
        />
    </picture>
    </div>
    <div class="col-9 offset-1">
    <div>
        <h6
        class="justify-content-between d-flex align-items-start mb-2"
        >
        Keychron K2 Wireless
        <i class="ri-close-line ms-3"></i>
        </h6>
        <span
        class="d-block text-muted fw-bolder text-uppercase fs-9"
        >Version: White Backlight</span
        >
        <span
        class="d-block text-muted fw-bolder text-uppercase fs-9"
        >Switch: Gateron Pro Brown</span
        >
    </div>
    <p class="fw-bolder text-end text-muted m-0">$69.00</p>
    </div>
</div>
<!-- Cart Product-->
</div>
<!-- /Cart Items-->

<!-- Cart Summary-->
<div>
<div class="pt-3">
    <div
    class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-start mb-4 mb-md-2"
    >
    <div>
        <p class="m-0 fw-bold fs-5">Grand Total</p>
    </div>
    <p class="m-0 fs-5 fw-bold">$69.00</p>
    </div>
</div>
<a
    href="{{ route('cart') }}"
    class="btn btn-outline-dark w-100 text-center mt-4"
    role="button"
    >View Cart</a
>
</div>
<!-- / Cart Summary-->
