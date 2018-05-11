<table border='1'>
	<th>Product Name</th>
	<th>Stock Number</th>
	<th>Date</th>

	<?php
	foreach($list as $item)
	{
		?>
		<tr>
			<td><?=$item['name']?></td>
			<td><?=$item['stock']?></td>
			<td><?=$item['date_input']?></td>
			<td>
				<a href='?id=<?=$item["id"]?>&action=delete'>Delete</a>|
				<a href='?id=<?=$item["id"]?>&action=edit'>Edit</a>
			</td>
		</tr>
		
		<?php
	}
	?>
</table>