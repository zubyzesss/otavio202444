<?php



class Usuario{

    public function cadastrarUsuario($tipo, $email, $senha){
        $pdo = new PDO("mysql:host=localhost;dbname=registro_atraso","root","");
        $consulta = "INSERT INTO usuario VALUES (null,:tipo,:email,:senha)";
        $consultar = $pdo->prepare($consulta);
        $consultar->bindValue(":tipo", $tipo);
        $consultar->bindValue(":email", $email);
        $consultar->bindValue(":senha", $senha);
        $consultar->execute();
    }

    public function autenticar($email,$senha){
        $pdo = new PDO("mysql:host=localhost; dbname=registro_atraso","root","");
        $consulta = "select * from usuario where :email = email and :senha = senha";
        $consultafeita = $pdo->prepare($consulta);
        $consultafeita->bindValue(":senha", $senha);
        $consultafeita->bindValue(":email", $email);
        $consultafeita->execute();
        $x = $consultafeita->rowCount();
        if($x>0){
            /*session_start();]
            foreach ($consultafeita as $value) {
                $value['email'] = $_SESSION['email'];
                $value['senha'] = $_SESSION['senha'];

            }
            */
            header('location:../Control/controleLogin.php?opc=3');
        }else{
            header('location:../Control/controleLogin.php?opc=4');
        }

        }

    }

    

?>