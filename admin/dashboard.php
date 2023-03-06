    
<?php include('common/sidebar.php'); ?>
<!-- END Sidebar -->

<!-- Header -->
<?php include('common/header.php'); ?>
<!-- END Header -->

<!-- Main Container -->
<main id="main-container">
<!-- Page Content -->
<div class="content">
  <!-- Quick Overview -->
  <div class="row items-push">
    <div class="col-6 col-lg-3">
      <a class="block block-rounded block-link-shadow text-center h-100 mb-0" href="manage_clients.php">
        <div class="block-content py-5">
          <div class="fs-3 fw-semibold text-primary mb-1">78</div>
          <p class="fw-semibold fs-sm text-muted text-uppercase mb-0">
            Total Clients
          </p>
        </div>
      </a>
    </div>
    <div class="col-6 col-lg-3">
      <a class="block block-rounded block-link-shadow text-center h-100 mb-0" href="manage_interpreter.php">
        <div class="block-content py-5">
          <div class="fs-3 fw-semibold text-primary mb-1">126</div>
          <p class="fw-semibold fs-sm text-muted text-uppercase mb-0">
            Total Interpreters
          </p>
        </div>
      </a>
    </div>
    <div class="col-6 col-lg-3">
      <a class="block block-rounded block-link-shadow text-center h-100 mb-0" href="manage_jobs.php">
        <div class="block-content py-5">
          <div class="fs-3 fw-semibold text-success mb-1">35</div>
          <p class="fw-semibold fs-sm text-muted text-uppercase mb-0">
            Completed Bookings
          </p>
        </div>
      </a>
    </div>
    <div class="col-6 col-lg-3">
      <a class="block block-rounded block-link-shadow text-center h-100 mb-0" href="manage_jobs.php">
        <div class="block-content py-5">
          <div class="fs-3 fw-semibold text-warning mb-1">123</div>
          <p class="fw-semibold fs-sm text-muted text-uppercase mb-0">
            All Bookings
          </p>
        </div>
      </a>
    </div>
  </div>
  <!-- END Quick Overview -->

  <!-- All Orders -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Latest Orders</h3>
      
    </div>
    
    <div class="block-content">
      <!-- All Orders Table -->
      <div class="table-responsive">
        <table class="table table-bordered table-striped table-vcenter js-dataTable-responsive">
          <thead>
            <tr>
              <th class="text-center" style="width: 80px;">#</th>
              <th>Job Status</th>
              <th>Client</th>
              <th>Date Of Service</th>
              <th>Start Time</th>
              <th>End Time</th>
              <th>City</th>
              <th>State</th>
              <th style="width: 15%;">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center">1</td>
              <td >Accepted</td>
              <td >Jack</td>
              <td >02-15-2023</td>
              <td >12:00 AM</td>
              <td >11:59 PM</td>
              <td>Tampa </td>
              <td>Florida </td>
              <td>
                <a href="edit_job.php"><i class="fa fa-1x fa-pencil"></i></a>
                <a href="#"><i class="fa fa-1x fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td class="text-center">2</td>
              <td >Decline</td>
              <td >David Fuller</td>
              <td >02-15-2023</td>
              <td >12:00 AM</td>
              <td >11:59 PM</td>
              <td>Tampa </td>
              <td>Florida </td>
              <td>
                <a href="edit_job.php"><i class="fa fa-1x fa-pencil"></i></a>
                <a href="#"><i class="fa fa-1x fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td class="text-center">3</td>
              <td >Pending</td>
              <td >Barbara Scott</td>
              <td >02-15-2023</td>
              <td >12:00 AM</td>
              <td >11:59 PM</td>
              <td>Tampa </td>
              <td>Florida </td>
              <td>
                <a href="edit_job.php"><i class="fa fa-1x fa-pencil"></i></a>
                <a href="#"><i class="fa fa-1x fa-trash"></i></a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- END All Orders Table -->
     
    </div>
  </div>
  <!-- END All Orders -->
</div>
<!-- END Page Content -->
</main>
<!-- END Main Container -->

<!-- Footer -->
<?php include('common/footer.php'); ?>
<!-- END Footer -->
   