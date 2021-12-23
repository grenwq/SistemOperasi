<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2 class="my-3">Tambah data</h2>
  
                <form action="/konten/save" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
  <div class="mb-3">
    <label for="judul" class="form-label">Judul</label>
    <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : '' ; ?>" id="judul" aria-describedby="emailHelp" name="judul" autofocus value ="<?= old('judul'); ?>">
    <div id="judul" class="invalid-feedback">
      <?= $validation->getError('judul'); ?>
    </div>
  </div>
  <div class="mb-3">
    <label for="deskripsi" class="form-label">Deskripsi Singkat</label>
    <input type="Text" class="form-control" id="deskripsi" name="deskripsi" value = "<?= old('deskripsi'); ?>">
  </div>
  <div class="mb-3">
    <label for="gambar" class="form-label">Gambar</label>
    <div class="mb-3">
    <input class="form-control <?= ($validation->hasError('gambar')) ? 'is-invalid' : '' ; ?>" type="file" id="gambar" name="gambar">
    <div class="invalid-feedback">
      <?= $validation->getError('gambar'); ?>
    </div>
    <script src="<?=base_url('ckeditor/ckeditor.js');?>"></script>
   
    
    <div class="row">
    	<div class="col-lg-12">
    		<div class="row">
    			<div class="col-md-12">
    				<label>Isi Artikel</label>
    				<div class="form-group">
                   		 <textarea name="deskripsi_lanjut" id="deskripsi_lanjut"></textarea>
                            <script>
                                // Replace the <textarea id="editor1"> with a CKEditor 4
                                // instance, using default configuration.
                                CKEDITOR.replace( 'deskripsi_lanjut' );
                            </script>
                	</div>	    			</div>
    			</div>
    		</div>
    	</div>
    </div>

</div>
  
  <button type="submit" class="btn btn-primary">Tambah Data</button>
</form>
            </div>
        </div>
    </div>



<?= $this->endSection(); ?>