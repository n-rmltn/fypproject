<!-- Navbar -->
<nav
class="navbar navbar-expand-lg navbar-dark bg-dark flex-column border-0"
>
<div class="container-fluid">
<div class="w-100">
    <div
    class="d-flex justify-content-between align-items-center flex-wrap"
    >
    <!-- Logo-->
    <a
        class="navbar-brand fw-bold fs-3 m-0 p-0 flex-shrink-0 order-0"
        href="{{ route('welcome') }}"
    >
        <div class="d-flex align-items-center">
        <svg
            class="f-w-7"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 77.53 72.26"
        >
            <path
            d="M10.43,54.2h0L0,36.13,10.43,18.06,20.86,0H41.72L10.43,54.2Zm67.1-7.83L73,54.2,68.49,62,45,48.47,31.29,72.26H20.86l-5.22-9L52.15,0H62.58l5.21,9L54.06,32.82,77.53,46.37Z"
            fill="currentColor"
            fill-rule="evenodd"
            />
        </svg>
        </div>
    </a>
    <!-- / Logo-->

    <!-- Navbar Icons-->
    <ul
        class="list-unstyled mb-0 d-flex align-items-center order-1 order-lg-2 nav-sidelinks"
    >
        <!-- Mobile Nav Toggler-->
        <li class="d-lg-none">
        <span
            class="nav-link text-light d-flex align-items-center cursor-pointer"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation"
            ><i class="ri-menu-line ri-lg me-1"></i> Menu</span
        >
        </li>
        <!-- /Mobile Nav Toggler-->

        <!-- Navbar Search-->
        <li class="d-none d-sm-block">
        <span class="nav-link text-light search-trigger cursor-pointer"
            >Search</span
        >

        <!-- Search navbar overlay-->
        <div class="navbar-search d-none">
            <div class="input-group mb-3 h-100">
            <span class="input-group-text px-4 bg-transparent border-0"
                ><i class="ri-search-line ri-lg"></i
            ></span>
            <input
                type="text"
                class="form-control text-dark bg-transparent border-0"
                placeholder="Enter your search terms..."
                onkeyup="getSearch(this.value)"
                id="search"
            />
            <span
                class="input-group-text px-4 cursor-pointer disable-child-pointer close-search bg-transparent border-0"
                ><i class="ri-close-circle-line ri-lg"></i
            ></span>
            </div>
        </div>
        <div class="search-overlay">
            <div class="overlay_bg"></div>
            <div class="search_result row g-4">
            <!-- ajax search result -->
            </div>
        </div>
        <!-- / Search navbar overlay-->
        </li>
        <!-- /Navbar Search-->

        <!-- Navbar Login-->
        <li class="ms-1 d-none d-lg-inline-block">
        <a class="nav-link text-light" href="{{ route('login') }}"> Account </a>
        </li>
        <!-- /Navbar Login-->

        <!-- Navbar Cart Icon-->
        <li class="ms-1 d-inline-block position-relative dropdown-cart">
        <button
            class="nav-link me-0 disable-child-pointer border-0 p-0 bg-transparent text-light number-of-item"
            type="button"
        >
            Cart (@if (Cookie::get('shopping_cart') === null) 0 @else
                @php
                    echo count(json_decode(Cookie::get('shopping_cart'),true));
                @endphp
            @endif)
        </button>

        <form action="/payment" method="POST">
            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
            <div class="cart-dropdown dropdown-menu">
            <!-- Cart Header-->
            <div
            class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-4"
            >
                <h6 class="fw-bolder m-0 number-item">Cart Summary (0 item)</h6><!--to be updated-->
                <i
                    class="ri-close-circle-line text-light ri-lg cursor-pointer btn-close-cart"
                ></i>
            </div>
            <!-- / Cart Header-->
            <!-- Cart Items-->
            <!-- ajax cart -->
            <div class="ajax_cart"></div>
            <!-- ajax cart -->
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
                <p class="m-0 fs-5 fw-bold grand-total">$0.00</p>
                </div>
            </div>
            <a
                href="{{ route('cart.index') }}"
                class="btn btn-outline-dark w-100 text-center mt-4"
                role="button"
                >View Cart</a
            >
            </div>
            <!-- / Cart Summary-->
            <button
            class="btn btn-dark w-100 text-center mt-2"
            type="submit"
            id="checkout-button"
            >
            Proceed To Checkout
            </button>
            </div>
        </form>
        </li>
        <!-- /Navbar Cart Icon-->
    </ul>
    <!-- Navbar Icons-->

    <!-- Main Navigation-->
    <div
        class="flex-shrink-0 collapse navbar-collapse navbar-collapse-light w-auto flex-grow-1 order-2 order-lg-1"
        id="navbarNavDropdown"
    >
        <!-- Menu-->
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown dropdown position-static">
            <a
            class="nav-link dropdown-toggle"
            href="{{ route('product.index',['category' => 'keyboard']) }}"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            >
            Keyboard
            </a>
            <!-- Keyboard dropdown menu-->
            <div class="dropdown-menu dropdown-megamenu visually-hidden">
            <div class="container-fluid">
                <div class="row g-0 g-lg-3">
                <!-- Keyboard Dropdown Menu Links Section-->
                <div class="col col-lg-8 py-lg-5">
                    <div class="row py-3 py-lg-0 flex-wrap gx-4 gy-6">
                    <!-- menu row-->
                    <div class="col">
                        <h6 class="dropdown-heading">Prebuilt</h6>
                        <ul class="list-unstyled">
                        <li class="dropdown-list-item">
                            <a class="dropdown-item" href="{{ route('product.show','keyboard') }}"
                            >Full-size</a
                            >
                        </li>
                        <li class="dropdown-list-item">
                            <a class="dropdown-item" href="#"
                            >Tenkeyless / TKL / 80%</a
                            >
                        </li>
                        <li class="dropdown-list-item">
                            <a class="dropdown-item" href="#">75%</a>
                        </li>
                        <li class="dropdown-list-item">
                            <a class="dropdown-item" href="#">60%</a>
                        </li>
                        <li class="dropdown-list-item">
                            <a
                            class="dropdown-item dropdown-link-all"
                            href="#"
                            >View All</a
                            >
                        </li>
                        </ul>
                    </div>
                    <!-- / menu row-->

                    <!-- menu row-->
                    <div class="col">
                        <h6 class="dropdown-heading">Switches</h6>
                        <ul class="list-unstyled">
                        <li class="dropdown-list-item">
                            <a class="dropdown-item" href="#"
                            >Blue Switches</a
                            >
                        </li>
                        <li class="dropdown-list-item">
                            <a class="dropdown-item" href="#"
                            >Brown Switches</a
                            >
                        </li>
                        <li class="dropdown-list-item">
                            <a class="dropdown-item" href="#"
                            >Red Switches</a
                            >
                        </li>
                        <li class="dropdown-list-item">
                            <a
                            class="dropdown-item dropdown-link-all"
                            href="#"
                            >View All</a
                            >
                        </li>
                        </ul>
                    </div>
                    <!-- / menu row-->

                    <!-- menu row-->
                    <div class="d-none d-xxl-block col">
                        <h6 class="dropdown-heading">
                        Accessories & Misc.
                        </h6>
                        <ul class="list-unstyled">
                        <li class="dropdown-list-item">
                            <a class="dropdown-item" href="#"
                            >Wrists Rest</a
                            >
                        </li>
                        <li class="dropdown-list-item">
                            <a class="dropdown-item" href="#">Keycaps</a>
                        </li>
                        <li class="dropdown-list-item">
                            <a class="dropdown-item" href="#">Tools</a>
                        </li>
                        <li class="dropdown-list-item">
                            <a
                            class="dropdown-item dropdown-link-all"
                            href="#"
                            >View All</a
                            >
                        </li>
                        </ul>
                    </div>
                    <!-- / menu row-->
                    </div>

                    <div
                    class="align-items-center justify-content-between mt-5 d-none d-lg-flex"
                    >
                    <div class="me-5 f-w-40">
                        <a class="d-block" href="#">
                        <picture>
                            <img
                            class="img-fluid d-table mx-auto"
                            src="{{ asset('assets/images/logos/logo-1.svg') }}"
                            alt=""
                            />
                        </picture>
                        </a>
                    </div>
                    <div class="me-5 f-w-40">
                        <a class="d-block" href="#">
                        <picture>
                            <img
                            class="img-fluid d-table mx-auto"
                            src="{{ asset('assets/images/logos/logo-2.svg') }}"
                            alt=""
                            />
                        </picture>
                        </a>
                    </div>
                    <div class="me-5 f-w-40">
                        <a class="d-block" href="#">
                        <picture>
                            <img
                            class="img-fluid d-table mx-auto"
                            src="{{ asset('assets/images/logos/logo-3.svg') }}"
                            alt=""
                            />
                        </picture>
                        </a>
                    </div>
                    <div class="me-5 f-w-40">
                        <a class="d-block" href="#">
                        <picture>
                            <img
                            class="img-fluid d-table mx-auto"
                            src="{{ asset('assets/images/logos/logo-4.svg') }}"
                            alt=""
                            />
                        </picture>
                        </a>
                    </div>
                    <div class="me-5 f-w-40">
                        <a class="d-block" href="#">
                        <picture>
                            <img
                            class="img-fluid d-table mx-auto"
                            src="{{ asset('assets/images/logos/logo-5.svg') }}"
                            alt=""
                            />
                        </picture>
                        </a>
                    </div>
                    <div class="me-5 f-w-40">
                        <a class="d-block" href="#">
                        <picture>
                            <img
                            class="img-fluid d-table mx-auto"
                            src="{{ asset('assets/images/logos/logo-6.svg') }}"
                            alt=""
                            />
                        </picture>
                        </a>
                    </div>
                    </div>
                </div>
                <!-- /Keyboard Dropdown Menu Links Section-->

                <!-- Keyboard Dropdown Menu Images Section-->
                <div class="col-lg-4 d-none d-lg-block">
                    <div
                    class="vw-50 border-start h-100 position-absolute"
                    ></div>
                    <div
                    class="py-lg-5 position-relative z-index-10 px-lg-4"
                    >
                    <div class="row g-4">
                        <div class="col-12 col-md-6">
                        <div
                            class="card justify-content-center d-flex align-items-center bg-transparent"
                        >
                            <picture class="w-100 d-block mb-2 mx-auto">
                            <img
                                class="w-100 rounded"
                                title=""
                                src="{{ asset('assets/images/banners/banner-8.jpg') }}"
                                alt=" "
                            />
                            </picture>
                            <a class="fw-bolder link-cover" href="#"
                            >Prebuilt</a
                            >
                        </div>
                        </div>
                        <div class="col-12 col-md-6">
                        <div
                            class="card justify-content-center d-flex align-items-center bg-transparent"
                        >
                            <picture class="w-100 d-block mb-2 mx-auto">
                            <img
                                class="w-100 rounded"
                                title=""
                                src="{{ asset('assets/images/banners/banner-9.jpg') }}"
                                alt=" "
                            />
                            </picture>
                            <a class="fw-bolder link-cover" href="#"
                            >Switches</a
                            >
                        </div>
                        </div>
                        <div class="col-12 col-md-6 mx-auto">
                        <div
                            class="card justify-content-center d-flex align-items-center bg-transparent"
                        >
                            <picture class="w-100 d-block mb-2 mx-auto">
                            <img
                                class="w-100 rounded"
                                title=""
                                src="{{ asset('assets/images/banners/banner-10.jpg') }}"
                                alt=" "
                            />
                            </picture>
                            <a class="fw-bolder link-cover" href="#"
                            >Accessories</a
                            >
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Keyboard Dropdown Menu Images Section-->
                </div>
            </div>
            </div>
            <!-- / Keyboard dropdown menu-->
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('product.index',['category' => 'mouse']) }}" role="button">
            Mouse
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('product.index',['category' => 'monitor']) }}" role="button"> Monitor </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('product.index') }}" role="button"> All Products </a>
        </li>
        </ul>
        <!-- / Menu-->
    </div>
    <!-- / Main Navigation-->
    </div>
</div>
</div>
</nav>
<!-- / Navbar-->
