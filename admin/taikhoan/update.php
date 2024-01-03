<?php include "box_left.php"; ?>
<?php
    if (isset($taikhoan)) {
        extract($taikhoan);
    }
?>
<div class="main-content">
    <h1 class="fw-bolder">Sửa Tài Khoản</h1>
    <form action="index.php?act=updatetaikhoan" method="POST" enctype="multipart/form-data">

        
        <input type="hidden" name="id" value="<?php if (isset($id) && ($id != "")) echo $id ;?>">
        <div class="mb-3">
            <label class="form-label">User name:</label>
            <input type="text" class="form-control" name="username" value="<?php if (isset($username) && ($username != "")) echo $username ;?>" required>
        </div> <br>
        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="text" class="form-control" name="email" value="<?php if (isset($email) && ($email != "")) echo $email ;?>" required>
        </div> <br>
        <div class="mb-3">
            <label class="form-label">Password:</label>
            <input type="text" class="form-control" name="password" value="<?php if (isset($password) && ($password != "")) echo $password ;?>" required>
        </div> <br>
        <div class="mb-3">
            <label class="form-label">Address:</label>
            <input type="text" class="form-control" name="address" value="<?php if (isset($address) && ($address != "")) echo $address ;?>" required>
        </div><br>
        <div class="mb-3">
            <label class="form-label">Tel:</label>
            <input type="text" class="form-control" name="tel" value="<?php if (isset($tel) && ($tel != "")) echo $tel ;?>" >
        </div><br>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Role</label>
            <select class="form-select" name="role">
                <option value="0" <?php echo ($role == 0) ? "selected" : ""?>>Admin</option>
                <option value="1" <?php echo ($role == 1) ? "selected" : ""?>>User</option>
                
            </select>
        </div><br>
        <input type="submit" value="Cập nhật" name="capnhat" class="btn btn-primary">
        <a href="index.php?act=listtaikhoan"><button type="button" class="btn btn-primary">Danh sách</button></a>
    </form>