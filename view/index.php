<?php
session_start();
include "../model/pdo.php";
include "../model/loaisach.php";
include "../model/sach.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/donhang.php";
$img_path = "../upload/";

include "header.php";

$sphome = loadall_sach_home();
$dsdm = loadall_loaisach();
if (!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}
if (!isset($_SESSION['cartorder'])) {
    $_SESSION['cartorder'] = [];
}
if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];

    switch ($act) {
        case "sptimkiem":
            if (isset($_POST['kyw']) && $_POST['kyw'] != "") {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && $_GET['iddm'] > 0) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sach($kyw, $iddm);
            // print_r($dssp);
            $tendm = load_ten_loaisach($iddm);
            include "sptimkiem.php";
            break;

        case "chitietsp":
            if (isset($_GET["idsp"]) && $_GET["idsp"] > 0) {
                $id = $_GET["idsp"];
                $onesp = loadone_sach($id);
                $binhluan = loadall_binhluan($id);
            }
            if (isset($_POST["themvaocart"]) && ($_POST["themvaocart"])) {
                if (isset($_SESSION['user']) && ($_SESSION['user'])) {
                    $id = $_POST["idbook"];
                    $title = $_POST["title"];
                    $img = $_POST["img"];
                    $price = $_POST["price"];
                    $soluong = $_POST["quantity"];
                    $bookadd = [$id, $title, $img, $price, $soluong];
                    array_push($_SESSION['mycart'], $bookadd);
                    echo '<script type="text/javascript">window.location.href = "./index.php?act=chitietsp&idsp=' . $id . '";</script>';
                } else {
                    echo '<script type="text/javascript">window.location.href = "./index.php?act=dangnhap";</script>';
                }
            }
            if (isset($_POST["muangay"]) && ($_POST["muangay"])) {
                if (isset($_SESSION['user']) && ($_SESSION['user'])) {
                    $id = $_POST["idbook"];
                    $title = $_POST["title"];
                    $img = $_POST["img"];
                    $price = $_POST["price"];
                    $soluong = $_POST["quantity"];
                    $bookadd = [$id, $title, $img, $price, $soluong];
                    array_push($_SESSION['cartorder'], $bookadd);
                    echo '<script type="text/javascript">window.location.href = "./index.php?act=thanhtoan";</script>';
                } else {
                    echo '<script type="text/javascript">window.location.href = "./index.php?act=dangnhap";</script>';
                }
            }
            if (isset($_GET['idcart']) && ($_GET['idcart'] != "")) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
                echo '<script type="text/javascript">window.location.href = "./index.php?chitietsp&idsp=' . $id . '";</script>';
            }
            include "chitietsp.php";
            break;
        case "binhluansp":
            if (isset($_GET["idbook"]) && $_GET["idbook"] > 0) {
                $id = $_GET["idbook"];
                $onesp = loadone_sach($id);
            }
            if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
                if (isset($_SESSION['user']) && ($_SESSION['user'])) {
                    $idbook = $_POST['idbook'];
                    $iduser = $_SESSION['user']['id'];
                    $content = $_POST['binhluan'];
                    insert_binhluan($idbook, $iduser, $content);
                    echo '<script type="text/javascript">window.location.href = "./index.php?act=chitietsp&idsp=' . $idbook . '";</script>';
                } else {
                    echo '<script type="text/javascript">window.location.href = "./index.php?act=dangnhap";</script>';
                }
            }
            include "binhluansp.php";
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                insert_taikhoan($username, $email, $password, $address, $tel);
                $thongbao = "Đã đăng kí thành công.";
            }
            include "dangky.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $checkuser = checkuser($username, $password);
                if ($checkuser != false) {
                    $_SESSION['user'] = $checkuser;
                    echo '<script type="text/javascript">window.location.href = "./index.php";</script>';
                }
            }
            include "dangnhap.php";
            break;
        case 'taikhoan':
            if (isset($_SESSION['user']) && ($_SESSION['user'])) {
                $idtaikhoan = $_SESSION['user']['id'];
                $taikhoan = loadone_taikhoan($idtaikhoan);
            } else {
                echo '<script type="text/javascript">window.location.href = "./index.php?act=dangnhap";</script>';
            }
            include "account.php";
            break;
        case 'updatetaikhoan':
            if (isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
                $id = $_POST["id"];
                $username = $_POST["username"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $address = $_POST["address"];
                $tel = $_POST["tel"];
                update_taikhoan_user($id, $username, $password, $email, $address, $tel);
                $thongbao_update = "Tài khoản cập nhật thành công";
            }
            include "account.php";
            break;
        case 'giohang':
            include "cart.php";
            break;
        case 'xoagiohang':
            if (isset($_GET['idcart']) && ($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            echo '<script type="text/javascript">window.location.href = "./index.php?act=giohang";</script>';
            break;
        case 'thanhtoan':
            if (isset($_POST["submit"]) && ($_POST["submit"])) {
                if (isset($_POST['quantity']) && ($_POST["quantity"])) {
                    $soluong = $_POST['quantity'];
                }
                if (isset($_POST["check"])) {
                    $check = $_POST['check'];
                    foreach ($_SESSION['mycart'] as $key => $value) {
                        foreach ($check as $product) {
                            $index = array_search($product, array_column($_SESSION['mycart'], '0'));
                            if ($index !== false) {
                                $sp = array_splice($_SESSION['mycart'], $index, 1);
                                array_push($_SESSION['cartorder'], $sp[0]); // Thêm phần tử đã xóa vào $_SESSION['cartorder']
                            }
                        }
                    }
                }
            }
            if (isset($_POST["thanhtoan"]) && ($_POST["thanhtoan"])) {
                if (isset($_SESSION['user']) && ($_SESSION['user'])) {
                    //donhang
                    $user_id = $_SESSION['user']['id'];
                    $ngayGioHienTai = date("Y-m-d H:i:s");
                    $pttt = 1;
                    $total = $_POST['tongtien'];
                    $status = 1;
                    $iddonhang = insert_donhang($user_id, $ngayGioHienTai, $pttt, $total, $status);

                    //donhangchitiet
                    foreach ($_SESSION['cartorder'] as $cart) {
                        $book_id = $cart[0];
                        $title_book = $cart[1];
                        $price = $cart[3];
                        $quantity = $cart[4];
                        $total = $quantity * $price;
                        insert_donhang_chitiet($title_book, $price, $quantity, $total, $book_id, $iddonhang);
                    }
                    unset($_SESSION['cartorder']);
                    echo '<script type="text/javascript">window.location.href = "./index.php?act=thanhcong";</script>';
                }
            }
            include "checkout.php";
            break;
        case 'thanhcong':

            include "success.php";
            break;
        case 'donhang':
            $id_user = $_SESSION['user']['id'];
            $order = donhang($id_user);
            include "order.php";
            break;
        case 'donhangchitiet':
            if (isset($_POST["chitiet"]) && ($_POST["chitiet"])) {
                $iddonhang = $_POST['id_donhang'];
                $id_user = $_SESSION['user']['id'];
                $orderDetail = load_donhangchitiet($id_user, $iddonhang);
            }
            include "order_detail.php";
            break;
        case 'listdonhang':
            $id_user = $_SESSION['user']['id'];
            $listdonhang = load_donhang($id_user);
            include("myorder.php");
            break;
        case 'online-checkout':
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
                $tongtien =$tong+10000;
            if (isset($_POST["redirect"]) && ($_POST["redirect"])) {
                 //donhang
                 $user_id = $_SESSION['user']['id'];
                 $ngayGioHienTai = date("Y-m-d H:i:s");
                 $pttt = 2;
                 $status = 1;
                 $iddonhang = insert_donhang($user_id, $ngayGioHienTai, $pttt, $tongtien, $status);

                 //donhangchitiet
                 foreach ($_SESSION['cartorder'] as $cart) {
                     $book_id = $cart[0];
                     $title_book = $cart[1];
                     $price = $cart[3];
                     $quantity = $cart[4];
                     $total = $quantity * $price;
                     insert_donhang_chitiet($title_book, $price, $quantity, $total, $book_id, $iddonhang);
                 }
                 unset($_SESSION['cartorder']);
                $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
                $vnp_Returnurl = "http://localhost/d/view/vnpay_return.php";
                $vnp_TmnCode = "4I7E51MI";//Mã website tại VNPAY 
                $vnp_HashSecret = "RRRHYEPSKHQNVBWMSQJSRXUESTGERWRB"; //Chuỗi bí mật

                $vnp_TxnRef = rand(00,9999); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
                $vnp_OrderInfo = 'Noi dung thanh toan';
                $vnp_OrderType = 'billpayment';
                $vnp_Amount = $tongtien * 100;
                $vnp_Locale = 'vn';
                $vnp_BankCode = 'NCB';
                $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
                //Add Params of 2.0.1 Version
                // $vnp_ExpireDate = $_POST['txtexpire'];
                //Billing
                // $vnp_Bill_Mobile = $_POST['txt_billing_mobile'];
                // $vnp_Bill_Email = $_POST['txt_billing_email'];
                // $fullName = trim($_POST['txt_billing_fullname']);
                // if (isset($fullName) && trim($fullName) != '') {
                //     $name = explode(' ', $fullName);
                //     $vnp_Bill_FirstName = array_shift($name);
                //     $vnp_Bill_LastName = array_pop($name);
                // }
                // $vnp_Bill_Address=$_POST['txt_inv_addr1'];
                // $vnp_Bill_City=$_POST['txt_bill_city'];
                // $vnp_Bill_Country=$_POST['txt_bill_country'];
                // $vnp_Bill_State=$_POST['txt_bill_state'];
                // // Invoice
                // $vnp_Inv_Phone=$_POST['txt_inv_mobile'];
                // $vnp_Inv_Email=$_POST['txt_inv_email'];
                // $vnp_Inv_Customer=$_POST['txt_inv_customer'];
                // $vnp_Inv_Address=$_POST['txt_inv_addr1'];
                // $vnp_Inv_Company=$_POST['txt_inv_company'];
                // $vnp_Inv_Taxcode=$_POST['txt_inv_taxcode'];
                // $vnp_Inv_Type=$_POST['cbo_inv_type'];
                $inputData = array(
                    "vnp_Version" => "2.1.0",
                    "vnp_TmnCode" => $vnp_TmnCode,
                    "vnp_Amount" => $vnp_Amount,
                    "vnp_Command" => "pay",
                    "vnp_CreateDate" => date('YmdHis'),
                    "vnp_CurrCode" => "VND",
                    "vnp_IpAddr" => $vnp_IpAddr,
                    "vnp_Locale" => $vnp_Locale,
                    "vnp_OrderInfo" => $vnp_OrderInfo,
                    "vnp_OrderType" => $vnp_OrderType,
                    "vnp_ReturnUrl" => $vnp_Returnurl,
                    "vnp_TxnRef" => $vnp_TxnRef
                    
                    // "vnp_ExpireDate"=>$vnp_ExpireDate,
                    // "vnp_Bill_Mobile"=>$vnp_Bill_Mobile,
                    // "vnp_Bill_Email"=>$vnp_Bill_Email,
                    // "vnp_Bill_FirstName"=>$vnp_Bill_FirstName,
                    // "vnp_Bill_LastName"=>$vnp_Bill_LastName,
                    // "vnp_Bill_Address"=>$vnp_Bill_Address,
                    // "vnp_Bill_City"=>$vnp_Bill_City,
                    // "vnp_Bill_Country"=>$vnp_Bill_Country,
                    // "vnp_Inv_Phone"=>$vnp_Inv_Phone,
                    // "vnp_Inv_Email"=>$vnp_Inv_Email,
                    // "vnp_Inv_Customer"=>$vnp_Inv_Customer,
                    // "vnp_Inv_Address"=>$vnp_Inv_Address,
                    // "vnp_Inv_Company"=>$vnp_Inv_Company,
                    // "vnp_Inv_Taxcode"=>$vnp_Inv_Taxcode,
                    // "vnp_Inv_Type"=>$vnp_Inv_Type
                );

                if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                    $inputData['vnp_BankCode'] = $vnp_BankCode;
                }
                // if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
                //     $inputData['vnp_Bill_State'] = $vnp_Bill_State;
                // }

                //var_dump($inputData);
                ksort($inputData);
                $query = "";
                $i = 0;
                $hashdata = "";
                foreach ($inputData as $key => $value) {
                    if ($i == 1) {
                        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                    } else {
                        $hashdata .= urlencode($key) . "=" . urlencode($value);
                        $i = 1;
                    }
                    $query .= urlencode($key) . "=" . urlencode($value) . '&';
                }

                $vnp_Url = $vnp_Url . "?" . $query;
                if (isset($vnp_HashSecret)) {
                    $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
                    $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
                }
                $returnData = array('code' => '00'
                    , 'message' => 'success'
                    , 'data' => $vnp_Url);
                    if (isset($_POST['redirect'])) {
                        echo '<script type="text/javascript">window.location.href = "'.$vnp_Url.'" ;</script>';
                        die();
                    } else {
                        echo json_encode($returnData);
                    }
                    // vui lòng tham khảo thêm tại code demo
                   
            };
        default:
            include "home.php";
            break;
    }
} else {
    $sach = loadall_sach("", 0);
    if (isset($_POST["themvaocart"]) && ($_POST["themvaocart"])) {
        if (isset($_SESSION['user']) && ($_SESSION['user'])) {
            $id = $_POST["idbook"];
            $title = $_POST["title"];
            $img = $_POST["img"];
            $price = $_POST["price"];
            $soluong = 1;
            $bookadd = [$id, $title, $img, $price, $soluong];
            array_push($_SESSION['mycart'], $bookadd);
            echo '<script type="text/javascript">window.location.href = "./index.php";</script>';
        } else {
            echo '<script type="text/javascript">window.location.href = "./index.php?act=dangnhap";</script>';
        }
    }
    if (isset($_GET['idcart']) && ($_GET['idcart'] != "")) {
        array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
        echo '<script type="text/javascript">window.location.href = "./index.php";</script>';
    }
    include "home.php";
}

include "footer.php";
