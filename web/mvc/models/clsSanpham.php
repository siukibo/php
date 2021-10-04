<?php

require_once("Database.php");

class clsSanpham extends clsDatabase
{
	public $data = [];
	function LayDanhSachSanpham($trangthai=2, $cat_id=0)
	{
		$sql = "SELECT Sp.*, Cat.name, Cat.status 
					FROM Product AS Sp INNER JOIN Category AS Cat 
					ON Sp.id_cate=Cat.id_cate WHERE 1 ";
		if($cat_id != 0)
		{
			$sql = $sql . " AND Sp.id_cate = " . $cat_id;
		}
		//nếu khác 2 thì thêm mệnh đề WHERE để lọc, 
		//còn nếu =2 thì không có có WHERE => sẽ hiển thị mọi sản phẩm
		if($trangthai!=2) 
		{
			$sql = $sql . " AND Sp.status = " . $trangthai; 
			$sql = $sql . " AND Cat.status = " . $trangthai;
		}
		$ketqua = $this->ThucthiSQL($sql);
		//LẤY CÁC BẢN GHI KẾT QUẢ LƯU VÀO $data
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->pdo_stm->fetchAll();
		return $ketqua;//trả về $ketqua: TRUE/FALSE
	}
	function LaySanphamMoiNhat($n)
	{
		$sql = "SELECT * FROM Product WHERE status = 1 ORDER BY id_product DESC LIMIT 0,$n";
		
		$ketqua = $this->ThucthiSQL($sql);
		//LẤY CÁC BẢN GHI KẾT QUẢ LƯU VÀO $data
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->pdo_stm->fetchAll();
		return $ketqua;//trả về $ketqua: TRUE/FALSE
	}
	function LaySanphamMuaNhieu($n)
	{
		$sql = "SELECT * FROM Product WHERE 1 ORDER BY quantity DESC LIMIT 0,$n";
		
		$ketqua = $this->ThucthiSQL($sql);
		//LẤY CÁC BẢN GHI KẾT QUẢ LƯU VÀO $data
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->pdo_stm->fetchAll();
		return $ketqua;//trả về $ketqua: TRUE/FALSE
	}
	function TimTheoIDSanpham($id, $trangthai=2)
	{
		$sql = "SELECT Sp.*, Cat.name as catname, Cat.status as catstatus 
		FROM Product AS Sp INNER JOIN Category AS Cat 
		ON Sp.id_cate=Cat.id_cate 
		WHERE id_product=?";
		if($trangthai!=2) 
		{
			$sql = $sql . " AND Sp.status = " . $trangthai; 
			$sql = $sql . " AND Cat.status = " . $trangthai;
		}
		$da[] = $id;
 		$ketqua = $this->ThucthiSQL($sql,$da);
		//LẤY BẢN GHI KẾT QUẢ LƯU VÀO $data
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->pdo_stm->fetchAll();
		return $ketqua;//trả về $ketqua: TRUE/FALSE
	}
	function TimTheo_DS_IDSanpham($list, $trangthai=2)
	{
		$sql = "SELECT * FROM Product WHERE id_product IN ($list)";
		if($trangthai!=2) 
			$sql = $sql . " AND status = " . $trangthai;
			
		$data[] = NULL;
 		$ketqua = $this->ThucthiSQL($sql);
		//LẤY BẢN GHI KẾT QUẢ LƯU VÀO $data
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->pdo_stm->fetchAll();
		return $ketqua;//trả về $ketqua: TRUE/FALSE
	}
}
?>