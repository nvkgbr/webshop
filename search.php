<?php
require_once('include/database.php');
require('include/header.php');
?>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/sticky-footer-navbar.css" rel="stylesheet">
<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">Keresés</h1>
    <p class="lead">Ezt írtad be: <?php echo $_POST["input"]; ?>.</p>
  </div>
</main>


<?php 
require('include/footer.php');
?>