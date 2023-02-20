<div class="dashboard-wrapper">
	<div class="container-fluid  dashboard-content">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="card">
					<h5 class="card-header">List of Documents <a href="<?php echo base_url('bulkupload') ?>" class="btn btn-sm btn-outline-success pull-right float-right"><i class="fa fa-upload"></i> Bulk Upload Document</a></h5>
					<div class="card-body">
						<form action="<?php echo base_url('kebele-manage-documents') ?>" method="get" style="font-size: 23px;">
							<div class="card">
								<div class="card-body bg-info-light">
									<div class="row">

										<div class="col col-md col-4">
											<label style="color: black;">Full Name</label>
											<input style="font-family: Serif; outline: none;height: 40px;" type="text" name="full_name" placeholder="Full Name(Dej...)" class="form-control" />
										</div>
										<div class="col col-md col-3">
											<label style="color: black;">Carta Number</label>
											<input type="text" style="font-family: Serif; outline: none;height: 40px;" name="carta_number" placeholder="Carta Number(233-456-679)" class="form-control" />
										</div>
										<div class="col col-md-3">
											<label><br><br><br></label>
											<input class="btn btn-sm btn-primary" name="submit" value="Search" type="submit">
										</div>
									</div>

								</div>
							</div>
						</form>
						<h5 style="font-family: Chilanka; font-size: 20px;">Result: <?= $total_rows; ?> In Time of
							<?php echo $this->benchmark->elapsed_time(); ?> ms
						</h5>
						<hr>
						<table class="table table-bordered table-responsive">
							<thead>
								<tr>
									<th scope="col">No</th>
									<th style="width: 300px" scope="col">Full Name </th>
									<th style="width: 200px" scope="col">City</th>
									<th style="width: 200px" scope="col">Kebele</th>
									<th style="width: 200px" scope="col">Carta Number</th>
									<th style="width: 200px" scope="col">Document Status</th>
									<th style="width: 200px" scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php if (empty($alldocuments)) : ?>
									<tr>
										<td colspan="10">
											<div class="alert alert-danger" role="alert">
												No Data Found in <?php echo $this->session->userdata('kebele') ?> kebele!
											</div>
										</td>
									</tr>
								<?php endif ?>
								<?php $no = 0;
								foreach ($alldocuments	as $document) :	$no++; ?>
									<tr>
										<th scope="row"><?= $no; ?></th>
										<td style="width: 300px;font-family: Serif;color: black;font-size: 17px;">
										<?= $document->first_name.' '.$document->middle_name.' '.$document->last_name; ?></td>
										<td style="width: 200px"><?= $document->city; ?></td>
										<td style="width: 100px"><?= $document->kebele; ?></td>
										<td style="width: 100px"><?= $document->carta_number; ?></td>
										<td style="width: 100px"><?= $document->service_status; ?></td>

										<td style="width: 250px;">

											<a href="#" data-toggle="modal" data-target="#exampleModalAdd<?php echo $document->carta_number; ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Attach Document" class="btn btn-sm btn-success">
												<i class="fas fa-folder-open"></i>+ </a>
											<a href="#" data-toggle="modal" data-target="#exampleModal<?php echo $document->document_info; ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Show Detail Documents" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> </a>
											<a href="<?= base_url('/document-edit/' . $document->document_info) ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Documents" class="btn btn-sm btn-warning"><i class="fa fa-pen-square"></i> </a>
											<?php
											$check_document = $document->file_name;
											if ($check_document != '') {
											?>
											<?php
											} else {
											?>
												<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Attach left files of Documents" class="btn btn-sm btn-success"><i class="fa fa-upload"></i> </a>
											<?php } ?>
											<a onclick="return confirm('Are you sure want to detele this File ?')" href="<?= base_url('document-delete/' . $document->document_info) ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Documents" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a>
										</td>
										<!---Attach file Modal popu  -->
										<div class="modal fade" id="exampleModalAdd<?php echo $document->carta_number; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-lg" role="document">
												<div class="modal-content" style="width: 900px;">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Document Detail Description</h5>
														<a href="#" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</a>
													</div>
													<div class="modal-body">
														<div class="card">
															<div class="card-body bg-info">
																<h3 class="card-title">Attach Document for <span class="text text-danger"><u>
																	<?php echo $document->first_name .''.$document->middle_name .''.$document->last_name?></u></span></h3>
															</div>
															<form action="<?php echo base_url('kebele-attach-document/' . $document->carta_number) ?>" method="post" enctype="multipart/form-data">
																<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
																	<br>
																	<label for="validationCustom01" style="font-size: 20px; color: black">Document(PDF/Image) File</label>

																	<input type="file" name="document_file" class="form-control" placeholder="eg.(2099,2100)" required="">
																	<small><?php if (isset($error)) {
																				echo $error;
																			} ?></small>
																</div>

																<div class="card-footer p-0 text-center d-flex justify-content-center">
																	<div class="card-footer-item card-footer-item-bordered">
																		<!--																<a href="#" class="card-link">Card link</a>-->
																	</div>
																	<div class="card-footer-item card-footer-item-bordered">
																		<!--																<a href="#" class="card-link">Another link</a>-->
																	</div>
																</div>
														</div>
													</div>
													<div class="modal-footer float-left">
														<button type="submit" class="btn btn-lg btn-warning">Attach</button>
														<a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
													</div>
												</div>
												</form>
											</div>
										</div>
										<div class="modal fade" id="exampleModal<?php echo $document->document_info; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-lg" role="document">
												<div class="modal-content" style="width: 900px;">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Document Detail Description</h5>
														<a href="#" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</a>
													</div>
													<div class="modal-body">

														<div class="card">
															<div class="card-body bg-info">
																<h3 class="card-title">Detail Persona Info of Document</h3>
															</div>
															<ul class="list-group list-group-flush" style="font-size: 25px;color: black;">
																<li class="list-group-item">Full Name:<u> <?php echo $document->first_name .' ' .$document->middle_name.' '.$document->last_name?></u></li>
																<li class="list-group-item">Carta Number:<u> <?php echo $document->carta_number ?></u></li>
																<li class="list-group-item">Magaalaa <u><?= $document->city; ?>/<?php echo $document->kebele ?></u></li>
															</ul>
															<div class="card-footer p-0 text-center d-flex justify-content-center">
																<div class="card-footer-item card-footer-item-bordered">
																	<!--																<a href="#" class="card-link">Card link</a>-->
																</div>
																<div class="card-footer-item card-footer-item-bordered">
																	<!--																<a href="#" class="card-link">Another link</a>-->
																</div>
															</div>
														</div>											
														<?php 
														foreach($this->dcm->getUserDocuments($document->carta_number) as $udoc){
														// echo	$document->document_info;
															?>
															<p>
																 <!-- ===============Multiple Document========== --> 
																<embed src="<?php echo base_url() ?>document/kebele<?php  echo $udoc->kebele.'/'. $document->carta_number . '/' . $udoc->file_name; ?>" frameborder="0" width="800px;" height="600px">
															</p> 
															<?php
														}
														?>
														
													</div>
													<div class="modal-footer">
														<a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
													</div>
												</div>
											</div>
										</div>
					</div>
					</tr>
				<?php endforeach; ?>
				</tbody>
				</table>

				<div class="row">
					<div class="col-md-12 text-center">
						<p class="pagination"><?php echo $pagination; ?></p>
					</div>
				</div>
				</div>

			</div>
		</div>
	</div>
