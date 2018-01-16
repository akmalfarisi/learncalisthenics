
<div class="bg-brokenwhite">
	<div class="container">
			<div class="col-md-12">
				<div class="col-md-4 col-md-offset-4 wow animated fadeInUp" data-wow-delay="0.5s" style="padding-bottom: 64px">
					<div class="well card" style="margin-top: 64px">
						<center>
							<?php if($this->session->userdata('role') == 'admin' && $mode == 'edit') { ?>
							<h1 style="padding-bottom: 32px"> Update </h1>
							<form method="post" action="<?php echo base_url('admin/update/') ?>">
								<input type="hidden" name="id" value="<?php echo $query[0]->id; ?>">
								<label text="Username">Nama</label>
								<input class="form-control" type="text" name="nama" value="<?php echo $query[0]->nama; ?>" />
								<label text="Username">Umur</label>
								<input class="form-control" type="text" name="umur" value="<?php echo $query[0]->umur; ?>" />
								<label text="Username">Email</label>
								<input class="form-control" type="text" name="email" value="<?php echo $query[0]->email; ?>" />
								<label text="Username">Username *</label>
								<input class="form-control" type="text" name="username" value="<?php echo $query[0]->username; ?>"/>
								<label text="Password">Password *</label>
								<input class="form-control" type="password" name="password" value="<?php echo $query[0]->password; ?>" />
								<button type="submit" class="btn btn-success" style="margin-top: 16px;">Update</button>
							</form>
							<?php } else { ?> 
							<h1 style="padding-bottom: 32px"> Register </h1>
							<form method="post" action="<?php echo base_url('user/register'); ?>">
								<label text="Username">Nama</label>
								<input class="form-control" type="text" name="nama" />
								<label text="Username">Umur</label>
								<input class="form-control" type="text" name="umur" />
								<label text="Username">Email</label>
								<input class="form-control" type="text" name="email" />
								<label text="Username">Username *</label>
								<input class="form-control" type="text" name="username" />
								<label text="Password">Password *</label>
								<input class="form-control" type="password" name="password" />
								<button type="submit" class="btn btn-success" style="margin-top: 16px;">Register</button>
							</form>
							<?php } ?>
						</center>
					</div>
				</div>
			</div>
	</div> 
</div>