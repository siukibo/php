<?php

    require_once("mvc/models/clsSanpham.php");
    
    $act = "";
    $masp = "";
    if(isset($_REQUEST["act"]))
        $act = $_REQUEST["act"];
    if(isset($_REQUEST["masp"]))
        $masp = $_REQUEST["masp"];
    //biến $link_tieptuc và $thongbao dùng cho Views/thongbao.php
    $link_tieptuc ="?module=" . $module;
    $thongbao ="";
    
    if($act == "add"){
        if($masp=="" || is_numeric($masp)==false)
            $thongbao = "id sản phẩm không hợp lệ";
        else
        {
            if(isset($_SESSION["cart"][$masp])==true)//nếu sản phẩm có trong giỏ hàng
            {
                $soluong = $_SESSION["cart"][$masp];
                //tăng số lượng của sản phẩm trong mảng lên 1 đv và gán cho masp cũ
                $_SESSION["cart"][$masp] = $soluong +1; 
            }
            else//masp phẩm chưa có trong giỏ hàng (mua sản phẩm mới)
            {
                //thêm 1 phần tử có key là $masp và giá trị là 1 vào mảng cart
                $_SESSION["cart"][$masp] =1;
            }
            echo "<script type='text/javascript'> window.location.replace('index.php?module=cart');</script>";
             die();
        }
    }
    else if($act == "del"){
        if($masp=="" || is_numeric($masp)==false)
            $thongbao = "id sản phẩm không hợp lệ";
        else
        {
            if($masp==0)//xóa toàn bộ giỏ hàng
            {
                unset($_SESSION["cart"]);
            }
            else//xóa sản phẩm có masp chọn
            {
                unset($_SESSION["cart"][$masp]);
            }
            echo "<script type='text/javascript'> window.location.replace('index.php?module=cart');</script>";
            die();
        }
    }
    else if($act == "update"){
        if(isset($_POST["proceed"])==true)
        echo "<script type='text/javascript'> window.location.replace('index.php?module=checkout&proceed=true');</script>";
        
        else if(isset($_POST["update_cart"])==true)
           {
            $qty = $_REQUEST["qty"];//lấy mảng các input có name="qty[x]"
            foreach($qty as $masp=>$soluong)
            {
                //nếu số lượng =0 hoặc không phải số thì xóa sản phẩm
                if($soluong==0 || is_numeric($soluong)==false)
                    unset($_SESSION["cart"][$masp]);
                else	
                    $_SESSION["cart"][$masp] = $soluong;
            }
            echo "<script type='text/javascript'> window.location.replace('index.php?module=cart');</script>";
            die();
           }
        else
        {   
            
            $thongbao = "LỖI FORM UPDATE CART";
        }
    }
        if($thongbao=="")
        {
            require_once("mvc/views/component/v_Cart.php");
        }
        else
        {   
            require("mvc/views/component/Thongbao.php");
        }
    
    
?>