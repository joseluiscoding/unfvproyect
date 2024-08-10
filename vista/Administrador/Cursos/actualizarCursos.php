<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Curso</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />  <!-- Iconos -->
    <link rel="stylesheet" type="text/css" href="../../../style.css" title="style"/>
    <link rel="stylesheet" href="adminCursos.css">
    
    <?php  $idDocente = $_GET['codCurso']  ?>
    <script src="../../../util/mysql-connector.js"></script>
</head>

<body>
    <aside class="sidebar">
        <ul class="sidebar__list">
            <li class="sidebar__item">
                <a class="sidebar__link-logo" href="">
                    <img src="../../../imagenes/unfv-logo.png" alt="logo">
                </a>
            </li>
            <li class="sidebar__item">
                <a class="sidebar__link" href="../DashboardAdmin/inicioAdministrar.php">
                    <i class="sidebar__icon fa-solid fa-house"></i>
                    <span class="sidebar__text">Inicio</span>
                </a>
            </li>
            <li class="sidebar__item">
                <a class="sidebar__link" href="../Docentes/adminDocentes.php">
                    <i class="sidebar__icon fa-solid fa-chalkboard-user"></i>
                    <span class="sidebar__text">Docentes</span>
                </a>
            </li>
            <li class="sidebar__item">
                <a class="sidebar__link" href="../Cursos/adminCursos.php">
                    <i class="sidebar__icon fa-solid fa-book"></i>
                    <span class="sidebar__text">Cursos</span>
                </a>
            </li>
            <li class="sidebar__item">
                <a class="sidebar__link" href="../Horario/adminHorario.php">
                    <i class="sidebar__icon fa-solid fa-calendar-days"></i>
                    <span class="sidebar__text">Horarios</span>
                </a>
            </li>
            <li class="sidebar__item">
                <a class="sidebar__link sidebar__link--logout" href="../../../index.php">
                    <i class="sidebar__icon fa-solid fa-right-from-bracket"></i>
                    <span class="sidebar__text">Logout</span>
                </a>
            </li>
        </ul>
    </aside>

    <main class="main">
        
        <header class="main__header">
            <h1 class="main__title"></h1>
            <button class="main__button">
                <i class="main__icon fa-solid fa-user"></i>
                <span class="main__text">Cuenta</span>
            </button>
        </header>

        <div class="contenedor">
            <div class="section1">
                <div class="title"> <img class=" logoCursos" src="../../../imagenes/cursos.png" alt="logCursos"> Editar Curso </div>
                    
                    <form name="form">
                    <input type="hidden" name="op">
                    <input type="hidden" name="codCurso" value="<?php echo $codCurso ?>">    
                    
                        <div class="form-group">
                            <span>Cod Curso</span>
                            <input class="controls" type="text" name="CodCurso" placeholder="Ingrese el código del curso">
                        </div>
                        <div class="form-group">
                            <span>Nombre del Curso</span>
                            <input class="controls" type="text" name="NombreCurso" placeholder="Ingrese el nombre del curso">
                        </div>   
                        
                        <input class="boton" type="button" value="Guardar" onclick="btnActualizarCursos()">
                    </form>
                <hr>
            </div>
        </div>

    </main>
    
</body>
</html>