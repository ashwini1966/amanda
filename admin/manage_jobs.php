    
<?php include('common/sidebar.php'); ?>
<!-- END Sidebar -->

<!-- Header -->
<?php include('common/header.php'); ?>
<!-- END Header -->

      <!-- Main Container -->
      <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
              <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Manage Jobs</h1>
             <!--  <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">Tables</li>
                  <li class="breadcrumb-item active" aria-current="page">DataTables</li>
                </ol>
              </nav> -->
            </div>
          </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
          <!-- Dynamic Table Responsive -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">
                Jobs
              </h3>
              <div class="block-options">
                <div class="dropdown">
                  <button type="button" class="btn btn-alt-secondary" id="dropdown-ecom-filters" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Filters
                    <i class="fa fa-angle-down ms-1"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-ecom-filters">
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                      Pending..
                      <span class="badge bg-primary rounded-pill">78</span>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                      Processing
                      <span class="badge bg-black-50 rounded-pill">12</span>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                      For Delivery
                      <span class="badge bg-black-50 rounded-pill">20</span>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                      Canceled
                      <span class="badge bg-black-50 rounded-pill">5</span>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                      Delivered
                      <span class="badge bg-black-50 rounded-pill">280</span>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                      All
                      <span class="badge bg-black-50 rounded-pill">19k</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="block-content block-content-full">
              <!-- DataTables init on table by adding .js-dataTable-responsive class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
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
            </div>
          </div>
          <!-- Dynamic Table Responsive -->
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->

<!-- Footer -->
<?php include('common/footer.php'); ?>
<!-- END Footer -->
   