<?php
    function loadall_donhang(){
        $sql="SELECT od.id, od.user_id,books.title AS 'title_book',books.price AS 'price', odd.quantity AS 'tongso',books.price * odd.quantity AS'tong',
        od.order_date AS 'ngay',od.pttt,od.status
        FROM `oders` od JOIN order_detail odd ON od.id = odd.order_id
                        JOIN accounts acc ON od.user_id = acc.id
                        JOIN books ON odd.book_id=books.id";
        $listloaisach=pdo_query($sql);
        return  $listloaisach;
    }
    function load_donhang($id_user){
        $sql="SELECT od.id, od.user_id,books.img,books.title AS 'title_book',books.price AS 'price', odd.quantity AS 'tongso',books.price * odd.quantity AS'tong',
        od.order_date AS 'ngay',od.pttt,od.status
        FROM `oders` od JOIN order_detail odd ON od.id = odd.order_id
                        JOIN accounts acc ON od.user_id = acc.id
                        JOIN books ON odd.book_id=books.id
        WHERE od.user_id = $id_user";
        $listdonhang=pdo_query($sql);
        return  $listdonhang;
    }
    function donhang($id_user){
        $sql="SELECT od.id,acc.username,acc.email,acc.address,acc.tel,  od.total,
        od.order_date AS 'ngay',od.pttt,od.status
        FROM `oders` od JOIN order_detail odd ON od.id = odd.order_id
                        JOIN accounts acc ON od.user_id = acc.id
        WHERE od.user_id = $id_user
        ORDER BY od.id DESC LIMIT 0,1";
        $listdonhang=pdo_query($sql);
        return  $listdonhang;
    }
    function load_donhangchitiet($id_user,$iddonhang){
        $sql="SELECT od.id,books.img,books.title AS 'title_book',books.price AS 'price', odd.quantity AS 'tongso',books.price * odd.quantity AS'tong',
        od.order_date AS 'ngay',od.pttt
        FROM `oders` od JOIN order_detail odd ON od.id = odd.order_id
                        JOIN accounts acc ON od.user_id = acc.id
                        JOIN books ON odd.book_id=books.id
        WHERE od.user_id = $id_user and od.id =$iddonhang";
        $listdonhang=pdo_query($sql);
        return  $listdonhang;
    }
    function insert_donhang($user_id,$order_date, $pttt, $total, $status) {
        $sql = "INSERT INTO `oders`(`user_id`, `order_date`, `pttt`, `total`, `status`) VALUES ('$user_id', '$order_date', '$pttt', '$total', '$status');";
        return pdo_execute_return_lastInsertId($sql);
    }

    function insert_donhang_chitiet($title_book,$price, $quantity, $total,$book_id, $id_order) {
        $sql = "INSERT INTO `order_detail`(`title_book`, `price`, `quantity`, `total`,`book_id`, `order_id`) VALUES ('$title_book', '$price', '$quantity', '$total','$book_id', '$id_order');";
        pdo_execute($sql);
    }
?>