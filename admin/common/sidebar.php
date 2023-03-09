<!doctype html>
<html lang="en">
  <?php include('head.php'); ?>
  <body>
  
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">

<nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="bg-header-dark">
          <div class="content-header bg-white-5">
            <!-- Logo -->
            <a class="fw-semibold text-white tracking-wide" href="index.php">
              <img src="<?php echo base_url('./assets/images/logo-top.png') ?>" alt="logo" width="110">
            </a>
            <!-- END Logo -->

            <!-- Options -->
            <div>
              <!-- Toggle Sidebar Style -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
              <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');">
                <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
              </button>
              <!-- END Toggle Sidebar Style -->

              <!-- Dark Mode -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#dark-mode-toggler" data-class="far fa" onclick="Dashmix.layout('dark_mode_toggle');">
                <i class="far fa-moon" id="dark-mode-toggler"></i>
              </button>
              <!-- END Dark Mode -->

              <!-- Close Sidebar, Visible only on mobile screens -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_close">
                <i class="fa fa-times-circle"></i>
              </button>
              <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
          </div>
        </div>
        <!-- END Side Header -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
          <!-- Side Navigation -->
          <div class="content-side">
            <ul class="nav-main">
              <li class="nav-main-item">
                <a class="nav-main-link" href="<?php echo base_url('dashboard.php') ?>">
                  <i class="nav-main-link-icon fa fa-location-arrow"></i>
                  <span class="nav-main-link-name">Dashboard</span>
                  <!-- <span class="nav-main-link-badge badge rounded-pill bg-primary">8</span> -->
                </a>
              </li>
            
              <li class="nav-main-item">
                <a class="nav-main-link" href="<?php echo base_url('manage_clients.php') ?>">
                  <i class="nav-main-link-icon fa fa-user-friends"></i>
                  <span class="nav-main-link-name">Manage Clients</span>
                </a>
              </li>

              <li class="nav-main-item">
                <a class="nav-main-link" href="<?php echo base_url('manage_interpreter.php') ?>">
                  <i class="nav-main-link-icon fa fa-user-friends"></i>
                  <span class="nav-main-link-name">Manage Interpreters</span>
                </a>
              </li>

              <li class="nav-main-item">
                <a class="nav-main-link" href="<?php echo base_url('modules/job/manage_jobs.php') ?>">
                  <i class="nav-main-link-icon fa fa-border-all"></i>
                  <span class="nav-main-link-name">Jobs/Request</span>
                </a>
              </li>

              <li class="nav-main-item">
                <a class="nav-main-link" href="<?php echo base_url('modules/job/assigned_jobs.php') ?>">
                  <i class="nav-main-link-icon fa fa-border-all"></i>
                  <span class="nav-main-link-name">Job Assignments</span>
                </a>
              </li>

              <li class="nav-main-item">
                <a class="nav-main-link" href="<?php echo base_url('modules/job/job_calender.php') ?>">
                  <i class="nav-main-link-icon far fa-2x fa-calendar-days"></i>
                  <span class="nav-main-link-name">Job Schedule</span>
                </a>
              </li>

              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-vector-square"></i>
                  <span class="nav-main-link-name">Manage Templates</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="<?php echo base_url('modules/sms/manage_sms_template.php') ?>">
                      <span class="nav-main-link-name">SMS Templates</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="<?php echo base_url('modules/email/manage_email_template.php') ?>">
                      <span class="nav-main-link-name">Email Templates</span>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-main-item">
                <a class="nav-main-link" href="<?php echo base_url('settings.php') ?>">
                  <i class="nav-main-link-icon si si-settings fa-2x"></i>
                  <span class="nav-main-link-name">Settings</span>
                </a>
              </li>

            </ul>
          </div>
          <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
      </nav>