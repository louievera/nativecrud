<?php
require('Product.php');

$product = new Product;

$name = '';
$stock = '';
$date = '';
$submit = 'Add';

if(isset($_POST['submit']) && $_POST['submit'] == 'Add'){
	$product->insertProduct();	
}

if(isset($_GET['id']) && $_GET['action'] == 'delete')
{
	$product->deleteProduct($_GET['id']);
	header('location:index.php');
}

if(isset($_GET['id']) && $_GET['action'] == 'edit')
{
	$item = $product->getProduct($_GET['id']);
	$name = $item['name'];
	$stock = $item['stock'];
	$date = $item['date_input'];
	$submit = 'Update';
}

if(isset($_POST['submit']) && $_POST['submit'] == 'Update'){
	$product->updateProduct($_GET['id']);
	header('location:index.php');
}

$list = $product->getProductList();

?>

<form action='' method="post">
	<label for='product_name'>Product name</label>
	<input type='text' id='product_name' name='product_name' value='<?=$name ?>'>

	<label for='stock_number'>Stock number</label>
	<input type='number' id='stock_number' name='stock_number' value='<?=$stock ?>'>

	<label for='date'>Date</label>
	<input type='date' id='date' name='date' value='<?=$date ?>'>

	<input type='submit' value='<?=$submit?>' name='submit'>
</form>

<?php include('productList.php'); ?>