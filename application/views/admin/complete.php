<main>
  <div class="row m-0 mt-2">
    <div class="col col-lg-3">
      <?php $this->load->view('admin/side');?>
    </div>

    <div class="col">
      <div class="row">
        <div class="col">
            <h5>Complete User
                <span class="badge badge-info p-1"><?php echo $completeBio[0]['count']; ?> Complete user</span>
            </h5>
          <p class="text-muted">This page presents user data that has completed the bio.</p>
        </div>
      </div>
      <?php if($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col">
              <div class="alert alert-success" role="alert">
                <b>Success</b> Delete data Complete user
              </div>
            </div>
        </div>
        <?php endif; $this->session->unset_userdata('flash');?>
      <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Complete Biodata</li>
            </ol>
          </nav>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col">
          <table class="table border shadow-sm bg-white">
            <thead class="bg-sec text-white">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Full Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Work Experience</th>
                <th scope="col">Training Experience</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>
            <?php $i = 1; foreach($getAllCompleteData as $data) : ?>
              <tr>
                <th scope="row"><?php echo $i++; ?></th>
                <td><?php echo $data['fullName']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['phone']; ?></td>
                <td><?php echo $data['companyName'] ." | "; echo $data['position']; ?></td>
                <td><?php echo $data['agencyName'] ." | "; echo $data['descTraining']; ?></td>
                <td>
                <a href="<?php echo base_url(); ?>admin/details/<?php echo $data['id_person']; ?>" class="p-2 badge badge-success mb-1">Detail</a>
                <a href="<?php echo base_url(); ?>admin/deleteCompleteData/<?php echo $data['id_regist']; ?>" class="p-2 badge badge-danger" onclick="return confirm('seriously deleting data?');">Delete</a>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</main>