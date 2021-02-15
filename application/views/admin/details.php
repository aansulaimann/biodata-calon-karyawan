<div class="container">
  <div class="row mt-4">
    <div class="col col-lg-5 text-center bg-light rounded">
      <img src="<?php echo base_url(); ?>assets/img/<?php echo $details[0]['personalFoto']?>" alt="foto" width="180" class="mt-4 rounded-circle">
      <div class="row mt-4">
        <div class="col">
          <button type="button" class="btn btn-primary mr-2 px-4" onclick="window.print();">Print</button>
          <a href="<?php echo base_url();?>admin/complete" class="btn btn-outline-primary px-4">Back</a>
        </div>
      </div>
      <div class="row text-left my-4">
        <div class="col">
          <label for="selfDesc" class="mt-4 font-weight-bold">Company Name</label>
          <li class="list-group-item" id="selfDesc"><?php echo $details[0]['companyName']; ?></li>
          <label for="selfDesc" class="mt-4 font-weight-bold">Position</label>
          <li class="list-group-item" id="selfDesc"><?php echo $details[0]['position']; ?></li>
          <label for="selfDesc" class="mt-4 font-weight-bold">Years Work</label>
          <li class="list-group-item" id="selfDesc"><?php echo $details[0]['yearsWork']; ?></li>
          <label for="selfDesc" class="mt-4 font-weight-bold">Description Work</label>
          <li class="list-group-item" id="selfDesc"><?php echo $details[0]['descWork']; ?></li>
          <label for="selfDesc" class="mt-4 font-weight-bold">Company Name</label>
          <li class="list-group-item" id="selfDesc"><?php echo $details[0]['companyName2']; ?></li>
          <label for="selfDesc" class="mt-4 font-weight-bold">Position</label>
          <li class="list-group-item" id="selfDesc"><?php echo $details[0]['position2']; ?></li>
          <label for="selfDesc" class="mt-4 font-weight-bold">Years Work</label>
          <li class="list-group-item" id="selfDesc"><?php echo $details[0]['yearsWork2']; ?></li>
          <label for="selfDesc" class="mt-4 font-weight-bold">Description Work</label>
          <li class="list-group-item" id="selfDesc"><?php echo $details[0]['descWork2']; ?></li>
        </div>
      </div>

      <div class="row text-left">
        <div class="col">
          <label for="selfDesc" class="mt-4 font-weight-bold">Agency</label>
          <li class="list-group-item" id="selfDesc"><?php echo $details[0]['agencyName']; ?></li>
          <label for="selfDesc" class="mt-4 font-weight-bold">Years Training</label>
          <li class="list-group-item" id="selfDesc"><?php echo $details[0]['yearsTraining']; ?></li>
          <label for="selfDesc" class="mt-4 font-weight-bold">Description Training</label>
          <li class="list-group-item" id="selfDesc"><?php echo $details[0]['descTraining']; ?></li>
          <label for="selfDesc" class="mt-4 font-weight-bold">Certificate</label>
          <li class="list-group mt-3"><img src="<?php echo base_url(); ?>assets/img/<?php echo $details[0]['certificate']; ?>" alt="sertif" width="180"></li>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="col bg-secondary p-4 rounded text-light">
        <h4><?php echo $details[0]['fullName']; ?></h4>
        <p><?php echo $details[0]['position']; ?></p>
      </div>
      <ul class="list-group">
        <label for="selfDesc" class="mt-4 font-weight-bold">Self Description</label>
        <li class="list-group-item" id="selfDesc"><?php echo $details[0]['selfDesc']; ?></li>
        <label for="selfDesc" class="mt-4 font-weight-bold">Gender</label>
        <li class="list-group-item" id="selfDesc"><?php echo $details[0]['gender']; ?></li>
        <label for="selfDesc" class="mt-4 font-weight-bold">Date of Birth</label>
        <li class="list-group-item" id="selfDesc"><?php echo $details[0]['dateOfBirth']; ?></li>
        <label for="selfDesc" class="mt-4 font-weight-bold">Email</label>
        <li class="list-group-item" id="selfDesc"><?php echo $details[0]['email']; ?></li>
        <label for="selfDesc" class="mt-4 font-weight-bold">Phone</label>
        <li class="list-group-item" id="selfDesc"><?php echo $details[0]['phone']; ?></li>
        <label for="selfDesc" class="mt-4 font-weight-bold">Skills</label>
        <li class="list-group-item" id="selfDesc"><?php echo $details[0]['skills']; ?></li>
        <label for="selfDesc" class="mt-4 font-weight-bold">Name University</label>
        <li class="list-group-item" id="selfDesc"><?php echo $details[0]['nameUniv']; ?></li>
        <label for="selfDesc" class="mt-4 font-weight-bold">Degree</label>
        <li class="list-group-item" id="selfDesc"><?php echo $details[0]['degree']; ?></li>
        <label for="selfDesc" class="mt-4 font-weight-bold">Year Education</label>
        <li class="list-group-item" id="selfDesc"><?php echo $details[0]['yearEdu']; ?></li>
        <label for="selfDesc" class="mt-4 font-weight-bold">High School</label>
        <li class="list-group-item" id="selfDesc"><?php echo $details[0]['highSchool']; ?></li>
        <label for="selfDesc" class="mt-4 font-weight-bold">Year Education</label>
        <li class="list-group-item" id="selfDesc"><?php echo $details[0]['yearsEduHigh']; ?></li>
        <label for="selfDesc" class="mt-4 font-weight-bold">Agency</label>
        <li class="list-group-item" id="selfDesc"><?php echo $details[0]['agencyName2']; ?></li>
        <label for="selfDesc" class="mt-4 font-weight-bold">Years Training</label>
        <li class="list-group-item" id="selfDesc"><?php echo $details[0]['yearsTraining2']; ?></li>
        <label for="selfDesc" class="mt-4 font-weight-bold">Description Training</label>
        <li class="list-group-item" id="selfDesc"><?php echo $details[0]['descTraining2']; ?></li>
        <label for="selfDesc" class="mt-4 font-weight-bold">Certificate</label>
        <img src="<?php echo base_url(); ?>assets/img/<?php echo $details[0]['certificate2']; ?>" alt="sertif" width="180">
      </ul>
    </div>
  </div>
</div>