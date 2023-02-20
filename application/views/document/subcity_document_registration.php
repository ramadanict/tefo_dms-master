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
						<form action="<?php echo base_url('subcity-save-document') ?>"
							  method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<br><h4>Personal Information</h4>
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<label for="validationCustom01" style="font-size: 20px; color: black">Full
										name</label>
									<input type="text" class="form-control" name="full_name" placeholder="Full Name"
										   required="">
									<small><?php echo form_error('full_name') ?></small>
								</div>
								
								
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									
									<label for="validationCustom01" style="font-size: 20px; color: black">Kebele</label>
									<select name="kebele_name" class="form-control" required>
										<option value="">----select Kebele----</option>
										<?php foreach ($this->stm->getKebekeBySubcity($this->session->userdata('subcity')) as $kebele) { ?>
											<option value="<?php echo $kebele->kebele_name; ?>"><?php echo $kebele->kebele_name; ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									
									<label for="validationCustom01" style="font-size: 20px; color: black">Carta
										Number</label>
									<input type="text" class="form-control" name="carta_number"
										   placeholder="123-345-567" required="">
									<small><?php echo form_error('carta_no') ?></small>
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<br>
									<label for="validationCustom01" style="font-size: 20px; color: black">Levele</label>
									<input type="text" name="level" class="form-control" id="validationCustom01"
										   placeholder="eg. R1,R2..." value="">
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<br>
									<label for="validationCustom01"
										   style="font-size: 20px; color: black">Services</label>
									<input name="services" type="text" class="form-control" id="validationCustom01"
										   placeholder="eg.(MU,M/J )  .." value="">
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<br>
									<label for="validationCustom01" style="font-size: 20px; color: black">Area</label>
									<input name="area" type="text" class="form-control" id="validationCustom01"
										   placeholder="eg.(160m2,200m2,400m2 ,.....)" value="">
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<br>
									<label for="validationCustom01" style="font-size: 20px; color: black">Building
										Height</label>
									<input name="build_height" type="text" class="form-control" id="validationCustom01"
										   placeholder="eg.(G+0,G+4)">
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<br>
									<label for="validationCustom01" style="font-size: 20px; color: black">Earth Status
										Owner</label>
									<select name="earth_status_owner_ship" class="form-control">
										<option value="">----select Kebele----</option>
										<?php foreach ($this->stm->getEarthOwnerStatus() as $ownerStatus) { ?>
											<option value="<?php echo $ownerStatus->owner_type_name; ?>"><?php echo $ownerStatus->owner_type_name; ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
								<br>	
								<label for="validationCustom01" style="font-size: 20px; color: black">End lease
										Service Year</label>
									<input type="text" name="end_year_of_leaze" class="form-control"
										   placeholder="eg.(2099,2100)">
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<br>
									<label for="validationCustom01" style="font-size: 20px; color: black">Lease Service
										Year</label>
									<input type="text" name="services_year_of_leaze" class="form-control"
										   id="validationCustom01"
										   placeholder="eg.(2000 GC,2010 GC)">
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<br>
									<label for="validationCustom01" style="font-size: 20px; color: black">Document
										Status information</label>
									<select name="document_status_info" class="form-control">
										<option value="">----select Document Status----</option>
										<?php foreach ($this->stm->getDocumentStatus() as $documentStatus) { ?>
											<option value="<?php echo $documentStatus->document_info_name; ?>">
												<?php echo $documentStatus->document_info_name; ?>
											</option>
										<?php } ?>
									</select>
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<br>
									<label for="validationCustom01" style="font-size: 20px; color: black">Shelf
										Number</label>
									<input type="text" name="shelf_no" class="form-control"
										   placeholder="eg.(2099,2100)">
								</div>


								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<br>
									<label for="validationCustom01" style="font-size: 20px; color: black">Block</label>
									<input type="text" name="block" class="form-control" placeholder="eg.(2099,2100)">
								</div>

								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<br>
									<label for="validationCustom01"
										   style="font-size: 20px; color: black">Persili</label>
									<input name="parsili" type="text" class="form-control"
										   placeholder="eg.(2099,2100)">
								</div>
								<div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
									<br>
									<label for="validationCustom01" required style="font-size: 20px; color: black">Document
										File</label>
									<input type="file" name="document_file" class="form-control"
										   placeholder="eg.(2099,2100)" required="">
									<small><?php if (isset($error)) {
											echo $error;
										} ?></small>
								</div>

							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">

								<br>
								<button class="btn btn-primary btn-lg " type="submit"><i class="fa fa-save"></i> Save Data
								</button>
							</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

