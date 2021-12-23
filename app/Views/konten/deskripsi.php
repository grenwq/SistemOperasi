<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="bg-dark">
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Deskripsi lebih lanjut</h2>
        <div class="card mb-3" style="max-width: 2000px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/img/<?= $konten['gambar']; ?>" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body bg-dark text-white">
        <h5 class="card-title"><?= $konten['judul']; ?></h5>
        <!-- <p class="card-text"><?= $konten['deskripsi']; ?></p> -->
        <p class="card-text"><?= $konten['deskripsi_lanjut']; ?></p>
      
    <a href="/konten/edit/<?= $konten['slug']; ?>" class="btn btn-warning">Edit</a>
    
    <form action="/konten/<?= $konten['id']; ?>" method="post" class="d-inline">
    <?= csrf_field(); ?>
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Delete</button>
    </form>
    <br>

    <a href="/konten">Kembali ke daftar</a>
    </div>
    </div>
  </div>
</div>
        </div>
    </div>
</div>
</div>

<?= $this->endSection(); ?>