@extends('layouts.app')
@section('title') Catalog @endsection
@section('body_class') bg-dark @endsection
@section('content')
<!-- Main Section-->
<section class="mt-0 ">
    <!-- Page Content Goes Here -->

    <!-- Category Top Banner -->
    <div class="py-10 bg-img-cover bg-overlay-dark position-relative overflow-hidden bg-pos-center-center rounded-0"
        style="background-image: url({{ asset('assets/images/banners/banner-category-top.jpg') }});">
        <div class="container-fluid position-relative z-index-20" data-aos="fade-right" data-aos-delay="300">
            <h1 class="fw-bold display-6 mb-4 text-white">Products</h1>
            <div class="col-12 col-md-6">
                <p class="text-white mb-0 fs-5">
                    Browse our products
                </p>
            </div>
        </div>
    </div>
    <!-- Category Top Banner -->

    <div class="container-fluid" data-aos="fade-in">
        <!-- Category Toolbar-->
            <div class="d-flex justify-content-between items-center pt-5 pb-4 flex-column flex-lg-row">
                <div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item text-white"><a href="{{ route('welcome') }}">Home</a></li>
                          <li class="breadcrumb-item text-white"><a href="{{ route('product.index') }}">All Product</a></li>
                          @if(isset($req['category']))
                            <li class="breadcrumb-item text-white active " aria-current="page">{{ $req['category'] }}</li>
                          @endif
                        </ol>
                    </nav>
                    <h1 class="fw-bold fs-3 mb-2 text-white">
                        @if(isset($req['category']))
                        {{ ucfirst($req['category']) }}
                        @else
                        All Product
                        @endif
                        ({{ count($products) }})
                    </h1>
                    {{-- <p class="m-0 text-white small">Showing 1 - {{ count($products) }} of {{ count($products) }}</p> --}}
                </div>
                <div class="d-flex justify-content-end align-items-center mt-4 mt-lg-0 flex-column flex-md-row">

                    <!-- Filter Trigger-->
                    <button class="btn bg-dark p-3 me-md-3 d-flex align-items-center fs-7 lh-1 w-100 mb-2 mb-md-0 w-md-auto text-white " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFilters" aria-controls="offcanvasFilters">
                        <i class="ri-equalizer-line me-2"></i> Filters
                    </button>
                    <!-- / Filter Trigger-->
                    <form action="{{ URL::current() }}" method="get">
                        @if (isset($req['category']))
                            <input type="hidden" name="category" value="{{ $req['category'] }}">
                        @endif
                        @if(isset($req['brand']))
                            @foreach ($req['brand'] as $brand)
                                <input type="hidden" name="brand[]" value="{{ $brand }}">
                            @endforeach
                        @endif
                        @if (isset($req['price_min']))
                            <input type="hidden" name="price_min" value="{{ $req['price_min'] }}">
                        @endif
                        @if (isset($req['price_max']))
                            <input type="hidden" name="price_max" value="{{ $req['price_max'] }}">
                        @endif
                    <!-- Sort Options-->
                        <select class="form-select form-select-sm border-1 bg-dark p-3 pe-5 lh-1 fs-7 text-white" name="sort" onchange="this.form.submit()">
                            <option value="price_asc"@if (isset($req['sort'])&& $req['sort'] == 'price_asc') selected @endif>Sort By Price: Asc</option>
                            <option value="price_desc"@if (isset($req['sort'])&& $req['sort'] == 'price_desc') selected @endif>Sort By Price: Desc</option>
                            <option value="name_asc"@if (isset($req['sort'])&& $req['sort'] == 'name_asc' || !isset($req['sort'])) selected @endif>Sort By Name: Asc</option>
                            <option value="name_desc"@if (isset($req['sort'])&& $req['sort'] == 'name_desc') selected @endif>Sort By Name: Desc</option>
                        </select>
                    <!-- / Sort Options-->
                    </form>
                </div>
            </div>            <!-- /Category Toolbar-->

        <!-- Products-->
        <div class="row g-4">

            @forelse ($products as $prod => $val)
            <div class="col-12 col-sm-6 col-lg-4">
                <!-- Card Product-->
                <div class="card border border-transparent position-relative overflow-hidden h-100 transparent bg-dark">
                    <div class="card-img position-relative">
                        <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"><i class="ri-heart-line"></i></span>
                        <picture class="position-relative overflow-hidden d-block bg-dark">
                            <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('/assets/images/products/'.$val->product_catalog_images_name) }}" alt="">
                        </picture>
                            <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                                <button class="btn btn-quick-add"><i class="ri-add-line me-2"></i> View Product</button>
                            </div>
                    </div>
                    <div class="card-body px-0">
                        <a class="text-decoration-none link-cover text-white" href="{{ route('product.show', $val->product_id) }}">{{ $val->product_name_long }}</a>

                        <small class="text-muted d-block">
                            @forelse ( $val->option as $option => $value)
                            {{ count($value->list) }} {{ $value->product_option_name }}
                            @empty

                            @endforelse
                        </small>
                                <p class="mt-2 mb-0 small text-white">RM{{ $val->product_base_price }}</p>
                    </div>
                </div>
                <!--/ Card Product-->
            </div>
            @empty
                <p class="text-white">No product available</p>
            @endforelse
        </div>
        <!-- / Products-->

        <!-- Pagination-->
        <div class="d-flex flex-column f-w-44 mx-auto my-5 text-center">
            {!! $products->withQueryString()->links() !!}
        </div>            <!-- / Pagination-->
    </div>

    <!-- /Page Content -->
