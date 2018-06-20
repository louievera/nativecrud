<?php

class Product
{
	public function __construct()
	{
		require('DB.php');
		$this->db = new DB;
	}

	public function insertProduct()
	{	
		if(!empty($_POST))
		{
			$sql = 'INSERT INTO product(name, stock, date_input) 
					VALUES("'.$_POST['product_name'].'", "'.$_POST['stock_number'].'", "'.$_POST['date'].'")';
			$this->db->exec($sql);
		}		
	}

	public function getProductList()
	{
		$query = 'SELECT * FROM product';
		return $this->db->selectAll($query);
	}

	public function deleteProduct($id)
	{
		$sql = 'DELETE FROM product WHERE id = '.$id;
		$stmt = $this->db->exec($sql);
	}

	public function getProduct($id)
	{
		$stmt = $this->db->select('SELECT * FROM product WHERE id='.$id);
		return $stmt;
	}

	public function updateProduct($id)
	{
		$query = "UPDATE product
				  SET name ='".$_POST['product_name']."',
				  stock ='".$_POST['stock_number']."',
				  date_input ='".$_POST['date']."' 
				  WHERE id = '".$id."'";

		$stmt = $this->db->exec($query);
		$_POST = [];


	}
}

?>
