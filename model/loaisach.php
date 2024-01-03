<?php 
function loadall_loaisach(){
    $sql="select * from categories order by id asc";
    $listloaisach=pdo_query($sql);
    return  $listloaisach;
}

function insert_loaisach($tenloaisach){
    $sql = "insert into categories(name) values('$tenloaisach')";
    pdo_execute($sql);
}

function loadone_loaisach($id){
    $sql = "select * from categories where id = $id";
    $dm = pdo_query_one($sql);
    return $dm;
}

function update_loaisach($tenloaisach,$idloaisach){
    $sql = "update categories set name='$tenloaisach' where id=".$idloaisach;
    pdo_execute($sql);
}

function delete_loaisach($idloaisach){
    $sql = "delete from categories where id=".$idloaisach;
    pdo_execute($sql);
}
function load_ten_loaisach($iddm) {
    if ($iddm>0) {
        $sql = "select * from categories where id=".$iddm;
        $dm =pdo_query_one($sql);
        extract($dm);
        return $name;
    } else {
        return "";
    }
}
?>