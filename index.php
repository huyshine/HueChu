<?php
include("./ketnoi/ketnoi.php");
include("./view/header.php");

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
        default:
            include("./view/client/home/home.php");
    }
} else {
    include("./view/client/page/trang-chu.php");
}

include("./view/footer.php");
