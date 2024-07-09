<?php
require_once '../modelo/UsuarioDao.php';
require_once '../modelo/UsuarioBean.php';
$op = $_GET['op'];

switch ($op) {

case 1:                                                                             //cuando op toma el valor de 1

    $correo_formulario = $_GET['correo'];                                           //se guarda el correo ingresado de index
    $contraseña_formulario = $_GET['contraseña'];                                   //se guarda la contraseña ingresada de index
    
    $obj = new UsuarioBean();                                                       //un objeto - instancia de una clase
    $obj->setCorreo($correo_formulario);                                            //envio el correo que ingrese en el index
    $obj->setContraseña($contraseña_formulario);                                    //envio la contraseña que ingrese en el index

    $objUserDao = new UsuarioDao();                                                 //creo otro objeto - instancia de una clase
    $estaRegistado = $objUserDao -> estaRegistradoUsuario($obj);                      //Almacena una variable booleana dependeiendo de si el correo cumple con la funcion esta registrado

    if($estaRegistado == 1){                                                                             //si es verdadero
        $pagina="../vista/Administrador/controllerAdministrar.html";                                //asigna esa direccion a la variable $pagina
    } else if ($estaRegistado == 0){
        $pagina = "../index.html?error=1";    
                                                                       //si es falso
    }
    break;

}

header('Location:' . $pagina);                                                      //me redirecciona

?>