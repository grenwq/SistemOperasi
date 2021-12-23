<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
     <div class="row">
       <div class="col">

<h1>Ini contact</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed distinctio, nemo sequi minus ab cum explicabo recusandae molestiae facere at ea illum mollitia ipsam amet incidunt voluptatum animi. Porro, hic?</p>\
       
    <?php foreach ($alamat as $c) : ?>
        <ul>
            <li>
                <?= $c['alamat']; ?>
            </li>
            <li>
                <?= $c['kota']; ?>
            </li>
            <li>
                <?= $c['tipe']; ?>
            </li>
        </ul>
        <?php endforeach; ?>
</div>
     </div>
</div>
<?= $this->endSection(); ?>