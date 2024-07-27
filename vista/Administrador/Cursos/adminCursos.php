<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminCursos</title>

    <link rel="stylesheet" type="text/css" href="../../../style.css" title="style"/>
    <link rel="stylesheet" href="adminCursos.css">
</head>
<body>
    <header class="header">
        <img src="../../../imagenes/unfv-logo.png">
    </header>
    
    <nav class="navegador">
        <div class="opciones">
            <a href="../DashboardAdmin/inicioAdministrar.php">Inicio</a>
        </div>
        <div class="opciones">
            <a href="../Docentes/adminDocentes.php">Docentes</a>
        </div>
        <div class="opciones">
            <a href="../Cursos/adminCursos.php">Cursos</a>
        </div>
        <div class="opciones">
            <a href="../Horario/adminHorario.php">Horarios</a>
        </div>

        <div class="logout" >
            <input class="button" value="Cerrar Sesión" onclick="location.href='../../../index.php'">
        </div>
    </nav>
    
    <main class="cuerpo">
            <div class="section1">
                <div class="title"> <img class=" logoCursos" src="../../../imagenes/cursos.png" alt="logCursos"> Cursos </div>
                <form action="">
                    <div class="form-group">
                        <span>Cod Curso</span>
                        <input class="controls" type="text" name="text" id="text" placeholder="Ingrese el código del curso">
                    </div>
                    <div class="form-group">
                        <span>Nombre del Curso</span>
                        <input class="controls" type="text" name="text" id="text" placeholder="Ingrese el nombre del curso">
                    </div>   
                    <input class="boton" type="button" value="Guardar" onclick="">
                </form>
                <hr>
            </div>
                
            <div class="section2">
                <form action="">
                    <div class="form-group">
                        <input class="filtrador" type="text" name="text" id="text" placeholder="Filtrar por curso">
                    </div>
                        <input class="boton" type="button" value="Eliminar" onclick="">
                </form>

            </div>
    </main>
</body>
</html>