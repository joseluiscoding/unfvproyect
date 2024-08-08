<?php
require_once '../modelo/AdminDao.php';
require_once '../modelo/AdminBean.php';
$op = $_GET['op'];

switch ($op) {
    
    case 1: 

        $CodCurso = $_GET['CodCurso'];                          //Añadir curso                                          
        $NombreCurso = $_GET['NombreCurso'];
        
        $obj = new AdminBean();                                                     
        $obj->setCodCurso($CodCurso);                                          
        $obj->setNombreCurso($NombreCurso);  
        
        $objDao = new AdminDao();                                              
        $objDao->guardarCursos($obj);
        $pagina = "../vista/Administrador/Cursos/adminCursos.php";
        break;
    
}

header('Location:' . $pagina);                                                      //me redirecciona