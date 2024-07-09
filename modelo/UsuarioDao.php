<?php

require_once 'UsuarioBean.php';                                             //importo la direccion para usar metodos
require_once '../util/Conexion_BD.php';                                     //importo la direccion para usar metodos para la conexion a la base de datos

class UsuarioDao{
    public function estaRegistradoUsuario(UsuarioBean $usuobj){             //se esta que trae la informacion del correo y la contraseña 
        $objc = new ConexionBD();                                           //creo un objeto con la clase ConexionBD
        $con = $objc->getConexionBD();                                      //se crea una variable para saber si se pudo conectar a la base de datos
        $sql = "SELECT * FROM usuario WHERE BINARY correo='" .$usuobj->getCorreo()."' AND contraseña='" . $usuobj->getContraseña()."'";       //comando que se va a ejecutar en el sql y saber si hay valores
        $rs = mysqli_query($con,$sql);                                                                                                      //realiza la consulta con la inforamacion de si se pudo conectar a la BD y el comando a ejecutar
        
        if(mysqli_num_rows($rs) == 1) {                                                                                                     //busca en la tabla si coincide un valor
            return true;                                                                                                                    //devuelve verdadero
        } else {
            return false;                                                                                                                   //devuelve falso
        }
    }
    
}

?>