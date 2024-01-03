<?php include "box_left.php"; ?>
<?php
    if (isset($sach)) {
        extract($sach);
    }
?>
<div class="main-content">
    <h1 class="fw-bolder">Sửa Sách</h1>
    <form action="index.php?act=updatesach" method="POST" enctype="multipart/form-data">

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Loại Sách</label>
            <select class="form-select" name="loaisach">
                <?php
                foreach($listloaisach as $key=>$value){
                    if($category_id==$value['id']){
                        echo '<option value="'.$value['id'].'" selected>'.$value['name'].'</option>' ;
                    }else{
                        echo '<option value="'.$value['id'].'">'.$value['name'].'</option>' ;
                    }

                }
                ?>
            </select>
        </div><br>
        <input type="hidden" name="id" value="<?php if (isset($id) && ($id != "")) echo $id ;?>" >
        <div class="mb-3">
            <label class="form-label">Tên Sách:</label>
            <input type="text" class="form-control" name="tensach" value="<?php if (isset($title) && ($title != "")) echo $title ;?>" required>
        </div> <br>
        <div class="mb-3">
            <label class="form-label">Ảnh sách:</label>
            <input type="file" class="form-control" name="image" required>
        </div> <br>
        <div class="mb-3">
            <label class="form-label">Tác Giả</label>
            <input type="text" class="form-control" name="tacgia" value="<?php if (isset($author) && ($author != "")) echo $author ;?>" required>
        </div> <br>
        <div class="mb-3">
            <label class="form-label">Giá</label>
            <input type="number" class="form-control" name="gia" value="<?php if (isset($price) && ($price != "")) echo $price ;?>" required>
        </div><br>
        <div class="mb-3">
            <label class="form-label">Mô tả</label>
            <textarea class="form-control" name="mota" style="height: 100px" required><?php if (isset($description) && ($description != "")) echo $description ;?></textarea>
        </div> <br>

        <input type="submit" value="Cập nhật" name="capnhat" class="btn btn-primary">
        <a href="index.php?act=listsach"><button type="button" class="btn btn-primary">Danh sách</button></a>
    </form> 