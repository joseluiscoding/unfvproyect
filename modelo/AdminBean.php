<?php
class AdminBean {
    public $Nombre;                               
    public $Apellido;                               
    public $Correo;                             
    
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
}
?>