<!-- Main Cover -->
<div class="index_cover overlay full-height">
	<div class="container full-height">
		<div class="center_align" style="z-index: 2;">
			<div class="col-md-12">
				<h2 class="wow animated fadeInUp"><b>SAATNYA MEMBENTUK TUBUH ANDA, <font class="fg-blue">TANPA BIAYA APAPUN</font></b></h1>
				<h3 class="wow animated fadeInUp" data-wow-delay="1s"><b><font class="fg-blue"><?php echo $count; ?> ORANG</font></b> TELAH BERSAMA KAMI.</h3>
			</div>
			<div class="wow animated fadeInUp col-md-12" data-wow-delay="2s" style="padding-top: 32px">
				<button id="redirectToBenefits" class="btn btn-lg btn-primary">Pelajari Lebih Lanjut</button></a>
			</div>
		</div>
	</div>
</div>

<!-- Benefits -->
<div id="benefits" class="full-height bg-brokenwhite full-height" style="padding-top: 64px;">
	<div class="container full-height">
			<div class="col-md-12 animated wow animated fadeInRight">
				<h1>Mengapa <font class="fg-blue">Calisthenics?</font></h1>
				<hr style="border: 2px solid; border-color: rgb(1, 126, 187)">
			</div>
			<div class="col-md-12" style="padding-top: 64px;">
				<div class="col-md-4 animated wow animated fadeInLeft"  data-wow-delay="1s">
					<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
								<img class="img-responsive" src="<?php echo base_url('assets/images/benefits1.svg'); ?>">
							</div>

							<div class="item">
								<img class="img-responsive" src="<?php echo base_url('assets/images/benefits2.svg'); ?>">
							</div>

							<div class="item">
								<img class="img-responsive" src="<?php echo base_url('assets/images/benefits3.svg'); ?>"">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-md-offset-2">
					<h3 class="wow animated fadeInRight" data-wow-delay="1.5s"><span class="fa fa-check fg-blue"></span> Bisa dimana saja, kapanpun anda berada</h3>
					<h3 class="wow animated fadeInRight" data-wow-delay="2s"><span class="fa fa-check fg-blue"></span> Tidak mengandalkan peralatan yang banyak</h3>
					<h3 class="wow animated fadeInRight" data-wow-delay="2.5s"><span class="fa fa-check fg-blue"></span> Lebih hemat dibandingkan pergi ke Gym </h3>
					<center class="animated wow fadeInUp" data-wow-delay="3s"><a href="<?php echo base_url('main/register'); ?>" class="btn btn-lg btn-success" style="margin-top: 64px">Daftar Sekarang</a></center>
				</div>
			</div>
	</div> 
</div>

<!-- Who Registered -->
<div id="benefits" class="full-height bg-brokenwhite full-height" style="padding-top: 64px;">
	<div class="container full-height">
			<div class="col-md-12 wow animated fadeInLeft">
				<h1 class="right"><font class="fg-blue">Pengguna</font> Kami</h1>
				<hr style="border: 2px solid; border-color: rgb(1, 126, 187)">
			</div>
			<div class="col-md-8 col-md-offset-2" style="padding-top: 64px;">
				<?php foreach($query as $users) { ?>
					<div class="col-md-4 wow animated fadeInUp" data-wow-delay="1s">
						<div class="card" style="height: 192px;">
							<center>
								<div class="col-md-12" style="padding-top: 16px">
									<i class="fa fa-user fa-5x fg-blue" aria-hidden="true"></i>
								</div>
								<div class="col-md-12" style="padding-top: 16px">
									<p><font class="fg-blue"><?php echo $users->nama ?></font></p>
									<p>Umur <?php echo $users->umur ?> Tahun</p>
								</div>
							</center>
						</div>
					</div>
				<?php } ?>
			</div>
	</div> 
</div>

<script>
</script>