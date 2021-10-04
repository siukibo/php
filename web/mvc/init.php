<?php
#include header
include("mvc/views/layout/Header.php") ;    
date_default_timezone_set("Asia/Ho_Chi_Minh");    
  
#include controllers
//include("mvc/views/component/Single-Product.php") ;
//include("mvc/views/component/Product.php") ;
//include("mvc/controllers/ctlSanpham.php") ;

//hiển thị phần nội dung giữa của trang web
    

            if(isset($_REQUEST["module"]))
                $module = $_REQUEST["module"];
            if( strtolower($module)=="checkout")
            {
                require("mvc/controllers/ctlCheckout.php");
            }
            else if(strtolower($module)=="product")
            {
                require("mvc/controllers/ctlProduct.php");
            }
            else if(strtolower($module)=="single-product")
            {
                require("mvc/controllers/ctlSingle-Product.php");
            }
            else if(strtolower($module)=="cart")
            {
                require("mvc/controllers/ctlCart.php");
            }
            else
            {   
                require("mvc/controllers/ctlHome.php");
            }
#include footer
include("mvc/views/layout/Footer.php");

?>