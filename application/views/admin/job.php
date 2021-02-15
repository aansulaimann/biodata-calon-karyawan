<div class="container">
  <div class="row">
    <div class="col">
      <?php if($this->session->flashdata('success')) : ?>
        <div class="alert alert-success mt-3" role="alert">
          <?php echo $this->session->flashdata('success') ?> Add Data Jobs
        </div>
      <?php endif; $this->session->unset_userdata('success'); ?>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col bg-white p-4 rounded shadow">
        <h3>Entry job vacancy</h3>
        <form method="post" action="">
          <div class="form-group">
            <label for="job">Name Job</label>
            <input type="text" class="form-control" id="job" autocomplete="off" name="job">
          </div>
          <div class="form-group">
            <label for="qualification">Qualification</label>
            <textarea type="text" class="form-control" id="qualification" autocomplete="off" name="qualification"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="<?php echo base_url() . 'admin/'?>" class="btn btn-outline-primary">Back</a>
       </form>
    </div>
  </div>
</div>