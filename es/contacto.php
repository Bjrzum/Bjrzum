<?php 
    //validar formulario
    if(isset($_POST['submit'])){
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $mensaje = $_POST['mensaje'];
        $error = '';

        if(!empty($nombre)){
            $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
        }else{
            $error .= 'Por favor ingresa un nombre <br/>';
        }

        if(!empty($email)){
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $error .= 'Por favor ingresa un email valido <br/>';
            }
        }else{
            $error .= 'Por favor ingresa un email <br/>';
        }

        if(!empty($mensaje)){
            $mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
        }else{
            $error .= 'Por favor ingresa un mensaje <br/>';
        }

        if(!$error){
            $enviar_a = 'damar24nnm@bjrzum.in';
            $asunto = 'Correo enviado desde mi pagina web';
            $mensaje_preparado = "De: $nombre \n";
            $mensaje_preparado .= "Email: $email \n";
            $mensaje_preparado .= "Mensaje: $mensaje";

            //mail($enviar_a, $asunto, $mensaje_preparado);
            $exito = mail($enviar_a, $asunto, $mensaje_preparado);
            if($exito){
                $resultado = '<span style="color:green;">Enviado correctamente</span> <br/>';
            }else{
                $resultado = '<span style="color:red;">Error al enviar</span>';
            }
             header('Location: contacto.php');
        }else{
            $resultado = $error;
        }
    }


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacta al Programador</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;600;700;800&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        /*'Dosis', sans-serif;*/
        * {
            font-family: 'Raleway', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
    <link rel="stylesheet" href="contacto.css">
</head>

<body>
    
    <div class="container__vid__background">
        <video src="video/vid__background.mp4" alt="video__background" autoplay="1" id="video__back"></video>
    </div>
    <header class="header">
        <div class="container__toBack">
            <a href="index.php" class="regresar">Regresar al Inicio</a>
        </div>
        <div class="container__name">
            <h1 class="name">
                BJRZUM<span class="name__pointer">.</span><span class="name__mod">i</span>N
            </h1>
        </div>
    </header>
    <section>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="contactoProgramador">
            <div class="title__form">
                <h2>Contacta al Programador</h2>
            </div>
            <div class="mensaje">
                <p class="subtitulo">
                    Para contactar al programador, por favor, rellene el siguiente formulario.
                </p>
            </div>
            <div class="container__error">
                <p class="error" style="color:red; font-weight:bold; font-size:16px;"><?php if(isset($resultado)){echo '<div class="non">' . $resultado . ' </div>';
                echo "<script>
                setTimeout(function(){
                   document.querySelector('.non').style.display = 'none';
                }, 5000);
                </script>";
                
                } ?></p>
            </div>
            <div class="container__form">
                <div class="container__input">
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
                </div>
                <div class="container__input">
                    <input type="email" name="email" id="email" placeholder="Correo Electrónico" required>
                </div>
                <div class="container__textarea">
                    <textarea name="mensaje" id="mensaje" placeholder="Mensaje" required></textarea>
                </div>
                <div class="container__submit">
                    <input type="submit" name="submit" value="Enviar">
                </div>
            </div>
        </form>
    </section>
    <footer class="footer">
        <div class="container__footer">
            <div class="container__links__footer">
                <a href="" class="link__footer"><i class="bi bi-github"></i></a>
                <a href="" class="link__footer"><i class="bi bi-globe2"></i></a>
                <a href="" class="link__footer"><i class="bi bi-instagram"></i></a>
                <a href="" class="link__footer"><i class="bi bi-person-workspace"></i></a>
            </div>
            <div class="container__copyright">
                <p class="copyright">
                    &copy; <?php echo date('Y'); ?> BJRZUM.iN | Todos los derechos reservados.
                </p>
            </div>
        </div>
    </footer>
    <script>
        var video = document.getElementById("video__back");
        video.muted = true;
        video.loop = true;
        video.play();
    </script>


    
</body>
</html>