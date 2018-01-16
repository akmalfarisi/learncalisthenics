<!-- Login -->
<div class="bg-brokenwhite">
	<div class="container">
			<div class="col-md-6 col-md-offset-3 wow animated fadeInUp" style="padding-top: 64px;">
				<center><h1><font class="fg-blue">User</font> Dashboard</h1>
				<hr style="border: 2px solid; border-color: rgb(1, 126, 187)">
				<p> Halo, <font class="fg-blue"><?php echo $this->session->userdata('nama'); ?></font>! Lakukan exercise yang telah kami sediakan.</p>
				<p> 1-2 set untuk level awal, 3-5 set untuk level menengah, dan > 5 set untuk level tinggi. </p>
				<p> Tambah jumlah repetisi apabila 10x sudah dirasa tidak cukup. </p>
				<p class="fg-blue"><b><u>Ingat, semua orang bisa karena biasa. Jadi, jangan berhenti berusaha!</u></b></p>
				<div class="panel-group" id="accordion">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Push-Up 10x</a>
							</h4>
						</div>
						<div id="collapse1" class="panel-collapse collapse">
							<div class="panel-body"><img class="img-responsive" src="<?php echo base_url('assets/images/exercise/01.jpg'); ?>"></div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Pull-Up 10x</a>
							</h4>
						</div>
						<div id="collapse2" class="panel-collapse collapse">
							<div class="panel-body"><img class="img-responsive" src="<?php echo base_url('assets/images/exercise/02.jpg'); ?>"></div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Chin-Up 10x</a>
							</h4>
						</div>
						<div id="collapse3" class="panel-collapse collapse">
							<div class="panel-body"><img class="img-responsive" src="<?php echo base_url('assets/images/exercise/03.jpg'); ?>"></div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Dips 10x</a>
							</h4>
						</div>
						<div id="collapse4" class="panel-collapse collapse">
							<div class="panel-body"><img class="img-responsive" src="<?php echo base_url('assets/images/exercise/04.jpg'); ?>"></div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Crunches 10x</a>
							</h4>
						</div>
						<div id="collapse5" class="panel-collapse collapse">
							<div class="panel-body"><img class="img-responsive" src="<?php echo base_url('assets/images/exercise/05.jpg'); ?>"></div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Sit Up 10x</a>
							</h4>
						</div>
						<div id="collapse6" class="panel-collapse collapse">
							<div class="panel-body"><img class="img-responsive" src="<?php echo base_url('assets/images/exercise/06.jpg'); ?>"></div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse7">Squats 10x</a>
							</h4>
						</div>
						<div id="collapse7" class="panel-collapse collapse">
							<div class="panel-body"><img class="img-responsive" src="<?php echo base_url('assets/images/exercise/07.jpg'); ?>"></div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse8">Lunges 10x tiap Kaki</a>
							</h4>
						</div>
						<div id="collapse8" class="panel-collapse collapse">
							<div class="panel-body"><img class="img-responsive" src="<?php echo base_url('assets/images/exercise/08.jpg'); ?>"></div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse9">Plank 30 detik</a>
							</h4>
						</div>
						<div id="collapse9" class="panel-collapse collapse">
							<div class="panel-body"><img class="img-responsive" src="<?php echo base_url('assets/images/exercise/09.jpg'); ?>"></div>
						</div>
					</div>
				</div>
			</div>
	</div> 
</div>