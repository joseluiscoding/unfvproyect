<?php
require_once 'DocentesBean.php';
require_once '../util/Conexion_BD.php';

class DocentesDao {

    public function guardarDocentes(DocentesBean $objDocentes) {
        try {
            $sql = "INSERT INTO docentes (nombresDocente, apellidosDocente, correoDocente) 
                    VALUES ('{$objDocentes->Nombre}', '{$objDocentes->Apellido}', '{$objDocentes->Correo}')";
            $objCnx = new ConexionBD();
            $cn = $objCnx->getConexionBD();
            $rs = mysqli_query($cn, $sql);
            mysqli_close($cn);
        } catch (Exception $e) {
            $rs = null;
        }
        return $rs;
    }

    public function ActualizarDocente(DocentesBean $objDocentes) {
        try {
            $sql = "UPDATE docentes 
                    SET nombresDocente = '{$objDocentes->Nombre}', apellidosDocente = '{$objDocentes->Apellido}', 
                        correoDocente = '{$objDocentes->Correo}' 
                    WHERE idDocente = '{$objDocentes->IdDocente}'";
            $objCnx = new ConexionBD();
            $cn = $objCnx->getConexionBD();
            $rs = mysqli_query($cn, $sql);
            mysqli_close($cn);
        } catch (Exception $e) {
            $rs = null;
        }
        return $rs;
    }

    public function EliminarDocente(DocentesBean $objDocentes) {
        try {
            $sql = "DELETE FROM docentes WHERE idDocente = '{$objDocentes->IdDocente}'";
            $objCnx = new ConexionBD();
            $cn = $objCnx->getConexionBD();
            $rs = mysqli_query($cn, $sql);
            mysqli_close($cn);
        } catch (Exception $e) {
            $rs = null;
        }
        return $rs;
    }

    public function obtenerTodosLosDocentes() {
        $sql = "SELECT * FROM docentes";
        $objCnx = new ConexionBD();
        $cn = $objCnx->getConexionBD();
        $result = mysqli_query($cn, $sql);
        $docentes = [];

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $docentes[] = $row;
            }
        }

        mysqli_close($cn);
        return $docentes;
    }
}
?>