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
                  <a href="<?php echo base_url('welcome/home');?>"><img class="img-responsive" src="<?php echo base_url('assets/img/logo.png');?>"></a>
                </div>
                <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6 text-right">
                    <div id="mySidenav" class="sidenav text-center">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><br>
                    <a href="<?php echo base_url('welcome/home');?>">Home</a><hr>
                    <a href="<?php echo base_url('welcome/about');?>">About</a><hr>
                    <a href="<?php echo base_url('welcome/blog');?>">Blog</a><hr>
                    <a href="<?php echo base_url('Blogger/create');?>">FormBlog</a>              
                </div>
                    <div class="main" id="main">
                      <a href="#" onclick="openNav()">MENU &#9776;</a>
                    </div>
                </div>
              </div>
              <hr>
          </div>
        </section>
        <section class="element-page">
          <div class="container">
            <h2 class="text-center">Blog</h2>
            <hr class="hr-mid">

            <section class="Element-heading">
            <div class="card mb-4">
            <img class="card-img-top" src="<?php echo base_url('assets/img/dota.jpg');?>" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">My Favorit Game</h2>
              <p class="card-text">Game Dota 2</p>
              <a href="#" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on January 1, 2017 by
              <a href="<?php echo base_url('welcome/blog');?>">MyBlog</a>
            </div>
          </div>
            </section>

          <br>

            <section class="Element-heading">
             <div class="card mb-4">
            <img class="card-img-top" src="<?php echo base_url('assets/img/mymusic.jpg');?>" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">My Favorit Music</h2>
              <p class="card-text">Payung Teduh - Untuk Perempun Yang Sedang Dalam Pelukan</p>
              <a href="<?php echo base_url('welcome/songs');?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on January 1, 2017 by
              <a href="<?php echo base_url('welcome/blog');?>">MyBlog</a>
            </div>
          </div>
        </section>

        <section class="Element-heading">
             <div class="card mb-4">
            <img class="card-img-top" src="<?php echo base_url('assets/img/mymusic.jpg');?>" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">My Favorit Music</h2>
              <p class="card-text">Payung Teduh - Untuk Perempun Yang Sedang Dalam Pelukan</p>
              <a href="<?php echo base_url('welcome/songs');?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on January 1, 2017 by
              <a href="<?php echo base_url('welcome/blog');?>">MyBlog</a>
            </div>
          </div>
        </section>

<?php
foreach ($artikel->result_array() as $row)
    {
        <section class="Element-heading">
             <div class="card mb-4">
            <img class="card-img-top" src="<?php echo base_url('assets/img/mymusic.jpg');?>" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">My Favorit Music</h2>
              <p class="card-text">Payung Teduh - Untuk Perempun Yang Sedang Dalam Pelukan</p>
              <a href="<?php echo base_url('welcome/songs');?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on January 1, 2017 by
              <a href="<?php echo base_url('welcome/blog');?>">MyBlog</a>
            </div>
          </div>
        </section>
    }
?>        
        <section class="social">
          <ul>
            <li><a href="#" class="fa fa-pinterest fa-2x" aria-hidden="true"></a></li>
            <li><a href="#" class="fa fa-twitter fa-2x" aria-hidden="true"></a></li>
            <li><a href="#" class="fa fa-linkedin fa-2x" aria-hidden="true"></a></li>
            <li><a href="#" class="fa fa-stumbleupon fa-2x" aria-hidden="true"></a></li>  
          </ul>
        </section>

        <section class="footer">
          <div class="container">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                <div class="footer-p1">
                        <p class="font-2">Copy right 2016 by wow technology</p>
                </div>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <img class="img-responsive foot-img" src="<?php echo base_url('assets/img/footer-logo.png');?>">
              </div>
              <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                <div class="footer-p2" >
                         <p class="font-2">Made with  <i class="fa fa-heart" aria-hidden="true" ></i> by <a href="https://themewagon.com/themes/" target="_blank">themewagon</a></p>
                </div>
              </div>
            </div>
          </div>
        </section>
 </section>
</body>
</html>

