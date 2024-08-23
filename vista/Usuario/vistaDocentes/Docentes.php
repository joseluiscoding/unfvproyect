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
    <title>Docentes</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" /> <!-- Iconos -->
    <link rel="stylesheet" type="text/css" href="../../../style.css" tittle="style"/>
    <link rel="stylesheet" type="text/css" href="Docentes.css" tittle="style"/>
</head>
<body>
    <aside class="sidebar">
        <ul class="sidebar__list">
            <li class="sidebar__item">
                <a class="sidebar__link-logo">
                    <img src="../../../imagenes/unfv-logo.png" alt="logo">
                </a>
            </li>
            <li class="sidebar__item">
                <a class="sidebar__link" href="../DashboardUsuario/inicioUsuario.php">
                    <i class="sidebar__icon fa-solid fa-house"></i>
                    <span class="sidebar__text">Inicio</span>
                </a>
            </li>
            <li class="sidebar__item">
                <a class="sidebar__link" href="../vistaDocentes/Docentes.php">
                    <i class="sidebar__icon fa-solid fa-chalkboard-user"></i>
                    <span class="sidebar__text">Docentes</span>
                </a>
            </li>
            <li class="sidebar__item">
                <a class="sidebar__link" href="../vistaHorario/Horario.php">
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

        <div id="buscador"><input class="busqueda" name="txtbuscador" type="text" placeholder="Buscar"></div>
        <div id="contenedor">
            <section class="seccionuno">
                    <div id="caja">
                        <img class="img-center" src="../../../imagenes/modelo.png">
                        <div>
                        <p id="principal">Nombre nombre,<br>APELLIDO APELLIDO</br></p>
                        <p id="principal"><b>Correo</b></p>
                        <p id="sub">correo@gmail.com</p>
                        <p id="principal"><b>Curso que Dicta</b></p>
                        <p id="sub">Curso 1<br>Curso2<br></p>
                        </div>
                    </div>
                    <div id="caja">
                        <img class="img-center" src="../../../imagenes/modelo.png">
                        <div>
                        <p id="principal">Nombre nombre,<br>APELLIDO APELLIDO</br></p>
                        <p id="principal"><b>Correo</b></p>
                        <p id="sub">correo@gmail.com</p>
                        <p id="principal"><b>Curso que Dicta</b></p>
                        <p id="sub">Curso 1<br>Curso2<br></p>
                        </div>
                    </div>
                    <div id="caja">
                        <img class="img-center" src="../../../imagenes/modelo.png">
                        <div>
                        <p id="principal">Nombre nombre,<br>APELLIDO APELLIDO</br></p>
                        <p id="principal"><b>Correo</b></p>
                        <p id="sub">correo@gmail.com</p>
                        <p id="principal"><b>Curso que Dicta</b></p>
                        <p id="sub">Curso 1<br>Curso2<br></p>
                        </div>
                    </div>                
            </section>
            <section class="seccionuno">
                <div id="caja">
                    <img class="img-center" src="../../../imagenes/modelo.png">
                    <div>
                    <p id="principal">Nombre nombre,<br>APELLIDO APELLIDO</br></p>
                    <p id="principal"><b>Correo</b></p>
                    <p id="sub">correo@gmail.com</p>
                    <p id="principal"><b>Curso que Dicta</b></p>
                    <p id="sub">Curso 1<br>Curso2<br></p>
                    </div>
                </div>
                <div id="caja">
                    <img class="img-center" src="../../../imagenes/modelo.png">
                    <div>
                    <p id="principal">Nombre nombre,<br>APELLIDO APELLIDO</br></p>
                    <p id="principal"><b>Correo</b></p>
                    <p id="sub">correo@gmail.com</p>
                    <p id="principal"><b>Curso que Dicta</b></p>
                    <p id="sub">Curso 1<br>Curso2<br></p>
                    </div>
                </div>
                <div id="caja">
                    <img class="img-center" src="../../../imagenes/modelo.png">
                    <div>
                    <p id="principal">Nombre nombre,<br>APELLIDO APELLIDO</br></p>
                    <p id="principal"><b>Correo</b></p>
                    <p id="sub">correo@gmail.com</p>
                    <p id="principal"><b>Curso que Dicta</b></p>
                    <p id="sub">Curso 1<br>Curso2<br></p>
                    </div>
                </div>                
            </section>
        </div>
    </main>
</body>
</html>