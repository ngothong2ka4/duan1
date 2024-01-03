<?php
if (!isset($_SESSION['user'])) {
	echo '<script type="text/javascript">alert("Bạn cần đăng nhập để vào thanh toán.");</script>';
	echo '<script type="text/javascript">window.location.href = "./index.php";</script>';
}
// if (!isset($soluong) && ($soluong=="")) {
// 	$soluong = [];
// }
// var_dump($_SESSION['cartorder']);
?>
<main class="bg_gray">


	<div class="container margin_30">
		<div class="page_header">
			<div class="breadcrumbs">
				<ul>
					<li><a href="index.php">Trang chủ</a></li>
					<li>Đơn hàng</li>
				</ul>
			</div>

		</div>
		<!-- /page_header -->
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="step first">
					<h3>1. Thông tin khách hàng</h3>
					<div class="tab-content checkout">
						<div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tab_1">
							<?php
							if (isset($_SESSION['user']) && ($_SESSION['user'])) {
								echo '
									<div class="form-group">
									<input type="text" class="form-control" value="' . $_SESSION['user']['username'] . '">
									</div>
									<div class="form-group">
										<input type="email" class="form-control" value="' . $_SESSION['user']['email'] . '">
									</div>
									<hr>
									<div class="form-group">
										<input type="text" class="form-control" value="' . $_SESSION['user']['address'] . '">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" value="' . $_SESSION['user']['tel'] . '">
									</div>';
							}
							?>

							<hr>
							<hr>
						</div>
					</div>
				</div>
				<!-- /step -->
			</div>
			
			<div class="col-lg-4 col-md-6" >
				<div class="step last">
					<h3>2. Tổng đơn hàng</h3>
					<div class="box_general summary">
						<ul>
							<?php
							$tong = 0;
							$j = 0;
							foreach ($_SESSION['cartorder'] as $cart) {
								$hinh = $img_path . $cart[2];
								if (isset($soluong) && ($soluong)) {
									$_SESSION['cartorder'][$j][4] =intval($soluong[$j]);
								}else{
									$_SESSION['cartorder'][$j][4] =$cart[4];
								}
								$ttien = $cart[3]*$_SESSION['cartorder'][$j][4];
								$tong += $ttien;
								echo '
								<li class="clearfix"><em style="width:60%"> '.$cart[1].'</em> <span style="width:40%">'.$_SESSION['cartorder'][$j][4].' x '.$cart[3].' VNĐ</span></li>
								';
								$j+=1;
							}
							// var_dump($_SESSION['mycart']);
							?>
						</ul>
						<ul>
							<li class="clearfix"><em><strong>Subtotal</strong></em>  <span><?=$tong?> VNĐ</span></li>
							<li class="clearfix"><em><strong>Shipping</strong></em> <span>10000 VNĐ</span></li>
							
						</ul>
					<form action="index.php?act=thanhtoan" method="POST">

						<div class="total clearfix">TOTAL <span><?php $tongtien =$tong+10000;
						echo $tongtien ?> VNĐ</span></div>
						<input type="hidden" name="tongtien" value="<?=$tongtien?>">
						
					</div>
					<!-- /box_general -->
				</div>
				<!-- /step -->
			</div>
			<div class="col-lg-4 col-md-6">
				
				<div class="step middle payments">
					<h3>3. Phương thức thanh toán</h3>
					<ul>
						<li>
							<input type="submit" class="btn_1 full-width" name="thanhtoan" value="Thanh toán khi nhận hàng">
						</li>
						</form>
						<form action="index.php?act=online-checkout" method="POST">
						<li>
							<input class="btn_1 full-width" type="submit" name="redirect" value="Thanh toán online"></input>
						</li>
					</ul>
				</div>
				</form>
				<!-- /step -->

			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</main>