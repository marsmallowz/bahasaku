<!-- Konten -->
<br><br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-7">
            <?php
            $link = $satu['kode'];
            ?>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $link; ?>" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col-5">
            <h5>Materi Kelas 2 SD</h5>
            <?php
            foreach ($video as $v) : ?>
                <?php
                    $judul = $v['judul'];
                    $link  = $v['kode'];
                    ?>

                <a href="?kode= . <?= $link ?>"><?= $judul; ?></a><br><br><br>
            <?php endforeach ?>

            <h5>Download Materi</h5>

            <?php foreach ($materi as $m) : ?>
                <?php $judul = $m['judul'] ?>
                <a href="<?= base_url('user/download_satu') ?>"><?= $judul; ?></a><br>
            <?php endforeach; ?>
        </div>
    </div>
</div> <!-- akhir -->