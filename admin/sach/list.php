<?php include "box_left.php"; ?>
<div class="main-content">
    <div class="center">
        <h1>Danh Sách</h1>
        <form action="index.php?act=listsach" class="d-flex mb-3" method="POST">
            <input class="form-control me-2 w-25" style="margin-left: 500px; margin-right:-10px" name="keyw" type="search" placeholder="Search" aria-label="Search">
            <select class="form-select" style="width: 120px;margin-right: 8px;" name="idloaisach">
                <option value="0" selected>Tất cả</option>
                <?php
                foreach ($listloaisach as $loaisach) {
                    extract($loaisach);
                    echo '<option value="' . $id . '">' . $name . '</option>';
                }
                ?>
            </select>
            <input type="submit" name="search" class="btn btn-outline-success" value="Search">
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Book_id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Img</th>
                    <th scope="col">Author</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Category_id</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listsach as $sach) {
                    extract($sach);
                    $suasach = "index.php?act=suasach&id=" . $id;
                    $xoasach = "index.php?act=xoasach&id=" . $id;
                    $hinhpath = "../upload/" . $img;
                    if (is_file($hinhpath)) {
                        $hinhpath = "<img src= '" . $hinhpath . "' width='150px' height='200px'>";
                    } else {
                        $hinhpath = "No file img!";
                    }
                    echo '<tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $title . '</td>
                        <td>' . $hinhpath . '</td>
                        <td>' . $author . '</td>
                        <td>' . $price . '</td>
                        <td>' . $description . '</td>
                        <td>' . $category_id . '</td>
                        <td>
                        <a href="' . $suasach . '"><button type="button" class="btn btn-outline-secondary">Sửa</button></a>
                        <a href="' . $xoasach . '"><button type="button" class="btn btn-outline-danger" onclick="return confirm(\' Bạn có muốn xóa không\')">Xóa</button></a>
                        </td>
                    </tr>';
                }
                ?>

            </tbody>
        </table>
        <a href="index.php?act=addsach"><button type="button" class="btn btn-primary">Thêm mới</button></a>
    </div>