<?php include "box_left.php"; ?>
<div class="main-content">
    <div class="center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Comment_id</th>
                    <th scope="col">Content</th>
                    <th scope="col">User_id</th>
                    <th scope="col">Book_id</th>
                    <th scope="col">Comment_date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($listbinhluan as $binhluan){
                            extract($binhluan);
                            $xoabinhluan = "index.php?act=xoabinhluan&id=" . $id;
                            echo '<tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$content.'</td>
                            <td>'.$user_id.'</td>
                            <td>'.$book_id.'</td>
                            <td>'.$ngaybinhluan.'</td>
                            <td>
                            <a href="'.$xoabinhluan.'"><button type="button" class="btn btn-outline-danger" onclick="return confirm(\' Bạn có muốn xóa không\')">Xóa</button></a></td>
                        </tr>';
                    }
                ?>
                

            </tbody>
        </table>
        <!-- <a href="index.php?act=addloaisach"><button type="button" class="btn btn-primary">Thêm mới</button></a> -->
    </div>