@extends('layouts.app')
@section('title') Home @endsection
@section('body_class') bg-dark @endsection
@section('content')

<!-- Main Section-->
<section class="mt-0 overflow-hidden">
    <!-- Page Content Goes Here -->

    <!-- / Top banner -->
    <section
    class="vh-75 vh-lg-60 container-fluid rounded overflow-hidden"
    data-aos="fade-in"
    >
    <!-- Swiper Info -->
    <div
        class="swiper-container overflow-hidden rounded h-100 bg-dark"
        data-swiper
        data-options='{
            "spaceBetween": 0,
            "slidesPerView": 1,
            "effect": "fade",
            "speed": 1000,
            "loop": true,
            "parallax": true,
            "observer": true,
            "observeParents": true,
            "lazy": {
                "loadPrevNext": true
            },
            "autoplay": {
                "delay": 5000,
                "disableOnInteraction": false
            },
            "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
            }
        }'
    >
        <div class="swiper-wrapper">
        <!-- Slide-->
        <div class="swiper-slide position-relative h-100 w-100">
            <div
            class="w-100 h-100 overflow-hidden position-absolute z-index-1 top-0 start-0 end-0 bottom-0"
            >
            <div
                class="w-100 h-100 bg-img-cover bg-pos-center-center overflow-hidden"
                data-swiper-parallax="-100"
                style="
                will-change: transform;
                background-image: url({{ asset('assets/images/banners/banner-1.jpg') }});
                "
            ></div>
            </div>
            <div
            class="container position-relative z-index-10 d-flex h-100 align-items-start flex-column justify-content-center"
            >
            <p
                class="title-small text-white opacity-75 mb-0"
                data-swiper-parallax="-100"
            >
                Today's Special
            </p>
            <h2
                class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white"
                data-swiper-parallax="100"
            >
                <span class="text-outline-light">Keychron</span> K2
            </h2>
            <div data-swiper-parallax-y="-25">
                <a
                href="{{ url('product', [ 'id' => '1' ]) }}"
                class="btn btn-psuedo text-white"
                role="button"
                >Learn more</a
                >
            </div>
            </div>
        </div>
        <!-- /Slide-->

        <!-- Slide-->
        <div class="swiper-slide position-relative h-100 w-100">
            <div
            class="w-100 h-100 overflow-hidden position-absolute z-index-1 top-0 start-0 end-0 bottom-0"
            >
            <div
                class="w-100 h-100 bg-img-cover bg-pos-center-center overflow-hidden"
                data-swiper-parallax="-100"
                style="
                will-change: transform;
                background-image: url({{ asset('assets/images/banners/banner-2.jpg') }});
                "
            ></div>
            </div>
            <div
            class="container position-relative z-index-10 d-flex h-100 align-items-start flex-column justify-content-center"
            >
            <p
                class="title-small text-white opacity-100 mb-0"
                data-swiper-parallax="-100"
            >
                Swappable Switches
            </p>
            <h2
                class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white"
                data-swiper-parallax="100"
            >
                Hot <span class="text-outline-light">Swappable</span>
            </h2>
            <div data-swiper-parallax-y="-25">
                <a href="#" class="btn btn-psuedo text-white" role="button"
                >Hot Swappables Keyboards</a
                >
            </div>
            </div>
        </div>
        <!--/Slide-->

        <!-- Slide-->
        <div class="swiper-slide position-relative h-100 w-100">
            <div
            class="w-100 h-100 overflow-hidden position-absolute z-index-1 top-0 start-0 end-0 bottom-0"
            >
            <div
                class="w-100 h-100 bg-img-cover bg-pos-center-center overflow-hidden"
                data-swiper-parallax="-100"
                style="
                will-change: transform;
                background-image: url({{ asset('assets/images/banners/banner-3.jpg') }});
                "
            ></div>
            </div>
            <div
            class="container position-relative z-index-10 d-flex h-100 align-items-start flex-column justify-content-center"
            >
            <p
                class="title-small text-white opacity-75 mb-0"
                data-swiper-parallax="-100"
            >
                Latest Arrival
            </p>
            <h2
                class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white"
                data-swiper-parallax="100"
            >
                ROG <span class="text-outline-light">Pugio II</span>
            </h2>
            <div data-swiper-parallax-y="-25">
                <a href="#" class="btn btn-psuedo text-white" role="button"
                >Learn more</a
                >
            </div>
            </div>
        </div>
        <!-- /Slide-->

        <!--Slide-->
        <div class="swiper-slide position-relative h-100 w-100">
            <div
            class="w-100 h-100 overflow-hidden position-absolute z-index-1 top-0 start-0 end-0 bottom-0"
            >
            <div
                class="w-100 h-100 bg-img-cover bg-pos-center-center overflow-hidden"
                data-swiper-parallax="-100"
                style="
                will-change: transform;
                background-image: url({{ asset('assets/images/banners/banner-4.jpg') }});
                "
            ></div>
            </div>
            <div
            class="container position-relative z-index-10 d-flex h-100 align-items-start flex-column justify-content-center"
            >
            <p
                class="title-small text-white opacity-75 mb-0"
                data-swiper-parallax="-100"
            >
                Eye Catching
            </p>
            <h2
                class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white"
                data-swiper-parallax="100"
            >
                <span class="text-outline-light">Gaming</span> Monitors
            </h2>
            <div data-swiper-parallax-y="-25">
                <a href="{{ route('product.index',['category' => 'monitor']) }}" class="btn btn-psuedo text-white" role="button"
                >Browse Monitors</a
                >
            </div>
            </div>
        </div>
        <!--/Slide-->
        </div>

        <div class="swiper-pagination swiper-pagination-bullet-light"></div>
    </div>
    <!-- / Swiper Info-->
    </section>
    <!--/ Top Banner-->

    <!-- Featured Brands-->
    <div class="brand-section container-fluid" data-aos="fade-in">
    <div class="bg-overlay-sides-white-to-transparent bg-dark py-5 py-md-7">
        <section class="marquee marquee-hover-pause">
        <div class="marquee-body">
            <div class="marquee-section animation-marquee-50">
            <div class="mx-3 mx-lg-5 f-w-24">
                <a class="d-block" href="#">
                <picture>
                    <img
                    class="img-fluid d-table mx-auto"
                    style="
                        -webkit-filter: invert(100%);
                        filter: invert(100%);
                    "
                    src="{{ asset('assets/images/logos/logo-1.svg') }}"
                    alt=""
                    />
                </picture>
                </a>
            </div>
            <div class="mx-3 mx-lg-5 f-w-24">
                <a class="d-block" href="#">
                <picture>
                    <img
                    class="img-fluid d-table mx-auto"
                    style="
                        -webkit-filter: invert(100%);
                        filter: invert(100%);
                    "
                    src="{{ asset('assets/images/logos/logo-2.svg') }}"
                    alt=""
                    />
                </picture>
                </a>
            </div>
            <div class="mx-3 mx-lg-5 f-w-24">
                <a class="d-block" href="#">
                <picture>
                    <img
                    class="img-fluid d-table mx-auto"
                    style="
                        -webkit-filter: invert(100%);
                        filter: invert(100%);
                    "
                    src="{{ asset('assets/images/logos/logo-3.svg') }}"
                    alt=""
                    />
                </picture>
                </a>
            </div>
            <div class="mx-3 mx-lg-5 f-w-24">
                <a class="d-block" href="#">
                <picture>
                    <img
                    class="img-fluid d-table mx-auto"
                    style="
                        -webkit-filter: invert(100%);
                        filter: invert(100%);
                    "
                    src="{{ asset('assets/images/logos/logo-4.svg') }}"
                    alt=""
                    />
                </picture>
                </a>
            </div>
            <div class="mx-3 mx-lg-5 f-w-24">
                <a class="d-block" href="#">
                <picture>
                    <img
                    class="img-fluid d-table mx-auto"
                    style="
                        -webkit-filter: invert(100%);
                        filter: invert(100%);
                    "
                    src="{{ asset('assets/images/logos/logo-5.svg') }}"
                    alt=""
                    />
                </picture>
                </a>
            </div>
            <div class="mx-3 mx-lg-5 f-w-24">
                <a class="d-block" href="#">
                <picture>
                    <img
                    class="img-fluid d-table mx-auto"
                    style="
                        -webkit-filter: invert(100%);
                        filter: invert(100%);
                    "
                    src="{{ asset('assets/images/logos/logo-6.svg') }}"
                    alt=""
                    />
                </picture>
                </a>
            </div>
            <div class="mx-3 mx-lg-5 f-w-20">
                <a class="d-block" href="#">
                <picture>
                    <img
                    class="img-fluid d-table mx-auto"
                    style="
                        -webkit-filter: invert(100%);
                        filter: invert(100%);
                    "
                    src="{{ asset('assets/images/logos/logo-7.svg') }}"
                    alt=""
                    />
                </picture>
                </a>
            </div>
            <div class="mx-3 mx-lg-5 f-w-16">
                <a class="d-block" href="#">
                <picture>
                    <img
                    class="img-fluid d-table mx-auto"
                    style="
                        -webkit-filter: invert(100%);
                        filter: invert(100%);
                    "
                    src="{{ asset('assets/images/logos/logo-8.svg') }}"
                    alt=""
                    />
                </picture>
                </a>
            </div>
            <div class="mx-3 mx-lg-5 f-w-24">
                <a class="d-block" href="#">
                <picture>
                    <img
                    class="img-fluid d-table mx-auto"
                    style="
                        -webkit-filter: invert(100%);
                        filter: invert(100%);
                    "
                    src="{{ asset('assets/images/logos/logo-9.svg') }}"
                    alt=""
                    />
                </picture>
                </a>
            </div>
            </div>
            <div class="marquee-section animation-marquee-50">
            <div class="mx-5 f-w-24">
                <a class="d-block" href="#">
                <picture>
                    <img
                    class="img-fluid d-table mx-auto"
                    style="-webkit-filter: invert(100%)"
                    src="{{ asset('assets/images/logos/logo-1.svg') }}"
                    alt=""
                    />
                </picture>
                </a>
            </div>
            <div class="mx-5 f-w-24">
                <a class="d-block" href="#">
                <picture>
                    <img
                    class="img-fluid d-table mx-auto"
                    style="
                        -webkit-filter: invert(100%);
                        filter: invert(100%);
                    "
                    src="{{ asset('assets/images/logos/logo-2.svg') }}"
                    alt=""
                    />
                </picture>
                </a>
            </div>
            <div class="mx-5 f-w-24">
                <a class="d-block" href="#">
                <picture>
                    <img
                    class="img-fluid d-table mx-auto"
                    style="
                        -webkit-filter: invert(100%);
                        filter: invert(100%);
                    "
                    src="{{ asset('assets/images/logos/logo-3.svg') }}"
                    alt=""
                    />
                </picture>
                </a>
            </div>
            <div class="mx-5 f-w-24">
                <a class="d-block" href="#">
                <picture>
                    <img
                    class="img-fluid d-table mx-auto"
                    style="
                        -webkit-filter: invert(100%);
                        filter: invert(100%);
                    "
                    src="{{ asset('assets/images/logos/logo-4.svg') }}"
                    alt=""
                    />
                </picture>
                </a>
            </div>
            <div class="mx-5 f-w-24">
                <a class="d-block" href="#">
                <picture>
                    <img
                    class="img-fluid d-table mx-auto"
                    style="
                        -webkit-filter: invert(100%);
                        filter: invert(100%);
                    "
                    src="{{ asset('assets/images/logos/logo-5.svg') }}"
                    alt=""
                    />
                </picture>
                </a>
            </div>
            <div class="mx-5 f-w-24">
                <a class="d-block" href="#">
                <picture>
                    <img
                    class="img-fluid d-table mx-auto"
                    style="
                        -webkit-filter: invert(100%);
                        filter: invert(100%);
                    "
                    src="{{ asset('assets/images/logos/logo-6.svg') }}"
                    alt=""
                    />
                </picture>
                </a>
            </div>
            <div class="mx-5 f-w-24">
                <a class="d-block" href="#">
                <picture>
                    <img
                    class="img-fluid d-table mx-auto"
                    style="
                        -webkit-filter: invert(100%);
                        filter: invert(100%);
                    "
                    src="{{ asset('assets/images/logos/logo-7.svg') }}"
                    alt=""
                    />
                </picture>
                </a>
            </div>
            <div class="mx-5 f-w-24">
                <a class="d-block" href="#">
                <picture>
                    <img
                    class="img-fluid d-table mx-auto"
                    style="
                        -webkit-filter: invert(100%);
                        filter: invert(100%);
                    "
                    src="{{ asset('assets/images/logos/logo-8.svg') }}"
                    alt=""
                    />
                </picture>
                </a>
            </div>
            <div class="mx-5 f-w-24">
                <a class="d-block" href="#">
                <picture>
                    <img
                    class="img-fluid d-table mx-auto"
                    style="
                        -webkit-filter: invert(100%);
                        filter: invert(100%);
                    "
                    src="{{ asset('assets/images/logos/logo-9.svg') }}"
                    alt=""
                    />
                </picture>
                </a>
            </div>
            </div>
        </div>
        </section>
    </div>
    </div>
    <!--/ Featured Brands-->

    <div class="container-fluid">
    <!-- Featured Categories -->
        <div class="m-0">
                <!-- Swiper Latest -->
                <div class="swiper-container overflow-hidden overflow-lg-visible"
                    data-swiper
                    data-options='{
                    "spaceBetween": 25,
                    "slidesPerView": 1,
                    "observer": true,
                    "observeParents": true,
                    "breakpoints": {
                        "540": {
                        "slidesPerView": 1,
                        "spaceBetween": 0
                        },
                        "770": {
                        "slidesPerView": 2
                        },
                        "1024": {
                        "slidesPerView": 3
                        },
                        "1200": {
                        "slidesPerView": 4
                        },
                        "1500": {
                        "slidesPerView": 5
                        }
                    },
                    "navigation": {
                        "nextEl": ".swiper-next",
                        "prevEl": ".swiper-prev"
                    }
                    }'>
                    <div class="swiper-wrapper">
                        @forelse ($products as $product => $prod)
                        <div class="swiper-slide align-self-stretch bg-transparent h-auto">
                            <div class="me-xl-n4 me-xxl-n5" data-aos="fade-up" data-aos-delay="000">
                                <picture class="d-block mb-4 img-clip-shape-one">
                                    <img class="w-100" title="" src="{{ asset('assets/images/products/'.$prod->product_catalog_images_name) }}" alt=" ">
                                </picture>
                                <p class="title-small mb-2 text-muted">{{ $prod->brand->product_brand_name }}</p>
                                <h4 class="lead fw-bold text-white">{{ $prod->product_name_short }}</h4>
                                <a href="{{ route('product.show', $prod->product_id) }}" class="btn btn-psuedo align-self-start text-muted">Shop Now</a>
                            </div>
                        </div>
                        @empty

                        @endforelse
                    </div>

                    <div class="swiper-btn swiper-prev swiper-disabled-hide swiper-btn-side btn-icon bg-white text-dark ms-3 shadow mt-n5"><i class="ri-arrow-left-s-line "></i></div>
                    <div class="swiper-btn swiper-next swiper-disabled-hide swiper-btn-side swiper-btn-side-right btn-icon bg-white text-dark me-3 shadow mt-n5"><i class="ri-arrow-right-s-line ri-lg"></i></div>

                </div>

            <svg width="0" height="0">
                <defs>
                <clipPath id="svg-slanted-one" clipPathUnits="objectBoundingBox">
                    <path d="M0.822,1 H0.016 a0.015,0.015,0,0,1,-0.016,-0.015 L0.158,0.015 A0.016,0.015,0,0,1,0.173,0 L0.984,0 a0.016,0.015,0,0,1,0.016,0.015 L0.837,0.985 A0.016,0.015,0,0,1,0.822,1"></path>
                </clipPath>
                </defs>
            </svg>            </div>
        <!-- /Featured Categories-->

    <!-- Homepage Intro-->
    <div class="position-relative row my-lg-7 pt-5 pt-lg-0 g-8">
        <div class="bg-text bottom-0 start-0 end-0" data-aos="fade-up">
        <h2 class="bg-text-title opacity-10 text-light">
            <span class="text-outline-light">KBDmy</span> Co.
        </h2>
        </div>
        <div
        class="col-12 col-md-6 position-relative z-index-20 mb-7 mb-lg-0"
        data-aos="fade-right"
        >
        <p class="text-light title-small">Welcome</p>
        <h3 class="display-3 fw-bold mb-5 text-light">
            <span class="text-outline-light">KBDmy Co.</span> - computer
            peripherals specialists
        </h3>
        <p class="lead text-muted">
            We are KBDmy Co., a leading supplier of global PC peripherals,
            including names such as
            <a href="#" class="text-white-50 text-white-hover">Corsair</a>,
            <a href="#" class="text-white-50 text-white-hover">Logitech</a>,
            <a href="#" class="text-white-50 text-white-hover">SteelSeries</a
            >, <a href="#" class="text-white-50 text-white-hover">ROG</a> and
            many more.
        </p>
        <p class="lead text-muted">
            With Malaysia-wide shipping and unbeatable prices - now's a great time
            to pick out something from our range.
        </p>
        <a href="{{ route('product.index') }}" class="btn btn-psuedo text-white" role="button"
            >Shop All Product</a
        >
        </div>
        <div
        class="col-12 col-md-6 position-relative z-index-20 pe-0"
        data-aos="fade-left"
        >
        <picture
            class="w-50 d-block position-relative z-index-10 border border-white border-4 shadow-lg"
        >
            <img
            class="img-fluid"
            src="{{ asset('assets/images/banners/banner-5.jpg') }}"
            alt=" "
            />
        </picture>
        <picture
            class="w-60 d-block me-8 mt-n10 shadow-lg border border-white border-4 position-relative z-index-20 ms-auto"
        >
            <img
            class="img-fluid"
            src="{{ asset('assets/images/banners/banner-6.jpg') }}"
            alt=" "
            />
        </picture>
        <picture
            class="w-50 d-block me-8 mt-n7 shadow-lg border border-white border-4 position-absolute top-0 end-0 z-index-0"
        >
            <img
            class="img-fluid"
            src="{{ asset('assets/images/banners/banner-7.jpg') }}"
            alt=" "
            />
        </picture>
        </div>
    </div>
    <!-- / Homepage Intro-->

    <!-- Homepage Banners-->
    {{--  <div class="pt-7 mb-5 mb-lg-10">
        <div class="row g-4">
        <div
            class="col-12 col-xl-6 position-relative"
            data-aos="fade-right"
        >
            <picture class="position-relative z-index-10">
            <img
                class="w-100 rounded"
                src="{{ asset('assets/images/banners/banner-sale.jpg') }}"
                alt=" "
            />
            </picture>
            <div
            class="position-absolute top-0 bottom-0 start-0 end-0 d-flex justify-content-center align-items-center z-index-20"
            >
            <div class="py-6 px-5 px-lg-10 text-center w-100">
                <h2 class="display-1 mb-3 fw-bold text-white">
                <span class="text-outline-light">Flash</span> Sale
                </h2>
                <p class="fs-5 fw-light text-white d-none d-md-block">
                Our yearly flash sale is now on! Grab yourself a bargain
                from the world's leading streetwear brands.
                </p>
                <a href="#" class="btn btn-psuedo text-white" role="button"
                >Shop All Sale Items</a
                >
            </div>
            </div>
        </div>
        <div class="col-12 col-xl-6" data-aos="fade-left">
            <div class="row g-4 justify-content-end">
            <div class="col-12 col-md-6 d-flex">
                <div class="card position-relative overflow-hidden bg-dark">
                <picture
                    class="position-relative z-index-10 d-block bg-dark h-100 w-100"
                >
                    <img
                    class="w-100 h-100 rounded"
                    style="object-fit: cover"
                    src="{{ asset('assets/images/banners/banner-1.jpg') }}"
                    alt=" "
                    />
                </picture>
                <div class="card-overlay">
                    <p class="lead fw-bolder mb-2">Keychron K2</p>
                    <a
                    href="#"
                    class="btn btn-psuedo text-white py-2"
                    role="button"
                    >Shop Keyboard</a
                    >
                </div>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex">
                <div class="card position-relative overflow-hidden bg-dark">
                <picture
                    class="position-relative z-index-10 d-block bg-dark h-100 w-100"
                >
                    <img
                    class="w-100 h-100 rounded"
                    style="object-fit: cover"
                    src="{{ asset('assets/images/banners/banner-2.jpg') }}"
                    alt=" "
                    />
                </picture>
                <div class="card-overlay">
                    <p class="lead fw-bolder mb-2">Switches</p>
                    <a
                    href="#"
                    class="btn btn-psuedo text-white py-2"
                    role="button"
                    >Shop Switches</a
                    >
                </div>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex">
                <div class="card position-relative overflow-hidden bg-dark">
                <picture
                    class="position-relative z-index-10 d-block bg-dark h-100 w-100"
                >
                    <img
                    class="w-100 h-100 rounded"
                    style="object-fit: cover"
                    src="{{ asset('assets/images/banners/banner-3.jpg') }}"
                    alt=" "
                    />
                </picture>
                <div class="card-overlay">
                    <p class="lead fw-bolder mb-2">ROG Pugio II</p>
                    <a
                    href="#"
                    class="btn btn-psuedo text-white py-2"
                    role="button"
                    >Shop Mouse</a
                    >
                </div>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex">
                <div class="card position-relative overflow-hidden bg-dark">
                <picture
                    class="position-relative z-index-10 d-block bg-dark h-100 w-100"
                >
                    <img
                    class="w-100 h-100 rounded"
                    style="object-fit: cover"
                    src="{{ asset('assets/images/banners/banner-4.jpg') }}"
                    alt=" "
                    />
                </picture>
                <div class="card-overlay">
                    <p class="lead fw-bolder mb-2">MSI MPG Artymis</p>
                    <a
                    href="{{ route('product.index',['category' => 'monitor']) }}"
                    class="btn btn-psuedo text-white py-2"
                    role="button"
                    >Shop Monitor</a
                    >
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div> --}}
    <!-- / Homepage Banners-->
    </div>

    <!-- /Page Content -->
</section>
<!-- / Main Section-->
@endsection
