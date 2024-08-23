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
    <title>Horarios</title>

    <link rel="stylesheet" type="text/css" href="../../../style.css" tittle="style"/>
    <link rel="stylesheet" type="text/css" href="Horario.css" tittle="style"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />  <!-- Iconos -->

    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script src="../../../util/mysql-connector.js"></script>

    <script> 
        $(document).ready(function(){
            let table = new DataTable('#TablaHorarios', {
                "language": {
                    "lengthMenu": "Mostrar _MENU_ entradas",
                    "zeroRecords": "No se encontraron resultados",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ entradas",
                    "infoEmpty": "Mostrando 0 a 0 de 0 entradas",
                    "infoFiltered": "(filtrado de _MAX_ entradas totales)",
                    "search": "Buscar:",
                    "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    },
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando..."
                }
            });
        });
    </script>
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

        <div class="contenedor">
            <div class="section1">
                <div class="title"> <img class=" logoHorario" src="../../../imagenes/horarios.png" alt="logoHorarios"> Horarios </div>
            </div>
        </div>    
            
        <div class="section2">
            <form name="tabla">
            
                <?php
                    include_once '../../../util/Conexion_BD.php';
                    $objc =  new ConexionBD();
                    $cn = $objc->getConexionBD();
                    $sql3 = "SELECT a.N,a.codCurso,b.nombreCurso AS Curso , CONCAT(c.nombresDocente,' ',c.apellidosDocente) AS Docente, a.seccion , a.aula , a.Ciclo ,a.diaClases , a.horaInicio , a.horaFin FROM `HORARIO` a
                        INNER JOIN cursos b ON a.codCurso = b.codCurso
                        INNER JOIN docentes c ON a.idDocente = c.idDocente";
                    $rs3 = mysqli_query($cn,$sql3);
                ?>
                
                <div class="contenedor2">
                    <table id="TablaHorarios">
                        <thead>
                            <th id="columN">N</th>
                            <th id="columCod">Código del Curso</th>
                            <th>Curso</th>
                            <th>Docente</th>
                            <th id="columSeccion">Sección</th>
                            <th id="columAula">Aula</th>
                            <th id="columCiclo">Ciclo</th>
                            <th id="columDia">Día</th>
                            <th id="columHoraI">Hora Inicio</th>
                            <th id="columHoraF">Hora Fin</th>
                        </thead>

                        <?php 
                            while($resultado = mysqli_fetch_array($rs3)){
                        ?>

                        <tr>
                            <td><?php echo $resultado['N']  ?> </td>
                            <td><?php echo $resultado['codCurso']  ?> </td>
                            <td><?php echo $resultado['Curso']  ?> </td>
                            <td><?php echo $resultado['Docente']  ?> </td>
                            <td><?php echo $resultado['seccion']  ?> </td>
                            <td><?php echo $resultado['aula']  ?> </td>
                            <td><?php echo $resultado['Ciclo']  ?> </td>
                            <td><?php echo $resultado['diaClases']  ?> </td>
                            <td><?php echo $resultado['horaInicio']  ?> </td>
                            <td><?php echo $resultado['horaFin']  ?> </td>
                        </tr>

                        <?php }?>

                    </table>
                </div>
            </form>
        </div>
    </main>
</body>
</html>