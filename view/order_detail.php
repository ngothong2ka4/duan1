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
			<h1>Đơn hàng chi tiết</h1>
		</div>
		<!-- /page_header -->
		<table class="table">
            <thead align="center">
                <tr>
                    <th scope="col">Ảnh </th>
                    <th scope="col">Tên Sách</th>
                    <th scope="col">Giá sách</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Tổng tiền</th>
                    <th scope="col">Ngày đặt</th>
                    <th scope="col">PTTT</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                foreach ($orderDetail as $order) {
                    extract($order);
                    $hinh = $img_path . $img;
                    if ($pttt == 1) {
                        $phuongthuc = "Thanh toán khi nhận hàng";
                    }elseif($pttt == 2){
                        $phuongthuc = "Thanh toán online";
                    }
                    echo '<tr style="vertical-align: middle;">
                        <th scope="row"><img src="' . $hinh . '" height="70px" class="lazy" alt="Image"></th>
                        <td>' . $title_book . '</td>
                        <td>' . $price . ' VNĐ</td>
                        <td>' . $tongso . '</td>
                        <td>' . $tong . ' VNĐ</td>
                        <td>' . $ngay . '</td>
                        <td>' . $phuongthuc . '</td>
                        <td>
                        </td>
                    </tr>';
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
                 <a href="index.php"><button type="button"  class="btn btn-primary">Về trang chủ</button></a>
			</div>
		</div>
	</div>
	<!-- /box_cart -->

</main>
<!--/main-->
<script>
	
</script>