<?php
require_once '../modelo/CursosDao.php';
require_once '../modelo/CursosBean.php';
$op = $_GET['op'];

switch ($op) {
    
    case 1: 

        $CodCurso = $_GET['CodCurso'];                                              //Añadir curso                                          
        $NombreCurso = $_GET['NombreCurso'];
        
        $obj = new CursosBean();                                                     
        $obj->setCodCurso($CodCurso);                                          
        $obj->setNombreCurso($NombreCurso);  
        
        $objDao = new CursosDao();                                              
        $objDao->guardarCursos($obj);
        $pagina = "../vista/Administrador/Cursos/adminCursos.php";
        break;
        
    case 2:                                                                         //Actualizar Curso

        $CodCurso = $_GET['CodCurso'];                                                                                
        $NombreCurso = $_GET['NombreCurso'];
        
        $obj = new CursosBean();
            
        $obj->setCodCurso($CodCurso);                                          
        $obj->setNombreCurso($NombreCurso);  
            
        $objDao = new CursosDao();  
        
        $res=$objDao->ActualizarCurso($obj);
        
            if ($res==1) {
                $men="Datos del Curso Actualizado";
            }
            else {
                $men="Error al actualizar datos del curso";
            }
        
            $response["state"]=$men;
            echo json_encode($response);
        
            $pagina = "../vista/Administrador/Cursos/adminCursos.php";
            break;
        
    case 3:                                                                         //Eliminar Curso
        
        $CodCurso = $_GET['codCurso'];                                                               
        
        $obj = new CursosBean();
            
        $obj->setCodCurso($CodCurso);                                          
            
        $objDao = new CursosDao();  
        
        $res=$objDao->EliminarCurso($obj);
            
        if ($res==1) {
                $men="Curso eliminado correctamente";
            }
            else {
                $men="Error al eliminar al curso";
            }
            $response["state"]=$men;
            echo json_encode($response);
            
            $pagina = "../vista/Administrador/Cursos/adminCursos.php";
            break;
        }
        
        header('Location:' . $pagina);                                                      //me redirecciona
        
        ?>