<?php
class UsuarioBean {
    public $id;                                     //creo una atributo id publico
    public $correo;                                 //creo una atributo correo publico
    public $contraseña;                             //creo una atributo contraseña publico
    public $tipoUsuario;
    public $nombresUsuario;
    public $apellidosUsuario;
    public $codAlumno; 
    
    public function setId($id)                      //recibo el parametro (el id del formulario)
    {
        $this->id = $id;                            //guardo el correo del formulario en mi atributo $id
    }

    public function setCorreo($correo)              //recibo el parametro (el correo del formulario)
    {
        $this->correo = $correo;                    //guardo el correo del formulario en mi atributo $correo
    }
    
    public function setContraseña($contraseña)      //recibo el parametro (la contraseña del formulario)
    {
        $this->contraseña = $contraseña;            //guardo la contraseña del formulario en mi atributo $contraseña
    }

    public function settipoUsuario($tipoUsuario)      
    {
        $this->tipoUsuario = $tipoUsuario;            
    }

    public function setnombresUsuario($nombresUsuario)      
    {
        $this->nombresUsuario = $nombresUsuario;            
    }

    public function setapellidosUsuario($apellidosUsuario)      
    {
        $this->apellidosUsuario = $apellidosUsuario;            
    }

    public function setCodAlumno($codAlumno)      // Cambiado a codAlumno
    {
        $this->codAlumno = $codAlumno;            
    }

    public function getId()                     //devuelve el valor del atributo $id
    {
        return $this->id;
    }

    public function getCorreo()                     //devuelve el valor del atributo $correo
    {
        return $this->correo;
    }
    
    public function getContraseña()                 //devuelve el valor del atributo $contraseña
    {
        return $this->contraseña;        
    }

    public function gettipoUsuario()
    {
        return $this->tipoUsuario;
    }
    
    public function getnombresUsuario()
    {
        return $this->nombresUsuario;
    }
    
    public function getapellidosUsuario()
    {
        return $this->apellidosUsuario;
    }

    public function getCodAlumno()               // Cambiado a codAlumno
    {
        return $this->codAlumno;
    }

}
?>