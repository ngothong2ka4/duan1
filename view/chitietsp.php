<?php
extract($onesp);
$hinhpath = $img_path . $img;
?>

<main class="bg_gray">
	<div class="container margin_30">
		<div class="page_header">
			<div class="breadcrumbs">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Sản phẩm</a></li>
					<li>
						<?php echo $title ?>
					</li>
				</ul>
			</div>
			<h1>
				<?php echo $title ?>
			</h1>
		</div>
		<!-- /page_header -->
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="owl-carousel owl-theme prod_pics magnific-gallery">
					<div class="item">
						<a href="<?php echo $hinhpath ?>" title="<?php echo $title ?>" data-effect="mfp-zoom-in"><img src="<?php echo $hinhpath ?>" alt=""></a>
					</div>
					<!-- /item -->
				</div>
				<!-- /carousel -->
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->

	<div class="bg_white">
		<div class="container margin_60_35">
			<div class="row justify-content-between">
				<div class="col-lg-6">
					<div class="prod_info version_2">
						<span class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i><em>4 reviews</em></span>
						<!-- <p style="text-align: justify"><small>BOOk: <?php echo $id ?></small><br><?php echo $description ?></p> -->
						<div style="font-size:18px">
							<p> <strong>Tác giả:</strong>
								<?php echo $author ?>
							</p>
							<p><strong>Hình thức:</strong> Bìa mềm</p>
							<p><strong>Thời gian giao hàng</strong>: 3-5 ngày</p>
							<p><strong>Chính sách đổi trả</strong>: Đổi trả sản phẩm trong 30 ngày</p>
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="prod_options version_2">
						<div class="row">
							<label class="col-xl-7 col-lg-5  col-md-6 col-6"><strong>Quantity</strong></label>
							<div class="col-xl-5 col-lg-5 col-md-6 col-6">
								<div class="numbers-row">
									<form action="index.php?act=chitietsp&idsp=<?= $id ?>" method="post">

										<input type="text" value="1" id="quantity_1" class="qty2" name="quantity">
										<div class="inc button_inc">+</div>
										<div class="dec button_inc">-</div>
								</div>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-lg-7 col-md-6">
								<div class="price_main"><span class="new_price" style="color: red">Giá:
										<?php echo $price ?> VNĐ
									</span></div>
							</div>
							<div class="col-lg-5 col-md-6" >
								<input type="hidden" name="idbook" value="<?= $id ?>">
								<input type="hidden" name="title" value="<?= $title ?>">
								<input type="hidden" name="img" value="<?= $img ?>">
								<input type="hidden" name="price" value="<?= $price ?>">
								<input type="submit" style="width: 170px;" value="Mua ngay" name="muangay" class="btn_1">
							</div>
							<div class="col-lg-5 col-md-6 " style="margin-left: 295px; margin-top: 10px;">
								<input type="hidden" name="idbook" value="<?= $id ?>">
								<input type="hidden" name="title" value="<?= $title ?>">
								<input type="hidden" name="img" value="<?= $img ?>">
								<input type="hidden" name="price" value="<?= $price ?>">
								<input type="submit" value="Thêm vào giỏ hàng" name="themvaocart" class="btn_1">

							</form>
								
							</div>
							
							
							
						</div>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
	</div>
	<!-- /bg_white -->

	<div class="tabs_product bg_white version_2">
		<div class="container" style="justify-content: center;">
			<ul class="nav nav-tabs" role="tablist" style="justify-content: center;">
				<li class="nav-item">
					<a id="tab-A" href="#pane-A" class="nav-link active" data-bs-toggle="tab" role="tab">Mô tả</a>
				</li>
				<li class="nav-item">
					<a id="tab-B" href="#pane-B" class="nav-link" data-bs-toggle="tab" role="tab">Bình luận</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- /tabs_product -->

	<div class="tab_content_wrapper">
		<div class="container">
			<div class="tab-content" role="tablist">
				<div id="pane-A" class="card tab-pane fade active show" role="tabpanel" aria-labelledby="tab-A">
					<div class="card-header" role="tab" id="heading-A">
						<h5 class="mb-0">
							<a class="collapsed" data-bs-toggle="collapse" href="#collapse-A" aria-expanded="false" aria-controls="collapse-A">
								Xem thêm
							</a>
						</h5>
					</div>

					<div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
						<div class="card-body">
							<div class="row justify-content-between">
								<div class="col-lg-6">
									<h3>Mô tả</h3>
									<?php
									echo '<p>' . $description . '</p>';
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /TAB A -->
				<div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
					<div class="card-header" role="tab" id="heading-B">
						<h5 class="mb-0">
							<a class="collapsed" data-bs-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
								Xem thêm
							</a>
						</h5>
					</div>
					<div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B">
						<div class="card-body">
							<div class="row justify-content-between">


								<?php
								if (isset($binhluan) && ($binhluan)) {
									foreach ($binhluan as $value) {
										echo '<div class="col-lg-5">
												<div class="review_content">
												<div class="clearfix add_bottom_10">
											<em>' . $value["ngaybinhluan"] . '</em>
											</div>
											<h4>' . $value["username"] . '</h4>
											<p>' . $value["content"] . '</p>
											</div>
								</div>';
									}
								}

								?>




							</div>

							<!-- /row -->
							<p class="text-end"><a href="index.php?act=binhluansp&idbook=<?php echo $id ?>" class="btn_1">Đánh giá</a></p>
						</div>
						<!-- /card-body -->
					</div>

				</div>
				<!-- /tab B -->
			</div>
			<!-- /tab-content -->
		</div>
		<!-- /container -->
	</div>
	<!-- /tab_content_wrapper -->

	<div class="bg_white">
		<div class="container margin_60_35">
			<div class="main_title">
				<h2>Sản phẩm liên quan</h2>
				<span>Products</span>
			</div>
			<div class="owl-carousel owl-theme products_carousel">
				<?php
				$sp_cung_loai = loadall_sach("", $category_id);
				foreach ($sp_cung_loai as $sp_cung_loai) {
					extract($sp_cung_loai);
					$hinhpath = $img_path . $img;
					$linksp = "index.php?act=chitietsp&idsp=" . $id;
					echo '
							<div class="item">
							<div class="grid_item">
								<figure>
									<span class="ribbon off">New</span>
									<a href="' . $linksp . '">
										<img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg"
											data-src="' . $hinhpath . '" alt=""  style="height: 400px; width:290px">
									</a>
									<div data-countdown="2019/05/15" class="countdown"></div>
								</figure>
								<a href="' . $linksp . '">
									<h3>' . $title . '</h3>
								</a>
								<div class="price_box">
									<span class="new_price">' . $price . ' VNĐ </span>
								</div>
								<ul>
									<li>
									<form action="index.php" method="post">
									<input type="hidden" name="idbook" value="' . $id . '">
									<input type="hidden" name="title" value="' . $title . '">
									<input type="hidden" name="img" value="' . $img . '">
									<input type="hidden" name="price" value="' . $price . '">
									<button type="submit" style="border:none" name="themvaocart" value="submit" ><i class="ti-shopping-cart"></i></button>
								</form>
									</li>
								</ul>
							</div>
							<!-- /grid_item -->
						</div>
							';
				}
				?>
			</div>
			<!-- /products_carousel -->
		</div>
		<!-- /container -->
	</div>
	<!-- /bg_white -->

</main>
<!-- /main -->