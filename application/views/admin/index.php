<!-- Benefits -->
<div class="bg-brokenwhite" style="padding-top: 64px;">
	<div class="container">
			<div class="col-md-12">
				<div class="col-md-10 col-md-offset-1 wow animated fadeIn">
					<center><h1><font class="fg-blue">Admin</font> Area</h1>
					<hr style="border: 2px solid; border-color: rgb(1, 126, 187)">
					<table class="table table-bordered table-hover">
						<thead class="bg-blue fg-white">
							<tr​>
								<th class="center">Nama</th>
								<th class="center">Email</th>
								<th class="center">Username</th>
								<th class="center">Action</th>
							</tr>
						</thead>
						<tbody style="background-color: #fff">
							<?php foreach($query as $obj){ ?>
								<tr>
									<td><?php echo $obj->nama ?></td>
									<td><?php echo $obj->email ?></td>
									<td><?php echo $obj->username ?></td>
									<td>
										<center>
											<a class="btn btn-success" href="<?php echo base_url(); ?>admin/edit/<?php echo $obj->id ?>">Edit</a>
											<a class="btn btn-danger" href="<?php echo base_url(); ?>admin/delete/<?php echo $obj->id ?>">Delete</a>
										</center>
								</tr>
							<?php }?>
						</tbody>
					</table></center>
				</div>
			</div>
	</div> 
</div>