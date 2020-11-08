<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HESTIA</title>
    <!--Estilos-->
    <link rel="stylesheet" href="Vista/css/estilosLogin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!--FontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- SweetAlert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<div class="contenedor">
    <img src="Vista/assets/view1.jpg" class="container__fondo">
    <div class="container">
        <div class="row">
            <div class="col">
                <section class="wraper">
                    <img src="Vista/assets/view2.jpeg" class="card__img">
                    <form action="Login" method="POST" autocomplete="off" class="wraper__form">
                        <?php 
		                    if(isset($_GET["error"])){
			                    if ($_GET["error"]=="error1") {
				                    echo "<script> swal('Incorrecto', 'Contraseña incorrecta', 'error') </script>";
			                    }
			                    elseif($_GET["error"]=="error2"){
				                    echo "<script> swal('Incorrecto', 'Usuario no existe en la base de datos', 'error') </script>";
			                    }
                            }
                            if(isset($_GET["exito"])){
                                if ($_GET["exito"]=="exito1") {
                                    echo "<script> swal('Mail enviado', 'se ha enviado un mail con su informacion', 'success' );</script>";
                                }
                            }
		                ?>
                        <p class="wraper__title2">USER LOGIN</p>
                        <span class="wraper__icono">
                            <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                            <input class="wraper__form-input" type="text" placeholder="Documento" name="IDE" required>
                        </span>
                        <span class="wraper__icono2">
                            <input class="wraper__form-inputF" type="password" placeholder="Contraseña" name="passwordE" required>
                            <i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>
                        </span>
                        <div class="wraper__form-remember-me">
                            <a href="RecordarClave">Olvidé mi contraseña</a>
                        </div>
                        <button class="wraper__form-button">LOGIN</button>
                    </form>
                </section>  
            </div>
        </div>
    </div>
</div>  
</body>
</html>