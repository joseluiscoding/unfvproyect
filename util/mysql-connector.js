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

function btnActualizarDocente(){
    document.form.action = "../../../controlador/docenteControlador.php";
    document.form.method = "GET";                               
    document.form.op.value = "2";                       
    document.form.submit();     
}

function btnEliminarDocente(idDocente){
    document.tabla.action = "../../../controlador/docenteControlador.php";
    document.tabla.method = "GET";                               
    document.tabla.op.value = "3";
    document.tabla.idDocente.value = idDocente;                               
    document.tabla.submit();     
}

function btnGuardarCursos(){
    document.form.action = "../../../controlador/cursoControlador.php";
    document.form.method = "GET";                               
    document.form.op.value = "1";                                
    document.form.submit();     
}

function btnActualizarCursos(){
    document.form.action = "../../../controlador/cursoControlador.php";
    document.form.method = "GET";                               
    document.form.op.value = "2";                          
    document.form.submit();     
}

function btnEliminarCursos(codCurso){
    document.tabla.action = "../../../controlador/cursoControlador.php";
    document.tabla.method = "GET";                               
    document.tabla.op.value = "3"; 
    document.tabla.codCurso.value = codCurso;                                    
    document.tabla.submit();     
}

function btnGuardarHorarios(){
    document.form.action = "../../../controlador/horarioControlador.php";
    document.form.method = "GET";                               
    document.form.op.value = "1";                                
    document.form.submit();     
}
