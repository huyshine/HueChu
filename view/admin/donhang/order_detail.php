<div class="nen">
    <div class="listchung">
        <h1 class="text-[20px] font-[600] py-3">Chi tiết đơn hàng</h1>
        <table class="list">
            <thead>
                <tr class="table_cart_tr">
                    <th id="tenndh">Tên sản phẩm</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Chi tiết</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Tổng tiền</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($order_detail as $order_detail) : ?>
                    <tr id="hang">
                        <td id="tenndh"><?= $order_detail['product_name'] ?></td>
                        <td> <img class="w-[100px] mx-auto" src="../view/public/img/sanpham/<?= $order_detail['img'] ?>"></td>
                        <td><p class="w-[250px] text-ellipsis overflow-hidden whitespace-nowrap"><?= $order_detail['description'] ?></p></td>
                        <td><?= format_currency($order_detail['price']) . " VNĐ" ?></td>
                        <td><p class="w-[250px] text-ellipsis overflow-hidden whitespace-nowrap"><?= $order_detail['quantity'] ?></p></td>
                        <td><?= format_currency($order_detail['price'] * $order_detail['quantity']) . " VNĐ" ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>


    </div>
</div>