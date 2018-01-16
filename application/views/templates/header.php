<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Learn Calisthenics - <?php echo $title; ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/animate.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/fontawesome-all.min.css'); ?>">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body class="bg-darkgray">
	<!-- Navbar -->
	<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: rgba(20,20,20);">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo base_url("/"); ?>" style="color: #fff">Learn<font class="fg-blue">Calisthenics</font></a>
			</div>
			<ul class="nav navbar-nav pull-right">
				<li><a href="<?php echo base_url("/"); ?>" class="fg-white">Home</a></li>
				<li><a href="<?php echo base_url("/main/about"); ?>">About</a></li>
				<?php if($this->session->has_userdata('logged_in')) { ?>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $this->session->userdata('nama'); ?>
							<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<?php if($this->session->userdata('role') == 'user') { ?>
								<li><a href="<?php echo base_url("/user/dashboard"); ?>">Dashboard</a></li>
							<?php } else { ?>
								<li><a href="<?php echo base_url("/admin/dashboard"); ?>">Dashboard</a></li>
							<?php } ?>
							<li><a href="<?php echo base_url("/user/logout"); ?>">Logout</a></li>
						</ul>
					</li>
				<?php } else { ?>
					<li><a href="<?php echo base_url("/main/user"); ?>">Login</a></li>
				<?php } ?>
			</ul>
		</div>
	</nav>
