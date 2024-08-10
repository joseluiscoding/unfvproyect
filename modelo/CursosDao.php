<?php

require_once 'CursosBean.php';                                                  //importo la direccion para usar metodos
require_once '../util/Conexion_BD.php';                                         //importo la direccion para usar metodos para la conexion a la base de datos

class CursosDao{

    public function guardarCursos(CursosBean $objCursos){
        try{
            $sql = "INSERT INTO cursos(codCurso, nombreCurso) VALUES('$objCursos->CodCurso','$objCursos->NombreCurso')";
            
            $objc=new ConexionBD();
            $cn=$objc->getConexionBD();
            $rs=mysqli_query($cn,$sql);
            mysqli_close($cn);
        }catch (Exception $e){

        }
        return $rs;
    }

    public function ActualizarCurso(CursosBean $objCursos){
        try {
            $sql="UPDATE cursos SET codCurso='$objCursos->CodCurso', nombreCurso='$objCursos->NombreCurso' WHERE codCurso='$objCursos->CodCurso'";
            
            $objc=new ConexionBD();
            $cn=$objc->getConexionBD();
            $rs=mysqli_query($cn,$sql);
            mysqli_close($cn);
        } catch (Exception $e) {
    
        }
        return $rs;
    }

    public function EliminarCurso(CursosBean $objCursos){
        try {
            $sql="DELETE FROM cursos WHERE codCurso='$objCursos->CodCurso'";
        
            $objc=new ConexionBD();
            $cn=$objc->getConexionBD();
            $rs=mysqli_query($cn,$sql);
            mysqli_close($cn);
        } catch (Exception $e) {
    
        }
        return $rs;
    }

}