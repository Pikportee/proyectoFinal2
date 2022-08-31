<?php include("resources.php");?>
<nav class="navbar navbar-expand-md">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost:3000/Php-comienzo/proyectoFinal2/web/">
      <picture><img src="./imagenes/1031947-compuser-logo.png" alt="logo" class="img-fluid" style="width:150px;"></picture>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost:3000/Php-comienzo/proyectoFinal2/web/sucursal.php">Sucursal</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#Monitores">Monitores</a></li>
            <li><a class="dropdown-item" href="#Notebooks">Notebooks</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#PC armadas">PC armadas</a></li>
          </ul>
        </li>
      </ul>
      <div class="buscador">
      <form class="d-flex" role="search" type="POST">
        <input class="form-control me-3" type="search" placeholder="Buscador" aria-label="Search" name="busqueda">
        <button class="btn btn-outline-success" type="submit" name="enviar">Buscar</button>
      </form>
      <?php

      if(isset($_POST['enviar'])){
        $busqueda = $_POST['busqueda'];

        $consulta = $conn->query("SELECT * FROM productos WHERE titulo LIKE '%$busqueda%'");
        while ($row = $consulta->fetch_array()) {
          header("Location: https://www.yoursite.com/new_index.php");
        }
      }

      ?>
      </div>
    </div>
  </div>
</nav>