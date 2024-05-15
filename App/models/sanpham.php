<?php
    function loadall_sanpham_home(){
        $sql ="select * from sanpham where 1 order by id desc limit 0,3";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham_shop(){
        $sql ="select * from sanpham where 1 order by id desc limit 0,8";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
  
?>