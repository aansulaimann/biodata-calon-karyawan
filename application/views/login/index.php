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

    <title>Login Page</title>
  </head>
  <body class="bg-light">

  <div class="container mt-4">
    <!-- if you fail to log in or sign-up, an alert will appear -->
    <?php if($this->session->flashdata('failed')) : ?>
      <div class="row">
        <div class="col">
          <div class="alert alert-danger" role="alert">
            <b><?php echo $this->session->flashdata('failed'); ?></b> please re-Sign up..
          </div>
        </div>
      </div>
    <?php endif; $this->session->unset_userdata('failed');?>
    <!-- if you success to sign-up, an alert will appear -->
    <?php if($this->session->flashdata('success')) : ?>
      <div class="row">
        <div class="col">
          <div class="alert alert-success" role="alert">
            <b><?php echo $this->session->flashdata('success'); ?></b> please Login to add your bio..
          </div>
        </div>
      </div>
    <?php endif; $this->session->unset_userdata('success');?>

    <!-- login page -->
    <div class="row justify-content-center m-2">
      <div class="col col-lg-10 mt-4 p-4 bg-white rounded shadow">
        <div class="row">
          <div class="col d-none col-lg d-lg-block">
            <img src="https://images.unsplash.com/reserve/LJIZlzHgQ7WPSh5KVTCB_Typewriter.jpg?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="randomPic" class="img-fluid">
          </div>

          <div class="col col-lg-8 mt-3">
          <h4>Login Page</h4>
          <p class="text-muted">Welcome please Login to add your bio</p>
            <form action="" method="post">
              <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" autocomplete="off">
              </div>
              <div class="form-group mt-4">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password" autocomplete="off">
                  <small class="form-text text-danger"><?php echo form_error('password'); ?></small>
              </div>
              <button type="submit" class="btn btn-primary px-4 mr-2 mt-2" name="signin">Sign In</button>
              <button type="button" class="btn btn-outline-primary px-3 mt-2" data-toggle="modal" data-target="#exampleModal">Sign Up</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- // login page -->
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-light">
          <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?php echo base_url(); ?>login/signUp">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username" autocomplete="off">
              <small class="form-text text-danger"><?php echo form_error('username'); ?></small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="pw1">Password</label>
              <input type="password" class="form-control" id="pw1" name="password" autocomplete="off">
              <small class="form-text text-danger"><?php echo form_error('password'); ?></small>
            </div>
            <div class="form-group">
              <label for="pw2">Confirm Password</label>
              <input type="password" class="form-control" id="pw2" name="confirmPassword" autocomplete="off">
              <small class="form-text text-danger"><?php echo form_error('confirmPassword'); ?></small>
            </div>
            <button type="submit" class="btn btn-primary mt-4 float-right">Create account</button>
            <button type="button" class="btn btn-outline-secondary mt-4 float-right mx-3" data-dismiss="modal">Close</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- end model -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>