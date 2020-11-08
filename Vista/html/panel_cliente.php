<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Clientes</title>
        <link href="Vista/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
<body class="sb-nav-fixed">
<!-- ...........................................NAVBAR................................................-->
    <?php require "Vista/html/navbar.php"; ?>
<!-- ..........................................CONTENIDO..............................................-->
<div id="layoutSidenav_content">
    <main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-wrapper">
                    <div class="mt-4">
                        <button class="btn btn-cyan" data-toggle="modal" data-target="#frmRegistrarCliente"><i class="fa fa-plus mr-1"></i>Clientes</button>
                    </div>
                    <hr>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable Clientes</div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="MostrarClientes" class="table table-bordered" width="100%">
                                            <thead> 
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Nombre</th>
                                                    <th>Apellido</th>
                                                    <th>Telefono</th>
                                                    <th>Celular</th>
                                                    <th>Correo</th>
                                                    <th>Direccion</th>
                                                    <th>Estado</th>
                                                    <th>Editar</th>
                                                    <th>Eliminar</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
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
<!-- ..........................................MODALS................................................-->
<?php require "Vista/html/RegistrarCliente.php"; ?>
<!-- Aqui Finaliza Script Data tables -->
<script type="text/javascript" src="Vista/js/clientes.js"></script>
<script type="text/javascript" src="Vista/js/validaciones.js"></script>

</body>
</html>