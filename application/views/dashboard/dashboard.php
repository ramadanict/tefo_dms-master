<div class="dashboard-wrapper">
	<div class="dashboard-ecommerce">
		<!-- Query for all Dashboard interface -->
		<?php
		//		Gada Document Regsitred
		$this->db->select('count(document_info) as g_01_no')->where('kebele', '01');
		$gada_data = $this->db->get('documnet_inforamtion')->row();

		//		Gurmu Document Regsitred
		$this->db->select('count(document_info) as g_02_no')->where('kebele', '02');
		$gurmu_data = $this->db->get('documnet_inforamtion')->row();

		//		oda_data Document Regsitred
		$this->db->select('count(document_info) as g_03_no')->where('kebele', ')3');
		$oda_data = $this->db->get('documnet_inforamtion')->row();


		//		badatu_data Document Regsitred
		$this->db->select('count(document_info) as g_04_no')->where('kebele', '04');
		$badatu_data = $this->db->get('documnet_inforamtion')->row();


		//		dadacha_arara_data Document Regsitred
		$this->db->select('count(document_info) as g_05_no')->where('kebele', '05');
		$dadacha_arara_data = $this->db->get('document_info')->row();


		//		goro_data Document Regsitred
		$this->db->select('count(document_info) as g_06_no')->where('kebele', '06');
		$goro_data = $this->db->get('documnet_inforamtion')->row();


		//		dake_adi_data Document Regsitred
		$this->db->select('count(document_info) as g_07_no')->where('kebele', '07');
		$dake_adi_data = $this->db->get('documnet_inforamtion')->row();


		//		irrecha_data Document Regsitred
		$this->db->select('count(document_info) as g_08_no')->where('kebele', '08');
		$irrecha_data = $this->db->get('documnet_inforamtion')->row();


		//		malka_adama_data Document Regsitred
		$this->db->select('count(document_info) as g_09_no')->where('kebele', '09');
		$malka_adama_data = $this->db->get('documnet_inforamtion')->row();


		//		dagaga_data Document Regsitred
		$this->db->select('count(document_info) as g_10_no')->where('kebele', '10');
		$dagaga_data = $this->db->get('documnet_inforamtion')->row();


		//Dashboard data calculation based document registered status(Lease or Contract)

		//Leasae Document
		$this->db->select('count(document_info) as lease_no')->where('earth_owner_status', 'LIIZII')->or_where('earth_owner_status', 'lizii');
		$lease_data = $this->db->get('documnet_inforamtion')->row();

		//Contract Document
		$this->db->select('count(document_info) as contract_no')->where('earth_owner_status', 'KIRAA')->or_where('earth_owner_status','kiraa')->or_where('earth_owner_status','KIIRAA');
		$contract_data = $this->db->get('documnet_inforamtion')->row();

		//		Sum of Lease amd Contract Document
		$total_sum = $lease_data->lease_no + $contract_data->contract_no;
		?>
		<div class="container-fluid dashboard-content ">
			<div class="well well">
				<div class="card">
					<div class="row">
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
							<div class="card" style="background-color: #3c786c !important; color: white !important;">
								<div class="card-body">
									<div class="d-inline-block">
										<h5 class="text-white">Total Document Registered By Lease</h5>
										<h2 class="mb-0"> <?= $lease_data->lease_no; ?></h2>
									</div>
									<div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
										<i class="fa fa-chart-bar fa-fw fa-sm text-info"></i>
									</div>
								</div>
							</div>
						</div>
						<?php ?>
						<!-- ============================================================== -->
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
							<div class="card" style="background-color: #91ba17 !important;">
								<div class="card-body">
									<div class="d-inline-block">
										<h5 class="text-white">Total Contract Document</h5>
										<h2 class="mb-0"> <?= $contract_data->contract_no; ?></h2>
									</div>
									<div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
										<i class="fa fa-file-archive fa-fw fa-sm text-primary"></i>
									</div>
								</div>
							</div>
						</div>
						<!-- ============================================================== -->
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
							<div class="card">
								<div class="card-body" style="background-color: #dcd7d3 !important;">
									<div class="d-inline-block">
										<h5 class="text-black">Total Document Regsitered</h5>
										<h2 class="mb-0"><?= $total_sum; ?></h2>
									</div>
									<div class="float-right icon-circle-medium  icon-box-lg  bg-secondary-light mt-1">
										<i class="fa fa-handshake fa-fw fa-sm text-secondary"></i>
									</div>
								</div>
							</div>
						</div>
						<!-- ============================================================== -->
					</div>
					<div class="row">
						<div class="col-xl-8 col-lg-6 col-md-6 col-sm-12 col-12">
							<!-- ============================================================== -->
							<!-- social source  -->
							<!-- ============================================================== -->
							<div class="card">
								<h5 class="card-header bg-brand text-black"> List of Kebele Document
									Registered</h5>
								<div class="card-body p-0">
									<table class="table table-bordered">
										<thead>
										<tr>
											<th>Maqaa Gandaa</th>
											<th>Baay'ina Dokiimaantii</th>
										</tr>
										</thead>
										<tbody>
										<tr>
											<td>
									<span class="social-sales-icon-circle facebook-bgcolor mr-2">
									<a href="#"><i class=" fas fa-folder-open"></i></span>
												<span class="social-sales-name"> Ganda 01</span></a>
											</td>
											<td><?= $gada_data->g_01_no; ?></td>
										</tr>
										<tr>
											<td>
									<span class="social-sales-icon-circle  googleplus-bgcolor mr-2">
										<i class=" fas fa-folder-open"></i></span>
												<span class="social-sales-name">Ganda 02</span>
											</td>
											<td><?= $gurmu_data->g_02_no; ?></td>
										</tr>
										<tr>
											<td>
									<span class="social-sales-icon-circle  instagram-bgcolor mr-2">
										<i class=" fas fa-folder-open"></i></span>
												<span class="social-sales-name"> Ganda 03</span>
											</td>
											<td><?= $oda_data->g_03_no; ?></td>
										</tr>
										<tr>
											<td>
									<span class="social-sales-icon-circle facebook-bgcolor mr-2">
										<i class=" fas fa-folder-open"></i></span>
												<span class="social-sales-name">Ganda 04</span>
											</td>
											<td><?= $badatu_data->g_04_no; ?></td>
										</tr>
										<tr>
											<td>
									<span class="social-sales-icon-circle  googleplus-bgcolor mr-2">
										<i class=" fas fa-folder-open"></i></span>
												<span class="social-sales-name">Ganda 05</span>
											</td>
											<td><?= $dadacha_arara_data->g_05_no; ?></td>
										</tr>
										<tr>
											<td>
									<span class="social-sales-icon-circle  instagram-bgcolor mr-2">
										<i class=" fas fa-folder-open"></i></span>
												<span class="social-sales-name"> Ganda 06</span>
											</td>
											<td><?= $goro_data->g_06_no; ?></td>
										</tr>


										<tr>
											<td>
									<span class="social-sales-icon-circle facebook-bgcolor mr-2">
										<i class=" fas fa-folder-open"></i></span>
												<span class="social-sales-name"> Gandaa 07</span>
											</td>
											<td><?= $dake_adi_data->g_07_no; ?></td>
										</tr>
										<tr>
											<td>
									<span class="social-sales-icon-circle  googleplus-bgcolor mr-2">
										<i class=" fas fa-folder-open"></i></span>
												<span class="social-sales-name">Ganda 08</span>
											</td>
											<td><?= $irrecha_data->g_08_no; ?></td>
										</tr>
										<tr>
											<td>
									<span class="social-sales-icon-circle  instagram-bgcolor mr-2">
										<i class=" fas fa-folder-open"></i></span>
												<span class="social-sales-name"> Ganda 09</span>
											</td>
											<td><?= $malka_adama_data->g_09_no; ?></td>
										</tr>

										<tr>
											<td>
									<span class="social-sales-icon-circle facebook-bgcolor mr-2">
										<i class=" fas fa-folder-open"></i></span>
												<span class="social-sales-name"> Ganda 10</span>
											</td>
											<td><?= $dagaga_data->g_10_no; ?></td>
										</tr>
																				</tbody>

									</table>

								</div>
								<div class="card-footer text-center">
									<a href="<?= base_url('manage-documents') ?>" class="btn-primary-link">View
										Details</a>
								</div>
							</div>
							<!-- ============================================================== -->
							<!-- end social source  -->
							<!-- ============================================================== -->
						</div>
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
							<!-- ============================================================== -->
							<!-- sales traffice source  -->
							<!--- Document with atachement and calculation -->

							<?php

							//		b Document with atachement Document Regsitred
							$this->db->select('count(document_info) as document_with_atchement_no')->where('registration_file_name !=', '');
							$document_with_atchement_data = $this->db->get('document_info')->row();

							//		 Document without atachement Document Regsitred
							$this->db->select('count(document_info) as document_without_atchement_no')->where('registration_file_name =', '');
							$document_without_atchement_data = $this->db->get('document_info')->row();
							//		 Document has no search information
							$this->db->select('count(document_info) as document_no_search_info_no')
									->where('full_name =', '')->or_where('kebele =', '')->or_where('carta_number =', '');
							$document_no_search_info_data = $this->db->get('document_info')->row();

							//		 Document has no search information
							$this->db->select('count(document_info) as document_has_search_info_no')
									->where('full_name !=', '')->or_where('kebele !=', '')
									->or_where('carta_number !=', '');
							$document_has_search_info_data = $this->db->get('document_info')->row();


							?>
							<!-- ============================================================== -->
							<div class="card">
								<h5 class="card-header bg-primary"> Document with attachment status</h5>
								<div class="card-body p-0">
									<ul class="traffic-sales list-group list-group-flush">
										<li class="traffic-sales-content list-group-item ">
											<span class="traffic-sales-name">Document has Attachment</span>
											<span class="traffic-sales-amount"><?= $document_with_atchement_data->document_with_atchement_no; ?>  <span
														class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light">
												<i class="fa fa-fw fa-arrow-up"></i></span>
											<span class="ml-1 text-success">5.86%</span></span>
										</li>
										<li class="traffic-sales-content list-group-item"><span
													class="traffic-sales-name">Document has no Attachment<span
														class="traffic-sales-amount"><?= $document_without_atchement_data->document_without_atchement_no ?>  <span
															class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light"><i
																class="fa fa-fw fa-arrow-up"></i></span><span
															class="ml-1 text-success">5.86%</span></span>
                                                </span>
										</li>
										<li class="traffic-sales-content list-group-item">
										<span class="traffic-sales-name">Document has no Search info<span
													class="traffic-sales-amount "><?= $document_no_search_info_data->document_no_search_info_no ?>  <span
														class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light">
													<i class="fa fa-fw fa-arrow-up"></i></span>
												<span class="ml-1 text-success">
													<?php
													$has_doc= $document_has_search_info_data->document_has_search_info_no;
													$has_no_doc= $document_no_search_info_data->document_no_search_info_no;
													if($total_sum >0){
													$pecr_no_doc= $has_no_doc / $total_sum *100;
													echo $pecr_no_doc;
													}
													else{
														echo "0";
													}
													?>
													%</span></span>
                                                </span>
										</li>
										<li class="traffic-sales-content list-group-item"><span
													class="traffic-sales-name">Document has  Search info<span
														class="traffic-sales-amount "><?= $document_has_search_info_data->document_has_search_info_no ?>   <span
															class="icon-circle-small icon-box-xs text-danger ml-4 bg-danger-light"><i
																class="fa fa-fw fa-arrow-alt-circle-up"></i></span><span
															class="ml-1 text-danger">
														<?php
														$has_doc= $document_has_search_info_data->document_has_search_info_no;
														$has_no_doc= $document_no_search_info_data->document_no_search_info_no;
														if($total_sum > 0){
														$pecr_doc= $has_doc / $total_sum *100;
														echo $pecr_doc;
														}
														else{
															echo "0";
														}

														?> %
														</span></span>
                                                </span>
										</li>

									</ul>
								</div>
								<div class="card-footer text-center">
									<a href="#" class="btn-primary-link">View Details</a>
								</div>
							</div>
						</div>
						<!-- ============================================================== -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
