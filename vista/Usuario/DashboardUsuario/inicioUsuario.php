<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" /> <!-- Iconos -->
    <link rel="stylesheet" type="text/css" href="../../../style.css" title="style"/>
    <link rel="stylesheet" type="text/css" href="inicioUsuario.css" title="style"/>
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
                            <img src="https://scontent.flim23-1.fna.fbcdn.net/v/t39.30808-6/448641897_971185278346249_5320886863162453592_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeEYczA-zfwOs2-3r7K-qVCg8wtdc3li7zfzC11zeWLvNyPsCqT8oWM_WZo5kOVVC9W01Jdl4GXf_EsDtjUm7oCg&_nc_ohc=9YLpe71IgToQ7kNvgF1akCf&_nc_ht=scontent.flim23-1.fna&oh=00_AYAElod_1zteagrWPIVlcl_7G2Fe_6CWRtnP09MM6h02Eg&oe=66C5FDAE" alt="">
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
                            <img src="https://scontent.flim23-1.fna.fbcdn.net/v/t39.30808-6/448562920_971922181605892_6762276123879901962_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeGENsR6ksHvQlTFSiXJojO-gmgX0lwSmjyCaBfSXBKaPJVhUcbzsmzSiAL9vFoMNL-oXTGNCnL-RXPENTP6Gi6u&_nc_ohc=iwI6N1CQOlQQ7kNvgGvq4R5&_nc_ht=scontent.flim23-1.fna&oh=00_AYDOtYBiRw7mXMxAOv-agRuMwoh1RBcOpHahOkS18z2Tgw&oe=66C618AA" alt="">
                        </div>
                    </div>
            </article>          
        </section>
    </main>

    





</body>
</html>