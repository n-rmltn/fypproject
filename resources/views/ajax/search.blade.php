@forelse ($product as $prod => $val)
<div class="col-12 col-sm-6 col-lg-4">
    <!-- Card Product-->
<div
class="card border border-transparent position-relative overflow-hidden h-100 transparent"
>
<div class="card-img position-relative">

<span
    class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"
    ><i class="ri-heart-line"></i
></span>
<picture
    class="position-relative overflow-hidden d-block bg-light"
>
    <img
    class="w-100 img-fluid position-relative z-index-10"
    title=""
    src="{{ asset('assets/images/products/'.$val->product_cart_images_name) }}"
    alt=""
    />
</picture>
<div
    class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2"
>
    <button class="btn btn-quick-add">
    <i class="ri-add-line me-2"></i> Quick Add
    </button>
</div>
</div>
<div class="card-body px-0">
<a
    class="text-decoration-none link-cover"
    href="{{ route('product.show',$val->product_id) }}"
    >{{ $val->product_name_long }}</a
>
<small class="text-muted d-block"
    >@forelse ($val->option as $option)
        {{ count($option->list->where('product_option_id','=',$option->id)) }}
        {{ $option->product_option_name }}
        @if( !$loop->last)
        ,
        @endif
    @empty

    @endforelse</small
>
<p class="mt-2 mb-0 small">
    <span class="text-dark">${{ $val->product_base_price }}</span>
</p>
</div>
</div>
<!--/ Card Product-->
</div>
@empty

@endforelse
