@forelse ($cart as $data)
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
        >Quantity: {{ $data['item_quantity'] }}</span
        >
        <span
        class="d-block text-muted fw-bolder text-uppercase fs-9"
        >Version: White Backlight</span
        >
        <span
        class="d-block text-muted fw-bolder text-uppercase fs-9"
        >Switch: Gateron Pro Brown</span
        >
    </div>
    <p class="fw-bolder text-end text-muted m-0">${{ number_format((float)$data['item_price'], 2, '.', ''); }}</p>
    </div>
</div>
<!-- Cart Product-->
@empty
    <span>Cart is empty</span>
@endforelse
