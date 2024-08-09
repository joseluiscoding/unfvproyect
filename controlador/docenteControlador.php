<?php
require_once '../modelo/DocentesDao.php';
require_once '../modelo/DocentesBean.php';
$op = $_GET['op'];

switch ($op) {

case 1:                                                                         //Registrar Docentes                
      
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
    
case 2:
    $id=$_GET["idProduct"];
    $nameProduct=$_GET["Name"];
    $description=$_GET["Description"];
    $stock=$_GET["Stock"];
    $price=$_GET["Price"];
    $objProductBean=new DocentesBean();
    $objProductBean->setId($id);
    $objProductBean->setNameProduct($nameProduct);
    $objProductBean->setDescription($description);
    $objProductBean->setStock($stock);
    $objProductBean->setPrice($price);
    $res=$objProductDao->UpdateProducts($objProductBean);
    if ($res==1) {
        $men="Registration Correctly Updated";
    }
    else {
        $men="Error updating the registry";
    }
    $response["state"]=$men;
    echo json_encode($response);
    break;

case 3:
    $id=$_GET["idDocente"];
    $objDocentesBean=new DocentesBean();
    $objDocentesBean->setIdDocente($id);
    $objDocentesDao = new DocentesDao();   
    $res=$objDocentesDao->EliminarDocente($objDocentesBean);
    if ($res==1) {
        $men="Docente eliminado correctamente";
    }
    else {
        $men="Error al eliminar al docente";
    }
    $response["state"]=$men;
    echo json_encode($response);
    break;
}

header('Location:' . $pagina);                                                      //me redirecciona

?>