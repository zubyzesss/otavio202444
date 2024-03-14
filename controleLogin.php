<?php 





if(isset($_GET['opc'])) {
    $opc = $_GET['opc'];

    switch($opc) {
        case 1:
            header('location:../View/login.php');
            break;
        case 2:
            require('../Model/Usuario.class.php');
            $email = $_GET['email'];
            $senha = $_GET['senha'];

            $x = new Usuario();
            $x->autenticar($email, $senha);

            break;
        case 3:
            header('location:../View/menu.php');
            break;
        case 4:
            header('location:../View/loginfail.php');
            break;
        default:
            
            break;
    }
}



?>