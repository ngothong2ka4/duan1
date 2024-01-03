
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
            <h1>Đăng nhập</h1>
        </div>
        
        <div class="col-xl-6 col-lg-6 col-md-8">
                <div class="box_account1">
                    <h3 class="client">Nhập Tài Khoản</h3>
                    <div class="form_container">
                        <div class="divider"><span></span></div>
                            <form action="index.php?act=dangnhap" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" id="username" value="" placeholder="Username*" required oninvalid="this.setCustomValidity('Tên đăng nhập không được để trống')">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="password_2" value="" placeholder="Password*" required oninvalid="this.setCustomValidity('Mật khẩu không được để trống')">
                        </div>
                        <div class="clearfix add_bottom_15">
                            <!-- <div class="checkboxes float-start">
                                <label class="container_check">Remember me
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div> -->
                            <!-- <a href=""><div class="float-end"><a id="forgot" href="index.php?act=quenmk">Quên mật khẩu?</a></div></a> -->
                        </div>
                        <div class="text-center"><input type="submit" value="Đăng nhập" class="btn_1 full-width" name="dangnhap"></div>
                        </form>
                        <div>Bạn không có tài khoản? <a href="index.php?act=dangky">Đăng ký</a> Ngay</div>
                    </div>
                    <img src="" alt="">
                    <!-- /form_container -->
                </div>
                <!-- /box_account -->
                <!-- /row -->
            </div>
            </div>
                            
                        </div>
                        
                        <!-- /form_container -->
                    </div>
                    
                    
                    <!-- /box_account -->
                </div>
                
                
                
            </div>
            <!-- /row -->
            </div>
            
            <!-- /container -->
        </main>
        <!--/main-->
        
        
        <!--/footer-->
        </div>
        <!-- page -->
        
        <div id="toTop"></div><!-- Back to top button -->
        
        <!-- COMMON SCRIPTS -->
        <script src="js/common_scripts.min.js"></script>
        <script src="js/main.js"></script>
    
        <script>
            // Client type Panel
            $('input[name="client_type"]').on("click", function() {
                var inputValue = $(this).attr("value");
                var targetBox = $("." + inputValue);
                $(".box").not(targetBox).hide();
                $(targetBox).show();
            });
        </script>
            
    </body>
    
    <!-- Mirrored from www.ansonika.com/allaia/account.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Nov 2023 15:02:21 GMT -->
    </html>