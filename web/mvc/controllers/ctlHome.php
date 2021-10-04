<?php
    require_once("mvc/models/clsSanpham.php");
    require_once("mvc/models/clsBrand.php");
    
    class ctlHome
    {
        public $sanpham;
        public $brand;
        function __construct()
        {
            $this->sanpham = new clsSanpham();
            $this->brand = new clsBrand();
        
        $this->slider();
        $data_latest = $this->latest_product();
        $icon_brand = $this->icon_brand();
        $top_seller = $this->top_seller();
        $top_new = $this->top_new();
        require_once("mvc/views/component/v_Home.php");
        }
        function slider(){
            require_once("mvc/views/component/inc_Slider.php");
        }
        function latest_product(){
            
            $kq =$this->sanpham->LaySanphamMoiNhat(7);
           $data_latest = $this->sanpham->data;
           return $data_latest;
            
        }
        function icon_brand(){
            $kq =$this->brand->LayDanhSachBrand();
            $icon_brand = $this->brand->data;
           return $icon_brand;
        }
        function top_seller(){
                $kq =$this->sanpham->LaySanphamMuaNhieu(3);
                $icon_brand = $this->sanpham->data;
            return $icon_brand;
        }
        function top_new(){
            
            $kq =$this->sanpham->LaySanphamMoiNhat(3);
           $data_latest = $this->sanpham->data;
           return $data_latest;
            
        }
        
    }   

new ctlHome();

?>