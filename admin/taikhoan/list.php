<?php include "box_left.php"; ?>
<div class="main-content">
    <div class="center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Accounts_id</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Address</th>
                    <th scope="col">Tel</th>
                    <th scope="col">Role</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listtaikhoan as $taikhoan) {
                    extract($taikhoan);
                    $suataikhoan = "index.php?act=suataikhoan&id=" . $id;
                    $xoataikhoan = "index.php?act=xoataikhoan&id=" . $id;
                    if ($role == 0) {
                        $role_name = "Admin";
                    } else {
                        $role_name = "User";
                    }
                    echo '<tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $username . '</td>
                        <td>' . $email . '</td>
                        <td>' . $password . '</td>
                        <td>' . $address . '</td>
                        <td>' . $tel . '</td>
                        <td>' . $role_name . '</td>
                        <td>
                        <a href="' . $suataikhoan . '"><button type="button" class="btn btn-outline-secondary">Sửa</button></a>
                        <a href="' . $xoataikhoan . '"><button type="button" class="btn btn-outline-danger" onclick="return confirm(\' Bạn có muốn xóa không\')">Xóa</button></a>
                        </td>
                    </tr>';
                }
                ?>


            </tbody>
        </table>
        <!-- <a href="index.php?act=addloaisach"><button type="button" class="btn btn-primary">Thêm mới</button></a> -->
    </div>