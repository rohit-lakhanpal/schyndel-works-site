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
$page_description="This page serves as the home page for [".substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT']))."].";
    
?>



  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
      <?php echo $site_title; ?>
    </title>

    <!-- Bootstrap Core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="/assets/css/site.css" rel="stylesheet" />
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

  </body>
  </html>