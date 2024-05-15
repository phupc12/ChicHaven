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
            case 'sanphamchitiet':
                
                if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                    $id=$_GET['idsp'];
                    $onesp=load_sanpham($id);
                    extract($onesp);
                    $spdm=load_sanphamdm($id, $category_id);
                    include "App/views/detail_products.php";
                }else{
                    include "App/views/home.php";
                }

                break;
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
