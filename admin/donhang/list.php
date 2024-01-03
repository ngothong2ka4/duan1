<?php include "box_left.php"; ?>
<div class="main-content">
    <div class="center">
        <h1>Danh Sách</h1>
        
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">User_id</th>
                    <th scope="col">Title book</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                    <th scope="col">order date</th>
                    <th scope="col">PTTT</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                foreach ($listdonhang as $donhang) {
                    extract($donhang);
                    if ($pttt == 1) {
                        $phuongthuc = "Thanh toán khi nhận hàng";
                    }elseif($pttt == 1){
                        $phuongthuc = "Thanh toán online";
                    }
                    if ($status == 1) {
                        $trangthai = "Đơn hàng mới";
                    }
                    echo '<tr>
                        <th scope="row">' . $id . '</th>
                        <th scope="row">' . $user_id . '</th>
                        <td>' . $title_book . '</td>
                        <td>' . $price . '</td>
                        <td>' . $tongso . '</td>
                        <td>' . $tong . '</td>
                        <td>' . $ngay . '</td>
                        <td>' . $phuongthuc . '</td>
                        <td>' . $trangthai . '</td>
                        <td>

                        </td>
                    </tr>';
                }
                ?>

            </tbody>
        </table>
        
        <!-- <a href="index.php?act=addsach"><button type="button" class="btn btn-primary">Thêm mới</button></a> -->
    </div>