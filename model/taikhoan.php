<?php
    function update_taikhoan($id,$username,$password,$email,$address,$tel,$role){
        $sql=  "UPDATE `accounts` SET `username` = '{$username}', `password` = '{$password}', `email` = '{$email}', `address` = '{$address}', `tel` = '{$tel}', `role` = '{$role}' WHERE `accounts`.`id` = $id";
        pdo_execute($sql);
    }
    function update_taikhoan_user($id,$username,$password,$email,$address,$tel){
        $sql=  "UPDATE `accounts` SET `username` = '{$username}', `password` = '{$password}', `email` = '{$email}', `address` = '{$address}', `tel` = '{$tel}' WHERE `accounts`.`id` = $id";
        pdo_execute($sql);
    }
    function loadall_taikhoan(){
        $sql="select * from accounts order by id asc";
        $listtaikhoan=pdo_query($sql);
        return  $listtaikhoan;
    }

    function loadone_taikhoan($idtaikhoan){
        $sql = "select * from accounts where id = $idtaikhoan";
        $tk = pdo_query_one($sql);
        return $tk;
    }

    function delete_taikhoan($idtaikhoan){
        $sql = "delete from accounts where id=".$idtaikhoan;
        pdo_execute($sql);
    }
    function insert_taikhoan($username, $email, $password, $address, $tel){
        $sql = "insert into accounts(username, email, password, address, tel) values('$username', '$email', '$password', '$address', '$tel')";
        pdo_execute($sql);
    }
    function insert_taikhoan_admin($adminname, $email, $password, $address, $tel){
        $sql = "insert into accounts(username, email, password, address, tel,role) values('$adminname', '$email', '$password', '$address', '$tel','0')";
        pdo_execute($sql);
    }
    function checkuser($username, $password){
        $sql = "select * from accounts where username='".$username."' AND password='".$password."' AND role= 1";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function checkadmin($adminname, $password){
        $sql = "select * from accounts where username='".$adminname."' AND password='".$password."' AND role= 0";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function dangxuat() {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
        }elseif(isset($_SESSION['admin'])){
            unset($_SESSION['admin']);
        }
    }
?>