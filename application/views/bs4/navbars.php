<!-- start nav -->
<div class="main-nav clearfix">
	<div class="container">
		<div class="row">
			<nav class="navbar navbar-expand-lg col">
				<div class="site-nav-inner float-left">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<!-- End of Navbar toggler -->
					<div id="navbarSupportedContent" class="collapse navbar-collapse navbar-responsive-collapse">
						<ul class="nav navbar-nav">
							<li class="nav-item">
								<a class="nav-link animated fadeIn" href="<?php echo site_url('home'); ?>">
									<span class="tab-head">
										<span class="tab-text-title">หน้าหลัก</span>
									</span>
								</a>
							</li>
						

							<li class="nav-item dropdown active">
								<a href="#" class="nav-link" data-toggle="dropdown">เกี่ยวกับเรา <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li class="active"><a href="index.html">เกี่ยวกับเรา</a></li>
									<li><a href="#">ประวัติความเป็นมา</a></li>
									<li><a href="#">ลักษณะของหน่วยงาน</a></li>
									<li><a href="#">วิสัยทัศน์ พันธกิจ/ภารกิจหลัก</a></li>
									<li><a href="#">โครงสร้างหน่วยงาน</a></li>
									<li><a href="#">วิสัยทัศน์ พันธกิจ/ภารกิจหลัก</a></li>
									<li><a href="#">โครงสร้างหน่วยงาน</a></li>
									<li><a href="#">คณะกรรมการสถาบันบริการวิชาการฯ</a></li>
									<li><a href="#">คณะกรรมการสถาบันบริการวิชาการฯ</a></li>
									
								</ul>
							</li>

							<li class="nav-item dropdown active">
								<a href="#" class="nav-link" data-toggle="dropdown">โครงการ <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li class="active"><a href="index.html">โครงการ</a></li>
									<li><a href="#">โครงการที่ปรึกษาไทย</a></li>
									<li><a href="#">โครงอบรม อปท.</a></li>
									<li><a href="#">โครงการ otop</a></li>
									<li><a href="#">โครงการอบรมใบขับขี่</a></li>
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link animated fadeIn" href="<?php echo site_url('User/login'); ?>">
									<span class="tab-head">
										<span class="tab-text-title">ดาวน์โหลด</span>
									</span>
								</a>
							</li>

							<li class="nav-item">
								<a class="nav-link animated fadeIn" href="<?php echo site_url('#'); ?>">
									<span class="tab-head">
										<span class="tab-text-title">ติดต่อเรา</span>
									</span>
								</a>
							</li>

							<li class="nav-item">
								<a class="nav-link animated fadeIn" href="<?php echo site_url('User/login'); ?>">
									<span class="tab-head">
										<span class="tab-text-title">สำหรับเจ้าหน้าที่</span>
									</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>

			<div class="nav-search">
				<span id="search"><i class="fa fa-search"></i></span>
			</div><!-- Search end -->
			<form method="get" action="<?php echo site_url('home/all'); ?>">


				<div class="search-block" style="display: none;">
					<input type="text" class="form-control" placeholder="Type what you want and enter" name="keyword">
					<span class="search-close">&times;</span>
				</div><!-- Site search end -->
			</form>

		</div>
		<!--/ Row end -->
	</div>
	<!--/ Container end -->

</div><!-- Menu wrapper end -->

<!-- end nav -->