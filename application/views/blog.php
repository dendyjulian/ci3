<?php
$this->load->view('blogger/header');
?>

        <section class="element-page">
          <div class="container">
            <h2 class="text-center">Blog</h2>
            <hr class="hr-mid">


            <?php foreach ($artikel->result_array() as $data) {
            ?>
              
            
            <section class="Element-heading">
            <div class="card mb-4">
            <img class="card-img-top" src="<?php echo base_url().'assets/img/'.$data['gambar'];?>" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title"><?php echo $data['judul'] ?></h2>
              <p class="card-text"><?php echo $data['konten'] ?></p>
              <a href="blogger/view/<?php echo $data['id']?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on January 1, 2017 by
              <a href="<?php echo base_url('welcome/blog');?>"><?php echo $data['author'] ?></a>
            </div>
          </div>
            </section>
            <?php
              }
            ?>
          <br>

        <section class="social">
          <ul>
            <li><a href="#" class="fa fa-pinterest fa-2x" aria-hidden="true"></a></li>
            <li><a href="#" class="fa fa-twitter fa-2x" aria-hidden="true"></a></li>
            <li><a href="#" class="fa fa-linkedin fa-2x" aria-hidden="true"></a></li>
            <li><a href="#" class="fa fa-stumbleupon fa-2x" aria-hidden="true"></a></li>  
          </ul>
        </section>


<?php
$this->load->view('blogger/footer');
?>