<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="order-details">
        <h2>Chi tiết đơn hàng</h2>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Tên sản phẩm</th>
              <th>Ảnh sản phẩm</th>
              <th>Giá</th>
              <th>Số lượng</th>
              <th>Mô tả</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($order_detail as $order) : ?>
                <tr>
                  <td><?php echo $order['product_name'] ?></td>
                  <td><img src="./view/public/img/sanpham/<?php echo $order['img'] ?>" alt="Ảnh sản phẩm" style="max-width: 100px;"></td>
                  <td><?php echo $order['price'] ?> VNĐ</td>
                  <td><?php echo $order['quantity'] ?></td>
                  <td><?php echo $order['description'] ?></td>
                </tr>
            <?php endforeach ; ?>
            <!-- Thêm các hàng dữ liệu khác tương tự -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>