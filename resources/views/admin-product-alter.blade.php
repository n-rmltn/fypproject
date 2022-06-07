@extends('layouts.app-admin')
@section('title') Admin - Product Alter @endsection
@section('content')

<main id="main">

        <!-- Breadcrumbs-->
        <div class="bg-white border-bottom py-3 mb-5">
          <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin-product') }}">Product Listing</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{ $product->product_name_short }}</li>
              </ol>
          </nav>
          </div>
        </div>
        <!-- / Breadcrumbs-->

        <!-- Content-->
        <section class="container-fluid">

        <!-- Page Title -->
        <h2 class="fs-4 mb-3">Edit Product</h2>

        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="{{ route('admin-product-alter.alter', $product->product_id) }}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="row g-4">
                <div class="col-12 col-md-6">
                    <div class="card mb-4">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Product Details</h6>
                        </div>
                        <div class="card-body">
                                <div class="mb-3">
                                    <label for="add-lname" class="form-label">Long Product Name</label>
                                    <input class="form-control" id="add-lname" type="text" placeholder="Long product name" name="product_name_long" value="{{ $product->product_name_long }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="add-sname" class="form-label">Short Product Name</label>
                                    <input class="form-control mb-2" id="add-sname" type="text" placeholder="Short product name" name="product_name_short" value="{{ $product->product_name_short }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="add-brand" class="form-label">Brand</label>
                                    <select class="form-control" id="add-brand" name="product_brand" required>
                                        <option value="">Select Brand</option>
                                        <option value="Keychron" @if($product->brand->product_brand_name === 'Keychron') selected @endif>Keychron</option>
                                        <option value="Ducky" @if($product->brand->product_brand_name === 'Ducky') selected @endif>Ducky</option>
                                        <option value="Redragon" @if($product->brand->product_brand_name === 'Redragon') selected @endif>Redragon</option>
                                        <option value="Royal Kludge" @if($product->brand->product_brand_name === 'Royal Kludge') selected @endif>Royal Kludge</option>
                                        <option value="GMMK" @if($product->brand->product_brand_name === 'GMMK') selected @endif>GMMK</option>
                                        <option value="Leopold" @if($product->brand->product_brand_name === 'Leopold') selected @endif>Leopold</option>
                                        <option value="Corsair" @if($product->brand->product_brand_name === 'Corsair') selected @endif>Corsair</option>
                                        <option value="Coolermaster" @if($product->brand->product_brand_name === 'Coolermaster') selected @endif>Coolermaster</option>
                                        <option value="Razer" @if($product->brand->product_brand_name === 'Razer') selected @endif>Razer</option>
                                        <option value="Logitech" @if($product->brand->product_brand_name === 'Logitech') selected @endif>Logitech</option>
                                        <option value="HyperX" @if($product->brand->product_brand_name === 'HyperX') selected @endif>HyperX</option>
                                        <option value="SteelSeries" @if($product->brand->product_brand_name === 'SteelSeries') selected @endif>SteelSeries</option>
                                        <option value="ROG" @if($product->brand->product_brand_name === 'ROG') selected @endif>ROG</option>
                                        <option value="MSi" @if($product->brand->product_brand_name === 'MSi') selected @endif>MSi</option>
                                        <option value="Predator" @if($product->brand->product_brand_name === 'Predator') selected @endif>Predator</option>
                                    </select>
                                </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Prices</h6>
                        </div>
                        <div class="card-body">
                                <div class="mb-3">
                                    <label for="add-baseprice" class="form-label">Base Price</label>
                                    <input class="form-control" id="add-baseprice" type="text" placeholder="Base Price" name="product_base_price" required value="{{ $product->product_base_price }}">
                                </div>
                                <div class="mb-3">
                                    <label for="add-var" class="form-label">Number Of Option</label>
                                    <input class="form-control mb-2" id="number_option" type="number" min="0" max="2" step="1" placeholder="Amount" value="{{ count($product->option) }}" onchange="function_change()" name="num_option">
                                    <input id="option" name="option" hidden>
                                </div>
                        </div>
                    </div>

                    <div id="option_container">
                        @forelse ($product->option as $option => $value)
                        <div class="card mb-4">
                            <div class="card-header justify-content-between align-items-center d-flex">
                                <h6 class="card-title m-0">Option {{ $option+1 }}</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="add-opt" class="form-label">Option Amount</label>
                                    <input class="form-control mb-2" id="number_variation_{{ $option+1 }}" type="number" placeholder="Amount" min="2" max="5" step="1" onchange="function_change2({{ $option+1 }})" value="{{ count($value->list) }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="add-city" class="form-label">Options</label>
                                    <input class="form-control mb-1" id="option_name_{{ $option+1 }}" type="text" placeholder="option name" value="{{ $value->product_option_name }}" onchange="function_3()" required>
                                    <div id="variation_container_{{ $option+1 }}">
                                        @forelse ($value->list as $i => $list)
                                            <div class="input-group mb-1">
                                                <input type="text" class="form-control" id="var_name_{{ $option+1 }}_{{ $i+1 }}" placeholder="Variation name" aria-label="Var" value="{{ $list->product_option_list_name }}" onchange="function_3()" required>
                                                <span class="input-group-text">RM</span>
                                                <input type="text" class="form-control" id="var_price_{{ $option+1 }}_{{ $i+1 }}" placeholder="Price" aria-label="VarPrice" value="{{ $list->product_option_list_additional_price }}" onchange="function_3()" required>
                                            </div>
                                        @empty

                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty

                        @endforelse
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="card mb-4">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Product Description</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="add-desc" class="form-label">Description</label>
                                <textarea class="form-control" id="add-desc" rows="5" name="product_description" required>{{ $product->product_description }}</textarea>
                            </div>
                                <div class="mb-3">
                                    <label for="add-category" class="form-label">Category</label>
                                    <select class="form-control" id="add-category" name="product_categories" required>
                                        <option value="">Select Category</option>
                                        <option value="keyboard" @if($product->product_categories === 'keyboard') selected @endif>Keyboard</option>
                                        <option value="mouse" @if($product->product_categories === 'mouse') selected @endif>Mouse</option>
                                        <option value="monitor" @if($product->product_categories === 'monitor') selected @endif>Monitor</option>
                                        <option value="switches" @if($product->product_categories === 'switches') selected @endif>Switches</option>
                                        <option value="other" @if($product->product_categories === 'other') selected @endif>Accesories</option>
                                    </select>
                                </div>
                                <div class="mb-3 visually-hidden">
                                    <label for="add-opt" class="form-label">Detail Amount</label>
                                    <input class="form-control mb-2" id="add-opt" type="number" placeholder="Amount">
                                </div>
                                <div class="mb-3">
                                    <label for="add-city" class="form-label">Details</label>
                                    <div class="input-group mb-1">
                                        <input type="hidden" name="detail_id_1" value="{{ $product->details[0]->id }}">
                                        <input type="text" class="form-control" placeholder="Detail name" aria-label="Var" name="detail_name_1" required value="@if (count($product->details) >0){{ $product->details[0]->product_details_header }}@endif">
                                        <span class="input-group-text">-</span>
                                        <input type="text" class="form-control" placeholder="Description" aria-label="VarPrice" name="detail_desc_1" required value="@if (count($product->details) >0){{ $product->details[0]->product_details_content }}@endif">
                                    </div>
                                    <div class="input-group mb-1">
                                        <input type="hidden" name="detail_id_2" value="{{ $product->details[1]->id }}">
                                        <input type="text" class="form-control" placeholder="Detail name" aria-label="Var" name="detail_name_2" required value="@if (count($product->details) >0){{ $product->details[1]->product_details_header }}@endif">
                                        <span class="input-group-text">-</span>
                                        <input type="text" class="form-control" placeholder="Description" aria-label="VarPrice" name="detail_desc_2" required value="@if (count($product->details) >0){{ $product->details[1]->product_details_content }}@endif">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="add-stripekey" class="form-label">Stripe Key</label>
                                    <input class="form-control" id="add-stripekey" type="text" placeholder="Stripe Key" value="{{ $product->product_stripe_id }}" name="stripe_id">
                                </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Product Thumbnail</h6>
                        </div>
                        <div class="card-body">
                        @if ($product->product_cart_images_name !== null)
                        <img src="{{ asset('assets/images/products/'.$product->product_cart_images_name) }}"
                            class="card-img-top" alt="Cart Images">
                        </div>
                        @endif
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="add-thumbnail" class="form-label">Product image</label>
                                <input class="form-control" type="file" id="add-thumbnail" name="cart_img">
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Product Catalog Thumbnail</h6>
                        </div>
                        <div class="card-body">
                        @if ($product->product_catalog_images_name !== null)
                        <img src="{{ asset('assets/images/products/'.$product->product_catalog_images_name) }}"
                            class="card-img-top" alt="Cart Images">
                        </div>
                        @endif
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="add-thumbnail" class="form-label">Product Catalog image</label>
                                <input class="form-control" type="file" id="add-Catalog-thumbnail" name="catalog_img">
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Product Images</h6>
                        </div>
                        @forelse ($product->images as $images)
                        <div class="card-body">
                            <img src="{{ asset('assets/images/products/'.$images->product_images_name) }}"
                                class="card-img-top" alt="Product Images">
                            <form action="{{ route('admin-product-del-image.del', $images->id) }}" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <button type="submit" class="btn btn-danger mb-1">Delete Image</button>
                            </form>
                        </div>
                        @empty

                        @endforelse
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="add-image" class="form-label">Product image(s)</label>
                                <input class="form-control" type="file" id="add-image" multiple name="prod_img[]">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Save Product</button>
                </div>
            </div>
        </form>

            <!-- Footer -->
            <footer class="  footer">
                <p class="small text-muted m-0">All rights reserved | © Norm 2021</p>
            </footer>


            <!-- Sidebar Menu Overlay-->
            <div class="menu-overlay-bg"></div>
            <!-- / Sidebar Menu Overlay-->
            <!-- / Footer-->

        </section>
        <!-- / Content-->

    </main>

    @endsection


    @section('script')
    <script>
        function function_change () {
            function_1();
            function_3();
        }
        function function_change2 (val) {
            function_2(val);
            function_3();
        }

        function function_1 () {
            var val = $('#number_option').val(),
                ele = document.getElementById('option_container');
            //console.log("option",val);
            ele.innerHTML = "";

            for(var i = 0; i < parseInt(val); i++) {
                ele.innerHTML = ele.innerHTML + '<div class="card mb-4">\
                            <div class="card-header justify-content-between align-items-center d-flex">\
                                <h6 class="card-title m-0">Option '+ (i+1) +'</h6>\
                            </div>\
                            <div class="card-body">\
                                <div class="mb-3">\
                                    <label for="add-opt" class="form-label">Option Amount</label>\
                                    <input class="form-control mb-2" id="number_variation_'+ (i+1) +'" type="number" placeholder="Amount" min="2" max="5" step="1" onchange="function_change2('+ (i+1) +')" value="2" required>\
                                </div>\
                                <div class="mb-3">\
                                    <label for="add-city" class="form-label">Options</label>\
                                    <input class="form-control mb-1" id="option_name_'+ (i+1) +'" type="text" placeholder="option name" onchange="function_3()" required>\
                                    <div id="variation_container_'+ (i+1) +'">\
                                    </div>\
                                </div>\
                            </div>\
                        </div>';
                function_2(i+1);
            }
        }
        function function_2 (no) {
            var val = $('#number_variation_'+no).val(),
                ele = document.getElementById('variation_container_'+no);
            //console.log("variation",val);
            ele.innerHTML = "";

            for(var i = 0; i < parseInt(val); i++) {
                ele.innerHTML = ele.innerHTML + '<div class="input-group mb-1">\
                                        <input type="text" class="form-control" id="var_name_'+ no +'_'+ (i+1) +'" placeholder="Variation name" aria-label="Var" onchange="function_3()" required>\
                                        <span class="input-group-text">RM</span>\
                                        <input type="text" class="form-control" id="var_price_'+ no +'_'+ (i+1) +'" placeholder="Price" aria-label="VarPrice" onchange="function_3()" required>\
                                    </div>';
            }
        }
        function function_3 () {
            var val = $('#number_option').val(),
                option_element = document.getElementById('option');

            const arr = [];
            for (var i = 0; i < parseInt(val); i++) {
                var option_name = $('#option_name_'+(i+1)).val(),
                    var_num = $('#number_variation_'+(i+1)).val();
                let obj_1 = {};

                    const arr_2 = [];
                    for (var b = 0; b < parseInt(var_num); b++) {
                        let obj_2 = {};
                        var var_name = $('#var_name_'+(i+1)+'_'+(b+1)).val(),
                            var_price = $('#var_price_'+(i+1)+'_'+(b+1)).val();
                        //console.log('#var_name_'+(i+1)+'_'+(b+1),var_name);
                        obj_2.var_name = var_name;
                        obj_2.var_price = var_price;
                        arr_2.push(obj_2);
                    }
                    //console.log('array_2',arr_2);
                obj_1.option_name = option_name;
                obj_1.variation = arr_2;
                arr.push(obj_1);

                //console.log(option_name);
            }
            //console.log(arr);
            const myJSON = JSON.stringify(arr);
            console.log(myJSON);
            option_element.value = myJSON;
        }
    </script>
    @endsection
