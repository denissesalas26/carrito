<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="plantilla/Admin/vertical/assets/css/bootstrap.min.css" type="text/css">
    <link href="plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
   // lenguaje en php
   include("include/menu.php");
   ?>


   <!--inicio contenido -->
   <div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h4>Registro de Clientes</h4>
                    <div class="card">
                        <div class="card-body">
                        <form action="operaciones/registrar_usuarios.php" method="POST">
                            <div class="form-group row">
                                <label class="col-lg-2 col-md-3 col-sm-12">DNI</label>
                                <input type="number" name="dni" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-md-3 col-sm-12">Apellidos y Nombres</label>
                                <input type="text" name="ap_nom" class="form-control col-lg-10 col-md-9 col-sm-12" required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-md-3 col-sm-12">Correo</label>
                                <input type="text" name="email" class="form-control col-lg-10 col-md-9 col-sm-12" required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-md-3 col-sm-12">teléfono</label>
                                <input type="number" name="telefono" class="form-control col-lg-4 col-md-4 col-sm-12">
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-md-3 col-sm-12">Dirección</label>
                                <input type="text" name="direccion" class="form-control col-lg-10 col-md-9 col-sm-12" required>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-lg2 col-md-3 col-sm-12"></label>
                                <button class="btn btn-primary" type="submit"></i>Guardar</button>

                            </div>
                            



                        </form>
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>
    </div>
   </div>







    <!--inicio contenido -->
     <!-- jQuery  -->
    <script src="plantilla/Admin/vertical/assets/js/jquery.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/metismenu.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/waves.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/simplebar.min.js"></script>
     <!-- App js -->
     <script src="plantilla/Admin/vertical/assets/js/theme.js"></script>

</body>
</html>