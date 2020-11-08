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
                    <form  action="RecordarClave2" method="POST" autocomplete="off" class="wraper__form">
                    <?php 
		                if(isset($error)){
			                if($error=="error1"){
				                echo "<script> swal('Incorrecto', 'Usuario no existe en la base de datos, intente de nuevo', 'error') </script>";
			                }
		                }
		            ?>
                    <p class="wraper__title2">USER</p>
                    <div class="wraper__icono">
                        <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                        <input class="wraper__form-input" type="text" placeholder="Documento" id="IDE" name="IDE" required>
                    </div>
                    <input type="button" onclick="atras();" value="CANCELAR" class="wraper__form-button"></input>
                    <button type="submit" class="wraper__form-button">ENVIAR</button>
                </form>
                </section>  
            </div>
        </div>
    </div>
</div>  
</body>
</html>
<script>
    function atras(){
        window.history.back();
      //header("Location: index.php");
    }
</script>