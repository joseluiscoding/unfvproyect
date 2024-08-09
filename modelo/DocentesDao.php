<?php

require_once 'DocentesBean.php';                                                //importo la direccion para usar metodos
require_once '../util/Conexion_BD.php';                                         //importo la direccion para usar metodos para la conexion a la base de datos

class AdminDao{

    public function guardarDocentes(DocentesBean $objDocentes){
        try{
            $sql = "INSERT INTO docentes(nombresDocente, apellidosDocente, correoDocente) VALUES('$objDocentes->Nombre','$objDocentes->Apellido','$objDocentes->Correo')";
            
            $objc=new ConexionBD();
            $cn=$objc->getConexionBD();
            $rs=mysqli_query($cn,$sql);
            mysqli_close($cn);
        }catch (Exception $e){

        }
        return $rs;
    }

    public function EliminarDocente(DocentesBean $objDocentes){
        try {
            $sql="DELETE FROM docentes WHERE idDocente='$objDocentes->IdDocente';";
            $objc=new ConexionBD();
            $cn=$objc->getConexionBD();
            $rs=mysqli_query($cn,$sql);
            mysqli_close($cn);
        } catch (Exception $e) {
    
        }
        return $rs;
    }

}