<?php
    session_start();
    include "../model/pdo.php";
    include "../model/taikhoan.php";
        if (isset($_POST["submit"]) && ($_POST["submit"])) {
            $adminname = $_POST["adminname"];
            $password = $_POST["password"];
            $checkadmin = checkadmin($adminname, $password);
            if ($checkadmin !== false) {
                $_SESSION['admin'] = $checkadmin;
                echo '<script type="text/javascript">window.location.href = "./index.php";</script>';
            }
        }
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from maraviyainfotech.com/projects/erratum/main/particles/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Nov 2023 13:57:39 GMT -->
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
    <title>LOGIN ADMIN</title>
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
                        <!-- Login form -->
                        <form class="login-form" method="post">
                            <div class="imgcontainer">
                                <h1>LOGIN</h1>
                            </div>
                            <form action="login.php" method="post">
                            <div class="input-control">
                                <input type="text" placeholder="Enter Username" name="adminname" required>
                                <span class="password-field-show">
                                    <input type="password" placeholder="Enter Password" name="password"
                                        class="password-field" value="" required>
                                    <span data-toggle=".password-field"
                                        class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </span>
                                <div class="login-btns">
                                    <button type="submit" name="submit" value="submit">Login</button>
                                </div>
                            </form>
                                <div class="division-lines">
                                    <p>or login with</p>
                                </div>
                                <div class="login-with-btns">
                                    
                                    <span class="already-acc">Not a member? <a href="signup.php"
                                            class="signup-btn">Sign up</a></span>
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


<!-- Mirrored from maraviyainfotech.com/projects/erratum/main/particles/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Nov 2023 13:57:42 GMT -->
</html>
