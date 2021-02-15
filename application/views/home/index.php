<main>
  <div class="row m-0">
    <div class="col col-lg-2 bg-white">
     <?php $this->load->view('templates/side'); ?>
    </div>
    <div class="col col-lg">
      <div class="row">
        <div class="col bg-violet pb-4 mb-4">
          <nav aria-label="breadcrumb" class="mt-4">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </nav>
        </div>
      </div>

      <div class="row m-0">
        <div class="col col-lg jhome">
          <div class="jumbotron jumbotron-fluid bg-white shadow rounded">
            <div class="container">
              <h1>Welcome prospective employees</h1>
              <p class="lead text-secondary">please add your personal bio by pressing the button below.</p>
              <a href="karyawan" class="btn btn-primary shadow py-2 px-4 mt-4">Add Biodata</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>