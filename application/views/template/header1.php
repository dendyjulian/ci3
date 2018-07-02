<!DOCTYPE html>
<html lang="en">
<head>
	<title>MyWebsite</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url().'assets/images/icons/favicon.ico'?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/bootstrap/css/bootstrap.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/fonts/iconic/css/material-design-iconic-font.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/animate/animate.css'?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/css-hamburgers/hamburgers.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/animsition/css/animsition.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/select2/select2.min.css'?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/daterangepicker/daterangepicker.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/util.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/main.css'?>">
<!--===============================================================================================-->
</head>
	

<body>
	
	  <?php if($this->session->flashdata('user_registered')): ?>
       <?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('user_registered').'</div>'; ?>
       <?php endif; ?>

       <?php if($this->session->flashdata('login_failed')): ?>
         <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
       <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedout')): ?>
         <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
       <?php endif; ?>

    
    <?php if(!$this->session->userdata('logged_in')) : ?>

    <div class="btn-group" role="group" aria-label="Data baru">
       <?php echo anchor('user/register', 'Register', array('class' => 'btn btn-outline-light')); ?>
       <?php echo anchor('user/login', 'Login', array('class' => 'btn btn-outline-light')); ?>
    </div>
    <?php endif; ?>


    <?php if($this->session->userdata('logged_in')) : ?>
   <div class="btn-group" role="group" aria-label="Data baru">
       <?php echo anchor('blogger/create', 'Artikel Baru', array('class' => 'btn btn-outline-light')); ?>
       <?php echo anchor('kategori/create', 'Kategori Baru', array('class' => 'btn btn-outline-light')); ?>
       <?php echo anchor('user/logout', 'Logout', array('class' => 'btn btn-outline-light')); ?>
   </div>
<?php endif; ?>