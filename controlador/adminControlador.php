<?php
require_once '../modelo/AdminDao.php';
require_once '../modelo/AdminBean.php';
$op = $_GET['op'];

switch ($op) {

case 1:                                                                             //cuando op toma el valor de 1
      
    $Nombre = $_GET['Nombre'];                                           //se guarda el correo ingresado de index
    $Apellido = $_GET['Apellido'];  
    $Correo = $_GET['Correo'];  

    $obj = new AdminBean();                                                       //un objeto - instancia de una clase
    $obj->setNombre($Nombre);                                           //envio el correo que ingrese en el index
    $obj->setApellido($Apellido);   
    $obj->setCorreo($Correo);  


    $objDao = new AdminDao();                                                 //creo otro objeto - instancia de una clase
    $objDao->guardarDocentes($obj);
    $pagina = "../vista/Administrador/Docentes/adminDocentes.php";
    
}

header('Location:' . $pagina);                                                      //me redirecciona

?>