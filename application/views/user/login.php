<html>
    <header>
        <title>AA City Land Administration DMS</title>
	<link rel="icon" href="<?php echo base_url()?>assets/oro/image/oro_logo.jpg" type="image/x-icon">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/oro/css/bootstrap.min.css">
        <script type="text/javascript" src="<?php echo base_url()?>assets/oro/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/oro/css/all.css">
    </header>
</html>
<div class="wrapper">
    <div class="logo"> <img src="<?php echo base_url()?>assets/oro/image/oro_logo.jpg" alt=""> </div>
    <div class="text-center mt-4 name"> AA City Land Administration <br> DMS </div>
    <?php 
if( $this->session->flashdata('err_message') )
{ ?>
    <div class="alert alert-danger" role="alert">

    <?php echo $this->session->flashdata('err_message'); ?>
    </div>
    <?php
}
?>
    <form class="p-3 mt-3" action="<?= base_url('checklogin')?>" method="post">
        <div class="form-field d-flex align-items-center">
             <span class="far fa-user"></span> 
             <input type="text" name="username" autocomplete="false" id="userName" placeholder="Username"> </div>
        <div class="form-field d-flex align-items-center"> 
            <span class="fas fa-key"></span>
             <input type="password" name="password" readonly  
             onfocus="if (this.hasAttribute('readonly')) {
    this.removeAttribute('readonly');
    // fix for mobile safari to show virtual keyboard
    this.blur();    this.focus();  }"  placeholder="Password"> </div> <button class="btn mt-3">Login</button>
    </form>
    <!-- <img src="<?php echo base_url()?>assets/oro/image/adama_logo.png" width="300px" height="150px;"> -->
    <div class="text-center fs-6"> 
        <a href="https://www.borufan.com/dms">For more Dms Info....</a>
<p>©2022 OSTA</p>
     </div>
</div>
<style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

 * {
     margin: 0;
     padding: 0;
     box-sizing: border-box;
     font-family: 'Poppins', sans-serif
 }

 body {
     background: #ecf0f3
 }

 .wrapper {
     max-width: 350px;
     min-height: 500px;
     margin: 80px auto;
     padding: 40px 30px 30px 30px;
     background-color: #ecf0f3;
     border-radius: 15px;
     box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff
 }

 .logo {
     width: 80px;
     margin: auto
 }

 .logo img {
     width: 100%;
     height: 80px;
     object-fit: cover;
     border-radius: 50%;
     box-shadow: 0px 0px 3px #5f5f5f, 0px 0px 0px 5px #ecf0f3, 8px 8px 15px #a7aaa7, -8px -8px 15px #fff
 }

 .wrapper .name {
     font-weight: 600;
     font-size: 1.4rem;
     letter-spacing: 1.3px;
     padding-left: 10px;
     color: #555
 }

 .wrapper .form-field input {
     width: 100%;
     display: block;
     border: none;
     outline: none;
     background: none;
     font-size: 1.2rem;
     color: #666;
     padding: 10px 15px 10px 10px
 }

 .wrapper .form-field {
     padding-left: 10px;
     margin-bottom: 20px;
     border-radius: 20px;
     box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff
 }

 .wrapper .form-field .fas {
     color: #555
 }

 .wrapper .btn {
     box-shadow: none;
     width: 100%;
     height: 40px;
     background-color: #03A9F4;
     color: #fff;
     border-radius: 25px;
     box-shadow: 3px 3px 3px #b1b1b1, -3px -3px 3px #fff;
     letter-spacing: 1.3px
 }

 .wrapper .btn:hover {
     background-color: #039BE5
 }

 .wrapper a {
     text-decoration: none;
     font-size: 0.8rem;
     color: #03A9F4
 }

 .wrapper a:hover {
     color: #039BE5
 }

 @media(max-width: 380px) {
     .wrapper {
         margin: 30px 20px;
         padding: 40px 15px 15px 15px
     }
 }
    </style>