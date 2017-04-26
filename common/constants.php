<?php
//Name: constants.php
//Task: Constats defined here
//Auth: Rohit Lakhanpal
//LMod: 25/04/2017

// Common Site Properties
$site_title="Schyndel Works ™"; // Site Title
$max_execution_time=5; // Set a time limit of 5 seconds for script execution

// Nav Properties
$nav_html = '<!-- Fixed navbar --> <nav class="navbar navbar-default navbar-fixed-top"> <div class="container"> <div class="navbar-header"> <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="#">'.$site_title.'</a> </div> <div id="navbar" class="navbar-collapse collapse"> <ul class="nav navbar-nav"> <li><a href="/">Home</a></li> <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Auth<span class="caret"></span></a> <ul class="dropdown-menu"> <li><a href="/secure-basic">Basic auth</a></li> <li><a href="/secure-digest">Digest auth</a></li> </ul> </li> <li><a href="/deny-gif">Deny .gif</a></li> <li><a target="_blank" href="/info.php">PHP Info</a></li> <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SSI <span class="caret"></span></a> <ul class="dropdown-menu"> <li><a href="/ssi">Default document</a></li> <li role="separator" class="divider"></li> <li><a href="/ssi/index.html">index.html</a></li> <li><a href="/ssi/index.php">index.php</a></li> </ul> </li> </ul> <!--/.nav-collapse --> </div> </nav>' ;

?>
<?php 

//   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
//     <div class="container">
//       <!-- Brand and toggle get grouped for better mobile display -->
//       <div class="navbar-header">
//         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="/">'.$site_title.'</a> </div>
//       <!-- Collect the nav links, forms, and other content for toggling -->
//       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
//         <ul class="nav navbar-nav">
//           <li> <a href="/CPU.php">CPU.php</a> </li>
//           <li> <a href="/IO.php">IO.php</a> </li>
//         </ul>
//       </div>
//       <!-- /.navbar-collapse -->
//     </div>
//     <!-- /.container -->


//   </nav>

//   <!-- Fixed navbar -->
//   <nav class="navbar navbar-default navbar-fixed-top">
//     <div class="container">
//       <div class="navbar-header">
//         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
//           <span class="sr-only">Toggle navigation</span>
//           <span class="icon-bar"></span>
//           <span class="icon-bar"></span>
//           <span class="icon-bar"></span>
//         </button>
//         <a class="navbar-brand" href="#">'.$site_title.'</a>
//       </div>
//       <div id="navbar" class="navbar-collapse collapse">
//         <ul class="nav navbar-nav">
//           <li><a href="/">Home</a></li>
//           <li class="dropdown">
//             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Auth<span class="caret"></span></a>
//             <ul class="dropdown-menu">
//               <li><a href="/secure-basic">Basic auth</a></li>
//               <li><a href="/secure-digest">Digest auth</a></li>
//             </ul>
//           </li>
//           <li><a href="/deny-gif">Deny .gif</a></li>
//           <li><a target="_blank" href="/info.php">PHP Info</a></li>
//           <li class="dropdown">
//             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SSI <span class="caret"></span></a>
//             <ul class="dropdown-menu">
//               <li><a href="/ssi">Default document</a></li>
//               <li role="separator" class="divider"></li>
//               <li><a href="/ssi/index.html">index.html</a></li>
//               <li><a href="/ssi/index.php">index.php</a></li>
//             </ul>
//           </li>
//         </ul>
//         <!--/.nav-collapse -->
//       </div>
//   </nav>

  ?>