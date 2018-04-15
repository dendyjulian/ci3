<!-- <?php// $this->load->view('blogger/header');?>

<div class="container">
<?php 
	//echo validation_errors();
	//echo form_open('blogger/edit/'.$show_article['id']);
?>
Title : <input type="text" class="form-control" name="title" value="<?php// echo $show_article['title'] ?>"><br>
Artikel : <textarea name="artikel" class="form-control" style="height:400px;"><?php// echo $show_article['artikel']?></textarea><br>
<input type="submit" class="btn btn-defaule" value="Edit">
</div>

<?php //$this->load->view('blogger/footer');?>
 -->

<?php $this->load->view('blogger/header');?>
 <div class="container">

 <?php
 $this->load->helper('form');
		$this->load->library('form_validation');
echo validation_errors();
echo form_open_multipart('blogger/update')
?>
<?php foreach($blog as $u){ ?>
Judul : <input type="hidden" name="id" value="<?php echo $u->id ?>"> <input type="text" class="form-control" name="judul" value="<?php echo $u->judul ?>"><br>
Tgl : <input type="date" class="form-control" name="tgl" value="<?php echo $u->tgl ?>"><br>
Author : <input type="text" class="form-control" name="author" value="<?php echo $u->author ?>"><br>
Konten : <input name="konten" class="form-control" style="height:400px;" value="<?php echo $u->konten ?>"><br>
Gambar : <input type="file" name="gambar"><br>
<input type="submit" class="btn btn-defaule" value="Simpan">
<?php } ?>
</div>

<?php $this->load->view('blogger/footer'); ?>