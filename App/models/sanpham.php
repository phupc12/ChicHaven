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
    function loadall_sanpham($kyw="", $iddm=0){
        $sql ="select * from sanpham where 1";
        if($kyw!=""){
            $sql.="and name like '%".$kyw."%'";
        }
        if($iddm>0){
            $sql.="and iddm ='".$iddm."'";
        }
        $sql.="order by id desc";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    function load_sanpham($id){
        $sql="select * from sanpham where id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function load_sanphamdm($id, $category_id){
        $sql="select * from sanpham where category_id =".$category_id." AND id <> ".$id;
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
  
?>