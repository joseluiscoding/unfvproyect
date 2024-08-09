<?php
require_once '../modelo/CursosDao.php';
require_once '../modelo/CursosBean.php';
$op = $_GET['op'];

switch ($op) {
    
    case 1: 

        $CodCurso = $_GET['CodCurso'];                          //Añadir curso                                          
        $NombreCurso = $_GET['NombreCurso'];
        
        $obj = new CursosBean();                                                     
        $obj->setCodCurso($CodCurso);                                          
        $obj->setNombreCurso($NombreCurso);  
        
        $objDao = new CursosDao();                                              
        $objDao->guardarCursos($obj);
        $pagina = "../vista/Administrador/Cursos/adminCursos.php";
        break;
    
}

header('Location:' . $pagina);                                                      //me redirecciona