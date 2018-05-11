<?php

class Product
{
	public function __construct()
	{
		include('connection.php');

		$this->con = $con;

		if(!empty($_POST))
		{
			$post = ["product"	=> $_POST['product_name'],
					 "stock" 	=> $_POST['stock_number'],
					 "date" 	=> $_POST['date']
					];

			$this->post = $post;	
		}
		
	}

	public function insertProduct()
	{
		
		$insertQuery = $this->con->prepare('INSERT INTO product(name, stock, date_input) 
							VALUES(:product, :stock, :date)');

		$insertQuery->execute(['product'=>$this->post['product'], 'stock'=>$this->post['stock'], 'date'=>$this->post['date']]);

		$_POST = [];
		
	}

	public function getProductList()
	{
		$stmt = $this->con->query('SELECT * FROM product');
		return $stmt->fetchAll();
	}

	public function deleteProduct($id)
	{
		$stmt = $this->con->query('DELETE FROM product WHERE id ='.$id);
	}

	public function getProduct($id)
	{
		$stmt = $this->con->query('SELECT * FROM product WHERE id='.$id);

		return $stmt->fetch();
	}

	public function updateProduct($id)
	{
		$query = "UPDATE product
				  SET name ='".$this->post['product']."',
				  stock ='".$this->post['stock']."',
				  date_input ='".$this->post['date']."' 
				  WHERE id = '".$id."'";

		$stmt = $this->con->query($query);
		$_POST = [];


	}
}

?>
