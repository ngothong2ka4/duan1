
		
	<main>
		
		<div class="container margin_30">
			<div class="main_title">
				<h2>Sản phẩm tìm kiếm</h2>
				<span>Products</span>
			</div>

		    <!-- /toolbox -->
			<div class="row small-gutters">
				<?php
				foreach ($dssp as $sp) {
					extract($sp);
					$linksp = "index.php?act=chitietsp&idsp=" . $id;
					$hinhpath = $img_path.$img;
					echo '
									<div class="col-6 col-md-4 col-xl-3">
									<div class="grid_item">
								<figure>
									<span class="ribbon off">New</span>
									<a href="'.$linksp.'">
										<img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg"
											data-src="'. $hinhpath . '" alt=""  style="height: 400px; width:290px">
									</a>
									<div data-countdown="2019/05/15" class="countdown"></div>
								</figure>
								<a href="'.$linksp.'">
									<h3>'.$title.'</h3>
								</a>
								<div class="price_box">
									<span class="new_price">'.$price.' VNĐ </span>
								</div>
								<ul>
									<li>
									<form action="index.php" method="post">
									<input type="hidden" name="idbook" value="'.$id.'">
									<input type="hidden" name="title" value="'.$title.'">
									<input type="hidden" name="img" value="'.$img.'">
									<input type="hidden" name="price" value="'.$price.'">
									<button type="submit" style="border:none" name="themvaocart" value="submit" ><i class="ti-shopping-cart"></i></button>
								</form>
									</li>
								</ul>
							</div>
							<!-- /grid_item --
									<!-- /grid_item -->
								</div>
								';
				}
				?>
				<!-- /col -->

				
			
				
		</div>
		<!-- /container -->
	</main>
	<!-- /main -->
	
