<?php

require_once("Database.php");

class clsBrand extends clsDatabase
{
	public $data = [];
	function LayDanhSachBrand()
	{
		$sql = "SELECT * FROM Brand";
		$ketqua = $this->ThucthiSQL($sql);
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->pdo_stm->fetchAll();
		return $ketqua;//trả về $ketqua: TRUE/FALSE
	}
		
}
?>