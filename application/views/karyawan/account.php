<div class="container">
    <div class="row">   
        <div class="col col-lg-9">
          <nav aria-label="breadcrumb" class="mt-4">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Account</li>
            </ol>
          </nav>
        </div>
        <div class="col">
            <div class="row mt-4">
                <div class="col">
                    <button type="button" class="btn btn-primary mr-2 px-4" onclick="printdocument('cv');">Print</button>
                    <button type="button" class="btn btn-outline-primary px-4">Edit</button>
                </div>
            </div>
        </div>
    </div>
    <?php if($this->session->flashdata('failed')) : ?>
        <div class="row mt-3">
          <div class="col">
            <div class="alert alert-danger" role="alert">
              <b><?php echo $this->session->flashdata('failed'); ?></b> Add Biodata
            </div>
          </div>
        </div>
    <?php endif; $this->session->unset_userdata('failed');?>
    <?php if($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
          <div class="col">
            <div class="alert alert-success" role="alert">
              <b><?php echo $this->session->flashdata('flash'); ?></b> Add Biodata
            </div>
          </div>
        </div>
    <?php endif; $this->session->unset_userdata('flash');?>

    <div class="row mt-4" id="cv">
        <div class="col col-lg-5 text-center bg-light rounded">
            <img src="<?php 
                if(!empty($data[0]['personalFoto'])) {
                    echo base_url() . "assets/img/uploads/profile/" . $data[0]['personalFoto'];
                } else {
                    echo base_url() . "assets/img/logo_user.png";
                }
            ?>" alt="foto" width="180" class="mt-4 rounded-circle">

            <form action="do_upload" method="post" enctype="multipart/form-data" class="mt-4">
                <input type="file" name="foto">
                <span class="text-muted">max 3mb</span>
                <button type="submit" class="btn-sm btn-primary">Save</button>
            </form>

            <div class="row text-left my-4" id="cv">
                <div class="col">
                    <label for="companyName" class="mt-4 font-weight-bold">Company Name</label>
                    <li class="list-group-item" id="companyName"><?php echo $data[0]['companyName']; ?></li>
                    <label for="position" class="mt-4 font-weight-bold">Position</label>
                    <li class="list-group-item" id="position"><?php echo $data[0]['position']; ?></li>
                    <label for="yWork" class="mt-4 font-weight-bold">Years Work</label>
                    <li class="list-group-item" id="yWork"><?php echo $data[0]['yearsWork']; ?></li>
                    <label for="descWork" class="mt-4 font-weight-bold">Description Work</label>
                    <li class="list-group-item" id="descWork"><?php echo $data[0]['descWork']; ?></li>
                    <label for="cname2" class="mt-4 font-weight-bold">Company Name</label>
                    <li class="list-group-item" id="cname2"><?php echo $data[0]['companyName2']; ?></li>
                    <label for="position2" class="mt-4 font-weight-bold">Position</label>
                    <li class="list-group-item" id="position2"><?php echo $data[0]['position2']; ?></li>
                    <label for="yWork2" class="mt-4 font-weight-bold">Years Work</label>
                    <li class="list-group-item" id="yWork2"><?php echo $data[0]['yearsWork2']; ?></li>
                    <label for="descWork2" class="mt-4 font-weight-bold">Description Work</label>
                    <li class="list-group-item" id="descWork2"><?php echo $data[0]['descWork2']; ?></li>
                </div>
            </div>

            <div class="row text-left">
                <div class="col">
                    <label for="agency" class="mt-4 font-weight-bold">Agency</label>
                    <li class="list-group-item" id="agency"><?php echo $data[0]['agencyName']; ?></li>
                    <label for="yTraining" class="mt-4 font-weight-bold">Years Training</label>
                    <li class="list-group-item" id="yTraining"><?php echo $data[0]['yearsTraining']; ?></li>
                    <label for="descTraining" class="mt-4 font-weight-bold">Description Training</label>
                    <li class="list-group-item" id="descTraining"><?php echo $data[0]['descTraining']; ?></li>
                    <label for="sertif1" class="mt-4 font-weight-bold">Certificate</label>
                    <li class="list-group mt-3" id="sertif1"><img src="<?php  
                        if(!empty($data[0]['certificate'])) {
                            echo base_url() . "assets/img/uploads/sertif1/" . $data[0]['certificate'];
                        } else {
                            echo base_url() . "assets/img/sertif.svg";
                        }
                    ?>" alt="sertif" width="180"></li>
                    <form action="upload_sertif" method="post" enctype="multipart/form-data" class="mt-4">
                        <input type="file" name="sertif1">
                        <span class="text-muted">max 3mb</span>
                        <button type="submit" class="btn-sm btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="col bg-secondary p-4 rounded text-light" id="cv">
                <h4><?php echo $data[0]['fullName']; ?></h4>
                <p><?php echo $data[0]['position']; ?></p>
            </div>
            <ul class="list-group" id="cv">
                <label for="selfDesc" class="mt-4 font-weight-bold">Self Description</label>
                <li class="list-group-item" id="selfDesc"><?php echo $data[0]['selfDesc']; ?></li>
                <label for="gender" class="mt-4 font-weight-bold">Gender</label>
                <li class="list-group-item" id="gender"><?php echo $data[0]['gender']; ?></li>
                <label for="date" class="mt-4 font-weight-bold">Date of Birth</label>
                <li class="list-group-item" id="date"><?php echo date('d F Y', strtotime($data[0]['dateOfBirth'])); ?></li>
                <label for="email" class="mt-4 font-weight-bold">Email</label>
                <li class="list-group-item" id="email"><?php echo $data[0]['email']; ?></li>
                <label for="phone" class="mt-4 font-weight-bold">Phone</label>
                <li class="list-group-item" id="phone"><?php echo $data[0]['phone']; ?></li>
                <label for="skills" class="mt-4 font-weight-bold">Skills</label>
                <li class="list-group-item" id="skills"><?php echo $data[0]['skills']; ?></li>
                <label for="nUniv" class="mt-4 font-weight-bold">Name University</label>
                <li class="list-group-item" id="nUniv"><?php echo $data[0]['nameUniv']; ?></li>
                <label for="degree" class="mt-4 font-weight-bold">Degree</label>
                <li class="list-group-item" id="degree"><?php echo $data[0]['degree']; ?></li>
                <label for="yEdu" class="mt-4 font-weight-bold">Year Education</label>
                <li class="list-group-item" id="yEdu"><?php echo $data[0]['yearEdu']; ?></li>
                <label for="highSchool" class="mt-4 font-weight-bold">High School</label>
                <li class="list-group-item" id="highSchool"><?php echo $data[0]['highSchool']; ?></li>
                <label for="yEduSMA" class="mt-4 font-weight-bold">Year Education</label>
                <li class="list-group-item" id="yEduSMA"><?php echo $data[0]['yearsEduHigh']; ?></li>
                <label for="agency2" class="mt-4 font-weight-bold">Agency</label>
                <li class="list-group-item" id="agency2"><?php echo $data[0]['agencyName2']; ?></li>
                <label for="yTraining2" class="mt-4 font-weight-bold">Years Training</label>
                <li class="list-group-item" id="yTraining2"><?php echo $data[0]['yearsTraining2']; ?></li>
                <label for="descTraining2" class="mt-4 font-weight-bold">Description Training</label>
                <li class="list-group-item" id="descTraining2"><?php echo $data[0]['descTraining2']; ?></li>
                <label for="selfDesc" class="mt-4 font-weight-bold">Certificate</label>
                <img src="<?php  
                        if(!empty($data[0]['certificate2'])) {
                            echo base_url() . "assets/img/uploads/sertif2/" . $data[0]['certificate2'];
                        } else {
                            echo base_url() . "assets/img/sertif.svg";
                        }
                    ?>" alt="sertif" width="180">
                <form action="upload_sertif2" method="post" enctype="multipart/form-data" class="mt-4">
                    <input type="file" name="sertif2">
                    <span class="text-muted">max 3mb</span>
                    <button type="submit" class="btn-sm btn-primary">Save</button>
                </form>
            </ul>
        </div>
    </div>
</div>

<script>
    function printdocument(el) {
        const restorepage = document.body.innerHTML;
        const printcontent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
    }
</script>