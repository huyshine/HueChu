<main>

    <!-- sidebar section start -->
    <section class="sidebar_section">
        <div class="sidebar_content_wrap">
            <div class="container">
                <div class="row">
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                        aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header align-items-center">
                            <h5 class="mb_0">Organic Product</h5>
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
                    <h2 class="text-white">Checkout Page</h2>
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

    <section class="cart_section clearfix" data-aos="fade-up" data-aos-duration="2000">
        <div class="container">
            <form action="index.php?page=gui-dat-hang&productId=<?php echo $product['product_id'] ?>" method="post" enctype="multipart/form-data">
                <!-- Billing info start -->
                <div class="billing_form mb_50">
                    <h3 class="form_title mb_30">Billing details</h3>
                    <div >
                        <div class="form_wrap">
                            <div class="form_item">
                                <span class="input_title">Name<sup>*</sup></span>
                                <input type="text" name="name">
                            </div>
                            <div class="form_item">
                                <span class="input_title">Address<sup>*</sup></span>
                                <input type="text" name="address" placeholder="House number and street name">
                            </div>
                            <div class="form_item">
                                <span class="input_title">Phone<sup>*</sup></span>
                                <input type="tel" name="phone">
                            </div>
                            <hr>
                            <div class="form_item mb_0">
                                <span class="input_title">Order notes<sup>*</sup></span>
                                <textarea name="note"
                                    placeholder="Note about your order, eg. special notes fordelivery."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="billing_form" data-aos="fade-up" data-aos-duration="2000">
                    <h3 class="form_title mb_30">Your order</h3>
                    <div>
                        <div class="form_wrap">
                            <div class="checkout_table table-responsive">
                                <table class="table text-center mb_50">
                                    <thead class="text-uppercase text-uppercase">
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="cart_product">
                                                    <div class="item_image">
                                                        <img src="./view/assets/images/cart/cart1.png"
                                                            alt="image_not_found">
                                                    </div>
                                                    <div class="item_content">
                                                        <h4 class="item_title mb_0">
                                                            <?php echo $product['product_name'] ?>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="price_text">
                                                    <?php echo $product['price'] ?> VNĐ
                                                </span>
                                            </td>
                                            <td>
                                                <span class="quantity_text">
                                                    <?php echo $quantity ?>
                                                </span>
                                            </td>
                                            <td><span class="total_price">
                                                    <?php echo $total ?> VNĐ
                                                </span></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <span class="subtotal_text">Subtotal</span>
                                            </td>
                                            <td><span class="total_price">
                                                    <?php echo $total ?> VNĐ
                                                </span></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" name="order" class="custom_btn bg_default_red">PLACE ORDER</button>
            </form>
        </div>
    </section>

</main>