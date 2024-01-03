<?php
session_start();
include "header.php";
include "../model/pdo.php";
include "../model/loaisach.php";
include "../model/sach.php";
include "../model/binhluan.php";
include "../model/taikhoan.php";
include "../model/donhang.php";
include "../model/thongke.php";
var_dump($_SESSION['admin']);

if (isset($_GET["act"])) {
    $act = $_GET["act"];
    switch ($act) {
        case 'canhan':
            include("taikhoan/canhan.php");
            break;
        case 'updatecanhan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $id = $_POST["id"];
                    $username = $_POST["username"];
                    $email = $_POST["email"];
                    $password = $_POST["password"];
                    $address = $_POST["address"];
                    $tel = $_POST["tel"];
                    update_taikhoan_user($id,$username,$password,$email,$address,$tel);
                    $_SESSION['admin']['username'] = $username;
                    $_SESSION['admin']['email'] = $email;
                    $_SESSION['admin']['password'] = $password;
                    $_SESSION['admin']['address'] = $address;
                    $_SESSION['admin']['tel'] = $tel;
                }
                include("taikhoan/canhan.php");
            break;
        case 'listloaisach':
            $listloaisach = loadall_loaisach();
            include("loaisach/list.php");
            break;
        case 'addloaisach':
            if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
                $tenloaisach = $_POST["tenloai"];
                insert_loaisach($tenloaisach);
                $thongbao = "Thêm thành công";
            }
            include("loaisach/add.php");
            break;
        case 'sualoaisach':
            if (isset($_GET["id"]) && ($_GET["id"])) {
                $idloaisach = $_GET["id"];
                $loaisach = loadone_loaisach($idloaisach);
            }
            include("loaisach/update.php");
            break;
        case 'updateloaisach':
            if (isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
                $idloaisach = $_POST["id"];
                $tenloaisach = $_POST["tenloai"];
                update_loaisach($tenloaisach, $idloaisach);
            }
            $listloaisach = loadall_loaisach();
            include("loaisach/list.php");
            break;
        case 'xoaloaisach':
            if (isset($_GET["id"]) && ($_GET["id"])) {
                $idloaisach = $_GET["id"];
                delete_loaisach($idloaisach);
            }
            $listloaisach = loadall_loaisach();
            include("loaisach/list.php");
            break;
        case 'listsach':
            if (isset($_POST['search']) && ($_POST['search'])) {
                $keyw = $_POST['keyw'];
                $idloaisach = $_POST['idloaisach'];
            } else {
                $keyw = "";
                $idloaisach = 0;
            }
            $listloaisach = loadall_loaisach();
            $listsach = loadall_sach($keyw, $idloaisach);
            include("sach/list.php");
            break;
        case 'addsach':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $category_id = $_POST['loaisach'];
                $title = $_POST['tensach'];
                $author = $_POST['tacgia'];
                $price = $_POST['gia'];
                $description = $_POST['mota'];
                $img = $_FILES['image']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['image']['name']);
                move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
                insert_sach($title, $img, $author, $price, $description, $category_id);
                $thongbao = "Thêm thành công";
            }
            $listloaisach = loadall_loaisach();
            include("sach/add.php");
            break;
        case 'suasach':
            if (isset($_GET["id"]) && ($_GET["id"])) {
                $idsach = $_GET["id"];
                $sach = loadone_sach($idsach);
            }
            $listloaisach = loadall_loaisach();
            include("sach/update.php");
            break;
        case 'updatesach':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST["id"];
                $category_id = $_POST['loaisach'];
                $title = $_POST['tensach'];
                $author = $_POST['tacgia'];
                $price = $_POST['gia'];
                $description = $_POST['mota'];
                $img = $_FILES['image']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['image']['name']);
                move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
                update_sach($id, $title, $img, $author, $price, $description, $category_id);
            }
            $listsach = loadall_sach("", 0);
            include("sach/list.php");
            break;
        case 'xoasach':
            if (isset($_GET["id"]) && ($_GET["id"])) {
                $idsach = $_GET["id"];
                delete_sach($idsach);
            }
            $listsach = loadall_sach("", 0);
            include("sach/list.php");
            break;
        case 'listtaikhoan':
            $listtaikhoan = loadall_taikhoan();
            include("taikhoan/list.php");
            break;
        case 'suataikhoan':
            if (isset($_GET["id"]) && ($_GET["id"])) {
                $idtaikhoan = $_GET["id"];
                $taikhoan = loadone_taikhoan($idtaikhoan);
            }
            $listtaikhoan = loadall_taikhoan();
            include("taikhoan/update.php");
            break;
        case 'updatetaikhoan':
            if (isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
                $id = $_POST["id"];
                $username = $_POST["username"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $address = $_POST["address"];
                $tel = $_POST["tel"];
                $role = $_POST["role"];
                update_taikhoan($id, $username, $password, $email, $address, $tel, $role);
            }
            $listtaikhoan = loadall_taikhoan();
            include("taikhoan/list.php");
            break;
        case 'xoataikhoan':
            if (isset($_GET["id"]) && ($_GET["id"])) {
                $idtaikhoan = $_GET["id"];
                delete_taikhoan($idtaikhoan);
            }
            $listtaikhoan = loadall_taikhoan();
            include("taikhoan/list.php");
            break;
        case 'listbinhluan':
            $listbinhluan = loadall_bl();
            include("binhluan/list.php");
            break;
        case 'xoabinhluan':
            if (isset($_GET["id"]) && ($_GET["id"])) {
                $idbinhluan = $_GET["id"];
                delete_binhluan($idbinhluan);
            }
            $listbinhluan = loadall_bl();
            include("binhluan/list.php");
            break;
        case 'listdonhang':
            $listdonhang = loadall_donhang();
            include("donhang/list.php");
            break;
        case 'thongke':
            $listthongke = loadall_thongke();
            include("thongke/list.php");
            break;
        case 'bieudo':
            $listthongke = loadall_thongke();
            include "thongke/bieudo.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
