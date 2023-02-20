<div class="dashboard-wrapper">
	<div class="container-fluid  dashboard-content">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="card">
					<h5 class="card-header">Bulk Data List of Documents <a href="<?= base_url('bulkupload')?>" class="btn btn-sm btn-outline-success pull-right float-right"><i class="fa fa-upload"></i>  Bulk Upload Document</a></h5>

					<div class="card-body">
						<form name="submit" action="<?php echo base_url('DocumentRegistrationController/search_document') ?>" method="get" style="font-size: 23px;">
							<div class="card">
								<div class="card-body bg-info-light">
									<div class="row">
										<div class="col col-md col-3" style="font-size: 23px !important;">
											<label style="color: black;">Kebele</label>
											<select class="form-control" style="font-family: Serif; outline: none" name="kebele">
												<option value="">---Select Kebele ---</option>
												<?php foreach ($this->stm->getKebele() as $kebele){ ?>
													<option value="<?= $kebele->kebele_id?>">(<?= $kebele->kebele_code;?>)  <?= $kebele->kebele_name;?></option>
												<?php } ?>
											</select>
										</div>
										<div class="col col-md col-4">
											<label  style="color: black;">Full Name</label>
											<input style="font-family: Serif; outline: none;height: 40px;" type="text" name="full_name" placeholder="Full Name(Dej...)" class="form-control"/>
										</div>
										<div class="col col-md col-3">
											<label  style="color: black;">Carta Number</label>
											<input type="text" style="font-family: Serif; outline: none;height: 40px;" name="carta_number" placeholder="Carta Number(233-456-679)" class="form-control"/>
										</div>
										<div class="col col-md-3">
											<label><br><br><br></label>
											<button class="btn btn-sm btn-primary"  type="submit"><i class="fa fa-search"></i> Search
											</button>
										</div>
									</div>

								</div>
							</div>
						</form>
						<p style="font-family: Chilanka; font-size: 20px;">Result: <?= $total_rows;?></p>
						<hr>
						<table class="table table-bordered table-responsive">
							<thead>
							<tr>
								<th style="width: 100px;font-family: Serif;color: black;font-size: 17px;" scope="col">No</th>
								<th style="width: 300px" scope="col">Full Name</th>
								<th style="width: 200px"  scope="col">Reg.No</th>
								<th style="width: 200px" scope="col">City</th>
								<th style="width: 200px" scope="col">Subcity</th>
								<th style="width: 200px" scope="col">Kebele</th>
								<th style="width: 200px" scope="col">Carta Number</th>
								<th style="width: 200px" scope="col">Document Status</th>
								<th style="width: 200px" scope="col">Shef No</th>
								<th style="width: 300px"  scope="col">Action</th>
							</tr>
							</thead>
							<tbody>
							<?php $no = 0;
							foreach ($documents	as $document):	$no++; ?>
							<tr>
								<th scope="row"><?= $no; ?></th>
								<td style="width: 300px;font-family: Serif;color: black;font-size: 17px;"><?= $document->full_name ?></td>
								<td style="width: 100px"><?= $document->registration_number; ?></td>
								<td style="width: 200px"><?= $document->city_name; ?></td>
								<td style="width: 200px"><?= $document->subcity_name; ?></td>
								<td style="width: 100px"><?= $document->kebele_name; ?></td>
								<td style="width: 100px"><?= $document->carta_number; ?></td>
								<td style="width: 100px"><?= $document->document_status_info; ?></td>
								<td style="width: 100px"><?= $document->shelf_no; ?></td>
								<td style="width: 250px;">
									<a href="#" data-toggle="modal"
									   data-target="#exampleModal<?php echo $document->document_info; ?>"
									   data-toggle="tooltip" data-placement="top" title=""
									   data-original-title="Show Detail Documents" class="btn btn-sm btn-info"><i
												class="fa fa-eye"></i> </a>
									<a href="<?= base_url('/document-edit/' . $document->document_info) ?>"
									   data-toggle="tooltip" data-placement="top" title=""
									   data-original-title="Edit Documents" class="btn btn-sm btn-warning"><i
												class="fa fa-pen-square"></i> </a>
									<?php
									$check_document = $document->registration_file_name;
									if ($check_document != '') {
									} else {
										?>
										<a href="#" data-toggle="tooltip" data-placement="top" title=""
										   data-original-title="Attach left files of Documents"
										   class="btn btn-sm btn-success"><i class="fa fa-upload"></i> </a>
									<?php } ?>
									<a onclick="return confirm('Are you sure want to detele this File ?')"
									   href="<?= base_url('document-delete/' . $document->document_info) ?>"
									   data-toggle="tooltip" data-placement="top" title=""
									   data-original-title="Delete Documents" class="btn btn-sm btn-danger"><i
												class="fa fa-trash"></i> </a>
								</td>
								<div class="modal fade" id="exampleModal<?php echo $document->document_info; ?>"
									 tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
															<h3 class="card-title" >Detail Persona Info of Document</h3>
														</div>
														<ul class="list-group list-group-flush" style="font-size: 25px;color: black;">
															<li class="list-group-item">Full Name:<u> <?php echo $document->full_name?></u></li>
															<li class="list-group-item">Carta Number:<u> <?php echo $document->carta_number?></u></li>
															<li class="list-group-item">Magaalaa <u><?= $document->city_name;?>/<?php echo $document->subcity_name;?>/<?php echo $document->kebele_name?></u></li>
															<li class="list-group-item">Shelf Number:<u> <?= $document->shelf_no;?></u></li>
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
												<?php if($document->kebele == 1){ ?>
												<p>
													<embed src="<?php echo base_url() ?>document/Gadaa/<?php echo $document->registration_file_name; ?>"
														   frameborder="0" width="800px;" height="600px">
												</p>
												<?php } else if($document->kebele==2){ ?>
													<embed src="<?php echo base_url() ?>document/Gurmuu/<?php echo $document->registration_file_name; ?>"
														   frameborder="0" width="800px;" height="600px">
												<?php } else if($document->kebele==3){ ?>
													<embed src="<?php echo base_url() ?>document/Odaa/<?php echo $document->registration_file_name; ?>"
														   frameborder="0" width="800px;" height="600px">
												<?php }  else if($document->kebele == 4){ ?>
													<embed src="<?php echo base_url() ?>document/Badhaatuu/<?php echo $document->registration_file_name; ?>"
														   frameborder="0" width="800px;" height="600px">
												<?php }  else if($document->kebele == 5){ ?>
													<embed src="<?php echo base_url() ?>document/Dhadacha Araaraa/<?php echo $document->registration_file_name; ?>"
														   frameborder="0" width="800px;" height="600px">
												<?php }  else if($document->kebele == 6){ ?>
													<embed src="<?php echo base_url() ?>document/Gooroo/<?php echo $document->registration_file_name; ?>"
														   frameborder="0" width="800px;" height="600px">
												<?php }  else if($document->kebele == 7){ ?>
													<embed src="<?php echo base_url() ?>document/Dhakaa Adii/<?php echo $document->registration_file_name; ?>"
														   frameborder="0" width="800px;" height="600px">
												<?php }  else if($document->kebele == 8){ ?>
													<embed src="<?php echo base_url() ?>document/Irreechaa/<?php echo $document->registration_file_name; ?>"
														   frameborder="0" width="800px;" height="600px">
												<?php }  else if($document->kebele == 9){ ?>
													<embed src="<?php echo base_url() ?>document/Malkaa Adaamaa/<?php echo $document->registration_file_name; ?>"
														   frameborder="0" width="800px;" height="600px">
												<?php }  else if($document->kebele == 10){ ?>
													<embed src="<?php echo base_url() ?>document/Dagaagaa/<?php echo $document->registration_file_name; ?>"
														   frameborder="0" width="800px;" height="600px">
												<?php }  else if($document->kebele == 11){ ?>
													<embed src="<?php echo base_url() ?>document/Biqqaa/<?php echo $document->registration_file_name; ?>"
														   frameborder="0" width="800px;" height="600px">
												<?php }  else if($document->kebele == 12){ ?>
													<embed src="<?php echo base_url() ?>document/Gaara Luugoo/<?php echo $document->registration_file_name; ?>"
														   frameborder="0" width="800px;" height="600px">
												<?php }  else if($document->kebele == 13){ ?>
													<embed src="<?php echo base_url() ?>document/Hangaatuu/<?php echo $document->registration_file_name; ?>"
														   frameborder="0" width="800px;" height="600px">
												<?php }  else if($document->kebele == 14){ ?>
													<embed src="<?php echo base_url() ?>document/Caffee/<?php echo $document->registration_file_name; ?>"
														   frameborder="0" width="800px;" height="600px">
												<?php }  else if($document->kebele == 15){ ?>
													<embed src="<?php echo base_url() ?>document/Daabee Solloqqee/<?php echo $document->registration_file_name; ?>"
														   frameborder="0" width="800px;" height="600px">
												<?php }  else if($document->kebele == 16){ ?>
													<embed src="<?php echo base_url() ?>document/Barreechaa/<?php echo $document->registration_file_name; ?>"
														   frameborder="0" width="800px;" height="600px">
												<?php }  else if($document->kebele == 17){ ?>
													<embed src="<?php echo base_url() ?>document/Bokkuu Shanaan/<?php echo $document->registration_file_name; ?>"
														   frameborder="0" width="800px;" height="600px">
												<?php }  else if($document->kebele == 18){ ?>
													<embed src="<?php echo base_url() ?>document/Migiraa/<?php echo $document->registration_file_name; ?>"
														   frameborder="0" width="800px;" height="600px">
												<?php } ?>
											</div>
											<div class="modal-footer">
												<a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
											</div>
										</div>
									</div>
								</div>
					</div>
					</tr>
					<?php endforeach;?>
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
