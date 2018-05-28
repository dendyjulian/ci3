<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css');?>">
    <link href="<?php echo base_url('assets/font-awesome/lora400.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/poppins400.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/crimson.css');?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>">
    <script type="text/javascript" src="<?php echo base_url('assets/js/script.js');?>"></script>
    <link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">
    
        <title>My Website - Blog</title>
</head>
<body>
<!-- div used to make the body blur -->
<div class="overlay" id="overlay" onclick="closeNav()"></div>

    <section class="element-full">
        <section class="head-bar">
          <div class="container">
              <div class="row">
                <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                  <a href="<?php echo base_url('Blogger/home');?>"><img class="img-responsive" src="<?php echo base_url('assets/img/logo.png');?>"></a>
                </div>
                <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6 text-right">
                    <div id="mySidenav" class="sidenav text-center">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><br>
                    <a href="<?php echo base_url('Blogger/home');?>">Home</a><hr>
                    <a href="<?php echo base_url('Blogger/about');?>">About</a><hr>
                    <a href="<?php echo base_url('Blogger/blog');?>">Blog</a><hr>
                    <a href="<?php echo base_url('Blogger/create');?>">Create Blog</a><hr>
                    <a href="<?php echo base_url('Kategori');?>">Create Kategori</a><hr>
                    <a href="<?php echo base_url('User/logout');?>">Logout</a>              
                </div>
                    <div class="main" id="main">
                      <a href="#" onclick="openNav()">MENU &#9776;</a>
                    </div>
                </div>
              </div>
              <hr>
          </div>
        </section>

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