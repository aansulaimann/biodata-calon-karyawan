<main>
  <div class="row m-0 mt-2">
    <div class="col col-lg-3">
      <?php $this->load->view('admin/side');?>
    </div>

    <div class="col">
      <div class="row">
        <div class="col">
            <h5>Regiser User
              <span class="badge badge-info p-1"><?php echo $registUser[0]['registUser']; ?> Regiser user</span>
            </h5>
          <p class="text-muted">This page presents data of users who have registered.</p>
        </div>
      </div>
      <?php if($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
          <div class="col">
            <div class="alert alert-success" role="alert">
              <b>Success</b> delete data regiser user
            </div>
          </div>
        </div>
      <?php endif; $this->session->unset_userdata('flash');?>
      <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Regiser User</li>
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
              <th scope="col">Username</th>
              <th scope="col">Email</th>
              <th scope="col">Time Regist</th>
              <th scope="col">action</th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 1; foreach($allRegistUser as $user) : ?>
            <tr>
              <th scope="row"><?php echo $i++;?></th>
              <td><?php echo $user['username']; ?></td>
              <td><?php echo $user['email']; ?></td>
              <td><?php echo date('d F Y', strtotime($user['time'])); ?></td>
              <td>
              <a href="" onclick="window.open('<?php echo base_url(); ?>admin/detail/<?php echo $user['id']; ?>', 'newwindow', 'width=600, height=500 top=100, left=320', 'titlebar=0')" class="p-2 badge badge-success mr-2">Detail</a>
              <a href="<?php echo base_url(); ?>admin/delete/<?php echo $user['id']; ?>" class="p-2 badge badge-danger mr-2" onclick="return confirm('sure to delete this data?');">Delete</a>
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