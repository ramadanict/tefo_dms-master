<!-- left sidebar -->
<!-- ============================================================== -->
<div class="nav-left-sidebar sidebar-dark">
	<div class="menu-list" style="background-color: #ecebe8;">
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="d-xl-none d-lg-none" href="<?php echo base_url('dashboard') ?>">Dashboardee</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav flex-column">
					<li class="nav-divider">
						-------------------------------------
					</li>
					<?php $role = $this->session->userdata('role');
					// echo $role;
					if ($role == 1 or $role == 2) {
					?>
						<!-- 
				===================================================
				=====Super and Admin Role menu Start here==
				===================================================
				-->
						<li class="nav-item nav-link">
							<a <?= $this->uri->segment('1') == 'dashboard' ? 'class="nav-link active"' : ''?> href="<?php echo base_url('dashboard') ?>">
								<i class="fab fa-windows"></i>Dashboard </a>
						</li>
						<li class="nav-divider">
							-------------------------------------
						</li>
						<!--<li class="nav-item nav-link">
							<a <?= $this->uri->segment('1') == 'document-registration' ? 'class="nav-link active"' : ''?> href="<?php echo base_url('document-registration') ?>">
								<i class="far fa-file-archive"></i>Document Registration</a>

						</li>
						<li class="nav-divider">
							-------------------------------------
						</li>
					-->
						<li class="nav-item nav-link">
							<a <?= $this->uri->segment('1') == 'manage-all-documents' ? 'class="nav-link active"' : ''?> href="<?php echo base_url('manage-all-documents') ?>">
								<i class="fas fa-folder-open"></i>Document Management</a>
						</li>
						
						<li class="nav-divider">
							-------------------------------------
						</li>
						<li class="nav-item nav-link">
							<a <?= $this->uri->segment('1') == 'bulkupload' ? 'class="nav-link active"' : ''?>  href="<?php echo base_url('bulkupload') ?>">
								<i class="fa fa-upload"></i>Bulk Data Upload</a>

						</li>
						<li class="nav-divider">
							-------------------------------------
						</li>
						<li class="nav-item nav-link ">
							<a  <?= $this->uri->segment('1') == 'city_admin' | $this->uri->segment('1') == 'subcity_list'? 'class="nav-link active"' : ''?> href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4">
								<i class=" fas fa-wrench"></i>Settings</a>
							<div id="submenu-4" class="collapse submenu" style="">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="<?php echo base_url('city_admin') ?>">City Admin</a>
									</li>
									
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url('kebele_list') ?>">Kebele</a>
									</li>
								</ul>
							</div>
						</li>
						</li>
						
						<li class="nav-divider">
							-------------------------------------
						</li>
						<li class="nav-item nav-link ">
							<a <?= $this->uri->segment('1') == 'user_list' ? 'class="nav-link active"' : ''?> href="<?php echo base_url('user_list') ?>">
							<i class=" fas fa-user-plus"></i>User Management</a>
						</li>
						<li class="nav-divider">
							-------------------------------------
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="<?php echo base_url('document') ?>">
								<i class="fab fa-fw fa-wpforms"></i>Gabaasa</a>
						</li>
						<li class="nav-divider">
							-------------------------------------
						</li>
						<!--=====================================================
							===== Subcity Admin Role Menu Start Here=======
							===================================================== -->
					<?php } else if ($role == 3) {
					?>
						<li class="nav-item nav-link">
							<a <?= $this->uri->segment('1') == 'kebele-dashboard' ? 'class="nav-link active"' : ''?> href="<?php echo base_url('kebele-dashboard') ?>">
								<i class="fab fa-windows"></i>Dashboard </a>
						</li>
						<li class="nav-divider">
							-------------------------------------
						</li>
						<li class="nav-item nav-link">
							<a <?= $this->uri->segment('1') == 'subcity-document-registration' ? 'class="nav-link active"' : ''?> href="<?php echo base_url('subcity-document-registration') ?>">
								<i class=" far fa-folder-open"></i>Document Registration</a>
						</li>
						<li class="nav-divider">
							-------------------------------------
						</li>
						<li class="nav-item nav-link">
							<a <?= $this->uri->segment('1') == 'subcity-manage-documents' ? 'class="nav-link active"' : ''?> href="<?php echo base_url('subcity-manage-documents') ?>">
								<i class="far fa-file-archive"></i>Document Management</a>
						</li>
						<!--
						<li class="nav-divider">
							-------------------------------------
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="<?php echo base_url('bulkupload') ?>">
								<i class="fa fa-upload"></i>Bulk Data Upload</a>

						</li>
					-->
						<li class="nav-divider">
							-------------------------------------
						</li>
						
						<li class="nav-item nav-link ">
							<a <?= $this->uri->segment('1') == 'user_list' ? 'class="nav-link active"' : ''?>  href="<?php echo base_url('user_list') ?>">
								<i class=" fas fa-user-plus"></i>User Management</a>
						</li>
						<li class="nav-divider">
							-------------------------------------
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="<?php echo base_url('document') ?>">
								<i class="fab fa-fw fa-wpforms"></i>Gabaasa</a>
						</li>
						<li class="nav-divider">
							-------------------------------------
						</li>

				<!-- 	===================================================
				=====Kebele Admin Role menu Start here==
				===================================================-->	
					<?php
					}
					 else if ($role == 5) {
					?>
						<li class="nav-item nav-link">
							<a <?= $this->uri->segment('1') == 'kebele-dashboard' ? 'class="nav-link active"' : ''?> href="<?php echo base_url('kebele-dashboard') ?>">
								<i class="fab fa-windows"></i>Dashboard </a>
						</li>
					
						<li class="nav-divider">
							-------------------------------------
						</li>
						<li class="nav-item nav-link">
							<a <?= $this->uri->segment('1') == 'request-document-manage' ? 'class="nav-link active"' : ''?> href="<?php echo base_url('request-document-manage') ?>">
								<i class="fas fa-folder-open"></i>Document Management</a>
						</li>
						
						</li>					
						
						<li class="nav-divider">
							-------------------------------------
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="<?php echo base_url('document') ?>">
								<i class="fab fa-fw fa-wpforms"></i>Gabaasa</a>
						</li>
						<li class="nav-divider">
							-------------------------------------
						</li>
						<!-- 
				===================================================
				=====Kebele Data Encoder Role menu Start here==
				===================================================
				-->	
					<?php } else if ($role == 4) { ?>

						<li class="nav-item nav-link">
							<a <?= $this->uri->segment('1') == 'kebele-dataecnoder-dashboard' ? 'class="nav-link active"' : ''?>  href="<?php echo base_url('kebele-dataecnoder-dashboard') ?>">
								<i class="fab fa-windows"></i>Dashboard </a>
						</li>
						<li class="nav-divider">
							-------------------------------------
						</li>
						<li class="nav-item nav-link">
							<a <?= $this->uri->segment('1') == 'kebele-document-registration' ? 'class="nav-link active"' : ''?> href="<?php echo base_url('kebele-document-registration') ?>">
								<i class="fas fa-folder-open"></i>Document Registration</a>
						</li>
						<li class="nav-divider">
							-------------------------------------
						</li>
						<li class="nav-item nav-link">
							<a <?= $this->uri->segment('1') == 'kebele-manage-documents' ? 'class="nav-link active"' : ''?> href="<?php echo base_url('kebele-manage-documents') ?>">
								<i class="fas fa-folder"></i>Document Management</a>
						</li>
						<li class="nav-divider">
							-------------------------------------
						</li>
						<li class="nav-item nav-link">
							<a <?= $this->uri->segment('1') == 'request-document-manage' ? 'class="nav-link active"' : ''?> href="<?php echo base_url('request-document-manage') ?>">
								<i class="fas fa-folder-open"></i>Request Management</a>
						</li>
						
						<li class="nav-divider">
							-------------------------------------
						</li>
						<li class="nav-item nav-link ">
							<a <?= $this->uri->segment('1') == 'kebelebulkupload' ? 'class="nav-link active"' : ''?> href="<?php echo base_url('kebelebulkupload') ?>">
								<i class="fa fa-upload"></i>Bulk Data Upload</a>
						</li>
						<li class="nav-divider">
							-------------------------------------
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="#">
								<i class="fab fa-fw fa-wpforms"></i>Gabaasa</a>
						</li>
						<li class="nav-divider">
							-------------------------------------
						</li>
						<!-- 
				===================================================
				=====Report Viewer Role menu Start here==
				===================================================
				-->	
					<?php } else if ($role == 6) { ?>

						<li class="nav-item">
							<a class="nav-link active" href="<?php echo base_url('kebele-dashboard') ?>">
								<i class="fab fa-windows"></i>Dashboard </a>
						</li>
						<li class="nav-divider">
							-------------------------------------
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url('document-registration') ?>">
								<i class="fa fa-fw fa-rocket"></i>Document Registration</a>
						</li>
						<li class="nav-divider">
							-------------------------------------
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url('manage-documents') ?>">
								<i class="fab fa-accusoft"></i>Document Management</a>
						</li>
						
						<li class="nav-divider">
							-------------------------------------
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="<?php echo base_url('bulkupload') ?>">
								<i class="fa fa-upload"></i>Bulk Data Upload</a>

						</li>
						<li class="nav-divider">
							-------------------------------------
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4">
								<i class="fas fa-gem"></i>Settings</a>
							<div id="submenu-4" class="collapse submenu" style="">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="<?php echo base_url('city_admin') ?>">City Admin</a>
									</li>
									
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url('kebele_list') ?>">Kebele</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?php echo base_url('offices_list') ?>">Office</a>
									</li>
								</ul>
							</div>
						</li>
						</li>
						
						<li class="nav-divider">
							-------------------------------------
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="<?php echo base_url('user_list') ?>">
								<i class="fab fa-fw fa-wpforms"></i>User Management</a>
						</li>
						<li class="nav-divider">
							-------------------------------------
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="<?php echo base_url('document') ?>">
								<i class="fab fa-fw fa-wpforms"></i>Gabaasa</a>
						</li>
						<li class="nav-divider">
							-------------------------------------
						</li>
					<?php } ?>



				</ul>
			</div>
	</div>
	</nav>
</div>
</div>
<!-- ============================================================== -->
<!-- end left sidebar -->