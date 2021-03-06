<?php

function head(){



?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Atletic Center</title>
</head>

<body>
    <header>
        <nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
            <div class="container-fluid ">
              <!-- Left navbar links -->
              <ul class="navbar-nav">
                <li class="nav-item">
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                  <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                  <a href="contacto.php" class="nav-link">Contact</a>
                </li>

                <div class="dropdown">
                 <a class="nav-link dropdown-toggle dropdown-menu-left" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                   settings 
                 </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                   <li><a class="dropdown-item" href="#">Contact</a></li>
                   <li><a class="dropdown-item" href="/conexion/cerrarSesion.php" class="nav-link">Cerrar Sesión</a></li>
                  </ul>
                 </div>

                
              </ul>
              
            </div>
            
          </nav>
          
          <!-- /.navbar ---------------------------------------------------------------------------------->
          

          
        <aside class="main-sidebar container-fluid  sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="visualizacion.php" class="brand-link">
              <img src="resources/images/logo.jpg" alt="Admin Logo" class="brand-image img-circle elevation-3"
                   style="opacity: .8">
              <span class="brand-text font-weight-light">Atletic Center</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar container-fluid">
              <!-- Sidebar user panel (optional) -->
              <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                  <img src="resources/images/logo.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                  <a href="#" class="d-block">Alejandro Calixto</a>
                </div>
              </div>
              <!-- Sidebar Menu -->
              <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                  <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
                 
                  <li class="nav-item">
                    <a href="settings.php" class="nav-link">
                    <i class="fa-solid fa-gear nav-icon"></i>
                      <p>
                        Pruebas
                        <span class="right badge badge-success">fix</span>
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="usuarios.php" class="nav-link">
                      <i class="fa-regular fa-address-card nav-icon"></i>
                      <p>
                        Usuarios
                        <span class="right badge badge-info">info</span>
                      </p>
                    </a>
                  </li>
                </ul>
              </nav>
              <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
          </aside>
    </header>
  <?php
  }
  function foot()
  {


?>
<script src="resources/js/bootstrap.bundle.min.js"></script>
<script src="resources/js/jquery.min.js"></script>
<script src="resources/js/adminlte.min.js"></script>
<script src="resources/js/popper.min.js"></script>
<script src="resources/js/icons/all icons.js"></script>
<script src="resources/js/regular.js"></script>
<script src="resources/js/solid.js"></script>
<script src="resources/js/icons/fontawesome.js"></script>

</body>

</html>
<?php }