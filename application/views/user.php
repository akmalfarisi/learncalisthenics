<!-- Login -->
<div class="full-height bg-brokenwhite full-height">
	<div class="container full-height">
			<div class="col-md-12 center_align">
				<div class="col-md-4 col-md-offset-4">
					<div class="well card wow animated fadeInUp" data-wow-delay="0.5s">
						<center>
							<h1 style="padding-bottom: 32px"> Login </h1>
							<form method="post" action="<?php echo base_url('user/login'); ?>">
								<div class="form-group">
									<label text="Username">Username</label>
									<input class="form-control" type="text" name="username" />
								</div>
								<div class="form-group">
									<label text="Password">Password</label>
									<input class="form-control" type="password" name="password" />
								</div>
								<button type="submit" class="btn btn-primary" style="margin-top: 16px;">Login</button>
								<a href="<?php echo base_url('main/register'); ?>" class="btn btn-success" style="margin-top: 16px;">Register</a>
							</form>
						</center>
					</div>
				</div>
			</div>
	</div> 
</div>