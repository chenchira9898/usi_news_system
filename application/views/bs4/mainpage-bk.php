
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
						 			<a class="post-cat" href="#"><?php echo date('d/m/Y',strtotime($data->a_datesave));?></a>
						 			<h2 class="post-title title-extra-large">
						 				<a href="#"><?php echo $data->a_title;?></a>
						 			</h2>
						 			<!-- <span class="post-date"><?php echo date('d/m/Y',strtotime($data->a_datesave));?></span> -->
						 		</div>
						 	</div><!--/ Featured post end -->
							
						</div><!-- Item 1 end -->
						<?php } } ?>
			<?php  /*
						<div class="item" style="background-image:url(<?php echo base_url('bs4/images/news/tech/gadget2.jpg');?>)">
							<div class="featured-post">
						 		<div class="post-content">
						 			<a class="post-cat" href="#">Gadget</a>
						 			<h2 class="post-title title-extra-large">
						 				<a href="#">Samsung Gear S3 review: A whimper, when smartwatches need a bang</a>
						 			</h2>
						 			<span class="post-date">March 16, 2017</span>
						 		</div>
						 	</div><!--/ Featured post end -->
						</div><!-- Item 2 end -->

						<div class="item" style="background-image:url(<?php echo base_url('bs4/images/news/lifestyle/travel5.jpg');?>)">
							<div class="featured-post">
						 		<div class="post-content">
						 			<a class="post-cat" href="#">Travel</a>
						 			<h2 class="post-title title-extra-large">
						 				<a href="#">Hynopedia helps female travelers find health care in Maldivs</a>
						 			</h2>
						 			<span class="post-date">March 16, 2017</span>
						 		</div>
						 	</div><!-- Featured post end -->
						</div><!-- Item 3 end -->

						*/ ?>

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
						 			<a class="post-cat" href="#"><?php echo date('d/m/Y',strtotime($data2->a_datesave));?></a>
						 			<h2 class="post-title title-large">
						 				<a href="#"><?php echo $data2->a_title;?></a>
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
						 				<a href="#"><?php echo $data3->a_title;?></a>
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
						 				<a href="#"><?php echo $data4->a_title;?></a>
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
					<div class="latest-news block color-red">
						<h3 class="block-title"><span>Latest News</span></h3>
						<div id="latest-news-slide" class="owl-carousel owl-theme latest-news-slide">
							<div class="item">
								<ul class="list-post">

									<li class="clearfix">
										<div class="post-block-style clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="<?php echo base_url('bs4/images/news/lifestyle/health5.jpg');?>" alt="" /></a>
											</div>
											<a class="post-cat" href="#">Health</a>
											<div class="post-content">
									 			<h2 class="post-title title-medium">
									 				<a href="#">Netcix cuts out the chill with an integrated...</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-author"><a href="#">John Doe</a></span>
									 				<span class="post-date">Feb 19, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post Block style end -->
									</li><!-- Li end -->



									<div class="gap-30"></div>

									<li class="clearfix">
										<div class="post-block-style clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="<?php echo base_url('bs4s/images/news/lifestyle/travel4.jpg');?>" alt="" /></a>
											</div>
											<a class="post-cat" href="#">Travel</a>
											<div class="post-content">
									 			<h2 class="post-title title-medium">
									 				<a href="#">19 incredible photos from Disney's 'Star Wars…</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-author"><a href="#">John Doe</a></span>
									 				<span class="post-date">Mar 09, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post Block style end -->
									</li><!-- Li end -->
								</ul><!-- List post 1 end -->

							</div><!-- Item 1 end -->

							<div class="item">

								<ul class="list-post">
									<li class="clearfix">
										<div class="post-block-style clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="<?php echo base_url('bs4s/images/news/lifestyle/travel5.jpg');?>" alt="" /></a>
											</div>
											<a class="post-cat" href="#">Travel</a>
											<div class="post-content">
									 			<h2 class="post-title title-medium">
									 				<a href="#">Hynopedia helps female travelers find health …</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-author"><a href="#">John Doe</a></span>
									 				<span class="post-date">Mar 12, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post Block style end -->
									</li><!-- Li end -->

									<div class="gap-30"></div>

									<li class="clearfix">
										<div class="post-block-style clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="<?php echo base_url('bs4s/images/news/lifestyle/health4.jpg');?>" alt="" /></a>
											</div>
											<a class="post-cat" href="#">Health</a>
											<div class="post-content">
									 			<h2 class="post-title title-medium">
									 				<a href="#">Samsung Gear S3 review: A whimper, when...</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-author"><a href="#">John Doe</a></span>
									 				<span class="post-date">Feb 17, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post Block style end -->
									</li><!-- Li end -->
								</ul><!-- List post 2 end -->
								
							</div><!-- Item 2 end -->

							<div class="item">

								<ul class="list-post">
									<li class="clearfix">
										<div class="post-block-style clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="<?php echo base_url('bs4s/images/news/tech/gadget2.jpg');?>" alt="" /></a>
											</div>
											<a class="post-cat" href="#">Gadget</a>
											<div class="post-content">
									 			<h2 class="post-title title-medium">
									 				<a href="#">Samsung Gear S3 review: A whimper, when...</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-author"><a href="#">John Doe</a></span>
									 				<span class="post-date">Jan 18, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post Block style end -->
									</li><!-- Li end -->

									<div class="gap-30"></div>

									<li class="clearfix">
										<div class="post-block-style clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="<?php echo base_url('bs4s/images/news/lifestyle/architecture3.jpg');?>" alt="" /></a>
											</div>
											<a class="post-cat" href="#">Architecture</a>
											<div class="post-content">
									 			<h2 class="post-title title-medium">
									 				<a href="#">The bedroom keys to Bond villain chic: The be…</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-author"><a href="#">John Doe</a></span>
									 				<span class="post-date">Jan 12, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post Block style end -->
									</li><!-- Li end -->
								</ul><!-- List post 3 end -->
								
							</div><!-- Item 3 end -->

							<div class="item">
								<ul class="list-post">
									<li class="clearfix">
										<div class="post-block-style clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="images/news/lifestyle/food3.jpg" alt="" />
												</a>
											</div>
											<a class="post-cat" href="#">Food</a>
											<div class="post-content">
									 			<h2 class="post-title title-medium">
									 				<a href="#">You can now get paid to shove chocolate coffe…</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-author"><a href="#">John Doe</a></span>
									 				<span class="post-date">Jan 16, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post Block style end -->
									</li><!-- Li end -->

									<div class="gap-30"></div>

									<li class="clearfix">
										<div class="post-block-style clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="images/news/tech/game1.jpg" alt="" />
												</a>
											</div>
											<a class="post-cat" href="#">Games</a>
											<div class="post-content">
									 			<h2 class="post-title title-medium">
									 				<a href="#">Historical heroes and robot dinosaurs: New...</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-author"><a href="#">John Doe</a></span>
									 				<span class="post-date">Jan 06, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post Block style end -->
									</li><!-- Li end -->
								</ul><!-- List post 4 end -->
								
							</div><!-- Item 4 end -->
						</div><!-- Latest News owl carousel end-->
					</div><!--- Latest news end -->

					<div class="gap-50"></div>


