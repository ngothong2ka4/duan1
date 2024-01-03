<?php include "box_left.php"; ?>
<?php
    if (isset($loaisach)) {
        extract($loaisach);
    }
?>
<div class="main-content">
    <h1 class="fw-bolder">Sửa Loại Sách</h1>
    <form action="index.php?act=updateloaisach" method="POST">
        <input type="hidden" name="id" value="<?php if (isset($id) && ($id != "")) echo $id ;?>" required>
        <div class="mb-3">
            <label class="form-label">Tên loại Sách:</label>
            <input type="text" class="form-control" name="tenloai" value="<?php if (isset($name) && ($name != "")) echo $name ;?>" required>
        </div> <br>
        <input type="submit" value="Cập Nhật" name="capnhat" class="btn btn-primary">
        <a href="index.php?act=listloaisach"><button type="button" class="btn btn-primary">Danh sách</button></a>
        
    </form>