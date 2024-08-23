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
                <a class="sidebar__link-logo">
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

        <section class="title">
            <header class="header__tittle">
                Noticias y Comunicados
            </header>
        </section>


        <section class="post">
            <article class="post__article">
                <header class="post__header">
                    <section class="post__header-section">
                        <i class="post__header-icon fa-solid fa-circle-user"></i>
                        <section class="post__header-info">
                            <div class="post__header-info-title">
                                <h3 class="post__header-info-title-text">Facultad de Ingenieria e Informatica</h3>
                            </div>
                            <div class="post__header-info-details">
                                <span class="post__header-info-detail">Carla Mayta -</span>
                                <span class="post__header-info-detail">hace 3 días</span>
                            </div>
                        </section>
                    </section>
                        <p class="post__description">
                            Facultad de Ingenieria e Informatica 📢Nueva Master Class📢 Te gustaría
                            saber de: El éxito del desarrollo para potenciar tu carrera. 📍 Inscríbete aquí:
                        </p>
                </header>
                    <div class="post__image">
                        <div class="post__image--img">
                            <img src="https://scontent-lim1-1.xx.fbcdn.net/v/t39.30808-6/448562920_971922181605892_6762276123879901962_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeGJ71SgZywkiQXZipWVpzXsgmgX0lwSmjyCaBfSXBKaPBv4_q5TsEOpl0aWs42h2hgZpFj3xkaXZhqGf-TfzwsS&_nc_ohc=Ke5v7offlMUQ7kNvgFarUAn&_nc_ht=scontent-lim1-1.xx&oh=00_AYC6k5X2hoFnxlww-HYn6Iwq0T7gbpuYmzFWqaDqFIyjiA&oe=66CE01AA" alt="">
                        </div>
                    </div>
            </article>   
            
            <article class="post__article">
                <header class="post__header">
                    <section class="post__header-section"> 
                        <i class="post__header-icon fa-solid fa-circle-user"></i>
                        <section class="post__header-info">
                            <div class="post__header-info-title">
                                <h3 class="post__header-info-title-text">Facultad de Ingenieria e Informatica</h3>
                            </div>
                            <div class="post__header-info-details">
                                <span class="post__header-info-detail">Carla Mayta -</span>
                                <span class="post__header-info-detail">hace 3 días</span>
                            </div>
                        </section>
                    </section>
                        <p class="post__description">
                            Facultad de Ingenieria e Informatica 📢Nueva Master Class📢 Te gustaría
                            saber de: El éxito del desarrollo para potenciar tu carrera. 📍 Inscríbete aquí:
                        </p>
                </header>
                    <div class="post__image">
                        <div class="post__image--img">
                            <img src="https://scontent-lim1-1.xx.fbcdn.net/v/t39.30808-6/448458631_971922171605893_692218803948939125_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeEi9uZ7TRPCVC-7OvrqJ6bOVWkkJdHx8rFVaSQl0fHysSFKkcLN2DdNW_TS4YE0hRmAXZHbJYy00D1ynls0RgF4&_nc_ohc=IwXEtKGuZJsQ7kNvgGWifzU&_nc_ht=scontent-lim1-1.xx&oh=00_AYAPkyGTgDbd1qcqG0ZCeNiyDQJq_gz79eueNXsPEfT_bQ&oe=66CE06ED" alt="">
                        </div>
                    </div>
            </article>          
        </section>
    </main>
</body>
</html>