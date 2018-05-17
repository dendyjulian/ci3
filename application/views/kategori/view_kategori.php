<div class="container">
<table class="table table-bordered table-striped" id="mydata">
  <br>

  <a href=" <?php echo site_url('kategori/create/'); ?>" class="btn btn-warning btn-xs" role="button">Create</i></a> 
  <?php foreach($all_categories as $data){ ?>
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

<div align="center">
<?php
        // $links ini berasal dari fungsi pagination
        // Jika $links ada (data melebihi jumlah max per page), maka tampilkan
            echo $links;
        ?>
</div>

<br>

<table class="table table-striped" id="mydata">
  <thead>
    <tr>
      <td>Nama</td>
      <td>deskripsi</td>
    </tr>
  </thead>
  <tbody>
    <?php 
      foreach ($kategori->result() as $data) { ?>
        <tr>
          <td><?=$data->nama?></td>
          <td><?=$data->deskripsi?></td>
        </tr>
      <?php } ?>
  </tbody>
</table>