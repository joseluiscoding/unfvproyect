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
                <div class="title"> <img class=" logoHorario" src="../../../imagenes/horarios.png" alt="logoHorarios"> Horarios </div>
                
                <form name="form">
                    <input type="hidden" name="op">
                    <div class="form-group">
                        <span>Docente</span>
                        <input class="controls" type="text" id="Docente" name="" >
                    </div>
                    <div class="form-group">
                        <span>Curso</span>
                        <input class="controls" type="text" id="Curso" name="" >
                    </div>
                    <div class="form-group">
                        <span>Aula</span>
                        <input class="controls" type="text" id="Aula" name="" >
                    </div>
                    <div class="form-group">
                        <span>Sección</span>
                        <input class="controls" type="text" id="Seccion">
                    </div>
                    <div class="form-group">
                        <span>Día de la Semana</span>
                        <input class="controls" type="text" id="Dia" >
                    </div>
                    <div class="form-group">
                        <span>Hora Inicio</span>
                        <input class="controls" type="text" id="HoraInicio" >
                    </div>
                    <div class="form-group">
                        <span>Hora Fin</span>
                        <input class="controls" type="text" id="HoraFin" >
                    </div>

                    <input class="boton" type="button" value="Guardar" onclick="">
                </form>

                <hr>
            </div>
            
       </div>
    </main>
</body>
</html>