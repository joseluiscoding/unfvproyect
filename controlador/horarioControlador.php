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
    
    // if ($objDao->verificarHorarioSolapado($obj)) {
    //     $response["state"] = "Error: El horario se solapa con otro horario existente.";
    //     echo json_encode($response);
    //     exit(); // Detener la ejecución si se encuentra un solapamiento
    // }

    $objDao->guardarHorario($obj);
    
    $pagina = "../vista/Administrador/Horario/adminHorario.php";
    break;
    
case 2:                                                                         //Actualizar Docentes

    $N=$_GET["N"];
    $codCurso = $_GET['Curso'];                                          
    $idDocente = $_GET['idDocente'];  
    $escuela = $_GET['TipoEscuela'];
    $Ciclo = $_GET['Ciclo'];
    $aula = $_GET['Aula'];                                          
    $seccion = $_GET['Seccion'];  
    $diaClases = $_GET['diaSemana'];    
    $horaInicio = $_GET['HoraInicio'];  
    $horaFin = $_GET['HoraFin'];  
    
    $objHorarioBean=new HorarioBean();
    
    $objHorarioBean->setN($N);
    $objHorarioBean->setcodCurso($codCurso);                                          
    $objHorarioBean->setIdDocente($idDocente);   
    $objHorarioBean->setescuela($escuela);
    $objHorarioBean->setCiclo($Ciclo);                                          
    $objHorarioBean->setaula($aula);   
    $objHorarioBean->setseccion($seccion);  
    $objHorarioBean->setdiaClases($diaClases);                                          
    $objHorarioBean->sethoraInicio($horaInicio); 
    $objHorarioBean->sethoraFin($horaFin);  
    
    $objHorarioDao = new HorarioDao();  
    $res=$objHorarioDao->ActualizarHorario($objHorarioBean);

    if ($res==1) {
        $men="Datos del horario actualizados";
    }
    else {
        $men="Error al actualizar datos del horario";
    }

    $response["state"]=$men;
    echo json_encode($response);

    $pagina = "../vista/Administrador/Horario/adminHorario.php";
    break;

case 3:                                                                         //Eliminar Docentes

    $N=$_GET["N"];
    $objHorarioBean=new HorarioBean();
    
    $objHorarioBean->setN($N);
    $objHorarioDao = new HorarioDao();   
    $res=$objHorarioDao->EliminarHorario($objHorarioBean);
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

case 4: // Obtener Horarios por Escuela
    $escuela = $_GET['escuela'];

    $objHorarioDao = new HorarioDao();
    $horarios = $objHorarioDao->obtenerHorariosPorEscuela($escuela);

    $response["horarios"] = $horarios;
    echo json_encode($response);
    break;
}

header('Location:' . $pagina);                                                      //me redirecciona

?>