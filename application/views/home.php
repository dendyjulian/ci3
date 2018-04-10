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
    <title>MyWebsite - Home</title>
</head>
<body>
<!-- div used to make the body blur -->
    <div class="overlay" id="overlay" onclick="closeNav()"></div>

    <section class="head index-part-1">
        <div class="head-bar">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                    <a href="<?php echo base_url('welcome/home');?>"><img class="img-responsive" src="<?php echo base_url('assets/img/logo.png');?>"></a>
                </div>
                <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6 text-right">
                    <div id="mySidenav" class="sidenav text-center">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><br>
                        <a href="<?php echo base_url('welcome/home')?>">Home</a><hr>
                        <a href="<?php echo base_url('welcome/about')?>">About</a><hr>
                        <a href="<?php echo base_url('welcome/blog');?>">Blog</a>              
                    </div>
                    <div class="main" id="main">
                      <a href="#" onclick="openNav()">MENU &#9776;</a>
                    </div>
                </div>
              </div>
              <hr>
          </div>
          </div>

          <div class="wow">
          <div class="container">
               <div class="font-1 helmet text-center">
                 <?php echo $nama;?>
               </div>
          </div>
        </div>
    </section>
 
    <section class="index-part-2">
         <div class="container">
                
                <div class="row"> 
                    <div class="col-lg-9 col-xs-12 col-sm-12 col-md-9 col-md-push-3">
                     <div class="holder-para">
                      <h3>Tracking with controler</h3>
                      <hr class="hr-short">
                      <p class="font-2">
                        The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed 
                        is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother’s keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I 
                      </p>
                     </div>
                    </div>
                    <div class="col-lg-3 col-xs-12 col-sm-12 col-md-3 col-md-pull-9">
                            <div class="holder-img">
                              <img class="round-img img-responsive center-block" src="<?php echo base_url('assets/img/3.jpg');?>">
                            </div>
                    </div> 
                </div>

                <hr class="line-full">
                
                <div class="row">
                    <div class="col-lg-9 col-xs-12 col-sm-12 col-md-9">
                     <div class="holder-para">
                      <h3>Foam cushing</h3>
                      <hr class="hr-short">
                      <p class="font-2">
                            The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed 
                            is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother’s keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I  
                      </p>
                     </div>
                    </div>
                    <div class="col-lg-3 col-xs-12 col-sm-12 col-md-3">
                            <div class="holder-img">
                              <img class="round-img img-responsive center-block" src="<?php echo base_url('assets/img/2.jpg');?>">
                            </div>
                    </div>
                </div>
        </div>
    </section>

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
                     <p class="font-2">Made with  <i class="fa fa-heart" aria-hidden="true" ></i> by <a href=# target="_blank">themewagon</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
 
</body>
</html>


