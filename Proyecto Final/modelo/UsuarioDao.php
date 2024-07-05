<?php

require_once 'UsuarioBean.php';
require_once '../util/Conexion_BD.php';
class UsuarioDao{
    public function estaRegistradoUsuario(UsuarioBean $usuobj){
        $objc = new ConexionBD();
        $con=$objc->getConexionBD();
        $sql = "SELECT * FROM usuario WHERE BINARY correo='" .$usuobj->getCorreo()."' AND contraseña='" . $usuobj->getContraseña()."'";     //jala los valores de usuarioBean
        $rs = mysqli_query($con,$sql);                                                                                                      //realiza la consulta
        if(mysqli_num_rows($rs) > 0) {                                                                                                      //busca en la tabla si coincide un valor
            return true; 
        } else {
            return false;
        }
    }
    public function devolverTipoUsuario(UsuarioBean $usuobj){
        $objc = new ConexionBD();
        $con=$objc->getConexionBD();
        $sql = "SELECT * FROM usuario WHERE BINARY correo='" .$usuobj->getCorreo()."' AND contraseña='" . $usuobj->getContraseña()."'";
    }
}

?>