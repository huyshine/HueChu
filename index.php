<?php
session_start();
ob_start();

include("./ketnoi/ketnoi.php");
include("./view/header.php");
include("./model/taikhoan.php");
include("./model/sanpham.php");
include("./model/donhang.php");
include("./model/danhmuc.php");

if (isset($_GET["page"])) {
    $page = $_GET["page"];
    switch ($page) {
        case "trang-chu":
            if (isset($_GET['iddm'])) {
                $iddm = $_GET['iddm'];
                $products = showsp_theodm($iddm);
                $categories = showdm_user();
                $top3sp = show_top3_sp();
            } else {
                $products = showsp_trangchu();
                $categories = showdm_user();
                // $top3sp = show_top3_sp();
            }
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
            } else {
                $products = showsp_trangchu();
                $categories = showdm_user();
            }
            include("./view/client/page/san-pham.php");
            break;
        case 'chitiet_sanpham':
            if (isset($_GET['id'])) {
                if (isset($_GET['iddm'])) {
                    $id = $_GET['id'];
                    $iddm = $_GET['iddm'];
                    $product = chitiet_sp($id);
                    //   $reps = show_rep($id);
                    $products_lienquan = sanpham_lienquan($id, $iddm);
                    $top3sp = show_top3_sp();
                }
            }
            // if (isset($_GET['iddm'])) {
            //     $iddm = $_GET['iddm'];
            //     $products = showsp_theodm($iddm);
            //     $categories = showdm_user();
            //     $top3sp = show_top3_sp();
            // }
            include("./view/client/page/chi-tiet-san-pham.php");
            break;
        case "add-cart":
            if (isset($_GET['productId'])) {
                $productId = $_GET['productId'];
                $product = chitiet_sp($productId);
                $quantity = $_POST['quantity'];
                // Check if the product is already in the cart
                if (isset($_SESSION['cart'][$productId])) {
                    // Product is in the cart, increase quantity
                    $_SESSION['cart'][$productId]['quantity'] += $quantity;
                } else {
                    // Product is not in the cart, add it
                    $_SESSION['cart'][$productId] = array(
                        'id' => $product['product_id'],
                        'name' => $product['product_name'],
                        'img' => $product['img'],
                        'price' => $product['price'],
                        'quantity' => (int) $quantity
                    );
                }
            }
            header('location: index.php?page=gio-hang');
            break;
        case 'remove_cart':
            if (isset($_POST['remove_cart'])) {
                $productId = $_POST['productId'];
                unset($_SESSION['cart'][$productId]);
            }
            header('location: index.php?page=gio-hang');
            break;
        case "gio-hang":
            if (!empty($_SESSION['cart'])) {
                include("./view/client/page/gio-hang.php");
                // $products = $_SESSION['cart'];
            } else {
                echo "<div style='margin:100px 0px  ; font-size: 20px; text-align: center;'>Giỏ hàng của bạn trống</div>";
            }
            ;
            break;
        case "update_cart":
            if (isset($_POST['update_cart'])) {
                $quantity = $_POST['quantity'];
                $productId = $_POST['productId'];
                $product = chitiet_sp($productId);
                $_SESSION['cart'][$productId]['quantity'] = $quantity;
                // echo "$quantity  và $productId";
            }
            if (isset($_POST['remove_cart'])) {
                $productId = $_POST['productId'];
                unset($_SESSION['cart'][$productId]);
            }
            include("./view/client/page/gio-hang.php");
            break;
        case "dat-hang":
            $products = $_SESSION['cart'];
            include("./view/client/page/dat-hang.php");
            break;
        case "gui-dat-hang":
            if (isset($_POST['order'])) {
                $user_id = $_SESSION['user']['user_id'];
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                dathang($name, $phone, $address, $user_id);
            }
            header('location: index.php?page=thank');
            break;
        case "thank":
            include("./view/client/page/thank.php");
            break;
        case "don-hang":
            if (isset($_SESSION['user']['user_id'])) {
                $user_id = $_SESSION['user']['user_id'];
                $my_order = showdonhang_theo_user($user_id);
                // $order_detail = show_chitiet_order($my_order['order_id']);
            }
            include("./view/client/page/order.php");
            break;
        case "chi-tiet-don-hang":
            if (isset($_GET['id_order'])) {
                $order_id = $_GET['id_order'];
                $order_detail = show_chitiet_order($order_id);
            }
            include("./view/client/page/order-detail.php");
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
        case "lien-he":
            include("./view/client/page/lien-he.php");
            break;
        case 'vao_trang_dangnhap':
            include_once './view/client/taikhoan/login.php';
            unset($_SESSION['dangkythanhcong']);
            $_SESSION['thongbao'] = " ";
            break;
        case 'vao_trang_dangky':
            include_once './view/client/taikhoan/sign_up.php';
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $checkuser = checkuser($username, $password);
                $checkuser_vohieuhoa = checkuser_vohieuhoa($username, $password);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header('location: index.php');
                }
                if (is_array($checkuser_vohieuhoa)) {
                    $_SESSION['thongbao'] = "Tài khoản đã bị vô hiệu hóa";
                    header('location: index.php?page=vao_trang_dangnhap');
                } else {
                    $_SESSION['thongbao'] = "Tài khoản hoặc mật khẩu không đúng";

                    header('location: index.php?page=vao_trang_dangnhap');
                }
            }
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
            session_unset();
            header('location: index.php');
            break;
        case 'vao_trang_quenmk':
            include_once './view/client/taikhoan/forget_password.php';
            break;

        case 'quen_mat_khau':
            if (isset($_POST['gui'])) {
                $email = $_POST['email'];
                $username = $_POST['username'];

                if (!isset($_SESSION['errors']['username']) && !isset($_SESSION['errors']['email'])) {
                    quenmatkhau($email, $username);
                }
            }
            include './view/client/taikhoan/forget_password.php';
            break;
        case 'vao_trang_doimatkhau':

            include './view/client/taikhoan/change_password.php';

            break;
        case 'doimatkhau':
            if (isset($_POST['xacnhandoimk'])) {
                $username = $_POST['username'];
                $old_password = $_POST['old_password'];
                $new_password = $_POST['new_password'];
                $re_new_password = $_POST['re_new_password'];
                doimatkhau($username, $old_password, $new_password, $re_new_password);
                if (!isset($_SESSION['error_doimk']['username']) && !isset($_SESSION['error_doimk']['old_password']) && !isset($_SESSION['error_doimk']['new_password']) && !isset($_SESSION['error_doimk']['re_new_password'])) {
                    $_SESSION['doimatkhau_thanhcong'] = "Đổi mật khẩu thành công";
                    header("location: index.php?page=vao_trang_doimatkhau");
                } else {
                    header("location: index.php?page=vao_trang_doimatkhau");
                }
            }
            break;
        case 'vao_trang_taikhoan':

            if (isset($_SESSION['user']['user_id'])) {
                $user_id = $_SESSION['user']['user_id'];
                $user = show_tt_theo_user($user_id);
                include './view/client/taikhoan/detail_user.php';
            }

            break;
        case 'capnhat_tk';
            if (isset($_POST['capnhattk'])) {
                $user_id = $_POST['user_id'];
                $hovaten = $_POST['hovaten'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                // $address = $_POST['address'];
                // $ngaydangky = $_POST['ngaydangky'];
                capnhat_tk($user_id, $hovaten, $email, $tel);
                if (!isset($_SESSION['errors']['hovaten']) && !isset($_SESSION['errors']['email']) && !isset($_SESSION['errors']['sdt'])) {
                    $_SESSION['capnhatthanhcong'] = "Cập nhật tài khoản thành công";
                    header("location: index.php?page=vao_trang_taikhoan");
                } else {
                    header("location: index.php?page=vao_trang_taikhoan");
                }
            }
            break;
        default:
            $products = showsp_trangchu();
            $categories = showdm_user();
            $top3sp = show_top3_sp();
            include("./view/client/page/trang-chu.php");
    }
} else {
    $products = showsp_trangchu();
    $categories = showdm_user();
    include("./view/client/page/trang-chu.php");
}

include("./view/footer.php");
ob_end_flush();
