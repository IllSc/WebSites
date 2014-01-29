
<div class="container">	
	<ul class="breadcrumb">
				<li>
					<?php echo anchor('back/main', 'Dashboard'); ?> <span class="divider">/</span>
				</li>
				<li class="active">Product List
				</li>
			</ul>
	
	<table class = "table table-bordered">
		<tr>
			<th>ID</th>
			<th>Nama</th>
			
			<th>Deskripsi</th>
			
			<th>Gambar</th>
			<th>Action</th>
		</tr>
		<tr>
			<?php foreach ($caraousels as $caraousel): ?>
			<td><?php echo $caraousel->id ?></td>
			<td><?php echo $caraousel->name ?>
				</td>

			<td><?php echo $caraousel->description ?></td>

			<td><img src='<?php echo $caraousel->image_url(); ?>' width='200'></td>
				<td><a href="<?php echo site_url('back/caraousels/edit/'.$caraousel->id); ?>" class="btn">Edit</a>
				<a href="<?php echo site_url('back/caraousels/destroy/'.$caraousel->id); ?>" class="btn btn-danger">Delete</a></td>
			
		</tr>
	<?php endforeach; ?>
	</table>
	
</div>