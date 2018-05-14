<?php $this->load->view('blogger/header'); ?>

    <div class="container">
        <section class="generic text-center">
           <h2>About Me</h2>
          <hr class="hr-mid">
            <img class="img-generic img-responsive" src="<?php echo base_url('assets/img/7.jpg');?>">
        </section>
        <section class="font-2">
          <?php echo $tentang;?>
        </section>
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

<?php $this->load->view('blogger/footer'); ?>