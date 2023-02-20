<div class="dashboard-wrapper">
	<div class="container-fluid  dashboard-content">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="card" style="border-color: red">
					<h5 class="card-header bg-info">Document Information Registration</h5>
					<div class="card-body">
						<?php if ($this->session->flashdata('status')): ?>
							<div class="alert alert-success">
								<?= $this->session->flashdata('status'); ?>
							</div>
						<?php endif; ?>
						<form action="<?php echo base_url('DocumentRegistrationController/update_document/' . $edit_document->document_info) ?>"
							  method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<br><h4>Personal Information</h4>
								</div>
								<div class="col col-md col-md-6">
									<div class="col-md-6 col-lg-12 col-md-12 col-sm-12 col-12 ">
										<label for="validationCustom01" style="font-size: 20px;color: black;">First name</label>
										<input type="text" class="form-control" name="first_name" placeholder="Full Name"
											   value="<?php echo $edit_document->first_name ?>" required="">
										<small><?php echo form_error('first_name') ?></small>
									</div>
									<div class="col-md-6 col-lg-12 col-md-12 col-sm-12 col-12 ">
										<label for="validationCustom01" style="font-size: 20px;color: black;">Middlr name</label>
										<input type="text" class="form-control" name="middle_name" placeholder="Middle Name"
											   value="<?php echo $edit_document->middle_name ?>" required="">
										<small><?php echo form_error('middle_name') ?></small>
									</div>
									<div class="col-md-6 col-lg-12 col-md-12 col-sm-12 col-12 ">
										<label for="validationCustom01" style="font-size: 20px;color: black;">Last name</label>
										<input type="text" class="form-control" name="last_name" placeholder="Full Name"
											   value="<?php echo $edit_document->last_name ?>" required="">
										<small><?php echo form_error('last_name') ?></small>
									</div>
									<div class="col-md-4 col-lg-12 col-md-12 col-sm-12 col-12 ">

										<br>
										<label for="validationCustom01" style="font-size: 20px;color: black;">Kebele</label>
										<select name="kebele_name" class="form-control">
											<option value="">----select Kebele----</option>
											<?php foreach ($this->stm->getKebele() as $kebele) { ?>
												<option value="<?php echo $kebele->kebele_name; ?>"<?php if ($edit_document->kebele == $kebele->kebele_name) {
													echo "Selected";
												} ?>><?php echo $kebele->kebele_name; ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="col-md-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
										<br>
										<label for="validationCustom01" style="font-size: 20px;color: black;">Carta Number</label>
										<input type="text" class="form-control" name="carta_number"
											   placeholder="123-345-567"
											   value="<?php echo $edit_document->carta_number; ?>"
											   required="">
										<small><?php echo form_error('carta_no') ?></small>
									</div>
									<br>

									<div class="col-md-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
										<label for="validationCustom01">Services</label>
										<input name="services" type="text" class="form-control" id="validationCustom01"
											   placeholder="eg.(MU,M/J )  .."
											   value="<?php echo $edit_document->service_status; ?>">
									</div>
									<div class="col-md-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
										<label for="validationCustom01" style="font-size: 20px;color: black;">Area</label>
										<input name="area" type="text" class="form-control" id="validationCustom01"
											   placeholder="eg.(160m2,200m2,400m2 ,.....)"
											   value="<?php echo $edit_document->area; ?>">
									</div>
									<div class="col-md-6 col-lg-12 col-md-12 col-sm-12 col-12  ">
										<label for="validationCustom01" style="font-size: 20px;color: black;">Building Height</label>
										<input name="build_height" type="text" class="form-control"
											   id="validationCustom01"
											   placeholder="eg.(G+0,G+4)"
											   value="<?php echo $edit_document->building_height; ?>">
									</div>
									<div class="col-md-6 col-lg-12 col-md-12 col-sm-12 col-12 ">
										<label for="validationCustom01" style="font-size: 20px;color: black;">Earth Status Owner</label>
										<select name="earth_status_owner_ship" class="form-control">
											<option value="">----select Earth Status Owner----</option>
											<?php foreach ($this->stm->getEarthOwnerStatus() as $ownerStatus) { ?>
												<option value="<?php echo $ownerStatus->owner_type_name; ?>"<?php if ($edit_document->earth_owner_status == $ownerStatus->owner_type_name) {
													echo "Selected";
												} ?>><?php echo $ownerStatus->owner_type_name; ?></option>
											<?php } ?>
										</select>
									</div>
									
									
									<div class="col-md-6 col-lg-12 col-md-12 col-sm-12 col-12 ">
										<br>
										<label for="validationCustom01" style="font-size: 20px;color: black;">Document Status information</label>
										<select name="document_status_info" class="form-control">
											<option value="">----select Document Status----</option>
											<?php foreach ($this->stm->getDocumentStatus() as $edit_documentStatus) { ?>
												<option value="<?php echo $edit_documentStatus->document_info_name; ?>"<?php if ($edit_document->document_status_info == $edit_documentStatus->document_info_name) {
													echo "Selected";
												} ?>>
													<?php echo $edit_documentStatus->document_info_name; ?>
												</option>
											<?php } ?>
										</select>
									</div>

								
								<div class="col-md-6 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<br>
									<label for="validationCustom01" style="font-size: 20px;color: black;">Block</label>
									<input type="text" name="block" value="<?php echo $edit_document->block; ?>"
										   class="form-control" placeholder="eg.(2099,2100)">
								</div>
								<br>
							
								<br>
							</div>
								<div class="col col-md-6">
										<br>
										<label for="validationCustom01">Document File</label>
										<input type="file" name="document_file" class="form-control">
										<input type="hidden" value="<?php echo $edit_document->file_name ?>"  class="form-control" name="old_pdf_file"/>
										<hr>
										<p>Old Document PDF file</p>
										<hr>
										<small><?php if (isset($error)) {
												echo $error;
											} ?></small>
											<?php
														$kebele=$this->session->userdata('kebele');
														// echo ;
														if ($edit_document->kebele == $kebele)
														 { ?>
															<p>
																<embed src="<?php echo base_url() ?>document/Kebele/<?php echo $edit_document->carta_number.'/'.$edit_document->file_name; ?>" frameborder="0" width="800px;" height="600px">
															</p>
										<?php }
										$check_document = $edit_document->file_name;
										if ($check_document != '') {
											?>
											<?php if ($edit_document->kebele == 'Gadaa') { ?>
												<p>
													<embed src="<?php echo base_url() ?>document/Gadaa/<?php echo $edit_document->registration_file_name; ?>"
														   frameborder="0" width="700px;" height="900px">
												</p>
											<?php } else if ($edit_document->kebele == 'Gurmuu') { ?>
												<embed src="<?php echo base_url() ?>document/Gurmuu/<?php echo $edit_document->registration_file_name; ?>"
													   frameborder="0" width="700px;" height="900px">
											<?php } else if ($edit_document->kebele == 'Odaa') { ?>
												<embed src="<?php echo base_url() ?>document/Odaa/<?php echo $edit_document->registration_file_name; ?>"
													   frameborder="0" width="700px;" height="900px">
											<?php } else if ($edit_document->kebele == 'Badhaatuu') { ?>
												<embed src="<?php echo base_url() ?>document/Badhaatuu/<?php echo $edit_document->registration_file_name; ?>"
													   frameborder="0" width="700px;" height="900px">
											<?php } else if ($edit_document->kebele == 'Dhadacha Araaraa') { ?>
												<embed src="<?php echo base_url() ?>document/Dhadacha Araaraa/<?php echo $edit_document->registration_file_name; ?>"
													   frameborder="0" width="700px;" height="900px">
											<?php } else if ($edit_document->kebele == 'Gooroo') { ?>
												<embed src="<?php echo base_url() ?>document/Gooroo/<?php echo $edit_document->registration_file_name; ?>"
													   frameborder="0" width="700px;" height="900px">
											<?php } else if ($edit_document->kebele == 'Dhakaa Adii') { ?>
												<embed src="<?php echo base_url() ?>document/Dhakaa Adii/<?php echo $edit_document->registration_file_name; ?>"
													   frameborder="0" width="700px;" height="900px">
											<?php } else if ($edit_document->kebele == 'Irreechaa') { ?>
												<embed src="<?php echo base_url() ?>document/Irreechaa/<?php echo $edit_document->registration_file_name; ?>"
													   frameborder="0" width="700px;" height="900px">
											<?php } else if ($edit_document->kebele == 'Malkaa Adaamaa') { ?>
												<embed src="<?php echo base_url() ?>document/Malkaa Adaamaa/<?php echo $edit_document->registration_file_name; ?>"
													   frameborder="0" width="700px;" height="900px">
											<?php } else if ($edit_document->kebele == 'Dagaagaa') { ?>
												<embed src="<?php echo base_url() ?>document/Dagaagaa/<?php echo $edit_document->registration_file_name; ?>"
													   frameborder="0" width="700px;" height="900px">
											<?php } else if ($edit_document->kebele == 'Biqqaa') { ?>
												<embed src="<?php echo base_url() ?>document/Biqqaa/<?php echo $edit_document->registration_file_name; ?>"
													   frameborder="0" width="700px;" height="900px">
											<?php } else if ($edit_document->kebele == 'Gaara Luugoo') { ?>
												<embed src="<?php echo base_url() ?>document/Gaara Luugoo/<?php echo $edit_document->registration_file_name; ?>"
													   frameborder="0" width="700px;" height="900px">
											<?php } else if ($edit_document->kebele == 'Hangaatuu') { ?>
												<embed src="<?php echo base_url() ?>document/Hangaatuu/<?php echo $edit_document->registration_file_name; ?>"
													   frameborder="0" width="700px;" height="900px">
											<?php } else if ($edit_document->kebele == 'Caffee') { ?>
												<embed src="<?php echo base_url() ?>document/Caffee/<?php echo $edit_document->registration_file_name; ?>"
													   frameborder="0" width="700px;" height="900px">
											<?php } else if ($edit_document->kebele == 'Daabee Solloqqee') { ?>
												<embed src="<?php echo base_url() ?>document/Daabee Solloqqee/<?php echo $edit_document->registration_file_name; ?>"
													   frameborder="0" width="700px;" height="900px">
											<?php } else if ($edit_document->kebele == 'Barreechaa') { ?>
												<embed src="<?php echo base_url() ?>document/Barreechaa/<?php echo $edit_document->registration_file_name; ?>"
													   frameborder="0" width="700px;" height="900px">
											<?php } else if ($edit_document->kebele == 'Bokkuu Shanaan') { ?>
												<embed src="<?php echo base_url() ?>document/Bokkuu Shanaan/<?php echo $edit_document->registration_file_name; ?>"
													   frameborder="0" width="700px;" height="900px">
											<?php } else if ($edit_document->kebele == 'Migiraa') { ?>
												<embed src="<?php echo base_url() ?>document/Migiraa/<?php echo $edit_document->registration_file_name; ?>"
													   frameborder="0" width="700px;" height="900px">
											<?php } ?>
											<?php
										} else {
											?>
											<span>Not Attached Yet</span>

											<?php
										}

										?>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">

								<br>
								<button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Update Data
								</button>
							</div>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>

