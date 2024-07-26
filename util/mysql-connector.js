function ingresar(){
    document.form.action = "controlador/loginControlador.php";           //me redirecciona a la direccion ...
    document.form.method = "GET";                                   //metodo de envio
    document.form.op.value = "1";                                   //op va a ser 1
    document.form.submit();                                         //para enviar
}

function registrarUsuario(){
    document.form.action = "controlador/usuarioControlador.php";           //me redirecciona a la direccion ...
    document.form.method = "GET";                                   //metodo de envio
    document.form.op.value = "1";                                   //op va a ser 1
    document.form.submit();                                         //para enviar
}