<?php
  include('includes/init.inc.php'); // include the DOCTYPE and opening tags
  include('includes/functions.inc.php'); // functions
?>

<?php
  include('includes/head.inc.php');
  // include global css, javascript, end the head and open the body
?>

<?php

// Validate input and sanitize
// if ($_SERVER['REQUEST_METHOD']== "POST") {
//  $valid = true; //Your indicator for your condition, actually it depends on what you need. I am just used to this method.
//
//  if (empty($_POST["query"])) {
//     $error = "Please enter a query";
//     $( document ).click(function() {
//       $( "#search-form" ).effect( "shake");//, { direction: "left", times: 4, distance: 5}, 2600  );
//     });
//     $valid = false;
//  }

//if valid then redirect
//   if($valid){
//    header('Location: http://localhost/traffictracker/dashboard.php');
//    exit();
//   }
// }
?>
<div class="content">
  <div class="title">
    <h1 class="logo animated bounceInDown"><i class="fas fa-archive infinite pulse"></i> Trend Tracker</h1>
  </div>
  <div>
    <h3 id="sub-text" class="sub-text">View your trends across platforms in one place</h3>
  </div>
</div>

<form  id="search-form" name="search-form" action="index.php" method="post" onsubmit="return validate(this);">
  <div class="form-group">
    <div class="input-group mb-3" id="search-bar">
      <a href="#" class="btn btn-secondary" data-toggle="popover" data-placement="top" data-trigger="hover"
      data-content="Enter a topic to query and we'll send you its trend data.">
        <i class="fas fa-question"></i>
      </a>
      <input type="text" class="form-control" placeholder="Enter a topic"
      value="" name="query" id="query" aria-label="query" aria-describedby="basic-addon2">
      <div class="input-group-append">
        <a id="submit-button" tabindex="0" class="btn btn-success" role="button" data-toggle="popover" data-trigger="focus"
        data-content="Please enter a query." data-placement="top" type="submit" onclick='$("#search-form").submit()'>Search</a>
      </div>
    </div>
  </div>
  </div>
</form>
</div>

<?php include('includes/foot.inc.php');
?>
