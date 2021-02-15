<main>
  <div class="row m-0 mt-2">
    <div class="col col-lg-3">
      <?php $this->load->view('admin/side');?>
    </div>

    <div class="col">
      <div class="row">
        <div class="col">
          <h5>Analytics <span class="badge badge-info p-1" onclick="location.reload();" style="cursor:pointer">Refresh</span></h5>
          <p class="text-muted">This dashboard contains analysis of account registrants and completed accounts</p>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Analytics</li>
            </ol>
          </nav>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col">
          <div class="alert alert-light shadow" role="alert">
            <div class="row p-3">
              <div class="col">
                <h5 class="alert-heading text-body">Register User</h5>
                <h2 class="text-body"><?php echo $registUser[0]['registUser']; ?> Users</h2>
                <p class="mb-0 text-muted">Users has Register account.</p>
              </div>
              <div class="col">
                <h5 class="alert-heading text-body">Complete bio</h5>
                <h2 class="text-success"><?php echo $completeBio[0]['count']; ?> Users</h2>
                <p class="mb-0 text-muted">Users has Register and Complete Biodata.</p>
              </div>
            </div>
            <hr>
            <a href="<?php echo base_url(); ?>admin/complete" class="btn btn-primary px-4 mx-3">Details</a>
          </div>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col">
        <h3>Complete Biodata</h3>
        <p class="text-muted mt-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
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
              <td><a href="<?php echo base_url(); ?>admin/details/<?php echo $data['id_person']; ?>" class="p-2 badge badge-success">Detail</a></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col">
        <h3>Register User</h3>
        <p class="text-muted mt-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <table class="table border shadow-sm bg-white">
          <thead class="bg-sec text-white">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Username</th>
              <th scope="col">Email</th>
              <th scope="col">Time Regist</th>
              <th scope="col">action</th>
            </tr>
          </thead>
          <tbody>
          <?php $j = 1; foreach($allRegistUser as $user) : ?>
            <tr>
              <th scope="row"><?php echo $j++;?></th>
              <td><?php echo $user['username']; ?></td>
              <td><?php echo $user['email']; ?></td>
              <td><?php echo date('d F Y', strtotime($user['time'])); ?></td>
              <td><a href="" onclick="window.open('<?php echo base_url(); ?>admin/detail/<?php echo $user['id']; ?>', 'newwindow', 'width=600, height=500 top=400, left=320', 'titlebar=0')" class="p-2 badge badge-success mr-2">Detail</a></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>

</main>