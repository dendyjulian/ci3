<div class="container">
<table class="table table-bordered table-striped" id="mydata">
 <?php foreach ($kategori->result() as $data){ ?>
  <br>

  <a href=" <?php echo site_url('kategori/create/'.$data->idcateg); ?>" class="btn btn-warning btn-xs" role="button">Create</i></a> 
 
<div class="col-md-6">
  <div class="thumbnail">
    <div class="caption">
<br>
<br>
      <h4 class=""> <?php echo $data->nama ?></h4>
      <hr>
      <p class=""> <?php echo $data->deskripsi ?> </p>
      <hr>
      <a href="<?php echo site_url ('kategori/delete/'.$data->idcateg); ?>" class="btn btn-danger btn-xs pull-right" role="button">Hapus</i></a>
      <a href="<?php echo site_url('kategori/edit/'.$data->idcateg); ?>" class="btn btn-primary btn-xs" role="button">Edit</i></a>
    </div>
  </div>
</div>
<?php } ?>
</table>
</div>