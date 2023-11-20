<?php

include("./ketnoi/ketnoi.php");

include("./view/header.php");
include("./view/banner.php");



if (isset($_GET["page"])) {
    $page = $_GET["page"];
    switch ($page) {
        case "trang-chu":
            include("./view/client/home/home.php");
           
            break;
        case "gioi-thieu":
            include("./view/client/blog-detail.php");
            break;
        default :
        include("./view/client/home/home.php");
    }
} else {
    include("./view/client/home/home.php");
}

include("./view/footer.php");
