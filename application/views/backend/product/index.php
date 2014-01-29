
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
			<th>Category</th>
			<th>Deskripsi</th>
			<th>Harga</th>
			<th>Gambar</th>
			<th>Action</th>
		</tr>
		<tr>
			<?php foreach ($products as $product): ?>
			<td><?php echo $product->id ?></td>
			<td><?php echo $product->name ?>
				</td>
			<td><?php 
				$category=Category::find($product->category_id);
				echo $category->name;?></td>
			<td><?php echo $product->description ?></td>
			<td><?php echo $product->price ?></td>
			<td><img src='<?php echo $product->image_url(); ?>' width='200'></td>
				<td><a href="<?php echo site_url('back/products/edit/'.$product->id); ?>" class="btn">Edit</a>
				<a href="<?php echo site_url('back/products/destroy/'.$product->id); ?>" class="btn btn-danger">Delete</a></td>
			
		</tr>
	<?php endforeach; ?>
	</table>
	<?php echo admin_pagination(new Product); ?>	
</div>