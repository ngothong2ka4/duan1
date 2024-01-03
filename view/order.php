<?php
if (!isset($_SESSION['user'])) {
	echo '<script type="text/javascript">alert("Bạn cần đăng nhập để vào Xem hoá đơn.");</script>';
	echo '<script type="text/javascript">window.location.href = "./index.php?dangnhap";</script>';
}
?>
<main class="bg_gray">
	<div class="container margin_30">
		<div class="page_header">
			<div class="breadcrumbs">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="#">Category</a></li>
					<li>Page active</li>
				</ul>
			</div>
			<h1>Đơn hàng</h1>
		</div>
		<!-- /page_header -->
		<table class="table">
            <thead align="center">
                <tr>
                    <th scope="col">Tên khách hàng</th>
                    <th scope="col">Email</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">SỐ điện thoại</th>
                    <th scope="col">Tổng tiền</th>
                    <th scope="col">Ngày đặt</th>
                    <th scope="col">PTTT</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                foreach ($order as $donhang) {
                    extract($donhang);
                    if ($pttt == 1) {
                        $phuongthuc = "Thanh toán khi nhận hàng";
                    }elseif($pttt == 2){
                        $phuongthuc = "Thanh toán online";
                    }
                    if ($status == 1) {
                        $trangthai = "Đang chuẩn bị hàng";
                    }elseif($status == 2){
                        $trangthai = "Đang vận chuyển";
                    }elseif($status == 3){
                        $trangthai = "Đã giao hàng";
                    }
                    echo '<form action="index.php?act=donhangchitiet" method="post">
                    <tr align="center" style="vertical-align: middle;">
                        <input type="hidden" name="id_donhang" value="'.$id.'">
                        <th scope="row">'.$username.'</th>
                        <td>' . $email . '</td>
                        <td>' . $address . '</td>
                        <td>' . $tel . '</td>
                        <td>' . $total . ' VNĐ</td>
                        <td>' . $ngay . '</td>
                        <td>' . $phuongthuc . '</td>
                        <td>' . $trangthai . '</td>
                        <td>
                        <button type="submit" value="submit" name="chitiet" class="btn btn-primary">Chi tiết</button>
                        </td>
                    </tr>
                    </form>';
                }
                ?>

            </tbody>
        </table>
		<div class="row add_top_30 flex-sm-row-reverse cart_actions">

		</div>
		<!-- /cart_actions -->

	</div>
	<!-- /container -->

	<div class="box_cart">
		<div class="container">
			<div class="row justify-content-end">
				
			</div>
		</div>
	</div>
	<!-- /box_cart -->

</main>
<!--/main-->
<script>
	
</script>