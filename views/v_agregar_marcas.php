<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
    <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.2/dist/sweetalert2.min.css
" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body data-bs-theme="dark">
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-bottom">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistema de Stock</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 nav-underline">
        <li class="nav-item">
        <button class="nav-link" name="btnagregar" >Guardar</button>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="v_lista_marcas.php">Cancelar</a>
        </li>
        
    </div>
  </div>
</nav>
    <h1 class="text-center mt-3">Agregar Marca</h1>
<div class="container mb-5 pb-5 mt-5 col-7">
    <table class="table text-center">
        <thead>
        </thead>
        <?php include "../model/conexion_bd.php"?>
        <tbody>
            <th scope="col"><input type="text" class="form-control" name="Marca1" placeholder="Marca"></th>
        </tbody>
        <tbody>
            <th scope="col"><input type="text" class="form-control" name="Marca2" placeholder="Marca"></th>
        </tbody>
        <tbody>
            <th scope="col"><input type="text" class="form-control" name="Marca3" placeholder="Marca"></th>
        </tbody>
        <tbody>
            <th scope="col"><input type="text" class="form-control" name="Marca4" placeholder="Marca"></th>
        </tbody>
        <tbody>
            <th scope="col"><input type="text" class="form-control" name="Marca5" placeholder="Marca"></th>
        </tbody>
    </table>
</div>
<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.2/dist/sweetalert2.all.min.js
"></script>
<script src="../js/agregarMar.js?v=1.1"></script>
</body>
</html>