</section>
<!-- / Main Section-->
<!-- Offcanvas Imports-->
    <!-- Filters Offcanvas-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasFilters" aria-labelledby="offcanvasFiltersLabel">
        <form id="filter" action="{{ URL::current() }}" method="get">
        @if (isset($req['category']))
            <input type="hidden" name="category" value="{{ $req['category'] }}">
        @endif
        @if (isset($req['sort']))
            <input type="hidden" name="sort" value="{{ $req['sort'] }}">
        @endif
        <div class="offcanvas-header pb-0 d-flex align-items-center">
          <h5 class="offcanvas-title" id="offcanvasFiltersLabel">Category Filters</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body" style="overflow: hidden;">
          <div class="d-flex flex-column justify-content-between w-100 h-100">

            <!-- Filters-->
            <div>

              <!-- Price Filter -->
              <div class="py-4 widget-filter widget-filter-price border-top">
                <a class="small text-body text-decoration-none text-secondary-hover transition-all transition-all fs-6 fw-bolder d-block collapse-icon-chevron"
                  data-bs-toggle="collapse" href="#filter-modal-price" role="button" aria-expanded="true"
                  aria-controls="filter-modal-price">
                  Price
                </a>
                <div id="filter-modal-price" class="collapse show">
                  <div class="filter-price mt-6"></div>
                  <div class="d-flex justify-content-between align-items-center mt-7">
                      <div class="input-group mb-0 me-2 border">
                          <span class="input-group-text bg-transparent fs-7 p-2 text-muted border-0">RM</span>
                          <input type="number" name="price_min" min="{{ $req['start_min'] }}" max="{{ $req['start_max'] }}" step="1" class="filter-min form-control-sm border flex-grow-1 text-muted border-0"
                          @if (isset($req['price_min']))
                            data-start_min="{{ $req['price_min'] }}"
                          @else
                            data-start_min="0"
                          @endif
                          >
                      </div>
                      <div class="input-group mb-0 ms-2 border">
                          <span class="input-group-text bg-transparent fs-7 p-2 text-muted border-0">RM</span>
                          <input type="number" name="price_max" min="{{ $req['start_min'] }}" max="{{ $req['start_max'] }}" step="1" class="filter-max form-control-sm flex-grow-1 text-muted border-0"
                          @if (isset($req['price_max']))
                          data-start_max="{{ $req['price_max'] }}"
                          @else
                          data-start_max="1000"
                          @endif
                          >
                      </div>
                  </div>          </div>
              </div>
              <!-- / Price Filter -->

              <!-- Brands Filter -->
              <div class="py-4 widget-filter border-top">
                <a class="small text-body text-decoration-none text-secondary-hover transition-all transition-all fs-6 fw-bolder d-block collapse-icon-chevron"
                  data-bs-toggle="collapse" href="#filter-modal-brands" role="button" aria-expanded="true"
                  aria-controls="filter-modal-brands">
                  Brands
                </a>
                <div id="filter-modal-brands" class="collapse show">
                  <div class="input-group my-3 py-1">
                    <input type="text" class="form-control py-2 filter-search rounded" placeholder="Search"
                      aria-label="Search">
                    <span class="input-group-text bg-transparent p-2 position-absolute top-10 end-0 border-0 z-index-20"><i
                        class="ri-search-2-line text-muted"></i></span>
                  </div>
                  <div class="simplebar-wrapper">
                    <div class="filter-options" data-pixr-simplebar>
                    @forelse ($brands as $brand => $val)
                        <div class="form-group form-check-custom mb-1">
                            <input type="checkbox" name="brand[]" value="{{ $val->id }}" class="form-check-input" id="filter-brands-modal-{{ $val->id }}"
                            @if(isset($req['brand']))
                                @foreach ($req['brand'] as $brand)
                                    @if ($brand == $val->id)
                                        checked
                                    @endif
                                @endforeach
                            @endif>
                            <label class="form-check-label fw-normal text-body flex-grow-1 d-flex align-items-center"
                                for="filter-brands-modal-{{ $val->id }}">{{ $val->product_brand_name }}
                                {{-- <span class="text-muted ms-1 fs-9">(2)</span> --}}
                            </label>
                        </div>
                    @empty
                        No Brand Found
                    @endforelse

                    </div>
                  </div>
                </div>
              </div>
              <!-- / Brands Filter -->

              {{-- <!-- Sizes Filter --> // todo soon
              <div class="py-4 widget-filter border-top">
                <a class="small text-body text-decoration-none text-secondary-hover transition-all transition-all fs-6 fw-bolder d-block collapse-icon-chevron"
                  data-bs-toggle="collapse" href="#filter-modal-sizes" role="button" aria-expanded="true"
                  aria-controls="filter-modal-sizes">
                  Sizes
                </a>
                <div id="filter-modal-sizes" class="collapse show">
                  <div class="filter-options mt-3">
                    <div class="form-group d-inline-block mr-2 mb-2 form-check-bg form-check-custom">
                        <input type="checkbox" class="form-check-bg-input" id="filter-sizes-modal-0">
                        <label class="form-check-label fw-normal" for="filter-sizes-modal-0">Full-size</label>
                    </div>              <div class="form-group d-inline-block mr-2 mb-2 form-check-bg form-check-custom">
                        <input type="checkbox" class="form-check-bg-input" id="filter-sizes-modal-1">
                        <label class="form-check-label fw-normal" for="filter-sizes-modal-1">TKL</label>
                    </div>              <div class="form-group d-inline-block mr-2 mb-2 form-check-bg form-check-custom">
                        <input type="checkbox" class="form-check-bg-input" id="filter-sizes-modal-2">
                        <label class="form-check-label fw-normal" for="filter-sizes-modal-2">75%</label>
                    </div>              <div class="form-group d-inline-block mr-2 mb-2 form-check-bg form-check-custom">
                        <input type="checkbox" class="form-check-bg-input" id="filter-sizes-modal-3">
                        <label class="form-check-label fw-normal" for="filter-sizes-modal-3">60%</label>
                    </div>            </div>
                </div>
              </div>
              <!-- / Sizes Filter --> --}}
            </div>
            <!-- / Filters-->

            <!-- Filter Button-->
            <div class="border-top pt-3">
              <a href="#" class="btn btn-dark mt-2 d-block hover-lift-sm hover-boxshadow" onclick="document.getElementById('filter').submit()" data-bs-dismiss="offcanvas" aria-label="Close">Done</a>
            </div>
            </form>
            <!-- /Filter Button-->
          </div>
        </div>
      </div>
@endsection
