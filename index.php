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
            include("./view/client/page/trang-chu.php");
            break;
        case "gioi-thieu":
            include("./view/client/page/gioi-thieu.php");
            break;
        case "san-pham":
            include("./view/client/page/san-pham.php");
            break;
        case "lien-he":
            include("./view/client/page/lien-he.php");
            break;
        case "gio-hang":
            include("./view/client/page/gio-hang.php");
            break;
        case "dat-hang":
            include("./view/client/page/dat-hang.php");
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
        default:
            include("./view/client/home/home.php");
    }
} else {
    include("./view/client/page/trang-chu.php");
}

include("./view/footer.php");
ob_end_flush();
