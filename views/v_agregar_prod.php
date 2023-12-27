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
          <a class="nav-link" href="../">Cancelar</a>
        </li>
        
    </div>
  </div>
</nav>
    <h1 class="text-center mt-3">Agregar Producto</h1>
    <div class="container mb-5 pb-5 mt-5">
    <table class="table text-center">
        <thead>
            <tr>
            <th scope="col">Producto</th>
            <th scope="col">Categoria</th>
            <th scope="col">Marca</th>
            <th scope="col">Tamaño</th>
            <th scope="col">Precio Costo</th>
            <th scope="col">Precio</th>
            <th scope="col">Stock</th>
            </tr>
        </thead>
        <?php include "../model/conexion_bd.php"?>
        <tbody>
            <th scope="col"><input type="text" class="form-control" name="Producto1" placeholder="Producto"></th>
            <th scope="col">
            <select class="form-control" name="Categoria1">
                <?php
                    // Realizar una consulta SQL para obtener las categorías
                    $sql = "SELECT * FROM Categorias";
                    $result = $conexion->query($sql);

                    // Iterar sobre los resultados y generar opciones para el select
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['ID_Categoria'] . '">' . $row['Nombre_Categoria'] . '</option>';
                    }
                ?>
            </select>
            </th>
            <th scope="col">
                <select class="form-control" name="Marca1">
                    <?php
                        // Consulta SQL para obtener las marcas
                        $sqlMarcas = "SELECT ID_Marca, Nombre_Marca FROM Marcas";
                        $resultadoMarcas = $conexion->query($sqlMarcas);

                        // Mostrar las opciones del select de marcas
                        while ($filaMarca = $resultadoMarcas->fetch_assoc()) {
                            echo "<option value='" . $filaMarca['ID_Marca'] . "'>" . $filaMarca['Nombre_Marca'] . "</option>";
                        }
                    ?>
                </select>
            </th>
            <th scope="col"><input type="text" class="form-control" name="Tamaño1" placeholder="Tamaño"></th>
            <th scope="col"><input type="number" class="form-control" name="PrecioCosto1" placeholder="Precio Costo"></th>
            <th scope="col"><input type="number" class="form-control" name="Precio1" placeholder="Precio"></th>
            <th scope="col"><input type="number" class="form-control" name="Stock1" placeholder="Stock"></th>
        </tbody>
        <tbody>
            <th scope="col"><input type="text" class="form-control" name="Producto2" placeholder="Producto"></th>
            <th scope="col">
            <select class="form-control" name="Categoria2">
                <?php
                    // Realizar una consulta SQL para obtener las categorías
                    $sql = "SELECT * FROM Categorias";
                    $result = $conexion->query($sql);

                    // Iterar sobre los resultados y generar opciones para el select
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['ID_Categoria'] . '">' . $row['Nombre_Categoria'] . '</option>';
                    }
                ?>
            </select>
            </th>
            <th scope="col">
                <select class="form-control" name="Marca2">
                    <?php
                        // Consulta SQL para obtener las marcas
                        $sqlMarcas = "SELECT ID_Marca, Nombre_Marca FROM Marcas";
                        $resultadoMarcas = $conexion->query($sqlMarcas);

                        // Mostrar las opciones del select de marcas
                        while ($filaMarca = $resultadoMarcas->fetch_assoc()) {
                            echo "<option value='" . $filaMarca['ID_Marca'] . "'>" . $filaMarca['Nombre_Marca'] . "</option>";
                        }
                    ?>
                </select>
            </th>
            <th scope="col"><input type="text" class="form-control" name="Tamaño2" placeholder="Tamaño"></th>
            <th scope="col"><input type="number" class="form-control" name="PrecioCosto2" placeholder="Precio Costo"></th>
            <th scope="col"><input type="number" class="form-control" name="Precio2" placeholder="Precio"></th>
            <th scope="col"><input type="number" class="form-control" name="Stock2" placeholder="Stock"></th>
        </tbody>
        <tbody>
            <th scope="col"><input type="text" class="form-control" name="Producto3" placeholder="Producto"></th>
            <th scope="col">
            <select class="form-control" name="Categoria3">
                <?php
                    // Realizar una consulta SQL para obtener las categorías
                    $sql = "SELECT * FROM Categorias";
                    $result = $conexion->query($sql);

                    // Iterar sobre los resultados y generar opciones para el select
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['ID_Categoria'] . '">' . $row['Nombre_Categoria'] . '</option>';
                    }
                ?>
            </select>
            </th>
            <th scope="col">
                <select class="form-control" name="Marca3">
                    <?php
                        // Consulta SQL para obtener las marcas
                        $sqlMarcas = "SELECT ID_Marca, Nombre_Marca FROM Marcas";
                        $resultadoMarcas = $conexion->query($sqlMarcas);

                        // Mostrar las opciones del select de marcas
                        while ($filaMarca = $resultadoMarcas->fetch_assoc()) {
                            echo "<option value='" . $filaMarca['ID_Marca'] . "'>" . $filaMarca['Nombre_Marca'] . "</option>";
                        }
                    ?>
                </select>
            </th>
            <th scope="col"><input type="text" class="form-control" name="Tamaño3" placeholder="Tamaño"></th>
            <th scope="col"><input type="number" class="form-control" name="PrecioCosto3" placeholder="Precio Costo"></th>
            <th scope="col"><input type="number" class="form-control" name="Precio3" placeholder="Precio"></th>
            <th scope="col"><input type="number" class="form-control" name="Stock3" placeholder="Stock"></th>
        </tbody>
        <tbody>
            <th scope="col"><input type="text" class="form-control" name="Producto4" placeholder="Producto"></th>
            <th scope="col">
            <select class="form-control" name="Categoria4">
                <?php
                    // Realizar una consulta SQL para obtener las categorías
                    $sql = "SELECT * FROM Categorias";
                    $result = $conexion->query($sql);

                    // Iterar sobre los resultados y generar opciones para el select
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['ID_Categoria'] . '">' . $row['Nombre_Categoria'] . '</option>';
                    }
                ?>
            </select>
            </th>
            <th scope="col">
                <select class="form-control" name="Marca4">
                    <?php
                        // Consulta SQL para obtener las marcas
                        $sqlMarcas = "SELECT ID_Marca, Nombre_Marca FROM Marcas";
                        $resultadoMarcas = $conexion->query($sqlMarcas);

                        // Mostrar las opciones del select de marcas
                        while ($filaMarca = $resultadoMarcas->fetch_assoc()) {
                            echo "<option value='" . $filaMarca['ID_Marca'] . "'>" . $filaMarca['Nombre_Marca'] . "</option>";
                        }
                    ?>
                </select>
            </th>
            <th scope="col"><input type="text" class="form-control" name="Tamaño4" placeholder="Tamaño"></th>
            <th scope="col"><input type="number" class="form-control" name="PrecioCosto4" placeholder="Precio Costo"></th>
            <th scope="col"><input type="number" class="form-control" name="Precio4" placeholder="Precio"></th>
            <th scope="col"><input type="number" class="form-control" name="Stock4" placeholder="Stock"></th>
        </tbody>
        <tbody>
            <th scope="col"><input type="text" class="form-control" name="Producto5" placeholder="Producto"></th>
            <th scope="col">
            <select class="form-control" name="Categoria5">
                <?php
                    // Realizar una consulta SQL para obtener las categorías
                    $sql = "SELECT * FROM Categorias";
                    $result = $conexion->query($sql);

                    // Iterar sobre los resultados y generar opciones para el select
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['ID_Categoria'] . '">' . $row['Nombre_Categoria'] . '</option>';
                    }
                ?>
            </select>
            </th>
            <th scope="col">
                <select class="form-control" name="Marca5">
                    <?php
                        // Consulta SQL para obtener las marcas
                        $sqlMarcas = "SELECT ID_Marca, Nombre_Marca FROM Marcas";
                        $resultadoMarcas = $conexion->query($sqlMarcas);

                        // Mostrar las opciones del select de marcas
                        while ($filaMarca = $resultadoMarcas->fetch_assoc()) {
                            echo "<option value='" . $filaMarca['ID_Marca'] . "'>" . $filaMarca['Nombre_Marca'] . "</option>";
                        }
                    ?>
                </select>
            </th>
            <th scope="col"><input type="text" class="form-control" name="Tamaño5" placeholder="Tamaño"></th>
            <th scope="col"><input type="number" class="form-control" name="PrecioCosto5" placeholder="Precio Costo"></th>
            <th scope="col"><input type="number" class="form-control" name="Precio5" placeholder="Precio"></th>
            <th scope="col"><input type="number" class="form-control" name="Stock5" placeholder="Stock"></th>
        </tbody>
    </table>

    <script src="../js/agregarProd.js?v=1.1"></script>
    <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.2/dist/sweetalert2.all.min.js
"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</div>
</body>
</html>