<div class="container">
    <div class="row">
        <div class="col">
            <ul>
                <?php foreach ($barang as $b) : ?>
                    <li><?= $b['nama_barang'] ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>