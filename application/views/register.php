<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <style>
    .image-container {
    background-color: #6bb0a2;
    background-size: cover;
    height: 100vh;
}
.form-container {
    background-color: #78c4b5;
    display: flex;
    justify-content: center;
}
.logo  {
    margin-top: 190px;
    margin-left: 90px;
}
.img-thumbnail {
    background-color: #78c4b5;
}
.form-box {
    display: flex;
    flex-direction: column;
    justify-content: center;
    min-height: 100vh;
}
.form-box h4{
    font-weight: bold;
    color: #fff;
}
.form-box .form-input {
    position: relative;
}
.form-box .form-input input{
    width: 100%;
    height: 40px;
    margin-bottom: 20px;
    border: none;
    border-radius: 5px;
    outline: none;
    background: white;
    padding-left: 45px;
}
.form-box .form-input span{
    position: absolute;
    top: 8px;
    padding-left: 20px;
    color: #777;
}
.form-box .form-input input::placeholder{
    padding-left: 0px;
}
.form-box .form-input input:focus,
.form-box .form-input input:valid{
    border-bottom: 2px solid #48403d;
}
.form-box input[type="checkbox"]:not(:checked) + label:before{
    background: transparent;
    border: 2px solid #fff;
    width: 15px;
    height: 15px;
}
.form-box .custom-checkbox .custom-control-input:checked ~ . 
.custom-control-label::before{
    background-color: #48403d;
    border: 0px;
}
.forget-link, .register-link, .login-link {
    color: #fff;
    font-weight: bold;
}
.forget-link:hover, .register-link:hover, .login-link:hover{
    color: #292525;
}
.form-box button[type="submit"]{
    border: none;
    cursor: pointer;
    width: 150px;
    height: 40px;
    border-right: 5px;
    background-color: #fff;
    color: #000;
    font-weight: bold;
    transition: 0.5s;
}
.form-box button[type="submit"]:hover{
    box-shadow: 0px 9px 10px -2px rgb(0,0,0,0,55);
    -webkit-box-shadow: 0px 9px 10px -2px rgb(0,0,0,0,55);
    -moz-box-shadow: 0px 9px 10px -2px rgb(0,0,0,0,55);
}
.form-box .btn-social {
    color: #fff;
    border: 0px;
    display: inline-block;
    margin: 0px;
    margin-right: 10px;
    font-weight: bold;
    margin-bottom: 10px;
}
.form-box .btn-facebook{
    background: #4866a8;
}
.form-box .btn-google{
    background: #da3f34;
}

    </style>
</head>
<body>
<div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 d-none d-md-block image-container">
            <div class="logo mb-3">
            <img src="<?= base_url('assets/image/glb.jpg'); ?>" alt="" width="80%" class="rounded-circle img-thumbnail">
                    </div>
                    <h3>Layanan Pengaduan Masyarakat!</h3>
            </div>
            <div class="col-lg-6 col-md-6 form-container">
                <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
                    <div class="heading mb-4">
                        <h4> Buat Akun </h4>
                    </div>
                    <form action="">
                    <div class="form-input">
                            <span><i class="fa fa-user"></i></span>
                            <input type="text" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="form-input">
                            <span><i class="fa fa-envelope"></i></span>
                            <input type="email" name="username" placeholder="Email Address" required>
                        </div>
                        <div class="form-input">
                            <span><i class="fa fa-lock"></i></span>
                            <input type="password" placeholder="Password" required>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12 d-flex">
                                <div class="custom-control customcheckbox">
                                    <input type="checkbox" class="custom-control-input" id="cb1">
                                    <label for="" class="custom-control-label text-white" for="cb1"> saya setuju </label>
                                </div>
                            </div>
                        </div>
                        <div class="text-left mb-3">
                            <button type="submit" class="btn">Register</button>
                        </div>
                        <div class="text-center mb-2">
                            <div class="mb-3" style="color: #777">Atau register dengan</div>

                            <a href="" class="btn btn-social btn-facebook">Facebook</a>

                            <a href="" class="btn btn-social btn-google">Google</a>
                        </div>
                        <div style="color:#777">sudah punya akun?
                            <a href="<?php echo base_url('index.php/dashboard/login')?>" class="login-link">Login disini.</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>