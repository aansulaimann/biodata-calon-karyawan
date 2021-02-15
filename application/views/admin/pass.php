<div class="container">
  <div class="row">
    <div class="col mt-4 p-2 bg-light rounded">
      <h4>Search Prospective employee</h4>
      <form action="" method="post">
        <div class="form-group">
          <label for="User">Username</label>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" id="User" aria-describedby="emailHelp" readonly>
            </div>
            <div class="col">
              <button type="button" class="btn btn-outline-primary shadow-sm">search</button>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="Email">Email</label>
          <input type="text" class="form-control" id="Email" readonly>
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" class="form-control" id="phone" readonly>
        </div>
        <div class="form-group">
          <label for="app">application options</label>
          <input type="text" class="form-control" id="app" readonly>
        </div>
        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
      <!-- </form> -->
    </div>
    <div class="col mt-4">
      <h4>Send Email</h4>
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="from">From</label>
              <input name="from" class="form-control mb-2" autocomplete="off">
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="to">to</label>
              <input name="to" class="form-control mb-2" readonly>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="subject">Subject</label>
          <input name="subject" class="form-control mb-2" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="isiEmail">Write an email</label>
          <textarea name="isiEmail" class="form-control mb-2" id="isiEmail" cols="30" rows="10" autocomplete="off"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="<?php echo base_url() . 'admin/'; ?>" class="btn btn-outline-primary">Back</a>
      </form>
    </div>
  </div>
</div>