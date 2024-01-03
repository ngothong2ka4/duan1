<?php
    session_start();
    include "../../model/taikhoan.php";
    dangxuat();
    echo '<script type="text/javascript">window.location.href = "../login.php";</script>';
?>