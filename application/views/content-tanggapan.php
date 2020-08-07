<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
		.pt-4 {
			background-color: #78c4b5;
		}

		.card,
		.card-body {
			background-color: #78c4b5;
		}

	</style>
</head>
<body>
<div class="row no-gutters mt-5">
		<div class="col-md-2 mt-2 pr-3 pt-4">
			<ul class="nav flex-column ml-3 mb-5">
				<li class="nav-item">
					<a class="nav-link active text-white" href="#">Selamat Datang Admin</a>
					<hr class="bg-secondary">
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="#"><i class="fa fa-tachometer mr-2" aria-hidden="true"></i>Dashboard</a>
					<hr class="bg-secondary">
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="?url=tulis_pengaduan"><i class="fa fa-pencil-square-o mr-2"
							aria-hidden="true"></i>Tulis
						Pengaduan</a>
					<hr class="bg-secondary">
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="?url=lihat_laporan"><i class="fa fa-search mr-2"
							aria-hidden="true"></i>Lihat
						Laporan</a>
					<hr class="bg-secondary">
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="logout.php"><i class="fa fa-sign-out mr-2" aria-hidden="true"></i>Keluar
					</a>
				</li>
			</ul>
		</div>
		<div class="col-md-10 p-4 mt-2">
		<h3><i class="fa fa-pencil-square-o mr-2 ml-4 " aria-hidden="true"><Font class="ml-2">Tulis Tanggapan </font></i></h3>
			<div class="card shadow mb-4">
				

				<div class="card-body">
					<form action="" class="form-horizontal">
						<div class="form-group cols-sm-6">
							<label for="">Tanggal Pengaduan</label>
							<input type="text" name="" value="<?php echo date('d/m/Y'); ?>" class="form-control">
						</div>
						<div class="form-group cols-sm-6">
							<label for="">NIK</label>
							<input type="text" name="" value="" class="form-control">
						</div>
						<div class="form-group cols-sm-6">
							<label for="">Tulis Laporan</label>
							<textarea class="form-control" name="" id=""  rows="2"></textarea>
						</div>
                        <div class="form-group cols-sm-6">
							<label for="">Tulis Tanggapan</label>
							<textarea class="form-control" name="" id=""  rows="2"></textarea>
						</div>
						<div class="form-group cols-sm-6">
							<label for="">Unggah Foto</label>
							<input type="file" name="foto" accept=".jpg, .jpeg, .png, .gif " value="" class="form-control" readonly>
							<font color="red">"tipe yang di upload adalah : .jpg, .jpeg, .png, .gif"</font>
						</div>
            <div class="form-group col-sm-6">
            <input type="submit" value="simpan" class="btn btn-primary">
            <input type="reset" value="reset" class="btn btn-info">
            </div>

					</form>
				</div>
			</div>
</body>
</html>