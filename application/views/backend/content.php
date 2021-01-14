<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?=base_url('asset/img/favicon.png');?>" rel="icon">
  <link href="<?=base_url('asset/img/apple-touch-icon.png');?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="<?=base_url('asset/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700');?>" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?=base_url('asset/lib/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?=base_url('asset/lib/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
  <link href="<?=base_url('asset/lib/animate/animate.min.css');?>" rel="stylesheet">
  <link href="<?=base_url('asset/lib/ionicons/css/ionicons.min.css');?>" rel="stylesheet">
  <link href="<?=base_url('asset/lib/owlcarousel/assets/owl.carousel.min.css');?>" rel="stylesheet">
  <link href="<?=base_url('asset/lib/lightbox/css/lightbox.min.css');?>" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?=base_url('asset/css/style.css');?>" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

<?=isset($pesan) ? "<script>alert('".$pesan."');</script>" : "";?>
<div class="container-fluid">
 <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Menu Utama</li>
      </ol>
<div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">JADWAL MEETING</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?=site_url('backend/pelamar');?>">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">DEPARTEMEN</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?=site_url('backend/departemen');?>">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">ABSEN</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?=site_url('backend/absen');?>">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5">HASIL MEETING</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?=site_url('backend/hasil');?>">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
    
        <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="<?php echo base_url()?>asset/img/Logo-MRF.png" alt="Logo-MRF" width="50%" height="50%"></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>We are professional</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a href="#featured-services" class="btn-get-started scrollto">NEXT</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo base_url()?>asset/img/images.jpg" alt="" width="35%" height="20%"></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>At vero eos et accusamus</h2>
                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
                <a href="#featured-services" class="btn-get-started scrollto">NEXT</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo base_url()?>asset/img/about-mission.jpg" alt="" width="35%" height="20%"></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>At vero eos et accusamus</h2>
                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
                <a href="#featured-services" class="btn-get-started scrollto">NEXT</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo base_url()?>asset/img/intro-carousel/3.jpg" alt="" width="40%" height="150%" ></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Temporibus autem quibusdam</h2>
                
                <a href="#featured-services" class="btn-get-started scrollto">NEXT</a>
              </div>
            </div>
          </div>

          <
        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">
      </div>

  <!-- JavaScript Libraries -->
  <script src="<?=base_url('asset/lib/jquery/jquery.min.js');?>"></script>
  <script src="<?=base_url('asset/lib/jquery/jquery-migrate.min.js');?>"></script>
  <script src="<?=base_url('asset/lib/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
  <script src="<?=base_url('asset/lib/easing/easing.min.js');?>"></script>
  <script src="<?=base_url('asset/lib/superfish/hoverIntent.js');?>"></script>
  <script src="<?=base_url('asset/lib/superfish/superfish.min.js');?>"></script>
  <script src="<?=base_url('asset/lib/wow/wow.min.js');?>"></script>
  <script src="<?=base_url('asset/lib/waypoints/waypoints.min.js');?>"></script>
  <script src="<?=base_url('asset/lib/counterup/counterup.min.js');?>"></script>
  <script src="<?=base_url('asset/lib/owlcarousel/owl.carousel.min.js');?>"></script>
  <script src="<?=base_url('asset/lib/isotope/isotope.pkgd.min.js');?>"></script>
  <script src="<?=base_url('asset/lib/lightbox/js/lightbox.min.js');?>"></script>
  <script src="<?=base_url('asset/lib/touchSwipe/jquery.touchSwipe.min.js');?>"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?=base_url('asset/contactform/contactform.js');?>"></script>

  <!-- Template Main Javascript File -->
  <script src="<?=base_url('asset/js/main.js');?>"></script>
  </body>
</html>