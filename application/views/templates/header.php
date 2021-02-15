<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- link bootstrap 4.6 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

    <!-- link my css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.ico">

    <title><?php echo $title; ?></title>
  </head>
  <body>

  <!-- navbar for all pages -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-violet">
      <a class="navbar-brand" href="<?php echo base_url(); ?>">Biodata Calon Pegawai</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mr-4 pr-4" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto mr-4 pr-4">
          <div class="dropdown">
            <button class="btn bg-transparent border-0 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="<?php echo base_url(); ?>assets/img/logo_user.png" alt="logo" width="26">
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item mb-2" href="<?php echo base_url(); ?>karyawan/account">Account</a>
              <a class="dropdown-item mb-2" href="#">Setting</a><hr>
              <form action="<?php echo base_url(); ?>home/logout" method="post">
                <button type="submit" class="dropdown-item" name="logout">Log out</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>