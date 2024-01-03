<?php

include "../model/pdo.php";
include "../model/taikhoan.php";
if (isset($_POST['signup']) && ($_POST['signup'])) {
    $adminname = $_POST['adminname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $tel = $_POST['tel'];
    insert_taikhoan_admin($adminname, $email, $password, $address, $tel);
    echo '<script type="text/javascript">window.location.href = "./login.php";</script>';
}

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from maraviyainfotech.com/projects/erratum/main/particles/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Nov 2023 13:57:47 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Erratum – Multi purpose error page template for Service, corporate, agency, Consulting, startup.">
    <meta name="keywords" content="Error page 404, page not found design, wrong url">
    <meta name="author" content="Ashishmaraviya">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
    <title>SIGNUP</title>
    <!--Google font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300&amp;display=swap"
        rel="stylesheet">
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/fontawesome.css">
    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>

<body>
    <!-- 01 Preloader -->
    <div class="loader-wrapper" id="loader-wrapper">
        <div class="loader"></div>
    </div>
    <!-- Preloader end -->
    <!-- 02 Main page -->
    <section class="page-section login-page">
        <div class="full-width-screen">
            <div class="container-fluid p-0">
                <div class="particles-bg" id="particles-js">
                    <div class="content-detail">
                        <!-- Signup form -->
                        <form class="signup-form" method="post">
                            <div class="imgcontainer">
                                <h1>SIGNUP</h1>
                            </div>
                            <form action="signup.php" method="post">
                            <div class="input-control">
                                <div class="row p-l-5 p-r-5">
                                    <div class="col-md-6 p-l-10 p-r-10">
                                        <input type="text" placeholder="Enter Adminname" name="adminname" required>
                                    </div>
                                    <div class="col-md-6 p-l-10 p-r-10">
                                        <input type="text" placeholder="Enter Password" name="password"
                                        class="input-checkmark" required>
                                    </div>
                                    <div class="col-md-6 p-l-10 p-r-10">
                                        <input type="email" placeholder="Enter Email" name="email" required>
                                    </div>
                                    <div class="col-md-6 p-l-10 p-r-10">
                                        <input type="text" placeholder="Enter Address" name="address"
                                            class="input-checkmark" required>
                                    </div>
                                    <div class="col-md-6 p-l-10 p-r-10">
                                        <input type="text" placeholder="Enter telphone" name="tel"
                                            class="input-checkmark" required>
                                    </div>
                                </div>
                                <div class="login-btns">
                                    <button type="submit" name="signup" value="signup">Sign up</button>
                                </div>
                                </form>
                                <div class="login-with-btns">
                                    <span class="already-acc">Already you have an account? <a href="login.html"
                                            class="login-btn">Login</a></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest jquery-->
    <script src="../js/jquery-3.5.1.min.js"></script>
    <!-- theme particles script -->
    <script src="../js/particles.min.js"></script>
    <script src="../js/app.js"></script>
    <!-- Theme js-->
    <script src="../js/script.js"></script>
</body>


<!-- Mirrored from maraviyainfotech.com/projects/erratum/main/particles/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Nov 2023 13:57:47 GMT -->
</html>