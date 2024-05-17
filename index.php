<?php
    session_start();
    include "App/models/pdo.php";
    include "App/models/sanpham.php";
    include "App/models/taikhoan.php";
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
            case 'login':
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    $name=$_POST['name'];
                    $pass=$_POST['pass'];
                    $checkusers = checkusers($name, $pass);
                    if(is_array($checkusers)){
                        $_SESSION['user']=$checkusers;
                        // $thongbao="Đăng nhập thành công!";
                        header('Location: index.php');
                    }else{
                        $thongbao="Đăng nhập thất bại! Sai email hoặc mật khẩu.";
                    }
                }
                include "App/views/login.php";
                break;
            case 'register':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $name=$_POST['name'];
                    $email=$_POST['email'];
                    $pass=$_POST['pass'];
                    $phone=$_POST['phone'];
                    $address=$_POST['address'];
                    insert_taikhoan($name, $email, $pass, $phone, $address);
                    $thongbao="Đăng ký thành công! Vui lòng đăng nhập.";
                }
                include "App/views/register.php";
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