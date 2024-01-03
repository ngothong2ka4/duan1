<?php
    function loadall_thongke(){
        $sql = "select categories.id as madm, categories.name as tendm, count(books.id) as countsp, min(books.price) as minprice, max(books.price) as maxprice, avg(books.price) as avgprice";
        $sql.= " from books left join categories on categories.id=books.category_id";
        $sql.= " group by categories.id order by categories.id desc";
        $listtk = pdo_query($sql);
        return $listtk;
    }
?>