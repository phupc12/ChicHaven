<?php
    session_start();
    include "App/dao/pdo.php";
    include "App/dao/sanpham.php";
    include "App/dao/taikhoan.php";
    include "App/views/global.php";
    include "App/views/header.php";
    //home
    $spnew = loadall_sanpham_home();
    //shop
    $spshow = loadall_sanpham_shop();
    //homefooter
    $spfooter = loadall_sanpham_home_footer();
    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act = $_GET['act'];
        switch ($act) {
            case 'sanphamchitiet':
                
                if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                    $id=$_GET['idsp'];
                    $onesp=load_sanpham($id);
                    extract($onesp);
                    $spdm=load_sanphamdm($id, $iddm);
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
            case 'checkout':
                $listtaikhoan = loadall_taikhoan();
                include "App/views/checkout.php";
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
                if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
                    if(isset($_POST['email']) && isset($_POST['pass'])){
                        $email = $_POST['email'];
                        $pass = $_POST['pass'];
                        $checkusers = checkusers($pdo, $email, $pass);
                        if(is_array($checkusers)){
                            if($checkusers['rol'] == 1) {
                                // Nếu rol là 1 thì đăng nhập vào trang admin
                                $_SESSION['user'] = $checkusers;
                                header('Location: index.php');
                            } elseif ($checkusers['rol'] == 0) {
                                // Nếu rol là 0 thì đăng nhập vào trang user
                                $_SESSION['user'] = $checkusers;
                                header('Location: index.php');
                            }
                        } else {
                            $tb = "Đăng nhập thất bại! Sai email hoặc mật khẩu.";
                        }
                    }
                }
                include "App/views/login.php";
                break;
            case 'logout':
                unset($_SESSION['user']);
                header('Location: index.php');
                exit;
            case 'register':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $name=$_POST['name'];
                    $email=$_POST['email'];
                    $pass=$_POST['pass'];
                    $phone=$_POST['phone'];
                    $address=$_POST['address'];
                    insert_taikhoan($name, $email, $img, $pass, $phone, $address);
                    $tb="Đăng ký thành công! Vui lòng đăng nhập.";
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