
<div class="container">	
	<ul class="breadcrumb">
				<li>
					<?php echo anchor('back/main', 'Dashboard'); ?> <span class="divider">/</span>
				</li>
				<li class="active">Custom List
				</li>
			</ul>
	
	<table class = "table table-bordered">
		<tr>
			<th>ID</th>
			<th>Custom</th>
			<th>Description</th>
			<th>Action</th>
		</tr>
		<tr>
			<?php foreach ($customs as $custom): ?>
			<td><?php echo $custom->id ?></td>
			<td><?php echo $custom->name ?></td>
			<td><?php echo $custom->description ?></td>
				<td><a href="<?php echo site_url('back/customs/edit/'.$custom->id); ?>" class="btn">Edit</a>
				<a href="<?php echo site_url('back/customs/destroy/'.$custom->id); ?>" class="btn btn-danger">Delete</a></td>
			
		</tr>
	<?php endforeach; ?>
	</table>
		 <?php // echo admin_pagination(new Custom); ?>	

</div>