<?php /*

					<div class="block color-orange">
						<h3 class="block-title"><span>Lifestyle</span></h3>

						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="post-overaly-style clearfix">
									<div class="post-thumb">
										<a href="#">
											<img class="img-fluid" src="<?php echo base_url(); ?>bs4s/images/news/lifestyle/travel1.jpg" alt="" />
										</a>
									</div>
									
									<div class="post-content">
							 			<a class="post-cat" href="#">Travel</a>
							 			<h2 class="post-title">
							 				<a href="#">10 Hdrenaline fuelled activities that will chase the post...</a>
							 			</h2>
							 			<div class="post-meta">
							 				<span class="post-date">Mar 03, 2017</span>
							 			</div>
						 			</div><!-- Post content end -->
								</div><!-- Post Overaly Article end -->

								<div class="list-post-block">
									<ul class="list-post">
										<li class="clearfix">
											<div class="post-block-style post-float clearfix">
												<div class="post-thumb">
													<a href="#">
		<img class="img-fluid" src="<?php echo base_url();?>bs4s/images/news/lifestyle/food1.jpg" alt="" />
													</a>
													<a class="post-cat" href="#">Food</a>
												</div><!-- Post thumb end -->

												<div class="post-content">
										 			<h2 class="post-title title-small">
										 				<a href="#">Tacos ditched the naked chicken chalupa, so here's how to make </a>
										 			</h2>
										 			<div class="post-meta">
										 				<span class="post-date">Mar 13, 2017</span>
										 			</div>
									 			</div><!-- Post content end -->
											</div><!-- Post block style end -->
										</li><!-- Li 1 end -->

										<li class="clearfix">
											<div class="post-block-style post-float clearfix">
												<div class="post-thumb">
													<a href="#">
														<img class="img-fluid" src="<?php echo base_url(); ?>bs4s/images/news/lifestyle/health1.jpg" alt="" />
													</a>
													<a class="post-cat" href="#">Health</a>
												</div><!-- Post thumb end -->

												<div class="post-content">
										 			<h2 class="post-title title-small">
										 				<a href="#">That wearable on your wrist could soon track your health as well…</a>
										 			</h2>
										 			<div class="post-meta">
										 				<span class="post-date">Jan 11, 2017</span>
										 			</div>
									 			</div><!-- Post content end -->
											</div><!-- Post block style end -->
										</li><!-- Li 2 end -->

										<li class="clearfix">
											<div class="post-block-style post-float clearfix">
												<div class="post-thumb">
													<a href="#">
														<img class="img-fluid" src="<?php echo base_url(); ?>bs4s/images/news/lifestyle/travel2.jpg" alt="" />
													</a>
													<a class="post-cat" href="#">Travel</a>
												</div><!-- Post thumb end -->

												<div class="post-content">
										 			<h2 class="post-title title-small">
										 				<a href="#">Early tourists choices to the sea of Maldives in fancy dresses an…</a>
										 			</h2>
										 			<div class="post-meta">
										 				<span class="post-date">Feb 19, 2017</span>
										 			</div>
									 			</div><!-- Post content end -->
											</div><!-- Post block style end -->
										</li><!-- Li 3 end -->

										<li class="clearfix">
											<div class="post-block-style post-float clearfix">
												<div class="post-thumb">
													<a href="#">
														<img class="img-fluid" src="images/news/lifestyle/architecture2.jpg" alt="" />
													</a>
													<a class="post-cat" href="#">Architecture</a>
												</div><!-- Post thumb end -->

												<div class="post-content">
										 			<h2 class="post-title title-small">
										 				<a href="#">Science meets architecture in robotically coven, solar-active str…</a>
										 			</h2>
										 			<div class="post-meta">
										 				<span class="post-date">Jan 07, 2017</span>
										 			</div>
									 			</div><!-- Post content end -->
											</div><!-- Post block style end -->
										</li><!-- Li 4 end -->

									</ul><!-- List post end -->
								</div><!-- List post block end -->
							</div><!-- Col 1 end -->

							<div class="col-lg-6 col-md-6">
								<div class="post-overaly-style last clearfix">
									<div class="post-thumb">
										<a href="#">
											<img class="img-fluid" src="<?php echo base_url(); ?>bs4s/images/news/lifestyle/architecture3.jpg" alt="" />
										</a>
									</div>
									
									<div class="post-content">
							 			<a class="post-cat" href="#">Architecture</a>
							 			<h2 class="post-title">
							 				<a href="#">The bedroom keys to Bond villain chic: The best houses of 2017</a>
							 			</h2>
							 			<div class="post-meta">
							 				<span class="post-date">Feb 06, 2017</span>
							 			</div>
						 			</div><!-- Post content end -->
								</div><!-- Post Overaly Article end -->

								<div class="list-post-block">
									<ul class="list-post">
										<li class="clearfix">
											<div class="post-block-style post-float clearfix">
												<div class="post-thumb">
													<a href="#">
														<img class="img-fluid" src="<?php echo base_url();?>bs4s/images/news/lifestyle/health2.jpg" alt="" />
													</a>
													<a class="post-cat" href="#">Health</a>
												</div><!-- Post thumb end -->

												<div class="post-content">
										 			<h2 class="post-title title-small">
										 				<a href="#">Can't shed those Gym? The problem might be in your health</a>
										 			</h2>
										 			<div class="post-meta">
										 				<span class="post-date">Mar 13, 2017</span>
										 			</div>
									 			</div><!-- Post content end -->
											</div><!-- Post block style end -->
										</li><!-- Li 1 end -->

										<li class="clearfix">
											<div class="post-block-style post-float clearfix">
												<div class="post-thumb">
													<a href="#">
														<img class="img-fluid" src="<?php echo base_url();?>bs4s/images/news/lifestyle/food2.jpg" alt="" />
													</a>
													<a class="post-cat" href="#">Food</a>
												</div><!-- Post thumb end -->

												<div class="post-content">
										 			<h2 class="post-title title-small">
										 				<a href="#">Asia's best restaurant has a frustratingly confusing menu of only…</a>
										 			</h2>
										 			<div class="post-meta">
										 				<span class="post-date">Mar 07, 2017</span>
										 			</div>
									 			</div><!-- Post content end -->
											</div><!-- Post block style end -->
										</li><!-- Li 2 end -->

										<li class="clearfix">
											<div class="post-block-style post-float clearfix">
												<div class="post-thumb">
													<a href="#">
														<img class="img-fluid" src="<?php echo base_url();?>bs4s/images/news/lifestyle/architecture1.jpg" alt="" />
													</a>
													<a class="post-cat" href="#">Architecture</a>
												</div><!-- Post thumb end -->

												<div class="post-content">
										 			<h2 class="post-title title-small">
										 				<a href="#">Science meets architecture in robotically woven, s…</a>
										 			</h2>
										 			<div class="post-meta">
										 				<span class="post-date">Mar 01, 2017</span>
										 			</div>
									 			</div><!-- Post content end -->
											</div><!-- Post block style end -->
										</li><!-- Li 3 end -->

										<li class="clearfix">
											<div class="post-block-style post-float clearfix">
												<div class="post-thumb">
													<a href="#">
														<img class="img-fluid" src="<?php echo base_url();?>bs4s/images/news/lifestyle/travel5.jpg" alt="" />
													</a>
													<a class="post-cat" href="#">Travel</a>
												</div><!-- Post thumb end -->

												<div class="post-content">
										 			<h2 class="post-title title-small">
										 				<a href="#">Hynopedia helps female travelers find health …</a>
										 			</h2>
										 			<div class="post-meta">
										 				<span class="post-date">Feb 27, 2017</span>
										 			</div>
									 			</div><!-- Post content end -->
											</div><!-- Post block style end -->
										</li><!-- Li 4 end -->

									</ul><!-- List post end -->
								</div><!-- List post block end -->
							</div><!-- Col 2 end -->
						</div><!-- Row end -->
					</div><!-- Block Lifestyle end -->

					*/ ?>


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
						</div><!-- Widget Social end -->

						<div class="widget color-default">
							<h3 class="block-title"><span>Popular News</span></h3>

							<div class="post-overaly-style clearfix">
								<div class="post-thumb">
									<a href="#">
										<img class="img-fluid" src="images/news/lifestyle/health4.jpg" alt="" />
									</a>
								</div>
								
								<div class="post-content">
						 			<a class="post-cat" href="#">Health</a>
						 			<h2 class="post-title">
						 				<a href="#">Smart packs parking sensor tech and beeps when col…</a>
						 			</h2>
						 			<div class="post-meta">
						 				<span class="post-date">Feb 06, 2017</span>
						 			</div>
					 			</div><!-- Post content end -->
							</div><!-- Post Overaly Article end -->


							<div class="list-post-block">
								<ul class="list-post">
									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="images/news/tech/gadget3.jpg" alt="" />
												</a>
												<a class="post-cat" href="#">Gadgets</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
									 			<h2 class="post-title title-small">
									 				<a href="#">Panasonic's new Sumix CH7 an ultra portable filmmaker's drea…</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-date">Mar 13, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 1 end -->

									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="images/news/lifestyle/travel5.jpg" alt="" />
												</a>
												<a class="post-cat" href="#">Travel</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
									 			<h2 class="post-title title-small">
									 				<a href="#">Hynopedia helps female travelers find health care...</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-date">Jan 11, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 2 end -->

									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="images/news/tech/robot5.jpg" alt="" />
												</a>
												<a class="post-cat" href="#">Robotics</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
									 			<h2 class="post-title title-small">
									 				<a href="#">Robots in hospitals can be quite handy to navigate around...</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-date">Feb 19, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 3 end -->

									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="images/news/lifestyle/food1.jpg" alt="" />
												</a>
												<a class="post-cat" href="#">Food</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
									 			<h2 class="post-title title-small">
									 				<a href="#">Tacos ditched the naked chicken chalupa, so here's how…</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-date">Feb 27, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 4 end -->

								</ul><!-- List post end -->
							</div><!-- List post block end -->

						</div><!-- Popular news widget end -->

						<div class="widget text-center">
							<img class="banner img-fluid" src="images/banner-ads/ad-sidebar.png" alt="" />
						</div><!-- Sidebar Ad end -->
 <?php /*
						<div class="widget color-default m-bottom-0">
							<h3 class="block-title"><span>Trending News</span></h3>

							<div id="post-slide" class="owl-carousel owl-theme post-slide">
								<div class="item">
									<div class="post-overaly-style text-center clearfix">
									   <div class="post-thumb">
									      <a href="#">
									         <img class="img-fluid" src="images/news/tech/gadget1.jpg" alt="" />
									      </a>
									   </div><!-- Post thumb end -->

									   <div class="post-content">
									      <a class="post-cat" href="#">Gadgets</a>
									      <h2 class="post-title">
									         <a href="#">The best MacBook Pro alternatives in 2017 for Appl…</a>
									      </h2>
									      <div class="post-meta">
									         <span class="post-date">Feb 06, 2017</span>
									      </div>
									   </div><!-- Post content end -->
									</div><!-- Post Overaly Article 1 end -->

									<div class="post-overaly-style text-center clearfix">
									   <div class="post-thumb">
									      <a href="#">
									         <img class="img-fluid" src="images/news/video/video1.jpg" alt="" />
									      </a>
									   </div><!-- Post thumb end -->

									   <div class="post-content">
									      <a class="post-cat" href="#">Video</a>
									      <h2 class="post-title">
									         <a href="#">KJerry's will sell food cream that tastes like you…</a>
									      </h2>
									      <div class="post-meta">
									         <span class="post-date">Jan 09, 2017</span>
									      </div>
									   </div><!-- Post content end -->
									</div><!-- Post Overaly Article 2 end -->

								</div><!-- Item 1 end -->

								<div class="item">

									<div class="post-overaly-style text-center clearfix">
									   <div class="post-thumb">
									      <a href="#">
									         <img class="img-fluid" src="images/news/lifestyle/health5.jpg" alt="" />
									      </a>
									   </div><!-- Post thumb end -->

									   <div class="post-content">
									      <a class="post-cat" href="#">Health</a>
									      <h2 class="post-title">
									         <a href="#">Netcix cuts out the chill with an integrated perso…</a>
									      </h2>
									      <div class="post-meta">
									         <span class="post-date">Feb 06, 2017</span>
									      </div>
									   </div><!-- Post content end -->
									</div><!-- Post Overaly Article 3 end -->

									<div class="post-overaly-style text-center clearfix">
									   <div class="post-thumb">
									      <a href="#">
									         <img class="img-fluid" src="images/news/tech/robot1.jpg" alt="" />
									      </a>
									   </div><!-- Post thumb end -->

									   <div class="post-content">
									      <a class="post-cat" href="#">Robotics</a>
									      <h2 class="post-title">
									         <a href="#">There's no escaping Watsone Dynamics' wheeled...</a>
									      </h2>
									      <div class="post-meta">
									         <span class="post-date">Jan 15, 2017</span>
									      </div>
									   </div><!-- Post content end -->
									</div><!-- Post Overaly Article 4 end -->

								</div><!-- Item 2 end -->

							</div><!-- Post slide carousel end -->

						</div><!-- Trending news end -->

						*/ ?>

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





	