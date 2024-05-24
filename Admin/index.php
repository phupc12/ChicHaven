<?php
include "../App/models/pdo.php";
include "../App/models/danhmuc_admin.php";
include "../App/models/sanpham_admin.php";
include "header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $filename = $_FILES['anhsp']['name'];
                $target_dir="upload/";
                $target_file = $target_dir . basename($_FILES["anhsp"]["name"]);
                if(move_ipload_file($_FILES["anhsp"]["name"],$target_file)){
                    echo "The file". htmlspecials(basename($_FILES));
                };
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
                    $tensp = $_POST['tensp'];
                    insert_sanpham($tensp);
                    $thongbao = "Thêm thành công";
                }
                include "sanpham/add.php";
                break;
            case 'lissp':
                $listdanhmuc = loadall_sanpham();
                include "sanpham/list.php";
                break;
            case 'xoasp':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_sanpham($_GET['id']); // Corrected variable from $tenloai to $_GET['id']
                }
                $listdanhmuc = loadall_sanpham();
                include "sanpham/list.php";
                break;
            case 'suasp':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $dm = loadone_sanpham($_GET['id']);
                }
                include "sanpham/update.php";
                break;
            case 'updatesp':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $tenloai = $_POST['tenloai'];
                    $id = $_POST['id'];
                    update_sanpham($id,$tenloai);
    
                    $thongbao = "Cập nhật thành công";
                }
                $sql = "select * from sanpham order by id desc";
                $listsanpham = pdo_query($sql);
                include "sanpham/list.php";
                break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
?>
