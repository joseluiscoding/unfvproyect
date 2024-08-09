<?php

require_once 'AdminBean.php';                                               //importo la direccion para usar metodos
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

    public function guardarCursos(AdminBean $objAdmin){
        try{
            $sql = "INSERT INTO cursos(codCurso, nombreCurso) VALUES('$objAdmin->CodCurso','$objAdmin->NombreCurso')";
            
            $objc=new ConexionBD();
            $cn=$objc->getConexionBD();
            $rs=mysqli_query($cn,$sql);
            mysqli_close($cn);
        }catch (Exception $e){

        }
        return $rs;
    }

    public function EliminarDocente(AdminBean $objAdmin){
        try {
            $sql="DELETE FROM docentes WHERE idDocente='$objAdmin->IdDocente';";
            $objc=new ConexionBD();
            $cn=$objc->getConexionBD();
            $rs=mysqli_query($cn,$sql);
            mysqli_close($cn);
        } catch (Exception $e) {
    
        }
        return $rs;
    }

}