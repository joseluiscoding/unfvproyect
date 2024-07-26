<?php
require_once '../modelo/AdminDao.php';
require_once '../modelo/AdminBean.php';
$op = $_GET['op'];

switch ($op) {

case 1:                                                                            
      
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
    
}

header('Location:' . $pagina);                                                      //me redirecciona

?>