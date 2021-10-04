<?php

require_once("Database.php");

class clsCustomer extends clsDatabase
{
	public $data = [];
	function LayDanhSachKH()
	{
		$sql = "SELECT * FROM Customer";
		$ketqua = $this->ThucthiSQL($sql);
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->pdo_stm->fetchAll();
		return $ketqua;//trả về $ketqua: TRUE/FALSE
	}
		
}
?>