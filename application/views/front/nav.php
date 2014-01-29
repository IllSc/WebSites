<div class="span3">
					<ul class="nav nav-list bs-docs-sidenav ">
						<?php foreach ($categories as $category): ?>
							<li><a href="<?php echo site_url('front/categories/detail/'.$category->id); ?>"><i class="icon-chevron-right"></i> <?php echo $category->name?></a></li>

						<?php endforeach ?>
            <?php $customs=Custom::find('all'); ?>
            <?php foreach ($customs as $custom): ?>
              <li><a href="<?php echo site_url('front/customs/detail/'.$custom->id); ?>"><i class="icon-chevron-right"></i> <?php echo $custom->name?></a></li>
              
            <?php endforeach ?>
						<!-- <li><a href="#"><i class="icon-chevron-right"></i> Investasi</a></li>
          <li><a href="#"><i class="icon-chevron-right"></i> Konsultasi</a></li>
          <li><a href="#"><i class="icon-chevron-right"></i> Hasil Panen</a></li> 
 -->

          <!-- <li><a href="#"><i class="icon-chevron-right"></i> Bibit</a></li>
          <li><a href="#"><i class="icon-chevron-right"></i> Benih</a></li>
          <li><a href="#"><i class="icon-chevron-right"></i> Souvenir</a></li>
          <li><a href="#"><i class="icon-chevron-right"></i> Investasi</a></li>
          <li><a href="#"><i class="icon-chevron-right"></i> Konsultasi</a></li>
          <li><a href="#"><i class="icon-chevron-right"></i> Hasil Panen</a></li> -->
         
        </ul>
								
</div>