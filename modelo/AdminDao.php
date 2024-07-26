<?php

require_once 'AdminBean.php';                                             //importo la direccion para usar metodos
require_once '../util/Conexion_BD.php';                                     //importo la direccion para usar metodos para la conexion a la base de datos

class AdminDao{

    public function guardarDocentes(AdminBean $objAdmin){
        try{
            $sql = "INSERT INTO docentes(nombresDocente, apellidosDocente, correoDocente) VALUES('$objAdmin->Nombre','$objAdmin->Apellido','$objAdmin->Correo')";
            
            $objc=new ConexionBD();
            $cn=$objc->getConexionBD();
            $rs=mysqli_query($cn,$sql);
            mysqli_close($cn);
        }catch (Exception $e){

        }
        return $rs;
    }

}