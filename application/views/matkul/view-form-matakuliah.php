<?php
include_once(dirname(__FILE__) . '/../themes/header.php');
include_once(dirname(__FILE__) . '/../themes/sidebar.php');
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Input Matakuliah
            </div>
            <form action="<?= base_url('matakuliah/cetak'); ?>" method="POST">
                <div class="card-body">
                    <?= form_error('kode'); ?>
                    <?= form_error('nama'); ?>
                    <label for="">Kode Matakuliah</label>
                    <input type="text" name="kode" class="form-control">
                    <label for="">Nama Matakuliah</label>
                    <input type="text" name="nama" class="form-control">
                    <label for="">SKS</label>
                    <select name="sks" id="" class="form-control">
                        <option value="">Pilih SKS</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    <br />
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include_once(dirname(__FILE__) . '/../themes/footer.php'); ?>