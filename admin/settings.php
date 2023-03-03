    
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
  <div class="block block-rounded">
    <ul class="nav nav-tabs nav-tabs-block" role="tablist">
      <li class="nav-item">
        <button class="nav-link active" id="btabs-animated-slideright-home-tab" data-bs-toggle="tab" data-bs-target="#btabs-animated-slideright-home" role="tab" aria-controls="btabs-animated-slideright-home" aria-selected="true">Update Profile</button>
      </li>
      <li class="nav-item">
        <button class="nav-link" id="btabs-animated-slideright-profile-tab" data-bs-toggle="tab" data-bs-target="#btabs-animated-slideright-profile" role="tab" aria-controls="btabs-animated-slideright-profile" aria-selected="false">Update Password</button>
      </li>
    </ul>
    <div class="block-content tab-content overflow-hidden">
      <div class="tab-pane fade fade-right show active" id="btabs-animated-slideright-home" role="tabpanel" aria-labelledby="btabs-animated-slideright-home-tab">
        <div class="">
          <!-- New Post -->
          <form action="#" method="POST" enctype="multipart/form-data" onsubmit="return false;">
            <div class="block">
              <div class="block-header block-header-default">
                <!-- <a class="btn btn-alt-secondary" href="#"> -->
                  <b>Edit Profile</b>
                <!-- </a> -->
                <div class="block-options">
                  
                </div>
              </div>
              <div class="block-content">
                <div class="row justify-content-center push">
                  <div class="col-md-10">
                    
                    <div class="mb-4">
                      <label class="form-label" for="dm-post-edit-title">Name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Enter a name.." value="name">
                    </div>

                    <div class="mb-4">
                      <label class="form-label" for="dm-post-edit-title">Email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Enter a email.." value="email@gmail.com">
                    </div>

                    <div class="mb-4">
                      <label class="form-label" for="dm-post-edit-title">Mobile Number</label>
                      <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter a phone.." value="89856565655">
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
      </div>
      <div class="tab-pane fade fade-right" id="btabs-animated-slideright-profile" role="tabpanel" aria-labelledby="btabs-animated-slideright-profile-tab">
        <div class="">
          <!-- New Post -->
          <form action="#" method="POST" enctype="multipart/form-data" onsubmit="return false;">
            <div class="block">
              <div class="block-header block-header-default">
                <!-- <a class="btn btn-alt-secondary" href="#"> -->
                  <b>Update Password</b>
                <!-- </a> -->
                <div class="block-options">
                  
                </div>
              </div>
              <div class="block-content">
                <div class="row justify-content-center push">
                  <div class="col-md-10">
                    
                    <div class="mb-4">
                      <label class="form-label" for="dm-post-edit-title">Current Password</label>
                      <input type="password" class="form-control" id="old_password" name="old_password" placeholder="Enter old password.." value="">
                    </div>

                    <div class="mb-4">
                      <label class="form-label" for="dm-post-edit-title">New Password</label>
                      <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Enter new password.." value="">
                    </div>

                    <div class="mb-4">
                      <label class="form-label" for="dm-post-edit-title">Confirm Password</label>
                      <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Enter confirm password.." value="">
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
      </div>
    </div>
  </div>
  <!-- END Quick Overview -->

</div>
<!-- END Page Content -->
</main>
<!-- END Main Container -->

<!-- Footer -->
<?php include('common/footer.php'); ?>
<!-- END Footer -->
   