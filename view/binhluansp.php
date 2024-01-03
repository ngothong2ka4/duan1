	<?php
	if (isset($onesp) && ($onesp)) {
		extract($onesp);
	}
	?>
	<main>
	<div class="container margin_60_35">
	
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="write_review">
						<h1>Viết bình luận cho sản phẩm <?php echo $title?></h1>
						<!-- /rating_submit -->
						<form action="index.php?act=binhluansp&idbook=<?php echo $id?>" method="post">
						<div class="form-group">
							<input type="hidden" name="idbook" value="<?php echo $id?>">
							<label>Bình luận của bạn</label>
							<textarea class="form-control" name="binhluan" style="height: 180px;" placeholder="Viết đánh giá của bạn để giúp người khác tìm hiểu về loại sách này"></textarea>
						</div>
						<input type="submit" class="btn_1" name="guibinhluan" value="Gửi bình luận">
						</form>
					</div>
				</div>
		</div>
		<!-- /row -->
		</div>
		<!-- /container -->
	</main>
	<!--/main-->
