<main>

    <!-- Breadcrumb section start -->
    <section class="breadcrumb_sec_1 position-relative">
        <div class="breadcrumb_wrap sec_space_mid_small"
            style="background-image: url(./view/assets/images/breadcrumb/breadcrumb1.png);">
            <div class="breadcrumb_cont text-center">
                <div class="breadcrumb_title">
                    <h2 class="text-white">Shop List</h2>
                </div>
                <ul class="list-unstyled breadcrumb_item d-flex justify-content-center align-items-center text-white">
                    <li><a href="index.html"><i class="fas fa-home active"></i>Home</a></li>
                    <li><i class="fas fa-chevron-right"></i>About</li>
                    <li><i class="fas fa-chevron-right"></i>Dried</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->

    <!-- shop list section start -->
    <section class="shop_list_sec sec_space_small" data-aos="fade-up" data-aos-duration="2000">
        <div class="shop_list_wrap">
            <div class="container">
                <div class="filter_area d-flex justify-content-between align-items-center sec_space_xxs_40">
                    <ul class="nav layout_tab_nav ul_li" role="tablist">
                        <li>
                            <button class="active" data-bs-toggle="tab" data-bs-target="#grid_layout" type="button"
                                role="tab" aria-selected="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 12 12">
                                    <path id="grid" class="cls-1"
                                        d="M1784,905h2v2h-2v-2Zm5,0h2v2h-2v-2Zm5,0h2v2h-2v-2Zm-10,5h2v2h-2v-2Zm5,0h2v2h-2v-2Zm5,0h2v2h-2v-2Zm-10,5h2v2h-2v-2Zm5,0h2v2h-2v-2Zm5,0h2v2h-2v-2Z"
                                        transform="translate(-1784 -905)" />
                                </svg>
                            </button>
                        </li>
                        <li>
                            <button data-bs-toggle="tab" data-bs-target="#list_layout" type="button" role="tab"
                                aria-selected="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 12 12">
                                    <path id="list" class="cls-1"
                                        d="M1823,905h2v2h-2v-2Zm5,0h2v2h-2v-2Zm5,0h2v2h-2v-2Zm-10,5h2v2h-2v-2Zm5,0h2v2h-2v-2Zm5,0h2v2h-2v-2Zm-10,5h2v2h-2v-2Zm5,0h2v2h-2v-2Zm5,0h2v2h-2v-2Zm-5-10h7v2h-7v-2Zm0,5h7v2h-7v-2Zm0,5h7v2h-7v-2Z"
                                        transform="translate(-1823 -905)" />
                                </svg>
                            </button>
                        </li>
                        <span class="show_result">Showing 1–18 of 24 results</span>
                    </ul>
                    <form action="#">
                        <div class="sorting_from d-flex align-items-center">
                            <span class="sorting_from_title">Default Sorting:</span>
                            <div class=" clearfix">
                                <select>
                                    <option data-display="Select">Nothing</option>
                                    <option value="1" selected>Popularity</option>
                                    <option value="2">Organic</option>
                                    <option value="4">Fantastic</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="shop_product_list">
                    <div class="tab-content" id="pills-tabContent" data-aos="fade-up" data-aos-duration="2000">
                        <div class="tab-pane fade show active" id="grid_layout" role="tabpanel"
                            aria-labelledby="pills-grid_layout-tab">
                            <div class="row g-4">
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product_layout_1 overflow-hidden position-relative">
                                        <div class="product_layout_content bg-white position-relative">
                                            <div class="product_image_wrap">
                                                <a class="product_image d-flex justify-content-center align-items-center"
                                                    href="product-detail.html">
                                                    <img class="pic-1" src="./view/assets/images/product/product1.png"
                                                        alt="image_not_found">
                                                    <img class="pic-2" src="./view/assets/images/product/product3.png"
                                                        alt="image_not_found">
                                                </a>
                                                <ul class="product_badge_group ul_li_block">
                                                    <li><span
                                                            class="product_badge badge_meats position-absolute rounded-pill text-uppercase">Meats</span>
                                                    </li>
                                                    <li><span
                                                            class="product_badge badge_discount position-absolute rounded-pill">-27%</span>
                                                    </li>
                                                </ul>
                                                <ul class="product_action_btns ul_li_block d-flex">
                                                    <li>
                                                        <a class="tooltips" data-placement="top" title="Search Product"
                                                            href="#!">
                                                            <i class="fas fa-search"></i>
                                                        </a>
                                                    </li>
                                                    <li><a class="tooltips" data-placement="top" title="Add To Cart"
                                                            href="product-detail.html"><i
                                                                class="fas fa-shopping-bag"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="rating_wrap d-flex">
                                                <ul class="rating_star ul_li">
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul>
                                                <span class="shop_review_text">( 4.0 )</span>
                                            </div>
                                            <div class="product_content">
                                                <h3 class="product_title">
                                                    <a href="product-detail.html">Organic Cabbage</a>
                                                </h3>
                                                <div class="product_price">
                                                    <span class="sale_price pe-1">$50.00</span>
                                                    <del>$65.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product_layout_1 overflow-hidden position-relative">
                                        <div class="product_layout_content bg-white position-relative">
                                            <div class="product_image_wrap">
                                                <a class="product_image d-flex justify-content-center align-items-center"
                                                    href="product-detail.html">
                                                    <img class="pic-1" src="./view/assets/images/product/product2.png"
                                                        alt="image_not_found">
                                                    <img class="pic-2" src="./view/assets/images/product/product4.png"
                                                        alt="image_not_found">
                                                </a>
                                                <ul class="product_badge_group ul_li_block">
                                                    <li><span
                                                            class="product_badge badge_meats position-absolute rounded-pill text-uppercase">Meats</span>
                                                    </li>
                                                    <li><span
                                                            class="product_badge badge_discount position-absolute rounded-pill">-27%</span>
                                                    </li>
                                                </ul>
                                                <ul class="product_action_btns ul_li_block d-flex">
                                                    <li><a class="tooltips" data-placement="top" title="Search Product"
                                                            href="#!"><i class="fas fa-search"></i></a></li>
                                                    <li><a class="tooltips" data-placement="top" title="Add To Cart"
                                                            href="product-detail.html"><i
                                                                class="fas fa-shopping-bag"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="rating_wrap d-flex">
                                                <ul class="rating_star ul_li">
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul>
                                                <span class="shop_review_text">( 4.0 )</span>
                                            </div>
                                            <div class="product_content">
                                                <h3 class="product_title">
                                                    <a href="product-detail.html">Organic Cabbage</a>
                                                </h3>
                                                <div class="product_price">
                                                    <span class="sale_price pe-1">$50.00</span>
                                                    <del>$65.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product_layout_1 overflow-hidden position-relative">
                                        <div class="product_layout_content bg-white position-relative">
                                            <div class="product_image_wrap">
                                                <a class="product_image d-flex justify-content-center align-items-center"
                                                    href="product-detail.html">
                                                    <img class="pic-1" src="./view/assets/images/product/product3.png"
                                                        alt="image_not_found">
                                                    <img class="pic-2" src="./view/assets/images/product/product6.png"
                                                        alt="image_not_found">
                                                </a>
                                                <ul class="product_badge_group ul_li_block">
                                                    <li><span
                                                            class="product_badge badge_meats position-absolute rounded-pill text-uppercase">Meats</span>
                                                    </li>
                                                    <li><span
                                                            class="product_badge badge_discount position-absolute rounded-pill">-27%</span>
                                                    </li>
                                                </ul>
                                                <ul class="product_action_btns ul_li_block d-flex">
                                                    <li><a class="tooltips" data-placement="top" title="Search Product"
                                                            href="#!"><i class="fas fa-search"></i></a></li>
                                                    <li><a class="tooltips" data-placement="top" title="Add To Cart"
                                                            href="product-detail.html"><i
                                                                class="fas fa-shopping-bag"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="rating_wrap d-flex">
                                                <ul class="rating_star ul_li">
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul>
                                                <span class="shop_review_text">( 4.0 )</span>
                                            </div>
                                            <div class="product_content">
                                                <h3 class="product_title">
                                                    <a href="product-detail.html">Organic Cabbage</a>
                                                </h3>
                                                <div class="product_price">
                                                    <span class="sale_price pe-1">$50.00</span>
                                                    <del>$65.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product_layout_1 overflow-hidden position-relative">
                                        <div class="product_layout_content bg-white position-relative">
                                            <div class="product_image_wrap">
                                                <a class="product_image d-flex justify-content-center align-items-center"
                                                    href="product-detail.html">
                                                    <img class="pic-1" src="./view/assets/images/product/product4.png"
                                                        alt="image_not_found">
                                                    <img class="pic-2" src="./view/assets/images/product/product2.png"
                                                        alt="image_not_found">
                                                </a>
                                                <ul class="product_badge_group ul_li_block">
                                                    <li><span
                                                            class="product_badge badge_meats position-absolute rounded-pill text-uppercase">Meats</span>
                                                    </li>
                                                    <li><span
                                                            class="product_badge badge_discount position-absolute rounded-pill">-27%</span>
                                                    </li>
                                                </ul>
                                                <ul class="product_action_btns ul_li_block d-flex">
                                                    <li><a class="tooltips" data-placement="top" title="Search Product"
                                                            href="#!"><i class="fas fa-search"></i></a></li>
                                                    <li><a class="tooltips" data-placement="top" title="Add To Cart"
                                                            href="product-detail.html"><i
                                                                class="fas fa-shopping-bag"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="rating_wrap d-flex">
                                                <ul class="rating_star ul_li">
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul>
                                                <span class="shop_review_text">( 4.0 )</span>
                                            </div>
                                            <div class="product_content">
                                                <h3 class="product_title">
                                                    <a href="product-detail.html">Organic Cabbage</a>
                                                </h3>
                                                <div class="product_price">
                                                    <span class="sale_price pe-1">$50.00</span>
                                                    <del>$65.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product_layout_1 overflow-hidden position-relative">
                                        <div class="product_layout_content bg-white position-relative">
                                            <div class="product_image_wrap">
                                                <a class="product_image d-flex justify-content-center align-items-center"
                                                    href="product-detail.html">
                                                    <img class="pic-1" src="./view/assets/images/product/product5.png"
                                                        alt="image_not_found">
                                                    <img class="pic-2" src="./view/assets/images/product/product7.png"
                                                        alt="image_not_found">
                                                </a>
                                                <ul class="product_badge_group ul_li_block">
                                                    <li><span
                                                            class="product_badge badge_meats position-absolute rounded-pill text-uppercase">Meats</span>
                                                    </li>
                                                    <li><span
                                                            class="product_badge badge_discount position-absolute rounded-pill">-27%</span>
                                                    </li>
                                                </ul>
                                                <ul class="product_action_btns ul_li_block d-flex">
                                                    <li><a class="tooltips" data-placement="top" title="Search Product"
                                                            href="#!"><i class="fas fa-search"></i></a></li>
                                                    <li><a class="tooltips" data-placement="top" title="Add To Cart"
                                                            href="product-detail.html"><i
                                                                class="fas fa-shopping-bag"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="rating_wrap d-flex">
                                                <ul class="rating_star ul_li">
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul>
                                                <span class="shop_review_text">( 4.0 )</span>
                                            </div>
                                            <div class="product_content">
                                                <h3 class="product_title">
                                                    <a href="product-detail.html">Organic Cabbage</a>
                                                </h3>
                                                <div class="product_price">
                                                    <span class="sale_price pe-1">$50.00</span>
                                                    <del>$65.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product_layout_1 overflow-hidden position-relative">
                                        <div class="product_layout_content bg-white position-relative">
                                            <div class="product_image_wrap">
                                                <a class="product_image d-flex justify-content-center align-items-center"
                                                    href="product-detail.html">
                                                    <img class="pic-1" src="./view/assets/images/product/product6.png"
                                                        alt="image_not_found">
                                                    <img class="pic-2" src="./view/assets/images/product/product10.png"
                                                        alt="image_not_found">
                                                </a>
                                                <ul class="product_badge_group ul_li_block">
                                                    <li><span
                                                            class="product_badge badge_meats position-absolute rounded-pill text-uppercase">Meats</span>
                                                    </li>
                                                    <li><span
                                                            class="product_badge badge_discount position-absolute rounded-pill">-27%</span>
                                                    </li>
                                                </ul>
                                                <ul class="product_action_btns ul_li_block d-flex">
                                                    <li><a class="tooltips" data-placement="top" title="Search Product"
                                                            href="#!"><i class="fas fa-search"></i></a></li>
                                                    <li><a class="tooltips" data-placement="top" title="Add To Cart"
                                                            href="product-detail.html"><i
                                                                class="fas fa-shopping-bag"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="rating_wrap d-flex">
                                                <ul class="rating_star ul_li">
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul>
                                                <span class="shop_review_text">( 4.0 )</span>
                                            </div>
                                            <div class="product_content">
                                                <h3 class="product_title">
                                                    <a href="product-detail.html">Organic Cabbage</a>
                                                </h3>
                                                <div class="product_price">
                                                    <span class="sale_price pe-1">$50.00</span>
                                                    <del>$65.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product_layout_1 overflow-hidden position-relative">
                                        <div class="product_layout_content bg-white position-relative">
                                            <div class="product_image_wrap">
                                                <a class="product_image d-flex justify-content-center align-items-center"
                                                    href="product-detail.html">
                                                    <img class="pic-1" src="./view/assets/images/product/product7.png"
                                                        alt="image_not_found">
                                                    <img class="pic-2" src="./view/assets/images/product/product4.png"
                                                        alt="image_not_found">
                                                </a>
                                                <ul class="product_badge_group ul_li_block">
                                                    <li><span
                                                            class="product_badge badge_meats position-absolute rounded-pill text-uppercase">Meats</span>
                                                    </li>
                                                    <li><span
                                                            class="product_badge badge_discount position-absolute rounded-pill">-27%</span>
                                                    </li>
                                                </ul>
                                                <ul class="product_action_btns ul_li_block d-flex">
                                                    <li><a class="tooltips" data-placement="top" title="Search Product"
                                                            href="#!"><i class="fas fa-search"></i></a></li>
                                                    <li><a class="tooltips" data-placement="top" title="Add To Cart"
                                                            href="product-detail.html"><i
                                                                class="fas fa-shopping-bag"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="rating_wrap d-flex">
                                                <ul class="rating_star ul_li">
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul>
                                                <span class="shop_review_text">( 4.0 )</span>
                                            </div>
                                            <div class="product_content">
                                                <h3 class="product_title">
                                                    <a href="product-detail.html">Organic Cabbage</a>
                                                </h3>
                                                <div class="product_price">
                                                    <span class="sale_price pe-1">$50.00</span>
                                                    <del>$65.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product_layout_1 overflow-hidden position-relative">
                                        <div class="product_layout_content bg-white position-relative">
                                            <div class="product_image_wrap">
                                                <a class="product_image d-flex justify-content-center align-items-center"
                                                    href="product-detail.html">
                                                    <img class="pic-1" src="./view/assets/images/product/product8.png"
                                                        alt="image_not_found">
                                                    <img class="pic-2" src="./view/assets/images/product/product6.png"
                                                        alt="image_not_found">
                                                </a>
                                                <ul class="product_badge_group ul_li_block">
                                                    <li><span
                                                            class="product_badge badge_meats position-absolute rounded-pill text-uppercase">Meats</span>
                                                    </li>
                                                    <li><span
                                                            class="product_badge badge_discount position-absolute rounded-pill">-27%</span>
                                                    </li>
                                                </ul>
                                                <ul class="product_action_btns ul_li_block d-flex">
                                                    <li><a class="tooltips" data-placement="top" title="Search Product"
                                                            href="#!"><i class="fas fa-search"></i></a></li>
                                                    <li><a class="tooltips" data-placement="top" title="Add To Cart"
                                                            href="product-detail.html"><i
                                                                class="fas fa-shopping-bag"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="rating_wrap d-flex">
                                                <ul class="rating_star ul_li">
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul>
                                                <span class="shop_review_text">( 4.0 )</span>
                                            </div>
                                            <div class="product_content">
                                                <h3 class="product_title">
                                                    <a href="product-detail.html">Organic Cabbage</a>
                                                </h3>
                                                <div class="product_price">
                                                    <span class="sale_price pe-1">$50.00</span>
                                                    <del>$65.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="list_layout" role="tabpanel"
                            aria-labelledby="pills-list_layout-tab">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="offer_inner_content" data-aos="fade-right" data-aos-duration="1000">
                                        <div class="offer_item_content bg-white d-flex align-items-center">
                                            <div class="offer_item_img pe-4">
                                                <img src="./view/assets/images/offer/offer1.png" alt="offer1">
                                            </div>
                                            <div class="offer_item_text">
                                                <div class="offer_item_title">
                                                    <a href="product-detail.html">
                                                        <h3>Vegan Egg Replacer</h3>
                                                    </a>
                                                </div>
                                                <div class="offer_item_price">
                                                    <span>$80.00</span>
                                                    <del>$90.00</del>
                                                </div>
                                                <div class="offer_item_desc">
                                                    <p>Apparently we had reached a great height in the
                                                        atmosphere,</p>
                                                </div>
                                                <div class="offer_item_expr_btn mb-3">
                                                    <button type="button"
                                                        class="btn text-white rounded-pill text-uppercase"><i
                                                            class="far fa-clock pe-1"></i> Expires in : 06 : 25
                                                        :38</button>
                                                </div>
                                                <div class="offer_item_qty_prog_cnt d-flex align-items-center">
                                                    <div class="progress w-50 offer_item_qty_prog rounded-pill">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <div class="offer_item_qty_num ps-2">
                                                        <span>Sold: <font>62/100</font></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="offer_inner_content" data-aos="fade-left" data-aos-duration="1000">
                                        <div class="offer_item_content bg-white d-flex align-items-center">
                                            <div class="offer_item_img pe-4">
                                                <img src="./view/assets/images/offer/offer2.png" alt="offer2">
                                            </div>
                                            <div class="offer_item_text">
                                                <div class="offer_item_title">
                                                    <a href="product-detail.html">
                                                        <h3>Vegan Egg Replacer</h3>
                                                    </a>
                                                </div>
                                                <div class="offer_item_price">
                                                    <span>$80.00</span>
                                                    <del>$90.00</del>
                                                </div>
                                                <div class="offer_item_desc">
                                                    <p>Apparently we had reached a great height in the
                                                        atmosphere,</p>
                                                </div>
                                                <div class="offer_item_expr_btn mb-3">
                                                    <button type="button"
                                                        class="btn text-white rounded-pill text-uppercase"><i
                                                            class="far fa-clock pe-1"></i> Expires in : 06 : 25
                                                        :38</button>
                                                </div>
                                                <div class="offer_item_qty_prog_cnt d-flex align-items-center">
                                                    <div class="progress w-50 offer_item_qty_prog rounded-pill">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <div class="offer_item_qty_num ps-2">
                                                        <span>Sold: <font>62/100</font></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="offer_inner_content" data-aos="fade-right" data-aos-duration="2000">
                                        <div class="offer_item_content bg-white d-flex align-items-center">
                                            <div class="offer_item_img pe-4">
                                                <img src="./view/assets/images/offer/offer4.png" alt="offer4">
                                            </div>
                                            <div class="offer_item_text">
                                                <div class="offer_item_title">
                                                    <a href="product-detail.html">
                                                        <h3>Vegan Egg Replacer</h3>
                                                    </a>
                                                </div>
                                                <div class="offer_item_price">
                                                    <span>$80.00</span>
                                                    <del>$90.00</del>
                                                </div>
                                                <div class="offer_item_desc">
                                                    <p>Apparently we had reached a great height in the
                                                        atmosphere,</p>
                                                </div>
                                                <div class="offer_item_expr_btn mb-3">
                                                    <button type="button"
                                                        class="btn text-white rounded-pill text-uppercase"><i
                                                            class="far fa-clock pe-1"></i> Expires in : 06 : 25
                                                        :38</button>
                                                </div>
                                                <div class="offer_item_qty_prog_cnt d-flex align-items-center">
                                                    <div class="progress w-50 offer_item_qty_prog rounded-pill">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <div class="offer_item_qty_num ps-2">
                                                        <span>Sold: <font>62/100</font></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="offer_inner_content" data-aos="fade-left" data-aos-duration="2000">
                                        <div class="offer_item_content bg-white d-flex align-items-center">
                                            <div class="offer_item_img pe-4">
                                                <img src="./view/assets/images/offer/offer2.png" alt="offer2">
                                            </div>
                                            <div class="offer_item_text">
                                                <div class="offer_item_title">
                                                    <a href="product-detail.html">
                                                        <h3>Vegan Egg Replacer</h3>
                                                    </a>
                                                </div>
                                                <div class="offer_item_price">
                                                    <span>$80.00</span>
                                                    <del>$90.00</del>
                                                </div>
                                                <div class="offer_item_desc">
                                                    <p>Apparently we had reached a great height in the
                                                        atmosphere,</p>
                                                </div>
                                                <div class="offer_item_expr_btn mb-3">
                                                    <button type="button"
                                                        class="btn text-white rounded-pill text-uppercase"><i
                                                            class="far fa-clock pe-1"></i> Expires in : 06 : 25
                                                        :38</button>
                                                </div>
                                                <div class="offer_item_qty_prog_cnt d-flex align-items-center">
                                                    <div class="progress w-50 offer_item_qty_prog rounded-pill">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <div class="offer_item_qty_num ps-2">
                                                        <span>Sold: <font>62/100</font></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="pagination_nav mt-5 list-unstyled d-flex justify-content-center text-uppercase clearfix">
                    <li><a href="#!">1</a></li>
                    <li><a href="#!">2</a></li>
                    <li><a href="#!">3</a></li>
                    <li class="active"><a href="#!"><i class="fas fa-arrow-right"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- shop list section end -->

    <!-- shop testimonial section start -->
    <div class="shop_testimonial_sec sec_inner_bottom_100">
        <div class="shop_testimonial_wrap">
            <div class="container-sm">
                <div class="offer_top_content shop_testimonial_cont text-center">
                    <div class="offer_sub_title d-flex align-items-center justify-content-center pb-2">
                        <i class="far fa-circle"></i>
                        <i class="far fa-circle"></i>
                        <i class="far fa-circle"></i>
                        <span class="text-uppercase px-3">testimonial</span>
                        <i class="far fa-circle"></i>
                        <i class="far fa-circle"></i>
                        <i class="far fa-circle"></i>
                    </div>
                    <div class="offer_title pb-5">
                        <h2>What Our Customers Saying</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="shop_testimonial_text" data-aos="fade-right" data-aos-duration="2000">
                            <span class="qoute_icon"><i class="fas fa-quote-left"></i></span>
                            <p class="testimonial_desc py-3">”Quisquam est, qui dolorem ipsum quia dolor sit
                                consectetur adipisci velit sed quia non numqua
                                eius modi tempora incidunt ut labore et dolore
                                magnam aliquam quaerat voluptatem repudia
                                sint et molestiae”</p>
                            <ul class="rating_star ul_li my-3">
                                <li class="active"><i class="fas fa-star"></i></li>
                                <li class="active"><i class="fas fa-star"></i></li>
                                <li class="active"><i class="fas fa-star"></i></li>
                                <li class="active"><i class="fas fa-star"></i></li>
                                <li class="active"><i class="fas fa-star"></i></li>
                            </ul>
                            <h4 class="testimonial_author">Alina Parker <font>Ceo, GTD</font>
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="shop_testimonial_text" data-aos="fade-left" data-aos-duration="2000">
                            <span class="qoute_icon"><i class="fas fa-quote-left"></i></span>
                            <p class="testimonial_desc py-3">”Quisquam est, qui dolorem ipsum quia dolor sit
                                consectetur adipisci velit sed quia non numqua
                                eius modi tempora incidunt ut labore et dolore
                                magnam aliquam quaerat voluptatem repudia
                                sint et molestiae”</p>
                            <ul class="rating_star ul_li my-3">
                                <li class="active"><i class="fas fa-star"></i></li>
                                <li class="active"><i class="fas fa-star"></i></li>
                                <li class="active"><i class="fas fa-star"></i></li>
                                <li class="active"><i class="fas fa-star"></i></li>
                                <li class="active"><i class="fas fa-star"></i></li>
                            </ul>
                            <h4 class="testimonial_author">Kevin Andrew <font>Manager, Rex</font>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>