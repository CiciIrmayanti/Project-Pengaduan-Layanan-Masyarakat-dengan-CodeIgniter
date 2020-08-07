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
					<a class="nav-link text-white" href="?url=tulis_pengaduan"><i class="fa fa-pencil-square-o mr-2"
							aria-hidden="true"></i>Verifikasi Tanggapan </a>
					<hr class="bg-secondary">
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="logout.php"><i class="fa fa-sign-out mr-2" aria-hidden="true"></i>Keluar
					</a>
				</li>
			</ul>
		</div>
		<div class="col-md-10 p-4 mt-2" >
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col-mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
								Laporan Pengaduan :
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">
								ada laporan dari masyarakat
							</div>
							<div class="col-auto">
								<i class="fa fa-comments fa-4x text-grey-100"></i>
								<span class="badge badge-danger badge-counter"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

</body>

</html>
