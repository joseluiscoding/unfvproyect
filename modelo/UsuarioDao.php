<?php

require_once 'UsuarioBean.php';                                             //importo la direccion para usar metodos
require_once '../util/Conexion_BD.php';                                     //importo la direccion para usar metodos para la conexion a la base de datos

class UsuarioDao{
    public function estaRegistradoUsuario(UsuarioBean $usuobj){             //se esta que trae la informacion del correo y la contraseña 
        $objc = new ConexionBD();                                           //creo un objeto con la clase ConexionBD
        $con = $objc->getConexionBD();                                      //se crea una variable para saber si se pudo conectar a la base de datos
        $sql = "SELECT * FROM usuario WHERE BINARY correo='" .$usuobj->getCorreo()."' AND contraseña='" . $usuobj->getContraseña()."'";       //comando que se va a ejecutar en el sql y saber si hay valores
        $rs = mysqli_query($con,$sql);                                                                                                      //realiza la consulta con la inforamacion de si se pudo conectar a la BD y el comando a ejecutar

        if (mysqli_num_rows($rs) == 1) {                                                                                                    //busca en la tabla si coincide un valor
            $row = mysqli_fetch_assoc($rs);
            return $row['tipoUsuario'];
        } else {
            return false;
        }
    }

    public function AddUsers(UsuarioBean $objUsers){
        try {
            $sql="INSERT INTO usuario(tipoUsuario,nombresUsuario,apellidosUsuario,correo,contraseña) 
            VALUES('$objUsers->tipoUsuario','$objUsers->nombresUsuario','$objUsers->apellidosUsuario','$objUsers->correo','$objUsers->contraseña');";
            $objc=new ConexionBD();
            $cn=$objc->getConexionBD();
            $rs=mysqli_query($cn,$sql);
            mysqli_close($cn);
        } catch (Exception $e) {
    
        }
        return $rs;
    }

    public function ListUsers(){
        try {
            $sql="SELECT * FROM usuario;";
            $objc=new ConexionBD();
            $cn=$objc->getConexionBD();
            $rs=mysqli_query($cn,$sql);
            $list=array();
    
            while($row=mysqli_fetch_assoc($rs)){
                array_push($list,array('id'=>$row['id'],
                'tipoUsuario'=>$row['tipoUsuario'],
                'correo'=>$row['correo'],
                'contraseña'=>$row['contraseña'],
                'edad'=>$row['edad'],
                'codAlumno' => $row['codAlumno']));
            }
            mysqli_close($cn);
        } catch (Exception $e) {
    
        }
        return $list;
    }

    public function RemoveUsers(UsuarioBean  $objUsers){
        try {
            $sql="DELETE FROM usuario WHERE id='$objUsers->id';";
            $objc=new ConexionBD();
            $cn=$objc->getConexionBD();
            $rs=mysqli_query($cn,$sql);
            mysqli_close($cn);
        } catch (Exception $e) {
    
        }
        return $rs;
    }

    public function FilterUserId(UsuarioBean $objUsers){
        try {
            $sql="SELECT * FROM usuario where id='$objUsers->id';";
            $objc=new ConexionBD();
            $cn=$objc->getConexionBD();
            $rs=mysqli_query($cn,$sql);
            $list=array();
    
            while($row=mysqli_fetch_assoc($rs)){
                array_push($list,array(
                    'id'=>$row['id'],
                    'tipoUsuario'=>$row['tipoUsuario'],
                    'correo'=>$row['correo'],
                    'contraseña'=>$row['contraseña'],
                    'edad'=>$row['edad'],
                    'codAlumno' => $row['codAlumno']));
            }
            mysqli_close($cn);
        } catch (Exception $e) {
    
        }
        return $list;
    }

    public function FilterUserByEmail($correo){
        try {
            $sql = "SELECT * FROM usuario WHERE correo='$correo';";
            $objc = new ConexionBD();
            $cn = $objc->getConexionBD();
            $rs = mysqli_query($cn, $sql);
            $list = array();

            while ($row = mysqli_fetch_assoc($rs)) {
                array_push($list, array(
                    'id' => $row['id'],
                    'tipoUsuario' => $row['tipoUsuario'],
                    'nombresUsuario' => $row['nombresUsuario'],
                    'apellidosUsuario' => $row['apellidosUsuario'],
                    'correo' => $row['correo'],
                    'contraseña' => $row['contraseña'],
                    'edad' => $row['edad'],
                    'codAlumno' => $row['codAlumno'] 
                ));
            }
            mysqli_close($cn);
        } catch (Exception $e) {
           
        }
        return $list;
    }
}

?>