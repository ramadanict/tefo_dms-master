<!-- ============================================================== -->
<div class="dashboard-wrapper">
	<div class="dashboard-influence">
		<div class="container-fluid dashboard-content">
			<!-- ============================================================== -->
			<!-- pageheader -->
			<!-- ============================================================== -->
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="page-header">
						<h2 class="pageheader-title">List Of User </h2>
						<div class="page-breadcrumb">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">User</a></li>
									<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">List</a></li>
									<li class="breadcrumb-item active" aria-current="page">List User</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- ============================================================== -->
				<!-- bordered table -->
				<!-- ============================================================== -->
				<div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
					<div class="card">
						<h5 class="card-header">User Lists
							<?php
							if($this->session->userdata('role') == 1 or $this->session->userdata('role') == 2){
							?>
							<a style="float: right" href="#" class="btn btn-sm btn-primary pull-left" data-toggle="modal" data-target="#exampleModal">
								<i class="fa fa-plus-square"></i> Add New User
							</a>
							<?php } ?>
						</h5>
						<div class="card-body col-lg">
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-header bg-info">
											<h5 class="modal-title" id="exampleModalLabel">User Registration Form</h5>
											<a href="#" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">×</span>
											</a>
										</div>
										<div class="modal-body">
											<div class="card-body border-top">
												<form action="<?= base_url('save_user') ?>" method="post" enctype="multipart/form-data">
													<div class="row">
														<div class="col col-md-6">
															<div class="form-group">
																<label for="inputLarge" class="col-form-label">First Name</label>
																<input id="inputLarge" name="first_name" type="text" autocomplete="off" value="" placeholder="Fisrt Name" class="form-control" required>
															</div>
														</div>
														<div class="col col-md-6">
															<div class="form-group">
																<label for="inputLarge" class="col-form-label">Middle Name</label>
																<input id="inputLarge" name="middle_name" autocomplete="off" type="text" placeholder="Middle Name" value="" class="form-control" required>
															</div>
														</div>
														<div class="col col-md-6">
															<div class="form-group">
																<label for="inputLarge" class="col-form-label">Last Name</label>
																<input id="inputLarge" name="last_name" autocomplete="off" type="text" value="" placeholder="Last Name" required class="form-control" required>
															</div>
														</div>
														<div class="col col-md-6">
															<div class="form-group">
																<label for="inputLarge" class="col-form-label">User Name</label>
																<input id="inputLarge" name="username" autocomplete="off" type="text" placeholder="Username" value="" class="form-control" required>
															</div>
														</div>
														<div class="col col-md-6">
															<div class="form-group">
																<label for="inputLarge" class="col-form-label">Password</label>
																<input id="inputLarge" name="password" autocomplete="off" type="password" placeholder="password" value="" class="form-control" required>
															</div>
														</div>
														<div class="col col-md-6">
															<div class="form-group">
																<label for="inputLarge" class="col-form-label">Role</label>
																<select name="role" class="form-control" required>
																	<option value="">--select Role --</option>
																	<?php foreach ($this->stm->getRole() as $role) : ?>
																		<option value="<?= $role->role_id ?>"><?= $role->role_name ?></option>
																	<?php endforeach; ?>
																</select>
															</div>
														</div>
														<div class="col col-md-6">
															<div class="form-group">
																<label for="inputLarge" class="col-form-label">Email</label>
																<input id="inputLarge" name="email" autocomplete="off" type="text" placeholder="Email" value="" class="form-control ">
															</div>
														</div>
														<div class="col col-md-6">
															<div class="form-group">
																<label for="inputLarge" class="col-form-label">Phone</label>
																<input id="inputLarge" name="phone" autocomplete="off" type="text" placeholder="Phone" value="" class="form-control ">
															</div>
														</div>
														<div class="col col-md-6">
															<div class="form-group">
																<label for="inputLarge" class="col-form-label">Kebele</label>
																<select name="kebele" id="kebele" class="form-control">
																<option value="">--select Kebele</option>
																	<?php foreach($this->stm->getKebele() as $kebele){?>
																		<option value="<?= $kebele->kebele_name?>"><?= $kebele->kebele_name?></option>
																<?php } ?>
																	</select>
															</div>
														</div>
														<div class="col col-md-6">
															<div class="form-group">
																<label for="inputLarge" class="col-form-label">Offices</label>
																<select name="kebele" id="offfice" required class="form-control">
																<option value="">--select Office</option>
																	<?php foreach($this->stm->getOffices() as $office){?>
																		<option value="<?= $office->office_name?>"><?= $office->office_name?></option>
																<?php } ?>
																	</select>
															</div>
														</div>
													</div>

											</div>
										</div>
										<div class="modal-footer">
											<a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
											<input name="submit" type="submit" value="Save Data" class="btn btn-primary" />
										</div>
									</div>
									
									</form>
								</div>

							</div>

						</div>
						<div class="row">
							<div class="col col-md-12">
								<?php if ($this->session->userdata('user_status')) {
								?>

									<div class="alert alert-success" role="alert">
										<?php {
											echo $this->session->userdata('user_status');
										} ?>
									</div>
								<?php } else if ($this->session->userdata('status_error')) { ?>
									<div class="alert alert-danger" role="alert">
										<?php echo $this->session->userdata('status_error'); ?>
									</div>
								<?php } ?>
							</div>
						</div>

						<form action="<?= base_url('user_list') ?>" method="post">
							<div class="card">
								<div class="card-body bg-info-light">
									<div class="row">
										<div class="col col-md col-4">
											<input class="form-control" style="font-family: Serif; outline: none; border-radius: 4px;" type="text" name="keyword" sty placeholder="Full Name(Dej...)" />
										</div>
										<div class="col col-md-3">
											<input class="btn btn-sm btn-primary" style="margin-left: -100px;" name="submit" value="Search" type="submit">
										</div>

									</div>
								</div>
						</form>
						<h5 style="font-family: Chilanka; font-size: 20px;">Result: <?= $total_rows; ?> In Time of
							<?php echo $this->benchmark->elapsed_time(); ?> ms
						</h5>
						<hr>

						<table class="table table-bordered">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Full Name</th>
									<th scope="col">Username</th>
									<th scope="col">Role</th>
									<th scope="col">Email</th>
									<th scope="col">Phone</th>
									<th scope="col">Address</th>
									<th scope="col">Status</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 0;
								foreach ($users as $user) : $no++; ?>
									<tr>
										<th scope="row"><?php echo $no; ?></th>
										<td><?php echo $user->first_name . ' ' . $user->middle_name . ' ' . $user->last_name ?></td>
										<td><?= $user->username ?></td>
										<td><?= $user->role_name ?></td>
										<td><?= $user->email ?></td>
										<td><?= $user->phone ?></td>
										<td><?= $user->city.' / '. $user->kebele ?></td>
										<td>
											<?php
											if($this->session->userdata('role') == 1 or $this->session->userdata('role') == 2){
											if ($user->status == 1) {
											?>
												<span class="text-success">
													<a href="<?php echo base_url('disable_user/' . $user->user_id) ?>" class="btn btn-sm btn-success">ON</a>
												</span>
											<?php } else if ($user->status == 0) {
											?>
												<span class="text-danger">
													<a href="<?= base_url('activate_user/' . $user->user_id) ?>" class="btn btn-sm btn-danger">OFF</a>
												</span>
											<?php
											} } else{
												?>
													<?php $status = $user->status;
													if($status==1){
													?>
												<span class="text text-success">Active<span>
											<?php } else if($status == 0){?>
												<span class="text text-danger">Deacivated<span>
												<?php } ?>
												<?php
											}
											?>
										</td>
										<td>
											<a data-toggle="modal" data-target="#UserShowModal<?= $user->user_id ?>" href="#" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
											<?php if($this->session->userdata('role') == 1 or $this->session->userdata('role') == 2){?>
											<a data-toggle="modal" data-target="#UserEditModal<?= $user->user_id ?>" href="#" class="btn btn-sm btn-warning"><i class="fa fa-pen-square"></i></a>
											<a onclick="return confirm('Are you sure want to delete this user ?')" href="<?= base_url('destroyUser/' . $user->user_id) ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
<?php } ?>
										</td>
									</tr>
									<!--						Show Modal USer start Her-->
									<div class="modal fade" id="UserShowModal<?= $user->user_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<a href="#" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="modal-body">
													<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
														<!-- ============================================================== -->
														<!-- hover list  -->
														<!-- ============================================================== -->
														<div class="card">
															<h5 class="card-header">Details of Users</h5>
															<div class="card-body">
																<div class="list-group">
																	<a href="#" class="list-group-item list-group-item-action"> Full Name: <?= $user->first_name . ' ' . $user->middle_name . ' ' . $user->last_name; ?> </a>
																	<a href="#" class="list-group-item list-group-item-action">Phone Number: <?= $user->phone ?></a>
																	<a href="#" class="list-group-item list-group-item-action">Email: <?= $user->email ?></a>
																	<a href="#" class="list-group-item list-group-item-action disabled">Username:<?= $user->username ?></a>
																	<a href="#" class="list-group-item list-group-item-action disabled">Address:<?= $user->city . '/ '  . $user->kebele ?></a>
																	<a href="#" class="list-group-item list-group-item-action disabled">Status:
																		<?php if ($user->status == 1) { ?>
																			<span class="text-success"> Active</span>
																		<?php } else if ($user->status == 0) { ?>
																			<span class="text-danger"> Deactive</span>
																		<?php } ?>
																	</a>
																</div>
															</div>
														</div>
														<!-- ============================================================== -->
														<!-- end hoverlist  -->
														<!-- ============================================================== -->
													</div>
												</div>
												<div class="modal-footer">
													<a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
												</div>
											</div>
										</div>
									</div>
									<!--						Edn Show Modal User Start Here ..-->
									<!--						Edit USer Modal Start Here-->
									<div class="modal fade" id="UserEditModal<?= $user->user_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header bg-warning">
													<h5 class="modal-title" id="exampleModalLabel">User Edit Form</h5>
													<a href="#" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="modal-body">
													<div class="card-body border-top">
														<form action="<?= base_url('update_user/' . $user->user_id) ?>" method="post" enctype="multipart/form-data">
															<div class="row">
																<div class="col col-md-6">
																	<div class="form-group">
																		<label for="inputLarge" class="col-form-label">First Name</label>
																		<input id="inputLarge" name="first_name" type="text" autocomplete="off" value="<?= $user->first_name ?>" placeholder="Fisrt Name" class="form-control ">
																	</div>
																</div>
																<div class="col col-md-6">
																	<div class="form-group">
																		<label for="inputLarge" class="col-form-label">Middle Name</label>
																		<input id="inputLarge" name="middle_name" autocomplete="off" type="text" placeholder="Middle Name" value="<?= $user->middle_name ?>" class="form-control ">
																	</div>
																</div>
																<div class="col col-md-6">
																	<div class="form-group">
																		<label for="inputLarge" class="col-form-label">Last Name</label>
																		<input id="inputLarge" name="last_name" autocomplete="off" type="text" value="<?= $user->last_name ?>" placeholder="Fisrt Name" class="form-control">
																	</div>
																</div>
																<div class="col col-md-6">
																	<div class="form-group">
																		<label for="inputLarge" class="col-form-label">User Name</label>
																		<input id="inputLarge"  name="username" autocomplete="off" type="text" placeholder="Username" value="<?= $user->username ?>" class="form-control ">
																	</div>
																</div>
																<div class="col col-md-6">
																	<div class="form-group">
																		<label for="inputLarge" class="col-form-label">Password</label>
																		<input id="inputLarge" name="password" autocomplete="off" type="password" placeholder="Password" value="" class="form-control ">
																	</div>
																</div>
																<div class="col col-md-6">
																	<div class="form-group">
																		<label for="inputLarge" class="col-form-label">Email</label>
																		<input id="inputLarge" name="email" autocomplete="off" type="text" placeholder="Email" value="<?= $user->email ?>" class="form-control ">
																	</div>
																</div>
																<div class="col col-md-6">
																	<div class="form-group">
																		<label for="inputLarge" class="col-form-label">Phone</label>
																		<input id="inputLarge" name="phone" autocomplete="off" type="text" placeholder="Phone" value="<?= $user->phone ?>" class="form-control ">
																	</div>
																</div>

																
																<div class="col col-md-6">
																	<div class="form-group">
																		<label for="inputLarge" class="col-form-label">Kebele</label>
																		<select name="kebele" class="form-control">
																			<option value="">--select Kebele</option>
																			<?php foreach ($this->stm->getKebele() as $kebele) : ?>
																				<option value="<?= $kebele->kebele_name ?>" <?php if ($kebele->kebele_name == $user->kebele) {
																																echo "Selected";
																															} ?>><?= $kebele->kebele_name ?></option>
																			<?php endforeach; ?>
																		</select>
																	</div>
																</div>
																<div class="col col-md-6">
															<div class="form-group">
																<label for="inputLarge" class="col-form-label">Offices</label>
																<select name="kebele" id="offfice" required class="form-control">
																<option value="">--select Office</option>
																	<?php foreach($this->stm->getOffices() as $office){?>
																		<option value="<?= $office->office_name?>"<?php if($user->office_name == $office->office_name){ echo "Selected";}  ?>><?= $office->office_name?></option>
																<?php } ?>
																	</select>
															</div>
														</div>
															</div>
													</div>
												</div>
												<div class="modal-footer">
													<a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
													<input name="submit" type="submit" value="Update Data" class="btn btn-warning" />
												</div>
											</div>
											</form>
										</div>

									</div>

									<!--						Edit USer Modal Edn Here-->
								<?php endforeach; ?>

							</tbody>
						</table>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<p class="pagination"><?php echo $pagination; ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>