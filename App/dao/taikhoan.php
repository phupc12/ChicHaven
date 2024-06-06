<?php
    function insert_taikhoan($name, $email, $img, $pass, $phone, $address){
        $sql ="insert into users(name, email, img, pass, phone, address) values('$name', '$email', '$img', '$pass', '$phone', '$address')";
        pdo_execute($sql);
    }
    // function checkusers($name, $pass){
    //     $sql="select * from users where name='".$name."' AND pass='".$pass."'";
    //     $sp=pdo_query_one($sql);
    //     return $sp;
    // }
    // function checkusers($pdo, $name, $pass){
    //     $sql = "SELECT * FROM users WHERE name = :name AND pass = :pass";
    //     $stmt = $pdo->prepare($sql);
    //     $stmt->bindParam(':name', $name);
    //     $stmt->bindParam(':pass', $pass);
    //     $stmt->execute();
    //     $sp = $stmt->fetch(PDO::FETCH_ASSOC);
    //     return $sp;
    // }

    function checkusers($pdo, $email, $pass){
        $sql = "SELECT * FROM users WHERE email = :email AND pass = :pass";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':pass', $pass);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $user;
    }
    
    function loadall_taikhoan(){
        $sql = "select * from users order by id desc";
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;
    }
?>