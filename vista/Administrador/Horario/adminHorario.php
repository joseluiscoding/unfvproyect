<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminHoararios</title>

    <link rel="stylesheet" type="text/css" href="../../../style.css" title="style"/>
    <link rel="stylesheet" type="text/css" href="adminHorario.css" title="style"/>
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
       <div class="contenedor">
            <div class="section1">
                <div class="title"> <img class=" logoHorario" src="../../../imagenes/horarios.png" alt="logHorarios"> Horarios </div>
                <form name="form">
                    <input type="hidden" name="op">
                    <div class="form-group">
                        <span>Docente</span>
                        <input class="controls" type="text" name="" id="text" placeholder="Ingrese el Docente">
                    </div>
                    <div class="form-group">
                        <span>Curso</span>
                        <input class="controls" type="text" name="" id="text" placeholder="Ingrese el curso">
                    </div>
                    <div class="form-group">
                        <span>Aula</span>
                        <input class="controls" type="text" name="" id="text" placeholder="Ingrese Correo">
                    </div>
                    <div class="form-group">
                        <span>Sección</span>
                        <input class="controls" type="text" id="text" placeholder="Ingrese la Sección">
                    </div>
                    <div class="form-group">
                        <span>Día</span>
                        <input class="controls" type="text" id="text" placeholder="Ingrese el día de la semana">
                    </div>
                    <div class="form-group">
                        <span>Hora Inicio</span>
                        <input class="controls" type="text" id="text" placeholder="Ingrese la hora de inicio">
                    </div>
                    <div class="form-group">
                        <span>Hora Fin</span>
                        <input class="controls" type="text" id="text" placeholder="Ingrese la hora de fin">
                    </div>

                    <input class="boton" type="button" value="Guardar Horario" onclick="">
                </form>

                <hr>
            </div>
            
            <div class="section2">
                <form action="">
                    <div class="form-group">
                        <input class="filtrador" type="text" name="text" id="text" placeholder="Buscar">
                    </div>
                    <input class="boton" type="button" value="Eliminar" onclick="">
                </form>

            </div>
       </div>
    </main>
</body>
</html>