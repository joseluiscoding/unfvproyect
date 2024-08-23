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
    <title>ActualizarHorarios</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />  <!-- Iconos -->
    <link rel="stylesheet" type="text/css" href="../../../style.css" title="style"/>
    <link rel="stylesheet" type="text/css" href="adminHorario.css" title="style"/>

    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script src="../../../util/mysql-connector.js"></script>

    <script> 
        $(document).ready(function(){
            let table = new DataTable('#TablaHorarios');

        }
        );
    </script>

    <?php
        include_once '../../../util/Conexion_BD.php';
        $objc =  new ConexionBD();
        $cn = $objc->getConexionBD();
        $sql = "SELECT * FROM docentes";
        $rs = mysqli_query($cn,$sql);
    ?>

    <?php
        include_once '../../../util/Conexion_BD.php';
        $objc =  new ConexionBD();
        $cn = $objc->getConexionBD();
        $sql2 = "SELECT * FROM cursos";
        $rs2 = mysqli_query($cn,$sql2);
    ?>


    <?php  $N = $_GET['N']  ?> 

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
                <div class="title"> <img class=" logoHorario" src="../../../imagenes/horarios.png" alt="logoHorarios"> Horarios </div>
                
                <form name="form">
                    <input type="hidden" name="op">
                    <input type="hidden" name="N" value="<?php echo $N ?>">    

                    <div class="form-group">
                        <span>Docente</span>
    
                        <select class="controls" name="idDocente">
                            <option value="" disabled selected>Seleccione un docente</option>
                            <?php
                                while ($row = mysqli_fetch_array($rs))
                                {
                                    $idDocente = $row ['idDocente'];
                                    $nombresDocente = $row ['nombresDocente'];
                                    $apellidosDocente = $row ['apellidosDocente'];
                                ?>
                                <option value="<?php echo $idDocente ?>"><?php echo $nombresDocente." ".$apellidosDocente;?> </option>
                                <?php
                                }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <span>Curso</span>
                        <select class="controls" name="Curso">
                            <option value="" disabled selected>Seleccione un curso</option>
                            <?php
                                while ($row = mysqli_fetch_array($rs2))
                                {
                                    $codCurso = $row ['codCurso'];
                                    $nombreCurso = $row ['nombreCurso'];
                                ?>
                                <option value="<?php echo $codCurso ?>"><?php echo $nombreCurso;?> </option>
                                <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <span>Escuela</span>
                        <select class="controls" name="TipoEscuela">
                            <option disabled selected="">Seleccione una opción</option>
                            <option value="Sistemas">Sistemas</option>
                            <option value="Industrial">Industrial</option>
                            <option value="Transporte">Transporte</option>
                            <option value="Agroindustrial">Agroindustrial</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <span>Ciclo</span>
                        <select class="controls" name="Ciclo">
                            <option disabled selected="">Seleccione una opción</option>
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                            <option value="IV">IV</option>
                            <option value="V">V</option>
                            <option value="VI">VI</option>
                            <option value="VII">VII</option>
                            <option value="VII">VII</option>
                            <option value="IX">IX</option>
                            <option value="X">X</option>
                        </select>
                    </div>
                    <div class="form-group" >
                        <span>Aula</span>
                        <input class="controls" type="text" id="Aula" name="Aula">
                    </div>
                    <div class="form-group">
                        <span>Sección</span>
                        <input class="controls" type="text" id="Seccion" name="Seccion">
                    </div>
                    <div class="form-group">
                        <span>Día de la Semana</span>
                        <select class="controls" name="diaSemana">
                            <option disabled selected="">Seleccione una opción</option>
                            <option value="Lunes">Lunes</option>
                            <option value="Martes">Martes</option>
                            <option value="Miercoles">Miércoles</option>
                            <option value="Jueves">Jueves</option>
                            <option value="Viernes">Viernes</option>
                            <option value="Sabado">Sábado</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <span>Hora Inicio</span>
                        <input class="controls" type="text" id="HoraInicio" name="HoraInicio">
                    </div>
                    <div class="form-group">
                        <span>Hora Fin</span>
                        <input class="controls" type="text" id="HoraFin" name="HoraFin">
                    </div>

                    <input class="boton" type="button" value="Actualizar" onclick="btnActualizarHorarios()">
                </form>

                <hr>
            </div>
        </div>

    </main>
</body>
</html>