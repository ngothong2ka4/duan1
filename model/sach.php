<?php
function loadall_sach($keyw,$category_id){
    $sql="SELECT *
    from books
    where 1";
    if($keyw!=""){
        $sql.=" and title like '%".$keyw."%'";
    }
    if($category_id>0){
        $sql.=" and category_id ='".$category_id."'";
    }
    $sql.=" order by books.id asc";
    $listsach=pdo_query($sql);
    return  $listsach;
}

function insert_sach($title,$img, $author, $price, $description,$category_id){
    $sql = "INSERT INTO `books`(`title`, `img`, `author`, `price`, `description`, `category_id`) VALUES ('$title', '$img', '$author', '$price', '$description', '$category_id');";
    pdo_execute($sql);
}

function loadone_sach($idsach){
    $sql = "select * from books where id = $idsach";
    $result = pdo_query_one($sql);
    return $result;
}
function update_sach($id,$title, $img, $author, $price, $description, $category_id){
    if($img!=""){
        $sql=  "UPDATE `books` SET `title` = '{$title}', `author` = '{$author}', `price` = '{$price}',`img` = '{$img}',`description` = '{$description}', `category_id` = '{$category_id}' WHERE `books`.`id` = $id";
    }else{
        $sql=  "UPDATE `books` SET `title` = '{$title}', `author` = '{$author}', `price` = '{$price}',`description` = '{$description}', `category_id` = '{$category_id}' WHERE `books`.`id` = $id";
    }
    pdo_execute($sql);
}

function delete_sach($id){
    $sql = "DELETE FROM books WHERE id=" .$id;
    pdo_execute($sql);
}

function loadall_sach_home() {
    $sql="select * from books where 1 order by id desc limit 0,8";
    $listsanpham=pdo_query($sql); 
    return $listsanpham;
}
?>