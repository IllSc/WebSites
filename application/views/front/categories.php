<div class="container">
			
			







			<div class="row">
				<?php $this->load->view($navigasi); ?>
				<div class="span9">

					<!-- <div class="carousel slide" id="carousel-748504">
						<ol class="carousel-indicators">
							<li class="active" data-slide-to="0" data-target="#carousel-748504">
							</li>
							<li data-slide-to="1" data-target="#carousel-748504">
							</li>
							<li data-slide-to="2" data-target="#carousel-748504">
							</li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<img alt="" src="http://lorempixel.com/1600/500/sports/1" />
								<div class="carousel-caption">
									<h4>
										First Thumbnail label
									</h4>
									<p>
										Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
									</p>
								</div>
							</div>
							<div class="item">
								<img alt="" src="http://lorempixel.com/1600/500/sports/2" />
								<div class="carousel-caption">
									<h4>
										Second Thumbnail label
									</h4>
									<p>
										Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
									</p>
								</div>
							</div>
							<div class="item">
								<img alt="" src="http://lorempixel.com/1600/500/sports/3" />
								<div class="carousel-caption">
									<h4>
										Third Thumbnail label
									</h4>
									<p>
										Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
									</p>
								</div>
							</div>
						</div> <a data-slide="prev" href="#carousel-748504" class="left carousel-control">‹</a> <a data-slide="next" href="#carousel-748504" class="right carousel-control">›</a>
					</div> -->

					
					<ul class="thumbnails">


						<?php foreach ($products as $product): ?>

						<li class="span3">
							<div class="thumbnail">
								
								<div class="caption">
									<img src='<?php echo $product->image_url(); ?>' width='200' height='50'>
									<p>
										<h3><?php echo $product->name ?></h3>
										
									</p>
									<p>
										<a class="btn btn-primary" href="<?php echo site_url('front/products/detail/'.$product->id); ?>">Detail</a>
									</p>
								</div>
							</div>
						</li>


						<?php endforeach ?>

<!-- 
						<li class="span2">
							<div class="thumbnail">
								
								<div class="caption">
									<h3>
										Thumbnail label
									</h3>
									<p>
										Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
									</p>
									<p>
										<a class="btn btn-primary" href="detail.html">Action</a>
									</p>
								</div>
							</div>
						</li>
						<li class="span2">
							<div class="thumbnail">
								
								<div class="caption">
									<h3>
										Thumbnail label
									</h3>
									<p>
										Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
									</p>
									<p>
										<a class="btn btn-primary" href="detail.html">Action</a>
									</p>
								</div>
							</div>
						</li>
						<li class="span2">
							<div class="thumbnail">
								
								<div class="caption">
									<h3>
										Thumbnail label
									</h3>
									<p>
										Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
									</p>
									<p>
										<a class="btn btn-primary" href="detail.html">Action</a>
									</p>
								</div>
							</div>
						</li>
						<li class="span2">
							<div class="thumbnail">
								
								<div class="caption">
									<h3>
										Thumbnail label
									</h3>
									<p>
										Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
									</p>
									<p>
										<a class="btn btn-primary" href="detail.html">Action</a>
									</p>
								</div>
							</div>
						</li>
						<li class="span2">
							<div class="thumbnail">
								
								<div class="caption">
									<h3>
										Thumbnail label
									</h3>
									<p>
										Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
									</p>
									<p>
										<a class="btn btn-primary" href="detail.html">Action</a>
									</p>
								</div>
							</div>
						</li>
						<li class="span2">
							<div class="thumbnail">
								
								<div class="caption">
									<h3>
										Thumbnail label
									</h3>
									<p>
										Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
									</p>
									<p>
										<a class="btn btn-primary" href="detail.html">Action</a>
									</p>
								</div>
							</div>
						</li>
						<li class="span2">
							<div class="thumbnail">
								
								<div class="caption">
									<h3>
										Thumbnail label
									</h3>
									<p>
										Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
									</p>
									<p>
										<a class="btn btn-primary" href="detail.html">Action</a>
									</p>
								</div>
							</div>
						</li>
						<li class="span2">
							<div class="thumbnail">
								
								<div class="caption">
									<h3>
										Thumbnail label
									</h3>
									<p>
										Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
									</p>
									<p>
										<a class="btn btn-primary" href="detail.html">Action</a>
									</p>
								</div>
							</div>
						</li> -->
					</ul>
				</div>
			</div>
		</div>