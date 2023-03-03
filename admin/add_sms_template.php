    
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
              <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">SMS Template</h1>
              <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="manage_sms_template.php">SMS Template</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add</li>
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
            <b>Add SMS Template</b>
          <!-- </a> -->
          <div class="block-options">
            
          </div>
        </div>
        <div class="block-content">
          <div class="row justify-content-center push">
            <div class="col-md-10">
              
              <div class="mb-4">
                <label class="form-label" for="dm-post-edit-title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title..">
              </div>

              <div class="mb-4">
                <label class="form-label" for="dm-post-edit-title">Description</label>
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
   