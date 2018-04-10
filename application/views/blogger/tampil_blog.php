<section class="element-page">
          <div class="container">
            <h2 class="text-center">Blog</h2>
            <hr class="hr-mid">

            <section class="Element-heading">
            <div class="card mb-4">
				<div class="container">
<a href="<?php echo site_url('blogger/create')?>">Artikel Baru</a>
<table class="table table-hover">
	<tr>
		<td>ID</td>
		<td>Judul</td>
		<td>Tgl</td>
		<td>Author</td>
		<td>Konten</td>
		<td>Gambar</td>
	</tr>
<?php
foreach ($artikel->result_array() as $row)
		{
		echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['judul']."</td>";
        echo "<td>".$row['tgl']."</td>";
        echo "<td>".$row['author']."</td>";
        echo "<td>".$row['konten']."</td>";
        echo "<td>".$row['gambar']."</td>";
        echo "<td><a href='".site_url('blogger/baca-artikel/'.$row['id'])."'>Tampil</a></td>";
        echo "<td><a href='".site_url('blogger/edit/'.$row['id'])."'>Edit</a></td>";
        echo "<td><a href='".site_url('blogger/delete/'.$row['id'])."'>Delete</a></td>";
        echo "</tr>";
		}
?>
</table>
</div>              
          </div>
</section>

          <br>
           <br>
            <br>
             <br>
              <br>
               <br>
                <br>
                 <br>
                   <br>

      





