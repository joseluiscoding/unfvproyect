<?php
require_once '../modelo/UsuarioDao.php';
require_once '../modelo/UsuarioBean.php';

session_start(); // para iniciar sesion

$op = $_GET['op'];

switch ($op) {

case 1:                                                                             //cuando op toma el valor de 1

    $correo_formulario = $_GET['correo'];                                           //se guarda el correo ingresado de index
    $contraseña_formulario = $_GET['contraseña'];                                   //se guarda la contraseña ingresada de index
    
    $obj = new UsuarioBean();                                                       //un objeto - instancia de una clase
    $obj->setCorreo($correo_formulario);                                            //envio el correo que ingrese en el index
    $obj->setContraseña($contraseña_formulario);                                    //envio la contraseña que ingrese en el index

    $objUserDao = new UsuarioDao();                                                 //creo otro objeto - instancia de una clase
    $tipoUsuario = $objUserDao->estaRegistradoUsuario($obj);                        //Almacena una variable booleana dependeiendo de si el correo cumple con la funcion esta registrado
    
    if ($tipoUsuario) {
        switch ($tipoUsuario) {
            case 'Administrador':
                $_SESSION['usuario'] = $correo_formulario;
                $pagina = "../vista/Administrador/DashboardAdmin/inicioAdministrar.php";
                break;
            case 'Alumno':
                $pagina = "../vista/Usuario/DashboardUsuario/inicioUsuario.php";
                break;
            case 'Docente':
                $pagina = "../vista/Usuario/DashboardUsuario/inicioUsuario.php";
                break;
        }
    } else {
        $pagina = "../index.php?error=1";                                          // Usuario o contraseña incorrectos
    }
    break;
}

header('Location:' . $pagina);                                                      //me redirecciona

?>