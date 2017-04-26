<?php
//Name: index.php
//Task: Home page.
//Auth: Rohit Lakhanpal
//LMod: 25/04/2017

// Include relevant modules
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/common/constants.php";
include_once($path);


// Page Properties
$page_title=basename(__FILE__, '.php').".php"; // File Name is the page header
$page_description="This page serves as the home page for [".getcwd()."].";
    
?>



  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Home Page">
    <meta name="author" content="Schyndel Works">

    <title>
      <?php echo $site_title; ?>
    </title>

    <!-- Bootstrap Core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="/assets/css/site.css" rel="stylesheet" />

    <!-- Bootstrap JS -->
    <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
  </head>

  <body>

    <!-- Navigation -->
    <?php echo $nav_html; ?>

      <!-- Page Content -->
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1><?php echo $page_title; ?></h1>
            <p class="lead">
              <?php echo $page_description; ?>
            </p>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->

      <div class="album text-muted">
        <div class="container">

          <div class="row">
            <div class="card col-md-2 center-block">
              <img src="/assets/img/image-1.jpg" alt="Image 1 (jpg)" class="img-rounded" />
              <p class="card-text">It should resolve. (jpg)</p>
            </div>
            <div class="card  col-md-2 center-block">
              <img src="/assets/img/image-2.jpg" alt="Image 2 (jpg)" class="img-rounded" />
              <p class="card-text">It should resolve. (jpg)</p>
            </div>
            <div class="card  col-md-2 center-block">
              <img src="/assets/img/image-3.png" alt="Image 3 (png)" class="img-rounded" />
              <p class="card-text">It should resolve. (png)</p>
            </div>

            <div class="card  col-md-2 center-block">
              <img src="/assets/img/image-4.png" alt="Image 4 (png)" class="img-rounded" />
              <p class="card-text">It should resolve. (png)</p>
            </div>
            <div class="card  col-md-2 center-block">
              <img src="/assets/img/image-5.gif" alt="Image 5 (gif)" class="img-rounded" />
              <p class="card-text">It should <strong>not</strong> resolve. (gif)</p>
            </div>
            <div class="card  col-md-2 center-block">
              <img src="/assets/img/image-6.gif" alt="Image 6 (gif)" class="img-rounded" />
              <p class="card-text">It should <strong>not</strong> resolve. (gif)</p>
            </div>
          </div>
        </div>
      </div>

  </body>

  </html>