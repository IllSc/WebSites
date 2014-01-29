
<div class="container">	
	<ul class="breadcrumb">
				<li>
					<?php echo anchor('back/main', 'Dashboard'); ?> <span class="divider">/</span>
				</li>
				<li class="active">Category List
				</li>
			</ul>
	
	<table class = "table table-bordered">
		<tr>
			<th>ID</th>
			<th>Category</th>
			<th>Description</th>
			<th>Action</th>
		</tr>
		<tr>
			<?php foreach ($categories as $category): ?>
			<td><?php echo $category->id ?></td>
			<td><?php echo $category->name ?></td>
			<td><?php echo $category->description ?></td>
				<td><a href="<?php echo site_url('back/categories/edit/'.$category->id); ?>" class="btn">Edit</a>
				<a href="<?php echo site_url('back/categories/destroy/'.$category->id); ?>" class="btn btn-danger">Delete</a></td>
			
		</tr>
	<?php endforeach; ?>
	</table>
		<?php echo admin_pagination(new Category); ?>	

</div>