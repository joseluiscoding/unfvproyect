<?php
class UsuarioBean {
    public $correo;                                 //creo una atributo correo publico
    public $contraseña;                             //creo una atributo contraseña publico

    public function setCorreo($correo)              //recibo el parametro (el correo del formulario)
    {
        $this->correo = $correo;                    //guardo el correo del formulario en mi atributo $correo
    }
    
    public function setContraseña($contraseña)      //recibo el parametro (la contraseña del formulario)
    {
        $this->contraseña = $contraseña;            //guardo la contraseña del formulario en mi atributo $contraseña
    }

    public function getCorreo()                     //devuelve el valor del atributo $correo
    {
        return $this->correo;
    }
    
    public function getContraseña()                 //devuelve el valor del atributo $contraseña
    {
        return $this->contraseña;        
    }
}
?>