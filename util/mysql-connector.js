function ingresar(){
    
    if( !document.form.correo.value || !document.form.contraseña.value ){ 
        return;
    }
    
    document.form.action = "controlador/loginControlador.php";          //me redirecciona a la direccion ...
    document.form.method = "GET";                                       //metodo de envio
    document.form.op.value = "1";                                       //op va a ser 1
    document.form.submit();                                             //para enviar
}

function registrarUsuario(){
    
    if( !document.form.TipoUsuario.value || !document.form.Nombres.value || !document.form.Apellidos.value || !document.form.Email.value || !document.form.Password.value ){ 
        return;
    }
    
    document.form.action = "../../controlador/usuarioControlador.php";
    document.form.op.value = "1";
    document.form.method = "GET";
    document.form.submit();

}

function btnGuardarDocentes(){
    if( !document.form.Nombre.value || !document.form.Apellido.value || !document.form.Correo.value ){ 
        return;
    }
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
    Swal.fire({
        title: '¿Estás seguro que desea eliminar este docente?',
        text: "¡No podrás revertir esta acción!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            // Si el usuario confirma, redirigir al script de eliminación
            document.tabla.action = "../../../controlador/docenteControlador.php";
            document.tabla.method = "GET";                               
            document.tabla.op.value = "3";
            document.tabla.idDocente.value = idDocente;                               
            document.tabla.submit();
        }
    });
}

function btnGuardarCursos(){
    if( !document.form.CodCurso.value || !document.form.NombreCurso.value ){ 
        return;
    }
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
    Swal.fire({
        title: '¿Estás seguro que desea eliminar este curso?',
        text: "¡No podrás revertir esta acción!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            document.tabla.action = "../../../controlador/cursoControlador.php";
            document.tabla.method = "GET";                               
            document.tabla.op.value = "3"; 
            document.tabla.codCurso.value = codCurso;                                    
            document.tabla.submit();   
        }
    });
    
}

function btnGuardarHorarios(){
    if( !document.form.idDocente.value || !document.form.Curso.value || !document.form.TipoEscuela.value || !document.form.Ciclo.value || !document.form.Aula.value || !document.form.Seccion.value || !document.form.diaSemana.value || !document.form.HoraInicio.value || !document.form.HoraFin.value ){ 
        return;
    }
    document.form.action = "../../../controlador/horarioControlador.php";
    document.form.method = "GET";                               
    document.form.op.value = "1";                                
    document.form.submit();     
}

function btnActualizarHorarios(){
    document.form.action = "../../../controlador/horarioControlador.php";
    document.form.method = "GET";                               
    document.form.op.value = "2";                          
    document.form.submit();     
}

function btnEliminarHorario(N){
    
    Swal.fire({
        title: '¿Estás seguro que desea eliminar esta fila?',
        text: "¡No podrás revertir esta acción!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            document.tabla.action = "../../../controlador/horarioControlador.php";
            document.tabla.method = "GET";                               
            document.tabla.op.value = "3"; 
            document.tabla.N.value = N;                                    
            document.tabla.submit();
        }
    });
}