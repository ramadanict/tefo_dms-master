<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <!-- Query for all Dashboard interface -->
        <?php
        //		Gada Document Regsitred
        $this->db->select('count(document_info) as g_01_no')->where('kebele', '01');
        $gada_data = $this->db->get('document_info')->row();

        //		Gurmu Document Regsitred
        $this->db->select('count(document_info) as g_02_no')->where('kebele', '02');
        $gurmu_data = $this->db->get('document_info')->row();

        //		oda_data Document Regsitred
        $this->db->select('count(document_info) as g_03_no')->where('kebele', '03');
        $oda_data = $this->db->get('document_info')->row();


        //		badatu_data Document Regsitred
        $this->db->select('count(document_info) as g_04_no')->where('kebele', '04');
        $badatu_data = $this->db->get('document_info')->row();


        //		dadacha_arara_data Document Regsitred
        $this->db->select('count(document_info) as g_05_no')->where('kebele', '05');
        $dadacha_arara_data = $this->db->get('document_info')->row();


        //		goro_data Document Regsitred
        $this->db->select('count(document_info) as g_06_no')->where('kebele', '06');
        $goro_data = $this->db->get('document_info')->row();


        //		dake_adi_data Document Regsitred
        $this->db->select('count(document_info) as g_07_no')->where('kebele', '07');
        $dake_adi_data = $this->db->get('document_info')->row();


        //		irrecha_data Document Regsitred
        $this->db->select('count(document_info) as g_08_no')->where('kebele', '08');
        $irrecha_data = $this->db->get('document_info')->row();


        //		malka_adama_data Document Regsitred
        $this->db->select('count(document_info) as g_09_no')->where('kebele', '09');
        $malka_adama_data = $this->db->get('document_info')->row();


        //		dagaga_data Document Regsitred
        $this->db->select('count(document_info) as g_10_no')->where('kebele', '10');
        $dagaga_data = $this->db->get('document_info')->row();


      

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
                                <h5 class="card-header bg-brand text-black"> List of Kebele Document
                                    Registered</h5>
                                <div class="card-body p-0">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Kebele Name</th>
                                                <th>No Document</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($kebeles as $kebele){ ?>
                                            <tr>
                                                <td>
                                                    <span class="social-sales-icon-circle facebook-bgcolor mr-2">
                                                        <i class=" fas fa-folder-open"></i></span>
                                                    <span class="social-sales-name"><?= $kebele->kebele_name?></span>
                                                </td>
                                                <td>
                                                <?php
                                                $documents = 
                                                $this->db->select('count(document_info) as doc_no')
                                                    ->from('document_info')
                                                    ->where('kebele',$kebele->kebele_name)
                                                    ->get()
                                                    ->result();
                                                foreach($documents as $dct){
                                                    echo $dct->doc_no;
                                                }
                                                ?>    
                                                                                       
                                            </td>
                                            </tr>
                                            <?php } ?>

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
                            $this->db->select('count(document_info) as document_with_atchement_no')
                            ->where('registration_file_name !=', '')->where('subcity',$subcity);
                            $document_with_atchement_data = $this->db->get('document_info')->row();

                            //		 Document without atachement Document Regsitred
                            $this->db->select('count(document_info) as document_without_atchement_no')
                            ->where('registration_file_name =', '');
                            $document_without_atchement_data = $this->db->get('document_info')->row();
                            //		 Document has no search information
                            $this->db->select('count(document_info) as document_no_search_info_no')
                                ->where('full_name =', '')
                                ->where('kebele =', '')
                                ->where('subcity',$subcity)
                                ->where('carta_number =', '');
                            $document_no_search_info_data = $this->db->get('document_info')->row();
                            //		 Document has no search information
                            $this->db->select('count(document_info) as document_has_search_info_no')
                                ->where('full_name !=', '')->where('kebele !=', '')
                                ->where('carta_number !=', '')
                                ->where('subcity',$subcity);
                            $document_has_search_info_data = $this->db->get('document_info')->row();

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
                                                        if($total_sum ==0){
                                                            echo 0;
                                                        }
                                                        else{
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
                                                      
                                                      if($total_sum == 0){
                                                          echo 0;
                                                      } else{

                                                       $pecr_doc = $has_doc / $total_sum * 100;
                                                        echo $pecr_doc;
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