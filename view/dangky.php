<main class="bg_gray">

	<div class="container margin_30">
		<div class="page_header">
			<div class="breadcrumbs">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Category</a></li>
					<li>Page active</li>
				</ul>
			</div>
		</div>
		<!-- /page_header -->
		<div class="row ">
			<form action="index.php?act=dangky" method="post">
				<div class="col-xl-6 col-lg-6 col-md-8">
					<div class="box_account">
						<h3 class="new_client">Tạo tài khoản mới</h3> <small class="float-right pt-2">* Điền đủ các trường</small>
						<div class="form_container">
							<div class="form-group">
								<input type="text" class="form-control" name="username" id="username" value="" placeholder="Username*" required>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="email" id="email_2" placeholder="Email*" required>
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="password" id="password_2" value="" placeholder="Password*" required>
							</div>


							<div class="private box">
								<div class="row no-gutters">
									<div class="col-12">
										<div class="form-group">
											<input type="text" class="form-control" name="address" placeholder="Full Address*" required>
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="form-group">
									<input type="text" class="form-control" name="tel" placeholder="Telephone *" required>
								</div>
								<?php
								if (isset($thongbao) && ($thongbao != "")) {
									echo $thongbao;
								}

								?>
							</div>
						</div>
						<!-- /row -->

						<hr>

						<!-- <div class="form-group">
							<label class="container_check">Accept <a href="#0">Terms and conditions</a>
								<input type="checkbox">
								<span class="checkmark"></span>
							</label>
						</div> -->
						<div class="text-center"><input type="submit" value="Đăng ký" class="btn_1 full-width" name="dangky"></div>



					</div>
					<!-- /box_account -->
				</div>
			</form>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</main>
<!--/main-->