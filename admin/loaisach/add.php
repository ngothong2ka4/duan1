<?php include "box_left.php"; ?>
<div class="main-content">
    <h1 class="fw-bolder">Thêm Loại Sách</h1>
    <form action="index.php?act=addloaisach" method="POST">
        <div class="mb-3">
            <label class="form-label">Tên loại Sách:</label>
            <input type="text" class="form-control" name="tenloai" placeholder="Nhập tên loại sách" required>
        </div> <br>
        <input type="submit" value="Thêm Mới" name="themmoi" class="btn btn-primary">
        <a href="index.php?act=listloaisach"><button type="button" class="btn btn-primary">Danh sách</button></a>
        
    </form>
    <?php
        if(isset($thongbao) && ($thongbao!="")) {
            echo '<div class="alert alert-success mt-2" role="alert">
            '.$thongbao.'
        </div>';
          }
        ?>