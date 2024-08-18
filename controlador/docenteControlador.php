<?php
// Inicia el almacenamiento en búfer de la salida
ob_start();
header('Content-Type: application/json');

require_once '../modelo/DocentesDao.php';
require_once '../modelo/DocentesBean.php';

$op = $_GET['op'];

switch ($op) {
    case 1: // Registrar Docentes
        $Nombre = $_GET['Nombre'];
        $Apellido = $_GET['Apellido'];
        $Correo = $_GET['Correo'];

        $obj = new DocentesBean();
        $obj->setNombre($Nombre);
        $obj->setApellido($Apellido);
        $obj->setCorreo($Correo);

        $objDao = new DocentesDao();
        $objDao->guardarDocentes($obj);

        $pagina = "../vista/Administrador/Docentes/adminDocentes.php";
        break;

    case 2: // Actualizar Docentes
        $id = $_GET['idDocente'];
        $nombreDocentes = $_GET['Nombre'];
        $apellidoDocentes = $_GET['Apellido'];
        $correoDocentes = $_GET['Correo'];

        $objDocentesBean = new DocentesBean();
        $objDocentesBean->setIdDocente($id);
        $objDocentesBean->setNombre($nombreDocentes);
        $objDocentesBean->setApellido($apellidoDocentes);
        $objDocentesBean->setCorreo($correoDocentes);

        $objDocentesDao = new DocentesDao();
        $res = $objDocentesDao->ActualizarDocente($objDocentesBean);

        if ($res == 1) {
            $men = "Datos del docente actualizados";
        } else {
            $men = "Error al actualizar datos del docente";
        }

        $response["state"] = $men;
        echo json_encode($response);

        $pagina = "../vista/Administrador/Docentes/adminDocentes.php";
        break;

    case 3: // Eliminar Docentes
        $id = $_GET["idDocente"];
        $objDocentesBean = new DocentesBean();
        $objDocentesBean->setIdDocente($id);

        $objDocentesDao = new DocentesDao();
        $res = $objDocentesDao->EliminarDocente($objDocentesBean);
        if ($res == 1) {
            $men = "Docente eliminado correctamente";
        } else {
            $men = "Error al eliminar al docente";
        }
        $response["state"] = $men;
        echo json_encode($response);

        $pagina = "../vista/Administrador/Docentes/adminDocentes.php";
        break;

    case 4: // Obtener lista de Docentes
        $objDocentesDao = new DocentesDao();
        $docentes = $objDocentesDao->obtenerTodosLosDocentes();

        $response["docentes"] = $docentes;
        echo json_encode($response);
        exit;
}

if (!empty($pagina)) {
    header('Location: ' . $pagina);
}
?>
