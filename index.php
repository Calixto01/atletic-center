
<?php


  session_start();
  if(isset($_SESSION["usuario"])){

    include "./layouts/head.php";
    head();

?>

  


<div class="text-black bg-white content-wrapper ">
<p class="text-black bg-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor iusto pariatur natus nobis ducimus cum fugit iure, omnis odio! Porro labore quisquam explicabo totam quo delectus repellat recusandae? Temporibus, impedit.</p>
        
</div>








<script src="resources/js/bootstrap.bundle.min.js"></script>
<script src="resources/js/jquery.min.js"></script>
<script src="resources/js/adminlte.min.js"></script>
<script src="resources/js/popper.min.js"></script>
<script src="resources/js/icons/all icons.js"></script>
<script src="resources/js/regular.js"></script>
<script src="resources/js/solid.js"></script>
<script src="resources/js/icons/fontawesome.js"></script>
<?php
  }
  else{
    header("location: login.php");
  }
?>

