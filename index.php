<?php
error_reporting(E_ALL);
session_start();
$sid=$_SESSION["id"];
?>
<!DOCTYPE html>
<html>
  
  <head>
    
    <title>Default-Template</title>
    <?php include('includes/header.inc.php'); ?>
  
  </head>
  
  <body class="mdc-typography">
  	
  	<div class="col1">test</div>
  	<div class="col1">test2</div>
  
    <script type="text/javascript">
    window.mdc.autoInit();
    </script>

  </body>
  </html>