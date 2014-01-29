
<div class="container">
	<div class="row">
				<div class="category">
					<?php $this->load->view($navigasi); ?>
				</div>


				<div class="span8">
					<div class="row">
						<div class="span4">
							<div class="product-picture">
								<img src="<?php echo $detail_products->image_url() ?>" width = 150 height =150 id="gambar-detail"/>
							</div>

						</div>
						<div class="span4">
							<div class="price-info">
								<div class="price">
										<h2>Rp<?php echo $detail_products->price ?></h4><br>
								</div>
								<div class="announce">
										<?php echo $detail_products->description ?>
								</div>

							</div>	
						</div>
					</div>


					
					<div class="row">

						<h4 class="announce">
								Other Products<hr>
							</h4>
							<ul class="thumbnails">

								<?php foreach ($relevant_products as $relevant_product): ?>
									<li class="span2">
									<div class="thumbnail">
										<h4>
											<img src="<?php echo $relevant_product->image_url() ?>" />
										</h4>
										<p>
											<?php echo $relevant_product->name ?>
										</p>
										<p>
											<a class="btn btn-primary" href="<?php echo site_url('front/products/detail/'.$relevant_product->id); ?>">Detail</a>
										</p>
									</div>
									</li>
								<?php endforeach ?>

								<!-- <li class="span2">
									<div class="thumbnail">
										<h4>
											Thumbnail label
										</h4>
										<p>
											Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
										</p>
										<p>
											<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
										</p>
									</div>
								</li>
								<li class="span2">
									<div class="thumbnail">
										<h4>
											Thumbnail label
										</h4>
										<p>
											Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
										</p>
										<p>
											<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
										</p>
									</div>
								</li>
								<li class="span2">
									<div class="thumbnail">
										<h4>
											Thumbnail label
										</h4>
										<p>
											Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
										</p>
										<p>
											<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
										</p>
									</div>
								</li>
								<li class="span2">
									<div class="thumbnail">
										<h4>
											Thumbnail label
										</h4>
										<p>
											Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
										</p>
										<p>
											<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
										</p>
									</div>
								</li> -->
							</ul>



					</div>


				</div>


					
				<!-- <div class="cart-info">
					<div class="span2">
						<div class="alert">
							 <button type="button" class="close" data-dismiss="alert">×</button>
							<h4>
								Alert!
							</h4> <strong>Your cart is still empty!</strong> 
						</div>
					</div>
				</div> -->
					
			</div>
</div>
