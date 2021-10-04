<?php
    require_once("mvc/models/clsSanpham.php");
$act = "";
$id = "";
//biến $link_tieptuc và $thongbao dùng cho Views/thongbao.php
$link_tieptuc ="?module=" . $module;
$thongbao ="";

//tạo đối tượng clsSanpham
$sanpham = new clsSanpham();
// goi view
$kq =$sanpham->LayDanhSachSanpham();
#12
require_once("mvc/views/component/v_Product.php");
?>