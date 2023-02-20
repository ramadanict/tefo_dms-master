<div class="dashboard-wrapper">
	<div class="container-fluid  dashboard-content">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="border: 3px solid red;">
				<div class="card" style="border-color: red">
					<h5 class="card-header bg-info">Kebele Document Bulk Data Upload</h5>
					<div class="card-body">
						<?php if ($this->session->flashdata('status')) : ?>
							<div class="alert alert-success">
								<?= $this->session->flashdata('status'); ?>
							</div>
						<?php endif; ?>
						<hr>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="card">
										<div class="card-body">
											<h3 class="card-title border-bottom pb-2">Import Bulk Data Overview</h3>
										<p>
											Bulk Data Uploader is Used to upload multiple data from an Excel or a CSV source file into Data Database by one button click.<br>
											<h6>Follow this Rule</h6>
											<ol>
												<li>First Check document correctly scanned and with high qaulty and view to viewers </li>
												<li>Before Uploading Data prepare your Excel contains full information of Document </li>
												<li>Check correct filling of Search information Fields(eg. Full name, Carta No...)</li>
												<li>Check Correct Typing Of Your Kebele Name (eg. <del class="text-danger">Bole</del> to <pan class="text-success">Boolee</pan>).</li>
												<li class="text text-danger">Do not User Abbrivation format for City name,Subcity name,Kebele name(eg.  <del>Dh/Adii</del> ,<del>Dh/Araaraa</del>,)</li>

												</ol>
										</p>	
										</div>
									</div>
								</div>
						<form action="<?php echo base_url('BulkDataController/BulkImportData') ?>" method="post" enctype="multipart/form-data">
							<div class="row">
							
								<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 ">
									<br>
									<label for="validationCustom01">Document File</label>
									<input type="file" name="document_file" class="form-control" placeholder="eg.(2099,2100)" required="">
									<small><?php if (isset($error)) {
												echo $error;
											} ?></small>
								</div>
								<br>

							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">

								<br><button class="btn btn-success" type="submit"><i class="fa fa-upload"></i> Upload Bulk Data</button>
							</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>