    
<?php include('common/sidebar.php'); ?>
<!-- END Sidebar -->

<!-- Header -->
<?php include('common/header.php'); ?>
<!-- END Header -->
<style type="text/css">
  .desc_box{
    padding: 0px 16px 0px 16px;
    border-radius: 10px;
  }
  /*map css*/
  body {
background-color: #f5f7fa;
}

.card.map-card .living-coral {
background-color: #fa7268;
}

.card.map-card .living-coral-text {
color: #fa7268;
}

.card.map-card .table th {
width: 2rem;
}

.card.map-card .pt-3-5 {
padding-top: 1.25rem;
}

.card.map-card .card-body {
position: absolute;
width: 100%;
height: 80%;
top: 20%;
overflow: hidden;
background-color: transparent;
-webkit-transition: all 1s;
-o-transition: all 1s;
transition: all 1s;
-webkit-border-radius: 0 !important;
border-radius: 0 !important;
}

.card.map-card .card-body.closed {
top: 100%;
height: 7.5rem;
margin-top: -7.5rem;
}

.card.map-card .map-container {
overflow: hidden;
padding-bottom: 56.25%;
position: relative;
height: 0;
}

.card.map-card .map-container iframe {
left: 0;
top: 0;
height: 100%;
width: 100%;
position: absolute;
}

