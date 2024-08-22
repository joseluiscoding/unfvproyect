<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    
    <link rel="stylesheet" type="text/css" href="login.css" title="style"/>

    <script src="../../util/mysql-connector.js"></script>
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
                <select id="selectUser" class="controls" name="TipoUsuario" required>
                    <option value="" disabled selected="">Seleccione una opción</option>
                    <option value="Docente">Docente</option>
                    <option value="Alumno">Alumno</option>
                </select>
                <h3> Nombres </h3>
                <input class="controls" type= "text" name="Nombres" id="nombres" placeholder="Ingrese sus Nombres" required >
                <h3> Apellidos </h3>
                <input class="controls" type= "text" name="Apellidos" id="apellidos" placeholder="Ingrese sus Apellidos" required >
                <h3> Correo </h3>
                <input class="controls" type= "email" name="Email" id="correo" placeholder="Ingrese su correo" required >
                <h3> Contraseña </h3>
                <input class="controls" type= "password" name="Password" id="contraseña" placeholder="Ingrese sus Apellidos"  required >

                <button class="boton" onclick="registrarUsuario()">Registrar</button>
            </form>
        </section>
    </div>

</body>
</html>