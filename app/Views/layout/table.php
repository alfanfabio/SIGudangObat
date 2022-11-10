<?= $this->extend('layout/home'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Jumlah Obat</h1>
    <hr>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-gray-800">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Obat</th>
                            <th>Jenis Obat</th>
                            <th>Jumlah Obat</th>
                            <th>Obat Keluar</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Nama Obat</th>
                            <th>Jenis Obat</th>
                            <th>Jumlah Obat</th>
                            <th>Obat Keluar</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?= $i = 1; ?>
                        <?php foreach ($obat as $o) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $o['nama']; ?></td>
                                <td><?= $o['jenis']; ?></td>
                                <td><?= $o['jumlah']; ?></td>
                                <td><?= $o['obat_keluar']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
            <div class="my-2"></div> 
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
<!-- End of Main Content -->