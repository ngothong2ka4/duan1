<?php include "box_left.php"; ?>
<div class="main-content">
    <div class="center">
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Mã sách</th>
            <th scope="col">Thể loại sách</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Giá cao nhất</th>
            <th scope="col">Giá thấp nhất</th>
            <th scope="col">Giá trung bình</th>
        </tr>
    </thead>
            <?php
                foreach ($listthongke as $thongke) {
                    extract($thongke);
                    echo '<tr>
                    <th scope="col">'.$madm.'</th>
                    <th scope="col">'.$tendm.'</th>
                    <th scope="col">'.$countsp.'</th>
                    <th scope="col">'.$maxprice.'$</th>
                    <th scope="col">'.$minprice.'$</th>
                    <th scope="col">'.$avgprice.'$</th>
                </tr>';
                }
            ?>
    </table>
        <a href="index.php?act=bieudo"><button type="button" class="btn btn-primary">Biểu đồ thống kê</button></a>
    </div>
</div>