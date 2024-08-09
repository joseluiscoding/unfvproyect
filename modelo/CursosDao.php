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

}