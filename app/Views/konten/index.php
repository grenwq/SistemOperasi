<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
        <a href="konten/create" class="btn btn-primary mb-3">Tambah Data</a>
        
      <?php if(session()->getFlashdata('pesan')): ?>
        <div class="alert alert-success" role="alert">
           <?= session()->getFlashdata('pesan'); ?>
        </div>

        <?php endif; ?>
        
        <table class="table">
      <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Judul</th>
      <th scope="col">Deskripsi Singkat</th>
      <th scope="col">Gambar</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach($konten as $k) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $k['judul']; ?></td>
      <td><?= $k['deskripsi']; ?></td>
      <td><img src="/img/<?= $k['gambar']; ?>" class="gambar"></td>
      <td>
          <a href="/konten/<?= $k['slug']; ?>" class="btn btn-danger">Buka</a>
      </td>
    </tr>
      <?php endforeach;  ?>
  </tbody>
</table>
        </div>
    </div>
</div>
    
<?= $this->endSection(); ?>