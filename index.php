<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
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
      <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0 nav-underline">
        <li class="nav-item">
          <a class="nav-link" href="views/v_agregar_prod.php">Agregar Producto</a>
        </li>
        <li class="nav-item">
          <input type="submit" class="nav-link" name="editarSeleccionados" value="Editar Seleccionados">
        </li>
        <li class="nav-item">
          <a id="eliminarSeleccionadosLink" class="nav-link" href="#">Eliminar Seleccionados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="views/v_lista_categorias.php">Categorias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="views/v_lista_marcas.php">Marcas</a>
        </li>
      </ul>
      <form class="d-flex" id="formBusqueda">
      <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" id="terminoBusqueda">
      <button class="btn btn-outline-success" type="submit">Buscar</button>

</form>
    </div>
  </div>
</nav>



<h1 class="text-center mt-3 mb-5">Lista de Productos</h1>
<div class="container">

<?php include "model/conexion_bd.php"?>
<div class="row">
<div class="col-3">
    <button class="btn btn-primary" id="seleccionarTodos" >Seleccionar Todos</button>
  </div>
  <div class="col-3">
  <button class="btn btn-primary" id="seleccionarProductosMarca">Seleccionar Con La Marca</button>
  
  </div>
  <div class="col-2">
  <select class="form-control text-center" id="seleccionarMarca"  name="Marca5">
  <option selected>Seleccione Marca</option>
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
  </div>  
</div>

                
<form id="editarFormulario" class="mb-5 pb-5" method="post" action="controllers/c_editar_prod.php">
    <table id="tabla1" class="table text-center">
    
        <thead>
            <tr>
                <th scope="col">Seleccionar</th>
                <th scope="col">Producto</th>
                <th scope="col">Marca</th>
                <th scope="col">Categoria</th>
                <th scope="col">Tamaño</th>
                <th scope="col">Precio Costo</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock</th>
            </tr>
        </thead>
        <tbody>
        <div id="resultadosBusqueda" class="mt-3"></div>
            <?php include "controllers/c_lista.php"; ?>
            
        </tbody>
        
    </table>
    <!-- Agrega un botón para enviar los datos seleccionados -->
    
    <input type="hidden" name="selectedProducts" id="selectedProducts">
</form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>

  // tu_script.js
  function buscarProductos() {
    const terminoBusqueda = document.getElementById('terminoBusqueda').value.toLowerCase();
    
    // Filtra las filas según el término de búsqueda
    const filas = document.querySelectorAll('.table tbody tr');

    filas.forEach(function (fila) {
    const nombreProducto = fila.querySelector('td:nth-child(2)').textContent.toLowerCase();
    const nombreMarca = fila.querySelector('td:nth-child(3)').textContent.toLowerCase();
    const nombreCategoria = fila.querySelector('td:nth-child(4)').textContent.toLowerCase();

    // Ajusta según la posición de la columna de nombres en tu tabla

    // Verifica si el nombre del producto, marca o categoría incluye el término de búsqueda y agrega o quita las clases 'mostrar' y 'ocultar' en consecuencia
    fila.classList.toggle('mostrar', nombreProducto.includes(terminoBusqueda) || nombreMarca.includes(terminoBusqueda) || nombreCategoria.includes(terminoBusqueda));
    fila.classList.toggle('ocultar', !nombreProducto.includes(terminoBusqueda) && !nombreMarca.includes(terminoBusqueda) && !nombreCategoria.includes(terminoBusqueda));
});
}


document.addEventListener('DOMContentLoaded', function () {
  const formBusqueda = document.getElementById('formBusqueda');

            formBusqueda.addEventListener('submit', function (event) {
                event.preventDefault(); // Evitar que el formulario se envíe de forma predeterminada

                buscarProductos(); // Llamar a la función buscarProductos
            });
    // Obtén referencia al botón y a los checkboxes de productos
    const botonSeleccionarTodos = document.getElementById('seleccionarTodos');
    const botonSeleccionarProductosMarca = document.getElementById('seleccionarProductosMarca');
    const checkboxesProductos = document.querySelectorAll('.form-check-input');

    // Agrega un evento al botón para seleccionar todos los checkboxes
    botonSeleccionarTodos.addEventListener('click', function () {
            let todosSeleccionados = true;

            checkboxesProductos.forEach(function (checkbox) {
                if (!checkbox.checked) {
                    todosSeleccionados = false;
                }
            });

            checkboxesProductos.forEach(function (checkbox) {
                checkbox.checked = !todosSeleccionados;
            });
        });
      // Agrega un evento al botón para seleccionar productos de la marca elegida
      botonSeleccionarProductosMarca.addEventListener('click', function () {
    const marcaSeleccionada = document.getElementById('seleccionarMarca').value;

    // Verificar si todos los checkboxes de la marca seleccionada están marcados
    const todosMarcados = Array.from(checkboxesProductos)
        .filter(checkbox => checkbox.getAttribute('data-marca') === marcaSeleccionada)
        .every(checkbox => checkbox.checked);

    // Alternar entre marcar y desmarcar según la condición
    checkboxesProductos.forEach(function (checkbox) {
        checkbox.checked = !todosMarcados && checkbox.getAttribute('data-marca') === marcaSeleccionada;
    });
});
    const checkboxes = document.querySelectorAll('.form-check-input');

document.querySelector('.nav-link[name="editarSeleccionados"]').addEventListener('click', function (event) {
    event.preventDefault();
    // Obtener los IDs de las filas seleccionadas
    const selectedProducts = Array.from(checkboxes)
        .filter(checkbox => checkbox.checked)
        .map(checkbox => checkbox.value);

        if (selectedProducts.length > 0) {
    // Imprimir los IDs en la consola
    console.log('IDs seleccionados:', selectedProducts);

    // Construir la cadena de consulta
    const queryString = 'selectedProducts=' + selectedProducts.join(',');

    // Obtener la URL actual
    const currentUrl = window.location.href;

    // Redireccionar a la URL del formulario con la cadena de consulta
    window.location.href = currentUrl + 'views/v_editar_prod.php?' + queryString;
} else {
        Swal.fire({
            title: 'No se han seleccionado productos para editar.',
        })
    }



    });
});
</script>
<script src="js/eliminarProd.js?v=1.0"></script>

<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.2/dist/sweetalert2.all.min.js
"></script>
</body>
</html>


