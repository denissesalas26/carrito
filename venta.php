<?php
include("include/conexion.php");
session_start();
$_SESSION['productos']= array();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
    <link href="plantilla/Admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />
    <!-- Script obtenido desde CDN jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<style>
    .cantidad{
        width: 3em;
    }
</style>


</head>

<body>
    <?php
    // Lenguaje en php
    include("include/menu.php");
    




    ?>

    <!-- INICIO DE CONTENIDO -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h4>Registrar Nueva Venta</h4>

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <form action="">
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-md-2 col-sm-6">DNI:</label>
                                                <input type="number" name="dni" class="form-control col-lg-4 col-md-4 sm-12" required placeholder="dni cliente">
                                                <button class="btn btn-primary col-lg-2 col-md-2 col-sm-4">buscar</button>
                                            </div>


                                            <div class="form group row">
                                                <label class="col-lg-2 col-md-2 col-sm-6 ">Apellidos y Nombres:</label>
                                                <input type="text" id="nombres" class="form-control col-lg-4 col-md-4 col-sm-12">
                                            </div>
                                            <br>
                                            <div class="form group row">
                                                <label class="col-lg-2 col-md-2 col-sm-6">Usuario:</label>
                                                <select name="usuario" id="usuario" class="form-control col-lg-4 col-md-4 col-sm-12">
                                                    <option value="1">Usuario 1</option>
                                                    <option value="1">Usuario 2</option>
                                                    <option value="1">Usuario 3</option>
                                                </select>
                                            </div>
                                            <br>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-md-2 col-sm-12">Producto:</label>
                                                <input type="number" name="producto"  id="producto" class="form-control col-lg-4 col-md-4 sm-12" required placeholder="código producto">
                                                <button type="button"class="btn btn-primary col-lg-2 col-md-2 col-sm-4"
                                                onclick="agregar_producto();">Agregar</button>
                                            </div>

                                            <br>
                                            <div class="form group row">
                                                <label class="col-lg-2 col-md-2 col-sm-12 ">Fecha y Hora:</label>
                                                <label for="" class="form-control col-lg-4 col-md-4 col-sm-12 ">
                                                    
                                                    <?php 
                                                     date_default_timezone_set("America/Lima");
                                                    echo date("d-m-y h:i:s"); 
                                                    ?>
                                                </label>
                    
                                            </div>
                                        </form>

                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <table class="table table-bordered mb.0">
                                            <thead>
                                                <tr> 
                                                    <tr>
                                                    <th colspan="6" class="text-center">Productos</th>
                                                    </tr>
                                                    <th width="5">Nro</th>
                                                    <th width="60">Descripcion</th>
                                                    <th width="10">Cant.</th>
                                                    <th width="10">P.unit.</th>
                                                    <th width="5">Importe</th>
                                                </tr>
                                            </thead>
                                            <tbody id="contenido_tabla">
                                                <?php
                                               
                                               $array_productos = $_SESSION['productos'];
                                               foreach ($array_productos as $key => $value) {
                                                //key => id value =>cabtidad
                                                $consulta = "SELECT * FROM producto WHERE id='$key'";
                                                $ejecutar = mysqli_query($conexion,$consulta);
                                                $producto = mysqli_fetch_array($ejecutar);
                                               }

                                                ?>
                                                <tr>
                                                    <td>2</td>
                                                    <td>nombre producto</td>
                                                    <td> <input type="number" value="2" class="cantidad" onchange="actulizar_cantidad(id);"></td>
                                                    <td>s/. 50.00</td>
                                                    <td>s/. 100</td>
                                                    <td><button class="btn btn-danger" onclick="eliminar_producto"> X</button></td>
                                                </tr>

                                                
                                                <tr>
                                                    <td colspan="4" class="text-center">TOTAL</td>
                                                    <td>s/. 100</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN DE CONTENIDO -->


    <!-- jQuery  -->
    <script src="plantilla/Admin/vertical/assets/js/jquery.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/metismenu.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/waves.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/simplebar.min.js"></script>

    <!-- App js -->
    <script src="plantilla/Admin/vertical/assets/js/theme.js"></script>
    <script>
        function agregar_producto(){
            var codigo = $('#producto').val();
            $.ajax({
                type: "POST",
                url: "opraciones/agregar_producto.php",
                data:{cod:codigo},
                success: function(r){
                    $('#contenido_tabla').html(r);

                }
                
            })

        };
        function actualizar_cantidad(id){
            
        };
        function eliminar_producto(id){

        };

    </script>

</body>

</html>