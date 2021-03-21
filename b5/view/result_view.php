<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Name singer</th>
			<th> Image singer</th>
		</tr>
	</thead>
	<tbody>
		<?php if(!empty($info)): ?>
		<tr>
			<td>
				<?= $info['id']; ?>
			</td>
			<td>
				<?= $info['name']; ?>
			</td>
			<td>
				<img class="img-responsive" src="<?= $info['image']; ?>" />
			</td>
		</tr>
		<?php else: ?>
			<p>Khong tim thay ca sy ban yeu cau!</p>
		<?php endif; ?>
	</tbody>
</table>