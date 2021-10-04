<?php
require_once("mvc/models/clsHoadon.php");
require_once("mvc/models/clsSanpham.php");
require_once("mvc/models/clsCustomer.php");
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
class ctlCheckout
{

	public $customer;
	public $sanpham;
	public $hoadon;
	function __construct(){

		$this->hoadon = new clsHoadon();
		$this->customer = new clsCustomer();
		$this->sanpham = new clsSanpham();
		$link_tieptuc ="?module=cart";
		$thongbao ="";
		//Lấy thông tin từ form và chèn hóa đơn mới
		if(isset($_SESSION["cart"])==false){
			$thongbao ="Giỏ hàng rỗng";
			require_once("mvc/views/component/Thongbao.php");}
		else if(isset($_REQUEST["proceed"])==false)
		{
			$thongbao ="lỗi submit form đặt hàng";

			require_once("mvc/views/component/Thongbao.php");
		}
		else
		{	if(isset($_POST['woocommerce_checkout_place_order'])==true)
			{
				$this->Checkout();
				
			require_once("mvc/views/component/Thongbao.php");
			}
			
			require_once("mvc/views/component/v_Checkout.php");
		}

	}
	function Hienthi(){
		#lay thong tin khach hang
		$ketqua = $this->customer->LayDanhSachKH();
		$kh = $this->customer->data;
		
	}
	function Checkout()
	{
		$id_customer=NULL;
		$first_name=$_REQUEST['billing_first_name'];
		$last_name=$_REQUEST['billing_last_name'];
		$address=$_REQUEST['billing_address_1'];
		$city=$_REQUEST['billing_city'];
		$county=$_REQUEST['billing_state'];
		$country=$_REQUEST['billing_country'];
		$postcode=$_REQUEST['billing_postcode'];
		$email=$_REQUEST['billing_email'];
		$phone=$_POST['billing_phone'];
		$note=$_REQUEST['order_comments'];
		$date= Date("Y/m/d H:i:s");
		

		$ketqua = $this->hoadon->ThemHoadon($id_customer,$first_name,$last_name,$address,$city,$county,$country,$postcode,$email,$phone,$note,$date);
		echo $date;
		
		if($ketqua==FALSE)
			echo "LỖI THÊM HÓA ĐƠN MỚI";
		else
		{	
			//lấy mã hóa đơn tự động sinh từ lệnh insert trên
			$mahd = $this->hoadon->getLastId();
			
			//duyệt từng mặt hàng trong giỏ hàng (cart) lấy ra masp và soluong
			//lưu mã hóa đơn, mã sản phẩm, số lượng, giá sản phẩm vào chi tiết hóa đơn
			foreach($_SESSION["cart"] as $masp=>$soluong)
			{
				$ketqua = $this->sanpham->TimTheoIDSanpham($masp,1);
				$giasp = $this->sanpham->data[0]["price"];//lấy giá sản phẩm
				$ketqua = $this->hoadon->ThemChitietHoadon($mahd,$masp,$soluong,$giasp);
				if($ketqua==FALSE)
					$thongbao ="LỖI THÊM CHI TIẾT HÓA ĐƠN";
				else
				{
					unset($_SESSION["cart"]);//xóa giỏ hàng
					$thongbao ="CẢM ƠN BẠN ĐÃ MUA HÀNG, CHÚNG TÔI SẼ LIÊN HỆ SỚM NHẤT";
					$thongbao .= "<br>Nguoi mua: $first_name $last_name";
					$thongbao .= "<br>Dien thoai: $phone";
					$thongbao .= "<br>Ngân hàng: BIDV";
				}
			}
		
	}

	}
	
}

new ctlCheckout();







?>
