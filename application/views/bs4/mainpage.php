
	<div class="gap-40"></div>

	<section class="featured-post-area no-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-12 pad-r">
					<div id="featured-slider" class="owl-carousel owl-theme featured-slider">
						 <?php if(!empty($result)){ foreach ($result as $data) { ?>
						<div class="item" style="background-image:url(<?php echo base_url('aimg/'.$data->a_img);?>)">
							<div class="featured-post">
						 		<div class="post-content">
						 			<a class="post-cat" href="#">
						 				<?php echo date('d/m/Y',strtotime($data->a_datesave));?>
						 					
						 				</a>
						 			<h2 class="post-title title-extra-large">
						 				<a href="<?php echo site_url('home/scoop/'.$data->a_id);?>" target="_blank"><?php echo $data->a_title;?></a>
						 			</h2>
						 			<!-- <span class="post-date"><?php echo date('d/m/Y',strtotime($data->a_datesave));?></span> -->
						 		</div>
						 	</div><!--/ Featured post end -->
							
						</div><!-- Item 1 end -->
						<?php } } ?>
		
					</div><!-- Featured owl carousel end-->
				</div><!-- Col 7 end -->

				<div class="col-lg-5 col-md-12 pad-l">
					<div class="row">
						<div class="col-md-12">
							<div class="post-overaly-style contentTop hot-post-top clearfix">
								<?php if(!empty($result1)){ foreach ($result1 as $data2) { ?>
								<div class="post-thumb">
									<a href="#">
										<img class="img-fluid" src="
										<?php echo base_url('aimg/'.$data2->a_img);?>" alt="" /></a>
								</div>
								<div class="post-content">
						 		<	<a class="post-cat" href="#"><?php echo date('d/m/Y',strtotime($data2->a_datesave));?></a>
						 			<h2 class="post-title title-large">
						 				<a href="<?php echo site_url('home/scoop/'.$data2->a_id);?>" target="_blank"><?php echo $data2->a_title;?></a>
						 			</h2>
						 			<!-- <span class="post-date">February 19, 2017</span> -->
					 			</div><!-- Post content end -->
							</div><!-- Post Overaly end -->
							<?php } } ?>
						</div><!-- Col end -->

						<div class="col-md-6 pad-r-small">
							<?php if(!empty($result2)){ foreach ($result2 as $data3) { ?>
							<div class="post-overaly-style contentTop hot-post-bottom clearfix">
								<div class="post-thumb">
									<a href="#">
										<img class="img-fluid" src="
										<?php echo base_url('aimg/'.$data3->a_img);?>" alt="" /></a>
								</div>
								<div class="post-content">
						 			<a class="post-cat" href="#"><?php echo date('d/m/Y',strtotime($data3->a_datesave));?></a>
						 			<h2 class="post-title title-medium">
						 				<a href="<?php echo site_url('home/scoop/'.$data3->a_id);?>" target="_blank"><?php echo $data3->a_title;?></a>
						 			</h2>
					 			</div><!-- Post content end -->
							</div><!-- Post Overaly end -->
							<?php } } ?>
						</div><!-- Col end -->

						<div class="col-md-6 pad-l-small">
							<?php if(!empty($result3)){ foreach ($result3 as $data4) { ?>
							<div class="post-overaly-style contentTop hot-post-bottom clearfix">
								<div class="post-thumb">
									<a href="#">
										<img class="img-fluid" src="
										<?php echo base_url('aimg/'.$data4->a_img);?>" alt="" />
										</a>
								</div>
								<div class="post-content">
						 			<a class="post-cat" href="#"><?php echo date('d/m/Y',strtotime($data4->a_datesave));?></a>
						 			<h2 class="post-title title-medium">
						 				<a href="<?php echo site_url('home/scoop/'.$data4->a_id);?>" target="_blank"><?php echo $data4->a_title;?></a>
						 			</h2>
					 			</div><!-- Post content end -->
							</div><!-- Post Overaly end -->
						</div><!-- Col end -->
						<?php } } ?>

					</div>
				</div><!-- Col 5 end -->

			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- Trending post end -->

	<section class="block-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="latest-news block color-blue">
						<h3 class="block-title"><span>ข่าวล่าสุด</span></h3>

		 
			<div class="row">
				<?php if(!empty($relastnews)){ foreach ($relastnews as $data5) { ?>
				
				<div class="col-lg-4 col-md-6">
					<div class="item">
								<ul class="list-post">
									<li>
										<div class="post-block-style">
											<div class="post-thumb">
												<a href="<?php echo site_url('home/scoop/'.$data5->a_id);?>" target="_blank">
													<img class="img-fluid" src="
										<?php echo base_url('aimg/'.$data5->a_img);?>" alt="" />
										</a>
											</div>
				
											<div class="post-content">
									 			<h2 class="post-title title-medium">
									 				<a href="<?php echo site_url('home/scoop/'.$data5->a_id);?>" target="_blank"><?php echo $data5->a_title;?></a>
												 </h2>
												 
									 			<div class="post-meta">
									 				<span class="post-date">
									 					<?php echo date('d/m/Y',strtotime($data5->a_datesave));?>
									 			</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post Block style end -->
									</li><!-- Li end -->								

									<div class="gap-30">
										
									</div>
							</div><!-- Item 4 end -->
				</div>
				<?php } } ?>
				<div class="col-lg-12 col-md-12">
					<p align="right"> <a href="<?php echo site_url('home/all');?>" class="btn btn-blue"> ข่าวทั้งหมด </a>  </p>
				</div>
			</div>
		 
						 

					</div><!--- Latest news end -->

					<div class="gap-50"></div>

					</div><!-- Content Col end -->

				<div class="col-lg-4 col-md-12">
					<div class="sidebar sidebar-right">
						 
						<div class="widget">
							<h3 class="block-title"><span>Follow Us</span></h3>

							<ul class="social-icon">
								<li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div> 
					 

						<div class="widget color-default">
							<h3 class="block-title"><span>Popular News</span></h3>

							<div class="list-post-block">
								<ul class="list-post">
									<?php if(!empty($rshit)){ foreach ($rshit as $data6) { ?>
				
									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="<?php echo site_url('home/scoop/'.$data6->a_id);?>" target="_blank">
													<img class="img-fluid" src="
										<?php echo base_url('aimg/'.$data6->a_img);?>" alt="" />
												</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
									 			<h2 class="post-title title-small">
									 				<a href="<?php echo site_url('home/scoop/'.$data6->a_id);?>" target="_blank"><?php echo $data6->a_title;?></a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-date"><?php echo date('d/m/Y',strtotime($data6->a_datesave));?></span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 1 end -->
									<?php } } ?>

									
								</ul><!-- List post end -->
							</div><!-- List post block end -->

						</div><!-- Popular news widget end -->

						<div class="widget text-center">
							<img class="banner img-fluid" src="images/banner-ads/ad-sidebar.png" alt="" />
						</div><!-- Sidebar Ad end -->

					</div><!-- Sidebar right end -->
				</div><!-- Sidebar Col end -->

			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- First block end -->

	<section class="ad-content-area text-center no-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<img class="img-fluid" src="images/banner-ads/ad-content-one.jpg" alt="" />
				</div><!-- Col end -->
			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- Ad content top end -->





	