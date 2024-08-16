<?php
require_once '../modelo/HorarioDao.php';
require_once '../modelo/HorarioBean.php';
$op = $_GET['op'];

switch ($op) {

case 1:                                                                         //Registrar Docentes                
      
    $codCurso = $_GET['Curso'];                                          
    $idDocente = $_GET['idDocente'];  
    $escuela = $_GET['TipoEscuela'];
    $Ciclo = $_GET['Ciclo'];
    $aula = $_GET['Aula'];                                          
    $seccion = $_GET['Seccion'];  
    $diaClases = $_GET['diaSemana'];    
    $horaInicio = $_GET['HoraInicio'];  
    $horaFin = $_GET['HoraFin'];  

    $obj = new HorarioBean();                                                     
    $obj->setcodCurso($codCurso);                                          
    $obj->setIdDocente($idDocente);   
    $obj->setescuela($escuela);
    $obj->setCiclo($Ciclo);                                          
    $obj->setaula($aula);   
    $obj->setseccion($seccion);  
    $obj->setdiaClases($diaClases);                                          
    $obj->sethoraInicio($horaInicio); 
    $obj->sethoraFin($horaFin);  

    $objDao = new HorarioDao();                                              
    $objDao->guardarHorario($obj);
    
    $pagina = "../vista/Administrador/Horario/adminHorario.php";
    break;
    
// case 2:                                                                         //Actualizar Docentes

//     $id=$_GET["idDocente"];
//     $nombreDocentes=$_GET["Nombre"];
//     $apellidoDocentes=$_GET["Apellido"];
//     $correoDocentes=$_GET["Correo"];
    
//     $objDocentesBean=new DocentesBean();
    
//     $objDocentesBean->setIdDocente($id);
//     $objDocentesBean->setNombre($nombreDocentes);
//     $objDocentesBean->setApellido($apellidoDocentes);
//     $objDocentesBean->setCorreo($correoDocentes);
    
//     $objDocentesDao = new DocentesDao();  
//     $res=$objDocentesDao->ActualizarDocente($objDocentesBean);

//     if ($res==1) {
//         $men="Datos del docente actualizados";
//     }
//     else {
//         $men="Error al actualizar datos del docente";
//     }

//     $response["state"]=$men;
//     echo json_encode($response);

//     $pagina = "../vista/Administrador/Docentes/adminDocentes.php";
//     break;

case 3:                                                                         //Eliminar Docentes

    $N=$_GET["N"];
    $objHorarioBean=new HorarioBean();
    $objHorarioBean->setN($N);
    $objHorarioDao = new HorarioDao();   
    $res=$objDocentesDao->EliminarHorario($objHorarioBean);
    if ($res==1) {
        $men="Fila del horario eliminada correctamente";
    }
    else {
        $men="Error al eliminar la fila del horario ";
    }
    $response["state"]=$men;
    echo json_encode($response);
    
    $pagina = "../vista/Administrador/Horario/adminHorario.php";
    break;
}

header('Location:' . $pagina);                                                      //me redirecciona

?>