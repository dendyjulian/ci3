<div class="container">
<?php 
	echo validation_errors();
	echo form_open_multipart('blogger/create')
?>
<?php 
echo form_open_multipart( 'blogger/create', array('class' => 'needs-validation', 'novalidate' => '')); 
?>


Judul : <input type="text" class="form-control" name="judul" value="<?php echo set_value('judul') ?>"><br>
Tgl : <input type="date" class="form-control" name="tgl" value="<?php echo set_value('tgl') ?>"><br>
Author : <input type="text" class="form-control" name="author" value="<?php echo set_value('author') ?>"><br>
Konten : <textarea name="konten" class="form-control" style="height:400px;" value="<?php echo set_value('konten') ?>"></textarea><br>
Gambar : <input type="file" name="gambar"><br>
<input type="submit" class="btn btn-defaule" value="Tambah">
</div>

<script>
//Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>