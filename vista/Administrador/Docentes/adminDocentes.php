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
    <title>AdminDoncentes</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />  <!-- Iconos -->
    <link rel="stylesheet" type="text/css" href="../../../style.css" title="style"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css"><!-- Para el css de SweetAlert2 -->
    <link rel="stylesheet" href="adminDocentes.css">
    
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script src="../../../util/mysql-connector.js"></script>

    <script> 
        $(document).ready(function(){
            let table = new DataTable('#TablaDocentes', {
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

    <!-- Para el uso de SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                <div class="title"> <img class=" logoDocentes" src="../../../imagenes/teacher.png" alt="logDocentes"> Docentes </div>
                <form name="form">
                    <input type="hidden" name="op">
                        
                        <div class="form-group">
                            <span>Nombres</span>
                            <input class="controls" type="text" name="Nombre" placeholder="Ingrese Nombre" required>
                        </div>
                        <div class="form-group">
                            <span>Apellidos</span>
                            <input class="controls" type="text" name="Apellido" placeholder="Ingrese Apellido" required>
                        </div>
                        <div class="form-group">
                            <span>Correo</span>
                            <input class="controls" type="correo" name="Correo" placeholder="Ingrese Correo" required>
                        </div>
                        <div class="form-group">
                            <span>Foto</span>
                            <input class="controls" type="file" name="image" style="display: none" id="image" required>
                            <button>
                                <label for="image"> IMG </label>
                            </button>
                        </div>
                        
                    <button class="boton" onclick="btnGuardarDocentes()">Guardar</button>
                </form>
                <hr>
            </div>
        </div>

        <div class="section2">
            <form name="tabla">
                <input type="hidden" name="op">
                <input type="hidden" name="idDocente">
                
                <?php
                    include_once '../../../util/Conexion_BD.php';
                    $objc =  new ConexionBD();
                    $cn = $objc->getConexionBD();
                    $sql = "SELECT * FROM docentes";
                    $rs = mysqli_query($cn,$sql);
                ?>
            
                <div class="contenedor2">
                    <table id="TablaDocentes">
                        <thead>
                            <th>Id</th> 
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </thead>
                    
                        <?php 
                            while($resultado = mysqli_fetch_array($rs)){
                        ?>
                        <tr>
                            <td><?php echo $resultado['idDocente']  ?> </td>
                            <td><?php echo $resultado['nombresDocente']  ?> </td>
                            <td><?php echo $resultado['apellidosDocente']  ?> </td>
                            <td><?php echo $resultado['correoDocente']  ?> </td>                      <?php $link = "actualizarDocentes.php?idDocente=" . $resultado['idDocente'] . "&nombresDocente=" . urlencode($resultado['nombresDocente']) . "&apellidosDocente=" . urlencode($resultado['apellidosDocente']) . "&correoDocente=" . urlencode($resultado['correoDocente']);?>
                            <td><img src="../../../imagenes/BtnEditar.png" alt="btnEditar" height="28px" onclick="location.href='<?php echo $link ?>'"></td>
                            <td><img src="../../../imagenes/BtnEliminar.png" alt="btnEliminar" height="30px" onclick="btnEliminarDocente(<?php echo $resultado['idDocente']  ?>)"></td>
                        </tr>
                    
                        <?php }?>    
                    
                    </table>
                </div>
            </form>
        </div>
    </main>
    
</body>
</html>