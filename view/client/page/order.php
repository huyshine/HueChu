<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="order-details">
                <h2>Danh sách đơn hàng</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên người nhận</th>
                            <th>SĐT</th>
                            <th>Địa chỉ</th>
                            <th>Thời gian đặt hàng</th>
                            <th>Trạng thái đặt hàng</th>
                            <th>Chi tiết</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($my_order as $order): ?>
                            <tr>
                                <td>
                                    <?php echo $order['order_id'] ?>
                                </td>
                                <td>
                                    <?php echo $order['name'] ?>
                                </td>
                                <td>
                                    <?php echo $order['phone'] ?>
                                </td>
                                <td>
                                    <?php echo $order['address'] ?>
                                </td>
                                <td>
                                    <?php echo $order['ngayorder'] ?>
                                </td>
                                <td>
                                    <?php echo $order['status'] ?>
                                </td>
                                <td>
                                    <!-- <?php echo $order['status'] ?> -->
                                    <a href="index.php?page=chi-tiet-don-hang&id_order=<?php echo $order['order_id'] ?>"><button>Chi tiết</button></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <!-- <tr>
                            <td>1</td>
                            <td>Sản phẩm A</td>
                            <td><img src="path_to_image.jpg" alt="Ảnh sản phẩm" style="max-width: 100px;"></td>
                            <td>$100</td>
                            <td>2</td>
                            <td>Mô tả về sản phẩm A</td>
                            <td>Đã gửi</td>
                        </tr> -->
                        <!-- Thêm các hàng dữ liệu khác tương tự -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>