<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <title><?php echo $title; ?></title>
</head>
<style>
.navbar {
        background-color: #6bb0a2;
    }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <a class="navbar-brand" href="#">C-ompline | <b> Aplikasi Pelaporan Pengaduan Layanan Masyarakat </b></a>
    <form class="form-inline my-2 my-lg-0 ml-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <div class="icon ml-4">
      <h5> <i class="fa fa-envelope" aria-hidden="true" data-toogle="tooltip" title="surat masuk"></i> </h5>
    </div>
    </div>
  </nav>

   <?php $this->load->view('content-tanggapan');?>
    
</body>
</html>