<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    
    <link rel="stylesheet" href="style.css">

    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

    <link rel="stylesheet" type="text/css" href="../../../style.css" title="style"/>
    <link rel="stylesheet" type="text/css" href="inicioAdministrar.css" title="style"/>
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
    </main>





































    <!-- <header class="header">
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
        
    </main> -->
</body>
</html>