<?php
function dathang($name, $phone, $address, $user_id)
{
    include './ketnoi/ketnoi.php';
    $errors = [];
    // if ($email == "") {
    //     $errors['email'] = "Email không được để trống";
    // } else if (!filter_var(trim($email), FILTER_VALIDATE_EMAIL)) {
    //     $errors['email'] = "Email không đúng định dạng";
    // }
    if ($name == "") {
        $errors['hovaten'] = "Họ và tên không được để trống";
    }
    if ($address == "") {
        $errors['address'] = "Họ và tên không được để trống";
    }
    if ($phone == "") {
        $errors['tel'] = "Số điện thoại không được để trống";
    }

    $_SESSION['errors_muahhang'] = $errors;
    if (!$errors) {
        $sql = "INSERT INTO tbl_order
        (
            user_id,
            address,
            phone,
            name,
            status_id
            ) 
        VALUES
        (
            '$user_id',
            '$address',
            '$phone',
            '$name',
            1)
        ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        if ($sql) {
            $last_id = $conn->lastInsertId();
            echo $last_id;
            foreach ($_SESSION['cart'] as $cart => $productDetails) {
                $product_id = $productDetails['id'];
                $quantity = $productDetails['quantity'];
                $sql = "INSERT INTO `tbl_order_detail`(`order_id`, `product_id`, `quantity`) VALUES('$last_id','$product_id','$quantity')";
                $stmt = $conn->prepare($sql);
                $stmt->execute();

                $sql1 = "UPDATE products SET quantity = quantity - $quantity WHERE product_id = '$product_id'";
                $stmt = $conn->prepare($sql1);
                $stmt->execute();
            }
        }
    }
    unset($_SESSION['cart']);
}

function showdonhang_theo_user($user_id)
{
    include './ketnoi/ketnoi.php';
    $sql = "SELECT tbl_order.order_id,tbl_order.name,tbl_order.phone,tbl_order.address,taikhoan.hovaten,taikhoan.email,taikhoan.tel,tbl_order.ngayorder,
    tbl_order.status_id,order_status.status
    FROM tbl_order 
    JOIN taikhoan ON taikhoan.user_id = tbl_order.user_id 
    JOIN order_status ON order_status.status_id = tbl_order.status_id 
    WHERE tbl_order.user_id = '$user_id' order by ngayorder DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $my_order = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $my_order;
}
function show_chitiet_order($order_id)
{
    include './ketnoi/ketnoi.php';
    $sql = "SELECT products.product_name,products.price,products.img,products.img_2,products.img_3,products.img_4,products.description, tbl_order_detail.quantity  FROM tbl_order_detail JOIN products ON products.product_id = tbl_order_detail.product_id WHERE order_id = '$order_id' order by products.price desc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $order_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $order_details;
}
function show_chitiet_order_theokhachhang($order_id)
{
    include '../ketnoi/ketnoi.php';
    $sql = " SELECT order_id,products.product_name,products.price,products.img,products.img_2,products.img_3,products.img_4,products.description  FROM tbl_order JOIN products ON products.product_id = tbl_order.product_id WHERE order_id = '$order_id' order by products.price desc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $order_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $order_details;
}
function admin_show_chitiet_order($order_id)
{
    include '../ketnoi/ketnoi.php';
    $sql = " SELECT  products.product_name,products.price,products.img,products.img_2,products.img_3,products.img_4,products.description, tbl_order_detail.quantity  FROM tbl_order_detail JOIN products ON products.product_id = tbl_order_detail.product_id WHERE order_id = '$order_id' order by products.price desc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $order_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $order_details;
}

function showdonhangadmin($kyw, $status_id)
{
    include '../ketnoi/ketnoi.php';

    $sql = "SELECT order_id,tbl_order.user_id,taikhoan.hovaten,taikhoan.email,taikhoan.tel,ngayorder,tbl_order.status_id,order_status.status
    FROM tbl_order 
    JOIN taikhoan ON taikhoan.user_id = tbl_order.user_id 
    JOIN order_status ON order_status.status_id = tbl_order.status_id ";
    if ($kyw != "") {
        $sql .= " and taikhoan.email like '%" . $kyw . "%'";
    }
    if ($status_id > 0) {
        $sql .= " and tbl_order.status_id = '$status_id'";
    }
    $sql .= " order by ngayorder DESC ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $show_order = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $show_order;
}





function showdonhanguser()
{
    include './ketnoi/ketnoi.php';
    // $sql = "SELECT * FROM tbl_order order by ngaydathang desc";
    $sql = "SELECT order_id,tbl_order.user_id,taikhoan.hovaten,taikhoan.email,taikhoan.tel,ngaydathang,product_id,ngayxemxe,caxemxe,co_so,
    tbl_order.status_id,order_status.status,
    ca_xem_xe.name_caxem,
    co_so.name_coso
    FROM tbl_order 
    JOIN taikhoan ON taikhoan.user_id = tbl_order.user_id 
    JOIN order_status ON order_status.status_id = tbl_order.status_id 
    JOIN ca_xem_xe ON ca_xem_xe.caxem_id = tbl_order.caxemxe
    JOIN co_so ON co_so.coso_id = tbl_order.co_so
    order by ngaydathang DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $show_order = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $show_order;
}

function showdonhang_theo_khachhang($user_id)
{
    include '../ketnoi/ketnoi.php';
    $sql = "SELECT *  FROM tbl_order   JOIN order_status on order_status.status_id = tbl_order.status_id WHERE user_id = '$user_id' order by ngaydathang desc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $show_order_theo_khachhang = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $show_order_theo_khachhang;
}
function capnhat_donhang($status, $order_id, $ngaydathang)
{
    include '../ketnoi/ketnoi.php';

    $sql = "UPDATE  tbl_order SET status_id = '$status',ngayorder = '$ngaydathang' WHERE order_id = '$order_id'  ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

}
function huy_lich_user($order_id)
{
    include './ketnoi/ketnoi.php';
    $sql = "UPDATE tbl_order
        SET status_id = 4 WHERE order_id = '$order_id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function show_status()
{
    include '../ketnoi/ketnoi.php';
    $sql = "SELECT * FROM order_status";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $status = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $status;
}

function huy_lich($order_id)
{
    include '../ketnoi/ketnoi.php';
    $sql = "UPDATE tbl_order
        SET status_id = 4 WHERE order_id = '$order_id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

