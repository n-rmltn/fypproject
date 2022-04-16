<?php $__env->startSection('title'); ?> Keychron K2 <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Main Section-->
<section class="mt-0">
    <!-- Page Content Goes Here -->

    <!-- Breadcrumbs-->
    <div class="bg-dark py-6">
    <div class="container-fluid">
        <nav class="m-0" aria-label="breadcrumb">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item breadcrumb-light">
            <a href="<?php echo e(route('welcome')); ?>">Home</a>
            </li>
            <li class="breadcrumb-item breadcrumb-light">
            <a href="<?php echo e(route('product.index')); ?>">All Product</a>
            </li>
            <li class="breadcrumb-item breadcrumb-light">
            <a href="<?php echo e(route('product.index',['category' => $product->product_categories])); ?>"><?php echo e($product->product_categories); ?></a>
            </li>
            <li
            class="breadcrumb-item breadcrumb-light active"
            aria-current="page"
            >
            <?php echo e($product->product_name_short); ?>

            </li>
        </ol>
        </nav>
    </div>
    </div>
    <!-- / Breadcrumbs-->

    <div class="container-fluid mt-5">
    <!-- Product Top Section-->
    <div class="row g-9" data-sticky-container>
        <!-- Product Images-->
        <div class="col-12 col-md-6 col-xl-7">
        <div class="row g-3" data-aos="fade-right">
            <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $images): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-12">
                    <picture>
                        <img
                        class="img-fluid"
                        data-zoomable
                        src="<?php echo e(asset('assets/images/products/'.$images->product_images_name)); ?>"
                        alt=" "
                        />
                    </picture>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        </div>
        <!-- /Product Images-->

        <!-- Product Information-->
        <div class="col-12 col-md-6 col-lg-5">
        <div class="sticky-top top-5">
            <div class="pb-3" data-aos="fade-in">
            <div class="d-flex align-items-center mb-3">
                <p
                class="small fw-bolder text-uppercase tracking-wider text-muted m-0 me-4"
                >
                <?php echo e($product->brand->product_brand_name); ?>

                </p>
                
            </div>

            <form action="<?php echo e(route('cart.store')); ?>" method="post">
            <h1 class="mb-1 fs-2 fw-bold">
                <?php echo e($product->product_name_long); ?>

            </h1>
            <div class="d-flex justify-content-between align-items-center">
                <p class="fs-4 m-0 product-base-price" data-baseprice="<?php echo e($product->product_base_price); ?>">RM<?php echo e($product->product_base_price); ?></p>
            </div>
            <?php $__empty_1 = true; $__currentLoopData = $product->option; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <!-- Backlight -->
                <div class="border-top mt-4 mb-3 product-option">
                    <small class="text-uppercase pt-4 d-block fw-bolder">
                    <span class="text-muted"><?php echo e($option->product_option_name); ?></span> :
                    <span
                        class="selected-option fw-bold"
                        data-pixr-product-option="<?php echo e($option->product_option_name); ?>"
                        data-addprice="0"
                        >Not Selected</span
                    >
                    </small>
                    <div
                    class="mt-4 d-flex justify-content-start flex-wrap align-items-start"
                    >
                    <?php $__empty_2 = true; $__currentLoopData = $option->list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                    <div class="form-check-option form-check-rounded">
                        <input
                        type="radio"
                        name="product-option-<?php echo e($option->product_option_name); ?>"
                        value="<?php echo e($list->product_option_list_name); ?>"
                        id="option-<?php echo e($option->product_option_name); ?>-<?php echo e($list->id); ?>"
                        data-price="<?php echo e($list->product_option_list_additional_price); ?>"
                        data-option="<?php echo e($option->product_option_name); ?>"
                        required/>
                        <label for="option-<?php echo e($option->product_option_name); ?>-<?php echo e($list->id); ?>">
                        <small><?php echo e($list->product_option_list_name); ?></small>
                        </label>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>

                    <?php endif; ?>
                    </div>
                </div>
                <!-- Backlight -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

            <?php endif; ?>
                <input type="hidden" name="product_id" value="<?php echo e($product->product_id); ?>"/>
                <input type="hidden" name="quantity" value="1"/>
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                <button
                    class="btn btn-dark w-100 mt-4 mb-0 hover-lift-sm hover-boxshadow"
                >
                    Add To Cart
                </button>
            </form>

            <!-- Product Highlights-->
            <div class="my-5">
                <div class="row">
                <div class="col-12 col-md-4">
                    <div class="text-center px-2">
                    <i class="ri-24-hours-line ri-2x"></i>
                    <small class="d-block mt-1">Next-day Delivery</small>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="text-center px-2">
                    <i class="ri-secure-payment-line ri-2x"></i>
                    <small class="d-block mt-1">Secure Checkout</small>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="text-center px-2">
                    <i class="ri-service-line ri-2x"></i>
                    <small class="d-block mt-1">Free Returns</small>
                    </div>
                </div>
                </div>
            </div>
            <!-- / Product Highlights-->

            <!-- Product Accordion -->
            <div class="accordion" id="accordionProduct">
                <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                    >
                    Product About
                    </button>
                </h2>
                <div
                    id="collapseOne"
                    class="accordion-collapse collapse show"
                    aria-labelledby="headingOne"
                    data-bs-parent="#accordionProduct"
                >
                    <div class="accordion-body">
                    <p class="m-0">
                        <?php echo e($product->product_description); ?>

                    </p>
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo"
                    >
                    Details
                    </button>
                </h2>
                <div
                    id="collapseTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingTwo"
                    data-bs-parent="#accordionProduct"
                >
                    <div class="accordion-body">
                    <ul class="list-group list-group-flush">
                        <?php $__currentLoopData = $product->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li
                            class="list-group-item d-flex border-0 row g-0 px-0"
                            >
                            <span class="col-4 fw-bolder"><?php echo e($details->product_details_header); ?></span>
                            <span class="col-7 offset-1"><?php echo e($details->product_details_content); ?></span>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseThree"
                    aria-expanded="false"
                    aria-controls="collapseThree"
                    >
                    Delivery & Returns
                    </button>
                </h2>
                <div
                    id="collapseThree"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingThree"
                    data-bs-parent="#accordionProduct"
                >
                    <div class="accordion-body">
                    <ul class="list-group list-group-flush">
                        <li
                        class="list-group-item d-flex border-0 row g-0 px-0"
                        >
                        <span class="col-4 fw-bolder">Delivery</span>
                        <span class="col-7 offset-1"
                            >Standard delivery free for orders over $99. Next
                            day delivery $9.99</span
                        >
                        </li>
                        <li
                        class="list-group-item d-flex border-0 row g-0 px-0"
                        >
                        <span class="col-4 fw-bolder">Returns</span>
                        <span class="col-7 offset-1"
                            >30 day return period. See our
                            <a class="text-link-border" href="#"
                            >terms & conditions.</a
                            ></span
                        >
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
            <!-- / Product Accordion-->
            </div>
        </div>
        </div>
        <!-- / Product Information-->
    </div>
    <!-- / Product Top Section-->

    <div class="row g-0">
        <!-- Related Products-->
        <div class="col-12" data-aos="fade-up">
        <h3 class="fs-4 fw-bolder mt-7 mb-4">You May Also Like</h3>
        <!-- Swiper Latest -->
        <div
            class="swiper-container"
            data-swiper
            data-options='{
                    "spaceBetween": 10,
                    "loop": true,
                    "autoplay": {
                        "delay": 5000,
                        "disableOnInteraction": false
                    },
                    "navigation": {
                        "nextEl": ".swiper-next",
                        "prevEl": ".swiper-prev"
                    },
                    "breakpoints": {
                        "600": {
                        "slidesPerView": 2
                        },
                        "1024": {
                        "slidesPerView": 3
                        },
                        "1400": {
                        "slidesPerView": 4
                        }
                    }
                    }'
        >
            <div class="swiper-wrapper">
            <div class="swiper-slide">
                <!-- Card Product-->
                <div
                class="card border border-transparent position-relative overflow-hidden h-100 transparent"
                >
                <div class="card-img position-relative">
                    <div class="card-badges">
                    <span class="badge badge-card"
                        ><span
                        class="f-w-2 f-h-2 bg-danger rounded-circle d-block me-1"
                        ></span>
                        Sale</span
                    >
                    </div>
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
                        src="<?php echo e(asset('assets/images/products/product-1.webp')); ?>"
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
                    href="./product"
                    >Keychron K2 Wireless</a
                    >
                    <small class="text-muted d-block"
                    >3 versions, 3 switches</small
                    >
                    <p class="mt-2 mb-0 small">
                    <s class="text-muted">$89.90</s>
                    <span class="text-danger">$69.00</span>
                    </p>
                </div>
                </div>
                <!--/ Card Product-->
            </div>
            </div>

            <!-- Add Arrows -->
            <div
            class="swiper-prev top-50 start-0 z-index-30 cursor-pointer transition-all bg-white px-3 py-4 position-absolute z-index-30 top-50 start-0 mt-n8 d-flex justify-content-center align-items-center opacity-50-hover"
            >
            <i class="ri-arrow-left-s-line ri-lg"></i>
            </div>
            <div
            class="swiper-next top-50 end-0 z-index-30 cursor-pointer transition-all bg-white px-3 py-4 position-absolute z-index-30 top-50 end-0 mt-n8 d-flex justify-content-center align-items-center opacity-50-hover"
            >
            <i class="ri-arrow-right-s-line ri-lg"></i>
            </div>
        </div>
        <!-- / Swiper Latest-->
        </div>
        <!-- / Related Products-->

    </div>
    </div>

    <!-- /Page Content -->
</section>
<!-- / Main Section-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\inetpub\laravel-kbdmy\resources\views/product.blade.php ENDPATH**/ ?>