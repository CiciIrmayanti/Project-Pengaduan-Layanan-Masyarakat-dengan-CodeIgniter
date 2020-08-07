<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <title><?php echo $title; ?></title>
    <style>
		.mt-5 {
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
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="#">Selamat Datang Admin</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="fa fa-tachometer mr-2"
                            aria-hidden="true"></i>Dashboard</a>
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
                    <a class="nav-link text-white" href="logout.php"><i class="fa fa-sign-out mr-2"
                            aria-hidden="true"></i>Keluar </a>
                </li>
            </ul>
        </div>
        <div class="col-md-10 p-5 mt-2">
        <h4 class="m-0 font-weight-bold">
                    Data Pengaduan
                </h4>
            <div class="card shadow mb-4">
                
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>
                                <td>

                                </td>
                                </td>
                                <td>
                                <td>

                                </td>
                                </td>
                            </tr>
                            <tr>
                            <td>
                                <td>

                                </td>
                                </td>
                                <td>
                                <td>

                                </td>
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
</body>
<script src="<?php echo base_url(). 'assets/js/bootstrap.min.js'?>" type="text/javascript"></script>
</html>