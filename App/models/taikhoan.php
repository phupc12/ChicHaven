<?php
    function insert_taikhoan($name, $email, $pass, $phone, $address){
        $sql ="insert into users(name, email, pass, phone, address) values('$name', '$email', '$pass', '$phone', '$address')";
        pdo_execute($sql);
    }
    function checkusers($name, $pass){
        $sql="select * from users where name='".$name."' AND pass='".$pass."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }
?>