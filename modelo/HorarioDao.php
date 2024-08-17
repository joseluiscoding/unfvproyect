<?php

require_once 'HorarioBean.php';                                                //importo la direccion para usar metodos
require_once '../util/Conexion_BD.php';                                         //importo la direccion para usar metodos para la conexion a la base de datos

class HorarioDao{

    public function guardarHorario(HorarioBean $objHorario){
        try{
            $sql = "INSERT INTO horario(codCurso, idDocente, escuela, Ciclo, aula, seccion, diaClases, horaInicio, horaFin) VALUES('$objHorario->codCurso','$objHorario->idDocente','$objHorario->escuela', '$objHorario->Ciclo', '$objHorario->aula','$objHorario->seccion','$objHorario->diaClases','$objHorario->horaInicio','$objHorario->horaFin')";

            $objc=new ConexionBD();
            $cn=$objc->getConexionBD();
            $rs=mysqli_query($cn,$sql);
            mysqli_close($cn);
        }catch (Exception $e){

        }
        return $rs;
    }

    public function ActualizarHorario(HorarioBean $objHorario){
        try {
            $sql="UPDATE horario SET codCurso='$objHorario->codCurso', idDocente='$objHorario->idDocente', escuela='$objHorario->escuela', Ciclo='$objHorario->Ciclo', aula='$objHorario->aula', seccion='$objHorario->seccion', diaClases='$objHorario->diaClases', horaInicio='$objHorario->horaInicio', horaFin='$objHorario->horaFin' WHERE N='$objHorario->N'";

            $objc=new ConexionBD();
            $cn=$objc->getConexionBD();
            $rs=mysqli_query($cn,$sql);
            mysqli_close($cn);
        } catch (Exception $e) {
    
        }
        return $rs;
    }

    public function EliminarHorario(HorarioBean $objHorario){
        try {
            $sql="DELETE FROM horario WHERE N='$objHorario->N';";
            $objc=new ConexionBD();
            $cn=$objc->getConexionBD();
            $rs=mysqli_query($cn,$sql);
            mysqli_close($cn);
        } catch (Exception $e) {
    
        }
        return $rs;
    }

}