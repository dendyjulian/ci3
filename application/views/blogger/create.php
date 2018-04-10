<div class="container">
<?php 
	echo validation_errors();
	echo form_open_multipart('blogger/create')
?>
Judul : <input type="text" class="form-control" name="judul"><br>
Tgl : <input type="date" class="form-control" name="tgl"><br>
Author : <input type="text" class="form-control" name="author"><br>
Konten : <textarea name="konten" class="form-control" style="height:400px;"></textarea><br>
Gambar : <input type="file" name="gambar"><br>
<input type="submit" class="btn btn-defaule" value="Tambah">
</div>