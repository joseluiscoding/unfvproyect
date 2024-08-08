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

case 3:{
    $id=$_GET["idProduct"];
    $nameProduct=$_GET["Name"];
    $description=$_GET["Description"];
    $stock=$_GET["Stock"];
    $price=$_GET["Price"];
    $objProductBean=new ProductBean();
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
}
case 4:{
    $id=$_GET["idProduct"];
    $objProductBean=new ProductBean();
    $objProductBean->setId($id);
    $res=$objProductDao->RemoveProducts($objProductBean);
    if ($res==1) {
        $men="Record Correctly Deleted";
    }
    else {
        $men="Error when deleting the record";
    }
    $response["state"]=$men;
    echo json_encode($response);
    break;
}
}

header('Location:' . $pagina);                                                      //me redirecciona

?>