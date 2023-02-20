<div class="dashboard-wrapper">
<style>
	#hr{ display: block;
		margin-top: 0.5em;
		margin-bottom: 0.5em;
		margin-left: auto;
		margin-right: auto;
		border-style: inset;
		border-width: 1px;
		background-color:red; 
		}
</style>
	<div class="container-fluid  dashboard-content">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="card" style="border-color: red">
					<h5 class="card-header bg-info">Kebele Document Information Registration</h5>
					<div class="card-body">
						<?php if ($this->session->flashdata('status')): ?>
							<div class="alert alert-success">
								<?= $this->session->flashdata('status'); ?>
							</div>
						<?php endif; ?>
						<form action="<?php echo base_url('kebele-save-document') ?>"
							  method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<br><h4>Odeeffannoo Abbaa Fayiilaa</h4>
									<div class="col col-lg-12">
								<hr id="hr">
								</div>
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<label for="validationCustom01" style="font-size: 20px; color: black">Maqaa</label>
									<input type="text" class="form-control" name="first_name" placeholder="Maqaa"
										   required="">
									<small><?php echo form_error('first_name') ?></small>
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<label for="validationCustom01" style="font-size: 20px; color: black">Maqaa Abbaa</label>
									<input type="text" class="form-control" name="middle_name" placeholder="Maqaa Abbaa"
										   required="">
									<small><?php echo form_error('middle_name') ?></small>
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<label for="validationCustom01" style="font-size: 20px; color: black">Maqaa Akaakkayuu</label>
									<input type="text" class="form-control" name="last_name" placeholder="Maqaa Akaakkayuu"
										   required="">
									<small><?php echo form_error('last_name') ?></small>
								</div>
								<div class="col col-lg-12">
								<hr>
								</div>
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<br><h4>Odeeffannoo Waligalaa</h4>
									<div class="col col-lg-12">
								<hr id="hr">
								</div>
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<label for="validationCustom01" style="font-size: 20px; color: black">Guyyaa Nagahee</label>
									<input type="date" class="form-control" name="date_of_recite" placeholder="Guyyaa Nagahee"
										   required="">
									<small><?php echo form_error('date_of_recite') ?></small>
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<label for="validationCustom01" style="font-size: 20px; color: black">Lakk Nagahee</label>
									<input type="text" class="form-control" name="recite_number" placeholder="Lakk Nagahee"
										   required="">
									<small><?php echo form_error('recite_number') ?></small>
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<label for="validationCustom01" style="font-size: 20px; color: black">Maqaa Kaartaa</label>
									<input type="text" class="form-control" name="name_of_carta" placeholder="Maqaa Kaartaa"
										   required="">
									<small><?php echo form_error('name_of_carta') ?></small>
								</div>
								<div class="col col-lg-12">
								<hr>
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<label for="validationCustom01" style="font-size: 20px; color: black">Lakk. Kaarta</label>
									<input type="text" class="form-control" name="carta_number"
										   placeholder="123-345-567" required="">
									<small><?php echo form_error('carta_no') ?></small>
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">									
									<label for="validationCustom01" style="font-size: 20px; color: black">Guyyaa Kaartaa</label>
									<input type="date" name="date_carta_number" class="form-control" id="validationCustom01"
										   placeholder="eg. Guyyaa Kaartaa ..." value="">
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">								
									<label for="validationCustom01"
										   style="font-size: 20px; color: black">BilookPlot</label>
									<input name="blockploit" type="text" class="form-control" id="validationCustom01"
										   placeholder="eg.(BilookPlot )  .." value="">
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<br>
									<label for="validationCustom01" style="font-size: 20px; color: black">Bilookkii</label>
									<input name="block" type="text" class="form-control" id="validationCustom01"
										   placeholder="eg.(Bilookkii ,.....)" value="">
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<br>
									<label for="validationCustom01" style="font-size: 20px; color: black">Piloot</label>
									<input name="ploit" type="text" class="form-control" id="validationCustom01"
										   placeholder="eg.(Piloot)">
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<br>
									<label for="validationCustom01" style="font-size: 20px; color: black">Dheerina Gamoo</label>
									<input name="building_height" type="text" class="form-control" id="validationCustom01"
										   placeholder="eg.(Dheerina Gamoo)">
								</div>
								<div class="col col-lg-12">
								<br><h4>Odeeffannoo Iddoo/Tessoo/ Adress Information</h4>
								<hr id="hr">
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<br>
									<label for="validationCustom01" style="font-size: 20px; color: black">Bal'ina</label>
									<input name="area" type="text" class="form-control" id="validationCustom01"
										   placeholder="eg.(Bal'ina)">
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<br>
									<label for="validationCustom01" style="font-size: 20px; color: black">Haala Qabiyyee Lafaa</label>
									<select name="earth_statuses_owner_ship" class="form-control">
										<option value="">----Haala Qabiyyee Lafaa Filadhu----</option>
										<?php foreach ($this->stm->getEarthOwnerStatus() as $ownerStatus) { ?>
											<option value="<?php echo $ownerStatus->owner_type_name; ?>"><?php echo $ownerStatus->owner_type_name; ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
								<br>	
								<label for="validationCustom01" style="font-size: 20px; color: black">Magaalaa</label>
									<input type="text" name="city" class="form-control"
										   placeholder="eg.(Magaalaa)">
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<br>
									<label for="validationCustom01" style="font-size: 20px; color: black">Ganda</label>
									<input type="text" name="kebele" class="form-control"
										   id="validationCustom01"
										   placeholder="eg.(Ganda)">
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<br>
									<label for="validationCustom01" style="font-size: 20px; color: black">Ollaa(O)</label>
									<input type="text" name="neighbor" class="form-control"
										   id="validationCustom01"
										   placeholder="eg.(Ollaa(O))">
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<br>
									<label for="validationCustom01" style="font-size: 20px; color: black">Bilookii(B)</label>
									<input type="text" name="block_b" class="form-control"
										   id="validationCustom01"
										   placeholder="eg.(Bilookii(B))">
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<br>
									<label for="validationCustom01" style="font-size: 20px; color: black">Pilooti(P)</label>
									<input type="text" name="ploit_p" class="form-control"
										   id="validationCustom01"
										   placeholder="eg.(Pilooti(P))">
								</div>


								
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<br>
									<label for="validationCustom01" style="font-size: 20px; color: black">Document
										Status information</label>
									<select name="service_status" class="form-control">
										<option value="">----Gosa Tajaajilaa----</option>
										<?php foreach ($this->stm->getServicesType() as $serviceType) { ?>
											<option value="<?php echo $serviceType->services_name; ?>">
												<?php echo $serviceType->services_name; ?>
											</option>
										<?php } ?>
									</select>
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<br>
									<label for="validationCustom01" style="font-size: 20px; color: black">Bara Xumura Liizii</label>
									<input type="text" name="end_leazy_year" class="form-control"
										   placeholder="eg.(Bara Xumura Liizii)">
								</div>


								<div class="col col-lg-12">
								<br><h4>Odeeffannoo Document Maxxansuu</h4>
								<hr id="hr">
								</div>

								<div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
									<br>
									<label for="validationCustom01" style="font-size: 20px; color: black">Document
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

