<?php
if (isset($taikhoan) && ($taikhoan)) {
	extract($taikhoan);
}
?>
<main class="bg_gray">

	<div class="container margin_30">
		
		<!-- /page_header -->
		<div class="row ">
			<form action="index.php?act=updatetaikhoan" method="post">
				<div class="col-xl-6 col-lg-6 col-md-8">
					<div class="box_account">
						<h3 class="new_client">Tài khoản</h3>
						<input type="hidden" name="id" value="<?php if (isset($id) && ($id != "")) echo $id ;?>">
						<div class="form_container">
							<div class="form-group">
								<label >Username:</label>
								<input type="text" class="form-control" name="username" id="username" value="<?=$username?>" >
							</div>
							<div class="form-group">
							<label >Password:</label>
								<input type="text" class="form-control" name="password" id="password_2" value="<?=$password?>">
							</div>
							<div class="form-group">
							<label >Email:</label>
								<input type="email" class="form-control" name="email" id="email_2" value="<?=$email?>">
							</div>
							<div class="form-group">
							<label >Address:</label>
								<input type="text" class="form-control" name="address" value="<?=$address?>">
							</div><div class="form-group">
							<label >Tel:</label>
								<input type="text" class="form-control" name="tel" value="<?=$tel?>">
							</div>
								
						</div>
						<hr>
						<input type="submit" value="Cập nhật" name="capnhat" class="btn_1 full-width">



					</div>
					<!-- /box_account -->
				</div>
			</form>
			<?php
								if (isset($thongbao_update) && ($thongbao_update != "")) {
									echo $thongbao_update;
								}

								?>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</main>
<!--/main-->