<?php 
if (!defined('base_url')){
  define("base_url", "http://localhost/amanda/admin/");
}

if (!function_exists('base_url')) {
  function base_url($url){
    return base_url.$url;
  }
} 
// form present in header.php file
if(isset($_POST['logout'])){
  session_start();
  session_destroy();
  echo "<script>location='index.php'</script>";
}
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title> Unspoken Language Services </title>

    <meta name="description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/logo.ico') ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url('assets/images/logo.ico')?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/images/logo.ico')?>">
    <!-- END Icons -->

     <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/js/plugins/select2/css/select2.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/js/plugins/dropzone/min/dropzone.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/js/plugins/flatpickr/flatpickr.min.css') ?>">
    
    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="<?php echo base_url('assets/css/dashmix.min.css')?>">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->

    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <!-- END Stylesheets -->
  </head>