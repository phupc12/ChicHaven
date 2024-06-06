<?php
session_start();
include "../App/dao/pdo.php";
include "../App/dao/danhmuc_admin.php";
include "../App/dao/sanpham_admin.php";
include "../App/dao/taikhoan.php";
include "header.php";

$total_products = count_total_products();
$total_users = count_total_users();

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "Thêm thành công";
            }
            include "danhmuc/add.php";
            break;
        case 'lisdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']); // Corrected variable from $tenloai to $_GET['id']
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id,$tenloai);

                $thongbao = "Cập nhật thành công";
            }
            $sql = "select * from danhmuc order by id desc";
            $listdanhmuc = pdo_query($sql);
            include "danhmuc/list.php";
            break;
            /*quản lý sản phẩm*/
            case 'addsp':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $iddm = $_POST["iddm"];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../App/views/public/images/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
            
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // File uploaded successfully
                    } else {
                        $thongbao = "Sorry, there was an error uploading your file.";
                    }
                    insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                    $thongbao = "Thêm thành công";
                }

                $listdanhmuc = loadall_danhmuc();
                include "sanpham/add.php";
                break;
            
            case 'listsp':
                if(isset($_POST['listok'])&&($_POST['listok'])){
                    $kyw=$_POST['kyw'];
                    $iddm=$_POST['iddm'];
                }else{
                    $kyw='';
                    $iddm=0;
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham($kyw,$iddm); // Added missing arguments
                include "sanpham/list.php";
                break;
            case 'xoasp':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_sanpham($_GET['id']);
                }
                $listsanpham = loadall_sanpham("",0); // Added missing arguments
                include "sanpham/list.php";
                break;
                case 'suasp':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        $sanpham = loadone_sanpham($_GET['id']);
                        $listdanhmuc = loadall_danhmuc();
                        include "sanpham/update.php";
                    }
                    break;
                case 'dskh':
                    $listtaikhoan=loadall_taikhoan();
                    include "nguoidung/user.php";
                    break;
                case 'xoatk':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        delete_taikhoan($_GET['id']);
                        header('Location: index.php?act=dskh');
                    }
                    $listtaikhoan = loadall_taikhoan();
                    break;
                case 'logout':
                    unset($_SESSION['user']);
                    header('Location: ../index.php?act=login');
                    exit;

                case 'updatesp':
                    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                        // Kiểm tra xem $_POST['id'] có tồn tại không trước khi gán cho $id
                        $id = isset($_POST['id']) ? $_POST['id'] : null;
                
                        // Kiểm tra xem $id có giá trị hợp lệ không trước khi tiếp tục
                        if ($id !== null && $id > 0) {
                            $iddm = $_POST["iddm"];
                            $tensp = $_POST['tensp'];
                            $giasp = $_POST['giasp'];
                            $mota = $_POST['mota'];
                            $hinh = $_FILES['hinh']['name'];
                            $target_dir = "../App/views/public/images/";
                            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                
                            if ($hinh != "" && move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                                // File uploaded successfully
                            } else {
                                $hinh = ""; // Không thay đổi hình nếu không upload thành công
                                $thongbao = "Sorry, there was an error uploading your file.";
                            }
                
                            // Gọi hàm update_sanpham chỉ khi $id hợp lệ
                            update_sanpham($id, $tensp, $giasp, $hinh, $mota, $iddm);
                            $thongbao = "Cập nhật thành công";
                        } else {
                            $thongbao = "ID sản phẩm không hợp lệ";
                        }
                    }
                    
                    
                    $listdanhmuc = loadall_danhmuc();
                    $listsanpham = loadall_sanpham("", 0);
                    include "sanpham/list.php";
                    break;
                        case 'dsbl':
                            include "binhluan/list.php";
                            break;
                    
                    }
                    

} else {
    include "home.php";
}

include "footer.php";
?>