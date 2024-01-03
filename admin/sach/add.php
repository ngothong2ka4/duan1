<?php include "box_left.php"; ?>
<div class="main-content">
    <h1 class="fw-bolder">Thêm Sách</h1>
    <form action="index.php?act=addsach" method="POST" enctype="multipart/form-data">

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Loại Sách</label>
            <select class="form-select" name="loaisach">
                <option selected>Loại Sách</option>
                <?php
                foreach ($listloaisach as $loaisach) {
                    extract($loaisach);
                    echo '<option value=' . $id . '>' . $name . '</option>';
                }
                ?>
            </select>
        </div><br>
        <div class="mb-3">
            <label class="form-label">Tên Sách:</label>
            <input type="text" class="form-control" name="tensach" placeholder="Nhập Tên Sách" required>
        </div> <br>
        <div class="mb-3">
            <label class="form-label">Ảnh sách:</label>
            <input type="file" class="form-control" name="image" required>
        </div> <br>
        <div class="mb-3">
            <label class="form-label">Tác Giả</label>
            <input type="text" class="form-control" name="tacgia" placeholder="Nhập Tên Tác Giả" required>
        </div> <br>
        <div class="mb-3">
            <label class="form-label">Giá</label>
            <input type="number" class="form-control" name="gia" placeholder="Nhập Giá" required>
        </div><br>
        <div class="mb-3">
            <label class="form-label">Mô tả</label>
            <textarea class="form-control" name="mota" placeholder="Mô tả sách" style="height: 100px" required></textarea>
        </div> <br>

        <input type="submit" value="Thêm Mới" name="themmoi" class="btn btn-primary">
        <a href="index.php?act=listsach"><button type="button" class="btn btn-primary">Danh sách</button></a>
    </form>
    <?php
        if(isset($thongbao) && ($thongbao!="")) {
            echo '<div class="alert alert-success mt-2" role="alert">
            '.$thongbao.'
        </div>';
          }
        ?>