<?php
require('Product.php');

$product = new Product;

$name = '';
$stock = '';
$date = '';
$submit = 'Add';
$list = $product->getProductList();

require('actions.php');
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