.card.map-card .button .btn-floating {
margin-top: -1.5rem;
}
</style>
      <!-- Main Container -->
      <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
              <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Manage Jobs Assignments</h1>
              <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="assigned_jobs.php">Jobs</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Assign Job</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
        <!-- END Hero -->

        

        <div class="content content-boxed">
            <div class="card py-2 desc_box">
              <a class="link-fx h4 mb-1 d-inline-block text-dark" href="be_pages_jobs_listing.html">
                Job ID - #89589648
              </a>
              <div class="fs-sm fw-semibold text-muted mb-2">
                Date Of Service - 02-15-2023
              </div>
              <div class="fs-sm text-muted mb-2">
                Client - Alliance Business Solutions
              </div>
              <p class="text-muted mb-2">
                7815 North Dale Mabry Highway ,Tampa ,Florida, 33614.
              </p>
              <div>
                <span class="badge bg-primary">Added To Jobber</span>
              </div>
            </div>

            <div style="margin-top: 10px;" >
              <div class="card desc_box">
                  <div class="card-body">
                      <form action="">
                          <div class="form-group row">
                              <div class="col-3">
                                  <div class="form-group">
                                      <label>Zip code or Address</label>
                                      <input type="text" class="form-control" name="zipcode" value="">
                                      <input type="hidden" class="form-control" name="serviceId" value="b0hpK0VKOW1OTEx3ODdTWHpZU2Njdz09">
                                  </div>
                              </div>

                              <div class="col-3">
                                  <div class="form-group">
                                      <label>Find all zipcodes within</label>
                                      <select class="form-control" name="distance" id="kt_select2_50">
                                          <option value=""> Please select</option>
                                      </select>
                                  </div>
                              </div>
                              
                              <div class="col-4">
                                  <div class="form-group">
                                      <label>Preferred Interpreter Qualifications</label>
                                      <select class="form-control" name="inter_qualifications" id="inter_qualifications">
                                          <option value="1"> Certified</option>
                                          <option value="9"> Pre-Certified</option>
                                          <option value="0"> No Preference</option>
                                      </select>
                                  </div>
                              </div>

                              <div class="col-2">
                                  <div class="form-group">
                                      <br>
                                      <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
            </div>

            <!-- show map -->
            <div class="card desc_box" style="margin-top: 10px;">
              <!-- map area -->
              <div class="container ">
                <section class="mx-auto my-5" style="">

                  <div class="card map-card">
                    <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
                      <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="card-body closed px-0">
                      <div class="button px-2 mt-3">
                        <a class="btn btn-floating btn-lg living-coral text-white float-end"
                          style="margin-right: .75rem;"><i class="fas fa-bicycle"></i></a>
                      </div>
                      <div class="bg-white px-4 pb-4 pt-3-5">
                        <h5 class="card-title h5 living-coral-text">Central Park Zoo</h5>
                        <div class="d-flex justify-content-between living-coral-text">
                          <h6 class="card-subtitle font-weight-light">A place to relax</h6>
                          <h6 class="font-small font-weight-light mt-n1">25 min</h6>
                        </div>
                        <hr>
                        <div
                          class="d-flex justify-content-between pt-2 mt-1 text-center text-uppercase living-coral-text">
                          <div>
                            <i class="fas fa-phone fa-lg mb-3"></i>
                            <p class="mb-0">Call</p>
                          </div>
                          <div>
                            <i class="fas fa-cat fa-lg mb-3"></i>
                            <p class="mb-0">Love</p>
                          </div>
                          <div>
                            <i class="far fa-grin-beam-sweat fa-lg mb-3"></i>
                            <p class="mb-0">Smile</p>
                          </div>
                        </div>
                        <hr>
                        <table class="table table-borderless">
                          <tbody>
                            <tr>
                              <th scope="row" class="px-0 pb-3 pt-2">
                                <i class="fas fa-map-marker-alt living-coral-text"></i>
                              </th>
                              <td class="pb-3 pt-2">East 64th Street, New York, NY 10021, US</td>
                            </tr>
                            <tr class="mt-2">
                              <th scope="row" class="px-0 pb-3 pt-2">
                                <i class="far fa-clock living-coral-text"></i>
                              </th>
                              <td class="pb-3 pt-2"><span class="deep-purple-text me-2"> Closed</span> Opens 10
                                AM
                              </td>
                            </tr>
                            <tr class="mt-2">
                              <th scope="row" class="px-0 pb-3 pt-2">
                                <i class="fas fa-cloud-moon living-coral-text"></i>
                              </th>
                              <td class="pb-3 pt-2">Sunny weather tomorrow</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>

                </section>
              </div>
            </div>

            <!-- Interpreter table -->
            <div class="card" style="margin-top: 10px;">
              <div class="card-header">
                <h4>Interpreter List</h4>
              </div>
              <div class="card-body" >
                <!-- show interpreter list -->
                <div class="table-responsive ">
                  <table class="table table-bordered table-striped table-vcenter js-dataTable-responsive">
                    <thead>
                      <tr>
                        <th class="text-center" style="width: 80px;">#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Zip</th>
                        <th style="width: 15%;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- Interpreter table -->

            <div style="margin-top: 10px;">

                <form action="#" method="POST">
                  <div class="block block-rounded">
                   
                    <div class="block-content block-content-full">
                      <h2 class="content-heading">Request Interpreter Form</h2>
                      <div class="row items-push">
                        <div class="col-lg-8 offset-lg-1">
                          <div class="mb-4">
                            <label class="form-label" for="post-title">Subject</label>
                            <input type="text" class="form-control" id="post-title" name="post-title">
                          </div>

                          <div class="mb-4">
                            <label class="form-label" for="post-type">Email Template</label>
                            <select class="js-select2 form-select" id="post-type" name="post-type" style="width: 100%;" data-placeholder="Choose Template..">
                              <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                              <option value="1">Full Time</option>
                              <option value="2">Freelance</option>
                              <option value="3">Part Time</option>
                              <option value="4">Internship</option>
                              <option value="5">Temporary</option>
                            </select>
                          </div>
                          <div class="mb-4">
                            <label class="form-label" for="post-category">Sms Template</label>
                            <select class="js-select2 form-select" id="post-category" name="post-category" style="width: 100%;" data-placeholder="Choose Template..">
                              <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                              <option value="1">Accounting</option>
                              <option value="2">Counseling</option>
                              <option value="3">Administration</option>
                              <option value="4">Human Resources</option>
                              <option value="5">IT and Computers</option>
                              <option value="6">Design</option>
                              <option value="7">Development</option>
                              <option value="8">Management</option>
                              <option value="9">Marketing</option>
                            </select>
                          </div>
                           <div class="mb-4">
                              <label class="form-label" for="apply-question4">Mail Body</label>
                              <textarea class="form-control" rows="4" id="apply-question4" name="apply-question4"></textarea>
                            </div>
                            <div class="mb-4">
                              <label class="form-label" for="apply-question5">SMS Body</label>
                              <textarea class="form-control" rows="4" id="apply-question5" name="apply-question5"></textarea>
                            </div>
                          
                        </div>
                      </div>
                    </div>
                    <!-- END Job Meta section -->

                    <!-- Submit Form -->
                    <div class="block-content block-content-full pt-0">
                      <div class="row mb-4">
                        <div class="col-lg-8 offset-lg-7">
                          <button type="submit" class="btn btn-alt-primary">
                            <i class="fa fa-plus opacity-50 me-1"></i> Request Send
                          </button>
                        </div>
                      </div>
                    </div>
                    <!-- END Submit Form -->
                  </div>
                </form>
            </div>

          </div>





      </main>
      <!-- END Main Container -->

<!-- Footer -->
<?php include('common/footer.php'); ?>
<!-- END Footer -->
   