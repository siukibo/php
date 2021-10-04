<?php

require_once("Database.php");

class clsHoadon extends clsDatabase
{
	public $data = [];
	function ThemHoadon($id_customer,$first_name,$last_name,$address,$city,$county,$country,$postcode,$email,$phone,$note,$date)
	{
		$sql = "INSERT INTO Orders(id_customer,first_name,last_name,address,city,county,country,postcode,email,phone,note,date) 
				VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
		$data[] =$id_customer;
        $data[] =$first_name;
        $data[] =$last_name;
        $data[] =$address;
        $data[] =$city;
        $data[] =$county;
        $data[] =$country;
        $data[] =$postcode;
        $data[] =$email;
        $data[] =$phone;
        $data[] =$note;
        $data[] =$date;
		$ketqua = $this->ThucthiSQL($sql,$data);
		return $ketqua;
	}
    function getLastId()
	{
		return $this->conn->lastInsertId();
	}
    function ThemChitietHoadon($mahd,$masp,$soluong,$giasp)
	{
		$sql = "INSERT INTO Order_detail VALUES(NULL,?,?,?,?)";
		$data[] = $mahd;
		$data[] = $masp;
		$data[] = $soluong;
		$data[] = $giasp;
		$ketqua = $this->ThucthiSQL($sql,$data);
		return $ketqua;
	}
		
}
?>