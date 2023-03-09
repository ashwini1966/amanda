    
<?php include('common/sidebar.php'); ?>
<!-- END Sidebar -->

<!-- Header -->
<?php include('common/header.php'); ?>
<!-- END Header -->

<!-- Main Container -->
<main id="main-container">

  <div class="bg-body-light">
          
<div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Manage Jobs</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="manage_jobs.php">Manage Jobs</a></li>
          <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- Page Content -->
<div class="content">
  <!-- Quick Overview -->
  <div class="">
    <!-- New Post -->
    <form action="#" method="POST" enctype="multipart/form-data" onsubmit="return false;">
      <div class="block">
        <div class="block-header block-header-default">
          <!-- <a class="btn btn-alt-secondary" href="#"> -->
            <b>Edit Job</b>
          <!-- </a> -->
          <div class="block-options">
            
          </div>
        </div>
        <div class="block-content">
          <div class="row justify-content-center push">
            <div class="col-md-10">
              
              <div class="mb-4">
                <label class="form-label" for="dm-post-edit-title">Job ID</label>
                <input type="text" class="form-control" id="job_id" name="job_id" placeholder="Enter job id.." value="89885555">
              </div>

              <div class="mb-4">
                <label class="form-label" for="dm-post-edit-title">Job Status</label>
                <select class="js-select2 form-select" id="example-select2-multiple" name="example-select2-multiple" style="width: 100%;" data-placeholder="Choose Job Status.." multiple>
                  <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                  <option value="1" selected>Cancelled</option>
                  <option value="2">Late Cancelled</option>
                  <option value="3">Completed</option>
                  <option value="4">Unfilled</option>
                </select>
              </div>


              <div class="mb-4">
                <label class="form-label" for="dm-post-edit-title">Client</label>
                <select class="js-select2 form-select" id="client" name="example-select2-multiple" style="width: 100%;" data-placeholder="Choose Clients" multiple>
                  <option>Choose Client</option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                  <option value="1" >ALS Global</option>
                  <option value="2" >Alliance Business Solution</option>
                </select>
              </div>

              <div class="mb-4">
                <label class="form-label" for="dm-post-edit-title">Date of service</label>
                <input type="text" class="js-flatpickr form-control" id="example-flatpickr-default" name="example-flatpickr-default" placeholder="Y-m-d">
              </div>

              <div class="mb-4">
                <label class="form-label" for="dm-post-edit-title">Start time</label>
                <input type="text" class="js-flatpickr form-control" id="example-flatpickr-time-standalone" name="example-flatpickr-time-standalone" data-enable-time="true" data-no-calendar="true" data-date-format="H:i">
              </div>

              <div class="mb-4">
                <label class="form-label" for="dm-post-edit-title">End date of service</label>
                <input type="text" class="js-flatpickr form-control" id="example-flatpickr-default" name="example-flatpickr-default" placeholder="Y-m-d">
              </div>

              <div class="mb-4">
                <label class="form-label" for="dm-post-edit-title">End time</label>
                <input type="text" class="js-flatpickr form-control" id="example-flatpickr-time-standalone" name="example-flatpickr-time-standalone" data-enable-time="true" data-no-calendar="true" data-date-format="H:i">
              </div>

              <div class="mb-4">
                <label class="form-label" for="dm-post-edit-title">Street Address</label>
                <input type="text" class="form-control" id="job_id" name="job_id" placeholder="Enter job id.." value="7815 North Dale Mabry Highway ">
              </div>

              <div class="mb-4">
                <label class="form-label" for="dm-post-edit-title">City</label>
                <input type="text" class="form-control" id="job_id" name="job_id" placeholder="Enter job id.." value="Florida">
              </div>

              <div class="mb-4">
                <label class="form-label" for="dm-post-edit-title">Zipcode</label>
                <input type="text" class="form-control" id="job_id" name="job_id" placeholder="Enter job id.." value="89555">
              </div>

              <div class="mb-4">
                <label class="form-label" for="dm-post-edit-title">State</label>
                 <select class="js-select2 form-select" id="State" name="example-select2-multiple" style="width: 100%;" data-placeholder="Choose States.." multiple>
                  <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                  <option value="1">Florida</option>
                  <option value="2" >Lowa</option>
                </select>
              </div>

              <div class="mb-4">
                <label class="form-label" for="dm-post-edit-title">Service type</label>
                 <select class="js-select2 form-select" id="service_type" name="example-select2-multiple" style="width: 100%;" data-placeholder="Choose  service types.." multiple>
                  <option>Select a service type</option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                  <option value="1" >Medical</option>
                  <option value="2" >Legal</option>
                </select>
              </div>
             
              <div class="mb-4">
                <label class="form-label" for="dm-post-edit-title">Service language</label>
                <select class="js-select2 form-select" id="service_language" name="example-select2-multiple" style="width: 100%;" data-placeholder="Choose communication mode.." multiple>
                  <option>Select a communication mode</option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                  <option value="1" >ALS Global</option>
                  <option value="2" >Alliance Business Solution</option>
                </select>
              </div>
             
              <div class="mb-4">
                <label class="form-label" for="dm-post-edit-title">Service notes</label>
                <input type="text" class="form-control" id="job_id" name="job_id" placeholder="Enter job id.." value="test">
              </div>
             
              <div class="mb-4">
                <label class="form-label" for="dm-post-edit-title">Quantity of participents</label>
                <input type="text" class="form-control" id="job_id" name="job_id" placeholder="Enter job id.." value="5">
              </div>
             
              <div class="mb-4">
                <label class="form-label" for="dm-post-edit-title"># of interpreters required</label>
                <input type="text" class="form-control" id="job_id" name="job_id" placeholder="Enter job id.." value="1">
              </div>

              <div class="mb-4">
                <label class="form-label" for="dm-post-edit-title">Name of deaf or hearing patients</label>
                <input type="text" class="form-control" id="job_id" name="job_id" placeholder="Enter job id.." value="2">
              </div>
              
              <div class="mb-4">
                <label class="form-label" for="dm-post-edit-title">Gender preference</label>
                <select class="js-select2 form-select" id="gender" name="example-select2-multiple" style="width: 100%;" data-placeholder="Choose Clients" multiple>
                  <option>No Preference</option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                  <option value="1" >Male</option>
                  <option value="2" >Female</option>
                  <option value="3" >Others</option>
                </select>
              </div>

              <div class="mb-4">
                <label class="form-label" for="dm-post-edit-title">Client File/PO</label>
                <input type="text" class="form-control" id="job_id" name="job_id" placeholder="Enter job id.." value="">
              </div>

              <div class="mb-4">
                <label class="form-label" for="dm-post-edit-title">Interpreter Name</label>
                <input type="text" class="form-control" id="job_id" name="job_id" placeholder="Enter job id.." value="test">
              </div>

              <div class="mb-4">
                <label class="form-label" for="dm-post-edit-title">Client total</label>
                <input type="text" class="form-control" id="job_id" name="job_id" placeholder="Enter job id.." value="5">
              </div>

              <div class="mb-4">
                <label class="form-label" for="dm-post-edit-title">Interpreter rate</label>
                <input type="text" class="form-control" id="job_id" name="job_id" placeholder="Enter job id.." value="2">
              </div>

              <div class="mb-4">
                <label class="form-label" for="dm-post-edit-title">Additional information</label>
                <textarea class="form-control" id="description" name="description" placeholder="Enter description..">
                </textarea> 
              </div>
            </div>
          </div>
        </div>
        <div class="block-content bg-body-light">
          <div class="row justify-content-center push">
            <div class="col-md-10">
              <button type="submit" class="btn btn-alt-primary">
                <i class="fa fa-fw fa-check opacity-50 me-1"></i> Save Changes
              </button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- END New Post -->
  </div>
  <!-- END Quick Overview -->

</div>
<!-- END Page Content -->
</main>
<!-- END Main Container -->

<!-- Footer -->
<?php include('common/footer.php'); ?>
<!-- END Footer -->
   