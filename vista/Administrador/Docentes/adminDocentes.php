<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminDoncentes</title>

    <link rel="stylesheet" type="text/css" href="../../../style.css" title="style"/>
    <link rel="stylesheet" href="adminDocentes.css">
    
    <script>

    function btnGuardar(){
        document.form.action = "../../../controlador/adminControlador.php";           //me redirecciona a la direccion ...
        document.form.method = "GET";                                   //metodo de envio
        document.form.op.value = "1";                                   //op va a ser 1
        document.form.submit();                                         //para enviar
    }

    </script>
</head>
<body>
    <header class="header">
        <img src="../../../imagenes/unfv-logo.png">
    </header>
    
    <nav class="navegador">
        <div class="opciones">
            <a href="../DashboardAdmin/inicioAdministrar.php">Inicio</a>
        </div>
        <div class="opciones">
            <a href="../Docentes/adminDoncentes.php">Docentes</a>
        </div>
        <div class="opciones">
            <a href="../Cursos/adminCursos.php">Cursos</a>
        </div>
        <div class="opciones">
            <a href="#">Horarios</a>
        </div>

        <div class="logout" >
            <input class="button" value="Cerrar Sesión" onclick="location.href='../../../index.php'">
        </div>
    </nav>
    
    <main class="cuerpo">
       <div class="contenedor">
            <div class="section1">
                <div class="title"> <img class=" logoDocentes" src="../../../imagenes/teacher.png" alt="logDocentes"> Docentes </div>
                <form name="form">
                    <input type="hidden" name="op">
                    <div class="form-group">
                        <span>Nombres</span>
                        <input class="controls" type="text" name="Nombre" id="text" placeholder="Ingrese Nombre">
                    </div>
                    <div class="form-group">
                        <span>Apellidos</span>
                        <input class="controls" type="text" name="Apellido" id="text" placeholder="Ingrese Apellido">
                    </div>
                    <div class="form-group">
                        <span>Correo</span>
                        <input class="controls" type="correo" name="Correo" id="correo" placeholder="Ingrese Correo">
                    </div>
                    <div class="form-group">
                        <span>Foto</span>
                        <input class="controls" type="file" name="image" id="image" style="display: none">
                        <button>
                            <label for="image"> IMG </label>
                        </button>
                    </div>
                    <input class="boton" type="button" value="Guardar" onclick="btnGuardar()">
                </form>

                <hr>
            </div>
            
            <div class="section2">
                <form action="">
                    <div class="form-group">
                        <input class="filtrador" type="text" name="text" id="text" placeholder="Buscar">
                    </div>
                    <input class="boton" type="button" value="Eliminar" onclick="">
                </form>

            </div>
       </div>
    </main>
</body>
</html>