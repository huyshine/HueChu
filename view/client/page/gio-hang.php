<main>

    <!-- sidebar section start -->
    <section class="sidebar_section">
        <div class="sidebar_content_wrap">
            <div class="container">
                <div class="row">
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                        aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header align-items-center">
                            <h5 class="mb-0">Organic Products</h5>
                            <button type="button" class="btn-close text-reset text-end" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="prdc_ctg_product_content mt-1 d-flex align-items-center">
                                <div class="prdc_ctg_product_img d-flex justify-content-center align-items-center me-3">
                                    <img src="./view/assets/images/category/cat6.png" alt="image_not_found">
                                </div>
                                <div class="prdc_ctg_product_text">
                                    <div class="prdc_ctg_product_title my-2">
                                        <h5>Organic Cabbage</h5>
                                    </div>
                                    <div class="prdc_ctg_product_price mt-1 product_price">
                                        <span class="sale_price pe-1">$50.00</span>
                                        <del>$70.00</del>
                                    </div>
                                </div>
                            </div>
                            <div class="prdc_ctg_product_content mt-1 d-flex align-items-center">
                                <div class="prdc_ctg_product_img d-flex justify-content-center align-items-center me-3">
                                    <img src="./view/assets/images/category/cat7.png" alt="image_not_found">
                                </div>
                                <div class="prdc_ctg_product_text">
                                    <div class="prdc_ctg_product_title my-2">
                                        <h5>Organic Cabbage</h5>
                                    </div>
                                    <div class="prdc_ctg_product_price mt-1 product_price">
                                        <span class="sale_price pe-1">$40.00</span>
                                        <del>$60.00</del>
                                    </div>
                                </div>
                            </div>
                            <div class="prdc_ctg_product_content mt-1 d-flex align-items-center">
                                <div class="prdc_ctg_product_img d-flex justify-content-center align-items-center me-3">
                                    <img src="./view/assets/images/category/cat8.png" alt="image_not_found">
                                </div>
                                <div class="prdc_ctg_product_text">
                                    <div class="prdc_ctg_product_title my-2">
                                        <h5>Organic Cabbage</h5>
                                    </div>
                                    <div class="prdc_ctg_product_price mt-1 product_price">
                                        <span class="sale_price pe-1">$70.00</span>
                                        <del>$90.00</del>
                                    </div>
                                </div>
                            </div>
                            <div class="total_price">
                                <ul class="ul_li_block mb_30 clearfix">
                                    <li>
                                        <span>Subtotal:</span>
                                        <span>$215</span>
                                    </li>
                                    <li>
                                        <span>Vat 5%:</span>
                                        <span>$10.75</span>
                                    </li>
                                    <li>
                                        <span>Discount 15%:</span>
                                        <span>- $32.25</span>
                                    </li>
                                    <li>
                                        <span>Total:</span>
                                        <span>$191.8875</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar_btns">
                                <ul class="btns_group ul_li_block clearfix">
                                    <li><a href="cart.html">View Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sidebar section end -->

    <!-- Breadcrumb section start -->
    <section class="breadcrumb_sec_1 position-relative">
        <div class="breadcrumb_wrap sec_space_mid_small"
            style="background-image: url(./view/assets/images/breadcrumb/breadcrumb1.png);">
            <div class="breadcrumb_cont text-center">
                <div class="breadcrumb_title">
                    <h2 class="text-white">Cart Page</h2>
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

    <!-- cart_section - start -->
    <section class="cart_section sec_space_large" data-aos="fade-up" data-aos-duration="2000">
        <div class="container">
            <div class="cart_table table-responsive position-relative">
                <table class="table align-middle">
                    <thead class="text-uppercase">
                        <tr>
                            <th>photo</th>
                            <th>product name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="cart_product position-relative">
                                    <div class="item_image">
                                        <img src="./view/assets/images/cart/cart1.png" alt="image_not_found">
                                    </div>
                                    <button type="button" class="remove_btn position-absolute">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="item_content">
                                    <a href="shop-list.html">
                                        <h4 class="item_title">Curated Products</h4>
                                    </a>
                                    <span class="item_type">Shop groceries</span>
                                </div>
                            </td>
                            <td>
                                <span class="price_text">$69.00</span>
                            </td>
                            <td>
                                <div class="quantity_input">
                                    <form action="#">
                                        <span class="input_number_decrement">–</span>
                                        <input class="input_number" value="1">
                                        <span class="input_number_increment">+</span>
                                    </form>
                                </div>
                            </td>
                            <td>
                                <span class="total_price">$138.00</span>
                            </td>
                        </tr>
                        <!-- <tr>
                            <td>
                                <div class="cart_product position-relative">
                                    <div class="item_image">
                                        <img src="./view/assets/images/cart/cart2.png" alt="image_not_found">
                                    </div>
                                    <button type="button" class="remove_btn position-absolute">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="item_content">
                                    <a href="shop-list.html">
                                        <h4 class="item_title">Clean Business Card</h4>
                                    </a>
                                    <span class="item_type">Shop groceries</span>
                                </div>
                            </td>
                            <td>
                                <span class="price_text">$23.00</span>
                            </td>
                            <td>
                                <div class="quantity_input">
                                    <form action="#">
                                        <span class="input_number_decrement">–</span>
                                        <input class="input_number" value="1">
                                        <span class="input_number_increment">+</span>
                                    </form>
                                </div>
                            </td>
                            <td>
                                <span class="total_price">$138.00</span>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>

            <div class="coupon_wrap d-flex justify-content-between">
                <div class="coupon_form d-flex align-items-center">
                    <div class="form_item mb-0 me-5">
                        <input type="text" class="coupon rounded-pill" placeholder="Coupon Code">
                    </div>
                    <button type="submit"
                        class="btn btn_coupon custom_btn text-white rounded-pill py-2 py-sm-3 px-3 px-sm-5 text-uppercase">Apply
                        Coupon</button>
                </div>
                <button type="button"
                    class="btn coupon_update_btn text-white rounded-pill py-2 py-sm-3 px-3 px-sm-5 text-uppercase">Update
                    Cart</button>
            </div>

            <div class="row justify-content-lg-end">
                <div class="col col-lg-4 mt-5">
                    <div class="cart_pricing_table text-uppercase">
                        <h3 class="table_title text-center">Cart Total</h3>
                        <ul class="ul_li_block clearfix">
                            <li><span>Subtotal</span> <span>$197.99</span></li>
                            <li><span>Total</span> <span>$197.99</span></li>
                        </ul>
                        <div class="btn_wrap pt-0 text-center">
                            <a href="index.php?page=dat-hang" class="btn text-uppercase text-white rounded-pill">Proceed to
                                Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cart_section - end -->

</main>