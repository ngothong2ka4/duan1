<?php include "box_left.php"; ?>
<div class="main-content">
    <div class="center">
        <h1>Danh Sách</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Category_id</th>
                    <th scope="col">Name</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listloaisach as $loaisach) {
                    extract($loaisach);
                    $sualoaisach = "index.php?act=sualoaisach&id=" . $id;
                    $xoaloaisach = "index.php?act=xoaloaisach&id=" . $id;
                    echo '<tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $name . '</td>
                        <td>
                        <a href="'.$sualoaisach.'"><button type="button" class="btn btn-outline-secondary">Sửa</button></a>
                        <a href="'.$xoaloaisach.'"><button type="button" class="btn btn-outline-danger" onclick="return confirm(\' Bạn có muốn xóa không\')">Xóa</button></a></td>
                    </tr>';
                }
                ?>


            </tbody>
        </table>
        <a href="index.php?act=addloaisach"><button type="button" class="btn btn-primary">Thêm mới</button></a>
    </div>