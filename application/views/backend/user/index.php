
<div class="container">	
	<ul class="breadcrumb">
				<li>
					<?php echo anchor('back/main', 'Dashboard'); ?> <span class="divider">/</span>
				</li>
				<li class="active">User List
				</li>
			</ul>
	
	<table class = "table table-bordered">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>User Name</th>
			<th>Email</th>
			<th>Action</th>
		</tr>
		<tr>
			<?php foreach ($users as $user): ?>
			<td><?php echo $user->id ?></td>
			<td><?php echo $user->name ?></td>
			<td><?php echo $user->username ?></td>
			<td><?php echo $user->email ?></td>
			
				<td><a href="<?php echo site_url('back/users/edit/'.$user->id); ?>" class="btn">Edit</a>
				<a href="<?php echo site_url('back/users/destroy/'.$user->id); ?>" class="btn btn-danger">Delete</a></td>
			
		</tr>
	<?php endforeach; ?>
	</table>	
</div>