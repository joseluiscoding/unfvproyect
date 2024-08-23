<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header('Location: ../../../index.php');
        exit();
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Docente</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />  <!-- Iconos -->
    <link rel="stylesheet" type="text/css" href="../../../style.css" title="style"/>
    <link rel="stylesheet" href="adminDocentes.css">
    
    <?php  $idDocente = $_GET['idDocente']  ?>
    <?php  $nombresDocente = $_GET['nombresDocente']  ?>
    <?php  $apellidosDocente = $_GET['apellidosDocente']  ?>
    <?php  $correoDocente = $_GET['correoDocente']  ?>

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
                <div class="title"> <img class=" logoDocentes" src="../../../imagenes/teacher.png" alt="logDocentes"> Actualizar datos del Docente </div>
                
                <form name="form">
                    <input type="hidden" name="op">
                    <input type="hidden" name="idDocente" value="<?php echo $idDocente ?>">    
                    
                        <div class="form-group">
                            <span>Nombres</span>
                            <input class="controls" type="text" name="Nombre" value="<?php echo $nombresDocente ?>">
                        </div>
                        <div class="form-group">
                            <span>Apellidos</span>
                            <input class="controls" type="text" name="Apellido" value="<?php echo $apellidosDocente ?>">
                        </div>
                        <div class="form-group">
                            <span>Correo</span>
                            <input class="controls" type="correo" name="Correo" value="<?php echo $correoDocente ?>">
                        </div>
                        <div class="form-group">
                            <span>Foto</span>
                            <input class="controls" type="file" name="image" style="display: none">
                            <button>
                                <label for="image"> IMG </label>
                            </button>
                        </div>
                        
                    <input class="boton" type="button" value="Actualizar" onclick="btnActualizarDocente()">
                </form>
                <hr>
            </div>
        </div>


    </main>
    
</body>
</html>