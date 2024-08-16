<?php
class HorarioBean {
    
    public $N;
    public $codCurso;                            
    public $idDocente;                            
    public $escuela;
    public $Ciclo; 
    public $aula;
    public $seccion;                            
    public $diaClases;                            
    public $horaInicio;      
    public $horaFin;                          
    
    public function setN($N)                  
    {
        $this->N = $N;                        
    }
    
    public function setcodCurso($codCurso)                  
    {
        $this->codCurso = $codCurso;                        
    }

    public function setIdDocente($idDocente)          
    {
        $this->idDocente = $idDocente;                 
    }
    
    public function setescuela($escuela)     
    {
        $this->escuela = $escuela;           
    }
    
    public function setCiclo($Ciclo)     
    {
        $this->Ciclo = $Ciclo;           
    }

    public function setaula($aula)                  
    {
        $this->aula = $aula;                        
    }

    public function setseccion($seccion)          
    {
        $this->seccion = $seccion;                 
    }

    public function setdiaClases($diaClases)                  
    {
        $this->diaClases = $diaClases;                        
    }

    public function sethoraInicio($horaInicio)          
    {
        $this->horaInicio = $horaInicio;                 
    }
    
    public function sethoraFin($horaFin)     
    {
        $this->horaFin = $horaFin;           
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