<?php
//print_r($_SESSION);
$accm = $_SESSION['logi_acc'];
$pimg = $_SESSION['display_img'];
$pid = $_SESSION['login_id'];
//echo $pid;
//echo $accm;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>
		USI WEBSITE SYSTEM
	</title>
	<!-- tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- bootstrap 3.3.4-->
	<?php echo link_tag('bootstrap/css/bootstrap.min.css'); ?>
	<!-- font awesome icons-->
	<?php echo link_tag('bootstrap/css/font-awesome.min.css'); ?>
	<!-- ionicons-->
	<?php echo link_tag('bootstrap/css/ionicons.min.css'); ?>
	<!--Theme style-->
	<?php echo link_tag('dist/css/AdminLTE.min.css'); ?>
	<!--Theme skin -->
	<?php echo link_tag('dist/css/skins/skin-blue.min.css'); ?>
	<!--Theme skin -->
	<?php echo link_tag('plugins/datatables/dataTables.bootstrap.css'); ?>
	<?php  //echo link_tag('plugins/datatables/dataTables.js'); 
	?>
	<!--My Custom-->
	<?php echo link_tag('dist/css/mycustom.css'); ?>
	<!-- REQUIRED JS SCRIPTS -->
	<!-- jQuery 2.1.4 -->
	<script src="<?php echo base_url(); ?>plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript">
	</script>
	<script src="<?php echo base_url(); ?>plugins/datatables/jquery.dataTables.min.js" type="text/javascript">
	</script>
	<script src="<?php echo base_url(); ?>plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript">
	</script>
	<!-- Bootstrap 3.3.2 JS -->
	<script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js" type="text/javascript">
	</script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url(); ?>dist/js/app.min.js" type="text/javascript">
	</script>
	<!-- ckeditor-->
	<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
</head>

<body class="skin-blue sidebar-mini">
	<div class="wrapper">
		<!-- Main Header -->
		<header class="main-header">
			<!-- Logo -->
			<a href="<?php site_url(); ?>" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini">
					<b>
						USI
					</b>
				</span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg">
					<b>
						USI WEBSITE SYSTEM
					</b>
				</span>
			</a>
			<!-- Header Navbar -->
			<nav class="navbar navbar-static-top" role="navigation">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">
						Toggle navigation
					</span>
				</a>
				<!-- Navbar Right Menu -->
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- User Account Menu -->
						<li class="dropdown user user-menu">
							<!-- Menu Toggle Button -->
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<!-- The user image in the navbar-->
								<img src="<?php echo base_url('pimg/' . $pimg); ?>" class="user-image" alt="User Image" />
								<!-- hidden-xs hides the username on small devices so only the image appears. -->
								<span class="hidden-xs">
									<?php echo $this->session->userdata('display_name') ?>
								</span>
							</a>
							<ul class="dropdown-menu">
								<!-- The user image in the menu -->
								<li class="user-header">
									<img src="<?php echo base_url('pimg/' . $pimg); ?>" class="img-circle" alt="User Image" />

									<p>
										<?php // echo $this->session->userdata('username'); 
										?>
										<small>
											menu
										</small>
									</p>
								</li>

								<li class="user-footer">
									<div class="pull-left">
										<a href="<?php echo  site_url('mprofile'); ?>" class="btn btn-default btn-flat">
											Profile
										</a>
									</div>
									<div class="pull-right">
										<a href="<?php echo  site_url('user/logout'); ?>" class="btn btn-default btn-flat">
											Sign out
										</a>
									</div>
								</li>
							</ul>
						</li>
						<!-- Control Sidebar Toggle Button -->

					</ul>
				</div>
			</nav>
		</header>
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel">
					<div class="pull-left image">
						<img src="<?php echo base_url('pimg/' . $pimg); ?>" class="img-circle" alt="User Image" />
					</div>
					<div class="pull-left info">
						<p>
							<?php echo $this->session->userdata('display_name'); ?>
						</p>
						<!-- Status -->
						<a href="#">
							<i class="fa fa-circle text-success">
							</i>Online
						</a>
					</div>
				</div>
				<?php
				$menus = "active";
				?>
				<!-- sidebar menu: : style can be found in sidebar.less -->

				<!-- Admin -->
				<?php if ($accm == 1) { ?>
					<ul class="sidebar-menu">
						<li><a href="<?php echo site_url('dashboard'); ?>">
								<i class="fa fa-home"></i> หน้าหลัก</a></li>
						<li class="<?php echo $menus; ?>">
							<a href="ads_type">
								<i class="fa fa-files-o"></i>
								<span>จัดการข่าว</span>
							</a>
							<ul class="treeview-menu">
								<li>
									<a href="<?php echo site_url('articles'); ?>">
										<i class="fa fa-circle-o"></i> รายการข่าว </a>
								</li>
							</ul>
						</li>
						<li class="<?php echo $menus; ?>">
							<a href="ads_type">
								<i class="fa fa-files-o"></i>
								<span>จัดการบุคลากร</span>
							</a>
							<ul class="treeview-menu">
								<li>
									<a href="<?php echo site_url('member/m_level'); ?>">
										<i class="fa fa-circle-o"></i>-สิทธิการใช้งาน</a>
								</li>
								<li>
									<a href="<?php echo site_url('member'); ?>">
										<i class="fa fa-circle-o"></i>-จัดการบุคลากร </a>
								</li>

								<li><a href="<?php echo site_url('mprofile'); ?>">
										<i class="fa fa-user"></i> Profile </a></li>
								<li><a href="<?php echo site_url('mprofile/pwd'); ?>">
										<i class="fa fa-user"></i> แก้ไขรหัสผ่าน </a></li>
							</ul>
						</li>
						<li class="<?php echo $menus; ?>">
							<a href="ads_type">
								<i class="fa fa-files-o"></i>
								<span>จัดการเอกสารดาวน์โหลด</span>
							</a>
							<ul class="treeview-menu">
								<li>
									<a href="<?php echo site_url('Download'); ?>">
										<i class="fa fa-circle-o"></i>-จัดการเอกสารดาวน์โหลด</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.sidebar-menu -->

					<!-- End Admin -->


				<?php } elseif ($accm == 2) { ?>
					<ul class="sidebar-menu">
						<li><a href="<?php echo site_url('dashboard'); ?>">
								<i class="fa fa-home"></i> หน้าหลัก</a></li>


						<li class="<?php echo $menus; ?>">
							<a href="ads_type">
								<i class="fa fa-files-o"></i>
								<span>จัดการข่าว</span>
							</a>
							<ul class="treeview-menu">
								<li>
									<a href="<?php echo site_url('articles'); ?>">
										<i class="fa fa-circle-o"></i> รายการข่าว </a>
								</li>
							</ul>
						</li>
						<li class="<?php echo $menus; ?>">
							<a href="ads_type">
								<i class="fa fa-files-o"></i>
								<span>จัดการเอกสารดาวน์โหลด</span>
							</a>
							<ul class="treeview-menu">
								<li>
									<a href="<?php echo site_url('download'); ?>">
										<i class="fa fa-circle-o"></i>-จัดการเอกสารดาวน์โหลด</a>
								</li>
							</ul>
						</li>



						<li><a href="<?php echo site_url('mprofile'); ?>">
								<i class="fa fa-user"></i> Profile </a></li>
						<li><a href="<?php echo site_url('mprofile/pwd'); ?>">
								<i class="fa fa-user"></i> แก้ไขรหัสผ่าน </a></li>

					</ul><!-- /.sidebar-menu -->
				<?php } ?>
			</section>
			<!-- /.sidebar -->
		</aside>