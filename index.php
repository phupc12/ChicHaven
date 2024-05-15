<?php
    include "App/models/pdo.php";
    include "App/models/sanpham.php";
    include "App/views/header.php";
    include "App/views/global.php";
    $spnew = loadall_sanpham_home();
    $spshow = loadall_sanpham_shop();
    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act = $_GET['act'];
        switch ($act) {
            case 'shop':
                include "App/views/shop.php";
                break;
            case 'aboutus':
                include "App/views/aboutus.php";
                break;
            case 'services':
                include "App/views/services.php";
                break;
            case 'blog':
                include "App/views/blog.php";
                break;
            case 'contact':
                include "App/views/contact.php";
                break;
            case 'cart':
                include "App/views/cart.php";
                break;
            default:
                include "App/views/home.php";
                break;
        }
    }else{
        include "App/views/home.php";
    }
    
    include "App/views/footer.php";
?>