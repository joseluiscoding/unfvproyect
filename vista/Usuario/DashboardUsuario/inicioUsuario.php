<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>

    <link rel="stylesheet" type="text/css" href="../../../style.css" title="style"/>
    <link rel="stylesheet" type="text/css" href="inicioUsuario.css" title="style"/>
</head>
<body>
    <header class="header">
        <img src="../../../imagenes/unfv-logo.png">
    </header>
    
    <nav class="navegador">
        <div class="opciones">
            <a href="../DashboardUsuario/inicioUsuario.php">Inicio</a>
        </div>
        <div class="opciones">
            <a href="../vistaHorario/Horario.php">Horarios</a>
        </div>
        <div class="opciones">
            <a href="../vistaDocentes/Docentes.php">Docentes</a>
        </div>

        <div class="logout" >
            <input class="button" value="Cerrar Sesión" onclick="location.href='../../../index.php'">
        </div>
    </nav>

    <main class="cuerpo">
        <div class="indicacion">
            <h1> Selecciona el área que desea modificar: </h1>
        </div>
        <div class="opcAdmin">
            <input class="boton" type="button" value="Docentes" >
            <input class="boton" type="button" value="Cursos">
            <input class="boton" type="button" value="Horarios">
        </div>
    </main>
</body>
</html>