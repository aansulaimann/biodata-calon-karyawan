<ul class="list-group bg-white shadow pb-4">
  <li class="list-group-item border-0 bg-sec text-white"><h4>Dashboard</h4></li>
  <li class="list-group-item border-0">
    <div class="dropdown">
      <a class="btn btn-transparent border-0 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Master</a>

      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item my-3" href="<?php echo base_url(); ?>admin/regist">Data Regist User</a>
        <a class="dropdown-item my-3" href="<?php echo base_url(); ?>admin/complete">Data Complete biodata</a>
        <a class="dropdown-item" href="<?php echo base_url(); ?>admin/job">Entry job vacancy</a>
      </div>
    </div>
  </li>
  <li class="list-group-item border-0">
    <div class="dropdown">
      <a class="btn btn-transparent border-0 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Transaksi</a>

      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item my-3" href="<?php echo base_url(); ?>admin/passes">Entry prospective employee passes</a>
      </div>
    </div>
  </li>
  <li class="list-group-item border-0 pb-4">
    <div class="dropdown">
      <a class="btn btn-transparent border-0 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Report</a>

      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item my-3" href="<?php echo base_url(); ?>admin/report">Report Register User</a>
        <a class="dropdown-item" href="<?php echo base_url(); ?>admin/reportComplete">Report Complete User</a>
      </div>
    </div>
  </li>
  <li class="list-group-item border-0 pb-4"><a href="<?php echo base_url(); ?>admin/logout" class="mt-2 btn btn-outline-danger px-3 mb-4">Logout</a></li>
</ul>