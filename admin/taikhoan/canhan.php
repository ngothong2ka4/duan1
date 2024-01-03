<?php
    if (isset($_SESSION['admin'])) {
        extract($_SESSION['admin']);
    }
?>
<?php include "box_left.php"; ?>
<div class="main-content" style="padding-left: 300px;padding-right: 300px;">
    <h1 class="fw-bolder">Trang Cá Nhân</h1>
    <form action="index.php?act=updatecanhan" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username:</label>
            <input type="text" class="form-control" value="<?=$username?>" name="username">
        </div> <br>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="text" class="form-control" value="<?=$password?>" name="password">
        </div> <br>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email </label>
            <input type="email" class="form-control" value="<?=$email?>" name="email">
        </div> <br> 
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Address</label>
            <input type="text" class="form-control" value="<?=$address?>" name="address">
        </div><br>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tel</label>
            <input type="text" class="form-control" value="<?=$tel?>" name="tel">
        </div> <br>
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="submit" class="btn btn-primary" name="capnhat" value="Cập nhật">
        <a href="./taikhoan/logout.php"><button type="button" class="btn btn-primary">Đăng Xuất</button></a>
    </form>