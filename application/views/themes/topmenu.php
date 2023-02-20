<body>
<!-- ============================================================== -->
<!-- main wrapper -->
<!-- ============================================================== -->
<div class="dashboard-main-wrapper">
	<!-- ============================================================== -->
	<!-- navbar -->
	<!-- ============================================================== -->
	<div class="dashboard-header">
		<nav class="navbar navbar-expand-sm bg-white fixed-top" style="background-color: #c7d9cb !important ">
			<div class="text-center">
				<img src="<?php echo base_url()?>assets/oro/image/oro_logo.jpg" style="width: 60px !important; height: 60px !important;" alt="User Avatar" class="rounded-circle user-avatar-xxl">
				<a style="font-family: Chilanka !important; font-size: 23px;" class="navbar-brand" href="<?php echo base_url('kebele-dataecnoder-dashboard')?>"><?php
				 $city= $this->db->select('*')->from('city')->get()->row();
				 echo $city->city_name;
				?>  Land Administration Document Management System(DMS) </a>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse " id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto navbar-right-top">
					<li class="nav-item">
						<div id="custom-search" class="top-search-bar">
							<input class="form-control" type="text" placeholder="Search..">
						</div>
					</li>
					<li class="nav-item dropdown connection">
						<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
						<ul class="dropdown-menu dropdown-menu-right connection-dropdown">
							<li class="connection-list">
								<div class="row">
									<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
										<a href="#" class="connection-item"><img src="<?php echo base_url()?>assets/images/github.png" alt="" > <span>Github</span></a>
									</div>
									<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
										<a href="#" class="connection-item"><img src="<?php echo base_url()?>assets/images/dribbble.png" alt="" > <span>Dribbble</span></a>
									</div>
									<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
										<a href="#" class="connection-item"><img src="<?php echo base_url()?>assets/images/dropbox.png" alt="" > <span>Dropbox</span></a>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
										<a href="#" class="connection-item"><img src="<?php echo base_url()?>assets/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
									</div>
									<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
										<a href="#" class="connection-item"><img src="<?php echo base_url()?>assets/images/mail_chimp.png" alt="" ><span>Mail chimp</span></a>
									</div>
									<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
										<a href="#" class="connection-item"><img src="<?php echo base_url()?>assets/images/slack.png" alt="" > <span>Slack</span></a>
									</div>
								</div>
							</li>
							<li>
								<div class="conntection-footer"><a href="#">More</a></div>
							</li>
						</ul>
					</li>
					<li class="nav-item dropdown nav-user">
						<a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $this->session->userdata('username')?><img src="<?php echo base_url()?>assets/images/log.png" alt="" class="user-avatar-md rounded-circle"></a>
						<div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
							<div class="nav-user-info">
								<h5 class="mb-0 text-white nav-user-name"><?= $this->session->userdata('full_name')?> </h5>
								<span class="status"></span><span class="ml-2">Available</span>
							</div>
							<a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
							<a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
							<a class="dropdown-item" href="<?= base_url('logout')?>"><i class="fas fa-power-off mr-2"></i>Logout</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</div>
	<!-- ============================================================== -->
	<!-- end navbar -->
