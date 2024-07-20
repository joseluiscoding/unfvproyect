<?php
header('Access-Control-Allow-Origin: *');
require_once '../modelo/UsuarioDao.php';
require_once '../modelo/UsuarioBean.php';

$op=$_GET["op"];
$objUserDao=new UsuarioDao();

switch ($op) {
    case 1:{                                    //Add
        $password=$_GET["Password"];
        $email=$_GET["Email"];
        $objUserBean=new UsuarioBean();
        $objUserBean->setCorreo($email);
        $objUserBean->setContraseña($password);
        
        $res=$objUserDao->AddUsers($objUserBean);                   
        if ($res==1) {
            $men="Record Inserted Correctly";
        }
        else {
            $men="Error inserting the record";
        }
        $response["state"]=$men;
        echo json_encode($response);
        break;
    }

    case 2:{                                    //Listar Usuario
        $list=$objUserDao->ListUsers();
        echo json_encode($list);
        break;
    }

    case 3:{
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
}