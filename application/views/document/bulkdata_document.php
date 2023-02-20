<div class="dashboard-wrapper">
	<div class="container-fluid  dashboard-content">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"style="border: 3px solid red;">
				<div class="card"style="border-color: red">
					<h5 class="card-header bg-info">Document Bulk Data Upload</h5>
					<div class="card-body"  >
						<?php if($this->session->flashdata('status')): ?>
							<div class="alert alert-success">
								<?= $this->session->flashdata('status'); ?>
							</div>
						<?php endif;?>
						<hr>
						<form   action="<?php echo base_url('BulkDataController/BulkImportData')?>" method="post" enctype="multipart/form-data">
							<div class="row">
								
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<br>
									<label for="validationCustom01">Kebele</label>
									<select name="kebele_name" class="form-control">
										<option value="">----select Kebele----</option>
										<?php foreach ($this->stm->getKebele() as $kebele){?>
											<option value="<?php echo $kebele->kebele_id; ?>">Ganda <?php echo $kebele->kebele_name;?></option>
										<?php } ?>
									</select>
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<br>
									<label for="validationCustom01">Document File</label>
									<input type="file" name="document_file" class="form-control" placeholder="eg.(2099,2100)" required="">
									<small><?php if(isset($error)){ echo $error;}?></small>
								</div>
								<br>

							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">

								<br><button class="btn btn-success" type="submit"><i class="fa fa-upload"></i>   Upload Bulk Data</button>
							</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

