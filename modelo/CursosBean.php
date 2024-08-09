<?php
class CursosBean {
    
    public $CodCurso;
    public $NombreCurso;

    public function setCodCurso($CodCurso)                  
    {
        $this->CodCurso = $CodCurso;                        
    }

    public function setNombreCurso($NombreCurso)                  
    {
        $this->NombreCurso = $NombreCurso;                        
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