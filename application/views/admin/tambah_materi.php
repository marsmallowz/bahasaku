<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Materi
        <span class="float-right">
            <a href="<?= base_url('admin/materi'); ?>" class="btn btn-primary">Kembali</a>
        </span>
    </h1>
    <div class="row">
        <div class="col-lg-8">

            <form action="<?= base_url('admin/tambah')  ?>" method="post">

                <div class="form-group row">
                    <label for="kelas" class="col-sm-3 col-form-label">Kelas</label>
                    <div class="col-sm-9">
                        <select class="custom-select" name="kelas">
                            <option selected>Masukkan Kelas</option>
                            <?php
                            for ($i = 1; $i < 13; $i++) {
                                echo '<option value="' . $i . '">' . $i . '</option>';
                            } ?>
                        </select>
                        <?= form_error('kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="judul" class="col-sm-3 col-form-label">Judul</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul materi..">
                        <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="url" class="col-sm-3 col-form-label">Masukkan URL</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="url" name="url" placeholder="Masukkan link URL..">
                        <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-9">
                        <button class="btn btn-primary">Masukkan</button>
                    </div>

                </div>

            </form>

        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>