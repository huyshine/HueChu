<?php
session_start();
ob_start();

include("./ketnoi/ketnoi.php");
include("./view/header.php");
include("./model/taikhoan.php");
include("./model/sanpham.php");
include("./model/donhang.php");
include("./model/danhmuc.php");
include("./model/binhluan.php");

if (isset($_GET["page"])) {
    $page = $_GET["page"];
    switch ($page) {
        case "trang-chu":
            $products = showsp_trangchu();
            $categories = showdm_user();
            $top3sp = show_top3_sp();
            include("./view/client/page/trang-chu.php");
            break;
        case "gioi-thieu":
            include("./view/client/page/gioi-thieu.php");
            break;
        // Sản phẩm
        case "san-pham":
            if (isset($_GET['iddm'])) {
                $iddm = $_GET['iddm'];
                $products = showsp_theodm($iddm);
                $categories = showdm_user();
                $top3sp = show_top3_sp();
            }
            include("./view/client/page/san-pham.php");
            break;
        case 'chitiet_sanpham':
            if (isset($_GET['id'])) {
                if (isset($_GET['iddm'])) {
                    $id = $_GET['id'];
                    $iddm = $_GET['iddm'];
                    if (isset($_GET['so_sanpham_tren1trang'])) {
                        $so_sanpham_tren1trang = $_GET['so_sanpham_tren1trang'];
                    } else {
                        $so_sanpham_tren1trang = 4;
                    }
                    if (isset($_GET['trang'])) {
                        $trang = $_GET['trang'];
                    } else {
                        $trang = 1;
                    }
                    //   $so_binhluan = dem_binh_luan_theo_sanpham($id);
                    //   $binhluan = show_binhluan($id, $so_sanpham_tren1trang, $trang);
                    $sotrang = sotrang($id, $so_sanpham_tren1trang);
                    $product = chitiet_sp($id);
                    //   $reps = show_rep($id);
                    $products_lienquan = sanpham_lienquan($id, $iddm);
                    $top3sp = show_top3_sp();
                }
            }

            if (isset($_GET['iddm'])) {
                $iddm = $_GET['iddm'];
                $products = showsp_theodm($iddm);
                $categories = showdm_user();
                $top3sp = show_top3_sp();
            }

            include("./view/client/page/chi-tiet-san-pham.php");
            unset($_SESSION['thongbaobinhluan']);

            // include './controller/binhluan/guibinhluan.php';
            break;
        case "lien-he":
            include("./view/client/page/lien-he.php");
            break;
        case "gio-hang":
            if (isset($_GET['productId'])) {
                $productId = $_GET['productId'];
                $product = chitiet_sp($productId);

                if (isset($_SESSION['cart'][$productId])) {
                    $product['quantity'] = $_SESSION['cart'][$productId]['quantity'];
                } else {
                    $product['quantity'] = 1;
                }
            }
            include("./view/client/page/gio-hang.php");
            break;
        case "update_cart":
            if (isset($_POST['update_cart'])) {
                $quantity = $_POST['quantity'];
                $productId = $_POST['productId'];
                $product = chitiet_sp($productId);
                $product['quantity'] = $quantity;
                $_SESSION['cart'][$productId] = $product;
                // echo "$quantity  và $productId";
            }
            include("./view/client/page/gio-hang.php");
            break;
        case "dat-hang":
            if (isset($_GET['productId'])) {
                $productId = $_GET['productId'];
                $user_id = $_SESSION['user']['user_id'];
                $product = chitiet_sp($productId);
                $quantity = $_SESSION['cart'][$productId]['quantity'];
                $total = $product['price'] * $quantity;
            }

            include("./view/client/page/dat-hang.php");
            break;
        case "gui-dat-hang":
            if (isset($_POST['order'])) {
                if (isset($_GET['productId'])) {
                    $productId = $_GET['productId'];
                    $user_id = $_SESSION['user']['user_id'];
                    $quantity = $_SESSION['cart'][$productId]['quantity'];
                    $name = $_POST['name'];
                    $phone = $_POST['phone'];
                    $address = $_POST['address'];
                    // echo $user_id . ' ' . $productId . ' ' . $quantity . ' ' . $name . ' ' . $phone . ' ' . $address;
                    dathang($name, $phone, $address, $user_id, $productId, $quantity);
                }
            }
            // echo 'fail';
            // include("./view/client/page/trang-chu.php");
            break;
        case "nguoi-ban":
            include("./view/client/page/nguoi-ban.php");
            break;
        case "ve-chung-toi":
            include("./view/client/page/ve-chung-toi.php");
            break;
        case "so-sanh":
            include("./view/client/page/so-sanh.php");
            break;
        case "chi-tiet-san-pham":
            include("./view/client/page/chi-tiet-san-pham.php");
            break;

        case 'vao_trang_dangnhap':
            include_once './view/client/taikhoan/login.php';
            include_once './controller/taikhoan/vao_trang_dangnhap.php';
            break;
        case 'vao_trang_dangky':
            include_once './view/client/taikhoan/sign_up.php';
            break;
        case 'dangnhap':
            include_once './controller/taikhoan/dangnhap.php';
            break;
        case 'dangkytk':
            if (isset($_POST['dangky'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $repassword = $_POST['repassword'];
                $hovaten = $_POST['hovaten'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                dangky($username, $password, $repassword, $hovaten, $email, $sdt);
                if (!isset($_SESSION['errors']['img']) && !isset($_SESSION['errors']['username']) && !isset($_SESSION['errors']['password']) && !isset($_SESSION['errors']['repassword']) && !isset($_SESSION['errors']['hovaten']) && !isset($_SESSION['errors']['email']) && !isset($_SESSION['errors']['address']) && !isset($_SESSION['errors']['sdt'])) {
                    $_SESSION['dangkythanhcong'] = "Đăng ký thành công";
                    header("location: index.php?page=vao_trang_dangnhap");
                } else {
                    header("location: index.php?page=vao_trang_dangky");
                }
            }
            break;
        case 'dangxuat':
            include './controller/taikhoan/dangxuat.php';
            break;
        case 'vao_trang_quenmk':
            include_once './view/client/taikhoan/forget_password.php';
            break;

        case 'quen_mat_khau':
            include './controller/taikhoan/quen_mat_khau.php';
            include './view/client/taikhoan/forget_password.php';
            break;
        case 'vao_trang_doimatkhau':

            include './view/client/taikhoan/change_password.php';

            break;
        case 'doimatkhau':

            include './controller/taikhoan/doimatkhau.php';

            break;
        case 'vao_trang_taikhoan':

            if (isset($_SESSION['user']['user_id'])) {
                $user_id = $_SESSION['user']['user_id'];
                $user = show_tt_theo_user($user_id);
                include './view/client/taikhoan/detail_user.php';
            }

            break;
        case 'capnhat_tk';

            include './controller/taikhoan/capnhat_tk.php';

            break;
        default:
            $products = showsp_trangchu();
            $categories = showdm_user();
            $top3sp = show_top3_sp();
            include("./view/client/page/trang-chu.php");
    }
} else {
    include("./view/client/page/trang-chu.php");
}

include("./view/footer.php");
ob_end_flush();
