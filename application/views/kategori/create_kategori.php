<?php $this->load->view('blogger/header'); ?>

<div class="container-fluid">
<div class="transbox">
  <div align="center" class="style7">
  <p align="center">
    <center>
		<h3>Tambah kategori baru</h3>
	</center>
  <?php echo form_open( 'kategori/create', array('class' => 'needs-validation', 'novalidate' => '') ); ?>
  <?php echo validation_errors()?>	
<table style="margin:20px auto;">
			<tr style="height: 50px;">
				<td width="100px">Nama :</td><br>
				<td><input type="text" name="nama" value="<?php echo set_value('nama') ?>">
			</tr>
			<tr style="height: 50px;">
				<td>Deskripsi : </td>
				<td><textarea cols="50" rows="10" name="deskripsi" class="form-control" ><?php set_value('deskripsi') ?></textarea></td>
			</tr>
</table>
<button id="submitBtn" type="submit" class="btn btn-primary">Simpan</button>
    <?php form_close() ?>
</p>
</div>
</div>
</div>

<?php $this->load->view('blogger/footer'); ?>