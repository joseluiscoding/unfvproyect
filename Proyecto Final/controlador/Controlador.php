<?php
require_once '../modelo/UsuarioDao.php';
require_once '../modelo/UsuarioBean.php';
$op = $_GET['op'];

switch ($op) {

case 1:

    $correo_formulario = $_GET['correo'];
    $contraseña_formulario = $_GET['contraseña'];                             //se guarda la información de index
    
    $obj = new UsuarioBean();
    $obj->setCorreo($correo_formulario);
    $obj->setContraseña($contraseña_formulario);

    $objUserDao = new UsuarioDao();
    $estaRegistado = $objUserDao->estaRegistradoUsuario($obj);                      //VARIABLE BOOLEANA 

    if($estaRegistado){
        $pagina="../vista/controllerAdministrar.html";                                 //salgo de la carpeta y me dirijo a esa dirrección
    }else{
        $pagina="../index.html";
    }
    break;

case 2:
    $pagina="../vista/pagina3.php";
    break;

case 3:
    $pagina="../index.php";
    break;

}

header('Location:' . $pagina);

?>