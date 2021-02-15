<div class="container border mt-4 p-4 text-center rounded shadow-sm bg-white">
  <div class="row">
    <div class="col mt-4 mb-4">
      <h3>Add time</h3>
    </div>
  </div>
    

  <div class="row pb-4">
    <div class="col">
      <form action="" method="post">
        <label class="mt-4 mx-4 font-weight-bold" for="from">From</label>
        <input type="date" name="fromComplete" id="from" class="p-2 rounded border border-secondary">

        <label class="mt-4 mx-4 font-weight-bold" for="to">to</label>
        <input type="date" name="toComplete" id="to" class="p-2 rounded border border-secondary">
        <button type="submit" class="btn btn-primary px-4 ml-4" name="btnSearch">Search Data</button>
        <a href="<?php echo base_url(); ?>admin/" class="btn btn-outline-primary px-4">Back</a>
        <button type="button" class="btn btn-transparent shadow-sm p-2" onclick="printdocument('content');">print</button>
      </form>
    </div>
  </div>

  <div class="row mt-4">
    <div class="col" id="content">
    <h3>Data Complete User</h3>
      <table class="table border shadow-sm mt-3">
        <thead class="bg-sec text-white">
          <tr>
            <th scope="col">#</th>
            <th scope="col">ID User</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Role User</th>
            <th scope="col">Time Register</th>
          </tr>
        </thead>
        <tbody>
        <?php if(isset($_POST['btnSearch'])) { 
          $i = 1;
          foreach($report as $data) : ?>
          <tr>
            <th scope="row"><?php echo $i++; ?></th>
            <td><?php echo $data['fullName']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['phone']; ?></td>
            <td><?php echo $data['companyName'] . " | ";  echo $data['position']; ?></td>
            <td><?php echo $data['agencyName'] . " | ";  echo $data['descTraining']; ?></td>
          </tr>
        <?php endforeach; } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>