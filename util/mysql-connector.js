function ingresar(){
    document.form.action = "controlador/loginControlador.php";          //me redirecciona a la direccion ...
    document.form.method = "GET";                                       //metodo de envio
    document.form.op.value = "1";                                       //op va a ser 1
    document.form.submit();                                             //para enviar
}

function registrarUsuario(){
    document.form.action = "../../controlador/usuarioControlador.php";
    document.form.method = "GET";
    document.form.op.value = "1";
    document.form.submit();
}

function btnGuardarDocentes(){
    document.form.action = "../../../controlador/docenteControlador.php";
    document.form.method = "GET";                               
    document.form.op.value = "1";                                
    document.form.submit();                                         
}

function btnGuardarCursos(){
    document.form.action = "../../../controlador/docenteControlador.php";
    document.form.method = "GET";                               
    document.form.op.value = "2";                                
    document.form.submit();     
}