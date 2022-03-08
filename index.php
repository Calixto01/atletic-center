
<?php


  session_start();
  if(isset($_SESSION["usuario"])){

    include("layouts/head.php")

?>


<?php
  }
  else{
    header("location: login.php");
  }
?>