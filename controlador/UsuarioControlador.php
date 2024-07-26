<?php
header('Access-Control-Allow-Origin: *');
require_once '../modelo/UsuarioDao.php';
require_once '../modelo/UsuarioBean.php';

$op=$_GET["op"];
$objUserDao=new UsuarioDao();

switch ($op) {
    case 1:{                                    //Registrar Usuario
        $tipoUsuario=$_GET["TipoUsuario"];
        $nombres=$_GET["Nombres"];
        $apellidos=$_GET["Apellidos"];
        $email=$_GET["Email"];
        $password=$_GET["Password"];
        
        $objUserBean=new UsuarioBean();
        $objUserBean->settipoUsuario($email);
        $objUserBean->setnombresUsuario($password);
        $objUserBean->setapellidosUsuario($email);
        $objUserBean->setCorreo($email);
        $objUserBean->setContraseña($password);
        
        
        $res=$objUserDao->AddUsers($objUserBean);                   
        if ($res==1) {
            $men="Usuario Registrado Correctamente";
        }
        else {
            $men="Error al Registrar Usuario";
        }
        $response["state"]=$men;
        echo json_encode($response);
        break;
    }

    case 2:{                                    //Listar Usuarios
        $list=$objUserDao->ListUsers();
        echo json_encode($list);
        break;
    }

    case 3:{                                    //Borrar Usuario
        $id=$_GET["id"];
        $objUserBean=new UsuarioBean();
        $objUserBean->setId($id);
        $res=$objUserDao->RemoveUsers($objUserBean);
        if ($res==1) {
            $men="Record Correctly Deleted";
        }
        else {
            $men="Error when deleting the record";
        }
        $response["state"]=$men;
        echo json_encode($response);
        break;
    }

    case 4:{                                    //filtrar por id
        $user=$_GET["id"];
        $objUserBean=new UsuarioBean();
        $objUserBean->setId($user);
        $list=$objUserDao->FilterUserId($objUserBean);
        echo json_encode($list);
        break;
    }
}