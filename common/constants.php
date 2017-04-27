<?php
//Name: constants.php
//Task: Constats defined here
//Auth: Rohit Lakhanpal
//LMod: 25/04/2017

// Common Site Properties
$site_title="Schyndel Works ™"; // Site Title
$max_execution_time=5; // Set a time limit of 5 seconds for script execution

// Nav Properties
$nav_html = '<!-- Navigation --> <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"> <div class="container"> <div class="navbar-header"> <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="#">'.$site_title.'</a> </div> <div id="navbar" class="navbar-collapse collapse"> <ul class="nav navbar-nav"> <li><a href="/">Home</a></li> <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Auth<span class="caret"></span></a> <ul class="dropdown-menu"> <li><a href="/secure-basic">Basic auth</a></li> <li><a href="/secure-digest">Digest auth</a></li> </ul> </li> <li><a href="/deny-gif">Deny .gif</a></li> <li><a target="_blank" href="/info.php">PHP Info</a></li> <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SSI <span class="caret"></span></a> <ul class="dropdown-menu"> <li><a href="/ssi">Default document</a></li> <li role="separator" class="divider"></li> <li><a href="/ssi/index.shtml">index.shtml</a></li> <li><a href="/ssi/index.php">index.php</a></li> </ul> </li> </ul> <!--/.nav-collapse --> </div> </div> </nav>' ;

?>
<?php 

  // <!-- Navigation -->
  //   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  //       <div class="container">
  //           <div class="navbar-header">
  //               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
  //                   <span class="sr-only">Toggle navigation</span>
  //                   <span class="icon-bar"></span>
  //                   <span class="icon-bar"></span>
  //                   <span class="icon-bar"></span>
  //               </button>
  //               <a class="navbar-brand" href="#">'.$site_title.'</a>
  //           </div>
  //           <div id="navbar" class="navbar-collapse collapse">
  //               <ul class="nav navbar-nav">
  //                   <li><a href="/">Home</a></li>
  //                   <li class="dropdown">
  //                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Auth<span class="caret"></span></a>
  //                       <ul class="dropdown-menu">
  //                           <li><a href="/secure-basic">Basic auth</a></li>
  //                           <li><a href="/secure-digest">Digest auth</a></li>
  //                       </ul>
  //                   </li>
  //                   <li><a href="/deny-gif">Deny .gif</a></li>
  //                   <li><a target="_blank" href="/info.php">PHP Info</a></li>
  //                   <li class="dropdown">
  //                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SSI <span class="caret"></span></a>
  //                       <ul class="dropdown-menu">
  //                           <li><a href="/ssi">Default document</a></li>
  //                           <li role="separator" class="divider"></li>
  //                           <li><a href="/ssi/index.shtml">index.shtml</a></li>
  //                           <li><a href="/ssi/index.php">index.php</a></li>
  //                       </ul>
  //                   </li>
  //               </ul>
  //               <!--/.nav-collapse -->
  //           </div>
  //       </div>
  //   </nav>

  ?>