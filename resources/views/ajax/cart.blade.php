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
    <p class="fw-bolder text-end text-muted m-0 item_price" data-price="{{ number_format((float)$data['item_price'], 2, '.', '');}}">RM {{ number_format((float)$data['item_price'], 2, '.', '');}}</p>
    </div>
</div><!-- Cart Product-->
@empty
    <span>Cart is empty</span>
@endforelse
