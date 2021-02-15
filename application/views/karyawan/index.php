<main>
  <div class="row m-0">
    <div class="col col-lg-2 bg-white">
     <?php $this->load->view('templates/side');?>
    </div>
    <div class="col col-lg">
      <?php if($this->session->flashdata('flash')) : ?>
        <div class="row mt-2">
          <div class="col">
            <div class="alert alert-danger" role="alert">
              <b>Your <?php echo $this->session->flashdata('flash'); ?></b> has Created in your account
            </div>
          </div>
        </div>
      <?php endif; $this->session->unset_userdata('flash');?>
      <div class="row">
        <div class="col bg-violet pb-4 mb-4">
          <nav aria-label="breadcrumb" class="mt-4">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Add Biodata</li>
            </ol>
          </nav>
        </div>
      </div>

      <div class="row m-0">
        <div class="col col-lg jkaryawan bg-white shadow p-3 rounded">
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Personal Bio</a>
              <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Education</a>
              <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Work Experience</a>
              <a class="nav-link" id="nav-training-tab" data-toggle="tab" href="#nav-training" role="tab" aria-controls="nav-contact" aria-selected="false">Training Experience</a>
              <a class="nav-link" id="nav-training-tab" data-toggle="tab" href="#job-vacancy" role="tab" aria-controls="nav-contact" aria-selected="false">job vacancy</a>
            </div>
          </nav>
          <div class="tab-content mt-2" id="nav-tabContent"> 
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="namaLengkap">Full Name</label>
                  <input type="text" class="form-control" id="namaLengkap" placeholder="john" autocomplete="off" name="fullName">
                  <small class="form-text text-danger"><?php echo form_error('fullname'); ?></small>
                </div>
                <div class="form-group">
                  <label for="self">Self Description</label>
                  <textarea type="text" class="form-control" id="self" autocomplete="off" name="selfDesc"></textarea>
                  <small class="form-text text-danger"><?php echo form_error('selfDesc'); ?></small>
                </div>
                <div class="form-group">
                  <label for="gender">Gender</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Laki - Laki" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      Laki - Laki
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="Perempuan">
                    <label class="form-check-label" for="exampleRadios2">
                      Perempuan
                    </label>
                  </div>
                  <small class="form-text text-danger"><?php echo form_error('gender'); ?></small>
                </div>
                <div class="form-group">
                  <label for="date">Date of birth</label>
                  <input type="date" class="form-control" id="date" name="date">
                  <small class="form-text text-danger"><?php echo form_error('date'); ?></small>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="john@gmail.com" autocomplete="off" name="email">
                  <small class="form-text text-danger"><?php echo form_error('email'); ?></small>
                </div>
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="number" class="form-control" id="phone" name="phone">
                  <small class="form-text text-danger"><?php echo form_error('phone'); ?></small>
                </div>
                <div class="form-group">
                  <label for="skill">Skills</label>
                  <textarea type="text" class="form-control" id="skill" placeholder="Illustrator | Expert, Web Development | Intermediate" name="skills"></textarea>
                  <small class="form-text text-danger"><?php echo form_error('skills'); ?></small>
                </div>
                <div class="form-group">
                  <label for="foto">Foto</label>
                  <input type="file" class="form-control" id="foto" name="foto">
                  <small class="form-text text-danger"><?php echo form_error('foto'); ?></small>
                </div>
                step 1 / 5 <a id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="true">Next</a>  
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
              <div class="form-group">
                <label for="nUniversity">Name University</label>
                <input type="text" class="form-control" id="nUniversity" placeholder="university of California" autocomplete="off" name="nUniversity">
                <small class="form-text text-danger"><?php echo form_error('nUniversity'); ?></small>
              </div>
              <div class="form-group">
                <label for="bDegree">bachelor degree</label>
                <input type="text" class="form-control" id="bDegree" placeholder="Computer sience" name="bDegree" autocomplete="off">
                <small class="form-text text-danger"><?php echo form_error('degree'); ?></small>
              </div>
              <div class="form-group">
                <label for="yEdu">years of education</label>
                <input type="text" class="form-control" id="yEdu" placeholder="2017 - 2021" autocomplete="off" 
                name="yEdu">
                <small class="form-text text-danger"><?php echo form_error('yEdu'); ?></small>
              </div>
              <div class="form-group">
                <label for="hschool">High School</label>
                <input type="text" class="form-control" id="hschool" placeholder="Jakarta International School" autocomplete="off" name="hSchool">
                <small class="form-text text-danger"><?php echo form_error('hSchool'); ?></small>
              </div>
              <div class="form-group">
                <label for="yEduSMA">years of education</label>
                <input type="text" class="form-control" id="yEduSMA" placeholder="2014 - 2017" autocomplete="off" name="yEduSMA">
                <small class="form-text text-danger"><?php echo form_error('yEduSMA'); ?></small>
              </div>
              step 2 / 5 <a id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="true">Next</a>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
              <div class="form-group">
                <label for="cName">Company name</label>
                <input type="text" class="form-control" id="cName" placeholder="Google" autocomplete="off" name="cName">
                <small class="form-text text-danger"><?php echo form_error('cName'); ?></small>
              </div>
              <div class="form-group">
                <label for="position">Position</label>
                <input type="text" class="form-control" id="position" placeholder="Web Developer" name="position" autocomplete="off">
                <small class="form-text text-danger"><?php echo form_error('position'); ?></small>
              </div>
              <div class="form-group">
                <label for="yWork">years of work</label>
                <input type="text" class="form-control" id="yWork" placeholder="2010 - 2012" autocomplete="off" name="yWork">
                <small class="form-text text-danger"><?php echo form_error('yWork'); ?></small>
              </div>
              <div class="form-group">
                <label for="dWork">Description work</label>
                <input type="text" class="form-control" id="dWork" placeholder="create API" autocomplete="off" name="dWork">
                <small class="form-text text-danger"><?php echo form_error('dWork'); ?></small>
              </div><hr>
              <div class="form-group">
                <label for="cName2">Company name two</label>
                <input type="text" class="form-control" id="cName2" placeholder="Google" autocomplete="off" name="cName2">
              </div>
              <div class="form-group">
                <label for="position2">Position</label>
                <input type="text" class="form-control" id="position2" placeholder="Web Developer" name="position2" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="yWork2">years of work</label>
                <input type="text" class="form-control" id="yWork2" placeholder="2010 - 2012" autocomplete="off" name="yWork2">
              </div>
              <div class="form-group">
                <label for="dWork2">Description work</label>
                <input type="text" class="form-control" id="dWork2" placeholder="create API" autocomplete="off" name="dWork2">
              </div>
              step 3 / 5 <a id="nav-training-tab" data-toggle="tab" href="#nav-training" role="tab" aria-controls="nav-training" aria-selected="true">Next</a>
            </div>
            <div class="tab-pane fade" id="nav-training" role="tabpanel" aria-labelledby="nav-training-tab">
              <div class="form-group">
                <label for="aName">Agency name</label>
                <input type="text" class="form-control" id="aName" placeholder="Dicoding" autocomplete="off" name="aName">
                <small class="form-text text-danger"><?php echo form_error('aName'); ?></small>
              </div>
              <div class="form-group">
                <label for="yTraining">years of training</label>
                <input type="text" class="form-control" id="yTraining" placeholder="2010" autocomplete="off" name="yTraining">
                <small class="form-text text-danger"><?php echo form_error('yTraining'); ?></small>
              </div>
              <div class="form-group">
                <label for="dTraining">Description training</label>
                <input type="text" class="form-control" id="dTraining" placeholder="WEB Development With JS" autocomplete="off" name="descTraining">
                <small class="form-text text-danger"><?php echo form_error('descTraining'); ?></small>
              </div>
              <div class="form-group">
                <label for="sertif">Certificate training</label>
                <input type="file" class="form-control" id="sertif" autocomplete="off" name="sertif">
                <small class="form-text text-danger"><?php echo form_error('sertif'); ?></small>
              </div><hr>
              <div class="form-group">
                <label for="aName2">Agency name two</label>
                <input type="text" class="form-control" id="aName2" placeholder="Dicoding" autocomplete="off" name="an2">
              </div>
              <div class="form-group">
                <label for="yTraining2">years of training</label>
                <input type="text" class="form-control" id="yTraining2" placeholder="2012" autocomplete="off" name="yt2">
              </div>
              <div class="form-group">
                <label for="dTraining2">Description training</label>
                <input type="text" class="form-control" id="dTraining2" placeholder="Mobile Application Bootcamp" autocomplete="off" name="dt2">
              </div>
              <div class="form-group">
                <label for="sertif2">Certificate training</label>
                <input type="file" class="form-control" id="sertif2" autocomplete="off" name="sertif2">
              </div>
              step 4 / 5 <a id="nav-profile-tab" data-toggle="tab" href="#job-vacancy" role="tab" aria-controls="nav-profile" aria-selected="true">Next</a> 
            </div>
            <div class="tab-pane fade" id="job-vacancy" role="tabpanel" aria-labelledby="nav-training-tab">
              <div class="form-group">
                <label for="job">Job vacancy</label>
                <select class="custom-select" name="job">
                  <?php foreach($job as $j) : ?>
                  <option value="<?php echo $j['job']; ?>"><?php echo $j['job']; ?></option>
                  <?php endforeach;?>
                </select>
                <small class="form-text text-danger"><?php echo form_error('job'); ?></small>
              </div> 
              <button type="submit" class="btn btn-primary px-4" name="sPersonal">Save</button>
              <button type="button" class="btn btn-light px-4">Clear</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>