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
		$date = date("Y-m-d",strtotime($_POST['date']));
		$data = ['name' 		=> $_POST['product_name'],
				 'stock' 		=> $_POST['stock_number'],
				 'date_input' 	=> $date
				];
		if(!empty($_POST))
		{
			$this->db->insert('product',$data);
		}		
	}

	public function getProductList()
	{
		$table = 'product';
		return $this->db->selectAll($table,'desc');
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
