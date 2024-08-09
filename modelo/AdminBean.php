<?php
class AdminBean {
    public $IdDocente;
    public $Nombre;                               //del docente
    public $Apellido;                             //del docente
    public $Correo;                               //del docente
    public $CodCurso;                             //del curso
    public $NombreCurso;                          //del curso
    
    public function setIdDocente($IdDocente)                  
    {
        $this->IdDocente = $IdDocente;                        
    }
    
    public function setNombre($Nombre)                  
    {
        $this->Nombre = $Nombre;                        
    }

    public function setApellido($Apellido)          
    {
        $this->Apellido = $Apellido;                 
    }
    
    public function setCorreo($Correo)     
    {
        $this->Correo = $Correo;           
    }

    public function setCodCurso($CodCurso)                  
    {
        $this->CodCurso = $CodCurso;                        
    }

    public function setNombreCurso($NombreCurso)                  
    {
        $this->NombreCurso = $NombreCurso;                        
    }

    public function getIdDocente()                     
    {
        return $this->IdDocente;
    }

    public function getNombre()                     
    {
        return $this->Nombre;
    }

    public function getApellido()               
    {
        return $this->Apellido;
    }
    
    public function getCorreo()           
    {
        return $this->Correo;        
    }

    public function getCodCurso()           
    {
        return $this->CodCurso;        
    }

    public function getNombreCurso()           
    {
        return $this->NombreCurso;        
    }
}
?>