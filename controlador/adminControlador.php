<?php
require_once '../modelo/AdminDao.php';
require_once '../modelo/AdminBean.php';
$op = $_GET['op'];

switch ($op) {

case 1:                                                                         //Registrar Docentes                
      
    $Nombre = $_GET['Nombre'];                                          
    $Apellido = $_GET['Apellido'];  
    $Correo = $_GET['Correo'];  

    $obj = new AdminBean();                                                     
    $obj->setNombre($Nombre);                                          
    $obj->setApellido($Apellido);   
    $obj->setCorreo($Correo);  


    $objDao = new AdminDao();                                              
    $objDao->guardarDocentes($obj);
    $pagina = "../vista/Administrador/Docentes/adminDocentes.php";
    break;
    
case 2:

    $CodCurso = $_GET['CodCurso'];                                          
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

?>