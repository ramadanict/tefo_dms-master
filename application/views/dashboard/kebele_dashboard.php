<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <!-- Query for all Dashboard interface -->
        <?php
        //Dashboard data calculation based document registered status(Lease or Contract)

        //Leasae Document

        $kebele = $this->session->userdata('kebele');
        // echo $kebele;
        $this->db->select('count(document_info) as lease_no')
            ->where('earth_owner_status', 'LIIZII')
            ->where('kebele', $kebele);
        $lease_data = $this->db->get('documnet_inforamtion')->row();

        //Contract Document
        $this->db->select('count(document_info) as contract_no')
            ->where('earth_owner_status', 'KIRAA')
            ->where('kebele', $kebele);
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
                                        <h2 class="mb-0"> <?= $lease_data->lease_no ?></h2>
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
                                        <h2 class="mb-0"> <?= $contract_data->contract_no ?></h2>
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
                                        <h2 class="mb-0"><?= $total_sum ?></h2>
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
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="section-block">
                                        <?php $city = $this->db->select('*')->from('city')->get()->row();
                                        ?>
                                        <h5 class="section-title">How To Use <?php echo $city->city_name ?> Document Management System</h5>
                                        <p>This article is based on practicle use of <?php echo $city->city_name ?> dms</p>
                                    </div>
                                    <div class="accrodion-regular">
                                        <div id="accordion4">
                                            <div class="card bg-secondary">
                                                <div class="card-header" id="headingTen">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link text-dark collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                                            <span class="fas fa-angle-down mr-3"></span>Document Registration
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion4" style="">
                                                    <div class="card-body">
                                                        <p class="lead text-dark">
                                                            Document management is a system or process used to capture, track and store electronic documents such as PDFs, word processing files and digital images of paper-based content. Document management can save you time and money</p>
                                                        <p> To Use <?php echo $city->city_name ?> Document Management System must have user account and login to your account.
                                                            <a href="#" class="btn btn-secondary">Go somewhere</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card bg-light ">
                                                <div class="card-header" id="headingEleven">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                                            <span class="fas mr-3 fa-angle-down"></span>Bulk Data Upload
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion4" style="">
                                                    <div class="card-body">
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
                                                                        <li class="text text-danger">Do not User Abbrivation format for City name,Subcity name,Kebele name(eg. <del>Dh/Adii</del> ,<del>Dh/Araaraa</del>,)</li>

                                                                    </ol>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card bg-dark">
                                                <div class="card-header" id="headingTwelve">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed text-white" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                                            <span class="fas fa-angle-down mr-3"></span>How Search and Manage User Documents
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordion4">
                                                    <div class="card-body">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="card">
										<div class="card-body">
											<h3 class="card-title border-bottom pb-2">How to Search Customer Docuemnt and Manage It</h3>
										<p>
                                        A good document management system can help organize all of your files and data in one place, keep track of all of your critical documents, speed up your workflow, improve accuracy and provide around-the-clock access to documents from any part of the follder<h6>Follow this Rule</h6>
											<ol>
												<li>First Check You select Document Management on menu side bar. </li>
												<li>Type at least  two(2)  of customer name on full name input box field and Type Carta Number on carta number input box field  and hit Search button </li>
												<li>Second method to get all document on Database simple click search button without filling any information.</li>
												<li class="text text-danger">After Getting Document we want then take Operation(Attach left Document, Edit Information,show <details></details> inforamation of documents, Delete documents)</li>

												</ol>
										</p>	
										</div>
									</div>
								</div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                            $this->db->select('count(document_info) as document_with_atchement_no')
                                ->where('file_name !=', '')->where('kebele', $kebele);
                            $document_with_atchement_data = $this->db->get('documnet_inforamtion')->row();

                            //		 Document without atachement Document Regsitred
                            $this->db->select('count(document_info) as document_without_atchement_no')->where('registration_file_name =', '')->where('kebele', $kebele);
                            $document_without_atchement_data = $this->db->get('document_info')->row();
                            //		 Document has no search information
                            $this->db->select('count(document_info) as document_no_search_info_no')
                                ->where('first_name =', '')
                                ->where('carta_number =', '')
                                ->where('kebele', $kebele);
                            $document_no_search_info_data = $this->db->get('documnet_inforamtion')->row();

                            //		 Document has no search information
                            $this->db->select('count(document_info) as document_has_search_info_no')
                                ->where('first_name !=', '')->where('kebele', $kebele)
                                ->where('carta_number !=', '');
                            $document_has_search_info_data = $this->db->get('documnet_inforamtion')->row();


                            ?>
                            <!-- ============================================================== -->
                            <div class="card">
                                <h5 class="card-header bg-primary"> Document with attachment status</h5>
                                <div class="card-body p-0">
                                    <ul class="traffic-sales list-group list-group-flush">
                                        <li class="traffic-sales-content list-group-item ">
                                            <span class="traffic-sales-name">Document has Attachment</span>
                                            <span class="traffic-sales-amount"><?= $document_with_atchement_data->document_with_atchement_no; ?> <span class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light">
                                                    <i class="fa fa-fw fa-arrow-up"></i></span>
                                                <span class="ml-1 text-success">5.86%</span></span>
                                        </li>
                                        <li class="traffic-sales-content list-group-item"><span class="traffic-sales-name">Document has no Attachment<span class="traffic-sales-amount"><?= $document_without_atchement_data->document_without_atchement_no ?> <span class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1 text-success">5.86%</span></span>
                                            </span>
                                        </li>
                                        <li class="traffic-sales-content list-group-item">
                                            <span class="traffic-sales-name">Document has no Search info<span class="traffic-sales-amount "><?= $document_no_search_info_data->document_no_search_info_no ?> <span class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light">
                                                        <i class="fa fa-fw fa-arrow-up"></i></span>
                                                    <span class="ml-1 text-success">
                                                        <?php
                                                        $has_doc = $document_has_search_info_data->document_has_search_info_no;
                                                        $has_no_doc = $document_no_search_info_data->document_no_search_info_no;
                                                        if ($total_sum == 0) {
                                                            echo 0;
                                                        } else {
                                                            $pecr_no_doc = $has_no_doc / $total_sum * 100;
                                                            echo $pecr_no_doc;
                                                        }
                                                        ?>
                                                        %</span></span>
                                            </span>
                                        </li>
                                        <li class="traffic-sales-content list-group-item"><span class="traffic-sales-name">Document has Search info<span class="traffic-sales-amount "><?= $document_has_search_info_data->document_has_search_info_no ?> <span class="icon-circle-small icon-box-xs text-danger ml-4 bg-danger-light"><i class="fa fa-fw fa-arrow-alt-circle-up"></i></span><span class="ml-1 text-danger">
                                                        <?php
                                                        $has_doc = $document_has_search_info_data->document_has_search_info_no;
                                                        $has_no_doc = $document_no_search_info_data->document_no_search_info_no;
                                                        if ($total_sum == 0) {
                                                            echo 0;
                                                        } else {
                                                            echo
                                                            $pecr_doc = $has_no_doc / $total_sum * 100;
                                                            echo $pecr_doc;
                                                        }
                                                        ?> %
                                                    </span></span>
                                            </span>
                                        </li>

                                    </ul>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="<?php echo base_url('kebele-manage-documents') ?>" class="btn-primary-link">View Details</a>
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