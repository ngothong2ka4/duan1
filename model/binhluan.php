<?php
    function loadall_bl(){
        $sql = " SELECT * FROM `comment` order by id asc";
        $result =  pdo_query($sql);
        return $result;
    }

    function delete_binhluan($idbinhluan){
        $sql = "delete from comment where id=".$idbinhluan;
        pdo_execute($sql);
    }
    function loadall_binhluan($idsach){
        $sql = "
        SELECT comment.id, comment.content, accounts.username, comment.ngaybinhluan FROM `comment` 
        LEFT JOIN accounts ON comment.user_id = accounts.id
        LEFT JOIN books ON comment.book_id = books.id
        WHERE comment.book_id = $idsach;
        ";
        $result =  pdo_query($sql);
        return $result;
    }
    function insert_binhluan($idbook, $iduser, $content){
        $date = date('Y-m-d');
        $sql = "
            INSERT INTO `comment`(`content`, `user_id`, `book_id`, `ngaybinhluan`) 
            VALUES ('$content','$iduser','$idbook','$date');
        ";
        pdo_execute($sql);
    }
?>