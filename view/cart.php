<?php
if (!isset($_SESSION['user'])) {
	echo '<script type="text/javascript">alert("Bạn cần đăng nhập để vào giỏ hàng.");</script>';
	echo '<script type="text/javascript">window.location.href = "./index.php?act=dangnhap";</script>';
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
			<h1>Cart page</h1>
		</div>
		<!-- /page_header -->
		<table class="table table-striped cart-list">
			<thead>
				<tr>
					<th>
						Sản phẩm
					</th>
					<th>
						Giá
					</th>
					<th>
						Số lượng
					</th>
					<th>
						Tổng 
					</th>
					<th>
						Xoá
					</th>
					<th>
						Chọn
					</th>
				</tr>
			</thead>
			<tbody>
				<form action="index.php?act=thanhtoan" method="post">
					<?php
					$tong = 0;
					$i = 0;
					foreach ($_SESSION['mycart'] as $cart) {
						$hinh = $img_path . $cart[2];
						if (isset($cart[4]) && ($cart[4])) {
							$soluong = $cart[4];
							$ttien = $cart[3] * $cart[4];
						} else {
							$soluong = 1;
							$ttien = $cart[3] * $soluong;
						}
						$tong += $ttien;

						$xoasp = '<a href="index.php?act=xoagiohang&idcart=' . $i . '"><i class="ti-trash"></i></a>';
						echo '<tr>
								
								<td>
									<div class="thumb_cart">
										<img src="' . $hinh . '" height="70px" class="lazy" alt="Image">
									</div>
									<span class="item_cart">' . $cart[1] . '</span>
								</td>
								<td>
									<strong class="giasp">' . $cart[3] . '</strong><strong> VNĐ</strong>
								</td>
								<td>
									<div class="numbers-row">
										<input type="number" value="' . $soluong . '" id="quantity_1" class="qty2" name="quantity[]">
										<div class="inc button_inc">+</div>
										<div class="dec button_inc">-</div>
									</div>
								</td>
								<td>
									<strong class="thanhtien">' . $ttien . '</strong><strong> VNĐ</strong>
								</td>
								<td class="options">
									' . $xoasp . '
								</td>
								<td>
									<input class="form-check-input" type="checkbox" name="check[]" value="'.$cart[0].'">
								</td>
							</tr>';
						$i += 1;
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
				<div class="col-xl-4 col-lg-4 col-md-6">
					<input type="submit" class="btn_1 full-width cart" value="Thanh toán" name="submit">
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /box_cart -->

</main>
<!--/main-->
<script>
	
</script>