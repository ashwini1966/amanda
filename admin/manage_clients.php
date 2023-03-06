    
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
              <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Clients</h1>
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
                Clients
              </h3>
            </div>
            <div class="block-content block-content-full">
              <!-- DataTables init on table by adding .js-dataTable-responsive class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-vcenter js-dataTable-responsive">
                  <thead>
                    <tr>
                      <th class="text-center" style="width: 80px;">#</th>
                      <th>Client Code</th>
                      <th>Client Name</th>
                      <th>City</th>
                      <th>State</th>
                      <th>Zip</th>
                      <th style="width: 15%;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center">1</td>
                      <td >568</td>
                      <td >Jack Estrada</td>
                      <td >Indore </td>
                      <td >MP </td>
                      <td >456021 </td>
                      <td>
                        <!-- <a href="#"><i class="fa fa-1x fa-pencil"></i></a> -->
                        <a href="#"><i class="fa fa-1x fa-trash"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">2</td>
                      <td >588</td>
                      <td >David Fuller</td>
                      <td >Indore </td>
                      <td >MP </td>
                      <td >456021 </td>
                      <td>
                        <!-- <a href="#"><i class="fa fa-1x fa-pencil"></i></a> -->
                        <a href="#"><i class="fa fa-1x fa-trash"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">3</td>
                      <td >868</td>
                      <td >Barbara Scott</td>
                      <td >Indore </td>
                      <td >MP </td>
                      <td >456021 </td>
                      <td>
                        <!-- <a href="#"><i class="fa fa-1x fa-pencil"></i></a> -->
                        <a href="#"><i class="fa fa-1x fa-trash"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">4</td>
                      <td >568</td>
                      <td >Betty Kelley</td>
                      <td >Indore </td>
                      <td >MP </td>
                      <td >456021 </td>
                      <td>
                        <!-- <a href="#"><i class="fa fa-1x fa-pencil"></i></a> -->
                        <a href="#"><i class="fa fa-1x fa-trash"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">5</td>
                      <td >588</td>
                      <td >Alice Moore</td>
                      <td >Indore </td>
                      <td >MP </td>
                      <td >456021 </td>
                      <td>
                        <!-- <a href="#"><i class="fa fa-1x fa-pencil"></i></a> -->
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
   