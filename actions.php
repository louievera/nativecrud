<?php

if(isset($_POST['submit']) && $_POST['submit'] == 'Add'){
	$product->insertProduct();
	header('location:index.php');
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
?>