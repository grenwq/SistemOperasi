  <?= $this->extend('layout/template'); ?>
 
  <?= $this->section('content'); ?>
  
  <body class="text-center text-white bg-dark">
<div class="d-flex w-100 h-100 mx-auto flex-column">
  <main class="px-3">
    <h1></h1>
    <p class="lead">Menunjukkan waktu sholat dan artikel</p>
    <!-- <p class="lead">
      <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Learn more</a>
    </p> -->
  </main>
</body>
  <div class="container">
    <div class="row">
      <div class="col-10">
      <body onload="startTime()">

<h2>Waktu Sekarang</h2>

<div id="txt"></div>

<script>
function startTime() {
  const today = new Date();
  let h = today.getHours();
  let m = today.getMinutes();
  let s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =  h + ":" + m + ":" + s;
  setTimeout(startTime, 1000);
}

function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
  <table class="table table-dark">
      <thead>
    <tr>
      <th scope="col-1">#</th>
      <th scope="col-2">Judul</th>
      <th scope="col-3">Deskripsi Singkat</th>
      <th scope="col-4">Gambar</th>
      <th scope="col-5">Aksi</th>
    </tr>
  </thead>
</div>
  <div class="container">
    <div class="row">
        <div class="col-7">
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
        <div class="col-2">
        <iframe style="height: 220px;" src='https://www.jadwalsholat.org/adzan/ajax.row.php?id=13'></iframe>
    </div>
  </div>
  </div>
  

   
  
 
 

  
<?= $this->endSection(); ?>
    