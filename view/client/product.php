<!-- product section start -->
<section class="product_section sec_space_xxs_50" data-aos="fade-up" data-aos-duration="1700">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="product_sec_content">
                    <div class="product_sec_sub_title d-flex align-items-center pb-2">
                        <i class="far fa-circle"></i>
                        <i class="far fa-circle"></i>
                        <i class="far fa-circle"></i>
                        <span class="ps-2">FRESH FROM OUR FARM</span>
                    </div>
                    <h2 class="product_sec_title pb-3">Our Organic Products</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="product_tabnav_1 nav nav-pills ul_li_right mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a href="index.php?page=trang-chu">
                            <button class="nav-link rounded-pill me-1 active" id="pills-all-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all"
                                aria-selected="true">
                                All
                            </button>
                        </a>
                    </li>
                    <?php foreach ($categories as $category): ?>
                        <li class="nav-item" role="presentation">
                            <a href="index.php?page=trang-chu&iddm=<?php echo $category['cate_id'] ?>">
                                <button class="nav-link rounded-pill me-1" id="pills-vegetables-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-vegetables" type="button" role="tab"
                                    aria-controls="pills-vegetables" aria-selected="false">
                                    <?php echo $category['cate_name'] ?>
                                </button>
                            </a>
                        </li>
                    <?php endforeach ?>

                </ul>
            </div>
        </div>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                <div class="row g-4">
                    <?php foreach ($products as $product): ?>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                            <div class="product_layout_1 overflow-hidden position-relative">
                                <div class="product_layout_content bg-white position-relative">
                                    <div class="product_image_wrap">
                                        <a class="product_image d-flex justify-content-center align-items-center"
                                            href="index.php?page=chitiet_sanpham&id=<?= $product['product_id'] ?>&iddm=<?= $product['cate_id'] ?>"
                                            target="_blank">
                                            <img class="pic-1" src="./view/public/img/sanpham/<?php echo $product['img'] ?>"
                                                alt="image_not_found" />
                                            <img class="pic-2" src="./view/public/img/sanpham/<?php echo $product['img'] ?>"
                                                alt="image_not_found" />
                                        </a>
                                        <ul class="product_badge_group ul_li_block">
                                            <li>
                                                <span
                                                    class="product_badge badge_meats position-absolute rounded-pill text-uppercase">
                                                    <?php echo $product['cate_name'] ?>
                                                </span>
                                            </li>
                                            <li>
                                                <!-- <span
                                                    class="product_badge badge_discount position-absolute rounded-pill"></span> -->
                                            </li>
                                        </ul>
                                        <ul class="product_action_btns ul_li_block d-flex">
                                            <li>
                                                <a class="tooltips" data-placement="top" title="Search Product"
                                                    href="index.php?page=chitiet_sanpham&id=<?= $product['product_id'] ?>&iddm=<?= $product['cate_id'] ?>"><i
                                                        class="fas fa-search"></i></a>
                                            </li>
                                            <!-- <li>
                                                <a class="tooltips" data-placement="top" title="Add To Cart"
                                                    href="#product_quick_view" data-bs-toggle="modal"><i
                                                        class="fas fa-shopping-bag"></i></a>
                                            </li> -->
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
                                            <a href="shop-list.html" target="_blank">
                                                <?php echo $product['product_name'] ?>
                                            </a>
                                        </h3>
                                        <div class="product_price">
                                            <span class="sale_price pe-1">
                                                <?php echo $product['price'] ?> VNĐ
                                            </span>
                                            <!-- <del>$65.00</del> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product section start -->