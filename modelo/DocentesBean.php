<?php
class DocentesBean {
    
    public $IdDocente;
    public $Nombre;                            
    public $Apellido;                            
    public $Correo;                               
    
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

}
?>