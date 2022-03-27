<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <?php include_once(dirname(__FILE__) . '/../template/header.php'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">RentalBuku.net</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Membuat Template Sederhana dengan CodeIgniter
                            <a href="<?= base_url('web/about'); ?>" class="btn btn-primary float-right">About</a>
                            <a href="<?= base_url('web'); ?>" class="btn btn-primary float-right" style="margin-right: 5px;">Home</a>
                        </div>
                        <div class="card-body">
                            <section>
                                <h5><?= $judul; ?></h5>
                                <h6>Nama</h6>
                                <ul type="disc">
                                    <li>Nama Depan : Imam</li>
                                    <li>Nama Belakang : Nawawi</li>
                                </ul>
                                <br>
                                <h6>Alamat</h6>
                                <ul type="none">
                                    <li> Jalan Ciledug Raya No. 168 Pesanggrahan</li>
                                </ul>
                                <h6>Tempat Lahir</h6>
                                <ul type="none">
                                    <li>Cirebon</li>
                                </ul>

                                <h6>Olah Raga Favorit</h6>
                                <ul type="square">
                                    <li>Bulutangkis</li>
                                    <li>Catur</li>
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->