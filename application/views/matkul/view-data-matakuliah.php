<?php
include_once(dirname(__FILE__) . '/../themes/header.php');
include_once(dirname(__FILE__) . '/../themes/sidebar.php');
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                View Matakuliah
            </div>
            <form action="<?= base_url('matakuliah/cetak'); ?>" method="POST">
                <div class="card-body">
                    <label for="">Kode Matakuliah</label>
                    <input type="text" name="" class="form-control" value="<?= $kode; ?>" readonly>
                    <label for="">Nama Matakuliah</label>
                    <input type="text" name="" class="form-control" value="<?= $nama; ?>" readonly>
                    <label for="">SKS</label>
                    <input type="text" name="" class="form-control" value="<?= $sks; ?>" readonly>
                    <br />
                    <a href="<?= base_url('matakuliah'); ?>" class="btn btn-info">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include_once(dirname(__FILE__) . '/../themes/footer.php'); ?>