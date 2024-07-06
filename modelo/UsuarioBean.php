
<?php

class UsuarioBean{
    public $correo;
    public $contraseña;

    public function setContraseña($contraseña)
    {
        $this->contraseña = $contraseña;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    public function getContraseña()
    {
        return $this->contraseña;
    }
    
    public function getCorreo()
    {
        return $this->correo;
    }
}

?>