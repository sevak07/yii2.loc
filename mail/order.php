<div class="table-responsive">
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>Photo</th>
				<th>Name</th>
				<th>Quantity</th>
				<th>Price</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($session['cart'] as $id => $item) : ?>
				<tr>
					<td><?= $item['name'] ?></td>
					<td><?= $item['qty'] ?></td>
					<td><?= $item['price'] ?></td>
				</tr>
			<?php endforeach ; ?>
				<tr>
					<td colspan="4">ITOGO</td>
					<td><?= $session['cart.qty'] ?></td>
				</tr>
				<tr>
					<td colspan="4">Summary</td>
					<td><?= $session['cart.sum'] ?></td>
				</tr>
		</tbody>
	</table>
</div>