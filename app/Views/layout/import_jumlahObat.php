<?= $this->extend('layout/home'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Import Jumlah Obat</h1>
    <hr>
    <div class="col-lg-3">
				<h4>Form Data</h4>
				<form action="" method="POST" enctype="multipart/form-data">
					<input type="file" name="data">
					<input type="submit" name="input" value="INSERT" class="btn btn-primary mt-3">
				</form>
			</div>
    

</div>
<?= $this->endSection(); ?>