<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" type="text/css" href="../../style.css" title="style"/>
    <link rel="stylesheet" type="text/css" href="login.css" title="style"/>

    <script src="util/mysql-connector.js"></script>
</head>
<body>
    
    <header class="header">
        <img src="../../imagenes/unfv-logo.png">
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
                <h2> CREAR CUENTA </h2>
                <h3> Tipo de Usuario: </h3>
                <select class="controls" name="tipoUsuario" id="">
                    <option disabled selected="">Seleccione una opción</option>
                    <option value="Docente">Docente</option>
                    <option value="Alumno">Alumno</option>
                </select>
                <h3> Nombres </h3>
                <input class="controls" type= "password" name="contraseña" id="contraseña" placeholder="Ingrese sus Nombres">
                <h3> Apellidos </h3>
                <input class="controls" type= "password" name="contraseña" id="contraseña" placeholder="Ingrese sus Apellidos">
                <h3> Correo </h3>
                <input class="controls" type= "email" name="correo" id="correo" placeholder="Ingrese su correo">
                <h3> Contraseña </h3>
                <input class="controls" type= "password" name="contraseña" id="contraseña" placeholder="Ingrese sus Apellidos">

                <input class="boton" type="button" value="Registrar" onclick="RegistrarUsuario()">
            </form>
        </section>
    </div>

</body>
</html>