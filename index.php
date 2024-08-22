<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link rel="stylesheet" type="text/css" href="vista/Login/login.css" title="style"/>

    <script src="util/mysql-connector.js"></script>
    <script src="vista/Login/alert.js"></script>
</head>
<body>
    
    <header class="header">
        <img src="imagenes/unfv-logo.png">
    </header>
    
    <div class="principal">
        <section class="section1">
            <div>
                <h1>¡Bienvenido a nuestra nueva plataforma!</h1>
                <p>En este espacio, podrás saber el horario y los docentes que enseñan en la Escuela Profesional de Ingenieria de Sistemas de la UNFV</p>
            </div>
        </section>
        
        <section class="section2">
            <form name="form" class="form-login">
                <input type="hidden" name="op">
                <h2>INICIAR SESIÓN</h2>
                <h3> Correo </h3>
                <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su correo" required>
                <h3> Contraseña </h3>
                <input class="controls" type= "password" name="contraseña" id="contraseña" placeholder="Ingrese su contraseña" required>
                <p class="textoAcuerdos"> Estoy de acuerdo con <a href="#">Términos y Condiciones</a> </p>
                <button class="boton" onclick="ingresar()"> Ingresar </button>
                <p class="crearCuenta"><a href="vista/Login/register.php">¿No tienes una cuenta?</a></p>
            </form>
        </section>
    </div>
</body>
</html>