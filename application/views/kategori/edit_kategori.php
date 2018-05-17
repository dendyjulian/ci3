<div class="container-fluid">
  <div class="transbox">
  	<div align="center" class="style7">
  <p align="center">
    <center>
		<h3>Edit artikel </h3>
	</center>
	<form action="<?php echo current_url(); ?>" method="post" enctype ="form-data">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama :</td><br>
				<td><input type="hidden" name="idcateg" value="<?php echo $kategori['idcateg'] ?>">
					<input type="text" name="nama" value="<?php echo $kategori['nama'] ?>">
				</td>
			</tr>
			<tr>
				<td>Deskripsi : </td>
				<td><input type="text" name="deskripsi" value="<?php echo $kategori['deskripsi'] ?>"></td>
			</tr>		
			<tr>
				<td></td>
				<td><button id="submitBtn" type="submit" class="btn btn-primary">Simpan</button></td>
			</tr>	
		</table>
	</form>	
</p>
		</div>
	</div>
</div>
