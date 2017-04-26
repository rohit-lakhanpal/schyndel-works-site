<?php
//Name: IO.php
//Task: do some disk-intensive operations
//Auth: Rohit Lakhanpal
//LMod: 25/04/2017

// Include relevant modules
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/common/constants.php";
include_once($path);

// Set a time limit of for script execution
set_time_limit($max_execution_time);

// Page Properties
$page_title=basename(__FILE__, '.php').".php"; // File Name is the page header
$page_description="This page performs some disk-intensive operations.";

// Recursively list the number of txt files
for($i=0; $i<500; $i++)
{								        
    exec("find ~ -type f | grep txt");										    
}
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $site_title; ?></title>

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
                <p class="lead"><?php echo $page_description; ?></p>
                <ul class="list-unstyled">
                    <li>Max execution time was set to: <?php echo round($max_execution_time, 5); ?> second(s).</li>
                    <li>Script completed execution in: <?php echo round(microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"], 5); ?> second(s).</li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->   

</body>

</html>
