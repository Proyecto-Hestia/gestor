<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Mesero</title>
    <link href="Vista/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body class="sb-nav-fixed">
    <!-- .................................NAV.......................................--> 
        <?php require "Vista/html/navbar.php"; ?>
    <!-- ...........................................................................--> 

<div id="layoutSidenav_content">
<main>
<div class="container-fluid">
    <div class="row">   
        <div class="col-lg-5">
            <div class="product-wrapper">
                <hr>
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-table mr-1"></i>Pedido</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="MostrarPedido" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Detalle</th>
                                                <th>Estado</th>
                                                <th>Id pedido</th>
                                                <th>Id mesa</th>
                                                <th>Inicio</th>
                                                <th>Zona</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>   
        </div>
        <div class="col-lg-7">
            <div class="product-wrapper">
                <hr>
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-table mr-1"></i>Detalles del pedido</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="MostrarDetallePedido" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Producto</th>
                                                <th>Comentarios</th>
                                                <th>Sin ingredientes</th>
                                                <th>Cantidad</th>
                                                <th>Estado</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>   
        </div>
        
    </div>
    <?php require "Vista/html/footer.php"; ?>
</div>
</main>
</div>
    <?php require "Vista/html/RegistrarProductoEnPedido.php"; ?>
    <script type="text/javascript" src="Vista/js/mesero.js"></script>
    <!--<script type="text/javascript" src="Vista/js/validaciones.js"></script>-->
    </body>
</html>