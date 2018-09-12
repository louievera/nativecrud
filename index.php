<?php

require('Product.php');

$product = new Product;

$name = '';
$stock = '';
$date = '';
$submit = 'Add';
$list = $product->getProductList();
// product::getProductList();

require('actions.php');
?>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"
  	<link rel="stylesheet" href="/resources/demos/style.css">

<div class='container'>
	<form action='' method="post">
		<label for='product_name'>Product name</label>
		<input type='text' id='product_name' name='product_name' value='<?=$name ?>'>

		<label for='stock_number'>Stock number</label>
		<input type='number' id='stock_number' name='stock_number' value='<?=$stock ?>' autocomplete='off'>

		<label for='date'>Date</label>
		<input type='text' id='date' name='date' class='datepicker' value='<?=$date ?>' autocomplete='off'>

		<input type='submit' value='<?=$submit?>' name='submit'>
	</form>

	<?php include('productList.php'); ?>
</div>
<script type="text/javascript">
	 $(function () {
                $('.datepicker').datepicker();
            });
</script>