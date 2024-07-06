function ingresar(){
    document.form.action = "controlador/Controlador.php";
    document.form.method = "GET";
    document.form.op.value = "1";
    document.form.submit();
}