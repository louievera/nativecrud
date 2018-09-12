
<table id='products' class='display'>
	<thead>
		<th>Product Name</th>
		<th>Stock Number</th>
		<th>Date</th>
	</thead>
</table>

<script>
	$(document).ready(function(){
		$('#products').DataTable(
		{
			"ajax": "productApi.php",
			"columns":[
				{"data": "name"},
				{"data": "stock"},
				{"data": "date_input"}],
			"bLengthChange": false,
			"order": [[0,"asc"]]
		})
	});
</script>