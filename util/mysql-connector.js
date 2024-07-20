function ingresar(){
    document.form.action = "controlador/UsuarioControlador.php";           //me redirecciona a la direccion ...
    document.form.method = "GET";                                   //metodo de envio
    document.form.op.value = "1";                                   //op va a ser 1
    document.form.submit();                                         //para enviar
}