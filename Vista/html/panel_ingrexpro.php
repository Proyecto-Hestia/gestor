<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ingredientes por Producto</title>
    <link href="Vista/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
    <!-- .................................NAV.......................................--> 
        <?php require "Vista/html/navbar.php"; ?>
    <!-- ...........................................................................--> 

    <div id="layoutSidenav_content">
    <main> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-wrapper">
                    <div class="mt-4">
                        <button class="btn btn-cyan" data-toggle="modal" data-target="#frmRegistrarIngrexpro">
                            <i class="fa fa-plus mr-1"></i> Ingrediente x Producto
                        </button>
                    </div>
                    <hr>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable Ingredientes por Producto</div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="MostrarIngrexpro" class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>ID de Ingrediente x Pedido</th>
                                                    <th>Id del Producto</th>
                                                    <th>Id del Ingrediente</th>
                                                    <th>Cantidad</th>
                                                    <th>Unidad</th>
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
    
<!--MODALS-->
    <?php require "Vista/html/RegistrarIngrexpro.php"; ?>
<!-- Aqui Finaliza Script Data tables -->
    <script type="text/javascript" src="Vista/js/ingrexpro.js"></script>
    <script type="text/javascript" src="Vista/js/validaciones.js"></script>

</body>
</html>